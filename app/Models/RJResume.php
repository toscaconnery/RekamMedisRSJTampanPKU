<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJResume extends Model
{
    protected $table = 'rj_resume';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tanggal',
        'diagnosis_prosedur',
        'kode_icd',
        'obat',
        'riwayat',
        'nama_petugas',
    ];
}