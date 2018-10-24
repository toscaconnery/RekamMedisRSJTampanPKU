<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIInstruksiDoNotResucitate extends Model
{
    protected $table = 'ri_instruksi_do_not_resucitate';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'nama_pasien',
        'tanggal_lahir',
        'alamat',
        'dokter',
    ];
}
