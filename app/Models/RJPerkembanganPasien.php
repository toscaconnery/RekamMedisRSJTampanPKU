<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJPerkembanganPasien extends Model
{
    protected $table = 'rj_perkembangan_pasien';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'waktu',
        'user',
        'profesi',
        'informasi',
        'ttd',
    ];
}