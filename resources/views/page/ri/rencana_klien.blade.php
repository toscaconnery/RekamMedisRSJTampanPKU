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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>RENCANA TINDAKAN KEPERAWATAN KLIEN</h3>
        </div>
      </div>
      @include('layouts.bio')
      
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Rencana Tindakan Keperawatan Klien
            </header>

            <table class="table table-striped table-advance table-hover">
              <tbody>
                <tr>
                  <th><i class="icon_document_alt"></i> Dokumen</th>
                  <th><i class="icon_calendar"></i> Tanggal Pengisian</th>
                  <th><i class="icon_profile"></i> Pengisi</th>
                  <th><i class="icon_cogs"></i> Status</th>
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
                <tr>
                  <td>Rencana Tindakan Keperawatan Klien Dengan Perilaku Kekerasan</td>
                  <td>{{$file->ri_rencana_klien_1_tanggal}}</td>
                  <td>{{$file->ri_rencana_klien_1_pengisi}}</td>
                  <td>{{$file->ri_rencana_klien_1 == True ? 'Terisi' : 'Tidak Terisi'}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="#">Lihat</a>
                      <a class="btn btn-success" href="#">PDF</a>
                      <a class="btn btn-primary" href="#">Edit</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Rencana Tindakan Keperawatan Klien Dengan Gangguan Konsep Diri : Harga Diri Rendah</td>
                  <td>{{$file->ri_rencana_klien_2_tanggal}}</td>
                  <td>{{$file->ri_rencana_klien_2_pengisi}}</td>
                  <td>{{$file->ri_rencana_klien_2 == True ? 'Terisi' : 'Tidak Terisi'}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="#">Lihat</a>
                      <a class="btn btn-success" href="#">PDF</a>
                      <a class="btn btn-primary" href="#">Edit</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Rencana Tindakan Keperawatan Klien Dengan Pola Pikir : WAHAM</td>
                  <td>{{$file->ri_rencana_klien_3_tanggal}}</td>
                  <td>{{$file->ri_rencana_klien_3_pengisi}}</td>
                  <td>{{$file->ri_rencana_klien_3 == True ? 'Terisi' : 'Tidak Terisi'}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="#">Lihat</a>
                      <a class="btn btn-success" href="#">PDF</a>
                      <a class="btn btn-primary" href="#">Edit</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Rencana Tindakan Keperawatan Klien Dengan Menarik Diri</td>
                  <td>{{$file->ri_rencana_klien_4_tanggal}}</td>
                  <td>{{$file->ri_rencana_klien_4_pengisi}}</td>
                  <td>{{$file->ri_rencana_klien_4 == True ? 'Terisi' : 'Tidak Terisi'}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="#">Lihat</a>
                      <a class="btn btn-success" href="#">PDF</a>
                      <a class="btn btn-primary" href="#">Edit</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Rencana Tindakan Keperawatan Klien Dengan Defisit Perawatan Diri</td>
                  <td>{{$file->ri_rencana_klien_5_tanggal}}</td>
                  <td>{{$file->ri_rencana_klien_5_pengisi}}</td>
                  <td>{{$file->ri_rencana_klien_5 == True ? 'Terisi' : 'Tidak Terisi'}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="#">Lihat</a>
                      <a class="btn btn-success" href="#">PDF</a>
                      <a class="btn btn-primary" href="#">Edit</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Rencana Tindakan Keperawatan Klien Dengan Gangguan Persepsi Sensori : Halusinasi</td>
                  <td>{{$file->ri_rencana_klien_6_tanggal}}</td>
                  <td>{{$file->ri_rencana_klien_6_pengisi}}</td>
                  <td>{{$file->ri_rencana_klien_6 == True ? 'Terisi' : 'Tidak Terisi'}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="#">Lihat</a>
                      <a class="btn btn-success" href="#">PDF</a>
                      <a class="btn btn-primary" href="#">Edit</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Rencana Tindakan Keperawatan Klien Dengan Risiko Bunuh Diri</td>
                  <td>{{$file->ri_rencana_klien_7_tanggal}}</td>
                  <td>{{$file->ri_rencana_klien_7_pengisi}}</td>
                  <td>{{$file->ri_rencana_klien_7 == True ? 'Terisi' : 'Tidak Terisi'}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="#">Lihat</a>
                      <a class="btn btn-success" href="#">PDF</a>
                      <a class="btn btn-primary" href="#">Edit</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      

    </div>
  </div>
</section>

@include('layouts.tailscript')
</body>


<html>