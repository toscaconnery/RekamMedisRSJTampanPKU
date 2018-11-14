<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJIzinVCTHIV;
use App\Models\ListDocument;
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
        $id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
        $data->nama_klien = $request->nama_klien;
        $data->konselor = $request->konselor;
        $data->tanggal = $request->tanggal;
        $data->pemberi_izin = $request->pemberi_izin;
        $data->hubungan = $request->hubungan;
        $data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->rj_izin_vct_hiv = True;
        $daftar_dokumen->save();

        return redirect('daftar_dokumen');
    }

    public function get_rj_izin_vct_hiv_data()
    {
        $id_pasien = Session::get('id_pasien');
    	$pasien = RJIzinVCTHIV::where('id_regis', $id_pasien)->first();
    	$this->data['id_regis'] = $pasien->id_regis;
		$this->data['nama_klien'] = $pasien->nama_klien;
		$this->data['konselor'] = $pasien->konselor;
		$this->data['tanggal'] = $pasien->tanggal;
		$this->data['pemberi_izin'] = $pasien->pemberi_izin;
		$this->data['hubungan'] = $pasien->hubungan;
    }

    public function get_rj_izin_vct_hiv_read()
    {
        $this->get_rj_izin_vct_hiv_data();
        return view('page.rj.izin_vct_hiv_read', $this->data);
    }

    public function get_rj_izin_vct_hiv_edit(Request $request)
    {
        $this->get_rj_izin_vct_hiv_data();
        return view('page.rj.izin_vct_hiv_edit', $this->data);
    }

    public function post_rj_izin_vct_hiv_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RJIzinVCTHIV::where('id_regis', $id_pasien)->first();
        $data->konselor = $request->konselor;
        $data->pemberi_izin = $request->pemberi_izin;
        $data->hubungan = $request->hubungan;
        $data->save();

        return redirect('daftar_dokumen');

    }
}
