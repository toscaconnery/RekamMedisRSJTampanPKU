<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJInformasiEdukasi extends Model
{
    protected $table = 'ri_informasi_edukasi';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'bahasa',
        'ket_bahasa',
        'penerjemah',
        'pendidikan',
        'baca_tulis',
        'cara_belajar',
        'budaya',
        'hambatan',
        'hambatan_lain',
        'kebutuhan',
        'kebutuhan_lain',
        'kesedian_menerima',
        'nama_keluarga',
        'hubungan',
    ];
}