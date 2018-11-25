<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RILaboratorium;
use App\Models\RILaboratoriumHematologi;
use App\Models\RILaboratoriumUrine;
use App\Models\RILaboratoriumFaecesRutin;
use App\Models\RILaboratoriumKimiaDarah;
use App\Models\RILaboratoriumSerologi;
use App\Models\RILaboratoriumNarkoba;
use App\Models\ListDocument;
use Session;

class RILaboratoriumController extends Controller
{
    public function __construct(){
    	$this->data['title'] = 'Pemeriksaan Laboratorium';
    }

    public function get_ri_laboratorium()
    {
    	return view('page.ri.laboratorium', $this->data);
    }

    public function post_ri_laboratorium(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');

    	//laboratorium
    	$data = new RILaboratorium;
    	$data->id_regis = $id_pasien;
    	$data->validasi_oleh = $request->validasi_oleh;
    	$data->dr_pengirim = $request->dr_pengirim;
		$data->bahan_diterima = $request->bahan_diterima;
		$data->ruangan = $request->ruangan;
		$data->tgl_hasil_cetak = $request->tgl_hasil_cetak;
		$data->tgl_permintaan = $request->tgl_permintaan;
		$data->save();

		$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_laboratorium = True;
        $daftar_dokumen->save();

    	//hematologi
    	$jumlah_hematologi = $request->jumlah_form_hematologi;
    	for($i=1; $i<=$jumlah_hematologi; $i++) {
    		$str_pemeriksaan = 'h_pemeriksaan_'.$i;
    		$str_hasil = 'h_hasil_'.$i;
    		$str_status = 'h_status_'.$i;
    		$str_normal = 'h_normal_'.$i;
    		$data = new RILaboratoriumHematologi;
    		$data->id_regis = $id_pasien;
    		$data->pemeriksaan = $request->$str_pemeriksaan;
    		$data->hasil = $request->$str_hasil;
    		$data->status = $request->$str_status;
    		$data->normal = $request->$str_normal;
    		$data->save();
    	}

    	//urine
    	$jumlah_urine = $request->jumlah_form_urine;
    	for($i=1; $i<=$jumlah_urine; $i++) {
    		$str_pemeriksaan = 'u_pemeriksaan_'.$i;
    		$str_hasil = 'u_hasil_'.$i;
    		$str_status = 'u_status_'.$i;
    		$str_normal = 'u_normal_'.$i;
    		$data = new RILaboratoriumUrine;
    		$data->id_regis = $id_pasien;
    		$data->pemeriksaan = $request->$str_pemeriksaan;
    		$data->hasil = $request->$str_hasil;
    		$data->status = $request->$str_status;
    		$data->normal = $request->$str_normal;
    		$data->save();
    	}

    	//faeces rutin
    	$jumlah_faeces = $request->jumlah_form_faeces;
        for($i=1; $i<=$jumlah_faeces; $i++) {
            $str_pemeriksaan = 'f_pemeriksaan_'.$i;
            $str_hasil = 'f_hasil_'.$i;
            $str_status = 'f_status_'.$i;
            $str_normal = 'f_normal_'.$i;
            $data = new RILaboratoriumFaecesRutin;
            $data->id_regis = $id_pasien;
            $data->pemeriksaan = $request->$str_pemeriksaan;
            $data->hasil = $request->$str_hasil;
            $data->status = $request->$str_status;
            $data->normal = $request->$str_normal;
            $data->save();
        }

    	//kimia darah
        $jumlah_kimia = $request->jumlah_form_kimia;
        for($i=1; $i<=$jumlah_kimia; $i++) {
            $str_pemeriksaan = 'h_pemeriksaan_'.$i;
            $str_hasil = 'h_hasil_'.$i;
            $str_status = 'h_status_'.$i;
            $str_normal = 'h_normal_'.$i;
            $data = new RILaboratoriumKimiaDarah;
            $data->id_regis = $id_pasien;
            $data->pemeriksaan = $request->$str_pemeriksaan;
            $data->hasil = $request->$str_hasil;
            $data->status = $request->$str_status;
            $data->normal = $request->$str_normal;
            $data->save();
        }

    	//serologi
        $jumlah_serologi = $request->jumlah_form_serologi;
        for($i=1; $i<=$jumlah_serologi; $i++) {
            $str_pemeriksaan = 'h_pemeriksaan_'.$i;
            $str_hasil = 'h_hasil_'.$i;
            $str_status = 'h_status_'.$i;
            $str_normal = 'h_normal_'.$i;
            $data = new RILaboratoriumSerologi;
            $data->id_regis = $id_pasien;
            $data->pemeriksaan = $request->$str_pemeriksaan;
            $data->hasil = $request->$str_hasil;
            $data->status = $request->$str_status;
            $data->normal = $request->$str_normal;
            $data->save();
        }

    	//narkoba
    	$jumlah_narkoba = $request->jumlah_form_narkoba;
        for($i=1; $i<=$jumlah_narkoba; $i++) {
            $str_pemeriksaan = 'h_pemeriksaan_'.$i;
            $str_hasil = 'h_hasil_'.$i;
            $str_status = 'h_status_'.$i;
            $str_normal = 'h_normal_'.$i;
            $data = new RILaboratoriumNarkoba;
            $data->id_regis = $id_pasien;
            $data->pemeriksaan = $request->$str_pemeriksaan;
            $data->hasil = $request->$str_hasil;
            $data->status = $request->$str_status;
            $data->normal = $request->$str_normal;
            $data->save();
        }

    	dd('posting');
    }

    public function get_ri_laboratorium_data()
    {
    	//
    }

    public function get_ri_laboratorium_read()
    {
    	$this->get_ri_laboratorium_data();
    	return view('page.ri.laboratorium_read', $this->data);
    }

    public function get_ri_laboratorium_edit()
    {
    	$this->get_ri_laboratorium_data();
    	return view('page.ri.laboratorium_edit', $this->data);
    }

    public function post_ri_laboratorium_edit(Request $request)
    {
    	dd('posting edit');
    }
}
