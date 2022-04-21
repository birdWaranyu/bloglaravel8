<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMember_ex22 extends Controller
{
    //
    public function addMember (Request $req) {
        $data_member = $req->input('username');
        //return $data_member;
        $req->session()->flash('username', $data_member);
        return redirect('addmem_ex22');
    }
}
