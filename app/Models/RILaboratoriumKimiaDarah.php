<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RILaboratoriumKimiaDarah extends Model
{
    protected $table = 'ri_laboratorium_kimia_darah';

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
