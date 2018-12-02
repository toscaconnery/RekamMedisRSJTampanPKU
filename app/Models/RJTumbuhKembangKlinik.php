<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJTumbuhKembangKlinik extends Model
{
    protected $table = 'rj_tumbuh_kembang_klinik';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'hasil',
    ];
}
