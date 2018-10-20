<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIKeperawatanIntensifJenis extends Model
{
    protected $table = 'ri_keperawatan_intensif_jenis';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'jenis',
        'id_data',
    ];
}
