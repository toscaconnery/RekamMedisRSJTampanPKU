<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJTesKonselingHIV;

class RJTesKonselingHIVController extends Controller
{
	public function __construct()
	{
		$this->data['title'] = "Tes & Konseling HIV";
	}

    public function get_tes_konseling_hiv()
    {
    	return view('page.rj.tes_konseling_hiv', $this->data);
    }

    public function post_tes_konseling_hiv(Request $request)
    {
    	$data = new RJTesKonselingHIV;
    	$data->id_regis = 1;

        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->propinsi = $request->propinsi;
        $data->kota_kabupaten = $request->kota_kabupaten;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->nama_ibu_kandung = $request->nama_ibu_kandung;
        $data->spk = $request->spk;
        $data->tgl_lahir = $request->tgl_lahir; 
        $data->skh = $request->skh;
        $data->umur_anak_terakhir = $request->umur_anak_terakhir;
        $data->jumlah_anak_kandung = $request->jumlah_anak_kandung;
        $data->pen = $request->pen;
        $data->pek = $request->pek;
        $data->jenis_pekerjaan = $request->jenis_pekerjaan;
        $data->kr = $request->kr;
        $data->ktr = $request->ktr;
        $data->lama_ps_penasun = $request->lama_ps_penasun;
        $data->sk = $request->sk;
        $data->sk = $request->sk;
        $data->sr = $request->sr;
        $data->pt = $request->pt;
        $data->pp = $request->pp;
        $data->ha = $request->ha;
        $data->tanggal_lahir_pasangan = $request->tanggal_lahir_pasangan;
        $data->sp = $request->sp;
        $data->tgl_tes_terakhir_pasangan = $request->tgl_tes_terakhir_pasangan;
        $data->wbp = $request->wbp;
        $data->tgl_konseling_pra_hiv = $request->tgl_konseling_pra_hiv;
        $data->skl = $request->skl;
        $alasan_tes = '';
        if(isset($request->alasan_tes_1)) {
        	$alasan_tes .= '1-';
        }
        if(isset($request->alasan_tes_2)) {
        	$alasan_tes .= '2-';
        }
        if(isset($request->alasan_tes_3)) {
        	$alasan_tes .= '3-';
        }
        if(isset($request->alasan_tes_4)) {
        	$alasan_tes .= '4-';
        }
        if(isset($request->alasan_tes_5)) {
        	$alasan_tes .= '5-';
        }
        if(isset($request->alasan_tes_6)) {
        	$alasan_tes .= '6-';
        }
        if(isset($request->alasan_tes_7)) {
        	$alasan_tes .= '7-';
        }
        if(isset($request->alasan_tes_8)) {
        	$alasan_tes .= '8-';
        }
        if(strlen($alasan_tes) > 0 ) {
        	$alasan_tes = substr($alasan_tes, 0, -1);
        }
        $data->alasan_tes = $alasan_tes;

        $data->dmn = $request->dmn;
        $data->dmn_lainnya = $request->dmn_lainnya;
        $data->kaj = $request->kaj;
        $data->waktu_kaj = $request->waktu_kaj;
        $data->an = $request->an;
        $data->waktu_an = $request->waktu_an;
        $data->per = $request->per;
        $data->waktu_per = $request->waktu_per;
        $data->trf = $request->trf;
        $data->waktu_trf = $request->waktu_trf;
        $data->trm = $request->trm;
        $data->waktu_trm = $request->waktu_trm;
        $data->ktr_lainnya = $request->ktr_lainnya;
        $data->waktu_ktr_lainnya = $request->waktu_ktr_lainnya;
        $data->jd = $request->jd;
        $data->waktu_jd = $request->waktu_jd;
        $data->ksd = $request->ksd;
        $data->tes_hiv = $request->tes_hiv;
        $data->tt_hiv = $request->tt_hiv;
        $data->wt_hiv = $request->wt_hiv;
        $data->ht_hiv = $request->ht_hiv;
        $data->tgl_pemberian_informasi = $request->tgl_pemberian_informasi;
        $data->tes_hiv2 = $request->tes_hiv2;
        $data->tt_hiv2 = $request->tt_hiv2;
        $data->wt_hiv2 = $request->wt_hiv2;
        $data->ht_hiv2 = $request->ht_hiv2;
        $ptp = '';
        if(isset($request->ptp_1)) {
        	$ptp .= '1-';
        }
        if(isset($request->ptp_2)) {
        	$ptp .= '2-';
        }
        if(isset($request->ptp_3)) {
        	$ptp .= '3-';
        }
        if(isset($request->ptp_4)) {
        	$ptp .= '4-';
        }
        if(isset($request->ptp_5)) {
        	$ptp .= '5-';
        }
        if(isset($request->ptp_6)) {
        	$ptp .= '6-';
        }
        if(isset($request->ptp_7)) {
        	$ptp .= '7-';
        }
        if(isset($request->ptp_8)) {
        	$ptp .= '8-';
        }
        if(isset($request->ptp_9)) {
        	$ptp .= '9-';
        }
        if(isset($request->ptp_10)) {
        	$ptp .= '10-';
        }
        if(isset($request->ptp_11)) {
        	$ptp .= '11-';
        }
        if(isset($request->ptp_12)) {
        	$ptp .= '12-';
        }
        if(isset($request->ptp_13)) {
        	$ptp .= '13-';
        }
        if(strlen($ptp) > 0) {
        	$ptp = substr($ptp, 0, -1);
        }
        $data->ptp = $ptp;

        $data->ims_lainnya = $request->ims_lainnya;
        $data->ptp_lainnya = $request->ptp_lainnya;
        $data->kesediaan_tes_tipk = $request->kesediaan_tes_tipk;
        $data->tgl_tes_hiv = $request->tgl_tes_hiv;
        $data->jt = $request->jt;
        $data->r1 = $request->r1;
        $data->r1_reagen = $request->r1_reagen;
        $data->r2 = $request->r2;
        $data->r2_reagen = $request->r2_reagen;
        $data->r3 = $request->r3;
        $data->r3_reagen = $request->r3_reagen;
        $data->kes = $request->kes;
        $data->nrn_pdp = $request->nrn_pdp;
        $data->tgl_masuk_pdp = $request->tgl_masuk_pdp;
        $tl_tipk = '';
        if(isset($request->tl_tipk_1)) {
        	$tl_tipk .= '1-';
        }
        if(isset($request->tl_tipk_2)) {
        	$tl_tipk .= '2-';
        }
        if(isset($request->tl_tipk_3)) {
        	$tl_tipk .= '3-';
        }
        if(strlen($tl_tipk) > 0) {
        	$tl_tipk = substr($tl_tipk, 0, -1);
        }
        $data->tl_tipk = $tl_tipk;
        $data->shp = $request->shp;
        $data->tgl_konseling_pasca_tes = $request->tgl_konseling_pasca_tes;
        $data->tha = $request->tha;
        $data->ktb = $request->ktb;
        $data->jkyd = $request->jkyd;
        $tl_kts = '';
        if(isset($request->tl_kts_1)) {
        	$tl_kts .= '1-';
        }
        if(isset($request->tl_kts_2)) {
        	$tl_kts .= '2-';
        }
        if(isset($request->tl_kts_3)) {
        	$tl_kts .= '3-';
        }
        if(isset($request->tl_kts_4)) {
        	$tl_kts .= '4-';
        }
        if(isset($request->tl_kts_5)) {
        	$tl_kts .= '5-';
        }
        if(isset($request->tl_kts_6)) {
        	$tl_kts .= '6-';
        }
        if(isset($request->tl_kts_7)) {
        	$tl_kts .= '7-';
        }
        if(isset($request->tl_kts_8)) {
        	$tl_kts .= '8-';
        }
        if(isset($request->tl_kts_9)) {
        	$tl_kts .= '9-';
        }
        if(isset($request->tl_kts_10)) {
        	$tl_kts .= '10-';
        }
        if(isset($request->tl_kts_11)) {
        	$tl_kts .= '11-';
        }
        if(strlen($tl_kts) > 0) {
        	$tl_kts = substr($tl_kts, 0, -1);
        }
        $data->tl_kts = $tl_kts;

        $rpp = '';
        if(isset($request->rpp_1)) {
        	$rpp .= '1-';
        }
        if(isset($request->rpp_2)) {
        	$rpp .= '2-';
        }
        if(isset($request->rpp_3)) {
        	$rpp .= '3-';
        }
        if(strlen($rpp) > 0) {
        	$rpp = substr($rpp, 0, -1);
        }
        $data->rpp = $rpp;

        $data->rpp_lsm = $request->rpp_lsm;
        $data->ksl = $request->ksl;
        $data->ksl_lainnya = $request->ksl_lainnya;
        $data->nama_konselor = $request->nama_konselor;
        $data->sl = $request->sl;
        $data->jpe = $request->jpe;
        $data->save();

    	dd($request);
    }
}
