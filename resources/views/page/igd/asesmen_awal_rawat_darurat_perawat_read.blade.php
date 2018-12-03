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
                      <a class="btn btn-primary" href="{{url('')}}/igd_asesmen_pdf">PDF</a>
                      <a class="btn btn-success" href="#">EDIT</a>
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
          <form class="form-horizontal form-validate" id="register_form">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Data Medis
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Kedatangan</label>
                  <div class="col-sm-2">
                    <input disabled type="text" value="{{$tanggal_kedatangan}}" class="form-control required sandbox-container" name="tanggal_kedatangan" disabled>
                  </div>
                  <label class="col-sm-2 control-label">Jam Kedatangan</label>
                  <div class="col-sm-2">
                  <input type="time" class="form-control required" name="jam_kedatangan" value="{{$jam_kedatangan}}" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Cara Datang</label>
                  <div class="col-sm-8">
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="cara_datang" value="Datang sendiri" {{$cara_datang == 'Datang sendiri' ? 'checked' : ''}}>
                        Datang sendiri
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="cara_datang" value="Diantar" {{$cara_datang == 'Diantar' ? 'checked' : ''}}>
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
                        <input disabled type="radio" name="transportasi_ke_igd" value="Kendaraan Pribadi" {{$transportasi_ke_igd == 'Kendaraan Pribadi' ? 'checked' : ''}}>
                        Kendaraan Pribadi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="transportasi_ke_igd" value="Ambulance" {{$transportasi_ke_igd == 'Ambulance' ? 'checked' : ''}}>
                        Ambulance
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="transportasi_ke_igd" value="Angkutan Umum" {{$transportasi_ke_igd == 'Angkutan Umum' ? 'checked' : ''}}>
                        Angkutan Umum
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="transportasi_ke_igd" value="Lainnya" {{$transportasi_ke_igd == 'Lainnya' ? 'checked' : ''}}>
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
                        <input disabled type="radio" name="rujukan_dari" value="Puskesmas/Dokter Keluarga" {{$rujukan_dari == 'Puskesmas/Dokter Keluarga' ? 'checked' : ''}}>
                        Puskesmas/Dokter Keluarga
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input disabled type="radio"name="rujukan_dari" value="Rumah Sakit" {{$rujukan_dari == 'Rumah Sakit' ? 'checked' : ''}}>
                        Rumah Sakit
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Rumah Sakit</label>
                  <div class="col-sm-8">
                    <input disabled type="text" class="form-control" name="nama_rumah_sakit" value="{{$nama_rumah_sakit}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Dikirim ke IGD</label>
                  <div class="col-sm-6">
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="visum" value="true" {{$visum == True ? 'checked' : ''}}>
                        Dengan disertai VISUM ET REPERTUM PSIKIATRIKUM
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="visum" value="false" {{$visum == False ? 'checked' : ''}}>
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
                        <input disabled type="checkbox" name="macam_kasus_1" {{isset($macam_kasus[1]) ? 'checked' : ''}}>
                        Jiwa
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="macam_kasus_2" {{isset($macam_kasus[2]) ? 'checked' : ''}}>
                        KLL
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="macam_kasus_3" {{isset($macam_kasus[3]) ? 'checked' : ''}}>
                        KDRT
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="macam_kasus_4" {{isset($macam_kasus[4]) ? 'checked' : ''}}>
                        Kecelakaan Kerja
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="macam_kasus_5" {{isset($macam_kasus[5]) ? 'checked' : ''}}>
                        Stroke
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="macam_kasus_6" {{isset($macam_kasus[6]) ? 'checked' : ''}}>
                        Trauma
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="macam_kasus_7" {{isset($macam_kasus[7]) ? 'checked' : ''}}>
                        Non Trauma
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="macam_kasus_8" {{isset($macam_kasus[8]) ? 'checked' : ''}}>
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
                    <input disabled type="text" class="form-control required" name="tensi" value="{{$tensi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nadi</label>
                  <div class="col-sm-1">
                    <input disabled type="text" class="form-control required" name="nadi" value="{{$nadi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pernafasan</label>
                  <div class="col-sm-1">
                    <input disabled type="text" class="form-control required" name="pernafasan" value="{{$pernafasan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Suhu</label>
                  <div class="col-sm-1">
                    <input disabled type="text" class="form-control required" name="suhu" value="{{$suhu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">TB</label>
                  <div class="col-sm-1">
                    <input disabled type="text" class="form-control required" name="tb" value="{{$tb}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">BB</label>
                  <div class="col-sm-1">
                    <input disabled type="text" class="form-control required" name="bb" value="{{$bb}}">
                  </div>
                </div>
                <h3>GCS</h3>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">E</label>
                  <div class="col-sm-1">
                    <input disabled type="text" class="form-control required" name="e" value="{{$e}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">V</label>
                  <div class="col-sm-1">
                    <input disabled type="text" class="form-control required" name="v" value="{{$v}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">M</label>
                  <div class="col-sm-1">
                    <input disabled type="text" class="form-control required" name="m" value="{{$m}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindakan Pra Hospital</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="tindakan_pra_hospital_1" {{isset($tindakan_pra_hospital[1]) ? 'checked' : ''}}>
                        CPR/RJP
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="tindakan_pra_hospital_2" {{isset($tindakan_pra_hospital[2]) ? 'checked' : ''}}>
                        O2
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="tindakan_pra_hospital_3" {{isset($tindakan_pra_hospital[3]) ? 'checked' : ''}}>
                        Infus
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="tindakan_pra_hospital_4" {{isset($tindakan_pra_hospital[4]) ? 'checked' : ''}}>
                        NGT
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="tindakan_pra_hospital_5" {{isset($tindakan_pra_hospital[5]) ? 'checked' : ''}}>
                        ETT
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="tindakan_pra_hospital_6" {{isset($tindakan_pra_hospital[6]) ? 'checked' : ''}}>
                        Bebat Tekan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="tindakan_pra_hospital_7" {{isset($tindakan_pra_hospital[7]) ? 'checked' : ''}}>
                        Bidai
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="tindakan_pra_hospital_8" {{isset($tindakan_pra_hospital[8]) ? 'checked' : ''}}>
                        Kateter Urin
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="tindakan_pra_hospital_9" {{isset($tindakan_pra_hospital[9]) ? 'checked' : ''}}>
                        Lain-lain
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="tindakan_pra_hospital_10" {{isset($tindakan_pra_hospital[10]) ? 'checked' : ''}}>
                        Obat-Obatan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input disabled type="text" class="form-control" name="tindakan_pra_hospital_lain" value="{{$tindakan_pra_hospital_lain}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Daftar Obat-obatan</label>
                  <div class="col-sm-8">
                    <input disabled type="text" class="form-control" name="daftar_obat_obatan" value="{{$daftar_obat_obatan}}">
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
                    <textarea class="form-control required" name="alasan_kunjungan" rows="3" style="resize: none;" readonly>{{$alasan_kunjungan}}</textarea>
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
                        <input disabled type="radio" name="must_bb" value="Tidak ada penurunan berat badan" {{$must_bb == 'Tidak ada penurunan berat badan' ? 'checked' : ''}}>
                        Tidak ada penurunan berat badan
                      </label>
                    </div>
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input disabled type="radio" name="must_bb" value="Tidak yakin/ tidak tahu/ terasa baju longgar" {{$must_bb == 'Tidak yakin/ tidak tahu/ terasa baju longgar' ? 'checked' : ''}}>
                        Tidak yakin/ tidak tahu/ terasa baju longgar
                      </label>
                    </div>
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input disabled type="radio" name="must_bb" value="Ya" {{$must_bb == 'Ya' ? 'checked' : ''}}>
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
                        <input disabled type="radio" name="must_asupan" value="false" {{$must_asupan == False ? 'checked' : ''}}>
                        Tidak 
                      </label>
                    </div>
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input disabled type="radio" name="must_asupan" value="true" {{$must_asupan == true ? 'checked' : ''}}>
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
                        <input disabled type="radio" name="must_diagnosis" id="must_3_2" value="false" {{$must_diagnosis == False ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input disabled type="radio" name="must_diagnosis" id="must_3_1" value="true" {{$must_diagnosis == True ? 'checked' : ''}}>
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
                        <input disabled type="radio" name="sk_1" value="false" {{$sk_1 == False ? 'checked' : ''}}>
                        Tidak 
                      </label>
                    </div>
                    <div class="radio-inline">
                      <label>
                        <input disabled type="radio" name="sk_1" value="true" {{$sk_1 == True ? 'checked' : ''}}>
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
                        <input disabled type="radio" name="sk_2" value="false" {{$sk_2 == False ? 'checked' : ''}}>
                        Tidak 
                      </label>
                    </div>
                    <div class="radio-inline">
                      <label>
                        <input disabled type="radio" name="sk_2" value="true" {{$sk_2 == True ? 'checked' : ''}}>
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
                        <input disabled type="radio" name="sk_3" value="false" {{$sk_3 == False ? 'checked' : ''}}>
                        Tidak 
                      </label>
                    </div>
                    <div class="radio-inline">
                      <label>
                        <input disabled type="radio" name="sk_3" value="true" {{$sk_3 == True ? 'checked' : ''}}>
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
                        <input disabled type="radio" name="sk_4" value="false" {{$sk_4 == False ? 'checked' : ''}}>
                        Tidak 
                      </label>
                    </div>
                    <div class="radio-inline">
                      <label>
                        <input disabled type="radio" name="sk_4" value="true" {{$sk_4 == True ? 'checked' : ''}}>
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
                        <input disabled type="checkbox" name="penyakit_malnutrisi_1" {{isset($penyakit_malnutrisi[1]) ? 'checked' : ''}}>
                        Diare Kronik (lebih dari 2 minggu)
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="penyakit_malnutrisi_2" {{isset($penyakit_malnutrisi[2]) ? 'checked' : ''}}>
                        (Tersangka) Penyakit jantung bawaan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="penyakit_malnutrisi_3" {{isset($penyakit_malnutrisi[3]) ? 'checked' : ''}}>
                        (Tersangka) Infeksi Human Immunodeficiency Virus (HIV)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="penyakit_malnutrisi_4" {{isset($penyakit_malnutrisi[4]) ? 'checked' : ''}}>
                        (Tersangka) Kanker
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="penyakit_malnutrisi_5" {{isset($penyakit_malnutrisi[5]) ? 'checked' : ''}}>
                        Penyakit hati kronik
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="penyakit_malnutrisi_6" {{isset($penyakit_malnutrisi[6]) ? 'checked' : ''}}>
                        Penyakit ginjal kronik
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="penyakit_malnutrisi_7" {{isset($penyakit_malnutrisi[7]) ? 'checked' : ''}}>
                        TB Paru
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="penyakit_malnutrisi_8" {{isset($penyakit_malnutrisi[8]) ? 'checked' : ''}}>
                        Luka bakar luas
                      </label>
                    </div>

                  </div>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="penyakit_malnutrisi_9" {{isset($penyakit_malnutrisi[9]) ? 'checked' : ''}}>
                        Kelainan anatomi daerah mulut yang menyebabkan kesulitan makan (misal:bibir sumbing)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="penyakit_malnutrisi_10" {{isset($penyakit_malnutrisi[10]) ? 'checked' : ''}}>
                        Trauma
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="penyakit_malnutrisi_11" {{isset($penyakit_malnutrisi[11]) ? 'checked' : ''}}>
                        Kelainan metabolik bawaan (Inborn Error Metabolism)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="penyakit_malnutrisi_12" {{isset($penyakit_malnutrisi[12]) ? 'checked' : ''}}>
                        (Tersangka) Infeksi Human Immunodeficiency Virus (HIV)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="penyakit_malnutrisi_13" {{isset($penyakit_malnutrisi[13]) ? 'checked' : ''}}>
                        Retardasi mental
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="penyakit_malnutrisi_14" {{isset($penyakit_malnutrisi[14]) ? 'checked' : ''}}>
                        Rencana / paska operasi mayor (misal: laparatomi, tokaratomi)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="penyakit_malnutrisi_15" {{isset($penyakit_malnutrisi[15]) ? 'checked' : ''}}>
                        Terpasang stoma
                      </label>
                    </div>
                    <div class="checkbox">
                      <div class="block">
                        <input disabled type="checkbox" name="penyakit_malnutrisi_16" {{isset($penyakit_malnutrisi[16]) ? 'checked' : ''}}>
                        <label>Lain-lain...</label>
                        <input disabled type="text" name="penyakit_malnutrisi_lain" value="{{$penyakit_malnutrisi_lain}}" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-12" style="font-size: 6mm;">Diberitahukan ke dokter?</label>
                  <div class="col-lg-12">
                    <div class="radio-inline">
                      <label>
                        <input disabled type="radio" name="pemberitahuan" id="pemberitahuan_1" value="false" {{$pemberitahuan == False ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                    <div class="radio-inline">
                      <label>
                        <input disabled type="radio" name="pemberitahuan" id="pemberitahuan_2" value="true" {{$pemberitahuan == True ? 'checked' : ''}}>
                        Ya, pukul
                      </label>
                    </div>
                    <div class="radio-inline">
                      <input disabled type="time" class="form-control" name="waktu_pemberitahuan" value="{{$waktu_pemberitahuan}}">
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
                    <div class="col-lg-6">
                      <img src="img/nyeri.jpg" alt="Smiley face" height="300" width="550">
                    </div>
                    <div class="col-lg-6">
                      <center><b>Status Lokalis</b></center>
                      <center><img src="img/body.jpg" alt="Smiley face" height="300" width="450"></center>
                    </div>
                  </div>
                  
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Keluhan nyeri</label>
                  <div class="col-lg-3">
                    <select disabled class="form-control" name="keluhan_nyeri">
                      <option disabled selected style="display:none"></option>
                      <option {{$keluhan_nyeri == True ? 'selected' : ''}} value="true">Ada nyeri</option>
                      <option {{$keluhan_nyeri == False ? 'selected' : ''}} value="false">Tidak ada nyeri</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Skala Nyeri </label>
                  <div class="col-sm-2">
                    <select disabled class="form-control" name="skala_nyeri">
                      <option disabled selected style="display:none"></option>
                      <option {{$skala_nyeri == "1" ? 'selected' : '' }} value="1">1</option>
                      <option {{$skala_nyeri == "2" ? 'selected' : '' }} value="2">2</option>
                      <option {{$skala_nyeri == "3" ? 'selected' : '' }} value="3">3</option>
                      <option {{$skala_nyeri == "4" ? 'selected' : '' }} value="4">4</option>
                      <option {{$skala_nyeri == "5" ? 'selected' : '' }} value="5">5</option>
                      <option {{$skala_nyeri == "6" ? 'selected' : '' }} value="6">6</option>
                      <option {{$skala_nyeri == "7" ? 'selected' : '' }} value="7">7</option>
                      <option {{$skala_nyeri == "8" ? 'selected' : '' }} value="8">8</option>
                      <option {{$skala_nyeri == "9" ? 'selected' : '' }} value="9">9</option>
                      <option {{$skala_nyeri == "10" ? 'selected' : '' }} value="10">10</option>
                    </select>
                  </div>

                  <label class="col-sm-2 control-label">Lokasi Nyeri </label>
                  <div class="col-sm-2">
                    <input disabled type="text" class="form-control" name="lokasi_nyeri" value="{{$lokasi_nyeri}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Penyebab nyeri</label>
                  <div class="col-sm-6">
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input disabled type="radio" name="penyebab_nyeri" {{$penyebab_nyeri == "Trauma" ? 'checked' : ''}} value="Trauma">
                        Trauma
                      </label>
                    </div>
                    <div class="checkbox-inline">
                      <label>
                        <input disabled type="radio" name="penyebab_nyeri" {{$penyebab_nyeri == "Non Trauma" ? 'checked' : ''}} value="Non Trauma">
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
                        <input disabled type="radio" name="nyeri_berpindah" value="false" {{$nyeri_berpindah == False ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                    <div class="checkbox-inline">
                      <label>
                        <input disabled type="radio" name="nyeri_berpindah" value="true" {{$nyeri_berpindah == True ? 'checked' : ''}}>
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
                        <input disabled type="radio" name="frekuensi_nyeri" value="1-2 jam" {{$frekuensi_nyeri == "1-2 jam" ? 'checked' : ''}}>
                        1-2 jam
                      </label>
                    </div>
                    <div class="radio-inline col-sm-4">
                      <label>
                        <input disabled type="radio" name="frekuensi_nyeri" value="1-2 jam" {{$frekuensi_nyeri == "1-2 jam" ? 'checked' : ''}}>
                        3-4 jam
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-3 control-label">Selama :</label>
                    <div class="radio-inline col-sm-4">
                      <label>
                        <input disabled type="radio" name="lama_nyeri" value="< 30 menit" {{$lama_nyeri == '< 30 menit' ? 'checked' : ''}}>
                        < 30 menit
                      </label>
                    </div>
                    <div class="radio-inline col-sm-4">
                      <label>
                        <input disabled type="radio" name="lama_nyeri" value="> 30 menit" {{$lama_nyeri == '> 30 menit' ? 'checked' : ''}}>
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
                        <input disabled type="radio" name="jenis_risiko_jatuh" {{$jenis_risiko_jatuh == 'Humpty Dumpty' ? 'checked' : ''}} value="Humpty Dumpty">
                        HUMPTY DUMPTY (Anak-anak) 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="jenis_risiko_jatuh" {{$jenis_risiko_jatuh == 'Morse' ? 'checked' : ''}} value="Morse">
                        MORSE (Dewasa) 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="jenis_risiko_jatuh" {{$jenis_risiko_jatuh == 'Edmunson' ? 'checked' : ''}} value="Edmunson">
                        EDMUNSON (Jiwa) 
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            @if($jenis_risiko_jatuh == 'Humpty Dumpty')
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
                    <select disabled class="form-control m-bot15" name="humpty_1">
                      <option disabled selected style="display:none"></option>
                      <option {{$humpty_1 == '1' ? 'selected' : ''}} value="1">Dibawah 3 tahun </option>
                      <option {{$humpty_1 == '2' ? 'selected' : ''}} value="2">3 – 7 tahun </option>
                      <option {{$humpty_1 == '3' ? 'selected' : ''}} value="3">7 – 13 tahun </option>
                      <option {{$humpty_1 == '4' ? 'selected' : ''}} value="4">> 13 tahun </option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS</label>
                  <div class="col-lg-7">
                    <select disabled class="form-control m-bot15" name="humpty_2">
                      <option disabled selected style="display:none"></option>
                      <option {{$humpty_2 == '1' ? 'selected' : ''}} value="1">Kelainan Neurologi </option>
                      <option {{$humpty_2 == '2' ? 'selected' : ''}} value="2">Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)</option>
                      <option {{$humpty_2 == '3' ? 'selected' : ''}} value="3">Kelainan psikis / prilaku</option>
                      <option {{$humpty_2 == '4' ? 'selected' : ''}} value="4">Diagnosis lain</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">GANGGUAN KOGNITIF</label>
                  <div class="col-lg-7">
                    <select disabled class="form-control m-bot15" name="humpty_3">
                      <option disabled selected style="display:none"></option>
                      <option {{$humpty_3 == '1' ? 'selected' : ''}} value="1">Tidak sadar terhadap keterbatasan (gangguan kesadaran, retardasi mental)</option>
                      <option {{$humpty_3 == '2' ? 'selected' : ''}} value="2">Lupa keterbatasan (anak yang hiperaktif)</option>
                      <option {{$humpty_3 == '3' ? 'selected' : ''}} value="3">Mengetahui kemampuan diri</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">FAKTOR LINGKUNGAN</label>
                  <div class="col-lg-7">
                    <select disabled class="form-control m-bot15" name="humpty_4">
                      <option disabled selected style="display:none"></option>
                      <option {{$humpty_4 == '1' ? 'selected' : ''}} value="1">Riwayat jatuh dari tempat tidur saat bayi</option>
                      <option {{$humpty_4 == '2' ? 'selected' : ''}} value="2">Pasien menggunakan alat bantu atau box meubel</option>
                      <option {{$humpty_4 == '3' ? 'selected' : ''}} value="3">Pasien berada di tempat tidur</option>
                      <option {{$humpty_4 == '4' ? 'selected' : ''}} value="4">Di luar ruang rawat</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">RESPON TERHADAP OPERASI/OBAT PENENANG/EFEK ANASTESI</label>
                  <div class="col-lg-7">
                    <select disabled class="form-control m-bot15" name="humpty_5">
                      <option disabled selected style="display:none"></option>
                      <option {{$humpty_5 == '1' ? 'selected' : ''}} value="1">Dalam 24 Jam</option>
                      <option {{$humpty_5 == '2' ? 'selected' : ''}} value="2">Dalam 48 Jam</option>
                      <option {{$humpty_5 == '3' ? 'selected' : ''}} value="3">> 48 Jam</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">PENGGUNAAN OBAT</label>
                  <div class="col-lg-7">
                    <select disabled class="form-control m-bot15" name="humpty_6">
                      <option disabled selected style="display:none"></option>
                      <option {{$humpty_6 == '1' ? 'selected' : ''}} value="1">Bermacam-macam obat yang digunakan : obat sedatif (kecuali pasien ICU yang menggunakan sedasi dan paralisis), Hiptonik Barbitural, Fonotiazin, Antidepresan, Laksansia / Diuretikan, Narkotik</option>
                      <option {{$humpty_6 == '2' ? 'selected' : ''}} value="2">Salah satu Pengobatan di atas</option>
                      <option {{$humpty_6 == '3' ? 'selected' : ''}} value="3">Pengobatan lain</option>
                    </select>
                  </div>
                </div>
              </div>
            </section>

            @elseif($jenis_risiko_jatuh == 'Morse')
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
                    <select disabled class="form-control m-bot15" name="morse_1">
                      <option disabled selected style="display:none"></option>
                      <option {{$morse_1 == True ? 'selected' : ''}} value="true">Ya</option>
                      <option {{$morse_1 == False ? 'selected' : ''}} value="false">Tidak</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS SEKUNDER</label>
                  <div class="col-lg-1">
                    <select disabled class="form-control m-bot15" name="morse_2">
                      <option disabled selected style="display:none"></option>
                      <option {{$morse_2 == True ? 'selected' : ''}} value="true">Ya</option>
                      <option {{$morse_2 == False ? 'selected' : ''}} value="false">Tidak</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">ALAT BANTU</label>
                  <div class="col-lg-7">
                    <select disabled class="form-control m-bot15" name="morse_3">
                      <option disabled selected style="display:none"></option>
                      <option {{$morse_3 == '1' ? 'selected' : '' }} value="1">Perabot</option>
                      <option {{$morse_3 == '2' ? 'selected' : '' }} value="2">Tongkat/Alat Penopang</option>
                      <option {{$morse_3 == '3' ? 'selected' : '' }} value="3">Tidak ada/Kursi Roda/Perawat/Tirah Baring</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">TERPASANG INFUS</label>
                  <div class="col-lg-1">
                    <select disabled class="form-control m-bot15" name="morse_4">
                      <option disabled selected style="display:none"></option>
                      <option {{$morse_4 == False ? 'selected' : ''}} value="false">Tidak</option>
                      <option {{$morse_4 == True ? 'selected' : ''}} value="true">Ya</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">GAYA BERJALAN</label>
                  <div class="col-lg-7">
                    <select disabled class="form-control m-bot15" name="morse_5">
                      <option disabled selected style="display:none"></option>
                      <option {{$morse_5 == '1' ? 'selected' : '' }} value="1">Terganggu</option>
                      <option {{$morse_5 == '2' ? 'selected' : '' }} value="2">Lemah</option>
                      <option {{$morse_5 == '3' ? 'selected' : '' }} value="3">Normal/Tirah Baring/Imobilisasi</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label>
                  <div class="col-lg-7">
                    <select disabled class="form-control m-bot15" name="morse_6">
                      <option disabled selected style="display:none"></option>
                      <option {{$morse_6 == '1' ? 'selected' : ''}} value="1">Sering lupa akan keterbatasan yang dimiliki</option>
                      <option {{$morse_6 == '2' ? 'selected' : ''}} value="2">Orientasi baik terhadap kemampuan diri sendiri</option>
                    </select>
                  </div>
                </div>
              </div>
            </section>

            @elseif($jenis_risiko_jatuh == 'Edmunson')
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
                    <select disabled class="form-control m-bot15" name="edmunson_1">
                      <option disabled selected style="display:none"></option>
                      <option {{$edmunson_1 == '1' ? 'selected' : ''}} value="1">Kesadaran baik/orientasi baik setiap saat </option>
                      <option {{$edmunson_1 == '2' ? 'selected' : ''}} value="2">Agitasi/Ansietas</option>
                      <option {{$edmunson_1 == '3' ? 'selected' : ''}} value="3">Kadang-kadang bingung</option>
                      <option {{$edmunson_1 == '4' ? 'selected' : ''}} value="4">Bingung/Disorientasi</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS</label>
                  <div class="col-lg-7">
                    <select disabled class="form-control m-bot15" name="edmunson_2">
                      <option disabled selected style="display:none"></option>
                      <option {{$edmunson_2 == '1' ? 'selected' : ''}} value="1">Kelainan Neurologi </option>
                      <option {{$edmunson_2 == '2' ? 'selected' : ''}} value="2">Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)</option>
                      <option {{$edmunson_2 == '3' ? 'selected' : ''}} value="3">Kelainan psikis / prilaku</option>
                      <option {{$edmunson_2 == '4' ? 'selected' : ''}} value="4">Diagnosis lain</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">ELIMINASI</label>
                  <div class="col-lg-7">
                    <select disabled class="form-control m-bot15" name="edmunson_3">
                      <option disabled selected style="display:none"></option>
                      <option {{$edmunson_3 == '1' ? 'selected' : ''}} value="1">Mandiri dan mampi mengontrol BAB/BAK</option>
                      <option {{$edmunson_3 == '2' ? 'selected' : ''}} value="2">Dower Catheter/Colostomy</option>
                      <option {{$edmunson_3 == '3' ? 'selected' : ''}} value="3">Eliminasi dengan bantuan</option>
                      <option {{$edmunson_3 == '4' ? 'selected' : ''}} value="4">Gangguan eliminasi (Inkontinensia/Nokturia/Frekwensi)</option>
                      <option {{$edmunson_3 == '5' ? 'selected' : ''}} value="5">Inkontinesia tetapi mampu untuk mobilisasi</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">PENGOBATAN</label>
                  <div class="col-lg-7">
                    <select disabled class="form-control m-bot15" name="edmunson_4">
                      <option disabled selected style="display:none"></option>
                      <option {{$edmunson_4 == '1' ? 'selected' : ''}} value="1">Tanpa obat-obatan</option>
                      <option {{$edmunson_4 == '2' ? 'selected' : ''}} value="2">Obat-obatan jantung</option>
                      <option {{$edmunson_4 == '3' ? 'selected' : ''}} value="3">Obat-obat psikotropika (termasuk Benzodiazepine dan Antidepresan)</option>
                      <option {{$edmunson_4 == '4' ? 'selected' : ''}} value="4">Mendapat tambahan obat-obatan dan/atau obat-obat PRN (psikiatri, antinyeri) yang diberikan dalam 24 jam terakhir</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSA</label>
                  <div class="col-lg-7">
                    <select disabled class="form-control m-bot15" name="edmunson_5">
                      <option disabled selected style="display:none"></option>
                      <option {{$edmunson_5 == '1' ? 'selected' : ''}} value="1">Bipolar/ Gangguan Schizoaffective</option>
                      <option {{$edmunson_5 == '2' ? 'selected' : ''}} value="2">Penggunaan Obat-obatan terlarang/ketergantungan alkohol</option>
                      <option {{$edmunson_5 == '3' ? 'selected' : ''}} value="3">Gangguan Depresi Mayor</option>
                      <option {{$edmunson_5 == '4' ? 'selected' : ''}} value="4">Dimensia/ Delirium</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">AMBULASI /KESEIMBANGAN </label>
                  <div class="col-lg-7">
                    <select disabled class="form-control m-bot15" name="edmunson_6">
                      <option disabled selected style="display:none"></option>
                      <option {{$edmunson_6 == '1' ? 'selected' : ''}} value="1">Mandiri/Keseimbangan Baik/Immobilisasi</option>
                      <option {{$edmunson_6 == '2' ? 'selected' : ''}} value="2">Dengan Alat Bantu (Kursi roda, walker,dll)</option>
                      <option {{$edmunson_6 == '3' ? 'selected' : ''}} value="3">Vertigo/kelemahan</option>
                      <option {{$edmunson_6 == '4' ? 'selected' : ''}} value="4">Goyah/membutuhkan mantuan dan menyadari kemampuan</option>
                      <option {{$edmunson_6 == '5' ? 'selected' : ''}} value="5">Goyah tapi lupa keterbatasan</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">NUTRISI</label>
                  <div class="col-lg-7">
                    <select disabled class="form-control m-bot15" name="edmunson_7">
                      <option disabled selected style="display:none"></option>
                      <option {{$edmunson_7 == '1' ? 'selected' : ''}} value="1">Mengkonsumsi sedikit makanan atau minuman  dalam 24 jam terakhir</option>
                      <option {{$edmunson_7 == '2' ? 'selected' : ''}} value="2">Tidak ada kelainan dengan nafsu makan</option>
                      <option {{$edmunson_7 == '3' ? 'selected' : ''}} value="3">Gangguan pola tidur yang dilaporkan oleh pasien, keluarga atau petugas</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                  <div class="col-lg-7">
                    <select disabled class="form-control m-bot15" name="edmunson_8">
                      <option disabled selected style="display:none"></option>
                      <option {{$edmunson_8 == '1' ? 'selected' : ''}} value="1">Tidak ada riwayat jatuh</option>
                      <option {{$edmunson_8 == '2' ? 'selected' : ''}} value="2">Ada riwayat jatuh dalam 3 bulan terakhir</option>
                    </select>
                  </div>
                </div>
              </div>
            </section>
            @endif


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
                        <input disabled type="radio" name="tekanan_intrakanal" {{$tekanan_intrakanal == False ? 'checked' : ''}} value="false">
                        Tidak ada keluhan
                      </label>
                    </div>
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input disabled type="radio" name="tekanan_intrakanal" {{$tekanan_intrakanal == True ? 'checked' : ''}} value="true">
                        Ada keluhan :
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" {{isset($list_tekanan_intrakanal[1]) ? 'checked' : ''}} name="list_tekanan_intrakanal_1">
                        Sakit Kepala
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" {{isset($list_tekanan_intrakanal[2]) ? 'checked' : ''}} name="list_tekanan_intrakanal_2">
                        Muntah
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" {{isset($list_tekanan_intrakanal[3]) ? 'checked' : ''}} name="list_tekanan_intrakanal_3">
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
                        <input disabled type="checkbox" name="pupil_1" {{isset($pupil[1]) ? 'checked' : ''}}>
                        Normal
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="pupil_2" {{isset($pupil[2]) ? 'checked' : ''}}>
                        Miosis
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="pupil_3" {{isset($pupil[3]) ? 'checked' : ''}}>
                        Midriasis
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="pupil_4" {{isset($pupil[4]) ? 'checked' : ''}}>
                        Isokor
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="pupil_5" {{isset($pupil[5]) ? 'checked' : ''}}>
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
                        <input disabled type="checkbox" name="neurosensorik_1" {{isset($neurosensorik[1]) ? 'checked' : ''}}>
                        Tidak ada keluhan
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="neurosensorik_2" {{isset($neurosensorik[2]) ? 'checked' : ''}}>
                        Spasme otot
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="neurosensorik_3" {{isset($neurosensorik[3]) ? 'checked' : ''}}>
                        Perubahan Sensorik
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="neurosensorik_4" {{isset($neurosensorik[4]) ? 'checked' : ''}}>
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
                        <input disabled type="checkbox" name="muskuloskeletal_1" {{isset($muskuloskeletal[1]) ? 'checked' : ''}}>
                        Tidak ada gangguan
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="muskuloskeletal_2" {{isset($muskuloskeletal[2]) ? 'checked' : ''}}>
                        Kerusakan jaringan/luka
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="muskuloskeletal_3" {{isset($muskuloskeletal[3]) ? 'checked' : ''}}>
                        Perubahan bentuk ekstremitas
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="muskuloskeletal_4" {{isset($muskuloskeletal[4]) ? 'checked' : ''}}>
                        Penurunan tingkat kesadaran
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="muskuloskeletal_5" {{isset($muskuloskeletal[5]) ? 'checked' : ''}}>
                        Fraktur
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="muskuloskeletal_6" {{isset($muskuloskeletal[6]) ? 'checked' : ''}}>
                        Dislokasi
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="muskuloskeletal_7" {{isset($muskuloskeletal[7]) ? 'checked' : ''}}>
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
                        <input disabled type="checkbox" name="integumen_1" {{isset($integumen[1]) ?  'checked' : ''}}>
                        Tidak ada gangguan
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="integumen_2" {{isset($integumen[2]) ?  'checked' : ''}}>
                        Luka bakar
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="integumen_3" {{isset($integumen[3]) ?  'checked' : ''}}>
                        Lecet
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="integumen_4" {{isset($integumen[4]) ?  'checked' : ''}}>
                        Luka decubitus
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="integumen_5" {{isset($integumen[5]) ?  'checked' : ''}}>
                        Luka robek
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="integumen_6" {{isset($integumen[6]) ?  'checked' : ''}}>
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
                        <input disabled type="checkbox" name="turgor_1" {{isset($turgor[1]) ? 'checked' : ''}}>
                        Baik
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="turgor_2" {{isset($turgor[2]) ? 'checked' : ''}}>
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
                        <input disabled type="radio" name="edema" value="false" {{$edema == False ? 'checked' : ''}}>
                        Tidak ada
                      </label>
                    </div>
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input disabled type="radio" name="edema" value="true" {{$edema == True ? 'checked' : ''}}>
                        Ada :
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="list_edema_1" {{isset($list_edema[1]) ? 'checked' : ''}}>
                        Ekstremitas
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="list_edema_2" {{isset($list_edema[2]) ? 'checked' : ''}}>
                        Abdomen
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="list_edema_3" {{isset($list_edema[3]) ? 'checked' : ''}}>
                        Seluruh tubuh
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="list_edema_4" {{isset($list_edema[4]) ? 'checked' : ''}}>
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
                        <input disabled type="radio" name="mukosa" value="Lembab" {{$mukosa == 'Lembab' ? 'checked' : ''}}>
                        Lembab
                      </label>
                    </div>
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input disabled type="radio" name="mukosa" value="Kering" {{$mukosa == 'Kering' ? 'checked' : ''}}>
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
                        <input disabled type="radio" name="pendarahan" value="false" {{$pendarahan == False ? 'checked' : ''}}>
                        Tidak ada
                      </label>
                    </div>
                    <div class="radio-inline" style="margin-right: 5mm;">
                      <label>
                        <input disabled type="radio" name="pendarahan" value="true" {{$pendarahan == True ? 'checked' : ''}}>
                        Ada :
                      </label>
                    </div>
                    <div class="checkbox-inline">
                      <div class="block">
                        <label>Jumlah</label>
                        <input disabled type="text" name="jumlah_pendarahan" value="{{$jumlah_pendarahan}}">
                        <label>cc</label>
                      </div>
                    </div>
                    <div class="checkbox-inline">
                      <div class="block">
                        <label>Warna</label>
                        <input disabled type="text" name="warna_pendarahan" value="{{$warna_pendarahan}}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Intoksisasi</label>
                  <div class="col-lg-10">
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="intoksisasi_1" {{isset($intoksisasi[1]) ? 'checked' : ''}}>
                        Makanan
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="intoksisasi_2" {{isset($intoksisasi[2]) ? 'checked' : ''}}>
                        Zak kimia
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="intoksisasi_3" {{isset($intoksisasi[3]) ? 'checked' : ''}}>
                        Minuman
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="intoksisasi_4" {{isset($intoksisasi[4]) ? 'checked' : ''}}>
                        Gas
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="intoksisasi_5" {{isset($intoksisasi[5]) ? 'checked' : ''}}>
                        Gigitan binatang
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="intoksisasi_6" {{isset($intoksisasi[6]) ? 'checked' : ''}}>
                        Zat kimia
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="intoksisasi_7" {{isset($intoksisasi[7]) ? 'checked' : ''}}>
                        Gas
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="intoksisasi_8" {{isset($intoksisasi[8]) ? 'checked' : ''}}>
                        Obat
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="intoksisasi_9" {{isset($intoksisasi[9]) ? 'checked' : ''}}>
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
                        <input disabled type="checkbox" name="eliminasi_1" {{isset($eliminasi[1]) ? 'checked' : ''}}>
                        BAB
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="eliminasi_2" {{isset($eliminasi[2]) ? 'checked' : ''}}>
                        BAK
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="eliminasi_3" {{isset($eliminasi[3]) ? 'checked' : ''}}>
                        Frekuensi
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="eliminasi_4" {{isset($eliminasi[4]) ? 'checked' : ''}}>
                        Frekuensi
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="eliminasi_5" {{isset($eliminasi[5]) ? 'checked' : ''}}>
                        Konsistensi
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="eliminasi_6" {{isset($eliminasi[6]) ? 'checked' : ''}}>
                        Warna
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="eliminasi_7" {{isset($eliminasi[7]) ? 'checked' : ''}}>
                        Warna
                      </label>
                    </div>
                    <div class="checkbox-inline" style="margin-right: 3mm;">
                      <label>
                        <input disabled type="checkbox" name="eliminasi_8" {{isset($eliminasi[8]) ? 'checked' : ''}}>
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
                        <input disabled type="checkbox" name="diagnosa_umum_1" {{isset($diagnosa_umum[1]) ? 'checked' : ''}}>
                        Aktual/ Resiko bersihan jalan nafas tidak efektif
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_umum_2" {{isset($diagnosa_umum[2]) ? 'checked' : ''}}>
                        Aktual/ Resiko aspirasi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_umum_3" {{isset($diagnosa_umum[3]) ? 'checked' : ''}}>
                        Aktual/ Resiko pola nafas tidak efektif
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_umum_4" {{isset($diagnosa_umum[4]) ? 'checked' : ''}}>
                        Aktual/ Resiko gangguan pertukaran gas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_umum_5" {{isset($diagnosa_umum[5]) ? 'checked' : ''}}>
                        Aktual/ penurunan curah jantung
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_umum_6" {{isset($diagnosa_umum[6]) ? 'checked' : ''}}>
                        Aktual/ Resiko gangguan perfusi jaringan celebral/perifer
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_umum_7" {{isset($diagnosa_umum[7]) ? 'checked' : ''}}>
                        Aktual/ Resiko gangguan keseimbangan cairan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_umum_8" {{isset($diagnosa_umum[8]) ? 'checked' : ''}}>
                        Aktual/ Resiko gangguan keseimbangan kontinuitas jaringan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_umum_9" {{isset($diagnosa_umum[9]) ? 'checked' : ''}}>
                        Aktual/ Resiko infeksi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_umum_10" {{isset($diagnosa_umum[10]) ? 'checked' : ''}}>
                        Resiko cedera / jatuh
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_umum_11" {{isset($diagnosa_umum[11]) ? 'checked' : ''}}>
                        Hypertermi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_umum_12" {{isset($diagnosa_umum[12]) ? 'checked' : ''}}>
                        Nyeri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_umum_13" {{isset($diagnosa_umum[13]) ? 'checked' : ''}}>
                        Gangguan kebutuhan nutrisi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_umum_14" {{isset($diagnosa_umum[14]) ? 'checked' : ''}}>
                        Lainnya
                        <input disabled placeholder="sebutkan" type="text" class="form-control" name="diagnosa_umum_lainnya" value="{{$diagnosa_umum_lainnya}}">
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Diagnosa keperawatan jiwa</label>
                  <div class="col-lg-8">
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_jiwa_1" {{isset($diagnosa_jiwa[1]) ? 'checked' : ''}}>
                        Gangguan persepsi sensori : halusinasi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_jiwa_2" {{isset($diagnosa_jiwa[2]) ? 'checked' : ''}}>
                        Perilaku kekerasan
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_jiwa_3" {{isset($diagnosa_jiwa[3]) ? 'checked' : ''}}>
                        Isolasi sosial
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_jiwa_4" {{isset($diagnosa_jiwa[4]) ? 'checked' : ''}}>
                        Gangguan konsep diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_jiwa_5" {{isset($diagnosa_jiwa[5]) ? 'checked' : ''}}>
                        Resiko bunuh diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_jiwa_6" {{isset($diagnosa_jiwa[6]) ? 'checked' : ''}}>
                        Intoleransi aktifitas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_jiwa_7" {{isset($diagnosa_jiwa[7]) ? 'checked' : ''}}>
                        Waham
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_jiwa_8" {{isset($diagnosa_jiwa[8]) ? 'checked' : ''}}>
                        Defisit perawatan diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_jiwa_9" {{isset($diagnosa_jiwa[9]) ? 'checked' : ''}}>
                        Kerusakan komunitas verbal
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_jiwa_10" {{isset($diagnosa_jiwa[10]) ? 'checked' : ''}}>
                        Koping individu tidak efektif
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_jiwa_11" {{isset($diagnosa_jiwa[11]) ? 'checked' : ''}}>
                        Aktual/Resiko Cemas/Takut
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="diagnosa_jiwa_12" {{isset($diagnosa_jiwa[12]) ? 'checked' : ''}}>
                        Lainnya
                        <input disabled placeholder="sebutkan" type="text" class="form-control" name="diagnosa_jiwa_lainnya" value="{{$diagnosa_jiwa_lainnya}}">
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Obat Parental </label>
                  <div class="col-sm-5">
                    <input disabled type="text" class="form-control" name="obat_parental" value="{{$obat_parental}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">EKG </label>
                  <div class="col-sm-5">
                    <input disabled type="text" class="form-control" name="ekg" value="{{$ekg}}">
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
                    <textarea class="form-control" style="resize: none;" rows="7" name="implementasi" readonly>{{$implementasi}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Evaluasi </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" style="resize: none;" rows="7" name="evaluasi" readonly>{{$evaluasi}}</textarea>
                  </div>
                </div>
              </div>
            </section>
          </form>
        </div>
      </div>
    </section>
    @include('layouts.tailscript')
  </body>
  <html>
