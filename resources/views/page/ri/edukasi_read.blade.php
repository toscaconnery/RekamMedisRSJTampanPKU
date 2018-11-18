<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.headscript')
  <style type="text/css">
    ul {padding-left: 1em;}
    ul li {list-style-type: lower-alpha;}
    ul.indent li {list-style-type: decimal;}
    td {position: relative;}
    td textarea {width: 100%; position: absolute; box-sizing: border-box; top: 0; left: 0; right: 0; bottom: 0; resize: none;}
    td span {font-weight: bold;}
  </style>
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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> EDUKASI PASIEN DAN KELUARGA</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Edukasi Pasien dan Keluarga
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
                  <td>Edukasi Pasien dan Keluarga</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_edukasi_pdf">PDF</a>
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
          <form class="form-horizontal form-validate" method="post" id="register_form">
            <fieldset disabled="">
            <section class="panel">
              <header class="panel-heading">
                
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 3%; text-align: center;">No.</th>
                      <th style="width: 29%; text-align: center;">Penjelasan</th>
                      <th style="width: 20%; text-align: center;">Materi</th>
                      <th style="width: 15%; text-align: center;">Metode & Durasi</th>
                      <th style="width: 15%; text-align: center;">Evaluasi</th>
                      <th style="width: 9%; text-align: center;">Nama & Paraf Pasien/Ket</th>
                      <th style="width: 9%; text-align: center;">Paraf & Nama Edukator</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="text-align: center;">1</td>
                      <td><span>Medis</span>
                        <ul>
                          <li>Penyakit, Penyebab, Tanda dan Gejala</li>
                          <li>Hasil Pemeriksaan</li>
                          <li>Tindakan Medis, Pengobatan dan Resikonya</li>
                          <li>Perkiraan Biaya</li>
                          <li>Komplikasi yang mungkin terjadi</li>
                        </ul>
                      </td>
                      <td><textarea class="form-control" name="medis_materi" readonly>{{$medis_materi}}</textarea></td>
                      <td><textarea class="form-control" name="medis_metode" readonly>{{$medis_metode}}</textarea></td>
                      <td>Mampu menjelaskan point : a,b,c,d,e</td>
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="medis_paraf_pasien" {{$medis_paraf_pasien ? 'checked' : ''}}>
                        <input type="text" class="form-control" disabled="" value="nama_pasien">
                      </td>
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="medis_paraf_edukator" {{$medis_paraf_edukator ? 'checked' : ''}}>
                        <input type="text" class="form-control" name="medis_nama_edukator" value="{{$medis_nama_edukator}}">
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: center;">2</td>
                      <td><span>Manajemen Nyeri</span>
                        <ul>
                          <li>Non Farmakologi</li>
                            <ul class="indent">
                              <li>Teknik Relaksasi</li>
                              <li>Distraksi, dll</li>
                            </ul>
                          <li>Farmakologi</li>
                        </ul>
                      </td>
                      <td><textarea class="form-control" name="mj_materi">{{$mj_materi}}</textarea></td>
                      <td><textarea class="form-control" name="mj_metode">{{$mj_metode}}</textarea></td>
                      <td>Mampu menjelaskan point : a,b<br>Mampu mendemonstrasikan point : 1,2</td>
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="mj_paraf_pasien" {{$mj_paraf_pasien ? 'checked' : ''}}>
                        <input type="text" class="form-control" disabled="" value="nama_pasien">
                      </td>
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="mj_paraf_edukator" {{$mj_paraf_edukator ? 'checked' : ''}}>
                        <input type="text" class="form-control" name="mj_nama_edukator" value="{{$mj_nama_edukator}}">
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: center;">3</td>
                      <td><span>Psikologis</span>
                        <ul>
                          <li>Penerimaan penyakitnya</li>
                          <li>Pengembangan emosi positif</li>
                          <li>Penyelesaian masalah yang spesifik (coping+)</li>
                          <li>Konseling berita buruk</li>
                        </ul>
                      </td>
                      <td><textarea class="form-control" name="psikologis_materi">{{$psikologis_materi}}</textarea></td>
                      <td><textarea class="form-control" name="psikologis_metode">{{$psikologis_metode}}</textarea></td>
                      <td>Mampu menjelaskan point : a,b,c,d,e</td>
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="psikologis_paraf_pasien" {{$psikologis_paraf_pasien ? 'checked' : ''}}>
                        <input type="text" class="form-control" disabled="" value="nama_pasien">
                      </td>
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="psikologis_paraf_edukator" {{$psikologis_paraf_edukator ? 'checked' : ''}}>
                        <input type="text" class="form-control" name="psikologis_nama_edukator" value="{{$psikologis_nama_edukator}}">
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: center;">4</td>
                      <td><span>Keperawatan</span>
                        <ul>
                          <li>Pendidikan Kesehatan tentang</li>
                            <ul class="indent">
                              <li>Cuci Tangan</li>
                              <li>Resiko Jatuh</li>
                              <li>Orientasi Pasien Baru</li>
                            </ul>
                          <li>Penanganan dan Perawatan di RS</li>
                          <li>Penanganan dan Perawatan di rumah</li>
                          <li>Alat-alat yang perlu disiapkan di rumah</li>
                          <li>Keamanan lingkungan di rumah</li>
                          <li>Sumber-sumber pelayanan kesehatan di komunitas</li>
                        </ul>
                      </td>
                      <td><textarea class="form-control" name="keperawatan_materi">{{$keperawatan_materi}}</textarea></td>
                      <td><textarea class="form-control" name="keperawatan_metode">{{$keperawatan_metode}}</textarea></td>
                      <td>Mampu menjelaskan point :<br>a. 1), 2), 3)<br>b.<br>c.<br>d.<br>e.<br>f.<br>Mampu mendemonstrasikan<br>1) Cucitangan<br>2) Penggunaan alat medis</td>
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="keperawatan_paraf_pasien" {{$psikologis_paraf_pasien ? 'checked' : ''}}>
                        <input type="text" class="form-control" disabled="" value="nama_pasien">
                      </td>
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="keperawatan_paraf_edukator" {{$psikologis_paraf_edukator ? 'checked' : ''}}>
                        <input type="text" class="form-control" name="keperawatan_nama_edukator" value="{{$keperawatan_nama_edukator}}">
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: center;">5</td>
                      <td><span>Farmasi</span>
                        <ul>
                          <li>Nama obat & kegunaannya</li>
                          <li>Aturan pemakaian</li>
                          <li>Jumlah obat yang diberikan</li>
                          <li>Cara penyimpanan obat</li>
                          <li>Efek samping obat</li>
                          <li>Interaksi antar obat & interaksi obat dengan makanan</li>
                        </ul>
                      </td>
                      <td><textarea class="form-control" name="farmasi_materi">{{$farmasi_materi}}</textarea></td>
                      <td><textarea class="form-control" name="farmasi_metode">{{$farmasi_metode}}</textarea></td>
                      <td>Mampu menjelaskan point : a,b,c,d,e,f</td>
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="farmasi_paraf_pasien" {{$farmasi_paraf_pasien ? 'checked' : ''}}>
                        <input type="text" class="form-control" disabled="" value="nama_pasien">
                      </td style="vertical-align: middle;">
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="farmasi_paraf_edukator" {{$farmasi_paraf_edukator ? 'checked' : ''}}>
                        <input type="text" class="form-control" name="farmasi_nama_edukator" value="{{$farmasi_nama_edukator}}">
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: center;">6</td>
                      <td><span>Nutrisi</span>
                        <ul>
                          <li>Status Gizi</li>
                          <li>Pelayanan makanan di RS</li>
                          <li>Diet selama perawatan</li>
                          <li>Diet di rumah</li>
                        </ul>
                      </td>
                      <td><textarea class="form-control" name="nutrisi_materi">{{$nutrisi_materi}}</textarea></td>
                      <td><textarea class="form-control" name="nutrisi_metode">{{$nutrisi_metode}}</textarea></td>
                      <td>Mampu menjelaskan point : a,b,c,d</td>
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="nutrisi_paraf_pasien" {{$nutrisi_paraf_pasien ? 'checked' : ''}}>
                        <input type="text" class="form-control" disabled="" value="nama_pasien">
                      </td>
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="nutrisi_paraf_edukator" {{$nutrisi_paraf_edukator ? 'checked' : ''}}>
                        <input type="text" class="form-control" name="nutrisi_nama_edukator" value="{{$nutrisi_nama_edukator}}">
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: center;">7</td>
                      <td><span>Kerohanian</span><br>
                        Bimbingan & Konseling Rohani
                      </td>
                      <td><textarea class="form-control" name="kerohanian_materi">{{$kerohanian_materi}}</textarea></td>
                      <td><textarea class="form-control" name="kerohanian_metode">{{$kerohanian_metode}}</textarea></td>
                      <td>Mampu menjelaskan & mendemonstrasikan Bimbingan & Konseling rohani</td>
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="kerohanian_paraf_pasien" {{$kerohanian_paraf_pasien ? 'checked' : ''}}>
                        <input type="text" class="form-control" disabled="" value="nama_pasien">
                      </td>
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="kerohanian_paraf_edukator" {{$kerohanian_paraf_edukator ? 'checked' : ''}}>
                        <input type="text" class="form-control" name="kerohanian_nama_edukator" value="{{$kerohanian_nama_edukator}}">
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: center;">8</td>
                      <td><span>Rehabilitasi</span>
                        <ul>
                          <li>Fisioterapi</li>
                          <li>Okupasi Therapy</li>
                          <li>Terapi Wicara</li>
                        </ul>
                      </td>
                      <td><textarea class="form-control" name="rehabilitasi_materi">{{$rehabilitasi_materi}}</textarea></td>
                      <td><textarea class="form-control" name="rehabilitasi_metode">{{$rehabilitasi_metode}}</textarea></td>
                      <td>Mampu menjelaskan & mendemonstrasikan point : a,b,c</td>
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="rehabilitasi_paraf_pasien" {{$rehabilitasi_paraf_pasien ? 'checked' : ''}}>
                        <input type="text" class="form-control" disabled="" value="nama_pasien">
                      </td>
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="rehabilitasi_paraf_edukator" {{$rehabilitasi_paraf_edukator ? 'checked' : ''}}>
                        <input type="text" class="form-control" name="rehabilitasi_nama_edukator" value="{{$rehabilitasi_nama_edukator}}">
                      </td>
                    </tr>
                    <tr style="height: 10em;">
                      <td style="text-align: center;">9</td>
                      <td><span>Delay Treatment</span>
                      </td>
                      <td><textarea class="form-control" name="dt_materi">{{$dt_materi}}</textarea></td>
                      <td><textarea class="form-control" name="dt_metode">{{$dt_metode}}</textarea></td>
                      <td><textarea class="form-control" name="dt_evaluasi">{{$dt_evaluasi}}</textarea></td>
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="dt_paraf_pasien" {{$dt_paraf_pasien ? 'checked' : ''}}>
                        <input type="text" class="form-control" disabled="" value="nama_pasien">
                      </td>
                      <td style="vertical-align: middle;">
                        <input type="checkbox" class="form-control" name="dt_paraf_edukator" {{$dt_paraf_edukator ? 'checked' : ''}}>
                        <input type="text" class="form-control" name="dt_nama_edukator" value="{{$dt_nama_edukator}}">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
            </fieldset>

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