{{-- GET METHOD --}}
{{-- <h1>User Login</h1>
<form action="users" method="GET">
    <input type="text" name="user" placeholder="Enter your username"><br><br>
    <input type="password" name="password" placeholder="Enter your password"><br><br>
    <button type="submit">Login</button>
</form> --}}

{{-- POST METHOD --}}
{{-- <h1>User Login</h1>
<form action="users" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter your username"><br><br>
    <input type="password" name="password" placeholder="Enter your password"><br><br>
    <button type="submit">Login</button>
</form> --}}

{{-- PUT METHOD --}}
{{-- <h1>User Login</h1>
<form action="users" method="POST">
    @csrf
    {{ method_field('PUT') }}
    <input type="text" name="user" placeholder="Enter your username"><br><br>
    <input type="password" name="password" placeholder="Enter your password"><br><br>
    <button type="submit">Login</button>
</form> --}}

{{-- DELETE METHOD --}}
<h1>User Login</h1>
<form action="users" method="POST">
    @csrf
    {{ method_field('DELETE') }}
    <input type="text" name="user" placeholder="Enter your username"><br><br>
    <input type="password" name="password" placeholder="Enter your password"><br><br>
    <button type="submit">Login</button>
</form>