<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIPenggunaanObat extends Model
{
    protected $table = 'ri_penggunaan_obat';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'obat',
        'tanggal_penggunaan',
        'tanggal_query',
        'waktu_penggunaan_1',
        'waktu_penggunaan_2',
        'waktu_penggunaan_3',
        'waktu_penggunaan_4',
        'perawat',
    ];
}
