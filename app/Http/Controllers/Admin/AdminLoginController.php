<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Controller;
// khai báo sử dụng loginRequest
use App\Http\Requests\LoginRequest;
use Auth;
use App\User;
class AdminLoginController extends Controller
{

    public function getLogin()
    {
        if (Auth::check()) {
            // nếu đăng nhập thàng công thì 
            return redirect('admincp');
        } else {
            return view('Admin.login');
        }

    }
    public function postLogin(LoginRequest $request)
    {
        // $login = [
        //     'email' => $request->txtEmail,
        //     'password' => hash($request->txtPassword),
        //     'level' => 1,
        //     'status' => 1
        // ];
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return "bạn đã login thành công";
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }

    /**
     * action admincp/logout
     * @return RedirectResponse
     */
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('getLogin');
    }

}