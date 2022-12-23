## **Joins**

    ➢➢➢ What is migration?
    
        In laravel, we don't need to create table manually in the database. When we need to add another collumn to the database, 
        we also need not to do this manually. We just make a command to create a migration file. Then define the database 
        structure inside that file and migrate it.
        
    ➢➢➢ What is the benefit migration?
    
        When entire team work on a single database, multiple developers have to work on same table. Every developer add field into
         database on their need. Finally when they need to merge the database, it is easy to merge the project instead of merging
          the database. By the help of migration we don't need to touch the database, we can merge the database by modifying
           migration files. so that, we always use migration in laravel.
        
    ➢➢➢ How to create migration in the database
    
        1. Go to .env file to add db info 


        2. Create a migration file for creating test table
        
            command: php artisan make:migration create_test_table
            
            
        3. Inside the migration file, there are two functions up and down
        
            public function up()
            {
                $table->id();
                $table->timestamps();

            }
            public function down()
            {
                Schema::dropIfExists('test');
            } 
            
        Note: up function is responsible for creating table and down function is responsible for deleting table.
              
                    
                    
        3. We can modify the up function to add more fields inside test table
        
            public function up()
            {
                Schema::create('test', function (Blueprint $table) {
                    $table->id();
                    $table->string('name');
                    $table->string('email');
                    $table->string('address');
                    $table->timestamps();
                });
            }
            
        Note: Every developer will have this file. So that, they don't need to manually change or modify the database. They can
         just migrate the existing migration.     
            
            
            
        4. Now to create test table in the database, we have to make another command
        
            command: php artisan migrate
            

           
           
           