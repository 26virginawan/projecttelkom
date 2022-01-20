<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class data_utama extends Model
{
    use Sortable;
    protected $table = 'data_utama';
    protected $fillable = ['month', 'target', 'relasi', 'CALL_M', 'CALL_C'];
    public $sortable = ['month', 'target', 'relasi', 'CALL_M', 'CALL_C'];
    public $timestamps = false;
}