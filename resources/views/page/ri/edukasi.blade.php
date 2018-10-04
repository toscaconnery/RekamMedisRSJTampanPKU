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
              Medis
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
                    <td style="text-align: center;">1</td>
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
                    <td>Mampu menjelaskan point : a,b,c,d,e</td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
                  </tr>
                </tbody>
              </table>
              <form class="form-horizontal " method="get">
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Materi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Metode dan Durasi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Edukator</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Manajemen Nyeri
            </header>
            <div class="panel-body">

              <form class="form-horizontal " method="get">
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Materi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Metode dan Durasi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Edukator</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Psikologis
            </header>
            <div class="panel-body">

              <form class="form-horizontal " method="get">
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Materi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Metode dan Durasi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Edukator</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Keperawatan
            </header>
            <div class="panel-body">

              <form class="form-horizontal " method="get">
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Materi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Metode dan Durasi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Edukator</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Farmasi
            </header>
            <div class="panel-body">

              <form class="form-horizontal " method="get">
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Materi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Metode dan Durasi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Edukator</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Nutrisi
            </header>
            <div class="panel-body">

              <form class="form-horizontal " method="get">
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Materi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Metode dan Durasi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Edukator</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Kerohanian
            </header>
            <div class="panel-body">

              <form class="form-horizontal " method="get">
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Materi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Metode dan Durasi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Edukator</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Rehabilitasi
            </header>
            <div class="panel-body">

              <form class="form-horizontal " method="get">
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Materi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Metode dan Durasi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Edukator</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Delay Treatment
            </header>
            <div class="panel-body">

              <form class="form-horizontal " method="get">
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Materi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Metode dan Durasi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Edukator</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
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