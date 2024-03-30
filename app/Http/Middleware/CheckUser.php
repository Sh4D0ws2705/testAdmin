<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->input('username') == 'user' && $request->input('password') == '123') {
            return $next($request);
        }
        //nếu người dùng nhập sai username và password, trả người dùng về trang login để nhập lại và in thông báo
        return redirect()->route('login')->with('error','Tên đăng nhập hoặc mật khẩu sai!!');
    }
}
