<?php

use Illuminate\Support\Facades\Route;
use App\Models\Event;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AddEventController;


Route::get('/', function (){
    return view ('content.contentlogin');
    });

route::get('/login', [LoginController::class, 'login']);
route::get('/regis', [LoginController::class, 'regis']);


route::get('/event', [BlogController::class, 'index']);
route::get('/home', [BlogController::class, 'home']);
route::get('/add', [BlogController::class, 'add']);
route::post('/push', [BlogController::class, 'push']);

