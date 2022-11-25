<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// direct routing without passing data
Route::view('about', 'about');

// direct routing without passing data using function
Route::get('/', function () {
    return view('welcome');
});

// derect routing with passing dynamic data
Route::get('/users/{name}', function ($name) {
    return view('users', ['name'=>$name]);
});

// call view from controller without passing dynamic data
Route::get("contact", [UserCon::class, "loadView"]);

// call view from controller without passing dynamic data
Route::get('services/{name}', [UserCon::class, 'viewload']);
