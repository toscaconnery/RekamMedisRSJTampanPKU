<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Asesmen Awal Rawat Jalan</title>

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
              <li><a class="" href="{{url('')}}/rj_konsultasi_psikiatri">Konsultasi Psikiatri</a></li>
              <li><a class="" href="{{url('')}}/rj_pemeriksaan_fisioterapi">Pemeriksaan Fisioterapi</a></li>
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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL RAWAT JALAN</h3>
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
                Dokumen Asesmen Awal Rawat Jalan
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
                    <td>Asesmen Awal Rawat Jalan</td>
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
                Asesmen Keperawatan
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alasan Kunjungan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Hubungan pasien dengan anggota keluarga</label>
                    <div class="col-lg-10">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="Baik" checked>
                                                  Baik
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="Tidak Baik" checked>
                                                  Tidak Baik
                                              </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Status Psikososial</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox1" value="Baik"> Baik
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox2" value="Cemas"> Cemas
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Takut"> Takut
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Marah"> Marah
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="option3"> Kecendrungan bunuh diri dilaporkan ke
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Lain-lain"> Lain-lain
                                          </label>
                    </div>
                  </div>
                  
                  <div class="form-group">
                   <label class="control-label col-lg-2" for="inputSuccess">Konsep Diri</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox1" value="Gangguan citra tubuh"> Gangguan citra tubuh
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox2" value="Gangguan identitas"> Gangguan identitas
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Harga diri rendah"> Harga diri rendah
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Gangguan peran"> Gangguan peran
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Tidak terkaji"> Tidak terkaji
                                          </label>
                    </div>
                  </div>

                  <div class="form-group">
                   <label class="control-label col-lg-2" for="inputSuccess">Persepsi</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox1" value="Ilusi"> Ilusi
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox2" value="Halusinasi dengar"> Halusinasi dengar
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Halusinasi lihat"> Halusinasi lihat
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Halusinasi raba"> Halusinasi raba
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Halusinasi kecap"> Halusinasi kecap
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Halusinasi hidu"> Halusinasi hidu
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Tidak terkaji"> Tidak terkaji
                                          </label>
                    </div>
                  </div>

                  <div class="form-group">
                   <label class="control-label col-lg-2" for="inputSuccess">Aktifitas Motorik</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox1" value="Lesu"> Lesu
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox2" value="Tegang"> Tegang
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Gelisah"> Gelisah
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="TIK"> TIK  
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Grimasi"> Grimasi  
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Halusinasi hidu"> Halusinasi hidu
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Tremor"> Tremor
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Konsulsif"> Konsulsif
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Tidak ada Masalah"> Tidak ada Masalah
                                          </label>
                    </div>
                  </div>

                  <div class="form-group">
                   <label class="control-label col-lg-2" for="inputSuccess">Penampilan</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox1" value="Rapi"> Rapi
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox2" value="Tidak rapi"> Tidak rapi
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Penggunaan tidak sesuai"> Penggunaan tidak sesuai
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Cara berpakaian tidak seperti biasa"> Cara berpakaian tidak seperti biasa
                                          </label>
                    </div>
                  </div>

                  <div class="form-group">
                   <label class="control-label col-lg-2" for="inputSuccess">Isi Pikir</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox1" value="Obsesi"> Obsesi
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox2" value="Phobia"> Phobia
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Hipokondria"> Hipokondria
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Depersonalisasi"> Depersonalisasi  
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Ide terkait"> Ide terkait 
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Pikiran magis"> Pikiran magis
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Waham agama"> Waham agama
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Waham somatik"> Waham somatik
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Waham besar"> Waham besar
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Waham curiga"> Waham curiga
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Waham nihilistik"> Waham nihilistik
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Sisip pikir"> Sisip pikir
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Siar pikir"> Siar pikir
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Kontrol pikir"> Kontrol pikir
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Tidak terkaji"> Tidak terkaji
                                          </label>
                    </div>
                  </div>

                  <div class="form-group">
                   <label class="control-label col-lg-2" for="inputSuccess">Alam Perasaan</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox1" value="option1"> Sedih
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox2" value="option2"> Ketakutan
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="option3"> Putus asa
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="option3"> Khawatir
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="option3"> Gembira berlebihan
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="option3"> Isyarat/Percobaan bunuh diri
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="option3"> Sesuai
                                          </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Status Fungsional</label>
                    <div class="col-lg-10">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="fungsional" id="optionsRadios1" value="option1" checked>
                                                  Mandiri
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="fungsional" id="optionsRadios1" value="option1" checked>
                                                  Perlu Bantuan
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="fungsional" id="optionsRadios1" value="option1" checked>
                                                  Ketergantungan Total
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sebutkan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Dilaporkan ke dokter pukul</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Pemeriksaan Fisik dan Screening Gizi
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="col-sm-2 control-label">TD</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label">TB</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label">Nadi</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label">BB</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pernafasan</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label">Golongan Darah</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label">Suhu</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="col-lg-2"></div><h5>Berdasarkan Malnutrition Universal Screening Tool (MUST)</h5>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Apakah pasien mengalami penurunan BB yang tidak diinginkan dalam 6 bulan terakhir?</label>
                    <div class="col-lg-10">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                  Tidak ada penurunan berat badan
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                  Tidak yakin/ tidak tahu/ terasa baju longgar 
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                  Ya
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Jika ya berapa penurunan berat badan tersebut?</label>
                    <div class="col-lg-3">
                      <select class="form-control m-bot15">
                                              <option>1 – 5 kg </option>
                                              <option>6 – 10 kg </option>
                                              <option>11 – 15 kg </option>
                                              <option>> - 15 kg </option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Apakah asupan makan berkurang karena tidak nafsu makan?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="asupan" id="optionsRadios1" value="Baik" checked>
                                                  Ya 
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="asupan" id="optionsRadios1" value="Tidak Baik" checked>
                                                  Tidak 
                                              </label>
                      </div>
                    </div>

                    <label class="control-label col-lg-3" for="inputSuccess">Pasien dengan diagnosis khusus?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="khusus" id="optionsRadios1" value="Baik" checked>
                                                  Ya 
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="khusus" id="optionsRadios1" value="Tidak Baik" checked>
                                                  Tidak 
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-2"></div><h5>Berdasarkan Adaptasi Strong-Kid</h5>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Apa pasien tampak kurus?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="s1" id="optionsRadios1" value="Baik" checked>
                                                  Ya 
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="s1" id="optionsRadios1" value="Tidak Baik" checked>
                                                  Tidak 
                                              </label>
                      </div>
                    </div>
  
                    <label class="control-label col-lg-3" for="inputSuccess">Apakah terdapat penurunan BB selama satu bulan terakhir? Berdasarkan penilaian objektif data BB bila ada ATAU penilaian subjektif orangtua pasien ATAU untuk bayi < 1 tahun : BB tidak naik selama 3 bulan terakhi?r</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="s2" id="optionsRadios1" value="Baik" checked>
                                                  Ya 
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="s2" id="optionsRadios1" value="Tidak Baik" checked>
                                                  Tidak 
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Apakah terdapat salah satu dari kondisi berikut?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="s3" id="optionsRadios1" value="Baik" checked>
                                                  Ya 
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="s3" id="optionsRadios1" value="Tidak Baik" checked>
                                                  Tidak 
                                              </label>
                      </div>
                    </div>

                    <label class="control-label col-lg-3" for="inputSuccess">Apa terdapat penyakit atau keadaan yang mengakibatkan pasien beresiko mengalami malnutrisi?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="s3" id="optionsRadios1" value="Baik" checked>
                                                  Ya 
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="s3" id="optionsRadios1" value="Tidak Baik" checked>
                                                  Tidak 
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Daftar Penyakit/keadaan yang bersiko mengakibatkan mainutrisi</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Diare Kronik (lebih dari 2 minggu)
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  (Tersangka) Penyakit jantung bawaan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  (Tersangka) Infeksi Human Immunodeficiency Virus (HIV)
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  (Tersangka) Kanker
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Penyakit hati kronik
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Penyakit ginjal kronik
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  TB Paru
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Luka bakar luas
                                              </label>
                      </div>
                      
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Kelainan anatomi daerah mulut yang menyebabkan kesulitan makan (misal:bibir sumbing)
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Trauma
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Kelainan metabolik bawaan (Inborn Error Metabolism)
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  (Tersangka) Infeksi Human Immunodeficiency Virus (HIV)
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Retardasi mental
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Rencana / paska operasi mayor (misal: laparatomi, tokaratomi)
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Terpasang stoma
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Lain-lain...
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Diberitahukan ke dokter?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="cc" id="optionsRadios1" value="Baik" checked>
                                                  Ya 
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="cc" id="optionsRadios1" value="Tidak Baik" checked>
                                                  Tidak 
                                              </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pukul</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>
              </div>
              </form>
                
            </section>
            
            <section class="panel">
              <header class="panel-heading">
                Penilaian Tingkat Nyeri
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tingkat nyeri</label>
                    <div class="col-lg-3">
                      <select class="form-control m-bot15">
                                              <option>Tidak ada nyeri</option>
                                              <option>Nyeri Kronis</option>
                                              <option>Nyeri Akut</option>
                                          </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Skala Nyeri </label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>

                    <label class="col-sm-2 control-label">Lokasi Nyeri </label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Durasi Nyeri</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>

                    <label class="col-sm-2 control-label">Frekuensi Nyeri</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Nyeri hilang, bila </label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Minum Obat
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Mendengar Musik
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Istirahat
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Berubah posisi/tidur
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Lain-lain
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sebutkan </label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Diberitahukan ke dokter?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="cc" id="optionsRadios1" value="Baik" checked>
                                                  Ya 
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="cc" id="optionsRadios1" value="Tidak Baik" checked>
                                                  Tidak 
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Diberitahukan ke dokter pukul</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Penilaian Risiko Jatuh
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">

                  <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Risiko Jatuh</label>
                    <div class="col-lg-4">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="cc" id="optionsRadios1" value="Baik" checked>
                                                  HUMPTY DUMPTY (Anak-anak) 
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="cc" id="optionsRadios1" value="Tidak Baik" checked>
                                                  MORSE (Dewasa) 
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="cc" id="optionsRadios1" value="Tidak Baik" checked>
                                                  EDMUNSON (Jiwa) 
                                              </label>
                      </div>
                    </div>
                  </div>

                  
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                HUMPTY DUMPTY (Anak-anak)
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">

                  <div class="col-lg-2"></div><h4>HUMPTY DUMPTY (Anak-anak) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">USIA</label>
                    <div class="col-lg-2">
                      <select class="form-control m-bot15">
                                              <option>Dibawah 3 tahun </option>
                                              <option>3 – 7 tahun </option>
                                              <option>7 – 13 tahun </option>
                                              <option>> 13 tahun </option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                                              <option>Kelainan Neurologi </option>
                                              <option>Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)</option>
                                              <option>Kelainan psikis / prilaku</option>
                                              <option>Diagnosis lain</option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">GANGGUAN KOGNITIF</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                                              <option>Tidak sadar terhadap keterbatasan (gangguan kesadaran, retardasi mental</option>
                                              <option>Lupa keterbatasan (anak yang hiperaktif)</option>
                                              <option>Mengetahui kemampuan diri</option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">FAKTOR LINGKUNGAN</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                                              <option>Riwayat jatuh dari tempat tidur saat bayi</option>
                                              <option>Pasien menggunakan alat bantu atau box meubel</option>
                                              <option>Pasien berada di tempat tidur</option>
                                              <option>Di luar ruang rawat</option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RESPON TERHADAP OPERASI/OBAT PENENANG/EFEK ANASTESI</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                                              <option>Dalam 24 Jam</option>
                                              <option>Dalam 48 Jam</option>
                                              <option>> 48 Jam</option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">PENGGUNAAN OBAT</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                                              <option>Bermacam-macam obat yang digunakan : obat sedatif (kecuali pasien ICU yang menggunakan sedasi dan paralisis), Hiptonik Barbitural, Fonotiazin, Antidepresan, Laksansia / Diuretikan, Narkotik</option>
                                              <option>Salah satu Pengobatan di atas</option>
                                              <option>Pengobatan lain</option>
                                          </select>
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                MORSE (Dewasa)
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">

                  <div class="col-lg-2"></div><h4>MORSE (Dewasa) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                    <div class="col-lg-1">
                      <select class="form-control m-bot15">
                                              <option>Ya</option>
                                              <option>Tidak</option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS SEKUNDER</label>
                    <div class="col-lg-1">
                      <select class="form-control m-bot15">
                                              <option>Ya</option>
                                              <option>Tidak</option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">ALAT BANTU</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                                              <option>Perabot</option>
                                              <option>Tongkat/Alat Penopang</option>
                                              <option>Tidak ada/Kursi Roda/Perawat/Tirah Baring</option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">TERPASANG INFUS</label>
                    <div class="col-lg-1">
                      <select class="form-control m-bot15">
                                              <option>Ya</option>
                                              <option>Tidak</option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">GAYA BERJALAN</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                                              <option>Terganggu</option>
                                              <option>Lemah</option>
                                              <option>Normal/Tirah Baring/Imobilisasi</option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                                              <option>Sering lupa akan keterbatasan yang dimiliki</option>
                                              <option>Orientasi baik terhadap kemampuan diri sendiri</option>
                                          </select>
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                EDMUNSON (Jiwa)
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">

                  <div class="col-lg-2"></div><h4>EDMUNSON (Jiwa) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label>
                    <div class="col-lg-2">
                      <select class="form-control m-bot15">
                                              <option>Kesadaran baik/orientasi baik setiap saat </option>
                                              <option>Agitasi/Ansietas</option>
                                              <option>Kadang-kadang bingung</option>
                                              <option>Bingung/Disorientasi</option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                                              <option>Kelainan Neurologi </option>
                                              <option>Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)</option>
                                              <option>Kelainan psikis / prilaku</option>
                                              <option>Diagnosis lain</option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">ELIMINASI</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                                              <option>o Mandiri dan mampi mengontrol BAB/BAK</option>
                                              <option>o Dower Catheter/Colostomy</option>
                                              <option>o Eliminasi dengan bantuan</option>
                                              <option>o Gangguan eliminasi (Inkontinensia/Nokturia/Frekwensi)</option>
                                              <option>o Inkontinesia tetapi mampu untuk mobilisasi</option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">PENGOBATAN</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                                              <option>Tanpa obat-obatan</option>
                                              <option>Obat-obatan jantung</option>
                                              <option>Obat-obat psikotropika (termasuk Benzodiazepine dan Antidepresan)</option>
                                              <option>Mendapat tambahan obat-obatan dan/atau obat-obat PRN (psikiatri, antinyeri) yang diberikan dalam 24 jam terakhir</option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSA</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                                              <option>Bipolar/ Gangguan Schizoaffective</option>
                                              <option>Penggunaan Obat-obatan terlarang/ketergantungan alkohol</option>
                                              <option>Gangguan Depresi Mayor</option>
                                              <option>Dimensia/ Delirium</option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">AMBULASI /KESEIMBANGAN </label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                                              <option>Mandiri/Keseimbangan Baik/Immobilisasi</option>
                                              <option>Dengan Alat Bantu (Kursi roda, walker,dll)</option>
                                              <option>Vertigo/kelemahan</option>
                                              <option>Goyah/membutuhkan mantuan dan menyadari kemampuan</option>
                                              <option>Goyah tapi lupa keterbatasan</option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">NUTRISI</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                                              <option>Mengkonsumsi sedikit makanan atau minuman  dalam 24 jam terakhir</option>
                                              <option>Tidak ada kelainan dengan nafsu makan</option>
                                              <option>Gangguan pola tidur yang dilaporkan oleh pasien, keluarga atau petugas</option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15">
                                              <option>Tidak ada riwayat jatuh</option>
                                              <option>Ada riwayat jatuh dalam 3 bulan terakhir</option>
                                          </select>
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