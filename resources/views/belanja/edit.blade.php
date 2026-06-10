@extends('template')
@section('title', 'Data Produk')
@section('konten')

    <h2>Edit Produk</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('belanja.update', $belanja->ID) }}" method="POST" onsubmit="return validasiForm()">
        @csrf
        @method('PUT')

        <p>
            <label>Kode Barang</label><br>
            <input type="number" name="KodeBarang" id="KodeBarang" value="{{ old('KodeBarang', $belanja->KodeBarang) }}">
        </p>

        <p>
            <label>Jumlah</label><br>
            <input type="number" name="Jumlah" id="Jumlah" value="{{ old('Jumlah', $belanja->Jumlah) }}">
        </p>

        <p>
            <label>Harga</label><br>
            <input type="number" name="Harga" id="Harga" value="{{ old('Harga', $belanja->Harga) }}">
        </p>

        <button type="submit">Update</button>
        <a href="{{ route('belanja.index') }}">Kembali</a>
    </form>
@endsection
