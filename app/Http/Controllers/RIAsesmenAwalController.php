<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIAsesmenAwalPerawat;
use App\Models\ListDocument;
use Session;

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
    	$id_pasien = Session::get('id_pasien');
    	$data = new RIAsesmenAwalPerawat;
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
		$data->friwayatkeluarga = $request->friwayatkeluarga;
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
		if(isset($fafek1)) {
			$fafek .= '1-';
		}
		if(isset($fafek2)) {
			$fafek .= '2-';
		}
		if(isset($fafek3)) {
			$fafek .= '3-';
		}
		if(isset($fafek4)) {
			$fafek .= '4-';
		}
		if(strlen($fafek) > 0) {
			$fafek = substr($fafek, 0, -1);
		}
		$data->fafek = $fafek;
		$data->fafek_ket = $request->fafek_ket;
		$finteraksi = '';
		if(isset($finteraksi1)) {
			$finteraksi .= '1-'; 
		}
		if(isset($finteraksi2)) {
			$finteraksi .= '2-'; 
		}
		if(isset($finteraksi3)) {
			$finteraksi .= '3-'; 
		}
		if(isset($finteraksi4)) {
			$finteraksi .= '4-'; 
		}
		if(isset($finteraksi5)) {
			$finteraksi .= '5-'; 
		}
		if(isset($finteraksi6)) {
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
		if(isset($faruspikir1)) {
			$faruspikir .= '1-';
		}
		if(isset($faruspikir2)) {
			$faruspikir .= '2-';
		}
		if(isset($faruspikir3)) {
			$faruspikir .= '3-';
		}
		if(isset($faruspikir4)) {
			$faruspikir .= '4-';
		}
		if(isset($faruspikir5)) {
			$faruspikir .= '5-';
		}
		if(isset($faruspikir6)) {
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
		$data->jenis_resiko_jatuh = $request->jenis_resiko_jatuh;
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
		if(isset($fdiagnosaumum1)) {
			$fdiagnosaumum .= '1-';
		}
		if(isset($fdiagnosaumum2)) {
			$fdiagnosaumum .= '2-';
		}
		if(isset($fdiagnosaumum3)) {
			$fdiagnosaumum .= '3-';
		}
		if(isset($fdiagnosaumum4)) {
			$fdiagnosaumum .= '4-';
		}
		if(isset($fdiagnosaumum5)) {
			$fdiagnosaumum .= '5-';
		}
		if(isset($fdiagnosaumum6)) {
			$fdiagnosaumum .= '6-';
		}
		if(isset($fdiagnosaumum7)) {
			$fdiagnosaumum .= '7-';
		}
		if(isset($fdiagnosaumum8)) {
			$fdiagnosaumum .= '8-';
		}
		if(isset($fdiagnosaumum9)) {
			$fdiagnosaumum .= '9-';
		}
		if(isset($fdiagnosaumum10)) {
			$fdiagnosaumum .= '10-';
		}
		if(isset($fdiagnosaumum11)) {
			$fdiagnosaumum .= '11-';
		}
		if(isset($fdiagnosaumum12)) {
			$fdiagnosaumum .= '12-';
		}
		if(isset($fdiagnosaumum13)) {
			$fdiagnosaumum .= '13-';
		}
		if(isset($fdiagnosaumum14)) {
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
    	$data->save();
    }

    public function get_ri_asesmen_awal_perawat_data()
    {
    	//
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

    public function post_ri_asesmen_awal_perawat_edit(Request $request)
    {
    	dd('posting edit perawat');
    }

    public function get_ri_asesmen_awal_dokter()
    {
    	return view('page.ri.asesmen_awal_dokter', $this->data);
    }

    public function post_ri_asesmen_awal_dokter(Request $request)
    {
    	dd('posting_dokter');
    }

    public function get_ri_asesmen_awal_dokter_data()
    {
    	//
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

    public function post_ri_asesmen_awal_dokter_edit(Request $request)
    {
    	dd('posting edit dokter');
    }

}
