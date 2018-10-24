<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIPermintaanSecond extends Model
{
    protected $table = 'ri_permintaan_second';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'nama',
        'umur',
        'jk',
        'alamat',
        'agama',
        'permintaan_opini',
        'nama_hub',
        'umur_hub',
        'jk_hub',
        'alamat_hub',
        'agama_hub',
        'no_telp_hub',
        'tanggal',
        'nama_saksi',
        'nama_pasien_wali',
    ];
}
