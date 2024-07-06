<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class DetailSchedule extends Model
{
    protected $table = "detail_schedule";
    protected $fillable = [
        'id_schedule', 'tanggal_pertemuan','pertemuan', 'status_detail_schedule'
    ];
}