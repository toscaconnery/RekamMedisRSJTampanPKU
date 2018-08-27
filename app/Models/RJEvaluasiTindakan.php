<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJEvaluasiTindakan extends Model
{
    protected $table = 'rj_evaluasi_tindakan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis', 
        'implementasi', 
        'evaluasi', 
    ];
}
