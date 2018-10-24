<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPenolakanTindakan;
use Session;

class RIPenolakanTindakanController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'PENOLAKAN TINDAKAN KEDOKTERAN';
    }

    public function get_ri_penolakan_tindakan()
    {
    	return view('page.ri.penolakan_tindakan', $this->data);
    }

    public function post_ri_penolakan_tindakan(Request $request)
    {
    	$data = new RIPenolakanTindakan;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
		$data->dokter_pelaksana_tindakan = $request->dokter_pelaksana_tindakan;
		$data->pemberi_informasi = $request->pemberi_informasi;
		$data->penerima_informasi = $request->penerima_informasi;
		$data->jenis_informasi_1 = $request->jenis_informasi_1;
		if(isset($request->check_informasi_1)) {
			$data->check_informasi_1 = True;
		}
		$data->jenis_informasi_2 = $request->jenis_informasi_2;
		if(isset($request->check_informasi_2)) {
			$data->check_informasi_2 = True;
		}
		$data->jenis_informasi_3 = $request->jenis_informasi_3;
		if(isset($request->check_informasi_3)) {
			$data->check_informasi_3 = True;
		}
		$data->jenis_informasi_4 = $request->jenis_informasi_4;
		if(isset($request->check_informasi_4)) {
			$data->check_informasi_4 = True;
		}
		$data->jenis_informasi_5 = $request->jenis_informasi_5;
		if(isset($request->check_informasi_5)) {
			$data->check_informasi_5 = True;
		}
		$data->jenis_informasi_6 = $request->jenis_informasi_6;
		if(isset($request->check_informasi_6)) {
			$data->check_informasi_6 = True;
		}
		$data->jenis_informasi_7 = $request->jenis_informasi_7;
		if(isset($request->check_informasi_7)) {
			$data->check_informasi_7 = True;
		}
		$data->jenis_informasi_8 = $request->jenis_informasi_8;
		if(isset($request->check_informasi_8)) {
			$data->check_informasi_8 = True;
		}
		$data->jenis_informasi_9 = $request->jenis_informasi_9;
		if(isset($request->check_informasi_9)) {
			$data->check_informasi_9 = True;
		}
		$data->jenis_informasi_10 = $request->jenis_informasi_10;
		if(isset($request->check_informasi_10)) {
			$data->check_informasi_10 = True;
		}
		$data->jenis_informasi_11 = $request->jenis_informasi_11;
		if(isset($request->check_informasi_11)) {
			$data->check_informasi_11 = True;
		}
		$data->nama = $request->nama;
		$data->umur = $request->umur;
		$data->jk = $request->jk;
		$data->tindakan = $request->tindakan;
		$data->terhadap = $request->terhadap;
		$data->umur_terhadap = $request->umur_terhadap;
		$data->jk_terhadap = $request->jk_terhadap;
		$data->alamat_terhadap = $request->alamat_terhadap;
		$data->tanggal = $request->tanggal;
		$data->waktu = $request->waktu;
		$data->yang_menyatakan = $request->yang_menyatakan;
		$data->saksi = $request->saksi;
		$data->save();

    	return redirect('daftar_dokumen');
    }
}
