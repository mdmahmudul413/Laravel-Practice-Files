## **Accessors**

    ➢➢➢ What is Accessors?
    
        Suppose we fetch data from database and before displaying the fetched data to the view if we need some kind of modification with the data 
        to be displayed then we have to use accessors.
         
         
    ➢➢➢ How to make and use Accessors?
        
        1. At first make a controller.
        
            command: php artisan make:controller MemberController
        
        
        2. Make a function inside controller.
        
            class MemberController extends Controller
            {
                function index(){
                    return "Hello from controller";
                }
            }
        
        
        3. Then make a route
        
            At the top,
                use App\HTTP\Controllers\MemberController;
                
            At the top,
                Route::get('member', [MemberController::class, 'index']);
        
        
        4. Then make a model.
        
            command: php artisan make:model member
        
        
        5. Import this model to the controller
        
            use App\Models\Member;
            
            
        6. Modify the function inside controller
        
            class MemberController extends Controller
            {
                function index(){
                    return Member::all();
                }
            }
        
        
        6. Now if we want to modify a field "name" data first letter small to capital or any kind of modification then, we have to create a function inside model,
        
            class Member extends Model
            {
                use HasFactory; 
                
                function getNameAttribute($value){
                    return ucFirst($value);
                }
                
                function getAddressAttribute($value){
                    return $value.', Dhaka';
                }
            }
            
        Note: The function name format is like "getFieldNameAttribute()"