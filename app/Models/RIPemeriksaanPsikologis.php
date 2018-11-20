<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIPemeriksaanPsikologis extends Model
{
    protected $table = 'ri_pemeriksaan_psikologis';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'psikolog',
        'tanggal',
        'dikirim_oleh',
        'dokter',
        'kontak_mata',
        'respon',
        'cara_bicara',
        'volume',
        'intonasi',
        'ekspresi',
        'gesture',
        'performance',
        'autoanamnesa',
        'alloanamnesa',
        'intelegensi',
        'kepribadian',
        'diagnosa',
        'kesimpulan',
        'terapi_saran',
    ];
}
