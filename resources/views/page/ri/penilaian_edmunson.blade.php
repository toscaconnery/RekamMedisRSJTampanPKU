<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.headscript')
</head>

<body>
  <section id="container" class="">
    @include('layouts.header')
    @include('layouts.sidebar')
  </section>
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> PENILAIAN RESIKO JATUH EDMUNSON</h3>
        </div>
      </div>
      @include('layouts.bio')
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Penilaian Resiko Jatuh Edmunson
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
                  <td>Penilaian Edmunson</td>
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
          <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_penilaian_edmunson">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                EDMUNSON (Jiwa)
              </header>
              <div class="panel-body">
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="status_mental">
                      <option value="4">Kesadaran baik/orientasi baik setiap saat </option>
                      <option value="12">Agitasi/Ansietas</option>
                      <option value="13">Kadang-kadang bingung</option>
                      <option value="14">Bingung/Disorientasi</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">ELIMINASI</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="eliminasi">
                      <option value="8">Mandiri dan mampi mengontrol BAB/BAK</option>
                      <option value="12">Dower Catheter/Colostomy</option>
                      <option value="10">Eliminasi dengan bantuan</option>
                      <option value="12">Gangguan eliminasi (Inkontinensia/Nokturia/Frekwensi)</option>
                      <option value="12">Inkontinesia tetapi mampu untuk mobilisasi</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">PENGOBATAN</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="pengobatan">
                      <option value="10">Tanpa obat-obatan</option>
                      <option value="10">Obat-obatan jantung</option>
                      <option value="8">Obat-obat psikotropika (termasuk Benzodiazepine dan Antidepresan)</option>
                      <option value="12">Mendapat tambahan obat-obatan dan/atau obat-obat PRN (psikiatri, antinyeri) yang diberikan dalam 24 jam terakhir</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSA</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="diagnosa">
                      <option value="10">Bipolar/ Gangguan Schizoaffective</option>
                      <option value="8">Penggunaan Obat-obatan terlarang/ketergantungan alkohol</option>
                      <option value="10">Gangguan Depresi Mayor</option>
                      <option value="12">Dimensia/ Delirium</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">AMBULASI /KESEIMBANGAN </label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="ambulasi">
                      <option value="7">Mandiri/Keseimbangan Baik/Immobilisasi</option>
                      <option value="8">Dengan Alat Bantu (Kursi roda, walker,dll)</option>
                      <option value="10">Vertigo/kelemahan</option>
                      <option value="8">Goyah/membutuhkan mantuan dan menyadari kemampuan</option>
                      <option value="15">Goyah tapi lupa keterbatasan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">NUTRISI</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="nutrisi">
                      <option value="12">Mengkonsumsi sedikit makanan atau minuman  dalam 24 jam terakhir</option>
                      <option value="0">Tidak ada kelainan dengan nafsu makan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">GANGGUAN POLA TIDUR</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="gangguan_pola_tidur">
                      <option value="8">Tidak ada gangguan tidur</option>
                      <option value="12">Gangguan pola tidur yang dilaporkan oleh pasien, keluarga atau petugas</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                  <div class="col-lg-7">
                    <select class="form-control m-bot15" name="riwayat_jatuh">
                      <option value="8">Tidak ada riwayat jatuh</option>
                      <option value="12">Ada riwayat jatuh dalam 3 bulan terakhir</option>
                    </select>
                  </div>
                </div>
              </div>
            </section>
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