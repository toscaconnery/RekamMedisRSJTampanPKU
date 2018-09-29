<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIResume extends Model
{
    protected $table = 'ri_resume';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tanggal_masuk',
        'tanggal_keluar',
        'ruang_rawat_terakhir',
        'dpjp',
        'alergi',
        'diagnosa_masuk',
        'alasan_dirawat',
        'hasil_pemeriksaan_penunjang',
        'terapi',
        'diagnosa_psikiatri_1',
        'kode_psikiatri_1',
        'diagnosa_non_psikiatri_1',
        'kode_non_psikiatri_1',
        'diagnosa_psikiatri_2',
        'kode_psikiatri_2',
        'diagnosa_non_psikiatri_2',
        'kode_non_psikiatri_2',
        'diagnosa_psikiatri_3',
        'kode_psikiatri_3',
        'diagnosa_non_psikiatri_3',
        'kode_non_psikiatri_3',
        'diagnosa_psikiatri_4',
        'kode_psikiatri_4',
        'diagnosa_non_psikiatri_4',
        'kode_non_psikiatri_4',
        'diagnosa_psikiatri_5',
        'kode_psikiatri_5',
        'diagnosa_non_psikiatri_5',
        'kode_non_psikiatri_5',
        'penyebab_luar',
        'keadaan_keluar',
        'cara_pulang',
        'cara_pulang_lainnya',
        'kondisi_pulang',
        'jam_keluar',
        'td',
        'hr',
        'rr',
        't',
        'bb',
        'penyakit',
        'diet',
        'keterangan_diet',
        'tempat_kontrol',
        'tanggal_kontrol',
        'hasil_tertunda',
        'tanggal_pengambilan',
    ];
}