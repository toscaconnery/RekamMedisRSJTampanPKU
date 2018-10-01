<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RIRawatNapza;

class RIRawatNapzaController extends Controller
{
	public function __construct()
	{
		$this->data['title'] = 'Asesmen Awal Keperawatan NAPZA';
	}

    public function get_ri_rawat_napza()
    {
    	return view('page.ri.rawat_napza', $this->data);
    }

    public function post_ri_rawat_napza(Request $request)
    {
    	$data = new RIRawatNapza;
    	$data->id_regis = 1;
    	$data->tanggal_pengkajian = $request->tanggal_pengkajian;
    	$data->sumber_informasi = $request->sumber_informasi;
    	$data->tanggal_dirawat = $request->tanggal_dirawat;
    	$data->ruangan = $request->ruangan;
    	$alasan_masuk = '';
    	if(isset($request->alasan_masuk_1)) {
    		$alasan_masuk .= '1-';
    	}
    	if(isset($request->alasan_masuk_2)) {
    		$alasan_masuk .= '2-';
    	}
    	if(isset($request->alasan_masuk_3)) {
    		$alasan_masuk .= '3-';
    	}
    	if(isset($request->alasan_masuk_4)) {
    		$alasan_masuk .= '4-';
    	}
    	if(isset($request->alasan_masuk_5)) {
    		$alasan_masuk .= '5-';
    	}
    	if(isset($request->alasan_masuk_6)) {
    		$alasan_masuk .= '6-';
    	}
    	if(strlen($alasan_masuk) > 0) {
    		$alasan_masuk = substr($alasan_masuk, 0, -1);
    	}
    	$data->alasan_masuk = $alasan_masuk;
    	$data->alasan_masuk_lainnya = $request->alasan_masuk_lainnya;
    	$keadaan_masuk = '';
    	if(isset($request->keadaan_masuk_1)) {
    		$keadaan_masuk .= '1-';
    	}
    	if(isset($request->keadaan_masuk_2)) {
    		$keadaan_masuk .= '2-';
    	}
    	if(isset($request->keadaan_masuk_3)) {
    		$keadaan_masuk .= '3-';
    	}
    	if(isset($request->keadaan_masuk_4)) {
    		$keadaan_masuk .= '4-';
    	}
    	if(strlen($keadaan_masuk) > 0) {
    		$keadaan_masuk = substr($keadaan_masuk, 0, -1);
    	}
    	$data->keadaan_masuk = $keadaan_masuk;
    	$pemakaian_terakhir = '';
    	if(isset($request->pemakaian_terakhir_1)) {
    		$pemakaian_terakhir .= '1-';
    	}
    	if(isset($request->pemakaian_terakhir_2)) {
    		$pemakaian_terakhir .= '2-';
    	}
    	if(isset($request->pemakaian_terakhir_3)) {
    		$pemakaian_terakhir .= '3-';
    	}
    	if(isset($request->pemakaian_terakhir_4)) {
    		$pemakaian_terakhir .= '4-';
    	}
    	if(strlen($pemakaian_terakhir) > 0) {
    		$pemakaian_terakhir = substr($pemakaian_terakhir, 0, -1);
    	}
    	$data->pemakaian_terakhir = $pemakaian_terakhir;
    	$data->jenis_zat = $request->jenis_zat;
    	$data->cara_pemakaian = $request->cara_pemakaian;
    	if($request->f1 == 'true') {
    		$data->f1 = True;
    	}
    	if($request->f2 == 'true') {
    		$data->f2 = True;
    	}
    	if($request->f3 == 'true') {
    		$data->f3 = True;
    	}
    	$data->keterangan_komplikasi = $request->keterangan_komplikasi;
    	$kriminal_dirumah = '';
    	if(isset($request->kriminal_dirumah_1)) {
    		$kriminal_dirumah .= '1-';
    	}
    	if(isset($request->kriminal_dirumah_2)) {
    		$kriminal_dirumah .= '2-';
    	}
    	if(isset($request->kriminal_dirumah_3)) {
    		$kriminal_dirumah .= '3-';
    	}
    	if(isset($request->kriminal_dirumah_4)) {
    		$kriminal_dirumah .= '4-';
    	}
    	if(strlen($kriminal_dirumah) > 0) {
    		$kriminal_dirumah = substr($kriminal_dirumah, 0, -1);
    	}
    	$data->kriminal_dirumah = $kriminal_dirumah;

    	$kriminal_diluar = '';
    	if(isset($request->kriminal_diluar_1)) {
    		$kriminal_diluar .= '1-';
    	}
    	if(isset($request->kriminal_diluar_2)) {
    		$kriminal_diluar .= '2-';
    	}
    	if(isset($request->kriminal_diluar_3)) {
    		$kriminal_diluar .= '3-';
    	}
    	if(isset($request->kriminal_diluar_4)) {
    		$kriminal_diluar .= '4-';
    	}
    	if(strlen($kriminal_diluar) > 0) {
    		$kriminal_diluar = substr($kriminal_diluar, 0, -1);
    	}
    	$data->kriminal_diluar = $kriminal_diluar;
    	$problema_sekolah = '';
    	if(isset($request->problema_sekolah_1)) {
    		$problema_sekolah .= '1-';
    	}
    	if(isset($request->problema_sekolah_2)) {
    		$problema_sekolah .= '2-';
    	}
    	if(isset($request->problema_sekolah_3)) {
    		$problema_sekolah .= '3-';
    	}
    	if(isset($request->problema_sekolah_4)) {
    		$problema_sekolah .= '4-';
    	}
    	if(isset($request->problema_sekolah_5)) {
    		$problema_sekolah .= '5-';
    	}
    	if(isset($request->problema_sekolah_6)) {
    		$problema_sekolah .= '6-';
    	}
    	if(strlen($problema_sekolah) > 0) {
    		$problema_sekolah = substr($problema_sekolah, 0, -1);
    	}
    	$data->problema_sekolah = $problema_sekolah;
    	$problema_keluarga = '';
    	if(isset($request->problema_keluarga_1)) {
    		$problema_keluarga .= '1-';
    	}
    	if(isset($request->problema_keluarga_2)) {
    		$problema_keluarga .= '2-';
    	}
    	if(isset($request->problema_keluarga_3)) {
    		$problema_keluarga .= '3-';
    	}
    	if(isset($request->problema_keluarga_4)) {
    		$problema_keluarga .= '4-';
    	}
    	if(strlen($problema_keluarga) > 0) {
    		$problema_keluarga = substr($problema_keluarga, 0, -1);
    	}
    	$data->problema_keluarga = $problema_keluarga;
    	$problema_pekerjaan = '';
    	if(isset($request->problema_pekerjaan_1)) {
    		$problema_pekerjaan .= '1-';
    	}
    	if(isset($request->problema_pekerjaan_2)) {
    		$problema_pekerjaan .= '2-';
    	}
    	if(isset($request->problema_pekerjaan_3)) {
    		$problema_pekerjaan .= '3-';
    	}
    	if(isset($request->problema_pekerjaan_4)) {
    		$problema_pekerjaan .= '4-';
    	}
    	if(isset($request->problema_pekerjaan_5)) {
    		$problema_pekerjaan .= '5-';
    	}
    	if(isset($request->problema_pekerjaan_6)) {
    		$problema_pekerjaan .= '6-';
    	}
    	if(strlen($problema_pekerjaan) > 0) {
    		$problema_pekerjaan = substr($problema_pekerjaan, 0, -1);
    	}
    	$data->problema_pekerjaan = $problema_pekerjaan;
    	$problema_masyarakat = '';
    	if(isset($request->problema_masyarakat_1)) {
    		$problema_masyarakat .= '1-';
    	}
    	$problema_masyarakat = '';
    	if(isset($request->problema_masyarakat_2)) {
    		$problema_masyarakat .= '2-';
    	}
    	$problema_masyarakat = '';
    	if(isset($request->problema_masyarakat_3)) {
    		$problema_masyarakat .= '3-';
    	}
    	$problema_masyarakat = '';
    	if(isset($request->problema_masyarakat_4)) {
    		$problema_masyarakat .= '4-';
    	}
    	$problema_masyarakat = '';
    	if(isset($request->problema_masyarakat_5)) {
    		$problema_masyarakat .= '5-';
    	}
    	$problema_masyarakat = '';
    	if(isset($request->problema_masyarakat_6)) {
    		$problema_masyarakat .= '6-';
    	}
    	if(strlen($problema_masyarakat) > 0) {
    		$problema_masyarakat = substr($problema_masyarakat, 0, -1);
    	}
    	$data->problema_masyarakat = $problema_masyarakat;
    	$data->problema_masyarakat_lainnya = $request->problema_masyarakat_lainnya;
    	$data->dirawat_diagnosis_medis = $request->dirawat_diagnosis_medis;
    	$etiologi = '';
    	if(isset($request->etiologi_1)) {
    		$etiologi .= '1-';
    	}
    	if(isset($request->etiologi_2)) {
    		$etiologi .= '2-';
    	}
    	if(isset($request->etiologi_3)) {
    		$etiologi .= '3-';
    	}
    	if(isset($request->etiologi_4)) {
    		$etiologi .= '4-';
    	}
    	if(isset($request->etiologi_5)) {
    		$etiologi .= '5-';
    	}
    	if(strlen($etiologi) > 0) {
    		$etiologi = substr($etiologi, 0, -1);
    	}
    	$data->etiologi = $etiologi;
    	$faktor_kambuh = '';
    	if(isset($request->faktor_kambuh_1)) {
    		$faktor_kambuh .= '1-';
    	}
    	if(isset($request->faktor_kambuh_2)) {
    		$faktor_kambuh .= '2-';
    	}
    	if(isset($request->faktor_kambuh_3)) {
    		$faktor_kambuh .= '3-';
    	}
    	if(isset($request->faktor_kambuh_4)) {
    		$faktor_kambuh .= '4-';
    	}
    	if(isset($request->faktor_kambuh_5)) {
    		$faktor_kambuh .= '5-';
    	}
    	if(isset($request->faktor_kambuh_6)) {
    		$faktor_kambuh .= '6-';
    	}
    	if(isset($request->faktor_kambuh_7)) {
    		$faktor_kambuh .= '7-';
    	}
    	if(isset($request->faktor_kambuh_8)) {
    		$faktor_kambuh .= '8-';
    	}
    	if(strlen($faktor_kambuh) > 0) {
    		$faktor_kambuh = substr($faktor_kambuh, 0, -1);
    	}
    	$data->faktor_kambuh = $faktor_kambuh;
    	$data->masalah_keperawatan_1 = $request->masalah_keperawatan_1;
    	$jenis_penanggulangan = '';
    	if(isset($request->jenis_penanggulangan_1)) {
    		$jenis_penanggulangan .= '1-';
    	}
    	if(isset($request->jenis_penanggulangan_2)) {
    		$jenis_penanggulangan .= '2-';
    	}
    	if(isset($request->jenis_penanggulangan_3)) {
    		$jenis_penanggulangan .= '3-';
    	}
    	if(isset($request->jenis_penanggulangan_4)) {
    		$jenis_penanggulangan .= '4-';
    	}
    	if(isset($request->jenis_penanggulangan_5)) {
    		$jenis_penanggulangan .= '5-';
    	}
    	if(isset($request->jenis_penanggulangan_6)) {
    		$jenis_penanggulangan .= '6-';
    	}
    	if(strlen($jenis_penanggulangan) > 0) {
    		$jenis_penanggulangan = substr($jenis_penanggulangan, 0, -1);
    	}
    	$data->jenis_penanggulangan = $jenis_penanggulangan;
    	$alasan_meninggalkan = '';
    	if(isset($request->alasan_meninggalkan_1)) {
    		$alasan_meninggalkan .= '1-';
    	}
    	if(isset($request->alasan_meninggalkan_2)) {
    		$alasan_meninggalkan .= '2-';
    	}
    	if(isset($request->alasan_meninggalkan_3)) {
    		$alasan_meninggalkan .= '3-';
    	}
    	if(isset($request->alasan_meninggalkan_4)) {
    		$alasan_meninggalkan .= '4-';
    	}
    	if(isset($request->alasan_meninggalkan_5)) {
    		$alasan_meninggalkan .= '5-';
    	}
    	if(isset($request->alasan_meninggalkan_6)) {
    		$alasan_meninggalkan .= '6-';
    	}
    	if(strlen($alasan_meninggalkan) > 0) {
    		$alasan_meninggalkan = substr($alasan_meninggalkan, 0, -1);
    	}
    	$data->alasan_meninggalkan = $alasan_meninggalkan;
    	$data->masalah_keperawatan_2 = $request->masalah_keperawatan_2;
    	$keluhan_fisik = '';
    	if(isset($request->keluhan_fisik_1)) {
    		$keluhan_fisik .= '1-';
    	}
    	if(isset($request->keluhan_fisik_2)) {
    		$keluhan_fisik .= '2-';
    	}
    	if(isset($request->keluhan_fisik_3)) {
    		$keluhan_fisik .= '3-';
    	}
    	if(isset($request->keluhan_fisik_4)) {
    		$keluhan_fisik .= '4-';
    	}
    	if(isset($request->keluhan_fisik_5)) {
    		$keluhan_fisik .= '5-';
    	}
    	if(isset($request->keluhan_fisik_6)) {
    		$keluhan_fisik .= '6-';
    	}
    	if(isset($request->keluhan_fisik_7)) {
    		$keluhan_fisik .= '7-';
    	}
    	if(isset($request->keluhan_fisik_8)) {
    		$keluhan_fisik .= '8-';
    	}
    	if(isset($request->keluhan_fisik_9)) {
    		$keluhan_fisik .= '9-';
    	}
    	if(isset($request->keluhan_fisik_10)) {
    		$keluhan_fisik .= '10-';
    	}
    	if(isset($request->keluhan_fisik_11)) {
    		$keluhan_fisik .= '11-';
    	}
    	if(isset($request->keluhan_fisik_12)) {
    		$keluhan_fisik .= '12-';
    	}
    	if(isset($request->keluhan_fisik_13)) {
    		$keluhan_fisik .= '13-';
    	}
    	if(isset($request->keluhan_fisik_14)) {
    		$keluhan_fisik .= '14-';
    	}
    	if(isset($request->keluhan_fisik_15)) {
    		$keluhan_fisik .= '15-';
    	}
    	if(isset($request->keluhan_fisik_16)) {
    		$keluhan_fisik .= '16-';
    	}
    	if(isset($request->keluhan_fisik_17)) {
    		$keluhan_fisik .= '17-';
    	}
    	if(isset($request->keluhan_fisik_18)) {
    		$keluhan_fisik .= '18-';
    	}
    	if(isset($request->keluhan_fisik_19)) {
    		$keluhan_fisik .= '19-';
    	}
    	if(isset($request->keluhan_fisik_20)) {
    		$keluhan_fisik .= '20-';
    	}
    	if(isset($request->keluhan_fisik_21)) {
    		$keluhan_fisik .= '21-';
    	}
    	if(isset($request->keluhan_fisik_22)) {
    		$keluhan_fisik .= '22-';
    	}
    	if(isset($request->keluhan_fisik_23)) {
    		$keluhan_fisik .= '23-';
    	}
    	if(isset($request->keluhan_fisik_24)) {
    		$keluhan_fisik .= '24-';
    	}
    	if(isset($request->keluhan_fisik_25)) {
    		$keluhan_fisik .= '25-';
    	}
    	if(isset($request->keluhan_fisik_26)) {
    		$keluhan_fisik .= '26-';
    	}
    	if(isset($request->keluhan_fisik_27)) {
    		$keluhan_fisik .= '27-';
    	}
    	if(isset($request->keluhan_fisik_28)) {
    		$keluhan_fisik .= '28-';
    	}
    	if(isset($request->keluhan_fisik_29)) {
    		$keluhan_fisik .= '29-';
    	}
    	if(isset($request->keluhan_fisik_30)) {
    		$keluhan_fisik .= '30-';
    	}
    	if(isset($request->keluhan_fisik_31)) {
    		$keluhan_fisik .= '31-';
    	}
    	if(isset($request->keluhan_fisik_32)) {
    		$keluhan_fisik .= '32-';
    	}
    	if(isset($request->keluhan_fisik_33)) {
    		$keluhan_fisik .= '33-';
    	}
    	if(isset($request->keluhan_fisik_34)) {
    		$keluhan_fisik .= '34-';
    	}
    	if(isset($request->keluhan_fisik_35)) {
    		$keluhan_fisik .= '35-';
    	}
    	if(isset($request->keluhan_fisik_36)) {
    		$keluhan_fisik .= '36-';
    	}
    	if(isset($request->keluhan_fisik_37)) {
    		$keluhan_fisik .= '37-';
    	}
    	if(isset($request->keluhan_fisik_38)) {
    		$keluhan_fisik .= '38-';
    	}
    	if(isset($request->keluhan_fisik_39)) {
    		$keluhan_fisik .= '39-';
    	}
    	if(isset($request->keluhan_fisik_40)) {
    		$keluhan_fisik .= '40-';
    	}
    	if(isset($request->keluhan_fisik_41)) {
    		$keluhan_fisik .= '41-';
    	}
    	if(isset($request->keluhan_fisik_42)) {
    		$keluhan_fisik .= '42-';
    	}
    	if(strlen($keluhan_fisik) > 0) {
    		$keluhan_fisik = substr($keluhan_fisik, 0, -1);
    	}
    	$data->keluhan_fisik = $keluhan_fisik;
    	$data->masalah_keperawatan_3 = $request->masalah_keperawatan_3;
    	if($request->f4 == 'true') {
    		$data->f4 = True;
    	}
    	$data->anggota_keluarga = $request->anggota_keluarga;
    	$data->f5 = $request->f5;
    	if($request->f6 == 'true') {
    		$data->f6 = True;
    	}
    	$data->keterangan_pranikah = $request->keterangan_pranikah;
    	$data->f7 = $request->f7;
    	$data->masalah_keperawatan_4 = $request->masalah_keperawatan_4;
    	$gambaran_diri = '';
    	if(isset($request->gambaran_diri_1)) {
    		$gambaran_diri .= '1-';
    	}
    	if(isset($request->gambaran_diri_2)) {
    		$gambaran_diri .= '2-';
    	}
    	if(isset($request->gambaran_diri_3)) {
    		$gambaran_diri .= '3-';
    	}
    	if(isset($request->gambaran_diri_4)) {
    		$gambaran_diri .= '4-';
    	}
    	if(strlen($gambaran_diri) > 0) {
    		$gambaran_diri = substr($gambaran_diri, 0, -1);
    	}
    	$data->gambaran_diri = $gambaran_diri;
    	$data->gambaran_diri_lainnya = $request->gambaran_diri_lainnya;
    	$identitas = '';
    	if(isset($request->identitas_1)) {
    		$identitas .= '1-';
    	}
    	if(isset($request->identitas_2)) {
    		$identitas .= '2-';
    	}
    	if(isset($request->identitas_3)) {
    		$identitas .= '3-';
    	}
    	if(isset($request->identitas_4)) {
    		$identitas .= '4-';
    	}
    	if(strlen($identitas) > 0) {
    		$identitas = substr($identitas, 0, -1);
    	}
    	$data->identitas = $identitas;
    	$ideal_diri = '';
    	if(isset($request->ideal_diri_1)) {
    		$ideal_diri .= '1-';
    	}
    	if(isset($request->ideal_diri_2)) {
    		$ideal_diri .= '2-';
    	}
    	if(isset($request->ideal_diri_3)) {
    		$ideal_diri .= '3-';
    	}
    	if(isset($request->ideal_diri_4)) {
    		$ideal_diri .= '4-';
    	}
    	if(strlen($ideal_diri) > 0) {
    		$ideal_diri = substr($ideal_diri, 0, -1);
    	}
    	$data->ideal_diri = $ideal_diri;
    	$harga_diri = '';
    	if(isset($request->harga_diri_1)) {
    		$harga_diri .= '1-';
    	}
    	if(isset($request->harga_diri_2)) {
    		$harga_diri .= '2-';
    	}
    	if(isset($request->harga_diri_3)) {
    		$harga_diri .= '3-';
    	}
    	if(strlen($harga_diri) > 0) {
    		$harga_diri = substr($harga_diri, 0, -1);
    	}
    	$data->harga_diri = $harga_diri;
    	$data->masalah_keperawatan_5 = $request->masalah_keperawatan_5;
    	$nilai_keyakinan = '';
    	if(isset($request->nilai_keyakinan_1)) {
    		$nilai_keyakinan .= '1-';
    	}
    	if(isset($request->nilai_keyakinan_2)) {
    		$nilai_keyakinan .= '2-';
    	}
    	if(isset($request->nilai_keyakinan_3)) {
    		$nilai_keyakinan .= '3-';
    	}
    	if(strlen($nilai_keyakinan) > 0) {
    		$nilai_keyakinan = substr($nilai_keyakinan, 0, -1);
    	}
    	$data->nilai_keyakinan = $nilai_keyakinan;
    	$data->nilai_keyakinan_lainnya = $request->nilai_keyakinan_lainnya;
    	$kegiatan_ibadah = '';
    	if(isset($request->kegiatan_ibadah_1)) {
    		$kegiatan_ibadah .= '1-';
    	}
    	if(isset($request->kegiatan_ibadah_2)) {
    		$kegiatan_ibadah .= '2-';
    	}
    	if(isset($request->kegiatan_ibadah_3)) {
    		$kegiatan_ibadah .= '3-';
    	}
    	if(isset($request->kegiatan_ibadah_4)) {
    		$kegiatan_ibadah .= '4-';
    	}
    	if(strlen($kegiatan_ibadah) > 0) {
    		$kegiatan_ibadah = substr($kegiatan_ibadah, 0, -1);
    	}
    	$data->kegiatan_ibadah = $kegiatan_ibadah;
    	$data->masalah_keperawatan_6 = $request->masalah_keperawatan_6;
    	$adaptif = '';
    	if(isset($request->adaptif_1)) {
    		$adaptif .= '1-';
    	}
    	if(isset($request->adaptif_2)) {
    		$adaptif .= '2-';
    	}
    	if(isset($request->adaptif_3)) {
    		$adaptif .= '3-';
    	}
    	if(isset($request->adaptif_4)) {
    		$adaptif .= '4-';
    	}
    	if(isset($request->adaptif_5)) {
    		$adaptif .= '5-';
    	}
    	if(strlen($adaptif) > 0) {
    		$adaptif = substr($adaptif, 0, -1);
    	}
    	$data->adaptif = $adaptif;
    	$data->adaptif_lainnya = $request->adaptif_lainnya;
    	$maladaptif = '';
    	if(isset($request->maladaptif_1)) {
    		$maladaptif .= '1-';
    	}
    	if(isset($request->maladaptif_2)) {
    		$maladaptif .= '2-';
    	}
    	if(isset($request->maladaptif_3)) {
    		$maladaptif .= '3-';
    	}
    	if(isset($request->maladaptif_4)) {
    		$maladaptif .= '4-';
    	}
    	if(isset($request->maladaptif_5)) {
    		$maladaptif .= '5-';
    	}
    	if(strlen($maladaptif) > 0) {
    		$maladaptif = substr($maladaptif, 0, -1);
    	}
    	$data->maladaptif = $maladaptif;
    	$data->maladaptif_lainnya = $request->maladaptif_lainnya;
    	$data->masalah_keperawatan_7 = $request->masalah_keperawatan_7;
    	$pengetahuan_kurang = '';
    	if(isset($request->pengetahuan_kurang_1)) {
    		$pengetahuan_kurang .= '1-';
    	}
    	if(isset($request->pengetahuan_kurang_2)) {
    		$pengetahuan_kurang .= '2-';
    	}
    	if(isset($request->pengetahuan_kurang_3)) {
    		$pengetahuan_kurang .= '3-';
    	}
    	if(isset($request->pengetahuan_kurang_4)) {
    		$pengetahuan_kurang .= '4-';
    	}
    	if(isset($request->pengetahuan_kurang_5)) {
    		$pengetahuan_kurang .= '5-';
    	}
    	if(isset($request->pengetahuan_kurang_6)) {
    		$pengetahuan_kurang .= '6-';
    	}
    	if(isset($request->pengetahuan_kurang_7)) {
    		$pengetahuan_kurang .= '7-';
    	}
    	if(isset($request->pengetahuan_kurang_8)) {
    		$pengetahuan_kurang .= '8-';
    	}
    	if(isset($request->pengetahuan_kurang_9)) {
    		$pengetahuan_kurang .= '9-';
    	}
    	if(isset($request->pengetahuan_kurang_10)) {
    		$pengetahuan_kurang .= '10-';
    	}
    	if(strlen($pengetahuan_kurang) > 0) {
    		$pengetahuan_kurang = substr($pengetahuan_kurang, 0, -1);
    	}
    	$data->pengetahuan_kurang = $pengetahuan_kurang;
    	$data->pengetahuan_kurang_lainnya = $request->pengetahuan_kurang_lainnya;
    	$data->masalah_keperawatan_8 = $request->masalah_keperawatan_8;
    	$data->diagnosis_medis = $request->diagnosis_medis;
    	$data->terapi_medis = $request->terapi_medis;
    	$checkbox_masalah_keperawatan = '';
    	if(isset($request->checkbox_masalah_keperawatan_1)) {
    		$checkbox_masalah_keperawatan .= '1-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_2)) {
    		$checkbox_masalah_keperawatan .= '2-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_3)) {
    		$checkbox_masalah_keperawatan .= '3-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_4)) {
    		$checkbox_masalah_keperawatan .= '4-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_5)) {
    		$checkbox_masalah_keperawatan .= '5-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_6)) {
    		$checkbox_masalah_keperawatan .= '6-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_7)) {
    		$checkbox_masalah_keperawatan .= '7-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_8)) {
    		$checkbox_masalah_keperawatan .= '8-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_9)) {
    		$checkbox_masalah_keperawatan .= '9-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_10)) {
    		$checkbox_masalah_keperawatan .= '10-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_11)) {
    		$checkbox_masalah_keperawatan .= '11-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_12)) {
    		$checkbox_masalah_keperawatan .= '12-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_13)) {
    		$checkbox_masalah_keperawatan .= '13-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_14)) {
    		$checkbox_masalah_keperawatan .= '14-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_15)) {
    		$checkbox_masalah_keperawatan .= '15-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_16)) {
    		$checkbox_masalah_keperawatan .= '16-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_17)) {
    		$checkbox_masalah_keperawatan .= '17-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_18)) {
    		$checkbox_masalah_keperawatan .= '18-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_19)) {
    		$checkbox_masalah_keperawatan .= '19-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_20)) {
    		$checkbox_masalah_keperawatan .= '20-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_21)) {
    		$checkbox_masalah_keperawatan .= '21-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_22)) {
    		$checkbox_masalah_keperawatan .= '22-';
    	}
    	if(isset($request->checkbox_masalah_keperawatan_23)) {
    		$checkbox_masalah_keperawatan .= '23-';
    	}
    	if(strlen($checkbox_masalah_keperawatan) > 0) {
    		$checkbox_masalah_keperawatan = substr($checkbox_masalah_keperawatan, 0, -1);
    	}
    	$data->checkbox_masalah_keperawatan = $checkbox_masalah_keperawatan;
    	$data->masalah_keperawatan_lainnya = $request->masalah_keperawatan_lainnya;
    	$jumlah_masalah = $request->jumlah_form_masalah;
    	$text_masalah_keperawatan = '';
    	for($i = 1; $i <= $jumlah_masalah; $i++) {
    		$str_masalah = 'text_masalah_keperawatan_'.$i;
    		if(!is_null($request->$str_masalah)) {
    			$text_masalah_keperawatan .= $request->$str_masalah."$&!^@";
    		}
    	}
    	if(strlen($text_masalah_keperawatan) > 0) {
    		$text_masalah_keperawatan = substr($text_masalah_keperawatan, 0, -5);
    	}
    	$data->text_masalah_keperawatan = $text_masalah_keperawatan;
    	$data->save();

    	return back();
    }
}