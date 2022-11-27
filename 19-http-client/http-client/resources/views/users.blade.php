<h1>Users List</h1>
<table border="5">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Profile Picture</td>
    </tr>

    @foreach($collection as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['first_name']}}</td>
        <td>{{$user['email']}}</td>
        <td><img src="{{$user['avatar']}}" alt=""></td>
    </tr>
    @endforeach
</table>