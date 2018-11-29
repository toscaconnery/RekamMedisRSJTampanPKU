<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJNyeri extends Model
{
    protected $table = 'rj_nyeri';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis', 
        'jenis_form', 
        'skala', 
        'lokasi', 
        'durasi', 
        'frekuensi', 
        'hilang', 
        'pemberitahuan', 
        'waktu_pemberitahuan',
    ];
}