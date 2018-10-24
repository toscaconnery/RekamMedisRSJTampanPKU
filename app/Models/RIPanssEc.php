<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIPanssEc extends Model
{
    protected $table = 'ri_panss_ec';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'p4',
        'g8',
        'p7',
        'g14',
        'g4',
        'bangsal',
        'tanggal_pemeriksaan',
    ];
}