## **Session With Login**

    ➢➢➢ What is session??

        we use session to authenticate users.

    ➢➢➢ How to creat and use session?
    
        1. Make a view like login.blade.php. Then, make a simple login form here

            <h1>User Login</h1>
            <form action="user" method="post">
                @csrf
                <input type="text" name="user" placeholder="Enter your name"><br><br>
                <input type="password" name="password" placeholder="Enter your password"><br><br>
                <button type="submit">Login</button>
            </form>


        2. Make a controller name UserAuth


        3. Make a function inside the controller.
            class userAuth extends Controller
            {
                function userLogin(Request $req){
                    return $req->input();
                }
            }


        4. make a route of the controller.

            use App\Http\Controllers\userAuth;
            Route::post('user', [userAuth::class, "userLogin"]);


        5. make a route of login page also

            Route::view('login', 'login');


        ➠ Note: when we get 419 page expired. It means we have to add @csrf in the html form

        7. now to store this data in the sassion, we have to modify the function in the controller and check if the data is stored or not.

                class userAuth extends Controller
                {
                    function userLogin(Request $req){
                        $data = $req->input('user');
                        $req->session()->put('user', $data);
                        echo session('user');
                    }
                }

        8. Now we make a view name profile.blade.php and use this stored session in that page.
                <h1>Profile</h1>
                <h2>Hello, {{session('user')}}</h2>

        9. make a path of this view
        Route::view('profile', 'profile');

        10. modify the function in the controller

                class userAuth extends Controller
                {
                    function userLogin(Request $req){
                        $data = $req->input('user');
                        $req->session()->put('user', $data);
                        return redirect('profile');
                    }
                }

        11. we can delete the session stored data by adding a logout functionality on the profile page

                <h1>Profile</h1>
                <h2>Hello, {{session('user')}}</h2>
                <a href="logout">Logout</a>

        12. Now, we can define a logout route in web.php

                Route::get('/logout', function () {
                    if(session()->has('user')){
                        session()->pull('user', null);
                    }
                    return redirect('login');
                });

        13. we have to modify the login route because when session is stored the login view should not open except we destroy the session 

                Route::get('/login', function () {
                    if(session()->has('user')){
                        return redirect('profile');
                    }
                    return view('login');
                });
