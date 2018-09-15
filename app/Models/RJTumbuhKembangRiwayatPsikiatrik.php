<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJTumbuhKembangRiwayatPsikiatrik extends Model
{
    protected $table = 'rj_tumbuh_kembang_riwayat_psikiatrik';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'keluhan_utama',
        'riwayat_gangguan_sekarang',
        'riwayat_gangguan_sebelumnya',
        'riwayat_pribadi',
        'riwayat_pranatal_perinatal',
        'early_childhood',
        'middle_childhood',
        'late_childhood',
        'riwayat_keluarga',
        'riwayat_sosial_sekarang',
        'persepsi_sendiri',        
    ];
}