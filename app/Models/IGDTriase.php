<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IGDTriase extends Model
{
    protected $table = 'igd_triase';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'jenis',
        'tanggal_masuk',
        'jam',
        'keluhan_utama',
        'jalan_nafas',
        'henti_nafas',
        'frek_nafas',
        'sianosis',
        'mengi',
        'henti_jantung',
        'kondisi_nadi',
        'frek_nadi',
        'pucat',
        'akral_dingin',
        'tekanan_darah',
        'suhu',
        'alergi_makanan',
        'alergi_obat',
        'alergi_lainnya',
        'sistol',
        'diastol',
        'gcs',
        'doa',
    ];
}