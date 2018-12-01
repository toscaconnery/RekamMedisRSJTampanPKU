<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJTumbuhKembangRiwayatPersalinanNatal extends Model
{
    protected $table = 'rj_tumbuh_kembang_riwayat_persalinan_natal';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'proses_kelahiran',
        'dibantu_alat',
        'alat_bantu',
        'mengalami_keguguran',
        'keterangan_keguguran',
        'kondisi_lahir',
        'dibantu_oleh_lainnya',
        'dibantu_oleh',
        'berat_bayi',
        'panjang_bayi',
    ];
}