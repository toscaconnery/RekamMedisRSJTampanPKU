<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIPemberianInformasi extends Model
{
    protected $table = 'ri_pemberian_informasi';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tanggal',
        'jam',
        'informasi',
        'pemberi',
        'penerima',
    ];
}
