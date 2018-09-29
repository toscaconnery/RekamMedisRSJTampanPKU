<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIDPJPCase extends Model
{
    protected $table = 'ri_dpjp_case';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'diagnosa',
        'ruang',
        'nama_dpjp',
        'tim_dpjp',
        'rawat_bersama',
        'pengalihan_dpjp_ke',
        'tanggal_pengalihan',
        'alasan_pengalihan',
        'cm_1',
        'cm_2',
        'cm_3',
    ];
}