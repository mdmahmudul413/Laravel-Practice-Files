<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function index(){
        $member = new Member;
        $member->name = "bruce";
        $member->email = "bruce@gmail.com";
        $member->contact = "1686211413";
        $member->save();
    }
}
