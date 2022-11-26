## **Connect With Database**

    ➢➢➢ This is the technique of gitting data without using Model

        1. at first, we have to configure our database. go to .env file. Then, change the db name, username, password

            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=  
            DB_USERNAME=
            DB_PASSWORD=

        2. Make a controller

            command: php artisan make:controller UserController

        3. Make a function inside controller

            class UserController extends Controller
            {
                function index(){
                    echo "Hi"; // testing purpose
                }
            }

        4. Make routing for the controller in web.php 

            At the top,
                use App\Http\Controllers\UserController;

            At the bottom,
            Route::get('users', [UserController::class, 'index']);

        5. now connect the database from controller

            Firsly import the database file at the top,

                use Illuminate\Support\Facades\DB;

            Secondly, to get data use the code in the function in controller

                class UserController extends Controller
                {
                    function index(){
                        return DB::select("select * from users");
                    }
                }

        6. Then browse the url
        
            localhost/users



        ➢➢➢ If this(could not find driver (SQL: select * from users)) kind of error happand
        solution is,

            command,
                1. composer update   
                2. composer require doctrine/dbal

        then, go to php.ini and uncomment this line,

            ;extension=pdo_mysql.so




