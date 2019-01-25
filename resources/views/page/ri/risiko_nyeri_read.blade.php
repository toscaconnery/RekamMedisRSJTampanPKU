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
          <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_risiko_nyeri">
            {{ csrf_field() }}
            <section class="panel">
              <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th style="width: 30%; text-align: center;vertical-align:middle;">Tanggal, Bulan, Tahun</th>
                      <th style="width: 30%; text-align: center;vertical-align:middle;">Waktu</th>
                      <th style="width: 30%; text-align: center;vertical-align:middle;">Skala Nyeri</th>
                      <th style="width: 10%; text-align: center;vertical-align:middle;">Action</a></th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($pasien as $key => $value)
                      <tr>
                        <td style="width: 33.3%; text-align: center;vertical-align:middle;" rowspan="3">
                          {{ $key }}
                        </td>
                        <td style="width: 33.3%; text-align: center;vertical-align:middle;">
                          P
                        </td>
                        <td style="width: 33.3%; text-align: center;vertical-align:middle;"> 
                         {{ $value['p'] }}
                        </td>
                        <td rowspan="3" style="vertical-align: middle;">
                          <a href="{{url('ri_risiko_nyeri_edit')}}/{{$value['id']}}"><button type="button" class="btn btn-primary">Edit</button></a>
                        </td>
                      </tr>
                      <tr style="background-color: #fafafa">
                        <td style="width: 33.3%; text-align: center;vertical-align:middle;">
                          S
                        </td>
                        <td style="width: 33.3%; text-align: center;vertical-align:middle;"> 
                         {{ $value['s'] }}
                        </td>
                      </tr>
                      <tr style="background-color: #f4f5f7">
                        <td style="width: 33.3%; text-align: center;vertical-align:middle;">
                          M
                        </td>
                        <td style="width: 33.3%; text-align: center;vertical-align:middle;"> 
                          {{ $value['m'] }}
                        </td>
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