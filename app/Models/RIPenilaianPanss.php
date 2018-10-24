<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIPenilaianPanss extends Model
{
    protected $table = 'ri_penilaian_panss';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tanggal',
        'p4',
        'p7',
        'g7',
        'g8',
        'g14',
    ];
}
