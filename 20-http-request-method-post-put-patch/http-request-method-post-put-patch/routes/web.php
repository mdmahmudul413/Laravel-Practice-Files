<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::view('login', 'users');

// GET METHOD
// Route::get('users', [UserController::class, 'testRequest']);
// POST METHOD
// Route::post('users', [UserController::class, 'testRequest']);
// PUT METHOD
// Route::put('users', [UserController::class, 'testRequest']);
// DELETE METHOD
Route::delete('users', [UserController::class, 'testRequest']);