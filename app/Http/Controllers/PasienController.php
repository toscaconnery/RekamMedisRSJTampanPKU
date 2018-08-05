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
}
