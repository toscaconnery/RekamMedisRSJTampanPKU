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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL PASIEN GIGI RAWAT JALAN</h3>
        </div>
      </div>
      @include('layouts.bio')
      
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">

            <table class="table table-striped table-advance table-hover">
              <tbody>
                <tr>
                  <th><i class="icon_document_alt"></i> Dokumen</th>
                  <th><i class="icon_calendar"></i> Tanggal Pengisian</th>
                  <th><i class="icon_profile"></i> Pengisi</th>
                  <th><i class="icon_cogs"></i> Aksi</th>
                  <th><i class="icon_document"></i> Cetak Dokumen</th>
                </tr>
                <tr>
                  <td>Perawat</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_asesmen_awal_gigi_perawat">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_gigi_perawat_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_asesmen_awal_gigi_perawat_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_gigi_pdf">Cetak</a>
                  </td>
                </tr>
                <tr>
                  <td>Dokter</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_asesmen_awal_gigi_dokter">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_gigi_dokter_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_asesmen_awal_gigi_dokter_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_gigi_pdf">Cetak</a>
                  </td>
                </tr>                  
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">

          <form class="form-horizontal">
            <section class="panel">
              <header class="panel-heading">
                Data Pasien
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-3">
                    <input type="text" disabled class="form-control" name="pekerjaan" value="{{$pekerjaan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-3">
                    <input type="text" disabled class="form-control" name="alamat" value="{{$alamat}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Telp/HP</label>
                  <div class="col-sm-3">
                    <input type="text" disabled class="form-control" name="no_telp" value="{{$no_telp}}">
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
                  <label class="control-label col-lg-2" for="inputSuccess">Tingkat nyeri</label>
                  <div class="col-lg-3">
                    <select disabled class="form-control m-bot15" name="tingkat">
                      <option {{$tingkat == 1 ? 'selected' : ''}} value="1">Tidak ada nyeri</option>
                      <option {{$tingkat == 2 ? 'selected' : ''}} value="2">Nyeri Kronis</option>
                      <option {{$tingkat == 3 ? 'selected' : ''}} value="3">Nyeri Akut</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Skala Nyeri </label>
                  <div class="col-sm-2">
                    <select disabled name="skala" class="form-control">
                      <option {{$skala == 0 ? 'selected' : ''}} value="0">0</option>
                      <option {{$skala == 1 ? 'selected' : ''}} value="1">1</option>
                      <option {{$skala == 2 ? 'selected' : ''}} value="2">2</option>
                      <option {{$skala == 3 ? 'selected' : ''}} value="3">3</option>
                      <option {{$skala == 4 ? 'selected' : ''}} value="4">4</option>
                      <option {{$skala == 5 ? 'selected' : ''}} value="5">5</option>
                      <option {{$skala == 6 ? 'selected' : ''}} value="6">6</option>
                      <option {{$skala == 7 ? 'selected' : ''}} value="7">7</option>
                      <option {{$skala == 8 ? 'selected' : ''}} value="8">8</option>
                      <option {{$skala == 9 ? 'selected' : ''}} value="9">9</option>
                      <option {{$skala == 10 ? 'selected' : ''}} value="10">10</option>
                    </select>
                  </div>

                  <label class="col-sm-2 control-label">Lokasi Nyeri </label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="lokasi" value="{{$lokasi}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Durasi Nyeri</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="durasi" value="{{$durasi}}">
                  </div>

                  <label class="col-sm-2 control-label">Frekuensi Nyeri</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="frekuensi" value="{{$frekuensi}}">
                  </div>
                </div>

                <div class="form-group" id="form_nyeri_hilang">
                  <label class="control-label col-lg-2" for="inputSuccess">Nyeri hilang, bila </label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="hilang1" {{isset($hilang[1]) ? 'checked' : ''}}>
                        Minum Obat
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="hilang2" {{isset($hilang[2]) ? 'checked' : ''}}>
                        Mendengar Musik
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="hilang3" {{isset($hilang[3]) ? 'checked' : ''}}>
                        Istirahat
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="hilang4" {{isset($hilang[4]) ? 'checked' : ''}}>
                        Berubah posisi/tidur
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="hilang5" {{isset($hilang[5]) ? 'checked' : ''}}>
                        Lain-lain
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Diberitahukan ke dokter?</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="pemberitahuan" value="1" {{$pemberitahuan == 1 ? 'checked' : ''}}>
                        Ya 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="pemberitahuan" value="0" {{$pemberitahuan == 0 ? 'checked' : ''}}>
                        Tidak 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Diberitahukan ke dokter pukul</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="waktu_pemberitahuan" value="{{$waktu_pemberitahuan}}">
                  </div>
                </div>
              </div>
            </section>

            {{-- risiko jatuh --}}
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
                        <input type="radio" disabled {{$jenis_resiko_jatuh == 'humpty_dumpty' ? 'checked' : ''}} name="jenis_resiko_jatuh" value="humpty_dumpty">
                        HUMPTY DUMPTY (Anak-anak) 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled {{$jenis_resiko_jatuh == 'morse' ? 'checked' : ''}} name="jenis_resiko_jatuh" value="morse">
                        MORSE (Dewasa) 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled {{$jenis_resiko_jatuh == 'edmunson' ? 'checked' : ''}} name="jenis_resiko_jatuh" value="edmunson">
                        EDMUNSON (Jiwa) 
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <div id="place_for_resiko_jatuh"></div>
            @if($jenis_resiko_jatuh == 'humpty_dumpty')
              <section class="panel hidden_panel" id="hidden_panel">
                <header class="panel-heading">
                  HUMPTY DUMPTY (Anak-anak)
                </header>
                <div class="panel-body">
                  <div class="col-lg-2"></div><h4>HUMPTY DUMPTY (Anak-anak) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">USIA</label>
                    <div class="col-lg-2">
                      <select disabled class="form-control m-bot15" name="usia">
                        <option></option>
                        <option {{$usia == 1 ? 'selected' : ''}} value="1">Dibawah 3 tahun </option>
                        <option {{$usia == 2 ? 'selected' : ''}} value="2">3 – 7 tahun </option>
                        <option {{$usia == 3 ? 'selected' : ''}} value="3">7 – 13 tahun </option>
                        <option {{$usia == 4 ? 'selected' : ''}} value="4">> 13 tahun </option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="diagnosis_hd">
                        <option></option>
                        <option {{$diagnosis_hd == 1 ? 'selected' : ''}} value="1">Kelainan Neurologi </option>
                        <option {{$diagnosis_hd == 2 ? 'selected' : ''}} value="2">Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)</option>
                        <option {{$diagnosis_hd == 3 ? 'selected' : ''}} value="3">Kelainan psikis / prilaku</option>
                        <option {{$diagnosis_hd == 4 ? 'selected' : ''}} value="4">Diagnosis lain</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">GANGGUAN KOGNITIF</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="gangguan_kognitif">
                        <option></option>
                        <option {{$gangguan_kognitif == 1 ? 'selected' : ''}} value="1">Tidak sadar terhadap keterbatasan (gangguan kesadaran, retardasi mental</option>
                        <option {{$gangguan_kognitif == 2 ? 'selected' : ''}} value="2">Lupa keterbatasan (anak yang hiperaktif)</option>
                        <option {{$gangguan_kognitif == 3 ? 'selected' : ''}} value="3">Mengetahui kemampuan diri</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">FAKTOR LINGKUNGAN</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="faktor_lingkungan">
                        <option></option>
                        <option {{$faktor_lingkungan == 1 ? 'selected' : ''}} value="1">Riwayat jatuh dari tempat tidur saat bayi</option>
                        <option {{$faktor_lingkungan == 2 ? 'selected' : ''}} value="2">Pasien menggunakan alat bantu atau box meubel</option>
                        <option {{$faktor_lingkungan == 3 ? 'selected' : ''}} value="3">Pasien berada di tempat tidur</option>
                        <option {{$faktor_lingkungan == 4 ? 'selected' : ''}} value="4">Di luar ruang rawat</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RESPON TERHADAP OPERASI/OBAT PENENANG/EFEK ANASTESI</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="waktu_respon_obat">
                        <option></option>
                        <option {{$waktu_respon_obat == 1 ? 'selected' : ''}} value="1">Dalam 24 Jam</option>
                        <option {{$waktu_respon_obat == 2 ? 'selected' : ''}} value="2">Dalam 48 Jam</option>
                        <option {{$waktu_respon_obat == 3 ? 'selected' : ''}} value="3">> 48 Jam</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">PENGGUNAAN OBAT</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="penggunaan_obat">
                        <option></option>
                        <option {{$penggunaan_obat == 1 ? 'selected' : ''}} value="1">Bermacam-macam obat yang digunakan : obat sedatif (kecuali pasien ICU yang menggunakan sedasi dan paralisis), Hiptonik Barbitural, Fonotiazin, Antidepresan, Laksansia / Diuretikan, Narkotik</option>
                        <option {{$penggunaan_obat == 2 ? 'selected' : ''}} value="2">Salah satu Pengobatan di atas</option>
                        <option {{$penggunaan_obat == 3 ? 'selected' : ''}} value="3">Pengobatan lain</option>
                      </select>
                    </div>
                  </div>
                </div>
              </section>
            @elseif($jenis_resiko_jatuh == 'morse')
              <section class="panel hidden_panel" id="hidden_panel">
                <header class="panel-heading">
                  MORSE (Dewasa)
                </header>
                <div class="panel-body">
                  <div class="col-lg-2"></div><h4>MORSE (Dewasa) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                    <div class="col-lg-1">
                      <select disabled class="form-control m-bot15" name="riwayat_jatuh_mrs">
                        <option></option>
                        <option {{$riwayat_jatuh_mrs == 1 ? 'selected' : ''}} value="1">Ya</option>
                        <option {{$riwayat_jatuh_mrs == 2 ? 'selected' : ''}} value="2">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS SEKUNDER</label>
                    <div class="col-lg-1">
                      <select disabled class="form-control m-bot15" name="diagnosis_sekunder">
                        <option></option>
                        <option {{$diagnosis_sekunder == 1 ? 'selected' : ''}} value="1">Ya</option>
                        <option {{$diagnosis_sekunder == 2 ? 'selected' : ''}} value="2">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">ALAT BANTU</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="alat_bantu">
                        <option></option>
                        <option {{$alat_bantu == 1 ? 'selected' : ''}} value="1">Perabot</option>
                        <option {{$alat_bantu == 2 ? 'selected' : ''}} value="2">Tongkat/Alat Penopang</option>
                        <option {{$alat_bantu == 3 ? 'selected' : ''}} value="3">Tidak ada/Kursi Roda/Perawat/Tirah Baring</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">TERPASANG INFUS</label>
                    <div class="col-lg-1">
                      <select disabled class="form-control m-bot15" name="terpasang_infus">
                        <option></option>
                        <option {{$terpasang_infus == 1 ? 'selected' : ''}} value="1">Ya</option>
                        <option {{$terpasang_infus == 2 ? 'selected' : ''}} value="2">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">GAYA BERJALAN</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="gaya_berjalan">
                        <option></option>
                        <option {{$gaya_berjalan == 1 ? 'selected' : ''}} value="1">Terganggu</option>
                        <option {{$gaya_berjalan == 2 ? 'selected' : ''}} value="2">Lemah</option>
                        <option {{$gaya_berjalan == 3 ? 'selected' : ''}} value="3">Normal/Tirah Baring/Imobilisasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="status_mental_mrs">
                        <option></option>
                        <option {{$status_mental_mrs == 1 ? 'selected' : ''}} value="1">Sering lupa akan keterbatasan yang dimiliki</option>
                        <option {{$status_mental_mrs == 2 ? 'selected' : ''}} value="2">Orientasi baik terhadap kemampuan diri sendiri</option>
                      </select>
                    </div>
                  </div>
                </div>
              </section>
            @elseif($jenis_resiko_jatuh == 'edmunson')
              <section class="panel hidden_panel" id="hidden_panel">
                <header class="panel-heading">
                  EDMUNSON (Jiwa)
                </header>
                <div class="panel-body">
                  <div class="col-lg-2"></div><h4>EDMUNSON (Jiwa) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="status_mental_edm">
                        <option></option>
                        <option {{$status_mental_edm == 1 ? 'selected' : ''}} value="1">Kesadaran baik/orientasi baik setiap saat </option>
                        <option {{$status_mental_edm == 2 ? 'selected' : ''}} value="2">Agitasi/Ansietas</option>
                        <option {{$status_mental_edm == 3 ? 'selected' : ''}} value="3">Kadang-kadang bingung</option>
                        <option {{$status_mental_edm == 4 ? 'selected' : ''}} value="4">Bingung/Disorientasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="diagnosis_edm">
                        <option></option>
                        <option {{$diagnosis_edm == 1 ? 'selected' : ''}} value="1">Kelainan Neurologi </option>
                        <option {{$diagnosis_edm == 2 ? 'selected' : ''}} value="2">Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)</option>
                        <option {{$diagnosis_edm == 3 ? 'selected' : ''}} value="3">Kelainan psikis / prilaku</option>
                        <option {{$diagnosis_edm == 4 ? 'selected' : ''}} value="4">Diagnosis lain</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">ELIMINASI</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="eliminasi">
                        <option></option>
                        <option {{$eliminasi == 1 ? 'selected' : ''}} value="1">Mandiri dan mampi mengontrol BAB/BAK</option>
                        <option {{$eliminasi == 2 ? 'selected' : ''}} value="2">Dower Catheter/Colostomy</option>
                        <option {{$eliminasi == 3 ? 'selected' : ''}} value="3">Eliminasi dengan bantuan</option>
                        <option {{$eliminasi == 4 ? 'selected' : ''}} value="4">Gangguan eliminasi (Inkontinensia/Nokturia/Frekwensi)</option>
                        <option {{$eliminasi == 5 ? 'selected' : ''}} value="5">Inkontinesia tetapi mampu untuk mobilisasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">PENGOBATAN</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="pengobatan">
                        <option></option>
                        <option {{$pengobatan == 1 ? 'selected' : ''}} value="1">Tanpa obat-obatan</option>
                        <option {{$pengobatan == 2 ? 'selected' : ''}} value="2">Obat-obatan jantung</option>
                        <option {{$pengobatan == 3 ? 'selected' : ''}} value="3">Obat-obat psikotropika (termasuk Benzodiazepine dan Antidepresan)</option>
                        <option {{$pengobatan == 4 ? 'selected' : ''}} value="4">Mendapat tambahan obat-obatan dan/atau obat-obat PRN (psikiatri, antinyeri) yang diberikan dalam 24 jam terakhir</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSA</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="diagnosa">
                        <option></option>
                        <option {{$diagnosa == 1 ? 'selected' : ''}} value="1">Bipolar/ Gangguan Schizoaffective</option>
                        <option {{$diagnosa == 2 ? 'selected' : ''}} value="2">Penggunaan Obat-obatan terlarang/ketergantungan alkohol</option>
                        <option {{$diagnosa == 3 ? 'selected' : ''}} value="3">Gangguan Depresi Mayor</option>
                        <option {{$diagnosa == 4 ? 'selected' : ''}} value="4">Dimensia/ Delirium</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">AMBULASI /KESEIMBANGAN </label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="ambulasi">
                        <option></option>
                        <option {{$ambulasi == 1 ? 'selected' : ''}} value="1">Mandiri/Keseimbangan Baik/Immobilisasi</option>
                        <option {{$ambulasi == 2 ? 'selected' : ''}} value="2">Dengan Alat Bantu (Kursi roda, walker,dll)</option>
                        <option {{$ambulasi == 3 ? 'selected' : ''}} value="3">Vertigo/kelemahan</option>
                        <option {{$ambulasi == 4 ? 'selected' : ''}} value="4">Goyah/membutuhkan mantuan dan menyadari kemampuan</option>
                        <option {{$ambulasi == 5 ? 'selected' : ''}} value="5">Goyah tapi lupa keterbatasan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">NUTRISI</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="nutrisi">
                        <option></option>
                        <option {{$nutrisi == 1 ? 'selected' : ''}} value="1">Mengkonsumsi sedikit makanan atau minuman  dalam 24 jam terakhir</option>
                        <option {{$nutrisi == 2 ? 'selected' : ''}} value="2">Tidak ada kelainan dengan nafsu makan</option>
                        <option {{$nutrisi == 3 ? 'selected' : ''}} value="3">Gangguan pola tidur yang dilaporkan oleh pasien, keluarga atau petugas</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="riwayat_jatuh_edm">
                        <option></option>
                        <option {{$riwayat_jatuh_edm == 1 ? 'selected' : ''}} value="1">Tidak ada riwayat jatuh</option>
                        <option {{$riwayat_jatuh_edm == 2 ? 'selected' : ''}} value="2">Ada riwayat jatuh dalam 3 bulan terakhir</option>
                      </select>
                    </div>
                  </div>
                </div>
              </section>
            @endif
          </form>
        </div>
      </div>
    </section>

    @include('layouts.tailscript')

  </body>


  <html>