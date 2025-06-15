@extends('templateBootstrap')

@section('content')

<h3>Tambah Data TV</h3>

<form action="{{ url('/tv/store') }}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="merkTV" class="col-sm-2 col-form-label">Merk TV:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="merkTV" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="hargaTV" class="col-sm-2 col-form-label">Harga TV:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="hargaTV" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="tersedia" class="col-sm-2 col-form-label">Tersedia:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="tersedia" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="berat" class="col-sm-2 col-form-label">Berat (kg):</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="berat" required>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection

