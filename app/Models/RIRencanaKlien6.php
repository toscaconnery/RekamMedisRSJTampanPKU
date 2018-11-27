<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIRencanaKlien6 extends Model
{
    protected $table = 'ri_rencana_klien_6';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
		'tanggal_pengkajian',
		'jam_pengkajian',
		'ruangan',
		'diagnosa_medis',
		'tanggal_1',
		'tanggal_2',
		'tanggal_2b',
		'tanggal_3',
		'tanggal_4',
		'tanggal_5',
		'nodx_1',
		'nodx_2',
		'nodx_2b',
		'nodx_3',
		'nodx_4',
		'nodx_5',
		'dxk_1',
		'dxk_2',
		'dxk_2b',
		'dxk_3',
		'dxk_4',
		'dxk_5',
		't1',
		'k1',
		'k2',
		'k2b',
		'k3',
		'k3b',
		'k3c',
		'k3d',
		'k3e',
		'k4',
		'k4b',
		'k5',
		'k5b',
		'k5c',
    ];
}
