<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Triase Pasien</title>

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
              Dokumen Triase Pasien
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
                  <td>Triase Pasien</td>
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

          <form class="form-horizontal " method="post" action="igd_triase">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Triase Pasien
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal masuk IGD</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control required" name="tanggal_masuk">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jam">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keluhan Utama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="keluhan_utama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">DOA</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="" name="doa">
                        DOA
                      </label>
                    </div>                    
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Triase Pasien</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" value="resusitasi">
                        RESUSITASI
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" value="emergent">
                        EMERGENT
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" value="tanda vital">
                        TANDA VITAL
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" value="urgent">
                        URGENT
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" value="non urgent">
                        NON URGENT
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" value="false emergency">
                        FALSE EMERGENCY
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                PEMERIKSAAN
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h3>RESUSITASI</h3>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jalan_nafas_sumbatan">
                        Sumbatan
                      </label>
                    </div>                    
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="henti_nafas">
                        Henti Nafas
                      </label>
                    </div>   
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nafas_le_10">
                        Frek Nafas <= 10 x/mm
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sianosis">
                        Sianosis
                      </label>
                    </div>                     
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="henti_jantung">
                        Henti Jantung
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kondisi_nadi_tidak_teraba">
                        Nadi tidak teraba
                      </label>
                    </div> 
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pucat">
                        Pucat
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="akral_dingin">
                        Akral Dingin
                      </label>
                    </div>                            
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="gcs_le_9">
                        GCS < 9
                      </label>
                    </div>                    
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                PEMERIKSAAN
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h3>EMERGENT</h3>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jalan_nafas_bebas">
                        Bebas
                      </label>
                    </div>                    
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nafas_be_32">
                        Frek Nafas >= 32 x/mm
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="mengi">
                        Mengi
                      </label>
                    </div>                     
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kondisi_nadi_teraba_lemah">
                        Nadi teraba lemah
                      </label>
                    </div> 
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nadi_le_50_be_150">
                        Frek Nadi <= 50 x/mnt atau >= 150 x/mnt
                      </label>
                    </div>                        
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="gcs_9_12">
                        GCS 9-12
                      </label>
                    </div>                    
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                PEMERIKSAAN
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h3>TANDA VITAL</h3>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label>
                  <div class="col-lg-7">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Tekanan Darah</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="tekanan_darah">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Frek Nadi</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="frek_nadi_text">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label>
                  <div class="col-lg-7">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Frek Nafas</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="frek_nafas_text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Suhu</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="suhu">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label>
                  <div class="col-lg-7">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Makanan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="alergi_makanan">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Obat</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="alergi_obat">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Lainnya</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="alergi_lainnya">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label>
                  <div class="col-lg-7">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">GCS</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="gcs_text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                PEMERIKSAAN
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h3>URGENT</h3>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jalan_nafas_bebas">
                        Bebas
                      </label>
                    </div>                    
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nafas_be_24_32">
                        Frek Nafas >= 24-32 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="mengi">
                        Mengi
                      </label>
                    </div> 
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nadi_120_150">
                        Frek Nadi: 120-150 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sistol_me_160">
                        TD Sistol >= 160 mmHg
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diastol_m_100">
                        TD Diastol > 100 mmHg
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="gcs_m_12">
                        GCS > 12
                      </label>
                    </div>  
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                PEMERIKSAAN
              </header>
              <div class="panel-body">

                <div class="col-lg-2"></div><h3>NON URGENT</h3>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jalan_nafas_bebas">
                        Bebas
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nafas_me_20_24">
                        Frek Nafas >= 20-24 x/mm
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nadi_100_120">
                        Frek Nadi: 100-120 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sistol_l_160">
                        TD sistol < 160 mmHg
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diastol_l_100">
                        TD Diastole < 100 mmHg
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="gcs_15">
                        GCS 15
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                PEMERIKSAAN
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h3>FALSE EMERGENCY</h3>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jalan_nafas_bebas">
                        Bebas
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nafas_16_20">
                        Frek Nafas 16-20 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="mengi">
                        Mengi
                      </label>
                    </div>
                  </div>

                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nadi_80_100">
                        Frek Nadi: 80-100 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sistol_me_120">
                        TD sistol >= 120 mmHg
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diastol_m_80">
                        TD Diastole > 80 mmHg
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="gcs_15">
                        GCS 15
                      </label>
                    </div>
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
    {{-- <script src="{{url('')}}/admin_bootstrap/js/sparkline-chart.js"></script>
    <script src="{{url('')}}/admin_bootstrap/js/easy-pie-chart.js"></script>
    <script src="{{url('')}}/admin_bootstrap/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{url('')}}/admin_bootstrap/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{url('')}}/admin_bootstrap/js/xcharts.min.js"></script>
    <script src="{{url('')}}/admin_bootstrap/js/jquery.autosize.min.js"></script>
    <script src="{{url('')}}/admin_bootstrap/js/jquery.placeholder.min.js"></script>
    <script src="{{url('')}}/admin_bootstrap/js/gdp-data.js"></script>
    <script src="{{url('')}}/admin_bootstrap/js/morris.min.js"></script>
    <script src="{{url('')}}/admin_bootstrap/js/sparklines.js"></script>
    <script src="{{url('')}}/admin_bootstrap/js/charts.js"></script> --}}
    <script src="{{url('')}}/admin_bootstrap/js/jquery.slimscroll.min.js"></script>

  </body>
  <html>