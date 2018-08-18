<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenanggungJawab extends Model
{
    protected $table = 'penanggung_jawab';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_pj', 'id_regis', 'nama', 'alamat', 'hubungan', 'no_telp',
    ];
}
