<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RJAAFisikGizi extends Model
{
    protected $table = 'rj_aa_fisik_gizi';

    protected $primaryKey = 'id_fisik_gizi';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
    	'id_regis',
    	'td',
    	'tb',
    	'nadi',
    	'bb',
    	'pernafasan',
        'golongan_darah',
    	'suhu',
    	'must_1',
    	'must_2',
    	'must_3',
    	'must_4',
        'bb_berkurang',
    	'skor_must',
    	'sk_1',
    	'sk_2',
    	'sk_3',
    	'sk_4',
    	'skor_sk',
    	'pemberitahuan',
    	'waktu_pemberitahuan',
    ];
}