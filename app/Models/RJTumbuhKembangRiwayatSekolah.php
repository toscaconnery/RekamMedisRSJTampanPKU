<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJTumbuhKembangRiwayatSekolah extends Model
{
    protected $table = 'rj_tumbuh_kembang_riwayat_sekolah';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'jenis_sekolah',
        'umur',
        'keterangan_tinggal',
    ];
}