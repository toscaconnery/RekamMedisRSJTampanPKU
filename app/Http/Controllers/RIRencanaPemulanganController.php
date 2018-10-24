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
}
