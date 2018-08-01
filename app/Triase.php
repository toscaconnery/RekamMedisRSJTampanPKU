<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Triase extends Model
{
    protected $table = 'triase';

    protected $primaryKey = 'id_triase'

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis', 'waktu_masuk', 'keluhan_utama', 'jalan_nafas', 'frek_nafas', 'sianosis', 'henti_nafas', 'mengi', 'henti_jantung', 'frek_nadi', 'pucat', 'akral_dingin', 'gcs', 'doa',
    ];
}





