<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('welcome');
});
Route::get('/echo', function () {
    echo 'Hello Gaesss!';
});
Route::get('/home', function () {
    return view ('main');
});