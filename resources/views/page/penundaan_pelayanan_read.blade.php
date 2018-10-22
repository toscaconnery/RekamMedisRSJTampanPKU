<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Penundaan Pelayanan</title>

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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> PENUNDAAN PELAYANAN</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Penundaan Pelayanan
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
                  <td>Penundaan Pelayanan</td>
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
          <form class="form-horizontal " method="post" action="penundaan_pelayanan">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Data Penundaan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" disabled="" value="{{$nama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="umur" disabled="" value="{{$umur}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hubungan dengan Pasien</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="hubungan" disabled="" value="{{$hubungan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Poli/Ruangan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="poli_ruangan" disabled="" value="{{$poli_ruangan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Dokter Pengirim</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="dokter_pengirim" disabled="" value="{{$dokter_pengirim}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pelayanan yang akan dilakukan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pelayanan_akan_dilakukan" disabled="" value="{{$pelayanan_akan_dilakukan}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Dengan ini menyatakan bahwa saya telah menerima informasi terhadap penundaan pelayanan dan pengobatan dikarenakan:
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Penundaan pelayanan</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="dokter_berhalangan"> Dokter berhalangan datang
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="kerusakan_alat"> Kerusakan alat
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="pemberian_obat_farmasi"> Pemberian obat di farmasi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="hasil_pemeriksaan_radiologi"> Hasil pemeriksaan radiologi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="hasil_pemeriksaan_laboratorium"> Hasil pemeriksaan laboratorium
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="lainnya" > Lain-lain .....
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Sebutkan</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="sebab_lainnya" >
                  </div>
                </div>
                <div class="col-lg-2"></div><h5>Maka dengan ini saya Setuju untuk dilakukan Penundaan Pelayanan dengan alternatif yang diberikan</h5>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Setuju menunda</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="alternatif" value="Dijadwalkan ulang">
                        Dijadwalkan ulang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alternatif" value="Jadwal yang akan datang">
                        Jadwal yang akan datang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alternatif" value="Dirujuk ke Pelayanan / RS lain">
                        Dirujuk ke Pelayanan / RS lain
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Jadwal Penundaan</label>
                  <div class="col-sm-3">
                    <input id="dp1" type="date" value="28-10-2013" size="16" class="form-control" name="jadwal_penundaan" disabled="" value="{{$jadwal_penundaan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Rumah Sakit Rujukan</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="rs_tujuan" disabled="" value="{{$rs_tujuan}}">
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