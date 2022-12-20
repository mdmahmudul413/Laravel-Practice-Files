## **delete Data from Database**

    ➢➢➢ How to delete Data from Database steps are given bellow

        1. Go to .env file to add db info 


        2. Make a view file name list.blade.php


        3. Create a table in list.blade.php 

            <h1>Member List</h1>
            <table border="1">
                <tr>
                    <td>SNO</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Contact</td>
                    <td>Operation</td>
                </tr>
            </table>



        4. Make a route of this view file

            Route::view('list', 'list');

        
        5. Make a controller name MemberController

            command: php artisan make:controller MemberController


        6. Make a function inside the controller

            function list(){
                return view('list');
            }


        7. Make a route of this controller

            Add this at the top,
                
                use App\Http\Controllers\MemberController;

            Add this at the top bottom,
                
                Route::get('list', [MemberController::class, 'list']);


        8. Make a model name Mamber

            command: php artisan make:model Member


        9. Import model inside the controller

            Add this line of code at the top, use App\Models\Member;

        
        10. Modify the function inside controller

            function list(){
                $member = new Member;
                $data = $member->all();
                return view('list', ['members' => $data]);
            }

        
        11. Modify the view file list.blade.php

            <h1>Member List</h1>
            <table border="1">
                <tr>
                    <td>SNO</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Contact</td>
                    <td>Operation</td>
                </tr>
                @foreach($members as $member)
                <tr>
                    <td>{{$member['id']}}</td>
                    <td>{{$member['name']}}</td>
                    <td>{{$member['email']}}</td>
                    <td>{{$member['contact']}}</td>
                </tr>
                @endforeach
            </table>


        12. Add another function for delete functionality in the controller

            class MemberController extends Controller
            {
                function list(){
                    $member = new Member;
                    $data = $member->all();
                    return view('list', ['members' => $data]);
                }

                function delete($id){
                    $data = Member::find($id);
                    $data->delete();
                    return redirect('list');
                }
            }

        
        13. Modify the view file list.blade.php again for deleting data

            <h1>Member List</h1>
            <table border="1">
                <tr>
                    <td>SNO</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Contact</td>
                    <td>Operation</td>
                </tr>
                @foreach($members as $member)
                <tr>
                    <td>{{$member['id']}}</td>
                    <td>{{$member['name']}}</td>
                    <td>{{$member['email']}}</td>
                    <td>{{$member['contact']}}</td>
                    <td><a href={{"delete/".$member['id']}}>Delete</a></td>
                </tr>
                @endforeach
            </table>


        14. Make route for the delete function 

            Route::get('delete/{id}', [MemberController::class, 'delete']);
        