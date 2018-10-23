<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IGDCatatanKemajuan;
use Session;

class IGDCatatanKemajuanController extends Controller
{
	public function __construct()
	{
		$this->data['title'] = 'Catatan Kemajuan';
	}

    public function get_igd_catatan_kemajuan()
    {
    	return view('page.igd.catatan_kemajuan', $this->data);
    }

    public function post_igd_catatan_kemajuan(Request $request)
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
    		$str_catatan_kemajuan = 'catatan_kemajuan_'.$i;
    		$str_tindakan_terapi = 'tindakan_terapi_'.$i;
    		$str_nama_user = 'nama_user_'.$i;    		
    		if(!is_null($request->$str_tanggal)) {
    			$data = new IGDCatatanKemajuan;
    			$data->id_regis = $id_pasien;
    			$data->tanggal = $request->$str_tanggal;
    			$data->jam = $request->$str_jam;
    			$data->catatan_kemajuan = $request->$str_catatan_kemajuan;
    			$data->tindakan_terapi = $request->$str_tindakan_terapi;
    			$data->nama_user = $request->$str_nama_user;
    			$data->save();
    		}
    	}
    	return back();
    }

    public function get_igd_catatan_kemajuan_read()
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
            $str_catatan_kemajuan = 'catatan_kemajuan_'.$i;
            $str_tindakan_terapi = 'tindakan_terapi_'.$i;
            $str_nama_user = 'nama_user_'.$i;           
            if(!is_null($request->$str_tanggal)) {
                
                $pasien = IGDCatatanKemajuan::where('id', 1)->first();
        
                $this->data['id_regis'] = $pasien->id_regis;
                $this->data['tanggal'] = $pasien->tanggal;
                $this->data['jam'] = $pasien->jam;
                $this->data['catatan_kemajuan'] = $pasien->catatan_kemajuan;
                $this->data['tindakan_terapi'] = $pasien->tindakan_terapi;
                $this->data['nama_user'] = $pasien->nama_user;

            }
        }
        return view('page.igd.catatan_kemajuan_read', $this->data);
    }
}
