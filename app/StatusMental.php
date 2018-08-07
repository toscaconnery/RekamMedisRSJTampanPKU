<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusMental extends Model
{
    protected $table = 'status_mental';

    protected $primaryKey = 'id_status';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'konsep_diri',
        'persepsi',
        'motorik',
        'penampilan',
        'pikir',
        'perasaan',
        'status_fungsional',
        'laporan',
    ];
}