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
use Session;

class RJAsesmenAwalTumbuhKembangController extends Controller
{
    public function __construct()
    {
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
        if(Session::has('id_pasien')) {
            $id_pasien = Session::get('id_pasien');
        }
        else {
            $id_pasien = 1;
        }
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
    	if($request->tinggal_dengan == "Lainnya") {
    		$anak->tinggal_dengan = $request->tinggal_dengan_lainnya;
    	}
    	else {
    		$anak->tinggal_dengan = $request->tinggal_dengan;
    	}
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
    	if($request->status_ayah == "Lainnya") {
    		$ayah->status = $request->status_ayah_lainnya;
    	}
    	else {
    		$ayah->status = $request->status_ayah;
    	}
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
    	if($request->status_ayah == "Lainnya") {
    		$ibu->status = $request->status_ibu_lainnya;
    	}
    	else {
    		$ibu->status = $request->status_ibu;
    	}
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
    	if($request->berdasarkan_anjuran == 'true') {
    		$riwayat->berdasarkan_anjuran = True;
    	}
    	else {
    		$riwayat->berdasarkan_anjuran = False;
    	}
    	if($request->pernah_jatuh_kecelakaan == 'true') {
    		$riwayat->pernah_jatuh_kecelakaan = True;
    		$riwayat->usia_jatuh_kecelakaan = $request->usia_jatuh_kecelakaan;
    	}
    	else {
    		$riwayat->pernah_jatuh_kecelakaan = False;
    	}
    	if($request->suka_merokok == 'true') {
    		$riwayat->suka_merokok = True;
    	}
    	else {
    		$riwayat->suka_merokok = False;
    	}
    	if($request->pernah_keguguran == 'true') {
    		$riwayat->pernah_keguguran = True;
    		$riwayat->jumlah_keguguran = $request->jumlah_keguguran;
    	}
    	$riwayat->usia_ketika_kasus = $request->usia_ketika_kasus;
    	if($request->bekerja_ketika_kasus == 'true') {
    		$riwayat->bekerja_ketika_kasus = True;
    	}
    	else {
    		$riwayat->bekerja_ketika_kasus = False;
    	}
    	$riwayat->save();

    	//riwayat persalinan natal
    	$riwayat = new RJTumbuhKembangRiwayatPersalinanNatal;
    	$riwayat->id_regis = $id_pasien;
    	$riwayat->proses_kelahiran = $request->proses_kelahiran;
    	if($request->dibantu_alat == 'true') {
    		$riwayat->dibantu_alat = True;
    		$riwayat->alat_bantu = $request->alat_bantu;
    	}
    	else {
    		$riwayat->dibantu_alat = False;
    	}
    	if($request->mengalami_keguguran == 'true') {
    		$riwayat->mengalami_keguguran = True;
    		$riwayat->keterangan_keguguran = $request->keterangan_keguguran;
    	}
    	else {
    		$riwayat->mengalami_keguguran = False;
    	}
    	$riwayat->kondisi_lahir = $request->kondisi_lahir;
    	if($request->dibantu_oleh == 'Lainnya') {
    		$riwayat->dibantu_oleh = $request->dibantu_oleh_lainnya;
    	}
    	else {
    		$riwayat->dibantu_oleh = $request->dibantu_oleh;
    	}
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
    	$riwayat->sikap = 1;
    	$riwayat->keterampilan_motorik_awal = $request->keterampilan_motorik_awal;
    	$riwayat->hasil_belajar_anak = $request->hasil_belajar_anak;
    	$riwayat->pelajaran_disenangi = $request->pelajaran_disenangi;
    	$riwayat->pelajaran_sulit = $request->pelajaran_sulit;
    	$riwayat->keluhan_di_pelajaran_sulit = $request->keluhan_di_pelajaran_sulit;
    	if($request->tempat_belajar_sendiri == 'true') {
    		$riwayat->tempat_belajar_sendiri = True;
    	}
    	else {
    		$riwayat->tempat_belajar_sendiri = False;
    	}
    	$riwayat->waktu_biasa_belajar = $request->waktu_biasa_belajar;
    	$riwayat->dibantu_belajar = $request->dibantu_belajar;
    	if($request->dibantu_belajar_oleh == 'Lainnya') {
    		$riwayat->dibantu_belajar_oleh = $request->dibantu_belajar_oleh_lainnya;
    	}
    	else {
    		$riwayat->dibantu_belajar_oleh = $request->dibantu_belajar_oleh;
    	}
    	$riwayat->sikap_di_kegiatan = $request->sikap_di_kegiatan;
    	if($request->les == 'true') {
    		$riwayat->les = True;
    	}
    	else {
    		$riwayat->les = False;
    	}
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

    public function post_rj_asesmen_awal_tumbuh_kembang_dokter(Request $request)
    {
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
        // dd($request);
        $data->save();

        return back();
    }

}