<?php

namespace App\Http\Controllers;

use Session;

use App\data_nunggak2012;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataNunggak2012Controller extends Controller
{
    public function index()
    {
        $data_nunggak2012 = data_nunggak2012::sortable()->paginate(50);
        return view(
            'datanunggak.thn2012.index',
            ['data_nunggak2012' => $data_nunggak2012],
            compact('data_nunggak2012')
        );
    }

    public function cariData(Request $request)
    {
        $cari = $request->cari;
        $data_nunggak2011 = DB::table('data_nunggak2011')
            ->where('kode', 'like', '%' . $cari . '%')
            ->orWhere('nama', 'like', '%' . $cari . '%')
            ->paginate(50);

        return view('datanunggak.thn2011.index', [
            'data_nunggak2011' => $data_nunggak2011,
        ]);
    }
    public function add()
    {
        return view('datanunggak.thn2012.create');
    }

    public function create(Request $request)
    {
        $data_nunggak2012 = data_nunggak2012::create([
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
        return redirect('/datanunggak2012');
    }

    public function delete($id)
    {
        $data_nunggak2012 = data_nunggak2012::find($id);
        $data_nunggak2012->delete();
        return redirect('/datanunggak2012');
    }

    public function edit($id)
    {
        $data_nunggak2012 = data_nunggak2012::find($id);
        return view('datanunggak.thn2012.edit', [
            'data_nunggak2012' => $data_nunggak2012,
        ]);
    }
    public function update($id, Request $request)
    {
        $data_nunggak2012 = data_nunggak2012::find($id);
        $data_nunggak2012->id = $request->id;
        $data_nunggak2012->kode = $request->kode;
        $data_nunggak2012->nama = $request->nama;
        $data_nunggak2012->usaha = $request->usaha;
        $data_nunggak2012->tgl_terakhir_bayar = $request->tgl_terakhir_bayar;
        $data_nunggak2012->terakhir_bayar = $request->terakhir_bayar;
        $data_nunggak2012->total_bayar = $request->total_bayar;
        $data_nunggak2012->total_angsur = $request->total_angsur;
        $data_nunggak2012->sisa_hutang = $request->sisa_hutang;
        $data_nunggak2012->save();
        return redirect('/datanunggak2012');
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