<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIPernyataan extends Model
{
    protected $table = 'ri_pernyataan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'nama',
        'umur',
        'alamat',
        'tanggal',
        'konselor',
        'kepala_ruangan',
        'residen',
    ];
}
