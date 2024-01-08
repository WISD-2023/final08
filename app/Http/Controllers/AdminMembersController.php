<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class AdminMembersController extends Controller
{
    public function index()
    {
        $admins=Admin::orderBy('user_id','DESC')->get();

        //dd($members);
        $date =[
            'admins'=>$admins

        ];
        return view('admin.members.index',$date);

    }

    public function create()
    {
        return view('admin.members.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|max:50',

        ]);
//dd ($request);
        Admin::create($request->all());
        return redirect(route('admin.members.index'));
    }

    public function edit(User $member)
    {
        $data = [
            'member' => $member,
        ];

        return view('admin.members.edit', $data);
    }

    public function update(Request $request, User $member)
    {
        $this->validate($request, [
            'id	' => 'required|max:50',
            'name' => 'required',
            'email' => 'required|max:50',
        ]);
        $member->update($request->all());

        return redirect()->route('admin.members.index');
    }

    public function destroy(Admin $admin)
    {
        //dd($admin);
        $admin->delete();
        return redirect()->route('admin.members.index');
    }
}
