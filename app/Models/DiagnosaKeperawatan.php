<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiagnosaKeperawatan extends Model
{
    protected $table = 'diagnosa_keperawatan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'umum',
        'umum_lainnya',
        'jiwa',
        'jiwa_lainnya',
        'obat_parental',
        'ekg', 
    ];
}