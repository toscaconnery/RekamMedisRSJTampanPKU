<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenanggungJawab extends Model
{
    protected $table = 'penanggung_jawab';

    protected $primaryKey = 'id_pj';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_pj', 'id_regis', 'nama', 'alamat', 'hubungan', 'no_telp',
    ];
}
