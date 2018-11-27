<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIMonitoringObservasi;
use App\Models\ListDocument;
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
        $id_pasien = Session::get('id_pasien');
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
                else {
                    $data->ttd = False;
                }
    			$data->save();
    		}
    	}

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->first();
        $daftar_dokumen->ri_monitoring_observasi = True;
        $daftar_dokumen->save();
    	return redirect('ri_monitoring_observasi_read');
    }

    public function get_ri_monitoring_observasi_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RIMonitoringObservasi::where('id_regis', $id_pasien)->get();
        $this->data['pasien'] = array();
        $previous_data = '';
        foreach ($pasien as $key => $value) {
            $this->data['pasien'][$key] = array();
            $this->data['pasien'][$key]['id_data'] = $value->id;
            $this->data['pasien'][$key]['tanggal'] = $value->tanggal;
            $this->data['pasien'][$key]['jam'] = $value->jam;
            $this->data['pasien'][$key]['hasil_monitoring'] = $value->hasil_monitoring;
            $this->data['pasien'][$key]['implementasi'] = $value->implementasi;
            $this->data['pasien'][$key]['ttd'] = $value->ttd;
            $previous_data .= $value->id.'-';
        }
        if(strlen($previous_data) > 0) {
            $previous_data = substr($previous_data, 0, -1);
        }
        $this->data['previous_data'] = $previous_data;
    }

    public function get_ri_monitoring_observasi_read()
    {
        $this->get_ri_monitoring_observasi_data();
        return view('page.ri.monitoring_observasi_read', $this->data);
    }

    public function get_ri_monitoring_observasi_edit()
    {
        $this->get_ri_monitoring_observasi_data();
        return view('page.ri.monitoring_observasi_edit', $this->data);
    }

    public function post_ri_monitoring_observasi_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        //old
        $list_previous = $request->previous_data;
        $previous_data = explode('-', $list_previous);
        foreach ($previous_data as $key => $value) {
            $data = RIMonitoringObservasi::where('id', $value)->first();
            $str_tanggal = 'tanggal_'.$value;
            $str_jam = 'jam_'.$value;
            $str_hasil_monitoring = 'hasil_monitoring_'.$value;
            $str_implementasi = 'implementasi_'.$value;
            $str_ttd = 'ttd_'.$value;
            if(!is_null($request->$str_tanggal)) {
                $data->tanggal = $request->$str_tanggal;
                $data->jam = $request->$str_jam;
                $data->hasil_monitoring = $request->$str_hasil_monitoring;
                $data->implementasi = $request->$str_implementasi;
                if(isset($request->$str_ttd)) {
                    $data->ttd = True;
                }
                else {
                    $data->ttd = False;
                }
                $data->save();
            }
            else {
                $data->delete();
            }
        }

        //new
        $jumlah_form = $request->jumlah_form;
        for($i = 1; $i <= $jumlah_form; $i++) {
            $str_tanggal = 'tanggal_new_'.$i;
            $str_jam = 'jam_new_'.$i;
            $str_hasil_monitoring = 'hasil_monitoring_new_'.$i;
            $str_implementasi = 'implementasi_new_'.$i;
            $str_ttd = 'ttd_new_'.$i;
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
                else {
                    $data->ttd = False;
                }
                $data->save();
            }
        }
        return redirect('ri_monitoring_observasi_read');
    }
}
