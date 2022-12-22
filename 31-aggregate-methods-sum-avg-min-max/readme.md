## **Aggregate Method**

    ➢➢➢ What is aggregate method?
            
        Some DB class functions which calculate differents mathematical problems are called aggregate method.
        
        Note: This topic is vary important. Because when we work in a big project, we need aggregate methods.
        
        
        
    ➢➢➢ How to use aggregate methods steps are given bellow
    
        1. Go to .env file to add db info 


        2. Make a controller name UserController
        
            command: php artisan make:controller UserController
                    
                    
        3. Make a function inside the controller
        
            class UserController extends Controller
            {
                function operations(){
                    echo 'logics will write here';
                }
            }
            
            
        4. Make a route of this controller
                
            Add this at the top,
                
                use App\Http\Controllers\UserController;
            
            Add this at the top bottom,
                
                Route::post('list', [UserController::class, 'operation']); 
                
                
        5. Import database class inside controller
        
            use Illuminate\Support\Facades\DB;
            
        
        
        6. Modify the function inside the controller to get full table
                
            class UserController extends Controller
            {
                function operations(){
                    return DB::table('members')->get();
                }
            }
            
        
        
        7. Function inside the controller to get a single column of a table
                
            class UserController extends Controller
            {
                function operations(){
                    return DB::table('members')->get('id');
                }
            }
            
        
        
        8. Function to calculate sum of a column inside the controller
                
            class UserController extends Controller
            {
                function operations(){
                    return DB::table('members')->sum('id');
                }
            }
            
        
        
        9. Function to get minimum value of a column inside the controller
                
            class UserController extends Controller
            {
                function operations(){
                    return DB::table('members')->min('id');
                }
            }
            
        
        
        10. Function to get maximum value of a column inside the controller
                
            class UserController extends Controller
            {
                function operations(){
                    return DB::table('members')->max('id');
                }
            }
            
            
        11. we can apply this aggregate methods in every field
    
            class UserController extends Controller
                {
                    function operations(){
                        return DB::table('members')->min('name');
                    }
                }
                
            Note: It will return minimum or maximum value by alphabetic order.



        12. Function to get average value of a column inside the controller

    
            class UserController extends Controller
                {
                    function operations(){
                        return DB::table('members')->avg('id');
                    }
                }
                                    