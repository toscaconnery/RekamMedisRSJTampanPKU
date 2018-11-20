<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RITransferInternal extends Model
{
    protected $table = 'ri_transfer_internal';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tanggal_masuk',
        'dpjp',
        'dokter_konsulen_1',
        'dokter_konsulen_2',
        'dokter_konsulen_3',
        'ruang_kamar',
        'tanggal_pindah',
        'jam_pindah',
        'pindah_ke',
        'diagnosis_sekarang',
        'keadaan_umum',
        'kesadaran',
        'tensi',
        'suhu',
        'nadi',
        'keluhan',
        'riwayat_penyakit',
        'riwayat_alergi',
        'alasan_pindah',
        'laboratorium',
        'ekg',
        'radiologi',
        'ct_scan',
        'usg',
        'tindakan_medis',
        'infus',
        'obat_injeksi',
        'obat_oral',
        'lain_lain',
        'panss_ec',
        'kategori',
        'tanggal',
        'jam',
        'yang_menyerahkan',
        'yang_menerima',
    ];
}
