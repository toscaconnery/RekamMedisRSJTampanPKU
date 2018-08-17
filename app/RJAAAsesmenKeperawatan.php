<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RJAAAsesmenKeperawatan extends Model
{
    protected $table = 'rj_aa_asesmen_keperawatan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
    	'id_regis',
    	'id_user',
    	'alasan_kunjungan',
    	'hubungan_keluarga',
    	'status_psikososial',
        'konsep_diri',
        'persepsi',
        'motorik',
        'penampilan',
        'pikir',
        'perasaan',
        'status_fungsional',
    	'perlu_bantuan',
        'waktu_laporan',
    ];
}