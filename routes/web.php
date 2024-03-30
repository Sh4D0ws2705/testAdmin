<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;




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

// Route::post('/login', function () {
//     return "bạn đã đăng nhập thành công";
// })->middleware('checkuser')->name('login-post');

// //nếu đăng nhập sai trả người dùng vè trang login để đăng nhập lại
// Route::get('/login', [MyController::class,'login'])->name('login');

// Route::get('/signup', [MyController::class, 'signup']);

// Route::post('process',[MyController::class,'process_signup'], function(Request $request) {
//     return $request->email;
// })->name('signup');

// Route::resource('/product', ProductController::class);

Route::get('/{page?}', [MyController::class, 'showPage'])->name('show.page');

