<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIDPJPCase;
use Session;

class RIDPJPCaseController extends Controller
{
	public function __construct()
    {
        $this->data['title'] = 'DPJP dan Case Manager';
    }

    public function get_ri_dpjp_case()
    {
    	return view('page.ri.dpjp_case', $this->data);
    }

    public function post_ri_dpjp_case(Request $request)
    {
    	$data = new RIDPJPCase;
        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
    	$data->id_regis = $id_pasien;
    	$data->diagnosa = $request->diagnosa;
    	$data->ruang = $request->ruang;
    	$data->nama_dpjp = $request->nama_dpjp;
    	$jumlah_tim = $request->jumlah_form_anggota_tim;
    	$anggota_tim = '';
    	for($i = 1; $i <= $jumlah_tim; $i++) {
    		$str_anggota = 'anggota_tim_'.$i;
    		if(!is_null($request->$str_anggota)) {
    			$anggota_tim .= $request->$str_anggota."$&!^@";
    		}
    	}
    	$data->tim_dpjp = $anggota_tim;
    	$rawat_bersama = '';
    	$jumlah_rawat_bersama = $request->jumlah_form_dpjp;
    	for($i = 1; $i <= $jumlah_rawat_bersama; $i++) {
    		$str_dpjp = 'dpjp_'.$i;
    		$str_tanggal = 'tanggal_dpjp_'.$i;
    		if(!is_null($request->$str_dpjp)) {
    			$rawat_bersama .= $request->$str_dpjp."#&!^@".$request->$str_tanggal."$&!^@";
    		}
    	}
    	$data->rawat_bersama = $rawat_bersama;
    	$data->pengalihan_dpjp_ke = $request->pengalihan_dpjp_ke;
    	$data->tanggal_pengalihan = $request->tanggal_pengalihan;
    	$data->alasan_pengalihan = $request->alasan_pengalihan;
    	$data->cm_1 = $request->cm_1;
    	$data->cm_2 = $request->cm_2;
    	$data->cm_3 = $request->cm_3;
    	$data->save();
    	
    	return back();
    }

    public function post_ri_dpjp_case(Request $request)
    {
        $pasien = RIDPJPCase::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['diagnosa'] = $pasien->diagnosa;
        $this->data['ruang'] = $pasien->ruang;
        $this->data['nama_dpjp'] = $pasien->nama_dpjp;
        
         /*$jumlah_tim = $request->jumlah_form_anggota_tim;
        $anggota_tim = '';
        for($i = 1; $i <= $jumlah_tim; $i++) {
            $str_anggota = 'anggota_tim_'.$i;
            if(!is_null($request->$str_anggota)) {
                $anggota_tim .= $request->$str_anggota."$&!^@";
            }
        }
        $data->tim_dpjp = $anggota_tim;
        $rawat_bersama = '';
        $jumlah_rawat_bersama = $request->jumlah_form_dpjp;
        for($i = 1; $i <= $jumlah_rawat_bersama; $i++) {
            $str_dpjp = 'dpjp_'.$i;
            $str_tanggal = 'tanggal_dpjp_'.$i;
            if(!is_null($request->$str_dpjp)) {
                $rawat_bersama .= $request->$str_dpjp."#&!^@".$request->$str_tanggal."$&!^@";
            }
        }*/

        //$this->data['rawat_bersama'] = $pasien->rawat_bersama;
        $this->data['pengalihan_dpjp_ke'] = $pasien->pengalihan_dpjp_ke;
        $this->data['tanggal_pengalihan'] = $pasien->tanggal_pengalihan;
        $this->data['alasan_pengalihan'] = $pasien->alasan_pengalihan;
        $this->data['cm_1'] = $pasien->cm_1;
        $this->data['cm_2'] = $pasien->cm_2;
        $this->data['cm_3'] = $pasien->cm_3;

        return view('page.ri.dpjp_case_read', $this->data);
    }

}