<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJHIVAntiRetroval;
use App\Models\ListDocument;
use Session;

class RJHIVAntiRetrovalController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = '';
    }

    public function get_rj_hiv_anti_retroval()
    {
    	return view('page.rj.hiv_anti_retroval', $this->data);
    }

    public function post_rj_hiv_anti_retroval(Request $request)
    {
        $data = new RJHIVAntiRetroval;
        $id_pasien = Session::get('id_pasien');
        $data->id_regis = $id_pasien;
        $data->no_reg_nasional = $request->no_reg_nasional;
        $data->nik = $request->nik;
        $data->nama_ibu_kandung = $request->nama_ibu_kandung;
        $data->alamat_pasien = $request->alamat_pasien;
        $data->no_telp = $request->no_telp;
        $data->nama_pmo = $request->nama_pmo;
        $data->hubungan_dengan_pasien = $request->hubungan_dengan_pasien;
        $data->alamat_pmo = $request->alamat_pmo;
        $data->no_telp_pmo = $request->no_telp_pmo;
        $data->tgl_konfirm_tes_hiv = $request->tgl_konfirm_tes_hiv;
        $data->tempat_tes_hiv = $request->tempat_tes_hiv;
        $data->entry_point = $request->entry_point;
        $data->keterangan_entry_point = $request->keterangan_entry_point;
        $data->riwayat_alergi_obat = $request->riwayat_alergi_obat;
        $data->pendidikan = $request->pendidikan;
        $data->pekerjaan = $request->pekerjaan;
        $data->nama_pekerjaan = $request->nama_pekerjaan;
        $fr = '';
        if(isset($request->fr_1)) {
            $fr .= '1-';
        }
        if(isset($request->fr_2)) {
            $fr .= '2-';
        }
        if(isset($request->fr_3)) {
            $fr .= '3-';
        }
        if(isset($request->fr_4)) {
            $fr .= '4-';
        }
        if(isset($request->fr_5)) {
            $fr .= '5-';
        }
        if(isset($request->fr_6)) {
            $fr .= '6-';
        }
        if(isset($request->fr_7)) {
            $fr .= '7-';
        }
        if(isset($request->fr_8)) {
            $fr .= '8-';
        }
        if(strlen($fr) > 0) {
            $fr = substr($fr, 0, -1);
        }
        $data->fr = $fr;
        $data->keterangan_rawat_jalan = $request->keterangan_rawat_jalan;
        $data->keterangan_jangkauan = $request->keterangan_jangkauan;
        $data->keterangan_fr_lainnya = $request->keterangan_fr_lainnya;
        $data->status_pernikahan = $request->status_pernikahan;
        $jumlah_form_keluarga = $request->jumlah_form_keluarga;
        $riwayat_keluarga = '';
        for($i = 1; $i <= $jumlah_form_keluarga; $i++) {
            $str_nama = 'nama_'.$i;
            $str_hub = 'hub_'.$i;
            $str_umur = 'umur_'.$i;
            $str_hiv = 'hiv_'.$i;
            $str_art = 'art_'.$i;
            $str_noregnas = 'noregnas_'.$i;
            if(!is_null($request->$str_nama)) {
                $riwayat_keluarga .= $request->$str_nama."#&!^@".$request->$str_hub."#&!^@".$request->$str_umur."#&!^@".$request->$str_hiv."#&!^@".$request->$str_art."#&!^@".$request->$str_noregnas."$&!^@";
            }
        }
        if(strlen($riwayat_keluarga) > 0) {
            $riwayat_keluarga = substr($riwayat_keluarga, 0, -5);
        }
        $data->riwayat_keluarga = $riwayat_keluarga;
        $data->pernah_menerima_art = $request->pernah_menerima_art;
        $data->jenis_art = $request->jenis_art;
        $data->tempat_art_dulu = $request->tempat_art_dulu;
        $data->nama_arv = $request->nama_arv;
        $data->dosis_arv = $request->dosis_arv;
        $data->lama_penggunaan = $request->lama_penggunaan;
        $data->tanggal_pkl_1 = $request->tanggal_pkl_1;
        $data->stad_klinis_pkl_1 = $request->stad_klinis_pkl_1;
        $data->bb_pkl_1 = $request->bb_pkl_1;
        $data->status_fungsional_pkl_1 = $request->status_fungsional_pkl_1;
        $data->cd4_pkl_1 = $request->cd4_pkl_1;
        $data->lain_lain_pkl_1 = $request->lain_lain_pkl_1;
        $data->tanggal_pkl_2 = $request->tanggal_pkl_2;
        $data->stad_klinis_pkl_2 = $request->stad_klinis_pkl_2;
        $data->bb_pkl_2 = $request->bb_pkl_2;
        $data->status_fungsional_pkl_2 = $request->status_fungsional_pkl_2;
        $data->cd4_pkl_2 = $request->cd4_pkl_2;
        $data->lain_lain_pkl_2 = $request->lain_lain_pkl_2;
        $data->tanggal_pkl_3 = $request->tanggal_pkl_3;
        $data->stad_klinis_pkl_3 = $request->stad_klinis_pkl_3;
        $data->bb_pkl_3 = $request->bb_pkl_3;
        $data->status_fungsional_pkl_3 = $request->status_fungsional_pkl_3;
        $data->cd4_pkl_3 = $request->cd4_pkl_3;
        $data->lain_lain_pkl_3 = $request->lain_lain_pkl_3;
        $data->tanggal_pkl_4 = $request->tanggal_pkl_4;
        $data->stad_klinis_pkl_4 = $request->stad_klinis_pkl_4;
        $data->bb_pkl_4 = $request->bb_pkl_4;
        $data->status_fungsional_pkl_4 = $request->status_fungsional_pkl_4;
        $data->cd4_pkl_4 = $request->cd4_pkl_4;
        $data->lain_lain_pkl_4 = $request->lain_lain_pkl_4;
        $data->tanggal_pkl_5 = $request->tanggal_pkl_5;
        $data->stad_klinis_pkl_5 = $request->stad_klinis_pkl_5;
        $data->bb_pkl_5 = $request->bb_pkl_5;
        $data->status_fungsional_pkl_5 = $request->status_fungsional_pkl_5;
        $data->cd4_pkl_5 = $request->cd4_pkl_5;
        $data->lain_lain_pkl_5 = $request->lain_lain_pkl_5;
        $data->tanggal_pkl_6 = $request->tanggal_pkl_6;
        $data->stad_klinis_pkl_6 = $request->stad_klinis_pkl_6;
        $data->bb_pkl_6 = $request->bb_pkl_6;
        $data->status_fungsional_pkl_6 = $request->status_fungsional_pkl_6;
        $data->cd4_pkl_6 = $request->cd4_pkl_6;
        $data->lain_lain_pkl_6 = $request->lain_lain_pkl_6;
        $jumlah_form_art = $request->jumlah_form_art;
        $terapi_art = '';
        for($i = 1; $i <= $jumlah_form_art; $i++) {
            $str_nama_panduan_orisinil_art = 'nama_panduan_orisinil_art_'.$i;
            $str_tanggal_art = 'tanggal_art_'.$i;
            $str_substitusi_art = 'substitusi_art_'.$i;
            $str_switch_art = 'switch_art_'.$i;
            $str_stop_art = 'stop_art_'.$i;
            $str_restar_art = 'restar_art_'.$i;
            $str_alasan_art = 'alasan_art_'.$i;
            $str_nama_panduan_baru_art = 'nama_panduan_baru_art_'.$i;
            if(!is_null($request->$str_nama_panduan_orisinil_art)) {
                $terapi_art .= $request->$str_nama_panduan_orisinil_art."#&!^@".$request->$str_tanggal_art."#&!^@".$request->$str_substitusi_art."#&!^@".$request->$str_switch_art."#&!^@".$request->$str_stop_art."#&!^@".$request->$str_restar_art."#&!^@".$request->$str_alasan_art."#&!^@".$request->$str_nama_panduan_baru_art."$&!^@";
            }
        }
        if(strlen($terapi_art) > 0) {
            $terapi_art = substr($terapi_art, 0, -5);
        }
        $data->terapi_art = $terapi_art;
        $data->alasan_lain_substitusi = $request->alasan_lain_substitusi;
        $data->alasan_lain_switch = $request->alasan_lain_switch;
        $data->alasan_lain_stop = $request->alasan_lain_stop;
        $data->klasifikasi_tb = $request->klasifikasi_tb;
        $data->ptb = $request->ptb;
        $data->kabupaten_tptb = $request->kabupaten_tptb;
        $data->nama_tptb = $request->nama_tptb;
        $data->noreg_tptb = $request->noreg_tptb;
        $data->ttb = $request->ttb;
        $data->tgl_mulai_terapi_tb = $request->tgl_mulai_terapi_tb;
        $data->tgl_selesai_terapi_tb = $request->tgl_selesai_terapi_tb;
        $data->ii = $request->ii;
        $data->tgl_kunjungan_follow_up = $request->tgl_kunjungan_follow_up;
        $data->rencana_tgl_kunjungan = $request->rencana_tgl_kunjungan;
        $data->prm = $request->prm;
        $data->drt = $request->drt;
        $data->nama_klinik_sebelumnya = $request->nama_klinik_sebelumnya;
        $data->bbf = $request->bbf;
        $data->tbf = $request->tbf;
        $data->sfu = $request->sfu;
        $data->stad_klinis = $request->stad_klinis;
        $data->hkb = $request->hkb;
        $infop = '';
        if(isset($request->infop_1)) {
            $infop .= '1-';
        }
        if(isset($request->infop_2)) {
            $infop .= '2-';
        }
        if(isset($request->infop_3)) {
            $infop .= '3-';
        }
        if(isset($request->infop_4)) {
            $infop .= '4-';
        }
        if(isset($request->infop_5)) {
            $infop .= '5-';
        }
        if(isset($request->infop_6)) {
            $infop .= '6-';
        }
        if(isset($request->infop_7)) {
            $infop .= '7-';
        }
        if(isset($request->infop_8)) {
            $infop .= '8-';
        }
        if(isset($request->infop_9)) {
            $infop .= '9-';
        }
        if(isset($request->infop_10)) {
            $infop .= '10-';
        }
        if(isset($request->infop_11)) {
            $infop .= '11-';
        }
        if(strlen($infop) > 0) {
            $infop = substr($infop, 0, -1);
        }
        $data->infop = $infop;
        $data->keterangan_infop = $request->keterangan_infop;
        $data->obat_untuk_io = $request->obat_untuk_io;
        $data->stb = $request->stb;
        $data->ppk = $request->ppk;
        $data->inh = $request->inh;
        $data->hkr = $request->hkr;
        $data->obat_arv = $request->obat_arv;
        $data->adr = $request->adr;
        $esart = '';
        if(isset($request->esart_1)) {
            $esart .= '1-';
        }
        if(isset($request->esart_2)) {
            $esart .= '2-';
        }
        if(isset($request->esart_3)) {
            $esart .= '3-';
        }
        if(isset($request->esart_4)) {
            $esart .= '4-';
        }
        if(isset($request->esart_5)) {
            $esart .= '5-';
        }
        if(isset($request->esart_6)) {
            $esart .= '6-';
        }
        if(isset($request->esart_7)) {
            $esart .= '7-';
        }
        if(isset($request->esart_8)) {
            $esart .= '8-';
        }
        if(isset($request->esart_9)) {
            $esart .= '9-';
        }
        if(isset($request->esart_10)) {
            $esart .= '10-';
        }
        if(isset($request->esart_11)) {
            $esart .= '11-';
        }
        if(isset($request->esart_12)) {
            $esart .= '12-';
        }
        if(isset($request->esart_13)) {
            $esart .= '13-';
        }
        if(isset($request->esart_14)) {
            $esart .= '14-';
        }
        if(isset($request->esart_15)) {
            $esart .= '15-';
        }
        if(isset($request->esart_16)) {
            $esart .= '16-';
        }
        if(strlen($esart) > 0) {
            $esart = substr($esart, 0, -1);
        }
        $data->esart = $esart;
        $data->keterangan_esart = $request->keterangan_esart;
        $data->jumlah_cd4 = $request->jumlah_cd4;
        $data->hasil_lab = $request->hasil_lab;
        $data->dkr = $request->dkr;
        $data->jumlah_kondom = $request->jumlah_kondom;
        $data->rsmrs = $request->rsmrs;
        $data->fll = $request->fll;
        $data->tgl_meninggal = $request->tgl_meninggal;
        $data->tgl_kunjungan_terakhir = $request->tgl_kunjungan_terakhir;
        $data->tgl_keluar = $request->tgl_keluar;
        $data->nama_klinik_baru = $request->nama_klinik_baru;
        $data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->rj_hiv_anti_retroval = True;
        $daftar_dokumen->save();

    	return redirect('daftar_dokumen');
    }

    public function get_rj_hiv_anti_retroval_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RJHIVAntiRetroval::where('id_regis', $id_pasien)->first();
        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['no_reg_nasional'] = $pasien->no_reg_nasional;
        $this->data['nik'] = $pasien->nik;
        $this->data['nama_ibu_kandung'] = $pasien->nama_ibu_kandung;
        $this->data['alamat_pasien'] = $pasien->alamat_pasien;
        $this->data['no_telp'] = $pasien->no_telp;
        $this->data['nama_pmo'] = $pasien->nama_pmo;
        $this->data['hubungan_dengan_pasien'] = $pasien->hubungan_dengan_pasien;
        $this->data['alamat_pmo'] = $pasien->alamat_pmo;
        $this->data['no_telp_pmo'] = $pasien->no_telp_pmo;
        $this->data['tgl_konfirm_tes_hiv'] = $pasien->tgl_konfirm_tes_hiv;
        $this->data['tempat_tes_hiv'] = $pasien->tempat_tes_hiv;
        $this->data['entry_point'] = $pasien->entry_point;
        $this->data['keterangan_entry_point'] = $pasien->keterangan_entry_point;
        $this->data['riwayat_alergi_obat'] = $pasien->riwayat_alergi_obat;
        $this->data['pendidikan'] = $pasien->pendidikan;
        $this->data['pekerjaan'] = $pasien->pekerjaan;
        $this->data['nama_pekerjaan'] = $pasien->nama_pekerjaan;
        $list_fr = $pasien->fr;
        $exploded_fr = explode("-", $list_fr);
        $this->data['fr'] = array();
        foreach ($exploded_fr as $key => $value) {
            $this->data['fr'][$value] = True;
        }
        $this->data['keterangan_rawat_jalan'] = $pasien->keterangan_rawat_jalan;
        $this->data['keterangan_jangkauan'] = $pasien->keterangan_jangkauan;
        $this->data['keterangan_fr_lainnya'] = $pasien->keterangan_fr_lainnya;
        $this->data['status_pernikahan'] = $pasien->status_pernikahan;
        $rows_riwayat_keluarga = explode("$&!^@", $pasien->riwayat_keluarga);
        $this->data['riwayat_keluarga'] = array();
        foreach ($rows_riwayat_keluarga as $key => $value) {
            $data_keluarga = explode("#&!^@", $value);
            $this->data['riwayat_keluarga'][$key] = $data_keluarga;
        }

        $this->data['pernah_menerima_art'] = $pasien->pernah_menerima_art;
        $this->data['jenis_art'] = $pasien->jenis_art;
        $this->data['tempat_art_dulu'] = $pasien->tempat_art_dulu;
        $this->data['nama_arv'] = $pasien->nama_arv;
        $this->data['dosis_arv'] = $pasien->dosis_arv;
        $this->data['lama_penggunaan'] = $pasien->lama_penggunaan;
        $this->data['tanggal_pkl_1'] = $pasien->tanggal_pkl_1;
        $this->data['stad_klinis_pkl_1'] = $pasien->stad_klinis_pkl_1;
        $this->data['bb_pkl_1'] = $pasien->bb_pkl_1;
        $this->data['status_fungsional_pkl_1'] = $pasien->status_fungsional_pkl_1;
        $this->data['cd4_pkl_1'] = $pasien->cd4_pkl_1;
        $this->data['lain_lain_pkl_1'] = $pasien->lain_lain_pkl_1;
        $this->data['tanggal_pkl_2'] = $pasien->tanggal_pkl_2;
        $this->data['stad_klinis_pkl_2'] = $pasien->stad_klinis_pkl_2;
        $this->data['bb_pkl_2'] = $pasien->bb_pkl_2;
        $this->data['status_fungsional_pkl_2'] = $pasien->status_fungsional_pkl_2;
        $this->data['cd4_pkl_2'] = $pasien->cd4_pkl_2;
        $this->data['lain_lain_pkl_2'] = $pasien->lain_lain_pkl_2;
        $this->data['tanggal_pkl_3'] = $pasien->tanggal_pkl_3;
        $this->data['stad_klinis_pkl_3'] = $pasien->stad_klinis_pkl_3;
        $this->data['bb_pkl_3'] = $pasien->bb_pkl_3;
        $this->data['status_fungsional_pkl_3'] = $pasien->status_fungsional_pkl_3;
        $this->data['cd4_pkl_3'] = $pasien->cd4_pkl_3;
        $this->data['lain_lain_pkl_3'] = $pasien->lain_lain_pkl_3;
        $this->data['tanggal_pkl_4'] = $pasien->tanggal_pkl_4;
        $this->data['stad_klinis_pkl_4'] = $pasien->stad_klinis_pkl_4;
        $this->data['bb_pkl_4'] = $pasien->bb_pkl_4;
        $this->data['status_fungsional_pkl_4'] = $pasien->status_fungsional_pkl_4;
        $this->data['cd4_pkl_4'] = $pasien->cd4_pkl_4;
        $this->data['lain_lain_pkl_4'] = $pasien->lain_lain_pkl_4;
        $this->data['tanggal_pkl_5'] = $pasien->tanggal_pkl_5;
        $this->data['stad_klinis_pkl_5'] = $pasien->stad_klinis_pkl_5;
        $this->data['bb_pkl_5'] = $pasien->bb_pkl_5;
        $this->data['status_fungsional_pkl_5'] = $pasien->status_fungsional_pkl_5;
        $this->data['cd4_pkl_5'] = $pasien->cd4_pkl_5;
        $this->data['lain_lain_pkl_5'] = $pasien->lain_lain_pkl_5;
        $this->data['tanggal_pkl_6'] = $pasien->tanggal_pkl_6;
        $this->data['stad_klinis_pkl_6'] = $pasien->stad_klinis_pkl_6;
        $this->data['bb_pkl_6'] = $pasien->bb_pkl_6;
        $this->data['status_fungsional_pkl_6'] = $pasien->status_fungsional_pkl_6;
        $this->data['cd4_pkl_6'] = $pasien->cd4_pkl_6;
        $this->data['lain_lain_pkl_6'] = $pasien->lain_lain_pkl_6;
        $rows_terapi_art = explode("$&!^@", $pasien->terapi_art);
        $this->data['terapi_art'] = array();
        foreach ($rows_terapi_art as $key => $value) {
            $data_terapi = explode("#&!^@", $value);
            $this->data['terapi_art'][$key] = $data_terapi;
        }
        $this->data['alasan_lain_substitusi'] = $pasien->alasan_lain_substitusi;
        $this->data['alasan_lain_switch'] = $pasien->alasan_lain_switch;
        $this->data['alasan_lain_stop'] = $pasien->alasan_lain_stop;
        $this->data['klasifikasi_tb'] = $pasien->klasifikasi_tb;
        $this->data['ptb'] = $pasien->ptb;
        $this->data['kabupaten_tptb'] = $pasien->kabupaten_tptb;
        $this->data['nama_tptb'] = $pasien->nama_tptb;
        $this->data['noreg_tptb'] = $pasien->noreg_tptb;
        $this->data['ttb'] = $pasien->ttb;
        $this->data['tgl_mulai_terapi_tb'] = $pasien->tgl_mulai_terapi_tb;
        $this->data['tgl_selesai_terapi_tb'] = $pasien->tgl_selesai_terapi_tb;
        $this->data['ii'] = $pasien->ii;
        $this->data['tgl_kunjungan_follow_up'] = $pasien->tgl_kunjungan_follow_up;
        $this->data['rencana_tgl_kunjungan'] = $pasien->rencana_tgl_kunjungan;
        $this->data['prm'] = $pasien->prm;
        $this->data['drt'] = $pasien->drt;
        $this->data['nama_klinik_sebelumnya'] = $pasien->nama_klinik_sebelumnya;
        $this->data['bbf'] = $pasien->bbf;
        $this->data['tbf'] = $pasien->tbf;
        $this->data['sfu'] = $pasien->sfu;
        $this->data['stad_klinis'] = $pasien->stad_klinis;
        $this->data['hkb'] = $pasien->hkb;
        $rows_infop = explode("-", $pasien->infop);
        $this->data['infop'] = array();
        foreach ($rows_infop as $key => $value) {
            $this->data['infop'][$value] = True;
        }
        $this->data['keterangan_infop'] = $pasien->keterangan_infop;
        $this->data['obat_untuk_io'] = $pasien->obat_untuk_io;
        $this->data['stb'] = $pasien->stb;
        $this->data['ppk'] = $pasien->ppk;
        $this->data['inh'] = $pasien->inh;
        $this->data['hkr'] = $pasien->hkr;
        $this->data['obat_arv'] = $pasien->obat_arv;
        $this->data['adr'] = $pasien->adr;
        $rows_esart = explode("-", $pasien->esart);
        $this->data['esart'] = array();
        foreach ($rows_esart as $key => $value) {
            $this->data['esart'][$value] = True;
        }
        $this->data['keterangan_esart'] = $pasien->keterangan_esart;
        $this->data['jumlah_cd4'] = $pasien->jumlah_cd4;
        $this->data['hasil_lab'] = $pasien->hasil_lab;
        $this->data['dkr'] = $pasien->dkr;
        $this->data['jumlah_kondom'] = $pasien->jumlah_kondom;
        $this->data['rsmrs'] = $pasien->rsmrs;
        $this->data['fll'] = $pasien->fll;
        $this->data['tgl_meninggal'] = $pasien->tgl_meninggal;
        $this->data['tgl_kunjungan_terakhir'] = $pasien->tgl_kunjungan_terakhir;
        $this->data['tgl_keluar'] = $pasien->tgl_keluar;
        $this->data['nama_klinik_baru'] = $pasien->nama_klinik_baru;
    
    }

    public function get_rj_hiv_anti_retroval_read()
    {
        $this->get_rj_hiv_anti_retroval_data();
        return view('page.rj.hiv_anti_retroval_read', $this->data);
    }

    public function get_rj_hiv_anti_retroval_edit()
    {
        $this->get_rj_hiv_anti_retroval_data();
        return view('page.rj.hiv_anti_retroval_edit', $this->data);
    }

    public function post_rj_hiv_anti_retroval_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RJHIVAntiRetroval::where('id_regis', $id_pasien)->first();
        $data->id_regis = $id_pasien;
        $data->no_reg_nasional = $request->no_reg_nasional;
        $data->nik = $request->nik;
        $data->nama_ibu_kandung = $request->nama_ibu_kandung;
        $data->alamat_pasien = $request->alamat_pasien;
        $data->no_telp = $request->no_telp;
        $data->nama_pmo = $request->nama_pmo;
        $data->hubungan_dengan_pasien = $request->hubungan_dengan_pasien;
        $data->alamat_pmo = $request->alamat_pmo;
        $data->no_telp_pmo = $request->no_telp_pmo;
        $data->tgl_konfirm_tes_hiv = $request->tgl_konfirm_tes_hiv;
        $data->tempat_tes_hiv = $request->tempat_tes_hiv;
        $data->entry_point = $request->entry_point;
        $data->keterangan_entry_point = $request->keterangan_entry_point;
        $data->riwayat_alergi_obat = $request->riwayat_alergi_obat;
        $data->pendidikan = $request->pendidikan;
        $data->pekerjaan = $request->pekerjaan;
        $data->nama_pekerjaan = $request->nama_pekerjaan;
        $fr = '';
        if(isset($request->fr_1)) {
            $fr .= '1-';
        }
        if(isset($request->fr_2)) {
            $fr .= '2-';
        }
        if(isset($request->fr_3)) {
            $fr .= '3-';
        }
        if(isset($request->fr_4)) {
            $fr .= '4-';
        }
        if(isset($request->fr_5)) {
            $fr .= '5-';
        }
        if(isset($request->fr_6)) {
            $fr .= '6-';
        }
        if(isset($request->fr_7)) {
            $fr .= '7-';
        }
        if(isset($request->fr_8)) {
            $fr .= '8-';
        }
        if(strlen($fr) > 0) {
            $fr = substr($fr, 0, -1);
        }
        $data->fr = $fr;
        $data->keterangan_rawat_jalan = $request->keterangan_rawat_jalan;
        $data->keterangan_jangkauan = $request->keterangan_jangkauan;
        $data->keterangan_fr_lainnya = $request->keterangan_fr_lainnya;
        $data->status_pernikahan = $request->status_pernikahan;
        $jumlah_form_keluarga = $request->jumlah_form_keluarga;
        $riwayat_keluarga = '';
        for($i = 1; $i <= $jumlah_form_keluarga; $i++) {
            $str_nama = 'nama_'.$i;
            $str_hub = 'hub_'.$i;
            $str_umur = 'umur_'.$i;
            $str_hiv = 'hiv_'.$i;
            $str_art = 'art_'.$i;
            $str_noregnas = 'noregnas_'.$i;
            if(!is_null($request->$str_nama)) {
                $riwayat_keluarga .= $request->$str_nama."#&!^@".$request->$str_hub."#&!^@".$request->$str_umur."#&!^@".$request->$str_hiv."#&!^@".$request->$str_art."#&!^@".$request->$str_noregnas."$&!^@";
            }
        }
        if(strlen($riwayat_keluarga) > 0) {
            $riwayat_keluarga = substr($riwayat_keluarga, 0, -5);
        }
        $data->riwayat_keluarga = $riwayat_keluarga;
        $data->pernah_menerima_art = $request->pernah_menerima_art;
        $data->jenis_art = $request->jenis_art;
        $data->tempat_art_dulu = $request->tempat_art_dulu;
        $data->nama_arv = $request->nama_arv;
        $data->dosis_arv = $request->dosis_arv;
        $data->lama_penggunaan = $request->lama_penggunaan;
        $data->tanggal_pkl_1 = $request->tanggal_pkl_1;
        $data->stad_klinis_pkl_1 = $request->stad_klinis_pkl_1;
        $data->bb_pkl_1 = $request->bb_pkl_1;
        $data->status_fungsional_pkl_1 = $request->status_fungsional_pkl_1;
        $data->cd4_pkl_1 = $request->cd4_pkl_1;
        $data->lain_lain_pkl_1 = $request->lain_lain_pkl_1;
        $data->tanggal_pkl_2 = $request->tanggal_pkl_2;
        $data->stad_klinis_pkl_2 = $request->stad_klinis_pkl_2;
        $data->bb_pkl_2 = $request->bb_pkl_2;
        $data->status_fungsional_pkl_2 = $request->status_fungsional_pkl_2;
        $data->cd4_pkl_2 = $request->cd4_pkl_2;
        $data->lain_lain_pkl_2 = $request->lain_lain_pkl_2;
        $data->tanggal_pkl_3 = $request->tanggal_pkl_3;
        $data->stad_klinis_pkl_3 = $request->stad_klinis_pkl_3;
        $data->bb_pkl_3 = $request->bb_pkl_3;
        $data->status_fungsional_pkl_3 = $request->status_fungsional_pkl_3;
        $data->cd4_pkl_3 = $request->cd4_pkl_3;
        $data->lain_lain_pkl_3 = $request->lain_lain_pkl_3;
        $data->tanggal_pkl_4 = $request->tanggal_pkl_4;
        $data->stad_klinis_pkl_4 = $request->stad_klinis_pkl_4;
        $data->bb_pkl_4 = $request->bb_pkl_4;
        $data->status_fungsional_pkl_4 = $request->status_fungsional_pkl_4;
        $data->cd4_pkl_4 = $request->cd4_pkl_4;
        $data->lain_lain_pkl_4 = $request->lain_lain_pkl_4;
        $data->tanggal_pkl_5 = $request->tanggal_pkl_5;
        $data->stad_klinis_pkl_5 = $request->stad_klinis_pkl_5;
        $data->bb_pkl_5 = $request->bb_pkl_5;
        $data->status_fungsional_pkl_5 = $request->status_fungsional_pkl_5;
        $data->cd4_pkl_5 = $request->cd4_pkl_5;
        $data->lain_lain_pkl_5 = $request->lain_lain_pkl_5;
        $data->tanggal_pkl_6 = $request->tanggal_pkl_6;
        $data->stad_klinis_pkl_6 = $request->stad_klinis_pkl_6;
        $data->bb_pkl_6 = $request->bb_pkl_6;
        $data->status_fungsional_pkl_6 = $request->status_fungsional_pkl_6;
        $data->cd4_pkl_6 = $request->cd4_pkl_6;
        $data->lain_lain_pkl_6 = $request->lain_lain_pkl_6;
        $jumlah_form_art = $request->jumlah_form_art;
        $terapi_art = '';
        for($i = 1; $i <= $jumlah_form_art; $i++) {
            $str_nama_panduan_orisinil_art = 'nama_panduan_orisinil_art_'.$i;
            $str_tanggal_art = 'tanggal_art_'.$i;
            $str_substitusi_art = 'substitusi_art_'.$i;
            $str_switch_art = 'switch_art_'.$i;
            $str_stop_art = 'stop_art_'.$i;
            $str_restar_art = 'restar_art_'.$i;
            $str_alasan_art = 'alasan_art_'.$i;
            $str_nama_panduan_baru_art = 'nama_panduan_baru_art_'.$i;
            if(!is_null($request->$str_nama_panduan_orisinil_art)) {
                $terapi_art .= $request->$str_nama_panduan_orisinil_art."#&!^@".$request->$str_tanggal_art."#&!^@".$request->$str_substitusi_art."#&!^@".$request->$str_switch_art."#&!^@".$request->$str_stop_art."#&!^@".$request->$str_restar_art."#&!^@".$request->$str_alasan_art."#&!^@".$request->$str_nama_panduan_baru_art."$&!^@";
            }
        }
        if(strlen($terapi_art) > 0) {
            $terapi_art = substr($terapi_art, 0, -5);
        }
        $data->terapi_art = $terapi_art;
        $data->alasan_lain_substitusi = $request->alasan_lain_substitusi;
        $data->alasan_lain_switch = $request->alasan_lain_switch;
        $data->alasan_lain_stop = $request->alasan_lain_stop;
        $data->klasifikasi_tb = $request->klasifikasi_tb;
        $data->ptb = $request->ptb;
        $data->kabupaten_tptb = $request->kabupaten_tptb;
        $data->nama_tptb = $request->nama_tptb;
        $data->noreg_tptb = $request->noreg_tptb;
        $data->ttb = $request->ttb;
        $data->tgl_mulai_terapi_tb = $request->tgl_mulai_terapi_tb;
        $data->tgl_selesai_terapi_tb = $request->tgl_selesai_terapi_tb;
        $data->ii = $request->ii;
        $data->tgl_kunjungan_follow_up = $request->tgl_kunjungan_follow_up;
        $data->rencana_tgl_kunjungan = $request->rencana_tgl_kunjungan;
        $data->prm = $request->prm;
        $data->drt = $request->drt;
        $data->nama_klinik_sebelumnya = $request->nama_klinik_sebelumnya;
        $data->bbf = $request->bbf;
        $data->tbf = $request->tbf;
        $data->sfu = $request->sfu;
        $data->stad_klinis = $request->stad_klinis;
        $data->hkb = $request->hkb;
        $infop = '';
        if(isset($request->infop_1)) {
            $infop .= '1-';
        }
        if(isset($request->infop_2)) {
            $infop .= '2-';
        }
        if(isset($request->infop_3)) {
            $infop .= '3-';
        }
        if(isset($request->infop_4)) {
            $infop .= '4-';
        }
        if(isset($request->infop_5)) {
            $infop .= '5-';
        }
        if(isset($request->infop_6)) {
            $infop .= '6-';
        }
        if(isset($request->infop_7)) {
            $infop .= '7-';
        }
        if(isset($request->infop_8)) {
            $infop .= '8-';
        }
        if(isset($request->infop_9)) {
            $infop .= '9-';
        }
        if(isset($request->infop_10)) {
            $infop .= '10-';
        }
        if(isset($request->infop_11)) {
            $infop .= '11-';
        }
        if(strlen($infop) > 0) {
            $infop = substr($infop, 0, -1);
        }
        $data->infop = $infop;
        $data->keterangan_infop = $request->keterangan_infop;
        $data->obat_untuk_io = $request->obat_untuk_io;
        $data->stb = $request->stb;
        $data->ppk = $request->ppk;
        $data->inh = $request->inh;
        $data->hkr = $request->hkr;
        $data->obat_arv = $request->obat_arv;
        $data->adr = $request->adr;
        $esart = '';
        if(isset($request->esart_1)) {
            $esart .= '1-';
        }
        if(isset($request->esart_2)) {
            $esart .= '2-';
        }
        if(isset($request->esart_3)) {
            $esart .= '3-';
        }
        if(isset($request->esart_4)) {
            $esart .= '4-';
        }
        if(isset($request->esart_5)) {
            $esart .= '5-';
        }
        if(isset($request->esart_6)) {
            $esart .= '6-';
        }
        if(isset($request->esart_7)) {
            $esart .= '7-';
        }
        if(isset($request->esart_8)) {
            $esart .= '8-';
        }
        if(isset($request->esart_9)) {
            $esart .= '9-';
        }
        if(isset($request->esart_10)) {
            $esart .= '10-';
        }
        if(isset($request->esart_11)) {
            $esart .= '11-';
        }
        if(isset($request->esart_12)) {
            $esart .= '12-';
        }
        if(isset($request->esart_13)) {
            $esart .= '13-';
        }
        if(isset($request->esart_14)) {
            $esart .= '14-';
        }
        if(isset($request->esart_15)) {
            $esart .= '15-';
        }
        if(isset($request->esart_16)) {
            $esart .= '16-';
        }
        if(strlen($esart) > 0) {
            $esart = substr($esart, 0, -1);
        }
        $data->esart = $esart;
        $data->keterangan_esart = $request->keterangan_esart;
        $data->jumlah_cd4 = $request->jumlah_cd4;
        $data->hasil_lab = $request->hasil_lab;
        $data->dkr = $request->dkr;
        $data->jumlah_kondom = $request->jumlah_kondom;
        $data->rsmrs = $request->rsmrs;
        $data->fll = $request->fll;
        $data->tgl_meninggal = $request->tgl_meninggal;
        $data->tgl_kunjungan_terakhir = $request->tgl_kunjungan_terakhir;
        $data->tgl_keluar = $request->tgl_keluar;
        $data->nama_klinik_baru = $request->nama_klinik_baru;
        $data->save();

        return redirect('daftar_dokumen');
    }
}
