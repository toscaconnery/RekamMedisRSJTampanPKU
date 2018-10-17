<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJInformasiEdukasi;
use App\Models\RJEdukasiDiperoleh;
use Session;

class RJInformasiEdukasiController extends Controller
{
    public function __construct()
    {
        $this->data['title'] = 'Kebutuhan Informasi Dan Edukasi Pasien/Keluarga Rawat Jalan';
    }

    public function get_rj_informasi_edukasi()
    {
    	return view('page.rj.informasi_edukasi', $this->data);
    }

    public function post_rj_informasi_edukasi(Request $request)
    {
    	$data = new RJInformasiEdukasi;
        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
    	$data->id_regis = $id_pasien;
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

    public function get_rj_informasi_edukasi_list_informasi()
    {
    	return view('page.rj.informasi_edukasi_list_informasi', $this->data);
    }

    public function post_rj_informasi_edukasi_list_informasi(Request $request)
    {
    	$jumlah_form = $request->jumlah_form;
        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
    	for($i = 1; $i <= $jumlah_form; $i++) {
    		$str_tanggal = 'tanggal_'.$i;
    		$str_poliklinik = 'poliklinik_'.$i;
    		$str_informasi = 'informasi_'.$i;
    		$str_nama_edukator = 'nama_edukator_'.$i;
    		$str_ttd_edukator = 'ttd_edukator_'.$i;
    		$str_nama_sasaran = 'nama_sasaran_'.$i;
    		$str_ttd_sasaran = 'ttd_sasaran_'.$i;
    		$str_evaluasi = 'evaluasi_'.$i;
    		if(!is_null($request->$str_tanggal)) {
    			$data = new RJEdukasiDiperoleh;
    			$data->id_regis = $id_pasien;
    			$data->tanggal = $request->$str_tanggal;
    			$data->poliklinik = $request->$str_poliklinik;
    			$data->informasi = $request->$str_informasi;
    			$data->nama_edukator = $request->$str_nama_edukator;
    			if(isset($request->$str_ttd_edukator)) {
    				$data->ttd_edukator = True;
    			}
    			else {
    				$data->ttd_edukator = False;
    			}
    			$data->nama_sasaran = $request->$str_nama_sasaran;
    			if(isset($request->$str_ttd_sasaran)) {
    				$data->ttd_sasaran = True;
    			}
    			else {
    				$data->ttd_sasaran = False;
    			}
    			$data->evaluasi = $request->$str_evaluasi;
    			$data->save();
    		}
    	}
		return redirect('index');    	
    }
}