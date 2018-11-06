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

    public function get_ri_penggunaan_obat()
    {
        $pasien = RIPenggunaanObat::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;

        $this->data['ruang_bangsal'] = $pasien->ruang_bangsal;
        $this->data['no_reg'] = $pasien->no_reg;
        $this->data['tanggal_masuk'] = $pasien->tanggal_masuk;
        $this->data['tanggal_keluar'] = $pasien->tanggal_keluar;
        $this->data['dokter'] = $pasien->diagnosis;
        $this->data['riwayat_alergi'] = $pasien->riwayat_alergi;
        $this->data['konsumen'] = $pasien->konsumen;
        $this->data['obat'] = $pasien->obat;
        $this->data['jumlah'] = $pasien->jumlah;
        $this->data['tanggal_penggunaan'] = $pasien->tanggal_penggunaan;

        if($pasien->waktu_penggunaan_1 == True) {
            $this->data['waktu_penggunaan_1'] = $pasien->waktu_penggunaan_1;
        }
        if($pasien->waktu_penggunaan_2 == True) {
            $this->data['waktu_penggunaan_2'] = $pasien->waktu_penggunaan_2;
        }
        if($pasien->waktu_penggunaan_3 == True) {
            $this->data['waktu_penggunaan_3'] = $pasien->waktu_penggunaan_3;
        }
        if($pasien->waktu_penggunaan_4 == True) {
            $this->data['waktu_penggunaan_4'] = $pasien->waktu_penggunaan_4;
        }

        $this->data['keterangan'] = $pasien->keterangan;

        return view('page.ri.penggunaan_obat_read', $this->data);
    }
}
