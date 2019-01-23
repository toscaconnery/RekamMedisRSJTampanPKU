<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\HumptyDumpty;
use App\Models\Morse;
use App\Models\Edmunson;
use App\Models\RJNyeri;
use App\Models\RJFisikGizi;
use App\Models\RJAsesmenKeperawatan;
use App\Models\RJAsesmenDokter;
use App\Models\RJDiagnosaKeperawatan;
use App\Models\RJEvaluasiTindakan;
use App\Models\RJDataMedis;
use App\Models\RJObatSaatIni;
use App\Models\RJPemeriksaanFisik;
use App\Models\RJStatusPsikiatri;
use App\Models\RJStatusNeurologi;
use App\Models\RJPemeriksaanPenunjang;
use App\Models\RJInstrumenPenilaian;
use App\Models\RJDiagnosisTindakanTerapi;
use App\Models\RJTindakLanjut;
use App\Models\ListDocument;
use Session;
use View;

class RJAsesmenAwalController extends Controller
{
    public function __construct()
    {
        $this->middleware('haspatient');
        $this->data['title'] = 'Asesmen Awal Pasien Rawat Jalan';
    }

    public function get_rj_asesmen_awal_perawat()
    {
        $id_pasien = Session::get('id_pasien');
        $list_document = ListDocument::where('id_regis', $id_pasien)->first();
        $this->data['nama_perawat'] = $list_document->rj_asesmen_awal_perawat_petugas;
        $this->data['nama_dokter'] = $list_document->rj_asesmen_awal_dokter_petugas;
        $this->data['tanggal_perawat'] = $list_document->rj_asesmen_awal_perawat_date;
        $this->data['tanggal_dokter'] = $list_document->rj_asesmen_awal_dokter_date;
        return view('page.rj.asesmen_awal_perawat', $this->data);
    }

    public function get_rj_asesmen_awal_dokter()
    {
    	return view('page.rj.asesmen_awal_dokter', $this->data);
    }

    public function post_rj_asesmen_awal_dokter(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = new RJAsesmenDokter;
        $data->id_regis = $id_pasien;

        $data->pewawancara = $request->pewawancara;
        $data->keluhan_utama = $request->keluhan_utama;
        $data->riwayat_penyakit_sekarang = $request->riwayat_penyakit_sekarang;
        $data->riwayat_penyakit_dahulu = $request->riwayat_penyakit_dahulu;
        $data->riwayat_napza = $request->riwayat_napza;
        $data->lama_pemakaian = $request->lama_pemakaian;
        $data->cara_pemakaian = $request->cara_pemakaian;
        $data->latar_belakang_pemakaian = $request->latar_belakang_pemakaian;
        $data->riwayat_pendidikan = $request->riwayat_pendidikan;
        $data->riwayat_pekerjaan = $request->riwayat_pekerjaan;
        $data->riwayat_perkawinan = $request->riwayat_perkawinan;
        $riwayat = "";
        if(isset($request->penyakit_1)) {
            $riwayat .= "1-";
        }
        if(isset($request->penyakit_2)) {
            $riwayat .= "2-";
        }
        if(isset($request->penyakit_3)) {
            $riwayat .= "3-";
        }
        if(isset($request->penyakit_4)) {
            $riwayat .= "4-";
        }
        if(isset($request->penyakit_5)) {
            $riwayat .= "5-";
        }
        if(isset($request->penyakit_6)) {
            $riwayat .= "6-";
        }
        if(isset($request->penyakit_7)) {
            $riwayat .= "7-";
        }
        if(isset($request->penyakit_8)) {
            $riwayat .= "8-";
        }
        if(isset($request->penyakit_9)) {
            $riwayat .= "9-";
        }
        if(isset($request->penyakit_10)) {
            $riwayat .= "10-";
        }
        if(isset($request->penyakit_11)) {
            $riwayat .= "11-";
        }
        if(isset($request->penyakit_12)) {
            $riwayat .= "12-";
        }
        if(isset($request->penyakit_13)) {
            $riwayat .= "13-";
        }
        if(isset($request->penyakit_14)) {
            $riwayat .= "14-";
        }
        if(strlen($riwayat) > 0) {
            $riwayat = substr($riwayat, 0, -1);
        }
        $data->riwayat_penyakit_lainnya = $riwayat;
        $data->riwayat_operasi = $request->riwayat_operasi;
        $data->jenis_operasi = $request->jenis_operasi;
        $data->waktu_operasi = $request->waktu_operasi;
        $data->riwayat_tranfusi = $request->riwayat_tranfusi;
        $data->reaksi_tranfusi = $request->reaksi_tranfusi;
        $data->reaksi_timbul = $request->reaksi_timbul;
        $data->riwayat_penyakit_dalam_keluarga = $request->riwayat_penyakit_dalam_keluarga;
        $data->riwayat_pengobatan = $request->riwayat_pengobatan;
        $data->riwayat_alergi = $request->riwayat_alergi;
        $data->kepala = $request->kepala;
        $data->leher = $request->leher;
        $data->dada = $request->dada;
        $data->jantung = $request->jantung;
        $data->paru = $request->paru;
        $data->perut = $request->perut;
        $data->anggota_gerak = $request->anggota_gerak;
        $data->penampilan = $request->penampilan;
        $data->kesadaran_psikiatri = $request->kesadaran_psikiatri;
        $data->orientasi = $request->orientasi;
        $data->sikap = $request->sikap;
        $data->keterangan = $request->keterangan;
        $data->proses_pikir = $request->proses_pikir;
        $data->bentuk_pikir = $request->bentuk_pikir;
        $data->isi_pikir = $request->isi_pikir;
        $data->mood = $request->mood;
        $data->afek = $request->afek;
        $data->halusinasi = $request->halusinasi;
        $data->ilusi = $request->ilusi;
        $data->konsentrasi = $request->konsentrasi;
        $data->ingat = $request->ingat;
        $data->abstrak = $request->abstrak;
        $data->impuls = $request->impuls;
        $data->nilai = $request->nilai;
        $data->tilikan = $request->tilikan;
        $data->dipercaya = $request->dipercaya;
        $data->meningeal = $request->meningeal;
        $data->nervus = $request->nervus;
        $data->motorik = $request->motorik;
        $data->cerebellum = $request->cerebellum;
        $data->vegetatif = $request->vegetatif;
        $data->gaduh_gelisah = $request->gaduh_gelisah;
        $data->ketidakoperatifan = $request->ketidakoperatifan;
        $data->permusuhan = $request->permusuhan;
        $data->pengendalian_impuls = $request->pengendalian_impuls;
        $data->ketegangan = $request->ketegangan;
        $data->bangsal = $request->bangsal;
        $data->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
        $data->panss_ec = $request->panss_ec;
        $data->gaff = $request->gaff;
        $data->axis1 = $request->axis1;
        $data->axis2 = $request->axis2;
        $data->axis3 = $request->axis3;
        $data->axis4 = $request->axis4;
        $data->axis5 = $request->axis5;
        $data->utama = $request->utama;
        $data->sekunder = $request->sekunder;
        $data->jam = $request->jam;
        $data->tindakan_terapi = $request->tindakan_terapi;
        $data->daftar_masalah = $request->daftar_masalah;
        $data->tindak_lanjut = $request->tindak_lanjut;
        $data->perlu_dikontrol = $request->perlu_dikontrol;
        $data->tanggal_kontrol = $request->tanggal_kontrol;
        $data->ruangan = $request->ruangan;
        $data->indikasi_rawat_inap = $request->indikasi_rawat_inap;
        $data->alasan_menolak = $request->alasan_menolak;
        $data->alasan_lainnya = $request->alasan_lainnya;
        $data->dirujuk_ke = $request->dirujuk_ke;
        $data->alasan_dirujuk = $request->alasan_dirujuk;
        $kesadaran = "";
        if(isset($request->kesadaran_1)) {
            $kesadaran .= "1-";
        }
        if(isset($request->kesadaran_2)) {
            $kesadaran .= "2-";
        }
        if(isset($request->kesadaran_3)) {
            $kesadaran .= "3-";
        }
        if(isset($request->kesadaran_4)) {
            $kesadaran .= "4-";
        }
        if(isset($request->kesadaran_5)) {
            $kesadaran .= "5-";
        }
        if(isset($request->kesadaran_6)) {
            $kesadaran .= "6-";
        }
        if(isset($request->kesadaran_7)) {
            $kesadaran .= "7-";
        }
        if(strlen($kesadaran) > 0) {
            $kesadaran = substr($kesadaran, 0, -1);
        }
        $data->kesadaran = $kesadaran;
        $data->kesadaran_lainnya = $request->kesadaran_lainnya;
        $data->tensi = $request->tensi;
        $data->nadi = $request->nadi;
        $data->pernafasan = $request->pernafasan;
        $data->suhu = $request->suhu;
        $data->save();

        $jumlah_form_obat = $request->jumlah_form_obat;
        for ($i=1; $i <= $jumlah_form_obat; $i++) { 
            $str_nama_obat = 'nama_obat_'.$i;
            $str_dibawa = 'dibawa_'.$i;
            $str_jumlah = 'jumlah_'.$i;
            $str_tidak_dibawa = 'tidak_dibawa_'.$i;
            $str_keterangan = 'keterangan_'.$i;
            if(!is_null($request->$str_nama_obat)) {
                $obat = new RJObatSaatIni;
                $obat->id_regis = $id_pasien;
                $obat->nama_obat = $request->$str_nama_obat;
                $obat->dibawa = $request->$str_dibawa;
                $obat->jumlah = $request->$str_jumlah;
                $obat->tidak_dibawa = $request->$str_tidak_dibawa;
                $obat->keterangan = $request->$str_keterangan;
                $obat->save();
            }
        }

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->rj_asesmen_awal_dokter = True;
        $daftar_dokumen->rj_asesmen_awal_dokter_petugas = Auth::user()->nama;
        $daftar_dokumen->save();

        return redirect('rj_asesmen_awal_dokter_read');
    }

    public function get_rj_asesmen_awal_dokter_data()
    {
        $id_pasien = Session::get('id_pasien');

        //list document
        $list_document = ListDocument::where('id_regis', $id_pasien)->first();
        $this->data['nama_dokter'] = $list_document->rj_asesmen_awal_dokter_petugas;
        $this->data['nama_perawat'] = $list_document->rj_asesmen_awal_perawat_petugas;
        
        $pasien = RJAsesmenDokter::where('id_regis', $id_pasien)->first();
        $this->data['pewawancara'] = $pasien->pewawancara;
        $this->data['keluhan_utama'] = $pasien->keluhan_utama;
        $this->data['riwayat_penyakit_sekarang'] = $pasien->riwayat_penyakit_sekarang;
        $this->data['riwayat_penyakit_dahulu'] = $pasien->riwayat_penyakit_dahulu;
        $this->data['riwayat_napza'] = $pasien->riwayat_napza;
        $this->data['lama_pemakaian'] = $pasien->lama_pemakaian;
        $this->data['cara_pemakaian'] = $pasien->cara_pemakaian;
        $this->data['latar_belakang_pemakaian'] = $pasien->latar_belakang_pemakaian;
        $this->data['riwayat_pendidikan'] = $pasien->riwayat_pendidikan;
        $this->data['riwayat_pekerjaan'] = $pasien->riwayat_pekerjaan;
        $this->data['riwayat_perkawinan'] = $pasien->riwayat_perkawinan;
        $riwayat_penyakit_lainnya = explode('-', $pasien->riwayat_penyakit_lainnya);
        $this->data['riwayat_penyakit_lainnya'] = array();
        foreach ($riwayat_penyakit_lainnya as $key => $value) {
            $this->data['riwayat_penyakit_lainnya'][$value] = True;
        }
        $this->data['riwayat_operasi'] = $pasien->riwayat_operasi;
        $this->data['jenis_operasi'] = $pasien->jenis_operasi;
        $this->data['waktu_operasi'] = $pasien->waktu_operasi;
        $this->data['riwayat_tranfusi'] = $pasien->riwayat_tranfusi;
        $this->data['reaksi_tranfusi'] = $pasien->reaksi_tranfusi;
        $this->data['reaksi_timbul'] = $pasien->reaksi_timbul;
        $this->data['riwayat_penyakit_dalam_keluarga'] = $pasien->riwayat_penyakit_dalam_keluarga;
        $this->data['riwayat_pengobatan'] = $pasien->riwayat_pengobatan;
        $this->data['riwayat_alergi'] = $pasien->riwayat_alergi;
        $this->data['kepala'] = $pasien->kepala;
        $this->data['leher'] = $pasien->leher;
        $this->data['dada'] = $pasien->dada;
        $this->data['jantung'] = $pasien->jantung;
        $this->data['paru'] = $pasien->paru;
        $this->data['perut'] = $pasien->perut;
        $this->data['anggota_gerak'] = $pasien->anggota_gerak;
        $this->data['penampilan'] = $pasien->penampilan;
        $this->data['penampilanpsikiatri'] = $pasien->penampilan;
        $this->data['kesadaran_psikiatri'] = $pasien->kesadaran_psikiatri;
        $this->data['orientasi'] = $pasien->orientasi;
        $this->data['sikap'] = $pasien->sikap;
        $this->data['keterangan'] = $pasien->keterangan;
        $this->data['proses_pikir'] = $pasien->proses_pikir;
        $this->data['bentuk_pikir'] = $pasien->bentuk_pikir;
        $this->data['isi_pikir'] = $pasien->isi_pikir;
        $this->data['mood'] = $pasien->mood;
        $this->data['afek'] = $pasien->afek;
        $this->data['halusinasi'] = $pasien->halusinasi;
        $this->data['ilusi'] = $pasien->ilusi;
        $this->data['konsentrasi'] = $pasien->konsentrasi;
        $this->data['ingat'] = $pasien->ingat;
        $this->data['abstrak'] = $pasien->abstrak;
        $this->data['impuls'] = $pasien->impuls;
        $this->data['nilai'] = $pasien->nilai;
        $this->data['tilikan'] = $pasien->tilikan;
        $this->data['dipercaya'] = $pasien->dipercaya;
        $this->data['meningeal'] = $pasien->meningeal;
        $this->data['nervus'] = $pasien->nervus;
        $this->data['motorik'] = $pasien->motorik;
        $this->data['motorikdokter'] = $pasien->motorik;
        $this->data['cerebellum'] = $pasien->cerebellum;
        $this->data['vegetatif'] = $pasien->vegetatif;
        $this->data['gaduh_gelisah'] = $pasien->gaduh_gelisah;
        $this->data['ketidakoperatifan'] = $pasien->ketidakoperatifan;
        $this->data['permusuhan'] = $pasien->permusuhan;
        $this->data['pengendalian_impuls'] = $pasien->pengendalian_impuls;
        $this->data['ketegangan'] = $pasien->ketegangan;
        $this->data['bangsal'] = $pasien->bangsal;
        $this->data['tanggal_pemeriksaan'] = $pasien->tanggal_pemeriksaan;
        $this->data['panss_ec'] = $pasien->panss_ec;
        $this->data['gaff'] = $pasien->gaff;
        $this->data['axis1'] = $pasien->axis1;
        $this->data['axis2'] = $pasien->axis2;
        $this->data['axis3'] = $pasien->axis3;
        $this->data['axis4'] = $pasien->axis4;
        $this->data['axis5'] = $pasien->axis5;
        $this->data['utama'] = $pasien->utama;
        $this->data['sekunder'] = $pasien->sekunder;
        $this->data['jam'] = $pasien->jam;
        $this->data['tindakan_terapi'] = $pasien->tindakan_terapi;
        $this->data['daftar_masalah'] = $pasien->daftar_masalah;
        $this->data['tindak_lanjut'] = $pasien->tindak_lanjut;
        $this->data['perlu_dikontrol'] = $pasien->perlu_dikontrol;
        $this->data['tanggal_kontrol'] = $pasien->tanggal_kontrol;
        $this->data['ruangan'] = $pasien->ruangan;
        $this->data['indikasi_rawat_inap'] = $pasien->indikasi_rawat_inap;
        $this->data['alasan_menolak'] = $pasien->alasan_menolak;
        $this->data['alasan_lainnya'] = $pasien->alasan_lainnya;
        $this->data['dirujuk_ke'] = $pasien->dirujuk_ke;
        $this->data['alasan_dirujuk'] = $pasien->alasan_dirujuk;
        $kesadaran = explode('-', $pasien->kesadaran);
        $this->data['kesadaran'] = array();
        foreach ($kesadaran as $key => $value) {
            $this->data['kesadaran'][$value] = True;
        }
        $this->data['kesadaran_lainnya'] = $pasien->kesadaran_lainnya;
        $this->data['tensi'] = $pasien->tensi;
        $this->data['nadi'] = $pasien->nadi;
        $this->data['pernafasan'] = $pasien->pernafasan;
        $this->data['suhu'] = $pasien->suhu;

        $obat = RJObatSaatIni::where('id_regis', $id_pasien)->get();
        $this->data['obat'] = array();
        $previous_data = '';
        foreach ($obat as $key => $value) {
            $this->data['obat'][$key] = array();
            $this->data['obat'][$key]['id_data'] = $value->id;
            $this->data['obat'][$key]['nama_obat'] = $value->nama_obat;
            $this->data['obat'][$key]['dibawa'] = $value->dibawa;
            $this->data['obat'][$key]['jumlah'] = $value->jumlah;
            $this->data['obat'][$key]['tidak_dibawa'] = $value->tidak_dibawa;
            $this->data['obat'][$key]['keterangan'] = $value->keterangan;
            $previous_data .= $value->id.'-';
        }
        if(strlen($previous_data) > 0) {
            $previous_data = substr($previous_data, 0, -1);
        }
        $this->data['previous_data'] = $previous_data;
    }

    public function get_rj_asesmen_awal_dokter_read()
    {
        $this->get_rj_asesmen_awal_dokter_data();
        return view('page.rj.asesmen_awal_dokter_read', $this->data);
    }

    public function get_rj_asesmen_awal_dokter_edit()
    {
        $this->get_rj_asesmen_awal_dokter_data();
        return view('page.rj.asesmen_awal_dokter_edit', $this->data);
    }

    public function post_rj_asesmen_awal_dokter_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RJAsesmenDokter::where('id_regis', $id_pasien)->first();

        $data->pewawancara = $request->pewawancara;
        $data->keluhan_utama = $request->keluhan_utama;
        $data->riwayat_penyakit_sekarang = $request->riwayat_penyakit_sekarang;
        $data->riwayat_penyakit_dahulu = $request->riwayat_penyakit_dahulu;
        $data->riwayat_napza = $request->riwayat_napza;
        $data->lama_pemakaian = $request->lama_pemakaian;
        $data->cara_pemakaian = $request->cara_pemakaian;
        $data->latar_belakang_pemakaian = $request->latar_belakang_pemakaian;
        $data->riwayat_pendidikan = $request->riwayat_pendidikan;
        $data->riwayat_pekerjaan = $request->riwayat_pekerjaan;
        $data->riwayat_perkawinan = $request->riwayat_perkawinan;
        $riwayat = "";
        if(isset($request->penyakit_1)) {
            $riwayat .= "1-";
        }
        if(isset($request->penyakit_2)) {
            $riwayat .= "2-";
        }
        if(isset($request->penyakit_3)) {
            $riwayat .= "3-";
        }
        if(isset($request->penyakit_4)) {
            $riwayat .= "4-";
        }
        if(isset($request->penyakit_5)) {
            $riwayat .= "5-";
        }
        if(isset($request->penyakit_6)) {
            $riwayat .= "6-";
        }
        if(isset($request->penyakit_7)) {
            $riwayat .= "7-";
        }
        if(isset($request->penyakit_8)) {
            $riwayat .= "8-";
        }
        if(isset($request->penyakit_9)) {
            $riwayat .= "9-";
        }
        if(isset($request->penyakit_10)) {
            $riwayat .= "10-";
        }
        if(isset($request->penyakit_11)) {
            $riwayat .= "11-";
        }
        if(isset($request->penyakit_12)) {
            $riwayat .= "12-";
        }
        if(isset($request->penyakit_13)) {
            $riwayat .= "13-";
        }
        if(isset($request->penyakit_14)) {
            $riwayat .= "14-";
        }
        if(strlen($riwayat) > 0) {
            $riwayat = substr($riwayat, 0, -1);
        }
        $data->riwayat_penyakit_lainnya = $riwayat;
        $data->riwayat_operasi = $request->riwayat_operasi;
        $data->jenis_operasi = $request->jenis_operasi;
        $data->waktu_operasi = $request->waktu_operasi;
        $data->riwayat_tranfusi = $request->riwayat_tranfusi;
        $data->reaksi_tranfusi = $request->reaksi_tranfusi;
        $data->reaksi_timbul = $request->reaksi_timbul;
        $data->riwayat_penyakit_dalam_keluarga = $request->riwayat_penyakit_dalam_keluarga;
        $data->riwayat_pengobatan = $request->riwayat_pengobatan;
        $data->riwayat_alergi = $request->riwayat_alergi;
        $data->kepala = $request->kepala;
        $data->leher = $request->leher;
        $data->dada = $request->dada;
        $data->jantung = $request->jantung;
        $data->paru = $request->paru;
        $data->perut = $request->perut;
        $data->anggota_gerak = $request->anggota_gerak;
        $data->penampilan = $request->penampilan;
        $data->kesadaran_psikiatri = $request->kesadaran_psikiatri;
        $data->orientasi = $request->orientasi;
        $data->sikap = $request->sikap;
        $data->keterangan = $request->keterangan;
        $data->proses_pikir = $request->proses_pikir;
        $data->bentuk_pikir = $request->bentuk_pikir;
        $data->isi_pikir = $request->isi_pikir;
        $data->mood = $request->mood;
        $data->afek = $request->afek;
        $data->halusinasi = $request->halusinasi;
        $data->ilusi = $request->ilusi;
        $data->konsentrasi = $request->konsentrasi;
        $data->ingat = $request->ingat;
        $data->abstrak = $request->abstrak;
        $data->impuls = $request->impuls;
        $data->nilai = $request->nilai;
        $data->tilikan = $request->tilikan;
        $data->dipercaya = $request->dipercaya;
        $data->meningeal = $request->meningeal;
        $data->nervus = $request->nervus;
        $data->motorik = $request->motorik;
        $data->cerebellum = $request->cerebellum;
        $data->vegetatif = $request->vegetatif;
        $data->gaduh_gelisah = $request->gaduh_gelisah;
        $data->ketidakoperatifan = $request->ketidakoperatifan;
        $data->permusuhan = $request->permusuhan;
        $data->pengendalian_impuls = $request->pengendalian_impuls;
        $data->ketegangan = $request->ketegangan;
        $data->bangsal = $request->bangsal;
        $data->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
        $data->panss_ec = $request->panss_ec;
        $data->gaff = $request->gaff;
        $data->axis1 = $request->axis1;
        $data->axis2 = $request->axis2;
        $data->axis3 = $request->axis3;
        $data->axis4 = $request->axis4;
        $data->axis5 = $request->axis5;
        $data->utama = $request->utama;
        $data->sekunder = $request->sekunder;
        $data->jam = $request->jam;
        $data->tindakan_terapi = $request->tindakan_terapi;
        $data->daftar_masalah = $request->daftar_masalah;
        $data->tindak_lanjut = $request->tindak_lanjut;
        $data->perlu_dikontrol = $request->perlu_dikontrol;
        $data->tanggal_kontrol = $request->tanggal_kontrol;
        $data->ruangan = $request->ruangan;
        $data->indikasi_rawat_inap = $request->indikasi_rawat_inap;
        $data->alasan_menolak = $request->alasan_menolak;
        $data->alasan_lainnya = $request->alasan_lainnya;
        $data->dirujuk_ke = $request->dirujuk_ke;
        $data->alasan_dirujuk = $request->alasan_dirujuk;
        $kesadaran = "";
        if(isset($request->kesadaran_1)) {
            $kesadaran .= "1-";
        }
        if(isset($request->kesadaran_2)) {
            $kesadaran .= "2-";
        }
        if(isset($request->kesadaran_3)) {
            $kesadaran .= "3-";
        }
        if(isset($request->kesadaran_4)) {
            $kesadaran .= "4-";
        }
        if(isset($request->kesadaran_5)) {
            $kesadaran .= "5-";
        }
        if(isset($request->kesadaran_6)) {
            $kesadaran .= "6-";
        }
        if(isset($request->kesadaran_7)) {
            $kesadaran .= "7-";
        }
        if(strlen($kesadaran) > 0) {
            $kesadaran = substr($kesadaran, 0, -1);
        }
        $data->kesadaran = $kesadaran;
        $data->kesadaran_lainnya = $request->kesadaran_lainnya;
        $data->tensi = $request->tensi;
        $data->nadi = $request->nadi;
        $data->pernafasan = $request->pernafasan;
        $data->suhu = $request->suhu;
        $data->save();

        //old
        $previous_data = $request->previous_data;
        $exploded = explode('-', $previous_data);
        foreach ($exploded as $key => $value) {
            $str_nama_obat = 'nama_obat_'.$value;
            $str_dibawa = 'dibawa_'.$value;
            $str_jumlah = 'jumlah_'.$value;
            $str_tidak_dibawa = 'tidak_dibawa_'.$value;
            $str_keterangan = 'keterangan_'.$value;
            $obat = RJObatSaatIni::where('id', $value)->first();
            if(isset($request->$str_nama_obat)) {
                $obat->nama_obat = $request->$str_nama_obat;
                $obat->dibawa = $request->$str_dibawa;
                $obat->jumlah = $request->$str_jumlah;
                $obat->tidak_dibawa = $request->$str_tidak_dibawa;
                $obat->keterangan = $request->$str_keterangan;
                $obat->save();
            }
            else {
                $obat->delete();
            }
        }

        //new
        $jumlah_form_obat = $request->jumlah_form_obat;
        for ($i=1; $i <= $jumlah_form_obat; $i++) { 
            $str_nama_obat = 'nama_obat_new_'.$i;
            $str_dibawa = 'dibawa_new_'.$i;
            $str_jumlah = 'jumlah_new_'.$i;
            $str_tidak_dibawa = 'tidak_dibawa_new_'.$i;
            $str_keterangan = 'keterangan_new_'.$i;
            if(!is_null($request->$str_nama_obat)) {
                $obat = new RJObatSaatIni;
                $obat->id_regis = $id_pasien;
                $obat->nama_obat = $request->$str_nama_obat;
                $obat->dibawa = $request->$str_dibawa;
                $obat->jumlah = $request->$str_jumlah;
                $obat->tidak_dibawa = $request->$str_tidak_dibawa;
                $obat->keterangan = $request->$str_keterangan;
                $obat->save();
            }
        }

        return redirect('rj_asesmen_awal_dokter_read');

    }

    public function post_rj_asesmen_awal_perawat(Request $request)
    {

    	$asesmen_keperawatan = new RJAsesmenKeperawatan;
        $id_pasien = Session::get('id_pasien');

    	$asesmen_keperawatan->id_regis = $id_pasien;
    	$asesmen_keperawatan->id_user = Auth::user()->id;
    	$asesmen_keperawatan->alasan_kunjungan = $request->alasan_kunjungan;
    	$asesmen_keperawatan->hubungan_keluarga = $request->hubungan_keluarga;
    	
    	$asesmen_keperawatan->status_psikososial = "";
    	if(isset($request->status_psikososial1)) {
    		$asesmen_keperawatan->status_psikososial .= "1-";
    	}
    	if(isset($request->status_psikososial2)) {
    		$asesmen_keperawatan->status_psikososial .= "2-";
    	}
    	if(isset($request->status_psikososial3)) {
    		$asesmen_keperawatan->status_psikososial .= "3-";
    	}
    	if(isset($request->status_psikososial4)) {
    		$asesmen_keperawatan->status_psikososial .= "4-";
    	}
    	if(isset($request->status_psikososial5)) {
    		$asesmen_keperawatan->status_psikososial .= "5-";
    	}
    	if(isset($request->status_psikososial6)) {
    		$asesmen_keperawatan->status_psikososial .= "6-";
    	}
        if(isset($request->status_psikososial7)) {
            $asesmen_keperawatan->status_psikososial .= "7-";
        }
    	$asesmen_keperawatan->status_psikososial = substr($asesmen_keperawatan->status_psikososial, 0, -1);
        $asesmen_keperawatan->status_psikologis_lain = $request->status_psikologis_lain;


    	$asesmen_keperawatan->konsep_diri = "";
    	if(isset($request->konsep_diri1)) {
    		$asesmen_keperawatan->konsep_diri .= "1-";
    	}
    	if(isset($request->konsep_diri2)) {
    		$asesmen_keperawatan->konsep_diri .= "2-";
    	}
    	if(isset($request->konsep_diri3)) {
    		$asesmen_keperawatan->konsep_diri .= "3-";
    	}
    	if(isset($request->konsep_diri4)) {
    		$asesmen_keperawatan->konsep_diri .= "4-";
    	}
    	if(isset($request->konsep_diri5)) {
    		$asesmen_keperawatan->konsep_diri .= "5-";
    	}
    	$asesmen_keperawatan->konsep_diri = substr($asesmen_keperawatan->konsep_diri, 0, -1);


    	$asesmen_keperawatan->persepsi = "";
    	if(isset($request->persepsi1)) {
    		$asesmen_keperawatan->persepsi .= "1-";
    	}
    	if(isset($request->persepsi2)) {
    		$asesmen_keperawatan->persepsi .= "2-";
    	}
    	if(isset($request->persepsi3)) {
    		$asesmen_keperawatan->persepsi .= "3-";
    	}
    	if(isset($request->persepsi4)) {
    		$asesmen_keperawatan->persepsi .= "4-";
    	}
    	if(isset($request->persepsi5)) {
    		$asesmen_keperawatan->persepsi .= "5-";
    	}
    	if(isset($request->persepsi6)) {
    		$asesmen_keperawatan->persepsi .= "6-";
    	}
    	if(isset($request->persepsi7)) {
    		$asesmen_keperawatan->persepsi .= "7-";
    	}
    	$asesmen_keperawatan->persepsi = substr($asesmen_keperawatan->persepsi, 0, -1);

    	$asesmen_keperawatan->motorik = "";
    	if(isset($request->motorik1)) {
    		$asesmen_keperawatan->motorik .= "1-";
    	}
    	if(isset($request->motorik2)) {
    		$asesmen_keperawatan->motorik .= "2-";
    	}
    	if(isset($request->motorik3)) {
    		$asesmen_keperawatan->motorik .= "3-";
    	}
    	if(isset($request->motorik4)) {
    		$asesmen_keperawatan->motorik .= "4-";
    	}
    	if(isset($request->motorik5)) {
    		$asesmen_keperawatan->motorik .= "5-";
    	}
    	if(isset($request->motorik6)) {
    		$asesmen_keperawatan->motorik .= "6-";
    	}
    	if(isset($request->motorik7)) {
    		$asesmen_keperawatan->motorik .= "7-";
    	}
    	if(isset($request->motorik8)) {
    		$asesmen_keperawatan->motorik .= "8-";
    	}
    	if(isset($request->motorik9)) {
    		$asesmen_keperawatan->motorik .= "9-";
    	}
    	$asesmen_keperawatan->motorik = substr($asesmen_keperawatan->motorik, 0, -1);

    	$asesmen_keperawatan->penampilan = "";
    	if(isset($request->penampilan1)) {
    		$asesmen_keperawatan->penampilan .= "1-";
    	}
    	if(isset($request->penampilan2)) {
    		$asesmen_keperawatan->penampilan .= "2-";
    	}
    	if(isset($request->penampilan3)) {
    		$asesmen_keperawatan->penampilan .= "3-";
    	}
    	if(isset($request->penampilan4)) {
    		$asesmen_keperawatan->penampilan .= "4-";
    	}
    	$asesmen_keperawatan->penampilan = substr($asesmen_keperawatan->penampilan, 0, -1);


    	$asesmen_keperawatan->pikir = "";
    	if(isset($request->pikir1)) {
    		$asesmen_keperawatan->pikir .= "1-";
    	}
    	if(isset($request->pikir2)) {
    		$asesmen_keperawatan->pikir .= "2-";
    	}
    	if(isset($request->pikir3)) {
    		$asesmen_keperawatan->pikir .= "3-";
    	}
    	if(isset($request->pikir4)) {
    		$asesmen_keperawatan->pikir .= "4-";
    	}
    	if(isset($request->pikir5)) {
    		$asesmen_keperawatan->pikir .= "5-";
    	}
    	if(isset($request->pikir6)) {
    		$asesmen_keperawatan->pikir .= "6-";
    	}
    	if(isset($request->pikir7)) {
    		$asesmen_keperawatan->pikir .= "7-";
    	}
    	if(isset($request->pikir8)) {
    		$asesmen_keperawatan->pikir .= "8-";
    	}
    	if(isset($request->pikir9)) {
    		$asesmen_keperawatan->pikir .= "9-";
    	}
    	if(isset($request->pikir10)) {
    		$asesmen_keperawatan->pikir .= "10-";
    	}
    	if(isset($request->pikir11)) {
    		$asesmen_keperawatan->pikir .= "11-";
    	}
    	if(isset($request->pikir12)) {
    		$asesmen_keperawatan->pikir .= "12-";
    	}
    	if(isset($request->pikir13)) {
    		$asesmen_keperawatan->pikir .= "13-";
    	}
    	if(isset($request->pikir14)) {
    		$asesmen_keperawatan->pikir .= "14-";
    	}
    	if(isset($request->pikir15)) {
    		$asesmen_keperawatan->pikir .= "15-";
    	}
    	$asesmen_keperawatan->pikir = substr($asesmen_keperawatan->pikir, 0, -1);

        $asesmen_keperawatan->perasaan = "";
        if(isset($request->perasaan1)) {
            $asesmen_keperawatan->perasaan .= "1-";
        }
        if(isset($request->perasaan2)) {
            $asesmen_keperawatan->perasaan .= "2-";
        }
        if(isset($request->perasaan3)) {
            $asesmen_keperawatan->perasaan .= "3-";
        }
        if(isset($request->perasaan4)) {
            $asesmen_keperawatan->perasaan .= "4-";
        }
        if(isset($request->perasaan5)) {
            $asesmen_keperawatan->perasaan .= "5-";
        }
        if(isset($request->perasaan6)) {
            $asesmen_keperawatan->perasaan .= "6-";
        }
        if(isset($request->perasaan7)) {
            $asesmen_keperawatan->perasaan .= "7-";
        }
        $asesmen_keperawatan->perasaan = substr($asesmen_keperawatan->perasaan, 0, -1);

        $asesmen_keperawatan->status_fungsional = $request->status_fungsional;

        if(isset($request->perlu_bantuan)) {
            $asesmen_keperawatan->perlu_bantuan = $request->perlu_bantuan;
    	}
        $asesmen_keperawatan->dilaporkan_ke = $request->dilaporkan_ke;
        $asesmen_keperawatan->waktu_laporan = $request->waktu_laporan;

    	$asesmen_keperawatan->status_fungsional = $request->status_fungsional;
    	$asesmen_keperawatan->waktu_laporan = $request->waktu_laporan;
    	// $asesmen_keperawatan->save();


    	//return redirect('index');
    	// FISIK GIZI////////
    	// FISIK GIZI////////
    	// FISIK GIZI////////
    	// FISIK GIZI////////
    	// $fisik_gizi = new RJFisikGizi;
        // $asesmen_keperawatan->id_regis = $id_pasien;
        $asesmen_keperawatan->td = $request->td;
        $asesmen_keperawatan->tb = $request->tb;
        $asesmen_keperawatan->nadi = $request->nadi;
        $asesmen_keperawatan->bb = $request->bb;
        $asesmen_keperawatan->pernafasan = $request->pernafasan;
        $asesmen_keperawatan->golongan_darah = $request->golongan_darah;
        $asesmen_keperawatan->suhu = $request->suhu;
        $asesmen_keperawatan->skor_must = $request->must_1 + $request->must_2;
        $asesmen_keperawatan->must_1 = $request->must_1;
        if(isset($request->must_1_input_bb_berkurang)) {
            $asesmen_keperawatan->bb_berkurang = $request->must_1_input_bb_berkurang;
            $asesmen_keperawatan->skor_must += $request->must_1_input_bb_berkurang;
        }
        $asesmen_keperawatan->must_2 = $request->must_2;
        /////
        if($request->must_3 == 1) {
            $asesmen_keperawatan->must_3 = 1;
            $dk = "";
            if(isset($diagnosis_khusus_1)) {
                $dk .= "DM, ";
            }
            if(isset($diagnosis_khusus_2)) {
                $dk .= "Kemoterapi, ";
            }
            if(isset($diagnosis_khusus_3)) {
                $dk .= "Hemodialisa, ";
            }
            if(isset($diagnosis_khusus_4)) {
                $dk .= "Geriatri, ";
            }
            if(isset($diagnosis_khusus_5)) {
                $dk .= "Immunitas Menurun, ";
            }
            if(isset($diagnosis_khusus_6)) {
                $dk .= "Lain-lain, ";
            }
            $dk = substr($dk, 0, -2);
            $asesmen_keperawatan->diagnosis_khusus = $dk;
        }
        else {
            $asesmen_keperawatan->must_3 = 0;
        }
        $asesmen_keperawatan->sk_1 = $request->sk_1;
        $asesmen_keperawatan->sk_2 = $request->sk_2;
        $asesmen_keperawatan->sk_3 = $request->sk_3;
        $asesmen_keperawatan->sk_4 = $request->sk_4;
        $asesmen_keperawatan->skor_sk = $request->sk_1 + $request->sk_2 + $request->sk_3 + $request->sk_4;

        $asesmen_keperawatan->penyakit_malnutrisi = "";
        if(isset($request->penyakit_malnutrisi_1)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "1-";
        }
        if(isset($request->penyakit_malnutrisi_2)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "2-";
        }
        if(isset($request->penyakit_malnutrisi_3)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "3-";
        }
        if(isset($request->penyakit_malnutrisi_4)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "4-";
        }
        if(isset($request->penyakit_malnutrisi_5)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "5-";
        }
        if(isset($request->penyakit_malnutrisi_6)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "6-";
        }
        if(isset($request->penyakit_malnutrisi_7)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "7-";
        }
        if(isset($request->penyakit_malnutrisi_8)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "8-";
        }
        if(isset($request->penyakit_malnutrisi_9)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "9-";
        }
        if(isset($request->penyakit_malnutrisi_10)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "10-";
        }
        if(isset($request->penyakit_malnutrisi_11)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "11-";
        }
        if(isset($request->penyakit_malnutrisi_12)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "12-";
        }
        if(isset($request->penyakit_malnutrisi_13)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "13-";
        }
        if(isset($request->penyakit_malnutrisi_14)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "14-";
        }
        if(isset($request->penyakit_malnutrisi_15)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "15-";
        }
        if(isset($request->penyakit_malnutrisi_16)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "16-";
        }
        if(!empty($asesmen_keperawatan->penyakit_malnutrisi)) {
            $asesmen_keperawatan->penyakit_malnutrisi = substr($asesmen_keperawatan->penyakit_malnutrisi, 0, -1);
        }

        $asesmen_keperawatan->pemberitahuan_fg = $request->pemberitahuan_fg;
        if(!empty($request->waktu_pemberitahuan)) {
            $asesmen_keperawatan->waktu_pemberitahuan = $request->waktu_pemberitahuan;
        }

        //return redirect('index');
        // PENILAIAN TINGKAT NYERI	//////////////
        // PENILAIAN TINGKAT NYERI	//////////////
        // PENILAIAN TINGKAT NYERI	//////////////
        // PENILAIAN TINGKAT NYERI	//////////////

        // $nyeri = new RJNyeri;
        // $nyeri->id_regis = $id_pasien;
        // $nyeri->jenis_form = 'awal';
        $asesmen_keperawatan->tingkat = $request->tingkat;
        $asesmen_keperawatan->skala = $request->skala;
        $asesmen_keperawatan->lokasi = $request->lokasi;
        $asesmen_keperawatan->lokasi = $request->lokasi;
        $asesmen_keperawatan->durasi = $request->durasi;
        $asesmen_keperawatan->frekuensi = $request->frekuensi;
        $hilang = "";
        if(isset($request->hilang1)) {
            $hilang .= "1-";
        }
        if(isset($request->hilang2)) {
            $hilang .= "2-";
        }
        if(isset($request->hilang3)) {
            $hilang .= "3-";
        }
        if(isset($request->hilang4)) {
            $hilang .= "4-";
        }
        if(isset($request->hilang5)) {
            $hilang .= "5-";
            $asesmen_keperawatan->nyeri_hilang_input_text = $request->nyeri_hilang_input_text;
        }
        if(strlen($hilang) > 0) {
            $hilang = substr($hilang, 0, -1);
        }
        $asesmen_keperawatan->hilang = $hilang;
        $asesmen_keperawatan->pemberitahuan_ny = $request->pemberitahuan_ny;
        if($request->pemberitahuan_ny == '1') {
            $asesmen_keperawatan->waktu_pemberitahuan_ny = $request->waktu_pemberitahuan_ny;
        }
        // $nyeri->save();


        // HUMPTY DUMPTY /////////////
        // HUMPTY DUMPTY /////////////
        // HUMPTY DUMPTY /////////////
        // HUMPTY DUMPTY /////////////

        $asesmen_keperawatan->jenis_resiko_jatuh = $request->jenis_resiko_jatuh;
        if($request->jenis_resiko_jatuh == 'humpty_dumpty')
        {
            $asesmen_keperawatan->usia = $request->usia;
            $asesmen_keperawatan->diagnosis_hd = $request->diagnosis_hd;
            $asesmen_keperawatan->gangguan_kognitif = $request->gangguan_kognitif;
            $asesmen_keperawatan->faktor_lingkungan = $request->faktor_lingkungan;
            $asesmen_keperawatan->waktu_respon_obat = $request->waktu_respon_obat;
            $asesmen_keperawatan->penggunaan_obat = $request->penggunaan_obat;            
        }
        elseif($request->jenis_resiko_jatuh == 'morse')
        {
            $asesmen_keperawatan->riwayat_jatuh_mrs = $request->riwayat_jatuh_mrs;
            $asesmen_keperawatan->diagnosis_sekunder = $request->diagnosis_sekunder;
            $asesmen_keperawatan->alat_bantu = $request->alat_bantu;
            $asesmen_keperawatan->terpasang_infus = $request->terpasang_infus;
            $asesmen_keperawatan->gaya_berjalan = $request->gaya_berjalan;
            $asesmen_keperawatan->status_mental_mrs = $request->status_mental_mrs;
        }
        elseif($request->jenis_resiko_jatuh == 'edmunson')
        {
            $asesmen_keperawatan->status_mental_edm = $request->status_mental_edm;
            $asesmen_keperawatan->diagnosis_edm = $request->diagnosis_edm;
            $asesmen_keperawatan->eliminasi = $request->eliminasi;
            $asesmen_keperawatan->pengobatan = $request->pengobatan;
            $asesmen_keperawatan->diagnosa = $request->diagnosa;
            $asesmen_keperawatan->ambulasi = $request->ambulasi;
            $asesmen_keperawatan->nutrisi = $request->nutrisi;
            $asesmen_keperawatan->riwayat_jatuh_edm = $request->riwayat_jatuh_edm;
        }

        
        // $diagnosa = new RJDiagnosaKeperawatan;
        // $diagnosa->id_regis = $id_pasien;
        $umum = "";
        if(isset($request->umum_1)) {
            $umum .= "1-";
        }
        if(isset($request->umum_2)) {
            $umum .= "2-";
        }
        if(isset($request->umum_3)) {
            $umum .= "3-";
        }
        if(isset($request->umum_4)) {
            $umum .= "4-";
        }
        if(isset($request->umum_5)) {
            $umum .= "5-";
        }
        if(isset($request->umum_6)) {
            $umum .= "6-";
        }
        if(isset($request->umum_7)) {
            $umum .= "7-";
        }
        if(isset($request->umum_8)) {
            $umum .= "8-";
        }
        if(isset($request->umum_9)) {
            $umum .= "9-";
        }
        if(isset($request->umum_10)) {
            $umum .= "10-";
        }
        if(isset($request->umum_11)) {
            $umum .= "11-";
        }
        if(isset($request->umum_12)) {
            $umum .= "12-";
        }
        if(isset($request->umum_13)) {
            $umum .= "13-";
        }
        if(isset($request->umum_14)) {
            $umum .= "14-";
        }
        if(strlen($umum) >= 0) {
            $umum = substr($umum, 0, -1);
        }
        $asesmen_keperawatan->umum = $umum;

        if(!empty($request->umum_lainnya)) {
            $asesmen_keperawatan->umum_lainnya = $request->umum_lainnya;
        }

        $jiwa = "";
        if(isset($request->jiwa_1)) {
            $jiwa .= "1-";
        }
        if(isset($request->jiwa_2)) {
            $jiwa .= "2-";
        }
        if(isset($request->jiwa_3)) {
            $jiwa .= "3-";
        }
        if(isset($request->jiwa_4)) {
            $jiwa .= "4-";
        }
        if(isset($request->jiwa_5)) {
            $jiwa .= "5-";
        }
        if(isset($request->jiwa_6)) {
            $jiwa .= "6-";
        }
        if(isset($request->jiwa_7)) {
            $jiwa .= "7-";
        }
        if(isset($request->jiwa_8)) {
            $jiwa .= "8-";
        }
        if(isset($request->jiwa_9)) {
            $jiwa .= "9-";
        }
        if(isset($request->jiwa_10)) {
            $jiwa .= "10-";
        }
        if(isset($request->jiwa_11)) {
            $jiwa .= "11-";
        }
        if(isset($request->jiwa_12)) {
            $jiwa .= "12-";
        }
        if(!empty($jiwa)) {
            $jiwa = substr($jiwa, 0, -1);
        }
        $asesmen_keperawatan->jiwa = $jiwa;

        if(!empty($request->jiwa_lainnya)) {
            $asesmen_keperawatan->jiwa_lainnya = $request->jiwa_lainnya;
        }

        $asesmen_keperawatan->obat_parental = $request->obat_parental;
        $asesmen_keperawatan->ekg = $request->ekg;
        // $diagnosa->save();

        // EVALUASI TINDAKAN /////////
        // EVALUASI TINDAKAN /////////
        // EVALUASI TINDAKAN /////////
        // EVALUASI TINDAKAN /////////

        // $data = new RJEvaluasiTindakan;
        // $asesmen_keperawatan->id_regis = $id_pasien;
        $asesmen_keperawatan->implementasi = $request->implementasi;
        $asesmen_keperawatan->evaluasi = $request->evaluasi;
        // $data->save();
        $asesmen_keperawatan->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->rj_asesmen_awal_perawat = True;
        $daftar_dokumen->rj_asesmen_awal_perawat_petugas = Auth::user()->nama;
        $daftar_dokumen->save();


        return redirect('rj_asesmen_awal_perawat_read');
    }


    // public function get_rj_asesmen_awal_dokter_read_2()
    // {
    //     $pasien = RJDataMedis::where('id', 1)->first();
        
    //     $this->data['id_regis'] = $pasien->id_regis;
    //     $this->data['pewawancara'] = $pasien->pewawancara;
    //     $this->data['keluhan_utama'] = $pasien->keluhan_utama;
        
    //     if(!is_null($pasien->riwayat_penyakit_sekarang)) {
    //         $this->data['riwayat_penyakit_sekarang'] = $pasien->riwayat_penyakit_sekarang;
    //     }

    //     if(!is_null($pasien->riwayat_penyakit_dahulu)) {
    //         $this->data['riwayat_penyakit_dahulu'] = $pasien->riwayat_penyakit_dahulu;
    //     }

    //     $this->data['riwayat_napza'] = $pasien->riwayat_napza;
        
    //     if(!is_null($pasien->lama_pemakaian)) {
    //         $this->data['lama_pemakaian'] = $pasien->lama_pemakaian;
    //     }

    //     if(!is_null($pasien->cara_pemakaian)) {
    //         $this->data['cara_pemakaian'] = $pasien->cara_pemakaian;
    //     }

    //     if(!is_null($pasien->latar_belakang_pemakaian)) {
    //         $this->data['latar_belakang_pemakaian'] = $pasien->latar_belakang_pemakaian;
    //     }

    //     $this->data['riwayat_pendidikan'] = $pasien->riwayat_pekerjaan;
    //     $this->data['riwayat_pekerjaan'] = $pasien->riwayat_pekerjaan;
    //     $this->data['riwayat_perkawinan'] = $pasien->riwayat_perkawinan;
        
    //     if(!is_null($pasien->riwayat)) {
    //         $this->data['riwayat'] = $pasien->riwayat;
    //         $this->data['riwayat_penyakit_lainnya'] = $pasien->riwayat_penyakit_lainnya;
    //     }

    //     $this->data['riwayat_operasi'] = $pasien->riwayat_operasi;
        
    //     if(!is_null($pasien->jenis_operasi)) {
    //         $this->data['jenis_operasi'] = $pasien->jenis_operasi;
    //     }    

    //     if(!is_null($pasien->waktu_operasi)) {
    //         $this->data['waktu_operasi'] = $pasien->waktu_operasi;
    //     }  

    //     $this->data['riwayat_tranfusi'] = $pasien->riwayat_tranfusi;
    //     $this->data['reaksi_tranfusi'] = $pasien->reaksi_tranfusi;

    //     if(!is_null($pasien->reaksi_timbul)) {
    //         $this->data['reaksi_timbul'] = $pasien->reaksi_timbul;
    //     }
    //     if(!is_null($pasien->waktu_operasi)) {
    //         $this->data['riwayat_penyakit_dalam_keluarga'] = $pasien->riwayat_penyakit_dalam_keluarga;
    //     }
    //     if(!is_null($pasien->waktu_operasi)) {
    //         $this->data['riwayat_pengobatan'] = $pasien->riwayat_pengobatan;
    //     }
    //     if(!is_null($pasien->riwayat_alergi)) {
    //         $this->data['riwayat_alergi'] = $pasien->riwayat_alergi;
    //     }

    //     // OBAT YANG DIMINUM SAAT INI //////////
    //     // OBAT YANG DIMINUM SAAT INI //////////
    //     // OBAT YANG DIMINUM SAAT INI //////////
    //     // OBAT YANG DIMINUM SAAT INI //////////

    //     $obat = RJObatSaatIni::where('id', 1)->first();
        
    //     $this->data['id_regis'] = $obat->id_regis;

    //     $this->data['nama_obat'] = $obat->nama_obat;
    //     $this->data['dibawa'] = $obat->dibawa;
    //     $this->data['jumlah'] = $obat->jumlah;
    //     $this->data['tidak_dibawa'] = $obat->tidak_dibawa;
    //     $this->data['keterangan'] = $obat->keterangan;

    //     // PEMERIKSAAN FISIK ///////////
    //     // PEMERIKSAAN FISIK ///////////
    //     // PEMERIKSAAN FISIK ///////////
    //     // PEMERIKSAAN FISIK ///////////

    //     $pemeriksaan = RJPemeriksaanFisik::where('id', 1)->first();
        
    //     $this->data['id_regis'] = $pemeriksaan->id_regis;
    //     $this->data['kepala'] = $pemeriksaan->kepala;
    //     $this->data['leher'] = $pemeriksaan->leher;
    //     $this->data['dada'] = $pemeriksaan->dada;
    //     $this->data['jantung'] = $pemeriksaan->jantung;
    //     $this->data['paru'] = $pemeriksaan->paru;
    //     $this->data['perut'] = $pemeriksaan->perut;
    //     $this->data['anggota_gerak'] = $pemeriksaan->anggota_gerak;

    //     // STATUS PSIKIATRI ///////////
    //     // STATUS PSIKIATRI ///////////
    //     // STATUS PSIKIATRI ///////////
    //     // STATUS PSIKIATRI ///////////

    //     $status = RJStatusPsikiatri::where('id', 1)->first();
        
    //     $this->data['id_regis'] = $status->id_regis;
    //     $this->data['penampilan'] = $status->penampilan;
    //     $this->data['kesadaran'] = $status->kesadaran;
    //     $this->data['orientasi'] = $status->orientasi;
    //     $this->data['sikap'] = $status->sikap;
    //     $this->data['keterangan'] = $status->keterangan;
    //     $this->data['proses_pikir'] = $status->proses_pikir;
    //     $this->data['bentuk_pikir'] = $status->bentuk_pikir;
    //     $this->data['isi_pikir'] = $status->isi_pikir;
    //     $this->data['mood'] = $status->mood;
    //     $this->data['afek'] = $status->afek;
    //     $this->data['halusinasi'] = $status->halusinasi;
    //     $this->data['ilusi'] = $status->ilusi;
    //     $this->data['konsentrasi'] = $status->konsentrasi;
    //     $this->data['ingat'] = $status->ingat;
    //     $this->data['abstrak'] = $status->abstrak;
    //     $this->data['impuls'] = $status->impuls;
    //     $this->data['nilai'] = $status->nilai;
    //     $this->data['tilikan'] = $status->tilikan;
    //     $this->data['dipercaya'] = $status->dipercaya;

    //     // STATUS NEUROLOGI ////////////
    //     // STATUS NEUROLOGI ////////////
    //     // STATUS NEUROLOGI ////////////
    //     // STATUS NEUROLOGI ////////////

    //     $neuro = RJStatusNeurologi::where('id', 1)->first();
        
    //     $this->data['id_regis'] = $neuro->id_regis;
    //     $this->data['meningeal'] = $neuro->meningeal;
    //     $this->data['nervus'] = $neuro->nervus;
    //     $this->data['motorik'] = $neuro->motorik;
    //     $this->data['cerebellum'] = $neuro->cerebellum;
    //     $this->data['vegetatif'] = $neuro->vegetatif;

    //     // PEMERIKSAAN PENUNJANG ///////////
    //     // PEMERIKSAAN PENUNJANG ///////////
    //     // PEMERIKSAAN PENUNJANG ///////////
    //     // PEMERIKSAAN PENUNJANG ///////////

    //     // $pemeriksaan = new RJPemeriksaanPenunjang;
    //     // $pemeriksaan->id_regis = 1;
    //     // $pemeriksaan->jenis = $request->jenis;
    //     // $pemeriksaan->jam_pemeriksaan = $request->jam_pemeriksaan;
    //     // $pemeriksaan->jam_hasil = $request->jam_hasil;
    //     // $pemeriksaan->keterangan = $request->keterangan;
    //     // $pemeriksaan->laboratorium = $request->laboratorium;
    //     // $pemeriksaan->radiologi = $request->radiologi;
    //     // $pemeriksaan->ekg = $request->ekg;
    //     // $pemeriksaan->lainnya = $request->lainnya;
    //     // $pemeriksaan->save();

        
    //     // INSTRUMEN PENILAIAN ///////////////////
    //     // INSTRUMEN PENILAIAN ///////////////////
    //     // INSTRUMEN PENILAIAN ///////////////////
    //     // INSTRUMEN PENILAIAN ///////////////////
    //     $instrumen = RJInstrumenPenilaian::where('id', 1)->first();
        
    //     $this->data['id_regis'] = $instrumen->id_regis;
    //     $this->data['gaduh_gelisah'] = $instrumen->gaduh_gelisah;
    //     $this->data['ketidakoperatifan'] = $instrumen->ketidakoperatifan;
    //     $this->data['permusuhan'] = $instrumen->permusuhan;
    //     $this->data['pengendalian_impuls'] = $instrumen->pengendalian_impuls;
    //     $this->data['ketegangan'] = $instrumen->ketegangan;
    //     $this->data['bangsal'] = $instrumen->bangsal;
    //     $this->data['tanggal_pemeriksaan'] = $instrumen->tanggal_pemeriksaan;
    //     $this->data['panss_ec'] = $instrumen->panss_ec;
    //     $this->data['gaff'] = $instrumen->gaff;

    //     // DIAGNOSIS TINDAKAN TERAPI /////////////
    //     // DIAGNOSIS TINDAKAN TERAPI /////////////
    //     // DIAGNOSIS TINDAKAN TERAPI /////////////
    //     // DIAGNOSIS TINDAKAN TERAPI /////////////

    //     $diagnosis = RJDiagnosisTindakanTerapi::where('id', 1)->first();
        
    //     $this->data['id_regis'] = $diagnosis->id_regis;
    //     $this->data['axis1'] = $diagnosis->axis1;
    //     $this->data['axis2'] = $diagnosis->axis2;
    //     $this->data['axis3'] = $diagnosis->axis3;
    //     $this->data['axis4'] = $diagnosis->axis4;
    //     $this->data['axis5'] = $diagnosis->axis5;
    //     $this->data['utama'] = $diagnosis->utama;
    //     $this->data['sekunder'] = $diagnosis->sekunder;
    //     $this->data['jam'] = $diagnosis->jam;
    //     $this->data['tindakan_terapi'] = $diagnosis->tindakan_terapi;
    //     $this->data['daftar_masalah'] = $diagnosis->daftar_masalah;
        
    //     // TINDAK LANJUT ///////////////////
    //     // TINDAK LANJUT ///////////////////
    //     // TINDAK LANJUT ///////////////////
    //     // TINDAK LANJUT ///////////////////
        
    //     $tindak = RJTindakLanjut::where('id', 1)->first();
        
    //     $this->data['id_regis'] = $tindak->id_regis;
    //     $this->data['tindak_lanjut'] = $tindak->tindak_lanjut;
    //     $this->data['perlu_dikontrol'] = $tindak->perlu_dikontrol;
    //     $this->data['tanggal_kontrol'] = $tindak->tanggal_kontrol;
    //     $this->data['ruangan'] = $tindak->ruangan;
    //     $this->data['indikasi_rawat_inap'] = $tindak->indikasi_rawat_inap;
    //     $this->data['alasan_menolak'] = $tindak->alasan_menolak;
    //     $this->data['dirujuk_ke'] = $tindak->dirujuk_ke;
    //     $this->data['alasan_dirujuk'] = $tindak->alasan_dirujuk;
    //     $this->data['kesadaran'] = $tindak->kesadaran;
    //     $this->data['kesadaran_lainnya'] = $tindak->kesadaran_lainnya;
    //     $this->data['tensi'] = $tindak->tensi;
    //     $this->data['nadi'] = $tindak->nadi;
    //     $this->data['pernafasan'] = $tindak->pernafasan;
    //     $this->data['suhu'] = $tindak->suhu;


    //     return view('page.rj.asesmen_awal_dokter_read', $this->data);
    // }

    public function get_rj_asesmen_awal_perawat_data()
    {
        $id_pasien = Session::get('id_pasien');

        $list_document = ListDocument::where('id_regis', $id_pasien)->first();
        $this->data['nama_dokter'] = $list_document->rj_asesmen_awal_dokter_petugas;
        $this->data['nama_perawat'] = $list_document->rj_asesmen_awal_perawat_petugas;

        $pasien = RJAsesmenKeperawatan::where('id_regis', $id_pasien)->first();
        $this->data['id_user'] = $pasien->id_user;
        $this->data['alasan_kunjungan'] = $pasien->alasan_kunjungan;
        $this->data['hubungan_keluarga'] = $pasien->hubungan_keluarga;
        $status_psikososial = explode('-', $pasien->status_psikososial);
        $this->data['status_psikososial'] = array();
        foreach ($status_psikososial as $key => $value) {
            $this->data['status_psikososial'][$value] = True;
        }

        $this->data['status_psikologis_lain'] = $pasien->status_psikologis_lain;
        $this->data['dilaporkan_ke'] = $pasien->dilaporkan_ke;
        $konsep_diri = explode('-', $pasien->konsep_diri);
        $this->data['konsep_diri'] = array();
        foreach ($konsep_diri as $key => $value) {
            $this->data['konsep_diri'][$value] = True;
        }
        $persepsi = explode('-', $pasien->persepsi);
        $this->data['persepsi'] = array();
        foreach ($persepsi as $key => $value) {
            $this->data['persepsi'][$value] = True;
        }
        $motorik = explode('-', $pasien->motorik);
        $this->data['motorik'] = array();
        foreach ($motorik as $key => $value) {
            $this->data['motorik'][$key] = True;
        }
        $penampilan = explode('-', $pasien->penampilan);
        $this->data['penampilan'] = array();
        foreach ($penampilan as $key => $value) {
            $this->data['penampilan'][$value] = True;
        }
        $pikir = explode('-', $pasien->pikir);
        $this->data['pikir'] = array();
        foreach ($pikir as $key => $value) {
            $this->data['pikir'][$value] = True;
        }
        $perasaan = explode('-', $pasien->perasaan);
        $this->data['perasaan'] = array();
        foreach ($perasaan as $key => $value) {
            $this->data['perasaan'][$value] = True;
        }
        $this->data['status_fungsional'] = $pasien->status_fungsional;
        $this->data['perlu_bantuan'] = $pasien->perlu_bantuan;
        $this->data['waktu_laporan'] = $pasien->waktu_laporan;
        $this->data['td'] = $pasien->td;
        $this->data['tb'] = $pasien->tb;
        $this->data['nadi'] = $pasien->nadi;
        $this->data['bb'] = $pasien->bb;
        $this->data['pernafasan'] = $pasien->pernafasan;
        $this->data['golongan_darah'] = $pasien->golongan_darah;
        $this->data['suhu'] = $pasien->suhu;
        $this->data['must_1'] = $pasien->must_1;
        $this->data['must_2'] = $pasien->must_2;
        $this->data['must_3'] = $pasien->must_3;
        $this->data['bb_berkurang'] = $pasien->bb_berkurang;
        $this->data['diagnosis_khusus'] = $pasien->diagnosis_khusus;
        $this->data['skor_must'] = $pasien->skor_must;
        $this->data['sk_1'] = $pasien->sk_1;
        $this->data['sk_2'] = $pasien->sk_2;
        $this->data['sk_3'] = $pasien->sk_3;
        $this->data['sk_4'] = $pasien->sk_4;
        $this->data['skor_sk'] = $pasien->skor_sk;
        $penyakit_malnutrisi = explode('-', $pasien->penyakit_malnutrisi);
        $this->data['penyakit_malnutrisi'] = array();
        foreach ($penyakit_malnutrisi as $key => $value) {
            $this->data['penyakit_malnutrisi'][$value] = True;
        }
        $this->data['pemberitahuan_fg'] = $pasien->pemberitahuan_fg;
        $this->data['waktu_pemberitahuan_fg'] = $pasien->waktu_pemberitahuan_fg;
        $this->data['tingkat'] = $pasien->tingkat;
        $this->data['skala'] = $pasien->skala;
        $this->data['lokasi'] = $pasien->lokasi;
        $this->data['durasi'] = $pasien->durasi;
        $this->data['frekuensi'] = $pasien->frekuensi;
        $hilang = explode('-', $pasien->hilang);
        $this->data['hilang'] = array();
        foreach ($hilang as $key => $value) {
            $this->data['hilang'][$value] = True;
        }
        $this->data['nyeri_hilang_input_text'] = $pasien->nyeri_hilang_input_text;
        $this->data['pemberitahuan_ny'] = $pasien->pemberitahuan_ny;
        $this->data['waktu_pemberitahuan_ny'] = $pasien->waktu_pemberitahuan_ny;
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
        $umum = explode('-', $pasien->umum);
        $this->data['umum'] = array();
        foreach ($umum as $key => $value) {
            $this->data['umum'][$value] = True;
        }
        $this->data['umum_lainnya'] = $pasien->umum_lainnya;
        $jiwa = explode('-', $pasien->jiwa);
        $this->data['jiwa'] = array();
        foreach ($jiwa as $key => $value) {
            $this->data['jiwa'][$value] = True;
        }
        $this->data['jiwa_lainnya'] = $pasien->jiwa_lainnya;
        $this->data['obat_parental'] = $pasien->obat_parental;
        $this->data['ekg'] = $pasien->ekg;
        $this->data['implementasi'] = $pasien->implementasi;
        $this->data['evaluasi'] = $pasien->evaluasi;
    }

    public function get_rj_asesmen_awal_perawat_read()
    {
        $this->get_rj_asesmen_awal_perawat_data();
        return view('page.rj.asesmen_awal_perawat_read', $this->data);
    }

    public function get_rj_asesmen_awal_perawat_edit()
    {
        $this->get_rj_asesmen_awal_perawat_data();
        return view('page.rj.asesmen_awal_perawat_edit', $this->data);
    }

    public function post_rj_asesmen_awal_perawat_edit(Request $request)
    {

        $id_pasien = Session::get('id_pasien');
        $asesmen_keperawatan = RJAsesmenKeperawatan::where('id_regis', $id_pasien)->first();
        $asesmen_keperawatan->id_user = Auth::user()->id;
        $asesmen_keperawatan->alasan_kunjungan = $request->alasan_kunjungan;
        $asesmen_keperawatan->hubungan_keluarga = $request->hubungan_keluarga;
        
        $asesmen_keperawatan->status_psikososial = "";
        if(isset($request->status_psikososial1)) {
            $asesmen_keperawatan->status_psikososial .= "1-";
        }
        if(isset($request->status_psikososial2)) {
            $asesmen_keperawatan->status_psikososial .= "2-";
        }
        if(isset($request->status_psikososial3)) {
            $asesmen_keperawatan->status_psikososial .= "3-";
        }
        if(isset($request->status_psikososial4)) {
            $asesmen_keperawatan->status_psikososial .= "4-";
        }
        if(isset($request->status_psikososial5)) {
            $asesmen_keperawatan->status_psikososial .= "5-";
        }
        if(isset($request->status_psikososial6)) {
            $asesmen_keperawatan->status_psikososial .= "6-";
        }
        if(isset($request->status_psikososial7)) {
            $asesmen_keperawatan->status_psikososial .= "7-";
        }
        $asesmen_keperawatan->status_psikososial = substr($asesmen_keperawatan->status_psikososial, 0, -1);
        $asesmen_keperawatan->status_psikologis_lain = $request->status_psikologis_lain;


        $asesmen_keperawatan->konsep_diri = "";
        if(isset($request->konsep_diri1)) {
            $asesmen_keperawatan->konsep_diri .= "1-";
        }
        if(isset($request->konsep_diri2)) {
            $asesmen_keperawatan->konsep_diri .= "2-";
        }
        if(isset($request->konsep_diri3)) {
            $asesmen_keperawatan->konsep_diri .= "3-";
        }
        if(isset($request->konsep_diri4)) {
            $asesmen_keperawatan->konsep_diri .= "4-";
        }
        if(isset($request->konsep_diri5)) {
            $asesmen_keperawatan->konsep_diri .= "5-";
        }
        $asesmen_keperawatan->konsep_diri = substr($asesmen_keperawatan->konsep_diri, 0, -1);


        $asesmen_keperawatan->persepsi = "";
        if(isset($request->persepsi1)) {
            $asesmen_keperawatan->persepsi .= "1-";
        }
        if(isset($request->persepsi2)) {
            $asesmen_keperawatan->persepsi .= "2-";
        }
        if(isset($request->persepsi3)) {
            $asesmen_keperawatan->persepsi .= "3-";
        }
        if(isset($request->persepsi4)) {
            $asesmen_keperawatan->persepsi .= "4-";
        }
        if(isset($request->persepsi5)) {
            $asesmen_keperawatan->persepsi .= "5-";
        }
        if(isset($request->persepsi6)) {
            $asesmen_keperawatan->persepsi .= "6-";
        }
        if(isset($request->persepsi7)) {
            $asesmen_keperawatan->persepsi .= "7-";
        }
        $asesmen_keperawatan->persepsi = substr($asesmen_keperawatan->persepsi, 0, -1);

        $asesmen_keperawatan->motorik = "";
        if(isset($request->motorik1)) {
            $asesmen_keperawatan->motorik .= "1-";
        }
        if(isset($request->motorik2)) {
            $asesmen_keperawatan->motorik .= "2-";
        }
        if(isset($request->motorik3)) {
            $asesmen_keperawatan->motorik .= "3-";
        }
        if(isset($request->motorik4)) {
            $asesmen_keperawatan->motorik .= "4-";
        }
        if(isset($request->motorik5)) {
            $asesmen_keperawatan->motorik .= "5-";
        }
        if(isset($request->motorik6)) {
            $asesmen_keperawatan->motorik .= "6-";
        }
        if(isset($request->motorik7)) {
            $asesmen_keperawatan->motorik .= "7-";
        }
        if(isset($request->motorik8)) {
            $asesmen_keperawatan->motorik .= "8-";
        }
        if(isset($request->motorik9)) {
            $asesmen_keperawatan->motorik .= "9-";
        }
        $asesmen_keperawatan->motorik = substr($asesmen_keperawatan->motorik, 0, -1);

        $asesmen_keperawatan->penampilan = "";
        if(isset($request->penampilan1)) {
            $asesmen_keperawatan->penampilan .= "1-";
        }
        if(isset($request->penampilan2)) {
            $asesmen_keperawatan->penampilan .= "2-";
        }
        if(isset($request->penampilan3)) {
            $asesmen_keperawatan->penampilan .= "3-";
        }
        if(isset($request->penampilan4)) {
            $asesmen_keperawatan->penampilan .= "4-";
        }
        $asesmen_keperawatan->penampilan = substr($asesmen_keperawatan->penampilan, 0, -1);


        $asesmen_keperawatan->pikir = "";
        if(isset($request->pikir1)) {
            $asesmen_keperawatan->pikir .= "1-";
        }
        if(isset($request->pikir2)) {
            $asesmen_keperawatan->pikir .= "2-";
        }
        if(isset($request->pikir3)) {
            $asesmen_keperawatan->pikir .= "3-";
        }
        if(isset($request->pikir4)) {
            $asesmen_keperawatan->pikir .= "4-";
        }
        if(isset($request->pikir5)) {
            $asesmen_keperawatan->pikir .= "5-";
        }
        if(isset($request->pikir6)) {
            $asesmen_keperawatan->pikir .= "6-";
        }
        if(isset($request->pikir7)) {
            $asesmen_keperawatan->pikir .= "7-";
        }
        if(isset($request->pikir8)) {
            $asesmen_keperawatan->pikir .= "8-";
        }
        if(isset($request->pikir9)) {
            $asesmen_keperawatan->pikir .= "9-";
        }
        if(isset($request->pikir10)) {
            $asesmen_keperawatan->pikir .= "10-";
        }
        if(isset($request->pikir11)) {
            $asesmen_keperawatan->pikir .= "11-";
        }
        if(isset($request->pikir12)) {
            $asesmen_keperawatan->pikir .= "12-";
        }
        if(isset($request->pikir13)) {
            $asesmen_keperawatan->pikir .= "13-";
        }
        if(isset($request->pikir14)) {
            $asesmen_keperawatan->pikir .= "14-";
        }
        if(isset($request->pikir15)) {
            $asesmen_keperawatan->pikir .= "15-";
        }
        $asesmen_keperawatan->pikir = substr($asesmen_keperawatan->pikir, 0, -1);

        $asesmen_keperawatan->perasaan = "";
        if(isset($request->perasaan1)) {
            $asesmen_keperawatan->perasaan .= "1-";
        }
        if(isset($request->perasaan2)) {
            $asesmen_keperawatan->perasaan .= "2-";
        }
        if(isset($request->perasaan3)) {
            $asesmen_keperawatan->perasaan .= "3-";
        }
        if(isset($request->perasaan4)) {
            $asesmen_keperawatan->perasaan .= "4-";
        }
        if(isset($request->perasaan5)) {
            $asesmen_keperawatan->perasaan .= "5-";
        }
        if(isset($request->perasaan6)) {
            $asesmen_keperawatan->perasaan .= "6-";
        }
        if(isset($request->perasaan7)) {
            $asesmen_keperawatan->perasaan .= "7-";
        }
        $asesmen_keperawatan->perasaan = substr($asesmen_keperawatan->perasaan, 0, -1);

        $asesmen_keperawatan->status_fungsional = $request->status_fungsional;

        if(isset($request->perlu_bantuan)) {
            $asesmen_keperawatan->perlu_bantuan = $request->perlu_bantuan;
        }
        $asesmen_keperawatan->dilaporkan_ke = $request->dilaporkan_ke;
        $asesmen_keperawatan->waktu_laporan = $request->waktu_laporan;

        $asesmen_keperawatan->status_fungsional = $request->status_fungsional;
        $asesmen_keperawatan->waktu_laporan = $request->waktu_laporan;
        // $asesmen_keperawatan->save();


        //return redirect('index');
        // FISIK GIZI////////
        // FISIK GIZI////////
        // FISIK GIZI////////
        // FISIK GIZI////////
        // $fisik_gizi = new RJFisikGizi;
        // $asesmen_keperawatan->id_regis = $id_pasien;
        $asesmen_keperawatan->td = $request->td;
        $asesmen_keperawatan->tb = $request->tb;
        $asesmen_keperawatan->nadi = $request->nadi;
        $asesmen_keperawatan->bb = $request->bb;
        $asesmen_keperawatan->pernafasan = $request->pernafasan;
        $asesmen_keperawatan->golongan_darah = $request->golongan_darah;
        $asesmen_keperawatan->suhu = $request->suhu;
        $asesmen_keperawatan->skor_must = $request->must_1 + $request->must_2;
        $asesmen_keperawatan->must_1 = $request->must_1;
        if(isset($request->must_1_input_bb_berkurang)) {
            $asesmen_keperawatan->bb_berkurang = $request->must_1_input_bb_berkurang;
            $asesmen_keperawatan->skor_must += $request->must_1_input_bb_berkurang;
        }
        $asesmen_keperawatan->must_2 = $request->must_2;
        /////
        if($request->must_3 == 1) {
            $asesmen_keperawatan->must_3 = 1;
            $dk = "";
            if(isset($diagnosis_khusus_1)) {
                $dk .= "DM, ";
            }
            if(isset($diagnosis_khusus_2)) {
                $dk .= "Kemoterapi, ";
            }
            if(isset($diagnosis_khusus_3)) {
                $dk .= "Hemodialisa, ";
            }
            if(isset($diagnosis_khusus_4)) {
                $dk .= "Geriatri, ";
            }
            if(isset($diagnosis_khusus_5)) {
                $dk .= "Immunitas Menurun, ";
            }
            if(isset($diagnosis_khusus_6)) {
                $dk .= "Lain-lain, ";
            }
            $dk = substr($dk, 0, -2);
            $asesmen_keperawatan->diagnosis_khusus = $dk;
        }
        else {
            $asesmen_keperawatan->must_3 = 0;
        }
        $asesmen_keperawatan->sk_1 = $request->sk_1;
        $asesmen_keperawatan->sk_2 = $request->sk_2;
        $asesmen_keperawatan->sk_3 = $request->sk_3;
        $asesmen_keperawatan->sk_4 = $request->sk_4;
        $asesmen_keperawatan->skor_sk = $request->sk_1 + $request->sk_2 + $request->sk_3 + $request->sk_4;

        $asesmen_keperawatan->penyakit_malnutrisi = "";
        if(isset($request->penyakit_malnutrisi_1)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "1-";
        }
        if(isset($request->penyakit_malnutrisi_2)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "2-";
        }
        if(isset($request->penyakit_malnutrisi_3)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "3-";
        }
        if(isset($request->penyakit_malnutrisi_4)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "4-";
        }
        if(isset($request->penyakit_malnutrisi_5)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "5-";
        }
        if(isset($request->penyakit_malnutrisi_6)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "6-";
        }
        if(isset($request->penyakit_malnutrisi_7)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "7-";
        }
        if(isset($request->penyakit_malnutrisi_8)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "8-";
        }
        if(isset($request->penyakit_malnutrisi_9)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "9-";
        }
        if(isset($request->penyakit_malnutrisi_10)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "10-";
        }
        if(isset($request->penyakit_malnutrisi_11)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "11-";
        }
        if(isset($request->penyakit_malnutrisi_12)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "12-";
        }
        if(isset($request->penyakit_malnutrisi_13)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "13-";
        }
        if(isset($request->penyakit_malnutrisi_14)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "14-";
        }
        if(isset($request->penyakit_malnutrisi_15)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "15-";
        }
        if(isset($request->penyakit_malnutrisi_16)) {
            $asesmen_keperawatan->penyakit_malnutrisi .= "16-";
        }
        if(!empty($asesmen_keperawatan->penyakit_malnutrisi)) {
            $asesmen_keperawatan->penyakit_malnutrisi = substr($asesmen_keperawatan->penyakit_malnutrisi, 0, -1);
        }

        $asesmen_keperawatan->pemberitahuan_fg = $request->pemberitahuan_fg;
        if(!empty($request->waktu_pemberitahuan)) {
            $asesmen_keperawatan->waktu_pemberitahuan = $request->waktu_pemberitahuan;
        }

        //return redirect('index');
        // PENILAIAN TINGKAT NYERI  //////////////
        // PENILAIAN TINGKAT NYERI  //////////////
        // PENILAIAN TINGKAT NYERI  //////////////
        // PENILAIAN TINGKAT NYERI  //////////////

        // $nyeri = new RJNyeri;
        // $nyeri->id_regis = $id_pasien;
        // $nyeri->jenis_form = 'awal';
        $asesmen_keperawatan->tingkat = $request->tingkat;
        $asesmen_keperawatan->skala = $request->skala;
        $asesmen_keperawatan->lokasi = $request->lokasi;
        $asesmen_keperawatan->lokasi = $request->lokasi;
        $asesmen_keperawatan->durasi = $request->durasi;
        $asesmen_keperawatan->frekuensi = $request->frekuensi;
        $hilang = "";
        if(isset($request->hilang1)) {
            $hilang .= "1-";
        }
        if(isset($request->hilang2)) {
            $hilang .= "2-";
        }
        if(isset($request->hilang3)) {
            $hilang .= "3-";
        }
        if(isset($request->hilang4)) {
            $hilang .= "4-";
        }
        if(isset($request->hilang5)) {
            $hilang .= "5-";
            $asesmen_keperawatan->nyeri_hilang_input_text = $request->nyeri_hilang_input_text;
        }
        if(strlen($hilang) > 0) {
            $hilang = substr($hilang, 0, -1);
        }
        $asesmen_keperawatan->hilang = $hilang;
        $asesmen_keperawatan->pemberitahuan_ny = $request->pemberitahuan_ny;
        if($request->pemberitahuan_ny == '1') {
            $asesmen_keperawatan->waktu_pemberitahuan_ny = $request->waktu_pemberitahuan_ny;
        }
        // $nyeri->save();


        // HUMPTY DUMPTY /////////////
        // HUMPTY DUMPTY /////////////
        // HUMPTY DUMPTY /////////////
        // HUMPTY DUMPTY /////////////

        $asesmen_keperawatan->jenis_resiko_jatuh = $request->jenis_resiko_jatuh;
        if($request->jenis_resiko_jatuh == 'humpty_dumpty')
        {
            // $asesmen_keperawatan = new HumptyDumpty;
            // $asesmen_keperawatan->id_regis = $id_pasien;
            // $asesmen_keperawatan->jenis_form = 'awal';
            $asesmen_keperawatan->usia = $request->usia;
            $asesmen_keperawatan->diagnosis_hd = $request->diagnosis_hd;
            $asesmen_keperawatan->gangguan_kognitif = $request->gangguan_kognitif;
            $asesmen_keperawatan->faktor_lingkungan = $request->faktor_lingkungan;
            $asesmen_keperawatan->waktu_respon_obat = $request->waktu_respon_obat;
            $asesmen_keperawatan->penggunaan_obat = $request->penggunaan_obat;
            // $asesmen_keperawatan->save();
            
        }
        elseif($request->jenis_resiko_jatuh == 'morse')
        {
            $asesmen_keperawatan->riwayat_jatuh_mrs = $request->riwayat_jatuh_mrs;
            $asesmen_keperawatan->diagnosis_sekunder = $request->diagnosis_sekunder;
            $asesmen_keperawatan->alat_bantu = $request->alat_bantu;
            $asesmen_keperawatan->terpasang_infus = $request->terpasang_infus;
            $asesmen_keperawatan->gaya_berjalan = $request->gaya_berjalan;
            $asesmen_keperawatan->status_mental_mrs = $request->status_mental_mrs;
        }
        elseif($request->jenis_resiko_jatuh == 'edmunson')
        {
            $asesmen_keperawatan->status_mental_edm = $request->status_mental_edm;
            $asesmen_keperawatan->diagnosis_edm = $request->diagnosis_edm;
            $asesmen_keperawatan->eliminasi = $request->eliminasi;
            $asesmen_keperawatan->pengobatan = $request->pengobatan;
            $asesmen_keperawatan->diagnosa = $request->diagnosa;
            $asesmen_keperawatan->ambulasi = $request->ambulasi;
            $asesmen_keperawatan->nutrisi = $request->nutrisi;
            $asesmen_keperawatan->riwayat_jatuh_edm = $request->riwayat_jatuh_edm;
        }

        
        // $diagnosa = new RJDiagnosaKeperawatan;
        // $diagnosa->id_regis = $id_pasien;
        $umum = "";
        if(isset($request->umum_1)) {
            $umum .= "1-";
        }
        if(isset($request->umum_2)) {
            $umum .= "2-";
        }
        if(isset($request->umum_3)) {
            $umum .= "3-";
        }
        if(isset($request->umum_4)) {
            $umum .= "4-";
        }
        if(isset($request->umum_5)) {
            $umum .= "5-";
        }
        if(isset($request->umum_6)) {
            $umum .= "6-";
        }
        if(isset($request->umum_7)) {
            $umum .= "7-";
        }
        if(isset($request->umum_8)) {
            $umum .= "8-";
        }
        if(isset($request->umum_9)) {
            $umum .= "9-";
        }
        if(isset($request->umum_10)) {
            $umum .= "10-";
        }
        if(isset($request->umum_11)) {
            $umum .= "11-";
        }
        if(isset($request->umum_12)) {
            $umum .= "12-";
        }
        if(isset($request->umum_13)) {
            $umum .= "13-";
        }
        if(isset($request->umum_14)) {
            $umum .= "14-";
        }
        if(strlen($umum) >= 0) {
            $umum = substr($umum, 0, -1);
        }
        $asesmen_keperawatan->umum = $umum;

        if(!empty($request->umum_lainnya)) {
            $asesmen_keperawatan->umum_lainnya = $request->umum_lainnya;
        }

        $jiwa = "";
        if(isset($request->jiwa_1)) {
            $jiwa .= "1-";
        }
        if(isset($request->jiwa_2)) {
            $jiwa .= "2-";
        }
        if(isset($request->jiwa_3)) {
            $jiwa .= "3-";
        }
        if(isset($request->jiwa_4)) {
            $jiwa .= "4-";
        }
        if(isset($request->jiwa_5)) {
            $jiwa .= "5-";
        }
        if(isset($request->jiwa_6)) {
            $jiwa .= "6-";
        }
        if(isset($request->jiwa_7)) {
            $jiwa .= "7-";
        }
        if(isset($request->jiwa_8)) {
            $jiwa .= "8-";
        }
        if(isset($request->jiwa_9)) {
            $jiwa .= "9-";
        }
        if(isset($request->jiwa_10)) {
            $jiwa .= "10-";
        }
        if(isset($request->jiwa_11)) {
            $jiwa .= "11-";
        }
        if(isset($request->jiwa_12)) {
            $jiwa .= "12-";
        }
        if(!empty($jiwa)) {
            $jiwa = substr($jiwa, 0, -1);
        }
        $asesmen_keperawatan->jiwa = $jiwa;

        if(!empty($request->jiwa_lainnya)) {
            $asesmen_keperawatan->jiwa_lainnya = $request->jiwa_lainnya;
        }

        $asesmen_keperawatan->obat_parental = $request->obat_parental;
        $asesmen_keperawatan->ekg = $request->ekg;

        // EVALUASI TINDAKAN /////////
        $asesmen_keperawatan->implementasi = $request->implementasi;
        $asesmen_keperawatan->evaluasi = $request->evaluasi;
        $asesmen_keperawatan->save();

        return redirect('rj_asesmen_awal_perawat_read');
    }

    function yesno($stats){
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

        //panss ec
    
        //$this->['totalp'] =  $this->data['pe1'] +  $this->data['pe5'] +  $this->data['pe5'] +  $this->data['pe5'] + $this->data['pe5'];
        //other

        if($this->data['gaduh_gelisah']=='1')
        {
            $this->data['gaduh_gelisah'] = 'Tidak ada - definisi tidak dipenuhi';
            $this->data['pe1'] = 1;
        }
        elseif($this->data['gaduh_gelisah']=='2')
        {
            $this->data['gaduh_gelisah'] = 'Minimal – patologis diragukan';
            $this->data['pe1'] = 2;
        }
        elseif($this->data['gaduh_gelisah']=='3')
        {
            $this->data['gaduh_gelisah'] = 'Ringan – sedikit agitatif, waspada berlebihan, atau sedikit mudah terangsang selama wawancara, tanpa episode yang jelas dari gaduh gelisah atau labilitas alam perasaan yang mecolok. Pembicaraan mungkin sedikit mendesah';
            $this->data['pe1'] = 3;
        }
        elseif($this->data['gaduh_gelisah']=='4')
        {
            $this->data['gaduh_gelisah'] = 'Sedang – agitasi atau mudah terangsang yang jelas, ledakan-ledakan episodik';
            $this->data['pe1'] = 4;
        }
        elseif($this->data['gaduh_gelisah']=='5')
        {
            $this->data['gaduh_gelisah'] = 'Agak berat – hiperaktivitas yang bermakna, sering terjadi ledakan-leadakan atau aktivitas mototrik, sulit untuk tetap duduk';
            $this->data['pe1'] = 5;
        }
        elseif($this->data['gaduh_gelisah']=='6')
        {
            $this->data['gaduh_gelisah'] = 'Berat – gaduh gelisah yang mencolok mempengaruhi fungsi sehari-hari seperti makan  dan tidur';
            $this->data['pe1'] = 6;
        }
        else {
            $this->data['gaduh_gelisah'] = 'Sangat berat – gaduh gelisah yang mencolok, mempengaruhi kegiatan makan dan tidur, serta jelas tidak memungkinkan interaksi interpersonal. Percepatan dan pembicaraan dan aktivitas motorik dapat menimbulkan inkoherensi dan kelelahan';
            $this->data['pe1'] = 7;
        }

        if($this->data['ketidakoperatifan']=='1')
        {
            $this->data['ketidakoperatifan'] = 'Tidak ada - definisi tidak dipenuhi';
            $this->data['pe2'] = 1;
        }
        elseif($this->data['ketidakoperatifan']=='2')
        {
            $this->data['ketidakoperatifan'] = 'Minimal – patologis diragukan';
            $this->data['pe2'] = 2;
        }
        elseif($this->data['ketidakoperatifan']=='3')
        {
            $this->data['ketidakoperatifan'] = 'Ringan – patuh tapi disertai sikap marah tidak sabar atau sarkasme, mungkin ada penolakan yang tidak mengganggu terhadap penyelidikan yang sensitif selama wawancara';
            $this->data['pe2'] = 3;
        }
        elseif($this->data['ketidakoperatifan']=='4')
        {
            $this->data['ketidakoperatifan'] = 'Sedang – kadang-kadang terdapat penolakan langsung untuk patuh, memproyeksikan hostilitas, defensif atau bersifat negatif tetapi biasanya masih dapat diatasi';
            $this->data['pe2'] = 4;
        }
        elseif($this->data['ketidakoperatifan']=='5')
        {
            $this->data['ketidakoperatifan'] = 'Agak berat – seringkali tidak patuh, jelas defensif atau iritabilitas terhadap pewawancara dan mungkin tidak bersedia menghadapi banyak pertanyaan';
            $this->data['pe2'] = 5;
        }
        elseif($this->data['ketidakoperatifan']=='6')
        {
            $this->data['ketidakoperatifan'] = 'Berat – sangat tidak kooperatif, negativistik dan suka membangkang. Menolak untuk patuh, tidak mau memulai atau mengikuti wawancara sepenuhnya';
            $this->data['pe2'] = 6;
        }
        else {
            $this->data['ketidakoperatifan'] = 'Sangat berat – resistensi aktif, menolak untuk ikut dalam aktivitas sosial apapun, mengurus kebersihan diri, bercakap-cakap dengan keluarga atau staf dan bahkan untuk berpartisipasi dalam wawancara singkat';
            $this->data['pe2'] = 7;
        }

        if($this->data['permusuhan']=='1')
        {
            $this->data['permusuhan'] = 'Tidak ada - definisi tidak dipenuhi';
            $this->data['pe3'] = 1;
        }
        elseif($this->data['permusuhan']=='2')
        {
            $this->data['permusuhan'] = 'Minimal – patologis diragukan';
            $this->data['pe3'] = 2;
        }
        elseif($this->data['permusuhan']=='3')
        {
            $this->data['permusuhan'] = 'Ringan – melampiaskan kemarahan secara tidak langsung atau ditahan';
            $this->data['pe3'] = 3;
        }
        elseif($this->data['permusuhan']=='4')
        {
            $this->data['permusuhan'] = 'Sedang – sikap bermusuhan yang nyata';
            $this->data['pe3'] = 4;
        }
        elseif($this->data['permusuhan']=='5')
        {
            $this->data['permusuhan'] = 'Agak berat – pasien sangat mudah marah dan kadang-kadang memaki dengan kata-kata kasar atau mengancam';
            $this->data['pe3'] = 5;
        }
        elseif($this->data['permusuhan']=='6')
        {
            $this->data['permusuhan'] = 'Berat – tidak kooperatif dan mencaci maki dengan kasar atau mengancam, dapat beringas dan merusak tetapi tidak menyerang orang lain secara fisik';
            $this->data['pe3'] = 6;
        }
        else {
            $this->data['permusuhan'] = 'Sangat berat – kemarahan yang hebat berakibat sangat tidak kooperatif, menghalangi interaksi, atau secara episodik melakukan penyerangan fisik terhadap orang lain';
            $this->data['pe3'] = 7;
        }

        if($this->data['pengendalian_impuls']=='1')
        {
            $this->data['pengendalian_impuls'] = 'Tidak ada - definisi tidak dipenuhi';
            $this->data['pe4'] = 1;
        }
        elseif($this->data['pengendalian_impuls']=='2')
        {
            $this->data['pengendalian_impuls'] = 'Minimal – patologis diragukan';
            $this->data['pe4'] = 2;
        }
        elseif($this->data['pengendalian_impuls']=='3')
        {
            $this->data['pengendalian_impuls'] = 'Ringan – cenderung mudah marah dan frustasi bila menghadapi stres atau pemuasannya ditolak tetapi jarang bertindak impulsif';
            $this->data['pe4'] = 3;
        }
        elseif($this->data['pengendalian_impuls']=='4')
        {
            $this->data['pengendalian_impuls'] = 'Sedang – dengan provokasi yang minimal, pasien menjadi marah dan mencaci maki. Mungkin sekali-kali mengancam, merusak atau terdapat satu atau dua episode yang melibatkan konfrontasi fisik atau perselisihan ringan';
            $this->data['pe4'] = 4;
        }
        elseif($this->data['pengendalian_impuls']=='5')
        {
            $this->data['pengendalian_impuls'] = 'Agak berat – memperlihatkan episode impulsif yang berulang, termasuk mencaci maki, merusak harta benda atau ancaman fisik. Mungkin ada satu atau dua episode yang melibatkan serangn serius';
            $this->data['pe4'] = 5;
        }
        elseif($this->data['pengendalian_impuls']=='6')
        {
            $this->data['pengendalian_impuls'] = 'Berat – agresif secara impulsif, mengancam, menuntut dan merusak, tanpa pertimbangan terhadap konsekuensinya. Menunjukkan perilaku menyerang';
            $this->data['pe4'] = 6;
        }
        else {
            $this->data['pengendalian_impuls'] = 'Sangat berat – memperlihatkan serangan kebrutalan dan berbahaya';
            $this->data['pe4'] = 7;
        }

        if($this->data['ketegangan']=='1')
        {
            $this->data['ketegangan'] = 'Tidak ada - definisi tidak dipenuhi';
            $this->data['pe5'] = 1;
        }
        elseif($this->data['ketegangan']=='2')
        {
            $this->data['ketegangan'] = 'Minimal – patologis diragukan';
            $this->data['pe5'] = 2;
        }
        elseif($this->data['ketegangan']=='3')
        {
            $this->data['ketegangan'] = 'Ringan – postur dan gerakan-gerakan menunjukkan kekhawatiran ringan, ketidaktenangan yang sekali-kali, perubahan posisi, atau tremor tangan yang halus dan cepat';
            $this->data['pe5'] = 3;
        }
        elseif($this->data['ketegangan']=='4')
        {
            $this->data['ketegangan'] = 'Sedang – nyata-nyata gelisah seperti perilaku tidak tenang, tremor tangan yang nyata, keringat berlebihan, atau manerisme karena gugup';
            $this->data['pe5'] = 4;
        }
        elseif($this->data['ketegangan']=='5')
        {
            $this->data['ketegangan'] = 'Agak berat – ketegangan yang berat, manifestasi seperti gemetar karena gugup, keringat sangat berlebihan dan ketidaktenangan, perilaku selama wawancara tidak terpengaruh secara bermakna';
            $this->data['pe5'] = 5;
        }
        elseif($this->data['ketegangan']=='6')
        {
            $this->data['ketegangan'] = 'Berat – Ketegangan berat, taraf interaksi terganggu. Misalnya terus-menerus bergerak, tidak dapat tetap duduk, hiperventilasi';
            $this->data['pe5'] = 6;
        }
        else {
            $this->data['ketegangan'] = 'Sangat berat – ketegangan sangat mencolok, tanda panik atau percepatan gerakan motorik kaar, ketidak mampuan tetap duduk > 1 menit yang menyebabkan percakapan tidak mungkin diteruskan';
            $this->data['pe5'] = 7;
        }

        if($this->data['tingkat']=='1')
        {
            $this->data['tingkat'] = 'Tidak ada nyeri';
        }
        elseif($this->data['tingkat']=='2')
        {
            $this->data['tingkat'] = 'Nyeri Kronis';
        } 
        else {
            $this->data['tingkat'] = 'Nyeri Akut';
        }

        if($this->data['hubungan_keluarga']=='1')
        {
            $this->data['hubungan_keluarga'] = 'Baik';
        }
        else {
            $this->data['hubungan_keluarga'] = 'Tidak Baik';
        }

        if($this->data['must_1']=='1')
        {
            $this->data['must_1'] = 'Tidak ada penurunan berat badan';
        }
        elseif($this->data['must_1']=='2')
        {
            $this->data['must_1'] = 'Tidak yakin/ tidak tahu/ terasa baju longgar';
        } 
        else {
            $this->data['must_1'] = 'Ya';
        }

        $this->data['must_2'] = $this->yesno($this->data['must_2']);
        $this->data['sk_1'] = $this->yesno($this->data['sk_1']);
        $this->data['sk_2'] = $this->yesno($this->data['sk_2']);
        $this->data['sk_3'] = $this->yesno($this->data['sk_3']);
        $this->data['sk_4'] = $this->yesno($this->data['sk_4']);
        $this->data['pemberitahuan_fg'] = $this->yesno($this->data['pemberitahuan_fg']);
        $this->data['pemberitahuan_ny'] = $this->yesno($this->data['pemberitahuan_ny']);
        $this->data['riwayat_napza'] = $this->yesno($this->data['riwayat_napza']);
        $this->data['riwayat_operasi'] = $this->yesno($this->data['riwayat_operasi']);
        $this->data['riwayat_tranfusi'] = $this->yesno($this->data['riwayat_tranfusi']);
        $this->data['reaksi_tranfusi'] = $this->yesno($this->data['reaksi_tranfusi']);

        if($this->data['tindak_lanjut']=='1')
        {
            $this->data['tindak_lanjut'] = 'Pulang';
        }
        elseif($this->data['tindak_lanjut']=='2')
        {
            $this->data['tindak_lanjut'] = 'Dirawat';
        } 
        elseif($this->data['tindak_lanjut']=='3')
        {
            $this->data['tindak_lanjut'] = 'Menolak dirawat';
        } 
        else {
            $this->data['tindak_lanjut'] = 'Dirujuk';
        }

        if($this->data['perlu_dikontrol']=='1')
        {
            $this->data['perlu_dikontrol'] = 'Perlu Kontrol';
        }
        else {
            $this->data['perlu_dikontrol'] = 'Tidak perlu kontrol';
        }

        if($this->data['alasan_menolak']=='1')
        {
            $this->data['alasan_menolak'] = 'Masalah biaya';
        }
        elseif($this->data['alasan_menolak']=='2')
        {
            $this->data['alasan_menolak'] = 'Masalah lokasi rumah';
        } 
        elseif($this->data['alasan_menolak']=='3')
        {
            $this->data['alasan_menolak'] = 'Kondisi pasien';
        } 
        else {
            $this->data['alasan_menolak'] = 'Lainnya';
        }

        if($this->data['alasan_dirujuk']=='1')
        {
            $this->data['alasan_dirujuk'] = 'Tempat Penuh';
        }
        elseif($this->data['alasan_dirujuk']=='2')
        {
            $this->data['alasan_dirujuk'] = 'Perlu Fasilitas Lebih';
        } 
        else {
            $this->data['alasan_dirujuk'] = 'Permintaan Pasien/Keluarga';
        }

    }

    public function rj_asesmen_pdf()
    {
        $this->get_rj_asesmen_awal_dokter_data();
        $this->get_rj_asesmen_awal_perawat_data();

        $this->convert();
        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_rj_asesmen',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 01.00.RJ JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('rj_asesmen.pdf',\Mpdf\Output\Destination::INLINE);
    }

}