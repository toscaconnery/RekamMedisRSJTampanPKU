<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIRencanaKeperawatan extends Model
{
    protected $table = 'ri_rencana_keperawatan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
		'ri_rencana_keperawatan_1',
		'ri_rencana_keperawatan_2',
		'ri_rencana_keperawatan_3',
		'ri_rencana_keperawatan_4',
		'ri_rencana_keperawatan_5',
		'ri_rencana_keperawatan_6',
		'ri_rencana_keperawatan_7',
		'ri_rencana_keperawatan_1_tanggal',
		'ri_rencana_keperawatan_2_tanggal',
		'ri_rencana_keperawatan_3_tanggal',
		'ri_rencana_keperawatan_4_tanggal',
		'ri_rencana_keperawatan_5_tanggal',
		'ri_rencana_keperawatan_6_tanggal',
		'ri_rencana_keperawatan_7_tanggal',
		'ri_rencana_keperawatan_1_pengisi',
		'ri_rencana_keperawatan_2_pengisi',
		'ri_rencana_keperawatan_3_pengisi',
		'ri_rencana_keperawatan_4_pengisi',
		'ri_rencana_keperawatan_5_pengisi',
		'ri_rencana_keperawatan_6_pengisi',
		'ri_rencana_keperawatan_7_pengisi',
    ];
}
