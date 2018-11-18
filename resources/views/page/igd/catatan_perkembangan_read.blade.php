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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>Catatan Perkembangan</h3>
        </div>
      </div>
      @include('layouts.bio')
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Daftar Catatan Kemajuan
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
                  <td>Catatan Kemajuan </td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                       <a class="btn btn-primary" href="{{url('')}}/igd_perkembangan_pdf">PDF</a>
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
          <form class="form-horizontal " method="post" action="igd_catatan_perkembangan">
            {{ csrf_field() }}
            <input type="hidden" id="jumlah_form" name="jumlah_form" value="1">
            <section class="panel">
              <header class="panel-heading">
                Catatan Kemajuan 
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 8%; text-align: center;">TGL & JAM</th>
                      <th style="width: 17%; text-align: center;">PROFESI/BAGIAN</th>
                      <th style="width: 70%; text-align: center;">HASIL PEMERIKSAAN, ANALISIS, RENCANA PENATALAKSANAAN PASIEN <br><span style="font-size: 3.3mm; font-style: italic;">Dituliskan dengan format SOAP/ADIME, disertai dengan target yang terukur, Evaluasi Hasil Tatalaksana dituliskan dalam Asesmen</span> </th>
                      <th style="width: 3%; text-align: center;">VERIFIKASI DPJP</th>
                      <th style="width: 2%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pasien as $p)
                      <tr id="form_{{$p['id_data']}}">
                        <td>
                          <input type="text" disabled value="{{$p['tanggal']}}" size="16" class="form-control sandbox-container" name="tanggal_{{$p['id_data']}}">
                          <input type="time" disabled value="{{$p['jam']}}" class="form-control" name="jam_{{$p['id_data']}}" required>
                        </td>
                        <td>
                          <textarea class="form-control" rows="3" name="profesi_bagian_{{$p['id_data']}}" style="resize: none;" readonly>{{$p['profesi_bagian']}}</textarea>
                        </td>
                        <td>
                          <textarea class="form-control" rows="3" name="hasil_{{$p['id_data']}}" readonly>{{$p['hasil']}}</textarea>
                        </td>
                        <td>
                          <input type="checkbox" disabled class="form-control" name="verifikasi_{{$p['id_data']}}" {{$p['verifikasi'] == True ? 'checked' : ''}}>
                        </td>
                        <td>
                          <div class="btn-group">
                          </div>
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
  </section>

  @include('layouts.tailscript')

</body>
<html>