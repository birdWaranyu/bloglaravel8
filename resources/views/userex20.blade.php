<div> <h1>User Login</h1> </div>
<!-- method POST GET PUT DELETE -->
<form action="user_ex20" method="GET">
    <!-- ถ้า กรณี method put หรือ delete ให้ เพิ่ม method put หรือ delete ลงไป เพื่อให้รู้จักค่า ส่วนตัว form method มีแค่ GET กับ POST -->
{{--    {{method_field('DELETE')}}--}}
    @csrf
    <input type="text" name="users" placeholder="Enter user"> <br><br>
    <input type="password" name="password" placeholder="Enter password"> <br><br>
    <button type="submit"> Login </button>
</form>
