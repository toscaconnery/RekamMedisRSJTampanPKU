<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIRencanaKlien7 extends Model
{
    protected $table = 'ri_rencana_klien_7';

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
		'tanggal_3',
		'tanggal_4',
		'tanggal_5',
		'nodx_1',
		'nodx_2',
		'nodx_3',
		'nodx_4',
		'nodx_5',
		'dxk_2',
		'dxk_3',
		'dxk_4',
		'dxk_5',
		't1',
		'k1',
		'k2',
		'k3',
		'k4',
		'k5',
    ];
}
