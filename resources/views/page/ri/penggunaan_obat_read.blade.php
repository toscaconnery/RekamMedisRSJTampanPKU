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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> CATATAN PENGGUNAAN OBAT (CPO)</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Catatan Penggunaan Obat (CPO)
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
                  <td>Penggunaan Obat (CPO)</td>
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
      <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_penggunaan_obat">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-lg-12">
            <div class="col-lg-6">
              <section class="panel">
                <header class="panel-heading">
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Ruang Bangsal</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="ruang_bangsal" disabled="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"> No. Reg.</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="no_reg" disabled="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Masuk Tanggal</label>
                    <div class="col-sm-6">
                      <input type="date" class="form-control" name="tanggal_masuk" disabled="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Keluar Tanggal</label>
                    <div class="col-sm-6">
                      <input type="date" class="form-control" name="tanggal_keluar" disabled="">
                    </div>
                  </div>
                </div>
              </section>  
            </div>
            <div class="col-lg-6">
              <section class="panel">
                <header class="panel-heading">
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Diagnosis</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="diagnosis" disabled="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Dokter</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="dokter" disabled="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Riwayat Alergi</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="riwayat_alergi" disabled="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Konsumen</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="konsumen" disabled="">
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Catatan Penggunaan Obat
              </header>
              <div class="panel-body">
                <section class="panel">
                  <header class="panel-heading">Penilaian PANSS EC
                  </header>
                  <div class="panel-body">
                    <table class="table table-bordered">

                      <thead>
                        <tr>
                          <th style="width: 35%; text-align: center;vertical-align:middle;" rowspan="2">Nama Obat,Dosis dan Kekuatan</th>
                          <th style="width: 10%; text-align: center;vertical-align:middle;" rowspan="2">Tanggal</th>
                          <th style="width: 40%; text-align: center;vertical-align:middle;" colspan="4">Waktu</th>
                          <th style="width: 10%; text-align: center;vertical-align:middle;" rowspan="2">Mengetahui Perawat</th>
                          <th style="width: 5%; text-align: center;vertical-align:middle;" rowspan="2">Action</a></th>
                        </tr>
                        <tr>
                          <th style="width: 10%; text-align: center;vertical-align:middle;">Pagi</th>
                          <th style="width: 10%; text-align: center;vertical-align:middle;">Siang</th>
                          <th style="width: 10%; text-align: center;vertical-align:middle;">Sore</th>
                          <th style="width: 10%; text-align: center;vertical-align:middle;">Malam</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="text" class="form-control" value="Obat" disabled>
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="Date" class="form-control" value="" disabled>
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="checkbox" disabled class="form-control">
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="checkbox" disabled class="form-control">
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="checkbox" disabled class="form-control">
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="checkbox" disabled class="form-control">
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="text" class="form-control" value="Nama Perawat" disabled>
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <a href=""><button type="button" class="btn btn-primary">Edit</button></a>
                          </td>
                        </tr>
                        <tr>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="text" class="form-control" value="Obat" disabled>
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="Date" class="form-control" value="" disabled>
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="checkbox" disabled class="form-control">
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="checkbox" disabled class="form-control">
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="checkbox" disabled class="form-control">
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="checkbox" disabled class="form-control">
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="text" class="form-control" value="Nama Perawat" disabled>
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <a href=""><button type="button" class="btn btn-primary">Edit</button></a>
                          </td>
                        </tr>
                        <tr>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="text" class="form-control" value="Obat" disabled>
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="Date" class="form-control" value="" disabled>
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="checkbox" disabled class="form-control">
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="checkbox" disabled class="form-control">
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="checkbox" disabled class="form-control">
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="checkbox" disabled class="form-control">
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="text" class="form-control" value="Nama Perawat" disabled>
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <a href=""><button type="button" class="btn btn-primary">Edit</button></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </section>
            </div>
          </section>
        </div>
      </div>
    </form>

  </div>
</div>
</section>

@include('layouts.tailscript')
</body>