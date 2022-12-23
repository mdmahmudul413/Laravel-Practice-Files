## **Query Builder**

    ➢➢➢ In laravel, we can connect with database in two ways
    
        a. Using laravel class "DB" [ Query Builder ]
        b. Using Model [ Eloquent ORM(object-relational mapper) ]
        
    ➢➢➢ How to use Query Builder steps are given bellow
    
        1. Go to .env file to add db info 


        2. Make a controller name MemberController
        
            command: php artisan make:controller MemberController
                    
                    
        3. Make a function inside the controller
        
            class MemberController extends Controller
            {
                function operation(){
                    ehco 'Code will be here';
                }
            }
            
            
        4. Make a route of this controller
        
            Add this at the top,
                
                use App\Http\Controllers\MemberController;
            
            Add this at the top bottom,
                
                Route::post('list', [MemberController::class, 'operation']); 

        
        5. Import database class inside controller
        
            use Illuminate\Support\Facades\DB;
            
            
        6. Make a view file name list.blade.php

            
        7. Write a function to get full data in the view inside controller
        
            class MemberController extends Controller
            {
                function operation(){
                    $data = DB::table('members')->get();
                    return view('list', ['data' => $data]);
                }
            }
            

        8. Create a table in list.blade.php 

            <h1>Member List</h1>
            <table border="1">
                <tr>
                    <td><b>Id</b></td>
                    <td><b>Name</b></td>
                    <td><b>Email</b></td>
                    <td><b>Contact</b></td>
                </tr>
            
                @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->contact}}</td>
                </tr>
                @endforeach
            </table>


        9. Function to find a data with id key using "where" condition
        
            class MemberController extends Controller
            {
                function operation(){
                    $data = DB::table('members')
                        ->where('id', 4)
                        ->get();
                        return view('list', ['data' => $data]);
                }
            }
              
                    
        10. Function to find a data with find method.
        
            class MemberController extends Controller
            {
                function operation(){
                             return DB::table('members')->find(4);
                }
            }  
              
                    
        11. Function to find a data with find method.
        
            class MemberController extends Controller
            {
                function operation(){
                             return DB::table('members')->find(4);
                }
            } 
              
                    
        12. Function to Data Insertion
        
            class MemberController extends Controller
            {
                return DB::table('members')->insert([
                    'name' => "Muhammad",
                    'email' => "Muhammad@test",
                    'contact' => "234567890"
                ]);
            }
              
                    
        13. Function to Data Updation
        
            class MemberController extends Controller
            {
                return DB::table('members')
                ->where('id', 19)
                ->update([
                    'name' => "Montu",
                    'email' => "Muhammad@test",
                    'contact' => "UK"
                ]);
            }
              
                    
        14. Function to Data Deletion
        
            class MemberController extends Controller
            {
                return DB::table('members')
                ->where('id', 19)
                ->delete();
            }
                    