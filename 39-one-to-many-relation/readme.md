## **One to Many Relation**

    ➢➢➢ What is relation and one to many relation?
    
        Get data from two tables on behalf of any relation like relation of id or name. one to many relation means any
        property of a table like a id is related to many id of another table.
        
      Note: Before we use join to make this kind of relationship. But we use laravel relation process.
        
    ➢➢➢Implementation
    
        1. First of all we have to select two tables and one of the tables must has a field which represents the relation between
           two tables. Suppose we have employees and devices tables and inside company table, we have a field name employee_id
           which represent the relation between the tables.
        
        
        2. Configure the database connection from file .env

        
        1. Make a controller 
        
            command: php artisan make:controller EmployeeController
        
        
        2. Modify the function inside controller 
        
            class EmployeeController extends Controller
            {
                function index(){
            
                    return "one to Many";
            
                }
            }
        
        
        3. Make a route of the controller
        
            At the top,
                use App\Http\Controllers\EmployeeController;
                
            At the bottom,
                Route::get('data', [EmployeeController::class, 'index']);
            
        4. We need two models like Employee and Company
        
            command 1: php artisan make:model Employee 
            
            command 2: php artisan make:model Device
        
        
        5. Import Employee model to the controller
        
            use App\Models\Employee;
        
        
        6. Modify the function inside controller to see the if the output is correct or not.
        
            class EmployeeController extends Controller
            {
                function index(){
            
                    return Employee::find(2);
            
                }
            }
        
        
        7. Now make a function in the Model Member and make an one to many relation with the Device model
        
            class Employee extends Model
            {
                use HasFactory;
                
                public function deviceInfo(){
                    return $this->hasMany('App\Models\Device');
                }
            }
        
        8. Then we have to use the function as a property in the function in the controller.
        
            class EmployeeController extends Controller
            {
                public function index(){
                    return Employee::find(2)->deviceInfo;
                }
            }
