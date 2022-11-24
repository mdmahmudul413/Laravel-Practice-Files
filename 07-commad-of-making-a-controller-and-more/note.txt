## **commad of making a controller and more**

        1. To make a controller,
 	        command: php artisan make:controller NewController

        2. controller will find at app\Http\controllers\NewController

        3. Then we have to write a function like,
            class NewController extends Controller
                {
                    function show(){
                        return  "Hello from Controller";
                    }
                }
                
        3. To make Route,
            ➣ Go to Route\web.php
                a. add - use App\Http\Controllers\userController; at the top
                b. add - Route::get("user", [userController::class, "show"]); at bottom

        4. now visit - localhost:8000/user

        ➣➣➣ AND, IF WE WANT TO PASS A VALUE, 

        1. To make a controller,
 	        command: php artisan make:controller NewController

        2. controller will find at app\Http\controllers\NewController

        3. Then we have to write a function like,
            class userController extends Controller
                {
                    function show($id){
                        return  "Hello from Controller ".$id;
                    }
                }

        3. To make Route,
            Go to Route\web.php
                a. add - use App\Http\Controllers\userController; at the top
                b. add - Route::get("user\{$id}", [userController::class, "show"]); at bottom

        4. now visit - localhost:8000/user/id
