## **View**

    ➢ What is view??
        ➾ Its a part of MVC(Model View Controller) framework. 

    ➢ What we do inside view?
        ➾ Inside view, we store our total html part which we want to show the user.

    *** We can call view from controller or directly from routing file.
    *** view is situated at resource/views

    ➢➢ Without passing dynamic data call view by direct routing, 

    a. Goto web.php
        write,  
            Route::view('path', 'view_name'); 

    b. Goto web.php

        write, 
            Route::get('/path', function () {
                return view('view_name');
            });

        Note: a and b both same

    ➢➢ Passing dynamic data in direct routing

    a.  web.php,
            Route::get('/user/{name}', function ($name) {
                return view('users', ['name'=>$name]);
            });

    b. users.blade.php:

            <h1>Hello {{$name}}</h1>


    ➢➢ Without passing dynamic data call view by controller,

    a. Generate controller by command line,
            php artisan make:controller UserCon

    b. Inside UserCon.php, 

        write these codes,
            class UserCon extends Controller
            {
                function loadView(){
                    return view('users');
                }
            }

    c. web.php

        write these codes,
            use App\Http\Controllers\UserCon;
            Route::get("user", [UserCon::class, "loadView"]);

    ➢➢ Passing dynamic data in calling view by controller 
    
    a. Generate controller by command line,
            php artisan make:controller UserCon

    b. UserCon.php 

        write these codes,
            class UserCon extends Controller
            {
                function loadView($name){
                    return view('users', ['name'=>$name]);
                }
            }

    c. web.php

        write these codes,
            use App\Http\Controllers\UserCon;
            Route::get("user/{name}", [UserCon::class, "loadView"]);
    
    d. users.blade.php:
            <h1>Hello {{$name}}</h1>

