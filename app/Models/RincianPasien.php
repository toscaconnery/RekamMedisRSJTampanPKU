<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RincianPasien extends Model
{
    protected $table = 'rincian_pasien';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'no_rm', 
        'alamat', 
        'no_telp', 
        'pernikahan', 
        'agama', 
        'pendidikan', 
        'pekerjaan', 
        'bahasa',
        'nama_ayah',
        'nama_ibu',
        'budaya',
        'rt',
        'rw',
        'perubahan_alamat',
        'perubahan_rt',
        'perubahan_rw',
    ];
}