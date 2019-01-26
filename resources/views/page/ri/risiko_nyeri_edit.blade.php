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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> PENILAIAN RESIKO NYERI</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <table class="table table-striped table-advance table-hover">
              <tbody>
                <tr>
                  <th><i class="icon_document_alt"></i> Dokumen</th>
                  <th><i class="icon_calendar"></i> Tanggal Pengisian</th>
                  <th><i class="icon_profile"></i> Pengisi</th>
                  <th><i class="icon_cogs"></i> Aksi</th>
                  <th><i class="icon_document"></i> Cetak Dokumen</th>
                </tr>
                <tr>
                  <td>Penilaian Resiko Nyeri</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_risiko_nyeri">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_risiko_nyeri_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_risiko_nyeri_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_nyeri_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal form-validate" method="post" id="register_form" action="{{url('ri_risiko_nyeri_edit')}}/{{$id_data}}">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Penilaian Resiko Nyeri
              </header>
              <div class="panel-body">
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal" value="{{$tanggal}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Waktu</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" disabled name="waktu_p" value="Pagi">
                    <input type="hidden" name="waktu_p" value="P">
                  </div>
                  <label class="control-label col-lg-2" for="inputSuccess">Skala Nyeri</label>
                  <div class="col-lg-2">
                    <select class="form-control m-bot15" name="skala_p">
                      <option {{$skala_p == 1 ? 'selected' : ''}} value="1">1</option>
                      <option {{$skala_p == 2 ? 'selected' : ''}} value="2">2</option>
                      <option {{$skala_p == 3 ? 'selected' : ''}} value="3">3</option>
                      <option {{$skala_p == 4 ? 'selected' : ''}} value="4">4</option>
                      <option {{$skala_p == 5 ? 'selected' : ''}} value="5">5</option>
                      <option {{$skala_p == 6 ? 'selected' : ''}} value="6">6</option>
                      <option {{$skala_p == 7 ? 'selected' : ''}} value="7">7</option>
                      <option {{$skala_p == 8 ? 'selected' : ''}} value="8">8</option>
                      <option {{$skala_p == 9 ? 'selected' : ''}} value="9">9</option>
                      <option {{$skala_p == 10 ? 'selected' : ''}} value="10">10</option>
                    </select>
                  </div> 
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Waktu</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" disabled name="waktu_s" value="Siang">
                    <input type="hidden" name="waktu_s" value="S">
                  </div>
                  <label class="control-label col-lg-2" for="inputSuccess">Skala Nyeri</label>
                  <div class="col-lg-2">
                    <select class="form-control m-bot15" name="skala_s">
                      <option {{$skala_s == 1 ? 'selected' : ''}} value="1">1</option>
                      <option {{$skala_s == 2 ? 'selected' : ''}} value="2">2</option>
                      <option {{$skala_s == 3 ? 'selected' : ''}} value="3">3</option>
                      <option {{$skala_s == 4 ? 'selected' : ''}} value="4">4</option>
                      <option {{$skala_s == 5 ? 'selected' : ''}} value="5">5</option>
                      <option {{$skala_s == 6 ? 'selected' : ''}} value="6">6</option>
                      <option {{$skala_s == 7 ? 'selected' : ''}} value="7">7</option>
                      <option {{$skala_s == 8 ? 'selected' : ''}} value="8">8</option>
                      <option {{$skala_s == 9 ? 'selected' : ''}} value="9">9</option>
                      <option {{$skala_s == 10 ? 'selected' : ''}} value="10">10</option>
                    </select>
                  </div> 
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Waktu</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" disabled name="waktu_m" value="Malam">
                    <input type="hidden" name="waktu_m" value="M">
                  </div> 
                  <label class="control-label col-lg-2" for="inputSuccess">Skala Nyeri</label>
                  <div class="col-lg-2">
                    <select class="form-control m-bot15" name="skala_m">
                      <option {{$skala_m == 1 ? 'selected' : ''}} value="1">1</option>
                      <option {{$skala_m == 2 ? 'selected' : ''}} value="2">2</option>
                      <option {{$skala_m == 3 ? 'selected' : ''}} value="3">3</option>
                      <option {{$skala_m == 4 ? 'selected' : ''}} value="4">4</option>
                      <option {{$skala_m == 5 ? 'selected' : ''}} value="5">5</option>
                      <option {{$skala_m == 6 ? 'selected' : ''}} value="6">6</option>
                      <option {{$skala_m == 7 ? 'selected' : ''}} value="7">7</option>
                      <option {{$skala_m == 8 ? 'selected' : ''}} value="8">8</option>
                      <option {{$skala_m == 9 ? 'selected' : ''}} value="9">9</option>
                      <option {{$skala_m == 10 ? 'selected' : ''}} value="10">10</option>
                    </select>
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