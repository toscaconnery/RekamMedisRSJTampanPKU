<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RISuratKuasa extends Model
{
    protected $table = 'ri_surat_kuasa';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
		'nama',
		'umur',
		'alamat',
		'tanggal',
		'konselor',
		'kepala_ruangan',
		'residen',
    ];
}