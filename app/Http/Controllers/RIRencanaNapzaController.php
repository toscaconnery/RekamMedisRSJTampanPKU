<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIRencanaNapza;
use App\Models\ListDocument;
use Session;

class RIRencanaNapzaController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'Rencana Tindakan Keperawatan Napza';
    }

    public function get_ri_rencana_napza()
    {
    	return view('page.ri.rencana_napza', $this->data);
    }

    public function post_ri_rencana_napza(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = new RIRencanaNapza;
    	$data->id_regis = $id_pasien;
    	$data->tanggal_pengkajian = $request->tanggal_pengkajian;
    	$data->jam_pengkajian = $request->jam_pengkajian;
    	$data->tk = $request->tk;
    	$pola_tidur = '';
    	if(isset($request->pola_tidur_1)) {
    		$pola_tidur .= '1-';
    	}
    	if(isset($request->pola_tidur_2)) {
    		$pola_tidur .= '2-';
    	}
    	if(isset($request->pola_tidur_3)) {
    		$pola_tidur .= '3-';
    	}
    	if(isset($request->pola_tidur_4)) {
    		$pola_tidur .= '4-';
    	}
    	if(isset($request->pola_tidur_5)) {
    		$pola_tidur .= '5-';
    	}
    	if(isset($request->pola_tidur_6)) {
    		$pola_tidur .= '6-';
    	}
    	if(isset($request->pola_tidur_7)) {
    		$pola_tidur .= '7-';
    	}
    	if(strlen($pola_tidur) > 0) {
    		$pola_tidur = substr($pola_tidur, 0, -1);
    	}
    	$data->pola_tidur = $pola_tidur;

    	$nyeri = '';
    	if(isset($request->nyeri_1)) {
    		$nyeri .= '1-';
    	}
    	if(isset($request->nyeri_2)) {
    		$nyeri .= '2-';
    	}
    	if(isset($request->nyeri_3)) {
    		$nyeri .= '3-';
    	}
    	if(isset($request->nyeri_4)) {
    		$nyeri .= '4-';
    	}
    	if(isset($request->nyeri_5)) {
    		$nyeri .= '5-';
    	}
    	if(isset($request->nyeri_6)) {
    		$nyeri .= '6-';
    	}
    	if(isset($request->nyeri_7)) {
    		$nyeri .= '7-';
    	}
    	if(strlen($nyeri) > 0) {
    		$nyeri = substr($nyeri, 0, -1);
    	}
    	$data->nyeri = $nyeri;

    	$individu = '';
    	if(isset($request->individu_1)) {
    		$individu .= '1-';
    	}
    	if(isset($request->individu_2)) {
    		$individu .= '2-';
    	}
    	if(isset($request->individu_3)) {
    		$individu .= '3-';
    	}
    	if(isset($request->individu_4)) {
    		$individu .= '4-';
    	}
    	if(isset($request->individu_5)) {
    		$individu .= '5-';
    	}
    	if(isset($request->individu_6)) {
    		$individu .= '6-';
    	}
    	if(isset($request->individu_7)) {
    		$individu .= '7-';
    	}
    	if(strlen($individu) > 0) {
    		$individu = substr($individu, 0, -1);
    	}
    	$data->individu = $individu;

    	$keluarga = '';
    	if(isset($request->keluarga_1)) {
    		$keluarga .= '1-';
    	}
    	if(isset($request->keluarga_2)) {
    		$keluarga .= '2-';
    	}
    	if(isset($request->keluarga_3)) {
    		$keluarga .= '3-';
    	}
    	if(isset($request->keluarga_4)) {
    		$keluarga .= '4-';
    	}
    	if(isset($request->keluarga_5)) {
    		$keluarga .= '5-';
    	}
    	if(isset($request->keluarga_6)) {
    		$keluarga .= '6-';
    	}
    	if(isset($request->keluarga_7)) {
    		$keluarga .= '7-';
    	}
    	if(isset($request->keluarga_8)) {
    		$keluarga .= '8-';
    	}
    	if(strlen($keluarga) > 0) {
    		$keluarga = substr($keluarga, 0, -1);
    	}
    	$data->keluarga = $keluarga;
    	$data->save();

    	$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_rencana_napza = True;
        $daftar_dokumen->save();

        return redirect('daftar_dokumen');

    }

    public function get_ri_rencana_napza_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIRencanaNapza::where('id_regis', $id_pasien)->first();
    	$this->data['tanggal_pengkajian'] = $pasien->tanggal_pengkajian;
    	$this->data['jam_pengkajian'] = $pasien->jam_pengkajian;
    	$this->data['tk'] = $pasien->tk;
    	$pola_tidur = explode('-', $pasien->pola_tidur);
    	$this->data['pola_tidur'] = array();
    	foreach ($pola_tidur as $key => $value) {
    		$this->data['pola_tidur'][$value] = True;
    	}
    	$nyeri = explode('-', $pasien->nyeri);
    	$this->data['nyeri'] = array();
    	foreach ($nyeri as $key => $value) {
    		$this->data['nyeri'][$value] = True;
    	}
    	$individu = explode('-', $pasien->individu);
    	$this->data['individu'] = array();
    	foreach ($individu as $key => $value) {
    		$this->data['individu'][$value] = True;
    	}
    	$keluarga = explode('-', $pasien->keluarga);
    	$this->data['keluarga'] = array();
    	foreach ($keluarga as $key => $value) {
    		$this->data['keluarga'][$value] = True;
    	}

    }

    public function get_ri_rencana_napza_read()
    {
    	$this->get_ri_rencana_napza_data();
    	return view('page.ri.rencana_napza_read', $this->data);
    }

    public function get_ri_rencana_napza_edit()
    {
    	$this->get_ri_rencana_napza_data();
    	return view('page.ri.rencana_napza_edit', $this->data);
    }

    public function post_ri_rencana_napza_edit(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$data = RIRencanaNapza::where('id_regis', $id_pasien)->first();
    	$data->tanggal_pengkajian = $request->tanggal_pengkajian;
    	$data->jam_pengkajian = $request->jam_pengkajian;
    	$data->tk = $request->tk;
    	$pola_tidur = '';
    	if(isset($request->pola_tidur_1)) {
    		$pola_tidur .= '1-';
    	}
    	if(isset($request->pola_tidur_2)) {
    		$pola_tidur .= '2-';
    	}
    	if(isset($request->pola_tidur_3)) {
    		$pola_tidur .= '3-';
    	}
    	if(isset($request->pola_tidur_4)) {
    		$pola_tidur .= '4-';
    	}
    	if(isset($request->pola_tidur_5)) {
    		$pola_tidur .= '5-';
    	}
    	if(isset($request->pola_tidur_6)) {
    		$pola_tidur .= '6-';
    	}
    	if(isset($request->pola_tidur_7)) {
    		$pola_tidur .= '7-';
    	}
    	if(strlen($pola_tidur) > 0) {
    		$pola_tidur = substr($pola_tidur, 0, -1);
    	}
    	$data->pola_tidur = $pola_tidur;

    	$nyeri = '';
    	if(isset($request->nyeri_1)) {
    		$nyeri .= '1-';
    	}
    	if(isset($request->nyeri_2)) {
    		$nyeri .= '2-';
    	}
    	if(isset($request->nyeri_3)) {
    		$nyeri .= '3-';
    	}
    	if(isset($request->nyeri_4)) {
    		$nyeri .= '4-';
    	}
    	if(isset($request->nyeri_5)) {
    		$nyeri .= '5-';
    	}
    	if(isset($request->nyeri_6)) {
    		$nyeri .= '6-';
    	}
    	if(isset($request->nyeri_7)) {
    		$nyeri .= '7-';
    	}
    	if(strlen($nyeri) > 0) {
    		$nyeri = substr($nyeri, 0, -1);
    	}
    	$data->nyeri = $nyeri;

    	$individu = '';
    	if(isset($request->individu_1)) {
    		$individu .= '1-';
    	}
    	if(isset($request->individu_2)) {
    		$individu .= '2-';
    	}
    	if(isset($request->individu_3)) {
    		$individu .= '3-';
    	}
    	if(isset($request->individu_4)) {
    		$individu .= '4-';
    	}
    	if(isset($request->individu_5)) {
    		$individu .= '5-';
    	}
    	if(isset($request->individu_6)) {
    		$individu .= '6-';
    	}
    	if(isset($request->individu_7)) {
    		$individu .= '7-';
    	}
    	if(strlen($individu) > 0) {
    		$individu = substr($individu, 0, -1);
    	}
    	$data->individu = $individu;

    	$keluarga = '';
    	if(isset($request->keluarga_1)) {
    		$keluarga .= '1-';
    	}
    	if(isset($request->keluarga_2)) {
    		$keluarga .= '2-';
    	}
    	if(isset($request->keluarga_3)) {
    		$keluarga .= '3-';
    	}
    	if(isset($request->keluarga_4)) {
    		$keluarga .= '4-';
    	}
    	if(isset($request->keluarga_5)) {
    		$keluarga .= '5-';
    	}
    	if(isset($request->keluarga_6)) {
    		$keluarga .= '6-';
    	}
    	if(isset($request->keluarga_7)) {
    		$keluarga .= '7-';
    	}
    	if(isset($request->keluarga_8)) {
    		$keluarga .= '8-';
    	}
    	if(strlen($keluarga) > 0) {
    		$keluarga = substr($keluarga, 0, -1);
    	}
    	$data->keluarga = $keluarga;
    	$data->save();
    	return redirect('daftar_dokumen');
    }
}
