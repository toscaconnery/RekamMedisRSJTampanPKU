<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIPenilaianEdmunson extends Model
{
    protected $table = 'ri_penilaian_edmunson';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'usia',
        'status_mental',
        'eliminasi',
        'pengobatan',
        'diagnosa',
        'ambulasi',
        'nutrisi',
        'gangguan_pola_tidur',
        'riwayat_jatuh',
        'total',
    ];
}