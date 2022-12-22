<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    function operation(){
//         To get full data in the view
//         $data = DB::table('members')->get();
//         return view('list', ['data' => $data]);
//
//         To find a data with id key using "where" condition
//         $data = DB::table('members')
//         ->where('id', 4)
//         ->get();
//         return view('list', ['data' => $data]);


//         To find a data with id key using "where" condition
//         $data = DB::table('members')
//         ->where('contact', '45678')
//         ->get();
//         return view('list', ['data' => $data]);


//         to find a data with find method. In this case we have to type casting
//         return DB::table('members')->find(4);


//         to count use count method.
//         return DB::table('members')->count();


//         Data Insertion
//         return DB::table('members')->insert([
//             'name' => "Muhammad",
//             'email' => "Muhammad@test",
//             'contact' => "234567890"
//         ]);


//         Data Updation
//         return DB::table('members')
//         ->where('id', 19)
//         ->update([
//             'name' => "Montu",
//             'email' => "Muhammad@test",
//             'contact' => "UK"
//         ]);


//         Data Deletion
//        return DB::table('members')
//        ->where('id', 19)
//        ->delete();

    }
}
