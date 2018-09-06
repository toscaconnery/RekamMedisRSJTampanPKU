<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Igd extends Model
{
    protected $table = 'igd';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
    	'id_regis', 'waktu_masuk', 'cara_datang', 'transportasi',  'rujukan', 'dikirim', 'kasus', 'tindakan_pra', 'triase', 'alasan_kunjungan',
    ];
}