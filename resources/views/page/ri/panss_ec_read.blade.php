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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> PANSS EC</h3>
        </div>
      </div>
      @include('layouts.bio')
      
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

      <section class="panel">
              <header class="panel-heading">Penilaian PANSS EC
              </header>
              <div class="panel-body">
                <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th style="width: 22%; text-align: center;vertical-align:middle;">Tanggal</th>
                      <th style="width: 13%; text-align: center;vertical-align:middle;">P4<br>Gaduh Gelisah</th>
                      <th style="width: 13%; text-align: center;vertical-align:middle;">P7<br>Permusuhan</th>
                      <th style="width: 13%; text-align: center;vertical-align:middle;">G7<br>Ketegangan</th>
                      <th style="width: 13%; text-align: center;vertical-align:middle;">G8<br>Ketidakoperatifan</th>
                      <th style="width: 13%; text-align: center;vertical-align:middle;">G7<br>Pengendalian Impuls yang buruk</th>
                      <th style="width: 13%; text-align: center;vertical-align:middle;">Jumlah</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                    <tr>
                      <td>
                        <input type="date" class="form-control" name="" disabled="">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" disabled="">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" disabled="">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" disabled="">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" disabled="">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" disabled="">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="" disabled="">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
    </section>

    @include('layouts.tailscript')
  </body>


  <html>