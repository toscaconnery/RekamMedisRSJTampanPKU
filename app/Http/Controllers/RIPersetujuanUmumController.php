<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPersetujuanUmum;
use App\Models\ListDocument;
use Session;

class RIPersetujuanUmumController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'PERSETUJUAN UMUM';
    }

    public function get_ri_persetujuan_umum()
    {
    	return view('page.ri.persetujuan_umum', $this->data);
    }

    public function post_ri_persetujuan_umum(Request $request)
    {
    	$data = new RIPersetujuanUmum;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->nama_petugas = $request->nama_petugas;
    	$data->nama_pasien_keluarga = $request->nama_pasien_keluarga;
    	$data->save();

		$daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->ri_persetujuan_umum = True;
        $daftar_dokumen->save();

		return redirect('daftar_dokumen');
    }
}
