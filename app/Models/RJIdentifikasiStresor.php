<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJIdentifikasiStresor extends Model
{
    protected $table = 'rj_identifikasi_stresor';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'lingkungan_fisik',
        'sosial_ekonomi_politik',
        'keluarga',
        'pekerjaan_karir',
        'hubungan_pribadi_lingkungan',
        'simptom',
        'cara_mengatasi',
    ];
}