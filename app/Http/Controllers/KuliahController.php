<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KuliahController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get();

		// mengambil data dari table pegawai dengan pagination
		$kuliah = DB::table('nilaikuliah')->get();
 
    	// mengirim data pegawai ke view index
    	return view('kuliah.index',['kuliah' => $kuliah]);
 
    }
	// method untuk menampilkan view form tambah pegawai
	public function create()
	{
 
		// memanggil view tambah
		return view('kuliah.create');
 
	}
 
	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kuliah');
 
	}
 
	// method untuk hapus data pegawai
	public function destroy($ID)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('nilaikuliah')->where('ID',$ID)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/kuliah');
	}
}
