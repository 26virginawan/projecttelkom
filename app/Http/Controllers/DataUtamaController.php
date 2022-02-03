<?php

namespace App\Http\Controllers;

use Session;

use App\data_utama2020;
use App\data_utama2021;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataUtamaController extends Controller
{
    public function index()
    {
        $data_utama2020 = data_utama2020::get();
        $data_utama2021 = data_utama2021::get();
        return view(
            'datautama.datautama',
            compact('data_utama2020', 'data_utama2021')
        );
    }
    public function cariData(Request $request)
    {
        $cari = $request->cari;
        $data_utama2020 = DB::table('data_utama2020')
            ->where('kode', 'like', '%' . $cari . '%')
            ->orWhere('nama', 'like', '%' . $cari . '%')
            ->orWhere('thn_salur', 'like', '%' . $cari . '%')
            ->orWhere('id', 'like', '%' . $cari . '%')
            ->paginate(50);

        return view('datautama.thn2020.index', [
            'data_utama2020' => $data_utama2020,
        ]);
    }
    public function add()
    {
        return view('datautama.thn2020.create');
    }

    public function create(Request $request)
    {
        $data_utama2020 = data_utama2020::create([
            'id' => $request->id,
            'month' => $request->month,
            'target' => $request->target,
            'relasi' => $request->relasi,
            'call_m' => $request->call_m,
            'call_c' => $request->call_c,
        ]);
        return redirect('/datautama2020');
    }

    public function delete($id)
    {
        $data_utama2020 = data_utama2020::find($id);
        $data_utama2020->delete();
        return redirect('/datautama2020');
    }

    public function edit($id)
    {
        $data_utama2020 = data_utama2020::find($id);
        return view('datautama.thn2020.edit', [
            'data_utama2020' => $data_utama2020,
        ]);
    }
    public function update($id, Request $request)
    {
        $data_utama2020 = data_utama2020::find($id);
        $data_utama2020->month = $request->month;
        $data_utama2020->target = $request->target;
        $data_utama2020->relasi = $request->relasi;
        $data_utama2020->call_m = $request->call_m;
        $data_utama2020->call_c = $request->call_c;
        $data_utama2020->save();
        return redirect('/datautama2020');
    }
    public function export_excel()
    {
        return Excel::download(new AngsurExport(), 'datautama2020.xlsx');
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