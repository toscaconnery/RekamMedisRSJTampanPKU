<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJTumbuhKembangPemeriksaanStatusMental extends Model
{
    protected $table = 'rj_tumbuh_kembang_pemeriksaan_status_mental';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'deskripsi_umum',
        'interaksi_ortu_anak',
        'orientasi_persepsi',
        'mood',
        'bentuk_arus_pikir',
        'isi_pikir',
        'fantasi',
        'kemampuan',
    ];
}