<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>RSJ Tampan Provinsi Riau</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{url('')}}/sweetalert2/dist/sweetalert2.min.css">
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
  

  
  <link rel="stylesheet" type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css">
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>

   <scriptscript src="//code.jquery.com/jquery-1.12.3.js"></script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script
      src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet"
      href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet"
      href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

 <script>
  $(document).ready(function() {
    $('#daftar_pasien').DataTable();
} );
 </script>

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> DAFTAR PASIEN</h3> 
          </div>
        </div>

        <br>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Daftar Pasien
              </header>
              
              <table class="table" id="daftar_pasien">
                <thead>
                    <tr>
                        <th><i class="icon_profile"></i> Nama Pasien</th>
                        <th><i class="icon_profile"></i> Nomor RM</th>
                        <th><i class="icon_calendar"></i> Tanggal Lahir</th>
                        <th><i class="icon_pin_alt"></i> Alamat</th>
                        <th><i class="icon_cogs"></i> Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($pasien as $p)
                  <tr>
                    <td>{{$p->nama_pasien}}</td>
                    <td></td>
                    <td>{{$p->tanggal_lahir}}</td>
                    <td>{{$p->alamat}}</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary btn-sm" href="{{url('')}}/put_selected_patient_id/{{$p->no_rm}}">Pilih Pasien</a>
                      </div>
                    </td>
                  </tr>
                @endforeach
                </tbody>
            </table>
              <div class="text-right">
                {{-- <div class="credits">
                    
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                    
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                  </div> --}}
              </div>
            </section>
          </div>
        </div>



           
  <!-- javascripts -->

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

    <script src="{{url('')}}/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="{{url('')}}/sweetalert2/dist/sweetalert2.min.js"></script>

    @if(Session::has('pesan_kesalahan'))
      @include('sweetalert.error')
    @endif

    @if(Session::has('pasien_belum_dipilih'))
      @include('sweetalert.pasienbelumdipilih')
    @endif

    @if(Session::has('pesan_berhasil'))
      @include('sweetalert.success')
    @endif

    
</body>


<html>
