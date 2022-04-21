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

    <div><h1> User Page </h1></div>
    {{10+10}} <br>
{{--    จำนวนผู้ใช้งานมี = {{ count($userten) }} คน--}}

    <!-- check if elseif and else blade template -->
    @if($userten == 'anil')
        <h3>Hi {{ $userten }}</h3>
    @elseif($userten == 'sam')
        <h3>Hello {{ $userten }} </h3>
    @else
        <h3> Unkwon User </h3>
    @endif

    <!-- loop for blade template -->
    <?php $i = 20; ?>
    @for($j = 0; $j < $i; $j++)
       นับจำนวน <h4>{{ $j }}</h4>
    @endfor

    <!-- loop foreach blade template -->
    @foreach($userten as $key_user => $value_user)
        <div style="text-align: center"><h3> key = {{ $key_user }} value = {{ $value_user }} </h3></div>
    @endforeach

</body>
</html>
