<h1>Member List</h1>
<table border="1">
    <tr>
        <td>SNO</td>
        <td>Name</td>
        <td>Email</td>
        <td>Contact</td>
    </tr>
    <tr>
        @foreach($members as $member)
        <tr>
            <td>{{$member['sno']}}</td>
            <td>{{$member['name']}}</td>
            <td>{{$member['email']}}</td>
            <td>{{$member['contact']}}</td>
            
        </tr>
        @endforeach
    </tr>
</table>