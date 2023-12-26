<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberHomeController extends Controller
{
    public function index()
    {
        return view('member.dashboard.index');
    }
}
