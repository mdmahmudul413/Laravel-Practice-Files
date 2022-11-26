## **Group Middleware**

    ➢➢➢##What is group middleware?

         when we apply a middleware on some specific pages, it called group middleware.

    ➢➢➢How to make and use it??

        1. command: php artisan make:middleware checkAge

           Note: command is same in all types of middleware, there are little bit change in the registry in the app/http/kernel.php file.

        2. make some views like users.blade.php, home.blade.php, noaccess.blade.php, etc

        3. Then, make routes of those views.

        4. Then, register the middleware in the kernel like bellow.
        
                'api' => [
                    // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
                    'throttle:api',
                    \Illuminate\Routing\Middleware\SubstituteBindings::class,
                ],

                'protectedPage'=>[
                    \App\Http\Middleware\checkAge::class,
                ]
            
            Note: 'protectedPage' is a sample group key name. we can use anything we like.

        5. In web.php, we will create the routes

            Route::view('home', 'home');

            Route::view('noaccess', 'noaccess');

            Route::group(['middleware'=>['protectedPage']], function(){
                Route::view('users', 'users');
                Route::get('/', function () {
                    return view('welcome');
                });
            });

        6. in checkAge.php

            public function handle(Request $request, Closure $next)
                {
                    if($request->age && $request->age<18){
                        return redirect('noaccess');
                    }
                    return $next($request);
                }