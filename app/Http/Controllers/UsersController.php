<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function loadView($name) {
        //return view('user', ['name' => 'Wara']);
        // รูปแบบ ที่เรียก parameter มาด้วยบน function
        return view('user',['name' => $name]);
    }
    public function viewLoad() {
        //return view('userex10');
        // เก็บค่าตัวแปร userten นำมานับจำนวนว่า ตัวแปร userten มีชื่อผู้ใช้งานกี่คน แล้วไปหน้า view เพื่อเรียกใช้ function count ในรูปแบบ blade template
        //return view('userex10', ['userten' => ['anil','sam','peter'] ]);
        // รูปแบบ นำตัวแปร userten นำไป check if ที่บนหน้า view ว่า ถ้าตัวแปรมีค่าอะไรที่ส่งไปแล้วเป็นจริง ให้แสดงข้อมูลอะไรมา ในรูปแบบ blade template
        //return view('userex10', ['userten' => 'peter']);
        // รูปแบบ $data_user เก็บค่าเป็น array ก่อนว่ามีสมาชิกท่านใดบ้าง แล้วนำตัวแปร userten นำไป โดยเรียกจาก $data_user นำไป loop foreach ที่บนหน้า view ว่า ข้อมูลที่เก็บไว้ในตัวแปร มีข้อมูลอะไรบ้าง เก็บแบบ array ในรูปแบบ blade template
        //$data_user = array('1'=>'anil','2'=>'sam','3'=>'bre');
//        $data_user = ['1'=>'anil','2'=>'sam','3'=>'bre'];
//        return view('userex10', ['userten' => $data_user]);
        $data_user = ['anil','sam','locky','bre'];
        return view('userex11', ['userten' => $data_user]);
    }
    public function getData(Request $request) {
        //return "Form data will be here";
        // กรณีที่ใส่ Request ลงไป มาดูข้อมูลที่ส่งจาก form ว่า มี input ชื่ออะไรเข้ามาจาก form post บ้าง $request->input(); ถ้าเขียนแบบนี้ จะส่งต่าจาก form มาทั้งหมดว่ามีอะไรบ้าง
        $request->validate([
           'username' => 'required | max:10',
            'password' => 'required | min:5'
        ]);
        return $request->input();
    }
}
