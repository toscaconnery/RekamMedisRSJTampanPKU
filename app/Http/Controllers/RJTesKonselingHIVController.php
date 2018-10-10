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

    	return back();
    }

    public function get_tes_konseling_hiv_read()
    {
    	$pasien = RJTesKonselingHIV::where('id', 1)->first();
    	$this->data['id_regis'] = 1;
    	$this->data['id_regis'] = $pasien->id_regis;
        $this->data['nama'] = $pasien->nama;
        $this->data['alamat'] = $pasien->alamat;
        $this->data['propinsi'] = $pasien->propinsi;
        $this->data['kota_kabupaten'] = $pasien->kota_kabupaten;
        $this->data['nama_ibu_kandung'] = $pasien->nama_ibu_kandung;
        $this->data['jenis_kelamin'] = $pasien->jenis_kelamin;
        $this->data['spk'] = $pasien->spk;
        $this->data['tgl_lahir'] = $pasien->tgl_lahir;
        $this->data['skh'] = $pasien->skh;
        $this->data['umur_anak_terakhir'] = $pasien->umur_anak_terakhir;
        $this->data['jumlah_anak_kandung'] = $pasien->jumlah_anak_kandung;
        $this->data['pen'] = $pasien->pen;
        $this->data['pek'] = $pasien->pek;
        $this->data['jenis_pekerjaan'] = $pasien->jenis_pekerjaan;
        $this->data['kr'] = $pasien->kr;
        $this->data['ktr'] = $pasien->ktr;
        $this->data['lama_ps_penasun'] = $pasien->lama_ps_penasun;
        $this->data['sk'] = $pasien->sk;
        $this->data['sk'] = $pasien->sk;
        $this->data['sr'] = $pasien->sr;
        $this->data['pt'] = $pasien->pt;
        $this->data['pp'] = $pasien->pp;
        $this->data['ha'] = $pasien->ha;
        $this->data['tanggal_lahir_pasangan'] = $pasien->tanggal_lahir_pasangan;
        $this->data['sp'] = $pasien->sp;
        $this->data['tgl_tes_terakhir_pasangan'] = $pasien->tgl_tes_terakhir_pasangan;
        $this->data['wbp'] = $pasien->wbp;
        $this->data['tgl_konseling_pra_hiv'] = $pasien->tgl_konseling_pra_hiv;
        $this->data['skl'] = $pasien->skl;
        $all_alasan_tes = $pasien->alasan_tes;
        $exploded_alasan_tes = explode("-", $all_alasan_tes);
        $this->data['alasan_tes'] = array();
        foreach($exploded_alasan_tes as $key => $value) {
        	$this->data['alasan_tes'][$value] = True;
        }
        $this->data['dmn'] = $pasien->dmn;
        $this->data['dmn_lainnya'] = $pasien->dmn_lainnya;
        $this->data['kaj'] = $pasien->kaj;
        $this->data['waktu_kaj'] = $pasien->waktu_kaj;
        $this->data['an'] = $pasien->an;
        $this->data['waktu_an'] = $pasien->waktu_an;
        $this->data['per'] = $pasien->per;
        $this->data['waktu_per'] = $pasien->waktu_per;
        $this->data['trf'] = $pasien->trf;
        $this->data['waktu_trf'] = $pasien->waktu_trf;
        $this->data['trm'] = $pasien->trm;
        $this->data['waktu_trm'] = $pasien->waktu_trm;
        $this->data['ktr_lainnya'] = $pasien->ktr_lainnya;
        $this->data['waktu_ktr_lainnya'] = $pasien->waktu_ktr_lainnya;
        $this->data['jd'] = $pasien->jd;
        $this->data['waktu_jd'] = $pasien->waktu_jd;
        $this->data['ksd'] = $pasien->ksd;
        $this->data['tes_hiv'] = $pasien->tes_hiv;
        $this->data['tt_hiv'] = $pasien->tt_hiv;
        $this->data['wt_hiv'] = $pasien->wt_hiv;
        $this->data['ht_hiv'] = $pasien->ht_hiv;
        $this->data['tgl_pemberian_informasi'] = $pasien->tgl_pemberian_informasi;
        $this->data['tes_hiv2'] = $pasien->tes_hiv2;
        $this->data['tt_hiv2'] = $pasien->tt_hiv2;
        $this->data['wt_hiv2'] = $pasien->wt_hiv2;
        $this->data['ht_hiv2'] = $pasien->ht_hiv2;
        $all_ptp = $pasien->ptp;
        $exploded_ptp = explode("-", $all_ptp);
        $this->data['ptp'] = array();
        foreach($exploded_ptp as $key => $value) {
        	$this->data['ptp'][$value] = True;
        }
        $this->data['ims_lainnya'] = $pasien->ims_lainnya;
        $this->data['ptp_lainnya'] = $pasien->ptp_lainnya;
        $this->data['kesediaan_tes_tipk'] = $pasien->kesediaan_tes_tipk;
        $this->data['tgl_tes_hiv'] = $pasien->tgl_tes_hiv;
        $this->data['jt'] = $pasien->jt;
        $this->data['r1'] = $pasien->r1;
        $this->data['r1_reagen'] = $pasien->r1_reagen;
        $this->data['r2'] = $pasien->r2;
        $this->data['r2_reagen'] = $pasien->r2_reagen;
        $this->data['r3'] = $pasien->r3;
        $this->data['r3_reagen'] = $pasien->r3_reagen;
        $this->data['kes'] = $pasien->kes;
        $this->data['nrn_pdp'] = $pasien->nrn_pdp;
        $this->data['tgl_masuk_pdp'] = $pasien->tgl_masuk_pdp;
        $all_tl_tipk = $pasien->tl_tipk;
        $exploded_tl_tipk = explode("-", $all_tl_tipk);
        $this->data['tl_tipk'] = array();
        foreach($exploded_tl_tipk as $key => $value) {
        	$this->data['tl_tipk'][$value] = True;
        }
        $this->data['shp'] = $pasien->shp;
        $this->data['tgl_konseling_pasca_tes'] = $pasien->tgl_konseling_pasca_tes;
        $this->data['tha'] = $pasien->tha;
        $this->data['ktb'] = $pasien->ktb;
        $this->data['jkyd'] = $pasien->jkyd;
        $all_tl_kts = $pasien->tl_kts;
        $exploded_tl_kts = explode("-", $all_tl_kts);
        $this->data['tl_kts'] = array();
        foreach ($exploded_tl_kts as $key => $value) {
        	$this->data['tl_kts'][$value] = True;
        }
        $all_rpp = $pasien->rpp;
        $exploded_rpp = explode("-", $all_rpp);
        $this->data['rpp'] = array();
        foreach($exploded_rpp as $key => $value) {
        	$this->data['rpp'][$value] = True;
        }
        $this->data['rpp_lsm'] = $pasien->rpp_lsm;
        $this->data['ksl'] = $pasien->ksl;
        $this->data['ksl_lainnya'] = $pasien->ksl_lainnya;
        $this->data['nama_konselor'] = $pasien->nama_konselor;
        $this->data['sl'] = $pasien->sl;
        $this->data['jpe'] = $pasien->jpe;

    	return view('page.rj.tes_konseling_hiv_read', $this->data);
    }
}
