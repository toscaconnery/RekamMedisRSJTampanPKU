<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJTumbuhKembangPenyakitAnak extends Model
{
    protected $table = 'rj_tumbuh_kembang_penyakit_anak';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'penyakit',
        'tahun',
        'lamanya',
        'keterangan',
    ];
}