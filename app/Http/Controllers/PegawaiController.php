<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        $mypegawai = DB::table('mypegawai')->get();

        return view('pegawai.index', compact('mypegawai'));
    }

    public function view($kodepegawai)
    {
        $mypegawai = DB::table('mypegawai')->where('kodepegawai', $kodepegawai)
            ->first();

        return view('pegawai.view', compact('mypegawai'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|string|max:9|unique:mypegawai,kodepegawai',
        ],
            [
                // Kustom pesan error
                'kodepegawai.unique' => 'kodepegawai yang Anda masukkan sudah terdaftar. Silakan gunakan kodepegawai lain.',
            ]);
        DB::table('mypegawai')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }
}
