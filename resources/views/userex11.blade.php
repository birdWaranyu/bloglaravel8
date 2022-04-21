@include('headerex11')
<h1>User Page</h1>
<!-- รูปแบบ include เรียกไฟล์มา -->
@include('innerex11')

@foreach($userten as $value_user)
    <div><h3> Loop Laravel Use {{ $value_user }} </h3></div>
@endforeach

<!-- รูปแบบ Json File -->
<!-- csrf รูปแบบการปกป้องกัน ความปลอดภัยของข้อมูล -->
@csrf
<script>
    var data=@json($userten);
    // เรียกแบบตัวแปร ของสมา่ชิกใน array ทั้งหมด
    //console.warn(data);
    // เรียกแบบ ที่ละตัว ของ array
    console.warn(data[3]);
</script>

