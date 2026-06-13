@extends('template')
@section('title', 'Data Nilai')
@section('konten')
    <a href="/kuliah" class="btn btn-secondary my-4">Kembali</a>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div class="card">
        <div class="card-header">Form Tambah Data Nilai </div>

        <div class="card-body">
            <form action="{{ route('kuliah.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" name="NRP" id="NRP" value="{{ old('NRP') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Nilai Angka</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="NilaiAngka" id="NilaiAngka" value="{{ old('NilaiAngka') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">SKS</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="SKS" id="SKS" value="{{ old('SKS') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" class="btn btn-primary" value="Simpan Data">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
