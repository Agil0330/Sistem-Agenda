<?php

use Illuminate\Support\Facades\Route;
use App\Models\Event;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;


Route::get('/', function (){
    return view ('content.contentlogin');
    });

route::get('/login', [LoginController::class, 'login']);
route::get('/regis', [LoginController::class, 'regis']);


route::get('/event', [BlogController::class, 'index'])->name('event');
route::get('/home', [BlogController::class, 'home']);
route::get('/add', [BlogController::class, 'add']);

route::post('/push', [BlogController::class, 'push']);
route::get('/edit/{id}', [BlogController::class, 'edit'])->name('edit');
route::PUT('/update/{id}', [BlogController::class, 'update'])->name('update');
route::get('/hapus/{id}', [BlogController::class, 'hapus'])->name('hapus');
