<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserControllerex17 extends Controller
{
    //
    public function index() {
        //return " Hello From User Controller_ex17 ";
        return DB::select('select * from users_list');
    }
}
