<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Asuhan Gizi</title>

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Asuhan Gizi</h3>
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
                Dokumen Asuhan Gizi
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
                    <td>Hasil Pemeriksaan Laboratorium</td>
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
              <header class="panel-heading">Riwayat Klien
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Umur</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" disabled="" value="25 Tahun">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Etnik/Agama</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" disabled="" value="Laki-Laki">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pendidikan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Peran Dalam Keluarga</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Keterbatasan Fisik</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Mobilitas</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Perokok</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Riwayat Medis/ Kesehatan Pasien/ Keluarga</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Diagnosa Dokter</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Food History
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alergi Makanan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" disabled="" value="25 Tahun">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Ketidaksukaan Makanan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pantangan Makanan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" disabled="" value="Laki-Laki">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">pendalam dan Konseling Sebelumnya</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sebutkan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  </div>
                </form>
            </section>

            <section class="panel">
              <header class="panel-heading">Daya Antropometri
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">BB saat ini</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" disabled="" value="25 Tahun">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Ketidaksukaan Makanan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">PB/TB</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" disabled="" value="Laki-Laki">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">IMT</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status Gizi</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Riwayat Penurunan BB</label>
                    <div class="col-sm-2">
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">BB Biasanya</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Penurunan BB</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">dalam</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pengukuran Lainnya</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              Biokimian Terkait Gizi
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Biokimia Terkait Gizi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              Fisik Klinis - Gizi
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Atropi Otot Lengan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hilang Lemak Subkutan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Odema</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nafsu Makan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Mual</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Muntah</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kembung</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Konstipasi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Diare</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kulit</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kepala dan Mata</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Gigi Geligi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Gangguan Menelan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Gangguan Mengunyah</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Gangguan Menghisap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanda-tanda Vital</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Resiptori</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Suhu</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Data Lain</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

          <section class="panel">
            <header class="panel-heading">
            Diagnosa Gizi
            </header>
            <div class="panel-body">
              <form class="form-horizontal " method="get">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosa Gizi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
            Intervesi Gizi
            </header>
            <div class="panel-body">
              <form class="form-horizontal " method="get">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tujuan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Target</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Rencana Monitoring dan Evaluasi Gizi</label>
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
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ahli Gizi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
            Makan Pagi
            </header>
            <div class="panel-body">
              <form class="form-horizontal " method="get">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 1</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" disabled="" value="Nasi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">GR</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">URT</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 2</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" disabled="" value="Lauk">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">GR</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">URT</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 3</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" disabled="" value="Sayur">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">GR</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">URT</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
            Snack Pagi
            </header>
            <div class="panel-body">
              <form class="form-horizontal " method="get">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Snack</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">GR</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">URT</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
            Makan Siang
            </header>
            <div class="panel-body">
              <form class="form-horizontal " method="get">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 1</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" disabled="" value="Nasi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">GR</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">URT</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 2</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" disabled="" value="Lauk">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">GR</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">URT</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 3</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" disabled="" value="Tempe">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">GR</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">URT</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 4</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" disabled="" value="Sayur">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">GR</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">URT</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 5</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" disabled="" value="Buah">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">GR</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">URT</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
            Snack Malam
            </header>
            <div class="panel-body">
              <form class="form-horizontal " method="get">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Snack</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">GR</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">URT</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
            Makan Malam
            </header>
            <div class="panel-body">
              <form class="form-horizontal " method="get">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 1</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" disabled="" value="Nasi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">GR</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">URT</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 2</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" disabled="" value="Lauk">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">GR</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">URT</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 3</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" disabled="" value="Tempe">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">GR</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">URT</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 4</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" disabled="" value="Sayur">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">GR</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">URT</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 5</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" disabled="" value="Buah">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">GR</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">URT</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
            Snack Malam
            </header>
            <div class="panel-body">
              <form class="form-horizontal " method="get">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Snack</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">GR</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">URT</label>
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
                  <label class="col-sm-2 control-label">Energi (Kal)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Protein (Gr)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lemak (Gr)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">KH (Gr)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
            Keterangan Tentang Makanan
            </header>
            <div class="panel-body">
              <form class="form-horizontal " method="get">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pola Makanan</label>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Makanan</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15">
                        <option value="Beras">Beras</option>
                        <option value="Jagung">Jagung</option>
                        <option value=">Mi">Mi</option>
                        <option value="Roti">Roti</option>
                        <option value="Biskuit/Kue">Biskuit/Kue</option>
                        <option value="">Kentang</option>
                        <option value="Singkong">Singkong</option>
                        <option value="Ubi Rambat">Ubi Rambat</option>
                        <option value="">Tempe</option>
                        <option value="">Tahu</option>
                        <option value="">Oncom</option>
                        <option value="">Kacang Kering</option>
                        <option value="Ayam">Ayam</option>
                        <option value="Daging">Daging</option>
                        <option value="Daging diawet">Daging diawet</option>
                        <option value="Hati/Limpa/Otak/Usus/Paru-paru">Hati/Limpa/Otak/Usus/Paru-paru</option>
                        <option value="Telur ayam/bebek">Telur ayam/bebek</option>
                        <option value="Ikan basah">Ikan basah</option>
                        <option value="Ikan kering">Ikan kering</option>
                        <option value="Udang basah">Udang basah</option>
                        <option value="Sayuran hijau daun">Sayuran hijau daun</option>
                        <option value="Sayuran kacang-kacangan">Sayuran kacang-kacangan</option>
                        <option value="Sayuran tomat/wortel">Sayuran tomat/wortel</option>
                        <option value="Sayuran Lain">Sayuran Lain</option>
                        <option value="Pisang">Pisang</option>
                        <option value="Pepaya">Pepaya</option>
                        <option value="Jeruk">Jeruk</option>
                        <option value="Buah segar lain">Buah segar lain</option>
                        <option value="Buah diawet">Buah diawet</option>
                        <option value="Buah segar">Buah segar</option>
                        <option value="Susu kental manis">Susu kental manis</option>
                        <option value="Susu kental tak manis">Susu kental tak manis</option>
                        <option value="Susu tepung whole">Susu tepung whole</option>
                        <option value="">Susu tepung skim</option>
                        <option value="Keju">Keju</option>
                        <option value="Minyak/ Goreng-gorengan">Minyak/Goreng-gorengan</option>
                        <option value="Kelapa/Santan">Kelapa/Santan</option>
                        <option value="Margarine/Mentega">Margarine/Mentega</option>
                        <option value="Teh manis">Teh manis</option>
                        <option value="Kopi manis">Kopi manis</option>
                        <option value="Sirop">Sirop</option>
                        <option value="Minuman botol ringan">Minuman botol ringan</option>
                        <option value="Minuman alkohol">Minuman alkohol</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Jumlah Pemberian</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15">
                        <option></option>
                        <option>Lebih 1x Sehari</option>
                        <option>1x Sehari</option>
                        <option>3-6x Sehari</option>
                        <option>1-2x Sehari</option>
                        <option>Kurang 1x</option>
                    </select>
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
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ahli Gizi</label>
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
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">DHT</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">TB</label>
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
                  <label class="col-sm-2 control-label">DMI</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Pengamatan
            </header>
            <div class="panel-body">
              <form class="form-horizontal " method="get">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">BB (KG)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kosultasi Gizi / Pengamatan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
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
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 15%; text-align: center;vertical-align:middle;">Tanggal</th>
                      <th style="width: 10%; text-align: center;vertical-align:middle;">BB (KG)</th>
                      <th style="width: 50%; text-align: center;vertical-align:middle;">Konsultasi Gizi/Pengamatan</th>
                      <th style="width: 20%; text-align: center;vertical-align:middle;">Nama</th>
                      <th style="width: 5%; text-align: center;vertical-align:middle;">Check</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                      <td style="text-align:center;"><input type="date" class="form-control" name="tanggal_1" required></td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                        </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td>
                        <input type="checkbox" class="form-control" name="ttd_edukator_1">
                      </td>
                    </tr>

                  </tbody>
                </table>
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