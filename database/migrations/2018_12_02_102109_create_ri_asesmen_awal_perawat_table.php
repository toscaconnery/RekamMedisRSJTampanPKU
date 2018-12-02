<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiAsesmenAwalPerawatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_asesmen_awal_perawat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis',20)->reference('id_pasien')->on('identifikasi');
            $table->string('tanggal_diperiksa',10)->nullable();
            $table->string('jam_diperiksa',8)->nullable();
            $table->string('nadi',10)->nullable();
            $table->string('td',10)->nullable();
            $table->string('napas',10)->nullable();
            $table->string('suhu',10)->nullable();
            $table->string('tb',10)->nullable();
            $table->string('bb',10)->nullable();
            $table->string('kondisi',1)->nullable();
            $table->string('kondisi_ket',100)->nullable();
            $table->string('asal',1)->nullable();
            $table->string('dokter_pemeriksa',50)->nullable();
            $table->string('dokter_keluarga',50)->nullable();
            $table->string('diagnosis_masuk',50)->nullable();
            $table->string('dpjp',50)->nullable();
            $table->string('alergi')->nullable();
            $table->string('jenis_reaksi',150)->nullable();
            $table->string('barang',5)->nullable();
            $table->string('deskripsi_barang_berharga',150)->nullable();
            $table->string('tindak',3)->nullable();
            $table->string('tindakan_barang',150)->nullable();
            $table->string('alat',9)->nullable();
            $table->string('alat_bantu_lainnya',150)->nullable();
            $table->string('friwayatpasien1',40)->nullable();
            $table->string('friwayatpasien2',150)->nullable();
            $table->string('friwayatpasien3',1)->nullable();
            $table->string('friwayatpasien4',150)->nullable();
            $table->string('friwayatpasien5',150)->nullable();
            $table->string('friwayatpasien6',1)->nullable();        //0 1 manual
            $table->string('friwayatpasien7',1)->nullable();
            $table->string('friwayatpasien8',150)->nullable();
            $table->string('friwayatpasien9',150)->nullable();
            $table->string('friwayatpasien10',1)->nullable();         //0 1 manual
            $table->string('friwayatpasien11',1)->nullable();
            $table->string('friwayatpasien12',1)->nullable();
            $table->string('friwayatpasien13',150)->nullable();
            $table->string('friwayatpasien14',150)->nullable();
            $table->string('friwayatpasien15',150)->nullable();
            $table->string('friwayatpasien16',150)->nullable();
            $table->string('friwayatpasien17',150)->nullable();
            $table->string('friwayatpasien18',150)->nullable();
            $table->string('friwayatpasien19',150)->nullable();
            $table->string('friwayatpasien20',150)->nullable();
            $table->string('friwayatpasien21',150)->nullable();
            $table->string('friwayatpasien22',150)->nullable();
            $table->string('friwayatpasien23',150)->nullable();
            $table->string('friwayatpasien24',150)->nullable();
            $table->string('friwayatpasien25',150)->nullable();
            $table->string('friwayatpasien26',150)->nullable();
            $table->string('friwayatpasien27',150)->nullable();
            $table->string('friwayatpasien28',150)->nullable();
            $table->string('friwayatpasien29',150)->nullable();
            $table->string('friwayatpasien30',150)->nullable();
            $table->string('friwayatpasien31',150)->nullable();
            $table->string('friwayatpasien32',150)->nullable();
            $table->string('friwayatpasien33',150)->nullable();
            $table->string('friwayatkeluarga',40)->nullable();
            $table->string('friwayatpsikososial1',1)->nullable();
            $table->string('friwayatpsikososial2',1)->nullable();
            $table->string('friwayatpsikososial3',1)->nullable();
            $table->string('friwayatpsikososial4',1)->nullable();
            $table->string('friwayatpsikososial5',150)->nullable();
            $table->string('friwayatpsikososial6',1)->nullable();
            $table->string('friwayatpsikososial7',150)->nullable();
            $table->string('friwayatpsikososial8',1)->nullable();
            $table->string('friwayatpsikososial9',1)->nullable();
            $table->string('friwayatpsikososial10',1)->nullable();      //0 1 manual
            $table->string('friwayatpsikososial11',1)->nullable();      //0 1 manual
            $table->string('friwayatpsikososial12',1)->nullable();      //0 1 manual
            $table->string('friwayatpsikososial13',1)->nullable();      //0 1 manual
            $table->string('friwayatpsikososial14',1)->nullable();      //0 1 manual
            $table->string('fkeluarga1',150)->nullable();
            $table->string('fkeluarga2',150)->nullable();
            $table->string('fkeluarga3',1)->nullable();
            $table->string('fkonsepdiri1',150)->nullable();
            $table->string('fkonsepdiri2',150)->nullable();
            $table->string('fkonsepdiri3',150)->nullable();
            $table->string('fkonsepdiri4',150)->nullable();
            $table->string('fkonsepdiri5',150)->nullable();
            $table->string('fhubungansosial1',150)->nullable();
            $table->string('fhubungansosial2',150)->nullable();
            $table->string('fhubungansosial3',150)->nullable();
            $table->string('fspiritual1',150)->nullable();
            $table->string('fspiritual2',150)->nullable();
            $table->string('fpenampilan1',5)->nullable();
            $table->string('fpenampilan_ket',150)->nullable();
            $table->string('fpembicaraan',15)->nullable();
            $table->string('fpembicaraan_ket')->nullable();
            $table->string('faktivitasmotorik',20)->nullable();
            $table->string('faktivitasmotorik_ket',150)->nullable();
            $table->string('falamperasaan',11)->nullable();
            $table->string('falamperasaan_ket',150)->nullable();
            $table->string('fafek',7)->nullable();
            $table->string('fafek_ket',150)->nullable();
            $table->string('finteraksi',11)->nullable();
            $table->string('finteraksi_ket',150)->nullable();
            $table->string('fpersepsi',11)->nullable();
            $table->string('fpersepsi_ket')->nullable();
            $table->string('fisikpikir',33)->nullable();
            $table->string('fisikpikir_ket',150)->nullable();
            $table->string('faruspikir',11)->nullable();
            $table->string('faruspikir_ket',150)->nullable();
            $table->string('fmemori',7)->nullable();
            $table->string('fmemori_ket',150)->nullable();
            $table->string('fkonsentrasi',5)->nullable();
            $table->string('fkonsentrasi_ket',150)->nullable();
            $table->string('fkemampuanpenilaian',3)->nullable();
            $table->string('fkemampuanpenilaian_ket',150)->nullable();
            $table->string('fdaya',3)->nullable();
            $table->string('fdaya_ket',150)->nullable();
            $table->string('fpengajaran',23)->nullable();
            $table->string('fkomunikasi1',150)->nullable();
            $table->string('fkomunikasi2',1)->nullable();
            $table->string('fkomunikasi3',150)->nullable();
            $table->string('fkomunikasi4',1)->nullable();
            $table->string('fkomunikasi5',1)->nullable();
            $table->string('fkomunikasi6',150)->nullable();
            $table->string('fkomunikasi7',1)->nullable();
            $table->string('fkomunikasi8',150)->nullable();
            $table->string('fkomunikasi9',1)->nullable();
            $table->string('fkomunikasi10',26)->nullable();
            $table->string('fkomunikasi11',11)->nullable();
            $table->string('fkomunikasi12',1)->nullable();
            $table->string('fkomunikasi13',1)->nullable();
            $table->string('fkomunikasi14',150)->nullable();
            $table->string('fgizi1',150)->nullable();
            $table->string('fgizi2',150)->nullable();
            $table->string('fresikojatuh1',10)->nullable();
            $table->string('fresikojatuh2',8)->nullable();
            $table->string('jenis_resiko_jatuh',15)->nullable();
            $table->string('fnyeri1',1)->nullable();
            $table->string('fnyeri2',2)->nullable();
            $table->string('fnyeri3')->nullable();
            $table->string('fnyeri4',150)->nullable();
            $table->string('fnyeri5',150)->nullable();
            $table->string('fnyeri6',1)->nullable();
            $table->string('fnyeri7',1)->nullable();
            $table->string('fnyeri8',150)->nullable();
            $table->string('fnyeri9',1)->nullable();
            $table->string('fnyeri10',150)->nullable();
            $table->string('fnyeri11',1)->nullable();
            $table->string('fnyeri12',150)->nullable();
            $table->string('fnyeri13',13)->nullable();
            $table->string('fnyeri14')->nullable();
            $table->string('fdiagnosaumum',32)->nullable();
            $table->string('fdiagnosaumum_ket',150)->nullable();
            $table->string('fdiagnosajiwa',26)->nullable();
            $table->string('fdiagnosajiwa_ket',150)->nullable();
            $table->string('tanggal',10)->nullable();
            $table->string('jam',8)->nullable();
            $table->string('nama_perawat',150)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ri_asesmen_awal_perawat');
    }
}
