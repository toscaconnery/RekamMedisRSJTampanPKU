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
 <header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>
    <a href="{{url('')}}/index" class="logo">REKAM MEDIS <span class="lite">RSJ TAMPAN</span></a>
      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          
          
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username">Syauki Aulia Thamrin</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </header>

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li>
            <a class="" href="{{url('')}}/identifikasi">
                          <i class="icon_document_alt"></i>
                          <span><font size="2">Identifikasi Pasien Baru</font></span>
                      </a>
          </li>
        
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>RAWAT JALAN</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{{url('')}}/rj_asesmen">Asesmen Awal</a></li>
              <li><a class="" href="{{url('')}}/rj_asesmen_gigi">Asesmen Awal Gigi</a></li>
              <li><a class="" href="{{url('')}}/rj_informasi_edukasi">Informasi dan Edukasi</a></li>
              <li><a class="" href="{{url('')}}/rj_lapor_rehabilitasi">Lapor dan Rehabilitasi</a></li>
              <li><a class="" href="{{url('')}}/rj_perkembangan_pasien">Perkembangan Pasien</a></li>
              <li><a class="" href="{{url('')}}/rj_identifikasi_stresor">Identifikasi Stresor</a></li>
              <li><a class="" href="{{url('')}}/rj_tumbuh_kembang">Tumbuh Kembang</a></li>
              <li><a class="" href="{{url('')}}/rj_resume_rawat">Resume Rawat Jalan</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>IGD</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{{url('')}}/igd_triase_pasien">Triase Pasien</a></li>
              <li><a class="" href="{{url('')}}/igd_asesmen_darurat">Asesmen Rawat Darurat</a></li>
              <li><a class="" href="{{url('')}}/igd_suicide_fisik">Suicide - Kekerasan Fisik</a></li>
              <li><a class="" href="{{url('')}}/igd_catatan_kemajuan">Catatan Kemajuan</a></li>
              <li><a class="" href="{{url('')}}/igd_perkembangan_pasien">Perkembangan Pasien</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>RAWAT INAP</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{{url('')}}/ri_surat_persetujuan">Surat dan Persetujuan</a></li>
              <li><a class="" href="{{url('')}}/ri_resume_medis">Resume Medis</a></li>
              <li><a class="" href="{{url('')}}/ri_dpjp_case">DPJP dan Case Manager</a></li>
              <li><a class="" href="{{url('')}}/ri_persetujuan_umum">Persetujuan Umum</a></li>
              <li><a class="" href="{{url('')}}/ri_hak_kewajiban">Hak Kewajiban Pasien</a></li>
              <li><a class="" href="{{url('')}}/ri_asesmen">Asesmen Rawat Inap</a></li>
              <li><a class="" href="{{url('')}}/ri_suicide_fisik">Suicide Kekerasan Fisik</a></li>
              <li><a class="" href="{{url('')}}/ri_rawat_napza">Keperawatan NAPZA</a></li>
              <li><a class="" href="{{url('')}}/ri_penilaian_edmunson">Penilaian Edmunson</a></li>
              <li><a class="" href="{{url('')}}/ri_risiko_nyeri">Penilaian Risiko Nyeri</a></li>
              <li><a class="" href="{{url('')}}/ri_catatan_perkembangan">Catatan Perkembangan</a></li>
              <li><a class="" href="{{url('')}}/ri_rencana_keperawatan">Rencana Keperawatan</a></li>
              <li><a class="" href="{{url('')}}/ri_keperawatan_napza">Keperawatan NAPZA</a></li>
              <li><a class="" href="{{url('')}}/ri_evaluasi_keperawatan">Evaluasi Keperawatan</a></li>
              <li><a class="" href="{{url('')}}/ri_monitoring_observasi">Monitoring Observasi</a></li>
              <li><a class="" href="{{url('')}}/ri_penggunaan_obat">Penggunaan Obat</a></li>
              <li><a class="" href="{{url('')}}/ri_riwayat_obat">Riwayat Obat</a></li>
              <li><a class="" href="{{url('')}}/ri_efek_samping">Efek Samping Obat</a></li>
              <li><a class="" href="{{url('')}}/ri_edukasi">Edukasi Pasien Keluarga</a></li>
              <li><a class="" href="{{url('')}}/ri_rencana_pemulangan">Rencana Pemulangan</a></li>
              <li><a class="" href="{{url('')}}/ri_panss_ec">PANSS EC</a></li>
              <li><a class="" href="{{url('')}}/ri_penilaian_panss">Penilaian PANSS EC</a></li>
              <li><a class="" href="{{url('')}}/ri_lembar_konsultasi">Lembar Konsultasi</a></li>
              <li><a class="" href="{{url('')}}/ri_transfer_internal">Transfer Internal</a></li>
              <li><a class="" href="{{url('')}}/ri_transfer_eksternal">Transfer Eksternal</a></li>
              <li><a class="" href="{{url('')}}/ri_pemberian_informasi">Pemberian Informasi</a></li>
              <li><a class="" href="{{url('')}}/ri_pemeriksaan_psikologis">Pemeriksaan Psikologis</a></li>
              <li><a class="" href="{{url('')}}/ri_serah_terima">Serah Terima Pulang</a></li>
            </ul>
          </li>

          <li>
            <a class="" href="{{url('')}}/penundaan_pelayanan">
                          <i class="icon_document_alt"></i>
                          <span><font size="2">Penundaan Pelayanan</font></span>
                      </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>


 </section>
  <!-- container section start -->
 <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> PENUNDAAN PELAYANAN</h3>
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

            <section class="panel">
              <header class="panel-heading">
                Data Penundaan
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Umur</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hubungan dengan Pasien</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Poli/Ruangan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Dokter Pengirim</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pemberi Informasi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Dengan ini menyatakan bahwa saya telah menerima informasi terhadap penundaan pelayanan dan pengobatan dikarenakan:
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Penundaan pelayanan</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox1" value="option1"> Dokter berhalangan datang
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox2" value="option2"> Kerusakan alat
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="option3"> Pemberian obat di farmasi
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="option3"> Hasil pemeriksaan radiologi
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="option3"> Hasil pemeriksaan laboratorium
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="option3"> Lain-lain .....
                                          </label>
                    </div>
                  </div>
                  <div class="col-lg-2"></div><h5>Maka dengan ini saya Setuju untuk dilakukan Penundaan Pelayanan dengan alternatif yang diberikan</h5>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Setuju menunda</label>
                    <div class="col-lg-10">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                  Dijadwalkan ulang
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                  Jadwal yang akan datang
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                  Dirujuk ke Pelayanan / RS lain
                                              </label>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label col-sm-2">Jadwal Penundaan</label>
                    <div class="col-sm-3">
                      <input id="dp1" type="text" value="28-10-2013" size="16" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Rumah Sakit Rujukan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control">
                    </div>
                  </div>
              </div>
                </form>
                
            </section>
            

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