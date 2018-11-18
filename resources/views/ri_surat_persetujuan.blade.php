<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.headscript')
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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Surat dan Persetujuan</h3> 
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
        <br>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Daftar Dokumen
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_document_alt"></i> Nama Dokumen</th>
                    <th><i class="icon_calendar"></i> Tanggal Dokumen</th>
                    <th><i class="icon_mail_alt"></i> Status Dokumen</th>

                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <tr>
                    <td>Surat Pengantar Dirawat (SPD)</td>
                    <td>14/09/2018</td>
                    <td>Telah Diisi</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="{{url('')}}/ri_surat_spd"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                   <td>Permintaan Kebutuhan Privasi</td>
                   <td>14/09/2018</td>
                   <td>Telah Diisi</td>
                   <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_permintaan_privasi"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Permintaan Pelayanan Rohani</td>
                  <td>-</td>
                  <td>-</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_permintaan_rohani"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Permintaan Pendapat Lain (Second Opinion)</td>
                  <td>14/09/2018</td>
                  <td>Telah Diisi</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_permintaan_second"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="{{url('')}}/ri_permintaan_second_pdf"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Surat Pernyataan Jangan Dilakukan Resusitasi (Do Not Resucitate)</td>
                  <td>-</td>
                  <td>-</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_do_not_resucitate"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Intruksi Jangan Dilakukan Resusitasi (Do Not Resucitate)</td>
                  <td>-</td>
                  <td>-</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_instruksi_do_not_resucitate"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Persetujuan Tindakan Kedokteran</td>
                  <td>14/09/2018</td>
                  <td>Telah Diisi</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_persetujuan_tindakan"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Penolakan Tindakan Kedokteran</td>
                  <td>-</td>
                  <td>-</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_penolakan_tindakan"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Surat Pernyataan Pulang Paksa</td>
                  <td>-</td>
                  <td>-</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_pulang_paksa"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Surat Perjanjian Residen</td>
                  <td>-</td>
                  <td>-</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_residen"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Surat Kuasa</td>
                  <td>-</td>
                  <td>-</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_surat_kuasa"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Surat Pernyataan</td>
                  <td>-</td>
                  <td>-</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_pernyataan"><i class="icon_plus_alt2"></i></a>
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

      @include('layouts.tailscript')
  </body>


  <html>