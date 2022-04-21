<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController_ex20 extends Controller
{
    //

    public function testRequest(Request $req) {
        //return ' Hello Request Form Method ';
        return $req->input(); // เป็นการ print ค่า post หรือ get มาว่า มีอะไรส่งมาบ้างใน form
    }

}
