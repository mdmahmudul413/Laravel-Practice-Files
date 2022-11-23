## **View**

    ➢ What is view??
        ➾ Its a part of MVC(Model View Controller) framework. 

    ➢ What we do inside view?
        ➾ Inside view, we store our total html part which we want to show the user.

    *** We can call view from controller or directly from routing file.
    *** view is situated at resource/views

    ➢➢Call view by route, 

    a. Goto web.php
        write,  
            Route::view('path', 'view_name'); 

    b. Goto web.php

        write, 
            Route::get('/path', function () {
                return view('view_name');
            });

    ➢➢ To pass dynamic data 

        web.php:
            Route::get('/user/{name}', function ($name) {
                return view('users', ['name'=>$name]);
            });

    c. users.blade.php:

            <h1>Hello {{$name}}</h1>


    @@call view by controller,

    a. Generate controller by command line,
            php artisan make:controller UserCon

    b. users.blade.php:
            <h1>Hello Guys</h1>

    c. UserCon.php 

        write these codes,
            class UserCon extends Controller
            {
                function loadView(){
                    return view('users');
                }
            }

    d. web.php

        write these codes,
            use App\Http\Controllers\UserCon;
            Route::get("user", [UserCon::class, "loadView"]);

    ➢➢ To pass dynamic data 

    a. users.blade.php:
            <h1>Hello {{$name}}</h1>

    b. UserCon.php 

        write these codes,
            class UserCon extends Controller
            {
                function loadView($name){
                    return view('users', ['name'=>$name]);
                }
            }

    d. web.php

        write these codes,
            use App\Http\Controllers\UserCon;
            Route::get("user/{name}", [UserCon::class, "loadView"]);

