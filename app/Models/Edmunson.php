<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Edmunson extends Model
{
    protected $table = 'edmunson';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'jenis_form',
        'status_mental',
        'diagnosis',
        'eliminasi',
        'pengobatan',
        'diagnosa',
        'ambulasi',
        'nutrisi',
        'riwayat_jatuh',
    ];
}
