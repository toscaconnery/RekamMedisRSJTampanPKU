<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identifikasi extends Model
{
    protected $table = 'identifikasi';

    protected $primary_key = 'id_regis';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
    	'no_rm',
    ];
}
