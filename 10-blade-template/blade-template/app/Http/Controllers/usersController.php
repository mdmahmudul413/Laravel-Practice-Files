<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    function loadView(){
        $users = ['anil', 'sam', 'mukit'];
        return view('users', ['names' => $users]);
    }
}
