<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
class Event extends Model
{
    use Sortable;

    protected $table='event';
    protected $guarded=[];

    public $sortable = [
        'nama_event','waktu','tanggal','lokasi',
    ];
}
