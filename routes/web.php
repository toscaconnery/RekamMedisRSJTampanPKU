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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
	return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/identifikasi', function () {
    return view('identifikasi');
});

Route::get('/ri_surat_persetujuan', function () {
    return view('ri_surat_persetujuan');
});

Route::get('/penundaan_pelayanan', function () {
    return view('penundaan_pelayanan');
});

Route::get('/rj_asesmen', function () {
    return view('rj_asesmen');
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