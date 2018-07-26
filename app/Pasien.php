<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'pasien';

    protected $primary_key = 'id'

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'nama', 'tanggal_lahir', 'jenis_kelamin', 'pernikahan', 'agama', 'pendidikan', 'pekerjaan', 'bahasa', 'nama_ayah', 'nama_ibu', 'suku', 'alamat', 'rt', 'rw', 'telepon', 'perubahan_alamat', 'nama_pj', 'alamat_pj', 'hubungan_pj', 'telepon_pj',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}


$table->increments('id');
            $table->string('nama');
            $table->string('tanggal_lahir');
            $table->smallInteger('jenis_kelamin');
            $table->string('pernikahan');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('bahasa');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('suku');
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('telepon');
            $table->string('perubahan_alamat')->nullable();
            $table->string('nama_pj');
            $table->string('alamat_pj');
            $table->string('hubungan_pj');
            $table->string('telepon_pj')
            $table->timestamps();