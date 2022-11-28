<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuth extends Controller
{
    function userLogin(Request $req){
        $data = $req->input('user');
        $req->session()->put('user', $data);
        return redirect('profile');
    }
}
