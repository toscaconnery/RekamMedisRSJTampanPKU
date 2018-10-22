<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IGDCatatanPerkembangan;
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
        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
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
    	return back();
    }

    public function get_igd_catatan_perkembangan_read()
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
            $str_profesi_bagian = 'profesi_bagian_'.$i;
            $str_hasil = 'hasil_'.$i;
            $str_verifikasi = 'verifikasi_'.$i;
            if(!is_null($request->$str_tanggal)) {
                $pasien = IGDCatatanPerkembangan::where('id', 1)->first();
        
                $this->data['id_regis'] = $pasien->id_regis;
                
                $this->data['tanggal'] = $pasien->tanggal;
                $this->data['jam'] = $pasien->jam;
                $this->data['profesi_bagian'] = $pasien->profesi_bagian;
                $this->data['hasil'] = $pasien->hasil;

                if($pasien->verifikasi)
                {
                    $this->data['verifikasi'] = $pasien->verifikasi;
                }
            }
        }
        return view('page.igd.catatan_perkembangan_read', $this->data);
    }
}
