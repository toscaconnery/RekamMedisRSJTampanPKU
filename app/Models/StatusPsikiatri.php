<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusPsikiatri extends Model
{
    protected $table = 'status_psikiatri';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'penampilan',
        'kesadaran',
        'orientasi',
        'sikap',
        'keterangan',
        'proses_pikir',
        'bentuk_pikir',
        'isi_pikir',
        'mood',
        'afek',
        'halusinasi',
        'ilusi',
        'konsentrasi',
        'ingat',
        'abstrak',
        'impuls',
        'nilai',
        'tilikan',
        'dipercaya',
    ];
}