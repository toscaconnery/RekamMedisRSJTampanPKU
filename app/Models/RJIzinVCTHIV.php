<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJIzinVCTHIV extends Model
{
    protected $table = 'rj_izin_vct_hiv';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'nama_klien',
        'konselor',
        'tanggal',
        'pemberi_izin',
        'hubungan',
    ];
}