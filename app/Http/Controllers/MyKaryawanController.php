<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyKaryawanController extends Controller
{

   // Tampilkan semua data mykaryawan
   public function index() {
    $mykaryawan = DB::table('mykaryawan')->get();
    return view('indexmykaryawan', ['mykaryawan' => $mykaryawan]);
}

// Tampilkan detail 1 mykaryawan
public function view($kodepegawai) {
    $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
    return view('viewmykaryawan', ['mykaryawan' => $mykaryawan]);
}

// Tampilkan form edit
public function edit($kodepegawai) {
    $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
    return view('editmykaryawan', ['mykaryawan' => $mykaryawan]);
}

// Update data mykaryawan
public function update(Request $request) {
    DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->update([
        'namalengkap' => $request->namalengkap,
        'divisi' => $request->divisi,
        'departemen' => $request->departemen,
    ]);

    return redirect('/eas');
}

}
