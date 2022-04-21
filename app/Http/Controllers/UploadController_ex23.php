<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController_ex23 extends Controller
{
    //
    public function doUpload (Request $req) {
        //return 'Hello Word Upload File ';

        // วิธีที่ 1 เอาเข้าไปที่ folder ที่ชื่อ public โดยการ upload file ไป
//        $file = $req->file('file');
//        $filename = time()."_".$file->getClientOriginalName();
//        $location = "upload";
//        $filenew = $file->move($location,$filename);
//        return $filenew;

        // วิธีที่ 2 เอาเข้าไปที่ folder ที่ชื่อ storage โดยการ upload file ไป
        $path = Storage::path('public/upload');
        $file = $req->file('file');
        $filename = time()."_".$file->getClientOriginalName();
        $filenew = $file->move($path,$filename);
        return $filenew;

    }
}
