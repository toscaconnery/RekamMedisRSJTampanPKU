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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> RENCANA TINDAKAN KEPERAWATAN KLIEN DENGAN MENARIK DIRI</h3>
        </div>
      </div>
      @include('layouts.bio')
      
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Rencana Tindakan Keperawatan Klien Dengan Menarik Diri
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
                  <td>Rencana Rencana Tindakan Keperawatan Klien Dengan Menarik Diri</td>
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
          <form class="form-horizontal" method="post" action="ri_rencana_klien_4">
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
                        b.d. menarik diri
                      </td>
                      <td>
                        TUM: <br>
                        <input type="text" class="form-control" name="t1">
                        TUK:<br>
                        1. klien dapat membina hubungan saling percaya
                      </td>
                      <td>
                        1. Setelah <input type="text" name="k1" style="width: 6em; display: inline;" class="form-control"> x interaksi klien menunjukkan tanda-tanda percaya kepada / terhadap perawat:<br>
                        <ul>
                          <li>Wajah cerah, tersenyum</li>
                          <li>Mau berkenalan</li>
                          <li>Ada kontak mata</li>
                          <li>Bersedia menceritakan perasaan</li>
                          <li>Bersedia mengunkapkan masalahnya</li>
                        </ul>
                      </td>
                      <td>
                        1.1. Bina hubungan saling percaya dengan:<br>
                        <ul>
                          <li>Beri salam setiap berinteraksi.</li>
                          <li>Perkenalkan nama, nama panggilan perawat dan tujuan perawat berkenalan</li>
                          <li>Tanyakan dan panggil nama kesukaan klien</li>
                          <li>Tunjukkan sikap jujur dan menepati janji setiap kali berinteraksi</li>
                          <li>Tanyakan perasaan klien dan masalah yang dihadapi klien</li>
                          <li>Buat kontak interaksi yang jelas</li>
                          <li>Dengarkan dengan penuh perhatian ekspresi perasaan klien</li>
                        </ul>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_2"></td>
                      <td><input type="text" class="form-control" name="nodx_2"></td>
                      <td><input type="text" class="form-control" name="dxk_2"></td>
                      <td>
                        2. Klien mampu menyebutkan penyebab menarik diri
                      </td>
                      <td>
                        2. Setelah <input type="text" name="k2" style="width: 6em; display: inline;" class="form-control"> x interaksi klien dapat menyebutkan minimal satu penyebab menarik diri dari:<br>
                        <ul>
                          <li>diri sendiri</li>
                          <li>orang lain</li>
                          <li>lingkungan</li>
                        </ul>
                      </td>
                      <td>
                        2.1 Tanyakan pada klien tentang:<br>
                        <ul>
                          <li>Orang yang tinggal serumah / teman sekamar klien</li>
                          <li>Orang yang paling dekat dengan klien di rumah / di ruang perawatan</li>
                          <li>Apa yang membuat klien dekat dengan orang tersebut</li>
                          <li>Orang yang tidak dekat dengan klien di rumah / di ruang perawatan</li>
                          <li>Apa yang membuat klien tidak dekat dengan orang tersebut</li>
                          <li>Upaya yang sudah dilakukan agar dekat dengan orang lain</li>
                        </ul>
                        2.2. Diskusikan dengan klien penyebab menarik diri atau tidak mau bergaul dengan orang lain.<br>
                        2.3. Beri pujian terhadap kemampuan klien mengungkapkan perasaannya
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_3"></td>
                      <td><input type="text" class="form-control" name="nodx_3"></td>
                      <td><input type="text" class="form-control" name="dxk_3"></td>
                      <td>
                        3. Klien mampu menyebutkan keuntungan berhubungan sosial dan kerugian menarik diri.
                      </td>
                      <td>
                        3. Setelah <input type="text" name="k3" style="width: 6em; display: inline;" class="form-control"> x interaksi dengan klien dapat menyebutkan keuntungan berhubungan sosial, misalnya:<br>
                        <ul>
                          <li>Banyak teman</li>
                          <li>Tidak kesepian</li>
                          <li>Bisa diskusi</li>
                          <li>
                            Saling menolong, dan kerugian menarik diri, misalnya:<br>
                            <ul>
                              <li>Sendiri</li>
                              <li>Kesepian</li>
                              <li>Tidak bisa diskusi</li>
                            </ul>
                          </li>

                        </ul>
                      </td>
                      <td>
                        3.1. Tanyakan pada klien tentang:<br>
                        <ul>
                          <li>Manfaat hubungan sosial.</li>
                          <li>Kerugian menarik diri.</li>
                        </ul>
                        3.2. Diskusikan bersama klien tentang manfaat berhubungan sosial dan kerugian menarik diri.<br>
                        3.3. Beri pujian terhadap kemampuan klien mengungkapkan perasaannya.
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_4"></td>
                      <td><input type="text" class="form-control" name="nodx_4"></td>
                      <td><input type="text" class="form-control" name="dxk_4"></td>
                      <td>
                        4. Klien dapat melaksanakan hubungan sosial secara bertahap.
                      </td>
                      <td>
                        4. Setelah <input type="text" name="k4" style="width: 6em; display: inline;" class="form-control"> x interaksi klien dapat melakukan hubungan sosial secara bertahap dengan:<br>
                        <ul>
                          <li>Perawat</li>
                          <li>Perawat lain</li>
                          <li>Klien lain</li>
                          <li>Kelompok</li>
                        </ul>
                      </td>
                      <td>
                        4.1. Observasi perilaku klien saat berhubungan sosial.<br>
                        4.2. Beri motivasi dan bantu klien untuk berkenalan / berkomunikasi dengan:<br>
                        <ul>
                          <li>Perawat lain</li>
                          <li>Klien lain</li>
                          <li>Kelompok</li>
                        </ul>
                        4.3. Libatkan klien dalam Terapi Aktivitas Kelompok Sosialisasi<br>
                        4.4. Diskusikan jadwal harian yang dapat dilakukan untuk meningkatkan kemampuan klien bersosialisasi<br>
                        4.5. Beri motivasi klien untuk melakukan kegiatan sesuai dengan jadwal yang telah dibuat.<br>
                        4.6. Beri pujian terhadap kemampuan klien memperluas pergaulannya melalui aktivitas yang dilaksanakan.<br>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_5"></td>
                      <td><input type="text" class="form-control" name="nodx_5"></td>
                      <td><input type="text" class="form-control" name="dxk_5"></td>
                      <td>
                        5. Klien mampu menjelaskan perasaannya setelah berhubungan sosial.
                      </td>
                      <td>
                        5. Setelah <input type="text" name="k5" style="width: 6em; display: inline;" class="form-control"> x interaksi klien dapat menjelaskan perasaannya setelah berhubungan sosial dengan:<br>
                        <ul>
                          <li>Orang lain</li>
                          <li>Kelompok</li>
                        </ul>
                      </td>
                      <td>
                        5.1. Diskusikan dengan klien tentang perasaannya setelah berhubungan sosial dengan:<br>
                        <ul>
                          <li>Orang lain</li>
                          <li>Kelompok</li>
                        </ul>
                        5.2. Beri pujian terhadap kemampuan klien mengungkapkan perasaannya.
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_6"></td>
                      <td><input type="text" class="form-control" name="nodx_6"></td>
                      <td><input type="text" class="form-control" name="dxk_6"></td>
                      <td>
                        6. Klien mendapat dukungan keluarga dalam memperluas hubungan sosial
                      </td>
                      <td>
                        6.1. Setelah <input type="text" name="k6" style="width: 6em; display: inline;" class="form-control"> x pertemuan keluarga dapat menjelaskan tentang:<br>
                        <ul>
                          <li>Pengertian menarik diri</li>
                          <li>Tanda dan gejala menarik diri</li>
                          <li>Penyebab dan akibat menarik diri</li>
                          <li>Cara merawat klien menarik diri</li>
                        </ul>
                        6.2. Setelah <input type="text" name="k6b" style="width: 6em; display: inline;" class="form-control"> x pertemuan keluarga dapat mempraktekkan cara merawat klien menarik diri.
                      </td>
                      <td>
                        6.1. Diskusikan pentingnya peran serta keluarga sebagai pendukung untuk mengatasi perilaku menarik diri.<br>
                        6.2. Diskusikan potensi keluarga untuk membantu klien mengatasi perilaku menarik diri<br>
                        6.3. Jelaskan pada keluarga tentang<br>
                        <ul>
                          <li>Pengertian menarik diri</li>
                          <li>Tanda dan gejala menarik diri</li>
                          <li>Penyebab dan akibat menarik diri</li>
                          <li>Cara merawat klien menarik diri</li>
                        </ul>
                        6.4. Latih keluarga cara merawat klien menarik diri.<br>
                        6.5. Tanyakan perasaan keluarga setelah mencoba cara yang dilatihkan<br>
                        6.6. Beri motivasi keluarga agar membantu klien untuk bersosialisasi<br>
                        6.7. Beri pujian kepada keluarga atas keterlibatannya merawat klien di rumah sakit.
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_7"></td>
                      <td><input type="text" class="form-control" name="nodx_7"></td>
                      <td><input type="text" class="form-control" name="dxk_7"></td>
                      <td>
                        7. Klien dapat memanfaatkan oabt dengan baik.
                      </td>
                      <td>
                        7.1. Setelah <input type="text" name="k7" style="width: 6em; display: inline;" class="form-control"> x interaksi klien menyebutkan:<br>
                        <ul>
                          <li>Manfaat minum obat</li>
                          <li>Kerugian tidak minum obat</li>
                          <li>Nama, warna, dosis, efek terapi dan efek samping obat</li>
                        </ul>
                        7.2. Setelah <input type="text" name="k7b" style="width: 6em; display: inline;" class="form-control"> x interaksi klien mendemonstrasikan penggunaan obat dengan benar<br>
                        7.3. Setelah <input type="text" name="k7c" style="width: 6em; display: inline;" class="form-control"> x interaksi klien menyebutkan akibat berhenti minum obat tanpa konsultasi dokter
                      </td>
                      <td>
                        7.1. Diskusikan dengan klien tentang manfaat dan kerugian tidak minum obat, nama, warna, dosis, cara, efek terapi dan efek samping penggunaan obat<br>
                        7.2. Pantau klien saat penggunaan obat<br>
                        7.3. Beri pujian jika klien menggunakan obat dengan benar<br>
                        7.4. Diskusikan akibat berhenti minum obat tanpa konsultasi dengan dokter<br>
                        7.5. Anjurkan klien untuk konsultasi kepada dokter/perawat jika terjadi hal-hal yang tidak diinginkan.
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