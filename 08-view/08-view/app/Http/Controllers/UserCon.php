<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCon extends Controller
{
    function loadView(){
        return view('contact');
    }

    function viewload($name){
        return view('services', ['name' => $name]);
    }
}
