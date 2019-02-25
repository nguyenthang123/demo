<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Validation;
use Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return view('Admin/login');
    }
    public function checkLogin(Request $request) {
         $this->validate($request,[
               'email' => 'required|email',
               'password' => 'required|alphaNum|min:3'
         ]);
         $userData = array(
             'email'    => $request->get('email'),
             'password' => $requset->get('password')
         );
         if(Auth::attempt($userData)){
              return redirect('admin/successlogin');
         }
         else {
              return back()->with('error','wrong login detail');
         }
    }
    public function successlogin(){
         return view('Admin/successlogin');
    }
}
