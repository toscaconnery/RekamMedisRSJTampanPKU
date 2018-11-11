<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IGDTindakanTerapi extends Model
{
    protected $table = 'igd_tindakan_terapi';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'jam',
        'tindakan_terapi',
    ];
}
