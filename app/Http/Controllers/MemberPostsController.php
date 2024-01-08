<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class MemberPostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id','DESC')->get();
        //dd($posts);
        $date =[
            'posts'=>$posts
        ];
        return view('member.posts.index',$date);

    }

    public function create()
    {
        return view('member.posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'content' => 'required',
            'poster' => 'required',
            'is_feature' => 'required',

        ]);

        Post::create($request->all());
        return redirect(route('member.posts.index'));
    }

    public function edit(Post $post)
    {
        $data = [
            'post' => $post,
        ];

        return view('member.posts.edit', $data);
    }

    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'content' => 'required',
            'is_feature' => 'required|boolean',
        ]);
        $post->update($request->all());

        return redirect()->route('member.posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('member.posts.index');
    }
}
