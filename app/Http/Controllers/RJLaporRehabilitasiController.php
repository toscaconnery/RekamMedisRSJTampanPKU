<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RJLaporRehabilitasi;

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
        $data->id_regis = 1;
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
        $data->sistem_pencernaan = $sistem_pencernaan;

        $jumlah_form_sistem_jantung_pembuluh = $request->jumlah_form_sistem_jantung_pembuluh;
        $sistem_jantung_pembuluh = '';
        for($i = 1; $i <= $jumlah_form_sistem_jantung_pembuluh; $i++) {
            $str_sistem_jantung_pembuluh = 'sistem_jantung_pembuluh_'.$i;
            if(!is_null($request->$str_sistem_jantung_pembuluh)) {
                $sistem_jantung_pembuluh .= $request->$str_sistem_jantung_pembuluh."$&!^@";
            }
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
        $data->sistem_saraf_pusat = $sistem_saraf_pusat;

        $jumlah_form_tht_kulit = $request->jumlah_form_tht_kulit;
        $tht_kulit = '';
        for($i = 1; $i <= $jumlah_form_tht_kulit; $i++) {
            $str_tht_kulit = 'tht_kulit_'.$i;
            if(!is_null($request->$str_tht_kulit)) {
                $tht_kulit .= $request->$str_tht_kulit."$&!^@";
            }
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

        return back();
    }
}