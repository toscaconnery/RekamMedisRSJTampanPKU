<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJPemeriksaanFisik extends Model
{
    protected $table = 'rj_pemeriksaan_fisik';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'kepala',
        'leher',
        'dada',
        'jantung',
        'paru',
        'perut',
        'anggota_gerak', 
    ];
}
