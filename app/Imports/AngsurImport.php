<?php

namespace App\Imports;

use App\data_angsur;
use Maatwebsite\Excel\Concerns\ToModel;

class AngsurImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new data_angsur([
            'id' => $row[0],
            'lama' => $row[1],
            'kode' => $row[2],
            'nama' => $row[3],
            'ba' => $row[4],
            'cdsa' => $row[5],
            'provinsi' => $row[6],
            'kab_kota' => $row[7],
            'thn_salur' => $row[8],
            'jenis_angs' => $row[9],
            'kualitas' => $row[10],
            'angs_akhir' => $row[11],
            'gljr' => $row[12],
            'angsuran' => $row[13],
            'angs_pokok' => $row[14],
            'angs_jasa' => $row[15],
            'adj_pokok' => $row[16],
            'adj_jasa' => $row[17],
            'kelebihan' => $row[18],
            'pengembalian' => $row[19],
            'pendapatan' => $row[20],
            'c_user' => $row[21],
            'c_date' => $row[22],
        ]);
    }
}