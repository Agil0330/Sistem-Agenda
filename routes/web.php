<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('welcome');
});
Route::get('/echo', function () {
    echo 'Hello Pukimak!';
});
Route::get('/home', function () {
    return view ('main');
});