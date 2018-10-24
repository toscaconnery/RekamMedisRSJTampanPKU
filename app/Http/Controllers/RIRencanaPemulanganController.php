<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIRencanaPemulangan;
use App\Models\ListDocument;
use Session;
class RIRencanaPemulanganController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'RENCANA PEMULANGAN PASIEN (DISCHARGE PLANNING)';
    }

    public function get_ri_rencana_pemulangan()
    {
    	return view('page.ri.rencana_pemulangan', $this->data);
    }

    public function post_ri_rencana_pemulangan(Request $request)
    {
    	$data = new RIRencanaPemulangan;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->diagnosis_medis = $request->diagnosis_medis;
        $data->ruangan = $request->ruangan;
        $data->a1 = $request->a1;
        $data->a2 = $request->a2;
        $data->a3 = $request->a3;
        $data->a4 = $request->a4;
        $data->a5 = $request->a5;
        $data->a6 = $request->a6;
        $data->a7 = $request->a7;
        $data->a8 = $request->a8;
        $data->a9 = $request->a9;
        $data->a10 = $request->a10;
        $data->a11 = $request->a11;
        $data->a12 = $request->a12;
        $data->a13 = $request->a13;
        $data->keterangan_a4 = $request->keterangan_a4;
        $data->keterangan_a5 = $request->keterangan_a5;
        $data->keterangan_a6 = $request->keterangan_a6;
        $data->keterangan_a7 = $request->keterangan_a7;
        $data->keterangan_a8 = $request->keterangan_a8;
        $data->keterangan_a9 = $request->keterangan_a9;
        $data->keterangan_a10 = $request->keterangan_a10;
        $data->keterangan_a11 = $request->keterangan_a11;
        $data->keterangan_a12 = $request->keterangan_a12;
        $data->keterangan_a13 = $request->keterangan_a13;
        $data->save();

    	$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->ri_rencana_pemulangan = True;
        $daftar_dokumen->save();

        return redirect('daftar_dokumen');
    }

    public function get_ri_rencana_pemulangan_read()
    {
        $pasien = RIRencanaPemulangan::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['diagnosis_medis'] = $pasien->diagnosis_medis;
        $this->data['ruangan'] = $pasien->ruangan;
        $this->data['a1'] = $pasien->a1;
        $this->data['a2'] = $pasien->a2;
        $this->data['a3'] = $pasien->a3;
        $this->data['a4'] = $pasien->a4;
        $this->data['a5'] = $pasien->a5;
        $this->data['a6'] = $pasien->a6;
        $this->data['a7'] = $pasien->a7;
        $this->data['a8'] = $pasien->a8;
        $this->data['a9'] = $pasien->a9;
        $this->data['a10'] = $pasien->a10;
        $this->data['a11'] = $pasien->a11;
        $this->data['a12'] = $pasien->a12;
        $this->data['a13'] = $pasien->a13;
        $this->data['keterangan_a4'] = $pasien->keterangan_a4;
        $this->data['keterangan_a5'] = $pasien->keterangan_a5;
        $this->data['keterangan_a6'] = $pasien->keterangan_a6;
        $this->data['keterangan_a7'] = $pasien->keterangan_a7;
        $this->data['keterangan_a8'] = $pasien->keterangan_a8;
        $this->data['keterangan_a9'] = $pasien->keterangan_a9;
        $this->data['keterangan_a10'] = $pasien->keterangan_a10;
        $this->data['keterangan_a11'] = $pasien->keterangan_a11;
        $this->data['keterangan_a12'] = $pasien->keterangan_a12;
        $this->data['keterangan_a13'] = $pasien->keterangan_a13;

        return view('page.ri.rencana_pemulangan_read', $this->data);
    }
}
