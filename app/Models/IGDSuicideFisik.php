<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IGDSuicideFisik extends Model
{
    protected $table = 'igd_suicide_fisik';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'a1',
        'a2',
        'a3',
        'a4',
        'a5',
        'a6',
        'a7',
        'b1',
        'b2',
        'b3',
        'b4',
        'b5',
        'b6',
        'b7',
        'c1',
        'c2',
        'c3',
        'c4',
        'c5',
        'c6',
        'c7',
        'c8',
        'c9',
        'd1',
        'd2',
        'd3',
        'd4',
        'd5',
        'd6',
        'd7',
        'd8',
        'd9',
        'suicide_protective_factor',
        'violence_protective_factor',
        'other_risk',
    ];
}