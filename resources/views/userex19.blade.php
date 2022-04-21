<div> <h1>User List</h1> </div>
<table width="700px;" border="1" cellpadding="1" cellspacing="2">
    <tr style="text-align: center; background-color: bisque">
        <td style="width: 10%;">ID</td>
        <td style="width: 20%;">EMAIL</td>
        <td style="width: 20%;">FIRSTNAME</td>
        <td style="width: 20%;">LASTNAME</td>
        <td style="width: 25%;">AVATAR</td>
        <td style="width: 40%;">LINK AVATAR</td>
    </tr>
    @foreach($collection as $key => $items)
        <tr style="text-align: center;">
            <td> {{ $items['id'] }} </td>
            <td> {{ $items['email'] }} </td>
            <td> {{ $items['first_name'] }} </td>
            <td> {{ $items['last_name'] }} </td>
            <td>
                <img width="65%" src="{{ $items['avatar'] }}" alt="ImageProfile">
            </td>
            <td><a target="_blank" href="{{ $items['avatar'] }}">Link Image</a> </td>
        </tr>
    @endforeach
    <tr style="text-align: center; background-color: bisque">
        <td style="width: 10%;">ID</td>
        <td style="width: 20%;">EMAIL</td>
        <td style="width: 20%;">FIRSTNAME</td>
        <td style="width: 20%;">LASTNAME</td>
        <td style="width: 25%;">AVATAR</td>
        <td style="width: 40%;">LINK AVATAR</td>
    </tr>
</table>
