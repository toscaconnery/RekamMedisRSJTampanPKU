<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJTumbuhKembangRiwayatAkademis extends Model
{
    protected $table = 'rj_tumbuh_kembang_riwayat_akademis';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'sikap',
        'keterampilan_motorik_awal',
        'hasil_belajar_anak',
        'pelajaran_disenangi',
        'pelajaran_sulit',
        'keluhan_di_pelajaran_sulit',
        'tempat_belajar_sendiri',
        'waktu_biasa_belajar',
        'dibantu_belajar',
        'dibantu_belajar_oleh',
        'sikap_di_kegiatan',
        'les',
        'pelajaran_les',
        'pengajar',
    ];
}