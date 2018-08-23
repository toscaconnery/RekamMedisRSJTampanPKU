<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiagnosisTindakanTerapi extends Model
{
    protected $table = 'diagnosis_tindakan_terapi';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'axis1',
        'axis2',
        'axis3',
        'axis4',
        'axis5',
        'utama',
        'sekunder',
        'jam',
        'tindakan_terapi',
        'daftar_masalah',
    ];
}