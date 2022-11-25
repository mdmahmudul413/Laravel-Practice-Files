<h1>User Login</h1>
<form action="users" method="POST">
    @csrf
    <input type="text" name="userName" placeholder="Enter Your username">
    <br><br>
    <input type="password" name="passWord" placeholder="Enter Your password">
    <br><br>
    <button type="submit">Login</button>
</form>