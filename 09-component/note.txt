## **Component**

    ➢ What is component?
        ➾ Component is a piece of code which reuses multiple times like header.

    ➢ How to make component?

        Command line,

            php artisan make:component header

            By doing this, total 2 files will create,
            
                a.  app/View/Component/header.php - to write dynamic codes
                b.  resources/views/components/headers.blade.php - to write html codes

    ➢ How to use component?

        ➾ headers.blade.php, write the header html in here. then use it another view like user.blade.php using <x-header/>

    ➢ How to make a component dynamic?

        a. in, app/View/Component/header.php:
            add these lines bellow,

                public $title="";

                public function __construct($componentHeader)
                {
                    $this->title=$componentHeader;
                }

        
        b. resources/views/components/headers.blade.php
            add like this,

                <div>
                    <h1>This is {{$title}}'s Header part</h1>
                </div>

        c. views/users.blade.php

            add like this, 
                <x-header componentHeader="User"/>

            Note: Adding slash "/" is important.

