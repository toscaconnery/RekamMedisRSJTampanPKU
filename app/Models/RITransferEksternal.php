<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RITransferEksternal extends Model
{
    protected $table = 'ri_transfer_eksternal';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'nomor',
        'rs_tujuan',
        'petugas_dihubungi',
        'tanggal_dihubungi',
        'jam_dihubungi',
        'alasan_transfer',
        'tanggal_transfer',
        'jam_transfer',
        'atas_permintaan',
        'kategori_pasien',
        'petugas_pendamping',
        'tanggal_masuk_rs',
        'anamnesa',
        'diagnosa',
        'indikasi_dirawat',
        'tindakan_dilakukan',
        'terapi_diberikan',
        'resiko',
        'transportasi',
        'nama_dokter',
        'jam_sebelum',
        'keadaan_umum_sebelum',
        'td_sebelum',
        'hr_sebelum',
        'rr_sebelum',
        'suhu_sebelum',
        'spo2_sebelum',
        'lainnya_sebelum',
        'keterangan_sebelum',
        'jam_selama',
        'keadaan_umum_selama',
        'td_selama',
        'hr_selama',
        'rr_selama',
        'suhu_selama',
        'spo2_selama',
        'lainnya_selama',
        'keterangan_selama',
        'jam_setelah',
        'keadaan_umum_setelah',
        'td_setelah',
        'hr_setelah',
        'rr_setelah',
        'suhu_setelah',
        'spo2_setelah',
        'lainnya_setelah',
        'keterangan_setelah',
        'nama_petugas_menyerahkan',
        'nama_petugas_penerima',
        'tanggal',
        'jam',
        'rs',
    ];
}




