<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Asesmen Awal Keperawatan NAPZA</title>

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL KEPERAWATAN NAPZA</h3>
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
                Asesmen Awal Keperawatan NAPZA
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
                    <td>Asesmen awal Keperawatan NAPZA</td>
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
                 Data Umum
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Sumber Pengkajian</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Sumber Informasi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Tanggal Dirawat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Ruangan</label>
                    <div class="col-sm-10">
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

            <section class="panel">
              <header class="panel-heading">
                 Alasan Masuk/Kedatangan
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Alasan Masuk</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Keinginan sendiri
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Paksaan Orang Tua
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Rujukan Praktek Dokter
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Rujukan Instansi Lain
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Kiriman Kepolisian
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
                    <label class="col-lg-2 control-label"> Sebutkan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Keadaan Saat Masuk</label>
                    <div class="col-lg-10">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Gejala putus zat/withdrawal
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Overdosis
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Intoksikasi zat adiktif
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
                    <label class="control-label col-lg-2" for="inputSuccess">Pemakaian Terakhir</label>
                    <div class="col-lg-10">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Jenis Zat
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Cara Pemakaian
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Intoksikasi zat adiktif
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
                    <label class="col-lg-2 control-label"> Jenis Zat </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> cara Pemakaian</label>
                    <div class="col-sm-10">
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

            <section class="panel">
              <header class="panel-heading">
                 Faktor Predisposisi
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Intoksikasi</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f1" id="optionsRadios1" value="pernah" checked>
                                                  Pernah 
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f1" id="optionsRadios1" value="tidak" checked>
                                                  Tidak 
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Keadaan/Gejala lepas zat</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f2" id="optionsRadios1" value="pernah" checked>
                                                  Pernah 
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f2" id="optionsRadios1" value="tidak" checked>
                                                  Tidak 
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Komplikasi medic/jiwa</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f3" id="optionsRadios1" value="ya" checked>
                                                  Ya
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f3" id="optionsRadios1" value="tidak" checked>
                                                  Tidak 
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> sebutkan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Perilaku kriminal dalam rumah sendiri</label>
                    <div class="col-lg-10">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Mencuri
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Mengambil barang dengan mengancam paksaan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Menjual barang sendiri
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tak ada masalah
                                              </label>
                      </div>                          
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Perilaku kriminal di luar rumah</label>
                    <div class="col-lg-10">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Mencuri
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Mengambil barang dengan mengancam paksaan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Menjual barang sendiri
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tak ada masalah
                                              </label>
                      </div>                          
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Problema Sekolah</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak naik kelas
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Berhenti sekolah
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Berhenti sementara/cuti
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Sulit konsentrasi
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Dikeluarkan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tak ada masalah
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Problema dalam keluarga</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Keluarga bercerai
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Keluarga mudah curiga
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Keluarga tak peduli
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tak ada masalah
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Problema dalam pekerjaan</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Sulit konsentrasi
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak bekerja
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Dikeluarkan/dipecat
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Berhenti bekerja
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Belum bekerja
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak ada masalah
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Problema dalam masyarakat</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Masyarakat curiga
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tak ada masalah
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Pernah
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Dikucilkan lingkungan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak
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
                    <label class="col-lg-2 control-label"> Sebutkan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Dirawat di RS Jiwa Diagnosis Medis</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Etiologi Penggunaan Zat Adiktif Pertama Kali</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Diajak Teman
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Dipaksa Teman
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Coba-coba/keinginan sendiri
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak enak dengan lingkungan sekitar
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

                </form>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">

            <section class="panel">
              <header class="panel-heading">
                 Faktor Penyebab Kambuh/Relaps
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Faktor</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak mampu menahan suggest
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Diajak teman
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Dipaksa teman adiktif
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Keinginan untuk mencoba lagi
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Dendam setelah masa pemulihan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Konflik dengan orang tua, orang dekat
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Bergabung dengan kelompok pengguna zat
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak memiliki aktifitas berarti
                                              </label>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Masalah Keperawatan</label>
                    <div class="col-sm-10">
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

            <section class="panel">
              <header class="panel-heading">
                 Riwayat Upaya Penanggulangan
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Jenis Penanggulangan</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Konseling Dokter/Psikiater
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Detoksifikasi
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Lain-lain
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Rehabilitasi rohani
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Rehabilitasi medik
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak pernah
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Alasan meninggalkan metode tersebut</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak cocok dengan metodenya
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Anak kabur/tidak betah
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak cocok dengan fasilitasnya
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Kehabisan biaya
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Programnya selesai
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
                    <label class="col-lg-2 control-label"> Masalah Keperawatan</label>
                    <div class="col-sm-10">
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

            <section class="panel">
              <header class="panel-heading">
                 Pemeriksaan Fisik
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Keluhan Fisik</label>
                    <div class="col-lg-3">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Sakit kepala
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Merasa panas dingin lemah
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Nyeri pada sendi otot tulang
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tremor pada ekstremitas
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Bicara cadel
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Berkeringat banyak
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Mulut kering
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Kesadaran menurun
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Mengantuk/banyak tidur
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Nafsu makan menurun
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Nafsu makan meningkat
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Mual muntah
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Diare
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Kontipasi
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Mata berair/lakrimasi
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Pupip melebar
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Hidung berair
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Bulu roma berdiri
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Denyut jantung cepat
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tekanan darah menurun
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tekanan darah meningkat
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Hipotensi Ortostatik
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Kram perut
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Jalan sempoyongan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Perilaku agresif
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Daya ingat terganggu
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Kebingungan
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Cepat tersinggung
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Insomnia
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Halusinasi
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Waham
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Paranoia
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Impulsif
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Emosi labil
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Banyak bicara
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Panik
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Marah
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Cemas
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Apatis
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Euforia
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Semangat kerja meningkat
                                              </label>
                      </div>
                                            <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Merasa tenang
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Masalah keperawatan</label>
                    <div class="col-sm-10">
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

            <section class="panel">
              <header class="panel-heading">
                 Data Psikososial
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Adakah anggota keluarga yang juga menggunakan zat psikoaktif?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f4" id="optionsRadios1" value="ada" checked>
                                                  Ada 
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f4" id="optionsRadios1" value="tidak" checked>
T                                                 Tidak 
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Sebutkan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  

                  <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Riwayat perilaku Seksual Klien</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f54" id="optionsRadios1" value="" checked>
                                                  Belum menikah 
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f5" id="optionsRadios1" value="" checked>
                                                  Menikah 
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f5" id="optionsRadios1" value="" checked>
                                                  Cerai hidup
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f5" id="optionsRadios1" value="" checked>
                                                  Cerai meninggal
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f5" id="optionsRadios1" value="" checked>
                                                  Ditinggalkan pasangan hidup
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f5" id="optionsRadios1" value="" checked>
                                                  Hidup bersama
                                              </label>
                      </div>
                    </div>
                  </div>

                  <form class="form-horizontal " method="get">
                  <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Perilaku seksual pra nikah klien</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f6" id="optionsRadios1" value="pernah" checked>
                                                  Pernah 
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f6" id="optionsRadios1" value="tidak" checked>
                                                  Tidak pernah
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Sebutkan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Riwayat pekerjaan Klien</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f5" id="optionsRadios1" value="" checked>
                                                  Bekerja menetap  
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f5" id="optionsRadios1" value="" checked>
                                                  Tidak bekerja
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f5" id="optionsRadios1" value="" checked>
                                                  Pindah-pindah pekerjaan
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="f5" id="optionsRadios1" value="" checked>
                                                  Diberhentikan/dipecat
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Masalah Keperawatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-lg-2"></div><h4>Konsep diri</h4>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Gambaran Diri</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Puas dengan bentuk fisik yang ada
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak puas dengan bentuk fisik yang ada
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak menerima cacat fisik yang ada
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
                    <label class="col-lg-2 control-label">Sebutkan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Identitas</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Puas dengan status/posisi sekarang
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak puas dengan status/posisi sekarang
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Puas sebagai laki-laki/perempuan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak puas sebagai laki-laki/perempuan
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Ideal diri</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Memiliki cita-cita yang akan dicapai
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak memiliki cita-cita yang akan dicapai
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Adanya harapan untuk sembuh
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak adanya harapan untuk sembuh
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Harga diri</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Percaya diri
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak percaya diri
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak konsisten/mudah terpengaruh
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Masalah Keperawatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="col-lg-2"></div><h4>Spiritual</h4>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Nilai dan keyakinan</label>
                    <div class="col-lg-10">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Menggunakan zat bertentangan dengan nilai agama dan budaya
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Menggunakan zat tidak bertentangan dengan nilai agama dan budaya
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
                    <label class="col-lg-2 control-label">Sebutkan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Kegiatan Ibadah</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Melakukan Ibadah secara rutin/teratur
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Melakukan ibadah jarang-jarang
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak pernah melakukan kegiatan ibadah
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Tidak memiliki pengetahuan cara melakukan kegiatan sesuai dengan agamanya
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label">Masalah Keperawatan</label>
                    <div class="col-sm-10">
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

            <section class="panel">
              <header class="panel-heading">
                 Mekanisme Koping
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Adaptif</label>
                    <div class="col-lg-10">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Bicara dengan orang dekat
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Berusaha menyelesaikan masalah
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Teknik relaksasi
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Aktivitas konstruktif
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Lainnya
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Sebutkan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Maladaptif</label>
                    <div class="col-lg-10">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Minum  Alkohol
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  MNenggunakan zat psikoaktif
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Reaksi lambat/berlebihan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Bekerja berlebihan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Menghindari masalah
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Sebutkan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Masalah Keperawatan</label>
                    <div class="col-sm-10">
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

            <section class="panel">
              <header class="panel-heading">
                 Pengetahuan Kurang
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Pengetahuan kurang mengenai</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Penyebab pemakaian zat psikoaktif
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Alkohol pemakaian zat psikoaktif
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Faktor pencetus pemakaian kembali
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Cara mengatasi suggest/eraving
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Lain-lain
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Sistem pendukung kesembuhan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Komplikasi akibat pemakaian zat psikoaktif
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Obat-obatan/terapi medis yang dijalani
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Koping adaptif/konstruktif
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Lainnya
                                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Sebutkan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Masalah keperawatan</label>
                    <div class="col-sm-10">
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
            <section class="panel">
              <header class="panel-heading">
                 Aspek Medikasi
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Diagnosis Medis</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Terapi Medis</label>
                    <div class="col-sm-10">
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

            <section class="panel">
              <header class="panel-heading">
                 Daftar Masalah Keperawatan
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Sumber Pengkajian</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Sumber Informasi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Tanggal Dirawat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Ruangan</label>
                    <div class="col-sm-10">
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

            <section class="panel">
              <header class="panel-heading">
                 Daftar Masalah Keperawatan
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Masalah Keperawatan</label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Gangguan rasa nyaman, nyeri aktif
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Gangguan pola tidur
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Risiko cedera: jatuh
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Perubahan nutrisi: kurang dan kebutuhan hidup
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Gangguan cairan dan elektrolit: kurang dari kebutuhan tubuh
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Ketidakberdayaan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Ideal diri tidak realistis
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Gangguan identitas personal
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Harga diri rendah situasional/kronik
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Risiko mencederai diri dan orang lain
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Gangguan persepsi sensori: halusinasi
                                              </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Koping keluarga tidak efektif
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Koping individu tidak efektif: ketidakmampuan menahan keinginan menggunakan zat kembali
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Kerusakan interaksi sosial
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Penatalaksanaan regimen terapeutik tidak efektif
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Harga diri rendah
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Distress spiritual
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Perubahan pemeliharaan kesehatan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Risiko perilaku kekerasan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Gangguan gambaran diri
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Perubahan penampilan peran
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Keputus asaan
                                              </label>
                      </div>
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Lainnya
                                              </label>
                      </div>
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Sebutkan</label>
                    <div class="col-sm-10">
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

            <section class="panel">
              <header class="panel-heading">
                 Daftar Masalah Keperawatan
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-3 control-label"> Masalah Keperawatan</label>
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