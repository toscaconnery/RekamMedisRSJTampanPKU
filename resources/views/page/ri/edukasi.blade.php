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
                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
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

          <section class="panel">
            <header class="panel-heading">
              
            </header>
            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 3%; text-align: center;">No.</th>
                    <th style="width: 37%; text-align: center;">Penjelasan</th>
                    <th style="width: 20%; text-align: center;">Materi</th>
                    <th style="width: 15%; text-align: center;">Metode & Durasi</th>
                    <th style="width: 15%; text-align: center;">Evaluasi</th>
                    <th style="width: 5%; text-align: center;">Nama & Paraf Pasien/Ket</th>
                    <th style="width: 5%; text-align: center;">Paraf & Nama Edukator</th>
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
                    <td><textarea></textarea></td>
                    <td><textarea></textarea></td>
                    <td>Mampu menjelaskan point : a,b,c,d,e</td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
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
                    <td><textarea></textarea></td>
                    <td><textarea></textarea></td>
                    <td>Mampu menjelaskan point : a,b<br>Mampu mendemonstrasikan point : 1,2</td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
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
                    <td><textarea></textarea></td>
                    <td><textarea></textarea></td>
                    <td>Mampu menjelaskan point : a,b,c,d,e</td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
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
                    <td><textarea></textarea></td>
                    <td><textarea></textarea></td>
                    <td>Mampu menjelaskan point :<br>a. 1), 2), 3)<br>b.<br>c.<br>d.<br>e.<br>f.<br>Mampu mendemonstrasikan<br>1) Cucitangan<br>2) Penggunaan alat medis</td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
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
                    <td><textarea></textarea></td>
                    <td><textarea></textarea></td>
                    <td>Mampu menjelaskan point : a,b,c,d,e,f</td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
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
                    <td><textarea></textarea></td>
                    <td><textarea></textarea></td>
                    <td>Mampu menjelaskan point : a,b,c,d</td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">7</td>
                    <td><span>Kerohanian</span><br>
                      Bimbingan & Konseling Rohani
                    </td>
                    <td><textarea></textarea></td>
                    <td><textarea></textarea></td>
                    <td>Mampu menjelaskan & mendemonstrasikan Bimbingan & Konseling rohani</td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
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
                    <td><textarea></textarea></td>
                    <td><textarea></textarea></td>
                    <td>Mampu menjelaskan & mendemonstrasikan point : a,b,c</td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
                  </tr>
                  <tr style="height: 10em;">
                    <td style="text-align: center;">9</td>
                    <td><span>Delay Treatment</span>
                    </td>
                    <td><textarea></textarea></td>
                    <td><textarea></textarea></td>
                    <td><textarea></textarea></td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>

          <div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>

        </div>
      </div>
    </section>
    @include('layouts.tailscript')
  </body>


  <html>