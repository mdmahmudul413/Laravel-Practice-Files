## **Form Validation**

    ➢➢➢ We will considar part 3 "make-html-form-and-get-value" form and validate it

    ➢ So, now continuing from the previous part modify the controller function 'getdata'

        function getdata(Request $req){
            $req->validate([
                'userName' => 'required',
                'passWord' => 'required',
            ]);
            return $req->input();
        }

    ➢ We can apply multiple validation rules

        function getdata(Request $req){
            $req->validate([
                'userName' => 'required | max:10',
                'passWord' => 'required | min:5',
            ]);
            return $req->input();
        }

    ➢ Then, modify the blade file,

            <h1>User Login</h1>
            {{$errors}}
            <form action="users" method="POST">
                @csrf
                <input type="text" name="userName" placeholder="Enter Your username">
                <br><br>
                <input type="password" name="passWord" placeholder="Enter Your password">
                <br><br>
                <button type="submit">Login</button>
            </form>

        Note: In this way, we will see the error but this is not the proper way to see errors.

    ➢ Another way to show the errors

            <h1>User Login</h1>
            @if($errors->any())
                @foreach($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach
            @endif
            <form action="users" method="POST">
                @csrf
                <input type="text" name="userName" placeholder="Enter Your username">
                <br><br>
                <input type="password" name="passWord" placeholder="Enter Your password">
                <br><br>
                <button type="submit">Login</button>
            </form> 

    ➢ Another way to show error message

            <h1>User Login</h1>
            <form action="users" method="POST">
                @csrf
                <input type="text" name="userName" placeholder="Enter Your username"><br>
                <span style="color: red;">
                    @error('userName'){{$message}}@enderror
                </span><br>
                <input type="password" name="passWord" placeholder="Enter Your password"><br>
                <span style="color: red;">
                    @error('passWord'){{$message}}@enderror
                </span><br>
                <button type="submit">Login</button>
            </form>