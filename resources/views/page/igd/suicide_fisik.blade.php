<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Asesmen Suicide dan Kekerasan Fisik IGD</title>

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
        </div>
      </div>
      @include('layouts.bio')
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Asesmen Suicide dan Kekerasan Fisik IGD
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
      <form class="form-horizontal " method="post" action="igd_suicide_fisik">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6">
                <section class="panel">
                  <header class="panel-heading">
                    SUICIDALITY <span style="font-style: italic;">static (historical) factors</span>
                  </header>
                  <div class="panel-body">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Tinggal hidup sendiri</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a1" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a1" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a1" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Riwayat upaya serius suicide</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a2" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a2" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a2" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Riwayat keluarga suicide</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a3" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a3" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a3" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Adanya diagnosa gangguan jiwa</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a4" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a4" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a4" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Penyakit/disabilitas berat</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a5" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a5" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a5" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Bepisah/Duda/Cerai</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a6" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a6" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a6" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Kehilangan Pekerjaan/Pensiun/Tidak punya kerja</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a7" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a7" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a7" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="col-lg-6">
                <section class="panel">
                  <header class="panel-heading">
                    <span style="font-style: italic;">
                      Dynamic (Current) risk factor
                    </span>
                  </header>
                  <div class="panel-body">
                    <!--date picker start-->

                    <div class="form-group">
                      <label class="control-label col-sm-4">Mengungkapkan ide bunuh diri</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b1" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b1" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b1" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Memiliki rencana/maksud suicide</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b2" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b2" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b2" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Mengungkapkan stress yang berat</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b3" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b3" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b3" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Keputusasaan</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b4" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b4" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b4" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Peristiwa / kejadian signifikan akhir-akhir ini</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b5" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b5" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b5" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Berkurangnya/Kehilangan untuk kontrol diri</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b6" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b6" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b6" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Penggunaan NAPZA</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b7" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b7" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b7" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
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
                PROTECTIVE FACTORS dan RESIKO LAINNYA
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-1 control-label"> Deskripsikan: </label>
                  <div class="col-sm-11">
                    <textarea class="form-control" rows="6" style="resize: none;" name="suicide_protective_factor"></textarea>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label"> LEVEL OF SUICIDE RISK RISK <span style="font-style: italic;">(Total Score)</span></label>
                  <div class="col-sm-1">
                    <input type="text" style="width: 3em;" class="form-control" readonly>
                  </div>
                  <div class="checkbox-inline">
                    <label style="margin-right: 4em;">
                      <input type="checkbox" name="suicide_level_1" id="suicide_level" disabled>
                      LOW ( &#x3c;7 )
                    </label>
                    <label style="margin-right: 4em;">
                      <input type="checkbox" name="suicide_level_2" id="suicide_level" disabled>
                      MODERATE ( 7-14 )
                    </label>
                    <label style="margin-right: 4em;">
                      <input type="checkbox" name="suicide_level_3" id="suicide_level" disabled>
                      HIGH ( &#x3e;14 )
                    </label>
                  </div>
                </div>
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
                    AGGRESSION/VIOLENCE <span style="font-style: italic;"> Static (historical) factors</span>
                  </header>
                  <div class="panel-body">
                    <!--date picker start-->

                    <div class="form-group">
                      <label class="control-label col-sm-4">Insiden kekerasan baru-baru ini</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c1" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c1" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c1" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Riwayat penggunaan senjata</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c2" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c2" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c2" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Laki - laki</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c3" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c3" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c3" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Usia dibawah 35 tahun</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c4" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c4" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c4" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Riwayat Kriminal</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c5" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c5" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c5" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Riwayat melakukan tindakan berbahaya atau ide kekerasan</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c6" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c6" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c6" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Riwayat kekerasan masa kanak-kanak</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c7" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c7" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c7" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Kurangnya peran dalam hidup (pekerjaan,hubungan)</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c8" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c8" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c8" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Riwayat penggunaan NAPZA</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c9" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c9" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c9" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="col-lg-6">
                <section class="panel">
                  <header class="panel-heading">
                    <span style="font-style: italic;">
                      Dynamic (Current) risk factor
                    </span>
                  </header>
                  <div class="panel-body">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Mengekspresikan ide untuk melukai orang lain</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d1" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d1" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d1" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Akses untuk melakukan tindakan kekerasan</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d2" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d2" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d2" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Ide paranoid atau lainnya</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d3" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d3" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d3" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Perintah halusinasi untuk tindakan kekerasan</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d4" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d4" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d4" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Kemarahan, frustasi, atau agitasi</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d5" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d5" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d5" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Kesenangan untuk ide/tindakan kekerasan</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d6" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d6" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d6" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Perilaku seksual yang tidak wajar</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d7" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d7" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d7" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Berkurangnya/kehilangan untuk kontrol diri</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d8" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d8" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d8" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Penggunaan NAPZA</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d9" value="1">
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d9" value="2">
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d9" value="3">
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
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
                PROTECTIVE FACTORS
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-1 control-label"> Deskripsikan: </label>
                  <div class="col-sm-11">
                    <textarea class="form-control" rows="6" style="resize: none;" name="violence_protective_factor"></textarea>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                OTHER RISK IDENTIFIED (AND RISK FACTORS)
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-1 control-label"> Deskripsikan: </label>
                  <div class="col-sm-11">
                    <textarea class="form-control" rows="6" style="resize: none;" name="other_risk"></textarea>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label"> LEVEL OF VIOLENCE RISK <span style="font-style: italic;">(Total Score)</span></label>
                  <div class="col-sm-1">
                    <input type="text" style="width: 3em;" class="form-control" readonly>
                  </div>
                  <div class="checkbox-inline">
                    <label style="margin-right: 4em;">
                      <input type="checkbox" name="violence_level_1" id="violence_level" disabled>
                      LOW ( &#x3c;7 )
                    </label>
                    <label style="margin-right: 4em;">
                      <input type="checkbox" name="violence_level_2" id="violence_level" disabled>
                      MODERATE ( 7-14 )
                    </label>
                    <label style="margin-right: 4em;">
                      <input type="checkbox" name="violence_level_3" id="violence_level" disabled>
                      HIGH ( &#x3e;14 )
                    </label>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
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

</body>
<html>