<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RILembarKonsultasi extends Model
{
    protected $table = 'ri_lembar_konsultasi';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'konsultasi1',
        'konsultasi2',
        'konsultasi3',
        'konsultasi4',
        'konsultasi5',
        'jkonsultasi1',
        'jkonsultasi2',
        'jkonsultasi3',
        'jkonsultasi4',
        'jkonsultasi5',
        'jkonsultasi6',
        'jkonsultasi7',
    ];
}
