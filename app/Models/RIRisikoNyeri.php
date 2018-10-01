<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIRisikoNyeri extends Model
{
    protected $table = 'ri_risiko_nyeri';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'waktu',
        'skala',
        'tanggal',
    ];
}
