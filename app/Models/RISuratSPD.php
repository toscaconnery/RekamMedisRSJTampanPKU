<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RISuratSPD extends Model
{
    protected $table = 'ri_surat_pengantar_dirawat';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'pendidikan',
        'pekerjaan',
        'tanggal_lahir',
        'jk',
        'alamat',
        'nama_pj',
        'alamat_pj',
        'no_telp_pj',
        'no_telp_pj2',
        'ruang',
        'cara_bayar',
        'sebab_utama_dirawat',
        'diagnosa',
        'gaf',
        'panss_ec',
        'terapi',
        'tanggal_masuk_rs',
        'ruang_masuk_rs',
        'kelas_masuk_rs',
        'tanggal',
        'dokter_igd_klinik',
    ];
}
