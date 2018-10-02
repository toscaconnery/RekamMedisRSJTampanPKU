<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Ikhtisar Perawatan HIV dan Terapi Antiretroviral (ART)</title>

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Ikhtisar Perawatan HIV dan Terapi Antiretroviral (ART)</h3>
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
                Dokumen Ikhtisar Perawatan HIV dan Terapi Antiretroviral (ART)
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
                    <td>Ikhtisar Perawatan HIV dan Terapi Antiretroviral (ART)</td>
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
              <header class="panel-heading">Data Identitas Pasien</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">No. Reg. Nasional</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-2 control-label">NIK</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Ibu Kandung</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat Pasien</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">No. Telp. Pasien</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Pengawas Minum Obat (PMO)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hubungan Dengan Pasien</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat PMO</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">No. Telp. PMO</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Konfirmasi Tes HIV</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tempat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Entry Point</label>
                    <div class="col-lg-2">
                      <select class="form-control input-sm m-bot15">
                          <option>-</option>
                          <option>KIA</option>
                          <option>Rawat Jalan (TB, Anak, Penyakit Dalam, IMS, Lainnya ...)</option>
                          <option>Rawat Inap</option>
                          <option>Praktek Swasta</option>
                          <option>Jangkauan (Penasun, WPS, LSL, ...)</option>
                          <option>LSM</option>
                          <option>Datang Sendiri</option>
                          <option>Lainnya, uraikan ...</option>
                      </select>
                    </div>

                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sebutkan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Riwayat Alergi Obat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Riwayat Pribadi</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pendidikan</label>
                    <div class="col-lg-2">
                      <select class="form-control input-sm m-bot15">
                        <option>-</option>
                        <option>0 - Tidak Sekolah</option>
                        <option>1 - SD</option>
                        <option>2 - SMP</option>
                        <option>3 - SMA</option>
                        <option>4 - Akademi/PT</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-lg-2">
                      <select class="form-control input-sm m-bot15">
                        <option>-</option>
                        <option>0 - Tidak Bekerja</option>
                        <option>1 - Bekerja</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sebutkan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Faktor Risiko</label>
                    <div class="col-lg-8">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          1. KIA
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          2. Rawat Jalan(TB, Anak, Penyakit Dalam, IMS, lainnya ...)
                        </label>
                        <input type="text" class="form-control">
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          3. Rawat Inap
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          4. Praktek Swasta
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          5. Jangkauan (Penasun, WPS, LSL, ...)
                        </label>
                        <input type="text" class="form-control">
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          6. LSM
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          7. Datang Sendiri
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          8. Lainnya, uraikan ...
                        </label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Riwayat Keluarga/Mitra Seksual/Mitra Penasun</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status Pernikahan</label>
                     <div class="col-lg-2">
                      <select class="form-control input-sm m-bot15">
                        <option>-</option>
                        <option>Menikah</option>
                        <option>Belum Menikah</option>
                        <option>Janda/Duda</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hub</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Umur</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">HIV</label>
                    <div class="col-lg-2">
                      <select class="form-control input-sm m-bot15">
                        <option>+</option>
                        <option>-</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">ART</label>
                    <div class="col-lg-2">
                      <select class="form-control input-sm m-bot15">
                        <option>Ya</option>
                        <option>Tidak</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">NoRegNas</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Riwayat Terapi Antiretroviral</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pernah Menerima ART ?</label>
                    <div class="col-lg-2">
                      <select class="form-control input-sm m-bot15">
                        <option>Ya</option>
                        <option>Tidak</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">ART</label>
                    <div class="col-lg-2">
                      <select class="form-control input-sm m-bot15">
                        <option>1.PPIA</option>
                        <option>2.ART</option>
                        <option>3.PPP</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tempat ART dulu</label>
                    <div class="col-lg-2">
                      <select class="form-control input-sm m-bot15">
                        <option>1.RS Pem</option>
                        <option>2.RS Swasta</option>
                        <option>3.PKM</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama ARV</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Dosis ARV</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Lama Penggunaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Pemeriksaan Klinis dan Laboratorium</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kunjungan Pertama</label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Stad.Klinis</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">BB</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status Fungsional</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jumlah Cd4 (Cd4 % pada anak2)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Lain-lain</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Memenuhi syarat medis untuk ART</label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Stad.Klinis</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">BB</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status Fungsional</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jumlah Cd4 (Cd4 % pada anak2)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Lain-lain</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Saat mulai ART</label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Stad.Klinis</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">BB</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status Fungsional</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jumlah Cd4 (Cd4 % pada anak2)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Lain-lain</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Setelah 6 Bulan ART</label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Stad.Klinis</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">BB</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status Fungsional</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jumlah Cd4 (Cd4 % pada anak2)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Lain-lain</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Setelah 12 Bulan ART</label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Stad.Klinis</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">BB</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status Fungsional</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jumlah Cd4 (Cd4 % pada anak2)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Lain-lain</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Setelah 24 Bulan ART</label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Stad.Klinis</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">BB</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status Fungsional</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jumlah Cd4 (Cd4 % pada anak2)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Lain-lain</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Terapi Antiretroviral (ART)</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Subtitusi dalam lini-1 SWITCH ke lini-2 STOP</label>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Subtitusi</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="sbt" value="1">
                          1. Toksisitas/efek samping
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sbt" value="2">
                          2. Hamil
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sbt" value="3">
                          3. Risiko hamil
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sbt" value="4">
                          4. TB baru
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sbt" value="5">
                          5. Ada obat baru
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sbt" value="6">
                          6. Stock obat habis
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sbt" value="7">
                          7. Alasan lain
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Uraikan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 control-label">Switch</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="sbt" value="1">
                          1. Toksisitas/efek samping
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="swt" value="2">
                          2. Hamil
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="swt" value="3">
                          3. Risiko hamil
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="swt" value="4">
                          4. TB baru
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="swt" value="5">
                          5. Ada obat baru
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="swt" value="6">
                          6. Stock obat habis
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="swt" value="7">
                          7. Alasan lain
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="swt" value="7">
                          8. Gagal pengobatan secara klinis
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="swt" value="7">
                          9. Gagal Imunologis
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="swt" value="7">
                          10. Gagal virologis
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Uraikan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Stop</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="st" value="1">
                          1. Toksisitas/efek samping
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="st" value="2">
                          2. Hamil
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="st" value="3">
                          3. Gagal Pengobatan
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="st" value="4">
                          4. Adherens buruk
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="st" value="5">
                          5. Sakit/MRS
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="st" value="6">
                          6. Stok obat habis
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="st" value="7">
                          7. Kekurangan biaya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="st" value="8">
                          8. Keputusan pasien lainnya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="st" value="9">
                          9. Lain-lain
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
                    <label class="col-sm-2 control-label">Restar</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alasan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Panduan Baru</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Pengobatan TB Selama Perawatan HIV</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Klasifikasi TB</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Paduan TB</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="ptb" value="1">
                          1. Kategori I
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ptb" value="2">
                          2. Kategori II
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ptb" value="3">
                          3. Kategori anak
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ptb" value="4">
                          4. OAT lini 2 (MDR)
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tempat Pengobatan TB</label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kabupaten</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Sasaran Kesehatan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">No. Reg. TB Kabupaten/Kota</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading"></header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">

                <div class="form-group">
                    <label class="col-sm-2 control-label">Tipe TB</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="ttb" value="1">
                          1. Baru
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ttb" value="2">
                          2. Kambuh
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ttb" value="3">
                          3. Default
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ttb" value="4">
                          4. Gagal
                        </label>
                      </div>
                    </div>
                  </div>

                 <div class="form-group">
                    <label class="col-sm-2 control-label">Tgl.Mulai Terapi TB</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tgl.Selesai Terapi TB</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Indikasi Insial ART</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Indikasi Inisial ART</label>
                    <div class="col-lg-8">
                      <div class="radio">
                        <label>
                          <input type="radio" name="ii" value="1">
                          Penasun
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ii" value="2">
                          WPS
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ii" value="3">
                          LSL
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ii" value="4">
                          Waria
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ii" value="5">
                          Pasien Ko-Infeksi TB-HIV
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ii" value="6">
                          Pasien Ko-Infeksi Hepatitis B-HIV
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ii" value="7">
                          ODHA dengan pasangan negatif
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ii" value="8">
                          Lainnya (CD4 < Stadium Klinis atau 4/Ibu hamil)
                        </label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Ikhtisar Follow-Up Perawatan Pasien HIV dan Terapi Antiretroviral (ART)</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Kunjungan <small>(follow-up)</small></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Rencana Tanggal Kunjungan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pasien Rujuk Masuk</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="prm" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="prm" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Dengan ART</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="drt" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="drt" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Klinik Sebelumnya</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">BB</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">TB untuk anak</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status Fungsional</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="sfu" value="0">
                          1. Kerja
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sfu" value="1">
                          2. Ambulatori
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sfu" value="1">
                          3. Baring
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Stad Klinis</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hamil/Metode KB</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="hkb" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="hkb" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Infeksi Oportunistik</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          K - Kandidiasis
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          D - Diare cryptosporidia
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Cr - Mining itis cryptococal
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          PCP - Pneumocystis
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          CMV - Cytomeg alovirus
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Lain-Lain
                        </label>
                      </div>

                    </div>

                    <div class="col-lg-5">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          P - Peniliciliosis
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                           Z - Herpes Zoster
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          S - Herpessimpleks
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          T - Toxoplasmosis
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          H - Hepatitis
                        </label>
                      </div>
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Uraikan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Obat untuk IO</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status TB</label>
                    <div class="col-lg-9">
                      <div class="radio">
                        <label>
                          <input type="radio" name="stb" value="1">
                          1. Tidak ada gejala/tanda
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="stb" value="2">
                          2. Suspek TB (Rujuk ke klinik DOTS atau pemeriksaan sputum)
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="stb" value="3">
                          3. Terapi TB
                        </label> 
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="stb" value="4">
                          4. Tidak dilakukan skrining
                        </label> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pengobatan Pencegahan PPK<br><small>Pengobatan Pencegahan dengan Kotrimoksazol</small></label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="ppk" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ppk" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">PP INH<br><small>Pengobatan Pencegahan dengan INH (isoniazid)</small></label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="inh" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="inh" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hasil Akhir<br> <small>(kode></small></label>
                     <div class="col-lg-9">
                      <div class="radio">
                        <label>
                          <input type="radio" name="hkr" value="1">
                          1. Berobat
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="hkr" value="2">
                          2. Gagal selama pemberian PP INH
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="hkr" value="3">
                          3. Pindah
                        </label> 
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="hkr" value="4">
                          4. Meninggal
                        </label> 
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="hkr" value="5">
                          5. Efek samping Berat
                        </label> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Obat ARV dan Dosis yang diberikan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Adherence ART</label>
                    <div class="col-sm-8">
                      Periksalah adherence dengan menanyakan apakah pasien melupakan dosis obat. Tuliskan perkiraan tingkat adherence, misalnya (dosis 2 kali sehari)
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-lg-9">
                      <div class="radio">
                        <label>
                          <input type="radio" name="adr" value="1">
                          1. (> 95%) : artinya < 3 dosis lupa diminum dalam 30 hari
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="adr" value="2">
                          2. (80-95%) : artinya 3-12 dosis lupa diminum dalam 30 hari
                        </label>
                      </div>
                       <div class="radio">
                        <label>
                          <input type="radio" name="adr" value="3">
                          3. (< 80%) : artinya > 12 dosis lupa diminum dalam 30 hari
                        </label> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-8">
                      Jika paduan ART yang diberikan terdiri dari berbagai dosis, maka pilihlah adherence obat yang terjelek.
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Efek Samping ART</label>
                     <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          R = Ruam Kulit
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Mua = Mual 
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Mun = Muntah
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          D = Diare
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          N = Neuropati
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Ikt = Ikterus
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          An = Anemi
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Ll = Lelah
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-5">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          SK = Sakit Kepala
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Dem = Demam
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Hip = Hipertensifitas
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Dep = Depresi
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          P = Pankreatitis
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Lip = Lipodistofi
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Ngan = Mengantuk
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Ln = Lain-lain
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Uraikan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jumlah CD4</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hasil Lab</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Diberikan Kondom</label>
                     <div class="col-lg-9">
                      <div class="radio">
                        <label>
                          <input type="radio" name="dkr" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="dkr" value="0">
                          Tidak
                        </label>
                      </div>
                       <div class="radio">
                        <label>
                          <input type="radio" name="dkr" value="2">
                          Tidak Tersedia
                        </label> 
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-2 control-label">Jumlahnya</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Rujuk ke Spesialis atau Masuk Rumah Sakit (MRS)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Akhir Follow-Up</label>
                     <div class="col-lg-9">
                      <div class="radio">
                        <label>
                          <input type="radio" name="fll" value="1">
                          M - Jika pasien meninggal
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="fll" value="2">
                          LFU - Jika pasien > 3 bulan tidak datang ke layanan
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="fll" value="3">
                          RK - Jika pasien dirujuk keluar
                        </label> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Meninggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Kunjungan Terakhir</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Keluar</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Klinik Baru</label>
                    <div class="col-sm-8">
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