<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_ex18;

class UserController_ex18 extends Controller
{
    //
    public function getData() {
        return User_ex18::all();
    }
}
