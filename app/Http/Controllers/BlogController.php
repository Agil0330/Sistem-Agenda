<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class BlogController extends Controller
{
    public function index(){
        $data_event=event::all();
        return view ('content.contentmaster', compact('data_event'));
    }
    
    public function home(){
        return view ('content.contenthome');
    }
    public function add(){
        return view('content.addevent');
    }


    public function push(Request $request){
        dd($request->all());
    }
}
