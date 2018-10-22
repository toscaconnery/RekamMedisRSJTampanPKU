<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIResumeMedis;
use Session;

class RIResumeMedisController extends Controller
{
    public function __construct()
    {
        $this->data['title'] = 'Resume Rawat Inap';
    }

    public function get_ri_resume_medis()
    {
    	return view('page.ri.resume_medis', $this->data);
    }

    public function post_ri_resume_medis(Request $request)
    {
        $data = new RIResumeMedis;
        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
        $data->id_regis = $id_pasien;
        $data->tanggal_masuk = $request->tanggal_masuk;
        $data->tanggal_keluar = $request->tanggal_keluar;
        $data->ruang_rawat_terakhir = $request->ruang_rawat_terakhir;
        $data->dpjp = $request->dpjp;
        $data->alergi = $request->alergi;
        $data->diagnosa_masuk = $request->diagnosa_masuk;
        $data->alasan_dirawat =  $request->alasan_dirawat;
        $data->hasil_pemeriksaan_penunjang = $request->hasil_pemeriksaan_penunjang;
        $data->terapi = $request->terapi;
        $data->diagnosa_psikiatri_1 = $request->diagnosa_psikiatri_1;
        $data->kode_psikiatri_1 = $request->kode_psikiatri_1;
        $data->diagnosa_non_psikiatri_1 = $request->diagnosa_non_psikiatri_1;
        $data->kode_non_psikiatri_1 = $request->kode_non_psikiatri_1;
        $data->diagnosa_psikiatri_2 = $request->diagnosa_psikiatri_2;
        $data->kode_psikiatri_2 = $request->kode_psikiatri_2;
        $data->diagnosa_non_psikiatri_2 = $request->diagnosa_non_psikiatri_2;
        $data->kode_non_psikiatri_2 = $request->kode_non_psikiatri_2;
        $data->diagnosa_psikiatri_3 = $request->diagnosa_psikiatri_3;
        $data->kode_psikiatri_3 = $request->kode_psikiatri_3;
        $data->diagnosa_non_psikiatri_3 = $request->diagnosa_non_psikiatri_3;
        $data->kode_non_psikiatri_3 = $request->kode_non_psikiatri_3;
        $data->diagnosa_psikiatri_4 = $request->diagnosa_psikiatri_4;
        $data->kode_psikiatri_4 = $request->kode_psikiatri_4;
        $data->diagnosa_non_psikiatri_4 = $request->diagnosa_non_psikiatri_4;
        $data->kode_non_psikiatri_4 = $request->kode_non_psikiatri_4;
        $data->diagnosa_psikiatri_5 = $request->diagnosa_psikiatri_5;
        $data->kode_psikiatri_5 = $request->kode_psikiatri_5;
        $data->diagnosa_non_psikiatri_5 = $request->diagnosa_non_psikiatri_5;
        $data->kode_non_psikiatri_5 = $request->kode_non_psikiatri_5;
        $data->penyebab_luar = $request->penyebab_luar;
        $data->keadaan_keluar = $request->keadaan_keluar;
        $data->cara_pulang = $request->cara_pulang;
        $data->cara_pulang_lainnya = $request->cara_pulang_lainnya;
        $data->kondisi_pulang = $request->kondisi_pulang;
        $data->jam_keluar = $request->jam_keluar;
        $data->td = $request->td;
        $data->hr = $request->hr;
        $data->rr = $request->rr;
        $data->t = $request->t;
        $data->bb = $request->bb;
        $data->penyakit = $request->penyakit;
        $data->diet = $request->penyakit;
        $data->keterangan_diet = $request->keterangan_diet;
        $data->tempat_kontrol = $request->tempat_kontrol;
        $data->tanggal_kontrol = $request->tanggal_kontrol;
        $data->hasil_tertunda = $request->hasil_tertunda;
        $data->tanggal_pengambilan = $request->tanggal_pengambilan;
        $data->save();

        return back();
    }

    public function get_ri_resume_medis_read()
    {
        $pasien = RIResumeMedis::where('id', 1)->first();

        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['tanggal_masuk'] = $pasien->tanggal_masuk;
        $this->data['tanggal_keluar'] = $pasien->tanggal_keluar;
        $this->data['ruang_rawat_terakhir'] = $pasien->ruang_rawat_terakhir;
        $this->data['dpjp'] = $pasien->dpjp;
        $this->data['alergi'] = $pasien->alergi;
        $this->data['diagnosa_masuk'] = $pasien->diagnosa_masuk;
        $this->data['alasan_dirawat'] = $pasien->alasan_dirawat;
        $this->data['hasil_pemeriksaan_penunjang'] = $pasien->hasil_pemeriksaan_penunjang;

        $this->data['terapi'] = $pasien->terapi;
        
        $this->data['diagnosa_psikiatri_1'] = $pasien->diagnosa_psikiatri_1;
        $this->data['kode_psikiatri_1'] = $pasien->kode_psikiatri_1;
        $this->data['diagnosa_non_psikiatri_1'] = $pasien->diagnosa_non_psikiatri_1;
        $this->data['kode_non_psikiatri_1'] = $pasien->kode_non_psikiatri_1;

        $this->data['diagnosa_psikiatri_2'] = $pasien->diagnosa_psikiatri_2;
        $this->data['kode_psikiatri_2'] = $pasien->kode_psikiatri_2;
        $this->data['diagnosa_non_psikiatri_2'] = $pasien->diagnosa_non_psikiatri_2;
        $this->data['kode_non_psikiatri_2'] = $pasien->kode_non_psikiatri_2;
        
        $this->data['diagnosa_psikiatri_3'] = $pasien->diagnosa_psikiatri_3;
        $this->data['kode_psikiatri_3'] = $pasien->kode_psikiatri_3;
        $this->data['diagnosa_non_psikiatri_3'] = $pasien->diagnosa_non_psikiatri_3;
        $this->data['kode_non_psikiatri_3'] = $pasien->kode_non_psikiatri_3;

        $this->data['diagnosa_psikiatri_4'] = $pasien->diagnosa_psikiatri_4;
        $this->data['kode_psikiatri_4'] = $pasien->kode_psikiatri_4;
        $this->data['diagnosa_non_psikiatri_4'] = $pasien->diagnosa_non_psikiatri_4;
        $this->data['kode_non_psikiatri_4'] = $pasien->kode_non_psikiatri_4;
        
        $this->data['diagnosa_psikiatri_5'] = $pasien->diagnosa_psikiatri_5;
        $this->data['kode_psikiatri_5'] = $pasien->kode_psikiatri_5;
        $this->data['diagnosa_non_psikiatri_5'] = $pasien->diagnosa_non_psikiatri_5;
        $this->data['kode_non_psikiatri_5'] = $pasien->kode_non_psikiatri_5;

        $this->data['penyebab_luar'] = $pasien->penyebab_luar;
        $this->data['keadaan_keluar'] = $pasien->keadaan_keluar;
        $this->data['cara_pulang'] = $pasien->cara_pulang;
        $this->data['cara_pulang_lainnya'] = $pasien->cara_pulang_lainnya;
        $this->data['kondisi_pulang'] = $pasien->kondisi_pulang;
        $this->data['jam_keluar'] = $pasien->jam_keluar;
        $this->data['td'] = $pasien->td;
        $this->data['hr'] = $pasien->hr;
        $this->data['rr'] = $pasien->rr;
        $this->data['t'] = $pasien->t;

        $this->data['bb'] = $pasien->bb;
        $this->data['penyakit'] = $pasien->penyakit;
        $this->data['diet'] = $pasien->diet;
        $this->data['keterangan_diet'] = $pasien->keterangan_diet;
        $this->data['tempat_kontrol'] = $pasien->tempat_kontrol;
        $this->data['tanggal_kontrol'] = $pasien->tanggal_kontrol;
        $this->data['hasil_tertunda'] = $pasien->hasil_tertunda;
        $this->data['tanggal_pengambilan'] = $pasien->tanggal_pengambilan;
        
        return view('page.ri.resume_medis_read', $this->data);
    }
}