@extends('templateBootstrap')

@section('content')
    <h3>Data TV</h3>

    <a href="/tv/create" class="btn btn-primary btn-sm"> + Tambah TV Baru</a>

    <p>Cari Data TV :</p>
    <form action="/tv/cari" method="GET" class="form-inline">
        <input type="text" name="cari" placeholder="Cari Merk TV .." class="form-control">
        <input type="submit" value="CARI" class="btn btn-secondary btn-sm ml-2">
    </form>

    <br />

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Merk</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat</th>
            <th>Aksi</th>
        </tr>
        @foreach ($tv as $t)
            <tr>
                <td>{{ $t->tv_id }}</td>
                <td>{{ $t->merkTV }}</td>
                <td>{{ $t->hargaTV }}</td>
                <td>{{ $t->tersedia }}</td>
                <td>{{ $t->berat }} kg</td>
                <td>
                    <a href="/tv/edit/{{ $t->tv_id }}" class="btn btn-warning btn-sm">Edit</a>
                    |
                    <a href="/tv/hapus/{{ $t->tv_id }}" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="mt-3">
        {{ $tv->links() }}
    </div>
@endsection
