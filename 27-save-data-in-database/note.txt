## **Save Data in Database**

    ➢➢➢ How to Save Data in Database steps are given bellow

        1. Go to .env file to add db info 


        2. Make a view file name addMembers.blade.php


        3. Create a form in addMembers.blade.php 

            <h1>Add Members</h1>
            <form action="" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Enter Name"><br><br>
                <input type="email" name="email" placeholder="Enter Email"><br><br>
                <input type="text" name="contact" placeholder="Enter Contact"><br><br>
                <button type="submit">Add Member</button>
            </form>


        4. Make a route of this view file

            Route::view('add', 'addmembers');

        
        5. Make a controller name MemberController

            command: php artisan make:controller MemberController


        6. Make a function inside the controller

            class UserController extends Controller
            {
                function addData(Request $req){
                    return $req->all(); 
                }
            }


        7. Make a route of this controller

            Add this at the top,
                
                use App\Http\Controllers\MemberController;

            Add this at the top bottom,
                
                Route::post('add', [MemberController::class, 'addData']);


        8. Add form action value in the addMembers.blade.php 

            <h1>Add Members</h1>
            <form action="add" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Enter Name"><br><br>
                <input type="email" name="email" placeholder="Enter Email"><br><br>
                <input type="text" name="contact" placeholder="Enter Contact"><br><br>
                <button type="submit">Add Member</button>
            </form>


        9. Make a model name Mamber

            command: php artisan make:model Mamber


        10. Import model inside the controller

            Add this line of code at the top, use App\Models\Member;

        
        11. Modify the function inside controller

            class MemberController extends Controller
            {
                function addData(Request $req){
                    $member = new Member;
                    $member->name = $req->name;
                    $member->email = $req->email;
                    $member->contact = $req->contact;
                    $member->save();
                }
            }


        12. Go to App\Models\Member.php and add this line "public $timestamps = false;"

            class Member extends Model
            {
                use HasFactory;
                public $timestamps = false;
            }

        Note: Without adding this line, it will give an error of "Unknown column 'updated_at'"...


        13. Modify the function for redirecting it to view file to enter another new entry

            class MemberController extends Controller
            {
                function addData(Request $req){
                    $member = new Member;
                    $member->name = $req->name;
                    $member->email = $req->email;
                    $member->contact = $req->contact;
                    $member->save();
                    return redirect('add');
                }
            }