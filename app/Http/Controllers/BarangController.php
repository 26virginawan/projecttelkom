<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = DB::table('barang')->get();
        return view('barang.index', ['barang' => $barang]);
    }

    public function add()
    {
        return view('barang.create');
    }

    public function create(Request $request)
    {
        $barang = Barang::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'stok_barang' => $request->stok_barang,
            'harga_barang' => $request->harga_barang,
        ]);
        return redirect('/barang');
    }

    public function delete($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/barang');
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang.edit', ['barang' => $barang]);
    }
    public function update($id, Request $request)
    {
        $barang = Barang::find($id);
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->stok_barang = $request->stok_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->save();
        return redirect('/barang');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $barang = DB::table('barang')
            ->where('nama_barang', 'like', '%' . $cari . '%')
            ->paginate();

        return view('barang.index', ['barang' => $barang]);
    }
}