<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.headscript')
</head>

<body>
  <section id="container" class="">
    @include('layouts.header')
    @include('layouts.sidebar')
  </section>
  <!-- container section start -->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL PASIEN RAWAT DARURAT</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Asesmen Awal Pasien Rawat Darurat
            </header>

            <table class="table table-striped table-advance table-hover">
              <tbody>
                <tr>
                  <th><i class="icon_document_alt"></i> Dokumen</th>
                  <th><i class="icon_calendar"></i> Tanggal Pengisian</th>
                  <th><i class="icon_profile"></i> Pengisi</th>
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
                <tr>
                  <td>Asesmen Awal Pasien Rawat Darurat</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal form-validate" method="post" id="register_form" action="igd_asesmen_awal_rawat_darurat_perawat">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Data Medis
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Kedatangan</label>
                  <div class="col-sm-2">
                    <input id="dp1" type="text" value="{{date("m-d-Y")}}" class="form-control required" name="tanggal_kedatangan">
                  </div>
                  <label class="col-sm-2 control-label">Jam Kedatangan</label>
                  <div class="col-sm-2">
                  <input type="time" class="form-control required" name="jam_kedatangan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Cara Datang</label>
                  <div class="col-sm-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="cara_datang" value="Datang sendiri">
                        Datang sendiri
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="cara_datang" value="Diantar">
                        Diantar
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Transportasi ke IGD</label>
                  <div class="col-sm-6">
                    <div class="radio">
                      <label>
                        <input type="radio" name="transportasi_ke_igd" value="Kendaraan Pribadi">
                        Kendaraan Pribadi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="transportasi_ke_igd" value="Ambulance">
                        Ambulance
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="transportasi_ke_igd" value="Angkutan Umum">
                        Angkutan Umum
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="transportasi_ke_igd" value="Lainnya">
                        Lainnya
                      </label>
                    </div>

                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Rujukan dari</label>
                  <div class="col-sm-6">
                    <div class="radio">
                      <label>
                        <input type="radio" name="rujukan_dari" value="Puskesmas/Dokter Keluarga" >
                        Puskesmas/Dokter Keluarga
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio"name="rujukan_dari" value="Rumah Sakit" >
                        Rumah Sakit
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Rumah Sakit</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_rumah_sakit">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Dikirim ke IGD</label>
                  <div class="col-sm-6">
                    <div class="radio">
                      <label>
                        <input type="radio" name="visum" name="" value="true" >
                        Dengan disertai VISUM ET REPERTUM PSIKIATRIKUM
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="visum" name="" value="false" >
                        Tidak disertai VISUM ET REPERTUM PSIKIATRIKUM
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Macam Kasus</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="macam_kasus_1">
                        Jiwa
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="macam_kasus_2">
                        KLL
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="macam_kasus_3">
                        KDRT
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="macam_kasus_4">
                        Kecelakaan Kerja
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="macam_kasus_5">
                        Stroke
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="macam_kasus_6">
                        Trauma
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="macam_kasus_7">
                        Non Trauma
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="macam_kasus_8">
                        Kekerasaan Anak
                      </label>
                    </div>
                  </div>
                </div>
                <h3>Keadaan Pra Hospital</h3>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tensi</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control required" name="tensi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nadi</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control required" name="nadi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pernafasan</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control required" name="pernafasan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Suhu</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control required" name="suhu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">TB</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control required" name="tb">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">BB</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control required" name="bb">
                  </div>
                </div>
                <h3>GCS</h3>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">E</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control required" name="e">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">V</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control required" name="v">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">M</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control required" name="m">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindakan Pra Hospital</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tindakan_pra_hospital_1">
                        CPR/RJP
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tindakan_pra_hospital_2">
                        O2
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tindakan_pra_hospital_3">
                        Infus
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tindakan_pra_hospital_4">
                        NGT
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tindakan_pra_hospital_5">
                        ETT
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tindakan_pra_hospital_6">
                        Bebat Tekan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tindakan_pra_hospital_7">
                        Bidai
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tindakan_pra_hospital_8">
                        Kateter Urin
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tindakan_pra_hospital_9">
                        Lain-lain
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tindakan_pra_hospital_10">
                        Obat-Obatan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tindakan_pra_hospital_lain">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Daftar Obat-obatan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="daftar_obat_obatan">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Alasan Kunjungan
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Alasan Kunjungan</label>
                  <div class="col-sm-10">
                    <textarea class="form-control required" name="alasan_kunjungan" rows="3" style="resize: none;"></textarea>
                  </div>
                </div>
              </div>
            </section>


            <section class="panel">
              <header class="panel-heading">
                Screening Gizi
              </header>
              <div class="panel-body">
                <div class="panel panel-primary">
                  <div class="panel-heading">DEWASA</div>
                  <div class="panel-content" style="font-size: 6mm;">Berdasarkan Malnutrition Universal Screening Tool (MUST)</div>
                </div>
                <div class="form-group" id="must_1_form">
                  <label class="col-lg-12" style="font-size: 6mm;">Apakah pasien mengalami penurunan BB yang tidak diinginkan dalam 6 bulan terakhir?</label>
                  <div class="col-lg-12">
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input type="radio" name="must_bb" value="Tidak ada penurunan berat badan" >
                        Tidak ada penurunan berat badan
                      </label>
                    </div>
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input type="radio" name="must_bb" value="Tidak yakin/ tidak tahu/ terasa baju longgar">
                        Tidak yakin/ tidak tahu/ terasa baju longgar
                      </label>
                    </div>
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input type="radio" name="must_bb" value="Ya">
                        Ya
                      </label>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-lg-12" style="font-size: 6mm;">Apakah asupan makan berkurang karena tidak nafsu makan?</label>
                  <div class="col-lg-2">
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input type="radio" name="must_asupan" value="false" >
                        Tidak 
                      </label>
                    </div>
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input type="radio" name="must_asupan" value="true" >
                        Ya 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group" id="must_23_form">
                  <label class="col-lg-12" style="font-size: 6mm;">Pasien dengan diagnosis khusus?</label>
                  <div class="col-lg-2">
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input type="radio" name="must_diagnosis" id="must_3_2" value="false" >
                        Tidak
                      </label>
                    </div>
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input type="radio" name="must_diagnosis" id="must_3_1" value="true" >
                        Ya 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="panel panel-primary">
                  <div class="panel-heading">ANAK-ANAK</div>
                  <div class="panel-content" style="font-size: 6mm">Berdasarkan Adaptasi Strong-Kid</div>
                </div>
                <div class="form-group">
                  <label class="col-lg-12" style="font-size: 6mm;">Apa pasien tampak kurus?</label>
                  <div class="col-lg-2">
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="sk_1" value="false" >
                        Tidak 
                      </label>
                    </div>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="sk_1" value="true">
                        Ya 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-12" style="font-size: 6mm;">Apakah terdapat penurunan BB selama satu bulan terakhir? Berdasarkan penilaian objektif data BB bila ada ATAU penilaian subjektif orangtua pasien ATAU untuk bayi < 1 tahun : BB tidak naik selama 3 bulan terakhir?</label>
                  <div class="col-lg-12">
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="sk_2" value="false" >
                        Tidak 
                      </label>
                    </div>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="sk_2" value="true">
                        Ya 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-12" style="font-size: 6mm;">Apakah terdapat salah satu dari kondisi berikut?</label>
                  <div class="col-lg-6">
                    <li style="font-size: 5mm;">Diare ≥ 5 kali/hari dan atau muntah ? 3 kali/hari dalam seminggu terakhir</li>
                    <li style="font-size: 5mm;">Asupan makanan berkurang selama 1 minggu terakhir</li>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="sk_3" value="false">
                        Tidak 
                      </label>
                    </div>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="sk_3" value="true">
                        Ya 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-12" style="font-size: 6mm;">Apa terdapat penyakit atau keadaan yang mengakibatkan pasien beresiko mengalami malnutrisi?</label>
                  <div class="col-lg-6">
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="sk_4" value="false" >
                        Tidak 
                      </label>
                    </div>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="sk_4" value="true">
                        Ya 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-12" style="font-size: 6mm;">Daftar Penyakit/keadaan yang bersiko mengakibatkan malnutrisi</label>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_1">
                        Diare Kronik (lebih dari 2 minggu)
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_2">
                        (Tersangka) Penyakit jantung bawaan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_3">
                        (Tersangka) Infeksi Human Immunodeficiency Virus (HIV)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_4">
                        (Tersangka) Kanker
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_5">
                        Penyakit hati kronik
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_6">
                        Penyakit ginjal kronik
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_7">
                        TB Paru
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_8">
                        Luka bakar luas
                      </label>
                    </div>

                  </div>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_9">
                        Kelainan anatomi daerah mulut yang menyebabkan kesulitan makan (misal:bibir sumbing)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_10">
                        Trauma
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_11">
                        Kelainan metabolik bawaan (Inborn Error Metabolism)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_12">
                        (Tersangka) Infeksi Human Immunodeficiency Virus (HIV)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_13">
                        Retardasi mental
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_14">
                        Rencana / paska operasi mayor (misal: laparatomi, tokaratomi)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_15">
                        Terpasang stoma
                      </label>
                    </div>
                    <div class="checkbox">
                      <div class="block">
                        <input type="checkbox" name="penyakit_malnutrisi_16">
                        <label>Lain-lain...</label>
                        <input type="text" name="penyakit_malnutrisi_lain">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-12" style="font-size: 6mm;">Diberitahukan ke dokter?</label>
                  <div class="col-lg-12">
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="pemberitahuan" id="pemberitahuan_1" value="false">
                        Tidak
                      </label>
                    </div>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="pemberitahuan" id="pemberitahuan_2" value="true">
                        Ya, pukul
                      </label>
                    </div>
                    <div class="radio-inline">
                      <input type="time" class="form-control" name="waktu_pemberitahuan">
                    </div>
                  </div>
                </div>
              </div>
            </section>


            <section class="panel">
              <header class="panel-heading">
                Penilaian Tingkat Nyeri
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Keluhan nyeri</label>
                  <div class="col-lg-3">
                    <select class="form-control" name="keluhan_nyeri">
                      <option disabled selected style="display:none"></option>
                      <option value="true">Ada nyeri</option>
                      <option value="false">Tidak ada nyeri</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Skala Nyeri </label>
                  <div class="col-sm-2">
                    <select class="form-control" name="skala_nyeri">
                      <option disabled selected style="display:none"></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </div>

                  <label class="col-sm-2 control-label">Lokasi Nyeri </label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="lokasi_nyeri">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Penyebab nyeri</label>
                  <div class="col-sm-6">
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input type="radio" name="penyebab_nyeri" value="Trauma">
                        Trauma
                      </label>
                    </div>
                    <div class="checkbox-inline">
                      <label>
                        <input type="radio" name="penyebab_nyeri" value="Non Trauma">
                        Non Trauma
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Apakah nyerinya berpindah dari satu tempat ke tempat lainnya?</label>
                  <div class="col-sm-6">
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input type="radio" name="nyeri_berpindah" value="false">
                        Tidak
                      </label>
                    </div>
                    <div class="checkbox-inline">
                      <label>
                        <input type="radio" name="nyeri_berpindah" value="true">
                        Ya
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Seberapa sering mengalami nyeri? Berapa lama? </label>
                  <div class="col-sm-3">
                    <label class="col-sm-3 control-label">Setiap : </label>
                    <div class="radio-inline col-sm-4">
                      <label>
                        <input type="radio" name="frekuensi_nyeri" value="1-2 jam">
                        1-2 jam
                      </label>
                    </div>
                    <div class="radio-inline col-sm-4">
                      <label>
                        <input type="radio" name="frekuensi_nyeri"  value="1-2 jam">
                        3-4 jam
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-3 control-label">Selama :</label>
                    <div class="radio-inline col-sm-4">
                      <label>
                        <input type="radio" name="lama_nyeri" value="< 30 menit">
                        < 30 menit
                      </label>
                    </div>
                    <div class="radio-inline col-sm-4">
                      <label>
                        <input type="radio" name="lama_nyeri" value="> 30 menit">
                        > 30 menit
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>


            <section class="panel">
              <header class="panel-heading">
                Penilaian Risiko Jatuh
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Risiko Jatuh</label>
                  <div class="col-lg-4">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis_risiko_jatuh"  value="Humpty Dumpty">
                        HUMPTY DUMPTY (Anak-anak) 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis_risiko_jatuh" value="Morse">
                        MORSE (Dewasa) 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis_risiko_jatuh" value="Edmunson">
                        EDMUNSON (Jiwa) 
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>


            <section class="panel">
              <header class="panel-heading">
                HUMPTY DUMPTY (Anak-anak)
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h4>HUMPTY DUMPTY (Anak-anak) </h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">USIA</label>
                  <div class="col-lg-2">
                    <select class="form-control m-bot15" name="humpty_1">
                      <option disabled selected style="display:none"></option>
                      <option value="1">Dibawah 3 tahun </option>
                      <option value="2">3 – 7 tahun </option>
                      <option value="3">7 – 13 tahun </option>
                      <option value="4">> 13 tahun </option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="humpty_2">
                      <option disabled selected style="display:none"></option>
                      <option value="1">Kelainan Neurologi </option>
                      <option value="2">Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)</option>
                      <option value="3">Kelainan psikis / prilaku</option>
                      <option value="4">Diagnosis lain</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">GANGGUAN KOGNITIF</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="humpty_3">
                      <option disabled selected style="display:none"></option>
                      <option value="1">Tidak sadar terhadap keterbatasan (gangguan kesadaran, retardasi mental)</option>
                      <option value="2">Lupa keterbatasan (anak yang hiperaktif)</option>
                      <option value="3">Mengetahui kemampuan diri</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">FAKTOR LINGKUNGAN</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="humpty_4">
                      <option disabled selected style="display:none"></option>
                      <option value="1">Riwayat jatuh dari tempat tidur saat bayi</option>
                      <option value="2">Pasien menggunakan alat bantu atau box meubel</option>
                      <option value="3">Pasien berada di tempat tidur</option>
                      <option value="4">Di luar ruang rawat</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">RESPON TERHADAP OPERASI/OBAT PENENANG/EFEK ANASTESI</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="humpty_5">
                      <option disabled selected style="display:none"></option>
                      <option value="1">Dalam 24 Jam</option>
                      <option value="2">Dalam 48 Jam</option>
                      <option value="3">> 48 Jam</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">PENGGUNAAN OBAT</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="humpty_6">
                      <option disabled selected style="display:none"></option>
                      <option value="1">Bermacam-macam obat yang digunakan : obat sedatif (kecuali pasien ICU yang menggunakan sedasi dan paralisis), Hiptonik Barbitural, Fonotiazin, Antidepresan, Laksansia / Diuretikan, Narkotik</option>
                      <option value="2">Salah satu Pengobatan di atas</option>
                      <option value="3">Pengobatan lain</option>
                    </select>
                  </div>
                </div>
              </div>
            </section>


            <section class="panel">
              <header class="panel-heading">
                MORSE (Dewasa)
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h4>MORSE (Dewasa) </h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                  <div class="col-lg-1">
                    <select class="form-control m-bot15" name="morse_1">
                      <option disabled selected style="display:none"></option>
                      <option value="true">Ya</option>
                      <option value="false">Tidak</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS SEKUNDER</label>
                  <div class="col-lg-1">
                    <select class="form-control m-bot15" name="morse_2">
                      <option disabled selected style="display:none"></option>
                      <option value="true">Ya</option>
                      <option value="false">Tidak</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">ALAT BANTU</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="morse_3">
                      <option disabled selected style="display:none"></option>
                      <option value="1">Perabot</option>
                      <option value="2">Tongkat/Alat Penopang</option>
                      <option value="3">Tidak ada/Kursi Roda/Perawat/Tirah Baring</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">TERPASANG INFUS</label>
                  <div class="col-lg-1">
                    <select class="form-control m-bot15" name="morse_4">
                      <option disabled selected style="display:none"></option>
                      <option value="false">Tidak</option>
                      <option value="true">Ya</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">GAYA BERJALAN</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="morse_5">
                      <option disabled selected style="display:none"></option>
                      <option value="1">Terganggu</option>
                      <option value="2">Lemah</option>
                      <option value="3">Normal/Tirah Baring/Imobilisasi</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="morse_6">
                      <option disabled selected style="display:none"></option>
                      <option value="1">Sering lupa akan keterbatasan yang dimiliki</option>
                      <option value="2">Orientasi baik terhadap kemampuan diri sendiri</option>
                    </select>
                  </div>
                </div>
              </div>
            </section>


            <section class="panel">
              <header class="panel-heading">
                EDMUNSON (Jiwa)
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h4>EDMUNSON (Jiwa) </h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label>
                  <div class="col-lg-2">
                    <select class="form-control m-bot15" name="edmunson_1">
                      <option disabled selected style="display:none"></option>
                      <option value="1">Kesadaran baik/orientasi baik setiap saat </option>
                      <option value="2">Agitasi/Ansietas</option>
                      <option value="3">Kadang-kadang bingung</option>
                      <option value="4">Bingung/Disorientasi</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="edmunson_2">
                      <option disabled selected style="display:none"></option>
                      <option value="1">Kelainan Neurologi </option>
                      <option value="2">Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)</option>
                      <option value="3">Kelainan psikis / prilaku</option>
                      <option value="4">Diagnosis lain</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">ELIMINASI</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="edmunson_3">
                      <option disabled selected style="display:none"></option>
                      <option value="1">Mandiri dan mampi mengontrol BAB/BAK</option>
                      <option value="2">Dower Catheter/Colostomy</option>
                      <option value="3">Eliminasi dengan bantuan</option>
                      <option value="4">Gangguan eliminasi (Inkontinensia/Nokturia/Frekwensi)</option>
                      <option value="5">Inkontinesia tetapi mampu untuk mobilisasi</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">PENGOBATAN</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="edmunson_4">
                      <option disabled selected style="display:none"></option>
                      <option value="1">Tanpa obat-obatan</option>
                      <option value="2">Obat-obatan jantung</option>
                      <option value="3">Obat-obat psikotropika (termasuk Benzodiazepine dan Antidepresan)</option>
                      <option value="4">Mendapat tambahan obat-obatan dan/atau obat-obat PRN (psikiatri, antinyeri) yang diberikan dalam 24 jam terakhir</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSA</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="edmunson_5">
                      <option disabled selected style="display:none"></option>
                      <option value="1">Bipolar/ Gangguan Schizoaffective</option>
                      <option value="2">Penggunaan Obat-obatan terlarang/ketergantungan alkohol</option>
                      <option value="3">Gangguan Depresi Mayor</option>
                      <option value="4">Dimensia/ Delirium</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">AMBULASI /KESEIMBANGAN </label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="edmunson_6">
                      <option disabled selected style="display:none"></option>
                      <option value="1">Mandiri/Keseimbangan Baik/Immobilisasi</option>
                      <option value="2">Dengan Alat Bantu (Kursi roda, walker,dll)</option>
                      <option value="3">Vertigo/kelemahan</option>
                      <option value="4">Goyah/membutuhkan mantuan dan menyadari kemampuan</option>
                      <option value="5">Goyah tapi lupa keterbatasan</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">NUTRISI</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="edmunson_7">
                      <option disabled selected style="display:none"></option>
                      <option value="1">Mengkonsumsi sedikit makanan atau minuman  dalam 24 jam terakhir</option>
                      <option value="2">Tidak ada kelainan dengan nafsu makan</option>
                      <option value="3">Gangguan pola tidur yang dilaporkan oleh pasien, keluarga atau petugas</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="edmunson_8">
                      <option disabled selected style="display:none"></option>
                      <option value="1">Tidak ada riwayat jatuh</option>
                      <option value="2">Ada riwayat jatuh dalam 3 bulan terakhir</option>
                    </select>
                  </div>
                </div>
              </div>
            </section>


            <section class="panel">
              <header class="panel-heading">
                Asesmen Keperawatan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2">Tekanan intrakanal</label>
                  <div class="col-lg-10">
                    <div class="radio-inline" style="margin-right: 8mm;">
                      <label>
                        <input type="radio" name="tekanan_intrakanal" value="false">
                        Tidak ada keluhan
                      </label>
                    </div>
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input type="radio" name="tekanan_intrakanal" value="true">
                        Ada keluhan :
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="list_tekanan_intrakanal_1">
                        Sakit Kepala
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="list_tekanan_intrakanal_2">
                        Muntah
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="list_tekanan_intrakanal_3">
                        Pusing
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Pupil</label>
                  <div class="col-lg-10">
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="pupil_1">
                        Normal
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="pupil_2">
                        Miosis
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="pupil_3">
                        Midriasis
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="pupil_4">
                        Isokor
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="pupil_5">
                        Anisokor
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Neurosensorik</label>
                  <div class="col-lg-10">
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="neurosensorik_1">
                        Tidak ada keluhan
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="neurosensorik_2">
                        Spasme otot
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="neurosensorik_3">
                        Perubahan Sensorik
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="neurosensorik_4">
                        Perubahan Motorik
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Muskuloskeletal</label>
                  <div class="col-lg-10">
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="muskuloskeletal_1">
                        Tidak ada gangguan
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="muskuloskeletal_2">
                        Kerusakan jaringan/luka
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="muskuloskeletal_3">
                        Perubahan bentuk ekstremitas
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="muskuloskeletal_4">
                        Penurunana tingkat kesadaran
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="muskuloskeletal_5">
                        Fraktur
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="muskuloskeletal_6">
                        Dislokasi
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="muskuloskeletal_7">
                        Luksasio
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Integumen</label>
                  <div class="col-lg-10">
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="integumen_1">
                        Tidak ada gangguan
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="integumen_2">
                        Luka bakar
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="integumen_3">
                        Lecet
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="integumen_4">
                        Luka decubitus
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="integumen_5">
                        Luka robek
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="integumen_6">
                        Luka Gangren
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Turgor kulit</label>
                  <div class="col-lg-10">
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="turgor_1">
                        Baik
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="turgor_2">
                        Menurun
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Edema</label>
                  <div class="col-lg-10">
                    <div class="radio-inline" style="margin-right: 8mm;">
                      <label>
                        <input type="radio" name="edema" value="false">
                        Tidak ada
                      </label>
                    </div>
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input type="radio" name="edema" value="true">
                        Ada :
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="list_edema_1">
                        Ekstremitas
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="list_edema_2">
                        Abdomen
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="list_edema_3">
                        Seluruh tubuh
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="list_edema_4">
                        Palpebra
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Mukosa mulut</label>
                  <div class="col-lg-10">
                    <div class="radio-inline" style="margin-right: 8mm;">
                      <label>
                        <input type="radio" name="mukosa" value="Lembab">
                        Lembab
                      </label>
                    </div>
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input type="radio" name="mukosa" value="Kering">
                        Kering
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Pendarahan</label>
                  <div class="col-lg-10">
                    <div class="radio-inline" style="margin-right: 8mm;">
                      <label>
                        <input type="radio" name="pendarahan" value="false">
                        Tidak ada
                      </label>
                    </div>
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input type="radio" name="pendarahan" value="true">
                        Ada :
                      </label>
                    </div>
                    <div class="checkbox-inline">
                      <div class="block">
                        <label>Jumlah</label>
                        <input type="text" name="jumlah_pendaftaran">
                        <label>cc</label>
                      </div>
                    </div>
                    <div class="checkbox-inline">
                      <div class="block">
                        <label>Warna</label>
                        <input type="text" name="warna_pendarahan">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Intoksisasi</label>
                  <div class="col-lg-10">
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="intoksisasi_1">
                        Makanan
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="intoksisasi_2">
                        Zak kimia
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="intoksisasi_3">
                        Minuman
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="intoksisasi_4">
                        Gas
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="intoksisasi_5">
                        Gigitan binatang
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="intoksisasi_6">
                        Zat kimia
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="intoksisasi_7">
                        Gas
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="intoksisasi_8">
                        Obat
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="intoksisasi_9">
                        Tidak ada
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Eliminasi</label>
                  <div class="col-lg-10">
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="eliminasi_1">
                        BAB
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="eliminasi_2">
                        BAK
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="eliminasi_3">
                        Frekuensi
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="eliminasi_4">
                        Frekuensi
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="eliminasi_5">
                        Konsistensi
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="eliminasi_6">
                        Warna
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="eliminasi_7">
                        Warna
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input type="checkbox" name="eliminasi_8">
                        Lain-lain
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Diagnosa Keperawatan Umum</label>
                  <div class="col-lg-8">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_umum_1">
                        Aktual/ Resiko bersihan jalan nafas tidak efektif
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_umum_2">
                        Aktual/ Resiko aspirasi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_umum_3">
                        Aktual/ Resiko pola nafas tidak efektif
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_umum_4">
                        Aktual/ Resiko gangguan pertukaran gas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_umum_5">
                        Aktual/ penurunan curah jantung
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_umum_6">
                        Aktual/ Resiko gangguan perfusi jaringan celebral/perifer
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_umum_7">
                        Aktual/ Resiko gangguan keseimbangan cairan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_umum_8">
                        Aktual/ Resiko gangguan keseimbangan kontinuitas jaringan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_umum_9">
                        Aktual/ Resiko infeksi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_umum_10">
                        Resiko cedera / jatuh
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_umum_11">
                        Hypertermi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_umum_12">
                        Nyeri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_umum_13">
                        Gangguan kebutuhan nutrisi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_umum_14">
                        Lainnya
                        <input placeholder="sebutkan" type="text" class="form-control" name="diagnosa_umum_lainnya">
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Diagnosa keperawatan jiwa</label>
                  <div class="col-lg-8">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_jiwa_1">
                        Gangguan persepsi sensori : halusinasi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_jiwa_2">
                        Perilaku kekerasan
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_jiwa_3">
                        Isolasi sosial
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_jiwa_4">
                        Gangguan konsep diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_jiwa_5">
                        Resiko bunuh diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_jiwa_6">
                        Intoleransi aktifitas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_jiwa_7">
                        Waham
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_jiwa_8">
                        Defisit perawatan diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_jiwa_9">
                        Kerusakan komunitas verbal
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_jiwa_10">
                        Koping individu tidak efektif
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_jiwa_11">
                        Aktual/Resiko Cemas/Takut
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diagnosa_jiwa_12">
                        Lainnya
                        <input placeholder="sebutkan" type="text" class="form-control" name="diagnosa_jiwa_lainnya">
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Obat Parental </label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="obat_parental">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">EKG </label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="ekg">
                  </div>
                </div>
              </div>
            </section>


            <section class="panel">
              <header class="panel-heading">
                Evaluasi Tindakan Keperawatan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Implementasi </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" style="resize: none;" rows="7" name="implementasi"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Evaluasi </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" style="resize: none;" rows="7" name="evaluasi"></textarea>
                  </div>
                </div>
              </div>
            </section>

            <div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>

        </div>
      </div>
    </section>

    @include('layouts.tailscript')

    {{-- status fungsional --}}
    <script type="text/javascript">
      $(document).ready( function() {
        $('input[type=radio][name=status_fungsional]').change(function() {
          if(this.value == 'Perlu Bantuan') {
            $('#status_fungsional').after('<div class="form-group" id="perlu_bantuan"><label class="col-sm-2 control-label">Perlu Bantuan</label><div class="col-sm-10"><input type="text" class="form-control" name="perlu_bantuan"></div></div>');
          }
          else if(this.value == 'Mandiri') {
            $('#perlu_bantuan').hide();
          }
          else if(this.value == 'Ketergantungan Total') {
            $('#perlu_bantuan').hide();
          }
        });
      });
    </script>

    <script type="text/javascript">
      $(document).ready( function() {
        $('input[type=radio][name=must_1]').change(function() {
          if(this.id == 'must_1_3') {
            $('#must_1_form').after('<div class="form-group" id="must_1_bb_berkurang"><label class="control-label col-lg-2" for="inputSuccess">Jika ya berapa penurunan berat badan tersebut?</label><div class="col-lg-3"><select class="form-control m-bot15" name="must_1_input_bb_berkurang"><option value="1">1 – 5 kg </option><option value="2">6 – 10 kg </option><option value="3">11 – 15 kg </option><option value="4">> - 15 kg </option></select></div></div>');
          }
          else if(this.id == 'must_1_1') {
            $('#must_1_bb_berkurang').hide();
          }
          else if(this.id == 'must_1_2') {
            $('#must_1_bb_berkurang').hide();
          }
        });
      })
    </script>

    <script type="text/javascript">
      $(document).ready( function() {
        $('input[type=radio][name=must_3]').change(function() {
          if(this.id == 'must_3_1') {
            $('#must_23_form').after('<div class="form-group" id="list_diagnosis_khusus"><label class="control-label col-lg-2" for="inputSuccess"></label><div class="col-lg-10"><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_1"> DM</label><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_2"> Kemoterapi</label><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_3"> Hemodialisa</label><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_4"> Geriatri</label><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_5"> Immunitas Menurun</label><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_6"> Lain-lain</label><label class="checkbox-inline"><div class="col-lg-4"><input type="text" class="form-control" name="diagnosis_khusus_lain"></div></label></div></div>');
          }
          else if(this.id == 'must_3_2') {
            $('#list_diagnosis_khusus').hide();
          }
        });
      });
    </script>

    <script type="text/javascript">
      $(document).ready( function() {
        $('input[type=checkbox][name="sk_3_checkbox[]"]').change(function() {
          var atLeastOneIsChecked = $('input[name="sk_3_checkbox[]"]:checked').length > 0;
            // alert("HAHAH");
            if(atLeastOneIsChecked == true) {
              $('#sk_3_2').prop('checked', true);
              $('#sk_3_hidden').hide();
              $('#sk_3_2').after('<input type="hidden" id="sk_3_hidden" name="sk_3" value="1"></input>');
            }
            else if(atLeastOneIsChecked == false) {
              $('#sk_3_1').prop('checked', true);
              $('#sk_3_hidden').hide();
              $('#sk_3_2').after('<input type="hidden" id="sk_3_hidden" name="sk_3" value="0"></input>');
            }
          });
      });
    </script>

    <script type="text/javascript">
      $(document).ready( function() {
        $('#pemberitahuan_1').click( function() {
          $('#waktu_pemberitahuan').prop('disabled', false);
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready( function() {
        $('#pemberitahuan_2').click( function() {
          $('#waktu_pemberitahuan').prop('disabled', true);
        });
      });
    </script>
  </body>


  <html>
