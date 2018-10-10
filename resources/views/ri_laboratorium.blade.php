<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Pemeriksaan Laboratorium</title>

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Pemeriksaan Laboratorium</h3>
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
                Dokumen Pemeriksaan Laboratorium
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_document_alt"></i> Dokumen</th>
                    <th><i class="icon_calendar"></i> Tanggal Pengisian</th>
                    <th><i class="icon_profile"></i> Pengisi</th>
                    <th><i class="icon_document_alt"></i> Status</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <tr>
                    <td>Hasil Pemeriksaan Laboratorium</td>
                    <td>20/08/2018</td>
                    <td>[Nama Pengisi]</td>
                    <td>Belum Verifikasi</td>
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
              <header class="panel-heading">Informasi Hasil Lab
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Validasi Oleh</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Dr. Pengirim</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Bahan Diterima</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Ruangan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tgl. Hasil Dicetak</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tgl. Permintaan</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">HEMATOLOGI
              </header>
              <div class="panel-body">
                <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Pemeriksaan</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Hasil</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Status</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Nilai Normal</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                    <tr>
                      <td style="text-align:center;">
                        <select class="form-control input-sm m-bot15">
                          <option value="0">-</option>
                          <option value="Heamoglobin">Heamoglobin</option>
                          <option value="Leukosit">Leukosit</option>
                          <option value="Hitung Jenis">Hitung Jenis</option>
                          <option value="Basofil">Basofil</option>
                          <option value="Eosinopil">Eosinopil</option>
                          <option value="N.Batang">N.Batang</option>
                          <option value="N.Segmen">N.Segmen</option>
                          <option value="Limposit">Limposit</option>
                          <option value="Monosit">Monosit</option>
                          <option value="LED">LED</option>
                          <option value="Erytrosit">Erytrosit</option>
                          <option value="Hematokrit">Hematokrit</option>
                          <option value="Trombosit">Trombosit</option>
                          <option value="BT">BT</option>
                          <option value="CT">CT</option>
                          <option value="Gol Darah">Gol Darah</option>
                          <option value="Malaria">Malaria</option>
                          <option value="MCV">MCV</option>
                          <option value="MCH">MCH</option>
                          <option value="MCHC">MCHC</option>
                          <option value="MDT">MDT</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>


            <section class="panel">
              <header class="panel-heading">URINE
              </header>
              <div class="panel-body">
                <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Pemeriksaan</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Hasil</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Status</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Nilai Normal</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                    <tr>
                      <td style="text-align:center;">
                        <select class="form-control input-sm m-bot15">
                          <option value="0">-</option>
                          <option value="Warna">Warna</option>
                          <option value="Kekeruhan">Kekeruhan</option>
                          <option value="Ph">Ph</option>
                          <option value="Berat Jenis">Berat Jenis</option>
                          <option value="Reduksi">Reduksi</option>
                          <option value="Protein">Protein</option>
                          <option value="Bilirubin">Bilirubin</option>
                          <option value="Urobilinogen">Urobilinogen</option>
                          <option value="Keton">Keton</option>
                          <option value="Sedimen">Sedimen</option>
                          <option value="Kristal">Kristal</option>
                          <option value="Entrosit">Entrosit</option>
                          <option value="Leukosit">Leukosit</option>
                          <option value="Epitel">Epitel</option>
                          <option value="Plano Test">Plano Test</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>

          <section class="panel">
              <header class="panel-heading">FAECES RUTIN
              </header>
              <div class="panel-body">
                <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Pemeriksaan</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Hasil</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Status</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Nilai Normal</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                    <tr>
                      <td style="text-align:center;">
                        <select class="form-control input-sm m-bot15">
                          <option value="0">-</option>
                          <option value="Warna">Warna</option>
                          <option value="Konsistensi">Konsistensi</option>
                          <option value="Lendir">Lendir</option>
                          <option value="Darah/Blood">Darah/Blood</option>
                          <option value="Amoeba">Amoeba</option>
                          <option value="Lain-lain">Lain-lain</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>

          <section class="panel">
              <header class="panel-heading">KIMIA DARAH
              </header>
              <div class="panel-body">
                <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Pemeriksaan</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Hasil</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Status</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Nilai Normal</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                    <tr>
                      <td style="text-align:center;">
                        <select class="form-control input-sm m-bot15">
                          <option value="0">-</option>
                          <option value="Gula darah sewaktu">Gula darah sewaktu</option>
                          <option value="Gula darah puasa">Gula darah puasa</option>
                          <option value="Gula darah 2 jam PP">Gula darah 2 jam PP</option>
                          <option value="ALP">ALP</option>
                          <option value="Total Protein">Total Protein</option>
                          <option value="Albumin">Albumin</option>
                          <option value="Globulin">Globulin</option>
                          <option value="Bilirubin Total">Bilirubin Total</option>
                          <option value="Bilirubin Direk">Bilirubin Direk</option>
                          <option value="Bilirubin Indirek">Bilirubin Indirek</option>
                          <option value="Total Cholesterol">Total Cholesterol</option>
                          <option value="HDL Cholesterol">HDL Cholesterol</option>
                          <option value="LDL Cholesterol">LDL Cholesterol</option>
                          <option value="Trygliserida">Trygliserida</option>
                          <option value="SGOT">SGOT</option>
                          <option value="SGPT">SGPT</option>
                          <option value="GGT">GGT</option>
                          <option value="Ureum">Ureum</option>
                          <option value="Creatinim">Creatinim</option>
                          <option value="Asam Urat">Asam Urat</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">SEROLOGI
              </header>
              <div class="panel-body">
                <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Pemeriksaan</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Hasil</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Status</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Nilai Normal</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                    <tr>
                      <td style="text-align:center;">
                        <select class="form-control input-sm m-bot15">
                          <option value="0">-</option>
                          <option value="S. Typhosa O">S. Typhosa O</option>
                          <option value="S. Typhosa H">S. Typhosa H</option>
                          <option value="S. Paratyphosa AO">S. Paratyphosa AO</option>
                          <option value="S. Paratyphosa AH">S. Paratyphosa AH</option>
                          <option value="S. Paratyphosa BO">S. Paratyphosa BO</option>
                          <option value="S. Paratyphosa BH">S. Paratyphosa BH</option>
                          <option value="S. Paratyphosa CO">S. Paratyphosa CO</option>
                          <option value="S. Paratyphosa CH">S. Paratyphosa CH</option>
                          <option value="Anti HIV">Anti HIV</option>
                          <option value="Hbs Ag">Hbs Ag</option>
                          <option value="Anti Hbs Ag">Anti Hbs Ag</option>
                          <option value="CRP">CRP</option>
                          <option value="RF">RF</option>
                          <option value="ASTO">ASTO</option>
                          <option value="Dengue lgG/lg M">Dengue lgG/lg M</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">NARKOBA
              </header>
              <div class="panel-body">
                <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Pemeriksaan</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Hasil</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Status</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Nilai Normal</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                    <tr>
                      <td style="text-align:center;">
                        <select class="form-control input-sm m-bot15">
                          <option value="0">-</option>
                          <option value="Canabis">Canabis</option>
                          <option value="Opiat">Opiat</option>
                          <option value="Benzodiazepin">Benzodiazepin</option>
                          <option value="M Ampetamin">M Ampetamin</option>
                          <option value="Alkohol">Alkohol</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" required>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
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