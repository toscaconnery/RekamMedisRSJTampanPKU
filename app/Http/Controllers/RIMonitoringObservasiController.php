<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIMonitoringObservasi;

class RIMonitoringObservasiController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'Monitoring dan Observasi Pasien Khusus';
    }

    public function get_ri_monitoring_observasi()
    {
    	return view('page.ri.monitoring_observasi', $this->data);
    }

    public function post_ri_monitoring_observasi(Request $request)
    {
    	$jumlah_form = $request->jumlah_form;
    	for($i = 1; $i <= $jumlah_form; $i++) {
    		$str_tanggal = 'tanggal_'.$i;
    		$str_jam = 'jam_'.$i;
    		$str_hasil_monitoring = 'hasil_monitoring_'.$i;
    		$str_implementasi = 'implementasi_'.$i;
    		$str_ttd = 'ttd_'.$i;
    		if(!is_null($request->$str_tanggal)) {
    			$data = new RIMonitoringObservasi;
    			$data->id_regis = 1;
    			$data->tanggal = $request->$str_tanggal;
    			$data->jam = $request->$str_jam;
    			$data->hasil_monitoring = $request->$str_hasil_monitoring;
    			$data->implementasi = $request->$str_implementasi;
    			if(isset($request->$str_ttd)) {
    				$data->ttd = True;
    			}
    			$data->save();
    		}
    	}
    	dd($request);
    	return back();
    }
}
