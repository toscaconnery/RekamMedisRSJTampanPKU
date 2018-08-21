<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstrumenPenilaian extends Model
{
    protected $table = 'instrumen_penilaian';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'gaduh_gelisah',
        'ketidakoperatifan',
        'permusuhan',
        'pengendalian_impuls',
        'ketegangan',
        'bangsal',
        'tanggal_pemeriksaan',
        'panss_ec',
        'gaff',
    ];
}