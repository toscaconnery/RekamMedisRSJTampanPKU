<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIRencanaPemulangan extends Model
{
    protected $table = 'ri_rencana_pemulangan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'diagnosis_medis',
        'ruangan',
        'a1',
        'a2',
        'a3',
        'a4',
        'a5',
        'a6',
        'a7',
        'a8',
        'a9',
        'a10',
        'a11',
        'a12',
        'a13',
        'keterangan_a4',
        'keterangan_a5',
        'keterangan_a6',
        'keterangan_a7',
        'keterangan_a8',
        'keterangan_a9',
        'keterangan_a10',
        'keterangan_a11',
        'keterangan_a12',
        'keterangan_a13',
    ];
}
