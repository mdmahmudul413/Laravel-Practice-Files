## **Make Html Form and get Value**

    ➢ First of all create a Form at an individual blade file, suppose users.blade.php
        
        <form action="users" method="POST">
            @csrf
            <input type="text" name="userName" placeholder="Enter Your username">
            <br><br>
            <input type="password" name="passWord" placeholder="Enter Your password">
            <br><br>
            <button type="submit">Login</button>
        </form>

    ➢ Make route for that blade file
        
        Route::view('login', 'users');
    
    ➢ Create a controller, suppose the name of the controller is UserController
        
        Command: php artisan make:controller UserController

    ➢ Define the function inside the controller

        function getdata(Request $req){
            return $req->input();
        }

    ➢ Make route for the created function

        Route::post('users', [UserController::class, 'getdata']);
