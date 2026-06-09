<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasDBController extends Controller
{
    public function indextas()
    {
    	// mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get();

		// mengambil data dari table pegawai dengan pagination
		$tas = DB::table('tas')->paginate(10);
 
    	// mengirim data pegawai ke view index
    	return view('indextas',['tas' => $tas]);
 
    }
	// method untuk menampilkan view form tambah pegawai
	public function tambahtas()
	{
 
		// memanggil view tambah
		return view('tambahtas');
 
	}
 
	// method untuk insert data ke table pegawai
	public function storetas(Request $request)
	{
		// insert data ke table pegawai
		DB::table('tas')->insert([
			'merktas' => $request->merk,
			'stocktas' => $request->stok,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/tas');
 
	}
 
	// method untuk edit data pegawai
	public function edittas($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$tas = DB::table('tas')->where('kodetas',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edittas',['tas' => $tas]);
 
	}
 
	// update data pegawai
	public function updatetas(Request $request)
	{
		// update data pegawai
		DB::table('tas')->where('kodetas',$request->id)->update([
			'merktas' => $request->merk,
			'stocktas' => $request->stok,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/tas');
	}
 
	// method untuk hapus data pegawai
	public function hapustas($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('tas')->where('kodetas',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/tas');
	}
	public function caritas(Request $request)
{
	// menangkap data pencarian
	$cari = $request->cari;
 
 	// mengambil data dari table pegawai sesuai pencarian data
	$tas = DB::table('tas')
	->where('merktas','like',"%".$cari."%")
	->paginate();
 
    	// mengirim data pegawai ke view index
	return view('indextas',['tas' => $tas]);
 
}
}
