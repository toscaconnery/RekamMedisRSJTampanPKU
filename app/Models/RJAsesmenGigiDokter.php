<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJAsesmenGigiDokter extends Model
{
    protected $table = 'rj_asesmen_gigi_dokter';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'pekerjaan',
		'alamat',
		'no_telp',
        'golongan_darah',
		'tekanan_darah_top',
		'tekanan_darah_bottom',
		'tekanan_jantung',
		'ket_tekanan_jantung',
		'diabetes',
		'ket_diabetes',
		'hepatitis',
		'ket_hepatitis',
		'penyakit_lainnya',
		'ket_penyakit_lainnya',
		'alergi_obat',
		'ket_alergi_obat',
		'alergi_makanan',
		'ket_alergi_makanan',
		'oklusi',
		'torus_palatinus',
		'torus_mandibularis',
		'palatum',
		'supernumerary_teeth',
		'ket_supernumerary_teeth',
		'diastema',
		'ket_diastema',
		'anomali',
		'ket_anomali',
		'lain',
		'keterangan',
    ];
}
