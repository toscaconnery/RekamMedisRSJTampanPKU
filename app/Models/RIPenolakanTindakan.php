<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIPenolakanTindakan extends Model
{
    protected $table = 'ri_penolakan_tindakan';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'dokter_pelaksana_tindakan',
		'pemberian_informasi',
		'penerima_informasi',
		'jenis_informasi_1',
		'check_informasi_1',
		'jenis_informasi_2',
		'check_informasi_2',
		'jenis_informasi_3',
		'check_informasi_3',
		'jenis_informasi_4',
		'check_informasi_4',
		'jenis_informasi_5',
		'check_informasi_5',
		'jenis_informasi_6',
		'check_informasi_6',
		'jenis_informasi_7',
		'check_informasi_7',
		'jenis_informasi_8',
		'check_informasi_8',
		'jenis_informasi_9',
		'check_informasi_9',
		'jenis_informasi_10',
		'check_informasi_10',
		'jenis_informasi_11',
		'check_informasi_11',
		'nama',
		'umur',
		'jk',
		'tindakan',
		'terhadap',
		'umur_terhadap',
		'jk_terhadap',
		'alamat_terhadap',
		'tanggal',
		'waktu',
		'yang_menyatakan',
		'saksi',
    ];
}
