<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
class loginController extends Controller
{
  public function index() {
       return view('admin.login.login');
  }
  public function postlogin(LoginRequest $request) {
     
  }
}
