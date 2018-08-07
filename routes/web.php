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

Route::get('/rj_asesmen_awal', 'RawatJalanController@asesmen_awal');
Route::post('/rj_asesmen_awal', 'RawatJalanController@store_asesmen_awal');

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

Route::get('/rj_asesmen_gigi', function () {
    return view('rj_asesmen_gigi');
});

Route::get('/rj_identifikasi_stresor', function () {
    return view('rj_identifikasi_stresor');
});

Route::get('/igd_catatan_kemajuan', function () {
    return view('igd_catatan_kemajuan');
});

Route::get('/igd_perkembangan_pasien', function () {
    return view('igd_perkembangan_pasien');
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

