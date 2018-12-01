<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJTumbuhKembangPsikiatri extends Model
{
    protected $table = 'rj_tumbuh_kembang_psikiatri';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
		'f1',
		'f2',
		'f3',
		'f4',
		'f5',
		'f6',
		'f7',
		't1',
		'r1',
		't2',
		'r2',
		't3',
		'r3',
		't4',
		'r4',
		't5',
		'r5',
		't6',
		'r6',
		't7',
		'r7',
		't8',
		'r8',
		'tanggal',
        
    ];
}
