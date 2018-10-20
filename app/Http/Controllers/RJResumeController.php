<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJResume;
use Session;

class RJResumeController extends Controller
{
    public function __construct()
    {
        $this->data['title'] = 'Resume Rawat Jalan';
    }

    public function get_rj_resume()
    {
    	return view('page.rj.resume', $this->data);
    }

    public function post_rj_resume(Request $request)
    {
    	$jumlah_form_resume = $request->jumlah_form_resume;
        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
    	for($i = 1; $i <= $jumlah_form_resume; $i++) {
    		$str_tanggal = 'tanggal_'.$i;
    		$str_diagnosis_prosedur = 'diagnosis_prosedur_'.$i;
    		$str_kode_icd = 'kode_icd_'.$i;
    		$str_obat = 'obat_'.$i;
    		$str_riwayat = 'riwayat_'.$i;
    		$str_nama_petugas = 'nama_petugas_'.$i;
    		if(!is_null($request->$str_tanggal)) {
    			$data = new RJResume;
    			$data->id_regis = $id_pasien;
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
