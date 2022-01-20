<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class data_resume extends Model
{
    use Sortable;
    protected $table = 'data_resume';
    protected $fillable = ['id', 'jml_mitra', 'pokok_pinj', 'mitra_nunggak'];
    public $sortable = ['id', 'jml_mitra', 'pokok_pinj', 'mitra_nunggak'];
    public $timestamps = false;
}