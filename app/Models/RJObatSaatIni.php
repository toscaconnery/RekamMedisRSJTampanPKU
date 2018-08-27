<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJObatSaatIni extends Model
{
    protected $table = 'rj_obat_saat_ini';

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