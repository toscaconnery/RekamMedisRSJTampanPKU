<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RILaboratorium extends Model
{
    protected $table = 'ri_laboratorium';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'validasi_oleh',
		'dr_pengirim',
		'bahan_diterima',
		'ruangan',
		'tgl_hasil_cetak',
		'tgl_permintaan',
    ];
}
