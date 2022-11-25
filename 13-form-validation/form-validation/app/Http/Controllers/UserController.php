<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getdata(Request $req){
        $req->validate([
            'userName' => 'required | max:10',
            'passWord' => 'required | min:5',
        ]);
       return $req->input();
    }
}
