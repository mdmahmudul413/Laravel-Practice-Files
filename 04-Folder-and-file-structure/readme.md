## **Folder and File Structure**

        1. app: The core codes of the application are written in this folder
            ➣ Core codes means 3 or 4 items:-
                1. Controller
                2. Model
                3. Middlewares
                4. Service providers

            ➣ app/console/kernel.php: if we need to write any custom command, than we have to write it here.

            ➣ app/exceptions/Handler.php: The exceptions of the codes are written here.

            ➣ app/Http/controller/controller.php: This is a central unit which control modal and view it means
               its a middle layer of the database and Html pages.

            ➣ app/Http/Middleware: By this folder, we can filter the access of visitor.

            ➣ app/Http/kernel.php: to register the middleware, this file is used.

            ➣ app/Models/user.php: database connections file are situated here. database related code are 
               written here.

            ➣ app/providers: Authorization of signup, signin, routing etc

        2. bootsrap: 
            bootsrap/app.php: it loads our app

        3. config: 
            we do each and every types of configaration here

        4. database: 
            crating tables, managing data, inserting dummy data etc

        5. public: 
            we can store the public files here like html, css, js files. public/index.php this file load for the
            first of laravel app. In pulic/.htaccess, the server configarations are written here. 

        6. resources: 
            uncompiled public files like css, js etc are here 
            resources/views: total html are written here.

        7. routes: 
            api routes, channels route , web routes etc

        8. storage: 
            total uploaded files are here

        9. tests: 
            test cases are written here

        10. vendor: 
            Total dependancy files are here