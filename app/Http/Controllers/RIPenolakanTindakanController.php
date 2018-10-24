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

    public function get_ri_penolakan_tindakan_read()
    {

    	$pasien = RIPenolakanTindakan::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['dokter_pelaksana_tindakan'] = $pasien->dokter_pelaksana_tindakan;
        $this->data['pemberi_informasi'] = $pasien->pemberi_informasi;
        $this->data['penerima_informasi'] = $pasien->penerima_informasi;
        
        $this->data['jenis_informasi_1'] = $pasien->jenis_informasi_1;
        $this->data['jenis_informasi_2'] = $pasien->jenis_informasi_2;
        $this->data['jenis_informasi_3'] = $pasien->jenis_informasi_3;
        $this->data['jenis_informasi_4'] = $pasien->jenis_informasi_4;
        $this->data['jenis_informasi_5'] = $pasien->jenis_informasi_5;
        $this->data['jenis_informasi_6'] = $pasien->jenis_informasi_6;
        $this->data['jenis_informasi_7'] = $pasien->jenis_informasi_7;
        $this->data['jenis_informasi_8'] = $pasien->jenis_informasi_8;
        $this->data['jenis_informasi_9'] = $pasien->jenis_informasi_9;
        $this->data['jenis_informasi_10'] = $pasien->jenis_informasi_10;
        $this->data['jenis_informasi_11'] = $pasien->jenis_informasi_11;

        if($pasien->check_informasi_1 == True){
        	$this->data['check_informasi_1'] = $pasien->check_informasi_1;
        }
        if($pasien->check_informasi_2 == True){
        	$this->data['check_informasi_2'] = $pasien->check_informasi_2;
        }
        if($pasien->check_informasi_3 == True){
        	$this->data['check_informasi_3'] = $pasien->check_informasi_3;
        }
        if($pasien->check_informasi_4 == True){
        	$this->data['check_informasi_4'] = $pasien->check_informasi_4;
        }
        if($pasien->check_informasi_5 == True){
        	$this->data['check_informasi_5'] = $pasien->check_informasi_5;
        }
        if($pasien->check_informasi_6 == True){
        	$this->data['check_informasi_6'] = $pasien->check_informasi_6;
        }
        if($pasien->check_informasi_7 == True){
        	$this->data['check_informasi_7'] = $pasien->check_informasi_7;
        }
        if($pasien->check_informasi_8 == True){
        	$this->data['check_informasi_8'] = $pasien->check_informasi_8;
        }
        if($pasien->check_informasi_9 == True){
        	$this->data['check_informasi_9'] = $pasien->check_informasi_9;
        }
        if($pasien->check_informasi_10 == True){
        	$this->data['check_informasi_10'] = $pasien->check_informasi_10;
        }
        if($pasien->check_informasi_11 == True){
        	$this->data['check_informasi_11'] = $pasien->check_informasi_11;
        }


        $this->data['nama'] = $pasien->nama;
        $this->data['umur'] = $pasien->umur;
        $this->data['jk'] = $pasien->jk;

        $this->data['tindakan'] = $pasien->tindakan;
        $this->data['terhadap'] = $pasien->terhadap;
        $this->data['umur_terhadap'] = $pasien->umur_terhadap;
        $this->data['jk_terhadap'] = $pasien->jk_terhadap;
        $this->data['alamat_terhadap'] = $pasien->alamat_terhadap;
        $this->data['tanggal'] = $pasien->tanggal;
        $this->data['waktu'] = $pasien->waktu;
        $this->data['yang_menyatakan'] = $pasien->yang_menyatakan;
        $this->data['saksi'] = $pasien->saksi;

        return view('page.ri.penolakan_tindakan_read', $this->data);
    }
}
