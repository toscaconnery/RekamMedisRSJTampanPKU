<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Identifikasi extends Model
{
    protected $table = 'identifikasi';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
    	'no_rm',
    ];
}
