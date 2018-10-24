<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIDoNotResucitate extends Model
{
    protected $table = 'ri_do_not_resucitate';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'nama',
        'alamat',
        'agama',
        'yang_menyatakan',
        'saksi_keluarga',
        'saksi_pemberi_asuhan',
    ];
}