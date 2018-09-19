<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenundaanPelayanan extends Model
{
    protected $table = 'penundaan_pelayanan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'nama',
        'umur',
        'hubungan',
        'poli_ruangan',
        'dokter_pengirim',
        'pelayanan_akan_dilakukan',
        'dokter_berhalangan',
        'kerusakan_alat',
        'pemberian_obat_farmasi',
        'hasil_pemeriksaan_radiologi',
        'hasil_pemeriksaan_laboratorium',
        'sebab_lainnya',
        'alternatif',
        'jadwal_penundaan',
        'rs_tujuan',
    ];
}