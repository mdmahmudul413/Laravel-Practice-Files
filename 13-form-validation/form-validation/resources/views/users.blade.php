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