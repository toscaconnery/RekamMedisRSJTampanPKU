<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIHakKewajiban extends Model
{
    protected $table = 'ri_hak_kewajiban';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'nama_penanda_tangan',
    ];
}
