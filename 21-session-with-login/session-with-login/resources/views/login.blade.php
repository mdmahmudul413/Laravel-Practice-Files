<h1>User Login</h1>
<form action="user" method="post">
    @csrf
    <input type="text" name="user" placeholder="Enter your name"><br><br>
    <input type="password" name="password" placeholder="Enter your password"><br><br>
    <button type="submit">Login</button>
</form>