<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJTumbuhKembangDataSaudara extends Model
{
    protected $table = 'rj_tumbuh_kembang_data_saudara';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'status',
        'umur',
        'jenis_kelamin',
        'pendidikan',
        'pekerjaan',
    ];
}