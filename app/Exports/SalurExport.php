<?php

namespace App\Exports;

use App\data_salur;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SalurExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return data_salur::all();
    }
    public function Headings(): array
    {
        return [
            'id',
            'lama',
            'kode',
            'nama',
            'addr',
            'c_kode_sektor',
            'sub_sektor',
            'cluster',
            'c_kode_bentuk_usaha',
            'c_kode_type_penyaluran',
            'c_kode_jenis_penyaluran',
            'jenis_usaha',
            'no_suip',
            'ba',
            'cdsa',
            'provinsi',
            'kab_kota',
            'kecamatan',
            'kelurahan',
            'tgl_pengj',
            'png_ke',
            'pnj_ke',
            'gender',
            'no_telp',
            'no_hp',
            'pengajuan',
            'sdm',
            'jml_asset',
            'jml_omzet',
            'nama_usaha',
            'alamat_usaha',
            'kec_usaha',
            'prov_usaha',
            'kab_kota_usaha',
            'telp_usaha',
            'hp_usaha',
            'tgl_survey',
            'tgl_usulan',
            'usulan_treg',
            'tgl_penetapan',
            'tgl_sp3k',
            'tgl_trf',
            'tgl_clr',
            'no_sp3k',
            'pokok_pinj',
            'jasa_pinj',
            'total_pinj',
            'perd_ang',
            'lama_pinj',
            'grc_prd',
            'tgl_mulai',
            'tgl_lunas',
            'jenis_agunan',
            'agunan',
        ];
    }
}