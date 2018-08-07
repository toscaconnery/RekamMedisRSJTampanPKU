<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerkembanganPasienIGD extends Model
{
    protected $table = 'perkembangan_pasien_igd';

    protected $primaryKey = 'id_perkembangan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
    	'id_regis', 'identifikasi', 'id_user', 'waktu', 'hasil_pemeriksaan', 'status_verifikasi',
    ];
}
