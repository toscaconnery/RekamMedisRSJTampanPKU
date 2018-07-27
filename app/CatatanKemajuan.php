<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatatanKemajuan extends Model
{
    protected $table = 'catatan_kemajuan';

    protected $primary_key = 'id_catatan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
    	'id_regis', 'waktu', 'catatan_kemajuan', 'tindakan_terapi',
    ];
}
