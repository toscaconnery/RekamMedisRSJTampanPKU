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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> RENCANA TINDAKAN KEPERAWATAN KLIEN DENGAN RISIKO BUNUH DIRI </h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Rencana Tindakan Keperawatan Klien Dengan Risiko Bunuh Diri
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
                  <td>Rencana Tindakan Keperawatan Klien Dengan Risiko Bunuh Diri</td>
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
          <form class="form-horizontal" method="post" action="ri_rencana_klien_7">
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
                        Risiko Bunuh diri
                      </td>
                      <td>
                        TUM: <br>
                        <input type="text" class="form-control" name="t1">
                        TUK 1: Klien dapat membina hubungan saling percaya
                      </td>
                      <td>
                        1. Setelah <input type="text" name="k1" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien menunjukkan tanda-tanda percaya kepada perawat:
                        <br>
                        <ul>
                          <li>Ekspresi wajah bersahabat.</li>
                          <li>Menunjukkan rasa senang.</li>
                          <li>Ada kontak mata.</li>
                          <li>Mau berjabat tangan.</li>
                          <li>Mau menyebutkan nama.</li>
                          <li>Mau menjawab salam.</li>
                          <li>Mau duduk berdampingan dengan perawat.</li>
                          <li>Bersedia mengungkapkan masalah yang dihadapi</li>
                        </ul>
                      </td>
                      <td>
                        1. Bina hubungan saling percaya dengan menggunakan prinsip komunikasi terapeutik:<br>
                        <ul>
                          <li>Sapa klien dengan ramah baik verbal maupun non verbal</li>
                          <li>Perkenakan nama, nama panggilan dan tujuan perawat berkenalan</li>
                          <li>Tanyakan nama lengkap dan nama panggilan yang disukai klien</li>
                          <li>Buat kontrak yang jelas</li>
                          <li>Tunjukkan sikap jujur dan menepati janji setiap kali interaksi</li>
                          <li>Tunjukkan sikap empati dan menerima apa adanya</li>
                          <li>Beri perhatian kepada klien dan perhatikan kebutuhan dasar klien</li>
                          <li>Tanyakan perasaan klien dan masalah yang dihadapi klien</li>
                          <li>Dengarkan dengan penuh perhatian ekspresi perasaan klien</li>
                        </ul>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_2"></td>
                      <td><input type="text" class="form-control" name="nodx_2"></td>
                      <td><input type="text" class="form-control" name="dxk_2"></td>
                      <td>
                        TUK 2: Klien dapat dilindungi dari tindakan yang mengancam atau mencoba bunuh diri
                      </td>
                      <td>
                        2. Setelah <input type="text" name="k2" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien dapat dilindungi sampai tidak ada keinginan bunuh diri<br>
                        <ul>
                          <li>Ada kontak mata</li>
                          <li>Bersedia menceritakan perasaan</li>
                          <li>Menceritakan penyebab</li>
                          <li>Timbulnya keinginan bunuh diri baik dari diri sendiri maupun lingkungannya</li>
                        </ul>
                      </td>
                      <td>
                        2.1. Identifikasi benda-benda yang dapa membahayakan pasien (pisau, silet, gelas, tali pinggang, alat kasur, dll)<br>
                        2.2. Amankan benda-benda yang dapat membahayakan pasien<br>
                        2.3. Lakukan kontrak <i>treatment</i><br>
                        2.4. Mengajarkan cara mengendalikan dorongan bunuh diri<br>
                        2.5. Melatih cara mengendalikan dorongan bunuh diri
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_3"></td>
                      <td><input type="text" class="form-control" name="nodx_3"></td>
                      <td><input type="text" class="form-control" name="dxk_3"></td>
                      <td>
                        TUK 3: Klien dapat meningkatkan harga diri
                      </td>
                      <td>
                        3. Setelah <input type="text" name="k3" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien menyebutkan:<br>
                        <ul>
                          <li>Aspek positif dari kemampuan yang dimiliki klien.</li>
                          <li>Aspek positif keluarga.</li>
                          <li>Aspek positif lingkungan klien</li>
                        </ul>
                      </td>
                      <td>
                        3.1. Identifikasi aspek positif pasien<br>
                        3.2. Beri kesempatan pasien mengungkapkan perasaannya<br>
                        3.3. Dorong pasien untuk berpikir positif terhadap diri<br>
                        3.4. Berikan pujian bila pasien dapat mengatakan perasaan yang positif<br>
                        3.5. Yakinkan pasien bahwa dirinya penting<br>
                        3.6. Bicarakan tentang keadaan yang sepatutnya disyukuri oleh pasien<br>
                        3.7. Dorong pasien untuk menghargai diri sebagai individu yang berharga<br>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_4"></td>
                      <td><input type="text" class="form-control" name="nodx_4"></td>
                      <td><input type="text" class="form-control" name="dxk_4"></td>
                      <td>
                        TUK 4: Klien dapat meningkatkan kemampuan koping dalam penyelesaian masalah
                      </td>
                      <td>
                        4. Setelah <input type="text" name="k4" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien menyebutkan:<br>
                        <ul>
                          <li>Koping konstruktif yang dapat digunkan untuk menyelesaikan masalah</li>
                          <li>Efektifitas penggunaan koping</li>
                        </ul>
                      </td>
                      <td>
                        4.1. Identifikasi pola koping yang biasa diterapkan pasien<br>
                        4.2. Bantu untuk menilai pola koping yang biasa dilakukan<br>
                        4.3. Mengidentifikasi pola koping yang konstruktif<br>
                        4.4. Dorong pasien memilih pola koping yang konstruktif<br>
                        4.5. Anjurkan pasien menerapkan pola koping konstruktif dalam kegiatan harian 
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_5"></td>
                      <td><input type="text" class="form-control" name="nodx_5"></td>
                      <td><input type="text" class="form-control" name="dxk_5"></td>
                      <td>
                        TUK 5: Klien dapat merencanakan masa depan
                      </td>
                      <td>
                        5. Setelah <input type="text" name="k5" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien menyebutkan:<br>
                        <ul>
                          <li>Rencana masa depan yang sesuai kemampuan</li>
                        </ul>
                      </td>
                      <td>
                        5.1. Diskusikan rencana masa depan yang realistis bersama pasien<br>
                        5.2. Identifikasi cara mencapai rencana masa depan yang realistis<br>
                        5.3. Membuat dorongan pasien melakukan kegiatan dalam rangka meraih masa depan yang realistis
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