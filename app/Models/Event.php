<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Event extends Model
{
    use HasFactory;
    use Sortable;

    protected $table='event';
    protected $guarded=[];
    

    public $sortable = [
        'nama_event','waktu','tanggal','lokasi',
    ];
}
