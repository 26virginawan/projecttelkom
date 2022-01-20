<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class data_utama2018 extends Model
{
    use Sortable;
    protected $table = 'data_utama2018';
    protected $fillable = ['month', 'target', 'relasi', 'CALL_M', 'CALL_C'];
    public $sortable = ['month', 'target', 'relasi', 'CALL_M', 'CALL_C'];
    public $timestamps = false;
}