## **Routed Middleware**

    ➢➢➢ What is Routed middleware?

        If we want to attemp middleware on a specific page then we have to use Routed middleware

    ➢➢➢ How to make and use Routed middlemare?

        1. Make multiple views like,

            users.blade.php, home.blade.php, noaccess.blade.php

        2. Make route of those views, 

            Route::view('users', 'users');
            Route::view('home', 'home');
            Route::view('noaccess', 'noaccess');

        3. make middlware, 

            command: php artisan make:middleware checkAge

        4. Register middleware in the app/http/kernel.php

            protected $routeMiddleware = [
                'protectedPage' => \App\Http\Middleware\checkAge::class,
                'auth' => \App\Http\Middleware\Authenticate::class,
                'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
                'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
                'can' => \Illuminate\Auth\Middleware\Authorize::class,
                'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
                'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
                'signed' => \Illuminate\Routing\Middleware\ValidateSigna    ture::class,
                'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
                'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
            ];

        5. apply routed middleware in specific view,
            
            Route::view('users', 'users')->middleware('protectedPage');
            Route::view('home', 'home');
            Route::view('noaccess', 'noaccess');

        6. write conditions in the chekAge.php file 

            public function handle(Request $request, Closure $next)
            {
                if($request->age && $request->age<18){
                    return redirect('noaccess');
                }
                return $next($request);
            }

        7. Here we applied routed middleware at users page. So we can now check the routed middle is working or not

            a. hit: http://127.0.0.1:8000/users?age=30 it will not redirect 
               to noaccess page. 

            b. hit: http://127.0.0.1:8000/users?age=13 it will redirect 
               to noaccess page.  
            
