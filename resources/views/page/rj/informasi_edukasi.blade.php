<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Kebutuhan Informasi dan Edukasi</title>

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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Kebutuhan Informasi dan Edukasi Pasien/Keluarga Rawat Jalan</h3>
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
              Dokumen Kebutuhan Informasi dan Edukasi
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
                  <td>Kebutuhan Informasi dan edukasi </td>
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
          <form class="form-horizontal" method="post" action="rj_informasi_edukasi">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Persiapan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Bahasa</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="bahasa" value="Indonesia" id="bahasa_indonesia">
                        Indonesia
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="bahasa" value="Inggris" id="bahasa_inggris">
                        Inggris
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="bahasa" value="Daerah" id="bahasa_daerah">
                        Daerah
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="bahasa" value="Lainnya" id="bahasa_lainnya">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="ket_bahasa" id="ket_bahasa" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kebutuhan Penerjemah</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="penerjemah" value="true" >
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="penerjemah" value="false">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pendidikan Pasien</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="pendidikan" value="SD" >
                        SD
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pendidikan" value="SLTP">
                        SLTP
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pendidikan" value="SLTA" >
                        SLTA
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pendidikan" value="S1" >
                        S1
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pendidikan" value="Lainnya" >
                        Lain-lain
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Baca dan Tulis</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="baca_tulis" value="Baik" >
                        Baik
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="baca_tulis" value="Kurang">
                        Kurang
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pilihan cara belajar</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="cara_belajar" value="Verbal" >
                        Verbal
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="cara_belajar" value="Tulisan">
                        Tulisan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Budaya/Suku/Etnis</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="budaya">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Hambatan
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Hambatan</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="hambatan_1">
                        Tidak ada
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="hambatan_2">
                        Bahasa
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="hambatan_3">
                        Kognitif terbatas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="hambatan_4">
                        Penglihatan terganggu
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="hambatan_5">
                        Budaya/Agama/Spiritual
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="hambatan_6">
                        Emosional
                      </label>
                    </div>
                  </div>


                  <div class="col-lg-6">

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="hambatan_7">
                        Pendengaran terganggu
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="hambatan_8">
                        Fisik lemah
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="hambatan_9">
                        Gangguan bicara
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="hambatan_10">
                        Motivasi kurang
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="hambatan_11">
                        Keyakinan/Mitos
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="hambatan_12">
                        Lain-lain
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="hambatan_lain" id="hambatan_lain" disabled>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Kebutuhan
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kebutuhan</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kebutuhan_1">
                        Proses Penyakit
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kebutuhan_2">
                        Obat-obatan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kebutuhan_3">
                        Prosedur/Tindakan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kebutuhan_4">
                        Pencegahan faktor risiko
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kebutuhan_5">
                        Manajemen nyeri
                      </label>
                    </div>                    
                  </div>

                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kebutuhan_6">
                        Diet/Nutrisi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kebutuhan_7">
                        Lingkungan yang perlu dimodifikasi pasca perawatan
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kebutuhan_8">
                        Rehabilitasi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kebutuhan_9">
                        Hasil pelayanan, termasuk terjadinya kejadian yang diharapkan dan tidak diharapkan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kebutuhan_10">
                        Lain-lain 
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kebutuhan_lain" id="kebutuhan_lain" disabled>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Keluarga/Wali 
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesediaan Pasien dan/atau Keluarga/Wali untuk menerima informasi dan edukasi</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="kesediaan_menerima" value="true" >
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kesediaan_menerima" value="false">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Keluarga/Wali</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_keluarga">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Hubungan dengan pasien</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="hubungan">
                  </div>
                </div>
                <div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </section>
          </form>
        </div>
      </div>

    </section>
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
  {{-- bahasa --}}
  <script type="text/javascript">
      $(document).ready( function() {
        $('input[type=radio][name=bahasa]').change(function() {
          if(this.id == 'bahasa_lainnya') {
            $('#ket_bahasa').prop('disabled', false);
          }
          else if(this.id == 'bahasa_daerah') {
            $('#ket_bahasa').prop('disabled', false);
          }
          else if(this.id == 'bahasa_inggris') {
            $('#ket_bahasa').prop('disabled', true);
          }
          else if(this.id == 'bahasa_indonesia') {
            $('#ket_bahasa').prop('disabled', true)
          }
        });
      });
  </script>

  <script type="text/javascript">
      $(document).ready( function() {
        $('input[type=checkbox][name="hambatan_12"]').change(function() {
          if(this.checked) {
            $('#hambatan_lain').prop('disabled', false);
          }
          else {
            $('#hambatan_lain').prop('disabled', true);
          }
        });
      });
  </script>

  <script type="text/javascript">
      $(document).ready( function() {
        $('input[type=checkbox][name="kebutuhan_10"]').change(function() {
          if(this.checked) {
            $('#kebutuhan_lain').prop('disabled', false);
          }
          else {
            $('#kebutuhan_lain').prop('disabled', true);
          }
        });
      });
  </script>

  </body>


  <html>