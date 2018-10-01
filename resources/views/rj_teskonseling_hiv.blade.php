<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>tes & Konseling HIV</title>

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> FORMULIR TES DAN KONSELING HIV</h3>
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
                Dokumen Tes dan Konseling HIV
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
                    <td>Formulir Tes dan Konseling HIV</td>
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
              <header class="panel-heading">Data Klien
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Propinsi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kota/Kabupaten</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Ibu Kandung</label>
                    <div class="col-sm-2">
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
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" disabled="" value="Laki-laki">
                    </div>
                  </div>
                  
                  <div class="form-group" id="">
                    <label class="control-label col-lg-2" for="inputSuccess">Status Perkawinan</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="spk" value="0">
                          Kawin
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="spk" value="1">
                          Belum Kawin 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="spk" value="1">
                          Cerai Hidup
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="spk" value="1">
                          Cerai Mati
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tgl.Lahir</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group" id="">
                    <label class="control-label col-lg-2" for="inputSuccess">Status Kehamilan</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="skh" value="0">
                          Trisemester I
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="skh" value="1">
                          Trisemester II
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="skh" value="2">
                          Trisemester III
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="skh" value="3">
                          Tidak Hamil
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="skh" value="4">
                          Tidak Tahu
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Umur Anak Terakhir<br><small>(diisi jika klien perempuan)</small></label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jumlah Anak Kandung</label>
                    <div class="col-sm-2">
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

                  <div class="form-group" id="">
                    <label class="control-label col-lg-2" for="inputSuccess">Pendidikan Terakhir</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="pen" value="0">
                          Tidak pernah sekolah
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="pen" value="1">
                          SD/sederajatnya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="pen" value="2">
                          SMP/sederajatnya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="pen" value="3">
                          SMA/sedereajatnya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="pen" value="4">
                          Akademi/Perguruan Tinggi/Sederajatnya
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group" id="">
                    <label class="control-label col-lg-2" for="inputSuccess">Pekerjaan</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="pek" value="0">
                          Tidak Bekerja
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="pek" value="1">
                          Bekerja
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kelompok Risiko<br><small>(pilih saru yang paling dominan)</small></label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="kr" value="0">
                          PS
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kr" value="1">
                          Pelanggan PS
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kr" value="2">
                          Waria
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kr" value="3">
                          Pasangan Risti
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kr" value="4">
                          Penasun
                        </label>
                      </div>
                       <div class="radio">
                        <label>
                          <input type="radio" name="" value="5">
                          Lainnya
                        </label>
                      </div>
                       <div class="radio">
                        <label>
                          <input type="radio" name="" value="6">
                          Gay/ LSL
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group" id="">
                    <label class="control-label col-lg-2" for="inputSuccess">Keterangan</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="ktr" value="0">
                          Langsung
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ktr" value="1">
                          Tidak Langsung
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Lamanya<br><small>(diisi khusus PS dan Penasun)</small></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group" id="">
                    <label class="control-label col-lg-2" for="inputSuccess">Status Kunjungan</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="sk" value="0">
                          Datang Sendiri
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sk" value="1">
                          Dirujuk
                        </label>
                      </div>
                    </div>
                  </div>
            
                  <div class="form-group" id="">
                    <label class="control-label col-lg-2" for="inputSuccess">Status Rujukan</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="sr" value="0">
                          Tempat Kerja
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sr" value="1">
                          Kader
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sr" value="2">
                          Klp Dukungan
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sr" value="3">
                          LSM
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sr" value="4">
                          Pasangan
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sr" value="4">
                          Lain-lain
                        </label>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Pasangan Klien
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Klien Punya Pasangan Tetap<br><small>(Diisi jika klien perempuan)</small></label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="pt" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="pt" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Punya Pasangan Perempuan?<br><small>(Diisi jika klien laki-laki)</small></label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="pp" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="pp" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Apakah Pasangan Hamil?<br><small>(Diisi jika klien laki-laki)</small></label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="ha" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ha" value="0">
                          Tidak
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ha" value="3">
                          Tidak Tahu
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Lahir Pasangan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status Pasangan</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="sp" value="0">
                          HIV (+)
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sp" value="1">
                          HIV (-)
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sp" value="2">
                          Tidak Diketahui
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Tes Terakhir Pasangan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Populasi Khusus
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Klien WBP<br><small>(Warga Binaan Pemasyarakatan)</small></label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="wbp" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="wbp" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Konseling Pra Tes - <small> Isikan bila dilakukan konseling (KTS)</small>
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tgl Konseling Tes Pra HIV</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status Klien</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="skl" value="0">
                          Baru
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="skl" value="1">
                          Lama
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alasan Tes HIV<br><small>(boleh diisi lebih dari satu)</small></label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Ingin tahu saja
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Merasa beresiko
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Mumpung gratis
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Tes ulang (window period)
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-5">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Untuk bekerja
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Lainnya ...
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Ada gejala tertentu
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Akan menikah ...
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Mengetahui adanya tes dari<br><small>(Pilih satu yang paling dominan)</small></label>
                     <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="dmn" value="0">
                          Brosur
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="dmn" value="1">
                          Koran
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="dmn" value="2">
                          TV
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="dmn" value="3">
                         Petugas Kesehatan
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="dmn" value="4">
                          Teman
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="dmn" value="5">
                          Petugas Outreach
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="dmn" value="6">
                          Poster
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="dmn" value="7">
                          Lay Konselor
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="dmn" value="8">
                          Lainnya ...
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
                    <label class="col-sm-2 control-label">Kajian Tingkat Risiko:<br>Hubungan Seks Vaginal Berisiko</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="kaj" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kaj" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kapan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Anal Seks Beresiko</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="an" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="an" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kapan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Bergantian Peralatan Suntik</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="per" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="per" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kapan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Transfusi Darah</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="trf" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="trf" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kapan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Transmisi Ibu ke Anak</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="trm" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="trm" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kapan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Lainnya(Sebutkan)</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kapan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Periode Jendela <br><small><i>(window periode)</i></small></label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="jd" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="jd" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kapan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kesediaan Untuk Tes</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="ksd" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ksd" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pernah Tes HIV Sebelumnya</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="tes" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="tes" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Dimana</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kapan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hasil</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="hs1" value="0">
                          Non Reaktif
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="hs2" value="1">
                          Reaktif
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="hs2" value="2">
                          Tidak tahu
                        </label>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Pemberian Informasi - <small>isikan bila penawaran tes oleh petugas kesehatan (TIPK)</small>
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Pemberian Informasi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-2 control-label">Pernah Tes HIV Sebelumnya</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="tes2" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="tes2" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Dimana</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kapan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hasil</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="hs1" value="0">
                          Non Reaktif
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="hs2" value="1">
                          Reaktif
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="hs2" value="2">
                          Tidak tahu
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Penyakit Terkait Pasien<br><small>(boleh diisi lebih dari satu)</small></label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          TB
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Dermatitis
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Herpes
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Sifilis
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Hepatitis
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Diare
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-5">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          LGV
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Toksopiasmosis
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          IMS lainnya ...
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Kandidiasis oralesovagial
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          PCP
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Wasting syndrome
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Lainnya
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
                    <label class="col-sm-2 control-label">Kesediaan untuk Tes</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="tes3" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="tes3" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Tes Antibodi HIV</small>
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tgl Tes HIV</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Tes HIV</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="jt" value="0">
                          Rapid Test
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="jt" value="1">
                          ELISA
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hasil Tes R1</small></label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="r1" value="0">
                          Non Reaktif
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="r1" value="1">
                          Reaktif
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Reagen</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hasil Tes R2</small></label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="r2" value="0">
                          Non Reaktif
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="r2" value="1">
                          Reaktif
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Reagen</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hasil Tes R3</small></label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="r3" value="0">
                          Non Reaktif
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="r3" value="1">
                          Reaktif
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Reagen</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kesimpulan Hasil Tes HIV</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="kes" value="0">
                          Non Reaktif
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kes" value="1">
                          Reaktif
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kes" value="2">
                          Indeterminate
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nomor Registrasi Nasional PDP<br><small>(Diisi bila hasil tes positif)</small></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Masuk PDP</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tindak Lanjut (TIPK)<br><small>(boleh diisi lebih dari satu)</small></label>
                    <div class="col-lg-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Rujuk Konseling ...
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Rujuk ke ...
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Rujuk ke PDP dan PPIA
                        </label>
                      </div>
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
                  <label class="col-sm-2 control-label">Bagaimana Status HIV Pasangan</label>
                  <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="hsl" value="0">
                          HIV (-)
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="hsl" value="1">
                          HIV (+)
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="hsl" value="2">
                          tidak Tahu
                        </label>
                      </div>
                    </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">Konseling Pasca Tes
            </header>
            <div class="panel-body">
              <form class="form-horizontal " method="get">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tgl Konseling Pasca Tes</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Terima Hasil</label>
                  <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="tha" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="tha" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Kaji Gejala TB</label>
                  <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="ktb" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ktb" value="0">
                          Tidak
                        </label>
                      </div>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jumlah Kondom yang Diberikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tindak Lanjut (KTS)<br><small>(boleh diisi lebih dari satu)</small></label>
                  <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Tes Ulang
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Rujuk ke PDP
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Rujuk ke Layanan PTRM
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Rujuk ke Layanan IMS
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Rujuk ke PPIA
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Rujuk ke Rehab
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-5">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Rujuk ke Layanan LASS
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Rujuk ke Layanan TB
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Rujuk ke Profesional
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Rujuk ke petugas pendukung
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Konseling ...
                        </label>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Yaitu</label>
                  <div class="col-lg-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          1. Komunitas
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          2. LSM ...
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          3. Kader
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
                    <label class="col-sm-2 control-label">Konseling</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="ksl" value="0">
                          1. Pasangan
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ksl" value="1">
                          2. Keluarga
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ksl" value="2">
                          3. Pencegahan positif
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ksl" value="2">
                          4. Kepatuhan minum obat
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ksl" value="2">
                          5. Paliatif
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ksl" value="2">
                          6. Lain-lain
                        </label>
                      </div>
                    </div>
                  </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Konselor<br>/Petugas Kesehatan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status Layanan</label>
                  <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="sl" value="0">
                          Rumah Sakit
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sl" value="1">
                          Puskesmas
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sl" value="1">
                          Klinik
                        </label>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Pelayanan</label>
                  <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="jpe" value="0">
                          Layanan Menetap
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="jpe" value="1">
                          Layanan Bergerak
                        </label>
                      </div>
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