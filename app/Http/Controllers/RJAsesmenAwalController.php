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

class RJAsesmenAwalController extends Controller
{
    public function __construct()
    {
        $this->data['title'] = 'Asesmen Awal Pasien Rawat Jalan';
    }

    public function get_rj_asesmen_awal_perawat()
    {
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
        // $data->save();

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
        $daftar_dokumen->save();


    }
    
    public function post_rj_asesmen_awal_dokter2(Request $request)
    {
        // DATA MEDIS //////////
        // DATA MEDIS //////////
        // DATA MEDIS //////////
        // DATA MEDIS //////////

        $data = new RJDataMedis;
        $data->id_regis = $id_pasien;
        $data->pewawancara = $request->pewawancara;
        $data->keluhan_utama = $request->keluhan_utama;
        if(!empty($request->riwayat_penyakit_sekarang)) {
            $data->riwayat_penyakit_sekarang = $request->riwayat_penyakit_sekarang;
        }
        if(!empty($request->riwayat_penyakit_dahulu)) {
            $data->riwayat_penyakit_dahulu = $request->riwayat_penyakit_dahulu;
        }
        if($request->riwayat_napza == 'true') {
            $data->riwayat_napza = True;
        }
        else {
            $data->riwayat_napza = False;
        }
        if(!empty($request->lama_pemakaian)) {
            $data->lama_pemakaian = $request->lama_pemakaian;
        }
        if(!empty($request->cara_pemakaian)) {
            $data->cara_pemakaian = $request->cara_pemakaian;
        }
        if(!empty($request->latar_belakang_pemakaian)) {
            $data->latar_belakang_pemakaian = $request->latar_belakang_pemakaian;
        }
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
        if(!empty($riwayat)) {
            $riwayat = substr($riwayat, 0, -1);
            $data->riwayat_penyakit_lainnya = $riwayat;
        }
        $data->riwayat_operasi = $request->riwayat_operasi;
        
        if(!empty($request->jenis_operasi)) {
            $data->jenis_operasi = $request->jenis_operasi;
        }
        if(!empty($request->waktu_operasi)) {
            $data->waktu_operasi = $request->waktu_operasi;
        }
        if($request->riwayat_tranfusi == 'true') {
            $data->riwayat_tranfusi = True;
        }
        else {
            $data->riwayat_tranfusi = False;
        }
        if($request->reaksi_tranfusi == 'true') {
            $data->reaksi_tranfusi = True;
        }
        else {
            $data->reaksi_tranfusi = False;
        }
        if(!empty($request->reaksi_timbul)) {
            $data->reaksi_timbul = $request->reaksi_timbul;
        }
        if(!empty($request->riwayat_penyakit_dalam_keluarga)) {
            $data->riwayat_penyakit_dalam_keluarga = $request->riwayat_penyakit_dalam_keluarga;
        }
        if(!empty($request->riwayat_pengobatan)) {
            $data->riwayat_pengobatan = $request->riwayat_pengobatan;
        }
        if(!empty($request->riwayat_alergi)) {
            $data->riwayat_alergi = $request->riwayat_alergi;
        }
        $data->save();


        // OBAT YANG DIMINUM SAAT INI //////////
        // OBAT YANG DIMINUM SAAT INI //////////
        // OBAT YANG DIMINUM SAAT INI //////////
        // OBAT YANG DIMINUM SAAT INI //////////

        $obat = new RJObatSaatIni;
        $obat->id_regis = $id_pasien;
        $obat->nama_obat = $request->nama_obat;
        $obat->dibawa = $request->dibawa;
        $obat->jumlah = $request->jumlah;
        $obat->tidak_dibawa = $request->tidak_dibawa;
        $obat->keterangan = $request->keterangan;
        $obat->save();


        // PEMERIKSAAN FISIK ///////////
        // PEMERIKSAAN FISIK ///////////
        // PEMERIKSAAN FISIK ///////////
        // PEMERIKSAAN FISIK ///////////

        // $pemeriksaan = new RJPemeriksaanFisik;
        // $pemeriksaan->id_regis = $id_pasien;
        $pemeriksaan->kepala = $request->kepala;
        $pemeriksaan->leher = $request->leher;
        $pemeriksaan->dada = $request->dada;
        $pemeriksaan->jantung = $request->jantung;
        $pemeriksaan->paru = $request->paru;
        $pemeriksaan->perut = $request->perut;
        $pemeriksaan->anggota_gerak = $request->anggota_gerak;
        // $pemeriksaan->save();


        // STATUS PSIKIATRI ///////////
        // STATUS PSIKIATRI ///////////
        // STATUS PSIKIATRI ///////////
        // STATUS PSIKIATRI ///////////

        // $status = new RJStatusPsikiatri;
        // $status->id_regis = $id_pasien;
        $status->penampilan = $request->penampilan;
        $status->kesadaran = $request->kesadaran;
        $status->orientasi = $request->orientasi;
        $status->sikap = $request->sikap;
        $status->keterangan = $request->keterangan;
        $status->keterangan = $request->keterangan;
        $status->proses_pikir = $request->proses_pikir;
        $status->bentuk_pikir = $request->bentuk_pikir;
        $status->isi_pikir = $request->isi_pikir;
        $status->mood = $request->mood;
        $status->afek = $request->afek;
        $status->halusinasi = $request->halusinasi;
        $status->ilusi = $request->ilusi;
        $status->konsentrasi = $request->konsentrasi;
        $status->ingat = $request->ingat;
        $status->abstrak = $request->abstrak;
        $status->impuls = $request->impuls;
        $status->nilai = $request->nilai;
        $status->tilikan = $request->tilikan;
        $status->dipercaya = $request->dipercaya;
        $status->save();


        // STATUS NEUROLOGI ////////////
        // STATUS NEUROLOGI ////////////
        // STATUS NEUROLOGI ////////////
        // STATUS NEUROLOGI ////////////

        $status = new RJStatusNeurologi;
        $status->id_regis = $id_pasien;
        $status->meningeal = $request->meningeal;
        $status->nervus = $request->nervus;
        $status->motorik = $request->motorik;
        $status->cerebellum = $request->cerebellum;
        $status->vegetatif = $request->vegetatif;
        $status->save();

        // PEMERIKSAAN PENUNJANG ///////////
        // PEMERIKSAAN PENUNJANG ///////////
        // PEMERIKSAAN PENUNJANG ///////////
        // PEMERIKSAAN PENUNJANG ///////////

        // $pemeriksaan = new RJPemeriksaanPenunjang;
        // $pemeriksaan->id_regis = 1;
        // $pemeriksaan->jenis = $request->jenis;
        // $pemeriksaan->jam_pemeriksaan = $request->jam_pemeriksaan;
        // $pemeriksaan->jam_hasil = $request->jam_hasil;
        // $pemeriksaan->keterangan = $request->keterangan;
        // $pemeriksaan->laboratorium = $request->laboratorium;
        // $pemeriksaan->radiologi = $request->radiologi;
        // $pemeriksaan->ekg = $request->ekg;
        // $pemeriksaan->lainnya = $request->lainnya;
        // $pemeriksaan->save();

        
        // INSTRUMEN PENILAIAN ///////////////////
        // INSTRUMEN PENILAIAN ///////////////////
        // INSTRUMEN PENILAIAN ///////////////////
        // INSTRUMEN PENILAIAN ///////////////////
        $instrumen = new RJInstrumenPenilaian;
        $instrumen->id_regis = $id_pasien;
        $instrumen->gaduh_gelisah = $request->p4;
        $instrumen->ketidakoperatifan = $request->g8;
        $instrumen->permusuhan = $request->p7;
        $instrumen->pengendalian_impuls = $request->g14;
        $instrumen->ketegangan = $request->g4;
        $instrumen->bangsal = $request->bangsal;
        $instrumen->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
        $instrumen->panss_ec = $request->panss_ec;
        $instrumen->gaff = $request->gaff;
        $instrumen->save();


        // DIAGNOSIS TINDAKAN TERAPI /////////////
        // DIAGNOSIS TINDAKAN TERAPI /////////////
        // DIAGNOSIS TINDAKAN TERAPI /////////////
        // DIAGNOSIS TINDAKAN TERAPI /////////////
        $diagnosis = new RJDiagnosisTindakanTerapi;
        $diagnosis->id_regis = $id_pasien;
        $diagnosis->axis1 = $request->axis1;
        $diagnosis->axis2 = $request->axis2;
        $diagnosis->axis3 = $request->axis3;
        $diagnosis->axis4 = $request->axis4;
        $diagnosis->axis5 = $request->axis5;
        $diagnosis->utama = $request->utama;
        $diagnosis->sekunder = $request->sekunder;
        $diagnosis->jam = $request->jam;
        $diagnosis->tindakan_terapi = $request->tindakan_terapi;
        $diagnosis->daftar_masalah = $request->daftar_masalah;
        $diagnosis->save();
        


        // TINDAK LANJUT ///////////////////
        // TINDAK LANJUT ///////////////////
        // TINDAK LANJUT ///////////////////
        // TINDAK LANJUT ///////////////////
        $data = new RJTindakLanjut;
        $data->tindak_lanjut = $request->tindak_lanjut;
        $data->id_regis = $id_pasien;
        if($request->perlu_dikontrol == 'true') {
            $data->perlu_dikontrol = True;
        }
        else {
            $data->perlu_dikontrol = False;
        }
        $data->tanggal_kontrol = $request->tanggal_kontrol;
        $data->ruangan = $request->ruangan;
        $data->indikasi_rawat_inap = $request->indikasi_rawat_inap;
        if($request->alasan_menolak == "Lainnya"){
            $data->alasan_menolak = $request->alasan_lainnya;
        }
        else {
            $data->alasan_menolak = $request->alasan_menolak;
        }
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
        $kesadaran = substr($kesadaran, 0, -1);
        $data->kesadaran = $kesadaran;
        $data->kesadaran_lainnya = $request->kesadaran_lainnya;
        $data->tensi = $request->tensi;
        $data->nadi = $request->nadi;
        $data->pernafasan = $request->pernafasan;
        $data->suhu = $request->suhu;

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->rj_asesmen_awal_dokter = True;
        $daftar_dokumen->save();

        $data->save();

        return redirect('index');
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
        $daftar_dokumen->save();


        return redirect('rj_asesmen_awal_perawat_read');
    }


    public function get_rj_asesmen_awal_dokter_read()
    {
        $pasien = RJDataMedis::where('id', 1)->first();
        
        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['pewawancara'] = $pasien->pewawancara;
        $this->data['keluhan_utama'] = $pasien->keluhan_utama;
        
        if(!is_null($pasien->riwayat_penyakit_sekarang)) {
            $this->data['riwayat_penyakit_sekarang'] = $pasien->riwayat_penyakit_sekarang;
        }

        if(!is_null($pasien->riwayat_penyakit_dahulu)) {
            $this->data['riwayat_penyakit_dahulu'] = $pasien->riwayat_penyakit_dahulu;
        }

        $this->data['riwayat_napza'] = $pasien->riwayat_napza;
        
        if(!is_null($pasien->lama_pemakaian)) {
            $this->data['lama_pemakaian'] = $pasien->lama_pemakaian;
        }

        if(!is_null($pasien->cara_pemakaian)) {
            $this->data['cara_pemakaian'] = $pasien->cara_pemakaian;
        }

        if(!is_null($pasien->latar_belakang_pemakaian)) {
            $this->data['latar_belakang_pemakaian'] = $pasien->latar_belakang_pemakaian;
        }

        $this->data['riwayat_pendidikan'] = $pasien->riwayat_pekerjaan;
        $this->data['riwayat_pekerjaan'] = $pasien->riwayat_pekerjaan;
        $this->data['riwayat_perkawinan'] = $pasien->riwayat_perkawinan;
        
        if(!is_null($pasien->riwayat)) {
            $this->data['riwayat'] = $pasien->riwayat;
            $this->data['riwayat_penyakit_lainnya'] = $pasien->riwayat_penyakit_lainnya;
        }

        $this->data['riwayat_operasi'] = $pasien->riwayat_operasi;
        
        if(!is_null($pasien->jenis_operasi)) {
            $this->data['jenis_operasi'] = $pasien->jenis_operasi;
        }    

        if(!is_null($pasien->waktu_operasi)) {
            $this->data['waktu_operasi'] = $pasien->waktu_operasi;
        }  

        $this->data['riwayat_tranfusi'] = $pasien->riwayat_tranfusi;
        $this->data['reaksi_tranfusi'] = $pasien->reaksi_tranfusi;

        if(!is_null($pasien->reaksi_timbul)) {
            $this->data['reaksi_timbul'] = $pasien->reaksi_timbul;
        }
        if(!is_null($pasien->waktu_operasi)) {
            $this->data['riwayat_penyakit_dalam_keluarga'] = $pasien->riwayat_penyakit_dalam_keluarga;
        }
        if(!is_null($pasien->waktu_operasi)) {
            $this->data['riwayat_pengobatan'] = $pasien->riwayat_pengobatan;
        }
        if(!is_null($pasien->riwayat_alergi)) {
            $this->data['riwayat_alergi'] = $pasien->riwayat_alergi;
        }

        // OBAT YANG DIMINUM SAAT INI //////////
        // OBAT YANG DIMINUM SAAT INI //////////
        // OBAT YANG DIMINUM SAAT INI //////////
        // OBAT YANG DIMINUM SAAT INI //////////

        $obat = RJObatSaatIni::where('id', 1)->first();
        
        $this->data['id_regis'] = $obat->id_regis;

        $this->data['nama_obat'] = $obat->nama_obat;
        $this->data['dibawa'] = $obat->dibawa;
        $this->data['jumlah'] = $obat->jumlah;
        $this->data['tidak_dibawa'] = $obat->tidak_dibawa;
        $this->data['keterangan'] = $obat->keterangan;

        // PEMERIKSAAN FISIK ///////////
        // PEMERIKSAAN FISIK ///////////
        // PEMERIKSAAN FISIK ///////////
        // PEMERIKSAAN FISIK ///////////

        $pemeriksaan = RJPemeriksaanFisik::where('id', 1)->first();
        
        $this->data['id_regis'] = $pemeriksaan->id_regis;
        $this->data['kepala'] = $pemeriksaan->kepala;
        $this->data['leher'] = $pemeriksaan->leher;
        $this->data['dada'] = $pemeriksaan->dada;
        $this->data['jantung'] = $pemeriksaan->jantung;
        $this->data['paru'] = $pemeriksaan->paru;
        $this->data['perut'] = $pemeriksaan->perut;
        $this->data['anggota_gerak'] = $pemeriksaan->anggota_gerak;

        // STATUS PSIKIATRI ///////////
        // STATUS PSIKIATRI ///////////
        // STATUS PSIKIATRI ///////////
        // STATUS PSIKIATRI ///////////

        $status = RJStatusPsikiatri::where('id', 1)->first();
        
        $this->data['id_regis'] = $status->id_regis;
        $this->data['penampilan'] = $status->penampilan;
        $this->data['kesadaran'] = $status->kesadaran;
        $this->data['orientasi'] = $status->orientasi;
        $this->data['sikap'] = $status->sikap;
        $this->data['keterangan'] = $status->keterangan;
        $this->data['proses_pikir'] = $status->proses_pikir;
        $this->data['bentuk_pikir'] = $status->bentuk_pikir;
        $this->data['isi_pikir'] = $status->isi_pikir;
        $this->data['mood'] = $status->mood;
        $this->data['afek'] = $status->afek;
        $this->data['halusinasi'] = $status->halusinasi;
        $this->data['ilusi'] = $status->ilusi;
        $this->data['konsentrasi'] = $status->konsentrasi;
        $this->data['ingat'] = $status->ingat;
        $this->data['abstrak'] = $status->abstrak;
        $this->data['impuls'] = $status->impuls;
        $this->data['nilai'] = $status->nilai;
        $this->data['tilikan'] = $status->tilikan;
        $this->data['dipercaya'] = $status->dipercaya;

        // STATUS NEUROLOGI ////////////
        // STATUS NEUROLOGI ////////////
        // STATUS NEUROLOGI ////////////
        // STATUS NEUROLOGI ////////////

        $neuro = RJStatusNeurologi::where('id', 1)->first();
        
        $this->data['id_regis'] = $neuro->id_regis;
        $this->data['meningeal'] = $neuro->meningeal;
        $this->data['nervus'] = $neuro->nervus;
        $this->data['motorik'] = $neuro->motorik;
        $this->data['cerebellum'] = $neuro->cerebellum;
        $this->data['vegetatif'] = $neuro->vegetatif;

        // PEMERIKSAAN PENUNJANG ///////////
        // PEMERIKSAAN PENUNJANG ///////////
        // PEMERIKSAAN PENUNJANG ///////////
        // PEMERIKSAAN PENUNJANG ///////////

        // $pemeriksaan = new RJPemeriksaanPenunjang;
        // $pemeriksaan->id_regis = 1;
        // $pemeriksaan->jenis = $request->jenis;
        // $pemeriksaan->jam_pemeriksaan = $request->jam_pemeriksaan;
        // $pemeriksaan->jam_hasil = $request->jam_hasil;
        // $pemeriksaan->keterangan = $request->keterangan;
        // $pemeriksaan->laboratorium = $request->laboratorium;
        // $pemeriksaan->radiologi = $request->radiologi;
        // $pemeriksaan->ekg = $request->ekg;
        // $pemeriksaan->lainnya = $request->lainnya;
        // $pemeriksaan->save();

        
        // INSTRUMEN PENILAIAN ///////////////////
        // INSTRUMEN PENILAIAN ///////////////////
        // INSTRUMEN PENILAIAN ///////////////////
        // INSTRUMEN PENILAIAN ///////////////////
        $instrumen = RJInstrumenPenilaian::where('id', 1)->first();
        
        $this->data['id_regis'] = $instrumen->id_regis;
        $this->data['gaduh_gelisah'] = $instrumen->gaduh_gelisah;
        $this->data['ketidakoperatifan'] = $instrumen->ketidakoperatifan;
        $this->data['permusuhan'] = $instrumen->permusuhan;
        $this->data['pengendalian_impuls'] = $instrumen->pengendalian_impuls;
        $this->data['ketegangan'] = $instrumen->ketegangan;
        $this->data['bangsal'] = $instrumen->bangsal;
        $this->data['tanggal_pemeriksaan'] = $instrumen->tanggal_pemeriksaan;
        $this->data['panss_ec'] = $instrumen->panss_ec;
        $this->data['gaff'] = $instrumen->gaff;

        // DIAGNOSIS TINDAKAN TERAPI /////////////
        // DIAGNOSIS TINDAKAN TERAPI /////////////
        // DIAGNOSIS TINDAKAN TERAPI /////////////
        // DIAGNOSIS TINDAKAN TERAPI /////////////

        $diagnosis = RJDiagnosisTindakanTerapi::where('id', 1)->first();
        
        $this->data['id_regis'] = $diagnosis->id_regis;
        $this->data['axis1'] = $diagnosis->axis1;
        $this->data['axis2'] = $diagnosis->axis2;
        $this->data['axis3'] = $diagnosis->axis3;
        $this->data['axis4'] = $diagnosis->axis4;
        $this->data['axis5'] = $diagnosis->axis5;
        $this->data['utama'] = $diagnosis->utama;
        $this->data['sekunder'] = $diagnosis->sekunder;
        $this->data['jam'] = $diagnosis->jam;
        $this->data['tindakan_terapi'] = $diagnosis->tindakan_terapi;
        $this->data['daftar_masalah'] = $diagnosis->daftar_masalah;
        
        // TINDAK LANJUT ///////////////////
        // TINDAK LANJUT ///////////////////
        // TINDAK LANJUT ///////////////////
        // TINDAK LANJUT ///////////////////
        
        $tindak = RJTindakLanjut::where('id', 1)->first();
        
        $this->data['id_regis'] = $tindak->id_regis;
        $this->data['tindak_lanjut'] = $tindak->tindak_lanjut;
        $this->data['perlu_dikontrol'] = $tindak->perlu_dikontrol;
        $this->data['tanggal_kontrol'] = $tindak->tanggal_kontrol;
        $this->data['ruangan'] = $tindak->ruangan;
        $this->data['indikasi_rawat_inap'] = $tindak->indikasi_rawat_inap;
        $this->data['alasan_menolak'] = $tindak->alasan_menolak;
        $this->data['dirujuk_ke'] = $tindak->dirujuk_ke;
        $this->data['alasan_dirujuk'] = $tindak->alasan_dirujuk;
        $this->data['kesadaran'] = $tindak->kesadaran;
        $this->data['kesadaran_lainnya'] = $tindak->kesadaran_lainnya;
        $this->data['tensi'] = $tindak->tensi;
        $this->data['nadi'] = $tindak->nadi;
        $this->data['pernafasan'] = $tindak->pernafasan;
        $this->data['suhu'] = $tindak->suhu;


        return view('page.rj.asesmen_awal_dokter_read', $this->data);
    }

    public function get_rj_asesmen_awal_perawat_data()
    {
        $id_pasien = Session::get('id_pasien');
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
        $daftar_dokumen->save();


        return redirect('rj_asesmen_awal_perawat_read');
    }

}