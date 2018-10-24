<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIRiwayatObat extends Model
{
    protected $table = 'ri_riwayat_obat';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
		'tanggal_masuk',
		'nomor_farmasi',
		'dokter_ruangan',
		'non_alergi',
		'generik',
		'nonresep',
		'sio_1',
		'sio_2',
		'sio_3',
		'sio_4',
		'sio_5',
		'lainnya',
    ];
}

