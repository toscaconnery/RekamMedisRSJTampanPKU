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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Catatan Perkembangan Pasien Terintegrasi IGD</h3>
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
              Dokumen Catatan Perkembangan Pasien Terintegrasi IGD
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
                  <td>Catatan Perkembangan Pasien Terintegrasi </td>
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
              Hasil Pemeriksaan, Analisis, Rencana Penatalaksanaan Pasien 
            </header>
            <div class="panel-body">

              <form class="form-horizontal " method="get">
                <div class="form-group">
                  <label class="col-sm-3 control-label">(Dituliskan dengan format SOAP/ADIME, Disertai dengan Target yang Terukur,Evaluasi Hasil Tatalaksana dituliskan dalam Asesmen</label>
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
  </section>
  @include('layouts.tailscript')
</body>
<html>