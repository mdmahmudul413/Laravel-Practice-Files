## **Show List From Database Table**

    ➢➢➢ How to make model and use??

        1. Make a view file name list.blade.php


        2. Make a controller name MemberController

            command: php artisan make:controller MemberController


        3. Make a function inside the controller

            class UserController extends Controller
            {
                function show(){
                    return "Hello from controller";
                } 
            }


        4. Make a route of this controller

            Add this at the top,
                
                use App\Http\Controllers\MemberController;

            Add this at the top bottom,
                
                Route::get('list', [MemberController::class, 'show']);


        5. Modify the function inside controller

            class UserController extends Controller
            {
                function show(){
                    return view('list');
                } 
            }


        6. Make a model name Mamber

            command: php artisan make:model Mamber


        7. Go to .env file to add db info 


        8. Import model inside the controller

            Add this line of code at the top, use App\Models\Member;


        9. Modify the function inside controller again

            class UserController extends Controller
            {
                function show(){
                    return Member::all();
                } 
            }
        

        10. Finally modify the function again and pass the table data to list.blade.php

            class UserController extends Controller
            {
                function getData(){
                    $data = Member::all();
                    return view('list', ['members' => $data]);
                } 
            }


        11. Now design the view(list.blade.php) and fetch data using foreach loop

            <h1>Member List</h1>
            <table border="1">
                <tr>
                    <td>SNO</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Contact</td>
                </tr>
                <tr>
                    @foreach($members as $member)
                    <tr>
                        <td>{{$member['sno']}}</td>
                        <td>{{$member['name']}}</td>
                        <td>{{$member['email']}}</td>
                        <td>{{$member['contact']}}</td>
                        
                    </tr>
                    @endforeach
                </tr>
            </table>
            
            
        12. then browse localhost/list