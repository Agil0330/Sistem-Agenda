<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view ('content.contentlogin');
    }
    public function regis(){
        return view ('content.contentregis');
    }
}
