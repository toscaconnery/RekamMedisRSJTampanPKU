<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJDataMedik extends Model
{
    protected $table = 'rj_data_medik';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'golongan_darah',
        'tekanan_darah_top',
        'tekanan_darah_bottom',
        'ket_tekanan_jantung',
        'ket_diabetes',
        'ket_hepatitis',
        'ket_penyakit_lainnya',
        'ket_alergi_obat',
        'ket_alergi_makanan',
        'oklusi',
        'torus_palatinus',
        'torus_mandibularis',
        'palatum',
        'ket_supernumerary_teeth',
        'ket_diastema',
        'ket_anomali',
        'lain',
        'keterangan',
    ];
}