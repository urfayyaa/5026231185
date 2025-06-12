@extends('templateBootstrap')

@section('content')
<h3>Tambah Data TV</h3>

<a href="/tv">Kembali</a>

<br />
<br />

<form action="/tv/store" method="post">
    {{ csrf_field() }}
    Merk TV <input type="text" name="merkTV" required="required"> <br />
    Harga TV <input type="number" name="hargaTV" required="required"> <br />
    Tersedia
    <select name="tersedia" required="required">
        <option value="Tersedia">Tersedia</option>
        <option value="Tidak Tersedia">Tidak Tersedia</option>
    </select> <br />
    Berat (kg) <input type="text" name="berat" required="required"> <br />
    <input type="submit" value="Simpan Data">
</form>

@endsection
