<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIAsuhanGiziListKonsultasi extends Model
{
    protected $table = 'ri_asuhan_gizi_list_konsultasi';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'field1',
		'field2',
		'field3',
		'field4',
		'field5',
		'tabel',
    ];
}
