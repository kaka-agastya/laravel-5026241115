@extends('pegawai.template')
@section('title', 'Data pegawai')
@section('konten')
    <a href="/eas" class="btn btn-primary my-4">Kembali</a>
    <h2>Detail Data Karyawan</h2>
    <br>


    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
        </tr>

        <tr>
            <td>{{ $mypegawai->kodepegawai }} </td>
            <td>{{ $mypegawai->namalengkap }}</td>
            <td>{{ $mypegawai->divisi }}</td>
            <td>{{ $mypegawai->departemen }}</td>
        </tr>
    </table>
@endsection
