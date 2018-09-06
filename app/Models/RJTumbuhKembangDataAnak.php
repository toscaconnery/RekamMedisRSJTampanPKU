<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJTumbuhKembangDataAnak extends Model
{
    protected $table = 'rj_tumbuh_kembang_data_anak';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'sekolah',
        'kelas',
        'alamat_sekolah',
        'suku_bangsa',
        'bahasa',
        'alamat_lengkap',
        'no_telp',
        'tinggal_dengan',
    ];
}