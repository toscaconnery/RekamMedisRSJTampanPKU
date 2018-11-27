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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> RENCANA TINDAKAN KEPERAWATAN KLIEN DENGAN GANGGUAN KONSEP DIRI : HARGA DIRI RENDAH</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Rencana Tindakan Keperawatan Klien Dengan Gangguan Konsep Diri : Harga Diri Rendah
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
                  <td>Rencana Tindakan Keperawatan Klien Dengan Gangguan Konsep Diri : Harga Diri Rendah</td>
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
          <form class="form-horizontal" method="post" action="ri_rencana_klien_2">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Rencana Tindakan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Pengkajian</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pengkajian" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam Pengkajian</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam_pengkajian" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ruangan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="ruangan" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosa Medis</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="diagnosa_medis">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th rowspan="2" style="width: 8%; text-align: center;vertical-align:middle;">Tgl</th>
                      <th rowspan="2" style="width: 8%; text-align: center;vertical-align:middle;">No Dx</th>
                      <th rowspan="2" style="width: 8%; text-align: center;vertical-align:middle;">Dx Keperawatan</th>
                      <th colspan="3" style="width: 80%; text-align: center;vertical-align:middle;">Perencanaan</th>
                    </tr>
                    <tr>
                      <th style="width: 20%; text-align: center;vertical-align:middle;">Tujuan</th>
                      <th style="width: 20%; text-align: center;vertical-align:middle;">Kriteria Evaluasi</th>
                      <th style="width: 20%; text-align: center;vertical-align:middle;">Intervensi</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_1"></td>
                      <td><input type="text" class="form-control" name="nodx_1"></td>
                      <td>
                        <input type="text" class="form-control" name="dxk_1"><br>
                        b.d. harga diri rendah.
                      </td>
                      <td>
                        TUM: <br>
                        <input type="text" class="form-control" name="t1">
                        TUK:<br>
                        1. Klien dapat membina hubungan saling percaya dengan perawat.
                      </td>
                      <td>
                        1. Setelah <input type="text" name="k1" style="width: 6em; display: inline;" class="form-control"> kali interaksi, klien menunjukkan ekspresi wajah bersahabat, menunjukkan rasa senang, ada kontak mata, mau berjabat tangan, mau menyebutkan nama, mau menjawab salam, klien mau duduk berdampingan dengan perawat, mau mengutarakan masalah yang dihadapi.
                      </td>
                      <td>
                        1. Bina hubungan saling percaya dengan menggunakan prinsip komunikasi terapeutik:<br>
                        <ul>
                          <li>Sapa klien dengan ramah baik verbal maupun non verbal.</li>
                          <li>Perkenalkan diri dengan sopan.</li>
                          <li>Tanyakan nama lengkap dan nama panggilan yang disukai klien.</li>
                          <li>Jelaskan tujuan pertemuan.</li>
                          <li>Jujur dan menepati janji</li>
                          <li>Tujukkan sikap empati dan menerima klien apa adanya.</li>
                          <li>Beri perhatian dan perhatikan kebutuhan dasar klien.</li>
                        </ul>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_2"></td>
                      <td><input type="text" class="form-control" name="nodx_2"></td>
                      <td><input type="text" class="form-control" name="dxk_2"></td>
                      <td>
                        2. Klien dapat mengidentifikasi aspek positif dan kemampuan yang dimiliki.
                      </td>
                      <td>
                        2. Setelah <input type="text" name="k2" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien menyebutkan:<br>
                        <ul>
                          <li>Aspek positif dan kemampuan yang dimiliki klien.</li>
                          <li>Aspek positif keluarga.</li>
                          <li>aspek positif lingkungan klien.</li>
                        </ul>
                      </td>
                      <td>
                        2.1. Diskusikan dengan klien tentang:<br>
                        <ul>
                          <li>Aspek positif yang dimiliki klien, keluarga, lingkungan.</li>
                          <li>Kemampuan yang dimiliki klien.</li>
                        </ul>
                        2.2. Bersama klien buat daftar tentang:<br>
                        <ul>
                          <li>Aspek positif klien, keluarga, lingkungan.</li>
                          <li>Kemampuan yang dimiliki klien.</li>
                        </ul>
                        2.3. Beri pujian yang realistis, hindarkan memberi penilaian negatif.
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>

            <div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@include('layouts.tailscript')
</body>


<html>