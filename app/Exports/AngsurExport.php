<?php

namespace App\Exports;

use App\data_angsur;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AngsurExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return data_angsur::all();
    }

    public function headings(): array
    {
        return [
            'no_id',
            'lama',
    'kode',
    'nama',
    'ba',
    'cdsa',
    'provinsi',
    'kab_kota',
    'thn_salur',
    'jenis_angs',
    'kualitas',
    'angs_akhir',
    'gljr',
    'angsuran',
    'angs_pokok',
    'angs_jasa',
    'adj_pokok',
    'adj_jasa',
    'kelebihan',
    'pengembalian',
    'pendapatan',
    'c_user',
    'c_date',
        ];
    }
}