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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> PEMBERIAN INFORMASI</h3>
          <a class="btn btn-default" href="{{url('')}}/ri_pemberian_informasi">Tambah Dokumen Baru</a>
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
                  <td>Pemberian Informasi</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-success" href="{{url('')}}/ri_pemberian_informasi_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_informasi_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal">
            <section class="panel">
              <header class="panel-heading">
                Pemberian Informasi
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10%; text-align: center; vertical-align: middle;">Tanggal<br>/Jam</th>
                      <th style="width: 56%; text-align: center; vertical-align: middle;">Informasi yang disampaikan</th>
                      <th style="width: 15%; text-align: center; vertical-align: middle;">Pemberi Informasi</th>
                      <th style="width: 15%; text-align: center; vertical-align: middle;">Penerima Informasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pasien as $p)
                      <tr id="form_{{$p['id_data']}}">
                        <td>
                          <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_{{$p['id_data']}}" required value="{{$p['tanggal']}}">
                          <input type="time" disabled class="form-control" name="jam_{{$p['id_data']}}" required value="{{$p['jam']}}">
                        </td>
                        <td>
                          <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="informasi_{{$p['id_data']}}" readonly>{{$p['informasi']}}</textarea>
                        </td>
                        <td><input type="text" disabled class="form-control" name="pemberi_{{$p['id_data']}}" required value="{{$p['pemberi']}}"></td>
                        <td><input type="text" disabled class="form-control" name="penerima_{{$p['id_data']}}" required value="{{$p['penerima']}}"></td>
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

    @include('layouts.tailscript');
  </body>


  <html>