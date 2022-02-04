<?php

namespace App\Http\Controllers;

use App\data_salur;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SalurExport;

class DataSalurController extends Controller
{
    public function index()
    {
        $data_salur = data_salur::sortable()->paginate(25);
        return view(
            'salur.index',
            ['data_salur' => $data_salur],
            compact('data_salur')
        );
    }
    public function cariData(Request $request)
    {
        $cari = $request->cari;
        $data_salur = DB::table('data_salur')
            ->where('kode', 'like', '%' . $cari . '%')
            ->orWhere('nama', 'like', '%' . $cari . '%')
            ->orWhere('kecamatan', 'like', '%' . $cari . '%')
            ->orWhere('lama_pinj', 'like', '%' . $cari . '%')
            ->paginate(500);

        return view('salur.index', ['data_salur' => $data_salur]);
    }
    public function add()
    {
        return view('salur.create');
    }

    public function create(Request $request)
    {
        $data_salur = data_salur::create([
            'id' => $request->id,
            'lama' => $request->lama,
            'kode' => $request->kode,
            'nama' => $request->nama,
            'addr' => $request->addr,
            'c_kode_sektor' => $request->c_kode_sektor,
            'sub_sektor' => $request->sub_sektor,
            'cluster' => $request->cluster,
            'c_kode_bentuk_usaha' => $request->c_kode_bentuk_usaha,
            'c_kode_type_penyaluran' => $request->c_kode_type_penyaluran,
            'c_kode_jenis_penyaluran' => $request->c_kode_jenis_penyaluran,
            'jenis_usaha' => $request->jenis_usaha,
            'no_suip' => $request->bn_suip,
            'ba' => $request->ba,
            'cdsa' => $request->cdsa,
            'provinsi' => $request->provinsi,
            'kab_kota' => $request->kab_kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'tgl_pengj' => $request->tgl_pengj,
            'png_ke' => $request->png_ke,
            'pnj_ke' => $request->pnj_ke,
            'gender' => $request->gender,
            'no_telp' => $request->no_telp,
            'no_hp' => $request->no_hp,
            'pengajuan' => $request->pengajuan,
            'sdm' => $request->sdm,
            'jml_asset' => $request->jml_asset,
            'jml_omzet' => $request->jml_omzet,
            'nama_usaha' => $request->nama_usaha,
            'alamat_usaha' => $request->alamat_usaha,
            'kec_usaha' => $request->kec_usaha,
            'prov_usaha' => $request->prov_usaha,
            'kab_kota_usaha' => $request->kab_kota_usaha,
            'telp_usaha' => $request->telp_usaha,
            'hp_usaha ' => $request->hp_usaha,
            'tgl_survey' => $request->tgl_survey,
            'tgl_usulan' => $request->tgl_usulan,
            'usulan_treg' => $request->usulan_treg,
            'tgl_penetapan' => $request->tgl_penetapan,
            'tgl_sp3k' => $request->tgl_sp3k,
            'tgl_trf' => $request->tgl_trf,
            'tgl_clr' => $request->tgl_clr,
            'no_sp3k' => $request->no_sp3k,
            'pokok_pinj' => $request->pokok_pinj,
            'jasa_pinj' => $request->jasa_pinj,
            'total_pinj' => $request->total_pinj,
            'perd_ang' => $request->perd_ang,
            'lama_pinj' => $request->lama_pinj,
            'grc_prd' => $request->grc_prd,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_lunas' => $request->tgl_lunas,
            'jenis_agunan' => $request->jenis_agunan,
            'agunan' => $request->agunan,
        ]);
        return redirect('/datasalur');
    }

    public function delete($id)
    {
        $data_salur = data_salur::find($id);
        $data_salur->delete();
        return redirect('/datasalur');
    }

    public function edit($id)
    {
        $data_salur = data_salur::find($id);
        return view('salur.edit', ['data_salur' => $data_salur]);
    }
    public function update($id, Request $request)
    {
        $data_salur = data_salur::find($id);
        $data_salur->kode = $request->kode;
        $data_salur->nama = $request->nama;
        $data_salur->addr = $request->addr;
        $data_salur->c_kode_sektor = $request->c_kode_sektor;
        $data_salur->sub_sektor = $request->sub_sektor;
        $data_salur->cluster = $request->cluster;
        $data_salur->c_kode_bentuk_usaha = $request->c_kode_bentuk_usaha;
        $data_salur->c_kode_type_penyaluran = $request->c_kode_type_penyaluran;
        $data_salur->c_kode_jenis_penyaluran =
            $request->c_kode_jenis_penyaluran;
        $data_salur->jenis_usaha = $request->jenis_usaha;
        $data_salur->no_suip = $request->no_suip;
        $data_salur->ba = $request->ba;
        $data_salur->cdsa = $request->cdsa;
        $data_salur->provinsi = $request->provinsi;
        $data_salur->kab_kota = $request->kab_kota;
        $data_salur->kecamatan = $request->kecamatan;
        $data_salur->kelurahan = $request->kelurahan;
        $data_salur->tgl_pengj = $request->tgl_pengj;
        $data_salur->png_ke = $request->png_ke;
        $data_salur->pnj_ke = $request->pnj_ke;
        $data_salur->gender = $request->gender;
        $data_salur->no_telp = $request->no_telp;
        $data_salur->no_hp = $request->no_hp;
        $data_salur->pengajuan = $request->pengajuan;
        $data_salur->sdm = $request->sdm;
        $data_salur->jml_asset = $request->jml_asset;
        $data_salur->jml_omzet = $request->jml_omzet;
        $data_salur->nama_usaha = $request->nama_usaha;
        $data_salur->alamat_usaha = $request->alamat_usaha;
        $data_salur->kec_usaha = $request->kec_usaha;
        $data_salur->prov_usaha = $request->prov_usaha;
        $data_salur->kab_kota_usaha = $request->kab_kota_usaha;
        $data_salur->telp_usaha = $request->telp_usaha;
        $data_salur->hp_usaha = $request->hp_usaha;
        $data_salur->tgl_survey = $request->tgl_survey;
        $data_salur->tgl_usulan = $request->tgl_usulan;
        $data_salur->usulan_treg = $request->usulan_treg;
        $data_salur->tgl_penetapan = $request->tgl_penetapan;
        $data_salur->tgl_sp3k = $request->tgl_sp3k;
        $data_salur->tgl_trf = $request->tgl_trf;
        $data_salur->tgl_clr = $request->tgl_clr;
        $data_salur->no_sp3k = $request->no_sp3k;
        $data_salur->pokok_pinj = $request->pokok_pinj;
        $data_salur->jasa_pinj = $request->jasa_pinj;
        $data_salur->total_pinj = $request->total_pinj;
        $data_salur->perd_ang = $request->perd_ang;
        $data_salur->lama_pinj = $request->lama_pinj;
        $data_salur->grc_prd = $request->grc_prd;
        $data_salur->tgl_mulai = $request->tgl_mulai;
        $data_salur->tgl_lunas = $request->tgl_lunas;
        $data_salur->jenis_agunan = $request->jenis_agunan;
        $data_salur->agunan = $request->agunan;
        $data_salur->save();
        return redirect('/datasalur');
    }
    public function export_excel()
    {
        return Excel::download(new SalurExport(), 'dataSalur.xlsx');
    }
}