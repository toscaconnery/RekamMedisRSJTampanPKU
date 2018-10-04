<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RIMonitoringObservasi extends Model
{
    protected $table = 'ri_monitoring_observasi';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_regis',
        'tanggal',
        'jam',
        'hasil_observasi',
        'implementasi',
        'ttd',
    ];
}
