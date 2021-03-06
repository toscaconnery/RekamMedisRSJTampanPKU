<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Asesmen Awal Pasien Gigi Rawat Jalan</title>

  <!-- Bootstrap CSS -->
  <link href="{{url('')}}/admin_bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{url('')}}/admin_bootstrap/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{url('')}}/admin_bootstrap/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="{{url('')}}/admin_bootstrap/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{url('')}}/admin_bootstrap/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="{{url('')}}/admin_bootstrap/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{url('')}}/admin_bootstrap/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{url('')}}/admin_bootstrap/css/owl.carousel.css" type="text/css">
  <link href="{{url('')}}/admin_bootstrap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!--datepicker styles -->
  <link href="{{url('')}}/admin_bootstrap/css/daterangepicker.css" rel="stylesheet" />
  <link href="{{url('')}}/admin_bootstrap/css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="{{url('')}}/admin_bootstrap/css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{url('')}}/admin_bootstrap/css/fullcalendar.css">
  <link href="{{url('')}}/admin_bootstrap/css/widgets.css" rel="stylesheet">
  <link href="{{url('')}}/admin_bootstrap/css/style.css" rel="stylesheet">
  <link href="{{url('')}}/admin_bootstrap/css/style-responsive.css" rel="stylesheet" />
  <link href="{{url('')}}/admin_bootstrap/css/xcharts.min.css" rel=" stylesheet">
  <link href="{{url('')}}/admin_bootstrap/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

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
            <!--<ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-file-text-o"></i>Form elements</li>
            </ol>-->
          </div>
        </div>
        <div class="panel-body bio-graph-info">
          <h1>[No. RM]</h1>
          <div class="row">
            <div class="bio-row">
              <p><span>Nama Pasien </span>: [Nama Pasien] </p>
            </div>
            <div class="bio-row">
              <p><span>Tanggal Lahir</span>: 27 Agustus 1996</p>
            </div>
            <div class="bio-row">
              <p><span>Jenis Kelamin </span>: L</p>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Dokumen Asesmen Awal Pasien Gigi Rawat Jalan
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
                    <td>Asesmen Awal Pasien Gigi Rawat Jalan</td>
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

            <section class="panel">
              <header class="panel-heading">
                Data Pasien
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" disabled="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" disabled="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Telp/HP</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <form class="form-horizontal " method="post" action="penilaian_tingkat_nyeri">
              {{ csrf_field() }}
              <section class="panel">
                <header class="panel-heading">
                  Penilaian Tingkat Nyeri
                </header>

                <div class="panel-body">
                  <div class="form-group">
                    
                    <div class="col-lg-12">
                      <img src="img/nyeri.jpg" alt="Smiley face" height="300" width="550">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tingkat nyeri</label>
                    <div class="col-lg-3">
                      <select class="form-control m-bot15" name="tingkat">
                        <option value="1">Tidak ada nyeri</option>
                        <option value="2">Nyeri Kronis</option>
                        <option value="3">Nyeri Akut</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Skala Nyeri </label>
                    <div class="col-sm-2">
                      <select name="skala" class="form-control">
                        <option value="0">0</option>
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
                      <input type="text" class="form-control" name="lokasi">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Durasi Nyeri</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="durasi">
                    </div>

                    <label class="col-sm-2 control-label">Frekuensi Nyeri</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="frekuensi">
                    </div>
                  </div>

                  <div class="form-group" id="form_nyeri_hilang">
                    <label class="control-label col-lg-2" for="inputSuccess">Nyeri hilang, bila </label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="hilang1">
                          Minum Obat
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="hilang2">
                          Mendengar Musik
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="hilang3">
                          Istirahat
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="hilang4">
                          Berubah posisi/tidur
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="hilang5">
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
                          <input type="radio" name="pemberitahuan" value="1">
                          Ya 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="pemberitahuan" value="0">
                          Tidak 
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Diberitahukan ke dokter pukul</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="waktu_pemberitahuan">
                    </div>
                  </div>

                  <input type="hidden" name="jenis_form" value="gigi">

                  <button type="submit">Simpan</button>

                </div>
              </section>
            </form>

            <section class="panel">
              <header class="panel-heading">
                Penilaian Risiko Jatuh
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Risiko Jatuh</label>
                    <div class="col-lg-4">
                      <div class="radio">
                        <label>
                          <input type="radio" name="cc" id="optionsRadios1" value="Baik" checked>
                          HUMPTY DUMPTY (Anak-anak) 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="cc" id="optionsRadios1" value="Tidak Baik" checked>
                          MORSE (Dewasa) 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="cc" id="optionsRadios1" value="Tidak Baik" checked>
                          EDMUNSON (Jiwa) 
                        </label>
                      </div>
                    </div>
                  </div>


                </form>
              </div>
            </section>

            <form class="form-horizontal " method="post" action="humpty_dumpty">
              {{ csrf_field() }}
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
                      <select class="form-control m-bot15" name="usia">
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
                      <select class="form-control m-bot15" name="diagnosis">
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
                      <select class="form-control m-bot15" name="gangguan_kognitif">
                        <option value="1">Tidak sadar terhadap keterbatasan (gangguan kesadaran, retardasi mental</option>
                        <option value="2">Lupa keterbatasan (anak yang hiperaktif)</option>
                        <option value="3">Mengetahui kemampuan diri</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">FAKTOR LINGKUNGAN</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="faktor_lingkungan">
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
                      <select class="form-control m-bot15" name="waktu_respon_obat">
                        <option value="1">Dalam 24 Jam</option>
                        <option value="2">Dalam 48 Jam</option>
                        <option value="3">> 48 Jam</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">PENGGUNAAN OBAT</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="penggunaan_obat">
                        <option value="1">Bermacam-macam obat yang digunakan : obat sedatif (kecuali pasien ICU yang menggunakan sedasi dan paralisis), Hiptonik Barbitural, Fonotiazin, Antidepresan, Laksansia / Diuretikan, Narkotik</option>
                        <option value="2">Salah satu Pengobatan di atas</option>
                        <option value="3">Pengobatan lain</option>
                      </select>
                    </div>
                  </div>

                  <input type="hidden" name="jenis_form" value="gigi">

                  <button type="submit">Simpan</button>

                </div>
              </section>
            </form>

            <form class="form-horizontal " method="post" action="morse">
              {{ csrf_field() }}
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
                      <select class="form-control m-bot15" name="riwayat_jatuh">
                        <option value="true">Ya</option>
                        <option value="false">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS SEKUNDER</label>
                    <div class="col-lg-1">
                      <select class="form-control m-bot15" name="diagnosis_sekunder">
                        <option value="true">Ya</option>
                        <option value="false">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">ALAT BANTU</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="alat_bantu">
                        <option value="1">Perabot</option>
                        <option value="2">Tongkat/Alat Penopang</option>
                        <option value="3">Tidak ada/Kursi Roda/Perawat/Tirah Baring</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">TERPASANG INFUS</label>
                    <div class="col-lg-1">
                      <select class="form-control m-bot15" name="terpasang_infus">
                        <option value="true">Ya</option>
                        <option value="false">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">GAYA BERJALAN</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="gaya_berjalan">
                        <option value="1">Terganggu</option>
                        <option value="2">Lemah</option>
                        <option value="3">Normal/Tirah Baring/Imobilisasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="status_mental">
                        <option value="1">Sering lupa akan keterbatasan yang dimiliki</option>
                        <option value="2">Orientasi baik terhadap kemampuan diri sendiri</option>
                      </select>
                    </div>
                  </div>

                  <input type="hidden" name="jenis_form" value="gigi">
                  
                  <button type="submit">Simpan</button>

                </div>
              </section>
            </form>

                        <form class="form-horizontal " method="post" action="edmunson">
              {{ csrf_field() }}
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
                      <select class="form-control m-bot15" name="status_mental">
                        <option value="1">Kesadaran baik/orientasi baik setiap saat </option>
                        <option value="2">Agitasi/Ansietas</option>
                        <option value="3">Kadang-kadang bingung</option>
                        <option value="4">Bingung/Disorientasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">ELIMINASI</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="eliminasi">
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
                      <select class="form-control m-bot15" name="pengobatan">
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
                      <select class="form-control m-bot15" name="diagnosa">
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
                      <select class="form-control m-bot15" name="ambulasi">
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
                      <select class="form-control m-bot15" name="nutrisi">
                        <option value="1">Mengkonsumsi sedikit makanan atau minuman  dalam 24 jam terakhir</option>
                        <option value="2">Tidak ada kelainan dengan nafsu makan</option>
                        <option value="3">Gangguan pola tidur yang dilaporkan oleh pasien, keluarga atau petugas</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="riwayat_jatuh">
                        <option value="1">Tidak ada riwayat jatuh</option>
                        <option value="2">Ada riwayat jatuh dalam 3 bulan terakhir</option>
                      </select>
                    </div>
                  </div>

                  <input type="hidden" name="jenis_form" value="gigi">

                  <button type="submit">Simpan</button>

                </div>
              </section>
            </form>

            <section class="panel">
              <header class="panel-heading">
                Data Medik
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">1. Golongan Darah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">2. Tekanan Darah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">3. Tekanan Jantung</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="jantung" id="optionsRadios1" value="Baik" checked>
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="jantung" id="optionsRadios1" value="Tidak Baik" checked>
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">4. Diabetes</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="diabetes" id="optionsRadios1" value="Baik" checked>
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="diabetes" id="optionsRadios1" value="Tidak Baik" checked>
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">5. Hepatitis</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="hepatitis" id="optionsRadios1" value="Baik" checked>
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="hepatitis" id="optionsRadios1" value="Tidak Baik" checked>
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">6. Penyakit Lainnya</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="lainnya" id="optionsRadios1" value="Baik" checked>
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="lainnya" id="optionsRadios1" value="Tidak Baik" checked>
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">7. Alergi Obat</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="obat" id="optionsRadios1" value="Baik" checked>
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="obat" id="optionsRadios1" value="Tidak Baik" checked>
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">8. Alergi Makanan</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="makanan" id="optionsRadios1" value="Baik" checked>
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="makanan" id="optionsRadios1" value="Tidak Baik" checked>
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-12">
                      <center><img src="img/gigi.jpg" alt="Smiley face" height="400" width="950"></center>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-12">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 10%; text-align: center;vertical-align:middle;">Gigi</th>
                            <th style="width: 90%; text-align: center;vertical-align:middle;">Keterangan</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          <tr>
                            <td style="text-align:center;">
                              <select class="form-control m-bot15" name="status_mental">

                              <option value="0">-</option>
                              <option value="11">11/51</option>
                              <option value="12">12/52</option>
                              <option value="13">13/53</option>
                              <option value="14">14/54</option>
                              <option value="15">15/55</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>

                              <option value="21">21/61</option>
                              <option value="22">22/62</option>
                              <option value="23">23/63</option>
                              <option value="24">24/64</option>
                              <option value="25">25/65</option>
                              <option value="26">26</option>
                              <option value="27">27</option>
                              <option value="28">28</option>

                              <option value="31">31/71</option>
                              <option value="32">32/72</option>
                              <option value="33">33/73</option>
                              <option value="34">34/74</option>
                              <option value="35">35/75</option>
                              <option value="36">36</option>
                              <option value="37">37</option>
                              <option value="38">38</option>

                              <option value="41">41/81</option>
                              <option value="42">42/82</option>
                              <option value="43">43/83</option>
                              <option value="44">44/84</option>
                              <option value="45">45/85</option>
                              <option value="46">46</option>
                              <option value="47">47</option>
                              <option value="48">48</option>
                              </select>
                            </td>
                            <td><input type="text" class="form-control" name="" required></td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Alergi Makanan</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="makanan" id="optionsRadios1" value="Baik" checked>
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="makanan" id="optionsRadios1" value="Tidak Baik" checked>
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Oklusi</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="oklusi" id="optionsRadios1" value="Baik" checked>
                          Normal Bite
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="oklusi" id="optionsRadios1" value="Tidak Baik" checked>
                          Cross Bite
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="oklusi" id="optionsRadios1" value="Tidak Baik" checked>
                          Deep Bite
                        </label>
                      </div>

                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Torus Palatinus</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="palatinus" id="optionsRadios1" value="Baik" checked>
                          Tidak ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="palatinus" id="optionsRadios1" value="Tidak Baik" checked>
                          Kecil
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="palatinus" id="optionsRadios1" value="Tidak Baik" checked>
                          Sedang
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="palatinus" id="optionsRadios1" value="Tidak Baik" checked>
                          Besar
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="palatinus" id="optionsRadios1" value="Tidak Baik" checked>
                          Multiple
                        </label>
                      </div>

                    </div>

                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Torus Mandibularis</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="mandibularis" id="optionsRadios1" value="Baik" checked>
                          Tidak ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="mandibularis" id="optionsRadios1" value="Tidak Baik" checked>
                          Kecil
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="mandibularis" id="optionsRadios1" value="Tidak Baik" checked>
                          Sedang
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="mandibularis" id="optionsRadios1" value="Tidak Baik" checked>
                          Besar
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="mandibularis" id="optionsRadios1" value="Tidak Baik" checked>
                          Multiple
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Palatum</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="palatum" id="optionsRadios1" value="Baik" checked>
                          Dalam
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="palatum" id="optionsRadios1" value="Tidak Baik" checked>
                          Sedang
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="palatum" id="optionsRadios1" value="Tidak Baik" checked>
                          Rendah
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Supernumerary Teeth</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="teeth" id="supernumerary" value="Ada" checked>
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="teeth" id="optionsRadios1" value="Tidak ada" checked>
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Diastema</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="diastema" id="supernumerary" value="Ada" checked>
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="diastema" id="optionsRadios1" value="Tidak ada" checked>
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Gigi Anomali</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="anomali" id="supernumerary" value="Ada" checked>
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="anomali" id="optionsRadios1" value="Tidak ada" checked>
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Lain-lain</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

          </div>
        </div>
      </section>

      <!-- javascripts -->
      <script src="{{url('')}}/js/jquery.js"></script>
      <script src="{{url('')}}/js/bootstrap.min.js"></script>
      <!-- nice scroll -->
      <script src="{{url('')}}/js/jquery.scrollTo.min.js"></script>
      <script src="{{url('')}}/js/jquery.nicescroll.js" type="text/javascript"></script>

      <!-- jquery ui -->
      <script src="{{url('')}}/js/jquery-ui-1.9.2.custom.min.js"></script>

      <!--custom checkbox & radio-->
      <script type="{{url('')}}/text/javascript" src="{{url('')}}/admin_bootstrap/js/ga.js"></script>
      <!--custom switch-->
      <script src="{{url('')}}/js/bootstrap-switch.js"></script>
      <!--custom tagsinput-->
      <script src="{{url('')}}/js/jquery.tagsinput.js"></script>

      <!-- colorpicker -->

      <!-- bootstrap-wysiwyg -->
      <script src="{{url('')}}/js/jquery.hotkeys.js"></script>
      <script src="{{url('')}}/js/bootstrap-wysiwyg.js"></script>
      <script src="{{url('')}}/js/bootstrap-wysiwyg-custom.js"></script>
      <script src="{{url('')}}/js/moment.js"></script>
      <script src="{{url('')}}/js/bootstrap-colorpicker.js"></script>
      <script src="{{url('')}}/js/daterangepicker.js"></script>
      <script src="{{url('')}}/js/bootstrap-datepicker.js"></script>
      <!-- ck editor -->
      <script type="text/javascript" src="{{url('')}}/assets/ckeditor/ckeditor.js"></script>
      <!-- custom form component script for this page-->
      <script src="{{url('')}}/js/form-component.js"></script>
      <!-- custome script for all page -->
      <script src="{{url('')}}/js/scripts.js"></script>

      <!-- javascripts -->
      <script src="{{url('')}}/admin_bootstrap/js/jquery.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery-ui-1.10.4.min.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="{{url('')}}/admin_bootstrap/js/jquery-ui-1.9.2.custom.min.js"></script>
      <!-- bootstrap -->
      <script src="{{url('')}}/admin_bootstrap/js/bootstrap.min.js"></script>
      <!-- nice scroll -->
      <script src="{{url('')}}/admin_bootstrap/js/jquery.scrollTo.min.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery.nicescroll.js" type="text/javascript"></script>
      <!-- charts scripts -->
      <script src="{{url('')}}/admin_bootstrap/assets/jquery-knob/js/jquery.knob.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery.sparkline.js" type="text/javascript"></script>
      <script src="{{url('')}}/admin_bootstrap/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/owl.carousel.js"></script>
      <!-- jQuery full calendar -->
      <script src="{{url('')}}/admin_bootstrap/js/fullcalendar.min.js"></script>
      <!-- Full Google Calendar - Calendar -->
      <script src="{{url('')}}/admin_bootstrap/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
      <!--script for this page only-->
      <script src="{{url('')}}/admin_bootstrap/js/calendar-custom.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery.rateit.min.js"></script>
      <!-- custom select -->
      <script src="{{url('')}}/admin_bootstrap/js/jquery.customSelect.min.js"></script>
      <script src="{{url('')}}/admin_bootstrap/assets/chart-master/Chart.js"></script>

      <!--custome script for all page-->
      <script src="{{url('')}}/admin_bootstrap/js/scripts.js"></script>
      <!-- custom script for this page-->
      <script src="{{url('')}}/admin_bootstrap/js/sparkline-chart.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/easy-pie-chart.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery-jvectormap-world-mill-en.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/xcharts.min.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery.autosize.min.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery.placeholder.min.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/gdp-data.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/morris.min.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/sparklines.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/charts.js"></script>
      <script src="{{url('')}}/admin_bootstrap/js/jquery.slimscroll.min.js"></script>

      {{-- =====NYERI===== --}}
      <script type="text/javascript">
        $(document).ready( function() {
          $('input[type=checkbox][name="hilang5"]').change(function() {
            var checkboxIsChecked = $('input[type=checkbox][name="hilang5"]').prop('checked');
            if(checkboxIsChecked) {
              $('#form_nyeri_hilang').after('<div class="form-group" id="field_nyeri_hilang"><label class="col-sm-2 control-label">Sebutkan </label><div class="col-sm-2"><input type="text" class="form-control" name="nyeri_hilang_input_text" required=""></div></div>');
            }
            else {
              $('#field_nyeri_hilang').hide();
            }
          });
        });
      </script>

      <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
  </body>


  <html>