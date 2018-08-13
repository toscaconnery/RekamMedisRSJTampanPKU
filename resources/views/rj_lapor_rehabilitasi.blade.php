<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Asesmen Wajib Lapor dan Rehabilitasi Medis</title>

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN WAJIB LAPOR DAN REHABILITASI MEDIS</h3>
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
                Dokumen Asesmen Wajib Lapor dan Rehabilitasi Medis
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
                    <td>Asesmen Wajib Lapor dan Rehabilitasi Medis</td>
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
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Kedatangan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat tempat tinggal</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Telp/HP</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Informasi Demografis
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Status Perkawinan</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="a1" id="optionsRadios1" value="" checked>
                          Belum Menikah
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="a1" id="optionsRadios1" value="" checked>
                          Menikah
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="a1" id="optionsRadios1" value="" checked>
                          Duda/Janda
                        </label>
                      </div>  
                    </div>

                    <label class="control-label col-lg-2" for="inputSuccess">Pendidikan Terakhir</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="a2" id="optionsRadios1" value="" checked>
                          Tamat SD
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="a2" id="optionsRadios1" value="" checked>
                          Tamat SLTP
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="a2" id="optionsRadios1" value="" checked>
                          Tamat SLTA
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="a2" id="optionsRadios1" value="" checked>
                          Tamat Akademi
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="a2" id="optionsRadios1" value="" checked>
                          Tamat PT
                        </label>
                      </div>  
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Status Medis
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="control-label col-lg-3" for="inputSuccess">Penyakit/kondisi lain yang menyertai</label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Penyakit</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Dirawat tahun</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Lama dirawat</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Riwayat Penyakit</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="a3" id="optionsRadios1" value="" checked>
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="a3" id="optionsRadios1" value="" checked>
                          Tidak
                        </label>
                      </div>
                    </div>
                    <label class="col-sm-2 control-label">Jenis penyakit</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Saat ini sedang menjalani terapi medis?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="a4" id="optionsRadios1" value="" checked>
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="a4" id="optionsRadios1" value="" checked>
                          Tidak
                        </label>
                      </div>
                    </div>
                    <label class="col-sm-2 control-label">Jenis terapi medis yang dijalani saat ini</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Status Pekerjaan/Dukungan Hidup
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Status Pekerjaan</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="a5" id="optionsRadios1" value="" checked>
                          Tidak Bekerja
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="a5" id="optionsRadios1" value="" checked>
                          Bekerja
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="a5" id="optionsRadios1" value="" checked>
                          Mahasiswa/Pelajar
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="a5" id="optionsRadios1" value="" checked>
                          Ibu Rumah Tangga
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Pola Pekerjaan</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="a6" id="optionsRadios1" value="" checked>
                          Purna Waktu
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="a6" id="optionsRadios1" value="" checked>
                          Paruh Waktu
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="a6" id="optionsRadios1" value="" checked>
                          Tidak Tentu
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kode Pekerjaan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Keterampilan teknis yang dimiliki</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Adakah yang memberi dukungan hidup bagi anda?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="a7" id="optionsRadios1" value="" checked>
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="a7" id="optionsRadios1" value="" checked>
                          Tidak
                        </label>
                      </div>
                    </div>

                    <label class="col-sm-2 control-label">Bila ya, siapakah?</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Dalam bentuk apakah</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Finansial
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tempat Tinggal
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Makan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Pengobatan/Perawatan
                                              </label>
                      </div>
                    </div>
                  </div>


                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Status Penggunaan Narkotika
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Alkohol</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="b1" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="b1" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                    <label class="col-sm-2 control-label">Cara Pakai</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Heroin</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="b2" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="b2" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                    <label class="col-sm-2 control-label">Cara Pakai</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Metadon/Buprenorfin</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="b3" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="b3" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                    <label class="col-sm-2 control-label">Cara Pakai</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Oplat lain/Analgesik</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="b4" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="b4" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                    <label class="col-sm-2 control-label">Cara Pakai</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Barbiturat</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="b5" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="b5" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                    <label class="col-sm-2 control-label">Cara Pakai</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Sedatif/Hiptonik</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="b6" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="b6" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                    <label class="col-sm-2 control-label">Cara Pakai</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Kokain</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="b7" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="b7" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                    <label class="col-sm-2 control-label">Cara Pakai</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Amfetamin</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="b8" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="b8" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                    <label class="col-sm-2 control-label">Cara Pakai</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Kanabis</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="b9" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="b9" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                    <label class="col-sm-2 control-label">Cara Pakai</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Halusinogen</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="b10" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="b10" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                    <label class="col-sm-2 control-label">Cara Pakai</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Inhalan</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="b11" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="b11" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                    <label class="col-sm-2 control-label">Cara Pakai</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Lebih dari 1 zat/hari termasuk alkohol</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="b12" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="b12" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis zat utama yang disalahgunakan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Pernahkah menjalani terapi rehabilitasi?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="c1" id="optionsRadios1" value="" checked>
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="c1" id="optionsRadios1" value="" checked>
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis terapi rehabilitasi yang dijalani?</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Pernahkah mengalami overdosis?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="c2" id="optionsRadios1" value="" checked>
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="c2" id="optionsRadios1" value="" checked>
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kapan dan bagaimana penanggulangannya?</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Waktu overdosis</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Cara penanggulangan</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="c3" id="optionsRadios1" value="" checked>
                          Perawatan di RS
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="c3" id="optionsRadios1" value="" checked>
                          Perawatan di puskesmas
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="c3" id="optionsRadios1" value="" checked>
                          Sendiri
                        </label>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Status Legal
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Mencuri di toko/vandalisme</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">Bebas bersyarat/masa percobaan</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">Masalah narkoba</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label">Pemalsuan</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Penyerangan bersenjata</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">Pembobolan dan pencurian</label>
                      <div class="col-sm-1">
                        <input type="text" class="form-control">
                      </div>
                    <label class="col-sm-2 control-label">Perampokan</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">Penyerangan</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pemabakan Rumah</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">Perkosaan</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">Pembunuhan</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">Pelacuran</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Melecehkan pengadilan</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">Lain-lain</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Berapa kali tuntutan di atas berakibat vonis hukuman?</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Riwayat keluarga/Sosial
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">apakah anda hidup dengan seseorang yang mempunyai masalah penyalahgunaan zat sekarang ini?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="d1" id="optionsRadios1" value="" checked>
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="d2" id="optionsRadios1" value="" checked>
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Siapakah mereka?</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Saudara kandung/tiri
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Ayah/Ibu
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Pasangan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Om/tante
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  teman
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Lain-lain
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sebutkan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Ibu</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="e1" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="e1" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Ayah</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="e2" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="e2" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Adik/Kakak</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="e3" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="e3" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Pasangan</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="e4" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="e4" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Anak-anak</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="e5" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="e5" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Keluarga yang berarti</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="e6" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="e6" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                    <label class="col-sm-2 control-label">Bila ya, siapakah?</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Teman akrab</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="e7" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="e7" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tetangga</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="e8" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="e8" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Teman sekerja</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="e9" id="optionsRadios1" value="" checked>
                          30 Hari Terakhir
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="e9" id="optionsRadios1" value="" checked>
                          Sepanjang hidup
                        </label>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Status Psikiatris
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Mengalami depresi serius (kesedihan, putus asa, kehilangan minat, susah konsentrasi)</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  30 Hari terakhir
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Sepanjang hidup
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Mengalami rasa cemas serius/keterangan, gelisah, merasa khawatir berlebihan</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  30 Hari terakhir
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Sepanjang hidup
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Mengalami halusinasi (melihat/mendengar sesuatu yang tidak ada obyeknya)</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  30 Hari terakhir
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Sepanjang hidup
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Mengalami kesulitan mengingat atau fokus pada sesuatu</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  30 Hari terakhir
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Sepanjang hidup
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Mengalami kesukaran mengontrol perilaku kasar, termasuk kemarahan atau kekerasan</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  30 Hari terakhir
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Sepanjang hidup
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Mengalami pikiran serius untuk bunuh diri</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  30 Hari terakhir
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Sepanjang hidup
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Berusaha untuk bunuh diri</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  30 Hari terakhir
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Sepanjang hidup
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Menerima pengobatan dari psikiater</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  30 Hari terakhir
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Sepanjang hidup
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sebutkan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Pemeriksaan Fisik
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tekanan darah</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">Nadi</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">Pernapasan (RR)</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">Suhu</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sistem pencernaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sistem jantung dan pembuluh darah</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sistem saraf pusat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">THT dan Kulit</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sistem pencernaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Hasil Urinalis</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name=""> Benzodiazepin
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name=""> Kanabis
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="3" name=""> Opiat
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="4" name=""> Amfetamin 
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="5" name=""> Kokain 
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="6" name=""> Barbiturat
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="7" name=""> Alkohol
                      </label>
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Kedatangan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nomor Rekam Medik?</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama?</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Kesimpulan
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Medis</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pekerjaan/Dukungan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pekerjaan/Dukungan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Napza</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Legal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Keluarga/sosial</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Psikiatris</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Diagnosa Kerja
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Klien memenuhi kriteria diagnosis NAPZA</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Diagnosis Lainnya</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Rencana Terapi dan Rehabilitasi
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Resume masalah</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Rencana tindak Lanjut</label>
                    <div class="col-lg-10">
                      <div class="radio">
                        <label>
                          <input type="radio" name="s1" id="optionsRadios1" value="" checked>
                          Asesmen Lanjutan/Mendalam
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="s1" id="optionsRadios1" value="" checked>
                          Evaluasi Psikologis
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="s1" id="optionsRadios1" value="" checked>
                          Program Detoksifikasi
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="s1" id="optionsRadios1" value="" checked>
                          Wawancara Motivasional
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="s1" id="optionsRadios1" value="" checked>
                          Intervensi Singkat
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="s1" id="optionsRadios1" value="" checked>
                          Terapi Rumatan
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="s1" id="optionsRadios1" value="" checked>
                          Rehabilitasi rawat inap
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="s1" id="optionsRadios1" value="" checked>
                          Konseling
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="s1" id="optionsRadios1" value="" checked>
                          Lain-lain
                        </label>
                      </div>
                    </div>
                    
                    
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sebutkan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Dokter?</label>
                    <div class="col-sm-2">
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