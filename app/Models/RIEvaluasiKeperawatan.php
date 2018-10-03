<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIEvaluasiKeperawatan extends Model
{
    protected $table = 'ri_evaluasi_keperawatan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'sekolah',
        'keluarga',
    ];
}
