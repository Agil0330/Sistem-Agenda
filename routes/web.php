<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/main', function () {
    return view ('master');
});
Route::get('/', function () {
    echo 'Hello Gaesss!';
});
// Route::get('/home', function () {
//     return view ('master');
// });
route::get('/home', [BlogController::class, 'index']);