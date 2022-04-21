<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth_ex21 extends Controller
{
    //
    public function UserLogin (Request $req) {
        //return $req->input();
        $data = $req->input();
        $req->session()->put('username', $data['username']);
        // method put การรับค่า จาก form โดยชื่อ name ของแต่ละตัวที่ต้องการส่งเป็น session
        //echo session('username');
        return redirect('profileex_21');
    }
}
