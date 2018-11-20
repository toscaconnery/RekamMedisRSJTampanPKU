<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RISerahTerima extends Model
{
    protected $table = 'ri_serah_terima';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'nama',
        'umur',
        'jenis_kelamin',
        'alamat',
        'hubungan_dengan_pasien',
        'nama_pasien',
        'umur_pasien',
        'jenis_kelamin_pasien',
        'no_rm',
        'alamat_pasien',
        'jam_dijemput',
    ];
}
