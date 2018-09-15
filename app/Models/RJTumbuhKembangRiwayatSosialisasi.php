<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJTumbuhKembangRiwayatSosialisasi extends Model
{
    protected $table = 'rj_tumbuh_kembang_riwayat_sosialisasi';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'sekolah',
        'keluarga',
    ];
}
