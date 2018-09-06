<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJTumbuhKembangDataOrangTua extends Model
{
    protected $table = 'rj_tumbuh_kembang_data_orang_tua';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'sebagai',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'pendidikan',
        'pekerjaan',
        'alamat_pekerjaan',
        'perkawinan_ke',
        'lama_perkawinan',
        'status',
    ];
}