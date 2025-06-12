@extends('templateBootstrap')

@section('content')
    <h3>Edit Data TV</h3>

    <a href="/tv">Kembali</a>

    <br />
    <br />

    @foreach ($tv as $t)
        <form action="/tv/{{ $t->tv_id }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $t->tv_id }}"> <br />

            Merk TV: <input type="text" name="merkTV" value="{{ $t->merkTV }}" required> <br />
            Harga TV: <input type="number" name="hargaTV" value="{{ $t->hargaTV }}" required> <br />
            Tersedia:
            <select name="tersedia" required>
                <option value="Tersedia" {{ $t->tersedia == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="Tidak Tersedia" {{ $t->tersedia == 'Tidak Tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
            </select> <br />
            Berat (kg): <input type="text" name="berat" value="{{ $t->berat }}" required> <br />

            <input type="submit" value="Simpan Data">
        </form>
    @endforeach

    @endsection

