<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObatSaatIni extends Model
{
    protected $table = 'obat_saat_ini';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'nama_obat',
        'dibawa',
        'jumlah',
        'tidak_dibawa',
        'keterangan',
    ];
}