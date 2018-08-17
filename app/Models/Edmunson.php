<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Edmunson extends Model
{
    protected $table = 'edmunson';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
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
