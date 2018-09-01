<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJIdentifikasiStresor;

class RJIdentifikasiStresorController extends Controller
{
    public function get_rj_identifikasi_stresor()
    {
    	return view('page.rj.identifikasi_stresor');
    }

    public function post_rj_identifikasi_stresor(Request $request)
    {
    	$data = new RJIdentifikasiStresor;
    	$data->id_regis = 1;
    	$data->lingkungan_fisik = $request->lingkungan_fisik;
    	$data->sosial_ekonomi_politik = $request->sosial_ekonomi_politik;
    	$data->keluarga = $request->keluarga;
    	$data->pekerjaan_karir = $request->pekerjaan_karir;
    	$data->hubungan_pribadi_lingkungan = $request->hubungan_pribadi_lingkungan;
    	$data->simptom = $request->simptom;
    	$data->cara_mengatasi = $request->cara_mengatasi;
    	$data->save();
    	return redirect('index');
    }
}