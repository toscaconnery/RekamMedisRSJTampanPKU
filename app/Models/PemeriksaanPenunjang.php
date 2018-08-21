<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PemeriksaanPenunjang extends Model
{
    protected $table = 'pemeriksaan_penunjang';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'jenis',
        'jam_pemeriksaan',
        'jam_hasil',
        'keterangan',
        'laboratorium',
        'radiologi',
        'ekg',
        'lainnya',
    ];
}