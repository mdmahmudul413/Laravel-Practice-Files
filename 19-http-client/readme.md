## **Http Client**

    ➢➢➢ what is http client??

     We sometimes need to get data from api, we can do this job by the help of http client. its a system provided by laravel which communicate to other system to use their api for getting their data.

    ➢➢➢ How to use this system in laravel?

        1. At first, make a controller
        
            command: php artisan make:controller UserController

        2. Make a route for the controller

            Add this line at the top,

                use App\Http\controllers\UserController;

            Add this line at the bottom,
            
                Route::get('users', [UserController::class, 'index']);

        3. Write a function index in the controller

            class UserController extends Controller
            {
                function index(){
                    echo "api call from here"; // testing purpose
                }
            }

        4. For making api call we have to import a library in the controller

            use Illuminate\Support\Facades\Http;

        5. Modify the function in the controller

            function index(){
                    return Http::get("https://reqres.in/api/users?page=1");
            }

    ➢➢➢ To render this data to html table we have to make view

        6. Make a view users.blade.php

        7. Call the view from controller(Modify the function)

            function index(){
                    $data = Http::get("https://reqres.in/api/users?page=1");
                    return view('users', ['collection' => $data['data']]);
            }

        8. Now we can make a table in the users.blade.php to view these data in a tabular form

            <h1>Users List</h1>

            <table border="5">

                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Profile Picture</td>
                </tr>

                @foreach($collection as $user)
                <tr>

                    <td>{{$user['id']}}</td>
                    <td>{{$user['first_name']}}</td>
                    <td>{{$user['email']}}</td>
                    <td><img src="{{$user['avatar']}}" alt=""></td>

                </tr>
                @endforeach

            </table>


        