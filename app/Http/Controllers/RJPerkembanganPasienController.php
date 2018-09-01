<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJPerkembanganPasien;

class RJPerkembanganPasienController extends Controller
{
    public function get_rj_perkembangan_pasien()
    {
    	return view('page.rj.perkembangan_pasien');
    }

    public function post_rj_perkembangan_pasien(Request $request)
    {
    	$jumlah_form = $request->jumlah_form;
    	for($i = 1; $i <= $jumlah_form; $i++) {
    		$str_tanggal = 'tanggal_'.$i;
    		$str_jam = 'jam_'.$i;
    		$str_profesi = 'profesi_'.$i;
    		$str_keterangan = 'keterangan_'.$i;
    		$str_ttd = 'ttd_'.$i;
    		if(!is_null($request->$str_tanggal)) {
    			$data = new RJPerkembanganPasien;
    			$data->id_regis = 1;
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
}
