<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pasien;

class PasienController extends Controller
{
    public function pendaftaran_pasien() {
    	return view('pendaftaran_pasien');
    }

    public function store_pendaftaran_pasien(Request $request) {
    	$nama_pasien = $request->nama_pasien;
    	$tanggal_lahir = $request->tanggal_lahir;
    	$jenis_kelamin = $request->jenis_kelamin;
    	$pasien = new Pasien;
    	$pasien->nama_pasien = $nama_pasien;
    	$pasien->tanggal_lahir = $tanggal_lahir;
    	$pasien->jenis_kelamin = $jenis_kelamin;
    	$pasien->save();
    	return redirect('index');
    }

    public function identifikasi_pasien_baru_1()
    {
        return view('identifikasi_pasien_baru_1');
    }

    public function identifikasi_pasien_baru_2(Request $request)
    {
        $pasien = new Pasien;
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->save();

        $saved_data = DB::table('pasien')->where('nama_pasien', $request->nama_pasien)
                        ->where('tanggal_lahir', $request->tanggal_lahir)->first();
        //dd($saved_data);

        $this->data['no_rm'] = $saved_data->no_rm;
        $this->data['tanggal_pengisian'] = $saved_data->created_at;
        $this->data['nama_pasien'] = $request->nama_pasien;
        $this->data['tanggal_lahir'] = $request->tanggal_lahir;
        $this->data['jenis_kelamin'] = $request->jenis_kelamin;

        return view('identifikasi_pasien_baru_2', $this->data);
    }

    public function identifikasi_pasien_baru_final(Request $request)
    {
        $rincian = new RincianPasien;
        $rincian->no_rm = $request->no_rm;
        
    }
}
