<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIRencanaKlien extends Model
{
    protected $table = 'ri_rencana_klien';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'ri_rencana_klien_1',
		'ri_rencana_klien_2',
		'ri_rencana_klien_3',
		'ri_rencana_klien_4',
		'ri_rencana_klien_5',
		'ri_rencana_klien_6',
		'ri_rencana_klien_7',
		'ri_rencana_klien_1_tanggal',
		'ri_rencana_klien_2_tanggal',
		'ri_rencana_klien_3_tanggal',
		'ri_rencana_klien_4_tanggal',
		'ri_rencana_klien_5_tanggal',
		'ri_rencana_klien_6_tanggal',
		'ri_rencana_klien_7_tanggal',
		'ri_rencana_klien_1_pengisi',
		'ri_rencana_klien_2_pengisi',
		'ri_rencana_klien_3_pengisi',
		'ri_rencana_klien_4_pengisi',
		'ri_rencana_klien_5_pengisi',
		'ri_rencana_klien_6_pengisi',
		'ri_rencana_klien_7_pengisi',
    ];
}
