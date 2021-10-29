<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = [
        'id',
        'kode_barang',
        'nama_barang',
        'stok_barang',
        'harga_barang',
    ];
    public $timestamps = false;
}