<?php

namespace App\Http\Controllers;

use Session;

use App\data_angsur;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AngsurExport;
use App\Imports\AngsurImport;
use Illuminate\Http\Request;

class DataAngsurController extends Controller
{
    public function index()
    {
        $data_angsur = data_angsur::sortable()->paginate(30);
        return view(
            'angsur.index',
            ['data_angsur' => $data_angsur],
            compact('data_angsur')
        );
    }
    public function cariData(Request $request)
    {
        $cari = $request->cari;
        $data_angsur = DB::table('data_angsur')
            ->where('kode', 'like', '%' . $cari . '%')
            ->orWhere('nama', 'like', '%' . $cari . '%')
            ->orWhere('thn_salur', 'like', '%' . $cari . '%')
            ->orWhere('id', 'like', '%' . $cari . '%')
            ->orWhere('angs_akhir', 'like', '%' . $cari . '%')
            ->paginate(50);

        return view('angsur.index', ['data_angsur' => $data_angsur]);
    }
    public function add()
    {
        return view('angsur.create');
    }

    public function create(Request $request)
    {
        $data_angsur = data_angsur::create([
            'id' => $request->id,
            'lama' => $request->lama,
            'kode' => $request->kode,
            'nama' => $request->nama,
            'ba' => $request->ba,
            'cdsa' => $request->cdsa,
            'provinsi' => $request->provinsi,
            'kab_kota' => $request->kab_kota,
            'thn_salur' => $request->thn_salur,
            'jenis_angs' => $request->jenis_angs,
            'kualitas' => $request->kualitas,
            'angs_akhir' => $request->angs_akhir,
            'gljr' => $request->gljr,
            'angsuran' => $request->angsuran,
            'angs_pokok' => $request->angs_pokok,
            'angs_jasa' => $request->angs_jasa,
            'adj_pokok' => $request->adj_pokok,
            'adj_jasa' => $request->adj_jasa,
            'kelebihan' => $request->kelebihan,
            'pengembalian' => $request->pengembalian,
            'pendapatan' => $request->pendapatan,
            'c_user' => $request->c_user,
            'c_date' => $request->c_date,
        ]);
        return redirect('/dataangsur');
    }

    public function delete($id)
    {
        $data_angsur = data_angsur::find($id);
        $data_angsur->delete();
        return redirect('/dataangsur');
    }

    public function edit($id)
    {
        $data_angsur = data_angsur::find($id);
        return view('angsur.edit', ['data_angsur' => $data_angsur]);
    }
    public function update($id, Request $request)
    {
        $data_angsur = data_angsur::find($id);
        $data_angsur->kode = $request->kode;
        $data_angsur->nama = $request->nama;
        $data_angsur->ba = $request->ba;
        $data_angsur->cdsa = $request->cdsa;
        $data_angsur->provinsi = $request->provinsi;
        $data_angsur->kab_kota = $request->kab_kota;
        $data_angsur->thn_salur = $request->thn_salur;
        $data_angsur->jenis_angs = $request->jenis_angs;
        $data_angsur->kualitas = $request->kualitas;
        $data_angsur->angs_akhir = $request->angs_akhir;
        $data_angsur->gljr = $request->gljr;
        $data_angsur->angsuran = $request->angsuran;
        $data_angsur->angs_pokok = $request->angs_pokok;
        $data_angsur->angs_jasa = $request->angs_jasa;
        $data_angsur->adj_pokok = $request->adj_pokok;
        $data_angsur->adj_jasa = $request->adj_jasa;
        $data_angsur->kelebihan = $request->kelebihan;
        $data_angsur->pengembalian = $request->pengembalian;
        $data_angsur->pendapatan = $request->pendapatan;
        $data_angsur->c_user = $request->c_user;
        $data_angsur->c_date = $request->c_date;
        $data_angsur->save();
        return redirect('/dataangsur');
    }
    public function export_excel()
    {
        return Excel::download(new AngsurExport(), 'angsur.xlsx');
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

    // public function search(Request $request)
    // {
    //     $data_angsur = data_angsur::all();
    //     $fromDate = $request->input('fromDate');
    //     $toDate = $request->input('toDate');
    //     $other = $request->input('other');

    //     $query = DB::table('data_angsur')
    //         ->select()
    //         ->where('angs_akhir', '>=', $fromDate)
    //         ->where('angs_akhir', '<=', $toDate)
    //         ->where('kode', 'like', '%' . $other . '%')
    //         ->orWhere('nama', 'like', '%' . $other . '%')
    //         ->orWhere('thn_salur', 'like', '%' . $other . '%')
    //         ->orWhere('id', 'like', '%' . $other . '%')
    //         ->get();

    //     // dd($query);

    //     // $role = DB::table('users')
    //     //     ->select('users.role_id_user','role_name.role_id','role_name.promission')
    //     //     ->join('role_name','users.role_id_user','=','role_name.role_id')
    //     //     ->get();
    //     return view('angsur.tes', compact('query'));
    // }

    // public function report()
    // {
    //     $data_angsur = data_angsur::all();
    //     $query = DB::table('data_angsur')
    //         ->select()
    //         ->get();
    //     // dd($query);
    //     // dd($query);
    //     return view('angsur.tes', compact('query'));
    // }
}