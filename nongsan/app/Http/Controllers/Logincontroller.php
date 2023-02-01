<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    // Đăng Nhập - 
    public function login(){
        return view('pages.login.login');
    }

    // Đăng kí - register
    public function register(){
        return view('pages.register.register');
    }
}
