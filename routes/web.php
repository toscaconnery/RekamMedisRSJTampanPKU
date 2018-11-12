<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'IndexController@get_index');
Route::get('/index', 'IndexController@get_index');
Route::get('/home', 'IndexController@get_index');

// Route::get('/pendaftaran_pasien', 'PasienController@pendaftaran_pasien');
// Route::post('/pendaftaran_pasien', 'PasienController@store_pendaftaran_pasien');
Route::get('/javascript_test', 'TestingController@javascript_test');
Route::get('/sweetalert2_test', 'TestingController@sweetalert2_test');

Route::get('/identifikasi_pasien_baru_1', 'PasienController@identifikasi_pasien_baru_1');
Route::post('/identifikasi_pasien_baru_2', 'PasienController@identifikasi_pasien_baru_2');
Route::post('/identifikasi_pasien_baru_final', 'PasienController@identifikasi_pasien_baru_final');

// RAWAT JALAN========
// ASESMEN AWAL
Route::get('/rj_asesmen_awal', 'RawatJalanController@asesmen_awal');    //will obsolete soon
Route::post('/fisik_gizi', 'RawatJalanController@store_fisik_gizi');
Route::post('/penilaian_tingkat_nyeri', 'RawatJalanController@store_penilaian_tingkat_nyeri');
Route::post('/humpty_dumpty', 'RawatJalanController@store_humpty_dumpty');
Route::post('/morse', 'RawatJalanController@store_morse');
Route::post('/edmunson', 'RawatJalanController@store_edmunson');
Route::post('/diagnosa_keperawatan', 'RawatJalanController@store_diagnosa_keperawatan');
Route::post('/evaluasi_tindakan_keperawatan', 'RawatJalanController@store_evaluasi_tindakan_keperawatan');
Route::post('/data_medis', 'RawatJalanController@store_data_medis');
Route::post('/obat_saat_ini', 'RawatJalanController@store_obat_saat_ini');
Route::post('/pemeriksaan_fisik', 'RawatJalanController@store_pemeriksaan_fisik');
Route::post('/status_psikiatri', 'RawatJalanController@store_status_psikiatri');
Route::post('/status_neurologi', 'RawatJalanController@store_status_neurologi');
Route::post('/pemeriksaan_penunjang', 'RawatJalanController@store_pemeriksaan_penunjang');
Route::post('/instrumen_penilaian', 'RawatJalanController@store_instrumen_penilaian');
Route::post('/diagnosis_tindakan_terapi', 'RawatJalanController@store_diagnosis_tindakan_terapi');
Route::post('/tindak_lanjut', 'RawatJalanController@store_tindak_lanjut');

// ASESMEN GIGI
Route::get('/rj_asesmen_gigi', 'RawatJalanController@asesmen_gigi');




//FIX
//DO  NOT  TOUCH!!!////
//DO  NOT  TOUCH!!!////
//DO  NOT  TOUCH!!!////
//DO  NOT  TOUCH!!!////

Route::get('/put_selected_patient_id/{id}', 'PasienController@put_selected_patient_id');
Route::get('/check_selected_patient_id', 'PasienController@check_selected_patient_id');
Route::get('/daftar_dokumen', 'DocumentController@index');

Route::get('/penundaan_pelayanan', 'PenundaanPelayananController@get_penundaan_pelayanan');
Route::post('/penundaan_pelayanan', 'PenundaanPelayananController@post_penundaan_pelayanan');
Route::get('/penundaan_pelayanan_read', 'PenundaanPelayananController@get_penundaan_pelayanan_read'); // new add

Route::get('/rj_asesmen_awal_perawat', 'RJAsesmenAwalController@get_rj_asesmen_awal_perawat');
Route::post('/rj_asesmen_awal_perawat', 'RJAsesmenAwalController@post_rj_asesmen_awal_perawat');
Route::get('/rj_asesmen_awal_perawat_read', 'RJAsesmenAwalController@get_rj_asesmen_awal_perawat_read');
Route::get('/rj_asesmen_awal_dokter', 'RJAsesmenAwalController@get_rj_asesmen_awal_dokter');
Route::post('/rj_asesmen_awal_dokter', 'RJAsesmenAwalController@post_rj_asesmen_awal_dokter');
Route::get('/rj_asesmen_awal_dokter_read', 'RJAsesmenAwalController@get_rj_asesmen_awal_dokter_read');

Route::get('/rj_asesmen_awal_gigi_perawat', 'RJAsesmenAwalGigiController@get_rj_asesmen_awal_gigi_perawat');
Route::post('/rj_asesmen_awal_gigi_perawat', 'RJAsesmenAwalGigiController@post_rj_asesmen_awal_gigi_perawat');
Route::get('/rj_asesmen_awal_gigi_perawat_read', 'RJAsesmenAwalGigiController@get_rj_asesmen_awal_gigi_perawat_read');
Route::get('/rj_asesmen_awal_gigi_dokter', 'RJAsesmenAwalGigiController@get_rj_asesmen_awal_gigi_dokter');
Route::post('/rj_asesmen_awal_gigi_dokter', 'RJAsesmenAwalGigiController@post_rj_asesmen_awal_gigi_dokter');
Route::get('/rj_asesmen_awal_gigi_dokter_read', 'RJAsesmenAwalGigiController@get_rj_asesmen_awal_gigi_dokter_read');

Route::get('/rj_informasi_edukasi', 'RJInformasiEdukasiController@get_rj_informasi_edukasi');
Route::post('/rj_informasi_edukasi', 'RJInformasiEdukasiController@post_rj_informasi_edukasi');
Route::get('/rj_informasi_edukasi_read', 'RJInformasiEdukasiController@get_rj_informasi_edukasi_read');
Route::get('/rj_informasi_edukasi_edit', 'RJInformasiEdukasiController@get_rj_informasi_edukasi_edit');
Route::post('/rj_informasi_edukasi_edit', 'RJInformasiEdukasiController@post_rj_informasi_edukasi_edit');
Route::get('/rj_informasi_edukasi_list_informasi', 'RJInformasiEdukasiController@get_rj_informasi_edukasi_list_informasi');
Route::post('/rj_informasi_edukasi_list_informasi', 'RJInformasiEdukasiController@post_rj_informasi_edukasi_list_informasi');
Route::get('/rj_informasi_edukasi_list_informasi_read', 'RJInformasiEdukasiController@get_rj_informasi_edukasi_list_informasi_read');

Route::get('/rj_lapor_rehabilitasi', 'RJLaporRehabilitasiController@get_rj_lapor_rehabilitasi');
Route::post('/rj_lapor_rehabilitasi', 'RJLaporRehabilitasiController@post_rj_lapor_rehabilitasi');
Route::get('/rj_lapor_rehabilitasi_read', 'RJLaporRehabilitasiController@get_rj_lapor_rehabilitasi_read');

Route::get('/rj_perkembangan_pasien', 'RJPerkembanganPasienController@get_rj_perkembangan_pasien');
Route::post('/rj_perkembangan_pasien', 'RJPerkembanganPasienController@post_rj_perkembangan_pasien');
Route::get('/rj_perkembangan_pasien_read', 'RJPerkembanganPasienController@get_rj_perkembangan_pasien_read');

Route::get('/rj_identifikasi_stresor', 'RJIdentifikasiStresorController@get_rj_identifikasi_stresor');
Route::post('/rj_identifikasi_stresor', 'RJIdentifikasiStresorController@post_rj_identifikasi_stresor');
Route::get('/rj_identifikasi_stresor_read', 'RJIdentifikasiStresorController@get_rj_identifikasi_stresor_read');

Route::get('/rj_tes_konseling_hiv', 'RJTesKonselingHIVController@get_tes_konseling_hiv');
Route::post('/rj_tes_konseling_hiv', 'RJTesKonselingHIVController@post_tes_konseling_hiv');
Route::get('/rj_tes_konseling_hiv_read', 'RJTesKonselingHIVController@get_tes_konseling_hiv_read');

Route::get('/rj_izin_vct_hiv', 'RJIzinVCTHIVController@get_rj_izin_vct_hiv');
Route::post('/rj_izin_vct_hiv', 'RJIzinVCTHIVController@post_rj_izin_vct_hiv');
Route::get('/rj_izin_vct_hiv_read', 'RJIzinVCTHIVController@get_rj_izin_vct_hiv_read');

Route::get('/rj_hiv_anti_retroval', 'RJHIVAntiRetrovalController@get_rj_hiv_anti_retroval');
Route::post('/rj_hiv_anti_retroval', 'RJHIVAntiRetrovalController@post_rj_hiv_anti_retroval');
Route::get('/rj_hiv_anti_retroval_read', 'RJHIVAntiRetrovalController@get_rj_hiv_anti_retroval_read');


Route::get('/rj_asesmen_awal_tumbuh_kembang_psikolog', 'RJAsesmenAwalTumbuhKembangController@get_rj_asesmen_awal_tumbuh_kembang_psikolog');
Route::post('/rj_asesmen_awal_tumbuh_kembang_psikolog', 'RJAsesmenAwalTumbuhKembangController@post_rj_asesmen_awal_tumbuh_kembang_psikolog');
Route::post('/rj_asesmen_awal_tumbuh_kembang_psikolog_read', 'RJAsesmenAwalTumbuhKembangController@get_rj_asesmen_awal_tumbuh_kembang_psikolog_read');
Route::get('/rj_asesmen_awal_tumbuh_kembang_dokter', 'RJAsesmenAwalTumbuhKembangController@get_rj_asesmen_awal_tumbuh_kembang_dokter');
Route::post('/rj_asesmen_awal_tumbuh_kembang_dokter', 'RJAsesmenAwalTumbuhKembangController@post_rj_asesmen_awal_tumbuh_kembang_dokter');
Route::post('/rj_asesmen_awal_tumbuh_kembang_dokter_read', 'RJAsesmenAwalTumbuhKembangController@get_rj_asesmen_awal_tumbuh_kembang_dokter_read');

Route::get('/rj_resume', 'RJResumeController@get_rj_resume');
Route::post('/rj_resume', 'RJResumeController@post_rj_resume');
Route::get('/rj_resume_read', 'RJResumeController@get_rj_resume_read'); // new add

Route::get('/igd_triase', 'IGDTriaseController@get_igd_triase');
Route::post('/igd_triase', 'IGDTriaseController@post_igd_triase');
Route::get('/igd_triase_read', 'IGDTriaseController@get_igd_triase_read');
Route::get('/igd_triase_edit', 'IGDTriaseController@get_igd_triase_edit');
Route::post('/igd_triase_edit', 'IGDTriaseController@post_igd_triase_edit');

Route::get('/igd_suicide_fisik', 'IGDSuicideFisikController@get_igd_suicide_fisik');
Route::post('/igd_suicide_fisik', 'IGDSuicideFisikController@post_igd_suicide_fisik');
Route::get('/igd_suicide_fisik_read', 'IGDSuicideFisikController@get_igd_suicide_fisik_read');
Route::get('/igd_suicide_fisik_edit', 'IGDSuicideFisikController@get_igd_suicide_fisik_edit');
Route::post('/igd_suicide_fisik_edit', 'IGDSuicideFisikController@post_igd_suicide_fisik_edit');

Route::get('/igd_catatan_kemajuan', 'IGDCatatanKemajuanController@get_igd_catatan_kemajuan');
Route::post('/igd_catatan_kemajuan', 'IGDCatatanKemajuanController@post_igd_catatan_kemajuan');
Route::get('/igd_catatan_kemajuan_read', 'IGDCatatanKemajuanController@get_igd_catatan_kemajuan_read');
Route::get('/igd_catatan_kemajuan_edit', 'IGDCatatanKemajuanController@get_igd_catatan_kemajuan_edit');
Route::post('/igd_catatan_kemajuan_edit', 'IGDCatatanKemajuanController@post_igd_catatan_kemajuan_edit');

Route::get('/igd_catatan_perkembangan', 'IGDCatatanPerkembanganController@get_igd_catatan_perkembangan');
Route::post('/igd_catatan_perkembangan', 'IGDCatatanPerkembanganController@post_igd_catatan_perkembangan');
Route::get('/igd_catatan_perkembangan_read', 'IGDCatatanPerkembanganController@get_igd_catatan_perkembangan_read');
Route::get('/igd_catatan_perkembangan_edit', 'IGDCatatanPerkembanganController@get_igd_catatan_perkembangan_edit');
Route::post('/igd_catatan_perkembangan_edit', 'IGDCatatanPerkembanganController@post_igd_catatan_perkembangan_edit');

Route::get('/igd_asesmen_awal_rawat_darurat_perawat', 'IGDAsesmenAwalRawatDaruratController@get_igd_asesmen_awal_rawat_darurat_perawat');
Route::post('/igd_asesmen_awal_rawat_darurat_perawat', 'IGDAsesmenAwalRawatDaruratController@post_igd_asesmen_awal_rawat_darurat_perawat');
Route::get('/igd_asesmen_awal_rawat_darurat_perawat_read', 'IGDAsesmenAwalRawatDaruratController@get_igd_asesmen_awal_rawat_darurat_perawat_read');
Route::get('/igd_asesmen_awal_rawat_darurat_perawat_edit', 'IGDAsesmenAwalRawatDaruratController@get_igd_asesmen_awal_rawat_darurat_perawat_edit');
Route::post('/igd_asesmen_awal_rawat_darurat_perawat_edit', 'IGDAsesmenAwalRawatDaruratController@post_igd_asesmen_awal_rawat_darurat_perawat_edit');


Route::get('/igd_asesmen_awal_rawat_darurat_dokter', 'IGDAsesmenAwalRawatDaruratController@get_igd_asesmen_awal_rawat_darurat_dokter');
Route::post('/igd_asesmen_awal_rawat_darurat_dokter', 'IGDAsesmenAwalRawatDaruratController@post_igd_asesmen_awal_rawat_darurat_dokter');
Route::get('/igd_asesmen_awal_rawat_darurat_dokter_read', 'IGDAsesmenAwalRawatDaruratController@get_igd_asesmen_awal_rawat_darurat_dokter_read');
Route::get('/igd_asesmen_awal_rawat_darurat_dokter_edit', 'IGDAsesmenAwalRawatDaruratController@get_igd_asesmen_awal_rawat_darurat_dokter_edit');
Route::post('/igd_asesmen_awal_rawat_darurat_dokter_edit', 'IGDAsesmenAwalRawatDaruratController@post_igd_asesmen_awal_rawat_darurat_dokter_edit');

Route::get('/ri_resume_medis', 'RIResumeMedisController@get_ri_resume_medis');
Route::post('/ri_resume_medis', 'RIResumeMedisController@post_ri_resume_medis');
Route::get('/ri_resume_medis_read', 'RIResumeMedisController@get_ri_resume_medis_read'); // new add

Route::get('/ri_dpjp_case', 'RIDPJPCaseController@get_ri_dpjp_case');
Route::post('/ri_dpjp_case', 'RIDPJPCaseController@post_ri_dpjp_case');
Route::get('/ri_dpjp_case_read', 'RIDPJPCaseController@post_ri_dpjp_case_read'); // new add

Route::get('/ri_suicide_fisik', 'RISuicideFisikController@get_ri_suicide_fisik');
Route::post('/ri_suicide_fisik', 'RISuicideFisikController@post_ri_suicide_fisik');
Route::get('/ri_suicide_fisik_read', 'RISuicideFisikController@get_ri_suicide_fisik_read'); // new add

Route::get('/ri_rawat_napza', 'RIRawatNapzaController@get_ri_rawat_napza');
Route::post('/ri_rawat_napza', 'RIRawatNapzaController@post_ri_rawat_napza');
Route::get('/ri_rawat_napza_read', 'RIRawatNapzaController@get_ri_rawat_napza_read'); // new add

Route::get('/ri_penilaian_edmunson', 'RIPenilaianEdmunsonController@get_ri_penilaian_edmunson');
Route::post('/ri_penilaian_edmunson', 'RIPenilaianEdmunsonController@post_ri_penilaian_edmunson');
Route::get('/ri_penilaian_edmunson_read', 'RIPenilaianEdmunsonController@get_ri_penilaian_edmunson_read'); // new add

Route::get('/ri_risiko_nyeri', 'RIRisikoNyeriController@get_ri_risiko_nyeri');
Route::post('/ri_risiko_nyeri', 'RIRisikoNyeriController@post_ri_risiko_nyeri');
Route::get('/ri_risiko_nyeri_read', 'RIRisikoNyeriController@get_ri_risiko_nyeri_read'); // new add

Route::get('/ri_catatan_perkembangan', 'RIPerkembanganPasienController@get_ri_catatan_perkembangan');
Route::post('/ri_catatan_perkembangan', 'RIPerkembanganPasienController@post_ri_catatan_perkembangan');
Route::get('/ri_catatan_perkembangan_read', 'RIPerkembanganPasienController@get_ri_catatan_perkembangan_read'); // new add

Route::get('/ri_keperawatan_intensif', 'RIKeperawatanIntensifController@get_ri_keperawatan_intensif');
Route::post('/ri_keperawatan_intensif', 'RIKeperawatanIntensifController@post_ri_keperawatan_intensif');
Route::get('/ri_keperawatan_intensif_read', 'RIKeperawatanIntensifController@get_ri_keperawatan_intensif_read'); // new add

Route::get('/ri_evaluasi_keperawatan', 'RIEvaluasiKeperawatanController@get_ri_evaluasi_keperawatan');
Route::post('/ri_evaluasi_keperawatan', 'RIEvaluasiKeperawatanController@post_ri_evaluasi_keperawatan');
Route::get('/ri_evaluasi_keperawatan_read', 'RIEvaluasiKeperawatanController@get_ri_evaluasi_keperawatan_read'); // new add

Route::get('/ri_monitoring_observasi', 'RIMonitoringObservasiController@get_ri_monitoring_observasi');
Route::post('/ri_monitoring_observasi', 'RIMonitoringObservasiController@post_ri_monitoring_observasi');
Route::get('/ri_monitoring_observasi_read', 'RIMonitoringObservasiController@get_ri_monitoring_observasi_read'); // new add

Route::get('/ri_edukasi', 'RIEdukasiController@get_ri_edukasi');
Route::post('/ri_edukasi', 'RIEdukasiController@post_ri_edukasi');
Route::get('/ri_edukasi_read', 'RIEdukasiController@get_ri_edukasi_read');

Route::get('/ri_surat_spd', 'RISuratPengantarDirawatController@get_ri_surat_spd');
Route::post('/ri_surat_spd', 'RISuratPengantarDirawatController@post_ri_surat_spd');
Route::get('/ri_surat_spd_read', 'RISuratPengantarDirawatController@get_ri_surat_spd_read');

Route::get('/ri_persetujuan_umum', 'RIPersetujuanUmumController@get_ri_persetujuan_umum');
Route::post('/ri_persetujuan_umum', 'RIPersetujuanUmumController@post_ri_persetujuan_umum');
Route::get('/ri_persetujuan_umum_read', 'RIPersetujuanUmumController@get_ri_persetujuan_umum_read');

Route::get('/ri_hak_kewajiban', 'RIHakKewajibanController@get_ri_hak_kewajiban');
Route::post('/ri_hak_kewajiban', 'RIHakKewajibanController@post_ri_hak_kewajiban');
Route::get('/ri_hak_kewajiban_read', 'RIHakKewajibanController@get_ri_hak_kewajiban_read');

Route::get('/ri_permintaan_privasi', 'RIPermintaanPrivasiController@get_ri_permintaan_privasi');
Route::post('/ri_permintaan_privasi', 'RIPermintaanPrivasiController@post_ri_permintaan_privasi');
Route::get('/ri_permintaan_privasi_read', 'RIPermintaanPrivasiController@get_ri_permintaan_privasi_read');

Route::get('/ri_permintaan_rohani', 'RIPermintaanRohaniController@get_ri_permintaan_rohani');
Route::post('/ri_permintaan_rohani', 'RIPermintaanRohaniController@post_ri_permintaan_rohani');
Route::get('/ri_permintaan_rohani_read', 'RIPermintaanRohaniController@get_ri_permintaan_rohani_read');

Route::get('/ri_permintaan_second', 'RIPermintaanSecondController@get_ri_permintaan_second');
Route::post('/ri_permintaan_second', 'RIPermintaanSecondController@post_ri_permintaan_second');
Route::get('/ri_permintaan_second_read', 'RIPermintaanSecondController@get_ri_permintaan_second_read');

Route::get('/ri_pernyataan', 'RIPernyataanController@get_ri_pernyataan');
Route::post('/ri_pernyataan', 'RIPernyataanController@post_ri_pernyataan');
Route::get('/ri_pernyataan_read', 'RIPernyataanController@get_ri_pernyataan_read');

Route::get('/ri_persetujuan_tindakan', 'RIPersetujuanTindakanController@get_ri_persetujuan_tindakan');
Route::post('/ri_persetujuan_tindakan', 'RIPersetujuanTindakanController@post_ri_persetujuan_tindakan');
Route::get('/ri_persetujuan_tindakan_read', 'RIPersetujuanTindakanController@get_ri_persetujuan_tindakan_read');

Route::get('/ri_penolakan_tindakan', 'RIPenolakanTindakanController@get_ri_penolakan_tindakan');
Route::post('/ri_penolakan_tindakan', 'RIPenolakanTindakanController@post_ri_penolakan_tindakan');
Route::get('/ri_penolakan_tindakan_read', 'RIPenolakanTindakanController@get_ri_penolakan_tindakan_read');

Route::get('/ri_do_not_resucitate', 'RIDoNotResucitateController@get_ri_do_not_resucitate');
Route::post('/ri_do_not_resucitate', 'RIDoNotResucitateController@post_ri_do_not_resucitate');
Route::get('/ri_do_not_resucitate_read', 'RIDoNotResucitateController@get_ri_do_not_resucitate_read');

Route::get('/ri_instruksi_do_not_resucitate', 'RIInstruksiDoNotResucitateController@get_ri_instruksi_do_not_resucitate');
Route::post('/ri_instruksi_do_not_resucitate', 'RIInstruksiDoNotResucitateController@post_ri_instruksi_do_not_resucitate');
Route::get('/ri_instruksi_do_not_resucitate_read', 'RIInstruksiDoNotResucitateController@get_ri_instruksi_do_not_resucitate_read');

Route::get('/ri_penggunaan_obat', 'RIPenggunaanObatController@get_ri_penggunaan_obat');
Route::post('/ri_penggunaan_obat', 'RIPenggunaanObatController@post_ri_penggunaan_obat');
Route::get('/ri_penggunaan_obat_read', 'RIPenggunaanObatController@get_ri_penggunaan_obat_read');

Route::get('/ri_riwayat_obat', 'RIRiwayatObatController@get_ri_riwayat_obat');
Route::post('/ri_riwayat_obat', 'RIRiwayatObatController@post_ri_riwayat_obat');
Route::get('/ri_riwayat_obat_read', 'RIRiwayatObatController@get_ri_riwayat_obat_read');

Route::get('/ri_panss_ec', 'RIPanssEcController@get_ri_panss_ec');
Route::post('/ri_panss_ec', 'RIPanssEcController@post_ri_panss_ec');
Route::get('/ri_panss_ec_read', 'RIPanssEcController@get_ri_panss_ec_read');

Route::get('/ri_penilaian_panss', 'RIPenilaianPanssController@get_ri_penilaian_panss');
Route::post('/ri_penilaian_panss', 'RIPenilaianPanssController@post_ri_penilaian_panss');
Route::get('/ri_penilaian_panss_read', 'RIPenilaianPanssController@get_ri_penilaian_panss_read');

Route::get('/ri_lembar_konsultasi', 'RILembarKonsultasiController@get_ri_lembar_konsultasi');
Route::post('/ri_lembar_konsultasi', 'RILembarKonsultasiController@post_ri_lembar_konsultasi');
Route::get('/ri_lembar_konsultasi_read', 'RILembarKonsultasiController@get_ri_lembar_konsultasi_read');

Route::get('/ri_rencana_pemulangan', 'RIRencanaPemulanganController@get_ri_rencana_pemulangan');
Route::post('/ri_rencana_pemulangan', 'RIRencanaPemulanganController@post_ri_rencana_pemulangan');
Route::get('/ri_rencana_pemulangan_read', 'RIRencanaPemulanganController@get_ri_rencana_pemulangan_read');

Route::get('/ri_efek_samping', 'RIEfekSampingController@get_ri_efek_samping');
Route::post('/ri_efek_samping', 'RIEfekSampingController@post_ri_efek_samping');


//END  OF  DO  NOT  TOUCH!!!////
//END  OF  DO  NOT  TOUCH!!!////
//END  OF  DO  NOT  TOUCH!!!////
//END  OF  DO  NOT  TOUCH!!!////


Route::get('/pdf', 'Pdf_controller@test_pdf');

Route::get('/ri_surat_persetujuan', function () {
    return view('ri_surat_persetujuan');
});

// Route::get('/penundaan_pelayanan', function () {
//     return view('penundaan_pelayanan');
// });


// Route::get('/rj_informasi_edukasi', function () {
//     return view('rj_informasi_edukasi');
// });
// Route::get('/rj_lapor_rehabilitasi2', function () {
//     return view('rj_lapor_rehabilitasi');
// });
// Route::get('/rj_perkembangan_pasien', function () {
//     return view('rj_perkembangan_pasien');
// });
// Route::get('/rj_identifikasi_stresor', function () {
//     return view('rj_identifikasi_stresor');
// });
// Route::get('/rj_tumbuh_kembang', function () {
//     return view('rj_tumbuh_kembang');
// });
// Route::get('/rj_resume_rawat', function () {
//     return view('rj_resume_rawat');
// });
// Route::get('/igd_suicide_fisik', function () {
//     return view('igd_suicide_fisik');
// });
// Route::get('/igd_triase_pasien', function () {
//     return view('igd_triase_pasien');
// });
// Route::get('/igd_catatan_kemajuan', function () {
//     return view('igd_catatan_kemajuan');
// });
// Route::get('/igd_perkembangan_pasien', function () {
//     return view('igd_perkembangan_pasien');
// });
// Route::get('/ri_catatan_perkembangan', function () {
//     return view('ri_catatan_perkembangan');
// });
Route::get('/igd_asesmen_darurat', function () {
    return view('igd_asesmen_darurat');
});







Route::get('/rj_rencana_pemulangan', function () {
    return view('rj_rencana_pemulangan');
});




//new addition page

Route::get('/ri_laboratorium', function () {
    return view('ri_laboratorium');
});

// Route::get('/rj_teskonseling_hiv', function () {
//     return view('rj_teskonseling_hiv');
// });

// Route::get('/rj_izin_hiv', function () {
//     return view('rj_izin_hiv');
// });

// Route::get('/rj_ikhtisar_hiv', function () {
//     return view('rj_ikhtisar_hiv');
// });

Route::get('/ri_asuhan_gizi', function () {
    return view('ri_asuhan_gizi');
});

// Route::get('/ri_surat_spd', function () {
//     return view('ri_surat_spd');
// });

// Route::get('/ri_permintaan_privasi', function () {
//     return view('ri_permintaan_privasi');
// });

// Route::get('/ri_permintaan_rohani', function () {
//     return view('ri_permintaan_rohani');
// });

// Route::get('/ri_permintaan_second', function () {
//     return view('ri_permintaan_second');
// });

// Route::get('/ri_permintaan_notresucitate', function () {
//     return view('ri_permintaan_notresucitate');
// });

// Route::get('/ri_permintaan_resucitate', function () {
//     return view('ri_permintaan_resucitate');
// });

Route::get('/ri_pulang_paksa', function () {
    return view('ri_pulang_paksa');
});

Route::get('/ri_residen', function () {
    return view('ri_residen');
});

Route::get('/ri_surat_kuasa', function () {
    return view('ri_surat_kuasa');
});

// Route::get('/ri_pernyataan', function () {
//     return view('ri_pernyataan');
// });

// Route::get('/ri_penolakan_tindakan', function () {
//     return view('ri_penolakan_tindakan');
// });

// Route::get('/ri_persetujuan_tindakan', function () {
//     return view('ri_persetujuan_tindakan');
// });

Route::get('/ri_rencanaklien1', function () {
    return view('ri_rencanaklien1');
});

Route::get('/ri_rencanaklien2', function () {
    return view('ri_rencanaklien2');
});

Route::get('/ri_rencanaklien3', function () {
    return view('ri_rencanaklien3');
});

Route::get('/ri_rencanaklien4', function () {
    return view('ri_rencanaklien4');
});

Route::get('/ri_rencanaklien4', function () {
    return view('ri_rencanaklien4');
});

Route::get('/ri_rencanaklien5', function () {
    return view('ri_rencanaklien5');
});

Route::get('/ri_rencanaklien6', function () {
    return view('ri_rencanaklien6');
});

Route::get('/ri_rencanaklien7', function () {
    return view('ri_rencanaklien7');
});





// Route::get('/ri_panss_ec', function () {
//     return view('ri_panss_ec');
// });

// Route::get('/ri_penilaian_edmunson', function () {
//     return view('ri_penilaian_edmunson');
// });

// Route::get('/ri_risiko_nyeri', function () {
//     return view('ri_risiko_nyeri');
// });

// Route::get('/ri_evaluasi_keperawatan', function () {
//     return view('ri_evaluasi_keperawatan');
// });

// Route::get('/ri_monitoring_observasi', function () {
//     return view('ri_monitoring_observasi');
// });

// Route::get('/ri_dpjp_case', function () {
//     return view('ri_dpjp_case');
// });

// Route::get('/ri_suicide_fisik', function () {
//     return view('ri_suicide_fisik');
// });

// Route::get('/ri_rawat_napza', function () {
//     return view('ri_rawat_napza');
// });

// Route::get('/ri_rencana_keperawatan', function () {
//     return view('ri_rencana_keperawatan');
// });

// Route::get('/ri_penggunaan_obat', function () {
//     return view('ri_penggunaan_obat');
// });

// Route::get('/ri_riwayat_obat', function () {
//     return view('ri_riwayat_obat');
// });

// Route::get('/ri_efek_samping', function () {
//     return view('ri_efek_samping');
// });

Route::get('/ri_pemeriksaan_psikologis', function () {
    return view('ri_pemeriksaan_psikologis');
});

Route::get('/ri_serah_terima', function () {
    return view('ri_serah_terima');
});

Route::get('/ri_pemberian_informasi', function () {
    return view('ri_pemberian_informasi');
});


// Route::get('/ri_lembar_konsultasi', function () {
//     return view('ri_lembar_konsultasi');
// });

// Route::get('/ri_penilaian_panss', function () {
//     return view('ri_penilaian_panss');
// });

// Route::get('/ri_resume_medis', function () {
//     return view('ri_resume_medis');
// });

// Route::get('/ri_rencana_pemulangan', function () {
//     return view('ri_rencana_pemulangan');
// });

Route::get('/ri_asesmen', function () {
    return view('ri_asesmen');
});

// Route::get('/ri_edukasi', function () {
//     return view('ri_edukasi');
// });

// Route::get('/ri_hak_kewajiban2', function () {
//     return view('ri_hak_kewajiban');
// });

// Route::get('/ri_persetujuan_umum2', function () {
//     return view('ri_persetujuan_umum');
// });

Route::get('/ri_transfer_internal', function () {
    return view('ri_transfer_internal');
});

Route::get('/ri_transfer_eksternal', function () {
    return view('ri_transfer_eksternal');
});

Route::get('/test_pdf', function () {
    return view('test_pdf');
});

Route::get('/pdf_view', function () {
    return view('pdf_view');
});

// 
// pdf generate

//dokumen identifikasi pasien
Route::get('/pdf_identifikasi', 'Pdf_Controller@pdf_identifikasi');

Route::get('/doc_identifikasi', function () {
    return view('/doc_identifikasi');
});

//dokumen penundaan pelayanan
Route::get('/pdf_penundaan_pelayanan', 'Pdf_Controller@pdf_penundaan_pelayanan');

Route::get('/doc_penundaan_pelayanan', function () {
    return view('/doc_penundaan_pelayanan');
});


//
// Rawat Jalan
//

//dokumen asesmen awal pasien rawat jalan
Route::get('/pdf_rj_asesmen', 'Pdf_rj_Controller@pdf_rj_asesmen');

Route::get('/doc_rj_asesmen', function () {
    return view('/doc_rj_asesmen');
});

//dokumen asesmen awal pasien gigi
Route::get('/pdf_rj_gigi', 'Pdf_rj_Controller@pdf_rj_gigi');

Route::get('/doc_rj_gigi', function () {
    return view('/doc_rj_gigi');
});

//dokumen catatan perkembangan
Route::get('/pdf_rj_catatan_perkembangan', 'Pdf_rj_Controller@pdf_rj_catatan_perkembangan');

Route::get('/doc_rj_catatan_perkembangan', function () {
    return view('/doc_rj_catatan_perkembangan');
});

//dokumen informasi edukasi
Route::get('/pdf_rj_infoedu', 'Pdf_rj_Controller@pdf_rj_infoedu');

Route::get('/doc_rj_infoedu', function () {
    return view('/doc_rj_infoedu');
});

//dokumen stressor
Route::get('/pdf_rj_stressor', 'Pdf_rj_Controller@pdf_rj_stressor');

Route::get('/doc_rj_stressor', function () {
    return view('/doc_rj_stressor');
});

//dokumen izinvct
Route::get('/pdf_rj_izinvct', 'Pdf_rj_Controller@pdf_rj_izinvct');

Route::get('/doc_rj_izinvct', function () {
    return view('/doc_rj_izinvct');
});

//dokumen informasi lapor rehabilitasi
Route::get('/pdf_rj_lapor_rehabilitasi', 'Pdf_rj_Controller@pdf_rj_lapor_rehabilitasi');

Route::get('/doc_rj_lapor_rehabilitasi', function () {
    return view('/doc_rj_lapor_rehabilitasi');
});

//dokumen informasi tumbuh kembang
Route::get('/pdf_rj_tumbuhkembang', 'Pdf_rj_Controller@pdf_rj_tumbuhkembang');

Route::get('/doc_rj_tumbuhkembang', function () {
    return view('/doc_rj_tumbuhkembang');
});

//dokumen konseling HIV
Route::get('/pdf_rj_konselinghiv', 'Pdf_rj_Controller@pdf_rj_konselinghiv');

Route::get('/doc_rj_konselinghiv', function () {
    return view('/doc_rj_konselinghiv');
});

//dokumen ikhtisar HIV
Route::get('/pdf_rj_ikhtisarhiv', 'Pdf_rj_Controller@pdf_rj_ikhtisarhiv');

Route::get('/doc_rj_ikhtisarhiv', function () {
    return view('/doc_rj_ikhtisarhiv');
});

//dokumen izin vct klien tes hiv
Route::get('/pdf_rj_izinhiv', 'Pdf_rj_Controller@pdf_rj_izinhiv');

Route::get('/doc_rj_izinhiv', function () {
    return view('/doc_rj_izinhiv');
});

//dokumen resume rawat jalan
Route::get('/pdf_rj_resume', 'Pdf_rj_Controller@pdf_rj_resume');

Route::get('/doc_rj_resume', function () {
    return view('/doc_rj_resume');
});

//
// IGD
//

//dokumen igd_triase_pasien
Route::get('/pdf_igd_triase', 'Pdf_igd_Controller@pdf_igd_triase');

Route::get('/doc_igd_triase', function () {
    return view('doc_igd_triase');
});

//dokumen igd_asesmen
Route::get('/pdf_igd_asesmen', 'Pdf_igd_Controller@pdf_igd_asesmen');

Route::get('/doc_igd_asesmen', function () {
    return view('doc_igd_asesmen');
});

//dokumen igd_suicide
Route::get('/pdf_igd_suicide', 'Pdf_igd_Controller@pdf_igd_suicide');

Route::get('/doc_igd_suicide', function () {
    return view('doc_igd_suicide');
});

//dokumen igd_catatan_kemajuan
Route::get('/pdf_igd_kemajuan', 'Pdf_igd_Controller@pdf_igd_kemajuan');

Route::get('/doc_igd_kemajuan', function () {
    return view('doc_igd_kemajuan');
});

//dokumen igd_catatan_perkembangan
Route::get('/pdf_igd_perkembangan', 'Pdf_igd_Controller@pdf_igd_perkembangan');

Route::get('/doc_igd_perkembangan', function () {
    return view('doc_igd_perkembangan');
});

//
// Rawat Inap
//

//dokumen resume medis rawat inap
Route::get('/pdf_ri_resume', 'Pdf_ri_Controller@pdf_ri_resume');

Route::get('/doc_ri_resume', function () {
    return view('/doc_ri_resume');
});

//dokumen spd
Route::get('/pdf_ri_spd', 'Pdf_ri_Controller@pdf_ri_spd');

Route::get('/doc_ri_spd', function () {
    return view('/doc_ri_spd');
});

//dokumen dpjp case
Route::get('/pdf_ri_dpjpcase', 'Pdf_ri_Controller@pdf_ri_dpjpcase');

Route::get('/doc_ri_dpjpcase', function () {
    return view('/doc_ri_dpjpcase');
});

//dokumen ri persetujuan umum
Route::get('/pdf_ri_persetujuan_umum', 'Pdf_ri_Controller@pdf_ri_persetujuan_umum');

Route::get('/doc_ri_persetujuan_umum', function () {
    return view('/doc_ri_persetujuan_umum');
});

//dokumen ri asesmen
Route::get('/pdf_ri_asesmen', 'Pdf_ri_Controller@pdf_ri_asesmen');

Route::get('/doc_ri_asesmen', function () {
    return view('/doc_ri_asesmen');
});

//dokumen ri suicide
Route::get('/pdf_ri_suicide', 'Pdf_ri_Controller@pdf_ri_suicide');

Route::get('/doc_ri_suicide', function () {
    return view('/doc_ri_suicide');
});

//dokumen asesmen napza
Route::get('/pdf_ri_napza', 'Pdf_ri_Controller@pdf_ri_napza');

Route::get('/doc_ri_napza', function () {
    return view('/doc_ri_napza');
});

//dokumen penilaian edmunson
Route::get('/pdf_ri_edmunson', 'Pdf_ri_Controller@pdf_ri_edmunson');

Route::get('/doc_ri_edmunson', function () {
    return view('/doc_ri_edmunson');
});

//dokumen permintaan privasi
Route::get('/pdf_ri_permintaan_privasi', 'Pdf_ri_Controller@pdf_ri_permintaan_privasi');

Route::get('/doc_ri_permintaan_privasi', function () {
    return view('/doc_ri_permintaan_privasi');
});

//dokumen permintaan ha dan kewajiban
Route::get('/pdf_ri_hakkewajiban', 'Pdf_ri_Controller@pdf_ri_hakkewajiban');

Route::get('/doc_ri_permintaan_hakkewajiban', function () {
    return view('/doc_ri_hakkewajiban');
});


//dokumen permintaan rohani
Route::get('/pdf_ri_permintaan_rohani', 'Pdf_ri_Controller@pdf_ri_permintaan_rohani');

Route::get('/doc_ri_permintaan_rohani', function () {
    return view('/doc_ri_permintaan_rohani');
});

//dokumen permintaan second
Route::get('/pdf_ri_permintaan_second', 'Pdf_ri_Controller@pdf_ri_permintaan_second');

Route::get('/doc_ri_permintaan_second', function () {
    return view('/doc_ri_permintaan_second');
});

//dokumen permintaan jangan resusitasi
Route::get('/pdf_ri_permintaan_notresucitate', 'Pdf_ri_Controller@pdf_ri_permintaan_notresucitate');

Route::get('/doc_ri_permintaan_notresucitate', function () {
    return view('/doc_ri_permintaan_notresucitate');
});

//dokumen permintaan resusitasi
Route::get('/pdf_ri_permintaan_resucitate', 'Pdf_ri_Controller@pdf_ri_permintaan_resucitate');

Route::get('/doc_ri_permintaan_resucitate', function () {
    return view('/doc_ri_permintaan_resucitate');
});

//dokumen persetujuan tindakan kedokteran
Route::get('/pdf_ri_persetujuan_tindakan', 'Pdf_ri_Controller@pdf_ri_persetujuan_tindakan');

Route::get('/doc_ri_persetujuan_tindakan', function () {
    return view('/doc_ri_persetujuan_tindakan');
});

//dokumen penolakan tindakan kedoketeran
Route::get('/pdf_ri_penolakan_tindakan', 'Pdf_ri_Controller@pdf_ri_penolakan_tindakan');

Route::get('/doc_ri_penolakan_tindakan', function () {
    return view('/doc_ri_penolakan_tindakan');
});

//dokumen penilaian nyeri
Route::get('/pdf_ri_nyeri', 'Pdf_ri_Controller@pdf_ri_nyeri');

Route::get('/doc_ri_nyeri', function () {
    return view('/doc_ri_nyeri');
});

//dokumen catatan perkembangan
Route::get('/pdf_ri_catatan_perkembangan', 'Pdf_ri_Controller@pdf_ri_catatan_perkembangan');

Route::get('/doc_ri_catatan_perkembangan', function () {
    return view('/doc_ri_catatan_perkembangan');
});

//dokumen rencana keperawatan intensif
Route::get('/pdf_ri_rencana1', 'Pdf_ri_Controller@pdf_ri_rencana1');

Route::get('/doc_ri_rencana1', function () {
    return view('/doc_ri_rencana1');
});

//dokumen rencana keperawatan intensif
Route::get('/pdf_ri_rencana2', 'Pdf_ri_Controller@pdf_ri_rencana2');

Route::get('/doc_ri_rencana2', function () {
    return view('/doc_ri_rencana2');
});

//dokumen rencana keperawatan intensif
Route::get('/pdf_ri_rencana3', 'Pdf_ri_Controller@pdf_ri_rencana3');

Route::get('/doc_ri_rencana3', function () {
    return view('/doc_ri_rencana3');
});

//dokumen rencana keperawatan intensif
Route::get('/pdf_ri_rencana4', 'Pdf_ri_Controller@pdf_ri_rencana4');

Route::get('/doc_ri_rencana4', function () {
    return view('/doc_ri_rencana4');
});

//dokumen rencana keperawatan intensif
Route::get('/pdf_ri_rencana5', 'Pdf_ri_Controller@pdf_ri_rencana5');

Route::get('/doc_ri_rencana5', function () {
    return view('/doc_ri_rencana5');
});

//dokumen rencana keperawatan intensif
Route::get('/pdf_ri_rencana6', 'Pdf_ri_Controller@pdf_ri_rencana6');

Route::get('/doc_ri_rencana6', function () {
    return view('/doc_ri_rencana6');
});

//dokumen rencana keperawatan intensif
Route::get('/pdf_ri_rencana7', 'Pdf_ri_Controller@pdf_ri_rencana7');

Route::get('/doc_ri_rencana7', function () {
    return view('/doc_ri_rencana7');
});

//dokumen rencana klien tindakan keperawatan klien
Route::get('/pdf_ri_rencanaklien1', 'Pdf_ri_Controller@pdf_ri_rencanaklien1');

Route::get('/doc_ri_rencanaklien1', function () {
    return view('/doc_ri_rencanaklien1');
});

//dokumen rencana klien tindakan keperawatan klien
Route::get('/pdf_ri_rencanaklien2', 'Pdf_ri_Controller@pdf_ri_rencanaklien2');

Route::get('/doc_ri_rencanaklien2', function () {
    return view('/doc_ri_rencanaklien2');
});

//dokumen rencana klien tindakan keperawatan klien
Route::get('/pdf_ri_rencanaklien3', 'Pdf_ri_Controller@pdf_ri_rencanaklien3');

Route::get('/doc_ri_rencanaklien3', function () {
    return view('/doc_ri_rencanaklien3');
});

//dokumen rencana klien tindakan keperawatan klien
Route::get('/pdf_ri_rencanaklien4', 'Pdf_ri_Controller@pdf_ri_rencanaklien4');

Route::get('/doc_ri_rencanaklien4', function () {
    return view('/doc_ri_rencanaklien4');
});

//dokumen rencana klien tindakan keperawatan klien
Route::get('/pdf_ri_rencanaklien5', 'Pdf_ri_Controller@pdf_ri_rencanaklien5');

Route::get('/doc_ri_rencanaklien5', function () {
    return view('/doc_ri_rencanaklien5');
});

//dokumen rencana klien tindakan keperawatan klien
Route::get('/pdf_ri_rencanaklien6', 'Pdf_ri_Controller@pdf_ri_rencanaklien6');

Route::get('/doc_ri_rencanaklien6', function () {
    return view('/doc_ri_rencanaklien6');
});

//dokumen rencana klien tindakan keperawatan klien
Route::get('/pdf_ri_rencanaklien7', 'Pdf_ri_Controller@pdf_ri_rencanaklien7');

Route::get('/doc_ri_rencanaklien7', function () {
    return view('/doc_ri_rencanaklien7');
});

//dokumen rawat NAPZA
Route::get('/pdf_ri_rawat_napza', 'Pdf_ri_Controller@pdf_ri_rawat_napza');

Route::get('/doc_ri_rawat_napza', function () {
    return view('/doc_ri_rawat_napza');
});

//dokumen rencana tindak keperawatan
Route::get('/pdf_ri_tindak', 'Pdf_ri_Controller@pdf_ri_tindak');

Route::get('/doc_ri_tindak', function () {
    return view('/doc_ri_tindak');
});

//dokumen laboratorium
Route::get('/pdf_ri_lab', 'Pdf_ri_Controller@pdf_ri_lab');

Route::get('/doc_ri_lab', function () {
    return view('/doc_ri_lab');
});

//dokumen evaluasi tindak keperawatan
Route::get('/pdf_ri_evaluasi', 'Pdf_ri_Controller@pdf_ri_evaluasi');

Route::get('/doc_ri_evaluasi', function () {
    return view('/doc_ri_evaluasi');
});

//dokumen monitoring observasi khusus
Route::get('/pdf_ri_monitoring', 'Pdf_ri_Controller@pdf_ri_monitoring');

Route::get('/doc_ri_monitoring', function () {
    return view('/doc_ri_monitoring');
});

//dokumen catatan penggunaan obat
Route::get('/pdf_ri_cpo', 'Pdf_ri_Controller@pdf_ri_cpo');

Route::get('/doc_ri_cpo', function () {
    return view('/doc_ri_cpo');
});

//dokumen rekonsiliasi obat
Route::get('/pdf_ri_rekonsiliasi', 'Pdf_ri_Controller@pdf_ri_rekonsiliasi');

Route::get('/doc_ri_rekonsiliasi', function () {
    return view('/doc_ri_rekonsiliasi');
});

//dokumen pelaporan efek samping
Route::get('/pdf_ri_efek', 'Pdf_ri_Controller@pdf_ri_efek');

Route::get('/doc_ri_efek', function () {
    return view('/doc_ri_efek');
});

//dokumen asuhan gizi
Route::get('/pdf_ri_gizi', 'Pdf_ri_Controller@pdf_ri_gizi');

Route::get('/doc_ri_gizi', function () {
    return view('/doc_ri_gizi');
});

//dokumen edukasi pasien dan keluarga
Route::get('/pdf_ri_edukasi', 'Pdf_ri_Controller@pdf_ri_edukasi');

Route::get('/doc_ri_edukasi', function () {
    return view('/doc_ri_edukasi');
});

//dokumen rencana pemulangan
Route::get('/pdf_ri_pemulangan', 'Pdf_ri_Controller@pdf_ri_pemulangan');

Route::get('/doc_ri_pemulangan', function () {
    return view('/doc_ri_pemulangan');
});

//dokumen resume medis rawat inap
Route::get('/pdf_ri_resume', 'Pdf_ri_Controller@pdf_ri_resume');

Route::get('/doc_ri_resume', function () {
    return view('/doc_ri_resume');
});

//dokumen penilaian panss
Route::get('/pdf_ri_nilaipanss', 'Pdf_ri_Controller@pdf_ri_nilaipanss');

Route::get('/doc_ri_nilaipanss', function () {
    return view('/doc_ri_nilaipanss');
});

//dokumen Lembar konsultasi
Route::get('/pdf_ri_konsultasi', 'Pdf_ri_Controller@pdf_ri_konsultasi');

Route::get('/doc_ri_konsultasi', function () {
    return view('/doc_ri_konsultasi');
});

//dokumen Lembar Pulang Paksa
Route::get('/pdf_ri_pulang_paksa', 'Pdf_ri_Controller@pdf_ri_pulang_paksa');

Route::get('/doc_ri_pulang_paksa', function () {
    return view('/doc_ri_pulang_paksa');
});

//dokumen Lembar residen
Route::get('/pdf_ri_residen', 'Pdf_ri_Controller@pdf_ri_residen');

Route::get('/doc_ri_residen', function () {
    return view('/doc_ri_residen');
});

//dokumen Lembar surat kuasa
Route::get('/pdf_ri_surat_kuasa', 'Pdf_ri_Controller@pdf_ri_surat_kuasa');

Route::get('/doc_ri_surat_kuasa', function () {
    return view('/doc_ri_surat_kuasa');
});

//dokumen Lembar Pernyataan
Route::get('/pdf_ri_pernyataan', 'Pdf_ri_Controller@pdf_ri_pernyataan');

Route::get('/doc_ri_pernyataan', function () {
    return view('/doc_ri_pernyataan');
});

//dokumen Lembar serah terima
Route::get('/pdf_ri_serah_terima', 'Pdf_ri_Controller@pdf_ri_serah_terima');

Route::get('/doc_ri_serah_terima', function () {
    return view('/doc_ri_serah_terima');
});

//dokumen transfer internal
Route::get('/pdf_ri_internal', 'Pdf_ri_Controller@pdf_ri_internal');

Route::get('/doc_ri_internal', function () {
    return view('/doc_ri_internal');
});

//dokumen transfer eksternal
Route::get('/pdf_ri_eksternal', 'Pdf_ri_Controller@pdf_ri_eksternal');

Route::get('/doc_ri_eksternal', function () {
    return view('/doc_ri_eksternal');
});

//dokumen pemberian informasi
Route::get('/pdf_ri_informasi', 'Pdf_ri_Controller@pdf_ri_informasi');

Route::get('/doc_ri_informasi', function () {
    return view('/doc_ri_informasi');
});

//dokumen pemeriksaan psikologis
Route::get('/pdf_ri_psikologis', 'Pdf_ri_Controller@pdf_ri_psikologis');

Route::get('/doc_ri_psikologis', function () {
    return view('/doc_ri_psikologis');
});

//dokumen serah terima pasien pulang
Route::get('/pdf_ri_pulang', 'Pdf_ri_Controller@pdf_ri_pulang');

Route::get('/doc_ri_pulang', function () {
    return view('/doc_ri_pulang');
});



