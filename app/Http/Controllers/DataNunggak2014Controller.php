<?php

namespace App\Http\Controllers;

use Session;

use App\data_nunggak2014;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataNunggak2014Controller extends Controller
{
    public function index()
    {
        $data_nunggak2014 = data_nunggak2014::sortable()->paginate(10);
        return view(
            'datanunggak.thn2014.index',
            ['data_nunggak2014' => $data_nunggak2014],
            compact('data_nunggak2014')
        );
    }

    public function cariData(Request $request)
    {
        $cari = $request->cari;
        $data_nunggak2014 = DB::table('data_nunggak2014')
            ->where('kode', 'like', '%' . $cari . '%')
            ->orWhere('nama', 'like', '%' . $cari . '%')
            ->paginate(50);

        return view('datanunggak.thn2011.index', [
            'data_nunggak2011' => $data_nunggak2011,
        ]);
    }
    public function add()
    {
        return view('datanunggak.thn2014.create');
    }

    public function create(Request $request)
    {
        $data_nunggak2014 = data_nunggak2014::create([
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
        return redirect('/datanunggak2014');
    }

    public function delete($id)
    {
        $data_nunggak2014 = data_nunggak2014::find($id);
        $data_nunggak2014->delete();
        return redirect('/datanunggak2014');
    }

    public function edit($id)
    {
        $data_nunggak2014 = data_nunggak2014::find($id);
        return view('datanunggak.thn2014.edit', [
            'data_nunggak2014' => $data_nunggak2014,
        ]);
    }
    public function update($id, Request $request)
    {
        $data_nunggak2014 = data_nunggak2014::find($id);
        $data_nunggak2014->id = $request->id;
        $data_nunggak2014->kode = $request->kode;
        $data_nunggak2014->nama = $request->nama;
        $data_nunggak2014->usaha = $request->usaha;
        $data_nunggak2014->tgl_terakhir_bayar = $request->tgl_terakhir_bayar;
        $data_nunggak2014->terakhir_bayar = $request->terakhir_bayar;
        $data_nunggak2014->total_bayar = $request->total_bayar;
        $data_nunggak2014->total_angsur = $request->total_angsur;
        $data_nunggak2014->sisa_hutang = $request->sisa_hutang;
        $data_nunggak2014->save();
        return redirect('/datanunggak2014');
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