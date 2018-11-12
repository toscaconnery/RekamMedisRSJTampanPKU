<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IGDObatSaatIni extends Model
{
    protected $table = 'igd_obat_saat_ini';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'nama_obat',
        'jumlah',
        'tidak_dibawa',
        'keterangan',
    ];
}