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
		'field1',
		'field2',
		'field3',
		'field4',
		'field5',
		'field6',
		'field7',
		'field8',
		'field9',
		'field10',
		'field11',
		'field12',
		'field13',
		'resep',
		'nonresep',
    ];
}

