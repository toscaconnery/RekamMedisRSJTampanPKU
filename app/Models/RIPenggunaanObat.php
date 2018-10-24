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
        'ruang_bangsal',
        'no_reg',
        'tanggal_masuk',
        'tanggal_keluar',
        'diagnosis',
        'dokter',
        'riwayat_alergi',
        'konsumen',
        'obat',
        'jumlah',
        'tanggal_penggunaan',
        'waktu_penggunaan_1',
        'waktu_penggunaan_2',
        'waktu_penggunaan_3',
        'waktu_penggunaan_4',
        'keterangan',
    ];
}
