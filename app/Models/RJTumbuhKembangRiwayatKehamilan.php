<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJTumbuhKembangRiwayatKehamilan extends Model
{
    protected $table = 'rj_tumbuh_kembang_riwayat_kehamilan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
		'keadaan_awal_kandungan',
		'penyakit_selama_mengandung',
		'perasaan_selama_mengandung',
		'suka_obat_obatan',
		'berdasarkan_anjuran',
		'pernah_jatuh_kecelakaan',
		'usia_jatuh_kecelakaan',
		'suka_merokok',
		'pernah_keguguran',
		'jumlah_keguguran',
		'usia_ketika_kasus',
		'bekerja_ketika_kasus',
    ];
}