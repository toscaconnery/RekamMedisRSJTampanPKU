<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIRencanaKeperawatan1 extends Model
{
    protected $table = 'ri_rencana_keperawatan_1';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tanggal_pengkajian',
		'jam_pengkajian',
		'ruangan',
		'diagnosa_medis',
		'ti1',
		'ti2',
		'ti3',
    ];
}
