<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IGDTriase;

class IGDTriaseController extends Controller
{
    public function __construct()
    {
        $this->data['title'] = 'Triase Pasien';
    }
    
    public function get_igd_triase()
    {
    	return view('page.igd.triase');
    }

    public function post_igd_triase(Request $request)
    {
    	$data = new IGDTriase;
    	$data->id_regis = 1;
    	$data->tanggal_masuk = $request->tanggal_masuk;
    	$data->jam = $request->jam;
    	$data->keluhan_utama = $request->keluhan_utama;
    	if(isset($request->doa)) {
    		$data->doa = True;
    	}
    	else {
    		$data->doa = False;
    	}
    	if($request->jenis == 'resusitasi') {
    		$data->jenis = 'resusitasi';
    		if(isset($request->jalan_nafas_sumbatan)) {
    			$data->jalan_nafas = 'jalan_nafas_sumbatan';
    		}
    		if(isset($request->henti_nafas)) {
    			$data->henti_nafas = True;
    		}
    		if(isset($request->frek_nafas_le_10)) {
    			$data->frek_nafas = 'frek_nafas_le_10';
    		}
    		if(isset($request->sianosis)) {
    			$data->sianosis = True;
    		}
    		if(isset($request->henti_jantung)) {
    			$data->henti_jantung = True;
    		}
    		if(isset($request->kondisi_nadi_tidak_teraba)) {
    			$data->kondisi_nadi = 'kondisi_nadi_tidak_teraba';
    		}
    		if(isset($request->pucat)) {
    			$data->pucat = True;
    		}
    		if(isset($request->akral_dingin)) {
    			$data->akral_dingin = True;
    		}
    		if(isset($request->gcs_le_9)) {
    			$data->gcs = 'gcs_le_9';
    		}
    	}
    	elseif($request->jenis == 'emergent') {
    		$data->jenis = 'emergent';
    		if(isset($request->jalan_nafas_bebas)) {
    			$data->jalan_nafas = 'jalan_nafas_bebas';
    		}
    		if(isset($request->frek_nafas_be_32)) {
    			$data->frek_nafas = 'frek_nafas_be_32';
    		}
    		if(isset($request->mengi)) {
    			$data->mengi = True;
    		}
    		if(isset($request->kondisi_nadi_teraba_lemah)) {
    			$data->kondisi_nadi = 'kondisi_nadi_teraba_lemah';
    		}
    		if(isset($request->frek_nadi_le_50_be_150)) {
    			$data->frek_nadi = 'frek_nadi_le_50_be_150';
    		}
    		if(isset($request->gcs_9_12)) {
    			$data->gcs = 'gcs_9_12';
    		}
    	}
    	elseif($request->jenis == 'tanda vital') {
    		$data->jenis = 'tanda vital';
    		$data->tekanan_darah = $request->tekanan_darah;
    		$data->frek_nadi = $request->frek_nadi_text;
    		$data->frek_nafas = $request->frek_nafas_text;
    		$data->suhu = $request->suhu;
    		$data->alergi_makanan = $request->alergi_makanan;
    		$data->alergi_obat = $request->alergi_obat;
    		$data->alergi_lainnya = $request->alergi_lainnya;
    		$data->gcs = $request->gcs_text;
    	}
    	elseif($request->jenis == 'urgent') {
    		$data->jenis = 'urgent';
    		if(isset($request->jalan_nafas_bebas)) {
    			$data->jalan_nafas = 'jalan_nafas_bebas';
    		}
    		if(isset($request->frek_nafas_be_24_32)) {
    			$data->frek_nafas = 'frek_nafas_be_24_32';
    		}
    		if(isset($request->mengi)) {
    			$data->mengi = True;
    		}
    		if(isset($request->frek_nadi_120_150)) {
    			$data->frek_nadi = 'frek_nadi_120_150';
    		}
    		if(isset($request->sistol_me_160)) {
    			$data->sistol = 'sistol_me_160';
    		}
    		if(isset($request->diastol_m_100)) {
    			$data->diastol = 'diastol_m_100';
    		}
    		if(isset($request->gcs_m_12)) {
    			$data->gcs = 'gcs_m_12';
    		}
    	}
    	elseif($request->jenis == 'non urgent') {
    		$data->jenis = 'non urgent';
    		if(isset($request->jalan_nafas_bebas)) {
    			$data->jalan_nafas = 'jalan_nafas_bebas';
    		}
    		if(isset($request->frek_nafas_me_20_24)) {
    			$data->frek_nafas = 'frek_nafas_me_20_24';
    		}
    		if(isset($request->frek_nadi_100_120)) {
    			$data->frek_nadi = 'frek_nadi_100_120';
    		}
    		if(isset($request->sistol_l_160)) {
    			$data->sistol = 'sistol_l_160';
    		}
    		if(isset($request->diastol_l_100)) {
    			$data->diastol = 'diastol_l_100';
    		}
    		if(isset($request->gcs_15)) {
    			$data->gcs = 'gcs_15';
    		}
    	}
    	elseif($request->jenis == 'false emergency') {
    		$data->jenis = 'false emergency';
    		if(isset($request->jalan_nafas_bebas)) {
    			$data->jalan_nafas = 'jalan_nafas_bebas';
    		}
    		if(isset($request->frek_nafas_16_20)) {
    			$data->frek_nafas = 'frek_nafas_16_20';
    		}
    		if(isset($request->mengi)) {
    			$data->mengi = True;
    		}
    		if(isset($request->frek_nadi_80_100)) {
    			$data->frek_nadi = 'frek_nadi_80_100';
    		}
    		if(isset($request->sistol_me_120)) {
    			$data->sistol = 'sistol_me_120';
    		}
    		if(isset($request->diastol_m_80)) {
    			$data->diastol = 'diastol_m_80';
    		}
    		if(isset($request->gcs_15)) {
    			$data->gcs = 'gcs_15';
    		}
    	}
    	$data->save();
    	return back();
    }
}
