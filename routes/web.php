<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\TvController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\KaryawanController;

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

Route::get('dosen',[DosenController::class,'index']);
Route::get('welcome',[DosenController::class,'welcome']);

//Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);
Route::get('/formulir', [PegawaiController::class,'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

// route blog
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);


//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

// route TV (urutan penting!)
Route::get('/tv', [TvController::class, 'index']);
Route::get('/tv/tambah', [TvController::class, 'tambah']);
Route::post('/tv/store', [TvController::class, 'store']);
Route::get('/tv/edit/{id}', [TvController::class, 'edit']);
Route::put('/tv/update', [TvController::class, 'update']);
Route::get('/tv/hapus/{id}', [TvController::class, 'hapus']);
Route::get('/tv/cari', [TvController::class, 'cari']);

// route Counter
Route::get('/counter', [CounterController::class, 'index']);

//route Karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/delete/{kodepegawai}', [KaryawanController::class, 'delete']);
Route::get('/karyawan/cari', [KaryawanController::class, 'cari']);
