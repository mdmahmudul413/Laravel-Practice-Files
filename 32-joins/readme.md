## **Joins**

    ➢➢➢ Why we need join?
    
        When we want to fetch data from two table, we need join. To apply join into two table, there must be some common information between the tables.
        
    ➢➢➢ How to apply joins steps are given bellow
    
        1. Go to .env file to add db info 


        2. Make a controller name EmployeeController
        
            command: php artisan make:controller EmployeeController
                    
                    
        3. Make a function inside the controller
        
            class EmployeeController extends Controller
            {
                function getData(){
                    echo 'Hello from controller';
                }
            }
            
            
        4. Make a route of this controller
        
            Add this at the top,
                
                use App\Http\Controllers\EmployeeController;
            
            Add this at the top bottom,
                
                Route::post('list', [EmployeeController::class, 'getData']); 

        
        5. Import database class inside controller
        
            use Illuminate\Support\Facades\DB;
            
            
            
        6. Modify the function to get full data from employee table
        
            class MemberController extends Controller
            {
                function operation(){
                    return DB::table('employee')->get();
                }
            }
            
            
            
        7. Modify the function to join employee and company table
        
            class MemberController extends Controller
            {
                return DB::table('employee')
                ->join('company', 'employee.id', '=', 'company.employee_id')
                ->get();
            }
            
            
            
        8. Join query with select key word(if we need only one table details)
        
            class MemberController extends Controller
            {
                return DB::table('employee')
                ->join('company', 'employee.id', '=', 'company.employee_id')
                ->select('employee.*')
                ->get();
            }
            
            
            
        9. Joins query with select key word(when we need multiple table data)
        
            class MemberController extends Controller
            {
                return DB::table('employee')
                ->join('company', 'employee.id', '=', 'company.employee_id')
                ->select('company.*', 'employee.*')
                ->get();
            }
            
            
            
        10. Joins query with where key word

            class MemberController extends Controller
            {
                return DB::table('employee')
                ->join('company', 'employee.id', '=', 'company.employee_id')
                ->where('employee.name', 'redoan')
                ->get();
            }
            
            
            
        11. Another joins query with where key word

            class MemberController extends Controller
            {
                return DB::table('employee')
                ->join('company', 'employee.id', '=', 'company.employee_id')
                ->where('employee.id', '2')
                ->get();
            }
            
            
            
        12. Joins query with where & select key word

            class MemberController extends Controller
            {
                return DB::table('employee')
                ->join('company', 'employee.id', '=', 'company.employee_id')
                ->where('employee.id', '2')
                ->select('employee.name')
                ->get();
            }
            

           
           
           