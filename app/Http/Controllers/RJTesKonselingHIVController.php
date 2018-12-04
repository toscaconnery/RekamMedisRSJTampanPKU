<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJTesKonselingHIV;
use App\Models\ListDocument;
use Session;
use View;

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
        $id_pasien = Session::get('id_pasien');
        $data->id_regis = $id_pasien;
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

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->rj_tes_konseling_hiv = True;
        $daftar_dokumen->save();

    	return redirect('rj_tes_konseling_hiv_read');
    }

    public function get_tes_konseling_hiv_data()
    {
        $id_pasien = Session::get('id_pasien');
    	$pasien = RJTesKonselingHIV::where('id_regis', $id_pasien)->first();
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

    }

    public function get_tes_konseling_hiv_read()
    {
        $this->get_tes_konseling_hiv_data();
    	return view('page.rj.tes_konseling_hiv_read', $this->data);
    }

    public function get_tes_konseling_hiv_edit()
    {
        $this->get_tes_konseling_hiv_data();
        return view('page.rj.tes_konseling_hiv_edit', $this->data);
    }

    public function post_tes_konseling_hiv_edit(Request $request)
    {   
        $id_pasien = Session::get('id_pasien');
        $data = RJTesKonselingHIV::where('id_regis', $id_pasien)->first();
        $data->id_regis = $id_pasien;
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
        
        return redirect('rj_tes_konseling_hiv_read');
    }

    function yatidak($stats)
    {
        if($stats=='1')
        {
            return 'Ya';
        }
        else
        {
            return 'Tidak';
        }
    }

    function convert()
    {
        $this->data['pt']  = $this->yatidak($this->data['pt']);
        $this->data['pp']  = $this->yatidak($this->data['pp']);
        $this->data['wbp']  = $this->yatidak($this->data['wbp']);
        $this->data['kaj']  = $this->yatidak($this->data['kaj']);
        $this->data['an']  = $this->yatidak($this->data['an']);
        $this->data['per']  = $this->yatidak($this->data['per']);
        $this->data['trf']  = $this->yatidak($this->data['trf']);
        $this->data['trm']  = $this->yatidak($this->data['trm']);
        $this->data['jd']  = $this->yatidak($this->data['jd']);
        $this->data['ksd']  = $this->yatidak($this->data['ksd']);
        $this->data['tes_hiv']  = $this->yatidak($this->data['tes_hiv']);
        $this->data['tes_hiv2']  = $this->yatidak($this->data['tes_hiv2']);
        $this->data['kesediaan_tes_tipk']  = $this->yatidak($this->data['kesediaan_tes_tipk']);
        $this->data['tha']  = $this->yatidak($this->data['tha']);
        $this->data['ktb']  = $this->yatidak($this->data['ktb']);

        if($this->data['spk'] == '0')
        {
            $this->data['spk'] = 'Kawin';
        }
        elseif($this->data['spk'] == '1')
        {
            $this->data['spk'] = 'Belum Kawin ';
        }
        elseif($this->data['spk'] == '2')
        {
            $this->data['spk'] = 'Cerai Hidup';
        }
        else
        {
            $this->data['spk'] = 'Cerai Mati';
        }

        if($this->data['skh'] == '0')
        {
            $this->data['skh'] = 'Trisemester I';
        }
        elseif($this->data['skh'] == '1')
        {
            $this->data['skh'] = 'Trisemester II';
        }
        elseif($this->data['skh'] == '2')
        {
            $this->data['skh'] = 'Trisemester III';
        }
        elseif($this->data['skh'] == '3')
        {
            $this->data['skh'] = 'Tidak Hamil';
        }
        else
        {
            $this->data['skh'] = 'Tidak Tahu';
        }

        if($this->data['pen'] == '0')
        {
            $this->data['pen'] = 'Tidak pernah sekolah';
        }
        elseif($this->data['pen'] == '1')
        {
            $this->data['pen'] = 'SD/sederajatnya';
        }
        elseif($this->data['pen'] == '2')
        {
            $this->data['pen'] = 'SMP/sederajatnya';
        }
        elseif($this->data['pen'] == '3')
        {
            $this->data['pen'] = 'SMA/sedereajatnya';
        }
        else
        {
            $this->data['pen'] = 'Akademi/Perguruan Tinggi/Sederajatnya';
        }

        if($this->data['pek'] == '0')
        {
            $this->data['pek'] = 'Tidak Bekerja';
        }
        elseif($this->data['pek'] == '0')
        {
            $this->data['pek'] = 'Tidak Bekerja';
        }
        else
        {
            $this->data['pek'] = 'Bekerja';
        }

        if($this->data['kr'] == '0')
        {
            $this->data['kr'] = 'PS';
        }
        elseif($this->data['kr'] == '1')
        {
            $this->data['kr'] = 'Pelanggan PS';
        }
        elseif($this->data['kr'] == '2')
        {
            $this->data['kr'] = 'Waria';
        }
        elseif($this->data['kr'] == '3')
        {
            $this->data['kr'] = 'Pasangan Risti';
        }
        elseif($this->data['kr'] == '4')
        {
            $this->data['kr'] = 'Penasun';
        }
        elseif($this->data['kr'] == '5')
        {
            $this->data['kr'] = 'Lainnya';
        }
        else
        {
            $this->data['kr'] = 'Gay/ LSL';
        }

        if($this->data['ktr'] == '0')
        {
            $this->data['ktr'] = 'Langsung';
        }
        else
        {
            $this->data['ktr'] = 'Tidak Langsung';
        }

        if($this->data['sk'] == '0')
        {
            $this->data['sk'] = 'Datang Sendiri';
        }
        else
        {
            $this->data['sk'] = 'Dirujuk';
        }

        if($this->data['sr'] == '0')
        {
            $this->data['sr'] = 'Tempat Kerja';
        }
        elseif ($this->data['sr'] == '1')
        {
            $this->data['sr'] = 'Kader';
        }
        elseif ($this->data['sr'] == '2')
        {
            $this->data['sr'] = 'Klp Dukungan';
        }
        elseif ($this->data['sr'] == '3')
        {
            $this->data['sr'] = 'LSM';
        }
        elseif ($this->data['sr'] == '4')
        {
            $this->data['sr'] = 'Pasangan';
        }
        else
        {
            $this->data['sr'] = 'Lain-lain';
        }

        if($this->data['ha'] == '0')
        {
            $this->data['ha'] = 'Ya';
        }
        elseif($this->data['ha'] == '1')
        {
            $this->data['ha'] = 'Tidak';
        }
        else
        {
            $this->data['ha'] = 'Tidak Tahu';
        }

        if($this->data['sp'] == '0')
        {
            $this->data['sp'] = 'HIV (+)';
        }
        elseif($this->data['sp'] == '1')
        {
            $this->data['sp'] = 'HIV (-)';
        }
        else
        {
            $this->data['sp'] = 'Tidak Diketahui';
        }

        if($this->data['skl'] == '0')
        {
            $this->data['skl'] = 'Baru';
        }
        else
        {
            $this->data['skl'] = 'Lama';
        }

        if($this->data['alasan_tes'] == '1')
        {
            $this->data['alasan_tes'] = 'Ingin tahu saja';
        }
        elseif($this->data['alasan_tes'] == '2')
        {
            $this->data['alasan_tes'] = 'Merasa beresiko';
        }
        elseif($this->data['alasan_tes'] == '3')
        {
            $this->data['alasan_tes'] = 'Mumpung gratis';
        }
        elseif($this->data['alasan_tes'] == '4')
        {
            $this->data['alasan_tes'] = 'Tes ulang (window period)';
        }
        elseif($this->data['alasan_tes'] == '5')
        {
            $this->data['alasan_tes'] = 'Untuk bekerja';
        }
        elseif($this->data['alasan_tes'] == '6')
        {
            $this->data['alasan_tes'] = 'Lainnya ...';
        }
        elseif($this->data['alasan_tes'] == '7')
        {
            $this->data['alasan_tes'] = 'Ada gejala tertentu';
        }
        else
        {
            $this->data['alasan_tes'] = 'Akan menikah ...';
        }

        if($this->data['dmn'] == '0')
        {
            $this->data['dmn'] = 'Brosur';
        }
        elseif($this->data['dmn'] == '1')
        {
            $this->data['dmn'] = 'Koran';
        }
        elseif($this->data['dmn'] == '2')
        {
            $this->data['dmn'] = 'TV';
        }
        elseif($this->data['dmn'] == '3')
        {
            $this->data['dmn'] = 'Petugas Kesehatan';
        }
        elseif($this->data['dmn'] == '4')
        {
            $this->data['dmn'] = 'Teman';
        }
        elseif($this->data['dmn'] == '5')
        {
            $this->data['dmn'] = 'Petugas Outreach';
        }
        elseif($this->data['dmn'] == '6')
        {
            $this->data['dmn'] = 'Poster';
        }
        elseif($this->data['dmn'] == '7')
        {
            $this->data['dmn'] = 'Lay Konselor';
        }
        else
        {
            $this->data['dmn'] = 'Lainnya '.$this->data['dmn_lainnya'].' ';
        }

        if($this->data['ht_hiv'] == '0')
        {
            $this->data['ht_hiv'] = 'Non Reaktif';
        }
        elseif($this->data['ht_hiv'] == '1')
        {
            $this->data['ht_hiv'] = 'Reaktif';
        }
        else
        {
            $this->data['ht_hiv2'] = 'Tidak tahu';
        }

        if($this->data['ht_hiv2'] == '0')
        {
            $this->data['ht_hiv2'] = 'Non Reaktif';
        }
        elseif($this->data['ht_hiv2'] == '1')
        {
            $this->data['ht_hiv2'] = 'Reaktif';
        }
        else
        {
            $this->data['ht_hiv2'] = 'Tidak tahu';
        }

        if($this->data['jt'] == '0')
        {
            $this->data['jt'] = 'Rapid Test';
        }
        else
        {
            $this->data['jt'] = 'ELISA';
        }

        if($this->data['r1'] == '0')
        {
            $this->data['r1'] = 'Non Reaktif';
        }
        else
        {
            $this->data['r1'] = 'Reaktif';
        }

        if($this->data['r2'] == '0')
        {
            $this->data['r2'] = 'Non Reaktif';
        }
        else
        {
            $this->data['r2'] = 'Reaktif';
        }

        if($this->data['r3'] == '0')
        {
            $this->data['r3'] = 'Non Reaktif';
        }
        else
        {
            $this->data['r3'] = 'Reaktif';
        }

        if($this->data['kes'] == '0')
        {
            $this->data['kes'] = 'Non Reaktif';
        }
        elseif($this->data['kes'] == '1')
        {
            $this->data['kes'] = 'Reaktif';
        }
        else
        {
            $this->data['kes'] = 'Indeterminate';
        }

        if($this->data['shp'] == '0')
        {
            $this->data['shp'] = 'HIV (-)';
        }
        elseif($this->data['shp'] == '1')
        {
            $this->data['shp'] = 'HIV (+)';
        }
        else
        {
            $this->data['shp'] = 'Tidak Tahu';
        }

        if($this->data['sl'] == '0')
        {
            $this->data['sl'] = 'Rumah Sakit';
        }
        elseif($this->data['sl'] == '1')
        {
            $this->data['sl'] = 'Puskesmas';
        }
        else
        {
            $this->data['sl'] = 'Klinik';
        }

        if($this->data['jpe'] == '0')
        {
            $this->data['jpe'] = 'Layanan Menetap';
        }
        else
        {
            $this->data['jpe'] = 'Layanan Bergerak';
        }

        if($this->data['jenis_kelamin'] == 'L')
        {
            $this->data['jenis_kelamin'] = 'Laki-laki';
        }
        else
        {
            $this->data['jenis_kelamin'] = 'Perempuan';
        }
    }

    public function rj_konselinghiv_pdf()
    {

        $this->get_tes_konseling_hiv_data();
        $this->convert();
        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_rj_konselinghiv',$this->data);
        $contents = $view->render();


        $mpdf->SetHTMLHeader('

            <table width="100%" >
                <tbody>
                        <tr>

                            <td class= "doc_headerleft">
                                <img class="relative" src="img/riau.png" height="9%" width="7%">
                            </td>

                            <td class="doc_headermid">
                                <p style="font-size:120%;" ><b>Pemerintah Provinsi Riau</b></p>
                                <br><p style="font-size:160%;" ><b>RUMAH SAKIT JIWA TAMPAN</b></p>
                                <br><p style="font-size:90%;" >Jl. H. R. Soebrantas Km. 12,5 Pekanbaru Telp. (0761) 63240</p>
                                <p style="font-size:90%;" >Fax. (0761) 63239 E-mail : rstampan@yahoo.com</p>
                            </td>
                            
                            <td class="doc_headerright">
                            <p>No. RM           </p><br>
                            <p>Nama Pasien      </p><br>
                            <p>Tanggal Lahir    </p><br>
                            <p>Jenis Kelamin    </p><br>
                            </td>    

                            <td class="doc_headerright_ans">
                            <p>:  123456</p><br>
                            <p>:  Joko Pangestu</p><br>
                            <p>:  13/08/1992</p><br>
                            <p>:  L</p><br>
                            </td>                       
                        </tr>
  
                </tbody>
            </table> <hr>' );

        $mpdf->SetHTMLFooter('<hr>
            <table width="100%" style="vertical-align: bottom; font-family: "arial", Times, serif; 
                font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;">
                <tr>
                    <td width="33%">{DATE j-m-Y}</td>
                    <td width="33%" align="center">{PAGENO}/{nbpg}</td>
                    <td width="33%" style="text-align: right;">RM. 07.00.RJ JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('rj_konseling_hiv.pdf',\Mpdf\Output\Destination::INLINE);
    }
}
