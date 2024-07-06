<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id_prodi', 'id_ta', 'id_kelas', 'id_matkul', 'id_dosen', 'hari', 'waktu'
    ];

    protected $hidden = [
        
    ];

    public function matkul()
    {
        return $this->belongsTo(Matkul::class,'id_matkul','id');
    }

    public function tahunakademik()
    {
        return $this->belongsTo(TahunAkademik::class, 'id_ta','id');
    }

    public function detailSchedules()
    {
        return $this->hasMany(DetailSchedule::class, 'id_schedule', 'id');
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class,'id_dosen','id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class,'id_kelas','id');
    }

    public function krs()
    {
        return $this->hasMany(Krs::class,'id_schedule');
    }

    public function absen()
    {
        return $this->hasMany(Absen::class,'id_schedule');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class,'id_schedule');
    }
}
