<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\TasDBController;
use App\Http\Controllers\SiswaController;

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