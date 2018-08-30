<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Asesmen Awal Pasien Tumbuh Kembang dan Edukasi Terpadu</title>

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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL PASIEN TUMBUH KEMBANG DAN EDUKASI TERPADU</h3>
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
            Dokumen Asesmen Awal Pasien Tumbuh Kembang dan Edukasi Terpadu
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
                <td>Asesmen Awal Pasien Tumbuh Kembang dan Edukasi Terpadu</td>
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

        <form class="form-horizontal" method="post" action="rj_tumbuh_kembang_psikolog">
          <section class="panel">
            <header class="panel-heading">
              Data Anak
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Lengkap</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nama_anak">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Tempat Lahir</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="tempat_lahir">
                </div>
                <label class="col-sm-1 control-label">Tanggal Lahir</label>
                <div class="col-sm-2">
                  <input type="date" class="form-control" name="tanggal_lahir">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Jenis Kelamin</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="jenis_kelamin">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Agama</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="agama">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sekolah</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sekolah">
                </div>
                <label class="col-sm-1 control-label">Kelas</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" name="sekolah">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Alamat Sekolah/Terapi</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="alamat_sekolah">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Suku Bangsa</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="suku_bangsa">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Bahasa Sehari-hari</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="bahasa">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Alamat Lengkap</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="alamat_lengkap">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">No.Telp</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="no_telp">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Anak tinggal dengan</label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="tinggal_dengan" id="optionsRadios1" value="Ayah dan ibu">
                      Ayah dan ibu
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="tinggal_dengan" id="optionsRadios1" value="Ayah saja">
                      Ayah saja
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="tinggal_dengan" id="optionsRadios1" value="Ibu saja">
                      Ibu saja
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="tinggal_dengan" id="optionsRadios1" value="Lainnya">
                      Lainnya
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sebutkan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="tinggal_dengan_lainnya" disabled>
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Data Ayah
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Lengkap</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Tempat/Tgl.Lahir</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Agama</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Pendidikan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Pekerjaan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Alamat Pekerjaan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Perkawinan ke</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Lama Perkawinan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Anak tinggal dengan</label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="a2" id="optionsRadios1" value="" checked>
                      Kawin
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="a2" id="optionsRadios1" value="" checked>
                      Cerai
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="a2" id="optionsRadios1" value="" checked>
                      Berpisah
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="a2" id="optionsRadios1" value="" checked>
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
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Data Ibu
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Lengkap</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Tempat/Tgl.Lahir</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Agama</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Pendidikan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Pekerjaan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Alamat Pekerjaan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Perkawinan ke</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Lama Perkawinan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Anak tinggal dengan</label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="a2" id="optionsRadios1" value="" checked>
                      Kawin
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="a2" id="optionsRadios1" value="" checked>
                      Cerai
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="a2" id="optionsRadios1" value="" checked>
                      Berpisah
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="a2" id="optionsRadios1" value="" checked>
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
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Data Saudara Kandung
            </header>
            <div class="panel-body">

              <div class="form-group">
                <label class="col-sm-2 control-label">Umur</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Jenis Kelamin</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Pendidikan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Pekerjaan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Data Saudara Tiri
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Umur</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Jenis Kelamin</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Pendidikan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Pekerjaan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Data Orang-orang lain yang serumah
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Umur</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Jenis Kelamin</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Pendidikan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Pekerjaan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Riwayat Kehamilan
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Bagaimana keadaan kandungan ibu pada awal kehamilan?</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Selama mengandung ibu pernah menderita penyakit?</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Perasaan-perasaan ibu selama mengandung (khusus)?</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Apakah ibu suka minum obat-obatan selama mengandung?</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Apakah obat-obatan tersebut diminum berdasarkan anjuran dokter?</label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="b1" id="optionsRadios1" value="" checked>
                      Ya
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="b1" id="optionsRadios1" value="" checked>
                      Tidak
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Apakah ibu pernah jatuh, mengalami kecelakaan selama masa kehamilan?</label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="b2" id="optionsRadios1" value="" checked>
                      Ya
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="b2" id="optionsRadios1" value="" checked>
                      Tidak
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Pada usia kandungan berapa bulan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Selama mengandung, apakah ibu suka merokok/minum-minuman yang mengandung alkohol?</label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="b3" id="optionsRadios1" value="" checked>
                      Ya
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="b3" id="optionsRadios1" value="" checked>
                      Tidak
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Apakah ibu pernah mengalami keguguran? </label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="b4" id="optionsRadios1" value="" checked>
                      Ya
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="b4" id="optionsRadios1" value="" checked>
                      Tidak
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Apakah ibu pernah mengalami keguguran? </label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="b3" id="optionsRadios1" value="" checked>
                      Ya
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="b3" id="optionsRadios1" value="" checked>
                      Tidak
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Berapa kali</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Usia ibu saat mengandung kasus (Tahun)</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control"> 
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Pada saat mengandung kasus, ibu</label>
                <div class="col-lg-8">
                  <div class="radio">
                    <label>
                      <input type="radio" name="b5" id="optionsRadios1" value="" checked>
                      Bekerja
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="b5" id="optionsRadios1" value="" checked>
                      Tidak Bekerja
                    </label>
                  </div>
                </div>
              </div>

            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Riwayat Persalinan Natal
            </header>
            <div class="panel-body">

              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Proses kelahiran </label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="c1" id="optionsRadios1" value="" checked>
                      Biasa
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="c2" id="optionsRadios1" value="" checked>
                      Lama
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="c2" id="optionsRadios1" value="" checked>
                      Sukar
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Apakah dibantu dengan alat?</label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="c3" id="optionsRadios1" value="" checked>
                      Ya
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="c3" id="optionsRadios1" value="" checked>
                      Tidak
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Alat berupa</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Apakah mengalami keguguran?</label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="c4" id="optionsRadios1" value="" checked>
                      Ya
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="c4" id="optionsRadios1" value="" checked>
                      Tidak
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Kalau ya berupa apa</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Anak lahir </label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="c5" id="optionsRadios1" value="" checked>
                      Prematur
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="c5" id="optionsRadios1" value="" checked>
                      Cukup bulan
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="c5" id="optionsRadios1" value="" checked>
                      Lewat bulan
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Anak lahir ditolong oleh </label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="c6" id="optionsRadios1" value="" checked>
                      Dokter
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="c6" id="optionsRadios1" value="" checked>
                      Bidan
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="c6" id="optionsRadios1" value="" checked>
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
                <label class="col-sm-2 control-label">Berat Bayi</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Panjang bayi</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Riwayat Persalinan Pasca Natal
            </header>
            <div class="panel-body">

              <div class="form-group">
                <label class="col-sm-2 control-label">Berapa lama anak diberi asi ?</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Bagaimana pola makan anak ?</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Bagaimana pola tidur anak ?</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Bagaimana toilt training anak ?</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Bagaimana kemampuan motorik anak ?</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Anak berjalan pada usia ?</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Anak berbicara pada usia ?</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Apakah anak mempunyai hambatan dalam berbicara ?</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Penyakit</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Tahun</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Lamanya</label>
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
                <label class="col-sm-2 control-label">Obat-obatan yang masih diminum </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Dalam sehari-hari anak lebih banyak berada dalam perawatan/pengasuhan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Selama berapa lama</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Masalah khusus dalam masa perawatan/pengasuhan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Riwayat Akademis
            </header>
            <div class="panel-body">

              <div class="form-group">
                <label class="col-sm-2 control-label">Jenis sekolah</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Umur</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Tinggal kelas dan sebabnya</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sikap</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Keterampilan motorik awal </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Hasil belajar anak </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Pelajaran yang disenangi</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Anak mengalami kesukaran dalam mata pelajaran</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Keluhan anak dalam mata pelajaran yang dianggapnya sulit</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Apakah anak mempunyai tempat belajar sendiri ?</label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="d1" id="optionsRadios1" value="" checked>
                      Ya
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="d1" id="optionsRadios1" value="" checked>
                      Tidak
                    </label>
                  </div>

                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Kapan biasanya anak belajar ?</label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="d2" id="optionsRadios1" value="" checked>
                      Siang hari 
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="d2" id="optionsRadios1" value="" checked>
                      Sepulang sekolah 
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="d2" id="optionsRadios1" value="" checked>
                      Sore hari 
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="d2" id="optionsRadios1" value="" checked>
                      Malam hari  
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="d2" id="optionsRadios1" value="" checked>
                      Tidak tentu 
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Apakah anak dibantu dalam belajar ?</label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="d3" id="optionsRadios1" value="" checked>
                      Selalu
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="d3" id="optionsRadios1" value="" checked>
                      Sering
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="d3" id="optionsRadios1" value="" checked>
                      Kadang-kadang
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="d3" id="optionsRadios1" value="" checked>
                      Tidak pernah
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Siapa yang membantu anak dalam belajar ?</label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="d4" id="optionsRadios1" value="" checked>
                      Orang Tua
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="d4" id="optionsRadios1" value="" checked>
                      Kakak
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="d4" id="optionsRadios1" value="" checked>
                      Adik
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
                <label class="col-sm-2 control-label">Keluhan anak dalam mata pelajaran yang dianggapnya sulit</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sikap anak dalam mengikuti kegiatan kelas tersebut di atas</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Apakah anak mengikuti kegiatan tambahan dalam bentuk les privat ?</label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="d5" id="optionsRadios1" value="" checked>
                      Ya
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="d5" id="optionsRadios1" value="" checked>
                      Tidak
                    </label>
                  </div>

                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Jika mengikuti dalam pelajaran apa saja ?</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Siapa yang memberi pelajaran tambahan tersebut ?</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Riwayat Sosialisasi
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Riwayat Sosialisasi di Sekolah</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Di dalam keluarga</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Psikolog</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
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
</body>
<html>