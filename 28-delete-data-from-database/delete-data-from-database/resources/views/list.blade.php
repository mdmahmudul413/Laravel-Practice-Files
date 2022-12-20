<h1>Member List</h1>
<table border="1">
    <tr>
        <td>SNO</td>
        <td>Name</td>
        <td>Email</td>
        <td>Contact</td>
        <td>Operation</td>
    </tr>

    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['contact']}}</td>
        <td><a href={{"delete/".$member['id']}}>Delete</a></td>
    </tr>
    @endforeach

</table>