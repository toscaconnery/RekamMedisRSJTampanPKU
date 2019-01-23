<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJTumbuhKembangDataAnak;
use App\Models\RJTumbuhKembangDataOrangTua;
use App\Models\RJTumbuhKembangDataSaudara;
use App\Models\RJTumbuhKembangDataSerumah;
use App\Models\RJTumbuhKembangRiwayatKehamilan;
use App\Models\RJTumbuhKembangRiwayatPersalinanNatal;
use App\Models\RJTumbuhKembangRiwayatPersalinanPascaNatal;
use App\Models\RJTumbuhKembangPenyakitAnak;
use App\Models\RJTumbuhKembangRiwayatAkademis;
use App\Models\RJTumbuhKembangRiwayatSekolah;
use App\Models\RJTumbuhKembangRiwayatSosialisasi;
use App\Models\RJTumbuhKembangRiwayatPsikiatrik;
use App\Models\RJTumbuhKembangPemeriksaanStatusMental;
use App\Models\RJTumbuhKembangLainnya;
use App\Models\RJTumbuhKembangPsikiatri;
use App\Models\RJTumbuhKembangKlinik;
use App\Models\RJTumbuhKembangFisioterapi;
use Session;
use View;

class RJAsesmenAwalTumbuhKembangController extends Controller
{
    public function __construct()
    {
        $this->middleware('haspatient');
        $this->data['title'] = 'Asesmen Awal Pasien Tumbuh Kembang dan Edukasi Terpadu';
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_psikolog()
    {
    	return view('page.rj.tumbuh_kembang_psikolog', $this->data);
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_dokter()
    {
        return view('page.rj.tumbuh_kembang_dokter', $this->data);
    }

    public function post_rj_asesmen_awal_tumbuh_kembang_psikolog(Request $request)
    {
    	//anak
    	$anak = new RJTumbuhKembangDataAnak;
        $id_pasien = Session::get('id_pasien');
    	$anak->id_regis = $id_pasien;
    	$anak->nama = $request->nama_anak;
    	$anak->tempat_lahir = $request->tempat_lahir_anak;
    	$anak->tanggal_lahir = $request->tanggal_lahir_anak;
    	$anak->jenis_kelamin = $request->jenis_kelamin_anak;
    	$anak->agama = $request->agama_anak;
    	$anak->sekolah = $request->sekolah_anak;
    	$anak->kelas = $request->kelas_anak;
    	$anak->alamat_sekolah = $request->alamat_sekolah_anak;
    	$anak->suku_bangsa = $request->suku_bangsa_anak;
    	$anak->bahasa = $request->bahasa_anak;
    	$anak->alamat_lengkap = $request->alamat_lengkap_anak;
    	$anak->no_telp = $request->no_telp_anak;
        $anak->tinggal_dengan = $request->tinggal_dengan;
        $anak->tinggal_dengan_lainnya = $request->tinggal_dengan_lainnya;
        $anak->tanggal = $request->tanggal;
        $anak->psikolog = $request->psikolog;
    	$anak->save();

    	//ayah
    	$ayah = new RJTumbuhKembangDataOrangTua;
    	$ayah->id_regis = $id_pasien;
    	$ayah->sebagai = 'ayah';
    	$ayah->nama = $request->nama_ayah;
    	$ayah->tempat_lahir = $request->tempat_lahir_ayah;
    	$ayah->tanggal_lahir = $request->tanggal_lahir_ayah;
    	$ayah->agama = $request->agama_ayah;
    	$ayah->pendidikan = $request->pendidikan_ayah;
    	$ayah->pekerjaan = $request->pekerjaan_ayah;
    	$ayah->alamat_pekerjaan = $request->alamat_pekerjaan_ayah;
    	$ayah->perkawinan_ke = $request->perkawinan_ke_ayah;
    	$ayah->lama_perkawinan = $request->lama_perkawinan_ayah;
    	$ayah->status_lainnya = $request->status_ayah_lainnya;
    	$ayah->status = $request->status_ayah;
    	$ayah->save();

    	//ibu
    	$ibu = new RJTumbuhKembangDataOrangTua;
    	$ibu->id_regis = $id_pasien;
    	$ibu->sebagai = 'ibu';
    	$ibu->nama = $request->nama_ibu;
    	$ibu->tempat_lahir = $request->tempat_lahir_ibu;
    	$ibu->tanggal_lahir = $request->tanggal_lahir_ibu;
    	$ibu->agama = $request->agama_ibu;
    	$ibu->pendidikan = $request->pendidikan_ibu;
    	$ibu->pekerjaan = $request->pekerjaan_ibu;
    	$ibu->alamat_pekerjaan = $request->alamat_pekerjaan_ibu;
    	$ibu->perkawinan_ke = $request->perkawinan_ke_ibu;
    	$ibu->lama_perkawinan = $request->lama_perkawinan_ibu;
    	$ibu->status = $request->status_ibu;
        $ibu->status_lainnya = $request->status_ibu_lainnya;
    	$ibu->save();

    	//saudara kandung
    	$jumlah_form_saudara = $request->jumlah_form_saudara;
    	for($i = 1; $i <= $jumlah_form_saudara; $i++) {
    		$str_umur = 'umur_'.$i;
    		$str_jenis_kelamin = 'jenis_kelamin_'.$i;
    		$str_pendidikan = 'pendidikan_'.$i;
    		$str_pekerjaan = 'pekerjaan_'.$i;
    		if(!is_null($request->$str_umur)) {
    			$data = new RJTumbuhKembangDataSaudara;
    			$data->id_regis = $id_pasien;
    			$data->status = 'kandung';
    			$data->umur = $request->$str_umur;
    			$data->jenis_kelamin = $request->$str_jenis_kelamin;
    			$data->pendidikan = $request->$str_pendidikan;
    			$data->pekerjaan = $request->$str_pekerjaan;
    			$data->save();
    		}
    	}

    	//saudara tiri
    	$jumlah_form_saudara_tiri = $request->jumlah_form_saudara_tiri;
    	for($i = 1; $i <= $jumlah_form_saudara_tiri; $i++) {
    		$str_umur = 'umur_tiri_'.$i;
    		$str_jenis_kelamin = 'jenis_kelamin_tiri_'.$i;
    		$str_pendidikan = 'pendidikan_tiri_'.$i;
    		$str_pekerjaan = 'pekerjaan_tiri_'.$i;
    		if(!is_null($request->$str_umur)) {
    			$data = new RJTumbuhKembangDataSaudara;
    			$data->id_regis = $id_pasien;
    			$data->status = 'tiri';
    			$data->umur = $request->$str_umur;
    			$data->jenis_kelamin = $request->$str_jenis_kelamin;
    			$data->pendidikan = $request->$str_pendidikan;
    			$data->pekerjaan = $request->$str_pekerjaan;
    			$data->save();
    		}
    	}

    	//orang serumah
    	$jumlah_form_serumah = $request->jumlah_form_serumah;
    	for($i = 1; $i <= $jumlah_form_serumah; $i++) {
    		$str_umur = 'umur_serumah_'.$i;
    		$str_jenis_kelamin = 'jenis_kelamin_serumah_'.$i;
    		$str_pendidikan = 'pendidikan_serumah_'.$i;
    		$str_pekerjaan = 'pekerjaan_serumah_'.$i;
    		if(!is_null($request->$str_umur)) {
    			$data = new RJTumbuhKembangDataSerumah;
    			$data->id_regis = $id_pasien;
    			$data->umur = $request->$str_umur;
    			$data->jenis_kelamin = $request->$str_jenis_kelamin;
    			$data->pendidikan = $request->$str_pendidikan;
    			$data->pekerjaan = $request->$str_pekerjaan;
    			$data->save();
    		}
    	}

    	// //riwayat kehamilan
    	$riwayat = new RJTumbuhKembangRiwayatKehamilan;
    	$riwayat->id_regis = $id_pasien;
    	$riwayat->keadaan_awal_kandungan = $request->keadaan_awal_kandungan;
    	$riwayat->penyakit_selama_mengandung = $request->penyakit_selama_mengandung;
    	$riwayat->perasaan_selama_mengandung = $request->perasaan_selama_mengandung;
    	$riwayat->suka_obat_obatan = $request->suka_obat_obatan;
    	$riwayat->berdasarkan_anjuran = $request->berdasarkan_anjuran;
    	$riwayat->pernah_jatuh_kecelakaan = $request->pernah_jatuh_kecelakaan;
    	$riwayat->usia_jatuh_kecelakaan = $request->usia_jatuh_kecelakaan;
    	$riwayat->suka_merokok = $request->suka_merokok;
    	$riwayat->pernah_keguguran = $request->pernah_keguguran;
    	$riwayat->jumlah_keguguran = $request->jumlah_keguguran;
        $riwayat->usia_ketika_kasus = $request->usia_ketika_kasus;
    	$riwayat->bekerja_ketika_kasus = $request->bekerja_ketika_kasus;        
    	$riwayat->save();

    	//riwayat persalinan natal
    	$riwayat = new RJTumbuhKembangRiwayatPersalinanNatal;
    	$riwayat->id_regis = $id_pasien;
    	$riwayat->proses_kelahiran = $request->proses_kelahiran;
    	$riwayat->dibantu_alat = $request->dibantu_alat;
    	$riwayat->alat_bantu = $request->alat_bantu;
		$riwayat->mengalami_keguguran = $request->mengalami_keguguran;
		$riwayat->keterangan_keguguran = $request->keterangan_keguguran;
    	$riwayat->kondisi_lahir = $request->kondisi_lahir;
    	$riwayat->dibantu_oleh_lainnya = $request->dibantu_oleh_lainnya;
    	$riwayat->dibantu_oleh = $request->dibantu_oleh;
    	$riwayat->berat_bayi = $request->berat_bayi;
    	$riwayat->panjang_bayi = $request->panjang_bayi;
    	$riwayat->save();


    	//riwayat persalinan pasca natal
    	$riwayat = new RJTumbuhKembangRiwayatPersalinanPascaNatal;
    	$riwayat->id_regis = $id_pasien;
    	$riwayat->lama_asi = $request->lama_asi;
    	$riwayat->pola_makan = $request->pola_makan;
    	$riwayat->pola_tidur = $request->pola_tidur;
    	$riwayat->training = $request->training;
    	$riwayat->motorik = $request->motorik;
    	$riwayat->usia_berjalan = $request->usia_berjalan;
    	$riwayat->usia_berbicara = $request->usia_berbicara;
    	$riwayat->hambatan_berbicara = $request->hambatan_berbicara;
    	$riwayat->obat_masih_diminum = $request->obat_masih_diminum;
    	$riwayat->diasuh = $request->diasuh;
    	$riwayat->lama_pengasuhan = $request->lama_pengasuhan;
    	$riwayat->masalah_khusus = $request->masalah_khusus;
    	$riwayat->save();

    	//penyakit anak
    	$jumlah_form_penyakit_anak = $request->jumlah_form_penyakit_anak;
    	for($i = 1; $i <= $jumlah_form_penyakit_anak; $i++) {
    		$str_penyakit = 'penyakit_'.$i;
    		$str_tahun = 'tahun_'.$i;
    		$str_lamanya = 'lamanya_'.$i;
    		$str_keterangan = 'keterangan_'.$i;
    		if(!is_null($request->$str_penyakit)) {
    			$data = new RJTumbuhKembangPenyakitAnak;
    			$data->id_regis = $id_pasien;
    			$data->penyakit = $request->$str_penyakit;
    			$data->tahun = $request->$str_tahun;
    			$data->lamanya = $request->$str_lamanya;
    			$data->keterangan = $request->$str_keterangan;
    			$data->save();
    		}
    	}

    	//riwayat akademis
    	$riwayat = new RJTumbuhKembangRiwayatAkademis;
    	$riwayat->id_regis = $id_pasien;
    	$riwayat->sikap = $request->sikap;
    	$riwayat->keterampilan_motorik_awal = $request->keterampilan_motorik_awal;
    	$riwayat->hasil_belajar_anak = $request->hasil_belajar_anak;
    	$riwayat->pelajaran_disenangi = $request->pelajaran_disenangi;
    	$riwayat->pelajaran_sulit = $request->pelajaran_sulit;
    	$riwayat->keluhan_di_pelajaran_sulit = $request->keluhan_di_pelajaran_sulit;
    	$riwayat->tempat_belajar_sendiri = $request->tempat_belajar_sendiri;
    	$riwayat->waktu_biasa_belajar = $request->waktu_biasa_belajar;
    	$riwayat->dibantu_belajar = $request->dibantu_belajar;
    	$riwayat->dibantu_belajar_oleh_lainnya = $request->dibantu_belajar_oleh_lainnya;
    	$riwayat->dibantu_belajar_oleh = $request->dibantu_belajar_oleh;
    	$riwayat->sikap_di_kegiatan = $request->sikap_di_kegiatan;
    	$riwayat->les = $request->les;
    	$riwayat->pelajaran_les = $request->pelajaran_les;
    	$riwayat->pengajar = $request->pengajar;
    	$riwayat->save();

        // riwayat sekolah
        $jumlah_form_riwayat_sekolah = $request->jumlah_form_riwayat_sekolah;
        for($i = 1; $i <= $jumlah_form_riwayat_sekolah; $i++) {
            $str_jenis_riwayat_sekolah = 'jenis_riwayat_sekolah_'.$i;
            $str_umur_riwayat_sekolah = 'umur_riwayat_sekolah_'.$i;
            $str_keterangan_riwayat_sekolah = 'keterangan_riwayat_sekolah_'.$i;
            if(!is_null($request->$str_jenis_riwayat_sekolah)) {
                $data = new RJTumbuhKembangRiwayatSekolah;
                $data->id_regis = $id_pasien;
                $data->jenis_sekolah = $request->$str_jenis_riwayat_sekolah;
                $data->umur = $request->$str_umur_riwayat_sekolah;
                $data->keterangan_tinggal = $request->$str_keterangan_riwayat_sekolah;
                $data->save();
            }
        }

        // riwayat sosialisasi
        $sosialisasi = new RJTumbuhKembangRiwayatSosialisasi;
        $sosialisasi->id_regis = $id_pasien;
        $sosialisasi->sekolah = $request->sosialisasi_di_sekolah;
        $sosialisasi->keluarga = $request->sosialisasi_di_keluarga;
        $sosialisasi->save();

    	return back();
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_psikolog_data()
    {
        //anak
        $id_pasien = Session::get('id_pasien');
        $anak = RJTumbuhKembangDataAnak::where('id_regis', $id_pasien)->first();
    
        $this->data['nama_anak'] = $anak->nama;
        $this->data['tempat_lahir_anak'] = $anak->tempat_lahir;
        $this->data['tanggal_lahir_anak'] = $anak->tanggal_lahir;
        $this->data['jenis_kelamin_anak'] = $anak->jenis_kelamin;
        $this->data['agama_anak'] = $anak->agama;
        $this->data['sekolah_anak'] = $anak->sekolah;
        $this->data['sekolah_anak']  = $anak->sekolah;
        $this->data['kelas_anak'] = $anak->kelas;
        $this->data['alamat_sekolah_anak'] = $anak->alamat_sekolah;
        $this->data['suku_bangsa_anak'] = $anak->suku_bangsa;
        $this->data['bahasa_anak'] = $anak->bahasa;
        $this->data['alamat_lengkap_anak'] = $anak->alamat_lengkap;
        $this->data['no_telp_anak'] = $anak->no_telp;
        $this->data['tinggal_dengan_lainnya'] = $anak->tinggal_dengan_lainnya;
        $this->data['tinggal_dengan'] = $anak->tinggal_dengan;
        $this->data['tanggal'] = $anak->tanggal;
        $this->data['psikolog'] = $anak->psikolog;

        //ayah
        $ayah = RJTumbuhKembangDataOrangTua::where('id_regis', $id_pasien)->where('sebagai', 'ayah')->first();
        $this->data['nama_ayah'] =  $ayah->nama;
        $this->data['tempat_lahir_ayah'] = $ayah->tempat_lahir;
        $this->data['tanggal_lahir_ayah'] = $ayah->tanggal_lahir;
        $this->data['agama_ayah'] = $ayah->agama;
        $this->data['pendidikan_ayah'] = $ayah->pendidikan;
        $this->data['pekerjaan_ayah'] = $ayah->pekerjaan;
        $this->data['alamat_pekerjaan_ayah'] = $ayah->alamat_pekerjaan;
        $this->data['perkawinan_ke_ayah'] = $ayah->perkawinan_ke;
        $this->data['lama_perkawinan_ayah'] = $ayah->lama_perkawinan;
        $this->data['status_ayah_lainnya'] = $ayah->status_lainnya;
        $this->data['status_ayah'] = $ayah->status;
        
        //ibu
        $ibu = RJTumbuhKembangDataOrangTua::where('id_regis', $id_pasien)->where('sebagai', 'ibu')->first();
        $this->data['nama_ibu'] =  $ibu->nama;
        $this->data['tempat_lahir_ibu'] = $ibu->tempat_lahir;
        $this->data['tanggal_lahir_ibu'] = $ibu->tanggal_lahir;
        $this->data['agama_ibu'] = $ibu->agama;
        $this->data['pendidikan_ibu'] = $ibu->pendidikan;
        $this->data['pekerjaan_ibu'] = $ibu->pekerjaan;
        $this->data['alamat_pekerjaan_ibu'] = $ibu->alamat_pekerjaan;
        $this->data['perkawinan_ke_ibu'] = $ibu->perkawinan_ke;
        $this->data['lama_perkawinan_ibu'] = $ibu->lama_perkawinan;
        $this->data['status_ibu_lainnya'] = $ibu->status_lainnya;
        $this->data['status_ibu'] = $ibu->status;

        // //riwayat kehamilan
        $riwayat = RJTumbuhKembangRiwayatKehamilan::where('id_regis', $id_pasien)->first();
        $this->data['keadaan_awal_kandungan'] = $riwayat->keadaan_awal_kandungan;
        $this->data['penyakit_selama_mengandung'] = $riwayat->penyakit_selama_mengandung;
        $this->data['perasaan_selama_mengandung'] = $riwayat->perasaan_selama_mengandung;
        $this->data['suka_obat_obatan'] = $riwayat->suka_obat_obatan;
        $this->data['berdasarkan_anjuran'] = $riwayat->berdasarkan_anjuran;
        $this->data['pernah_jatuh_kecelakaan'] = $riwayat->pernah_jatuh_kecelakaan;
        $this->data['usia_jatuh_kecelakaan'] = $riwayat->usia_jatuh_kecelakaan;
        $this->data['suka_merokok'] = $riwayat->suka_merokok;
        $this->data['pernah_keguguran'] = $riwayat->pernah_keguguran;
        $this->data['jumlah_keguguran'] = $riwayat->jumlah_keguguran;
        $this->data['usia_ketika_kasus'] = $riwayat->usia_ketika_kasus;
        $this->data['bekerja_ketika_kasus'] = $riwayat->bekerja_ketika_kasus;

        //riwayat persalinan natal
        $riwayat = RJTumbuhKembangRiwayatPersalinanNatal::where('id_regis', $id_pasien)->first();
        $this->data['proses_kelahiran'] = $riwayat->proses_kelahiran;
        $this->data['dibantu_alat'] = $riwayat->dibantu_alat;
        $this->data['alat_bantu'] = $riwayat->alat_bantu;
        $this->data['mengalami_keguguran'] = $riwayat->mengalami_keguguran;
        $this->data['keterangan_keguguran'] = $riwayat->keterangan_keguguran;
        $this->data['kondisi_lahir'] = $riwayat->kondisi_lahir;
        $this->data['dibantu_oleh_lainnya'] = $riwayat->dibantu_oleh_lainnya;
        $this->data['dibantu_oleh'] = $riwayat->dibantu_oleh;
        $this->data['berat_bayi'] = $riwayat->berat_bayi;
        $this->data['panjang_bayi'] = $riwayat->panjang_bayi;

        //riwayat persalinan pasca natal
        $riwayat = RJTumbuhKembangRiwayatPersalinanPascaNatal::where('id_regis', $id_pasien)->first();
        $this->data['lama_asi'] = $riwayat->lama_asi;
        $this->data['pola_makan'] = $riwayat->pola_makan;
        $this->data['pola_tidur'] = $riwayat->pola_tidur;
        $this->data['training'] = $riwayat->training;
        $this->data['motorik'] = $riwayat->motorik;
        $this->data['usia_berjalan'] = $riwayat->usia_berjalan;
        $this->data['usia_berbicara'] = $riwayat->usia_berbicara;
        $this->data['hambatan_berbicara'] = $riwayat->hambatan_berbicara;
        $this->data['obat_masih_diminum'] = $riwayat->obat_masih_diminum;
        $this->data['diasuh'] = $riwayat->diasuh;
        $this->data['lama_pengasuhan'] = $riwayat->lama_pengasuhan;
        $this->data['masalah_khusus'] = $riwayat->masalah_khusus;

        //riwayat akademis
        $riwayat = RJTumbuhKembangRiwayatAkademis::where('id_regis', $id_pasien)->first();
        $this->data['sikap'] = $riwayat->sikap;
        $this->data['keterampilan_motorik_awal'] = $riwayat->keterampilan_motorik_awal;
        $this->data['hasil_belajar_anak'] = $riwayat->hasil_belajar_anak;
        $this->data['pelajaran_disenangi'] = $riwayat->pelajaran_disenangi;
        $this->data['pelajaran_sulit'] = $riwayat->pelajaran_sulit;
        $this->data['keluhan_di_pelajaran_sulit'] = $riwayat->keluhan_di_pelajaran_sulit;
        $this->data['tempat_belajar_sendiri'] = $riwayat->tempat_belajar_sendiri;
        $this->data['waktu_biasa_belajar'] = $riwayat->waktu_biasa_belajar;
        $this->data['dibantu_belajar'] = $riwayat->dibantu_belajar;
        $this->data['dibantu_belajar_oleh_lainnya'] = $riwayat->dibantu_belajar_oleh_lainnya;
        $this->data['dibantu_belajar_oleh'] = $riwayat->dibantu_belajar_oleh;
        $this->data['sikap_di_kegiatan'] = $riwayat->sikap_di_kegiatan;
        $this->data['les'] = $riwayat->les;
        $this->data['pelajaran_les'] = $riwayat->pelajaran_les;
        $this->data['pengajar'] = $riwayat->pengajar;

        // riwayat sosialisasi
        $sosialisasi = RJTumbuhKembangRiwayatSosialisasi::where('id_regis', $id_pasien)->first();
        $this->data['sosialisasi_di_sekolah'] = $sosialisasi->sekolah;
        $this->data['sosialisasi_di_keluarga'] = $sosialisasi->keluarga;


        //saudara kandung dan tiri
        $saudara = RJTumbuhKembangDataSaudara::where('id_regis', $id_pasien)->get();
        $previous_saudara = '';
        $previous_saudara_tiri = '';
        $this->data['saudara'] = array();
        $this->data['saudara_tiri'] = array();
        foreach ($saudara as $key => $value) {
            if($value->status == 'kandung') {
                $this->data['saudara'][$key] = array();
                $this->data['saudara'][$key]['id_data'] = $value->id;
                $this->data['saudara'][$key]['umur'] = $value->umur;
                $this->data['saudara'][$key]['jenis_kelamin'] = $value->jenis_kelamin;
                $this->data['saudara'][$key]['pendidikan'] = $value->pendidikan;
                $this->data['saudara'][$key]['pekerjaan'] = $value->pekerjaan;
                $previous_saudara .= $value->id.'-';
            }
            elseif($value->status == 'tiri') {
                $this->data['saudara_tiri'][$key] = array();
                $this->data['saudara_tiri'][$key]['id_data'] = $value->id;
                $this->data['saudara_tiri'][$key]['umur_tiri'] = $value->umur;
                $this->data['saudara_tiri'][$key]['jenis_kelamin_tiri'] = $value->jenis_kelamin;
                $this->data['saudara_tiri'][$key]['pendidikan_tiri'] = $value->pendidikan;
                $this->data['saudara_tiri'][$key]['pekerjaan_tiri'] = $value->pekerjaan;
                $previous_saudara_tiri .= $value->id.'-';
            }
        }
        if(strlen($previous_saudara) > 0) {
            $previous_saudara = substr($previous_saudara, 0, -1);
        }
        if(strlen($previous_saudara_tiri) > 0) {
            $previous_saudara_tiri = substr($previous_saudara_tiri, 0, -1);
        }
        $this->data['previous_saudara'] = $previous_saudara;
        $this->data['previous_saudara_tiri'] = $previous_saudara_tiri;


        //orang serumah
        $previous_serumah = '';
        $serumah = RJTumbuhKembangDataSerumah::where('id_regis', $id_pasien)->get();
        $this->data['serumah'] = array();
        foreach ($serumah as $key => $value) {
            $this->data['serumah'][$key] = array();
            $this->data['serumah'][$key]['id_data'] = $value->id;
            $this->data['serumah'][$key]['umur'] = $value->umur;
            $this->data['serumah'][$key]['jenis_kelamin'] = $value->jenis_kelamin;
            $this->data['serumah'][$key]['pendidikan'] = $value->pendidikan;
            $this->data['serumah'][$key]['pekerjaan'] = $value->pekerjaan;
            $previous_serumah .= $value->id.'-';
        }
        if(strlen($previous_serumah) > 0) {
            $previous_serumah = substr($previous_serumah, 0, -1);
        }
        $this->data['previous_serumah'] = $previous_serumah;


        //penyakit anak
        $previous_penyakit = '';
        $penyakit = RJTumbuhKembangPenyakitAnak::where('id_regis', $id_pasien)->get();
        $this->data['penyakit_anak'] = array();
        foreach ($penyakit as $key => $value) {
            $this->data['penyakit_anak'][$key] = array();
            $this->data['penyakit_anak'][$key]['id_data'] = $value->id;
            $this->data['penyakit_anak'][$key]['penyakit'] = $value->penyakit;
            $this->data['penyakit_anak'][$key]['tahun'] = $value->tahun;
            $this->data['penyakit_anak'][$key]['lamanya'] = $value->lamanya;
            $this->data['penyakit_anak'][$key]['keterangan'] = $value->keterangan;
            $previous_penyakit .= $value->id.'-';
        }
        if(strlen($previous_penyakit) > 0) {
            $previous_penyakit = substr($previous_penyakit, 0, -1);
        }
        $this->data['previous_penyakit'] = $previous_penyakit;


        $previous_sekolah = '';
        $sekolah = RJTumbuhKembangRiwayatSekolah::where('id_regis', $id_pasien)->get();
        $this->data['sekolah'] = array();
        foreach ($sekolah as $key => $value) {
            $this->data['sekolah'][$key] = array();
            $this->data['sekolah'][$key]['id_data'] = $value->id;
            $this->data['sekolah'][$key]['jenis_sekolah'] = $value->jenis_sekolah;
            $this->data['sekolah'][$key]['umur'] = $value->umur;
            $this->data['sekolah'][$key]['keterangan_tinggal'] = $value->keterangan_tinggal;
            $previous_sekolah .= $value->id.'-';
        }
        if(strlen($previous_sekolah) > 0) {
            $previous_sekolah = substr($previous_sekolah, 0, -1);
        }
        $this->data['previous_sekolah'] = $previous_sekolah;

    }

    public function get_rj_asesmen_awal_tumbuh_kembang_psikolog_read()
    {
        $this->get_rj_asesmen_awal_tumbuh_kembang_psikolog_data();
        return view('page.rj.tumbuh_kembang_psikolog_read', $this->data);
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_psikolog_edit()
    {
        $this->get_rj_asesmen_awal_tumbuh_kembang_psikolog_data();
        return view('page.rj.tumbuh_kembang_psikolog_edit', $this->data);
    }

    public function post_rj_asesmen_awal_tumbuh_kembang_psikolog_edit(Request $request)
    {
        //anak
        $id_pasien = Session::get('id_pasien');
        $anak = RJTumbuhKembangDataAnak::where('id_regis', $id_pasien)->first();
        $anak->nama = $request->nama_anak;
        $anak->tempat_lahir = $request->tempat_lahir_anak;
        $anak->tanggal_lahir = $request->tanggal_lahir_anak;
        $anak->jenis_kelamin = $request->jenis_kelamin_anak;
        $anak->agama = $request->agama_anak;
        $anak->sekolah = $request->sekolah_anak;
        $anak->kelas = $request->kelas_anak;
        $anak->alamat_sekolah = $request->alamat_sekolah_anak;
        $anak->suku_bangsa = $request->suku_bangsa_anak;
        $anak->bahasa = $request->bahasa_anak;
        $anak->alamat_lengkap = $request->alamat_lengkap_anak;
        $anak->no_telp = $request->no_telp_anak;
        $anak->tinggal_dengan = $request->tinggal_dengan;
        $anak->tinggal_dengan_lainnya = $request->tinggal_dengan_lainnya;
        $anak->tanggal = $request->tanggal;
        $anak->psikolog = $request->psikolog;
        $anak->save();

        //ayah
        $ayah = RJTumbuhKembangDataOrangTua::where('id_regis', $id_pasien)->where('sebagai', 'ayah')->first();
        $ayah->nama = $request->nama_ayah;
        $ayah->tempat_lahir = $request->tempat_lahir_ayah;
        $ayah->tanggal_lahir = $request->tanggal_lahir_ayah;
        $ayah->agama = $request->agama_ayah;
        $ayah->pendidikan = $request->pendidikan_ayah;
        $ayah->pekerjaan = $request->pekerjaan_ayah;
        $ayah->alamat_pekerjaan = $request->alamat_pekerjaan_ayah;
        $ayah->perkawinan_ke = $request->perkawinan_ke_ayah;
        $ayah->lama_perkawinan = $request->lama_perkawinan_ayah;
        $ayah->status_lainnya = $request->status_ayah_lainnya;
        $ayah->status = $request->status_ayah;
        $ayah->save();

        //ibu
        $ibu =  RJTumbuhKembangDataOrangTua::where('id_regis', $id_pasien)->where('sebagai', 'ibu')->first();
        $ibu->nama = $request->nama_ibu;
        $ibu->tempat_lahir = $request->tempat_lahir_ibu;
        $ibu->tanggal_lahir = $request->tanggal_lahir_ibu;
        $ibu->agama = $request->agama_ibu;
        $ibu->pendidikan = $request->pendidikan_ibu;
        $ibu->pekerjaan = $request->pekerjaan_ibu;
        $ibu->alamat_pekerjaan = $request->alamat_pekerjaan_ibu;
        $ibu->perkawinan_ke = $request->perkawinan_ke_ibu;
        $ibu->lama_perkawinan = $request->lama_perkawinan_ibu;
        $ibu->status = $request->status_ibu;
        $ibu->status_lainnya = $request->status_ibu_lainnya;
        $ibu->save();

        //saudara kandung
        //old
        $previous_saudara = $request->previous_saudara;
        if(strlen($previous_saudara) > 0)
        {
            $previous_id_saudara = explode('-', $previous_saudara);
            foreach ($previous_id_saudara as $key => $value) {
                $str_umur = 'umur_'.$value;
                $str_jenis_kelamin = 'jenis_kelamin_'.$value;
                $str_pendidikan = 'pendidikan_'.$value;
                $str_pekerjaan = 'pekerjaan_'.$value;
                $data = RJTumbuhKembangDataSaudara::where('id', $value)->where('status', 'kandung')->first();
                $data->umur = $request->$str_umur;
                $data->jenis_kelamin = $request->$str_jenis_kelamin;
                $data->pendidikan = $request->$str_pendidikan;
                $data->pekerjaan = $request->$str_pekerjaan;
                $data->save();
            }
        }

        //new
        $jumlah_form_saudara = $request->jumlah_form_saudara;
        for($i = 1; $i <= $jumlah_form_saudara; $i++) {
            $str_umur = 'umur_new_'.$i;
            $str_jenis_kelamin = 'jenis_kelamin_new_'.$i;
            $str_pendidikan = 'pendidikan_new_'.$i;
            $str_pekerjaan = 'pekerjaan_new_'.$i;
            if(!is_null($request->$str_umur)) {
                $data = new RJTumbuhKembangDataSaudara;
                $data->id_regis = $id_pasien;
                $data->status = 'kandung';
                $data->umur = $request->$str_umur;
                $data->jenis_kelamin = $request->$str_jenis_kelamin;
                $data->pendidikan = $request->$str_pendidikan;
                $data->pekerjaan = $request->$str_pekerjaan;
                $data->save();
            }
        }

        //saudara tiri
        //old
        $previous_saudara_tiri = $request->previous_saudara_tiri;
        if(strlen($previous_saudara_tiri) > 0)
        {
            $previous_id_saudara_tiri = explode('-', $previous_saudara_tiri);
            foreach ($previous_id_saudara_tiri as $key => $value) {
                $str_umur = 'umur_tiri_'.$value;
                $str_jenis_kelamin = 'jenis_kelamin_tiri_'.$value;
                $str_pendidikan = 'pendidikan_tiri_'.$value;
                $str_pekerjaan = 'pekerjaan_tiri_'.$value;
                $data = RJTumbuhKembangDataSaudara::where('id', $value)->where('status', 'tiri')->first();
                $data->umur = $request->$str_umur;
                $data->jenis_kelamin = $request->$str_jenis_kelamin;
                $data->pendidikan = $request->$str_pendidikan;
                $data->pekerjaan = $request->$str_pekerjaan;
                $data->save();
            }
        }

        //new
        $jumlah_form_saudara_tiri = $request->jumlah_form_saudara_tiri;
        for($i = 1; $i <= $jumlah_form_saudara_tiri; $i++) {
            $str_umur = 'umur_tiri_new_'.$i;
            $str_jenis_kelamin = 'jenis_kelamin_tiri_new_'.$i;
            $str_pendidikan = 'pendidikan_tiri_new_'.$i;
            $str_pekerjaan = 'pekerjaan_tiri_new_'.$i;
            if(!is_null($request->$str_umur)) {
                $data = new RJTumbuhKembangDataSaudara;
                $data->id_regis = $id_pasien;
                $data->status = 'tiri';
                $data->umur = $request->$str_umur;
                $data->jenis_kelamin = $request->$str_jenis_kelamin;
                $data->pendidikan = $request->$str_pendidikan;
                $data->pekerjaan = $request->$str_pekerjaan;
                $data->save();
            }
        }

        //orang serumah
        //old
        $previous_serumah = $request->previous_serumah;
        if(strlen($previous_serumah) > 0)
        {
            $previous_id_serumah = explode('-', $previous_serumah);
            foreach ($previous_id_serumah as $key => $value) {
                $str_umur = 'umur_serumah_'.$value;
                $str_jenis_kelamin = 'jenis_kelamin_serumah_'.$value;
                $str_pendidikan = 'pendidikan_serumah_'.$value;
                $str_pekerjaan = 'pekerjaan_serumah_'.$value;
                $data = RJTumbuhKembangDataSerumah::where('id', $value)->first();
                $data->umur = $request->$str_umur;
                $data->jenis_kelamin = $request->$str_jenis_kelamin;
                $data->pendidikan = $request->$str_pendidikan;
                $data->pekerjaan = $request->$str_pekerjaan;
                $data->save();
            }
        }

        //new
        $jumlah_form_serumah = $request->jumlah_form_serumah;
        for($i = 1; $i <= $jumlah_form_serumah; $i++) {
            $str_umur = 'umur_serumah_new_'.$i;
            $str_jenis_kelamin = 'jenis_kelamin_serumah_new_'.$i;
            $str_pendidikan = 'pendidikan_serumah_new_'.$i;
            $str_pekerjaan = 'pekerjaan_serumah_new_'.$i;
            if(!is_null($request->$str_umur)) {
                $data = new RJTumbuhKembangDataSerumah;
                $data->id_regis = $id_pasien;
                $data->umur = $request->$str_umur;
                $data->jenis_kelamin = $request->$str_jenis_kelamin;
                $data->pendidikan = $request->$str_pendidikan;
                $data->pekerjaan = $request->$str_pekerjaan;
                $data->save();
            }
        }

        // //riwayat kehamilan
        $riwayat = RJTumbuhKembangRiwayatKehamilan::where('id_regis', $id_pasien)->first();
        $riwayat->keadaan_awal_kandungan = $request->keadaan_awal_kandungan;
        $riwayat->penyakit_selama_mengandung = $request->penyakit_selama_mengandung;
        $riwayat->perasaan_selama_mengandung = $request->perasaan_selama_mengandung;
        $riwayat->suka_obat_obatan = $request->suka_obat_obatan;
        $riwayat->berdasarkan_anjuran = $request->berdasarkan_anjuran;
        $riwayat->pernah_jatuh_kecelakaan = $request->pernah_jatuh_kecelakaan;
        $riwayat->usia_jatuh_kecelakaan = $request->usia_jatuh_kecelakaan;
        $riwayat->suka_merokok = $request->suka_merokok;
        $riwayat->pernah_keguguran = $request->pernah_keguguran;
        $riwayat->jumlah_keguguran = $request->jumlah_keguguran;
        $riwayat->usia_ketika_kasus = $request->usia_ketika_kasus;
        $riwayat->bekerja_ketika_kasus = $request->bekerja_ketika_kasus;        
        $riwayat->save();

        //riwayat persalinan natal
        $riwayat = RJTumbuhKembangRiwayatPersalinanNatal::where('id_regis', $id_pasien)->first();
        $riwayat->proses_kelahiran = $request->proses_kelahiran;
        $riwayat->dibantu_alat = $request->dibantu_alat;
        $riwayat->alat_bantu = $request->alat_bantu;
        $riwayat->mengalami_keguguran = $request->mengalami_keguguran;
        $riwayat->keterangan_keguguran = $request->keterangan_keguguran;
        $riwayat->kondisi_lahir = $request->kondisi_lahir;
        $riwayat->dibantu_oleh_lainnya = $request->dibantu_oleh_lainnya;
        $riwayat->dibantu_oleh = $request->dibantu_oleh;
        $riwayat->berat_bayi = $request->berat_bayi;
        $riwayat->panjang_bayi = $request->panjang_bayi;
        $riwayat->save();


        //riwayat persalinan pasca natal
        $riwayat = RJTumbuhKembangRiwayatPersalinanPascaNatal::where('id_regis', $id_pasien)->first();
        $riwayat->lama_asi = $request->lama_asi;
        $riwayat->pola_makan = $request->pola_makan;
        $riwayat->pola_tidur = $request->pola_tidur;
        $riwayat->training = $request->training;
        $riwayat->motorik = $request->motorik;
        $riwayat->usia_berjalan = $request->usia_berjalan;
        $riwayat->usia_berbicara = $request->usia_berbicara;
        $riwayat->hambatan_berbicara = $request->hambatan_berbicara;
        $riwayat->obat_masih_diminum = $request->obat_masih_diminum;
        $riwayat->diasuh = $request->diasuh;
        $riwayat->lama_pengasuhan = $request->lama_pengasuhan;
        $riwayat->masalah_khusus = $request->masalah_khusus;
        $riwayat->save();

        //penyakit anak
        //old
        $previous_penyakit = $request->previous_penyakit;
        if(strlen($previous_penyakit) > 0) {
            $previous_id_penyakit = explode('-', $previous_penyakit);
            foreach ($previous_id_penyakit as $key => $value) {
                $str_penyakit = 'penyakit_'.$value;
                $str_tahun = 'tahun_'.$value;
                $str_lamanya = 'lamanya_'.$value;
                $str_keterangan = 'keterangan_'.$value;
                $data = RJTumbuhKembangPenyakitAnak::where('id', $value)->first();
                    $data->penyakit = $request->$str_penyakit;
                    $data->tahun = $request->$str_tahun;
                    $data->lamanya = $request->$str_lamanya;
                    $data->keterangan = $request->$str_keterangan;
                    $data->save();
            }
        }

        //new
        $jumlah_form_penyakit_anak = $request->jumlah_form_penyakit_anak;
        for($i = 1; $i <= $jumlah_form_penyakit_anak; $i++) {
            $str_penyakit = 'penyakit_new_'.$i;
            $str_tahun = 'tahun_new_'.$i;
            $str_lamanya = 'lamanya_new_'.$i;
            $str_keterangan = 'keterangan_new_'.$i;
            if(!is_null($request->$str_penyakit)) {
                $data = new RJTumbuhKembangPenyakitAnak;
                $data->id_regis = $id_pasien;
                $data->penyakit = $request->$str_penyakit;
                $data->tahun = $request->$str_tahun;
                $data->lamanya = $request->$str_lamanya;
                $data->keterangan = $request->$str_keterangan;
                $data->save();
            }
        }

        //riwayat akademis
        $riwayat = RJTumbuhKembangRiwayatAkademis::where('id_regis', $id_pasien)->first();
        $riwayat->sikap = $request->sikap;
        $riwayat->keterampilan_motorik_awal = $request->keterampilan_motorik_awal;
        $riwayat->hasil_belajar_anak = $request->hasil_belajar_anak;
        $riwayat->pelajaran_disenangi = $request->pelajaran_disenangi;
        $riwayat->pelajaran_sulit = $request->pelajaran_sulit;
        $riwayat->keluhan_di_pelajaran_sulit = $request->keluhan_di_pelajaran_sulit;
        $riwayat->tempat_belajar_sendiri = $request->tempat_belajar_sendiri;
        $riwayat->waktu_biasa_belajar = $request->waktu_biasa_belajar;
        $riwayat->dibantu_belajar = $request->dibantu_belajar;
        $riwayat->dibantu_belajar_oleh_lainnya = $request->dibantu_belajar_oleh_lainnya;
        $riwayat->dibantu_belajar_oleh = $request->dibantu_belajar_oleh;
        $riwayat->sikap_di_kegiatan = $request->sikap_di_kegiatan;
        $riwayat->les = $request->les;
        $riwayat->pelajaran_les = $request->pelajaran_les;
        $riwayat->pengajar = $request->pengajar;
        $riwayat->save();

        // riwayat sekolah
        //old
        $previous_sekolah = $request->previous_sekolah;
        if(strlen($previous_sekolah) > 0) {
            $previous_id_sekolah = explode('-', $previous_sekolah);
            foreach ($previous_id_sekolah as $key => $value) {
                $str_jenis_riwayat_sekolah = 'jenis_riwayat_sekolah_'.$value;
                $str_umur_riwayat_sekolah = 'umur_riwayat_sekolah_'.$value;
                $str_keterangan_riwayat_sekolah = 'keterangan_riwayat_sekolah_'.$value;
                $data = RJTumbuhKembangRiwayatSekolah::where('id', $value)->first();
                $data->jenis_sekolah = $request->$str_jenis_riwayat_sekolah;
                $data->umur = $request->$str_umur_riwayat_sekolah;
                $data->keterangan_tinggal = $request->$str_keterangan_riwayat_sekolah;
                $data->save();
            }
        }

        //new
        $jumlah_form_riwayat_sekolah = $request->jumlah_form_riwayat_sekolah;
        for($i = 1; $i <= $jumlah_form_riwayat_sekolah; $i++) {
            $str_jenis_riwayat_sekolah = 'jenis_riwayat_sekolah_new_'.$i;
            $str_umur_riwayat_sekolah = 'umur_riwayat_sekolah_new_'.$i;
            $str_keterangan_riwayat_sekolah = 'keterangan_riwayat_sekolah_new_'.$i;
            if(!is_null($request->$str_jenis_riwayat_sekolah)) {
                $data = new RJTumbuhKembangRiwayatSekolah;
                $data->id_regis = $id_pasien;
                $data->jenis_sekolah = $request->$str_jenis_riwayat_sekolah;
                $data->umur = $request->$str_umur_riwayat_sekolah;
                $data->keterangan_tinggal = $request->$str_keterangan_riwayat_sekolah;
                $data->save();
            }
        }

        // riwayat sosialisasi
        $sosialisasi = RJTumbuhKembangRiwayatSosialisasi::where('id_regis', $id_pasien)->first();
        $sosialisasi->sekolah = $request->sosialisasi_di_sekolah;
        $sosialisasi->keluarga = $request->sosialisasi_di_keluarga;
        $sosialisasi->save();
    }


    public function post_rj_asesmen_awal_tumbuh_kembang_dokter(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $riwayat = new RJTumbuhKembangRiwayatPsikiatrik;
        $riwayat->id_regis = $id_pasien;
        $riwayat->keluhan_utama = $request->keluhan_utama;
        $riwayat->riwayat_gangguan_sekarang = $request->riwayat_gangguan_sekarang;
        $riwayat->riwayat_gangguan_sebelumnya = $request->riwayat_gangguan_sebelumnya;
        $riwayat->riwayat_pribadi = $request->riwayat_pribadi;
        $riwayat->riwayat_pranatal_perinatal = $request->riwayat_pranatal_perinatal;
        $riwayat->early_childhood = $request->early_childhood;
        $riwayat->middle_childhood = $request->middle_childhood;
        $riwayat->late_childhood = $request->late_childhood;
        $riwayat->riwayat_keluarga = $request->riwayat_keluarga;
        $riwayat->riwayat_sosial_sekarang = $request->riwayat_sosial_sekarang;
        $riwayat->persepsi_sendiri = $request->persepsi_sendiri;
        $riwayat->save();

        //pemeriksaan status mental
        $status = new RJTumbuhKembangPemeriksaanStatusMental;
        $status->id_regis = $id_pasien;
        $status->deskripsi_umum = $request->deskripsi_umum;
        $status->interaksi_ortu_anak = $request->interaksi_ortu_anak;
        $status->orientasi_persepsi = $request->orientasi_persepsi;
        $status->mood = $request->mood;
        $status->bentuk_arus_pikir = $request->bentuk_arus_pikir;
        $status->isi_pikir = $request->isi_pikir;
        $status->fantasi = $request->fantasi;
        $status->kemampuan = $request->kemampuan;
        $status->save();

        //lainnya
        $data = new RJTumbuhKembangLainnya;
        $data->id_regis = $id_pasien;
        $data->diagnostik_lanjutan = $request->diagnostik_lanjutan;
        $data->hasil_pemeriksaan = $request->hasil_pemeriksaan;
        $data->formulasi_diagnostik = $request->formulasi_diagnostik;
        $data->aksis1 = $request->aksis1;
        $data->aksis2 = $request->aksis2;
        $data->aksis3 = $request->aksis3;
        $data->aksis4 = $request->aksis4;
        $data->aksis5 = $request->aksis5;
        $data->masalah_organobiologik = $request->masalah_organobiologik;
        $data->masalah_psikologik = $request->masalah_psikologik;
        $data->masalah_sosial = $request->masalah_sosial;
        $data->prognosis = $request->prognosis;
        $data->treatment_pasien = $request->treatment_pasien;
        $data->treatment_keluarga = $request->treatment_keluarga;
        $data->save();

        return redirect('rj_asesmen_awal_tumbuh_kembang_dokter_read');
    }

    public function post_rj_asesmen_awal_tumbuh_kembang_dokter_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $riwayat = RJTumbuhKembangRiwayatPsikiatrik::where('id_regis', $id_pasien)->first();
        $riwayat->id_regis = $id_pasien;
        $riwayat->keluhan_utama = $request->keluhan_utama;
        $riwayat->riwayat_gangguan_sekarang = $request->riwayat_gangguan_sekarang;
        $riwayat->riwayat_gangguan_sebelumnya = $request->riwayat_gangguan_sebelumnya;
        $riwayat->riwayat_pribadi = $request->riwayat_pribadi;
        $riwayat->riwayat_pranatal_perinatal = $request->riwayat_pranatal_perinatal;
        $riwayat->early_childhood = $request->early_childhood;
        $riwayat->middle_childhood = $request->middle_childhood;
        $riwayat->late_childhood = $request->late_childhood;
        $riwayat->riwayat_keluarga = $request->riwayat_keluarga;
        $riwayat->riwayat_sosial_sekarang = $request->riwayat_sosial_sekarang;
        $riwayat->persepsi_sendiri = $request->persepsi_sendiri;
        $riwayat->save();

        //pemeriksaan status mental
        $status = RJTumbuhKembangPemeriksaanStatusMental::where('id_regis', $id_pasien)->first();
        $status->id_regis = $id_pasien;
        $status->deskripsi_umum = $request->deskripsi_umum;
        $status->interaksi_ortu_anak = $request->interaksi_ortu_anak;
        $status->orientasi_persepsi = $request->orientasi_persepsi;
        $status->mood = $request->mood;
        $status->bentuk_arus_pikir = $request->bentuk_arus_pikir;
        $status->isi_pikir = $request->isi_pikir;
        $status->fantasi = $request->fantasi;
        $status->kemampuan = $request->kemampuan;
        $status->save();

        //lainnya
        $data = RJTumbuhKembangLainnya::where('id_regis', $id_pasien)->first();
        $data->id_regis = $id_pasien;
        $data->diagnostik_lanjutan = $request->diagnostik_lanjutan;
        $data->hasil_pemeriksaan = $request->hasil_pemeriksaan;
        $data->formulasi_diagnostik = $request->formulasi_diagnostik;
        $data->aksis1 = $request->aksis1;
        $data->aksis2 = $request->aksis2;
        $data->aksis3 = $request->aksis3;
        $data->aksis4 = $request->aksis4;
        $data->aksis5 = $request->aksis5;
        $data->masalah_organobiologik = $request->masalah_organobiologik;
        $data->masalah_psikologik = $request->masalah_psikologik;
        $data->masalah_sosial = $request->masalah_sosial;
        $data->prognosis = $request->prognosis;
        $data->treatment_pasien = $request->treatment_pasien;
        $data->treatment_keluarga = $request->treatment_keluarga;
        $data->save();

        return redirect('rj_asesmen_awal_tumbuh_kembang_dokter_read');
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_dokter_data()
    {
        $id_pasien = Session::get('id_pasien');
        $riwayat = RJTumbuhKembangRiwayatPsikiatrik::where('id_regis', $id_pasien)->first();
        
        $this->data['keluhan_utama'] = $riwayat->keluhan_utama;
        $this->data['riwayat_gangguan_sekarang'] = $riwayat->riwayat_gangguan_sekarang;
        $this->data['riwayat_gangguan_sebelumnya'] = $riwayat->riwayat_gangguan_sebelumnya;
        $this->data['riwayat_pribadi'] = $riwayat->riwayat_pribadi;
        $this->data['riwayat_pranatal_perinatal'] = $riwayat->riwayat_pranatal_perinatal;
        $this->data['early_childhood'] = $riwayat->early_childhood;
        $this->data['middle_childhood'] = $riwayat->middle_childhood;
        $this->data['late_childhood'] = $riwayat->late_childhood;
        $this->data['riwayat_keluarga'] = $riwayat->riwayat_keluarga;
        $this->data['riwayat_sosial_sekarang'] = $riwayat->riwayat_sosial_sekarang;
        $this->data['persepsi_sendiri'] = $riwayat->persepsi_sendiri;
        

        $status = RJTumbuhKembangPemeriksaanStatusMental::where('id_regis', $id_pasien)->first();

        $this->data['deskripsi_umum'] = $status->deskripsi_umum;
        $this->data['interaksi_ortu_anak'] = $status->interaksi_ortu_anak;
        $this->data['orientasi_persepsi'] = $status->orientasi_persepsi;
        $this->data['mood'] = $status->mood;
        $this->data['bentuk_arus_pikir'] = $status->bentuk_arus_pikir;
        $this->data['isi_pikir'] = $status->isi_pikir;
        $this->data['fantasi'] = $status->fantasi;
        $this->data['kemampuan'] = $status->kemampuan;
        
        
        $pasien = RJTumbuhKembangLainnya::where('id_regis', $id_pasien)->first();
    
        $this->data['diagnostik_lanjutan'] = $pasien->diagnostik_lanjutan;
        $this->data['hasil_pemeriksaan'] = $pasien->hasil_pemeriksaan;
        $this->data['formulasi_diagnostik'] = $pasien->formulasi_diagnostik;
        $this->data['aksis1'] = $pasien->aksis1;
        $this->data['aksis2'] = $pasien->aksis2;
        $this->data['aksis3'] = $pasien->aksis3;
        $this->data['aksis4'] = $pasien->aksis4;
        $this->data['aksis5'] = $pasien->aksis5;
        $this->data['masalah_organobiologik'] = $pasien->masalah_organobiologik;
        $this->data['masalah_psikologik'] = $pasien->masalah_psikologik;
        $this->data['masalah_sosial'] = $pasien->masalah_sosial;
        $this->data['prognosis'] = $pasien->prognosis;
        $this->data['treatment_pasien'] = $pasien->treatment_pasien;
        $this->data['treatment_keluarga'] = $pasien->treatment_keluarga;
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_dokter_read()
    {
        $this->get_rj_asesmen_awal_tumbuh_kembang_dokter_data();
        return view('page.rj.tumbuh_kembang_dokter_read', $this->data);
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_dokter_edit()
    {
        $this->get_rj_asesmen_awal_tumbuh_kembang_dokter_read();
        return view('page.rj.tumbuh_kembang_dokter_edit', $this->data);
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_psikiatri()
    {
        return view('page.rj.tumbuh_kembang_psikiatri', $this->data);
    }

    public function post_rj_asesmen_awal_tumbuh_kembang_psikiatri(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = new RJTumbuhKembangPsikiatri;
        $data->id_regis = $id_pasien;
        $data->f1 = $request->f1;
        $data->f2 = $request->f2;
        $data->f3 = $request->f3;
        $data->f4 = $request->f4;
        $data->f5 = $request->f5;
        $data->f6 = $request->f6;
        $data->f7 = $request->f7;
        $data->t1 = $request->t1;
        $data->r1 = $request->r1;
        $data->t2 = $request->t2;
        $data->r2 = $request->r2;
        $data->t3 = $request->t3;
        $data->r3 = $request->r3;
        $data->t4 = $request->t4;
        $data->r4 = $request->r4;
        $data->t5 = $request->t5;
        $data->r5 = $request->r5;
        $data->t6 = $request->t6;
        $data->r6 = $request->r6;
        $data->t7 = $request->t7;
        $data->r7 = $request->r7;
        $data->t8 = $request->t8;
        $data->r8 = $request->r8;
        $data->tanggal = $request->tanggal;
        $data->save();
        return redirect('rj_asesmen_awal_tumbuh_kembang_psikiatri_read');
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_psikiatri_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RJTumbuhKembangPsikiatri::where('id_regis', $id_pasien)->first();
        $this->data['f1'] = $pasien->f1;
        $this->data['f2'] = $pasien->f2;
        $this->data['f3'] = $pasien->f3;
        $this->data['f4'] = $pasien->f4;
        $this->data['f5'] = $pasien->f5;
        $this->data['f6'] = $pasien->f6;
        $this->data['f7'] = $pasien->f7;
        $this->data['t1'] = $pasien->t1;
        $this->data['r1'] = $pasien->r1;
        $this->data['t2'] = $pasien->t2;
        $this->data['r2'] = $pasien->r2;
        $this->data['t3'] = $pasien->t3;
        $this->data['r3'] = $pasien->r3;
        $this->data['t4'] = $pasien->t4;
        $this->data['r4'] = $pasien->r4;
        $this->data['t5'] = $pasien->t5;
        $this->data['r5'] = $pasien->r5;
        $this->data['t6'] = $pasien->t6;
        $this->data['r6'] = $pasien->r6;
        $this->data['t7'] = $pasien->t7;
        $this->data['r7'] = $pasien->r7;
        $this->data['t8'] = $pasien->t8;
        $this->data['r8'] = $pasien->r8;
        $this->data['tanggal'] = $pasien->tanggal;
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_psikiatri_read()
    {
        $this->get_rj_asesmen_awal_tumbuh_kembang_psikiatri_data();
        return view('page.rj.tumbuh_kembang_psikiatri_read', $this->data);
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_psikiatri_edit()
    {
        $this->get_rj_asesmen_awal_tumbuh_kembang_psikiatri_data();
        return view('page.rj.tumbuh_kembang_psikiatri_edit', $this->data);
    }

    public function post_rj_asesmen_awal_tumbuh_kembang_psikiatri_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RJTumbuhKembangPsikiatri::where('id_regis', $id_pasien)->first();
        $data->f1 = $request->f1;
        $data->f2 = $request->f2;
        $data->f3 = $request->f3;
        $data->f4 = $request->f4;
        $data->f5 = $request->f5;
        $data->f6 = $request->f6;
        $data->f7 = $request->f7;
        $data->t1 = $request->t1;
        $data->r1 = $request->r1;
        $data->t2 = $request->t2;
        $data->r2 = $request->r2;
        $data->t3 = $request->t3;
        $data->r3 = $request->r3;
        $data->t4 = $request->t4;
        $data->r4 = $request->r4;
        $data->t5 = $request->t5;
        $data->r5 = $request->r5;
        $data->t6 = $request->t6;
        $data->r6 = $request->r6;
        $data->t7 = $request->t7;
        $data->r7 = $request->r7;
        $data->t8 = $request->t8;
        $data->r8 = $request->r8;
        $data->tanggal = $request->tanggal;
        $data->save();
        return redirect('rj_asesmen_awal_tumbuh_kembang_psikiatri_read');
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_klinik()
    {
        return view('page.rj.tumbuh_kembang_klinik', $this->data);
    }

    public function post_rj_asesmen_awal_tumbuh_kembang_klinik(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = new RJTumbuhKembangKlinik;
        $data->id_regis = $id_pasien;
        $data->hasil = $request->hasil;
        $data->save();
        return redirect('rj_asesmen_awal_tumbuh_kembang_klinik_read');

    }

    public function get_rj_asesmen_awal_tumbuh_kembang_klinik_data()
    {
        $id_pasien = Session::get('id_pasien');
        $data = RJTumbuhKembangKlinik::where('id_regis', $id_pasien)->first();
        $this->data['hasil'] = $data->hasil;
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_klinik_read()
    {
        $this->get_rj_asesmen_awal_tumbuh_kembang_klinik_data();
        return view('page.rj.tumbuh_kembang_klinik_read', $this->data);
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_klinik_edit()
    {
        $this->get_rj_asesmen_awal_tumbuh_kembang_klinik_data();
        return view('page.rj.tumbuh_kembang_klinik_edit', $this->data);
    }

    public function post_rj_asesmen_awal_tumbuh_kembang_klinik_edit(Request $request) 
    {
        $id_pasien = Session::get('id_pasien');
        $data = RJTumbuhKembangKlinik::where('id_regis', $id_pasien)->first();
        $data->hasil = $request->hasil;
        $data->save();
        return redirect('rj_asesmen_awal_tumbuh_kembang_klinik_read');
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_fisioterapi()
    {
        return view('page.rj.tumbuh_kembang_fisioterapi', $this->data);
    }

    public function post_rj_asesmen_awal_tumbuh_kembang_fisioterapi(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = new RJTumbuhKembangFisioterapi;
        $data->id_regis = $id_pasien;
        $data->f1 = $request->f1;
        $data->f2 = $request->f2;
        $data->f3 = $request->f3;
        $data->f4 = $request->f4;
        $data->f5 = $request->f5;
        $data->f6 = $request->f6;
        $data->f7 = $request->f7;
        $data->f8 = $request->f8;
        $data->f9 = $request->f9;
        $data->f10 = $request->f10;
        $data->f11 = $request->f11;
        $data->f12 = $request->f12;
        $data->f13 = $request->f13;
        $data->f14 = $request->f14;
        $data->f15 = $request->f15;
        $data->f16 = $request->f16;
        $data->f17 = $request->f17;
        $data->f18 = $request->f18;
        $data->f19 = $request->f19;
        $data->f20 = $request->f20;
        $data->f21 = $request->f21;
        $data->f22 = $request->f22;
        $data->f23 = $request->f23;
        $data->f24 = $request->f24;
        $data->f25 = $request->f25;
        $data->f26 = $request->f26;
        $data->f27 = $request->f27;
        $data->f28 = $request->f28;
        $data->save();
        return redirect('rj_asesmen_awal_tumbuh_kembang_fisioterapi_read');
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_fisioterapi_data()
    {
        $id_pasien = Session::get('id_pasien');
        $pasien = RJTumbuhKembangFisioterapi::where('id_regis', $id_pasien)->first();
        $this->data['f1'] = $pasien->f1;
        $this->data['f2'] = $pasien->f2;
        $this->data['f3'] = $pasien->f3;
        $this->data['f4'] = $pasien->f4;
        $this->data['f5'] = $pasien->f5;
        $this->data['f6'] = $pasien->f6;
        $this->data['f7'] = $pasien->f7;
        $this->data['f8'] = $pasien->f8;
        $this->data['f9'] = $pasien->f9;
        $this->data['f10'] = $pasien->f10;
        $this->data['f11'] = $pasien->f11;
        $this->data['f12'] = $pasien->f12;
        $this->data['f13'] = $pasien->f13;
        $this->data['f14'] = $pasien->f14;
        $this->data['f15'] = $pasien->f15;
        $this->data['f16'] = $pasien->f16;
        $this->data['f17'] = $pasien->f17;
        $this->data['f18'] = $pasien->f18;
        $this->data['f19'] = $pasien->f19;
        $this->data['f20'] = $pasien->f20;
        $this->data['f21'] = $pasien->f21;
        $this->data['f22'] = $pasien->f22;
        $this->data['f23'] = $pasien->f23;
        $this->data['f24'] = $pasien->f24;
        $this->data['f25'] = $pasien->f25;
        $this->data['f26'] = $pasien->f26;
        $this->data['f27'] = $pasien->f27;
        $this->data['f28'] = $pasien->f28;
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_fisioterapi_read()
    {
        $this->get_rj_asesmen_awal_tumbuh_kembang_fisioterapi_data();
        return view('page.rj.tumbuh_kembang_fisioterapi_read', $this->data);
    }

    public function get_rj_asesmen_awal_tumbuh_kembang_fisioterapi_edit()
    {
        $this->get_rj_asesmen_awal_tumbuh_kembang_fisioterapi_data();
        return view('page.rj.tumbuh_kembang_fisioterapi_edit', $this->data);
    }

    public function post_rj_asesmen_awal_tumbuh_kembang_fisioterapi_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RJTumbuhKembangFisioterapi::where('id_regis', $id_pasien)->first();
        $data->f1 = $request->f1;
        $data->f2 = $request->f2;
        $data->f3 = $request->f3;
        $data->f4 = $request->f4;
        $data->f5 = $request->f5;
        $data->f6 = $request->f6;
        $data->f7 = $request->f7;
        $data->f8 = $request->f8;
        $data->f9 = $request->f9;
        $data->f10 = $request->f10;
        $data->f11 = $request->f11;
        $data->f12 = $request->f12;
        $data->f13 = $request->f13;
        $data->f14 = $request->f14;
        $data->f15 = $request->f15;
        $data->f16 = $request->f16;
        $data->f17 = $request->f17;
        $data->f18 = $request->f18;
        $data->f19 = $request->f19;
        $data->f20 = $request->f20;
        $data->f21 = $request->f21;
        $data->f22 = $request->f22;
        $data->f23 = $request->f23;
        $data->f24 = $request->f24;
        $data->f25 = $request->f25;
        $data->f26 = $request->f26;
        $data->f27 = $request->f27;
        $data->f28 = $request->f28;
        $data->save();
        return redirect('rj_asesmen_awal_tumbuh_kembang_fisioterapi_read');
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
        $this->data['berdasarkan_anjuran']  = $this->yatidak($this->data['berdasarkan_anjuran']);
        $this->data['pernah_jatuh_kecelakaan']  = $this->yatidak($this->data['pernah_jatuh_kecelakaan']);
        $this->data['suka_merokok']  = $this->yatidak($this->data['suka_merokok']);
        $this->data['pernah_keguguran']  = $this->yatidak($this->data['pernah_keguguran']);
        $this->data['dibantu_alat']  = $this->yatidak($this->data['dibantu_alat']);
        $this->data['mengalami_keguguran']  = $this->yatidak($this->data['mengalami_keguguran']);
        $this->data['tempat_belajar_sendiri']  = $this->yatidak($this->data['tempat_belajar_sendiri']);
        $this->data['les']  = $this->yatidak($this->data['les']);

        if($this->data['bekerja_ketika_kasus'] == '1')
        {
            $this->data['bekerja_ketika_kasus'] = 'Bekerja';
        }
        else
        {
            $this->data['bekerja_ketika_kasus'] = 'Tidak Bekerja';
        }

        if( $this->data['tinggal_dengan'] == '1')
        {
           $this->data['tinggal_dengan'] = 'Ayah dan ibu' ;
        }
        elseif ( $this->data['tinggal_dengan'] == '2') 
        {
           $this->data['tinggal_dengan'] = 'Ayah saja' ; 
        }
        elseif ( $this->data['tinggal_dengan'] == '3') 
        {
           $this->data['tinggal_dengan'] = 'Ibu saja' ; 
        }
        else
        {
           $this->data['tinggal_dengan'] = 'Lainnya' ;  
        }

        if( $this->data['status_ayah'] == '1')
        {
           $this->data['status_ayah'] = 'Kawin' ;
        }
        elseif ( $this->data['status_ayah'] == '2') 
        {
           $this->data['status_ayah'] = 'Cerai' ; 
        }
        elseif ( $this->data['status_ayah'] == '3') 
        {
           $this->data['status_ayah'] = 'Berpisah' ; 
        }
        else
        {
           $this->data['status_ayah'] = 'Lainnya' ;  
        }

        if( $this->data['status_ibu'] == '1')
        {
           $this->data['status_ibu'] = 'Kawin' ;
        }
        elseif ( $this->data['status_ibu'] == '2') 
        {
           $this->data['status_ibu'] = 'Cerai' ; 
        }
        elseif ( $this->data['status_ibu'] == '3') 
        {
           $this->data['status_ibu'] = 'Berpisah' ; 
        }
        else
        {
           $this->data['status_ibu'] = 'Lainnya' ;  
        }  

        if( $this->data['proses_kelahiran'] == '1')
        {
           $this->data['proses_kelahiran'] = 'Biasa' ;
        }
        elseif ( $this->data['proses_kelahiran'] == '2') 
        {
           $this->data['proses_kelahiran'] = 'Lama' ; 
        }
        else
        {
           $this->data['proses_kelahiran'] = 'Sukar' ;  
        }

        if( $this->data['kondisi_lahir'] == '1')
        {
           $this->data['kondisi_lahir'] = 'Prematur' ;
        }
        elseif ( $this->data['kondisi_lahir'] == '2') 
        {
           $this->data['kondisi_lahir'] = 'Cukup bulan' ; 
        }
        else
        {
           $this->data['kondisi_lahir'] = 'Lewat bulan' ;  
        }

        if( $this->data['dibantu_oleh'] == '1')
        {
           $this->data['dibantu_oleh'] = 'Dokter' ;
        }
        elseif ( $this->data['dibantu_oleh'] == '2') 
        {
           $this->data['dibantu_oleh'] = 'Bidan' ; 
        }
        else
        {
           $this->data['dibantu_oleh'] = 'Lainnya' ;  
        }

        if( $this->data['waktu_biasa_belajar'] == '1')
        {
           $this->data['waktu_biasa_belajar'] = 'Siang hari' ;
        }
        elseif ( $this->data['waktu_biasa_belajar'] == '2') 
        {
           $this->data['waktu_biasa_belajar'] = 'Sepulang sekolah' ; 
        }
        elseif ( $this->data['waktu_biasa_belajar'] == '3') 
        {
           $this->data['waktu_biasa_belajar'] = 'Sore hari' ; 
        }
        elseif ( $this->data['waktu_biasa_belajar'] == '4') 
        {
           $this->data['waktu_biasa_belajar'] = 'Malam hari' ; 
        }
        else
        {
           $this->data['waktu_biasa_belajar'] = 'Tidak tentu' ;  
        }

        if( $this->data['dibantu_belajar'] == '1')
        {
           $this->data['dibantu_belajar'] = 'Selalu' ;
        }
        elseif ( $this->data['dibantu_belajar'] == '2') 
        {
           $this->data['dibantu_belajar'] = 'Sering' ; 
        }
        elseif ( $this->data['dibantu_belajar'] == '3') 
        {
           $this->data['dibantu_belajar'] = 'Kadang-kadang' ; 
        }
        else
        {
           $this->data['dibantu_belajar'] = 'Tidak pernah' ;  
        }

        if( $this->data['dibantu_belajar_oleh'] == '1')
        {
           $this->data['dibantu_belajar_oleh'] = 'Orang tua' ;
        }
        elseif ( $this->data['dibantu_belajar_oleh'] == '2') 
        {
           $this->data['dibantu_belajar_oleh'] = 'Kakak' ; 
        }
        elseif ( $this->data['dibantu_belajar_oleh'] == '3') 
        {
           $this->data['dibantu_belajar_oleh'] = 'Adik' ; 
        }
        else
        {
           $this->data['dibantu_belajar_oleh'] = 'Lainnya' ;  
        }

        if( $this->data[''] == '')
        {
           $this->data[''] = '' ;
        }
        elseif ( $this->data[''] == '') 
        {
           $this->data[''] = '' ; 
        }
        else
        {
           $this->data[''] = '' ;  
        }

        if( $this->data[''] == '')
        {
           $this->data[''] = '' ;
        }
        elseif ( $this->data[''] == '') 
        {
           $this->data[''] = '' ; 
        }
        else
        {
           $this->data[''] = '' ;  
        }

        if( $this->data[''] == '')
        {
           $this->data[''] = '' ;
        }
        elseif ( $this->data[''] == '') 
        {
           $this->data[''] = '' ; 
        }
        else
        {
           $this->data[''] = '' ;  
        }

        if( $this->data[''] == '')
        {
           $this->data[''] = '' ;
        }
        elseif ( $this->data[''] == '') 
        {
           $this->data[''] = '' ; 
        }
        else
        {
           $this->data[''] = '' ;  
        }
    }

    public function rj_tumbuhkembang_pdf()
    {
        $this->get_rj_asesmen_awal_tumbuh_kembang_dokter_data();
        $this->get_rj_asesmen_awal_tumbuh_kembang_psikolog_data();
        $this->get_rj_asesmen_awal_tumbuh_kembang_psikiatri_data();
        $this->convert();

        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_rj_tumbuhkembang',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 09.00.RJ JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('rj_tumbuhkembang.pdf',\Mpdf\Output\Destination::INLINE);
    }

}