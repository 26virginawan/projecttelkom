<?php

namespace App\Http\Controllers;

use Session;

use App\data_nunggak2020;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataNunggak2020Controller extends Controller
{
    public function index()
    {
        $data_nunggak2020 = data_nunggak2020::sortable()->paginate(50);
        return view(
            'datanunggak.thn2020.index',
            ['data_nunggak2020' => $data_nunggak2020],
            compact('data_nunggak2020')
        );
    }

    public function cariData(Request $request)
    {
        $cari = $request->cari;
        $data_nunggak2019 = DB::table('data_nunggak2019')
            ->where('kode', 'like', '%' . $cari . '%')
            ->orWhere('nama', 'like', '%' . $cari . '%')
            ->paginate(50);

        return view('datanunggak.thn2011.index', [
            'data_nunggak2016' => $data_nunggak2016,
        ]);
    }
    public function add()
    {
        return view('datanunggak.thn2020.create');
    }

    public function create(Request $request)
    {
        $data_nunggak2020 = data_nunggak2020::create([
            'id' => $request->id,
            'kode' => $request->kode,
            'nama' => $request->nama,
            'usaha' => $request->usaha,
            'tgl_terakhir_bayar' => $request->tgl_terakhir_bayar,
            'terakhir_bayar' => $request->terakhir_bayar,
            'total_bayar' => $request->total_bayar,
            'total_angsur' => $request->total_angsur,
            'sisa_hutang' => $request->sisa_hutang,
        ]);
        return redirect('/datanunggak2020');
    }

    public function delete($id)
    {
        $data_nunggak2020 = data_nunggak2020::find($id);
        $data_nunggak2020->delete();
        return redirect('/datanunggak2020');
    }

    public function edit($id)
    {
        $data_nunggak2020 = data_nunggak2020::find($id);
        return view('datanunggak.thn2020.edit', [
            'data_nunggak2020' => $data_nunggak2020,
        ]);
    }
    public function update($id, Request $request)
    {
        $data_nunggak2020 = data_nunggak2020::find($id);
        $data_nunggak2020->id = $request->id;
        $data_nunggak2020->kode = $request->kode;
        $data_nunggak2020->nama = $request->nama;
        $data_nunggak2020->usaha = $request->usaha;
        $data_nunggak2020->tgl_terakhir_bayar = $request->tgl_terakhir_bayar;
        $data_nunggak2020->terakhir_bayar = $request->terakhir_bayar;
        $data_nunggak2020->total_bayar = $request->total_bayar;
        $data_nunggak2020->total_angsur = $request->total_angsur;
        $data_nunggak2020->sisa_hutang = $request->sisa_hutang;
        $data_nunggak2020->save();
        return redirect('/datanunggak2020');
    }
    public function export_excel()
    {
        return Excel::download(new AngsurExport(), 'datautama2019.xlsx');
    }

    public function import_excel(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx',
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_angsur', $nama_file);

        // import data
        Excel::import(
            new AngsurImport(),
            public_path('/file_angsur/' . $nama_file)
        );

        // notifikasi dengan session
        Session::flash('sukses', 'Data angsur Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect('/dataangsur');
    }
}