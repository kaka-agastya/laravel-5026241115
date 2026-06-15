<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\TasDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('biodata', [DosenController::class, 'biodata']);
Route::get('dosen', [DosenController::class, 'index']);

Route::get('blog', function () {
    return view('blog');
});
Route::get('/pertemuan1', function () {
    return view('pertemuan1');
});
Route::get('/pertemuan2-1', function () {
    return view('pertemuan2-1');
});
Route::get('/pertemuan2-2', function () {
    return view('pertemuan2-2');
});
Route::get('/pertemuan3', function () {
    return view('pertemuan3');
});
Route::get('/tugaspertemuan3', function () {
    return view('tugaspertemuan3');
});
Route::get('/tugaspertemuan4', function () {
    return view('tugaspertemuan4');
});
Route::get('/pertemuan5', function () {
    return view('pertemuan5');
});
Route::get('/pertemuan5-menu', function () {
    return view('pertemuan5-menu');
});
Route::get('/pertemuan6', function () {
    return view('pertemuan6');
});

Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
// Route::get('/pegawai','PegawaiDBController::class,@index');

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
// Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);

Route::get('/tas', [TasDBController::class, 'indextas']);
Route::get('/tas/tambah', [TasDBController::class, 'tambahtas']);
Route::post('/tas/store', [TasDBController::class, 'storetas']);
Route::get('/tas/edit/{id}', [TasDBController::class, 'edittas']);
Route::post('/tas/update', [TasDBController::class, 'updatetas']);
Route::get('/tas/hapus/{id}', [TasDBController::class, 'hapustas']);
Route::get('/tas/cari', [TasDBController::class, 'caritas']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('/belanja', [BelanjaController::class, 'index'])->name('belanja.index');
Route::get('/belanja/create', [BelanjaController::class, 'create'])->name('belanja.create');
Route::post('/belanja', [BelanjaController::class, 'store'])->name('belanja.store');
// Route::get('/belanja/{nrp}/edit', [BelanjaController::class, 'edit'])->name('belanja.edit');
// Route::put('/belanja/{nrp}', [BelanjaController::class, 'update'])->name('belanja.update');
Route::delete('/belanja/{nrp}', [BelanjaController::class, 'destroy'])->name('belanja.destroy');

Route::get('/kuliah', [KuliahController::class, 'index'])->name('kuliah.index');
Route::get('/kuliah/create', [KuliahController::class, 'create'])->name('kuliah.create');
Route::post('/kuliah', [KuliahController::class, 'store'])->name('kuliah.store');
// Route::get('/belanja/{nrp}/edit', [BelanjaController::class, 'edit'])->name('belanja.edit');
// Route::put('/belanja/{nrp}', [BelanjaController::class, 'update'])->name('belanja.update');
Route::delete('/kuliah/{nrp}', [KuliahController::class, 'destroy'])->name('kuliah.destroy');

Route::get('/eas', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/eas/create', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/eas', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/eas/{id}', [PegawaiController::class, 'view'])->name('pegawai.view');