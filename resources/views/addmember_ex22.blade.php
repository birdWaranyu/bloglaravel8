<h1>User Login</h1>
@if(session('username'))
    <h3 style="color: darkgreen;"> {{session('username')}} Successfully Add user Data</h3>
@endif
<form action="addmember_ex22" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter User Name"> <br><br>
    <input type="password" name="password" placeholder="Enter User Password"> <br><br>
    <input type="text" name="email" placeholder="Enter User Email"> <br><br>
    <button type="submit">Add Member</button>
</form>
