<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RILaboratoriumFaecesRutin extends Model
{
    protected $table = 'ri_laboratorium_faeces_rutin';

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
