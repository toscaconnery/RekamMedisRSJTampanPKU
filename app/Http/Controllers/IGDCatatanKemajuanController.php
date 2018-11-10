<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IGDCatatanKemajuan;
use App\Models\ListDocument;
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
        $id_pasien = Session::get('id_pasien');
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

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->igd_catatan_kemajuan = True;
        $daftar_dokumen->save();

    	return redirect('daftar_dokumen');
    }

    public function get_igd_catatan_kemajuan_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = IGDCatatanKemajuan::where('id_regis', $id_pasien)->get();
        if(count($pasien) > 0) {
            $this->data['previous_id'] = '';
            $this->data['pasien'] = array();
            foreach($pasien as $key => $value) {
                $this->data['pasien'][$key] = array();
                $this->data['pasien'][$key]['tanggal'] = $value->tanggal;
                $this->data['pasien'][$key]['jam'] = $value->jam;
                $this->data['pasien'][$key]['catatan_kemajuan'] = $value->catatan_kemajuan;
                $this->data['pasien'][$key]['tindakan_terapi'] = $value->tindakan_terapi;
                $this->data['pasien'][$key]['nama_user'] = $value->nama_user;
                $this->data['pasien'][$key]['id_data'] = $value->id;
                $this->data['pasien'][$key]['id_regis'] = $value->id_regis;
                $this->data['previous_id'] .= $value->id.'-';
            }
            $this->data['previous_id'] = substr($this->data['previous_id'], 0, -1);

        }
        else {
            //data tidak ditemukan
            return redirect('daftar_dokumen');
        }
        
    }

    public function get_igd_catatan_kemajuan_read()
    {
        $this->get_igd_catatan_kemajuan_data();
        return view('page.igd.catatan_kemajuan_read', $this->data);
    }

    public function get_igd_catatan_kemajuan_edit()
    {
        $this->get_igd_catatan_kemajuan_data();
        return view('page.igd.catatan_kemajuan_edit', $this->data);
    }

    public function post_igd_catatan_kemajuan_edit(Request $request)
    {
        //old data
        $previous_id = $request->previous_id;
        $previous_id_array = explode('-', $previous_id);
        $id_pasien = Session::get('id_pasien');
        // dd($previous_id_array);
        foreach($previous_id_array as $key => $value) {
            $data = IGDCatatanKemajuan::where('id_regis', $id_pasien)->where('id', $value)->first();
            $str_tanggal = 'tanggal_'.$value;
            $str_jam = 'jam_'.$value;
            $str_catatan_kemajuan = 'catatan_kemajuan_'.$value;
            $str_tindakan_terapi = 'tindakan_terapi_'.$value;
            $str_nama_user = 'nama_user_'.$value;
            $data->tanggal = $request->$str_tanggal;
            $data->jam = $request->$str_jam;
            $data->catatan_kemajuan = $request->$str_catatan_kemajuan;
            $data->tindakan_terapi = $request->$str_tindakan_terapi;
            $data->nama_user = $request->$str_nama_user;
            $data->save();
        }
       

        //new data
        $jumlah_form = $request->jumlah_form_new;
        if($jumlah_form > 0) {
            for($i = 1; $i <= $jumlah_form; $i++) {
                $str_tanggal = 'tanggal_new_'.$i;
                $str_jam = 'jam_new_'.$i;
                $str_catatan_kemajuan = 'catatan_kemajuan_new_'.$i;
                $str_tindakan_terapi = 'tindakan_terapi_new_'.$i;
                $str_nama_user = 'nama_user_new_'.$i;           
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
        }
        return redirect('daftar_dokumen');
    }
}
