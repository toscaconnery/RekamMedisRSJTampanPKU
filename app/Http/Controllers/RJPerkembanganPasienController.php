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
        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
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

     public function get_rj_perkembangan_pasien_read()
    {
        $jumlah_form = $request->jumlah_form;
        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
        for($i = 1; $i <= $jumlah_form; $i++) {
            $str_tanggal = 'tanggal_'.$i;
            $str_jam = 'jam_'.$i;
            $str_profesi = 'profesi_'.$i;
            $str_keterangan = 'keterangan_'.$i;
            $str_ttd = 'ttd_'.$i;
            if(!is_null($request->$str_tanggal)) {

                $pasien = RJPerkembanganPasien::where('id', 1)->first();
        
                $this->data['id_regis'] = $pasien->id_regis;
                $this->data['waktu'] = $pasien->waktu;
                $this->data['profesi'] = $pasien->profesi;
                $this->data['user'] = $pasien->user;
                $this->data['keterangan'] = $pasien->keterangan;
                
                //how ttd
            }
        }
       return view('page.rj.catatan_perkembangan_read', $this->data);
    }
}
