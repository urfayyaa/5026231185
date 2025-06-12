<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TvController extends Controller
{
    // Menampilkan semua data TV
    public function index()
    {
        $tv = DB::table('tv')->paginate(10);
        return view('tv.index', ['tv' => $tv]);
    }

    // Menampilkan form tambah TV
    public function tambah()
    {
        return view('tv.create');
    }

    // Menyimpan data TV baru
    public function store(Request $request)
    {
        DB::table('tv')->insert([
            'merkTV' => $request->merkTV,
            'hargaTV' => $request->hargaTV,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        return redirect('/tv');
    }

    // Menampilkan form edit TV berdasarkan ID
    public function edit($id)
    {
        $tv = DB::table('tv')->where('tv_id', $id)->get();
        return view('tv.edit', ['tv' => $tv]);
    }

    // Mengupdate data TV
    public function update(Request $request)
    {
        DB::table('tv')->where('tv_id', $request->id)->update([
            'merkTV' => $request->merkTV,
            'hargaTV' => $request->hargaTV,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        return redirect('/tv');
    }

    // Menghapus data TV
    public function hapus($id)
    {
        DB::table('tv')->where('tv_id', $id)->delete();
        return redirect('/tv');
    }

    // Mencari data TV berdasarkan merkTV
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $tv = DB::table('tv')
            ->where('merkTV', 'like', "%" . $cari . "%")
            ->paginate();

        return view('tv.index', ['tv' => $tv]);
    }
}
