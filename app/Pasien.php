<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'tanggal_lahir', 'jenis_kelamin', 'pernikahan', 'agama', 'pendidikan', 'pekerjaan', 'bahasa', 'nama_ayah', 'nama_ibu', 'suku', 'alamat', 'rt', 'rw', 'telepon', 'perubahan_alamat', 'nama_pj', 'alamat_pj', 'hubungan_pj', 'telepon_pj',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
