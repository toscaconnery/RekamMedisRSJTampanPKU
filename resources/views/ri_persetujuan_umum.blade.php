<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Persetujuan Umum</title>

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
  <link href="{{url('')}}/css/pdf.css" rel=" stylesheet">
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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> PERSETUJUAN UMUM</h3>
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
                Dokumen Persetujuan Umum
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
                    <td>Persetujuan Umum</td>
                    <td>20/08/2018</td>
                    <td>[Nama Pengisi]</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="/doc_ri_persetujuan_umum"><i class="icon_check_alt2"></i></a>
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
                    <thead>
                      <tr>
                       <th class="box" width="2%">NO</th>
                       <th class="box" width="30%">MATERI PENJELASAN</th> 
                       <th class="box" width="65%" colspan="2">ISI MATERI</th>  
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="box">1</td>
                        <td class="box"><b>HAK DAN KEWAJIBAN SEBAGAI PASIEN</td>
                        <td class="box" colspan="2">Dengan menandatangani dokumen ini saya mengakui bahwa pada proses pendaftaran untuk mendapatkan perawatan di Rumah Sakit Jiwa Tampan telah mendapat informasi tentang hak-hak dan kewajiban saya sebagai pasien. </td>
                      </tr>
                      <tr>
                        <td class="box">2</td>
                        <td class="box"><b>PERSETUJUAN PELAYANAN KESEHATAN</b></td>
                        <td class="box" colspan="2">
                          <table>
                            <tbody>
                              <tr>
                                <td style="vertical-align:top">a. </td>
                                <td>Saya menyetujui dan memberikan persetujuan untuk mendapat pelayanan kesehatan di RS Jiwa Tampan dan dengan ini saya meminta dan memberikan kuasa kepada Rumah Sakit Jiwa Tampan, dokter dan perawat, dan tenaga kesehatan lainnya untuk memberikan asuhan perawatan, pemeriksaan fisik yang dilakukan oleh dokter dan perawat dan melakukan prosedur diagnostik, radiologi dan/ atau terapi dan tatalaksana sesuai pertimbangan dokter yang diperlukan atau disarankan pada perawatan saya. Hal ini mencakup seluruh pemeriksaan dan prosedur diagnostik rutin, termasuk x-ray, pemberian dan/ atau tindakan medis serta penyuntikkan (intramuskular, intravena dan prosedur invasif lainnya) produk farmasi dan obat-obatan, pemasangan alat kesehatan (kecuali yang membutuhkan persetujuan khusus/tertulis), dan pengambilan darah untuk pemeriksaan laboratorium atau pemeriksaan patologi, yang dibutuhkan untuk pengobatan dan tindakan yang aman.</td>
                              </tr>
                              <tr>
                                <td style="vertical-align:top">b. </td>
                                <td>Saya mengetahui bahwa Rumah Sakit Jiwa Tampan merupakan Rumah Sakit Pendidikan yang menjadi tempat praktek klinik bagi mahasiswa kedokteran dan profesi-profesi kesehatan lainnya. Karena itu, mereka mungkin berpartisipasi dan atau terlibat dalam perawatan saya. Saya menyetujui bahwa mahasiswa kedokteran dan profesi kesehatan lain berpartisipasi dalam perawatan saya, sepanjang dibawah supervisi Dokter Penanggung Jawab Pasien (DPJP). </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td class="box">3</td>
                        <td class="box"><b>AKSES INFORMASI KESEHATAN</b></td>
                        <td class="box" colspan="2">Saya memberi kuasa kepada setiap dan seluruh orang yang merawat saya untuk memeriksa dan atau memberitahukan informasi kesehatan saya kepada pemberi kesehatan lain yang turut merawat saya selama di Rumah Sakit ini. </td>
                      </tr>
                      <tr>
                        <td class="box">4</td>
                        <td class="box"><b>RAHASIA MEDIS</b></td>
                        <td class="box" colspan="2">Saya setuju Rumah Sakit Jiwa Tampan wajib menjamin kerahasiaan informasi medis saya baik untuk kepentingan perawatan dan pengobatan, pendidikan maupun penelitian kecuali saya mengungkapkan sendiri atau orang yang lain yang saya beri kuasa untuk.</td>
                      </tr>
                      <tr>
                        <td class="box">5</td>
                        <td class="box"><b>PELEPASAN INFORMASI</b></td>
                        <td class="box" colspan="2">
                          <table>
                            <tbody>
                              <tr>
                                <td style="vertical-align:top">a. </td>
                                <td>Memahami informasi yang ada dalam diri saya, termasuk diagnosis, hasil laboratorium dan hasil tes diagnostik yang akan digunakan untuk perawatan medis, rumah sakit akan menjamin kerahasiaannya,</td>
                              </tr>
                              <tr>
                                <td style="vertical-align:top">b. </td>
                                <td>Memberi wewenang Rumah Sakit untuk memberikan informasi tentang diagnosis, hasil pelayanan dan pengobatan bila diperlukan untuk memproses klaim asuransi (BPJS, asuransi komersial) dan atau lembaga pemerintah,</td>
                              </tr>
                              <tr>
                                <td style="vertical-align:top">c. </td>
                                <td>Memberikan wewenang Rumah Sakit untuk memberikan informasi tentang diagnosis, hasil pelayanan dan pengobatan saya kepada anggota keluarga/ teman yang sudah saya tunjuk sesuai permenkes No.269/Menkes/Per/II/208 tentang Rekam Medis.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td class="box">6</td>
                        <td class="box"><b>BARANG PRIBADI</b></td>
                        <td class="box" colspan="2">Saya tidak boleh membawa barang-barang berharga yang tidak diperlukan (seperti: perhiasan, elektronik dll) Rumah Sakit Jiwa Tampan dan jika saya membawanya maka Rumah Sakit Jiwa Tampan tidak bertanggung jawab terhadap kehilangan, kerusakan atau pencurian.</td>
                      </tr>
                      <tr>
                        <td class="box">7</td>
                        <td class="box"><b>PENGAJUAN KELUHAN</b></td>
                        <td class="box" colspan="2">Saya menyatakan bahwa saya telah menerima informasi tentang adanya tatacara mengajukan dan mengatasi keluhan terkait pelayanan medik yang diberikan terhadap diri saya. Saya setuju untuk mengikuti tatacara mengajukan keluhan sesuai prosedur yang ada.</td>
                      </tr>
                      <tr>
                        <td class="box">8</td>
                        <td class="box"><b>KEWAJIBAN PEMBAYARAN</b></td>
                        <td class="box" colspan="2">
                          <table>
                            <tbody>
                              <tr>
                                <td style="vertical-align:top">a. </td>
                                <td colspan="2" style="vertical-align:top">Saya menyatakan setuju, baik sebagai wali atau sebagai pasien bahwa sesuai pertimbangan  pelayanan yang diberikan kepada pasien, maka saya wajib untuk membawayar total biaya pelayanan. Biaya pelayanan berdasarkan acuan biaya dan ketentuan Rumah Sakit Jiwa Tampan.</td>
                              </tr>
                              <tr>
                                <td style="vertical-align:top">b. </td>
                                <td colspan="2" style="vertical-align:top">Apabila asuransi kesehatan swasta atau program pemerintah menanggung pembiayaan saya, saya memberi wewenang kepada rumah sakit untuk memberi tagihan dari semua pelayanan dan tindakan medis yang diberikan. Tanggungan Asuransi saya mungkin menyatakan bahawa sebagian pembayaran tetap menjadi tanggung jawab  pribadi saya atau tidak ditanggung oleh asuransi maka rumah sakit berwenang memberi tagihan untuk biaya yang tidak ditanggung oleh asuransi  dan saya bertanggung jawab untuk membayarnya.</td>
                              </tr>
                              <tr>
                                <td style="vertical-align:top">c. </td>
                                <td colspan="2" style="vertical-align:top">Saya juga menyadari dan memahami bahwa:</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td width="5%" style="vertical-align:top">1) </td>
                                <td style="vertical-align:top"> Apabila saya tidak memberikan persetujuan, atau dikemudian hari mencabu persetujuan saya untuk melepaskan rahasia kedokteran saya kepada perusahaan asuransi yang saya tentukan, maka saya pribadi bertanggung jawab untuk membayar semua pelayanan dan tindakan medis dari Rumah Sakit Jiwa Tampan,</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td width="5%" style="vertical-align:top">2) </td>
                                <td style="vertical-align:top"> Apabila rumah sakit membutuhkan proses hukum untuk menagih biaya pelayanan rumah sakit dari saya, saya memahami bahwa saya bertanggung jawab untuk membayar semua biaya yang disebabkan dari proses hukum tersebut.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td class="box">9</td>
                        <td class="box"><b>PELAYANAN KEROHANIAN</b></td>
                        <td class="box" colspan="2">Saya memahami informasi tentang pelayanan kerohanian di Rumah Sakit sesuai agama/ kepercayaan pasien, dan cara bimbingan kerohanian sesuai fasilitas RS yang ada/ keinginan pasien/ keluarga.</td>
                      </tr>
                      <tr>
                        <td class="box">10</td>
                        <td class="box"><b>PEMULANGAN PASIEN</b></td>
                        <td class="box" colspan="2">Saya menyatakan setuju untuk menjemput pasien setelah di informasikan oleh pihak Rumah Sakit sudah bisa dibawa pulang untuk rawat jalan. Apabila setelah dihubungi/ dikirim surat panggilan 3 kali maka pasien akan diantar petugas/ pulang sendiri/ dikirim ke Panti Bina Laras Pekanbaru.</td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Pemberian Informasi
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <table>
                    <tr>
                        <td colspan="4">
                          <div class="">
                            <form class="form-horizontal " method="get">

                              <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                  <div class="col-sm-10" style="margin-left:-16%">
                                    Dengan ini menyatakan bahwa saya telah menerangkan hal-hal di atas secara benar dan jelas memberikan kesempatan untuk bertanya dan berdiskusi
                                  </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-2 control-label">Nama Petugas Rekam Medis</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                  <div class="col-sm-10" style="margin-left:-16%">
                                   <br>
                                  </div>
                              </div>
                            </form>
                          </div>
                        </td>
                      </tr>



                      <tr>
                        <td colspan="4">
                          <div class="">
                            <form class="form-horizontal " method="get">

                              <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10" style="margin-left:-16%">
                                  Dengan ini menyatakan bahwa saya telah memahami dan mengerti hal-hal di atas secara benar dan jelas
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-2 control-label">Nama Pasien/Keluarga</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control">
                                </div>
                              </div>

                            </form>
                          </div>
                        </td>
                      </tr>
                  </table>
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