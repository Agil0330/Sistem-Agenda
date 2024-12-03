<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view ('content.contentmaster');
    }
    public function login(){
        return view ('content.contentlogin');
    }
    public function home(){
        return view ('content.contenthome');
    }
}
