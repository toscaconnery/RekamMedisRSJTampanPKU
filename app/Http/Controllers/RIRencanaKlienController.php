<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIRencanaKlien1;
use App\Models\RIRencanaKlien2;
use Session;

class RIRencanaKlienController extends Controller
{
    public function __construct()
    {
    	//
    }

    public function get_index()
    {
    	return view('page.ri.rencana_klien');
    }

    public function get_ri_rencana_klien_1()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Klien Dengan Perilaku Kekerasan';
    	return view('page.ri.rencana_klien_1', $this->data);
    }

    public function post_ri_rencana_klien_1(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RIRencanaKlien1;
    	$data->id_regis = $id_pasien;
    	$data->tanggal_pengkajian = $request->tanggal_pengkajian;
		$data->jam_pengkajian = $request->jam_pengkajian;
		$data->ruangan = $request->ruangan;
		$data->diagnosa_medis = $request->diagnosa_medis;

    	$data->tanggal_1 = $request->tanggal_1;
		$data->tanggal_2 = $request->tanggal_2;
		$data->tanggal_3 = $request->tanggal_3;
		$data->tanggal_4 = $request->tanggal_4;
		$data->tanggal_5 = $request->tanggal_5;
		$data->tanggal_6 = $request->tanggal_6;
		$data->tanggal_7 = $request->tanggal_7;
		$data->tanggal_8 = $request->tanggal_8;
		$data->tanggal_9 = $request->tanggal_9;
		$data->nodx_1 = $request->nodx_1;
		$data->nodx_2 = $request->nodx_2;
		$data->nodx_3 = $request->nodx_3;
		$data->nodx_4 = $request->nodx_4;
		$data->nodx_5 = $request->nodx_5;
		$data->nodx_6 = $request->nodx_6;
		$data->nodx_7 = $request->nodx_7;
		$data->nodx_8 = $request->nodx_8;
		$data->nodx_9 = $request->nodx_9;
		$data->dxk_1 = $request->dxk_1;
		$data->dxk_2 = $request->dxk_2;
		$data->dxk_3 = $request->dxk_3;
		$data->dxk_4 = $request->dxk_4;
		$data->dxk_5 = $request->dxk_5;
		$data->dxk_6 = $request->dxk_6;
		$data->dxk_7 = $request->dxk_7;
		$data->dxk_8 = $request->dxk_8;
		$data->dxk_9 = $request->dxk_9;
		$data->t1 = $request->t1;
		$data->k1 = $request->k1;
		$data->k2 = $request->k2;
		$data->k3 = $request->k3;
		$data->k4 = $request->k4;
		$data->k5 = $request->k5;
		$data->k6 = $request->k6;
		$data->k7 = $request->k7;
		$data->k8 = $request->k8;
		$data->k9 = $request->k9;
		$data->k10 = $request->k10;

		$data->save();
    }

    public function get_ri_rencana_klien_1_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIRencanaKlien1::where('id_regis', $id_pasien)->first();

    	$this->data['tanggal_pengkajian'] = $pasien->tanggal_pengkajian;
		$this->data['jam_pengkajian'] = $pasien->jam_pengkajian;
		$this->data['ruangan'] = $pasien->ruangan;
		$this->data['diagnosa_medis'] = $pasien->diagnosa_medis;

    	$this->data['tanggal_1'] = $pasien->tanggal_1;
		$this->data['tanggal_2'] = $pasien->tanggal_2;
		$this->data['tanggal_3'] = $pasien->tanggal_3;
		$this->data['tanggal_4'] = $pasien->tanggal_4;
		$this->data['tanggal_5'] = $pasien->tanggal_5;
		$this->data['tanggal_6'] = $pasien->tanggal_6;
		$this->data['tanggal_7'] = $pasien->tanggal_7;
		$this->data['tanggal_8'] = $pasien->tanggal_8;
		$this->data['tanggal_9'] = $pasien->tanggal_9;
		$this->data['nodx_1'] = $pasien->nodx_1;
		$this->data['nodx_2'] = $pasien->nodx_2;
		$this->data['nodx_3'] = $pasien->nodx_3;
		$this->data['nodx_4'] = $pasien->nodx_4;
		$this->data['nodx_5'] = $pasien->nodx_5;
		$this->data['nodx_6'] = $pasien->nodx_6;
		$this->data['nodx_7'] = $pasien->nodx_7;
		$this->data['nodx_8'] = $pasien->nodx_8;
		$this->data['nodx_9'] = $pasien->nodx_9;
		$this->data['dxk_1'] = $pasien->dxk_1;
		$this->data['dxk_2'] = $pasien->dxk_2;
		$this->data['dxk_3'] = $pasien->dxk_3;
		$this->data['dxk_4'] = $pasien->dxk_4;
		$this->data['dxk_5'] = $pasien->dxk_5;
		$this->data['dxk_6'] = $pasien->dxk_6;
		$this->data['dxk_7'] = $pasien->dxk_7;
		$this->data['dxk_8'] = $pasien->dxk_8;
		$this->data['dxk_9'] = $pasien->dxk_9;
		$this->data['t1'] = $pasien->t1;
		$this->data['k1'] = $pasien->k1;
		$this->data['k2'] = $pasien->k2;
		$this->data['k3'] = $pasien->k3;
		$this->data['k4'] = $pasien->k4;
		$this->data['k5'] = $pasien->k5;
		$this->data['k6'] = $pasien->k6;
		$this->data['k7'] = $pasien->k7;
		$this->data['k8'] = $pasien->k8;
		$this->data['k9'] = $pasien->k9;
		$this->data['k10'] = $pasien->k10;
    }

    public function get_ri_rencana_klien_1_read()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Klien Dengan Perilaku Kekerasan';
    	$this->get_ri_rencana_klien_1_data();
    	return view('page.ri.rencana_klien_1_read', $this->data);
    }

    public function get_ri_rencana_klien_1_edit()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Klien Dengan Perilaku Kekerasan';
    	$this->get_ri_rencana_klien_1_data();
    	return view('page.ri.rencana_klien_1_edit', $this->data);
    }

    public function post_ri_rencana_klien_1_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIRencanaKlien1::where('id_regis', $id_pasien)->first();

    	$data->tanggal_pengkajian = $request->tanggal_pengkajian;
		$data->jam_pengkajian = $request->jam_pengkajian;
		$data->ruangan = $request->ruangan;
		$data->diagnosa_medis = $request->diagnosa_medis;

    	$data->tanggal_1 = $request->tanggal_1;
		$data->tanggal_2 = $request->tanggal_2;
		$data->tanggal_3 = $request->tanggal_3;
		$data->tanggal_4 = $request->tanggal_4;
		$data->tanggal_5 = $request->tanggal_5;
		$data->tanggal_6 = $request->tanggal_6;
		$data->tanggal_7 = $request->tanggal_7;
		$data->tanggal_8 = $request->tanggal_8;
		$data->tanggal_9 = $request->tanggal_9;
		$data->nodx_1 = $request->nodx_1;
		$data->nodx_2 = $request->nodx_2;
		$data->nodx_3 = $request->nodx_3;
		$data->nodx_4 = $request->nodx_4;
		$data->nodx_5 = $request->nodx_5;
		$data->nodx_6 = $request->nodx_6;
		$data->nodx_7 = $request->nodx_7;
		$data->nodx_8 = $request->nodx_8;
		$data->nodx_9 = $request->nodx_9;
		$data->dxk_1 = $request->dxk_1;
		$data->dxk_2 = $request->dxk_2;
		$data->dxk_3 = $request->dxk_3;
		$data->dxk_4 = $request->dxk_4;
		$data->dxk_5 = $request->dxk_5;
		$data->dxk_6 = $request->dxk_6;
		$data->dxk_7 = $request->dxk_7;
		$data->dxk_8 = $request->dxk_8;
		$data->dxk_9 = $request->dxk_9;
		$data->t1 = $request->t1;
		$data->k1 = $request->k1;
		$data->k2 = $request->k2;
		$data->k3 = $request->k3;
		$data->k4 = $request->k4;
		$data->k5 = $request->k5;
		$data->k6 = $request->k6;
		$data->k7 = $request->k7;
		$data->k8 = $request->k8;
		$data->k9 = $request->k9;
		$data->k10 = $request->k10;

		$data->save();
    }

    public function get_ri_rencana_klien_2()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Klien Dengan Gangguan Konsep Diri : Harga Diri Rendah';
    	return view('page.ri.rencana_klien_2', $this->data);
    }

    public function post_ri_rencana_klien_2(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RIRencanaKlien2;
    	$data->id_regis = $id_pasien;
    	$data->tanggal_pengkajian = $request->tanggal_pengkajian;
		$data->jam_pengkajian = $request->jam_pengkajian;
		$data->ruangan = $request->ruangan;
		$data->diagnosa_medis = $request->diagnosa_medis;

    	$data->tanggal_1 = $request->tanggal_1;
		$data->tanggal_2 = $request->tanggal_2;
		$data->nodx_1 = $request->nodx_1;
		$data->nodx_2 = $request->nodx_2;
		$data->dxk_1 = $request->dxk_1;
		$data->dxk_2 = $request->dxk_2;
		$data->t1 = $request->t1;
		$data->k1 = $request->k1;
		$data->k2 = $request->k2;

		$data->save();
    }

    public function get_ri_rencana_klien_2_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIRencanaKlien2::where('id_regis', $id_pasien)->first();
    	$this->data['tanggal_pengkajian'] = $pasien->tanggal_pengkajian;
		$this->data['jam_pengkajian'] = $pasien->jam_pengkajian;
		$this->data['ruangan'] = $pasien->ruangan;
		$this->data['diagnosa_medis'] = $pasien->diagnosa_medis;

    	$this->data['tanggal_1'] = $pasien->tanggal_1;
		$this->data['tanggal_2'] = $pasien->tanggal_2;
		$this->data['nodx_1'] = $pasien->nodx_1;
		$this->data['nodx_2'] = $pasien->nodx_2;
		$this->data['dxk_1'] = $pasien->dxk_1;
		$this->data['dxk_2'] = $pasien->dxk_2;
		$this->data['t1'] = $pasien->t1;
		$this->data['k1'] = $pasien->k1;
		$this->data['k2'] = $pasien->k2;
    }

    public function get_ri_rencana_klien_2_read()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Klien Dengan Gangguan Konsep Diri : Harga Diri Rendah';
    	$this->get_ri_rencana_klien_2_data();
    	return view('page.ri.rencana_klien_2_read', $this->data);
    }

    public function get_ri_rencana_klien_2_edit()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Klien Dengan Gangguan Konsep Diri : Harga Diri Rendah';
    	$this->get_ri_rencana_klien_2_data();
    	return view('page.ri.rencana_klien_2_edit', $this->data);
    }

    public function post_ri_rencana_klien_2_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIRencanaKlien2::where('id_regis', $id_pasien)->first();
    	$data->tanggal_pengkajian = $request->tanggal_pengkajian;
		$data->jam_pengkajian = $request->jam_pengkajian;
		$data->ruangan = $request->ruangan;
		$data->diagnosa_medis = $request->diagnosa_medis;

    	$data->tanggal_1 = $request->tanggal_1;
		$data->tanggal_2 = $request->tanggal_2;
		$data->nodx_1 = $request->nodx_1;
		$data->nodx_2 = $request->nodx_2;
		$data->dxk_1 = $request->dxk_1;
		$data->dxk_2 = $request->dxk_2;
		$data->t1 = $request->t1;
		$data->k1 = $request->k1;
		$data->k2 = $request->k2;
		$data->save();
    	dd($data);
    }
}
