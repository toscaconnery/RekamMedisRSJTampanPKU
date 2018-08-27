<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJStatusNeurologi extends Model
{
    protected $table = 'rj_status_neurologi';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'meningeal',
        'nervus',
        'motorik',
        'cerebellum',
        'vegetatif',
    ];
}