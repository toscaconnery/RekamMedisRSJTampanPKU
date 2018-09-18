<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Catatan Perkembangan Pasien Terintegrasi Rawat Jalan</title>

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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Catatan Perkembangan Pasien Terintegrasi Rawat Jalan</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Catatan Perkembangan Pasien Terintegrasi Rawat Jalan
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
                  <td>Catatan Perkembangan Pasien Terintegrasi</td>
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
          <form class="form-horizontal" method="post" action="rj_perkembangan_pasien">
            {{ csrf_field() }}
            <input type="hidden" name="jumlah_form" id="jumlah_form" value="4">
            <section class="panel">
              <header class="panel-heading">
                Hasil Pemeriksaan, Analisis, Rencana Penatalaksanaan Pasien 
              </header>
              <div class="form-group">
                <div class="col-sm-2"></div>
                <label class="col-sm-8 control-label">(Dituliskan dengan Format SOAP/ADIME, disertai dengan Target yang Terukur, Evaluasi Hasil Tatalaksana dituliskan dalam Asesmen.</label>
                <div class="col-sm-2"></div>
              </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10%; text-align: center;">TGL & JAM</th>
                    <th style="width: 15%; text-align: center;">PROFESI/BAGIAN</th>
                    <th style="width: 67%; text-align: center;">HASIL PEMERIKSAAN, ANALISIS, RENCANA PENTATALAKSANAAN PASIEN</th>
                    <th style="width: 5%; text-align: center;">VERIFIKASI</th>
                    <th style="width: 3%; text-align: center;">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <input type="date" class="form-control" name="tanggal_1" required>
                      <input type="text" class="form-control" name="jam_1" required placeholder="Jam">
                    </td>
                    <td>
                      <input type="text" class="form-control" name="profesi_1" readonly value="Profesi A">
                    </td>
                    <td>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="keterangan_1">S : </textarea>
                    </td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                      <input type="date" class="form-control" name="tanggal_2" required>
                      <input type="text" class="form-control" name="jam_2" required placeholder="Jam">
                    </td>
                    <td>
                      <input type="text" class="form-control" name="profesi_2" readonly value="Profesi A">
                    </td>
                    <td>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="keterangan_2">O : </textarea>
                    </td>
                    <td><input type="checkbox" class="form-control" name="ttd_2"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                      <input type="date" class="form-control" name="tanggal_3" required>
                      <input type="text" class="form-control" name="jam_3" required placeholder="Jam">
                    </td>
                    <td>
                      <input type="text" class="form-control" name="profesi_3" readonly value="Profesi A">
                    </td>
                    <td>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="keterangan_3">A : </textarea>
                    </td>
                    <td><input type="checkbox" class="form-control" name="ttd_3"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                      <input type="date" class="form-control" name="tanggal_4" required>
                      <input type="text" class="form-control" name="jam_4" required placeholder="Jam">
                    </td>
                    <td>
                      <input type="text" class="form-control" name="profesi_4" readonly value="Profesi A">
                    </td>
                    <td>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="keterangan_4">P : </textarea>
                    </td>
                    <td><input type="checkbox" class="form-control" name="ttd_4"></td>
                    <td></td>
                  </tr>
                  <tr id="last_row">
                    <td colspan="4">
                      <div class="btn-group">
                        <button class="btn btn-primary" type="button" id="tambah_form"><i class="icon_plus_alt2"></i> Tambah</button>
                        <button class="btn btn-success" type="submit"><i class="icon_check_alt2"></i> Simpan</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>
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

    {{-- wicked time picker --}}
    {{-- <script type="text/javascript" src="{{url('')}}/wickedpicker/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="{{url('')}}/wickedpicker/src/wickedpicker.js"></script>
    <script type="text/javascript">
      $('.timepicker').wickedpicker();
    </script> --}}

    {{-- menambah row inputan --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form').click(function() {
          var a = document.getElementById('jumlah_form').value;
          // alert('a');
          a = parseInt(a) + 1;
          $('#last_row').before('<tr id="form_'+a+'"><td><input type="date" class="form-control" name="tanggal_'+a+'" required><input type="text" class="form-control" name="jam_'+a+'" required placeholder="Jam"></td><td><input type="text" class="form-control" name="profesi_'+a+'" readonly value="Profesi A"></td><td><textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="keterangan_'+a+'"></textarea></td><td><input type="checkbox" class="form-control" name="ttd_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
          document.getElementById('jumlah_form').value = a;
        });
      });
    </script>

      {{-- menghapus row --}}
      <script type="text/javascript">
        $(document).ready(function() {
          $(document).on('click', '.tombol_hapus', function() {
            var x = $(this).attr('id');
            var nomor = x.substring(13)
            $('#form_'+nomor).remove();
          });
        });
      </script>

    </body>
    <html>