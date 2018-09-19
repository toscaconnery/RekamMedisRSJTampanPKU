<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenundaanPelayanan;

class PenundaanPelayananController extends Controller
{
    public function get_penundaan_pelayanan()
    {
    	return view('page.penundaan_pelayanan');
    }

    public function post_penundaan_pelayanan(Request $request)
    {
    	$data = new PenundaanPelayanan;
    	$data->id_regis = 1;
    	$data->nama = $request->nama;
    	$data->umur = $request->umur;
    	$data->hubungan = $request->hubungan;
    	$data->poli_ruangan = $request->poli_ruangan;
    	$data->dokter_pengirim = $request->dokter_pengirim;
    	$data->pelayanan_akan_dilakukan = $request->pelayanan_akan_dilakukan;
    	if(isset($request->dokter_berhalangan)) {
    		$data->dokter_berhalangan = True;
    	}
    	if(isset($request->kerusakan_alat)) {
    		$data->kerusakan_alat = True;
    	}
    	if(isset($request->pemberian_obat_farmasi)) {
    		$data->pemberian_obat_farmasi = True;
    	}
    	if(isset($request->hasil_pemeriksaan_radiologi)) {
    		$data->hasil_pemeriksaan_radiologi = True;
    	}
    	if(isset($request->hasil_pemeriksaan_laboratorium)) {
    		$data->hasil_pemeriksaan_laboratorium = True;
    	}
    	if(isset($request->lainnya)) {
    		$data->sebab_lainnya = $request->sebab_lainnya;
    	}
    	$data->alternatif = $request->alternatif;
    	$data->jadwal_penundaan = $request->jadwal_penundaan;
    	$data->rs_tujuan = $request->rs_tujuan;
    	$data->save();
    	return back();
    }
}
