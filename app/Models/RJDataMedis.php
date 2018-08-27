<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJDataMedis extends Model
{
    protected $table = 'rj_data_medis';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'pewawancara',
        'keluhan_utama',
        'riwayat_penyakit_sekarang',
        'riwayat_penyakit_dahulu',
        'riwayat_napza',
        'lama_pemakaian',
        'cara_pemakaian',
        'latar_belakang_pemakaian',
        'riwayat_pendidikan',
        'riwayat_pekerjaan',
        'riwayat_perkawinan',
        'riwayat_penyakit_lainnya',
        'riwayat_operasi',
        'jenis_operasi',
        'waktu_operasi',
        'riwayat_tranfusi',
        'reaksi_tranfusi',
        'reaksi_timbul',
        'riwayat_penyakit_dalam_keluarga',
        'riwayat_alergi',
    ];
}