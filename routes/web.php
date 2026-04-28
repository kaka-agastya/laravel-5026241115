<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pertemuan1', function () {
    return view('pertemuan1');
});
Route::get('/pertemuan2', function () {
    return view('pertemuan2');
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
Route::get('/pertemuan6', function () {
    return view('pertemuan6');
});
