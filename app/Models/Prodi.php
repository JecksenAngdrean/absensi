<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prodi extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'kode_prodi', 'prodi', 'ka_prodi', 'jenjang'
    ];

    protected $hidden = [
        
    ];


    public function dosen()
    {
    	return $this->belongsTo(Dosen::class,'ka_prodi');
    }

    public function matkuls()
    {
        return $this->hasMany(Matkul::class,'id_prodi');
    }

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class,'id_prodi');
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class,'id_prodi');
    }

}
