<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIRencanaKeperawatan1;
use App\Models\RIRencanaKeperawatan2;
use App\Models\RIRencanaKeperawatan3;
use App\Models\RIRencanaKeperawatan4;
use App\Models\RIRencanaKeperawatan5;
use App\Models\RIRencanaKeperawatan6;
use App\Models\RIRencanaKeperawatan7;
use Session;

class RIRencanaKeperawatanController extends Controller
{
    public function __construct()
    {
    	// $this->data['title'] = 'Rencana Tindakan Keperawatan Intensif';
    }

    public function get_ri_rencana_keperawatan()
    {
    	return view('page.ri.rencana_keperawatan', $this->data);
    }

    public function get_ri_rencana_keperawatan_1()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Resiko Bunuh Diri';
    	return view('page.ri.rencana_keperawatan_1', $this->data);
    }

    public function get_ri_rencana_keperawatan_2()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Defisit Perawatan Diri';
    	return view('page.ri.rencana_keperawatan_2', $this->data);
    }

    public function get_ri_rencana_keperawatan_3()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Gangguan Persepsi Sensori: Halusinasi';
    	return view('page.ri.rencana_keperawatan_3', $this->data);
    }

    public function get_ri_rencana_keperawatan_4()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Perilaku Kekerasan';
    	return view('page.ri.rencana_keperawatan_4', $this->data);
    }

    public function get_ri_rencana_keperawatan_5()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Panik';
    	return view('page.ri.rencana_keperawatan_5', $this->data);
    }

    public function get_ri_rencana_keperawatan_6()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Waham';
    	return view('page.ri.rencana_keperawatan_6', $this->data);
    }

    public function get_ri_rencana_keperawatan_7()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Isolasi Sosial: Menarik Diri';
    	return view('page.ri.rencana_keperawatan_7', $this->data);
    }

    public function post_ri_rencana_keperawatan_1(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RIRencanaKeperawatan1;

    	$data->id_regis = $id_pasien;
    	$data->tanggal_pengkajian = $request->tanggal_pengkajian;
    	$data->jam_pengkajian = $request->jam_pengkajian;
    	$data->ruangan = $request->ruangan;
    	$data->diagnosa_medis = $request->diagnosa_medis;

    	$ti1 = '';
    	if(isset($request->ti1_1)) {
    		$ti1 .= '1-';
    	}
    	if(isset($request->ti1_2)) {
    		$ti1 .= '2-';
    	}
    	if(isset($request->ti1_3)) {
    		$ti1 .= '3-';
    	}
    	if(isset($request->ti1_4)) {
    		$ti1 .= '4-';
    	}
    	if(isset($request->ti1_5)) {
    		$ti1 .= '5-';
    	}
    	if(isset($request->ti1_6)) {
    		$ti1 .= '6-';
    	}
    	if(strlen($ti1) > 0) {
    		$ti1 = substr($ti1, 0, -1);
    	}

    	$ti2 = '';
    	if(isset($request->ti2_1)) {
    		$ti2 .= '1-';
    	}
    	if(isset($request->ti2_2)) {
    		$ti2 .= '2-';
    	}
    	if(isset($request->ti2_3)) {
    		$ti2 .= '3-';
    	}
    	if(isset($request->ti2_4)) {
    		$ti2 .= '4-';
    	}
    	if(isset($request->ti2_5)) {
    		$ti2 .= '5-';
    	}
    	if(isset($request->ti2_6)) {
    		$ti2 .= '6-';
    	}
    	if(strlen($ti2) > 0) {
    		$ti2 = substr($ti2, 0, -1);
    	}

    	$ti3 = '';
    	if(isset($request->ti3_1)) {
    		$ti3 .= '1-';
    	}
    	if(isset($request->ti3_2)) {
    		$ti3 .= '2-';
    	}
    	if(isset($request->ti3_3)) {
    		$ti3 .= '3-';
    	}
    	if(isset($request->ti3_4)) {
    		$ti3 .= '4-';
    	}
    	if(strlen($ti3) > 0) {
    		$ti3 = substr($ti3, 0, -1);
    	}

    	$data->ti1 = $ti1;
    	$data->ti2 = $ti2;
    	$data->ti3 = $ti3;
    	
    	$data->save();
    	return redirect('daftar_dokumen');
    }

    public function post_ri_rencana_keperawatan_2(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RIRencanaKeperawatan2;

    	$data->id_regis = $id_pasien;
    	$data->tanggal_pengkajian = $request->tanggal_pengkajian;
    	$data->jam_pengkajian = $request->jam_pengkajian;
    	$data->ruangan = $request->ruangan;
    	$data->diagnosa_medis = $request->diagnosa_medis;

    	$ti1 = '';
    	if(isset($request->ti1_1)) {
    		$ti1 .= '1-';
    	}
    	if(isset($request->ti1_2)) {
    		$ti1 .= '2-';
    	}
    	if(strlen($ti1) > 0) {
    		$ti1 = substr($ti1, 0, -1);
    	}

    	$ti2 = '';
    	if(isset($request->ti2_1)) {
    		$ti2 .= '1-';
    	}
    	if(isset($request->ti2_2)) {
    		$ti2 .= '2-';
    	}
    	if(strlen($ti2) > 0) {
    		$ti2 = substr($ti2, 0, -1);
    	}

    	$ti3 = '';
    	if(isset($request->ti3_1)) {
    		$ti3 .= '1-';
    	}
    	if(isset($request->ti3_2)) {
    		$ti3 .= '2-';
    	}
    	if(strlen($ti3) > 0) {
    		$ti3 = substr($ti3, 0, -1);
    	}

    	$data->ti1 = $ti1;
    	$data->ti2 = $ti2;
    	$data->ti3 = $ti3;
    	$data->save();
    	return redirect('daftar_dokumen');
    }

    public function post_ri_rencana_keperawatan_3(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RIRencanaKeperawatan3;
    	
    	$data->id_regis = $id_pasien;
    	$data->tanggal_pengkajian = $request->tanggal_pengkajian;
    	$data->jam_pengkajian = $request->jam_pengkajian;
    	$data->ruangan = $request->ruangan;
    	$data->diagnosa_medis = $request->diagnosa_medis;
    	
    	$ti1 = '';
    	if(isset($request->ti1_1)) {
    		$ti1 .= '1-';
    	}
    	if(isset($request->ti1_2)) {
    		$ti1 .= '2-';
    	}
    	if(isset($request->ti1_3)) {
    		$ti1 .= '3-';
    	}
    	if(strlen($ti1) > 0) {
    		$ti1 = substr($ti1, 0, -1);
    	}

    	$ti2 = '';
    	if(isset($request->ti2_1)) {
    		$ti2 .= '1-';
    	}
    	if(isset($request->ti2_2)) {
    		$ti2 .= '2-';
    	}
    	if(isset($request->ti2_3)) {
    		$ti2 .= '3-';
    	}
    	if(strlen($ti2) > 0) {
    		$ti2 = substr($ti2, 0, -1);
    	}

    	$ti3 = '';
    	if(isset($request->ti3_1)) {
    		$ti3 .= '1-';
    	}
    	if(isset($request->ti3_2)) {
    		$ti3 .= '2-';
    	}
    	if(isset($request->ti3_3)) {
    		$ti3 .= '3-';
    	}
    	if(strlen($ti3) > 0) {
    		$ti3 = substr($ti3, 0, -1);
    	}

    	$data->ti1 = $ti1;
    	$data->ti2 = $ti2;
    	$data->ti3 = $ti3;
    	
    	$data->save();
    	return redirect('daftar_dokumen');
    }

    public function post_ri_rencana_keperawatan_4(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RIRencanaKeperawatan4;

    	$data->id_regis = $id_pasien;
    	$data->tanggal_pengkajian = $request->tanggal_pengkajian;
    	$data->jam_pengkajian = $request->jam_pengkajian;
    	$data->ruangan = $request->ruangan;
    	$data->diagnosa_medis = $request->diagnosa_medis;

    	$ti1 = '';
    	if(isset($request->ti1_1)) {
    		$ti1 .= '1-';
    	}
    	if(isset($request->ti1_2)) {
    		$ti1 .= '2-';
    	}
    	if(isset($request->ti1_3)) {
    		$ti1 .= '3-';
    	}
    	if(strlen($ti1) > 0) {
    		$ti1 = substr($ti1, 0, -1);
    	}

    	$ti2 = '';
    	if(isset($request->ti2_1)) {
    		$ti2 .= '1-';
    	}
    	if(isset($request->ti2_2)) {
    		$ti2 .= '2-';
    	}
    	if(isset($request->ti2_3)) {
    		$ti2 .= '3-';
    	}
    	if(strlen($ti2) > 0) {
    		$ti2 = substr($ti2, 0, -1);
    	}

    	$ti3 = '';
    	if(isset($request->ti3_1)) {
    		$ti3 .= '1-';
    	}
    	if(isset($request->ti3_2)) {
    		$ti3 .= '2-';
    	}
    	if(isset($request->ti3_3)) {
    		$ti3 .= '3-';
    	}
    	if(strlen($ti3) > 0) {
    		$ti3 = substr($ti3, 0, -1);
    	}

    	$data->ti1 = $ti1;
    	$data->ti2 = $ti2;
    	$data->ti3 = $ti3;

    	$data->save();
    	return redirect('daftar_dokumen');
    }

    public function post_ri_rencana_keperawatan_5(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RIRencanaKeperawatan5;

    	$data->id_regis = $id_pasien;
    	$data->tanggal_pengkajian = $request->tanggal_pengkajian;
    	$data->jam_pengkajian = $request->jam_pengkajian;
    	$data->ruangan = $request->ruangan;
    	$data->diagnosa_medis = $request->diagnosa_medis;

    	$ti1 = '';
    	if(isset($request->ti1_1)) {
    		$ti1 .= '1-';
    	}
    	if(isset($request->ti1_2)) {
    		$ti1 .= '2-';
    	}
    	if(isset($request->ti1_3)) {
    		$ti1 .= '3-';
    	}
    	if(strlen($ti1) > 0) {
    		$ti1 = substr($ti1, 0, -1);
    	}

    	$ti2 = '';
    	if(isset($request->ti2_1)) {
    		$ti2 .= '1-';
    	}
    	if(isset($request->ti2_2)) {
    		$ti2 .= '2-';
    	}
    	if(isset($request->ti2_3)) {
    		$ti2 .= '3-';
    	}
    	if(isset($request->ti2_4)) {
    		$ti2 .= '4-';
    	}
    	if(strlen($ti2) > 0) {
    		$ti2 = substr($ti2, 0, -1);
    	}

    	$ti3 = '';
    	if(isset($request->ti3_1)) {
    		$ti3 .= '1-';
    	}
    	if(isset($request->ti3_2)) {
    		$ti3 .= '2-';
    	}
    	if(isset($request->ti3_3)) {
    		$ti3 .= '3-';
    	}
    	if(strlen($ti3) > 0) {
    		$ti3 = substr($ti3, 0, -1);
    	}

    	$data->ti1 = $ti1;
    	$data->ti2 = $ti2;
    	$data->ti3 = $ti3;
    	
    	$data->save();
    	return redirect('daftar_dokumen');
    }

    public function post_ri_rencana_keperawatan_6(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RIRencanaKeperawatan6;

    	$data->id_regis = $id_pasien;
    	$data->tanggal_pengkajian = $request->tanggal_pengkajian;
    	$data->jam_pengkajian = $request->jam_pengkajian;
    	$data->ruangan = $request->ruangan;
    	$data->diagnosa_medis = $request->diagnosa_medis;
    	
    	$ti1 = '';
    	if(isset($request->ti1_1)) {
    		$ti1 .= '1-';
    	}
    	if(isset($request->ti1_2)) {
    		$ti1 .= '2-';
    	}
    	if(isset($request->ti1_3)) {
    		$ti1 .= '3-';
    	}
    	if(strlen($ti1) > 0) {
    		$ti1 = substr($ti1, 0, -1);
    	}

    	$ti2 = '';
    	if(isset($request->ti2_1)) {
    		$ti2 .= '1-';
    	}
    	if(isset($request->ti2_2)) {
    		$ti2 .= '2-';
    	}
    	if(isset($request->ti2_3)) {
    		$ti2 .= '3-';
    	}
    	if(strlen($ti2) > 0) {
    		$ti2 = substr($ti2, 0, -1);
    	}

    	$ti3 = '';
    	if(isset($request->ti3_1)) {
    		$ti3 .= '1-';
    	}
    	if(isset($request->ti3_2)) {
    		$ti3 .= '2-';
    	}
    	if(isset($request->ti3_3)) {
    		$ti3 .= '3-';
    	}
    	if(strlen($ti3) > 0) {
    		$ti3 = substr($ti3, 0, -1);
    	}

    	$data->ti1 = $ti1;
    	$data->ti2 = $ti2;
    	$data->ti3 = $ti3;
    	
    	$data->save();
    	return redirect('daftar_dokumen');
    }

    public function post_ri_rencana_keperawatan_7(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RIRencanaKeperawatan7;

    	$data->id_regis = $id_pasien;
    	$data->tanggal_pengkajian = $request->tanggal_pengkajian;
    	$data->jam_pengkajian = $request->jam_pengkajian;
    	$data->ruangan = $request->ruangan;
    	$data->diagnosa_medis = $request->diagnosa_medis;
    	
    	$ti1 = '';
    	if(isset($request->ti1_1)) {
    		$ti1 .= '1-';
    	}
    	if(isset($request->ti1_2)) {
    		$ti1 .= '2-';
    	}
    	if(strlen($ti1) > 0) {
    		$ti1 = substr($ti1, 0, -1);
    	}

    	$ti2 = '';
    	if(isset($request->ti2_1)) {
    		$ti2 .= '1-';
    	}
    	if(isset($request->ti2_2)) {
    		$ti2 .= '2-';
    	}
    	if(isset($request->ti2_3)) {
    		$ti2 .= '3-';
    	}
    	if(strlen($ti2) > 0) {
    		$ti2 = substr($ti2, 0, -1);
    	}

    	$ti3 = '';
    	if(isset($request->ti3_1)) {
    		$ti3 .= '1-';
    	}
    	if(isset($request->ti3_2)) {
    		$ti3 .= '2-';
    	}
    	if(isset($request->ti3_3)) {
    		$ti3 .= '3-';
    	}
    	if(isset($request->ti3_4)) {
    		$ti3 .= '4-';
    	}
    	if(strlen($ti3) > 0) {
    		$ti3 = substr($ti3, 0, -1);
    	}

    	$data->ti1 = $ti1;
    	$data->ti2 = $ti2;
    	$data->ti3 = $ti3;
    	
    	$data->save();
    	return redirect('daftar_dokumen');
    }

}
