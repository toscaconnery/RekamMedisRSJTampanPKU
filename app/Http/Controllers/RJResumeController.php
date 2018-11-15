<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJResume;
use App\Models\ListDocument;
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
        $id_pasien = Session::get('id_pasien');
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

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->rj_resume = True;
        $daftar_dokumen->save();
    	return redirect('daftar_dokumen');
    }

    public function get_rj_resume_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RJResume::where('id_regis', $id_pasien)->get();
        $this->data['pasien'] = array();
        $previous_value = '';
        foreach($pasien as $key => $value) {
            $this->data['pasien'][$key] = array();
            $this->data['pasien'][$key]['id_data'] = $value->id;
            $this->data['pasien'][$key]['tanggal'] = $value->tanggal;
            $this->data['pasien'][$key]['diagnosis_prosedur'] = $value->diagnosis_prosedur;
            $this->data['pasien'][$key]['kode_icd'] = $value->kode_icd;
            $this->data['pasien'][$key]['obat'] = $value->obat;
            $this->data['pasien'][$key]['riwayat'] = $value->riwayat;
            $this->data['pasien'][$key]['nama_petugas'] = $value->nama_petugas;
            $previous_value .= $value->id.'-';
        }
        if (strlen($previous_value) > 0) {
            $previous_value = substr($previous_value, 0, -1);
        }
        $this->data['previous_value'] = $previous_value;
    }

    public function get_rj_resume_read()
    {
        $this->get_rj_resume_data();
        return view('page.rj.resume_read', $this->data);
    }

    public function get_rj_resume_edit()
    {
        $this->get_rj_resume_data();
        return view('page.rj.resume_edit', $this->data);
    }

    public function post_rj_resume_edit(Request $request)
    {
        //old
        $id_pasien = Session::get('id_pasien');
        $previous_value = $request->previous_value;
        $explode = explode('-', $previous_value);
        foreach ($explode as $key => $value) {
            $str_tanggal = 'tanggal_'.$value;
            $str_diagnosis_prosedur = 'diagnosis_prosedur_'.$value;
            $str_kode_icd = 'kode_icd_'.$value;
            $str_obat = 'obat_'.$value;
            $str_riwayat = 'riwayat_'.$value;
            $str_nama_petugas = 'nama_petugas_'.$value;

            $data = RJResume::where('id', $value)->first();
            $data->tanggal = $request->$str_tanggal;
            $data->diagnosis_prosedur = $request->$str_diagnosis_prosedur;
            $data->kode_icd = $request->$str_kode_icd;
            $data->obat = $request->$str_obat;
            $data->riwayat = $request->$str_riwayat;
            $data->nama_petugas = $request->$str_nama_petugas;
            $data->save();
        }

        //new
        $jumlah_form_resume = $request->jumlah_form_resume_new;
        for($i = 1; $i <= $jumlah_form_resume; $i++) {
            $str_tanggal = 'tanggal_new_'.$i;
            $str_diagnosis_prosedur = 'diagnosis_prosedur_new_'.$i;
            $str_kode_icd = 'kode_icd_new_'.$i;
            $str_obat = 'obat_new_'.$i;
            $str_riwayat = 'riwayat_new_'.$i;
            $str_nama_petugas = 'nama_petugas_new_'.$i;
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
    }
}
