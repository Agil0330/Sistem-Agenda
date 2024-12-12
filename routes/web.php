<?php

use Illuminate\Support\Facades\Route;
use App\Models\Event;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;


Route::get('/', function (){
    return view ('content.contentlogin');
});


route::get('/login', [LoginController::class, 'login'])->name('login');
route::get('/regis', [LoginController::class, 'regis'])->name('regis');
route::post('/login_proses', [LoginController::class, 'login_proses'])->name('login_proses');
route::post('/regis_proses', [LoginController::class, 'regis_proses'])->name('regis_proses');
route::get('/logout', [LoginController::class, 'logout'])->name('logout');

route::get('/user', [BlogController::class, 'view'])->name('view');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin'], function(){
    route::get('/event', [BlogController::class, 'index'])->name('event');
    route::get('/home', [BlogController::class, 'home'])->name('home');
    route::get('/add', [BlogController::class, 'add'])->name('add');

    route::post('/push', [BlogController::class, 'push'])->name('push');
    route::get('/edit/{id}', [BlogController::class, 'edit'])->name('edit');
    route::PUT('/update/{id}', [BlogController::class, 'update'])->name('update');
    route::DELETE('/hapus/{id}', [BlogController::class, 'hapus'])->name('hapus');
});

