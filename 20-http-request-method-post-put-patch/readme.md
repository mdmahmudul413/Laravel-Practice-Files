## **Http Request Method Post Put Patch**

    ➢➢➢ What is http(hyper text transfer protocol) request method?

        ➾ When we visit a page and submit data, update data, modify data or delete data, these oparations are executed 
           through Http. Http has many methods which are called Http request method.

        ➾ Thre are differnt kinds of Http Request Method, GET, POST, PUT, DELETE, HEAD, PATCH, OPTIONS.

        ➾ GET, POST, PUT and DELETE methods are mostly use in every project.

        ➾ These methods are normally use to submit form but when we work with API, we must have to use these methods.

        ➾ We can finalize our target at the time of form submission by the use of only two methods GET and POST but
           at the time of working with API we have to use all the Http Request Methods.



    ➢➢➢ How to use this method?

        1. Make a controller

            command: php artisan make:controller UserController



        2. Make a function inside the controller

            class UserController extends Controller
            {
                function testRequest(){
                    
                }
            }



        3. Make a view like, users.blade.php



        4. Make route for the view

            Route::view('login', 'users');



        5. Now we can make a form in the view

            <h1>User Login</h1>
            <form action="users" method="GET">
                <input type="text" name="user" placeholder="Enter your username"><br><br>
                <input type="password" name="password" placeholder="Enter your password"><br><br>
                <button type="submit">Login</button>
            </form>

        ➠ Note: Form action must be the path where we want to submit data.



        6. make route for the controller

            Add this line at the top,

                use App\Http\Controllers\UserController;

            Add this line at the bottom,
            
                Route::delete('users', [UserController::class, 'testRequest']);



        7. Define the form 'method' get, post, etc and the method will be the same in the controller route.
        


        8. modify the controller function 

            function testRequest(){
                    echo "form submitted";
            }

        ➠ Note: When we use 'get' method, data will submit through URL

        ➠ Note: When we use 'get' method, user and pass will visible in the url but in post method it doesn't. for 
           this reason, get method is not a safe method.



        9. Now to see the submitted data in the view, we have to modify the function in the controller again

            function testRequest(Request $req){
                    return $req->input();
            }



        10. If we want to use POST method. Some changes wll be needed.

            So the modification in the method of form will be,

                <h1>User Login</h1>
                <form action="users" method="POST">
                    @csrf
                    <input type="text" name="user" placeholder="Enter your username"><br><br>
                    <input type="password" name="password" placeholder="Enter your password"><br><br>
                    <button type="submit">Login</button>
                </form>

            And the modification in the route,

                Route::post('users', [UserController::class, 'testRequest']);
                
            ➠ At the time of POST, data will not sumbit through URL. It will submit directly. And POST method is safe
               for submitting data instead of the GET method.

            ➠ Note: We have to always keep match the both method of form and route. if there is missmatch, data will not pass.  
            
            ➠ Note: Except GET method, We should always add a @csrf token in the form. 



        11. If we want to use PUT method. Some changes wll be needed.

            So the modification in view will be,

                <h1>User Login</h1>
                <form action="users" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <input type="text" name="user" placeholder="Enter your username"><br><br>
                    <input type="password" name="password" placeholder="Enter your password"><br><br>
                    <button type="submit">Login</button>
                </form>

            And the modification in the route,

                Route::put('users', [UserController::class, 'testRequest']);
                
            ➠ Two hidden field will submit at the time of PUT method _token and _method.



        12. If we want to use DELETE method. Some changes wll be needed.

            So the modification in view will be,

                <h1>User Login</h1>
                <form action="users" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="text" name="user" placeholder="Enter your username"><br><br>
                    <input type="password" name="password" placeholder="Enter your password"><br><br>
                    <button type="submit">Login</button>
                </form>

            And the modification in the route,

                Route::delete('users', [UserController::class, 'testRequest']);
                
            ➠ Two hidden field will submit at the time of PUT method _token and _method.



    ➠ Note: GET is used for data fetching, POST is used for data inserting or saving, PUT is used for data 
       updating, DELETE is for deleting data.

    ➠ HEAD method is by default always sent.



