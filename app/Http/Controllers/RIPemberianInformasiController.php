<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPemberianInformasi;
use App\Models\ListDocument;
use Session;

class RIPemberianInformasiController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'Pemberian Informasi';
    }

    public function get_ri_pemberian_informasi()
    {
    	return view('page.ri.pemberian_informasi', $this->data);
    }

    public function post_ri_pemberian_informasi(Request $request)
    {
    	$jumlah_form = $request->jumlah_form;
    	$id_pasien = Session::get('id_pasien');
    	$idx = 0;
    	for($i = 1; $i <= $jumlah_form; $i++) {
    		$idx++;
    		$str_tanggal = 'tanggal_'.$i;
    		$str_jam = 'jam_'.$i;
    		$str_informasi = 'informasi_'.$i;
    		$str_pemberi = 'pemberi_'.$i;
    		$str_penerima = 'penerima_'.$i;
    		if(!empty($request->$str_tanggal)) {
    			$data = new RIPemberianInformasi;
    			$data->id_regis = $id_pasien;
    			$data->tanggal = $request->$str_tanggal;
    			$data->jam = $request->$str_jam;
    			$data->informasi = $request->$str_informasi;
    			$data->pemberi = $request->$str_pemberi;
    			$data->penerima = $request->$str_penerima;
    			$data->save();
    		}
    	}
    	if($idx > 0) {
	    	$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
	        $daftar_dokumen->ri_pemberian_informasi = True;
	        $daftar_dokumen->save();
    	}
    	dd($request);
    }

    public function get_ri_pemberian_informasi_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIPemberianInformasi::where('id_regis', $id_pasien)->get();
    	$this->data['pasien'] = array();
    	$this->data['id_regis'] = $id_pasien;
    	$this->data['previous_data'] = '';
    	foreach ($pasien as $key => $value) {
    		$this->data['pasien'][$key] = array();
    		$this->data['pasien'][$key]['id_data'] = $value->id;
    		$this->data['pasien'][$key]['tanggal'] = $value->tanggal;
    		$this->data['pasien'][$key]['jam'] = $value->jam;
    		$this->data['pasien'][$key]['informasi'] = $value->informasi;
    		$this->data['pasien'][$key]['pemberi'] = $value->pemberi;
    		$this->data['pasien'][$key]['penerima'] = $value->penerima;
    		$this->data['previous_data'] .= $value->id.'-';
    	}
    	if(strlen($this->data['previous_data']) > 0) {
    		$this->data['previous_data'] = substr($this->data['previous_data'], 0, -1);
    	}
    }

    public function get_ri_pemberian_informasi_read()
    {
    	$this->get_ri_pemberian_informasi_data();
    	return view('page.ri.pemberian_informasi_read', $this->data);
    }

    public function get_ri_pemberian_informasi_edit()
    {
    	$this->get_ri_pemberian_informasi_data();
    	return view('page.ri.pemberian_informasi_edit', $this->data);
    }

    public function post_ri_pemberian_informasi_edit(Request $request)
    {	//old data
    	$previous_data = $request->previous_data;
    	if(strlen($previous_data) > 0) {
    		$list_previous_data = explode('-', $previous_data);
    		foreach ($list_previous_data as $l) {
    			$data = RIPemberianInformasi::where('id', $l)->first();
    			$str_tanggal = 'tanggal_'.$l;
	    		$str_jam = 'jam_'.$l;
	    		$str_informasi = 'informasi_'.$l;
	    		$str_pemberi = 'pemberi_'.$l;
	    		$str_penerima = 'penerima_'.$l;
	    		$data->tanggal = $request->$str_tanggal;
    			$data->jam = $request->$str_jam;
    			$data->informasi = $request->$str_informasi;
    			$data->pemberi = $request->$str_pemberi;
    			$data->penerima = $request->$str_penerima;
    			$data->save();
    		}
    	}
    	
    	//new data
    	$id_pasien = Session::get('id_pasien');
    	$jumlah_form = $request->jumlah_form;
    	for($i = 1; $i <= $jumlah_form; $i++) {
    		$str_tanggal = 'tanggal_new_'.$i;
    		$str_jam = 'jam_new_'.$i;
    		$str_informasi = 'informasi_new_'.$i;
    		$str_pemberi = 'pemberi_new_'.$i;
    		$str_penerima = 'penerima_new_'.$i;
    		if(!empty($request->$str_tanggal)) {
    			$data = new RIPemberianInformasi;
    			$data->id_regis = $id_pasien;
    			$data->tanggal = $request->$str_tanggal;
    			$data->jam = $request->$str_jam;
    			$data->informasi = $request->$str_informasi;
    			$data->pemberi = $request->$str_pemberi;
    			$data->penerima = $request->$str_penerima;
    			$data->save();
    		}
    	}
    	dd($request);
    }
}
