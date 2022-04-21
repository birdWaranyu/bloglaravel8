<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello Laravel8</title>
</head>
<body>

    <h1>User Login</h1>

    <!-- รูปแบบที่ 1 แสดงตัว errors กรณีที่เราพิพม์ไมตรบ -->
{{--    {{ $errors }}--}}
    <!-- รูปแบบที่ 2 ใช้ เงื่อนไข if ช่วยในการตรวจสอบว่า ถ้าใน form มีตัว $errors ใน form ถ้าหาเจอ ให้ทำการ loop หาว่ามีกี่ตัว ให้แสดงจำนวน errors ออกมาเท่าที่มี -->
{{-- if ตัวนี้จะเช็ค ค่า errors จากการตัว vaildate ว่ามีการกรอกครบไหม ถ้ามีตัว errors @if($errors->any()) ให้ใช้ loop ตัวนี้ $errors->all() เพื่อเรียกค้นหาข้อมูลที่ error มาทั้งหมด  --}}

{{--    @if($errors->any())--}}
{{--       @foreach($errors->all() as $err)--}}
{{--           <li> {{ $err }} </li>--}}
{{--       @endforeach--}}
{{--    @endif--}}

    <!-- รูปแบบที่ 3 แสดงข้อความตัวแปร $errors ผ่านตัว $message ผ่านทีละตัวของชื่อ input แต่ละตัวได้เลย  -->

    <form action="user_ex12" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter User Id"> <br>
        <span style="color: darkred"> @error('username') {{ $message }} @enderror </span> <br>
        <input type="password" name="password" placeholder="Enter Password "> <br>
        <span style="color: darkred"> @error('password') {{ $message }} @enderror </span> <br>
        <button type="submit">Login</button> <br>
    </form>

</body>
</html>
