<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIKeperawatanIntensifDPD extends Model
{
    protected $table = 'ri_keperawatan_intensif_dpd';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tanggal',
        'jam',
        'ruangan',
        'diagnosa_medis',
        'tindakan_1',
        'tindakan_2',
        'tindakan_3',
    ];
}
