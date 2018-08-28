<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJInformasiEdukasi;

class RJInformasiEdukasiController extends Controller
{
    public function get_rj_informasi_edukasi()
    {
    	return view('page.rj.informasi_edukasi');
    }

    public function post_rj_informasi_edukasi(Request $request)
    {
    	$data = new RJInformasiEdukasi;
    	$data->id_regis = 1;
    	$data->bahasa = $request->bahasa;
    	if($request->bahasa == 'Daerah' or $request->bahasa == 'Lainnya') {
    		$data->ket_bahasa = $request->ket_bahasa;
    	}
    	if($request->penerjemah == 'true') {
    		$data->penerjemah = True;
    	}
    	else {
    		$data->penerjemah = False;
    	}
    	$data->pendidikan = $request->pendidikan;
    	$data->baca_tulis = $request->baca_tulis;
    	$data->cara_belajar = $request->cara_belajar;
    	$data->budaya = $request->budaya;
    	$hambatan = "";
    	if(isset($request->hambatan_1)) {
    		$hambatan .= "1-";
    	}
    	if(isset($request->hambatan_2)) {
    		$hambatan .= "2-";
    	}
    	if(isset($request->hambatan_3)) {
    		$hambatan .= "3-";
    	}
    	if(isset($request->hambatan_4)) {
    		$hambatan .= "4-";
    	}
    	if(isset($request->hambatan_5)) {
    		$hambatan .= "5-";
    	}
    	if(isset($request->hambatan_6)) {
    		$hambatan .= "6-";
    	}
    	if(isset($request->hambatan_7)) {
    		$hambatan .= "7-";
    	}
    	if(isset($request->hambatan_8)) {
    		$hambatan .= "8-";
    	}
    	if(isset($request->hambatan_9)) {
    		$hambatan .= "9-";
    	}
    	if(isset($request->hambatan_10)) {
    		$hambatan .= "10-";
    	}
    	if(isset($request->hambatan_11)) {
    		$hambatan .= "11-";
    	}
    	if(isset($request->hambatan_12)) {
    		$hambatan .= "12-";
    	}
    	if(strlen($hambatan) > 0) {
    		$hambatan = substr($hambatan, 0, -1);
    		$data->hambatan = $hambatan;
    	}
    	if(isset($request->hambatan_12)) {
    		$data->hambatan_lain = $request->hambatan_lain;
    	}

    	$kebutuhan = "";
    	if(isset($request->kebutuhan_1)) {
    		$kebutuhan .= "1-";
    	}
    	if(isset($request->kebutuhan_2)) {
    		$kebutuhan .= "2-";
    	}
    	if(isset($request->kebutuhan_3)) {
    		$kebutuhan .= "3-";
    	}
    	if(isset($request->kebutuhan_4)) {
    		$kebutuhan .= "4-";
    	}
    	if(isset($request->kebutuhan_5)) {
    		$kebutuhan .= "5-";
    	}
    	if(isset($request->kebutuhan_6)) {
    		$kebutuhan .= "6-";
    	}
    	if(isset($request->kebutuhan_7)) {
    		$kebutuhan .= "7-";
    	}
    	if(isset($request->kebutuhan_8)) {
    		$kebutuhan .= "8-";
    	}
    	if(isset($request->kebutuhan_9)) {
    		$kebutuhan .= "9-";
    	}
    	if(isset($request->kebutuhan_10)) {
    		$kebutuhan .= "10-";
    	}
    	if(strlen($kebutuhan) > 0) {
    		$kebutuhan = substr($kebutuhan, 0, -1);
    		$data->kebutuhan = $kebutuhan;
    	}
    	if(isset($request->kebutuhan_10)) {
    		$data->kebutuhan_lain = $request->kebutuhan_lain;
    	}
    	if($request->kesedian_menerima == 'true') {
    		$data->kesedian_menerima = True;
    	}
    	else {
    		$data->kesedian_menerima = False;
    	}
    	$data->nama_keluarga = $request->nama_keluarga;
    	$data->hubungan= $request->hubungan;
    	$data->save();
    	return redirect('index');

    }
}