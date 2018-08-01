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

Route::get('/', function () {
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