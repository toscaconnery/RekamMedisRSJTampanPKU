<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Asesmen Awal Pasien Rawat Inap</title>

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL PASIEN RAWAT INAP</h3>
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
                Dokumen Asesmen Awal Pasien Rawat Inap
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
                    <td>Asesmen Awal Pasien Rawat Inap</td>
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
              <header class="panel-heading"></header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Diperiksa</label>
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
                
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Data Pasien</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nadi</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="nadi">
                    </div>
                    <label class="col-sm-1 control-label">TD</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="td">
                    </div>
                    <label class="col-sm-1 control-label">Napas</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="napas">
                    </div>
                    <label class="col-sm-1 control-label">Suhu</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="suhu">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">TB</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="tb">
                    </div>
                    <label class="col-sm-1 control-label">BB</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="bb">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kondisi Pasien Saat Masuk</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="kondisi" value="0">
                          Mandiri
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kondisi" value="1">
                          Tempat Tidur
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kondisi" value="2">
                          Dipapah
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kondisi" value="3">
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
                    <label class="col-sm-2 control-label">Asal Pasien</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="asal" value="0">
                          Poliklinik
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="asal" value="1">
                          IGD
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Dokter pemeriksa</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">Dokter Keluarga</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Diagnosis Masuk</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">DPJP</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alergi Obat</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="alergi" value="0">
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="alergi" value="1">
                          Tidak Ada
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Reaksi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Barnag Berharga</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name="barang"> Perhiasan
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name="barang2"> Pakaian
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="3" name="barang3"> Lainnya
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Deskripsikan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tindakan Barang Berharga</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name="tindak1"> Kumpulkan dan Simpan
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name="tindak2"> Lainnya ...
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sebutkan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Alat Bantu yang Digunakan</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name="alat1"> Kacamata
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name="alat2"> Lensa Kontak
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="3" name="alat3"> Gigi Palsu
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="4" name="alat4"> Alat Bantu Dengar
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="5" name="alat5"> Lainnya
                      </label>
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
              <header class="panel-heading">Asesmen Keperawatan</header>
              <div class="panel-body">
                
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">1. Riwayat Pasien <small>(penyakit utama/operasi cedera mayor)</small></header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Penyakit</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name="sakit1"> Hipertensi
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name="sakit2"> PPOK
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="3" name="sakit3"> Diabetes
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="4" name="sakit4"> Kanker
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="5" name="sakit5"> Infark Miokard
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="6" name="sakit6"> Asma
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="7" name="sakit7"> Hepatitis
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="8" name="sakit8"> Kejang
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="9" name="sakit9"> Stroke
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="10" name="sakit10"> TB
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="11" name="sakit11"> Ulkus
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="12" name="sakit12"> Penyakit Paru Lainnya
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="13" name="sakit13"> Gangguan Jiwa
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="14" name="sakit14"> Jantung
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="15" name="sakit15"> Penyakit Ginjal
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="16" name="sakit16"> Lainnya
                      </label>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Deskripsikan Penyakit dan Operasi<br><small>(yang tidak tercantum di atas)</small></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alkohol/Obat</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="alkohol" value="0">
                          Tidak
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="alkohol" value="1">
                          Ya
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jumlah/Hari</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Berhenti Konsumsi Alkohol</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name="alkohol">
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Merokok</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="rokok" value="0">
                          Tidak
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="rokok" value="1">
                          Ya
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jumlah/Hari</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Berhenti Merokok</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name="rokok">
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Vaksinasi</label>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Influenza dalam 12 bulan terakhir</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="flu" value="0">
                          Tidak
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="flu" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="flu" value="2">
                          Menolak
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Pneumonia dalam 5 tahun terakhir</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="rokok" value="0">
                          Tidak
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="pneu" value="1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="pneu" value="2">
                          Menolak
                        </label>
                      </div>
                    </div>
                  </div>

                 <div class="form-group">
                    <label class="col-sm-1 control-label" style="margin-left:2%;">Aniaya Fisik</label>
                    <label class="col-sm-1 control-label" style="margin-left:-2%;">Usia</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="">
                    </div>
                    <label class="col-sm-1 control-label">Pelaku</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="">
                    </div>
                    <label class="col-sm-1 control-label">Korban</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="">
                    </div>
                    <label class="col-sm-1 control-label">Saksi</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-1 control-label" style="margin-left:2%;">Aniaya Seksual</label>
                    <label class="col-sm-1 control-label" style="margin-left:-2%;">Usia</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="">
                    </div>
                    <label class="col-sm-1 control-label">Pelaku</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="">
                    </div>
                    <label class="col-sm-1 control-label">Korban</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="">
                    </div>
                    <label class="col-sm-1 control-label">Saksi</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-1 control-label" style="margin-left:2%;">Penolakan</label>
                    <label class="col-sm-1 control-label" style="margin-left:-2%;">Usia</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="">
                    </div>
                    <label class="col-sm-1 control-label">Pelaku</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="">
                    </div>
                    <label class="col-sm-1 control-label">Korban</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="">
                    </div>
                    <label class="col-sm-1 control-label">Saksi</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-1 control-label" style="margin-left:2%;">Kekerasan dalam Keluarga</label>
                    <label class="col-sm-1 control-label" style="margin-left:-2%;">Usia</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="">
                    </div>
                    <label class="col-sm-1 control-label">Pelaku</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="">
                    </div>
                    <label class="col-sm-1 control-label">Korban</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="">
                    </div>
                    <label class="col-sm-1 control-label">Saksi</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-1 control-label" style="margin-left:2%;">Tindakan Kriminal</label>
                    <label class="col-sm-1 control-label" style="margin-left:-2%;">Usia</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="">
                    </div>
                    <label class="col-sm-1 control-label">Pelaku</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="">
                    </div>
                    <label class="col-sm-1 control-label">Korban</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="">
                    </div>
                    <label class="col-sm-1 control-label">Saksi</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jelaskan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">2. Riwayat Keluarga</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Riwayat Penyakit Keluarga</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name="ksakit1"> Penyakit Jantung
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name="ksakit2"> Hipertensi
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="3" name="ksakit3"> Stroke
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="4" name="ksakit4"> Asma
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="5" name="ksakit5"> Kanker
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="6" name="ksakit6"> Ginjal
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="7" name="ksakit7"> Gangguan Jiwa
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="8" name="ksakit8"> Kejang
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="9" name="ksakit9"> TB
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="10" name="ksakit10"> Diabetes
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="11" name="ksakit11"> Anastesi
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="12" name="ksakit14"> Gangguan Hematologi
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="13" name="ksakit15"> Lainnya
                      </label>
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">3. Psikososial</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Status Pernikahan</label>
                    <div class="col-lg-3">
                      <select class="form-control m-bot15" name="">
                        <option value="1">Menikah</option>
                        <option value="2">Belum Menikah</option>
                        <option value="3">Duda/Janda</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Keluarga</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="keluarga" value="0">
                          Tidak ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="keluarga" value="1">
                          Ada
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess"></label>
                    <div class="col-lg-3">
                      <select class="form-control m-bot15" name="">
                        <option value="1">Serumah</option>
                        <option value="2">Tidak Serumah</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tempat Tinggal</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="tt" value="0">
                          Rumah
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="tt" value="1">
                          Panti Asuhan
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="tt" value="2">
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
                    <label class="control-label col-lg-2" for="inputSuccess">Pekerjaan</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="pe" value="0">
                          Purna Waktu
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="pe" value="1">
                          Paruh Waktu
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="pe" value="2">
                          Pensiun
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="pe" value="3">
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
                    <label class="control-label col-lg-2" for="inputSuccess">Aktivitas</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="akt" value="0">
                          Mandiri
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="akt" value="1">
                          Tirah Baring
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="akt" value="2">
                          Kursi Roda
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="akt" value="3">
                          Tongkat
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Curiga Penganiayaan/ Penelantaran</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="pen" value="0">
                          Tidak
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="pen" value="1">
                          Ya
                        </label>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Status Emosional</label>
                    <div class="col-lg-3">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Kooperatif
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Ansietas
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Cemas
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Ingin mengakhiri hidup
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Depresi
                        </label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">4. Keluarga Terdekat</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hubungan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Telepon</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Informasi Didapat Dari</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="inf" value="0">
                          Pasien
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="inf" value="1">
                          Keluarga
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="inf" value="2">
                          Lainnya
                        </label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">5. Konsep Diri</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">a. Citra Diri</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">b. Identitas Diri</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">c. Peran</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">d. Ideal Diri</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">e. Harga Diri</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">6. Hubungan Sosial</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">a. Orang yang berarti</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">b. Peran serta dalam kegiatan kelompok masyarakat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">c. Hambatan dalam berhubungan dengan orang lain
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">7. Spiritual</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">a. Nilai dan Keyakinan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">b. Kegiatan Ibadah</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">8. Penampilan</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Penampilan</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name=""> Tidak rapi
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name=""> Penggunaan pakaian tidak sesuai
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="3" name=""> Cara berpakaian tidak seperti biasanya
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jelaskan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">9. Pembicaraan</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Pembicaraan</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name=""> cepat
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name=""> Keras
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="3" name=""> Gagap
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="4" name=""> Inkoheren
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="5" name=""> Apatis
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="6" name=""> Lambat
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="7" name=""> Membisu
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="8" name=""> Tidak mampu memulai bicara
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jelaskan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">10. Aktivitas Motorik</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Aktivitas Motorik</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name=""> Lesu
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name=""> Tegang
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="3" name=""> Gelisah
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="4" name=""> Tik
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="5" name=""> Agitas
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="6" name=""> Grimasen
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="7" name=""> Tremor
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="8" name=""> Kompulsif
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="9" name=""> Restrain
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jelaskan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">11. Alam Perasaan</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Alam Perasaan</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name=""> Sedih
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name=""> Ketakutan
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="3" name=""> Putus Asa
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="4" name=""> Khawatir
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="5" name=""> Gembira berlebihan
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="6" name=""> Isyarat percobaan bunuh diri
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jelaskan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">12. Afek</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Afek</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name=""> Datar
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name=""> Tumpul
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="3" name=""> Labil
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="4" name=""> Tidak sesuai
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jelaskan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">13. Interaksi selama wawancara</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Interaksi selama wawancara</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name=""> Bermusuhan
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name=""> Tidak kooperatif
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="3" name=""> Mudah tersinggung
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="4" name=""> Kontak mata kurang
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="5" name=""> Defensif
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="6" name=""> Curiga
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jelaskan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">14. Persepsi</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Persepsi</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name=""> Ilusi
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name=""> Halusinasi dengar
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="3" name=""> Halusinasi lihat
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="4" name=""> Halusinasi raba
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="5" name=""> Halusinasi kecap
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="6" name=""> Halusinasi hidu
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jelaskan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">15. Isi Pikir</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Isi Pikir</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name=""> Obsesi
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name=""> Phobia
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="3" name=""> Hipokondria
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="4" name=""> Depersonalisasi
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="5" name=""> Ide terkait
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="6" name=""> Pikiran magis
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="7" name=""> Waham agama
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="8" name=""> Waham somatik
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="9" name=""> Waham besar
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="10" name=""> Waham curiga
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="11" name=""> Waham nihilistik
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="12" name=""> Sisip pikir
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="13" name=""> Siap pikir
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="14" name=""> Kontrol pikir
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jelaskan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">16. Arus Pikir</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Arus Pikir</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name=""> Sirkumstansial
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name=""> Tangensial
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="3" name=""> Kehilangan asosiasi
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="4" name=""> Flight of idea
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="5" name=""> Block
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="6" name=""> Perseverasi
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jelaskan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">17. Memori</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Memori</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name=""> Ggn daya ingat jangka panjang
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name=""> Ggn daya ingat jangka pendek
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="3" name=""> Ggn daya ingat saat ini
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="4" name=""> Konfabulasi
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jelaskan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">18. Tingkat konsentrasi dan berhitung</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tingkat konsentrasi dan berhitung</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name=""> Mudah teralih
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name=""> Tidak mampu berkonsentrasi
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="3" name=""> Tidak mampu berhitung sederhana
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jelaskan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">19. Kemampuan Penilaian</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Kemampuan Penilaian</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name=""> Gangguan ringan
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name=""> Gangguan bermakna
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jelaskan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">20. Daya tilik diri (insight)</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Daya tilik diri (insight)</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name=""> Mengingkari sakit yang diderita
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name=""> Menyalahkan hal di luar dirinya
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jelaskan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>



            <section class="panel">
              <header class="panel-heading">Kebutuhan Komunikasi dan Pengajaran</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Kebutuhan Komunikasi dan Pengajaran</label>
                    <div class="col-lg-3">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Proses Penyakit dan Tindakan medis
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Terapi/Obat
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Penanganan Nyeri
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Penggunaan Alat Medis
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Nutrisi
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Rehab Medik
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Rehabilitasi Mental
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Perawatan Penyakitnya
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Aspek psikologis terkait penyakitnya
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Follow up dan minta pertolongan
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Lain-lain,...
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">1. Keyakinan dan nilai-nilai pasien/keluarga tentang penyakitnya</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">2. Bicara</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="bi" value="0">
                          Normal
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="bi" value="1">
                          Gangguan bicara
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kapan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">3. Bahasa sehari-hari</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="bhs" value="0">
                          Indonesia
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="bhs" value="1">
                          Inggris
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="bhs" value="2">
                          Daerah
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="bhs" value="3">
                          Lain-lain
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess"></label>
                    <div class="col-lg-3">
                      <select class="form-control m-bot15" name="">
                        <option value="1">Aktif</option>
                        <option value="2">Pasif</option>
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
                    <label class="col-sm-2 control-label">4. Perlu Penerjemah</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="tr" value="0">
                          Tidak
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="tr" value="1">
                          Ya
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Bahasa</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Bahasa Isyarat</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="isy" value="0">
                          Tidak
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="isy" value="1">
                          Ya
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">5. Hambatan Edukasi</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Bahasa
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Pendengaran
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Hilang memori
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Motivasi buruk
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Masalah penglihatan
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Tidak ditemukan hambatan belajar
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-5">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Cemas
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Emosi
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Kesulitan Bicara
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Tidak ada partisipasi dari caregiver
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Secara fisiologi tidak mampu belajar
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Kognitif
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Cara Edukasi yang Disukai</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Menulis
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Audio- Visual/Gambar
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Diskusi
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-5">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Membaca
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Mendengar
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Demonstrasi
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">6. Tingkat Pendidikan</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="tp" value="0">
                          TK
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="tp" value="1">
                          SD
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="tp" value="2">
                          SMP
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="tp" value="3">
                          SMA
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="tp" value="4">
                          Akademi
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="tp" value="5">
                          Sarjana
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="tp" value="6">
                          Lain-lain
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">7. Pasien bersedia menerima Informasi</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="form" value="0">
                          Tidak
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="form" value="1">
                          Ya
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alasan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Screening Gizi</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
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
                
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Penilaian Resiko Jatuh</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Diperiksa</label>
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
                </div>
              </section>
            </form>

            <section class="panel">
              <header class="panel-heading">Penilaian Tingkat Nyeri</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nyeri</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="nye" value="1">
                          Ya 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="nye" value="0">
                          Tidak 
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Intensitas</label>
                    <div class="col-lg-1">
                      <select class="form-control m-bot15" name="">
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
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="jns" value="0">
                          Akut 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="jns" value="1">
                          Kronis 
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Lokasi Nyeri</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Terjadinya Nyeri</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sifat Nyeri</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="tn1" value="0">
                          Kejang 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="tn1" value="1">
                          Konstan 
                        </label>
                      </div>
                       <div class="radio">
                        <label>
                          <input type="radio" name="tn1" value="2">
                          Intermiten 
                        </label>
                      </div>
                       <div class="radio">
                        <label>
                          <input type="radio" name="tn1" value="3">
                          Lain 
                        </label>
                      </div>
                    </div>
                  </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Kualitas Nyeri</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="tn2" value="0">
                        Nyeri 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tn2" value="1">
                        Kram 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tn2" value="2">
                        Tumpul
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tn2" value="3">
                        Terbakat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tn2" value="4">
                        Tajam
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tn2" value="5">
                        Nyeri Tembak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tn2" value="6">
                        Menusuk
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tn2" value="7">
                        Tertekan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tn2" value="8">
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
                  <label class="col-sm-2 control-label">Faktor Pemberat</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="tn3" value="0">
                        Cahaya 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tn3" value="1">
                        Gelap
                      </label>
                    </div>
                     <div class="radio">
                      <label>
                        <input type="radio" name="tn3" value="2">
                        Gerakan
                      </label>
                    </div>
                     <div class="radio">
                      <label>
                        <input type="radio" name="tn3" value="3">
                        Berbaring 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tn3" value="4">
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
                  <label class="col-sm-2 control-label">Faktor Peringan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="tn4" value="0">
                        Makan 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tn4" value="1">
                        Sungi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tn4" value="2">
                        Dingin 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tn4" value="3">
                        Panas 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tn4" value="3">
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
                    <label class="control-label col-lg-2" for="inputSuccess">Efek Nyeri</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Mual Muntah
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Emosi
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Tidur
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Hubungan dengan orang lain
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-5">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Nafsu Makan
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="">
                          Aktivitas
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
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    Obat-obatan di rumah (daftar obat, dosis dan frekuensi, kapan terakhir kali dikonsumsi
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Obat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Dosis</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Kapan terakhir kali diberikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Resume</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>

                </form>
              </div>
            </section>

            <form class="form-horizontal " method="get">
              <section class="panel">
                <header class="panel-heading">
                  Diagnosa Keperawatan
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Diagnosa Keperawatan Umum</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ Resiko bersihan jalan nafas tidak efektif
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ Resiko aspirasi
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ Resiko pola nafas tidak efektif
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ Resiko gangguan pertukaran gas
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ penurunan curah jantung
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ Resiko gangguan perfusi jaringan celebral/perifer
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ Resiko gangguan keseimbangan cairan
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ Resiko gangguan keseimbangan kontinuitas jaringan
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/ Resiko infeksi
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Resiko cedera / jatuh
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Hypertermi
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Nyeri
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Gangguan kebutuhan nutrisi
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Lainnya
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sebutkan </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Diagnosa keperawatan jiwa</label>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Gangguan persepsi sensori : halusinasi
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Perilaku kekerasan
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Isolasi sosial
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Gangguan konsep diri
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Resiko bunuh diri
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Intoleransi aktifitas
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Waham
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Defisit perawatan diri
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Kerusakan komunitas verbal
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Koping individu tidak efektif
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Aktual/Resiko Cemas/Takut
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Lainnya
                        </label>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sebutkan </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </div>
              </section>
            </form>

            <section class="panel">
              <header class="panel-heading"></header>
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
                    <label class="col-sm-2 control-label">Nama Perawat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Data Medis</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Diperiksa</label>
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
                
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Data Medis</header>
              <div class="panel-body">
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">1. Anamnesa</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Anamnesa</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
    
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">2. Anamnesa</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kepala</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Leher</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Dada</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jantung</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Paru-paru</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Perut</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Anggota Gerak</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status Lokalis</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Status Psikiatri</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Penampilan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kesadaran</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Orientasi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sikap & Tingkah laku </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-2"></div><h4>Gangguan Berpikir</h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Proses Pikir </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Bentuk Pikir </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Isi Pikir </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-2"></div><h4>Alam Perasaan</h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Mood </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Afek </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-2"></div><h4>Persepsi</h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Halusinasi </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Ilusi </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-2"></div><h4>Fungsi Intelektual</h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Daya Konsentrasi  </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Daya Ingat  </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pikiran Abstrak  </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pengendalian Impuls  </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Daya Nilai  </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tilikan/Insight  </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Taraf dapat dipercaya  </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Pemeriksaan Penunjang</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Laboratorium</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">EKG</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Radiologi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Lainnya</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Instrumen Penilaian</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">PANSS EC (Skor)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">GAF (Skor)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Diagnosis Psikiatri</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Axis I</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Axis II</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Axis III</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Axis IV</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Axis V</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Rencana Tindakan & Tata Laksana Medis</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">1. Psikofarmaka</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">2. Psikoterapi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">3. Lainnya</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Instruksi</header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="s1" value="0">
                          Boleh Pulang 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="s1" value="1">
                          Dirawat di Ruang
                        </label>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jam Keluar</label>
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
                    <label class="col-sm-2 control-label">Kontrol Klinik</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="kk" value="1">
                          Ya 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kk" value="0">
                          Tidak 
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Klinik</label>
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
                    <label class="col-sm-2 control-label">Ruang</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="ruang" value="1">
                          Intensif 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ruang" value="0">
                          Ruang Lain
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

                </form>
              
            </section>

            <section class="panel">
              <header class="panel-heading"></header>
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
                    <label class="col-sm-2 control-label">Nama Dokter</label>
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