<h1>Add Members</h1>
<form action="add" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter Name"><br><br>
    <input type="email" name="email" placeholder="Enter Email"><br><br>
    <input type="text" name="contact" placeholder="Enter Contact"><br><br>
    <button type="submit">Add Member</button>
</form>