<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIResumeMedis;

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
        $data->id_regis = 1;
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
}