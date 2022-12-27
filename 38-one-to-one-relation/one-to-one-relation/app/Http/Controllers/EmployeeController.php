<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
// use App\Models\Company;

class EmployeeController extends Controller
{
    function index(){
        // to get the data whose id 1
        return Employee::find(1)->companyData;
        // return Employee::all();
    }
}
