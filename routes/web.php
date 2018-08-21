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

Route::get('/identifikasi_pasien_baru_1', 'PasienController@identifikasi_pasien_baru_1');
Route::post('/identifikasi_pasien_baru_2', 'PasienController@identifikasi_pasien_baru_2');
Route::post('/identifikasi_pasien_baru_final', 'PasienController@identifikasi_pasien_baru_final');

// RAWAT JALAN
Route::get('/rj_asesmen_awal', 'RawatJalanController@asesmen_awal');
Route::post('/rj_asesmen_awal_asesmen_keperawatan', 'RawatJalanController@store_rj_asesmen_awal_asesmen_keperawatan');
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

Route::get('/pdf', 'Pdf_controller@test_pdf');

Route::get('/ri_surat_persetujuan', function () {
    return view('ri_surat_persetujuan');
});

Route::get('/penundaan_pelayanan', function () {
    return view('penundaan_pelayanan');
});


Route::get('/rj_informasi_edukasi', function () {
    return view('rj_informasi_edukasi');
});

Route::get('/rj_perkembangan_pasien', function () {
    return view('rj_perkembangan_pasien');
});

Route::get('/ri_catatan_perkembangan', function () {
    return view('ri_catatan_perkembangan');
});

Route::get('/igd_triase_pasien', function () {
    return view('igd_triase_pasien');
});

Route::get('/rj_resume_rawat', function () {
    return view('rj_resume_rawat');
});

Route::get('/rj_rencana_pemulangan', function () {
    return view('rj_rencana_pemulangan');
});

Route::get('/rj_asesmen_gigi', function () {
    return view('rj_asesmen_gigi');
});

Route::get('/rj_identifikasi_stresor', function () {
    return view('rj_identifikasi_stresor');
});

Route::get('/rj_lapor_rehabilitasi', function () {
    return view('rj_lapor_rehabilitasi');
});


Route::get('/rj_tumbuh_kembang', function () {
    return view('rj_tumbuh_kembang');
});

Route::get('/igd_catatan_kemajuan', function () {
    return view('igd_catatan_kemajuan');
});

Route::get('/igd_perkembangan_pasien', function () {
    return view('igd_perkembangan_pasien');
});

Route::get('/igd_suicide_fisik', function () {
    return view('igd_suicide_fisik');
});

Route::get('/ri_panss_ec', function () {
    return view('ri_panss_ec');
});

Route::get('/ri_penilaian_edmunson', function () {
    return view('ri_penilaian_edmunson');
});

Route::get('/ri_risiko_nyeri', function () {
    return view('ri_risiko_nyeri');
});

Route::get('/ri_evaluasi_keperawatan', function () {
    return view('ri_evaluasi_keperawatan');
});

Route::get('/ri_monitoring_observasi', function () {
    return view('ri_monitoring_observasi');
});

Route::get('/ri_dpjp_case', function () {
    return view('ri_dpjp_case');
});

Route::get('/ri_suicide_fisik', function () {
    return view('ri_suicide_fisik');
});

Route::get('/ri_rawat_napza', function () {
    return view('ri_rawat_napza');
});

Route::get('/ri_rencana_keperawatan', function () {
    return view('ri_rencana_keperawatan');
});

Route::get('/ri_penggunaan_obat', function () {
    return view('ri_penggunaan_obat');
});

Route::get('/ri_riwayat_obat', function () {
    return view('ri_riwayat_obat');
});

Route::get('/ri_efek_samping', function () {
    return view('ri_efek_samping');
});

Route::get('/ri_pemeriksaan_psikologis', function () {
    return view('ri_pemeriksaan_psikologis');
});

Route::get('/ri_serah_terima', function () {
    return view('ri_serah_terima');
});

Route::get('/ri_pemberian_informasi', function () {
    return view('ri_pemberian_informasi');
});

Route::get('/igd_asesmen_darurat', function () {
    return view('igd_asesmen_darurat');
});

Route::get('/ri_lembar_konsultasi', function () {
    return view('ri_lembar_konsultasi');
});

Route::get('/ri_penilaian_panss', function () {
    return view('ri_penilaian_panss');
});

Route::get('/ri_resume_medis', function () {
    return view('ri_resume_medis');
});

Route::get('/ri_rencana_pemulangan', function () {
    return view('ri_rencana_pemulangan');
});

Route::get('/ri_asesmen', function () {
    return view('ri_asesmen');
});

Route::get('/ri_edukasi', function () {
    return view('ri_edukasi');
});

Route::get('/ri_hak_kewajiban', function () {
    return view('ri_hak_kewajiban');
});

Route::get('/ri_persetujuan_umum', function () {
    return view('ri_persetujuan_umum');
});

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

//dokumen informasi edukasi
Route::get('/pdf_rj_infoedu', 'Pdf_rj_Controller@pdf_rj_infoedu');

Route::get('/doc_rj_infoedu', function () {
    return view('/doc_rj_infoedu');
});

//dokumen informasi lapor rehabilitasi
Route::get('/pdf_rj_lapor', 'Pdf_rj_Controller@pdf_rj_lapor');

Route::get('/doc_rj_lapor', function () {
    return view('/doc_rj_lapor');
});

//dokumen informasi tumbuh kembang
Route::get('/pdf_rj_tumbuhkembang', 'Pdf_rj_Controller@pdf_rj_tumbuhkembang');

Route::get('/doc_rj_tumbuhkembang', function () {
    return view('/doc_rj_tumbuhkembang');
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

//dokumen penilaian nyeri
Route::get('/pdf_ri_nyeri', 'Pdf_ri_Controller@pdf_ri_nyeri');

Route::get('/doc_ri_nyeri', function () {
    return view('/doc_ri_nyeri');
});

//dokumen catatan perkembangan
Route::get('/pdf_ri_perkembangan', 'Pdf_ri_Controller@pdf_ri_perkembangan');

Route::get('/doc_ri_perkembangan', function () {
    return view('/doc_ri_perkembangan');
});

//dokumen rencana tindak keperawatan
Route::get('/pdf_ri_tindak', 'Pdf_ri_Controller@pdf_ri_tindak');

Route::get('/doc_ri_tindak', function () {
    return view('/doc_ri_tindak');
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

