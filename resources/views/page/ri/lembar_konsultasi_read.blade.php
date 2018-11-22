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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> LEMBAR KONSULTASI</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Lembar Konsultasi
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
                  <td>Lembar Konsultasi</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_konsultasi_pdf">PDF</a>
                      <a class="btn btn-success" href="#">EDIT</a>
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
          <form class="form-horizontal form-validate" id="register_form">
            <section class="panel">
              <header class="panel-heading">
                Konsultasi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kepada TS</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="konsultasi1" disabled="" value="{{$konsultasi1}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ikhtisar Klinik + Laboratorium singkat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="konsultasi2" disabled="" value="{{$konsultasi2}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Konsultasi yang diminta</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="konsultasi3" disabled="" value="{{$konsultasi3}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="konsultasi4" disabled="" value="{{$konsultasi4}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="konsultasi5" disabled="" value="{{$konsultasi5}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Jawaban Konsultasi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kepada TS</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="jkonsultasi1" disabled="" value="{{$jkonsultasi1}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Penemuan Klinik dari penderita yang dikonsultasikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jkonsultasi2" disabled="" value="{{$jkonsultasi2}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pemeriksaan khusus lain</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jkonsultasi3" disabled="" value="{{$jkonsultasi3}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kesimpulan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jkonsultasi4" disabled="" value="{{$jkonsultasi4}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Saran</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jkonsultasi5" disabled="" value="{{$jkonsultasi5}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="jkonsultasi6" disabled="" value="{{$jkonsultasi6}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jkonsultasi7" disabled="" value="{{$jkonsultasi7}}">
                  </div>
                </div>
              </div>
            </section>
          </form>

        </div>
      </div>
    </section>

    @include('layouts.tailscript')
  </body>


  <html>