<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';

    protected $primaryKey = 'no_rm'

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'no_rm', 'nama_pasien', 'tanggal_lahir', 'jenis_kelamin',
    ];
}