<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIInstruksiDoNotResucitate;
use Session;

class RIInstruksiDoNotResucitateController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'INTRUKSI JANGAN DILAKUKAN RESUSITASI (DO NOT RESUCITATE)';
    }

    public function get_ri_instruksi_do_not_resucitate()
    {
    	return view('page.ri.instruksi_do_not_resucitate', $this->data);
    }

    public function post_ri_instruksi_do_not_resucitate(Request $request)
    {
    	$data = new RIInstruksiDoNotResucitate;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->nama_pasien = $request->nama_pasien;
    	$data->tanggal_lahir = $request->tanggal_lahir;
    	$data->alamat = $request->alamat;
    	$data->dokter = $request->dokter;
    	$data->save();

    	return redirect('daftar_dokumen');

    }

    public function get_ri_instruksi_do_not_resucitate_read()
    {
        $pasien = RIInstruksiDoNotResucitate::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['nama_pasien'] = $pasien->nama_pasien;
        $this->data['tanggal_lahir'] = $pasien->tanggal_lahir;
        $this->data['alamat'] = $pasien->alamat;
        $this->data['dokter'] = $pasien->dokter;

        return view('page.ri.instruksi_do_not_resucitate_read', $this->data);

    }
}
