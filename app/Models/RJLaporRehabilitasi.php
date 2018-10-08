<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJLaporRehabilitasi extends Model
{
    protected $table = 'rj_lapor_rehabilitasi';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tanggal_kedatangan',
        'alamat',
        'telp',
        'status_perkawinan',
        'pendidikan_terakhir',
        
        'penyakit_menyertai',
        'riwayat_penyakit_kronis',
        'jenis_penyakit_kronis',
        'sedang_terapi',
        'jenis_terapi_dijalani',
        'hiv',
        'hepatitis_b',
        'hepatitis_c',

        'status_pekerjaan',
        'pola_pekerjaan',
        'kode_pekerjaan',
        'keterampilan_teknis',
        'pemberi_dukungan',
        'nama_pemberi_dukungan',
        'dukungan_finansial',
        'dukungan_tempat_tinggal',
        'dukungan_makan',
        'dukungan_pengobatan',

        'p_alkohol',
        'l_alkohol',
        'c_alkohol',

        'p_heroin',
        'l_heroin',
        'c_heroin',

        'p_metadon',
        'l_metadon',
        'c_metadon',

        'p_analgesik',
        'l_analgesik',
        'c_analgesik',
        
        'p_barbiturat',
        'l_barbiturat',
        'c_barbiturat',

        'p_sedatif',
        'l_sedatif',
        'c_sedatif',

        'p_kokain',
        'l_kokain',
        'c_kokain',

        'p_amfetamin',
        'l_amfetamin',
        'c_amfetamin',

        'p_kanabis',
        'l_kanabis',
        'c_kanabis',

        'p_halusinogen',
        'l_halusinogen',
        'c_halusinogen',

        'p_inhalan',
        'l_inhalan',
        'c_inhalan',

        'p_lebih_dari_satu',
        'l_lebih_dari_satu',

        'zat_utama_disalahgunakan',
        'terapi_rehabilitasi',
        'jenis_terapi_rehabilitasi',
        'overdosis',
        'keterangan_overdosis',
        'waktu_overdosis',
        'cara_penanggulangan_overdosis',

        'ilegal_1',
        'ilegal_2',
        'ilegal_3',
        'ilegal_4',
        'ilegal_5',
        'ilegal_6',
        'ilegal_7',
        'ilegal_8',
        'ilegal_9',
        'ilegal_10',
        'ilegal_11',
        'ilegal_12',
        'ilegal_13',
        'ilegal_14',
        'vonis_ilegal',
        'tiga_tahun_belakangan',
        'hidup_dengan_pengguna',
        'saudara_pengguna',
        'ortu_pengguna',
        'pasangan_pengguna',
        'om_tante_pengguna',
        'teman_pengguna',
        'lainnya_pengguna',
        'keterangan_lainnya_pengguna',
        
        'konflik_ibu',
        'keterangan_konflik_ibu',
        'konflik_ayah',
        'keterangan_konflik_ayah',
        'konflik_adik_kakak',
        'keterangan_konflik_adik_kakak',
        'konflik_pasangan',
        'keterangan_konflik_pasangan',
        'konflik_anak',
        'keterangan_konflik_anak',
        'konflik_keluarga',
        'keterangan_konflik_keluarga',
        'subjek_konflik_keluarga',
        'konflik_teman',
        'keterangan_konflik_teman',
        'konflik_tetangga',
        'keterangan_konflik_tetangga',
        'konflik_kantor',
        'keterangan_konflik_kantor',

        'psikiatris_1',
        'keterangan_psikiatris_1',
        'psikiatris_2',
        'keterangan_psikiatris_2',
        'psikiatris_3',
        'keterangan_psikiatris_3',
        'psikiatris_4',
        'keterangan_psikiatris_4',
        'psikiatris_5',
        'keterangan_psikiatris_5',
        'psikiatris_6',
        'keterangan_psikiatris_6',
        'psikiatris_7',
        'keterangan_psikiatris_7',
        'psikiatris_8',
        'keterangan_psikiatris_8',

        'tekanan_darah',
        'nadi',
        'pernapasan',
        'suhu',
        'sistem_pencernaan',
        'sistem_jantung_pembuluh',
        'sistem_saraf_pusat',
        'tht_kulit',
        'keterangan',
        'hasil_urinalis',

        'medis',
        'pekerjaan_dukungan',
        'napza',
        'legal',
        'keluarga_sosial',
        'psikiatris',
        'kriteria_napza',
        'diagnosis_lainnya',
        'resume_masalah',
        'rencana_tindak_lanjut',
        'rencana_tindak_lanjut_lainnya',
        'nama_dokter',
    ];
}
