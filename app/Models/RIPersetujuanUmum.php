<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIPersetujuanUmum extends Model
{
    protected $table = 'ri_persetujuan_umum';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'nama_petugas',
        'nama_pasien_keluarga',
    ];
}
