@extends('templateBootstrap')

@section('content')

<h3>Data My Karyawan</h3>


<!-- Tabel untuk menampilkan data mahasiswa -->
<table class="table table-striped">
    <thead>
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($mykaryawan as $data)
            <tr>
                <td>{{ $data->kodepegawai }}</td>
                <td>{{ ucwords(strtolower($data->namalengkap)) }}</td>
                <td>{{ strtoupper($data->divisi) }}</td>
                <td>{{ strtoupper($data->departemen) }}</td>
                <td>
                    <a href="/mykaryawan/edit/{{ $data->kodepegawai }}" class="btn btn-warning btn-sm">Edit</a>
                    |
                    <a href="/mykaryawan/view/{{ $data->kodepegawai }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center text-muted">
                    Data <strong>{{ $cari }}</strong> tidak ditemukan.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
