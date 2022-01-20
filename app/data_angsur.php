<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class data_angsur extends Model
{
    use Sortable;
    protected $table = 'data_angsur';
    protected $fillable = [
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
    public $sortable = ['lama',
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
    'c_date',];
    public $timestamps = false;
}