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
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>LEMBAR PENILAIAN PANSS EC</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Lembar Penilaian PANSS EC
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
                  <td>Penilaian PANSS EC</td>
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
          <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_penilaian_panss">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Penilaian PANSS EC
              </header>
              <div class="panel-body">
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="date" class="form-control" name="tanggal">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">P4 GADUH GELISAH</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" name="p4">
                  </div>
                  
                  <label class="col-sm-2 control-label">P7 PEMUSUHAN</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" name="p7">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">G7 KETEGANGAN</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" name="g7">
                  </div>
                  <label class="col-sm-2 control-label">G8 KETIDAKOPERATIFAN</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" name="g8">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">G14 PENGENDALIAN IMPULS YANG BURUK</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" name="g14">
                  </div>
                </div>
              </div>
            </section>

            <div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </section>

    @include('layouts.tailscript')
  </body>


  <html>