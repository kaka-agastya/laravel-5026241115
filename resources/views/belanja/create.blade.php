@extends('template')
@section('title', 'Data Produk')
@section('konten')

    <h2>Tambah Produk</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('belanja.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>Kode Barang</label><br>
            <input type="text" name="KodeBarang" id="KodeBarang" value="{{ old('KodeBarang') }}">
        </p>

        <p>
            <label>Jumlah</label><br>
            <input type="text" name="Jumlah" id="Jumlah" value="{{ old('Jumlah') }}">
        </p>

        <p>
            <label>Harga</label><br>
            <input type="text" name="Harga" id="Harga" value="{{ old('Harga') }}">
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('siswa.index') }}">Kembali</a>
    </form>
@endsection
