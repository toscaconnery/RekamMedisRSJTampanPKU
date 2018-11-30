<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJAsesmenGigiKeperawatan extends Model
{
    protected $table = 'rj_asesmen_gigi_keperawatan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'pekerjaan',
		'alamat',
		'no_telp',
		'tingkat',
		'skala',
		'lokasi',
		'durasi',
		'frekuensi',
		'hilang',
		'nyeri_hilang_input_text',
		'pemberitahuan',
		'waktu_pemberitahuan',
		'jenis_resiko_jatuh',
		'usia',
		'diagnosis_hd',
		'gangguan_kognitif',
		'faktor_lingkungan',
		'waktu_respon_obat',
		'penggunaan_obat',
		'riwayat_jatuh_mrs',
		'diagnosis_sekunder',
		'alat_bantu',
		'terpasang_infus',
		'gaya_berjalan',
		'status_mental_mrs',
		'status_mental_edm',
		'diagnosis_edm',
		'eliminasi',
		'pengobatan',
		'diagnosa',
		'ambulasi',
		'nutrisi',
		'riwayat_jatuh_edm',
    ];
}
