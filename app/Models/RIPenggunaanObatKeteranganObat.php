<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIPenggunaanObatKeteranganObat extends Model
{
    protected $table = 'ri_penggunaan_obat_keterangan_obat';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'obat',
		'jumlah',
		'keterangan',
    ];
}
