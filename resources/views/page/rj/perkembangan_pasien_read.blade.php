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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Catatan Perkembangan Pasien Terintegrasi Rawat Jalan</h3>
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
                  <td>Catatan Perkembangan Pasien Terintegrasi</td>
                  <td>{{$tanggal_pengisian}}</td>
                  <td>{{$nama_pengisi}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_perkembangan_pasien">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_perkembangan_pasien_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_perkembangan_pasien_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_catatan_perkembangan_pdf">Cetak</a>
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
            <input type="hidden" name="jumlah_form_new" id="jumlah_form_new" value="0">
            <section class="panel">
              <header class="panel-heading">
                Hasil Pemeriksaan, Analisis, Rencana Penatalaksanaan Pasien 
              </header>
              <div class="form-group">
                <div class="col-sm-2"></div>
                <label class="col-sm-8 control-label"><center>(Dituliskan dengan Format SOAP/ADIME, disertai dengan Target yang Terukur, Evaluasi Hasil Tatalaksana dituliskan dalam Asesmen.</center></label>
                <div class="col-sm-2"></div>
              </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10%; text-align: center;">TGL & JAM</th>
                    <th style="width: 15%; text-align: center;">PROFESI/BAGIAN</th>
                    <th style="width: 67%; text-align: center;">HASIL PEMERIKSAAN, ANALISIS, RENCANA PENTATALAKSANAAN PASIEN</th>
                    <th style="width: 5%; text-align: center;">VERIFIKASI</th>
                    <th style="width: 3%; text-align: center;">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  <input type="hidden" name="previous_id" value="{{$previous_id}}">
                  @foreach($pasien as $p)
                  <tr>
                    <td>
                      <input disabled type="text" autocomplete="off" class="form-control sandbox-container" name="tanggal_{{$p['id_data']}}" required value="{{$p['tanggal']}}">
                      <input disabled type="time" class="form-control" name="jam_{{$p['id_data']}}" required value="{{$p['jam']}}">
                    </td>
                    <td>
                      <input disabled type="text" class="form-control" name="profesi_{{$p['id_data']}}" readonly value="{{$p['profesi']}}">
                    </td>
                    <td>
                      <textarea readonly style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="keterangan_{{$p['id_data']}}">{{$p['keterangan']}}</textarea>
                    </td>
                    <td><input disabled type="checkbox" class="form-control" name="ttd_{{$p['id_data']}}" {{$p['ttd'] == True ? 'checked' : ''}}></td>
                    <td></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </section>
          </form>
        </div>
      </div>
    </section>

    @include('layouts.tailscript')
    </body>
    <html>