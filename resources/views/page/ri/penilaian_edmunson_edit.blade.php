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
          <form class="form-horizontal" method="post" id="register_form" action="ri_penilaian_edmunson_edit">
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
                    <select required class="form-control m-bot15" name="status_mental">
                      <option value="1" {{$status_mental == '1' ? 'selected' : ''}}>Kesadaran baik/orientasi baik setiap saat </option>
                      <option value="2" {{$status_mental == '2' ? 'selected' : ''}}>Agitasi/Ansietas</option>
                      <option value="3" {{$status_mental == '3' ? 'selected' : ''}}>Kadang-kadang bingung</option>
                      <option value="4" {{$status_mental == '4' ? 'selected' : ''}}>Bingung/Disorientasi</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">ELIMINASI</label>
                  <div class="col-lg-7">
                    <select required class="form-control m-bot15" name="eliminasi">
                      <option value="1" {{$eliminasi == '1' ? 'selected' : ''}}>Mandiri dan mampu mengontrol BAB/BAK</option>
                      <option value="2" {{$eliminasi == '2' ? 'selected' : ''}}>Dower Catheter/Colostomy</option>
                      <option value="3" {{$eliminasi == '3' ? 'selected' : ''}}>Eliminasi dengan bantuan</option>
                      <option value="4" {{$eliminasi == '4' ? 'selected' : ''}}>Gangguan eliminasi (Inkontinensia/Nokturia/Frekwensi)</option>
                      <option value="5" {{$eliminasi == '5' ? 'selected' : ''}}>Inkontinesia tetapi mampu untuk mobilisasi</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">PENGOBATAN</label>
                  <div class="col-lg-7">
                    <select required class="form-control m-bot15" name="pengobatan">
                      <option value="1" {{$pengobatan == '1' ? 'selected' : ''}}>Tanpa obat-obatan</option>
                      <option value="2" {{$pengobatan == '2' ? 'selected' : ''}}>Obat-obatan jantung</option>
                      <option value="3" {{$pengobatan == '3' ? 'selected' : ''}}>Obat-obat psikotropika (termasuk Benzodiazepine dan Antidepresan)</option>
                      <option value="4" {{$pengobatan == '4' ? 'selected' : ''}}>Mendapat tambahan obat-obatan dan/atau obat-obat PRN (psikiatri, antinyeri) yang diberikan dalam 24 jam terakhir</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSA</label>
                  <div class="col-lg-7">
                    <select required class="form-control m-bot15" name="diagnosa">
                      <option value="1" {{$diagnosa == '1' ? 'selected' : ''}}>Bipolar/ Gangguan Schizoaffective</option>
                      <option value="2" {{$diagnosa == '2' ? 'selected' : ''}}>Penggunaan Obat-obatan terlarang/ketergantungan alkohol</option>
                      <option value="3" {{$diagnosa == '3' ? 'selected' : ''}}>Gangguan Depresi Mayor</option>
                      <option value="4" {{$diagnosa == '4' ? 'selected' : ''}}>Dimensia/ Delirium</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">AMBULASI /KESEIMBANGAN </label>
                  <div class="col-lg-7">
                    <select required class="form-control m-bot15" name="ambulasi">
                      <option value="1" {{$ambulasi == '1' ? 'selected' : ''}}>Mandiri/Keseimbangan Baik/Immobilisasi</option>
                      <option value="2" {{$ambulasi == '2' ? 'selected' : ''}}>Dengan Alat Bantu (Kursi roda, walker,dll)</option>
                      <option value="3" {{$ambulasi == '3' ? 'selected' : ''}}>Vertigo/kelemahan</option>
                      <option value="4" {{$ambulasi == '4' ? 'selected' : ''}}>Goyah/membutuhkan mantuan dan menyadari kemampuan</option>
                      <option value="5" {{$ambulasi == '5' ? 'selected' : ''}}>Goyah tapi lupa keterbatasan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">NUTRISI</label>
                  <div class="col-lg-7">
                    <select required class="form-control m-bot15" name="nutrisi">
                      <option value="1" {{$nutrisi == '1' ? 'selected' : ''}}>Mengkonsumsi sedikit makanan atau minuman  dalam 24 jam terakhir</option>
                      <option value="2" {{$nutrisi == '2' ? 'selected' : ''}}>Tidak ada kelainan dengan nafsu makan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">GANGGUAN POLA TIDUR</label>
                  <div class="col-lg-7">
                    <select required class="form-control m-bot15" name="gangguan_pola_tidur">
                      <option value="1" {{$gangguan_pola_tidur == '1' ? 'selected' : ''}}>Tidak ada gangguan tidur</option>
                      <option value="2" {{$gangguan_pola_tidur == '2' ? 'selected' : ''}}>Gangguan pola tidur yang dilaporkan oleh pasien, keluarga atau petugas</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                  <div class="col-lg-7">
                    <select required class="form-control m-bot15" name="riwayat_jatuh">
                      <option value="1" {{$riwayat_jatuh == '1' ? 'selected' : ''}}>Tidak ada riwayat jatuh</option>
                      <option value="2" {{$riwayat_jatuh == '2' ? 'selected' : ''}}>Ada riwayat jatuh dalam 3 bulan terakhir</option>
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