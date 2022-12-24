## **Important Migration Command**

    ➢➢➢ What is seeding?
    
        Seeding means load dummy data to DB from laravel
        
    ➢➢➢ How to make seeding file and use?
    
        1. Check the database connection in the .env file
    
        2. First of all make a seeding file through command.
        
            command: php artisan make:seeder MembersSeeder(file name) 
        
        Note: A file will be generated located database/seeders/MembersSeeder
        
        3. Import some pakages in the MembersSeeder.php file
        
            use Illuminate\Support\Facades\DB; (Database Pakage)
            use Illuminate\Support\Str; (Random Genarator Pakage)
        
        4. write these code bellow.
        
            public function run()
                {
                    DB::table('members')->insert([
                        'name'=>Str::random(10),
                        'email'=>Str::random(7).'@gmail.com',
                        'contact'=>Str::random(15)
                    ]);
                }
        
        5. Then make a final command to load random data in the database.
        
            command: php artisan db:seed --class=MembersSeeder    