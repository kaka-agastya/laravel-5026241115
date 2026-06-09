@extends('template')
@section('judul_halaman', 'Data Pegawai')
@section('konten')
    <a href="/tas" class="btn btn-secondary my-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Pegawai
        </div>

        <div class="card-body">
            <form action="/tas/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merk" class="col-sm-2 col-form-label">Merek</label>
                    <div class="col-sm-10">
                        <input type="text" name="merk" id="merk" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="number" name="stok" id="stok" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Ketersediaan</label>
                    <div class="col-sm-10">
                        <textarea name="tersedia" id="tersedia" class="form-control" rows="4" required></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
