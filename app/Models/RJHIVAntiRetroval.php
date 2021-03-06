<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJHIVAntiRetroval extends Model
{
    protected $table = 'rj_hiv_anti_retroval';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'no_reg_nasional',
        'nik',
        'nama_ibu_kandung',
        'alamat_pasien',
        'no_telp',
        'nama_pmo',
        'hubungan_dengan_pasien',
        'alamat_pmo',
        'no_telp_pmo',
        'tgl_konfirm_tes_hiv',
        'tempat_tes_hiv',
        'entry_point',
        'keterangan_entry_point',
        'riwayat_alergi_obat',
        'pendidikan',
        'pekerjaan',
        'nama_pekerjaan',
        'fr',
        'keterangan_rawat_jalan',
        'keterangan_jangkauan',
        'keterangan_fr_lainnya',
        'status_pernikahan',
        'riwayat_keluarga',
        'pernah_menerima_art',
        'jenis_art',
        'tempat_art_dulu',
        'nama_arv',
        'dosis_arv',
        'lama_penggunaan',
        'tanggal_pkl_1',
        'stad_klinis_pkl_1',
        'bb_pkl_1',
        'status_fungsional_pkl_1',
        'cd4_pkl_1',
        'lain_lain_pkl_1',
        'tanggal_pkl_2',
        'stad_klinis_pkl_2',
        'bb_pkl_2',
        'status_fungsional_pkl_2',
        'cd4_pkl_2',
        'lain_lain_pkl_2',
        'tanggal_pkl_3',
        'stad_klinis_pkl_3',
        'bb_pkl_3',
        'status_fungsional_pkl_3',
        'cd4_pkl_3',
        'lain_lain_pkl_3',
        'tanggal_pkl_4',
        'stad_klinis_pkl_4',
        'bb_pkl_4',
        'status_fungsional_pkl_4',
        'cd4_pkl_4',
        'lain_lain_pkl_4',
        'tanggal_pkl_5',
        'stad_klinis_pkl_5',
        'bb_pkl_5',
        'status_fungsional_pkl_5',
        'cd4_pkl_5',
        'lain_lain_pkl_5',
        'tanggal_pkl_6',
        'stad_klinis_pkl_6',
        'bb_pkl_6',
        'status_fungsional_pkl_6',
        'cd4_pkl_6',
        'lain_lain_pkl_6',
        'terapi_art',
        'alasan_lain_substitusi',
        'alasan_lain_switch',
        'alasan_lain_stop',
        'klasifikasi_tb',
        'ptb',
        'kabupaten_tptb',
        'nama_tptb',
        'noreg_tptb',
        'ttb',
        'tgl_mulai_terapi_tb',
        'tgl_selesai_terapi_tb',
        'ii',

        'tgl_meninggal',
        'tgl_kunjungan_terakhir',
        'tgl_keluar',
        'nama_klinik_baru',
    ];
}
