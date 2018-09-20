<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IGDCatatanPerkembangan extends Model
{
    protected $table = 'igd_catatan_perkembangan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tanggal',
        'jam',
        'profesi_bagian',
        'hasil',
        'verifikasi',
    ];
}