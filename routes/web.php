<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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
