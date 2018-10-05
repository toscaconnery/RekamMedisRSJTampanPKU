<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIEdukasi extends Model
{
    protected $table = 'ri_edukasi';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'medis_materi',
        'medis_metode',
        'medis_nama_edukator',
        'medis_paraf_pasien',
        'medis_paraf_edukator',

        'mj_materi',
        'mj_metode',
        'mj_nama_edukator',
        'mj_paraf_pasien',
        'mj_paraf_edukator',

        'psikologis_materi',
        'psikologis_metode',
        'psikologis_nama_edukator',
        'psikologis_paraf_pasien',
        'psikologis_paraf_edukator',

        'keperawatan_materi',
        'keperawatan_metode',
        'keperawatan_nama_edukator',
        'keperawatan_paraf_pasien',
        'keperawatan_paraf_edukator',

        'farmasi_materi',
        'farmasi_metode',
        'farmasi_nama_edukator',
        'farmasi_paraf_pasien',
        'farmasi_paraf_edukator',

        'nutrisi_materi',
        'nutrisi_metode',
        'nutrisi_nama_edukator',
        'nutrisi_paraf_pasien',
        'nutrisi_paraf_edukator',

        'kerohanian_materi',
        'kerohanian_metode',
        'kerohanian_nama_edukator',
        'kerohanian_paraf_pasien',
        'kerohanian_paraf_edukator',

        'rehabilitasi_materi',
        'rehabilitasi_metode',
        'rehabilitasi_nama_edukator',
        'rehabilitasi_paraf_pasien',
        'rehabilitasi_paraf_edukator',

        'dt_materi',
        'dt_metode',
        'td_evaluasi',
        'dt_nama_edukator',
        'dt_paraf_pasien',
        'dt_paraf_edukator',
    ];
}
