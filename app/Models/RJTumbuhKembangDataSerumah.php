<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJTumbuhKembangDataSerumah extends Model
{
    protected $table = 'rj_tumbuh_kembang_data_serumah';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'umur',
        'jenis_kelamin',
        'pendidikan',
        'pekerjaan',
    ];
}
