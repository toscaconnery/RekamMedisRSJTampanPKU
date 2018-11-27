<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIRencanaKlien2 extends Model
{
    protected $table = 'ri_rencana_klien_2';

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
		'nodx_1',
		'nodx_2',
		'dxk_1',
		'dxk_2',
		't1',
		'k1',
		'k2',
    ];
}
