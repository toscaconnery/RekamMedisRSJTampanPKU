<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIRencanaKeperawatan;
use App\Models\RIRencanaKeperawatan1;
use App\Models\RIRencanaKeperawatan2;
use App\Models\RIRencanaKeperawatan3;
use App\Models\RIRencanaKeperawatan4;
use App\Models\RIRencanaKeperawatan5;
use App\Models\RIRencanaKeperawatan6;
use App\Models\RIRencanaKeperawatan7;
use Session;
use Auth;

class RIRencanaKeperawatanController extends Controller
{
    public function __construct()
    {
    	//
    }

    public function cek_list_dokumen_pasien()
    {
    	$id_pasien = Session::get('id_pasien');
    	$dokumen = RIRencanaKeperawatan::where('id_regis', $id_pasien)->count();
    	if($dokumen == 0) {
    		$data = new RIRencanaKeperawatan;
    		$data->id_regis = $id_pasien;
    		$data->save();
    	}
    }

    public function get_ri_rencana_keperawatan()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif';
    	$this->cek_list_dokumen_pasien();
    	$id_pasien = Session::get('id_pasien');
    	$file = RIRencanaKeperawatan::where('id_regis', $id_pasien)->first();
    	$this->data['file'] = $file;
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

    public function posting_1(Request $request, $data)
    {
    	if($data->id_regis == Null) {
    		$id_pasien = Session::get('id_pasien');
    		$data->id_regis = $id_pasien;
    	}
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
    }

    public function post_ri_rencana_keperawatan_1(Request $request)
    {
    	$data = new RIRencanaKeperawatan1;
    	$this->posting_1($request, $data);

    	$id_pasien = Session::get('id_pasien');
    	$dokumen = RIRencanaKeperawatan::where('id_regis', $id_pasien)->first();
    	$dokumen->ri_rencana_keperawatan_1 = True;
    	$dokumen->ri_rencana_keperawatan_1_tanggal = date("d/m/Y");
    	$dokumen->ri_rencana_keperawatan_1_pengisi = Auth::user()->nama;
    	$dokumen->save();
    	return redirect('daftar_dokumen');
    }

    public function post_ri_rencana_keperawatan_1_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIRencanaKeperawatan1::where('id_regis', $id_pasien)->first();
    	$this->posting_1($request, $data);
    	return redirect('daftar_dokumen');
    }

    public function posting_2(Request $request, $data)
    {
    	if($data->id_regis == Null) {
    		$id_pasien = Session::get('id_pasien');
    		$data->id_regis = $id_pasien;
    	}

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
    }

    public function post_ri_rencana_keperawatan_2(Request $request)
    {
    	$data = new RIRencanaKeperawatan2;
    	$this->posting_2($request, $data);

    	$id_pasien = Session::get('id_pasien');
    	$dokumen = RIRencanaKeperawatan::where('id_regis', $id_pasien)->first();
    	$dokumen->ri_rencana_keperawatan_2 = True;
    	$dokumen->ri_rencana_keperawatan_2_tanggal = date("d/m/Y");
    	$dokumen->ri_rencana_keperawatan_2_pengisi = Auth::user()->nama;
    	$dokumen->save();
    	return redirect('daftar_dokumen');
    }

    public function post_ri_rencana_keperawatan_2_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIRencanaKeperawatan2::where('id_regis', $id_pasien)->first();
    	$this->posting_2($request, $data);
    	return redirect('daftar_dokumen');
    }

    public function posting_3(Request $request, $data)
    {
    	if($data->id_regis == Null) {
    		$id_pasien = Session::get('id_pasien');
    		$data->id_regis = $id_pasien;
    	}
    	
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
    }

    public function post_ri_rencana_keperawatan_3(Request $request)
    {
    	$data = new RIRencanaKeperawatan3;
    	$this->posting_3($request, $data);

    	$id_pasien = Session::get('id_pasien');
    	$dokumen = RIRencanaKeperawatan::where('id_regis', $id_pasien)->first();
    	$dokumen->ri_rencana_keperawatan_3 = True;
    	$dokumen->ri_rencana_keperawatan_3_tanggal = date("d/m/Y");
    	$dokumen->ri_rencana_keperawatan_3_pengisi = Auth::user()->nama;
    	$dokumen->save();
    	return redirect('daftar_dokumen');
    }

    public function post_ri_rencana_keperawatan_3_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIRencanaKeperawatan3::where('id_regis', $id_pasien)->first();
    	$this->posting_3($request, $data);
    	return redirect('daftar_dokumen');
    }

    public function posting_4(Request $request, $data)
    {
    	if($data->id_regis == Null) {
    		$id_pasien = Session::get('id_pasien');
    		$data->id_regis = $id_pasien;
    	}

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
    }

    public function post_ri_rencana_keperawatan_4(Request $request)
    {
    	$data = new RIRencanaKeperawatan4;
    	$this->posting_4($request, $data);

    	$id_pasien = Session::get('id_pasien');
    	$dokumen = RIRencanaKeperawatan::where('id_regis', $id_pasien)->first();
    	$dokumen->ri_rencana_keperawatan_4 = True;
    	$dokumen->ri_rencana_keperawatan_4_tanggal = date("d/m/Y");
    	$dokumen->ri_rencana_keperawatan_4_pengisi = Auth::user()->nama;
    	$dokumen->save();
    	return redirect('daftar_dokumen');
    }

    public function post_ri_rencana_keperawatan_4_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIRencanaKeperawatan4::where('id_regis', $id_pasien)->first();
    	$this->posting_4($request, $data);
    	return redirect('daftar_dokumen');
    }

    public function posting_5(Request $request, $data)
    {
    	if($data->id_regis == Null) {
    		$id_pasien = Session::get('id_pasien');
    		$data->id_regis = $id_pasien;
    	}

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
    }

    public function post_ri_rencana_keperawatan_5(Request $request)
    {
    	$data = new RIRencanaKeperawatan5;
    	$this->posting_5($request, $data);

    	$id_pasien = Session::get('id_pasien');
    	$dokumen = RIRencanaKeperawatan::where('id_regis', $id_pasien)->first();
    	$dokumen->ri_rencana_keperawatan_5 = True;
    	$dokumen->ri_rencana_keperawatan_5_tanggal = date("d/m/Y");
    	$dokumen->ri_rencana_keperawatan_5_pengisi = Auth::user()->nama;
    	$dokumen->save();
    	return redirect('daftar_dokumen');
    }

    public function post_ri_rencana_keperawatan_5_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIRencanaKeperawatan5::where('id_regis', $id_pasien)->first();
    	$this->posting_5($request, $data);
    	return redirect('daftar_dokumen');
    }

    public function posting_6(Request $request, $data)
    {
    	if($data->id_regis == Null) {
    		$id_pasien = Session::get('id_pasien');
    		$data->id_regis = $id_pasien;
    	}

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
    }

    public function post_ri_rencana_keperawatan_6(Request $request)
    {
    	$data = new RIRencanaKeperawatan6;
    	$this->posting_6($request, $data);

    	$id_pasien = Session::get('id_pasien');
    	$dokumen = RIRencanaKeperawatan::where('id_regis', $id_pasien)->first();
    	$dokumen->ri_rencana_keperawatan_6 = True;
    	$dokumen->ri_rencana_keperawatan_6_tanggal = date("d/m/Y");
    	$dokumen->ri_rencana_keperawatan_6_pengisi = Auth::user()->nama;
    	$dokumen->save();
    	return redirect('daftar_dokumen');
    }

    public function post_ri_rencana_keperawatan_6_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIRencanaKeperawatan6::where('id_regis', $id_pasien)->first();
    	$this->posting_6($request, $data);
    	return redirect('daftar_dokumen');
    }

    public function posting_7(Request $request, $data)
    {
    	if($data->id_regis == Null) {
    		$id_pasien = Session::get('id_pasien');
    		$data->id_regis = $id_pasien;
    	}

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
    }

    public function post_ri_rencana_keperawatan_7(Request $request)
    {
    	$data = new RIRencanaKeperawatan7;
    	$this->posting_7($request, $data);

    	$id_pasien = Session::get('id_pasien');
    	$dokumen = RIRencanaKeperawatan::where('id_regis', $id_pasien)->first();
    	$dokumen->ri_rencana_keperawatan_7 = True;
    	$dokumen->ri_rencana_keperawatan_7_tanggal = date("d/m/Y");
    	$dokumen->ri_rencana_keperawatan_7_pengisi = Auth::user()->nama;
    	$dokumen->save();
    	return redirect('daftar_dokumen');
    }

    public function post_ri_rencana_keperawatan_7_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIRencanaKeperawatan7::where('id_regis', $id_pasien)->first();
    	$this->posting_7($request, $data);
    	return redirect('daftar_dokumen');
    }

    public function get_ri_rencana_keperawatan_data($pasien)
    {
    	$this->data['tanggal_pengkajian'] = $pasien->tanggal_pengkajian;
    	$this->data['jam_pengkajian'] = $pasien->jam_pengkajian;
    	$this->data['ruangan'] = $pasien->ruangan;
    	$this->data['diagnosa_medis'] = $pasien->diagnosa_medis;
    	$ti1 = explode('-', $pasien->ti1);
    	$this->data['ti1'] = array();
    	foreach ($ti1 as $key => $value) {
    		$this->data['ti1'][$value] = True;
    	}
    	$ti2 = explode('-', $pasien->ti2);
    	$this->data['ti2'] = array();
    	foreach ($ti2 as $key => $value) {
    		$this->data['ti2'][$value] = True;
    	}
    	$ti3 = explode('-', $pasien->ti3);
    	$this->data['ti3'] = array();
    	foreach ($ti3 as $key => $value) {
    		$this->data['ti3'][$value] = True;
    	}
    }

    public function get_ri_rencana_keperawatan_1_read()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Resiko Bunuh Diri';
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIRencanaKeperawatan1::where('id_regis', $id_pasien)->first();
    	$this->get_ri_rencana_keperawatan_data($pasien);
    	return view('page.ri.rencana_keperawatan_1_read', $this->data);
    }

    public function get_ri_rencana_keperawatan_1_edit()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Resiko Bunuh Diri';
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIRencanaKeperawatan1::where('id_regis', $id_pasien)->first();
    	$this->get_ri_rencana_keperawatan_data($pasien);
    	return view('page.ri.rencana_keperawatan_1_edit', $this->data);
    }

    public function get_ri_rencana_keperawatan_2_read()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Defisit Perawatan Diri';
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIRencanaKeperawatan2::where('id_regis', $id_pasien)->first();
    	$this->get_ri_rencana_keperawatan_data($pasien);
    	return view('page.ri.rencana_keperawatan_2_read', $this->data);
    }

    public function get_ri_rencana_keperawatan_2_edit()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Defisit Perawatan Diri';
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIRencanaKeperawatan2::where('id_regis', $id_pasien)->first();
    	$this->get_ri_rencana_keperawatan_data($pasien);
    	return view('page.ri.rencana_keperawatan_2_edit', $this->data);
    }

    public function get_ri_rencana_keperawatan_3_read()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Gangguan Persepsi Sensori: Halusinasi';
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIRencanaKeperawatan3::where('id_regis', $id_pasien)->first();
    	$this->get_ri_rencana_keperawatan_data($pasien);
    	return view('page.ri.rencana_keperawatan_3_read', $this->data);
    }

    public function get_ri_rencana_keperawatan_3_edit()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Gangguan Persepsi Sensori: Halusinasi';
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIRencanaKeperawatan3::where('id_regis', $id_pasien)->first();
    	$this->get_ri_rencana_keperawatan_data($pasien);
    	return view('page.ri.rencana_keperawatan_3_edit', $this->data);
    }

    public function get_ri_rencana_keperawatan_4_read()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Perilaku Kekerasan';
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIRencanaKeperawatan4::where('id_regis', $id_pasien)->first();
    	$this->get_ri_rencana_keperawatan_data($pasien);
    	return view('page.ri.rencana_keperawatan_4_read', $this->data);
    }

    public function get_ri_rencana_keperawatan_4_edit()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Perilaku Kekerasan';
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIRencanaKeperawatan4::where('id_regis', $id_pasien)->first();
    	$this->get_ri_rencana_keperawatan_data($pasien);
    	return view('page.ri.rencana_keperawatan_4_edit', $this->data);
    }

    public function get_ri_rencana_keperawatan_5_read()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Panik';
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIRencanaKeperawatan5::where('id_regis', $id_pasien)->first();
    	$this->get_ri_rencana_keperawatan_data($pasien);
    	return view('page.ri.rencana_keperawatan_5_read', $this->data);
    }

    public function get_ri_rencana_keperawatan_5_edit()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Panik';
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIRencanaKeperawatan5::where('id_regis', $id_pasien)->first();
    	$this->get_ri_rencana_keperawatan_data($pasien);
    	return view('page.ri.rencana_keperawatan_5_edit', $this->data);
    }

    public function get_ri_rencana_keperawatan_6_read()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Waham';
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIRencanaKeperawatan6::where('id_regis', $id_pasien)->first();
    	$this->get_ri_rencana_keperawatan_data($pasien);
    	return view('page.ri.rencana_keperawatan_6_read', $this->data);
    }

    public function get_ri_rencana_keperawatan_6_edit()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Waham';
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIRencanaKeperawatan6::where('id_regis', $id_pasien)->first();
    	$this->get_ri_rencana_keperawatan_data($pasien);
    	return view('page.ri.rencana_keperawatan_6_edit', $this->data);
    }

    public function get_ri_rencana_keperawatan_7_read()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Isolasi Sosial: Menarik Diri';
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIRencanaKeperawatan7::where('id_regis', $id_pasien)->first();
    	$this->get_ri_rencana_keperawatan_data($pasien);
    	return view('page.ri.rencana_keperawatan_7_read', $this->data);
    }

    public function get_ri_rencana_keperawatan_7_edit()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Intensif Isolasi Sosial: Menarik Diri';
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIRencanaKeperawatan7::where('id_regis', $id_pasien)->first();
    	$this->get_ri_rencana_keperawatan_data($pasien);
    	return view('page.ri.rencana_keperawatan_7_edit', $this->data);
    }

}
