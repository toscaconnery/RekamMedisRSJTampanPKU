<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJIzinVCTHIV;
use Session;

class RJIzinVCTHIVController extends Controller
{
	public function __construct()
	{
		$this->data['title'] = 'Transfer Pasien Internal Rumah Sakit';
	}

    public function get_rj_izin_vct_hiv()
    {
    	return view('page.rj.izin_vct_hiv', $this->data);
    }

    public function post_rj_izin_vct_hiv(Request $request)
    {
    	$data = new RJIzinVCTHIV;
        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
    	$data->id_regis = $id_pasien;
        $data->nama_klien = $request->nama_klien;
        $data->konselor = $request->konselor;
        $data->tanggal = $request->tanggal;
        $data->pemberi_izin = $request->pemberi_izin;
        $data->hubungan = $request->hubungan;
        $data->save();

        return back();
    }

    public function get_rj_izin_vct_hiv_read()
    {
    	$pasien = RJIzinVCTHIV::where('id', 1)->first();
        
    	$this->data['id_regis'] = $pasien->id_regis;
		$this->data['nama_klien'] = $pasien->nama_klien;
		$this->data['konselor'] = $pasien->konselor;
		$this->data['tanggal'] = $pasien->tanggal;
		$this->data['pemberi_izin'] = $pasien->pemberi_izin;
		$this->data['hubungan'] = $pasien->hubungan;
    	return view('page.rj.izin_vct_hiv_read', $this->data);
    }
}
