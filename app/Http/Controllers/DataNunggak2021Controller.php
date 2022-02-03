<?php

namespace App\Http\Controllers;

use Session;

use App\data_nunggak2021;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataNunggak2021Controller extends Controller
{
    public function index()
    {
        $data_nunggak2021 = data_nunggak2021::sortable()->paginate(50);
        return view(
            'datanunggak.thn2021.index',
            ['data_nunggak2021' => $data_nunggak2021],
            compact('data_nunggak2021')
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
        return view('datanunggak.thn2021.create');
    }

    public function create(Request $request)
    {
        $data_nunggak2021 = data_nunggak2021::create([
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
        return redirect('/datanunggak2021');
    }

    public function delete($id)
    {
        $data_nunggak2021 = data_nunggak2021::find($id);
        $data_nunggak2021->delete();
        return redirect('/datanunggak2021');
    }

    public function edit($id)
    {
        $data_nunggak2021 = data_nunggak2021::find($id);
        return view('datanunggak.thn2021.edit', [
            'data_nunggak2021' => $data_nunggak2021,
        ]);
    }
    public function update($id, Request $request)
    {
        $data_nunggak2021 = data_nunggak2021::find($id);
        $data_nunggak2021->id = $request->id;
        $data_nunggak2021->kode = $request->kode;
        $data_nunggak2021->nama = $request->nama;
        $data_nunggak2021->usaha = $request->usaha;
        $data_nunggak2021->tgl_terakhir_bayar = $request->tgl_terakhir_bayar;
        $data_nunggak2021->terakhir_bayar = $request->terakhir_bayar;
        $data_nunggak2021->total_bayar = $request->total_bayar;
        $data_nunggak2021->total_angsur = $request->total_angsur;
        $data_nunggak2021->sisa_hutang = $request->sisa_hutang;
        $data_nunggak2021->save();
        return redirect('/datanunggak2021');
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