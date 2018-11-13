<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJPerkembanganPasien;
use Session;

class RJPerkembanganPasienController extends Controller
{
    public function __construct()
    {
        $this->data['title'] = 'Catatan Perkembangan Pasien Rawat Jalan';
    }

    public function get_rj_perkembangan_pasien()
    {
    	return view('page.rj.perkembangan_pasien', $this->data);
    }

    public function post_rj_perkembangan_pasien(Request $request)
    {
    	$jumlah_form = $request->jumlah_form;
        $id_pasien = Session::get('id_pasien');
    	for($i = 1; $i <= $jumlah_form; $i++) {
    		$str_tanggal = 'tanggal_'.$i;
    		$str_jam = 'jam_'.$i;
    		$str_profesi = 'profesi_'.$i;
    		$str_keterangan = 'keterangan_'.$i;
    		$str_ttd = 'ttd_'.$i;
    		if(!is_null($request->$str_tanggal)) {
    			$data = new RJPerkembanganPasien;
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
    	return redirect('index');
    }

    public function get_rj_perkembangan_pasien_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RJPerkembanganPasien::where('id_regis', $id_pasien)->get();
        $this->data['pasien'] = array();
        $previous_id = '';
        foreach ($pasien as $key => $value) {
            $this->data['pasien'][$key] = array();
            $this->data['pasien'][$key]['id_data'] = $value->id;
            $waktu = $value->waktu;
            $this->data['pasien'][$key]['tanggal'] = substr($waktu, 0, 10);
            $this->data['pasien'][$key]['jam'] = substr($waktu, 11);
            $this->data['pasien'][$key]['profesi'] = $value->profesi;
            $this->data['pasien'][$key]['user'] = $value->user;
            $this->data['pasien'][$key]['keterangan'] = $value->keterangan;
            $this->data['pasien'][$key]['ttd'] = $value->ttd;
            $previous_id .= $value->id.'-';
        }
        if(strlen($previous_id) > 0) {
            $previous_id = substr($previous_id, 0, -1);
        }
        $this->data['previous_id'] = $previous_id;
        
    }

    public function get_rj_perkembangan_pasien_read()
    {
        $this->get_rj_perkembangan_pasien_data();
        return view('page.rj.perkembangan_pasien_read', $this->data);
    }

    public function get_rj_perkembangan_pasien_edit()
    {
        $this->get_rj_perkembangan_pasien_data();
        return view('page.rj.perkembangan_pasien_edit', $this->data);
    }

    public function post_rj_perkembangan_pasien_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        //old
        $previous_id = $request->previous_id;
        $explode = explode('-', $previous_id);
        foreach ($explode as $key => $value) {
            $str_tanggal = 'tanggal_'.$value;
            $str_jam = 'jam_'.$value;
            $str_profesi = 'profesi_'.$value;
            $str_keterangan = 'keterangan_'.$value;
            $str_ttd = 'ttd_'.$value;
            
            $data = RJPerkembanganPasien::where('id', $value)->first();
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

        //new
        $jumlah_form = $request->jumlah_form_new;
        for($i = 1; $i <= $jumlah_form; $i++) {
            $str_tanggal = 'tanggal_new_'.$i;
            $str_jam = 'jam_new_'.$i;
            $str_profesi = 'profesi_new_'.$i;
            $str_keterangan = 'keterangan_new_'.$i;
            $str_ttd = 'ttd_new_'.$i;
            if(!is_null($request->$str_tanggal)) {
                $data = new RJPerkembanganPasien;
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
    }
}
