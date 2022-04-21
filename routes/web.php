<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
// ต้องเรียก ตัว Controllers มาด้วย เวลาเราสรา้งไว้ ถ้าไม่มีผ่าน route จะไม่สามารถรันได้
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserControllerex17;
use App\Http\Controllers\UserController_ex18;
use App\Http\Controllers\UserController_ex19;
use App\Http\Controllers\UserController_ex20;
use App\Http\Controllers\UserAuth_ex21;
use App\Http\Controllers\AddMember_ex22;
use App\Http\Controllers\UploadController_ex23;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route รูปแบบ เก็บค่า parameter มาด้วย ที่ชื่อ name มาแสดง เก็บเป็น array เพื่อรอเรียกใช้งานจากหน้า view
//Route::get('/{name}', function ($name) {
//    return view('welcome', ['name' => $name]);
//});

Route::get('/hello', function () {
    return view('hello');
});

//Route::get('/user', function (){
//    return view('user');
//});

// Route เรียกข้อมูลแบบ view โดยมี parameter ด้วย
Route::get('/user/{name}', function ($name) {
    return view('user', ['name' => $name]);
});

//Route::get('/user', [UsersController::class, 'loadView']);

//Route::get('/user/{name}', [UsersController::class, 'loadView']);


// Route รูปแบบเรียก view มา เป็น fuction
// Route::view('คือชื่อ path url ที่เราตั้งเองว่าให้ชื่ออะไร','ชื่อ view ที่เราแสดงบน browser');
Route::view('wel','welhel');
Route::view('abo','about');
Route::view('cont','contract');

// Route แสดง redirect ไปหน้าภัดไป
//Route::get('/', function () {
//    return redirect('abo');
//});

// Route เรียกรูปแบบกรณีสรา้ง Controller มาไว้แล้ว
//Route::get('/users', 'Users@index');
//Route::get('/users', [Users::class, 'index']);
// เรียกรูปบบ ที่มี parameter เช้ามาด้วย
Route::get('/users/{user}', [Users::class, 'index']);

Route::view('user_s','user_s');
Route::view('about_t','about_t');
Route::get('userex10', [UsersController::class, 'viewLoad']);
Route::get('user_ex11', [UsersController::class, 'viewLoad']);
Route::post('user_ex12', [UsersController::class, 'getData']);
Route::view('login', 'userex12');
Route::view('user_ex13', 'userex13');
Route::view('home', 'home');
Route::view('noaccess', 'noaccess');

Route::view('home_ex14', 'homeex14');
Route::view('noaccess_ex14', 'noaccessex14');

// สร้าง middle ware แบบกลุ่ม โดยตามที่เรา check if ในตัว middle ware จะแสดงตาม group ในแต่ละ view ที่ส่งไป
Route::group(['middleware' => ['protectedPage'] ] , function() {
    Route::view('user_ex14', 'userex14');
});

// สร้าง middle ware แบบ route
Route::view('user_ex15', 'userex15')->middleware('protectedPage');
Route::view('home_ex15', 'homeex15');
Route::view('noaccess_ex15', 'noaccessex15');

Route::get('users_ex17', [UserControllerex17::class, 'index']);
Route::get('users_ex18', [UserController_ex18::class, 'getData']);
Route::get('users_ex19', [UserController_ex19::class, 'index']);

// login
Route::get('user_ex20', [UserController_ex20::class, 'testRequest']);
Route::view('login', 'userex20');

Route::post('user_ex21', [UserAuth_ex21::class, 'UserLogin']);
//Route::view('login_ex21','loginex21');
Route::view('profileex_21','profileex21');

Route::get('/login_ex21', function () {
    if (session()->has('username')) {
        return redirect('profileex_21');
    }
    return view('loginex21');
});

Route::get('/logout_ex21', function () {
    if (session()->has('username')) {
        session()->pull('username');
    }
    return redirect('login_ex21');
});

Route::view('addmem_ex22', 'addmember_ex22');
Route::post('addmember_ex22',[AddMember_ex22::class, 'addMember']);

// upload file
Route::view('upload_ex23','uploadfileex_23');
Route::post('fileupload', [UploadController_ex23::class, 'doUpload']);
