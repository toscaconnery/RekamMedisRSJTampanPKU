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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> TRANSFER PASIEN INTERNAL RUMAH SAKIT</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Transfer Pasien Internal Rumah Sakit
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
                  <td>Transfer Pasien Internal Rumah Sakit</td>
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

      <form class="form-horizontal" method="post" action="ri_transfer_internal">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-sm-3">Tanggal Masuk</label>
                  <div class="col-sm-9">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_masuk">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3">DPJP</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="dpjp">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3">Dokter Konsulen 1</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="dokter_konsulen_1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3">Dokter Konsulen 2</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="dokter_konsulen_2">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3">Dokter Konsulen 3</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="dokter_konsulen_3">
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-sm-3">Ruang/Kamar</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ruang_kamar">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3">Tgl Pindah</label>
                  <div class="col-sm-3">
                    <input type="text" autocomplete="off" onkeydown="return false" placeholder="Tanggal" class="form-control sandbox-container" name="tanggal_pindah">
                  </div>
                  <label class="control-label col-sm-3">Jam Pindah</label>
                  <div class="col-sm-3">
                    <input type="time" class="form-control" placeholder="Jam" name="jam_pindah">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3">Pindah ke ruang/kamar</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="pindah_ke">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3">Diagnosis Sekarang</label>
                  <div class="col-sm-9">
                    <textarea style="resize: none;" rows="3" class="form-control" name="diagnosis_sekarang"></textarea>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Pemeriksaan Fisik
              </header>
              <div class="panel-body">
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keadaan Umum</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keadaan_umum">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kesadaran</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="kesadaran">
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Pemeriksaan tanda-tanda vital</label></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tensi</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="tensi">
                  </div>
                  <label class="col-sm-1 control-label">Suhu</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="suhu">
                  </div>
                  <label class="col-sm-1 control-label">Nadi</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="nadi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keluhan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keluhan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Penyakit</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="riwayat_penyakit">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Alergi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="riwayat_alergi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alasan Pindah Ruangan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alasan_pindah">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Pemeriksaan Penunjang yang Sudah Dilakukan
              </header>
              <div class="panel-body">
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Laboratorium</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="laboratorium">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">EKG</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="ekg">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Radiologi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="radiologi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">CT scan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="ct_scan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">USG</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="usg">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Tindakan Medis yang Sudah Dilakukan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tindakan Medis</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" style="resize: vertical;" rows="3" name="tindakan_medis"></textarea>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Pemberian Therapi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Infus</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" style="resize: vertical;" rows="3" name="infus"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Obat Injeksi</label>
                  <div class="col-sm-8">
                    <input class="tagsinput" style="display: none;" name="obat_injeksi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Obat Oral</label>
                  <div class="col-sm-8">
                    <input class="tagsinput" style="display: none;" name="obat_oral">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lain-Lainnya</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" style="resize: vertical;" rows="3" name="lain_lain"></textarea>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nilai PANSS EC</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="panss_ec">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kategori pasien transfer</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="kategori" value="0">
                        Level 0
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kategori" value="1">
                        Level 1
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kategori" value="2">
                        Level 2
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kategori" value="3">
                        Level 3
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Yang Menyerahkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="yang_menyerahkan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Yang Menerima</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="yang_menerima">
                  </div>
                </div>
              </div>
            </section>

            <div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

          </div>
        </div>
      </form>
    </section>

    @include('layouts.tailscript')
  </body>


  <html>