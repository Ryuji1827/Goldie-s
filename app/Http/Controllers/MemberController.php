<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function member_show() 
    {
        return view('member.member');
    }

    public function mai()
    {
        return view('member.mai');
    }

    public function airi()
    {
        return view('member.airi');
    }

    public function mihiro()
    {
        return view('member.mihiro');
    }

    public function ayaka()
    {
        return view('member.ayaka');
    }

    public function moe()
    {
        return view('member.moe');
    }
}
