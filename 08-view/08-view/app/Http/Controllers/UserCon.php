<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCon extends Controller
{
    function loadView($name){
        return view('users', ['name'=>$name]);
    }
}
