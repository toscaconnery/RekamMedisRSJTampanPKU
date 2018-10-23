<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIPermintaanRohani extends Model
{
    protected $table = 'ri_permintaan_rohani';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'nama',
        'umur',
        'jk',
        'alamat',
        'agama',
        'no_telp',
        'hub',
        'hub_lain',
        'nama_hub',
        'umur_hub',
        'jk_hub',
        'alamat_hub',
        'agama_hub',
        'no_telp_hub',
        'permintaan_rohani',
        'hd',
        'keterangan_hd',
        'tanggal',
        'nama_saksi',
        'nama_pemohon',
    ];

}
