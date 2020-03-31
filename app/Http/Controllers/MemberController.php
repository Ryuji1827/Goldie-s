<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function member_show() 
    {
        return view('member.member');
    }
}
