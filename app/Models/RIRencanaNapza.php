<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIRencanaNapza extends Model
{
    protected $table = 'ri_rencana_napza';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tanggal_pengkajian',
		'jam_pengkajian',
		'tk',
		'pola_tidur',
		'nyeri',
		'individu',
		'keluarga',
    ];
}
