<?php

use Illuminate\Support\Facades\Route;
//import java.io ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//import
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1> Selamat Datang di Alfamart </h1>";
});

Route::get('blog', function () {
    return view('blog');
});
