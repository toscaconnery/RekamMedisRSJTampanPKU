<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IGDAsesmenAwalRawatDaruratPerawat extends Model
{
    protected $table = 'igd_asesmen_awal_rawat_darurat_perawat';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tanggal_kedatangan',
        'jam_kedatangan',
        'cara_datang',
        'transportasi_ke_igd',
        'rujukan_dari',
        'visum',
        'macam_kasus',
        'tensi',
        'nadi',
        'pernafasan',
        'suhu',
        'tb',
        'bb',
        'e',
        'v',
        'm',
        'tindakan_pra_hospital',
        'tindakan_pra_hospital_lain',
        'daftar_obat_obatan',
        'alasan_kunjungan',
        'must_bb',
        'must_asupan',
        'must_diagnosis',
        'must_penurunan_bb',
        'must_list_diagnosis',
        'must_list_diagnosis_lain',
        'sk_1',
        'sk_2',
        'sk_3',
        'sk_4',
        'penyakit_malnutrisi',
        'penyakit_malnutrisi_lain',
        'pemberitahuan',
        'waktu_pemberitahuan',
        'keluhan_nyeri',
        'skala_nyeri',
        'lokasi_nyeri',
        'penyebab_nyeri',
        'nyeri_berpindah',
        'frekuensi_nyeri',
        'lama_nyeri',
        'jenis_risiko_jatuh',
        'humpty_1',
        'humpty_2',
        'humpty_3',
        'humpty_4',
        'humpty_5',
        'humpty_6',
        'morse_1',
        'morse_2',
        'morse_3',
        'morse_4',
        'morse_5',
        'morse_6',
        'edmunson_1',
        'edmunson_2',
        'edmunson_3',
        'edmunson_4',
        'edmunson_5',
        'edmunson_6',
        'edmunson_7',
        'edmunson_8',
        'tekanan_intrakanal',
        'list_tekanan_intrakanal',
        'pupil',
        'neurosensorik',
        'muskuloskeletal',
        'integumen',
        'turgor',
        'edema',
        'list_edema',
        'mukosa',
        'pendarahan',
        'jumlah_pendarahan',
        'warna_pendarahan',
        'intoksisasi',
        'eliminasi',
        'diagnosa_umum',
        'diagnosa_umum_lainnya',
        'diagnosa_jiwa',
        'diagnosa_jiwa_lainnya',
        'obat_parental',
        'ekg',
        'implementasi',
        'evaluasi',
    ];
}