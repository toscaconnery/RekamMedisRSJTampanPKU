<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Hak dan Kewajiban</title>

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> PEMBERIAN INFORMASI</h3>
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
                Dokumen Pemberian Informasi
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
                    <td>Pemberian Informasi</td>
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
                Pemberian Informasi
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <table>
                    <tbody>
                      <tr>
                        <td class="konten_s_question" colspan="2">
                          <b>A. Hak Pasien</b>
                          <br>
                        </td>
                      </tr>

                      <tr>
                        <td class="contain0" colspan="2">
                          <br>
                        </td>
                      </tr>

                      <tr>
                        <td class="contain0" colspan="2">Hak pasien adalah hak-hak pribadi yang dimiliki manusia sebagai pasien:</td>
                      </tr>
                      <tr>
                        <td class="number0">1. </td>
                        <td class="contain0">Pasien berhak memperoleh informasi mengenai tata tertib dan peraturan yang berlaku di Rumah Sakit,</td>
                      </tr>
                      <tr>
                        <td class="number0">2. </td>
                        <td class="contain0">Pasien berhak memperoleh informasi tentang hak dan kewajiban pasien,</td>
                      </tr>
                      <tr>
                        <td class="number0">3. </td>
                        <td class="contain0">Pasien berhak memperoleh layanan yang manusiawi, adil, jujur, dan tanpa diskriminasi,</td>
                      </tr>
                      <tr>
                        <td class="number0">4. </td>
                        <td class="contain0">Pasien berhak memperoleh layanan kesehatan yang bermutu sesuai dengan standar profesi dan standar prosedur operasional,</td>
                      </tr>
                      <tr>
                        <td class="number0">5. </td>
                        <td class="contain0">Pasien berhak memperoleh layanan yang efektif dan efisien sehingga pasien terhindar dari kerugian fisik dan materi,</td>
                      </tr>
                      <tr>
                        <td class="number0">6. </td>
                        <td class="contain0">Pasien berhak mengajukan pengaduan atas kualitas pelayanan yang didapatkan</td>
                      </tr>
                      <tr>
                        <td class="number0">7.</td>
                        <td class="contain0">Pasien berhak memilih dokter dan kelas perawatan sesuai dengan keinginannya dan peraturan yang berlaku di Rumah Sakit</td>
                      </tr>
                      <tr>
                        <td class="number0">8. </td>
                        <td class="contain0">Pasien berhak meminta konsultasi tentang penyakit yang dideritanya kepada dokter lain yang mempunyai Surat Ijin Praktek (SIP) baik di dalam maupun di luar Rumah Sakit,</td>
                      </tr>
                      <tr>
                        <td class="number0">9. </td>
                        <td class="contain0">Pasien berhak mendapat privasi dan kerahasiaan penyakit yang diderita termasuk data-data medisnya</td>
                      </tr>
                      <tr>
                        <td class="number0" style="vertical-align:top">10. </td>
                        <td class="contain0">Pasien berhak mendapatkan informasi yang meliputi diagnosis dan tata cara tindakan medis, tujuan tindakan medis, alternatif tindakan medis, resiko dan komplikasi yang mungkin terjadi dan prognosis terhadap tindakan yang dilakukan serta perkiraan biaya pengobatan,</td>
                      </tr>
                      <tr>
                        <td class="number0">11. </td>
                        <td class="contain0">Pasien berhak memberikan persetujuan atau menolak atas tindakan yang dilakukan oleh tenaga kesehatan terhadap penyakit yang dideritanya,</td>
                      </tr>
                      <tr>
                        <td class="number0">12. </td>
                        <td class="contain0">Pasien berhak didampingi keluarganya dalam keadaan kritis, </td>
                      </tr>
                      <tr>
                        <td class="number0">13. </td>
                        <td class="contain0">Pasien berhak menjalankan ibadah sesuai agama/kepercayaan yang dianutnya selama hal tidak mengganggu pasien lainnya,</td>
                      </tr>
                      <tr>
                        <td class="number0">14. </td>
                        <td class="contain0">Pasien berhak memperoleh keamanan dan keselamatan dirinya selama dalam perawatan di Rumah Sakit,</td>
                      </tr>
                      <tr>
                        <td class="number0">15. </td>
                        <td class="contain0">Pasien berhak mengajukan usul, saran, perbaikan atas perilaku Rumah Sakit terhadap dirinya,</td>
                      </tr>
                      <tr>
                        <td class="number0">16. </td>
                        <td class="contain0">Pasien berhak menolak pelayanan bimbingan rohani yang tidak sesuai dengan agama dan kepercayaan yang dianutnya,</td>
                      </tr>
                      <tr>
                        <td class="number0">17. </td>
                        <td class="contain0">Pasien berhak menggugat dan atau menuntut Rumah Sakit apabila Rumah Sakit diduga memberikan pelayanan yang tidak sesuai dengan standar baik secara perdata maupun pidana,</td>
                      </tr>
                      <tr>
                        <td class="number0">18.</td>
                        <td class="contain0">Pasien berhak mengeluhkan pelayanan Rumah Sakit yang tidak sesuai dengan standar pelayanan melalui media cetak dan elektronik sesuai dengan ketentuan peraturan perundang-undangan.</td>
                      </tr>

                      <tr>
                        <td class="contain0" colspan="2">
                          <br>
                        </td>
                      </tr>

                      <tr>
                        <td class="konten_s_question" colspan="2">
                          <b>B. Kewajiban Pasien</b><br>
                        </td>
                      </tr>

                      <tr>
                        <td class="contain0" colspan="2">
                          <br>
                        </td>
                      </tr>

                      <tr>
                        <td class="number0">1. </td>
                        <td class="contain0">Pasien dan keluarganya berkewajiban untuk mentaati segala aturan dan tata tertib Rumah Sakit,</td>
                      </tr>
                      <tr>
                        <td class="number0">2. </td>
                        <td class="contain0">Pasien berkewajiban untuk mematuhi segala instruksi dokter dan perawat dalam pengobatannya</td>
                      </tr>
                      <tr>
                        <td class="number0">3. </td>
                        <td class="contain0">Pasien berkewajiban untuk memberikan informasi dengan jujur dan selengkapnya tentang penyakit yang diderita kepada dokter yang merawat,</td>
                      </tr>
                      <tr>
                        <td class="number0">4. </td>
                        <td class="contain0">Pasien dan atau penanggungnya berkewajiban untuk melunasi semua biaya atas jasa pelayanan Rumah Sakit/Dokter,</td>
                      </tr>
                      <tr>
                        <td class="number0">5. </td>
                        <td class="contain0">Pasien dan atau penanggung jawabnya berkewajiban memenuhi hal-hal yang telah disepakati/perjanjian yang telah dibuatnya.</td>
                      </tr>

                      <tr>
                        <td class="contain0" colspan="2">
                          <br>
                        </td>
                      </tr>

                      <tr>
                        <td class="contain0" colspan="2">
                          Saya telah membaca dan memahami hak dan kewajiba pasien seperti tertera di atas. Saya akan mematuhi segalanya dengan penuh tanggung jawab.
                        </td>
                      </tr>

                  </table>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group"></div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hormat Saya</label>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Penanda Tangan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                </form>
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