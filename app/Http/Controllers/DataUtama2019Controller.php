<?php

namespace App\Http\Controllers;

use Session;

use App\data_utama2019;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataUtama2019Controller extends Controller
{
    public function index()
    {
        $data_utama2019 = data_utama2019::sortable()->paginate(50);
        return view(
            'datautama.thn2019.index',
            ['data_utama2019' => $data_utama2019],
            compact('data_utama2019')
        );
    }
    public function cariData(Request $request)
    {
        $cari = $request->cari;
        $data_utama2019 = DB::table('data_utama2019')
            ->where('kode', 'like', '%' . $cari . '%')
            ->orWhere('nama', 'like', '%' . $cari . '%')
            ->orWhere('thn_salur', 'like', '%' . $cari . '%')
            ->orWhere('id', 'like', '%' . $cari . '%')
            ->paginate(50);

        return view('datautama.thn2019.index', [
            'data_utama2019' => $data_utama2019,
        ]);
    }
    public function add()
    {
        return view('datautama.thn2019.create');
    }

    public function create(Request $request)
    {
        $data_utama2019 = data_utama2019::create([
            'id' => $request->id,
            'month' => $request->month,
            'target' => $request->target,
            'relasi' => $request->relasi,
            'call_m' => $request->call_m,
            'call_c' => $request->call_c,
        ]);
        return redirect('/datautama2019');
    }

    public function delete($id)
    {
        $data_utama2019 = data_utama2019::find($id);
        $data_utama2019->delete();
        return redirect('/datautama2019');
    }

    public function edit($id)
    {
        $data_utama2019 = data_utama2019::find($id);
        return view('datautama.thn2019.edit', [
            'data_utama2019' => $data_utama2019,
        ]);
    }
    public function update($id, Request $request)
    {
        $data_utama2019 = data_utama2018::find($id);
        $data_utama2019->month = $request->month;
        $data_utama2019->target = $request->target;
        $data_utama2019->relasi = $request->relasi;
        $data_utama2019->call_m = $request->call_m;
        $data_utama2019->call_c = $request->call_c;
        $data_utama2019->save();
        return redirect('/datautama2019');
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