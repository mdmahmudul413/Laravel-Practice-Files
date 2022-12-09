## **Localization**

    ➢➢➢ what is localization

        If we make our website in a certain language like english. Then it is hard to understand the country like japan, chaina, etc. For this reason we use localization. 

    ➢➢➢ How to add localization?

        1. At first we make a view name like profile.blade.php

        2. Make a sample profile page

            <h1>Welcome to Profile</h1>
            <a href="">About</a>
            <a href="">Contact</a>
            <a href="">List</a>

        3. Make a route of this view

            Route::get('profile', 'profile');

        4. Now go to resources\lang\en

            create a file name like profile.php(we can give any kind of name we want)

        5. Now we can make a specific quantity of folders in "resources/lang" directory that how much language we need like hi(hindi), ko(koria), etc. And we have to make same named file like profile.php in every folder.

        6. Then, modify the profile.blade.php and each profile.php files of each folders

            In profile.blade.php

                <h1>{{__('profile.welcome')}}</h1>
                <a href="">{{__('profile.about')}}</a>
                <a href="">{{__('profile.contact')}}</a>
                <a href="">{{__('profile.list')}}</a>


            In resources\lang\en\profile.php

                <?php
                    return [
                        'welcome'=> 'Welcome to Profile',
                        'about'=> 'About',
                        'contact'=> 'Contact',
                        'list'=> 'List'
                    ]
                ?>

            In resources\lang\hi\profile.php

                <?php
                    return [
                        'welcome'=> 'प्रोफाइल में आपका स्वागत है',
                        'about'=> 'करीबन',
                        'contact'=> 'संपर्क',
                        'list'=> 'सूची'
                    ]
                ?>

            In resources\lang\ko\profile.php

                <?php
                    return [
                        'welcome'=> '프로필에 오신 것을 환영합니다',
                        'about'=> '약',
                        'contact'=> '접촉',
                        'list'=> '목록'
                    ]
                ?>

        7. there are two ways to browse specific language

            a. Go to config/app.php

                search 'locale' => 'en' this line and change it with 'locale' => 'hi' or 'locale' => 'ko' and browse localhost/profile

            b. modify the route of profile view

                Route::get('/profile/{lang}', function ($lang) {
                    App::setlocale($lang);
                    return view('profile');
                });


            Then browse like localhost/profile/hi or localhost/profile/en or localhost/profile/en