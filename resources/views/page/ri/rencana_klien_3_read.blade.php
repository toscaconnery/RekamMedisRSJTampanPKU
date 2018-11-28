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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> RENCANA TINDAKAN KEPERAWATAN KLIEN DENGAN POLA PIKIR : WAHAM</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Rencana Tindakan Keperawatan Klien Dengan Pola Pikir : WAHAM
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
                  <td>Rencana Tindakan Keperawatan Klien Dengan Pola Pikir : WAHAM</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_rencanaklien3_pdf">PDF</a>
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
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pengkajian" value="{{$tanggal_pengkajian}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam Pengkajian</label>
                  <div class="col-sm-2">
                    <input type="time" disabled class="form-control" name="jam_pengkajian" value="{{$jam_pengkajian}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ruangan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="ruangan" value="{{$ruangan}}">
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
                        b.d. Waham
                      </td>
                      <td>
                        TUM: <br>
                        <input type="text" disabled class="form-control" name="t1" value="{{$t1}}">
                        TUK:<br>
                        1. Klien dapat membina hubungan saling percaya dengan perawat
                      </td>
                      <td>
                        1.1. Setelah <input type="text" disabled name="k1" value="{{$k1}}" style="width: 6em; display: inline;" class="form-control"> x interaksi klien:<br>
                        <ul>
                          <li>Mau menerima kehadiran perawat di sampingnya.</li>
                          <li>Mengatakan mau menerima bantuan perawat</li>
                          <li>Tidak menunjukkan tanda-tanda curiga</li>
                          <li>Mengijinkan duduk di samping</li>
                        </ul>
                      </td>
                      <td>
                        1.1. Bina hubungan saling percaya dengan klien:<br>
                        <ul>
                          <li>Beri salam</li>
                          <li>Perkenalkan diri, tanyakan nama serta nama panggilan yang disukai.</li>
                          <li>Jelaskan tujuan interaksi</li>
                          <li>Yakinkan klien dalam keadaan aman dan perawat siap menolong dan mendampinginya</li>
                          <li>Yakinkan bahwa kerahasiaan klien akan tetap terjaga</li>
                          <li>Tunjukkan sikap terbuka dan jujur</li>
                          <li>Perhatikan kebutuhan dasar dan beri bantuan untuk memenuhinya</li>
                        </ul>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_2" value="{{$tanggal_2}}"></td>
                      <td><input type="text" disabled class="form-control" name="nodx_2" value="{{$nodx_2}}"></td>
                      <td><input type="text" disabled class="form-control" name="dxk_2" value="{{$dxk_2}}"></td>
                      <td>
                        2. Klien dapat mengidentifikasi perasaan yang muncul secara berulang dalam pikiran klien.
                      </td>
                      <td>
                        2.1. Setelah <input type="text" disabled name="k2" value="{{$k2}}" style="width: 6em; display: inline;" class="form-control"> x interaksi klien: <br>
                        <ul>
                          <li>Klien menceritakan ide-ide dan perasaan yang muncul secara berulang dalam pikirannya.</li>
                        </ul>
                      </td>
                      <td>
                        2. Bantu klien untuk mengungkapkan perasaan dan pikirannya.<br>
                        <ul>
                          <li>Diskusikan dengan klien pengalaman yag dialami selama ini termasuk hubungan dengan orang yang berarti, lingkungan kerja, sekolah, dsb.</li>
                          <li>Dengarkan pernyataan klien dengan empati tanpa mendukung/ menentang pernyataan wahamnya.</li>
                          <li>Katakan perawat dapat memahami apa yang diceritakan klien.</li>
                        </ul>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align:center;"><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_3" value="{{$tanggal_3}}"></td>
                      <td><input type="text" disabled class="form-control" name="nodx_3" value="{{$nodx_3}}"></td>
                      <td><input type="text" disabled class="form-control" name="dxk_3" value="{{$dxk_3}}"></td>
                      <td>
                        3. Klien dapat mengidentifikasi stressor/ pencetus wahamnya. (Triggers Factor)
                      </td>
                      <td>
                        3. Setelah <input type="text" disabled name="k3" value="{{$k3}}" style="width: 6em; display: inline;" class="form-control"> x interaksi klien:<br>
                        <ul>
                          <li>Dapat menyebutkan kejadian-kejadian sesuai dengan urutan waktu serta harapan / kebutuhan dasar yang tidak terpenuhi seperti : Harga diri, rasa aman dsb.</li>
                          <li>Dapat menyebutkan hubungan antara kejadian traumatis/kebutuhan tidak terpenuhi dengan wahamnya.</li>
                        </ul> 
                      </td>
                      <td>
                        3. Bantu klien untuk mengidentifikasi kebutuhan yang tidak terpenuhi serta kejadian yang menjadi factor pencetus wahamnya.<br>
                        <ul>
                          <li>Diskusikan dengan klien tentang kejadian-kejadian traumatik yang menimbulkan rasa takut, ansietas maupun perasaan tidak dihargai.</li>
                          <li>Diskusikan kebutuhan/harapan yang belum terpenuhi.</li>
                          <li>Diskusikan dengan klien cara-cara mengatasi kebutuhan yang tidak terpenuhi dan kejadian yang traumatis.</li>
                        </ul>
                      </td>
                    </tr>

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