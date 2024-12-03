<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view ('content.contentmaster');
    }
    
    public function home(){
        return view ('content.contenthome');
    }
    public function add(){
        return view('content.addevent');
    }
}
