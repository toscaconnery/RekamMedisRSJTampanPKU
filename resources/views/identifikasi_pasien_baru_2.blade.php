<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Identifikasi Pasien Baru</title>

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> IDENTIFIKASI PASIEN BARU</h3>
            <!--<ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-file-text-o"></i>Form elements</li>
            </ol>-->
          </div>
        </div>
        <div class="panel-body bio-graph-info">
          <h1>No. RM : {{$no_rm}}</h1>
          <div class="row">
            <div class="bio-row">
              <p><span>Nama Pasien </span>: {{$nama_pasien}} </p>
            </div>
            <div class="bio-row">
              <p><span>Tanggal Lahir</span>: {{date('j F Y', strtotime($tanggal_lahir))}}</p>
            </div>
            <div class="bio-row">
              <p><span>Jenis Kelamin </span>: {{$jenis_kelamin}}</p>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Dokumen Identifikasi Pasien
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
                    <td>Identifikasi Pasien</td>
                    <td>{{date('d/m/Y', strtotime($tanggal_pengisian))}}</td>
                    <td>{{Auth::user()->nama}}</td>
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
            <form class="form-horizontal " method="post" action="identifikasi_pasien_baru_final">
          	<section class="panel">
              <header class="panel-heading">
                Status
              </header>
              <div class="panel-body">

                {{-- <fo/rm class="form-horizontal " method="post" action="identifikasi_pasien_baru_final"> --}}
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Pernikahan</label>
                    <div class="col-lg-3">
                      <select class="form-control m-bot15" name="pernikahan">
                        <option value="Tidak Kawin">Tidak Kawin</option>
                        <option value="Kawin">Kawin</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                      </select>
                    </div>

                    <label class="control-label col-lg-2" for="inputSuccess">Agama</label>
                    <div class="col-lg-3">
                      <select class="form-control m-bot15" name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Pendidikan</label>
                    <div class="col-lg-3">
                      <select class="form-control m-bot15" name="pendidikan">
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="Akademi">Akademi</option>
                        <option value="Universitas">Universitas</option>
                      </select>
                    </div>

                    <label class="control-label col-lg-2" for="inputSuccess">Pekerjaan</label>
                    <div class="col-lg-3">
                      <select class="form-control m-bot15" name="pekerjaan">
                        <option value="Tidak Kerja">Tidak Kerja</option>
                        <option value="Buruh">Buruh</option>
                        <option value="Tani">Tani</option>
                        <option value="Swasta/Wiraswasta">Swasta/Wiraswasta</option>
                        <option value="PNS">PNS</option>
                        <option value="TNI/POLRI">TNI/POLRI</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Bahasa Sehari-Hari</label>
                    <div class="col-lg-5">
                      <select class="form-control m-bot15" name="bahasa">
                        <option value="Indonesia">Indonesia</option>
                        <option value="Melayu">Melayu</option>
                        <option value="Jawa">Jawa</option>
                        <option value="Minang">Minang</option>
                        <option value="Batak">Batak</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Ayah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_ayah">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Ibu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_ibu">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Budaya/Suku</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="budaya">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="alamat">
                    </div>
                    <label class="col-sm-1 control-label">RT</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="rt">
                    </div>
                    <label class="col-sm-1 control-label">RW</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="rw">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">No.Telp</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="no_telp">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Perubahan Alamat</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="perubahan_alamat">
                    </div>
                    <label class="col-sm-1 control-label">RT</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="perubahan_rt">
                    </div>
                    <label class="col-sm-1 control-label">RW</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="perubahan_rw">
                    </div>
                  </div>

                {{-- </form> --}}
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Penanggung Jawab
              </header>
              <div class="panel-body">
                {{-- <fo/rm class="form-horizontal " method="get"> --}}
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hubungan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Telp</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
               {{--  </form> --}}
              </div>
            </section>

            <div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            </form>

           
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