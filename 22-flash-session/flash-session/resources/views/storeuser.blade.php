<h1>Add new member</h1>
@if(session('user'))
<h3>Data saved for {{session('user')}}</h3>
@endif
<form action="user" method="post">
    @csrf
    <input type="text" name="user" placeholder="Enter your username"><br><br>
    <input type="email" name="email" placeholder="Enter your email"><br><br>
    <input type="password" name="password" placeholder="Enter your password"><br><br>
    <button type="submit">Add User</button>
</form>