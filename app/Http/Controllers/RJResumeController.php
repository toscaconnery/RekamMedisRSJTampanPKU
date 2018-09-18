<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJResume;

class RJResumeController extends Controller
{
    public function get_rj_resume()
    {
    	return view('page.rj.resume');
    }

    public function post_rj_resume(Request $request)
    {
    	// dd('ha');
    	$jumlah_form_resume = $request->jumlah_form_resume;
    	for($i = 1; $i <= $jumlah_form_resume; $i++) {
    		$str_tanggal = 'tanggal_'.$i;
    		$str_diagnosis_prosedur = 'diagnosis_prosedur_'.$i;
    		$str_kode_icd = 'kode_icd_'.$i;
    		$str_obat = 'obat_'.$i;
    		$str_riwayat = 'riwayat_'.$i;
    		$str_nama_petugas = 'nama_petugas_'.$i;
    		if(!is_null($request->$str_tanggal)) {
    			$data = new RJResume;
    			$data->id_regis = 1;
    			$data->tanggal = $request->$str_tanggal;
    			$data->diagnosis_prosedur = $request->$str_diagnosis_prosedur;
    			$data->kode_icd = $request->$str_kode_icd;
    			$data->obat = $request->$str_obat;
    			$data->riwayat = $request->$str_riwayat;
    			$data->nama_petugas = $request->$str_nama_petugas;
    			$data->save();
    		}
    	}
    	return back();
    }
}
