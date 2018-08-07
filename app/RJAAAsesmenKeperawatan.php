<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsesmenRawatJalan extends Model
{
    protected $table = 'rj_aa_asesmen_keperawatan';

    protected $primaryKey = 'id_asesmen';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
    	'id_regis',
    	'id_user',
    	'alasan_kunjungan',
    	'hubungan_keluarga',
    	'status_psikologis',
    	'dilaporkan_ke',
    	'psikologis_lainnya',
        'konsep_diri',
        'persepsi',
        'motorik',
        'penampilan',
        'pikir',
        'perasaan',
        'status_fungsional',
        'waktu_laporan',
    ];
}