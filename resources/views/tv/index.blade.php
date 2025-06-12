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
                    <a href="/tv/{{ $t->tv_id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    |
                    <form action="/tv/{{ $t->tv_id }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="mt-3">
        {{ $tv->links() }}
    </div>
@endsection
