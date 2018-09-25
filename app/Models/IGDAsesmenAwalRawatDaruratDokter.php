<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IGDAsesmenAwalRawatDaruratDokter extends Model
{
    protected $table = 'igd_asesmen_awal_rawat_darurat_dokter';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tanggal_kedatangan',
    ];
}
