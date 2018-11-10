<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IGDCatatanPerkembangan;
use App\Models\ListDocument;
use Session;

class IGDCatatanPerkembanganController extends Controller
{
	public function __construct()
	{
		$this->data['title'] = 'Catatan Perkembangan';
	}

    public function get_igd_catatan_perkembangan()
    {
    	return view('page.igd.catatan_perkembangan', $this->data);
    }

    public function post_igd_catatan_perkembangan(Request $request)
    {
    	$jumlah_form = $request->jumlah_form;
        $id_pasien = Session::get('id_pasien');
    	for($i = 1; $i <= $jumlah_form; $i++) {
    		$str_tanggal = 'tanggal_'.$i;
    		$str_jam = 'jam_'.$i;
    		$str_profesi_bagian = 'profesi_bagian_'.$i;
    		$str_hasil = 'hasil_'.$i;
    		$str_verifikasi = 'verifikasi_'.$i;
    		if(!is_null($request->$str_tanggal)) {
    			$data = new IGDCatatanPerkembangan;
    			$data->id_regis = $id_pasien;
    			$data->tanggal = $request->$str_tanggal;
    			$data->jam = $request->$str_jam;
    			$data->profesi_bagian = $request->$str_profesi_bagian;
    			$data->hasil = $request->$str_hasil;
    			if(isset($request->$str_verifikasi)) {
    				$data->verifikasi = True;
    			}
    			$data->save();
    		}
    	}

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->igd_catatan_perkembangan = True;
        $daftar_dokumen->save();

    	return back();
    }

    public function get_igd_catatan_perkembangan_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = IGDCatatanPerkembangan::where('id_regis', $id_pasien)->get();

        if(count($pasien) > 0) {
            $this->data['previous_id'] = '';
            $this->data['pasien'] = array();
            foreach($pasien as $key => $value) {
                $this->data['pasien'][$key] = array();
                $this->data['pasien'][$key]['tanggal'] = $value->tanggal;
                $this->data['pasien'][$key]['jam'] = $value->jam;
                $this->data['pasien'][$key]['profesi_bagian'] = $value->profesi_bagian;
                $this->data['pasien'][$key]['hasil'] = $value->hasil;
                $this->data['pasien'][$key]['verifikasi'] = $value->verifikasi;
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

    public function get_igd_catatan_perkembangan_read()
    {
        $this->get_igd_catatan_perkembangan_data();
        return view('page.igd.catatan_perkembangan_read', $this->data);
    }

    public function get_igd_catatan_perkembangan_edit()
    {
        $this->get_igd_catatan_perkembangan_data();
        return view('page.igd.catatan_perkembangan_edit', $this->data);
    }

    public function post_igd_catatan_perkembangan_edit(Request $request)
    {
        //old data
        $previous_id = $request->previous_id;
        $previous_id_array = explode('-', $previous_id);
        $id_pasien = Session::get('id_pasien');
        foreach($previous_id_array as $key => $value) {
            $data = IGDCatatanPerkembangan::where('id_regis', $id_pasien)->where('id', $value)->first();
            $str_tanggal = 'tanggal_'.$value;
            $str_jam = 'jam_'.$value;
            $str_profesi_bagian = 'profesi_bagian_'.$value;
            $str_hasil = 'hasil_'.$value;
            $str_verifikasi = 'verifikasi_'.$value;
            $data->tanggal = $request->$str_tanggal;
            $data->jam = $request->$str_jam;
            $data->profesi_bagian = $request->$str_profesi_bagian;
            $data->hasil = $request->$str_hasil;
            if(isset($request->$str_verifikasi)) {
                $data->verifikasi = True;
            }
            $data->save();
        }

        //new data
        $jumlah_form = $request->jumlah_form_new;
        if($jumlah_form > 0) {
            for($i = 1; $i <= $jumlah_form; $i++) {
                $str_tanggal = 'tanggal_new_'.$i;
                $str_jam = 'jam_new_'.$i;
                $str_profesi_bagian = 'profesi_bagian_'.$i;
                $str_hasil = 'hasil_new_'.$i;
                $str_verifikasi = 'verifikasi_new_'.$i;           
                if(!is_null($request->$str_tanggal)) {
                    $data = new IGDCatatanPerkembangan;
                    $data->id_regis = $id_pasien;
                    $data->tanggal = $request->$str_tanggal;
                    $data->jam = $request->$str_jam;
                    $data->profesi_bagian = $request->$str_profesi_bagian;
                    $data->hasil = $request->$str_hasil;
                    if(isset($request->$str_verifikasi)) {
                        $data->verifikasi = True;
                    }
                    $data->save();
                }
            }
        }
        return redirect('daftar_dokumen');
    }
}
