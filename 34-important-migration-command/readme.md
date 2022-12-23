## **Important Migration Command**

    ➢➢➢ Some important command and process are given bellow
    
        1. Go to .env file to add db info 
        
        
        2. To migrate default migrate files simple command
        
            command: php artisan migrate
        
        
        3. Reset migration command
        
            command: php artisan migrate:reset
            
        Note: it will remove those tables from database which are created from migration.
                   
            
        4. Rollback migration command: We have specify the steps to rollback migrations. Suppose we want to rollback 
           last 3 migration or something like that. We can also run normal rollback. It will just remove last migration.
        
            command: php artisan migrate:rollback (Normal Rollback)
            
        Note: Reset means remove total migrations. Rollback means remove specific migration.
        
                            
        5. When we want rollback last 2 migrations
        
            command: php artisan migrate:rollback --step 2

            
        6. Refresh the migration: It will remove all migration and then again migrate all the migration.
        
            command: php artisan migrate:refresh
            
            
        7. When we want to migrate a single table
        
            command: php artisan migrate --path=/database/migrations/"file_name"
            

           
           
           