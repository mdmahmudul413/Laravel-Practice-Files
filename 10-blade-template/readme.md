## **Blade Template**

    ➢ What is blade template?
        
        ➾ Its a template engine of laravel which converts plain text into php.

    ➢ What is the profit of blade template?

        1. we can write {{$var}} instead of <?php $var ?> 
        2. we can use loops easily as compared to php
        3. It provides us templates like header or footer which we can reuse multiple times
        4. we can use jQuery and javascript easily 

    ➢➢➢ we need view and controller to use blade template

    ➢ Include view in another view
        Suppose, there is a page inner.blade.php. To include this page into users.blade.php

        Syntax: include('inner');

    ➢ To use php inside js

        <script>
            var data = @json($name);
            console.log(data);
            var data2 = data[0];
            console.log(data2);
        </script>

    ➢ Writing foreach loop in the blade file
    
        @foreach($name as $user)
        <h1>{{$user}}</h1>
        @endforeach

    ➢➢ When we add forms then we have to use csrf tokens because of avoiding uncertain hacking issues.

    ➢➢ To use csrf tokens then just write @csrf
