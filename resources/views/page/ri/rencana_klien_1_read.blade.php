<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.headscript')
  <link href="{{url('')}}/admin_bootstrap/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> RENCANA TINDAKAN KEPERAWATAN KLIEN DENGAN PERILAKU KEKERASAN</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Rencana Tindakan Keperawatan Klien Dengan Perilaku Kekerasan
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
                  <td>Rencana Tindakan Keperawatan Klien Dengan Perilaku Kekerasan</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_rencanaklien1_pdf">PDF</a>
                      <a class="btn btn-success" href="#">EDIT</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <form class="form-horizontal">
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Rencana Tindakan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Pengkajian</label>
                  <div class="col-sm-2">
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pengkajian" required value="{{$tanggal_pengkajian}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam Pengkajian</label>
                  <div class="col-sm-2">
                    <input type="time" disabled class="form-control" name="jam_pengkajian" required value="{{$jam_pengkajian}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ruangan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="ruangan" required value="{{$ruangan}}">
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
                        b.d. Perilaku Kekerasan
                      </td>
                      <td>
                        TUM: <br>
                        <input type="text" disabled class="form-control" name="t1" value="{{$t1}}">
                        TUK:<br>
                        1. Klien dapat membina hubungan saling percaya
                      </td>
                      <td>
                        1. Setelah <input type="text" disabled name="k1" style="width: 6em; display: inline;" class="form-control" value="{{$k1}}"> x pertemuan klien menunjukkan tanda-tanda percaya kepada perawat:<br>
                        <ul>
                          <li>Wajah cerah, tersenyum</li>
                          <li>Mau berkenalan</li>
                          <li>Ada kontak mata</li>
                          <li>Bersedia menceritakan perasaan</li>
                        </ul>
                      </td>
                      <td>
                        1. Bina hubungan saling percaya dengan :
                        <ul>
                          <li>Beri salam setiap berinteraksi</li>
                          <li>Perkenalkan nama, nama panggilan perawat dan tujuan perawat berinteraksi</li>
                          <li>Tanyakan dan panggil nama kesukaan klien</li>
                          <li>Tunjukkan sikap empati, jujur dan menepati janji setiap kali berinteraksi</li>
                          <li>Tanyakan perasaan klien dan masalah yang dihadapi klien</li>
                          <li>Buat kontrak interaksi yang jelas</li>
                          <li>Dengarkan dengan penuh perhatian ungkapa perasaan klien</li>
                        </ul>
                      </td>
                    </tr>


                    <tr>
                      <td style="text-align:center;"><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_2" value="{{$tanggal_2}}"></td>
                      <td><input type="text" disabled class="form-control" name="nodx_2" value="{{$nodx_2}}"></td>
                      <td><input type="text" disabled class="form-control" name="dxk_2" value="{{$dxk_2}}"></td>
                      <td>
                        2. Klien dapat mengidentifikasi penyebab perilaku kekerasan yang dilakukannya
                      </td>
                      <td>
                        2. Setelah <input type="text" disabled name="k2" style="width: 6em; display: inline;" class="form-control" value="{{$k2}}"> x pertemuan klien menceritakan penyebab perilaku kekerasan yang dilakukannya:<br>
                        <ul>
                          <li>Menceritakan penyebab perasaan jengkel/kesal baik dari diri sendiri maupun lingkungannya</li>
                        </ul>
                      </td>
                      <td>
                        2. Bantu klien mengungkapkan perasaan marahnya :<br>
                        <ul>
                          <li>Motivasi klien untuk menceritakan penyebab rasa kesal atau jengkelnya</li>
                          <li>Dengarkan tanpa menyela atau memberi penilaian setiap ungkapan perasaan klien</li>
                        </ul> 
                      </td>
                    </tr>


                    <tr>
                      <td style="text-align:center;"><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_3" value="{{$tanggal_3}}"></td>
                      <td><input type="text" disabled class="form-control" name="nodx_3" value="{{$nodx_3}}"></td>
                      <td><input type="text" disabled class="form-control" name="dxk_3" value="{{$dxk_3}}"></td>
                      <td>
                        3. Klien dapat mengidentifikasi tanda-tanda perilaku kekerasan
                      </td>
                      <td>
                        3. Setelah <input type="text" disabled name="k3" style="width: 6em; display: inline;" class="form-control" value="{{$k3}}"> x pertemuan klien menceritakan tanda-tanda saat terjadi perilaku kekerasan<br>
                        <ul>
                          <li>Tanda fisik : mata merah, tangan mengepal, ekspresi tegang, dan lain-lain.</li>
                          <li>Tanda emosional : perasaan marah, jengkel, bicara kasar.</li>
                          <li>Tanda sosiak : bermusuhan yang dialami terjadi perilaku kekerasan</li>
                        </ul>
                      </td>
                      <td>
                        3. Bantu klien mengungkapkan tanda-tanda perilaku kekerasan yang dialaminya:<br>
                        <ul>
                          <li>Motivasi klien menceritakan kondisi fisik (tanda-tanda fisik) saat perilaku kekerasan terjadi</li>
                          <li>Motivasi klien menceritakan kondisi emosinya (tanda-tanda emosional) saat terjadi perilaku kekerasan</li>
                          <li>Motivasi klien menceritakan kondisi hubungan dengan orang lain (tanda-tanda sosial) saat terjadi perilaku kekerasan.</li>
                        </ul>
                      </td>
                    </tr>


                    <tr>
                      <td style="text-align:center;"><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_4" value="{{$tanggal_4}}"></td>
                      <td><input type="text" disabled class="form-control" name="nodx_4" value="{{$nodx_4}}"></td>
                      <td><input type="text" disabled class="form-control" name="dxk_4" value="{{$dxk_4}}"></td>
                      <td>
                        4. Klien dapat mengidentifikasi jenis perilaku kekerasan yang pernah dilakukannya
                      </td>
                      <td>
                        4. Setelah <input type="text" disabled name="k4" style="width: 6em; display: inline;" class="form-control" value="{{$k4}}"> x pertemuan klien menjelaskan:<br>
                        <ul>
                          <li>Jenis-jenis ekspresi kemarahan yang selama ini dilakukannya</li>
                          <li>Perasaannya saat melakukan kekerasan</li>
                          <li>Efektivitas cara yang dipakai dalam menyelesaikan masalah</li>
                        </ul> 
                      </td>
                      <td>
                        4. Diskusikan dengan klien perilaku kekerasan yang dilakukannya selama ini:<br>
                        <ul>
                          <li>Motivasi klien menceritakan jenis-jenis tindak kekerasan yang selama ini pernah dilakukannya.</li>
                          <li>Motivasi klien menceritakan perasaan klien setelah tindak kekerasan tersebut terjadi</li>
                          <li>Diskusikan apakah dengan tindak kekerasan yang dilakukannya masalah yang dialami teratasi.</li>
                        </ul> 
                      </td>
                    </tr>


                    <tr>
                      <td style="text-align:center;"><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_5" value="{{$tanggal_5}}"></td>
                      <td><input type="text" disabled class="form-control" name="nodx_5" value="{{$nodx_5}}"></td>
                      <td><input type="text" disabled class="form-control" name="dxk_5" value="{{$dxk_5}}"></td>
                      <td>
                        5. Klien dapat mengidentifikasi akibat perilaku kekerasan
                      </td>
                      <td>
                        5. Setelah <input type="text" disabled name="k5" value="{{$k5}}" style="width: 6em; display: inline;" class="form-control"> x pertemuan klien menjelaskan akibat tindak kekerasan yang dilakukannya<br>
                        <ul>
                          <li>Diri sendiri: luka, dijauhi teman, dll</li>
                          <li>Orang lain/keluarga: luka, tersinggung, ketakutan, dll</li>
                          <li>Lingkungan: barang atau benda rusak dll</li>
                        </ul> 
                      </td>
                      <td>
                        5. Diskusikan dengan klien akibat negatif (kerugian) cara yang dilakukan pada:<br>
                        <ul>
                          <li>Diri sendiri</li>
                          <li>Orang lain/keluarga</li>
                          <li>Lingkungan</li>
                        </ul>
                      </td>
                    </tr>


                    <tr>
                      <td style="text-align:center;"><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_6" value="{{$tanggal_6}}"></td>
                      <td><input type="text" disabled class="form-control" name="nodx_6" value="{{$nodx_6}}"></td>
                      <td><input type="text" disabled class="form-control" name="dxk_6" value="{{$dxk_6}}"></td>
                      <td>
                        6. Klien dapat mengidentifikasi cara konstruktif dalam mengungkapkan kemarahan
                      </td>
                      <td>
                        6. Setelah <input type="text" disabled name="k6" value="{{$k6}}" style="width: 6em; display: inline;" class="form-control"> x pertemuan klien :<br>
                        <ul>
                          <li>Menjelaskan cara-cara sehat mengungkapkan marah</li>
                        </ul>
                      </td>
                      <td>
                        6. Diskusikan dengan klien <br> 
                        <ul>
                          <li>Apabila klien mau mempelajari cara baru mengungkapkan marah yang sehat</li>
                          <li>Jelaskan berbagai alternatif pilihan untuk mengungkapkan marah selain perilaku kekerasan yang diketahui klien.</li>
                          <li>
                            Jelaskan cara-cara sehat untuk mengungkapkan marah:
                            <ul>
                              <li>Cara fisik: nafas dalam, pukul bantal atau kasur, olah raga.</li>
                              <li>Verbal: mengungkapkan bahwa dirinya sedang kesal kepada orang lain.</li>
                              <li>Sosial: latihan asertif dengan orang lain.</li>
                              <li>Spiritual: sembahyang/doa, zikir, meditasi, dsb sesuai keyakinan agamanya masing-masing</li>
                            </ul>
                          </li>
                        </ul>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_7" value="{{$tanggal_7}}"></td>
                      <td><input type="text" disabled class="form-control" name="nodx_7" value="{{$nodx_7}}"></td>
                      <td><input type="text" disabled class="form-control" name="dxk_7" value="{{$dxk_7}}"></td>
                      <td>
                        7. Klien dapat mendemonstrasikan cara mengontrol perilaku kekerasan
                      </td>
                      <td>
                        7. Setelah <input type="text" disabled name="k7" value="{{$k7}}" style="width: 6em; display: inline;" class="form-control"> x pertemuan klien memperagakan cara mengontrol perilaku kekerasan:<br>
                        <ul>
                          <li>Fisik: tarik nafas dalam, memukul bantal/kasur</li>
                          <li>Verbal: mengungkapkan perasaan kesal/jengkel pada orang lain tanpa menyakiti</li>
                          <li>Spiritual: zikir/doa, meditasi sesua agamanya</li>
                        </ul> 
                      </td>
                      <td>
                        7.1. Diskusikan cara yang mungkin dipilih dan dianjurkan klien memilih cara yang mungkin untuk mengunkapkan kemarahan.<br>
                        7.2. Ltih klien memperagakan cara yang dipilih:<br>
                        <ul>
                          <li>Peragakan cara melaksanakan cara yang dipilih</li>
                          <li>Jelaskan manfaat cara tersebut</li>
                          <li>Anjurkan klien menirukan peragaan yang sudah dilakukan</li>
                          <li>Beri penguatan pada klien, perbaiki cara yang masih belum sempurna</li>
                        </ul> 
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_8" value="{{$tanggal_8}}"></td>
                      <td><input type="text" disabled class="form-control" name="nodx_8" value="{{$nodx_8}}"></td>
                      <td><input type="text" disabled class="form-control" name="dxk_8" value="{{$dxk_8}}"></td>
                      <td>
                        8. Klien mendapat dukungan keluarga untuk mengontrol perilaku kekerasan
                      </td>
                      <td>
                        8. Setelah  <input type="text" disabled name="k8" value="{{$k8}}" style="width: 6em; display: inline;" class="form-control"> x pertemuan keluarga:<br>
                        <ul>
                          <li>Menjelaskan cara merawat klien dengan perilaku kekerasan</li>
                          <li>Mengungkapkan rasa puas dalam merawat klien</li>
                        </ul> 
                      </td>
                      <td>
                        8.1. Diskusikan pentingnya peran serta keluarga sebagai pendukung klien untuk mengatasi perilaku kekerasan.<br>
                        8.2. Diskusikan potensi keluarga untuk membantu klien mengatasi perilaku kekerasan<br>
                        8.3. Jelaskan pengertian, penyebab, akibat dan cara merawat klien perilaku kekerasan yang dapat dilaksanakan oleh keluarga.<br>
                        8.4. Peragakan cara merawat klien (menangani perilaku kekerasan)<br>
                        8.5. Beri kesempatan keluarga untuk memperagakan ulang
                        8.6. Beri pujian kepada keluarga setelah peragaan<br>
                        8.7. Tanyakan perasaan keluarga setelah mencoba cara yang dilatihkan
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_9" value="{{$tanggal_9}}"></td>
                      <td><input type="text" disabled class="form-control" name="nodx_9" value="{{$nodx_9}}"></td>
                      <td><input type="text" disabled class="form-control" name="dxk_9" value="{{$dxk_9}}"></td>
                      <td>
                        9. Klien menggunakan obat sesuai program yang telah ditetapkan
                      </td>
                      <td>
                        9.1. Setelah <input type="text" disabled name="k9" value="{{$k9}}" style="width: 6em; display: inline;" class="form-control"> x pertemuan klien menjelaskan:<br>
                        <ul>
                          <li>Manfaat minum obat</li>
                          <li>Kerugian tidak minum obat</li>
                          <li>Nama obat</li>
                          <li>Bentuk dan warna obat</li>
                          <li>Dosis yang diberikan kepadanya</li>
                          <li>Waktu pemakaian</li>
                          <li>Cara pemakaian</li>
                          <li>Efek yang dirasakan</li>
                        </ul><br>
                        9.2. Setelah <input type="text" disabled name="k10" value="{{$k10}}" style="width: 6em; display: inline;" class="form-control"> x pertemuan klien menggunakan obat sesuai program 
                      </td>
                      <td>
                        9.1. Jelaskan manfaat menggunakan obat secara teratur dan kerugian jika tidak menggunakan obat<br>
                        9.2. Jelaskan kepada klien:<br>
                        <ul>
                          <li>Jenis obat (nama, warna dan bentuk obat)</li>
                          <li>Dosis yang tepat untuk klien</li>
                          <li>Waktu pemakaian</li>
                          <li>Cara pemakaian</li>
                          <li>Efek yang akan dirasakan klien</li>
                        </ul>
                        9.3. Anjurkan klien:<br>
                        <ul>
                          <li>Minta dan menggunakan obat tepat waktu</li>
                          <li>Lapor ke perawat/dokter jika mengalami efek yang tidak biasa</li>
                          <li>Beri pujian terhadap kedisiplinan klien menggunakan obat</li>
                        </ul>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
          </div>
        </div>
      </form>

    </div>
  </div>
</section>

@include('layouts.tailscript')
</body>


<html>