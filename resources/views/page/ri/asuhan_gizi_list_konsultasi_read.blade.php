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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>Asuhan Gizi</h3>
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
                  <td>Dokumen Asuhan Gizi</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_asuhan_gizi">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_asuhan_gizi_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_asuhan_gizi_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_gizi_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal" method="post" action="ri_asuhan_gizi_list_konsultasi_edit">
            <section class="panel">
              <header class="panel-heading">

              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="field1" value="{{$field1}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">DHT</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="field2" value="{{$field2}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">TB</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="field3" value="{{$field3}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">BB</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="field4" value="{{$field4}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">DMI</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="field5" value="{{$field5}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 15%; text-align: center;vertical-align:middle;">Tanggal</th>
                      <th style="width: 10%; text-align: center;vertical-align:middle;">BB (KG)</th>
                      <th style="width: 50%; text-align: center;vertical-align:middle;">Konsultasi Gizi/Pengamatan</th>
                      <th style="width: 20%; text-align: center;vertical-align:middle;">Nama</th>
                      <th style="width: 5%; text-align: center;vertical-align:middle;">Check</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $idx = 0;
                    @endphp
                    @foreach($tabel as $key => $value)
                    @php
                      $idx += 1;
                    @endphp
                    <tr id="form_{{$idx}}">
                      <td style="text-align:center;"><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tabel1_{{$idx}}" required value="{{$value['tabel1']}}"></td>
                      <td>
                        <input type="text" disabled class="form-control" name="tabel2_{{$idx}}" required value="{{$value['tabel2']}}">
                      </td>
                      <td>
                        <input type="text" disabled class="form-control" name="tabel3_{{$idx}}" required value="{{$value['tabel3']}}">
                      </td>
                      <td>
                        <input type="text" disabled class="form-control" name="tabel4_{{$idx}}" required value="{{$value['tabel4']}}">
                      </td>
                      <td>
                        <input type="checkbox" class="form-control" name="tabel5_{{$idx}}" {{$value['tabel5'] == "1" ? 'checked' : ''}} disabled>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </section>

          </form>
        </div>
      </div>
    </section>

    @include('layouts.tailscript')


  </body>


  <html>