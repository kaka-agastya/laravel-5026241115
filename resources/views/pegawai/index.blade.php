@extends('pegawai.template')
@section('title', 'Data pegawai')
@section('konten')

    <h2>Data Pegawai</h2>

    <a href="{{ route('pegawai.create') }}" class="btn btn-primary my-4">Tambah pegawai</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Aksi</th>
        </tr>

        @forelse($mypegawai as $row)
            <tr>
                <td>{{ $row->kodepegawai }}</td>
                <td>{{ $row->namalengkap }}</td>
                <td>{{ $row->divisi }}</td>
                <td>{{ $row->departemen }}</td>
                <td>
                    <a href="{{ route('pegawai.view', $row->kodepegawai) }}" class="btn btn-primary">View</a>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data pegawai.</td>
            </tr>
        @endforelse
    </table>
@endsection
