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

    protected $table = 'pasien';

    protected $primary_key = 'no_rm'

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'nama_pasien', 'tanggal_lahir', 'jenis_kelamin',
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