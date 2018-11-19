<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIResiden extends Model
{
    protected $table = 'ri_residen';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tanggal',
        'konselor',
        'kepala_ruangan',
        'residen',
    ];
}