<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIPenggunaanObat;
use App\Models\ListDocument;
use Session;

class RIPenggunaanObatController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'CATATAN PENGGUNAAN OBAT (CPO)';
    }

    public function get_ri_penggunaan_obat()
    {
    	return view('page.ri.penggunaan_obat', $this->data);
    }

    public function post_ri_penggunaan_obat(Request $request)
    {
    	$data = new RIPenggunaanObat;
    	$id_pasien = Session::get('id_pasien');
    	$data->id_regis = $id_pasien;
    	$data->ruang_bangsal = $request->ruang_bangsal;
        $data->no_reg = $request->no_reg;
        $data->tanggal_masuk = $request->tanggal_masuk;
        $data->tanggal_keluar = $request->tanggal_keluar;
        $data->diagnosis = $request->diagnosis;
        $data->dokter = $request->dokter;
        $data->riwayat_alergi = $request->riwayat_alergi;
        $data->konsumen = $request->konsumen;
        $data->obat = $request->obat;
        $data->jumlah = $request->jumlah;
        $data->tanggal_penggunaan = $request->tanggal_penggunaan;
        if(isset($request->waktu_pengunaan_1)) {
        	$data->waktu_penggunaan_1 = True;

        }
        if(isset($request->waktu_pengunaan_2)) {
        	$data->waktu_penggunaan_2 = True;

        }
        if(isset($request->waktu_pengunaan_3)) {
        	$data->waktu_penggunaan_3 = True;

        }
        if(isset($request->waktu_pengunaan_4)) {
        	$data->waktu_penggunaan_4 = True;

        }
        $data->keterangan = $request->keterangan;
        $data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->ri_penggunaan_obat = True;
        $daftar_dokumen->save();

    	return redirect('daftar_dokumen');
    }
}
