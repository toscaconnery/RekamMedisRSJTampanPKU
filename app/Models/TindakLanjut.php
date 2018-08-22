<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TindakLanjut extends Model
{
    protected $table = 'tindak_lanjut';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tindak_lanjut',
        'perlu_dikontrol',
        'tanggal_kontrol',
        'ruangan',
        'indikasi_rawat_inap',
        'alasan_menolak',
        'dirujuk_ke',
        'alasan_dirujuk',
        'kesadaran',
        'kesadaran_lainnya',
        'tensi',
        'nadi',
        'pernafasan',
        'suhu',
    ];
}