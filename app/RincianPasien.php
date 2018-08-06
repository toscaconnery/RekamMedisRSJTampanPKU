<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RincianPasien extends Model
{
    protected $table = 'rincian_pasien';

    protected $primaryKey = 'id_rincian';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_rincian', 
        'id_rm', 
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