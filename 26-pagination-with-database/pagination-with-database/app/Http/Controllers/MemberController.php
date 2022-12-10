<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function show(){
        $data = Member::paginate(2);
        return view('list', ['members' => $data]);
    }
}
