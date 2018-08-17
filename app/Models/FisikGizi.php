<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FisikGizi extends Model
{
    protected $table = 'fisik_gizi';

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
        'diagnosis_khusus',
    	'skor_must',
    	'sk_1',
    	'sk_2',
    	'sk_3',
    	'sk_4',
    	'skor_sk',
        'penyakit_malnutrisi',
    	'pemberitahuan',
    	'waktu_pemberitahuan',
    ];
}