<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Asesmen Suicide dan Kekerasan Fisik</title>

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN SUICIDE DAN KEKERASAN FISIK</h3>
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
                Asesmen Suicide dan Kekerasan Fisik
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
                    <td>Suicide dan Kekerasan Fisik</td>
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

            
              <div class="col-lg-6">
                <section class="panel">
                  <header class="panel-heading">
                    SUICIDALITY static (historical) factors
                  </header>
                  <div class="panel-body">
                    <form class="form-horizontal " action="#">
                      <!--date picker start-->

                      <div class="form-group">
                        <label class="control-label col-sm-4">Tinggal hidup sendiri</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s1" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s1" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s1" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Riwayat upaya serius suicide</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s2" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s2" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s2" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Riwayat keluarga suicide</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s3" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s3" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s3" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Adanya diagnosa gangguan jiwa</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s4" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s4" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s4" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Penyakit/disabilitas berat</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s5" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s5" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s5" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-sm-4">Bepisah/Duda/Cerai</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s6" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s6" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s6" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Kehilangan Pekerjaan/Pensiun/Tidak punya kerja</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s7" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s7" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s7" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>
                    </form>


                  </div>
                </section>

                
              </div>

              <div class="col-lg-6">
                <section class="panel">
                  <header class="panel-heading">
                    Dynamic (Current) risk factor
                  </header>
                  <div class="panel-body">
                    <form class="form-horizontal " action="#">
                      <!--date picker start-->

                      <div class="form-group">
                        <label class="control-label col-sm-4">Mengungkapkan ide bunuh diri</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s8" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s8" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s8" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-4">Memiliki rencana/maksud suicide</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s9" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s9" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s9" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Mengungkapkan stress yang berat</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s10" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s10" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s10" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Keputusasaan</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s11" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s11" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s11" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-sm-4">Peristiwa / kejadian signifikan akhir-akhir ini</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s12" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s12" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s12" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Berkurangnya/Kehilangan untuk kontrol diri</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s13" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s13" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s13" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Penggunaan NAPZA</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s14" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s14" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s14" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>
                    </form>


                  </div>

                </section>
               
                
              </div>
            </div>


          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">

            <section class="panel">
              <header class="panel-heading">
                 
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-3 control-label"> PROTECTIVE FACTORS dan RESIKO LAINNYA Describe</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>
            </div>
          </div>
        <div class="row">
          <div class="col-lg-12">

            <div class="row">
              <div class="col-lg-6">
                <section class="panel">
                  <header class="panel-heading">
                    AGGRESSION/VIOLENCE Static (historical) factors
                  </header>
                  <div class="panel-body">
                    <form class="form-horizontal " action="#">
                      <!--date picker start-->

                      <div class="form-group">
                        <label class="control-label col-sm-4">Insiden kekerasan baru-baru ini</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s15" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s15" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s15" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-4">Riwayat penggunaan senjata</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s16" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s16" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s16" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Laki - laki</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s17" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s17" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s17" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Usia dibawah 35 tahun</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s18" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s18" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s18" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Riwayat Kriminal</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s19" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s19" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s19" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Riwayat melakukan tindakan berbahaya atau ide kekerasan</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s20" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s20" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s20" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Riwayat kekerasan masa kanak-kanak</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s21" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s21" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s21" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Kurangnya peran dalam hidup (pekerjaan,hubungan)</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s22" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s22" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s22" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Riwayat penggunaan NAPZA</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s23" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s23" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s23" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>
                        
                    </form>


                  </div>
                </section>

                
              </div>
              <div class="col-lg-6">
                <section class="panel">
                  <header class="panel-heading">
                    Dynamic (Current) risk factor
                  </header>
                  <div class="panel-body">
                    <form class="form-horizontal " action="#">
                      <!--date picker start-->

                      <div class="form-group">
                        <label class="control-label col-sm-4">Mengekspresikan ide untuk melukai orang lain</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s24" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s24" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s24" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Akses untuk melakukan tindakan kekerasan</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s25" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s25" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s25" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Ide paranoid atau lainnya</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s26" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s26" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s26" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Perintah halusinasi untuk tindakan kekerasan</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s27" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s27" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s27" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Kemarahan, frustasi, atau agitasi</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s28" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s28" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s28" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Kesenangan untuk ide/tindakan kekerasan</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s29" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s29" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s29" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Perilaku seksual yang tidak wajar</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s30" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s30" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s30" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4">Berkurangnya/kehilangan untuk kontrol diri</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s31" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s31" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s31" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-sm-4">Penggunaan NAPZA</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s32" id="optionsRadios1" value="yes" checked>
                                                      Yes
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s32" id="optionsRadios1" value="no" checked>
                                                      No
                                                  </label>
                          </div>
                          <div class="radio">
                            <label>
                                                      <input type="radio" name="s32" id="optionsRadios1" value="not_known" checked>
                                                      Not Known
                                                  </label>
                          </div>
                        </div>
                      </div>

                    </form>


                  </div>
                </section>
               
                
              </div>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">

            <section class="panel">
              <header class="panel-heading">
                 
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-3 control-label"> PROTECTIVE FACTORS dan RESIKO LAINNYA (Describe)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label"> OTHER RISK IDENTIFIED (AND RISK FACTORS)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                </form>
              </div>
            </section>
            </div>
          </div>

        

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