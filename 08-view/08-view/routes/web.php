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

Route::get('/', function () {
    return view('welcome');
});

// passing data from derect routing
Route::get('/user/{name}', function ($name) {
    return view('users', ['name'=>$name]);
});

// passing data from controller 
// Route::get("user/{name}", [UserCon::class, "loadView"]);