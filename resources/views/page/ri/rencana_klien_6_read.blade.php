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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> RENCANA TINDAKAN KEPERAWATAN KLIEN DENGAN GANGGUAN PERSEPSI SENSORI : HALUSINASI</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Rencana Tindakan Keperawatan Klien Dengan Gangguan Persepsi Sensori : Halusinasi
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
                  <td>Rencana Tindakan Keperawatan Klien Dengan Gangguan Persepsi Sensori : Halusinasi</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_rencanaklien6_pdf">PDF</a>
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
          <form class="form-horizontal">
            <section class="panel">
              <header class="panel-heading">
                Rencana Tindakan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Pengkajian</label>
                  <div class="col-sm-2">
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pengkajian" value="{{$tanggal_pengkajian}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam Pengkajian</label>
                  <div class="col-sm-2">
                    <input type="time" disabled class="form-control" name="jam_pengkajian" value="{{$jam_pengkajian}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ruangan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="ruangan" value="{{$ruangan}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosa Medis</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="diagnosa_medis" value="{{$diagnosa_medis}}">
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
                      <td style="text-align:center;"><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_1" value="{{$tanggal_1}}"></td>
                      <td><input type="text" disabled class="form-control" name="nodx_1" value="{{$nodx_1}}"></td>
                      <td>
                        <input type="text" disabled class="form-control" name="dxk_1" value="{{$dxk_1}}"><br>
                        b.d<br>
                        halusinasi(lihat/dengar/ penghidu/raba/kecap)
                      </td>
                      <td>
                        TUM: <br>
                        <input type="text" disabled class="form-control" name="t1" value="{{$t1}}">
                        TUK 1:<br>
                        Klien dapat membina hubungan saling percaya
                      </td>
                      <td>
                        1. Setelah <input type="text" disabled name="k1" value="{{$k1}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien menunjukkan tanda-tanda percaya kepada perawat:
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
                      <td style="text-align:center;"><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_2" value="{{$tanggal_2}}"></td>
                      <td><input type="text" disabled class="form-control" name="nodx_2" value="{{$nodx_2}}"></td>
                      <td><input type="text" disabled class="form-control" name="dxk_2" value="{{$dxk_2}}"></td>
                      <td>
                        TUK 2:<br>
                        Klien dapat mengenal halusinasinya
                      </td>
                      <td>
                        2. Setelah <input type="text" disabled name="k2" value="{{$k2}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien menyebutkan:<br>
                        <ul>
                          <li>Isi</li>
                          <li>Waktu</li>
                          <li>Frekuensi</li>
                          <li>Situasi dan kondisi yang menimbulkan halusinasi</li>
                        </ul>
                      </td>
                      <td>
                        2.1. Adakan kontak sering dan singkat secara bertahap<br>
                        2.2. Observasi tingkah laku klien terkait dengan halusinasinya (* dengar/ lihat/ penghidu/ raba/ kecap), jika menemukan klien yang sedang halusinasi:<br>
                        <ul>
                          <li>Tanyakan apakah klien mengalami sesuatu (halusinasi dengar/ lihat/ penghidu/ raba/ kecap)</li>
                          <li>Jika klien menjawab ya, tanyakan apa yang sedang dialaminya</li>
                          <li>Katakan bahwa <b>perawat percaya</b> klien mengalami hal tersebut, namun perawat sendiri tidak mengalaminya ( dengan nada bersahabat tanpa menuduh atau menghakimi)</li>
                          <li>Katakan bahwa ada klien lain yang mengalami hal yang sama.</li>
                          <li>Katakan bahwa ada klien laiin yang mengalami hal yang sama.</li>
                        </ul>
                        Jika klien tidak sedang berhalusinasi klarifikasi tentang adanya pengalaman halusinasi, diskusikan dengan klien:<br>
                        <ul>
                          <li>Isi, waktu dan frekuensi terjadinya halusinasi ( pagi, siang, sore, malam atau sering dan kadang-kadang )</li>
                          <li>Situasi dan kondisi yang menimbulkan atau tidak menimbulkan halusinasi</li>
                        </ul>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_2b" value="{{$tanggal_2b}}"></td>
                      <td><input type="text" disabled class="form-control" name="nodx_2b" value="{{$nodx_2b}}"></td>
                      <td><input type="text" disabled class="form-control" name="dxk_2b" value="{{$dxk_2b}}"></td>
                      <td></td>
                      <td>
                        2. Setelah <input type="text" disabled name="k2b" value="{{$k2b}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien menyatakan perasaan dan responnya saat mengalami halusinasi<br>
                        <ul>
                          <li>Marah</li>
                          <li>Takut</li>
                          <li>Sedih</li>
                          <li>Senang</li>
                          <li>Cemas</li>
                          <li>Jengkel</li>
                        </ul>
                      </td>
                      <td>
                        2.3. Diskusikan dengan klien apa yang dirasakan jika terjadi halusinasi dan beri kesempatan untuk mengungkapkakn perasaannya.<br>
                        2.4. Diskusikan dengan klien apa yang dilakukan untuk mengatasi perasaan tersebut.<br>
                        2.5. Diskusikan dampak yang akan dialaminya bila klien menikmati halusinasinya.
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_3" value="{{$tanggal_3}}"></td>
                      <td><input type="text" disabled class="form-control" name="nodx_3" value="{{$nodx_3}}"></td>
                      <td><input type="text" disabled class="form-control" name="dxk_3" value="{{$dxk_3}}"></td>
                      <td>
                        TUK 3:<br>
                        Klien dapat mengontrol halusinasinya
                      </td>
                      <td>
                        3.1. Setelah <input type="text" disabled name="k3" value="{{$k3}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien menyebutkan tindakan yang biasanya dilakukan untuk mengendalikan halusinasinya<br>
                        <br>
                        
                        3.2. Setelah <input type="text" disabled name="k3b" value="{{$k3b}}" style="width: 6em; display: inline;" class="form-control"> kali interkasi klien menyebutkan cara baru mengontrol halusinasi<br>
                        <br>

                        3.3. Setelah <input type="text" disabled name="k3c" value="{{$k3c}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien dapat memilih dan memperagakan cara mengatasi halusinasi (dengar/lihat/penghidu/raba/kecap)<br>
                        <br>

                        3.4. Setelah <input type="text" disabled name="k3d" value="{{$k3d}}" style="width: 6em; display: inline;" class="form-control"> kali interkasi klien melaksanakan cara yang telah dipilih untuk mengendalikan halusinasinya<br>
                        <br>

                        3.5. Setelah <input type="text" disabled name="k3e" value="{{$k3e}}" style="width: 6em; display: inline;" class="form-control"> kali pertemuan klien mengikuti terapi aktivitas kelompok
                      </td>
                      <td>
                        3.1. Identifikasi bersama klien cara atau tindakan yang dilakukan jika terjadi halusinasi (tidur, marah, menyibukkan diri dll)<br>
                        3.2. Diskusikan cara yang digunakan klien,<br>
                        <ul>
                          <li>Jika cara yang digunakan adaptif beri pujian.</li>
                          <li>Jika cara yang digunakan maladaptif diskusikan kerugian cara tersebut</li>
                        </ul>
                        3.3. Diskusikan cara baru untuk memutus/ mngontrol timbulnya halusinasi:<br>
                        <ul>
                          <li>Katakan pada diri sendiri bahwa ini tidak nyata ( "saya tidak mau dengar/ lihat/ penghidu/ raba/ kecap/ pada saat halusinasi terjadi)</li>
                          <li>Menemui orang lain (perawat/teman/anggota keluarga) untuk menceritakan tentang halusinasinya.</li>
                          <li>Membuat dan melaksanakan jadwal kegiatan sehari-hari yang telah disusun.</li>
                          <li>Meminta keluarga/ teman/ perawat menyapa jika sedang berhalusinasi</li>
                        </ul>
                        3.4. Bantu klien memilih cara yang sudan dianjurkan dan latih untuk mencobanya.<br>
                        3.5. Beri kesempattan untuk melakukan cara yang dipilih dan dilatih.<br>
                        3.6. Pantau pelaksanaan yang telah dipilih dan dilatih, jika berhasil beri pujian<br>
                        3.7. Anjurkan klien mngikuti terapi aktivitas kelompok, orientasi realita, situasi persepsi
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_4" value="{{$tanggal_4}}"></td>
                      <td><input type="text" disabled class="form-control" name="nodx_4" value="{{$nodx_4}}"></td>
                      <td><input type="text" disabled class="form-control" name="dxk_4" value="{{$dxk_4}}"></td>
                      <td>
                        TUK 4:<br>
                        Klien dapat dukukngan dari keluarga dalam mengontrol halusinasinya
                      </td>
                      <td>
                        4.1. Setelah <input type="text" disabled name="k4" value="{{$k4}}" style="width: 6em; display: inline;" class="form-control"> kali pertemuan keluarga, keluarga menyatakan setuju untuk mengikuti pertemuan dengan perawat<br>
                        <br>
                        4.2. Setelah <input type="text" disabled name="k4b" value="{{$k4b}}" style="width: 6em; display: inline;" class="form-control"> kali Interkasi keluarga menyebutkan pengertian, tanda dan gejala, proses terjadinya halusinasi dan tindakan untuk mengendalikan halusinasi
                      </td>
                      <td>
                        4.1. Buat kontrak dengan keluarga untuk pertemuan (waktu, tempat dan topik)<br>
                        4.2. Diskusikan dengan keluarga (pada saat pertemuan keluarga/ kunjungan rumah)<br>
                        <ul>
                          <li>Pengertian halusinasi</li>
                          <li>Tanda dan gejala halusinasi</li>
                          <li>Proses terjadinya halusinasi</li>
                          <li>Cara yang dapat dilakukan klien dan keluarga untuk memutus halusinasi.</li>
                          <li>Obat-obatn halusinasi</li>
                          <li>Cara merawat anggota keluarga yang halusinasi di rumah ( beri kegiatam, jangan biarkan sendiri, makan bersama, berpergian bersama, memantau obat-obatan dan cara pemberiannya untuk mengatasi halusinasi ) </li>
                          <li>Beri informasi waktu kontrol ke rumah sakit dan bagaimana cara mencari bantuan jika halusinasi tidak dapat diatasi di rumah</li>
                        </ul>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_5" value="{{$tanggal_5}}"></td>
                      <td><input type="text" disabled class="form-control" name="nodx_5" value="{{$nodx_5}}"></td>
                      <td><input type="text" disabled class="form-control" name="dxk_5" value="{{$dxk_5}}"></td>
                      <td>
                        TUK 5:<br>
                        Klien dapat memanfaatkan obat dengan baik
                      </td>
                      <td>
                        5.1. Setelah <input type="text" disabled name="k5" value="{{$k5}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien menyebutkan:<br>
                        <ul>
                          <li>Manfaat minum obat</li>
                          <li>Kerugian tidak minum obat</li>
                          <li>Nama, warna, dosis, efek terapi dan efek samping obat</li>
                        </ul>
                        5.2. Setelah <input type="text" disabled name="k5b" value="{{$k5b}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien mendemonstrasikan penggunaan obat dengan benar<br><br>
                        5.3. Setelah <input type="text" disabled name="k5c" value="{{$k5c}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien menyebutkan akibat berhenti minum obat tanpa konsultasi dokter 
                      </td>
                      <td>
                        5.1. Diskusikan dengan klien tentang manfaat dan kerugian tidak minum obat, nama, warna, dosis, cara, efek terapi dan efek samping penggunaan obat<br>
                        5.2. Pantau klien saat penggunaan obat<br>
                        5.3. Beri pujian jika klien menggunakan obat dengan benar
                        5.4. Diskusikan akibat berhenti minum obat tanpa konsultasi dengan dokter<br>
                        5.5. Anjurkan klien untuk konsultasi kepada dokter/perawat jika terjadi hal-hal yang tidak diinginkan.
                      </td>
                    </tr>d
                  </tbody>
                </table>
              </div>
            </section>
          </form>

        </div>
      </div>

      




    </div>
  </div>
</section>

@include('layouts.tailscript')
</body>


<html>