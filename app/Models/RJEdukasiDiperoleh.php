<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJEdukasiDiperoleh extends Model
{
    protected $table = 'rj_edukasi_diperoleh';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tanggal',
        'poliklinik',
        'informasi',
        'nama_edukator',
        'ttd_edukator',
        'nama_sasaran',
        'ttd_sasaran',
        'evaluasi',
    ];
}