<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJTumbuhKembangLainnya extends Model
{
    protected $table = 'rj_tumbuh_kembang_lainnya';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'diagnostik_lanjutan',
        'hasil_pemeriksaan',
        'formulasi_diagnostik',
        'aksis1',
        'aksis2',
        'aksis3',
        'aksis4',
        'aksis5',
        'masalah_organobiologik',
        'masalah_psikologik',
        'masalah_sosial',
        'prognosis',
        'treatment_pasien',
        'treatment_keluarga',
    ];
}