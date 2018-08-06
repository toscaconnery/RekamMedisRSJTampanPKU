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
      </div>
    </div>
    <div class="panel-body bio-graph-info">
      <h4>Silahkan masukkan data pasien baru</h4>
    </div>


    <div class="row">
      <div class="col-lg-12">
       <section class="panel">
        <header class="panel-heading">
          Data Pasien
        </header>
        <div class="panel-body">
          <form class="form-horizontal " method="post" action="identifikasi_pasien_baru_2">
            {{ csrf_field() }}
            {{-- <div class="form-group">
              <label class="control-label col-lg-2" for="inputSuccess">No. RM</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" name="norm" disabled="" value="{{$no_rm}}">
              </div>
            </div> --}}
            <div class="form-group">
              <label class="control-label col-lg-2" for="inputSuccess">Nama Pasien</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" name="nama_pasien">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-2" for="inputSuccess">Tanggal Lahir</label>
              <div class="col-lg-5">
                <input type="date" class="form-control" name="tanggal_lahir">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-2" for="inputSuccess">Jenis Kelamin</label>
              <div class="col-lg-1">
                <input type="radio" name="jenis_kelamin" value="L"> L
              </div>
              <div class="col-lg-1">
                <input type="radio" name="jenis_kelamin" value="P"> P
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-2"></div>
              <div class="col-lg-1">
                <button type="submit" class="btn btn-primary">Berikutnya</button>
              </div>
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>



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