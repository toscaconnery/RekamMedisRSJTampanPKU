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
        'rj_asesmen_awal_tumbuh_kembang_psikiatri',
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
        'ri_asesmen_awal_keperawatan_napza',
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


        'rj_asesmen_awal_perawat_petugas',
        'rj_asesmen_awal_dokter_petugas',
        'rj_asesmen_awal_perawat_date',
        'rj_asesmen_awal_dokter_date',
        'rj_asesmen_awal_gigi_perawat_petugas',
        'rj_asesmen_awal_gigi_dokter_petugas',
        'rj_informasi_edukasi_petugas',
        'rj_lapor_rehabilitasi_petugas',
        'rj_identifikasi_stresor_petugas',
        'rj_tes_konseling_hiv_petugas',
        'rj_izin_vct_hiv_petugas',
        'rj_hiv_anti_retroval_petugas',
        'rj_perkembangan_pasien_petugas',
        'rj_asesmen_awal_tumbuh_kembang_psikolog_petugas',
        'rj_asesmen_awal_tumbuh_kembang_dokter_petugas',
        'rj_asesmen_awal_tumbuh_kembang_psikiatri_petugas',
        'rj_resume_petugas',
        'igd_triase_petugas',
        'igd_asesmen_awal_rawat_darurat_perawat_petugas',
        'igd_asesmen_awal_rawat_darurat_dokter_petugas',
        'igd_suicide_fisik_petugas',
        'igd_catatan_kemajuan_petugas',
        'igd_catatan_perkembangan_petugas',
        'ri_surat_persetujuan_petugas',
        'ri_resume_medis_petugas',
        'ri_dpjp_case_petugas',
        'ri_persetujuan_umum_petugas',
        'ri_hak_kewajiban_petugas',
        'ri_asesmen_petugas',
        'ri_suicide_fisik_petugas',
        'ri_asesmen_awal_keperawatan_napza_petugas',
        'ri_penilaian_edmunson_petugas',
        'ri_risiko_nyeri_petugas',
        'ri_catatan_perkembangan_petugas',
        'ri_keperawatan_intensif_petugas',
        'ri_evaluasi_keperawatan_petugas',
        'ri_monitoring_observasi_petugas',
        'ri_laboratorium_petugas',
        'ri_rencana_napza_petugas',
        'ri_penggunaan_obat_petugas',
        'ri_riwayat_obat_petugas',
        'ri_efek_samping_petugas',
        'ri_asuhan_gizi_petugas',
        'ri_edukasi_petugas',
        'ri_rencana_pemulangan_petugas',
        'ri_panss_ec_petugas',
        'ri_penilaian_panss_petugas',
        'ri_lembar_konsultasi_petugas',
        'ri_transfer_internal_petugas',
        'ri_transfer_eksternal_petugas',
        'ri_pemberian_informasi_petugas',
        'ri_pemeriksaan_psikologis_petugas',
        'ri_serah_terima_petugas',
        'ri_surat_spd_petugas',
        'ri_permintaan_privasi_petugas',
        'ri_permintaan_rohani_petugas',
        'ri_permintaan_second_petugas',
        'ri_do_not_resucitate_petugas',
        'ri_instruksi_do_not_resucitate_petugas',
        'ri_persetujuan_tindakan_petugas',
        'ri_penolakan_tindakan_petugas',
        'ri_pulang_paksa_petugas',
        'ri_residen_petugas',
        'ri_surat_kuasa_petugas',
        'ri_pernyataan_petugas',
    ];
}
