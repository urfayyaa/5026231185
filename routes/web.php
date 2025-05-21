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

Route::get('pertama', function () {
    return view('pertama');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('validasi', function () {
    return view('validasi1');
});

Route::get('template', function () {
    return view('template1');
});

Route::get('layout', function () {
    return view('layout');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('ets', function () {
    return view('ets');
});

Route::get('aespalinktree', function () {
    return view('aespalinktree');
});

Route::get('frontend', function () {
    return view('frontend');
});

