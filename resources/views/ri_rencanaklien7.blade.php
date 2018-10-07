<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Rencana Tindakan Keperawatan Klien Dengan Risiko Bunuh Diri</title>

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
   <style type="text/css">
    ul {padding-left: 1em;}
    ul li {list-style-type: lower-alpha;}
    ul.indent li {list-style-type: decimal;}
    td {position: relative;}
    td textarea {width: 100%; position: absolute; box-sizing: border-box; top: 0; left: 0; right: 0; bottom: 0; resize: none;}
    td span {font-weight: bold;}
  </style>
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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> RENCANA TINDAKAN KEPERAWATAN KLIEN DENGAN RISIKO BUNUH DIRI </h3>
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
                Dokumen Rencana Tindakan Keperawatan Klien Dengan Risiko Bunuh Diri
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
                    <td>Rencana Tindakan Keperawatan Klien Dengan Risiko Bunuh Diri</td>
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
                Rencana Tindakan
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Pengkajian</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jam Pengkajian</label>
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
                    <label class="col-sm-2 control-label">Diagnosa Medis</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

        
          <form class="form-horizontal" method="post" action="">
            {{ csrf_field() }}
            <input type="hidden" name="jumlah_form" id="jumlah_form" value="4">
            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th rowspan="2" style="width: 4%; text-align: center;vertical-align:middle;">Tgl</th>
                      <th rowspan="2" style="width: 7%; text-align: center;vertical-align:middle;">No Dx</th>
                      <th rowspan="2" style="width: 7%; text-align: center;vertical-align:middle;">Dx Keperawatan</th>
                      <th colspan="3" style="width: 80%; text-align: center;vertical-align:middle;">Perencanaan</th>
                    </tr>
                     <tr>
                      <th style="width: 20%; text-align: center;vertical-align:middle;">Tujuan</th>
                      <th style="width: 20%; text-align: center;vertical-align:middle;">Kriteria Evaluasi</th>
                      <th style="width: 20%; text-align: center;vertical-align:middle;">Intervensi</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                      <td style="text-align:center;"><input type="date" class="form-control" name="tanggal_1" required></td>
                      <td><input type="text" class="form-control" name="" required></td>
                      <td>
                        Risiko Bunuh diri
                      </td>
                      <td>
                        TUM: ... <br>
                        <input type="text" class="form-control" name="" required>
                        TUK 1: Klien dapat membina hubungan saling percaya
                      </td>
                      <td>
                        1. Setelah ... X interaksi klien menunjukkan tanda-tanda percaya kepada perawat:
                        <input type="text" class="form-control" name="" required>
                        <br>
                        <ul>
                          <li>Ekspresi wajah bersahabat.</li>
                          <li>Menunjukkan rasa senang.</li>
                          <li>Ada kontak mata.</li>
                          <li>Mau berjabat tangan.</li>
                          <li>Mau menyebutkan nama.</li>
                          <li>Mau menjawab salam.</li>
                          <li>Mau duduk berdampingan dengan perawat.</li>
                          <li>Bersedia mengungkapkan masalah yang dihadapi</li>
                        </ul>
                      </td>
                      <td>
                        1. Bina hubungan saling percaya dengan menggunakan prinsip komunikasi terapeutik:<br>
                        <ul>
                          <li>Sapa klien dengan ramah baik verbal maupun non verbal</li>
                          <li>Perkenakan nama, nama panggilan dan tujuan perawat berkenalan</li>
                          <li>Tanyakan nama lengkap dan nama panggilan yang disukai klien</li>
                          <li>Buat kontrak yang jelas</li>
                          <li>Tunjukkan sikap jujur dan menepati janji setiap kali interaksi</li>
                          <li>Tunjukkan sikap empati dan menerima apa adanya</li>
                          <li>Beri perhatian kepada klien dan perhatikan kebutuhan dasar klien</li>
                          <li>Tanyakan perasaan klien dan masalah yang dihadapi klien</li>
                          <li>Dengarkan dengan penuh perhatian ekspresi perasaan klien</li>
                        </ul>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"></td>
                      <td></td>
                      <td></td>
                      <td>
                        TUK 2: Klien dapat dilindungi dari tindakan yang mengancam atau mencoba bunuh diri
                      </td>
                      <td>
                        2. Setelah ... X interaksi klien dapat dilindungi sampai tidak ada keinginan bunuh diri<br>
                        <input type="text" class="form-control" name="" required>
                        <ul>
                          <li>Ada kontak mata</li>
                          <li>Bersedia menceritakan perasaan</li>
                          <li>Menceritakan penyebab</li>
                          <li>Timbulnya keinginan bunuh diri baik dari diri sendiri maupun lingkungannya</li>
                        </ul>
                      </td>
                      <td>
                        2.1. Identifikasi benda-benda yang dapa membahayakan pasien (pisau, silet, gelas, tali pinggang, alat kasur, dll)<br>
                        2.2. Amankan benda-benda yang dapat membahayakan pasien<br>
                        2.3. Lakukan kontrak <i>treatment</i><br>
                        2.4. Mengajarkan cara mengendalikan dorongan bunuh diri<br>
                        2.5. Melatih cara mengendalikan dorongan bunuh diri
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"></td>
                      <td></td>
                      <td></td>
                      <td>
                        TUK 3: Klien dapat meningkatkan harga diri
                      </td>
                      <td>
                        3. Setelah ... X interaksi klien menyebutkan:<br>
                        <input type="text" class="form-control" name="" required>
                        <ul>
                          <li>Aspek positif dari kemampuan yang dimiliki klien.</li>
                          <li>Aspek positif keluarga.</li>
                          <li>Aspek positif lingkungan klien</li>
                        </ul>
                      </td>
                      <td>
                        3.1. Identifikasi aspek positif pasien<br>
                        3.2. Beri kesempatan pasien mengungkapkan perasaannya<br>
                        3.3. Dorong pasien untuk berpikir positif terhadap diri<br>
                        3.4. Berikan pujian bila pasien dapat mengatakan perasaan yang positif<br>
                        3.5. Yakinkan pasien bahwa dirinya penting<br>
                        3.6. Bicarakan tentang keadaan yang sepatutnya disyukuri oleh pasien<br>
                        3.7. Dorong pasien untuk menghargai diri sebagai individu yang berharga<br>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"></td>
                      <td></td>
                      <td></td>
                      <td>
                        TUK 4: Klien dapat meningkatkan kemampuan koping dalam penyelesaian masalah
                      </td>
                      <td>
                        4. Setelah ... X interaksi klien menyebutkan:<br>
                        <input type="text" class="form-control" name="" required>
                        <ul>
                          <li>Koping konstruktif yang dapat digunkan untuk menyelesaikan masalah</li>
                          <li>Efektifitas penggunaan koping</li>
                        </ul>
                      </td>
                      <td>
                        4.1. Identifikasi pola koping yang biasa diterapkan pasien<br>
                        4.2. Bantu untuk menilai pola koping yang biasa dilakukan<br>
                        4.3. Mengidentifikasi pola koping yang konstruktif<br>
                        4.4. Dorong pasien memilih pola koping yang konstruktif<br>
                        4.5. Anjurkan pasien menerapkan pola koping konstruktif dalam kegiatan harian 
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"></td>
                      <td></td>
                      <td></td>
                      <td>
                        TUK 5: Klien dapat merencanakan masa depan
                      </td>
                      <td>
                        5. Setelah ... X interaksi klien menyebutkan:<br>
                        <input type="text" class="form-control" name="" required>
                        <ul>
                          <li>Rencana masa depan yang sesuai kemampuan</li>
                        </ul>
                      </td>
                      <td>
                        5.1. Diskusikan rencana masa depan yang realistis bersama pasien<br>
                        5.2. Identifikasi cara mencapai rencana masa depan yang realistis<br>
                        5.3. Membuat dorongan pasien melakukan kegiatan dalam rangka meraih masa depan yang realistis
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </section>

          </form>
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