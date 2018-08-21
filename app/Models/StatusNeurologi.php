<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusNeurologi extends Model
{
    protected $table = 'status_neurologi';

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