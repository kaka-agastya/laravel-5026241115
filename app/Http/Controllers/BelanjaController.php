<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class BelanjaController extends Controller
{
    public function index()
    {
        $belanja = DB::table('keranjangbelanja')->orderBy('ID')->get();
        return view('belanja.index', compact('belanja'));
    }

    public function create()
    {
        return view('belanja.create');
    }

    public function store(Request $request)
    {

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        return redirect()->route('belanja.index')->with('success', 'Data Produk berhasil ditambahkan.');
    }

    public function edit($keranjangbelanja)
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->where('ID', $keranjangbelanja)->first();

        if (!$keranjangbelanja) {
            abort(404);
        }

        return view('belanja.edit', compact('belanja'));
    }

    public function update(Request $request, $keranjangbelanja)
    {

        DB::table('keranjangbelanja')
            ->where('ID', $ID)
            ->update([
                'ID' => $request->ID,
                'KodeBarang' => $request->KodeBarang,
                'Jumlah' => $request->Jumlah,
                'Harga' => $request->Harga,
            ]);

        return redirect()->route('belanja.index')->with('success', 'Data produk berhasil diubah.');
    }

    public function destroy($keranjangbelanja)
    {
        DB::table('keranjangbelanja')->where('ID', $ID)->delete();

        return redirect()->route('belanja.index')->with('success', 'Data produk berhasil dihapus.');
    }
}
