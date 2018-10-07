<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJLaporRehabilitasi extends Model
{
    protected $table = 'rj_lapor_rehabilitasi';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
    ];
}
