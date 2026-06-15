@extends('pegawai.template')
@section('title', 'Data pegawai')
@section('konten')
    <a href="/eas" class="btn btn-primary my-4">Kembali</a>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div class="card">
        <div class="card-header">Form Tambah Data pegawai</div>

        <div class="card-body">
            <form action="{{ route('pegawai.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-10">
                        <input type="text" name="kodepegawai" id="kodepegawai" maxlength="9"
                            value="{{ old('kodepegawai') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="namalengkap" id="namalengkap" maxlength="50"
                            value="{{ old('namalengkap') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" name="divisi" id="divisi" value="{{ old('divisi') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Departemen</label>
                    <div class="col-sm-10">
                        <input type="text" name="departemen" id="departemen" value="{{ old('departemen') }}">
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

    <script>
        function validasiForm() {
            let kodepegawai = document.getElementById('kodepegawai').value.trim();
            let namalengkap = document.getElementById('namalengkap').value.trim();
            let divisi = document.getElementById('divisi').value.trim();
            let tanggal = document.getElementById('departemen').value;

            if (!/^[a-zA-Z0-9]+$/g.test(kodepegawai)) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Hanya diisi huruf & angka",
                    icon: "error"
                });
                document.myForm.name.focus();
                return false;
            }
            if (!/^[a-zA-Z ]+$/g.test(namalengkap)) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Hanya diisi huruf",
                    icon: "error"
                });
                document.myForm.name.focus();
                return false;
            }
            if (kodepegawai === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kode Pegawai wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (kodepegawai.length > 9) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kode Pegawai maksimal 9 karakter",
                    icon: "error"
                });
                return false;
            }

            if (namalengkap === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama Lengkap wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (namalengkap.length > 50) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama Lengkap maksimal 50 karakter",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection
