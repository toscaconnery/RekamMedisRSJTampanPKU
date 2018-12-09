<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RJAntiretrovalFollowUp extends Model
{
    protected $table = 'rj_antiretroval_follow_up';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tgl_kunjungan_follow_up',
        'rencana_tgl_kunjungan',
        'prm',
        'drt',
        'nama_klinik_sebelumnya',
        'bbf',
        'tbf',
        'sfu',
        'stad_klinis',
        'hkb',
        'mkb',
        'infop',
        'keterangan_infop',
        'obat_untuk_io',
        'stb',
        'ppk',
        'inh',
        'hkr',
        'obat_arv',
        'sisa_obat',
        'adr',
        'esart',
        'keterangan_esart',
        'jumlah_cd4',
        'hasil_lab',
        'dkr',
        'jumlah_kondom',
        'rsmrs',
        'fll',
    ];
}
