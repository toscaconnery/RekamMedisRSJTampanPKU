<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIRencanaKeperawatan7 extends Model
{
    protected $table = 'ri_rencana_keperawatan_7';

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
