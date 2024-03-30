<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MyController extends Controller
{
    public function showPage($page = 'index') {
        //ktra xem web co ton tai khong
        if (view()->exists($page)) {
            return view($page);
        }
         // Nếu view không tồn tại, bạn có thể trả về một trang lỗi hoặc trang mặc định
         return abort(404);
    }

    // public function index() {
    //     return view('index');
    // }
    // public function login() {
    //     return view('login');
    // }
    // public function register() {
    //     return view('register');
    // }
    // public function process_signup(Request $request) {
    //     return view('welcome',['data'=>$request]);
    // }

}
