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
          </div>
        </div>
        @include('layouts.bio')
        
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
                    <td>Diisi oleh Perawat</td>
                    <td>20/08/2018</td>
                    <td>[Nama Pengisi]</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_perawat"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="{{url('')}}/view_rj_asesmen_awal_perawat"><i class="icon_check_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Diisi oleh Dokter</td>
                    <td>20/08/2018</td>
                    <td>[Nama Pengisi]</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_dokter"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="{{url('')}}/view_rj_asesmen_awal_dokter"><i class="icon_check_alt2"></i></a>
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

            <form class="form-horizontal" method="post" action="rj_asesmen_awal_gigi_dokter">
              {{ csrf_field() }}
              <section class="panel">
                <header class="panel-heading">
                  Data Medik
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Golongan Darah</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="golongan_darah">
                    </div>
                  </div>
                  <div class="form-group">                        
                    <label class="col-sm-2 control-label">Tekanan Darah</label>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="tekanan_darah_top">
                        </div>
                        <div class="col-sm-1" style="width: 1mm; padding: 0; font-size: 6mm">/</div>
                        <div class="col-sm-2">
                          <input type="text" class="form-control" name="tekanan_darah_bottom">
                        </div>
                        <div class="col-sm-3">
                          [<span class="badge bg-warning">Hypertensi</span><span class="badge bg-warning">Hypotensi</span><span class="badge bg-success">Normal</span>]
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tekanan Jantung</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="tekanan_jantung"  value="true">
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="tekanan_jantung"  value="false">
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" name="ket_tekanan_jantung">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Diabetes</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="diabetes"  value="true">
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="diabetes"  value="false">
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" name="ket_diabetes">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Hepatitis</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="hepatitis"  value="true">
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="hepatitis"  value="false">
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" name="ket_hepatitis">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Penyakit Lainnya</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="penyakit_lainnya"  value="true">
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="penyakit_lainnya"  value="false">
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" name="ket_penyakit_lainnya">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Alergi Obat</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="alergi_obat"  value="true">
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="alergi_obat"  value="false">
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" name="ket_alergi_obat">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Alergi Makanan</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="alergi_makanan"  value="true">
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="alergi_makanan"  value="false">
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" name="ket_alergi_makanan">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Oklusi</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="oklusi"  value="Normal bite">
                          Normal bite
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="oklusi"  value="Cross bite">
                          Cross bite
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="oklusi"  value="Deep bite">
                          Deep bite
                        </label>
                      </div>

                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Torus Palatinus</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="torus_palatinus"  value="Tidak ada">
                          Tidak ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="torus_palatinus"  value="Kecil">
                          Kecil
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="torus_palatinus"  value="Sedang">
                          Sedang
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="torus_palatinus"  value="Besar">
                          Besar
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="torus_palatinus"  value="Multiple">
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
                          <input type="radio" name="torus_mandibularis"  value="Tidak ada">
                          Tidak ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="torus_mandibularis"  value="Kecil">
                          Kecil
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="torus_mandibularis"  value="Sedang">
                          Sedang
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="torus_mandibularis"  value="Besar">
                          Besar
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="torus_mandibularis"  value="Multiple">
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
                          <input type="radio" name="palatum"  value="Dalam">
                          Dalam
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="palatum"  value="Sedang">
                          Sedang
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="palatum"  value="Rendah">
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
                          <input type="radio" name="supernumerary_teeth"  value="true">
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="supernumerary_teeth"  value="false">
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" name="ket_supernumerary_teeth">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Diastema</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="diastema" value="true">
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="diastema" value="false">
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" name="ket_diastema">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Gigi Anomali</label>
                    <div class="col-lg-1">
                      <div class="radio">
                        <label>
                          <input type="radio" name="anomali" value="true">
                          Ada
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="anomali"  value="false">
                          Tidak ada
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label">Sebutkan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" name="ket_anomali">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Lain-lain</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="lain">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="keterangan">
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