<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIEvaluasiKeperawatan;
use Session;
class RIEvaluasiKeperawatanController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'Evaluasi Keperawatan';
    }

    public function get_ri_evaluasi_keperawatan()
    {
    	return view('page.ri.evaluasi_keperawatan', $this->data);
    }

    public function post_ri_evaluasi_keperawatan(Request $request)
    {
    	$jumlah_form = $request->jumlah_form;
    	for($i = 1; $i <= $jumlah_form; $i++) {
    		$str_tanggal = 'tanggal_'.$i;
    		$str_jam = 'jam_'.$i;
    		$str_implementasi = 'implementasi_'.$i;
    		$str_evaluasi = 'evaluasi_'.$i;
    		$str_nama_user = 'nama_user_'.$i;
    		if(!is_null($request->$str_tanggal)) {
    			$data = new RIEvaluasiKeperawatan;
                if(Session::has('id_pasien')) {
                    $id_pasien = Session::get('id_pasien');
                }
                else {
                    $id_pasien = 1;
                }
    			$data->id_regis = $id_pasien;
    			$data->tanggal = $request->$str_tanggal;
    			$data->jam = $request->$str_jam;
    			$data->evaluasi = $request->$str_evaluasi;
    			$data->implementasi = $request->$str_implementasi;
    			$data->nama_user = $request->$str_nama_user;
    			$data->save();
    		}
    	}
    	return back();
    }
}
