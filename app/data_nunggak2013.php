<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class data_nunggak2013 extends Model
{
    use Sortable;
    protected $table = 'data_nunggak2013';
    protected $fillable = [
        'id',
        'kode',
        'nama',
        'usaha',
        'tgl_terakhir_bayar',
        'terakhir_bayar',
        'total_bayar',
        'total_angsur',
        'sisa_hutang',
    ];
    public $sortable = [
        'kode',
        'nama',
        'usaha',
        'tgl_terakhir_bayar',
        'terakhir_bayar',
        'total_bayar',
        'total_angsur',
        'sisa_hutang',
    ];
    public $timestamps = false;
}