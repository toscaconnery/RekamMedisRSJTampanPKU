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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> MONITORING DAN OBSERVASI PASIEN KHUSUS</h3>
      </div>
    </div>
    @include('layouts.bio')

    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Dokumen Monitoring dan Observasi
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
                <td>Monitoring dan Observasi Pasien Khusus</td>
                <td>20/08/2018</td>
                <td>[Nama Pengisi]</td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="{{url('')}}/ri_monitoring_pdf">PDF</a>
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
        <form class="form-horizontal">
          <input type="hidden" name="jumlah_form" id="jumlah_form" value="0">
          <section class="panel">
            <header class="panel-heading">
              Monitoring dan Observasi Pasien Khusus
            </header>
            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10%; text-align: center;">Tgl</th>
                    <th style="width: 10%; text-align: center;">Jam</th>
                    <th style="width: 40%; text-align: center;">Hasil Monitoring</th>
                    <th style="width: 40%; text-align: center;">Implementasi</th>
                    <th style="width: 5%; text-align: center;">Paraf</th>
                    <th style="width: 5%; text-align: center;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <input type="hidden" name="previous_data" value="{{$previous_data}}">
                  @foreach($pasien as $p)
                  <tr id="form_{{$p['id_data']}}">
                    <td>
                      <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_{{$p['id_data']}}" required value="{{$p['tanggal']}}">
                    </td>
                    <td>
                      <input type="time" disabled style="width: 9em;" class="form-control" name="jam_{{$p['id_data']}}" required value="{{$p['jam']}}">
                    </td>
                    <td>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="hasil_monitoring_{{$p['id_data']}}" readonly>{{$p['hasil_monitoring']}}</textarea>
                    </td>
                    <td>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="implementasi_{{$p['id_data']}}" readonly>{{$p['implementasi']}}</textarea>
                    </td>
                    <td><input type="checkbox" disabled class="form-control" name="ttd_{{$p['id_data']}}" {{$p['ttd'] == True ? 'checked' : ''}}></td>
                    <td>
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