<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIPulangPaksa extends Model
{
    protected $table = 'ri_pulang_paksa';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'nama',
        'umur',
        'pekerjaan',
        'hubungan_keluarga',
        'alamat',
        'nama_pasien',
        'umur_pasien',
        'alamat_pasien',
        'tanggal_pengambilan',
        'tanggal',
        'yang_menyatakan',
        'saksi_keluarga',
        'saksi_pemberi_asuhan',
    ];
}