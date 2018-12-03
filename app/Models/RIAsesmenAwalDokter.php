<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIAsesmenAwalDokter extends Model
{
    protected $table = 'ri_asesmen_awal_dokter';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
		'tanggal_diperiksa',
		'jam_diperiksa',
		'anamnesa',
		'anamnesa1',
		'anamnesa2',
		'anamnesa3',
		'anamnesa4',
		'anamnesa5',
		'anamnesa6',
		'anamnesa7',
		'anamnesa8',
		'psikiatri1',
		'psikiatri2',
		'psikiatri3',
		'psikiatri4',
		'psikiatri5',
		'psikiatri6',
		'psikiatri7',
		'psikiatri8',
		'psikiatri9',
		'psikiatri10',
		'psikiatri11',
		'psikiatri12',
		'psikiatri13',
		'psikiatri14',
		'psikiatri15',
		'psikiatri16',
		'psikiatri17',
		'psikiatri18',
		'psikiatri19',
		'penunjang1',
		'penunjang2',
		'penunjang3',
		'penunjang4',
		'penilaian1',
		'penilaian2',
		'diagnosis1',
		'diagnosis2',
		'diagnosis3',
		'diagnosis4',
		'diagnosis5',
		'rencana1',
		'rencana2',
		'rencana3',
		'instruksi1',
		'Instruksi2',
		'Instruksi3',
		'instruksi4',
		'instruksi5',
		'instruksi6',
		'instruksi7',
		'instruksi8',
		'tanggal',
		'jam',
		'nama_dokter',
    ];
}
