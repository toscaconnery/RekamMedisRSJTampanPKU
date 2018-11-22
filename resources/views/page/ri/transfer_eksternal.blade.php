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
  <!-- container section start -->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> TRANSFER PASIEN EKSTERNAL RUMAH SAKIT</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Transfer Pasien Eksternal Rumah Sakit
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
                  <td>Transfer Pasien Eksternal Rumah Sakit</td>
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
          <form class="form-horizontal" method="post" action="ri_transfer_eksternal">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nomor</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nomor">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">RS Tujuan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="rs_tujuan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Petugas RS tujuan yang dihubungi</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="petugas_dihubungi">
                  </div>
                  <label class="col-sm-1 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_dihubungi">
                  </div>
                  <label class="col-sm-1 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam_dihubungi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alasan/Tujuan Transfer</label>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="alasan_transfer" value="1">
                        Alih Rawat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alasan_transfer" value="2">
                        Rujuk
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alasan_transfer" value="3">
                        Lainnya
                      </label>
                    </div>
                  </div>
                  <label class="col-sm-2 control-label">Tanggal Transfer</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_transfer">
                  </div>
                  <label class="col-sm-1 control-label">Jam Transfer</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam_transfer">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Atas Permintaan</label>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="atas_permintaan" value="1">
                        Dokter
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="atas_permintaan" value="2">
                        Pasien/Keluarga
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kategori pasien transfer</label>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="kategori_pasien" value="0">
                        Level 0
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kategori_pasien" value="1">
                        Level 1
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kategori_pasien" value="2">
                        Level 2
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kategori_pasien" value="3">
                        Level 3
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kategori_pasien" value="4">
                        Level 4
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Petugas Pendamping</label>
                  <div class="col-lg-10">
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" value="1" name="petugas_pendamping_1"> Dokter
                      </label><br>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" value="2" name="petugas_pendamping_2"> Perawat
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" value="3" name="petugas_pendamping_3"> ATLS
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" value="4" name="petugas_pendamping_4"> BCLS
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" value="5" name="petugas_pendamping_5"> Pramu Ruang
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" value="6" name="petugas_pendamping_6"> ACLS
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" value="7" name="petugas_pendamping_7"> PPGD
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" value="8" name="petugas_pendamping_8"> Sopir 
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" value="9" name="petugas_pendamping_9"> EN
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" value="10" name="petugas_pendamping_10"> BLS
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" value="11" name="petugas_pendamping_11"> Security  
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" value="12" name="petugas_pendamping_12"> BTLS
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" value="13" name="petugas_pendamping_13"> APN
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Masuk RS</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_masuk_rs">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Anamnesa</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="anamnesa">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosa</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="diagnosa">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Indikasi di Rawat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="indikasi_dirawat">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tindakan yang telah dilakukan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tindakan_dilakukan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Terapi yang telah diberikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="terapi_diberikan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Resiko</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="resiko">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Transportasi yang digunakan</label>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="transportasi" value="1">
                        Ambulance
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="transportasi" value="2">
                        Mobil Pribadi
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="transportasi" value="3">
                        Taxi
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="transportasi" value="4">
                        Angkutan Umum
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="transportasi" value="5">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-6"></div>
                  <div class="col-sm-4">
                    <label for="nama_dokter">Nama Dokter</label>
                    <input id="nama_dokter" type="text" class="form-control" name="nama_dokter">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Ringkasan Kondisi Pasien
              </header>
              <div class="panel-body">
                <div class="form-group"><label class="col-sm-2 control-label">Status Pasien Sebelum Transfer</label></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam_sebelum">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keadaan Umum</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keadaan_umum_sebelum">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">TD</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="td_sebelum">
                  </div>
                  <label class="col-sm-1 control-label">HR</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="hr_sebelum">
                  </div>
                  <label class="col-sm-1 control-label">RR</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="rr_sebelum">
                  </div>
                  <label class="col-sm-1 control-label">Suhu</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="suhu_sebelum">
                  </div>
                  <label class="col-sm-1 control-label">SpO2</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="spo2_sebelum">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lainnya</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="lainnya_sebelum">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_sebelum">
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Status Pasien Selama Transfer</label></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam_selama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keadaan Umum</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keadaan_umum_selama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">TD</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="td_selama">
                  </div>
                  <label class="col-sm-1 control-label">HR</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="hr_selama">
                  </div>
                  <label class="col-sm-1 control-label">RR</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="rr_selama">
                  </div>
                  <label class="col-sm-1 control-label">Suhu</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="suhu_selama">
                  </div>
                  <label class="col-sm-1 control-label">SpO2</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="spo2_selama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lainnya</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="lainnya_selama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_selama">
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Status Pasien Setelah Transfer</label></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam_setelah">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keadaan Umum</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keadaan_umum_setelah">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">TD</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="td_setelah">
                  </div>
                  <label class="col-sm-1 control-label">HR</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="hr_setelah">
                  </div>
                  <label class="col-sm-1 control-label">RR</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="rr_setelah">
                  </div>
                  <label class="col-sm-1 control-label">Suhu</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="suhu_setelah">
                  </div>
                  <label class="col-sm-1 control-label">SpO2</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="spo2_setelah">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lainnya</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="lainnya_setelah">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_setelah">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Petugas
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Petugas Menyerahkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_petugas_menyerahkan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Petugas Penerima</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_petugas_penerima">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal">
                  </div>
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">RS</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="rs">
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