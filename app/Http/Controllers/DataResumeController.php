<?php

namespace App\Http\Controllers;

use Session;

use App\data_resume;
use App\data_nunggak2010;
use App\data_nunggak2011;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataResumeController extends Controller
{
    public function index()
    {
        $nunggak2010 = data_nunggak2010::get();
        $nunggak2011 = data_nunggak2011::get();

        $data_resume = data_resume::sortable()->paginate(50);
        return view(
            'dataresume.index',
            ['data_resume' => $data_resume],
            compact('data_resume', 'nunggak2010')
        );
    }
    public function cariData(Request $request)
    {
        $cari = $request->cari;
        $data_resume = DB::table('data_resume')
            ->where('kode', 'like', '%' . $cari . '%')
            ->orWhere('nama', 'like', '%' . $cari . '%')
            ->orWhere('thn_salur', 'like', '%' . $cari . '%')
            ->orWhere('id', 'like', '%' . $cari . '%')
            ->paginate(50);

        return view('dataresume.index', [
            'data_resume' => $data_resume,
        ]);
    }
    public function add()
    {
        return view('dataresume.create');
    }

    public function create(Request $request)
    {
        $data_resume = data_resume::create([
            'id' => $request->id,
            'jml_mitra' => $request->jml_mitra,
            'pokok_pinj' => $request->pokok_pinj,
            'mitra_nunggak' => $request->mitra_nunggak,
        ]);
        return redirect('/dataresume');
    }

    public function delete($id)
    {
        $data_resume = data_resume::find($id);
        $data_resume->delete();
        return redirect('/dataresume');
    }

    public function edit($id)
    {
        $data_resume = data_resume::find($id);
        return view('dataresume.edit', [
            'data_resume' => $data_resume,
        ]);
    }
    public function update($id, Request $request)
    {
        $data_resume = data_resume::find($id);
        $data_resume->id = $request->id;
        $data_resume->jml_mitra = $request->jml_mitra;
        $data_resume->pokok_pinj = $request->pokok_pinj;
        $data_resume->mitra_nunggak = $request->mitra_nunggak;
        $data_resume->save();
        return redirect('/dataresume');
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