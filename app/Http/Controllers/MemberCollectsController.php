<?php

namespace App\Http\Controllers;
use App\Models\Collect;
use App\Models\Post;
use Illuminate\Http\Request;

class MemberCollectsController extends Controller
{
    public function index()
    {
        $collects = Collect::orderBy('id','DESC')->get();
        //dd($collects);
        $date =[
            'collects'=>$collects
        ];
        return view('member.collects.index',$date);

    }

    public function create()
    {
        return view('member.collects.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'content' => 'required',
            'is_feature' => 'required|boolean',   //請加入is_feature欄位的驗證規則
        ]);

        Post::create($request->all());
        return redirect(route('member.collects.index'));
    }

    public function edit(Post $post)
    {
        $data = [
            'post' => $post,
        ];

        return view('member.collects.edit', $data);
    }

    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'content' => 'required',
            'is_feature' => 'required|boolean',
        ]);
        $post->update($request->all());

        return redirect()->route('member.collects.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('member.collects.index');
    }
}
