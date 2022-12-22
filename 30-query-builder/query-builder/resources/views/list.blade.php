<h1>Member List</h1>
<table border="1">
    <tr>
        <td><b>Id</b></td>
        <td><b>Name</b></td>
        <td><b>Email</b></td>
        <td><b>Contact</b></td>
    </tr>

    @foreach($data as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->contact}}</td>
    </tr>
    @endforeach
</table>
