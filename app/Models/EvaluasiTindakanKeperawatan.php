<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvaluasiTindakanKeperawatan extends Model
{
    protected $table = 'evaluasi_tindakan_keperawatan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis', 
        'implementasi', 
        'evaluasi', 
    ];
}
