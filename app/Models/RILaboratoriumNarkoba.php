<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RILaboratoriumNarkoba extends Model
{
    protected $table = 'ri_laboratorium_serologi';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'pemeriksaan',
		'hasil',
		'status',
		'normal',
    ];
}
