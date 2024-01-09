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

    public function create(Post $request)
    {
        //$data = [
        //    'post' => $post,
        //];

        dd($request);
        //return view('member.collects.create',$data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'content' => 'required',
            'is_feature' => 'required|boolean',
            'poster' => 'required|boolean',
            'collected' => 'required|boolean',
        ]);

        Post::create($request->all());
        return redirect(route('member.collects.index'));
    }

    public function edit(Post $post)
    {
        $data = [
            'post' => $post,
        ];
//dd($data );
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

    public function destroy(Collect $collect)
    {
//dd($collect);
        $collect->delete();

        return redirect()->route('member.collects.index');
    }
}
