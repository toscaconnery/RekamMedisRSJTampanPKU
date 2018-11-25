<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPerkembanganPasien;
use App\Models\ListDocument;
use Session;

class RIPerkembanganPasienController extends Controller
{
    public function __construct()
    {
        $this->data['title'] = 'Catatan Perkembangan Pasien Rawat Inap';
    }

    public function get_ri_catatan_perkembangan()
    {
    	return view('page.ri.catatan_perkembangan', $this->data);
    }

    public function post_ri_catatan_perkembangan(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
    	$jumlah_form = $request->jumlah_form;
    	for($i = 1; $i <= $jumlah_form; $i++) {
    		$str_tanggal = 'tanggal_'.$i;
    		$str_jam = 'jam_'.$i;
    		$str_profesi = 'profesi_'.$i;
    		$str_keterangan = 'keterangan_'.$i;
    		$str_ttd = 'ttd_'.$i;
    		if(!is_null($request->$str_tanggal)) {
    			$data = new RIPerkembanganPasien;
    			$data->id_regis = $id_pasien;
    			$data->waktu = $request->$str_tanggal.'-'.$request->$str_jam;
    			$data->profesi = $request->$str_profesi;
    			$data->user = 1;
    			$data->keterangan = $request->$str_keterangan;
    			if(isset($request->$str_ttd)) {
    				$data->ttd = True;
    			}
    			else {
    				$data->ttd = False;
    			}
    			$data->save();
    		}
    	}
        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_catatan_perkembangan = True;
        $daftar_dokumen->save();
        
    	return redirect('index');
    }

    public function get_ri_catatan_perkembangan_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RIPerkembanganPasien::where('id_regis', $id_pasien)->get();
        $previous_data = '';
        $this->data['pasien'] = array();
        foreach($pasien as $key => $value) {
            $this->data['pasien'][$key] = array();
            $this->data['pasien'][$key]['id_data'] = $value->id;
            $previous_data .= $value->id.'-';
            $waktu = $value->waktu;
            $this->data['pasien'][$key]['tanggal'] = substr($waktu, 0, 10);
            $this->data['pasien'][$key]['jam'] = substr($waktu, 11);
            $this->data['pasien'][$key]['profesi'] = $value->profesi;
            $this->data['pasien'][$key]['keterangan'] = $value->keterangan;
            $this->data['pasien'][$key]['ttd'] = $value->ttd;
        }
        if(strlen($previous_data) > 0) {
            $previous_data = substr($previous_data, 0, -1);
        }
        $this->data['previous_data'] = $previous_data;
    }

    public function get_ri_catatan_perkembangan_read()
    {
        $this->get_ri_catatan_perkembangan_data();
        return view('page.ri.catatan_perkembangan_read', $this->data);
    }

    public function get_ri_catatan_perkembangan_edit()
    {
        $this->get_ri_catatan_perkembangan_data();
        return view('page.ri.catatan_perkembangan_edit', $this->data);
    }

    public function post_ri_catatan_perkembangan_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        
        //old data
        $previous_data_list = $request->previous_data;
        $previous_data = explode('-', $previous_data_list);
        foreach ($previous_data as $id) {
            $data = RIPerkembanganPasien::where('id', $id)->first();
            $str_tanggal = 'tanggal_'.$id;
            $str_jam = 'jam_'.$id;
            $str_profesi = 'profesi_'.$id;
            $str_keterangan = 'keterangan_'.$id;
            $str_ttd = 'ttd_'.$id;
            $data->id_regis = $id_pasien;
            $data->waktu = $request->$str_tanggal.'-'.$request->$str_jam;
            $data->profesi = $request->$str_profesi;
            $data->user = 1;
            $data->keterangan = $request->$str_keterangan;
            if(isset($request->$str_ttd)) {
                $data->ttd = True;
            }
            else {
                $data->ttd = False;
            }
            $data->save();
        }

        //new data
        $jumlah_form = $request->jumlah_form_new;
        for($i = 1; $i <= $jumlah_form; $i++) {
            $str_tanggal = 'tanggal_new_'.$i;
            $str_jam = 'jam_new_'.$i;
            $str_profesi = 'profesi_new_'.$i;
            $str_keterangan = 'keterangan_new_'.$i;
            $str_ttd = 'ttd_new_'.$i;
            if(!is_null($request->$str_tanggal)) {
                $data = new RIPerkembanganPasien;
                $data->id_regis = $id_pasien;
                $data->waktu = $request->$str_tanggal.'-'.$request->$str_jam;
                $data->profesi = $request->$str_profesi;
                $data->user = 1;
                $data->keterangan = $request->$str_keterangan;
                if(isset($request->$str_ttd)) {
                    $data->ttd = True;
                }
                else {
                    $data->ttd = False;
                }
                $data->save();
            }
        }
        return redirect('daftar_dokumen');
    }
}
