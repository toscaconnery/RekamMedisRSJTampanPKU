<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIPenggunaanObatKeterangan extends Model
{
    protected $table = 'ri_penggunaan_obat_keterangan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'ruang_bangsal',
		'no_reg',
		'tanggal_masuk',
		'tanggal_keluar',
		'diagnosis',
		'dokter',
		'riwayat_alergi',
		'konsumen',
    ];
}
