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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>RENCANA TINDAKAN KEPERAWATAN KLIEN DENGAN DEFISIT PERAWATAN DIRI</h3>
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
                  <td>Rencana Rencana Tindakan Keperawatan Klien Dengan Defisit Perawatan Diri</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_rencana_klien_5">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_rencana_klien_5_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_rencana_klien_5_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_rencanaklien5_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal" method="post" action="ri_rencana_klien_5_edit">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Rencana Tindakan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Pengkajian</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pengkajian" value="{{$tanggal_pengkajian}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam Pengkajian</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam_pengkajian" value="{{$jam_pengkajian}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ruangan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="ruangan" value="{{$ruangan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosa Medis</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="diagnosa_medis" value="{{$diagnosa_medis}}">
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
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_1" value="{{$tanggal_1}}"></td>
                      <td><input type="text" class="form-control" name="nodx_1" value="{{$nodx_1}}"></td>
                      <td>
                        <input type="text" class="form-control" name="dxk_1" value="{{$dxk_1}}"><br>
                        b.d. defisit perawatan
                      </td>
                      <td>
                        TUM: <br>
                        <input type="text" class="form-control" name="t1" value="{{$t1}}">
                        TUK: <br>
                        <input type="text" class="form-control" name="t1b" value="{{$t1b}}">
                        1. Klien dapat membina hubungan saling percaya dengan perawat
                      </td>
                      <td>
                        1. Dalam <input type="text" name="k1" value="{{$k1}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien menunjukkan tanda-tanda percaya kepada perawat:<br>
                        <ul>
                          <li>Waja cerah, tersenyum</li>
                          <li>Mau berkenalan</li>
                          <li>Ada kontak mata</li>
                          <li>Menerima kehadiran perawat</li>
                          <li>Bersedia menceritakan perasaannya</li>
                        </ul> 
                      </td>
                      <td>
                        1. Bina hubungan saling percaya :<br>
                        <ul>
                          <li>Beri salam setiap berinteraksi</li>
                          <li>Perkenalkan nama, nama panggilan perawat dan tujuan perawat berkenalan</li>
                          <li>Tanyakan nama dan panggilan kesukaan klien</li>
                          <li>Tunjukkan sikap jujur dan menepati janji setiap kali berinteraksi</li>
                          <li>Tunjukkan perasaan dan masalah yang dihadapi klien</li>
                          <li>Tanyakan perasaan dan masalah yang dihadapi klien</li>
                          <li>Buat kontrak interaksi yang jelas</li>
                          <li>Dengarkan ungkapan perasaan klien dengan empati</li>
                          <li>Penuhi kebutuhan dasar klien</li>
                        </ul>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_2" value="{{$tanggal_2}}"></td>
                      <td><input type="text" class="form-control" name="nodx_2" value="{{$nodx_2}}"></td>
                      <td><input type="text" class="form-control" name="dxk_2" value="{{$dxk_2}}"></td>
                      <td>
                        2. Klien mengetahui pentingnya perawatan diri
                      </td>
                      <td>
                        2. Dalam <input type="text" name="k2" value="{{$k2}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien menyebutkan:<br>
                        <ul>
                          <li>Penyebab tidak merawat diri</li>
                          <li>Manfaat menjaga perawatan diri</li>
                          <li>Tanda-tanda bersih dan rapi</li>
                          <li>Gangguan yang dialami jika perawatan diri tidak diperhatikan</li>
                        </ul>
                      </td>
                      <td>
                        2. Diskusikan dengan klien:<br>
                        <ul>
                          <li>Penyebab klien tidak merawat diri</li>
                          <li>Manfaat menjaga perawatan diri untuk keadaan fisik, mental, dan sosial</li>
                          <li>Tanda-tanda perawatan diri yang baik</li>
                          <li>Penyakit atau gangguan kesehatan yang bisa dialami oleh klien bila perawatan diri tidak adekuat</li>
                        </ul>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_3" value="{{$tanggal_3}}"></td>
                      <td><input type="text" class="form-control" name="nodx_3" value="{{$nodx_3}}"></td>
                      <td><input type="text" class="form-control" name="dxk_3" value="{{$dxk_3}}"></td>
                      <td>
                        3.1. Dalam <input type="text" name="t3" value="{{$t3}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien menyebutkan frekuensi menjaga perawatan diri:<br>
                        <ul>
                          <li>Frekuensi mandi</li>
                          <li>Frekuensi gosok gigi</li>
                          <li>Frekuensi keramas</li>
                          <li>Frekuensi ganti pakaian</li>
                          <li>Frekuensi berhias</li>
                          <li>Frekuensi gunting kuku</li>
                        </ul>
                        3.2. Dalam <input type="text" name="t3b" value="{{$t3b}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien menjelaskan<br>
                        cara menjaga perawatan diri:<br>
                        <ul>
                          <li>Cara mandi</li>
                          <li>Cara gosok gigi</li>
                          <li>Cara keramas</li>
                          <li>Cara berpakaian</li>
                          <li>Cara berhias</li>
                          <li>Cara gunting kuku</li>
                        </ul>
                      </td>
                      <td class="box-top">
                        3.1. Diskusikan frekuensi menjaga perawatan diri selama ini<br>
                        <ul>
                          <li>Mandi</li>
                          <li>Gosok gigi</li>
                          <li>Keramas</li>
                          <li>Berpakaian</li>
                          <li>Berhias</li>
                          <li>Gunting kuku</li>
                        </ul>
                        <br>
                        3.2. Diskusikan cara praktek perawatan diri yang baik dan benar <br>
                        <ul>
                          <li>Mandi</li>
                          <li>Gosok gigi</li>
                          <li>Keramas</li>
                          <li>Ganti pakaian</li>
                          <li>Berhias</li>
                          <li>Gunting kuku</li>
                        </ul>
                        3.3. Berikan pujian untuk setiap respon klien yang positif
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_4" value="{{$tanggal_4}}"></td>
                      <td><input type="text" class="form-control" name="nodx_4" value="{{$nodx_4}}"></td>
                      <td><input type="text" class="form-control" name="dxk_4" value="{{$dxk_4}}"></td>
                      <td>
                        4. Klien dapat melaksanakan perawatan diri dengan bantuan perawat
                      </td>
                      <td>
                        4. Dalam <input type="text" name="k4" value="{{$k4}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien mempraktekkan perawatan diri dengan dibantu oleh perawat:<br>
                        <ul>
                          <li>Mandi</li>
                          <li>Gosok gigi</li>
                          <li>Keramas</li>
                          <li>Ganti pakaian</li>
                          <li>Berhias</li>
                          <li>Gunting kuku</li>
                        </ul>
                      </td>
                      <td>
                        4.1. Bantu klien saat perawatan diri:<br>
                        <ul>
                          <li>Mandi</li>
                          <li>Gosok gigi</li>
                          <li>Keramas</li>
                          <li>Ganti pakaian</li>
                          <li>Berhias</li>
                          <li>Gunting kuku</li>
                        </ul>
                        4.2. Beri pujian setelah klien selesai melaksanakan perawatan diri
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_5" value="{{$tanggal_5}}"></td>
                      <td><input type="text" class="form-control" name="nodx_5" value="{{$nodx_5}}"></td>
                      <td><input type="text" class="form-control" name="dxk_5" value="{{$dxk_5}}"></td>
                      <td>
                        5. Klien dapat melaksanakan perawatan diri secara mandiri
                      </td>
                      <td>
                        5. Dalam <input type="text" name="k5" value="{{$k5}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien melaksanakan praktek perawatan diri secara mandiri:<br>
                        <ul>
                          <li>Mandi 2 X sehari</li>
                          <li>Gosok gigi sehabis makan</li>
                          <li>Keramas 2 X seminggu</li>
                          <li>Ganti pakaian 1 X sehari</li>
                          <li>Berhias sehabis mandi</li>
                          <li>Gunting kuku setelah mulai panjang</li>
                        </ul>
                      </td>
                      <td>
                        5.1. Pantau klien dalam melaksanakan perawatan diri:<br>
                        <ul>
                          <li>Mandi</li>
                          <li>Gosok gigi</li>
                          <li>Keramas</li>
                          <li>Ganti pakaian</li>
                          <li>Berhias</li>
                          <li>Gunting kuku</li>
                        </ul>
                        5.2. Beri pujian saat klien melaksanakan perawatan diri secara mandiri
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_6" value="{{$tanggal_6}}"></td>
                      <td><input type="text" class="form-control" name="nodx_6" value="{{$nodx_6}}"></td>
                      <td><input type="text" class="form-control" name="dxk_6" value="{{$dxk_6}}"></td>
                      <td>
                        6. Klien mendapatkan dukungan keluarga untuk meningkatkan perawatan diri
                      </td>
                      <td>
                        6.1. Dalam <input type="text" name="k6" value="{{$k6}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi keluarga menjelaskan cara-cara membantu klien dalam memenuhi kebutuhan perawatan dirinya<br>
                        <br>
                        6.2. Dalam <input type="text" name="k6b" value="{{$k6b}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi keluarga menyiapkan sarana perawatan diri klien: sabun mandi, pasta gigi, sikat gigi, shampoo, handuk, pakaian bersih, dan alat berhias<br>
                        <br>
                        6.3. Keluarga mempraktekkan perawatan diri pada klien
                      </td>
                      <td>
                        6.1. Diskusikan dengan keluarga:<br>
                        <ul>
                          <li>Penyebab klien tidak melaksanakan perawatan diri</li>
                          <li>Tindakan yang telah dilakukan klien selama di rumah sakit dalam menjaga perawatan diri dan kemajuan yang telah dialami oleh klien</li>
                          <li>Dukungan yang bisa diberikan oleh keluarga untuk meningkatkan kemampuan klien dalam perawatan diri</li>
                        </ul>

                        <br>
                        6.2. Diskusikan dengan keluarga tentang:<br>
                        <ul>
                          <li>Saranan yang diperlukan untuk menjaga perawatan diri klien</li>
                          <li>Anjurkan kepada keluarga menyiapkan sarana tersebut</li>
                        </ul>

                        <br>
                        6.3. Diskusikan dengan keluarga hal-hal yang perlu dilakukan keluarga dalam perawatan diri:<br>
                        <ul>
                          <li>Anjurkan keluarga untuk mempraktekkan perawatan diri (mandi, gosok, gigi, keramas, ganti baju, berhias dan guntung kuku)</li>
                          <li>Ingatkan klien waktu mandi, gosok gigi, keramas, ganti baju, berhias, dan gunting kuku.</li>
                          <li>Bantu jika klien mengalami hambatan dalam perawatan diri</li>
                          <li>Berikan pujian atas keberhasilan klien</li>
                        </ul>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_7" value="{{$tanggal_7}}"></td>
                      <td><input type="text" class="form-control" name="nodx_7" value="{{$nodx_7}}"></td>
                      <td><input type="text" class="form-control" name="dxk_7" value="{{$dxk_7}}"></td>
                      <td>
                        7. Klien mendapat dukungan keluarga.
                      </td>
                      <td>
                        7.1. Setelah <input type="text" name="k7" value="{{$k7}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi keluarga dapat menjelaskan tentang:<br>
                        <ul>
                          <li>Pengertian waham</li>
                          <li>Tanda dan gejala waham</li>
                          <li>Penyebab dan akibat waham</li>
                          <li>Cara merawat klien waham</li>
                        </ul>
                        7.2. Setelah <input type="text" name="k7b" value="{{$k7b}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi keluarga dapat mempraktekkan cara merawat klien waham.
                      </td>
                      <td>
                        7.1. Diskusikan pentingnya peran serta keluarga sebagai pendukung untuk mengatasi waham.<br>
                        7.2. Diskusikan potensi keluarga untuk membantu klien mengatasi waham.<br>
                        7.3. Jelaskan pada keluarga tentang: <br>
                        <ul>
                          <li>Pengertian waham</li>
                          <li>Tanda dan gejala waham</li>
                          <li>Penyebab dan akibat waham</li>
                          <li>Cara merawat klien waham</li>
                        </ul>
                        7.4. Latih keluarga cara merawat waham.<br>
                        7.5. Tanyakan perasaan keluarga setelah mencoba cara yang dilatihkan<br>
                        7.6. Beri pujian kepada keluarga atas keterlibatannya merawat klien di rumah sakit.
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_8" value="{{$tanggal_8}}"></td>
                      <td><input type="text" class="form-control" name="nodx_8" value="{{$nodx_8}}"></td>
                      <td><input type="text" class="form-control" name="dxk_8" value="{{$dxk_8}}"></td>
                      <td>
                        8. Klien dapat memanfaatkan obat dengan baik
                      </td>
                      <td>
                        8.1. Setelah <input type="text" name="k8" value="{{$k8}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien menyebutkan:<br>
                        <ul>
                          <li>Manfaat minum obat</li>
                          <li>Kerugian tidak minum obat</li>
                          <li>Nama, warna, dosis, efek terapi dan efek samping obat</li>
                        </ul>
                        8.2. Setelah <input type="text" name="k8b" value="{{$k8b}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien mendemonstrasikan penggunaan obat dengan benar<br>
                        8.3. Setelah <input type="text" name="k8c" value="{{$k8c}}" style="width: 6em; display: inline;" class="form-control"> kali interaksi klien menyebutkan akibat berhenti minum obat tanpa konsultasi dokter
                      </td>
                      <td>
                        8.1. Diskusikan dengan klien tentang manfaat dan kerugian tidak minum obat, nama, warna, dosis, cara, efek terapi dan efek samping penggunaan obat
                        8.2. Pantau klien saat penggunaan obat<br>
                        <ul>
                          <li>Beri pujian jika klien menggunakan obat dengan benar</li>
                        </ul>
                        8.3. Diskusikan akibat berhenti minum obat tanpa konsultasi dengan dokter<br>
                        <ul>
                          <li>Anjurkan klien untuk konsultasi kepada dokter/perawat jika terjadi hal-hal yang tidak diinginkan.</li>
                        </ul>
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