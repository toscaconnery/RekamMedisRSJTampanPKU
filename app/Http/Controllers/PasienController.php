<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Pasien;
use App\Models\Identifikasi;
use App\Models\RincianPasien;
use App\Models\PenanggungJawab;
use App\Models\ListDocument;
use PDO;
use Session;

class PasienController extends Controller
{
    public function put_selected_patient_id(Request $request, $id)
    {
        // $berhasil_tersambung = False;
        // include __DIR__."\..\..\ManualConnection\ManualMySQLConnection.php";

        // if($berhasil_tersambung) {
        //     $statement = $pdo->prepare('select * from pasien_server_2 where id = '.$id);
        //     $statement->execute();
        //     $pasien = $statement->fetchAll(PDO::FETCH_OBJ)[0];

            //cek data pasien di identifikasi untuk keperluan identifikasi dan dokumen
            // $jumlah_identifikasi = Identifikasi::where('id_pasien', $pasien->id)->count();
            // if($jumlah_identifikasi == 0) {
            //     $identifikasi_baru = new Identifikasi;
            //     $identifikasi_baru->id_pasien = $pasien->id;
            //     $identifikasi_baru->save();

            //     $list_document = new ListDocument;
            //     $list_document->id_regis = $identifikasi_baru->id_pasien;
            //     $list_document->save();
            // }
        // }

        $pasien = Pasien::where('no_rm', $id)->first();
        $rincian_pasien = RincianPasien::where('no_rm', $id)->first();

        $request->session()->put('id_pasien', $pasien->no_rm);
        // $request->session()->put('no_rm', $pasien->no_rm);
        $request->session()->put('nama', $pasien->nama_pasien);
        $request->session()->put('jenis_kelamin', $pasien->jenis_kelamin);
        $request->session()->put('tanggal_lahir', $pasien->tanggal_lahir);
        $request->session()->put('alamat', $rincian_pasien->alamat);
        $request->session()->put('pekerjaan', $rincian_pasien->pekerjaan);
        $request->session()->put('pendidikan', $rincian_pasien->pendidikan);

        //sweet alert
        $request->session()->put('pasien_terpilih', 'Pasien berhasil terpilih.');

        return redirect('daftar_dokumen');
    }

    public function check_selected_patient_id(Request $request)
    {
        // dd($request);
        $data = $request->session();
        dd($data);
    }

    public function lupakan_pasien()
    {
        Session::forget('id_pasien');
        return redirect('/');
    }

    // public function pendaftaran_pasien()
    // {
    // 	return view('pendaftaran_pasien');
    // }

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
        $this->data['title'] = 'Identifikasi Pasien Baru';
        return view('page.pasien.identifikasi_pasien_baru_1', $this->data);
    }

    public function identifikasi_pasien_baru_2(Request $request)
    {
        $this->data['title'] = 'Identifikasi Pasien Baru';
        $pasien = new Pasien;
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->save();

        $this->data['no_rm'] = $pasien->no_rm;
        $this->data['no_rm'] = $this->formating_no_rm($pasien->no_rm);
        $this->data['tanggal_pengisian'] = $pasien->created_at;
        $this->data['nama_pasien'] = $pasien->nama_pasien;
        $this->data['tanggal_lahir'] = $pasien->tanggal_lahir;
        $this->data['jenis_kelamin'] = $pasien->jenis_kelamin;

        // $saved_data = DB::table('pasien')->where('nama_pasien', $request->nama_pasien)
        //                 ->where('tanggal_lahir', $request->tanggal_lahir)->first();

        // $this->data['no_rm'] = $saved_data->no_rm;
        // $this->data['tanggal_pengisian'] = $saved_data->created_at;
        // $this->data['nama_pasien'] = $request->nama_pasien;
        // $this->data['tanggal_lahir'] = $request->tanggal_lahir;
        // $this->data['jenis_kelamin'] = $request->jenis_kelamin;

        return view('page.pasien.identifikasi_pasien_baru_2', $this->data);
    }

    public function formating_no_rm($arg1)
    {
        $new_format = str_pad($arg1, 6, '0', STR_PAD_LEFT);

        return $new_format;
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

        //Identifikasi Pasien
        $identifikasi = new Identifikasi;
        $identifikasi->id_pasien = $request->no_rm;
        $identifikasi->save();

        //Dokumen Pasien
        $list_document = new ListDocument;
        $list_document->id_regis = $identifikasi->id_pasien;
        $list_document->save();

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
        return redirect('identifikasi_pasien_read/'.$request->no_rm);
    }
    
    public function identifikasi_pasien_data($id)
    {
        $this->middleware('haspatient');
        $this->data['title'] = 'Identifikasi Pasien';
        
        $pasien = Pasien::where('no_rm', $id)->first();
        $this->data['no_rm'] = $pasien->no_rm;
        $this->data['nama_pasien'] = $pasien->nama_pasien;
        $this->data['tanggal_lahir'] = $pasien->tanggal_lahir;
        $this->data['jenis_kelamin'] = $pasien->jenis_kelamin;
        $this->data['tanggal_pengisian'] = $pasien->created_at;

        $rincian_pasien = RincianPasien::where('no_rm', $id)->first();
        $this->data['no_telp'] = $rincian_pasien->no_telp;
        $this->data['pernikahan'] = $rincian_pasien->pernikahan;
        $this->data['agama'] = $rincian_pasien->agama;
        $this->data['pendidikan'] = $rincian_pasien->pendidikan;
        $this->data['pekerjaan'] = $rincian_pasien->pekerjaan;
        $this->data['bahasa'] = $rincian_pasien->bahasa;
        $this->data['nama_ayah'] = $rincian_pasien->nama_ayah;
        $this->data['nama_ibu'] = $rincian_pasien->nama_ibu;
        $this->data['budaya'] = $rincian_pasien->budaya;
        $this->data['alamat'] = $rincian_pasien->alamat;
        $this->data['rt'] = $rincian_pasien->rt;
        $this->data['rw'] = $rincian_pasien->rw;
        $this->data['perubahan_alamat'] = $rincian_pasien->perubahan_alamat;
        $this->data['perubahan_rt'] = $rincian_pasien->perubahan_rt;
        $this->data['perubahan_rw'] = $rincian_pasien->perubahan_rw;

        $pj = PenanggungJawab::where('id_regis', $id)->get();
        $this->data['pj'] = array();
        foreach ($pj as $key => $value) {
            $this->data['pj'][$key] = array();
            $this->data['pj'][$key]['nama_pj'] = $value->nama;
            $this->data['pj'][$key]['alamat_pj'] = $value->alamat;
            $this->data['pj'][$key]['hubungan_pj'] = $value->hubungan;
            $this->data['pj'][$key]['no_telp_pj'] = $value->no_telp;
        }
    }

    public function identifikasi_pasien_read($id = null)
    {
        if(!isset($id)) {
            $id = Session::get('id_pasien');
        }
        $this->identifikasi_pasien_data($id);
        return view('page.pasien.identifikasi_pasien_read', $this->data);
    }

    public function identifikasi_pasien_edit()
    {
        $id = Session::get('id_pasien');
        $this->identifikasi_pasien_data();
        return view('page.pasien.identifikasi_pasien_edit', $this->data);
    }

    public function post_identifikasi_pasien_edit(Request $request)
    {
        // dd('masuk');
        $this->middleware('haspatient');
        $id_pasien = Session::get('id_pasien');
        $rincian = RincianPasien::where('no_rm', $id_pasien)->first();
        // $rincian->no_rm = $request->no_rm;
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

        PenanggungJawab::where('id_regis', $id_pasien)->delete();

        $index = 0;
        foreach($request->nama_pj as $nama) {
            if(!empty($request->nama_pj[$index]) and !empty($request->alamat_pj[$index]) and !empty($request->hubungan_pj[$index]) and !empty($request->no_telp_pj[$index])) {
                $pj = new PenanggungJawab;
                $pj->id_regis = $id_pasien;
                $pj->nama = $request->nama_pj[$index];
                $pj->alamat = $request->alamat_pj[$index];
                $pj->hubungan = $request->hubungan_pj[$index];
                $pj->no_telp = $request->no_telp_pj[$index];
                $pj->save();
            }
            $index++;
        }
        return redirect('identifikasi_pasien_read');
    }
}
