<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJIzinVCTHIV;

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
    	$data->id_regis = 1;
        $data->nama_klien = $request->nama_klien;
        $data->konselor = $request->konselor;
        $data->tanggal = $request->tanggal;
        $data->pemberi_izin = $request->pemberi_izin;
        $data->hubungan = $request->hubungan;
        $data->save();

        return back();
    }

}
