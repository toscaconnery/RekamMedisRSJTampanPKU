<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIRawatNapza extends Model
{
    protected $table = 'ri_rawat_napza';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tanggal_pengkajian',
        'sumber_informasi',
        'tanggal_dirawat',
        'ruangan',
        'alasan_masuk',
        'alasan_masuk_lainnya',
        'keadaan_masuk',
        'pemakaian_terakhir',
        'jenis_zat',
        'cara_pemakaian',
        'f1',
        'f2',
        'f3',
        'keterangan_komplikasi',
        'kriminal_dirumah',
        'kriminal_diluar',
        'problema_sekolah',
        'problema_keluarga',
        'problema_pekerjaan',
        'problema_masyarakat',
        'problema_masyarakat_lainnya',
        'dirawat_diagnosis_medis',
        'etiologi',
        'faktor_kambuh',
        'masalah_keperawatan_1',
        'jenis_penanggulangan',
        'alasan_meninggalkan',
        'masalah_keperawatan_2',
        'keluhan_fisik',
        'masalah_keperawatan_3',
        'f4',
        'anggota_keluarga',
        'f5',
        'f6',
        'keterangan_pranikah',
        'f7',
        'masalah_keperawatan_4',
        'gambaran_diri',
        'gambaran_diri_lainnya',
        'identitas',
        'ideal_diri',
        'harga_diri',
        'masalah_keperawatan_5',
        'nilai_keyakinan',
        'nilai_keyakinan_lainnya',
        'kegiatan_ibadah',
        'masalah_keperawatan_6',
        'adaptif',
        'adaptif_lainnya',
        'maladaptif',
        'maladaptif_lainnya',
        'masalah_keperawatan_7',
        'pengetahuan_kurang',
        'pengetahuan_kurang_lainnya',
        'masalah_keperawatan_8',
        'diagnosis_medis',
        'terapi_medis',
        'checkbox_masalah_keperawatan',
        'masalah_keperawatan_lainnya',
        'text_masalah_keperawatan',
    ];
}
