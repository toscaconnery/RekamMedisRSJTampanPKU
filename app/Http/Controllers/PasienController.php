<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Pasien;
use App\Models\Identifikasi;
use App\Models\RincianPasien;
use App\Models\PenanggungJawab;

class PasienController extends Controller
{
    public function put_selected_patient_id(Request $request, $id)
    {
        $request->session()->put('id_pasien', $id);
        $pasien = Pasien::where('no_rm', $id)->first();
        $request->session()->put('nama_pasien', $pasien['nama_pasien']);
        $request->session()->put('jenis_kelamin', $pasien['jenis_kelamin']);
        $request->session()->put('tanggal_lahir', $pasien['tanggal_lahir']);
        return back();
    }

    public function check_selected_patient_id(Request $request)
    {
        // dd($request);
        $data = $request->session();
        dd($data);
    }

    public function pendaftaran_pasien()
    {
    	return view('pendaftaran_pasien');
    }

    public function store_pendaftaran_pasien(Request $request) 
    {
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
        $rincian->no_telp = $request->no_telp;
        $rincian->pernikahan = $request->pernikahan;
        $rincian->agama = $request->agama;
        $rincian->pendidikan = $request->pendidikan;
        $rincian->pekerjaan = $request->pekerjaan;
        $rincian->bahasa = $request->bahasa;
        $rincian->nama_ayah = $request->nama_ayah;
        $rincian->nama_ibu = $request->nama_ibu;
        $rincian->budaya = $request->budaya;
        $rincian->alamat = $request->alamat;
        $rincian->rt = $request->rt;
        $rincian->rw = $request->rw;
        $rincian->perubahan_alamat = $request->perubahan_alamat;
        $rincian->perubahan_rt = $request->perubahan_rt;
        $rincian->perubahan_rw = $request->perubahan_rw;
        $rincian->save();

        $identifikasi = new Identifikasi;
        $identifikasi->no_rm = $request->no_rm;
        $identifikasi->save();

        $index = 0;
        foreach($request->nama_pj as $nama) {
            if(!empty($request->nama_pj[$index]) and !empty($request->alamat_pj[$index]) and !empty($request->hubungan_pj[$index]) and !empty($request->no_telp_pj[$index])) {
                $pj = new PenanggungJawab;
                $pj->id_regis = $identifikasi->id;
                $pj->nama = $request->nama_pj[$index];
                $pj->alamat = $request->alamat_pj[$index];
                $pj->hubungan = $request->hubungan_pj[$index];
                $pj->no_telp = $request->no_telp_pj[$index];
                $pj->save();
            }
            $index++;
        }

        return redirect('index');
    }
}
