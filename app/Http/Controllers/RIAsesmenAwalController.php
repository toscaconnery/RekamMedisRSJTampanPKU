<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIAsesmenAwalPerawat;
use App\Models\RIAsesmenAwalDokter;
use App\Models\ListDocument;
use Session;
use View;


class RIAsesmenAwalController extends Controller
{
    public function __construct()
    {
    	$this->data['title'] = 'Asesmen Awal Pasien Rawat Inap';
    }

    public function get_ri_asesmen_awal_perawat()
    {
    	return view('page.ri.asesmen_awal_perawat', $this->data);
    }

    public function post_ri_asesmen_awal_perawat(Request $request)
    {
    	$jenis_form = $request->jenis_form;
    	$id_pasien = Session::get('id_pasien');
    	if($jenis_form == 'create') {
	    	$data = new RIAsesmenAwalPerawat;
    	}
    	else {
	    	$data = RIAsesmenAwalPerawat::where('id_regis', $id_pasien)->first();
    	}
    	$data->id_regis = $id_pasien;
    	$data->tanggal_diperiksa = $request->tanggal_diperiksa;
		$data->jam_diperiksa = $request->jam_diperiksa;
		$data->nadi = $request->nadi;
		$data->td = $request->td;
		$data->napas = $request->napas;
		$data->suhu = $request->suhu;
		$data->tb = $request->tb;
		$data->bb = $request->bb;
		$data->kondisi = $request->kondisi;
		$data->kondisi_ket = $request->kondisi_ket;
		$data->asal = $request->asal;
		$data->dokter_pemeriksa = $request->dokter_pemeriksa;
		$data->dokter_keluarga = $request->dokter_keluarga;
		$data->diagnosis_masuk = $request->diagnosis_masuk;
		$data->dpjp = $request->dpjp;
		$data->alergi = $request->alergi;
		$data->jenis_reaksi = $request->jenis_reaksi;
		$barang = '';
		if(isset($request->barang1)) {
			$barang .= '1-';
		}
		if(isset($request->barang2)) {
			$barang .= '2-';
		}
		if(isset($request->barang3)) {
			$barang .= '3-';
		}
		if(strlen($barang) > 0) {
			$barang = substr($barang, 0, -1);
		}
		$data->barang = $barang;
		$data->deskripsi_barang_berharga = $request->deskripsi_barang_berharga;
		$tindak = '';
		if(isset($request->tindak1)) {
			$tindak .= '1-';
		}
		if(isset($request->tindak2)) {
			$tindak .= '2-';
		}
		if(strlen($tindak) > 0) {
			$tindak = substr($tindak, 0, -1);
		}
		$data->tindak = $tindak;
		$data->tindakan_barang = $request->tindakan_barang;
		$alat = '';
		if(isset($request->alat1)) {
			$alat .= '1-';
		}
		if(isset($request->alat2)) {
			$alat .= '2-';
		}
		if(isset($request->alat3)) {
			$alat .= '3-';
		}
		if(isset($request->alat4)) {
			$alat .= '4-';
		}
		if(isset($request->alat5)) {
			$alat .= '5-';
		}
		if(strlen($alat) > 0) {
			$alat = substr($alat, 0, -1);
		}
		$data->alat = $alat;
		$data->alat_bantu_lainnya = $request->alat_bantu_lainnya;
		$friwayatpasien1 = '';
		if(isset($request->friwayatpasien1_1)) {
			$friwayatpasien1 .= '1-';
		}
		if(isset($request->friwayatpasien1_2)) {
			$friwayatpasien1 .= '2-';
		}
		if(isset($request->friwayatpasien1_3)) {
			$friwayatpasien1 .= '3-';
		}
		if(isset($request->friwayatpasien1_4)) {
			$friwayatpasien1 .= '4-';
		}
		if(isset($request->friwayatpasien1_5)) {
			$friwayatpasien1 .= '5-';
		}
		if(isset($request->friwayatpasien1_6)) {
			$friwayatpasien1 .= '6-';
		}
		if(isset($request->friwayatpasien1_7)) {
			$friwayatpasien1 .= '7-';
		}
		if(isset($request->friwayatpasien1_8)) {
			$friwayatpasien1 .= '8-';
		}
		if(isset($request->friwayatpasien1_9)) {
			$friwayatpasien1 .= '9-';
		}
		if(isset($request->friwayatpasien1_10)) {
			$friwayatpasien1 .= '10-';
		}
		if(isset($request->friwayatpasien1_11)) {
			$friwayatpasien1 .= '11-';
		}
		if(isset($request->friwayatpasien1_12)) {
			$friwayatpasien1 .= '12-';
		}
		if(isset($request->friwayatpasien1_13)) {
			$friwayatpasien1 .= '13-';
		}
		if(isset($request->friwayatpasien1_14)) {
			$friwayatpasien1 .= '14-';
		}
		if(isset($request->friwayatpasien1_15)) {
			$friwayatpasien1 .= '15-';
		}
		if(isset($request->friwayatpasien1_16)) {
			$friwayatpasien1 .= '16-';
		}
		if(isset($request->friwayatpasien1_17)) {
			$friwayatpasien1 .= '17-';
		}
		if(strlen($friwayatpasien1) > 0) {
			$friwayatpasien1 = substr($friwayatpasien1, 0, -1);
		}
		$data->friwayatpasien1 = $friwayatpasien1;
		$data->friwayatpasien2 = $request->friwayatpasien2;
		$data->friwayatpasien3 = $request->friwayatpasien3;
		$data->friwayatpasien4 = $request->friwayatpasien4;
		$data->friwayatpasien5 = $request->friwayatpasien5;
		if(isset($request->friwayatpasien6)) {
			$data->friwayatpasien6 = 1;
		}
		else {
			$data->friwayatpasien6 = 0;
		}
		$data->friwayatpasien7 = $request->friwayatpasien7;
		$data->friwayatpasien8 = $request->friwayatpasien8;
		$data->friwayatpasien9 = $request->friwayatpasien9;
		if(isset($request->friwayatpasien10)) {
			$data->friwayatpasien10 = 1;
		}
		else {
			$data->friwayatpasien10 = 0;
		}
		$data->friwayatpasien11 = $request->friwayatpasien11;
		$data->friwayatpasien12 = $request->friwayatpasien12;
		$data->friwayatpasien13 = $request->friwayatpasien13;
		$data->friwayatpasien14 = $request->friwayatpasien14;
		$data->friwayatpasien15 = $request->friwayatpasien15;
		$data->friwayatpasien16 = $request->friwayatpasien16;
		$data->friwayatpasien17 = $request->friwayatpasien17;
		$data->friwayatpasien18 = $request->friwayatpasien18;
		$data->friwayatpasien19 = $request->friwayatpasien19;
		$data->friwayatpasien20 = $request->friwayatpasien20;
		$data->friwayatpasien21 = $request->friwayatpasien21;
		$data->friwayatpasien22 = $request->friwayatpasien22;
		$data->friwayatpasien23 = $request->friwayatpasien23;
		$data->friwayatpasien24 = $request->friwayatpasien24;
		$data->friwayatpasien25 = $request->friwayatpasien25;
		$data->friwayatpasien26 = $request->friwayatpasien26;
		$data->friwayatpasien27 = $request->friwayatpasien27;
		$data->friwayatpasien28 = $request->friwayatpasien28;
		$data->friwayatpasien29 = $request->friwayatpasien29;
		$data->friwayatpasien30 = $request->friwayatpasien30;
		$data->friwayatpasien31 = $request->friwayatpasien31;
		$data->friwayatpasien32 = $request->friwayatpasien32;
		$data->friwayatpasien33 = $request->friwayatpasien33;
		$friwayatkeluarga = '';
		if(isset($request->friwayatkeluarga1)) {
			$friwayatkeluarga .= '1-';
		}
		if(isset($request->friwayatkeluarga2)) {
			$friwayatkeluarga .= '2-';
		}
		if(isset($request->friwayatkeluarga3)) {
			$friwayatkeluarga .= '3-';
		}
		if(isset($request->friwayatkeluarga4)) {
			$friwayatkeluarga .= '4-';
		}
		if(isset($request->friwayatkeluarga5)) {
			$friwayatkeluarga .= '5-';
		}
		if(isset($request->friwayatkeluarga6)) {
			$friwayatkeluarga .= '6-';
		}
		if(isset($request->friwayatkeluarga7)) {
			$friwayatkeluarga .= '7-';
		}
		if(isset($request->friwayatkeluarga8)) {
			$friwayatkeluarga .= '8-';
		}
		if(isset($request->friwayatkeluarga9)) {
			$friwayatkeluarga .= '9-';
		}
		if(isset($request->friwayatkeluarga10)) {
			$friwayatkeluarga .= '10-';
		}
		if(isset($request->friwayatkeluarga11)) {
			$friwayatkeluarga .= '11-';
		}
		if(isset($request->friwayatkeluarga12)) {
			$friwayatkeluarga .= '12-';
		}
		if(isset($request->friwayatkeluarga13)) {
			$friwayatkeluarga .= '13-';
		}
		if(isset($request->friwayatkeluarga14)) {
			$friwayatkeluarga .= '14-';
		}
		if(isset($request->friwayatkeluarga15)) {
			$friwayatkeluarga .= '15-';
		}

		if(strlen($friwayatkeluarga) > 0) {
			$friwayatkeluarga  = substr($friwayatkeluarga, 0, -1);
		}
		$data->friwayatkeluarga = $friwayatkeluarga;
		$data->friwayatpsikososial1 = $request->friwayatpsikososial1;
		$data->friwayatpsikososial2 = $request->friwayatpsikososial2;
		$data->friwayatpsikososial3 = $request->friwayatpsikososial3;
		$data->friwayatpsikososial4 = $request->friwayatpsikososial4;
		$data->friwayatpsikososial5 = $request->friwayatpsikososial5;
		$data->friwayatpsikososial6 = $request->friwayatpsikososial6;
		$data->friwayatpsikososial7 = $request->friwayatpsikososial7;
		$data->friwayatpsikososial8 = $request->friwayatpsikososial8;
		$data->friwayatpsikososial9 = $request->friwayatpsikososial9;
		if(isset($request->friwayatpsikososial10)) {
			$data->friwayatpsikososial10 = 1;
		}
		else {
			$data->friwayatpsikososial10 = 0;
		}
		if(isset($request->friwayatpsikososial11)) {
			$data->friwayatpsikososial11 = 1;
		}
		else {
			$data->friwayatpsikososial11 = 0;
		}
		if(isset($request->friwayatpsikososial12)) {
			$data->friwayatpsikososial12 = 1;
		}
		else {
			$data->friwayatpsikososial12 = 0;
		}
		if(isset($request->friwayatpsikososial13)) {
			$data->friwayatpsikososial13 = 1;
		}
		else {
			$data->friwayatpsikososial13 = 0;
		}
		if(isset($request->friwayatpsikososial14)) {
			$data->friwayatpsikososial14 = 1;
		}
		else {
			$data->friwayatpsikososial14 = 0;
		}
		$data->fkeluarga1 = $request->fkeluarga1;
		$data->fkeluarga2 = $request->fkeluarga2;
		$data->fkeluarga3 = $request->fkeluarga3;
		$data->fkonsepdiri1 = $request->fkonsepdiri1;
		$data->fkonsepdiri2 = $request->fkonsepdiri2;
		$data->fkonsepdiri3 = $request->fkonsepdiri3;
		$data->fkonsepdiri4 = $request->fkonsepdiri4;
		$data->fkonsepdiri5 = $request->fkonsepdiri5;
		$data->fhubungansosial1 = $request->fhubungansosial1;
		$data->fhubungansosial2 = $request->fhubungansosial2;
		$data->fhubungansosial3 = $request->fhubungansosial3;
		$data->fspiritual1 = $request->fspiritual1;
		$data->fspiritual2 = $request->fspiritual2;
		$fpenampilan = '';
		if(isset($request->fpenampilan1)){
			$fpenampilan .= '1-';
		}
		if(isset($request->fpenampilan2)){
			$fpenampilan .= '2-';
		}
		if(isset($request->fpenampilan3)){
			$fpenampilan .= '3-';
		}
		if(strlen($fpenampilan) > 0) {
			$fpenampilan = substr($fpenampilan, 0, -1);
		}
		$data->fpenampilan = $fpenampilan;
		$data->fpenampilan_ket = $request->fpenampilan_ket;
		$fpembicaraan = '';
		if(isset($request->fpembicaraan1)) {
			$fpembicaraan .= '1-';
		}
		if(isset($request->fpembicaraan2)) {
			$fpembicaraan .= '2-';
		}
		if(isset($request->fpembicaraan3)) {
			$fpembicaraan .= '3-';
		}
		if(isset($request->fpembicaraan4)) {
			$fpembicaraan .= '4-';
		}
		if(isset($request->fpembicaraan5)) {
			$fpembicaraan .= '5-';
		}
		if(isset($request->fpembicaraan6)) {
			$fpembicaraan .= '6-';
		}
		if(isset($request->fpembicaraan7)) {
			$fpembicaraan .= '7-';
		}
		if(isset($request->fpembicaraan8)) {
			$fpembicaraan .= '8-';
		}
		if(strlen($fpembicaraan) > 0) {
			$fpembicaraan = substr($fpembicaraan, 0, -1);
		}
		$data->fpembicaraan = $fpembicaraan;
		$data->fpembicaraan_ket = $request->fpembicaraan_ket;
		$faktivitasmotorik = '';
		if(isset($request->faktivitasmotorik1)) {
			$faktivitasmotorik .= '1-';
		}
		if(isset($request->faktivitasmotorik2)) {
			$faktivitasmotorik .= '2-';
		}
		if(isset($request->faktivitasmotorik3)) {
			$faktivitasmotorik .= '3-';
		}
		if(isset($request->faktivitasmotorik4)) {
			$faktivitasmotorik .= '4-';
		}
		if(isset($request->faktivitasmotorik5)) {
			$faktivitasmotorik .= '5-';
		}
		if(isset($request->faktivitasmotorik6)) {
			$faktivitasmotorik .= '6-';
		}
		if(isset($request->faktivitasmotorik7)) {
			$faktivitasmotorik .= '7-';
		}
		if(isset($request->faktivitasmotorik8)) {
			$faktivitasmotorik .= '8-';
		}
		if(isset($request->faktivitasmotorik9)) {
			$faktivitasmotorik .= '9-';
		}
		if(strlen($faktivitasmotorik) > 0) {
			$faktivitasmotorik = substr($faktivitasmotorik, 0, -1);
		}
		$data->faktivitasmotorik = $faktivitasmotorik;
		$data->faktivitasmotorik_ket = $request->faktivitasmotorik_ket;
		$falamperasaan = '';
		if(isset($request->falamperasaan1)) {
			$falamperasaan .= '1-';
		}
		if(isset($request->falamperasaan2)) {
			$falamperasaan .= '2-';
		}
		if(isset($request->falamperasaan3)) {
			$falamperasaan .= '3-';
		}
		if(isset($request->falamperasaan4)) {
			$falamperasaan .= '4-';
		}
		if(isset($request->falamperasaan5)) {
			$falamperasaan .= '5-';
		}
		if(isset($request->falamperasaan6)) {
			$falamperasaan .= '6-';
		}
		if(strlen($falamperasaan) > 0) {
			$falamperasaan = substr($falamperasaan, 0, -1);
		}
		$data->falamperasaan = $falamperasaan;
		$data->falamperasaan_ket = $request->falamperasaan_ket;
		$fafek = '';
		if(isset($request->fafek1)) {
			$fafek .= '1-';
		}
		if(isset($request->fafek2)) {
			$fafek .= '2-';
		}
		if(isset($request->fafek3)) {
			$fafek .= '3-';
		}
		if(isset($request->fafek4)) {
			$fafek .= '4-';
		}
		if(strlen($fafek) > 0) {
			$fafek = substr($fafek, 0, -1);
		}
		$data->fafek = $fafek;
		$data->fafek_ket = $request->fafek_ket;
		$finteraksi = '';
		if(isset($request->finteraksi1)) {
			$finteraksi .= '1-'; 
		}
		if(isset($request->finteraksi2)) {
			$finteraksi .= '2-'; 
		}
		if(isset($request->finteraksi3)) {
			$finteraksi .= '3-'; 
		}
		if(isset($request->finteraksi4)) {
			$finteraksi .= '4-'; 
		}
		if(isset($request->finteraksi5)) {
			$finteraksi .= '5-'; 
		}
		if(isset($request->finteraksi6)) {
			$finteraksi .= '6-'; 
		}
		if(strlen($finteraksi) > 0) {
			$finteraksi = substr($finteraksi, 0, -1);
		}
		$data->finteraksi = $finteraksi;
		$data->finteraksi_ket = $request->finteraksi_ket;
		$fpersepsi = '';
		if(isset($request->fpersepsi1)) {
			$fpersepsi .= '1-';
		}
		if(isset($request->fpersepsi2)) {
			$fpersepsi .= '2-';
		}
		if(isset($request->fpersepsi3)) {
			$fpersepsi .= '3-';
		}
		if(isset($request->fpersepsi4)) {
			$fpersepsi .= '4-';
		}
		if(isset($request->fpersepsi5)) {
			$fpersepsi .= '5-';
		}
		if(isset($request->fpersepsi6)) {
			$fpersepsi .= '6-';
		}
		if(strlen($fpersepsi) > 0) {
			$fpersepsi = substr($fpersepsi, 0, -1);
		}
		$data->fpersepsi = $fpersepsi;
		$data->fpersepsi_ket = $request->fpersepsi_ket;
		$fisikpikir = '';
		if(isset($request->fisikpikir1)) {
			$fisikpikir .= '1-';
		}
		if(isset($request->fisikpikir2)) {
			$fisikpikir .= '2-';
		}
		if(isset($request->fisikpikir3)) {
			$fisikpikir .= '3-';
		}
		if(isset($request->fisikpikir4)) {
			$fisikpikir .= '4-';
		}
		if(isset($request->fisikpikir5)) {
			$fisikpikir .= '5-';
		}
		if(isset($request->fisikpikir6)) {
			$fisikpikir .= '6-';
		}
		if(isset($request->fisikpikir7)) {
			$fisikpikir .= '7-';
		}
		if(isset($request->fisikpikir8)) {
			$fisikpikir .= '8-';
		}
		if(isset($request->fisikpikir9)) {
			$fisikpikir .= '9-';
		}
		if(isset($request->fisikpikir10)) {
			$fisikpikir .= '10-';
		}
		if(isset($request->fisikpikir11)) {
			$fisikpikir .= '11-';
		}
		if(isset($request->fisikpikir12)) {
			$fisikpikir .= '12-';
		}
		if(isset($request->fisikpikir13)) {
			$fisikpikir .= '13-';
		}
		if(isset($request->fisikpikir14)) {
			$fisikpikir .= '14-';
		}
		if(isset($request->fisikpikir15)) {
			$fisikpikir .= '15-';
		}
		if(strlen($fisikpikir) > 0) {
			$fisikpikir = substr($fisikpikir, 0, -1);
		}
		$data->fisikpikir = $fisikpikir;
		$data->fisikpikir_ket = $request->fisikpikir_ket;
		$faruspikir = '';
		if(isset($request->faruspikir1)) {
			$faruspikir .= '1-';
		}
		if(isset($request->faruspikir2)) {
			$faruspikir .= '2-';
		}
		if(isset($request->faruspikir3)) {
			$faruspikir .= '3-';
		}
		if(isset($request->faruspikir4)) {
			$faruspikir .= '4-';
		}
		if(isset($request->faruspikir5)) {
			$faruspikir .= '5-';
		}
		if(isset($request->faruspikir6)) {
			$faruspikir .= '6-';
		}
		if(strlen($faruspikir) > 0) {
			$faruspikir = substr($faruspikir, 0, -1);
		}
		$data->faruspikir = $faruspikir;
		$data->faruspikir_ket = $request->faruspikir_ket;
		$fmemori = '';
		if(isset($request->fmemori1)) {
			$fmemori .= '1-';
		}
		if(isset($request->fmemori2)) {
			$fmemori .= '2-';
		}
		if(isset($request->fmemori3)) {
			$fmemori .= '3-';
		}
		if(isset($request->fmemori4)) {
			$fmemori .= '4-';
		}
		if(strlen($fmemori) > 0) {
			$fmemori = substr($fmemori, 0, -1);
		}
		$data->fmemori = $fmemori;
		$data->fmemori_ket = $request->fmemori_ket;
		$fkonsentrasi = '';
		if(isset($request->fkonsentrasi1)) {
			$fkonsentrasi .= '1-';
		}
		if(isset($request->fkonsentrasi2)) {
			$fkonsentrasi .= '2-';
		}
		if(isset($request->fkonsentrasi3)) {
			$fkonsentrasi .= '3-';
		}
		if(strlen($fkonsentrasi) > 0) {
			$fkonsentrasi = substr($fkonsentrasi, 0, -1);
		}
		$data->fkonsentrasi = $fkonsentrasi;
		$data->fkonsentrasi_ket = $request->fkonsentrasi_ket;
		$fkemampuanpenilaian = '';
		if(isset($request->fkemampuanpenilaian1)) {
			$fkemampuanpenilaian .= '1-';
		}
		if(isset($request->fkemampuanpenilaian2)) {
			$fkemampuanpenilaian .= '2-';
		}
		if(strlen($fkemampuanpenilaian) > 0) {
			$fkemampuanpenilaian = substr($fkemampuanpenilaian, 0, -1);
		}
		$data->fkemampuanpenilaian = $fkemampuanpenilaian;
		$data->fkemampuanpenilaian_ket = $request->fkemampuanpenilaian_ket;
		$fdaya = '';
		if(isset($request->fdaya1)) {
			$fdaya .= '1-';
		}
		if(isset($request->fdaya2)) {
			$fdaya .= '2-';
		}
		if(strlen($fdaya) > 0) {
			$fdaya = substr($fdaya, 0, -1);
		}
		$data->fdaya = $fdaya;
		$data->fdaya_ket = $request->fdaya_ket;
		$fpengajaran = '';
		if(isset($request->fpengajaran1)) {
			$fpengajaran .= '1-';
		}
		if(isset($request->fpengajaran2)) {
			$fpengajaran .= '2-';
		}
		if(isset($request->fpengajaran3)) {
			$fpengajaran .= '3-';
		}
		if(isset($request->fpengajaran4)) {
			$fpengajaran .= '4-';
		}
		if(isset($request->fpengajaran5)) {
			$fpengajaran .= '5-';
		}
		if(isset($request->fpengajaran6)) {
			$fpengajaran .= '6-';
		}
		if(isset($request->fpengajaran7)) {
			$fpengajaran .= '7-';
		}
		if(isset($request->fpengajaran8)) {
			$fpengajaran .= '8-';
		}
		if(isset($request->fpengajaran9)) {
			$fpengajaran .= '9-';
		}
		if(isset($request->fpengajaran10)) {
			$fpengajaran .= '10-';
		}
		if(isset($request->fpengajaran11)) {
			$fpengajaran .= '11-';
		}
		if(strlen($fpengajaran) > 0) {
			$fpengajaran = substr($fpengajaran, 0, -1);
		}
		$data->fpengajaran = $fpengajaran;
		$data->fkomunikasi1 = $request->fkomunikasi1;
		$data->fkomunikasi2 = $request->fkomunikasi2;
		$data->fkomunikasi3 = $request->fkomunikasi3;
		$data->fkomunikasi4 = $request->fkomunikasi4;
		$data->fkomunikasi5 = $request->fkomunikasi5;
		$data->fkomunikasi6 = $request->fkomunikasi6;
		$data->fkomunikasi7 = $request->fkomunikasi7;
		$data->fkomunikasi8 = $request->fkomunikasi8;
		$data->fkomunikasi9 = $request->fkomunikasi9;
		$fkomunikasi10 = '';
		if(isset($request->fkomunikasi10_1)) {
			$fkomunikasi10 .= '1-';
		}
		if(isset($request->fkomunikasi10_2)) {
			$fkomunikasi10 .= '2-';
		}
		if(isset($request->fkomunikasi10_3)) {
			$fkomunikasi10 .= '3-';
		}
		if(isset($request->fkomunikasi10_4)) {
			$fkomunikasi10 .= '4-';
		}
		if(isset($request->fkomunikasi10_5)) {
			$fkomunikasi10 .= '5-';
		}
		if(isset($request->fkomunikasi10_6)) {
			$fkomunikasi10 .= '6-';
		}
		if(isset($request->fkomunikasi10_7)) {
			$fkomunikasi10 .= '7-';
		}
		if(isset($request->fkomunikasi10_8)) {
			$fkomunikasi10 .= '8-';
		}
		if(isset($request->fkomunikasi10_9)) {
			$fkomunikasi10 .= '9-';
		}
		if(isset($request->fkomunikasi10_10)) {
			$fkomunikasi10 .= '10-';
		}
		if(isset($request->fkomunikasi10_11)) {
			$fkomunikasi10 .= '11-';
		}
		if(isset($request->fkomunikasi10_12)) {
			$fkomunikasi10 .= '12-';
		}
		if(strlen($fkomunikasi10) > 0) {
			$fkomunikasi10 = substr($fkomunikasi10, 0, -1);
		}
		$data->fkomunikasi10 = $fkomunikasi10;
		$fkomunikasi11 = '';
		if(isset($request->fkomunikasi11_1)) {
			$fkomunikasi11 .= '1-';
		}
		if(isset($request->fkomunikasi11_2)) {
			$fkomunikasi11 .= '2-';
		}
		if(isset($request->fkomunikasi11_3)) {
			$fkomunikasi11 .= '3-';
		}
		if(isset($request->fkomunikasi11_4)) {
			$fkomunikasi11 .= '4-';
		}
		if(isset($request->fkomunikasi11_5)) {
			$fkomunikasi11 .= '5-';
		}
		if(isset($request->fkomunikasi11_6)) {
			$fkomunikasi11 .= '6-';
		}
		if(strlen($fkomunikasi11) > 0) {
			$fkomunikasi11 = substr($fkomunikasi11, 0, -1);
		}
		$data->fkomunikasi11 = $fkomunikasi11;
		$data->fkomunikasi12 = $request->fkomunikasi12;
		$data->fkomunikasi13 = $request->fkomunikasi13;
		$data->fkomunikasi14 = $request->fkomunikasi14;
		$data->fgizi1 = $request->fgizi1;
		$data->fgizi2 = $request->fgizi2;
		$data->fresikojatuh1 = $request->fresikojatuh1;
		$data->fresikojatuh2 = $request->fresikojatuh2;
		$data->fnyeri1 = $request->fnyeri1;
		$data->fnyeri2 = $request->fnyeri2;
		$data->fnyeri3 = $request->fnyeri3;
		$data->fnyeri4 = $request->fnyeri4;
		$data->fnyeri5 = $request->fnyeri5;
		$data->fnyeri6 = $request->fnyeri6;
		$data->fnyeri7 = $request->fnyeri7;
		$data->fnyeri8 = $request->fnyeri8;
		$data->fnyeri9 = $request->fnyeri9;
		$data->fnyeri10 = $request->fnyeri10;
		$data->fnyeri11 = $request->fnyeri11;
		$data->fnyeri12 = $request->fnyeri12;
		$fnyeri13 = '';
		if(isset($request->fnyeri13_1)) {
			$fnyeri13 .= '1-';
		}
		if(isset($request->fnyeri13_2)) {
			$fnyeri13 .= '2-';
		}
		if(isset($request->fnyeri13_3)) {
			$fnyeri13 .= '3-';
		}
		if(isset($request->fnyeri13_4)) {
			$fnyeri13 .= '4-';
		}
		if(isset($request->fnyeri13_5)) {
			$fnyeri13 .= '5-';
		}
		if(isset($request->fnyeri13_6)) {
			$fnyeri13 .= '6-';
		}
		if(isset($request->fnyeri13_7)) {
			$fnyeri13 .= '7-';
		} 
		if(strlen($fnyeri13) > 0) {
			$fnyeri13 = substr($fnyeri13, 0, -1);
		}
		$data->fnyeri13 = $fnyeri13;
		$data->fnyeri14 = $request->fnyeri14;
		$fdiagnosaumum = '';
		if(isset($request->fdiagnosaumum1)) {
			$fdiagnosaumum .= '1-';
		}
		if(isset($request->fdiagnosaumum2)) {
			$fdiagnosaumum .= '2-';
		}
		if(isset($request->fdiagnosaumum3)) {
			$fdiagnosaumum .= '3-';
		}
		if(isset($request->fdiagnosaumum4)) {
			$fdiagnosaumum .= '4-';
		}
		if(isset($request->fdiagnosaumum5)) {
			$fdiagnosaumum .= '5-';
		}
		if(isset($request->fdiagnosaumum6)) {
			$fdiagnosaumum .= '6-';
		}
		if(isset($request->fdiagnosaumum7)) {
			$fdiagnosaumum .= '7-';
		}
		if(isset($request->fdiagnosaumum8)) {
			$fdiagnosaumum .= '8-';
		}
		if(isset($request->fdiagnosaumum9)) {
			$fdiagnosaumum .= '9-';
		}
		if(isset($request->fdiagnosaumum10)) {
			$fdiagnosaumum .= '10-';
		}
		if(isset($request->fdiagnosaumum11)) {
			$fdiagnosaumum .= '11-';
		}
		if(isset($request->fdiagnosaumum12)) {
			$fdiagnosaumum .= '12-';
		}
		if(isset($request->fdiagnosaumum13)) {
			$fdiagnosaumum .= '13-';
		}
		if(isset($request->fdiagnosaumum14)) {
			$fdiagnosaumum .= '14-';
		}
		if(strlen($fdiagnosaumum) > 0) {
			$fdiagnosaumum = substr($fdiagnosaumum, 0, -1);
		}
		$data->fdiagnosaumum = $fdiagnosaumum;
		$data->fdiagnosaumum_ket = $request->fdiagnosaumum_ket;
		$fdiagnosajiwa = '';
		if(isset($request->fdiagnosajiwa1)) {
			$fdiagnosajiwa .= '1-';
		}
		if(isset($request->fdiagnosajiwa2)) {
			$fdiagnosajiwa .= '2-';
		}
		if(isset($request->fdiagnosajiwa3)) {
			$fdiagnosajiwa .= '3-';
		}
		if(isset($request->fdiagnosajiwa4)) {
			$fdiagnosajiwa .= '4-';
		}
		if(isset($request->fdiagnosajiwa5)) {
			$fdiagnosajiwa .= '5-';
		}
		if(isset($request->fdiagnosajiwa6)) {
			$fdiagnosajiwa .= '6-';
		}
		if(isset($request->fdiagnosajiwa7)) {
			$fdiagnosajiwa .= '7-';
		}
		if(isset($request->fdiagnosajiwa8)) {
			$fdiagnosajiwa .= '8-';
		}
		if(isset($request->fdiagnosajiwa9)) {
			$fdiagnosajiwa .= '9-';
		}
		if(isset($request->fdiagnosajiwa10)) {
			$fdiagnosajiwa .= '10-';
		}
		if(isset($request->fdiagnosajiwa11)) {
			$fdiagnosajiwa .= '11-';
		}
		if(isset($request->fdiagnosajiwa12)) {
			$fdiagnosajiwa .= '12-';
		}
		if(strlen($fdiagnosajiwa) > 0) {
			$fdiagnosajiwa = substr($fdiagnosajiwa, 0, -1);
		}
		$data->fdiagnosajiwa = $fdiagnosajiwa;
		$data->fdiagnosajiwa_ket = $request->fdiagnosajiwa_ket;
		$data->tanggal = $request->tanggal;
		$data->jam = $request->jam;
		$data->nama_perawat = $request->nama_perawat;
		$data->resume = $request->resume;

		$data->jenis_resiko_jatuh = $request->jenis_resiko_jatuh;
        if($request->jenis_resiko_jatuh == 'humpty_dumpty')
        {
            $data->usia = $request->usia;
            $data->diagnosis_hd = $request->diagnosis_hd;
            $data->gangguan_kognitif = $request->gangguan_kognitif;
            $data->faktor_lingkungan = $request->faktor_lingkungan;
            $data->waktu_respon_obat = $request->waktu_respon_obat;
            $data->penggunaan_obat = $request->penggunaan_obat;
            
        }
        elseif($request->jenis_resiko_jatuh == 'morse')
        {
            $data->riwayat_jatuh_mrs = $request->riwayat_jatuh_mrs;
            $data->diagnosis_sekunder = $request->diagnosis_sekunder;
            $data->alat_bantu = $request->alat_bantu;
            $data->terpasang_infus = $request->terpasang_infus;
            $data->gaya_berjalan = $request->gaya_berjalan;
            $data->status_mental_mrs = $request->status_mental_mrs;
        }
        elseif($request->jenis_resiko_jatuh == 'edmunson')
        {
            $data->status_mental_edm = $request->status_mental_edm;
            $data->diagnosis_edm = $request->diagnosis_edm;
            $data->eliminasi = $request->eliminasi;
            $data->pengobatan = $request->pengobatan;
            $data->diagnosa = $request->diagnosa;
            $data->ambulasi = $request->ambulasi;
            $data->nutrisi = $request->nutrisi;
            $data->riwayat_jatuh_edm = $request->riwayat_jatuh_edm;
        }

        //obat
        $obat = '';
        $jumlah_form = $request->jumlah_form;
        for ($i=1; $i <= $jumlah_form ; $i++) { 
        	$str_nama_obat = 'nama_obat_'.$i;
        	$str_dosis_obat = 'dosis_obat_'.$i;
        	$str_terakhir_obat = 'terakhir_obat_'.$i;
        	if(!empty($request->$str_nama_obat)) {
        		$obat .= $request->$str_nama_obat.'@&$*#'.$request->$str_dosis_obat.'@&$*#'.$request->$str_terakhir_obat.'^&$*#';
        	}
        }
        if(strlen($obat) > 0) {
        	$obat = substr($obat, 0, -5);
        }
        $data->obat = $obat;
    	$data->save();

    	return redirect('ri_asesmen_awal_perawat_read');
    }

    public function get_ri_asesmen_awal_perawat_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIAsesmenAwalPerawat::where('id_regis', $id_pasien)->first();
    	$this->data['tanggal_diperiksa'] = $pasien->tanggal_diperiksa;
		$this->data['jam_diperiksa'] = $pasien->jam_diperiksa;
		$this->data['nadi'] = $pasien->nadi;
		$this->data['td'] = $pasien->td;
		$this->data['napas'] = $pasien->napas;
		$this->data['suhu'] = $pasien->suhu;
		$this->data['tb'] = $pasien->tb;
		$this->data['bb'] = $pasien->bb;
		$this->data['kondisi'] = $pasien->kondisi;
		$this->data['kondisi_ket'] = $pasien->kondisi_ket;
		$this->data['asal'] = $pasien->asal;
		$this->data['dokter_pemeriksa'] = $pasien->dokter_pemeriksa;
		$this->data['dokter_keluarga'] = $pasien->dokter_keluarga;
		$this->data['diagnosis_masuk'] = $pasien->diagnosis_masuk;
		$this->data['dpjp'] = $pasien->dpjp;
		$this->data['alergi'] = $pasien->alergi;
		$this->data['jenis_reaksi'] = $pasien->jenis_reaksi;
		$barang = explode('-', $pasien->barang);
		$this->data['barang'] = array();
		foreach ($barang as $key => $value) {
			$this->data['barang'][$value] = True;
		}
		$this->data['deskripsi_barang_berharga'] = $pasien->deskripsi_barang_berharga;
		$tindak = explode('-', $pasien->tindak);
		$this->data['tindak'] = array();
		foreach ($tindak as $key => $value) {
			$this->data['tindak'][$value] = True;
		}
		$this->data['tindakan_barang'] = $pasien->tindakan_barang;
		$alat = explode('-', $pasien->alat);
		$this->data['alat'] = array();
		foreach ($alat as $key => $value) {
			$this->data['alat'][$value] = True;
		}
		$this->data['alat_bantu_lainnya'] = $pasien->alat_bantu_lainnya;
		$friwayatpasien1 = explode('-', $pasien->friwayatpasien1);
		$this->data['friwayatpasien1'] = array();
		foreach ($friwayatpasien1 as $key => $value) {
			$this->data['friwayatpasien1'][$value] = True;
		}
		$this->data['friwayatpasien2'] = $pasien->friwayatpasien2;
		$this->data['friwayatpasien3'] = $pasien->friwayatpasien3;
		$this->data['friwayatpasien4'] = $pasien->friwayatpasien4;
		$this->data['friwayatpasien5'] = $pasien->friwayatpasien5;
		$this->data['friwayatpasien6'] = $pasien->friwayatpasien6;
		$this->data['friwayatpasien7'] = $pasien->friwayatpasien7;
		$this->data['friwayatpasien8'] = $pasien->friwayatpasien8;
		$this->data['friwayatpasien9'] = $pasien->friwayatpasien9;
		$this->data['friwayatpasien10'] = $pasien->friwayatpasien10;
		$this->data['friwayatpasien11'] = $pasien->friwayatpasien11;
		$this->data['friwayatpasien12'] = $pasien->friwayatpasien12;
		$this->data['friwayatpasien13'] = $pasien->friwayatpasien13;
		$this->data['friwayatpasien14'] = $pasien->friwayatpasien14;
		$this->data['friwayatpasien15'] = $pasien->friwayatpasien15;
		$this->data['friwayatpasien16'] = $pasien->friwayatpasien16;
		$this->data['friwayatpasien17'] = $pasien->friwayatpasien17;
		$this->data['friwayatpasien18'] = $pasien->friwayatpasien18;
		$this->data['friwayatpasien19'] = $pasien->friwayatpasien19;
		$this->data['friwayatpasien20'] = $pasien->friwayatpasien20;
		$this->data['friwayatpasien21'] = $pasien->friwayatpasien21;
		$this->data['friwayatpasien22'] = $pasien->friwayatpasien22;
		$this->data['friwayatpasien23'] = $pasien->friwayatpasien23;
		$this->data['friwayatpasien24'] = $pasien->friwayatpasien24;
		$this->data['friwayatpasien25'] = $pasien->friwayatpasien25;
		$this->data['friwayatpasien26'] = $pasien->friwayatpasien26;
		$this->data['friwayatpasien27'] = $pasien->friwayatpasien27;
		$this->data['friwayatpasien28'] = $pasien->friwayatpasien28;
		$this->data['friwayatpasien29'] = $pasien->friwayatpasien29;
		$this->data['friwayatpasien30'] = $pasien->friwayatpasien30;
		$this->data['friwayatpasien31'] = $pasien->friwayatpasien31;
		$this->data['friwayatpasien32'] = $pasien->friwayatpasien32;
		$this->data['friwayatpasien33'] = $pasien->friwayatpasien33;
		$friwayatkeluarga = explode('-', $pasien->friwayatkeluarga);
		$this->data['friwayatkeluarga'] = array();
		foreach ($friwayatkeluarga as $key => $value) {
			$this->data['friwayatkeluarga'][$value] = True;
		}
		$this->data['friwayatpsikososial1'] = $pasien->friwayatpsikososial1;
		$this->data['friwayatpsikososial2'] = $pasien->friwayatpsikososial2;
		$this->data['friwayatpsikososial3'] = $pasien->friwayatpsikososial3;
		$this->data['friwayatpsikososial4'] = $pasien->friwayatpsikososial4;
		$this->data['friwayatpsikososial5'] = $pasien->friwayatpsikososial5;
		$this->data['friwayatpsikososial6'] = $pasien->friwayatpsikososial6;
		$this->data['friwayatpsikososial7'] = $pasien->friwayatpsikososial7;
		$this->data['friwayatpsikososial8'] = $pasien->friwayatpsikososial8;
		$this->data['friwayatpsikososial9'] = $pasien->friwayatpsikososial9;
		$this->data['friwayatpsikososial10'] = $pasien->friwayatpsikososial10;
		$this->data['friwayatpsikososial11'] = $pasien->friwayatpsikososial11;
		$this->data['friwayatpsikososial12'] = $pasien->friwayatpsikososial12;
		$this->data['friwayatpsikososial13'] = $pasien->friwayatpsikososial13;
		$this->data['friwayatpsikososial14'] = $pasien->friwayatpsikososial14;
		$this->data['fkeluarga1'] = $pasien->fkeluarga1;
		$this->data['fkeluarga2'] = $pasien->fkeluarga2;
		$this->data['fkeluarga3'] = $pasien->fkeluarga3;
		$this->data['fkonsepdiri1'] = $pasien->fkonsepdiri1;
		$this->data['fkonsepdiri2'] = $pasien->fkonsepdiri2;
		$this->data['fkonsepdiri3'] = $pasien->fkonsepdiri3;
		$this->data['fkonsepdiri4'] = $pasien->fkonsepdiri4;
		$this->data['fkonsepdiri5'] = $pasien->fkonsepdiri5;
		$this->data['fhubungansosial1'] = $pasien->fhubungansosial1;
		$this->data['fhubungansosial2'] = $pasien->fhubungansosial2;
		$this->data['fhubungansosial3'] = $pasien->fhubungansosial3;
		$this->data['fspiritual1'] = $pasien->fspiritual1;
		$this->data['fspiritual2'] = $pasien->fspiritual2;
		$fpenampilan = explode('-', $pasien->fpenampilan);
		$this->data['fpenampilan'] = array();
		foreach ($fpenampilan as $key => $value) {
			$this->data['fpenampilan'][$value] = True;
		}
		$this->data['fpenampilan_ket'] = $pasien->fpenampilan_ket;
		$fpembicaraan = explode('-', $pasien->fpembicaraan);
		$this->data['fpembicaraan'] = array();
		foreach ($fpembicaraan as $key => $value) {
			$this->data['fpembicaraan'][$value] = True;
		}
		$this->data['fpembicaraan_ket'] = $pasien->fpembicaraan_ket;
		$faktivitasmotorik = explode('-', $pasien->faktivitasmotorik);
		$this->data['faktivitasmotorik'] = array();
		foreach ($faktivitasmotorik as $key => $value) {
			$this->data['faktivitasmotorik'][$value] = True;
		}
		$this->data['faktivitasmotorik_ket'] = $pasien->faktivitasmotorik_ket;
		$falamperasaan = explode('-', $pasien->falamperasaan);
		$this->data['falamperasaan'] = array();
		foreach ($falamperasaan as $key => $value) {
			$this->data['falamperasaan'][$value] = True;
		}
		$this->data['falamperasaan_ket'] = $pasien->falamperasaan_ket;
		$fafek = explode('-', $pasien->fafek);
		$this->data['fafek'] = array();
		foreach ($fafek as $key => $value) {
			$this->data['fafek'][$value] = True;
		}
		$this->data['fafek_ket'] = $pasien->fafek_ket;
		$finteraksi = explode('-', $pasien->finteraksi);
		$this->data['finteraksi'] = array();
		foreach ($finteraksi as $key => $value) {
			$this->data['finteraksi'][$value] = True;
		}
		$this->data['finteraksi_ket'] = $pasien->finteraksi_ket;
		$fpersepsi = explode('-', $pasien->fpersepsi);
		$this->data['fpersepsi'] = array();
		foreach ($fpersepsi as $key => $value) {
			$this->data['fpersepsi'][$value] = True;
		}
		$this->data['fpersepsi_ket'] = $pasien->fpersepsi_ket;
		$fisikpikir = explode('-', $pasien->fisikpikir);
		$this->data['fisikpikir'] = array();
		foreach ($fisikpikir as $key => $value) {
			$this->data['fisikpikir'][$value] = True;
		}
		$this->data['fisikpikir_ket'] = $pasien->fisikpikir_ket;
		$faruspikir = explode('-', $pasien->faruspikir);
		$this->data['faruspikir'] = array();
		foreach ($faruspikir as $key => $value) {
			$this->data['faruspikir'][$value] = True;
		}
		$this->data['faruspikir_ket'] = $pasien->faruspikir_ket;
		$fmemori = explode('-', $pasien->fmemori);
		$this->data['fmemori'] = array();
		foreach ($fmemori as $key => $value) {
			$this->data['fmemori'][$value] = True;
		}
		$this->data['fmemori_ket'] = $pasien->fmemori_ket;
		$fkonsentrasi = explode('-', $pasien->fkonsentrasi);
		$this->data['fkonsentrasi'] = array();
		foreach ($fkonsentrasi as $key => $value) {
			$this->data['fkonsentrasi'][$value] = True;
		}
		$this->data['fkonsentrasi_ket'] = $pasien->fkonsentrasi_ket;
		$fkemampuanpenilaian = explode('-', $pasien->fkemampuanpenilaian);
		$this->data['fkemampuanpenilaian'] = array();
		foreach ($fkemampuanpenilaian as $key => $value) {
			$this->data['fkemampuanpenilaian'][$value] = True;
		}
		$this->data['fkemampuanpenilaian_ket'] = $pasien->fkemampuanpenilaian_ket;
		$fdaya = explode('-', $pasien->fdaya);
		$this->data['fdaya'] = array();
		foreach ($fdaya as $key => $value) {
			$this->data['fdaya'][$value] = True;
		}
		$this->data['fdaya_ket'] = $pasien->fdaya_ket;
		$fpengajaran = explode('-', $pasien->fpengajaran);
		$this->data['fpengajaran'] = array();
		foreach ($fpengajaran as $key => $value) {
			$this->data['fpengajaran'][$value] = True;
		}
		$this->data['fkomunikasi1'] = $pasien->fkomunikasi1;
		$this->data['fkomunikasi2'] = $pasien->fkomunikasi2;
		$this->data['fkomunikasi3'] = $pasien->fkomunikasi3;
		$this->data['fkomunikasi4'] = $pasien->fkomunikasi4;
		$this->data['fkomunikasi5'] = $pasien->fkomunikasi5;
		$this->data['fkomunikasi6'] = $pasien->fkomunikasi6;
		$this->data['fkomunikasi7'] = $pasien->fkomunikasi7;
		$this->data['fkomunikasi8'] = $pasien->fkomunikasi8;
		$this->data['fkomunikasi9'] = $pasien->fkomunikasi9;
		$fkomunikasi10 = explode('-', $pasien->fkomunikasi10);
		$this->data['fkomunikasi10'] = array();
		foreach ($fkomunikasi10 as $key => $value) {
			$this->data['fkomunikasi10'][$value] = True;
		}
		$fkomunikasi11 = explode('-', $pasien->fkomunikasi11);
		$this->data['fkomunikasi11'] = array();
		foreach ($fkomunikasi11 as $key => $value) {
			$this->data['fkomunikasi11'][$value] = True;
		}
		$this->data['fkomunikasi12'] = $pasien->fkomunikasi12;
		$this->data['fkomunikasi13'] = $pasien->fkomunikasi13;
		$this->data['fkomunikasi14'] = $pasien->fkomunikasi14;
		$this->data['fgizi1'] = $pasien->fgizi1;
		$this->data['fgizi2'] = $pasien->fgizi2;
		$this->data['fresikojatuh1'] = $pasien->fresikojatuh1;
		$this->data['fresikojatuh2'] = $pasien->fresikojatuh2;
		$this->data['fnyeri1'] = $pasien->fnyeri1;
		$this->data['fnyeri2'] = $pasien->fnyeri2;
		$this->data['fnyeri3'] = $pasien->fnyeri3;
		$this->data['fnyeri4'] = $pasien->fnyeri4;
		$this->data['fnyeri5'] = $pasien->fnyeri5;
		$this->data['fnyeri6'] = $pasien->fnyeri6;
		$this->data['fnyeri7'] = $pasien->fnyeri7;
		$this->data['fnyeri8'] = $pasien->fnyeri8;
		$this->data['fnyeri9'] = $pasien->fnyeri9;
		$this->data['fnyeri10'] = $pasien->fnyeri10;
		$this->data['fnyeri11'] = $pasien->fnyeri11;
		$this->data['fnyeri12'] = $pasien->fnyeri12;
		$fnyeri13 = explode('-', $pasien->fnyeri13);
		$this->data['fnyeri13'] = array();
		foreach ($fnyeri13 as $key => $value) {
			$this->data['fnyeri13'][$value] = True;
		}
		$this->data['fnyeri14'] = $pasien->fnyeri14;
		$fdiagnosaumum = explode('-', $pasien->fdiagnosaumum);
		$this->data['fdiagnosaumum'] = array();
		foreach ($fdiagnosaumum as $key => $value) {
			$this->data['fdiagnosaumum'][$value] = True;
		}
		$this->data['fdiagnosaumum_ket'] = $pasien->fdiagnosaumum_ket;
		$fdiagnosajiwa = explode('-', $pasien->fdiagnosajiwa);
		$this->data['fdiagnosajiwa'] = array();
		foreach ($fdiagnosajiwa as $key => $value) {
			$this->data['fdiagnosajiwa'][$value] = True;
		}
		$this->data['fdiagnosajiwa_ket'] = $pasien->fdiagnosajiwa_ket;
		$this->data['tanggal'] = $pasien->tanggal;
		$this->data['jam'] = $pasien->jam;
		$this->data['nama_perawat'] = $pasien->nama_perawat;
		$this->data['resume'] = $pasien->resume;

		$this->data['jenis_resiko_jatuh'] = $pasien->jenis_resiko_jatuh;
        $this->data['usia'] = $pasien->usia;
        $this->data['diagnosis_hd'] = $pasien->diagnosis_hd;
        $this->data['gangguan_kognitif'] = $pasien->gangguan_kognitif;
        $this->data['faktor_lingkungan'] = $pasien->faktor_lingkungan;
        $this->data['waktu_respon_obat'] = $pasien->waktu_respon_obat;
        $this->data['penggunaan_obat'] = $pasien->penggunaan_obat;
        $this->data['riwayat_jatuh_mrs'] = $pasien->riwayat_jatuh_mrs;
        $this->data['diagnosis_sekunder'] = $pasien->diagnosis_sekunder;
        $this->data['alat_bantu'] = $pasien->alat_bantu;
        $this->data['terpasang_infus'] = $pasien->terpasang_infus;
        $this->data['gaya_berjalan'] = $pasien->gaya_berjalan;
        $this->data['status_mental_mrs'] = $pasien->status_mental_mrs;
        $this->data['status_mental_edm'] = $pasien->status_mental_edm;
        $this->data['diagnosis_edm'] = $pasien->diagnosis_edm;
        $this->data['eliminasi'] = $pasien->eliminasi;
        $this->data['pengobatan'] = $pasien->pengobatan;
        $this->data['diagnosa'] = $pasien->diagnosa;
        $this->data['ambulasi'] = $pasien->ambulasi;
        $this->data['nutrisi'] = $pasien->nutrisi;
        $this->data['riwayat_jatuh_edm'] = $pasien->riwayat_jatuh_edm;


        $this->data['obat'] = array();
        $row_obat  = explode('^&$*#', $pasien->obat);
        foreach ($row_obat as $key => $value) {
        	$data_obat = explode('@&$*#', $value);
        	$this->data['obat'][$key] = array();
        	$this->data['obat'][$key]['nama_obat'] = $data_obat[0];
        	$this->data['obat'][$key]['dosis_obat'] = $data_obat[1];
        	$this->data['obat'][$key]['terakhir_obat'] = $data_obat[2];

        }
    }

    public function get_ri_asesmen_awal_perawat_read()
    {
    	$this->get_ri_asesmen_awal_perawat_data();
    	return view('page.ri.asesmen_awal_perawat_read', $this->data);
    }

    public function get_ri_asesmen_awal_perawat_edit()
    {
    	$this->get_ri_asesmen_awal_perawat_data();
    	return view('page.ri.asesmen_awal_perawat_edit', $this->data);
    }

    // public function post_ri_asesmen_awal_perawat_edit(Request $request)
    // {
    // 	dd('posting edit perawat');
    // }

    public function get_ri_asesmen_awal_dokter()
    {
    	return view('page.ri.asesmen_awal_dokter', $this->data);
    }

    public function post_ri_asesmen_awal_dokter(Request $request)
    {
    	$id_pasien = Session::get('id_pasien');
    	$jenis_form = $request->jenis_form;
    	if($jenis_form == 'create') {
    		$data = new RIAsesmenAwalDokter;
    	}
    	elseif($jenis_form == 'update') {
    		$data = RIAsesmenAwalDokter::where('id_regis', $id_pasien)->first();
    	}
    	$data->id_regis = $id_pasien;
    	$data->tanggal_diperiksa = $request->tanggal_diperiksa;
		$data->jam_diperiksa = $request->jam_diperiksa;
		$data->anamnesa = $request->anamnesa;
		$data->anamnesa1 = $request->anamnesa1;
		$data->anamnesa2 = $request->anamnesa2;
		$data->anamnesa3 = $request->anamnesa3;
		$data->anamnesa4 = $request->anamnesa4;
		$data->anamnesa5 = $request->anamnesa5;
		$data->anamnesa6 = $request->anamnesa6;
		$data->anamnesa7 = $request->anamnesa7;
		$data->anamnesa8 = $request->anamnesa8;
		$data->psikiatri1 = $request->psikiatri1;
		$data->psikiatri2 = $request->psikiatri2;
		$data->psikiatri3 = $request->psikiatri3;
		$data->psikiatri4 = $request->psikiatri4;
		$data->psikiatri5 = $request->psikiatri5;
		$data->psikiatri6 = $request->psikiatri6;
		$data->psikiatri7 = $request->psikiatri7;
		$data->psikiatri8 = $request->psikiatri8;
		$data->psikiatri9 = $request->psikiatri9;
		$data->psikiatri10 = $request->psikiatri10;
		$data->psikiatri11 = $request->psikiatri11;
		$data->psikiatri12 = $request->psikiatri12;
		$data->psikiatri13 = $request->psikiatri13;
		$data->psikiatri14 = $request->psikiatri14;
		$data->psikiatri15 = $request->psikiatri15;
		$data->psikiatri16 = $request->psikiatri16;
		$data->psikiatri17 = $request->psikiatri17;
		$data->psikiatri18 = $request->psikiatri18;
		$data->psikiatri19 = $request->psikiatri19;
		$data->penunjang1 = $request->penunjang1;
		$data->penunjang2 = $request->penunjang2;
		$data->penunjang3 = $request->penunjang3;
		$data->penunjang4 = $request->penunjang4;
		$data->penilaian1 = $request->penilaian1;
		$data->penilaian2 = $request->penilaian2;
		$data->diagnosis1 = $request->diagnosis1;
		$data->diagnosis2 = $request->diagnosis2;
		$data->diagnosis3 = $request->diagnosis3;
		$data->diagnosis4 = $request->diagnosis4;
		$data->diagnosis5 = $request->diagnosis5;
		$data->rencana1 = $request->rencana1;
		$data->rencana2 = $request->rencana2;
		$data->rencana3 = $request->rencana3;
		$data->instruksi1 = $request->instruksi1;
		$data->Instruksi2 = $request->Instruksi2;
		$data->Instruksi3 = $request->Instruksi3;
		$data->instruksi4 = $request->instruksi4;
		$data->instruksi5 = $request->instruksi5;
		$data->instruksi6 = $request->instruksi6;
		$data->instruksi7 = $request->instruksi7;
		$data->instruksi8 = $request->instruksi8;
		$data->tanggal = $request->tanggal;
		$data->jam = $request->jam;
		$data->nama_dokter = $request->nama_dokter;
		$data->save();
    	
    	return redirect('ri_asesmen_awal_dokter_read');
    }

    public function get_ri_asesmen_awal_dokter_data()
    {
    	$id_pasien = Session::get('id_pasien');
    	$pasien = RIAsesmenAwalDokter::where('id_regis', $id_pasien)->first();
    	$this->data['tanggal_diperiksa'] = $pasien->tanggal_diperiksa;
		$this->data['jam_diperiksa'] = $pasien->jam_diperiksa;
		$this->data['anamnesa'] = $pasien->anamnesa;
		$this->data['anamnesa1'] = $pasien->anamnesa1;
		$this->data['anamnesa2'] = $pasien->anamnesa2;
		$this->data['anamnesa3'] = $pasien->anamnesa3;
		$this->data['anamnesa4'] = $pasien->anamnesa4;
		$this->data['anamnesa5'] = $pasien->anamnesa5;
		$this->data['anamnesa6'] = $pasien->anamnesa6;
		$this->data['anamnesa7'] = $pasien->anamnesa7;
		$this->data['anamnesa8'] = $pasien->anamnesa8;
		$this->data['psikiatri1'] = $pasien->psikiatri1;
		$this->data['psikiatri2'] = $pasien->psikiatri2;
		$this->data['psikiatri3'] = $pasien->psikiatri3;
		$this->data['psikiatri4'] = $pasien->psikiatri4;
		$this->data['psikiatri5'] = $pasien->psikiatri5;
		$this->data['psikiatri6'] = $pasien->psikiatri6;
		$this->data['psikiatri7'] = $pasien->psikiatri7;
		$this->data['psikiatri8'] = $pasien->psikiatri8;
		$this->data['psikiatri9'] = $pasien->psikiatri9;
		$this->data['psikiatri10'] = $pasien->psikiatri10;
		$this->data['psikiatri11'] = $pasien->psikiatri11;
		$this->data['psikiatri12'] = $pasien->psikiatri12;
		$this->data['psikiatri13'] = $pasien->psikiatri13;
		$this->data['psikiatri14'] = $pasien->psikiatri14;
		$this->data['psikiatri15'] = $pasien->psikiatri15;
		$this->data['psikiatri16'] = $pasien->psikiatri16;
		$this->data['psikiatri17'] = $pasien->psikiatri17;
		$this->data['psikiatri18'] = $pasien->psikiatri18;
		$this->data['psikiatri19'] = $pasien->psikiatri19;
		$this->data['penunjang1'] = $pasien->penunjang1;
		$this->data['penunjang2'] = $pasien->penunjang2;
		$this->data['penunjang3'] = $pasien->penunjang3;
		$this->data['penunjang4'] = $pasien->penunjang4;
		$this->data['penilaian1'] = $pasien->penilaian1;
		$this->data['penilaian2'] = $pasien->penilaian2;
		$this->data['diagnosis1'] = $pasien->diagnosis1;
		$this->data['diagnosis2'] = $pasien->diagnosis2;
		$this->data['diagnosis3'] = $pasien->diagnosis3;
		$this->data['diagnosis4'] = $pasien->diagnosis4;
		$this->data['diagnosis5'] = $pasien->diagnosis5;
		$this->data['rencana1'] = $pasien->rencana1;
		$this->data['rencana2'] = $pasien->rencana2;
		$this->data['rencana3'] = $pasien->rencana3;
		$this->data['instruksi1'] = $pasien->instruksi1;
		$this->data['Instruksi2'] = $pasien->Instruksi2;
		$this->data['Instruksi3'] = $pasien->Instruksi3;
		$this->data['instruksi4'] = $pasien->instruksi4;
		$this->data['instruksi5'] = $pasien->instruksi5;
		$this->data['instruksi6'] = $pasien->instruksi6;
		$this->data['instruksi7'] = $pasien->instruksi7;
		$this->data['instruksi8'] = $pasien->instruksi8;
		$this->data['tanggal'] = $pasien->tanggal;
		$this->data['jam'] = $pasien->jam;
		$this->data['nama_dokter'] = $pasien->nama_dokter;
    }

    public function get_ri_asesmen_awal_dokter_read()
    {
    	$this->get_ri_asesmen_awal_dokter_data();
    	return view('page.ri.asesmen_awal_dokter_read', $this->data);
    }

    public function get_ri_asesmen_awal_dokter_edit()
    {
    	$this->get_ri_asesmen_awal_dokter_data();
    	return view('page.ri.asesmen_awal_dokter_edit', $this->data);
    }

    // public function post_ri_asesmen_awal_dokter_edit(Request $request)
    // {
    // 	dd('posting edit dokter');
    // }

    function yatidak($stats)
    {
    	if($stats == '1')
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

    	$this->data['kondisi'] = $this->yatidak($this->data['instruksi4']);

    	if($this->data['kondisi'] == '0')
    	{
    		$this->data['kondisi'] = 'Mandiri';
    	}
    	else if($this->data['kondisi'] == '1')
    	{
    		$this->data['kondisi'] = 'Tempat Tidur';
    	}
    	else if($this->data['kondisi'] == '2')
    	{
    		$this->data['kondisi'] = 'Dipapah';
    	}

    	if($this->data['asal'] == '0')
    	{
    		$this->data['asal'] = 'Poliklinik';
    	}
    	else
    	{
    		$this->data['asal'] = 'IGD';
    	}

    	if($this->data['alergi'] == '0')
    	{
    		$this->data['alergi'] = 'Ada';
    	}
    	else
    	{
    		$this->data['alergi'] = 'Tidak Ada';
    	}

    	if($this->data['friwayatpasien11'] == '0')
    	{
    		$this->data['friwayatpasien11'] = 'Tidak';
    	}
    	else if($this->data['friwayatpasien11'] == '1')
    	{
    		$this->data['friwayatpasien11'] = 'Ya';
    	}
    	else
    	{
    		$this->data['friwayatpasien12'] = 'Menolak';
    	}

    	if($this->data['friwayatpasien12'] == '0')
    	{
    		$this->data['friwayatpasien12'] = 'Tidak';
    	}
    	else if($this->data['friwayatpasien12'] == '1')
    	{
    		$this->data['friwayatpasien12'] = 'Ya';
    	}
    	else
    	{
    		$this->data['friwayatpasien12'] = 'Menolak';
    	}

    	if($this->data['$friwayatpsikososial1'] == '1')
    	{
    		$this->data['$friwayatpsikososial1'] = 'Menikah';
    	}
    	else if($this->data['$friwayatpsikososial1'] == '2')
    	{
    		$this->data['$friwayatpsikososial1'] = 'Belum Menikah';
    	}
    	else
    	{
    		$this->data['$friwayatpsikososial1'] = 'Duda/Janda';
    	}

    	if($this->data['$friwayatpsikososial2'] == '1')
    	{
    		$this->data['$friwayatpsikososial2'] = 'Ada';
    	}
    	else
    	{
    		$this->data['$friwayatpsikososial2'] = 'Tidak Ada';
    	}

    	if($this->data['$friwayatpsikososial3'] == '1')
    	{
    		$this->data['$friwayatpsikososial3'] = 'Serumah';
    	}
    	else
    	{
    		$this->data['$friwayatpsikososial3'] = 'Tidak Serumah';
    	}

    	if($this->data['friwayatpsikososial4'] == '0')
    	{
    		$this->data['friwayatpsikososial4'] = 'Rumah';
    	}
    	else if($this->data['friwayatpsikososial4'] == '1')
    	{
    		$this->data['friwayatpsikososial4'] = 'Panti Asuhan';
    	}

    	if($this->data['friwayatpsikososial6'] == '0')
    	{
    		$this->data['friwayatpsikososial6'] = 'Purna Waktu';
    	}
    	else if($this->data['friwayatpsikososial6'] == '1')
    	{
    		$this->data['friwayatpsikososial6'] = 'Paruh Waktu';
    	}
    	else if($this->data['friwayatpsikososial6'] == '2')
    	{
    		$this->data['friwayatpsikososial6'] = 'Pensiun';
    	}

    	if($this->data['friwayatpsikososial8'] == '0')
    	{
    		$this->data['friwayatpsikososial8'] = 'Mandiri';
    	}
    	else if($this->data['friwayatpsikososial8'] == '1')
    	{
    		$this->data['friwayatpsikososial8'] = 'Tirah Baring';
    	}
    	else if($this->data['friwayatpsikososial8'] == '2')
    	{
    		$this->data['friwayatpsikososial8'] = 'Kursi Roda';
    	}
    	else
    	{
    		$this->data['friwayatpsikososial8'] = 'Tongkat';
    	}

    	if($this->data['friwayatpsikososial9'] == '1')
    	{
    		$this->data['friwayatpsikososial9'] = 'Ya';
    	}
    	else
    	{
    		$this->data['friwayatpsikososial9'] = 'Tidak';
    	}

    	if($this->data['fkeluarga3'] == '0')
    	{
    		$this->data['fkeluarga3'] = 'Pasien';
    	}
    	else if($this->data['fkeluarga3'] == '1')
    	{
    		$this->data['fkeluarga3'] = 'Keluarga';
    	}
    	else
    	{
    		$this->data['fkeluarga3'] = 'Lainnya';
    	}

    	if($this->data['fkomunikasi2'] == '0')
    	{
    		$this->data['fkomunikasi2'] = 'Normal';
    	}
    	else
    	{
    		$this->data['fkomunikasi2'] = 'Gangguan bicara';
    	}

    	if($this->data['fkomunikasi4'] == '0')
    	{
    		$this->data['fkomunikasi4'] = 'Indonesia';
    	}
    	else if($this->data['fkomunikasi4'] == '1')
    	{
    		$this->data['fkomunikasi4'] = 'Inggris';
    	}
    	else if($this->data['fkomunikasi4'] == '2')
    	{
    		$this->data['fkomunikasi4'] = 'Daerah';
    	}
    	else
    	{
    		$this->data['fkomunikasi4'] = 'Lain-lain';
    	}

    	if($this->data['fkomunikasi5'] == '1')
    	{
    		$this->data['fkomunikasi5'] = 'Aktif';
    	}
    	else
    	{
    		$this->data['fkomunikasi5'] = 'Pasif';
    	}

    	if($this->data['fkomunikasi7'] == '1')
    	{
    		$this->data['fkomunikasi7'] = 'Ya';
    	}
    	else
    	{
    		$this->data['fkomunikasi7'] = 'Tidak';
    	}

    	if($this->data['fkomunikasi9'] == '1')
    	{
    		$this->data['fkomunikasi9'] = 'Ya';
    	}
    	else
    	{
    		$this->data['fkomunikasi9'] = 'Tidak';
    	}

    	if($this->data['fkomunikasi12'] == '0')
    	{
    		$this->data['fkomunikasi12'] = 'TK';
    	}
    	else if($this->data['fkomunikasi12'] == '1')
    	{
    		$this->data['fkomunikasi12'] = 'SD';
    	}
    	else if($this->data['fkomunikasi12'] == '2')
    	{
    		$this->data['fkomunikasi12'] = 'SMP';
    	}
    	else if($this->data['fkomunikasi12'] == '3')
    	{
    		$this->data['fkomunikasi12'] = 'SMA';
    	}
    	else if($this->data['fkomunikasi12'] == '4')
    	{
    		$this->data['fkomunikasi12'] = 'Akademi';
    	}
    	else if($this->data['fkomunikasi12'] == '5')
    	{
    		$this->data['fkomunikasi12'] = 'Sarjana';
    	}
    	else
    	{
    		$this->data['fkomunikasi12'] = 'Lain-lain';
    	}

    	if($this->data['fkomunikasi13'] == '1')
    	{
    		$this->data['fkomunikasi13'] = 'Ya';
    	}
    	else
    	{
    		$this->data['fkomunikasi13'] = 'Tidak';
    	}

    	$this->data['fnyeri1'] = $this->yatidak($this->data['fnyeri1']);

    	if($this->data['fnyeri3'] == '0')
    	{
    		$this->data['fnyeri3'] = 'Akut ';
    	}
    	else
    	{
    		$this->data['fnyeri3'] = 'Kronis ';
    	}

    	if($this->data['fnyeri6'] == '0')
    	{
    		$this->data['fnyeri6'] = 'Kejang ';
    	}
    	else if($this->data['fnyeri6'] == '1')
    	{
    		$this->data['fnyeri6'] = 'Konstan ';
    	}
    	else if($this->data['fnyeri6'] == '2')
    	{
    		$this->data['fnyeri6'] = 'Intermiten ';
    	}
    	else
    	{
    		$this->data['fnyeri6'] = 'Lain';
    	}

    	if($this->data['fnyeri7'] == '0')
    	{
    		$this->data['fnyeri7'] = 'Nyeri ';
    	}
    	else if($this->data['fnyeri7'] == '1')
    	{
    		$this->data['fnyeri7'] = 'Kram ';
    	}
    	else if($this->data['fnyeri7'] == '2')
    	{
    		$this->data['fnyeri7'] = 'Tumpul ';
    	}
    	else if($this->data['fnyeri7'] == '3')
    	{
    		$this->data['fnyeri7'] = 'Terbakat ';
    	}
    	else if($this->data['fnyeri7'] == '4')
    	{
    		$this->data['fnyeri7'] = 'Tajam ';
    	}
    	else if($this->data['fnyeri7'] == '5')
    	{
    		$this->data['fnyeri7'] = 'Nyeri Tembak ';
    	}
    	else if($this->data['fnyeri7'] == '6')
    	{
    		$this->data['fnyeri7'] = 'Intermiten ';
    	}
    	else if($this->data['fnyeri7'] == '7')
    	{
    		$this->data['fnyeri7'] = 'Tertekan ';
    	}
    	else
    	{
    		$this->data['fnyeri7'] = 'Lainnya';
    	}

    	if($this->data['fnyeri9'] == '0')
    	{
    		$this->data['fnyeri9'] = 'Cahaya ';
    	}
    	else if($this->data['fnyeri9'] == '1')
    	{
    		$this->data['fnyeri9'] = 'Gelap ';
    	}
    	else if($this->data['fnyeri9'] == '2')
    	{
    		$this->data['fnyeri9'] = 'Gerakan ';
    	}
    	else if($this->data['fnyeri9'] == '3')
    	{
    		$this->data['fnyeri9'] = 'Berbaring ';
    	}
    	else
    	{
    		$this->data['fnyeri9'] = 'Lainnya';
    	}

    	if($this->data['fnyeri11'] == '0')
    	{
    		$this->data['fnyeri11'] = 'Makan ';
    	}
    	else if($this->data['fnyeri11'] == '1')
    	{
    		$this->data['fnyeri11'] = 'Sungi ';
    	}
    	else if($this->data['fnyeri11'] == '2')
    	{
    		$this->data['fnyeri11'] = 'Dingin ';
    	}
    	else if($this->data['fnyeri11'] == '3')
    	{
    		$this->data['fnyeri11'] = 'Panas ';
    	}
    	else
    	{
    		$this->data['fnyeri11'] = 'Lainnya';
    	}

    	//resiko jatuh
        if($this->data['usia']=='1')
        {
            $this->data['usia'] = '(Skor: 4) Dibawah 3 tahun';
        }
        elseif ($this->data['usia']=='2') {
            $this->data['usia'] = '(Skor: 3) 3 – 7 tahun'; 
        }
        elseif ($this->data['usia']=='3') {
            $this->data['usia'] = '(Skor: 2) 7 – 13 tahun'; 
        }
        else {
            $this->data['usia'] = '(Skor: 1) > 13 tahun';
        }

        if($this->data['diagnosis_hd']=='1')
        {
            $this->data['diagnosis_hd'] = '(Skor: 4) Kelainan Neurologi';
        }
        elseif ($this->data['diagnosis_hd']=='2') {
            $this->data['diagnosis_hd'] = '(Skor: 3) Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)'; 
        }
        elseif ($this->data['diagnosis_hd']=='3') {
            $this->data['diagnosis_hd'] = '(Skor: 2) Kelainan psikis / prilaku'; 
        }
        else {
            $this->data['diagnosis_hd'] = '(Skor: 1) Diagnosis lain';
        }

        if($this->data['gangguan_kognitif']=='1')
        {
            $this->data['gangguan_kognitif'] = '(Skor: 3) Tidak sadar terhadap keterbatasan (gangguan kesadaran, retardasi mental';
        }
        elseif ($this->data['gangguan_kognitif']=='2') {
            $this->data['gangguan_kognitif'] = '(Skor: 2) Lupa keterbatasan (anak yang hiperaktif)'; 
        }
        else {
            $this->data['gangguan_kognitif'] = '(Skor: 1) Mengetahui kemampuan diri';
        }

        if($this->data['faktor_lingkungan']=='1')
        {
            $this->data['faktor_lingkungan'] = '(Skor: 4) Riwayat jatuh dari tempat tidur saat bayi';
        }
        elseif ($this->data['faktor_lingkungan']=='2') {
            $this->data['faktor_lingkungan'] = '(Skor: 3) Pasien menggunakan alat bantu atau box meubel'; 
        }
        elseif ($this->data['faktor_lingkungan']=='3') {
            $this->data['faktor_lingkungan'] = '(Skor: 2) Pasien berada di tempat tidur'; 
        }
        else {
            $this->data['faktor_lingkungan'] = '(Skor: 1) Di luar ruang rawat';
        }

        if($this->data['waktu_respon_obat']=='1')
        {
            $this->data['waktu_respon_obat'] = '(Skor: 3) Dalam 24 Jam';
        }
        elseif ($this->data['waktu_respon_obat']=='2') {
            $this->data['waktu_respon_obat'] = '(Skor: 2) Dalam 48 Jam'; 
        }
        else {
            $this->data['waktu_respon_obat'] = '(Skor: 1) > 48 Jam';
        }

        if($this->data['penggunaan_obat']=='1')
        {
            $this->data['penggunaan_obat'] = '(Skor: 3) Bermacam-macam obat yang digunakan : obat sedatif (kecuali pasien ICU yang menggunakan sedasi dan paralisis), Hiptonik Barbitural, Fonotiazin, Antidepresan, Laksansia / Diuretikan, Narkotik';
        }
        elseif ($this->data['penggunaan_obat']=='2') {
            $this->data['penggunaan_obat'] = '(Skor: 2) Salah satu Pengobatan di atas'; 
        }
        else {
            $this->data['penggunaan_obat'] = '(Skor: 1) Pengobatan lain';
        }

        if($this->data['riwayat_jatuh_mrs']=='1')
        {
            $this->data['riwayat_jatuh_mrs'] = '(Skor: 25) Ya';
        }
        else {
            $this->data['riwayat_jatuh_mrs'] = '(Skor: 0) Tidak';
        }

        if($this->data['diagnosis_sekunder']=='1')
        {
            $this->data['diagnosis_sekunder'] = '(Skor: 15) Ya';
        }
        else {
            $this->data['diagnosis_sekunder'] = '(Skor: 0) Tidak';
        }

        if($this->data['alat_bantu']=='1')
        {
            $this->data['alat_bantu'] = '(Skor: 30) Perabot';
        }
        elseif ($this->data['alat_bantu']=='2') {
            $this->data['alat_bantu'] = '(Skor: 15) Tongkat/Alat Penopang'; 
        }
        else {
            $this->data['alat_bantu'] = '(Skor: 0) Tidak ada/Kursi Roda/Perawat/Tirah Baring';
        }

        if($this->data['terpasang_infus']=='1')
        {
            $this->data['terpasang_infus'] = '(Skor: 20) Ya';
        }
        else {
            $this->data['terpasang_infus'] = '(Skor: 0) Tidak';
        }

        if($this->data['gaya_berjalan']=='1')
        {
            $this->data['gaya_berjalan'] = '(Skor: 20) Terganggu';
        }
        elseif ($this->data['gaya_berjalan']=='2') {
            $this->data['gaya_berjalan'] = '(Skor: 10) Lemah'; 
        }
        else {
            $this->data['gaya_berjalan'] = '(Skor: 0) Normal/Tirah Baring/Imobilisasi';
        }

        if($this->data['status_mental_mrs']=='1')
        {
            $this->data['status_mental_mrs'] = '(Skor: 15) Sering lupa akan keterbatasan yang dimiliki';
        }
        else {
            $this->data['status_mental_mrs'] = '(Skor: 0) Orientasi baik terhadap kemampuan diri sendiri';
        }

        if($this->data['status_mental_edm']=='1')
        {
            $this->data['status_mental_edm'] = '(Skor: 4) Kesadaran baik/orientasi baik setiap saat';
        }
        elseif ($this->data['status_mental_edm']=='2') {
            $this->data['status_mental_edm'] = '(Skor: 12) Agitasi/Ansietas'; 
        }
        elseif ($this->data['status_mental_edm']=='3') {
            $this->data['status_mental_edm'] = '(Skor: 13) Kadang-kadang bingung'; 
        }
        else {
            $this->data['status_mental_edm'] = '(Skor: 14) Bingung/Disorientasi';
        }

        if($this->data['diagnosis_edm']=='1')
        {
            $this->data['diagnosis_edm'] = '(Skor: ) Kelainan Neurologi';
        }
        elseif ($this->data['diagnosis_edm']=='2') {
            $this->data['diagnosis_edm'] = '(Skor: ) Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)'; 
        }
        elseif ($this->data['diagnosis_edm']=='3') {
            $this->data['diagnosis_edm'] = '(Skor: ) Kelainan psikis / prilaku'; 
        }
        else {
            $this->data['diagnosis_edm'] = '(Skor: ) Diagnosis lain';
        }

        if($this->data['eliminasi']=='1')
        {
            $this->data['eliminasi'] = '(Skor: 8) Mandiri dan mampi mengontrol BAB/BAK';
        }
        elseif ($this->data['eliminasi']=='2') {
            $this->data['eliminasi'] = '(Skor: 12) Dower Catheter/Colostomy'; 
        }
        elseif ($this->data['eliminasi']=='3') {
            $this->data['eliminasi'] = '(Skor: 10) Eliminasi dengan bantuan'; 
        }
        elseif ($this->data['eliminasi']=='4') {
            $this->data['eliminasi'] = '(Skor: 12) Gangguan eliminasi (Inkontinensia/Nokturia/Frekwensi)'; 
        }
        else {
            $this->data['eliminasi'] = '(Skor: 12) Inkontinesia tetapi mampu untuk mobilisasi';
        }

        if($this->data['pengobatan']=='1')
        {
            $this->data['pengobatan'] = '(Skor: 10) Tanpa obat-obatan';
        }
        elseif ($this->data['pengobatan']=='2') {
            $this->data['pengobatan'] = '(Skor: 10) Obat-obatan jantung'; 
        }
        elseif ($this->data['pengobatan']=='3') {
            $this->data['pengobatan'] = '(Skor: 8) Obat-obat psikotropika (termasuk Benzodiazepine dan Antidepresan)'; 
        }
        else {
            $this->data['pengobatan'] = '(Skor: 12) Mendapat tambahan obat-obatan dan/atau obat-obat PRN (psikiatri, antinyeri) yang diberikan dalam 24 jam terakhir';
        }

        if($this->data['diagnosa']=='1')
        {
            $this->data['diagnosa'] = '(Skor: 10) Bipolar/ Gangguan Schizoaffective';
        }
        elseif ($this->data['diagnosa']=='2') {
            $this->data['diagnosa'] = '(Skor: 8) Penggunaan Obat-obatan terlarang/ketergantungan alkohol'; 
        }
        elseif ($this->data['diagnosa']=='3') {
            $this->data['diagnosa'] = '(Skor: 10) Gangguan Depresi Mayor'; 
        }
        else {
            $this->data['diagnosa'] = '(Skor: 12) Dimensia/ Delirium';
        }

        if($this->data['ambulasi']=='1')
        {
            $this->data['ambulasi'] = '(Skor: 8) Mandiri/Keseimbangan Baik/Immobilisasi';
        }
        elseif ($this->data['ambulasi']=='2') {
            $this->data['ambulasi'] = '(Skor: 8) Dengan Alat Bantu (Kursi roda, walker,dll)'; 
        }
        elseif ($this->data['ambulasi']=='3') {
            $this->data['ambulasi'] = '(Skor: 10) Vertigo/kelemahan'; 
        }
        elseif ($this->data['ambulasi']=='4') {
            $this->data['ambulasi'] = '(Skor: 8) Goyah/membutuhkan mantuan dan menyadari kemampuan'; 
        }
        else {
            $this->data['ambulasi'] = '(Skor: 15) Goyah tapi lupa keterbatasan';
        }

        if($this->data['nutrisi']=='1')
        {
            $this->data['nutrisi'] = '(Skor: 12) Mengkonsumsi sedikit makanan atau minuman  dalam 24 jam terakhir';
        }
        else{
            $this->data['nutrisi'] = '(Skor: 0) Tidak ada kelainan dengan nafsu makan'; 
        }

        if($this->data['riwayat_jatuh_edm']=='1')
        {
            $this->data['riwayat_jatuh_edm'] = '(Skor: 8) Tidak ada riwayat jatuh';
        }
        else {
            $this->data['riwayat_jatuh_edm'] = '(Skor: 12) Ada riwayat jatuh dalam 3 bulan terakhir';
        }
    }

    public function ri_asesmen_pdf()
    {
    	$this->get_ri_asesmen_awal_perawat_data();
    	$this->get_ri_asesmen_awal_dokter_data();
    	$this->convert();
        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-L', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_ri_asesmen',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 13.01.RI JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('ri_asesmen.pdf',\Mpdf\Output\Destination::INLINE);
    }

}
