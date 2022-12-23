<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    function getData(){

//        get data from employee table
//        return DB::table('employee')->get();

//         joins query
//         return DB::table('employee')
//         ->join('company', 'employee.id', '=', 'company.employee_id')
//         ->get();


//         joins query with select key word(when we need only one table data)
//         return DB::table('employee')
//         ->join('company', 'employee.id', '=', 'company.employee_id')
//         ->select('company.*')
//         ->get();

//         joins query with select key word(when we need multiple table data)
//         return DB::table('employee')
//         ->join('company', 'employee.id', '=', 'company.employee_id')
//         ->select('company.*', 'employee.*')
//         ->get();

//         joins query with where key word
//         return DB::table('employee')
//         ->join('company', 'employee.id', '=', 'company.employee_id')
//         ->where('employee.name', 'redoan')
//         ->get();


//         joins query with where key word
//         return DB::table('employee')
//         ->join('company', 'employee.id', '=', 'company.employee_id')
//         ->where('employee.id', '2')
//         ->get();


//         joins query with where & select key word
//        return DB::table('employee')
//        ->join('company', 'employee.id', '=', 'company.employee_id')
//        ->where('employee.id', '2')
//        ->select('employee.name')
//        ->get();



    }
}
