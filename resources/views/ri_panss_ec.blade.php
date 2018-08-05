<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>PANSS EC</title>

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> PANSS EC</h3>
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
                Dokumen PANSS EC
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
                    <td>PANSS EC</td>
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
                PANSS EC
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">P4. GADUH GELISAH</label>
                    <div class="col-lg-3">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="p4" id="optionsRadios1" value="Baik" checked>
                                                  Tidak ada - definisi tidak dipenuhi
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="p4" id="optionsRadios1" value="Tidak Baik" checked>
                                                  Minimal – patologis diragukan
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="p4" id="optionsRadios1" value="Baik" checked>
                                                  Ringan – sedikit agitatif, waspada berlebihan, atau sedikit mudah terangsang selama wawancara, tanpa episode yang jelas dari gaduh gelisah atau labilitas alam perasaan yang mecolok. Pembicaraan mungkin sedikit mendesah
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="p4" id="optionsRadios1" value="Baik" checked>
                                                  Sedang – agitasi atau mudah terangsang yang jelas, ledakan-ledakan episodik
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="p4" id="optionsRadios1" value="Baik" checked>
                                                  Agak berat – hiperaktivitas yang bermakna, sering terjadi ledakan-leadakan atau aktivitas mototrik, sulit untuk tetap duduk
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="p4" id="optionsRadios1" value="Baik" checked>
                                                  Berat – gaduh gelisah yang mencolok mempengaruhi fungsi sehari-hari seperti makan  dan tidur
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="p4" id="optionsRadios1" value="Baik" checked>
                                                  Sangat berat – gaduh gelisah yang mencolok, mempengaruhi kegiatan makan dan tidur, serta jelas tidak memungkinkan interaksi interpersonal. Percepatan dan pembicaraan dan aktivitas motorik dapat menimbulkan inkoherensi dan kelelahan
                                              </label>
                      </div>
                    </div>
                    <label class="control-label col-lg-2" for="inputSuccess">G8. KETIDAKOPERATIFAN</label>
                    <div class="col-lg-3">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g8" id="optionsRadios1" value="Baik" checked>
                                                  Tidak ada - definisi tidak dipenuhi
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g8" id="optionsRadios1" value="Tidak Baik" checked>
                                                  Minimal – patologis diragukan
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g8" id="optionsRadios1" value="Baik" checked>
                                                  Ringan – patuh tapi disertai sikap marah tidak sabar atau sarkasme, mungkin ada penolakan yang tidak mengganggu terhadap penyelidikan yang sensitif selama wawancara
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g8" id="optionsRadios1" value="Baik" checked>
                                                  Sedang – kadang-kadang terdapat penolakan langsung untuk patuh, memproyeksikan hostilitas, defensif atau bersifat negatif tetapi biasanya masih dapat diatasi
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g8" id="optionsRadios1" value="Baik" checked>
                                                  Agak berat – seringkali tidak patuh, jelas defensif atau iritabilitas terhadap pewawancara dan mungkin tidak bersedia menghadapi banyak pertanyaan
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g8" id="optionsRadios1" value="Baik" checked>
                                                  Berat – sangat tidak kooperatif, negativistik dan suka membangkang. Menolak untuk patuh, tidak mau memulai atau mengikuti wawancara sepenuhnya
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g8" id="optionsRadios1" value="Baik" checked>
                                                  Sangat berat – resistensi aktif, menolak untuk ikut dalam aktivitas sosial apapun, mengurus kebersihan diri, bercakap-cakap dengan keluarga atau staf dan bahkan untuk berpartisipasi dalam wawancara singkat
                                              </label>
                      </div>
                    </div>

                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">P7. PERMUSUHAN</label>
                    <div class="col-lg-3">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="p7" id="optionsRadios1" value="Baik" checked>
                                                  Tidak ada - definisi tidak dipenuhi
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="p7" id="optionsRadios1" value="Tidak Baik" checked>
                                                  Minimal – patologis diragukan
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="p7" id="optionsRadios1" value="Baik" checked>
                                                  Ringan – melampiaskan kemarahan secara tidak langsung atau ditahan
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="p7" id="optionsRadios1" value="Baik" checked>
                                                  Sedang – sikap bermusuhan yang nyata
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="p7" id="optionsRadios1" value="Baik" checked>
                                                  Agak berat – pasien sangat mudah marah dan kadang-kadang memaki dengan kata-kata kasar atau mengancam
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="p7" id="optionsRadios1" value="Baik" checked>
                                                  Berat – tidak kooperatif dan mencaci maki dengan kasar atau mengancam, dapat beringas dan merusak tetapi tidak menyerang orang lain secara fisik
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="p7" id="optionsRadios1" value="Baik" checked>
                                                  Sangat berat – kemarahan yang hebat berakibat sangat tidak kooperatif, menghalangi interaksi, atau secara episodik melakukan penyerangan fisik terhadap orang lain
                                              </label>
                      </div>
                    </div>
                    <label class="control-label col-lg-2" for="inputSuccess">G14. PENGENDALIAN IMPULS</label>
                    <div class="col-lg-3">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g14" id="optionsRadios1" value="Baik" checked>
                                                  Tidak ada - definisi tidak dipenuhi
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g14" id="optionsRadios1" value="Tidak Baik" checked>
                                                  Minimal – patologis diragukan
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g14" id="optionsRadios1" value="Baik" checked>
                                                  Ringan – cenderung mudah marah dan frustasi bila menghadapi stres atau pemuasannya ditolak tetapi jarang bertindak impulsif
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g14" id="optionsRadios1" value="Baik" checked>
                                                  Sedang – dengan provokasi yang minimal, pasien menjadi marah dan mencaci maki. Mungkin sekali-kali mengancam, merusak atau terdapat satu atau dua episode yang melibatkan konfrontasi fisik atau perselisihan ringan
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g14" id="optionsRadios1" value="Baik" checked>
                                                  Agak berat – memperlihatkan episode impulsif yang berulang, termasuk mencaci maki, merusak harta benda atau ancaman fisik. Mungkin ada satu atau dua episode yang melibatkan serangn serius
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g14" id="optionsRadios1" value="Baik" checked>
                                                  Berat – agresif secara impulsif, mengancam, menuntut dan merusak, tanpa pertimbangan terhadap konsekuensinya. Menunjukkan perilaku menyerang
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g14" id="optionsRadios1" value="Baik" checked>
                                                  Sangat berat – memperlihatkan serangan kebrutalan dan berbahaya
                                              </label>
                      </div>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">G4. Ketegangan</label>
                    <div class="col-lg-3">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g4" id="optionsRadios1" value="Baik" checked>
                                                  Tidak ada - definisi tidak dipenuhi
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g4" id="optionsRadios1" value="Tidak Baik" checked>
                                                  Minimal – patologis diragukan
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g4" id="optionsRadios1" value="Baik" checked>
                                                  Ringan – postur dan gerakan-gerakan menunjukkan kekhawatiran ringan, ketidaktenangan yang sekali-kali, perubahan posisi, atau tremor tangan yang halus dan cepat
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g4" id="optionsRadios1" value="Baik" checked>
                                                  Sedang – nyata-nyata gelisah seperti perilaku tidak tenang, tremor tangan yang nyata, keringat berlebihan, atau manerisme karena gugup
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g4" id="optionsRadios1" value="Baik" checked>
                                                  Agak berat – ketegangan yang berat, manifestasi seperti gemetar karena gugup, keringat sangat berlebihan dan ketidaktenangan, perilaku selama wawancara tidak terpengaruh secara bermakna
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g4" id="optionsRadios1" value="Baik" checked>
                                                  Berat – Ketegangan berat, taraf interaksi terganggu. Misalnya terus-menerus bergerak, tidak dapat tetap duduk, hiperventilasi
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="g4" id="optionsRadios1" value="Baik" checked>
                                                  Sangat berat – ketegangan sangat mencolok, tanda panik atau percepatan gerakan motorik kaar, ketidak mampuan tetap duduk > 1 menit yang menyebabkan percakapan tidak mungkin diteruskan
                                              </label>
                      </div>
                    </div>
                  
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Bangsal   </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Pemeriksaan</label>
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