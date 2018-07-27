<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsesmenRawatJalan extends Model
{
    protected $table = 'asesmen_rawat_jalan';

    protected $primary_key = 'id_rj';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
    	'id_regis', 'id_user', 'alasan_kunjungan', 'hubungan_keluarga', 'status_psikologis', 'keluhan_utama',
    ];
}
