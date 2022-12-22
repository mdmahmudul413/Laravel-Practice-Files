<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function operations(){
//         full table
//         return DB::table('members')->get();

//         get a field of a table
//         return DB::table('members')->get('id');

//         sum of a field
//         return DB::table('members')->sum('id');

//         min of a field
         return DB::table('members')->min('id');

//         max of a field
//         return DB::table('members')->max('id');

//         we can apply this aggregate methods in every field
//         return DB::table('members')->min('name');

//         we can apply this aggregate methods in every field
//        return DB::table('members')->avg('id');
    }
}
