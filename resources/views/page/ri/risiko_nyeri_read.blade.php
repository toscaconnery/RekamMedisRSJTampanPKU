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
            <header class="panel-heading">
              Dokumen Penilaian Resiko Nyeri
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
                  <td>Penilaian Resiko Nyeri</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_nyeri_pdf">PDF</a>
                      <a class="btn btn-success" href="#">EDIT</i></a>
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
                    <tr>
                      <td style="width: 33.3%; text-align: center;vertical-align:middle;">
                        {{ $tanggal }}
                      </td>
                      <td style="width: 33.3%; text-align: center;vertical-align:middle;">
                        {{ $waktu }}
                      </td>
                      <td style="width: 33.3%; text-align: center;vertical-align:middle;"> 
                       {{ $skala }}
                      </td>
                      <td>
                        <a href=""><button type="button" class="btn btn-primary">Edit</button></a>
                      </td>
                    </tr>
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