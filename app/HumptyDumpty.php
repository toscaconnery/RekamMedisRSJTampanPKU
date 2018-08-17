<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HumptyDumpty extends Model
{
    protected $table = 'humpty_dumpty';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'usia',
        'diagnosis',
        'gangguan_kognitif',
        'faktor_lingkungan',
        'waktu_respon_obat',
        'penggunaan_obat',
    ];
}
