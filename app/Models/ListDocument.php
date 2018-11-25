<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListDocument extends Model
{
    protected $table = 'list_document';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'rj_asesmen_awal_perawat',
        'rj_asesmen_awal_dokter',
        'rj_asesmen_awal_gigi_perawat',
        'rj_asesmen_awal_gigi_dokter',
        'rj_informasi_edukasi',
        'rj_lapor_rehabilitasi',
        'rj_identifikasi_stresor',
        'rj_tes_konseling_hiv',
        'rj_izin_vct_hiv',
        'rj_hiv_anti_retroval',
        'rj_perkembangan_pasien',
        'rj_asesmen_awal_tumbuh_kembang_psikolog',
        'rj_asesmen_awal_tumbuh_kembang_dokter',
        'rj_resume',
        'igd_triase',
        'igd_asesmen_awal_rawat_darurat_perawat',
        'igd_asesmen_awal_rawat_darurat_dokter',
        'igd_suicide_fisik',
        'igd_catatan_kemajuan',
        'igd_catatan_perkembangan',
        'ri_surat_persetujuan',
        'ri_resume_medis',
        'ri_dpjp_case',
        'ri_persetujuan_umum',
        'ri_hak_kewajiban',
        'ri_asesmen',
        'ri_suicide_fisik',
        'ri_rawat_napza',
        'ri_penilaian_edmunson',
        'ri_risiko_nyeri',
        'ri_catatan_perkembangan',
        'ri_keperawatan_intensif',
        'ri_evaluasi_keperawatan',
        'ri_monitoring_observasi',
        'ri_laboratorium',
        'ri_rencana_napza',
        'ri_penggunaan_obat',
        'ri_riwayat_obat',
        'ri_efek_samping',
        'ri_asuhan_gizi',
        'ri_edukasi',
        'ri_rencana_pemulangan',
        'ri_panss_ec',
        'ri_penilaian_panss',
        'ri_lembar_konsultasi',
        'ri_transfer_internal',
        'ri_transfer_eksternal',
        'ri_pemberian_informasi',
        'ri_pemeriksaan_psikologis',
        'ri_serah_terima',
        'ri_surat_spd',
        'ri_permintaan_privasi',
        'ri_permintaan_rohani',
        'ri_permintaan_second',
        'ri_do_not_resucitate',
        'ri_instruksi_do_not_resucitate',
        'ri_persetujuan_tindakan',
        'ri_penolakan_tindakan',
        'ri_pulang_paksa',
        'ri_residen',
        'ri_surat_kuasa',
        'ri_pernyataan',
    ];
}
