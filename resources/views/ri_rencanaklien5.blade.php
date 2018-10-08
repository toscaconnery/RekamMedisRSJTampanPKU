<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Rencana Tindakan Keperawatan Klien Dengan Defisit Perawatan Diri</title>

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>RENCANA TINDAKAN KEPERAWATAN KLIEN DENGAN DEFISIT PERAWATAN DIRI</h3>
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
                Dokumen Rencana Tindakan Keperawatan Klien Dengan Defisit Perawatan Diri
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
                    <td>Rencana Rencana Tindakan Keperawatan Klien Dengan Defisit Perawatan Diri</td>
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
                        <input type="text" class="form-control" name="" required><br>
                        b.d. defisit perawatan
                      </td>
                      <td>
                        TUM: ...<br>
                        <input type="text" class="form-control" name="" required>
                        TUK: ...<br>
                        <input type="text" class="form-control" name="" required>
                        1. Klien dapat membina hubungan saling percaya dengan perawat
                      </td>
                      <td>
                        1. Dalam ... kali interaksi klien menunjukkan tanda-tanda percaya kepada perawat:<br>
                        <input type="text" class="form-control" name="" required>
                        <ul>
                          <li>Waja cerah, tersenyum</li>
                          <li>Mau berkenalan</li>
                          <li>Ada kontak mata</li>
                          <li>Menerima kehadiran perawat</li>
                          <li>Bersedia menceritakan perasaannya</li>
                        </ul> 
                      </td>
                      <td>
                        1. Bina hubungan saling percaya :<br>
                        <ul>
                          <li>Beri salam setiap berinteraksi</li>
                          <li>Perkenalkan nama, nama panggilan perawat dan tujuan perawat berkenalan</li>
                          <li>Tanyakan nama dan panggilan kesukaan klien</li>
                          <li>Tunjukkan sikap jujur dan menepati janji setiap kali berinteraksi</li>
                          <li>Tunjukkan perasaan dan masalah yang dihadapi klien</li>
                          <li>Tanyakan perasaan dan masalah yang dihadapi klien</li>
                          <li>Buat kontrak interaksi yang jelas</li>
                          <li>Dengarkan ungkapan perasaan klien dengan empati</li>
                          <li>Penuhi kebutuhan dasar klien</li>
                        </ul>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"></td>
                      <td></td>
                      <td></td>
                      <td>
                        2. Klien mengetahui pentingnya perawatan diri
                      </td>
                      <td>
                        2. Dalam ... kali interaksi klien menyebutkan:<br>
                        <input type="text" class="form-control" name="" required>
                        <ul>
                          <li>Penyebab tidak merawat diri</li>
                          <li>Manfaat menjaga perawatan diri</li>
                          <li>Tanda-tanda bersih dan rapi</li>
                          <li>Gangguan yang dialami jika perawatan diri tidak diperhatikan</li>
                        </ul>
                      </td>
                      <td>
                        2. Diskusikan dengan klien:<br>
                        <ul>
                          <li>Penyebab klien tidak merawat diri</li>
                          <li>Manfaat menjaga perawatan diri untuk keadaan fisik, mental, dan sosial</li>
                          <li>Tanda-tanda perawatan diri yang baik</li>
                          <li>Penyakit atau gangguan kesehatan yang bisa dialami oleh klien bila perawatan diri tidak adekuat</li>
                        </ul>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"></td>
                      <td></td>
                      <td></td>
                      <td>
                        3.1. Dalam ... kali interaksi klien menyebutkan frekuensi menjaga perawatan diri:<br>
                        <input type="text" class="form-control" name="" required>
                        <ul>
                          <li>Frekuensi mandi</li>
                          <li>Frekuensi gosok gigi</li>
                          <li>Frekuensi keramas</li>
                          <li>Frekuensi ganti pakaian</li>
                          <li>Frekuensi berhias</li>
                          <li>Frekuensi gunting kuku</li>
                        </ul>
                        3.2. Dalam ... kali interaksi klien menjelaskan<br>
                        <input type="text" class="form-control" name="" required>
                        cara menjaga perawatan diri:<br>
                        <ul>
                          <li>Cara mandi</li>
                          <li>Cara gosok gigi</li>
                          <li>Cara keramas</li>
                          <li>Cara berpakaian</li>
                          <li>Cara berhias</li>
                          <li>Cara gunting kuku</li>
                        </ul>
                      </td>
                      <td class="box-top">
                        3.1. Diskusikan frekuensi menjaga perawatan diri selama ini<br>
                        <ul>
                          <li>Mandi</li>
                          <li>Gosok gigi</li>
                          <li>Keramas</li>
                          <li>Berpakaian</li>
                          <li>Berhias</li>
                          <li>Gunting kuku</li>
                        </ul>
                        <br>
                        3.2. Diskusikan cara praktek perawatan diri yang baik dan benar <br>
                        <ul>
                          <li>Mandi</li>
                          <li>Gosok gigi</li>
                          <li>Keramas</li>
                          <li>Ganti pakaian</li>
                          <li>Berhias</li>
                          <li>Gunting kuku</li>
                        </ul>
                        3.3. Berikan pujian untuk setiap respon klien yang positif
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"></td>
                      <td></td>
                      <td></td>
                      <td>
                        4. Klien dapat melaksanakan perawatan diri dengan bantuan perawat
                      </td>
                      <td>
                        4. Dalam ... kali interaksi klien mempraktekkan perawatan diri dengan dibantu oleh perawat:<br>
                        <input type="text" class="form-control" name="" required>
                        <ul>
                          <li>Mandi</li>
                          <li>Gosok gigi</li>
                          <li>Keramas</li>
                          <li>Ganti pakaian</li>
                          <li>Berhias</li>
                          <li>Gunting kuku</li>
                        </ul>
                      </td>
                      <td>
                        4.1. Bantu klien saat perawatan diri:<br>
                        <ul>
                          <li>Mandi</li>
                          <li>Gosok gigi</li>
                          <li>Keramas</li>
                          <li>Ganti pakaian</li>
                          <li>Berhias</li>
                          <li>Gunting kuku</li>
                        </ul>
                        4.2. Beri pujian setelah klien selesai melaksanakan perawatan diri
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"></td>
                      <td></td>
                      <td></td>
                      <td>
                        5. Klien dapat melaksanakan perawatan diri secara mandiri
                      </td>
                      <td>
                        5. Dalam ... kali interaksi klien melaksanakan praktek perawatan diri secara mandiri:<br>
                        <input type="text" class="form-control" name="" required>
                        <ul>
                          <li>Mandi 2 X sehari</li>
                          <li>Gosok gigi sehabis makan</li>
                          <li>Keramas 2 X seminggu</li>
                          <li>Ganti pakaian 1 X sehari</li>
                          <li>Berhias sehabis mandi</li>
                          <li>Gunting kuku setelah mulai panjang</li>
                        </ul>
                      </td>
                      <td>
                        5.1. Pantau klien dalam melaksanakan perawatan diri:<br>
                        <ul>
                          <li>Mandi</li>
                          <li>Gosok gigi</li>
                          <li>Keramas</li>
                          <li>Ganti pakaian</li>
                          <li>Berhias</li>
                          <li>Gunting kuku</li>
                        </ul>
                        5.2. Beri pujian saat klien melaksanakan perawatan diri secara mandiri
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"></td>
                      <td></td>
                      <td></td>
                      <td>
                        6. Klien mendapatkan dukungan keluarga untuk meningkatkan perawatan diri
                      </td>
                      <td>
                        6.1. Dalam ... kali interaksi keluarga menjelaskan cara-cara membantu klien dalam memenuhi kebutuhan perawatan dirinya<br>
                        <input type="text" class="form-control" name="" required>
                        <br>
                        6.2. Dalam ... kali interaksi keluarga menyiapkan sarana perawatan diri klien: sabun mandi, pasta gigi, sikat gigi, shampoo, handuk, pakaian bersih, dan alat berhias<br>
                        <input type="text" class="form-control" name="" required>
                        <br>
                        6.3. Keluarga mempraktekkan perawatan diri pada klien
                      </td>
                      <td>
                        6.1. Diskusikan dengan keluarga:<br>
                        <ul>
                          <li>Penyebab klien tidak melaksanakan perawatan diri</li>
                          <li>Tindakan yang telah dilakukan klien selama di rumah sakit dalam menjaga perawatan diri dan kemajuan yang telah dialami oleh klien</li>
                          <li>Dukungan yang bisa diberikan oleh keluarga untuk meningkatkan kemampuan klien dalam perawatan diri</li>
                        </ul>

                        <br>
                        6.2. Diskusikan dengan keluarga tentang:<br>
                        <ul>
                          <li>Saranan yang diperlukan untuk menjaga perawatan diri klien</li>
                          <li>Anjurkan kepada keluarga menyiapkan sarana tersebut</li>
                        </ul>

                        <br>
                        6.3. Diskusikan dengan keluarga hal-hal yang perlu dilakukan keluarga dalam perawatan diri:<br>
                        <ul>
                          <li>Anjurkan keluarga untuk mempraktekkan perawatan diri (mandi, gosok, gigi, keramas, ganti baju, berhias dan guntung kuku)</li>
                          <li>Ingatkan klien waktu mandi, gosok gigi, keramas, ganti baju, berhias, dan gunting kuku.</li>
                          <li>Bantu jika klien mengalami hambatan dalam perawatan diri</li>
                          <li>Berikan pujian atas keberhasilan klien</li>
                        </ul>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"></td>
                      <td></td>
                      <td></td>
                      <td>
                        7. Klien mendapat dukungan keluarga.
                      </td>
                      <td>
                        7.1. Setelah ... X interaksi keluarga dapat menjelaskan tentang:<br>
                        <input type="text" class="form-control" name="" required>
                        <ul>
                          <li>Pengertian waham</li>
                          <li>Tanda dan gejala waham</li>
                          <li>Penyebab dan akibat waham</li>
                          <li>Cara merawat klien waham</li>
                        </ul>
                        7.2. Setelah ... X interaksi keluarga dapat mempraktekkan cara merawat klien waham.
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td>
                        7.1. Diskusikan pentingnya peran serta keluarga sebagai pendukung untuk mengatasi waham.<br>
                        7.2. Diskusikan potensi keluarga untuk membantu klien mengatasi waham.<br>
                        7.3. Jelaskan pada keluarga tentang: <br>
                        <ul>
                          <li>Pengertian waham</li>
                          <li>Tanda dan gejala waham</li>
                          <li>Penyebab dan akibat waham</li>
                          <li>Cara merawat klien waham</li>
                        </ul>
                        7.4. Latih keluarga cara merawat waham.<br>
                        7.5. Tanyakan perasaan keluarga setelah mencoba cara yang dilatihkan<br>
                        7.6. Beri pujian kepada keluarga atas keterlibatannya merawat klien di rumah sakit.
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"></td>
                      <td></td>
                      <td></td>
                      <td>
                        8. Klien dapat memanfaatkan obat dengan baik
                      </td>
                      <td>
                        8.1. Setelah ... X interaksi klien menyebutkan:<br>
                        <input type="text" class="form-control" name="" required>
                        <ul>
                          <li>Manfaat minum obat</li>
                          <li>Kerugian tidak minum obat</li>
                          <li>Nama, warna, dosis, efek terapi dan efek samping obat</li>
                        </ul>
                        8.2. Setelah ... X interaksi klien mendemonstrasikan penggunaan obat dengan benar<br>
                        <input type="text" class="form-control" name="" required>
                        8.3. Setelah ... X interaksi klien menyebutkan akibat berhenti minum obat tanpa konsultasi dokter
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td>
                        8.1. Diskusikan dengan klien tentang manfaat dan kerugian tidak minum obat, nama, warna, dosis, cara, efek terapi dan efek samping penggunaan obat
                        8.2. Pantau klien saat penggunaan obat<br>
                        <ul>
                          <li>Beri pujian jika klien menggunakan obat dengan benar</li>
                        </ul>
                        8.3. Diskusikan akibat berhenti minum obat tanpa konsultasi dengan dokter<br>
                        <ul>
                          <li>Anjurkan klien untuk konsultasi kepada dokter/perawat jika terjadi hal-hal yang tidak diinginkan.</li>
                        </ul>
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