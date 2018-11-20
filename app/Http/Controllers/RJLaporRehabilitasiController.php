<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJLaporRehabilitasi;
use App\Models\ListDocument;
use Session;
use View;

class RJLaporRehabilitasiController extends Controller
{
	public function __construct()
	{
		$this->data['title'] = 'Asesmen Wajib Lapor Dan Rehabilitasi Medis';
	}

    public function get_rj_lapor_rehabilitasi()
    {
    	return view('page.rj.lapor_rehabilitasi', $this->data);
    }

    public function post_rj_lapor_rehabilitasi(Request $request)
    {
        $data = new RJLaporRehabilitasi;
        $id_pasien = Session::get('id_pasien');
        $data->id_regis = $id_pasien;
        $data->tanggal_kedatangan = $request->tanggal_kedatangan;
        $data->alamat = $request->alamat;
        $data->telp = $request->telp;
        $data->status_perkawinan = $request->status_perkawinan;
        $data->pendidikan_terakhir = $request->pendidikan_terakhir;
        //penyakit menyertai
        $jumlah_penyakit_menyertai = $request->jumlah_form;
        $penyakit_menyertai = '';
        for($i = 1; $i <= $jumlah_penyakit_menyertai; $i++) {
            $str_jenis_penyakit = 'jenis_penyakit_'.$i;
            $str_tahun_dirawat = 'tahun_dirawat_'.$i;
            $str_lama_dirawat = 'lama_dirawat_'.$i;
            if(!is_null($request->$str_jenis_penyakit)) {
                $penyakit_menyertai .= $request->$str_jenis_penyakit."-&!^-".$request->$str_tahun_dirawat."-&!^-".$request->$str_lama_dirawat."$&!^@";
            }
        }
        if(strlen($penyakit_menyertai) > 0) {
            $penyakit_menyertai = substr($penyakit_menyertai, 0, -5);
        }
        $data->penyakit_menyertai = $penyakit_menyertai;
        $data->riwayat_penyakit_kronis = $request->riwayat_penyakit_kronis;
        $data->jenis_penyakit_kronis = $request->jenis_penyakit_kronis;
        $data->sedang_terapi = $request->sedang_terapi;
        $data->jenis_terapi_dijalani = $request->jenis_terapi_dijalani;
        $data->hiv = $request->hiv;
        $data->hepatitis_b = $request->hepatitis_b;
        $data->hepatitis_c = $request->hepatitis_c;
        $data->status_pekerjaan = $request->status_pekerjaan;
        $data->pola_pekerjaan = $request->pola_pekerjaan;
        $data->kode_pekerjaan = $request->kode_pekerjaan;
        $data->keterampilan_teknis = $request->keterampilan_teknis;
        $data->pemberi_dukungan = $request->pemberi_dukungan;
        $data->nama_pemberi_dukungan = $request->nama_pemberi_dukungan;
        if(isset($request->dukungan_finansial)) {
            $data->dukungan_finansial = 1;
        } else {
            $data->dukungan_finansial = 0;
        }
        if(isset($request->dukungan_tempat_tinggal)) {
            $data->dukungan_tempat_tinggal = 1;
        } else {
            $data->dukungan_tempat_tinggal = 0;
        }
        if(isset($request->dukungan_makan)) {
            $data->dukungan_makan = 1;
        } else {
            $data->dukungan_makan = 0;
        }
        if(isset($request->dukungan_pengobatan)) {
            $data->dukungan_pengobatan = 1;
        } else {
            $data->dukungan_pengobatan = 0;
        }

        $data->p_alkohol = $request->p_alkohol;
        $data->l_alkohol = $request->l_alkohol;
        $data->c_alkohol = $request->c_alkohol;
        
        $data->p_heroin = $request->p_heroin;
        $data->l_heroin = $request->l_heroin;
        $data->c_heroin = $request->c_heroin;
        
        $data->p_metadon = $request->p_metadon;
        $data->l_metadon = $request->l_metadon;
        $data->c_metadon = $request->c_metadon;
        
        $data->p_analgesik = $request->p_analgesik;
        $data->l_analgesik = $request->l_analgesik;
        $data->c_analgesik = $request->c_analgesik;
        
        $data->p_barbiturat = $request->p_barbiturat;
        $data->l_barbiturat = $request->l_barbiturat;
        $data->c_barbiturat = $request->c_barbiturat;
        
        $data->p_sedatif = $request->p_sedatif;
        $data->l_sedatif = $request->l_sedatif;
        $data->c_sedatif = $request->c_sedatif;
        
        $data->p_kokain = $request->p_kokain;
        $data->l_kokain = $request->l_kokain;
        $data->c_kokain = $request->c_kokain;

        $data->p_amfetamin = $request->p_amfetamin;
        $data->l_amfetamin = $request->l_amfetamin;
        $data->c_amfetamin = $request->c_amfetamin;

        $data->p_kanabis = $request->p_kanabis;
        $data->l_kanabis = $request->l_kanabis;
        $data->c_kanabis = $request->c_kanabis;

        $data->p_halusinogen = $request->p_halusinogen;
        $data->l_halusinogen = $request->l_halusinogen;
        $data->c_halusinogen = $request->c_halusinogen;

        $data->p_inhalan = $request->p_inhalan;
        $data->l_inhalan = $request->l_inhalan;
        $data->c_inhalan = $request->c_inhalan;

        $data->p_lebih_dari_satu = $request->p_lebih_dari_satu;
        $data->l_lebih_dari_satu = $request->l_lebih_dari_satu;

        $data->zat_utama_disalahgunakan = $request->zat_utama_disalahgunakan;

        $data->terapi_rehabilitasi = $request->terapi_rehabilitasi;
        $data->jenis_terapi_rehabilitasi = $request->jenis_terapi_rehabilitasi;
        $data->overdosis = $request->overdosis;
        $data->keterangan_overdosis = $request->keterangan_overdosis;
        $data->waktu_overdosis = $request->waktu_overdosis;
        $data->cara_penanggulangan_overdosis = $request->cara_penanggulangan_overdosis;

        $data->ilegal_1 = $request->ilegal_1;
        $data->ilegal_2 = $request->ilegal_2;
        $data->ilegal_3 = $request->ilegal_3;
        $data->ilegal_4 = $request->ilegal_4;
        $data->ilegal_5 = $request->ilegal_5;
        $data->ilegal_6 = $request->ilegal_6;
        $data->ilegal_7 = $request->ilegal_7;
        $data->ilegal_8 = $request->ilegal_8;
        $data->ilegal_9 = $request->ilegal_9;
        $data->ilegal_10 = $request->ilegal_10;
        $data->ilegal_11 = $request->ilegal_11;
        $data->ilegal_12 = $request->ilegal_12;
        $data->ilegal_13 = $request->ilegal_13;
        $data->ilegal_14 = $request->ilegal_14;
        $data->vonis_ilegal = $request->vonis_ilegal;

        $data->tiga_tahun_belakangan = $request->tiga_tahun_belakangan;
        $data->hidup_dengan_pengguna = $request->hidup_dengan_pengguna;
        if(isset($request->saudara_pengguna)) {
            $data->saudara_pengguna = True;
        }
        if(isset($request->ortu_pengguna)) {
            $data->ortu_pengguna = True;
        }
        if(isset($request->pasangan_pengguna)) {
            $data->pasangan_pengguna = True;
        }
        if(isset($request->om_tante_pengguna)) {
            $data->om_tante_pengguna = True;
        }
        if(isset($request->teman_pengguna)) {
            $data->teman_pengguna = True;
        }
        if(isset($request->lainnya_pengguna)) {
            $data->lainnya_pengguna = True;
        }
        $data->keterangan_lainnya_pengguna = $request->keterangan_lainnya_pengguna;

        $data->konflik_ibu = $request->konflik_ibu;
        $data->keterangan_konflik_ibu = $request->keterangan_konflik_ibu;
        
        $data->konflik_ayah = $request->konflik_ayah;
        $data->keterangan_konflik_ayah = $request->keterangan_konflik_ayah;
        
        $data->konflik_adik_kakak = $request->konflik_adik_kakak;
        $data->keterangan_konflik_adik_kakak = $request->keterangan_konflik_adik_kakak;
        
        $data->konflik_pasangan = $request->konflik_pasangan;
        $data->keterangan_konflik_pasangan = $request->keterangan_konflik_pasangan;
        
        $data->konflik_anak = $request->konflik_anak;
        $data->keterangan_konflik_anak = $request->keterangan_konflik_anak;
        
        $data->konflik_keluarga = $request->konflik_keluarga;
        $data->keterangan_konflik_keluarga = $request->keterangan_konflik_keluarga;
        $data->subjek_konflik_keluarga = $request->subjek_konflik_keluarga;
        
        $data->konflik_teman = $request->konflik_teman;
        $data->keterangan_konflik_teman = $request->keterangan_konflik_teman;
        
        $data->konflik_tetangga = $request->konflik_tetangga;
        $data->keterangan_konflik_tetangga = $request->keterangan_konflik_tetangga;
        
        $data->konflik_kantor = $request->konflik_kantor;
        $data->keterangan_konflik_kantor = $request->keterangan_konflik_kantor;

        $data->psikiatris_1 = $request->psikiatris_1; 
        $data->keterangan_psikiatris_1 = $request->keterangan_psikiatris_1;
        $data->psikiatris_2 = $request->psikiatris_2; 
        $data->keterangan_psikiatris_2 = $request->keterangan_psikiatris_2;
        $data->psikiatris_3 = $request->psikiatris_3; 
        $data->keterangan_psikiatris_3 = $request->keterangan_psikiatris_3;
        $data->psikiatris_4 = $request->psikiatris_4;
        $data->keterangan_psikiatris_4 = $request->keterangan_psikiatris_4;
        $data->psikiatris_5 = $request->psikiatris_5;
        $data->keterangan_psikiatris_5 = $request->keterangan_psikiatris_5;
        $data->psikiatris_6 = $request->psikiatris_6;
        $data->keterangan_psikiatris_6 = $request->keterangan_psikiatris_6;
        $data->psikiatris_7 = $request->psikiatris_7;
        $data->keterangan_psikiatris_7 = $request->keterangan_psikiatris_7;
        $data->psikiatris_8 = $request->psikiatris_8;
        $data->keterangan_psikiatris_8 = $request->keterangan_psikiatris_8;

        $data->tekanan_darah = $request->tekanan_darah;
        $data->nadi = $request->nadi;
        $data->pernapasan = $request->pernapasan;
        $data->suhu = $request->suhu;

        $jumlah_form_sistem_pencernaan = $request->jumlah_form_sistem_pencernaan;
        $sistem_pencernaan = '';
        for($i = 1; $i <= $jumlah_form_sistem_pencernaan; $i++) {
            $str_sistem_pencernaan = 'sistem_pencernaan_'.$i;
            if(!is_null($request->$str_sistem_pencernaan)) {
                $sistem_pencernaan .= $request->$str_sistem_pencernaan."$&!^@";
            }
        }
        if(strlen($sistem_pencernaan) > 0) {
            $sistem_pencernaan = substr($sistem_pencernaan, 0, -5);
        }
        $data->sistem_pencernaan = $sistem_pencernaan;

        $jumlah_form_sistem_jantung_pembuluh = $request->jumlah_form_sistem_jantung_pembuluh;
        $sistem_jantung_pembuluh = '';
        for($i = 1; $i <= $jumlah_form_sistem_jantung_pembuluh; $i++) {
            $str_sistem_jantung_pembuluh = 'sistem_jantung_pembuluh_'.$i;
            if(!is_null($request->$str_sistem_jantung_pembuluh)) {
                $sistem_jantung_pembuluh .= $request->$str_sistem_jantung_pembuluh."$&!^@";
            }
        }
        if(strlen($sistem_jantung_pembuluh) > 0) {
            $sistem_jantung_pembuluh = substr($sistem_jantung_pembuluh, 0, -5);
        }
        $data->sistem_jantung_pembuluh = $sistem_jantung_pembuluh;

        $jumlah_form_sistem_saraf_pusat = $request->jumlah_form_sistem_saraf_pusat;
        $sistem_saraf_pusat = '';
        for($i = 1; $i <= $jumlah_form_sistem_saraf_pusat; $i++) {
            $str_sistem_saraf_pusat = 'sistem_saraf_pusat_'.$i;
            if(!is_null($request->$str_sistem_saraf_pusat)) {
                $sistem_saraf_pusat .= $request->$str_sistem_saraf_pusat."$&!^@";
            }
        }
        if(strlen($sistem_saraf_pusat) > 0) {
            $sistem_saraf_pusat = substr($sistem_saraf_pusat, 0, -5);
        }
        $data->sistem_saraf_pusat = $sistem_saraf_pusat;

        $jumlah_form_tht_kulit = $request->jumlah_form_tht_kulit;
        $tht_kulit = '';
        for($i = 1; $i <= $jumlah_form_tht_kulit; $i++) {
            $str_tht_kulit = 'tht_kulit_'.$i;
            if(!is_null($request->$str_tht_kulit)) {
                $tht_kulit .= $request->$str_tht_kulit."$&!^@";
            }
        }
        if(strlen($tht_kulit) > 0) {
            $tht_kulit = substr($tht_kulit, 0, -5);
        }
        $data->tht_kulit = $tht_kulit;

        $jumlah_form_keterangan = $request->jumlah_form_keterangan;
        $keterangan = '';
        for($i = 1; $i <= $jumlah_form_keterangan; $i++) {
            $str_keterangan = 'keterangan_'.$i;
            if(!is_null($request->$str_keterangan)) {
                $keterangan .= $request->$str_keterangan."$&!^@";
            }
        }
        if(strlen($keterangan) > 0) {
            $keterangan = substr($keterangan, 0, -5);
        }
        $data->keterangan = $keterangan;

        $hasil_urinalis = '';
        if(isset($request->hasil_urinalis_1)) {
            $hasil_urinalis .= '1-';
        }
        if(isset($request->hasil_urinalis_2)) {
            $hasil_urinalis .= '2-';
        }
        if(isset($request->hasil_urinalis_3)) {
            $hasil_urinalis .= '3-';
        }
        if(isset($request->hasil_urinalis_4)) {
            $hasil_urinalis .= '4-';
        }
        if(isset($request->hasil_urinalis_5)) {
            $hasil_urinalis .= '5-';
        }
        if(isset($request->hasil_urinalis_6)) {
            $hasil_urinalis .= '6-';
        }
        if(isset($request->hasil_urinalis_7)) {
            $hasil_urinalis .= '7-';
        }
        if(strlen($hasil_urinalis) > 0) {
            $hasil_urinalis = substr($hasil_urinalis, 0, -1);
        }
        $data->hasil_urinalis = $hasil_urinalis;

        $data->medis = $request->medis;
        $data->pekerjaan_dukungan = $request->pekerjaan_dukungan;
        $data->napza = $request->napza;
        $data->legal = $request->legal;
        $data->keluarga_sosial = $request->keluarga_sosial;
        $data->psikiatris = $request->psikiatris;
        $data->kriteria_napza = $request->kriteria_napza;
        $data->diagnosis_lainnya = $request->diagnosis_lainnya;
        $data->resume_masalah = $request->resume_masalah;
        $data->rencana_tindak_lanjut = $request->rencana_tindak_lanjut;
        $data->rencana_tindak_lanjut_lainnya = $request->rencana_tindak_lanjut_lainnya;
        $data->nama_dokter = $request->nama_dokter;
        $data->save();

        $daftar_dokumen = ListDocument::where('id_regis', $id_pasien)->get()->first();
        $daftar_dokumen->rj_lapor_rehabilitasi = True;
        $daftar_dokumen->save();

        return back();
    }

    public function get_rj_lapor_rehabilitasi_data()
    {
        $pasien = RJLaporRehabilitasi::where('id', 1)->first();

        $this->data['id_regis'] = $pasien->id_regis;
        $this->data['tanggal_kedatangan'] = $pasien->tanggal_kedatangan;
        $this->data['alamat'] = $pasien->alamat;
        $this->data['telp'] = $pasien->telp;
        $this->data['status_perkawinan'] = $pasien->status_perkawinan;
        $this->data['pendidikan_terakhir'] = $pasien->pendidikan_terakhir;
        
        $all_penyakit_menyertai = $pasien->penyakit_menyertai;
        $this->data['ada_penyakit_menyertai'] = False;
        $penyakit_menyertai = '';
        if(strlen($pasien->penyakit_menyertai) > 0) {
            $this->data['ada_penyakit_menyertai'] = True;
            $all_penyakit_menyertai = explode("$&!^@", $all_penyakit_menyertai);
            $penyakit_menyertai = array();
            foreach($all_penyakit_menyertai as $key => $value) {
                $penyakit_menyertai[$key] = array();
                $exploded = explode("-&!^-", $value);
                foreach ($exploded as $key2 => $value2) {
                    $penyakit_menyertai[$key][$key2] = $value2;
                }
            }
        }
        $this->data['penyakit_menyertai'] = $penyakit_menyertai;
        $this->data['riwayat_penyakit_kronis'] = $pasien->riwayat_penyakit_kronis;
        $this->data['jenis_penyakit_kronis'] = $pasien->jenis_penyakit_kronis;
        $this->data['sedang_terapi'] = $pasien->sedang_terapi;
        $this->data['jenis_terapi_dijalani'] = $pasien->jenis_terapi_dijalani;
        $this->data['hiv'] = $pasien->hiv;
        $this->data['hepatitis_b'] = $pasien->hepatitis_b;
        $this->data['hepatitis_c'] = $pasien->hepatitis_c;

        $this->data['status_pekerjaan'] = $pasien->status_pekerjaan;
        $this->data['pola_pekerjaan'] = $pasien->pola_pekerjaan;
        $this->data['kode_pekerjaan'] = $pasien->kode_pekerjaan;
        $this->data['keterampilan_teknis'] = $pasien->keterampilan_teknis;
        $this->data['pemberi_dukungan'] = $pasien->pemberi_dukungan;
        $this->data['nama_pemberi_dukungan'] = $pasien->nama_pemberi_dukungan;
        $this->data['dukungan_finansial'] = $pasien->dukungan_finansial;
        $this->data['dukungan_tempat_tinggal'] = $pasien->dukungan_tempat_tinggal;
        $this->data['dukungan_makan'] = $pasien->dukungan_makan;
        $this->data['dukungan_pengobatan'] = $pasien->dukungan_pengobatan;

        $this->data['p_alkohol'] = $pasien->p_alkohol;
        $this->data['l_alkohol'] = $pasien->l_alkohol;
        $this->data['c_alkohol'] = $pasien->c_alkohol;

        $this->data['p_heroin'] = $pasien->p_heroin;
        $this->data['l_heroin'] = $pasien->l_heroin;
        $this->data['c_heroin'] = $pasien->c_heroin;

        $this->data['p_metadon'] = $pasien->p_metadon;
        $this->data['l_metadon'] = $pasien->l_metadon;
        $this->data['c_metadon'] = $pasien->c_metadon;

        $this->data['p_analgesik'] = $pasien->p_analgesik;
        $this->data['l_analgesik'] = $pasien->l_analgesik;
        $this->data['c_analgesik'] = $pasien->c_analgesik;
        
        $this->data['p_barbiturat'] = $pasien->p_barbiturat;
        $this->data['l_barbiturat'] = $pasien->l_barbiturat;
        $this->data['c_barbiturat'] = $pasien->c_barbiturat;

        $this->data['p_sedatif'] = $pasien->p_sedatif;
        $this->data['l_sedatif'] = $pasien->l_sedatif;
        $this->data['c_sedatif'] = $pasien->c_sedatif;

        $this->data['p_kokain'] = $pasien->p_kokain;
        $this->data['l_kokain'] = $pasien->l_kokain;
        $this->data['c_kokain'] = $pasien->c_kokain;

        $this->data['p_amfetamin'] = $pasien->p_amfetamin;
        $this->data['l_amfetamin'] = $pasien->l_amfetamin;
        $this->data['c_amfetamin'] = $pasien->c_amfetamin;

        $this->data['p_kanabis'] = $pasien->p_kanabis;
        $this->data['l_kanabis'] = $pasien->l_kanabis;
        $this->data['c_kanabis'] = $pasien->c_kanabis;

        $this->data['p_halusinogen'] = $pasien->p_halusinogen;
        $this->data['l_halusinogen'] = $pasien->l_halusinogen;
        $this->data['c_halusinogen'] = $pasien->c_halusinogen;

        $this->data['p_inhalan'] = $pasien->p_inhalan;
        $this->data['l_inhalan'] = $pasien->l_inhalan;
        $this->data['c_inhalan'] = $pasien->c_inhalan;

        $this->data['p_lebih_dari_satu'] = $pasien->p_lebih_dari_satu;
        $this->data['l_lebih_dari_satu'] = $pasien->l_lebih_dari_satu;

        $this->data['zat_utama_disalahgunakan'] = $pasien->zat_utama_disalahgunakan;
        $this->data['terapi_rehabilitasi'] = $pasien->terapi_rehabilitasi;
        $this->data['jenis_terapi_rehabilitasi'] = $pasien->jenis_terapi_rehabilitasi;
        $this->data['overdosis'] = $pasien->overdosis;
        $this->data['keterangan_overdosis'] = $pasien->keterangan_overdosis;
        $this->data['waktu_overdosis'] = $pasien->waktu_overdosis;
        $this->data['cara_penanggulangan_overdosis'] = $pasien->cara_penanggulangan_overdosis;

        $this->data['ilegal_1'] = $pasien->ilegal_1;
        $this->data['ilegal_2'] = $pasien->ilegal_2;
        $this->data['ilegal_3'] = $pasien->ilegal_3;
        $this->data['ilegal_4'] = $pasien->ilegal_4;
        $this->data['ilegal_5'] = $pasien->ilegal_5;
        $this->data['ilegal_6'] = $pasien->ilegal_6;
        $this->data['ilegal_7'] = $pasien->ilegal_7;
        $this->data['ilegal_8'] = $pasien->ilegal_8;
        $this->data['ilegal_9'] = $pasien->ilegal_9;
        $this->data['ilegal_10'] = $pasien->ilegal_10;
        $this->data['ilegal_11'] = $pasien->ilegal_11;
        $this->data['ilegal_12'] = $pasien->ilegal_12;
        $this->data['ilegal_13'] = $pasien->ilegal_13;
        $this->data['ilegal_14'] = $pasien->ilegal_14;
        $this->data['vonis_ilegal'] = $pasien->vonis_ilegal;
        $this->data['tiga_tahun_belakangan'] = $pasien->tiga_tahun_belakangan;
        $this->data['hidup_dengan_pengguna'] = $pasien->hidup_dengan_pengguna;
        $this->data['saudara_pengguna'] = $pasien->saudara_pengguna;
        $this->data['ortu_pengguna'] = $pasien->ortu_pengguna;
        $this->data['pasangan_pengguna'] = $pasien->pasangan_pengguna;
        $this->data['om_tante_pengguna'] = $pasien->om_tante_pengguna;
        $this->data['teman_pengguna'] = $pasien->teman_pengguna;
        $this->data['lainnya_pengguna'] = $pasien->lainnya_pengguna;
        $this->data['keterangan_lainnya_pengguna'] = $pasien->keterangan_lainnya_pengguna;
        
        $this->data['konflik_ibu'] = $pasien->konflik_ibu;
        $this->data['keterangan_konflik_ibu'] = $pasien->keterangan_konflik_ibu;
        $this->data['konflik_ayah'] = $pasien->konflik_ayah;
        $this->data['keterangan_konflik_ayah'] = $pasien->keterangan_konflik_ayah;
        $this->data['konflik_adik_kakak'] = $pasien->konflik_adik_kakak;
        $this->data['keterangan_konflik_adik_kakak'] = $pasien->keterangan_konflik_adik_kakak;
        $this->data['konflik_pasangan'] = $pasien->konflik_pasangan;
        $this->data['keterangan_konflik_pasangan'] = $pasien->keterangan_konflik_pasangan;
        $this->data['konflik_anak'] = $pasien->konflik_anak;
        $this->data['keterangan_konflik_anak'] = $pasien->keterangan_konflik_anak;
        $this->data['konflik_keluarga'] = $pasien->konflik_keluarga;
        $this->data['keterangan_konflik_keluarga'] = $pasien->keterangan_konflik_keluarga;
        $this->data['subjek_konflik_keluarga'] = $pasien->subjek_konflik_keluarga;
        $this->data['konflik_teman'] = $pasien->konflik_teman;
        $this->data['keterangan_konflik_teman'] = $pasien->keterangan_konflik_teman;
        $this->data['konflik_tetangga'] = $pasien->konflik_tetangga;
        $this->data['keterangan_konflik_tetangga'] = $pasien->keterangan_konflik_tetangga;
        $this->data['konflik_kantor'] = $pasien->konflik_kantor;
        $this->data['keterangan_konflik_kantor'] = $pasien->keterangan_konflik_kantor;

        $this->data['psikiatris_1'] = $pasien->psikiatris_1;
        $this->data['keterangan_psikiatris_1'] = $pasien->keterangan_psikiatris_1;
        $this->data['psikiatris_2'] = $pasien->psikiatris_2;
        $this->data['keterangan_psikiatris_2'] = $pasien->keterangan_psikiatris_2;
        $this->data['psikiatris_3'] = $pasien->psikiatris_3;
        $this->data['keterangan_psikiatris_3'] = $pasien->keterangan_psikiatris_3;
        $this->data['psikiatris_4'] = $pasien->psikiatris_4;
        $this->data['keterangan_psikiatris_4'] = $pasien->keterangan_psikiatris_4;
        $this->data['psikiatris_5'] = $pasien->psikiatris_5;
        $this->data['keterangan_psikiatris_5'] = $pasien->keterangan_psikiatris_5;
        $this->data['psikiatris_6'] = $pasien->psikiatris_6;
        $this->data['keterangan_psikiatris_6'] = $pasien->keterangan_psikiatris_6;
        $this->data['psikiatris_7'] = $pasien->psikiatris_7;
        $this->data['keterangan_psikiatris_7'] = $pasien->keterangan_psikiatris_7;
        $this->data['psikiatris_8'] = $pasien->psikiatris_8;
        $this->data['keterangan_psikiatris_8'] = $pasien->keterangan_psikiatris_8;

        $this->data['tekanan_darah'] = $pasien->tekanan_darah;
        $this->data['nadi'] = $pasien->nadi;
        $this->data['pernapasan'] = $pasien->pernapasan;
        $this->data['suhu'] = $pasien->suhu;
        
        $all_sistem_pencernaan = $pasien->sistem_pencernaan;
        $sistem_pencernaan = '';
        $this->data['ada_sistem_pencernaan'] = False;
        if(strlen($all_sistem_pencernaan) > 0) {
            $this->data['ada_sistem_pencernaan'] = True;
            $sistem_pencernaan = explode("$&!^@" , $all_sistem_pencernaan);
        }
        $this->data['sistem_pencernaan'] = $sistem_pencernaan;

        $all_sistem_jantung_pembuluh = $pasien->sistem_jantung_pembuluh;
        $sistem_jantung_pembuluh = '';
        $this->data['ada_sistem_jantung_pembuluh'] = False;
        if(strlen($all_sistem_jantung_pembuluh) > 0) {
            $this->data['ada_sistem_jantung_pembuluh'] = True;
            $sistem_jantung_pembuluh = explode("$&!^@", $all_sistem_jantung_pembuluh);
        }
        $this->data['sistem_jantung_pembuluh'] = $sistem_jantung_pembuluh;

        $all_sistem_saraf_pusat = $pasien->sistem_saraf_pusat;
        $sistem_saraf_pusat = '';
        $this->data['ada_sistem_saraf_pusat'] = False;
        if(strlen($all_sistem_saraf_pusat) > 0) {
            $this->data['ada_sistem_saraf_pusat'] = True;
            $sistem_saraf_pusat = explode("$&!^@", $all_sistem_saraf_pusat);
        }
        $this->data['sistem_saraf_pusat'] = $sistem_saraf_pusat;

        $all_tht_kulit = $pasien->tht_kulit;
        $tht_kulit = '';
        $this->data['ada_tht_kulit'] = False;
        if(strlen($all_tht_kulit) > 0) {
            $this->data['ada_tht_kulit'] = True;
            $tht_kulit = explode("$&!^@", $all_tht_kulit);
        }
        $this->data['tht_kulit'] = $tht_kulit;
        
        $all_keterangan = $pasien->keterangan;
        $keterangan = '';
        $this->data['ada_keterangan'] = False;
        if(strlen($all_keterangan) > 0) {
            $this->data['ada_keterangan'] = True;
            $keterangan = explode("$&!^@", $all_keterangan);
        }
        $this->data['keterangan'] = $keterangan;

        $hasil_urinalis = array();
        if(strlen($pasien->hasil_urinalis) > 0) {
            $hasil_urinalis = explode("-", $pasien->hasil_urinalis);
        }
        $this->data['hasil_urinalis'] = array();
        foreach($hasil_urinalis as $key => $value) {
            $this->data['hasil_urinalis'][$value] = True;
        }

        $this->data['medis'] = $pasien->medis;
        $this->data['pekerjaan_dukungan'] = $pasien->pekerjaan_dukungan;
        $this->data['napza'] = $pasien->napza;
        $this->data['legal'] = $pasien->legal;
        $this->data['keluarga_sosial'] = $pasien->keluarga_sosial;
        $this->data['psikiatris'] = $pasien->psikiatris;
        $this->data['kriteria_napza'] = $pasien->kriteria_napza;
        $this->data['diagnosis_lainnya'] = $pasien->diagnosis_lainnya;
        $this->data['resume_masalah'] = $pasien->resume_masalah;
        $this->data['rencana_tindak_lanjut'] = $pasien->rencana_tindak_lanjut;
        $this->data['rencana_tindak_lanjut_lainnya'] = $pasien->rencana_tindak_lanjut_lainnya;
        $this->data['nama_dokter'] = $pasien->nama_dokter;
    }

    public function get_rj_lapor_rehabilitasi_read()
    {
        $this->get_rj_lapor_rehabilitasi_data();
        return view('page.rj.lapor_rehabilitasi_read', $this->data);
    }

    public function get_rj_lapor_rehabilitasi_edit()
    {
        $this->get_rj_lapor_rehabilitasi_data();
        return view('page.rj.lapor_rehabilitasi_edit', $this->data);
    }

    public function post_rj_lapor_rehabilitasi_edit(Request $request)
    {
        $id_pasien = Session::get('id_pasien');
        $data = RJLaporRehabilitasi::where('id_regis', $id_pasien)->first();
        $data->id_regis = $id_pasien;
        $data->tanggal_kedatangan = $request->tanggal_kedatangan;
        $data->alamat = $request->alamat;
        $data->telp = $request->telp;
        $data->status_perkawinan = $request->status_perkawinan;
        $data->pendidikan_terakhir = $request->pendidikan_terakhir;
        //penyakit menyertai
        $jumlah_penyakit_menyertai = $request->jumlah_form;
        $penyakit_menyertai = '';
        for($i = 1; $i <= $jumlah_penyakit_menyertai; $i++) {
            $str_jenis_penyakit = 'jenis_penyakit_'.$i;
            $str_tahun_dirawat = 'tahun_dirawat_'.$i;
            $str_lama_dirawat = 'lama_dirawat_'.$i;
            if(!is_null($request->$str_jenis_penyakit)) {
                $penyakit_menyertai .= $request->$str_jenis_penyakit."-&!^-".$request->$str_tahun_dirawat."-&!^-".$request->$str_lama_dirawat."$&!^@";
            }
        }
        if(strlen($penyakit_menyertai) > 0) {
            $penyakit_menyertai = substr($penyakit_menyertai, 0, -5);
        }
        $data->penyakit_menyertai = $penyakit_menyertai;
        $data->riwayat_penyakit_kronis = $request->riwayat_penyakit_kronis;
        $data->jenis_penyakit_kronis = $request->jenis_penyakit_kronis;
        $data->sedang_terapi = $request->sedang_terapi;
        $data->jenis_terapi_dijalani = $request->jenis_terapi_dijalani;
        $data->hiv = $request->hiv;
        $data->hepatitis_b = $request->hepatitis_b;
        $data->hepatitis_c = $request->hepatitis_c;
        $data->status_pekerjaan = $request->status_pekerjaan;
        $data->pola_pekerjaan = $request->pola_pekerjaan;
        $data->kode_pekerjaan = $request->kode_pekerjaan;
        $data->keterampilan_teknis = $request->keterampilan_teknis;
        $data->pemberi_dukungan = $request->pemberi_dukungan;
        $data->nama_pemberi_dukungan = $request->nama_pemberi_dukungan;
        if(isset($request->dukungan_finansial)) {
            $data->dukungan_finansial = 1;
        } else {
            $data->dukungan_finansial = 0;
        }
        if(isset($request->dukungan_tempat_tinggal)) {
            $data->dukungan_tempat_tinggal = 1;
        } else {
            $data->dukungan_tempat_tinggal = 0;
        }
        if(isset($request->dukungan_makan)) {
            $data->dukungan_makan = 1;
        } else {
            $data->dukungan_makan = 0;
        }
        if(isset($request->dukungan_pengobatan)) {
            $data->dukungan_pengobatan = 1;
        } else {
            $data->dukungan_pengobatan = 0;
        }

        $data->p_alkohol = $request->p_alkohol;
        $data->l_alkohol = $request->l_alkohol;
        $data->c_alkohol = $request->c_alkohol;
        
        $data->p_heroin = $request->p_heroin;
        $data->l_heroin = $request->l_heroin;
        $data->c_heroin = $request->c_heroin;
        
        $data->p_metadon = $request->p_metadon;
        $data->l_metadon = $request->l_metadon;
        $data->c_metadon = $request->c_metadon;
        
        $data->p_analgesik = $request->p_analgesik;
        $data->l_analgesik = $request->l_analgesik;
        $data->c_analgesik = $request->c_analgesik;
        
        $data->p_barbiturat = $request->p_barbiturat;
        $data->l_barbiturat = $request->l_barbiturat;
        $data->c_barbiturat = $request->c_barbiturat;
        
        $data->p_sedatif = $request->p_sedatif;
        $data->l_sedatif = $request->l_sedatif;
        $data->c_sedatif = $request->c_sedatif;
        
        $data->p_kokain = $request->p_kokain;
        $data->l_kokain = $request->l_kokain;
        $data->c_kokain = $request->c_kokain;

        $data->p_amfetamin = $request->p_amfetamin;
        $data->l_amfetamin = $request->l_amfetamin;
        $data->c_amfetamin = $request->c_amfetamin;

        $data->p_kanabis = $request->p_kanabis;
        $data->l_kanabis = $request->l_kanabis;
        $data->c_kanabis = $request->c_kanabis;

        $data->p_halusinogen = $request->p_halusinogen;
        $data->l_halusinogen = $request->l_halusinogen;
        $data->c_halusinogen = $request->c_halusinogen;

        $data->p_inhalan = $request->p_inhalan;
        $data->l_inhalan = $request->l_inhalan;
        $data->c_inhalan = $request->c_inhalan;

        $data->p_lebih_dari_satu = $request->p_lebih_dari_satu;
        $data->l_lebih_dari_satu = $request->l_lebih_dari_satu;

        $data->zat_utama_disalahgunakan = $request->zat_utama_disalahgunakan;

        $data->terapi_rehabilitasi = $request->terapi_rehabilitasi;
        $data->jenis_terapi_rehabilitasi = $request->jenis_terapi_rehabilitasi;
        $data->overdosis = $request->overdosis;
        $data->keterangan_overdosis = $request->keterangan_overdosis;
        $data->waktu_overdosis = $request->waktu_overdosis;
        $data->cara_penanggulangan_overdosis = $request->cara_penanggulangan_overdosis;

        $data->ilegal_1 = $request->ilegal_1;
        $data->ilegal_2 = $request->ilegal_2;
        $data->ilegal_3 = $request->ilegal_3;
        $data->ilegal_4 = $request->ilegal_4;
        $data->ilegal_5 = $request->ilegal_5;
        $data->ilegal_6 = $request->ilegal_6;
        $data->ilegal_7 = $request->ilegal_7;
        $data->ilegal_8 = $request->ilegal_8;
        $data->ilegal_9 = $request->ilegal_9;
        $data->ilegal_10 = $request->ilegal_10;
        $data->ilegal_11 = $request->ilegal_11;
        $data->ilegal_12 = $request->ilegal_12;
        $data->ilegal_13 = $request->ilegal_13;
        $data->ilegal_14 = $request->ilegal_14;
        $data->vonis_ilegal = $request->vonis_ilegal;

        $data->tiga_tahun_belakangan = $request->tiga_tahun_belakangan;
        $data->hidup_dengan_pengguna = $request->hidup_dengan_pengguna;
        if(isset($request->saudara_pengguna)) {
            $data->saudara_pengguna = True;
        }
        if(isset($request->ortu_pengguna)) {
            $data->ortu_pengguna = True;
        }
        if(isset($request->pasangan_pengguna)) {
            $data->pasangan_pengguna = True;
        }
        if(isset($request->om_tante_pengguna)) {
            $data->om_tante_pengguna = True;
        }
        if(isset($request->teman_pengguna)) {
            $data->teman_pengguna = True;
        }
        if(isset($request->lainnya_pengguna)) {
            $data->lainnya_pengguna = True;
        }
        $data->keterangan_lainnya_pengguna = $request->keterangan_lainnya_pengguna;

        $data->konflik_ibu = $request->konflik_ibu;
        $data->keterangan_konflik_ibu = $request->keterangan_konflik_ibu;
        
        $data->konflik_ayah = $request->konflik_ayah;
        $data->keterangan_konflik_ayah = $request->keterangan_konflik_ayah;
        
        $data->konflik_adik_kakak = $request->konflik_adik_kakak;
        $data->keterangan_konflik_adik_kakak = $request->keterangan_konflik_adik_kakak;
        
        $data->konflik_pasangan = $request->konflik_pasangan;
        $data->keterangan_konflik_pasangan = $request->keterangan_konflik_pasangan;
        
        $data->konflik_anak = $request->konflik_anak;
        $data->keterangan_konflik_anak = $request->keterangan_konflik_anak;
        
        $data->konflik_keluarga = $request->konflik_keluarga;
        $data->keterangan_konflik_keluarga = $request->keterangan_konflik_keluarga;
        $data->subjek_konflik_keluarga = $request->subjek_konflik_keluarga;
        
        $data->konflik_teman = $request->konflik_teman;
        $data->keterangan_konflik_teman = $request->keterangan_konflik_teman;
        
        $data->konflik_tetangga = $request->konflik_tetangga;
        $data->keterangan_konflik_tetangga = $request->keterangan_konflik_tetangga;
        
        $data->konflik_kantor = $request->konflik_kantor;
        $data->keterangan_konflik_kantor = $request->keterangan_konflik_kantor;

        $data->psikiatris_1 = $request->psikiatris_1; 
        $data->keterangan_psikiatris_1 = $request->keterangan_psikiatris_1;
        $data->psikiatris_2 = $request->psikiatris_2; 
        $data->keterangan_psikiatris_2 = $request->keterangan_psikiatris_2;
        $data->psikiatris_3 = $request->psikiatris_3; 
        $data->keterangan_psikiatris_3 = $request->keterangan_psikiatris_3;
        $data->psikiatris_4 = $request->psikiatris_4;
        $data->keterangan_psikiatris_4 = $request->keterangan_psikiatris_4;
        $data->psikiatris_5 = $request->psikiatris_5;
        $data->keterangan_psikiatris_5 = $request->keterangan_psikiatris_5;
        $data->psikiatris_6 = $request->psikiatris_6;
        $data->keterangan_psikiatris_6 = $request->keterangan_psikiatris_6;
        $data->psikiatris_7 = $request->psikiatris_7;
        $data->keterangan_psikiatris_7 = $request->keterangan_psikiatris_7;
        $data->psikiatris_8 = $request->psikiatris_8;
        $data->keterangan_psikiatris_8 = $request->keterangan_psikiatris_8;

        $data->tekanan_darah = $request->tekanan_darah;
        $data->nadi = $request->nadi;
        $data->pernapasan = $request->pernapasan;
        $data->suhu = $request->suhu;

        $jumlah_form_sistem_pencernaan = $request->jumlah_form_sistem_pencernaan;
        $sistem_pencernaan = '';
        for($i = 1; $i <= $jumlah_form_sistem_pencernaan; $i++) {
            $str_sistem_pencernaan = 'sistem_pencernaan_'.$i;
            if(!is_null($request->$str_sistem_pencernaan)) {
                $sistem_pencernaan .= $request->$str_sistem_pencernaan."$&!^@";
            }
        }
        if(strlen($sistem_pencernaan) > 0) {
            $sistem_pencernaan = substr($sistem_pencernaan, 0, -5);
        }
        $data->sistem_pencernaan = $sistem_pencernaan;

        $jumlah_form_sistem_jantung_pembuluh = $request->jumlah_form_sistem_jantung_pembuluh;
        $sistem_jantung_pembuluh = '';
        for($i = 1; $i <= $jumlah_form_sistem_jantung_pembuluh; $i++) {
            $str_sistem_jantung_pembuluh = 'sistem_jantung_pembuluh_'.$i;
            if(!is_null($request->$str_sistem_jantung_pembuluh)) {
                $sistem_jantung_pembuluh .= $request->$str_sistem_jantung_pembuluh."$&!^@";
            }
        }
        if(strlen($sistem_jantung_pembuluh) > 0) {
            $sistem_jantung_pembuluh = substr($sistem_jantung_pembuluh, 0, -5);
        }
        $data->sistem_jantung_pembuluh = $sistem_jantung_pembuluh;

        $jumlah_form_sistem_saraf_pusat = $request->jumlah_form_sistem_saraf_pusat;
        $sistem_saraf_pusat = '';
        for($i = 1; $i <= $jumlah_form_sistem_saraf_pusat; $i++) {
            $str_sistem_saraf_pusat = 'sistem_saraf_pusat_'.$i;
            if(!is_null($request->$str_sistem_saraf_pusat)) {
                $sistem_saraf_pusat .= $request->$str_sistem_saraf_pusat."$&!^@";
            }
        }
        if(strlen($sistem_saraf_pusat) > 0) {
            $sistem_saraf_pusat = substr($sistem_saraf_pusat, 0, -5);
        }
        $data->sistem_saraf_pusat = $sistem_saraf_pusat;

        $jumlah_form_tht_kulit = $request->jumlah_form_tht_kulit;
        $tht_kulit = '';
        for($i = 1; $i <= $jumlah_form_tht_kulit; $i++) {
            $str_tht_kulit = 'tht_kulit_'.$i;
            if(!is_null($request->$str_tht_kulit)) {
                $tht_kulit .= $request->$str_tht_kulit."$&!^@";
            }
        }
        if(strlen($tht_kulit) > 0) {
            $tht_kulit = substr($tht_kulit, 0, -5);
        }
        $data->tht_kulit = $tht_kulit;

        $jumlah_form_keterangan = $request->jumlah_form_keterangan;
        $keterangan = '';
        for($i = 1; $i <= $jumlah_form_keterangan; $i++) {
            $str_keterangan = 'keterangan_'.$i;
            if(!is_null($request->$str_keterangan)) {
                $keterangan .= $request->$str_keterangan."$&!^@";
            }
        }
        if(strlen($keterangan) > 0) {
            $keterangan = substr($keterangan, 0, -5);
        }
        $data->keterangan = $keterangan;

        $hasil_urinalis = '';
        if(isset($request->hasil_urinalis_1)) {
            $hasil_urinalis .= '1-';
        }
        if(isset($request->hasil_urinalis_2)) {
            $hasil_urinalis .= '2-';
        }
        if(isset($request->hasil_urinalis_3)) {
            $hasil_urinalis .= '3-';
        }
        if(isset($request->hasil_urinalis_4)) {
            $hasil_urinalis .= '4-';
        }
        if(isset($request->hasil_urinalis_5)) {
            $hasil_urinalis .= '5-';
        }
        if(isset($request->hasil_urinalis_6)) {
            $hasil_urinalis .= '6-';
        }
        if(isset($request->hasil_urinalis_7)) {
            $hasil_urinalis .= '7-';
        }
        if(strlen($hasil_urinalis) > 0) {
            $hasil_urinalis = substr($hasil_urinalis, 0, -1);
        }
        $data->hasil_urinalis = $hasil_urinalis;

        $data->medis = $request->medis;
        $data->pekerjaan_dukungan = $request->pekerjaan_dukungan;
        $data->napza = $request->napza;
        $data->legal = $request->legal;
        $data->keluarga_sosial = $request->keluarga_sosial;
        $data->psikiatris = $request->psikiatris;
        $data->kriteria_napza = $request->kriteria_napza;
        $data->diagnosis_lainnya = $request->diagnosis_lainnya;
        $data->resume_masalah = $request->resume_masalah;
        $data->rencana_tindak_lanjut = $request->rencana_tindak_lanjut;
        $data->rencana_tindak_lanjut_lainnya = $request->rencana_tindak_lanjut_lainnya;
        $data->nama_dokter = $request->nama_dokter;
        $data->save();

        return redirect('daftar_dokumen');
    }

    public function rj_lapor_rehabilitasi_pdf()
    {
        $this->get_rj_lapor_rehabilitasi_data();
        ob_clean();

        header('Content-type: application/pdf');

        $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => 'A4-P', 
        'orientation' => 'P'
        ]);

        $view = View::make('doc_rj_lapor_rehabilitasi',$this->data);
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
                    <td width="33%" style="text-align: right;">RM. 04.00.RJ JULI 2015</td>
                </tr>
            </table>'); 

        $stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';

        $mpdf->AddPage('P','','','','',10,10,35,20,10,10);
        //right,left
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents,2,true,false);

        $mpdf->Output('rj_lapor_rehabilitasi.pdf',\Mpdf\Output\Destination::INLINE);
    }
}