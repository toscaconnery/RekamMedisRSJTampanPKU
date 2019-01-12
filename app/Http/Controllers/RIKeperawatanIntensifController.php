<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIKeperawatanIntensifDPD;
use App\Models\RIKeperawatanIntensifHalusinasi;
use App\Models\RIKeperawatanIntensifMD;
use App\Models\RIKeperawatanIntensifPanik;
use App\Models\RIKeperawatanIntensifPK;
use App\Models\RIKeperawatanIntensifRBD;
use App\Models\RIKeperawatanIntensifWaham;
use App\Models\RIKeperawatanIntensifJenis;
use Session;

class RIKeperawatanIntensifController extends Controller
{
    public function __construct()
    {
        $this->middleware('haspatient');
    	return $this->data['title'] = 'Rencana Tindakan Keperawatan Intensif';
    }

    public function get_ri_keperawatan_intensif()
    {
    	return view('page.ri.keperawatan_intensif', $this->data);
    }

    public function post_ri_keperawatan_intensif(Request $request)
    {
        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }

        $jenis = new RIKeperawatanIntensifJenis;
        $jenis->id_regis = $id_pasien;
        $jenis->jenis = $request->jenis;

    	if($request->jenis == 'rbd') {
    		$data = new RIKeperawatanIntensifRBD;
    		$tindakan_1 = '';
    		$tindakan_2 = '';
    		$tindakan_3 = '';
    		if(isset($request->tindakan_1_1_rbd)) {
    			$tindakan_1 .= '1-';
    		}
    		if(isset($request->tindakan_1_2_rbd)) {
    			$tindakan_1 .= '2-';
    		}
    		if(isset($request->tindakan_1_3_rbd)) {
    			$tindakan_1 .= '3-';
    		}
    		if(isset($request->tindakan_1_4_rbd)) {
    			$tindakan_1 .= '4-';
    		}
    		if(isset($request->tindakan_1_5_rbd)) {
    			$tindakan_1 .= '5-';
    		}
    		if(isset($request->tindakan_1_6_rbd)) {
    			$tindakan_1 .= '6-';
    		}
    		if(isset($request->tindakan_2_1_rbd)) {
    			$tindakan_2 .= '1-';
    		}
    		if(isset($request->tindakan_2_2_rbd)) {
    			$tindakan_2 .= '2-';
    		}
    		if(isset($request->tindakan_2_3_rbd)) {
    			$tindakan_2 .= '3-';
    		}
    		if(isset($request->tindakan_2_4_rbd)) {
    			$tindakan_2 .= '4-';
    		}
    		if(isset($request->tindakan_2_5_rbd)) {
    			$tindakan_2 .= '5-';
    		}
    		if(isset($request->tindakan_2_6_rbd)) {
    			$tindakan_2 .= '6-';
    		}
    		if(isset($request->tindakan_3_1_rbd)) {
    			$tindakan_3 .= '1-';
    		}
    		if(isset($request->tindakan_3_2_rbd)) {
    			$tindakan_3 .= '2-';
    		}
    		if(isset($request->tindakan_3_3_rbd)) {
    			$tindakan_3 .= '3-';
    		}
    		if(isset($request->tindakan_3_4_rbd)) {
    			$tindakan_3 .= '4-';
    		}
    		if(strlen($tindakan_1) > 0) {
    			$tindakan_1 = substr($tindakan_1, 0, -1);
    		}
    		if(strlen($tindakan_2) > 0) {
    			$tindakan_2 = substr($tindakan_2, 0, -1);
    		}
    		if(strlen($tindakan_3) > 0) {
    			$tindakan_3 = substr($tindakan_3, 0, -1);
    		}
    		$data->tindakan_1 = $tindakan_1;
    		$data->tindakan_2 = $tindakan_2;
    		$data->tindakan_3 = $tindakan_3;
    	}
    	elseif ($request->jenis == 'dpd') {
    		$data = new RIKeperawatanIntensifDPD;
    		$tindakan_1 = '';
    		$tindakan_2 = '';
    		$tindakan_3 = '';
    		if(isset($request->tindakan_1_1_dpd)) {
    			$tindakan_1 .= '1-';
    		}
    		if(isset($request->tindakan_1_2_dpd)) {
    			$tindakan_1 .= '2-';
    		}
    		if(isset($request->tindakan_2_1_dpd)) {
    			$tindakan_2 .= '1-';
    		}
    		if(isset($request->tindakan_2_2_dpd)) {
    			$tindakan_2 .= '2-';
    		}
    		if(isset($request->tindakan_3_1_dpd)) {
    			$tindakan_3 .= '1-';
    		}
    		if(isset($request->tindakan_3_2_dpd)) {
    			$tindakan_3 .= '2-';
    		}
    		if(strlen($tindakan_1) > 0) {
    			$tindakan_1 = substr($tindakan_1, 0, -1);
    		}
    		if(strlen($tindakan_2) > 0) {
    			$tindakan_2 = substr($tindakan_2, 0, -1);
    		}
    		if(strlen($tindakan_3) > 0) {
    			$tindakan_3 = substr($tindakan_3, 0, -1);
    		}
    		$data->tindakan_1 = $tindakan_1;
    		$data->tindakan_2 = $tindakan_2;
    		$data->tindakan_3 = $tindakan_3;
    	}
    	elseif ($request->jenis == 'halusinasi') {
    		$data = new RIKeperawatanIntensifHalusinasi;
    		$tindakan_1 = '';
    		$tindakan_2 = '';
    		$tindakan_3 = '';
    		if(isset($request->tindakan_1_1_halusinasi)) {
    			$tindakan_1 .= '1-';
    		}
    		if(isset($request->tindakan_1_2_halusinasi)) {
    			$tindakan_1 .= '2-';
    		}
    		if(isset($request->tindakan_1_3_halusinasi)) {
    			$tindakan_1 .= '3-';
    		}
    		if(isset($request->tindakan_2_1_halusinasi)) {
    			$tindakan_2 .= '1-';
    		}
    		if(isset($request->tindakan_2_2_halusinasi)) {
    			$tindakan_2 .= '2-';
    		}
    		if(isset($request->tindakan_2_3_halusinasi)) {
    			$tindakan_2 .= '3-';
    		}
    		if(isset($request->tindakan_3_1_halusinasi)) {
    			$tindakan_3 .= '1-';
    		}
    		if(isset($request->tindakan_3_2_halusinasi)) {
    			$tindakan_3 .= '2-';
    		}
    		if(isset($request->tindakan_3_3_halusinasi)) {
    			$tindakan_3 .= '3-';
    		}
    		if(strlen($tindakan_1) > 0) {
    			$tindakan_1 = substr($tindakan_1, 0, -1);
    		}
    		if(strlen($tindakan_2) > 0) {
    			$tindakan_2 = substr($tindakan_2, 0, -1);
    		}
    		if(strlen($tindakan_3) > 0) {
    			$tindakan_3 = substr($tindakan_3, 0, -1);
    		}
    		$data->tindakan_1 = $tindakan_1;
    		$data->tindakan_2 = $tindakan_2;
    		$data->tindakan_3 = $tindakan_3;
    	}
    	elseif ($request->jenis == 'pk') {
    		$data = new RIKeperawatanIntensifPK;
    		$tindakan_1 = '';
    		$tindakan_2 = '';
    		$tindakan_3 = '';
    		if(isset($request->tindakan_1_1_pk)) {
    			$tindakan_1 .= '1-';
    		}
    		if(isset($request->tindakan_1_2_pk)) {
    			$tindakan_1 .= '2-';
    		}
    		if(isset($request->tindakan_1_3_pk)) {
    			$tindakan_1 .= '3-';
    		}
    		if(isset($request->tindakan_2_1_pk)) {
    			$tindakan_2 .= '1-';
    		}
    		if(isset($request->tindakan_2_2_pk)) {
    			$tindakan_2 .= '2-';
    		}
    		if(isset($request->tindakan_2_3_pk)) {
    			$tindakan_2 .= '3-';
    		}
    		if(isset($request->tindakan_3_1_pk)) {
    			$tindakan_3 .= '1-';
    		}
    		if(isset($request->tindakan_3_2_pk)) {
    			$tindakan_3 .= '2-';
    		}
    		if(isset($request->tindakan_3_3_pk)) {
    			$tindakan_3 .= '3-';
    		}
    		if(strlen($tindakan_1) > 0) {
    			$tindakan_1 = substr($tindakan_1, 0, -1);
    		}
    		if(strlen($tindakan_2) > 0) {
    			$tindakan_2 = substr($tindakan_2, 0, -1);
    		}
    		if(strlen($tindakan_3) > 0) {
    			$tindakan_3 = substr($tindakan_3, 0, -1);
    		}
    		$data->tindakan_1 = $tindakan_1;
    		$data->tindakan_2 = $tindakan_2;
    		$data->tindakan_3 = $tindakan_3;
    	}
    	elseif ($request->jenis == 'panik') {
    		$data = new RIKeperawatanIntensifPanik;
    		$tindakan_1 = '';
    		$tindakan_2 = '';
    		$tindakan_3 = '';
    		if(isset($request->tindakan_1_1_panik)) {
    			$tindakan_1 .= '1-';
    		}
    		if(isset($request->tindakan_1_2_panik)) {
    			$tindakan_1 .= '2-';
    		}
    		if(isset($request->tindakan_1_3_panik)) {
    			$tindakan_1 .= '3-';
    		}
    		if(isset($request->tindakan_2_1_panik)) {
    			$tindakan_2 .= '1-';
    		}
    		if(isset($request->tindakan_2_2_panik)) {
    			$tindakan_2 .= '2-';
    		}
    		if(isset($request->tindakan_2_3_panik)) {
    			$tindakan_2 .= '3-';
    		}
    		if(isset($request->tindakan_2_4_panik)) {
    			$tindakan_2 .= '4-';
    		}
    		if(isset($request->tindakan_3_1_panik)) {
    			$tindakan_3 .= '1-';
    		}
    		if(isset($request->tindakan_3_2_panik)) {
    			$tindakan_3 .= '2-';
    		}
    		if(isset($request->tindakan_3_3_panik)) {
    			$tindakan_3 .= '3-';
    		}
    		if(strlen($tindakan_1) > 0) {
    			$tindakan_1 = substr($tindakan_1, 0, -1);
    		}
    		if(strlen($tindakan_2) > 0) {
    			$tindakan_2 = substr($tindakan_2, 0, -1);
    		}
    		if(strlen($tindakan_3) > 0) {
    			$tindakan_3 = substr($tindakan_3, 0, -1);
    		}
    		$data->tindakan_1 = $tindakan_1;
    		$data->tindakan_2 = $tindakan_2;
    		$data->tindakan_3 = $tindakan_3;
    	}
    	elseif ($request->jenis == 'waham') {
    		$data = new RIKeperawatanIntensifWaham;
    		$tindakan_1 = '';
    		$tindakan_2 = '';
    		$tindakan_3 = '';
    		if(isset($request->tindakan_1_1_waham)) {
    			$tindakan_1 .= '1-';
    		}
    		if(isset($request->tindakan_1_2_waham)) {
    			$tindakan_1 .= '2-';
    		}
    		if(isset($request->tindakan_1_3_waham)) {
    			$tindakan_1 .= '3-';
    		}
    		if(isset($request->tindakan_2_1_waham)) {
    			$tindakan_2 .= '1-';
    		}
    		if(isset($request->tindakan_2_2_waham)) {
    			$tindakan_2 .= '2-';
    		}
    		if(isset($request->tindakan_2_3_waham)) {
    			$tindakan_2 .= '3-';
    		}
    		if(isset($request->tindakan_3_1_waham)) {
    			$tindakan_3 .= '1-';
    		}
    		if(isset($request->tindakan_3_2_waham)) {
    			$tindakan_3 .= '2-';
    		}
    		if(isset($request->tindakan_3_3_waham)) {
    			$tindakan_3 .= '3-';
    		}

    		if(strlen($tindakan_1) > 0) {
    			$tindakan_1 = substr($tindakan_1, 0, -1);
    		}
    		if(strlen($tindakan_2) > 0) {
    			$tindakan_2 = substr($tindakan_2, 0, -1);
    		}
    		if(strlen($tindakan_3) > 0) {
    			$tindakan_3 = substr($tindakan_3, 0, -1);
    		}
    		$data->tindakan_1 = $tindakan_1;
    		$data->tindakan_2 = $tindakan_2;
    		$data->tindakan_3 = $tindakan_3;
    	}
    	elseif ($request->jenis == 'md') {
    		$data = new RIKeperawatanIntensifMD;
    		$tindakan_1 = '';
    		$tindakan_2 = '';
    		$tindakan_3 = '';
    		if(isset($request->tindakan_1_1_md)) {
    			$tindakan_1 .= '1-';
    		}
    		if(isset($request->tindakan_1_2_md)) {
    			$tindakan_1 .= '2-';
    		}
    		if(isset($request->tindakan_2_1_md)) {
    			$tindakan_2 .= '1-';
    		}
    		if(isset($request->tindakan_2_2_md)) {
    			$tindakan_2 .= '2-';
    		}
    		if(isset($request->tindakan_2_3_md)) {
    			$tindakan_2 .= '3-';
    		}
    		if(isset($request->tindakan_3_1_md)) {
    			$tindakan_3 .= '1-';
    		}
    		if(isset($request->tindakan_3_2_md)) {
    			$tindakan_3 .= '2-';
    		}
    		if(isset($request->tindakan_3_3_md)) {
    			$tindakan_3 .= '3-';
    		}
    		if(isset($request->tindakan_3_4_md)) {
    			$tindakan_3 .= '4-';
    		}
    		if(strlen($tindakan_1) > 0) {
    			$tindakan_1 = substr($tindakan_1, 0, -1);
    		}
    		if(strlen($tindakan_2) > 0) {
    			$tindakan_2 = substr($tindakan_2, 0, -1);
    		}
    		if(strlen($tindakan_3) > 0) {
    			$tindakan_3 = substr($tindakan_3, 0, -1);
    		}
    		$data->tindakan_1 = $tindakan_1;
    		$data->tindakan_2 = $tindakan_2;
    		$data->tindakan_3 = $tindakan_3;
    	}
    	
        $data->id_regis = $id_pasien;
    	$data->tanggal = $request->tanggal;
    	$data->jam = $request->jam;
    	$data->ruangan = $request->ruangan;
    	$data->diagnosa_medis = $request->diagnosa_medis;
    	$data->save();

        $jenis->id_data = $data->id;
        $jenis->save();

    	return back();
    }
}
