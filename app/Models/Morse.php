<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Morse extends Model
{
    protected $table = 'morse';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'riwayat_jatuh',
        'diagnosis_sekunder',
        'alat_bantu',
        'terpasang_infus',
        'gaya_berjalan',
        'status_mental',
    ];
}
