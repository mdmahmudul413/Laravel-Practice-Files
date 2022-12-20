## **Update Data in Database**

    ➢➢➢ How to Update Data in Database steps are given bellow

        1. Go to .env file to add db info 



        2. Make a view file name list.blade.php



        3. Create a table inside list.blade.php

            <h1>Member List</h1>
            <table border="1">
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>Operation</td>
                </tr>
            </table>



        3. Create another view file name edit.blade.php & create a form inside there 

            <h1>Update Member</h1>
            <form action="/edit" method="POST">
                @csrf
                <input type="hidden" name="id">
                <input type="text" name="name"><br><br>
                <input type="email" name="email"><br><br>
                <input type="address" name="contact"><br><br>
                <button type="submit">Update</button>
            </form>



         5. Make a controller name MemberController

            command: php artisan make:controller MemberController



        9. Make a model name Member

            command: php artisan make:model Member



        10. Import model inside the controller

            Add this line of code at the top, use App\Models\Member;



        6. Make a function inside the controller to return the view list.blade.php with member table data

            class MemberController extends Controller
            {
                public function list(){
                    $member = new Member();
                    $data = $member->all();
                    return view('list', ['members' => $data]);
                }
            }



        4. Make a route of view file list.blade.php

            at the top,

                use App\Http\Controllers\MemberController;

            at the bottom,

                Route::get('list', [MemberController::class, 'list']);



        5. Modify the table inside list.blade.php

            <h1>Member List</h1>
            <table border="1">
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>Operation</td>
                </tr>

                @foreach($members as $member)
                <tr>
                    <td>{{$member['id']}}</td>
                    <td>{{$member['name']}}</td>
                    <td>{{$member['email']}}</td>
                    <td>{{$member['contact']}}</td>
                    <td style="text-align: center;">
                        <a href={{"edit/" . $member['id']}}>Edit</a>
                    </td>
                </tr>
                @endforeach

            </table>



        7. Make the route of edit.blade.php file

            Route::get('edit/{id}', [MemberController::class, 'showData']);



        5. Modify the form inside edit.blade.php

            <h1>Update Member</h1>
            <form action="" method="POST">
                @csrf
                <input type="hidden" name="id" value={{$data['id']}}>
                <input type="text" name="name" value='{{$data['name']}}'><br><br>
                <input type="email" name="email" value='{{$data['email']}}'><br><br>
                <input type="address" name="contact" value='{{$data['contact']}}'><br><br>
                <button type="submit">Update</button>
            </form>
        
       

        6. Make a function inside the controller for returning the view file edit.blade.php

            class UserController extends Controller
            {
                public function showData($id){
                    $data = Member::find($id);
                    return view('edit', ['data' => $data]);
                }
            }



        8. Add form action value in the addMembers.blade.php 
            
            <h1>Update Member</h1>
            <form action="/edit" method="POST">
                @csrf
                <input type="hidden" name="id" value={{$data['id']}}>
                <input type="text" name="name" value='{{$data['name']}}'><br><br>
                <input type="email" name="email" value='{{$data['email']}}'><br><br>
                <input type="address" name="contact" value='{{$data['contact']}}'><br><br>
                <button type="submit">Update</button>
            </form>



        11. create the functionality inside controller for updating data

            class MemberController extends Controller
            {
                public function update(Request $request){
                    $data = Member::find($request->id);
                    $data->name = $request->name;
                    $data->email = $request->email;
                    $data->contact = $request->contact;
                    $data->save();
                    return redirect('list');
                }
            }



        12. Make the route of update function

            Route::post('edit', [MemberController::class, 'update']);
