<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJTumbuhKembangRiwayatPersalinanPascaNatal extends Model
{
    protected $table = 'rj_tumbuh_kembang_riwayat_persalinan_pasca_natal';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'lama_asi',
        'pola_makan',
        'pola_tidur',
        'training',
        'motorik',
        'usia_berjalan',
        'usia_berbicara',
        'hambatan_berbicara',
        'obat_masih_diminum',
        'diasuh',
        'lama_pengasuhan',
        'masalah_khusus',
    ];
}