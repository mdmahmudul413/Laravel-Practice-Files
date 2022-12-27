## **One to One Relation**

    ➢➢➢ What is relation and one to one relation?

        Get data from 2 tables on behalf of any relation like relation of id or name. One to one relation means any property
         of a table like id is related to only one id of another table.
         
        Note: To create one to one or one to many or any kind of relationship, we need at least two model and one controller.

    ➢➢➢ Implementation
        
        1. First of all we have to select two tables and one of the tables must has a field which represents the relation between 
        two tables. Suppose we have employee and company tables and inside company table, we have a field name employee_id 
        which represent the relation between the tables.
        
        
        2. Configure the database connection from file .env


        3. Now make a controller

            command: php artisan make:controller EmployeeController


        4. Create a function inside controller

            class EmployeeController extends Controller
            {
                function index(){

                    return "one to one";
                }
            }


        5. make a route of the controller

            At the top,
                use App\Http\Controllers\EmployeeController;

            At the bottom,
                Route::get('data', [EmployeeController::class, 'index']);


        6. we need two models like Member and Company

            command 1: php artisan make:model Employee

            command 2: php artisan make:model Company


        7. Import Employee model to the controller

            use App\Models\Employee;


        8. Modify the function inside controller to see the output if the output is correct or not.

            class EmployeeController extends Controller
            {
                function index(){
                    return Employee::find(2);
                }
            }

        9. Now make a function in the Model Employee and make an one to one relation with the company model

            class Employee extends Model
            {
                use HasFactory;

                public function companyData(){
                    return $this->hasOne('App\Models\Company');
                }
            }

        10. Then we have to use the function as a property in the function inside the controller.
        
            class EmployeeController extends Controller
            {
                function index(){
                    return Employee::find(1)->companyData;
                }
            }

        Note: In one to one relation output will always the top most data. but if we use hasMany() function
        in the model member than it will make one to many relation.
