<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIMonitoringObservasi;
use Session;

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
        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
    	$jumlah_form = $request->jumlah_form;
    	for($i = 1; $i <= $jumlah_form; $i++) {
    		$str_tanggal = 'tanggal_'.$i;
    		$str_jam = 'jam_'.$i;
    		$str_hasil_monitoring = 'hasil_monitoring_'.$i;
    		$str_implementasi = 'implementasi_'.$i;
    		$str_ttd = 'ttd_'.$i;
    		if(!is_null($request->$str_tanggal)) {
    			$data = new RIMonitoringObservasi;
    			$data->id_regis = $id_pasien;
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
    	return back();
    }

    public function get_ri_monitoring_observasi_read()
    {
        // bagaimana disini?


        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
        $jumlah_form = $request->jumlah_form;
        for($i = 1; $i <= $jumlah_form; $i++) {
            $str_tanggal = 'tanggal_'.$i;
            $str_jam = 'jam_'.$i;
            $str_hasil_monitoring = 'hasil_monitoring_'.$i;
            $str_implementasi = 'implementasi_'.$i;
            $str_ttd = 'ttd_'.$i;
            if(!is_null($request->$str_tanggal)) {
                $pasien = RIMonitoringObservasi::where('id', 1)->first();
                $this->data['id_regis'] = $pasien->id_regis;
                $this->data['tanggal'] = $pasien->tanggal;
                $this->data['jam'] = $pasien->jam;
                $this->data['hasil_monitoring'] = $pasien->hasil_monitoring;
                $this->data['implementasi'] = $pasien->implementasi;
                if(isset($pasien->ttd))
                {
                    $this->data['ttd'] = $pasien->ttd;
                }
            }
        }
        return view('page.ri.monitoring_observasi_read', $this->data);
    }
}
