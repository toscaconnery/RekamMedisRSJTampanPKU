<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IGDCatatanKemajuan extends Model
{
    protected $table = 'igd_catatan_kemajuan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tanggal',
        'jam',
        'catatan_kemajuan',
        'tindakan_terapi',
        'nama_user',
    ];
}