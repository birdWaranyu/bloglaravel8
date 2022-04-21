<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController_ex19 extends Controller
{
    //

    public function index() {
        //return ' Hello Http ';
        // การทำ function Http เอา url api มาเป็นข้อมูล ที่แสดง
        //return Http::get("https://reqres.in/api/users?page=1");
        $collection = Http::get("https://reqres.in/api/users?page=1");
        return view('userex19', ['collection' => $collection['data']]);
    }
}
