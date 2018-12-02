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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL PASIEN RAWAT INAP</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Asesmen Awal Pasien Rawat Inap
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
                  <td>Asesmen Awal Pasien Rawat Inap</td>
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
          <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_asesmen_awal_perawat">
            {{csrf_field()}}
            <section class="panel">
              <header class="panel-heading"></header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Diperiksa</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" name="tanggal_diperiksa" class="form-control sandbox-container">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" name="jam_diperiksa" class="form-control">
                  </div>
                </div>                
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Data Pasien</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nadi</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="nadi">
                  </div>
                  <label class="col-sm-1 control-label">TD</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="td">
                  </div>
                  <label class="col-sm-1 control-label">Napas</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="napas">
                  </div>
                  <label class="col-sm-1 control-label">Suhu</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="suhu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">TB</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="tb">
                  </div>
                  <label class="col-sm-1 control-label">BB</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="bb">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Kondisi Pasien Saat Masuk</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="kondisi" value="0">
                        Mandiri
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kondisi" value="1">
                        Tempat Tidur
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kondisi" value="2">
                        Dipapah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kondisi" value="3">
                        Lainnya ...
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="kondisi_ket">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Asal Pasien</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="asal" value="0">
                        Poliklinik
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="asal" value="1">
                        IGD
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Dokter pemeriksa</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="dokter_pemeriksa">
                  </div>
                  <label class="col-sm-2 control-label">Dokter Keluarga</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="dokter_keluarga">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosis Masuk</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="diagnosis_masuk">
                  </div>
                  <label class="col-sm-2 control-label">DPJP</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="dpjp">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Alergi Obat</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="alergi" value="0">
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alergi" value="1">
                        Tidak Ada
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Reaksi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jenis_reaksi">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Barang Berharga</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="barang1"> Perhiasan
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="barang2"> Pakaian
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="barang3"> Lainnya
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Deskripsikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="deskripsi_barang_berharga">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindakan Barang Berharga</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="tindak1"> Kumpulkan dan Simpan
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="tindak2"> Lainnya ...
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tindakan_barang">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alat Bantu yang Digunakan</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="alat1"> Kacamata
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="alat2"> Lensa Kontak
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="alat3"> Gigi Palsu
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="alat4"> Alat Bantu Dengar
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="alat5"> Lainnya
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alat_bantu_lainnya">
                  </div>
                </div>                
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Asesmen Keperawatan</header>
              <div class="panel-body">
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">1. Riwayat Pasien <small>(penyakit utama/operasi cedera mayor)</small></header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Penyakit</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien1_1"> Hipertensi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien1_2"> PPOK
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien1_3"> Diabetes
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien1_4"> Kanker
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien1_5"> Infark Miokard
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien1_6"> Asma
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien1_7"> Hepatitis
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien1_8"> Kejang
                    </label>
                    <br>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien1_9"> Stroke
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien1_10"> TB
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien1_11"> Ulkus
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien1_12"> Penyakit Paru Lainnya
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien1_13"> Gangguan Jiwa
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien1_14"> Jantung
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien1_15"> Penyakit Ginjal
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien1_16"> Lainnya
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Deskripsikan Penyakit dan Operasi<br><small>(yang tidak tercantum di atas)</small></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="friwayatpasien2">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Alkohol/Obat</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien3" value="0">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien3" value="1">
                        Ya
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="friwayatpasien4">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jumlah/Hari</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="friwayatpasien5">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Berhenti Konsumsi Alkohol</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien6">
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Merokok</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien7" value="0">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien7" value="1">
                        Ya
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="friwayatpasien8">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jumlah/Hari</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="friwayatpasien9">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Berhenti Merokok</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien10">
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Vaksinasi</label>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Influenza dalam 12 bulan terakhir</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien11" value="0">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien11" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien11" value="2">
                        Menolak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pneumonia dalam 5 tahun terakhir</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien12" value="0">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien12" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien12" value="2">
                        Menolak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1 control-label" style="margin-left:2%;">Aniaya Fisik</label>
                  <label class="col-sm-1 control-label" style="margin-left:-2%;">Usia</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="friwayatpasien13">
                  </div>
                  <label class="col-sm-1 control-label">Pelaku</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien14">
                  </div>
                  <label class="col-sm-1 control-label">Korban</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien15">
                  </div>
                  <label class="col-sm-1 control-label">Saksi</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien16">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1 control-label" style="margin-left:2%;">Aniaya Seksual</label>
                  <label class="col-sm-1 control-label" style="margin-left:-2%;">Usia</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="friwayatpasien17">
                  </div>
                  <label class="col-sm-1 control-label">Pelaku</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien18">
                  </div>
                  <label class="col-sm-1 control-label">Korban</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien19">
                  </div>
                  <label class="col-sm-1 control-label">Saksi</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien20">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1 control-label" style="margin-left:2%;">Penolakan</label>
                  <label class="col-sm-1 control-label" style="margin-left:-2%;">Usia</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="friwayatpasien21">
                  </div>
                  <label class="col-sm-1 control-label">Pelaku</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien22">
                  </div>
                  <label class="col-sm-1 control-label">Korban</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien23">
                  </div>
                  <label class="col-sm-1 control-label">Saksi</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien24">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1 control-label" style="margin-left:2%;">Kekerasan dalam Keluarga</label>
                  <label class="col-sm-1 control-label" style="margin-left:-2%;">Usia</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="friwayatpasien25">
                  </div>
                  <label class="col-sm-1 control-label">Pelaku</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien26">
                  </div>
                  <label class="col-sm-1 control-label">Korban</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien27">
                  </div>
                  <label class="col-sm-1 control-label">Saksi</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien28">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1 control-label" style="margin-left:2%;">Tindakan Kriminal</label>
                  <label class="col-sm-1 control-label" style="margin-left:-2%;">Usia</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="friwayatpasien29">
                  </div>
                  <label class="col-sm-1 control-label">Pelaku</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien30">
                  </div>
                  <label class="col-sm-1 control-label">Korban</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien31">
                  </div>
                  <label class="col-sm-1 control-label">Saksi</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien32">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="friwayatpasien33">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">2. Riwayat Keluarga</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Riwayat Penyakit Keluarga</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga1"> Penyakit Jantung
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga2"> Hipertensi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga3"> Stroke
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga4"> Asma
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga5"> Kanker
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga6"> Ginjal
                    </label>
                    <br>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga7"> Gangguan Jiwa
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga8"> Kejang
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga9"> TB
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga10"> Diabetes
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga11"> Anastesi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga14"> Gangguan Hematologi
                    </label>
                    <br>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga15"> Lainnya
                    </label>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">3. Psikososial</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Pernikahan</label>
                  <div class="col-lg-3">
                    <select class="form-control m-bot15" name="friwayatpsikososial1">
                      <option value="1">Menikah</option>
                      <option value="2">Belum Menikah</option>
                      <option value="3">Duda/Janda</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Keluarga</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial2" value="0">
                        Tidak ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial2" value="1">
                        Ada
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess"></label>
                  <div class="col-lg-3">
                    <select class="form-control m-bot15" name="friwayatpsikososial3">
                      <option value="1">Serumah</option>
                      <option value="2">Tidak Serumah</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tempat Tinggal</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial4" value="0">
                        Rumah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial4" value="1">
                        Panti Asuhan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial4" value="2">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="friwayatpsikososial5">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pekerjaan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial6" value="0">
                        Purna Waktu
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial6" value="1">
                        Paruh Waktu
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial6" value="2">
                        Pensiun
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial6" value="3">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="friwayatpsikososial7">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Aktivitas</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial8" value="0">
                        Mandiri
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial8" value="1">
                        Tirah Baring
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial8" value="2">
                        Kursi Roda
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial8" value="3">
                        Tongkat
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Curiga Penganiayaan/ Penelantaran</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial9" value="0">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial9" value="1">
                        Ya
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Emosional</label>
                  <div class="col-lg-3">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="friwayatpsikososial10">
                        Kooperatif
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="friwayatpsikososial11">
                        Ansietas
                      </label>
                    </div>
                  </div>\
                  <div class="col-lg-3">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="friwayatpsikososial12">
                        Cemas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="friwayatpsikososial13">
                        Ingin mengakhiri hidup
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="friwayatpsikososial14">
                        Depresi
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">4. Keluarga Terdekat</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hubungan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkeluarga1">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Telepon</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkeluarga2">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Informasi Didapat Dari</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkeluarga3" value="0">
                        Pasien
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkeluarga3" value="1">
                        Keluarga
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkeluarga3" value="2">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">5. Konsep Diri</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">a. Citra Diri</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkonsepdiri1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">b. Identitas Diri</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkonsepdiri2">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">c. Peran</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkonsepdiri3">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">d. Ideal Diri</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkonsepdiri4">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">e. Harga Diri</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkonsepdiri5">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">6. Hubungan Sosial</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">a. Orang yang berarti</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fhubungansosial1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">b. Peran serta dalam kegiatan kelompok masyarakat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fhubungansosial2">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">c. Hambatan dalam berhubungan dengan orang lain</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fhubungansosial3">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">7. Spiritual</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">a. Nilai dan Keyakinan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fspiritual1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">b. Kegiatan Ibadah</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fspiritual2">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">8. Penampilan</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Penampilan</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpenampilan1"> Tidak rapi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpenampilan2"> Penggunaan pakaian tidak sesuai
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpenampilan3"> Cara berpakaian tidak seperti biasanya
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fpenampilan_ket">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">9. Pembicaraan</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pembicaraan</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpembicaraan1"> cepat
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpembicaraan2"> Keras
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpembicaraan3"> Gagap
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpembicaraan4"> Inkoheren
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpembicaraan5"> Apatis
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpembicaraan6"> Lambat
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpembicaraan7"> Membisu
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpembicaraan8"> Tidak mampu memulai bicara
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fpembicaraan_ket">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">10. Aktivitas Motorik</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Aktivitas Motorik</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faktivitasmotorik1"> Lesu
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faktivitasmotorik2"> Tegang
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faktivitasmotorik3"> Gelisah
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faktivitasmotorik4"> Tik
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faktivitasmotorik5"> Agitas
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faktivitasmotorik6"> Grimasen
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faktivitasmotorik7"> Tremor
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faktivitasmotorik8"> Kompulsif
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faktivitasmotorik9"> Restrain
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="faktivitasmotorik_ket">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">11. Alam Perasaan</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alam Perasaan</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="falamperasaan1"> Sedih
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="falamperasaan2"> Ketakutan
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="falamperasaan3"> Putus Asa
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="falamperasaan4"> Khawatir
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="falamperasaan5"> Gembira berlebihan
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="falamperasaan6"> Isyarat percobaan bunuh diri
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="falamperasaan_ket">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">12. Afek</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Afek</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fafek1"> Datar
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fafek2"> Tumpul
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fafek3"> Labil
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fafek4"> Tidak sesuai
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fafek_ket">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">13. Interaksi selama wawancara</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Interaksi selama wawancara</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="finteraksi1"> Bermusuhan
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="finteraksi2"> Tidak kooperatif
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="finteraksi3"> Mudah tersinggung
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="finteraksi4"> Kontak mata kurang
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="finteraksi5"> Defensif
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="finteraksi6"> Curiga
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="finteraksi_ket">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">14. Persepsi</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Persepsi</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpersepsi1"> Ilusi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpersepsi2"> Halusinasi dengar
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpersepsi3"> Halusinasi lihat
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpersepsi4"> Halusinasi raba
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpersepsi5"> Halusinasi kecap
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpersepsi6"> Halusinasi hidu
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fpersepsi_ket">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">15. Isi Pikir</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Isi Pikir</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir1"> Obsesi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir2"> Phobia
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir3"> Hipokondria
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir4"> Depersonalisasi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir5"> Ide terkait
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir6"> Pikiran magis
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir7"> Waham agama
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir8"> Waham somatik
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir9"> Waham besar
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir10"> Waham curiga
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir11"> Waham nihilistik
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir12"> Sisip pikir
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir13"> Siap pikir
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir14"> Kontrol pikir
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fisikpikir_ket">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">16. Arus Pikir</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Arus Pikir</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faruspikir1"> Sirkumstansial
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faruspikir2"> Tangensial
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faruspikir3"> Kehilangan asosiasi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faruspikir4"> Flight of idea
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faruspikir5"> Block
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faruspikir6"> Perseverasi
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="faruspikir_ket">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">17. Memori</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Memori</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fmemori1"> Ggn daya ingat jangka panjang
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fmemori2"> Ggn daya ingat jangka pendek
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fmemori3"> Ggn daya ingat saat ini
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fmemori4"> Konfabulasi
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fmemori_ket">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">18. Tingkat konsentrasi dan berhitung</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tingkat konsentrasi dan berhitung</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fkonsentrasi1"> Mudah teralih
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fkonsentrasi2"> Tidak mampu berkonsentrasi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fkonsentrasi3"> Tidak mampu berhitung sederhana
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkonsentrasi_ket">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">19. Kemampuan Penilaian</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kemampuan Penilaian</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fkemampuanpenilaian1"> Gangguan ringan
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fkemampuanpenilaian2"> Gangguan bermakna
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkemampuanpenilaian_ket">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">20. Daya tilik diri (insight)</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Daya tilik diri (insight)</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fdaya1"> Mengingkari sakit yang diderita
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fdaya2"> Menyalahkan hal di luar dirinya
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fdaya_ket">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Kebutuhan Komunikasi dan Pengajaran</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kebutuhan Komunikasi dan Pengajaran</label>
                  <div class="col-lg-3">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran1">
                        Proses Penyakit dan Tindakan medis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran2">
                        Terapi/Obat
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran3">
                        Penanganan Nyeri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran4">
                        Penggunaan Alat Medis
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran5">
                        Nutrisi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran6">
                        Rehab Medik
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran7">
                        Rehabilitasi Mental
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran8">
                        Perawatan Penyakitnya
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran9">
                        Aspek psikologis terkait penyakitnya
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran10">
                        Follow up dan minta pertolongan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran11">
                        Lain-lain,...
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">1. Keyakinan dan nilai-nilai pasien/keluarga tentang penyakitnya</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkomunikasi1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">2. Bicara</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi2" value="0">
                        Normal
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi2" value="1">
                        Gangguan bicara
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kapan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkomunikasi3">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">3. Bahasa sehari-hari</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi4" value="0">
                        Indonesia
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi4" value="1">
                        Inggris
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi4" value="2">
                        Daerah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi4" value="3">
                        Lain-lain
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess"></label>
                  <div class="col-lg-3">
                    <select class="form-control m-bot15" name="fkomunikasi5">
                      <option value="1">Aktif</option>
                      <option value="2">Pasif</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkomunikasi6">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">4. Perlu Penerjemah</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi7" value="0">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi7" value="1">
                        Ya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bahasa</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkomunikasi8">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bahasa Isyarat</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi9" value="0">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi9" value="1">
                        Ya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">5. Hambatan Edukasi</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_1">
                        Bahasa
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_2">
                        Pendengaran
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_3">
                        Hilang memori
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_4">
                        Motivasi buruk
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_5">
                        Masalah penglihatan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_6">
                        Tidak ditemukan hambatan belajar
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_7">
                        Cemas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_8">
                        Emosi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_9">
                        Kesulitan Bicara
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_10">
                        Tidak ada partisipasi dari caregiver
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_11">
                        Secara fisiologi tidak mampu belajar
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_12">
                        Kognitif
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Cara Edukasi yang Disukai</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi11_1">
                        Menulis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi11_2">
                        Audio- Visual/Gambar
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi11_3">
                        Diskusi
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi11_4">
                        Membaca
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi11_5">
                        Mendengar
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi11_6">
                        Demonstrasi
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">6. Tingkat Pendidikan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi12" value="0">
                        TK
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi12" value="1">
                        SD
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi12" value="2">
                        SMP
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi12" value="3">
                        SMA
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi12" value="4">
                        Akademi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi12" value="5">
                        Sarjana
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi12" value="6">
                        Lain-lain
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">7. Pasien bersedia menerima Informasi</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi13" value="0">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi13" value="1">
                        Ya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alasan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkomunikasi14">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Screening Gizi</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">TB</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fgizi1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">BB</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fgizi2">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Penilaian Resiko Jatuh</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Diperiksa</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="fresikojatuh1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="fresikojatuh2">
                  </div>
                </div>
              </div>
            </section>

            {{-- risiko jatuh --}}
            <section class="panel">
              <header class="panel-heading">
                Penilaian Risiko Jatuh
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Risiko Jatuh</label>
                  <div class="col-lg-4">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis_resiko_jatuh" value="humpty_dumpty">
                        HUMPTY DUMPTY (Anak-anak) 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis_resiko_jatuh" value="morse">
                        MORSE (Dewasa) 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis_resiko_jatuh" value="edmunson">
                        EDMUNSON (Jiwa) 
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <div id="place_for_resiko_jatuh"></div>

            <section class="panel">
              <header class="panel-heading">Penilaian Tingkat Nyeri</header>
              <div class="panel-body">
                <div class="form-group">  
                  <div class="col-lg-12">
                    <img src="img/nyeri.jpg" alt="Smiley face" height="300" width="550">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nyeri</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri1" value="1">
                        Ya 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri1" value="0">
                        Tidak 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Intensitas</label>
                  <div class="col-lg-1">
                    <select class="form-control m-bot15" name="fnyeri2">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri3" value="0">
                        Akut 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri3" value="1">
                        Kronis 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Lokasi Nyeri</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fnyeri4">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Terjadinya Nyeri</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fnyeri5">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sifat Nyeri</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri6" value="0">
                        Kejang 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri6" value="1">
                        Konstan 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri6" value="2">
                        Intermiten 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri6" value="3">
                        Lain 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Kualitas Nyeri</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri7" value="0">
                        Nyeri 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri7" value="1">
                        Kram 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri7" value="2">
                        Tumpul
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri7" value="3">
                        Terbakat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri7" value="4">
                        Tajam
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri7" value="5">
                        Nyeri Tembak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri7" value="6">
                        Menusuk
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri7" value="7">
                        Tertekan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri7" value="8">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div> 

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fnyeri8">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Faktor Pemberat</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri9" value="0">
                        Cahaya 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri9" value="1">
                        Gelap
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri9" value="2">
                        Gerakan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri9" value="3">
                        Berbaring 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri9" value="4">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div> 

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fnyeri10">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Faktor Peringan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri11" value="0">
                        Makan 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri11" value="1">
                        Sungi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri11" value="2">
                        Dingin 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri11" value="3">
                        Panas 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri11" value="4">
                        Lainnya 
                      </label>
                    </div>
                  </div>
                </div> 

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fnyeri12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Efek Nyeri</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fnyeri13_1">
                        Mual Muntah
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fnyeri13_2">
                        Emosi
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fnyeri13_3">
                        Tidur
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fnyeri13_4">
                        Hubungan dengan orang lain
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fnyeri13_5">
                        Nafsu Makan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fnyeri13_6">
                        Aktivitas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fnyeri13_7">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fnyeri14">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    Obat-obatan di rumah (daftar obat, dosis dan frekuensi, kapan terakhir kali dikonsumsi
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Obat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Dosis</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Kapan terakhir kali diberikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Resume</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Diagnosa Keperawatan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Diagnosa Keperawatan Umum</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum1">
                        Aktual/ Resiko bersihan jalan nafas tidak efektif
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum2">
                        Aktual/ Resiko aspirasi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum3">
                        Aktual/ Resiko pola nafas tidak efektif
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum4">
                        Aktual/ Resiko gangguan pertukaran gas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum5">
                        Aktual/ penurunan curah jantung
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum6">
                        Aktual/ Resiko gangguan perfusi jaringan celebral/perifer
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum7">
                        Aktual/ Resiko gangguan keseimbangan cairan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum8">
                        Aktual/ Resiko gangguan keseimbangan kontinuitas jaringan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum9">
                        Aktual/ Resiko infeksi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum10">
                        Resiko cedera / jatuh
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum11">
                        Hypertermi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum12">
                        Nyeri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum13">
                        Gangguan kebutuhan nutrisi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum14">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fdiagnosaumum_ket">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Diagnosa keperawatan jiwa</label>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa1">
                        Gangguan persepsi sensori : halusinasi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa2">
                        Perilaku kekerasan
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa3">
                        Isolasi sosial
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa4">
                        Gangguan konsep diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa5">
                        Resiko bunuh diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa6">
                        Intoleransi aktifitas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa7">
                        Waham
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa8">
                        Defisit perawatan diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa9">
                        Kerusakan komunitas verbal
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa10">
                        Koping individu tidak efektif
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa11">
                        Aktual/Resiko Cemas/Takut
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa12">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fdiagnosajiwa_ket">
                  </div>
                </div>

              </div>
            </section>

            <section class="panel">
              <header class="panel-heading"></header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control" name="tanggal">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Perawat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_perawat">
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

    {{-- resiko jatuh --}}
    <script type="text/javascript">
      function attach_humpty_dumpty() {
        $('#place_for_resiko_jatuh').after('<section class="panel hidden_panel" id="hidden_panel"> <header class="panel-heading"> HUMPTY DUMPTY (Anak-anak) </header> <div class="panel-body"> <div class="col-lg-2"></div><h4>HUMPTY DUMPTY (Anak-anak) </h4> <div class="form-group"></div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">USIA</label> <div class="col-lg-2"> <select class="form-control m-bot15" name="usia"> <option></option> <option value="1">Dibawah 3 tahun </option> <option value="2">3 – 7 tahun </option> <option value="3">7 – 13 tahun </option> <option value="4">> 13 tahun </option> </select> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS</label> <div class="col-lg-7"> <select class="form-control m-bot15" name="diagnosis_hd"> <option></option> <option value="1">Kelainan Neurologi </option> <option value="2">Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)</option> <option value="3">Kelainan psikis / prilaku</option> <option value="4">Diagnosis lain</option> </select> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">GANGGUAN KOGNITIF</label> <div class="col-lg-7"> <select class="form-control m-bot15" name="gangguan_kognitif"> <option></option> <option value="1">Tidak sadar terhadap keterbatasan (gangguan kesadaran, retardasi mental</option> <option value="2">Lupa keterbatasan (anak yang hiperaktif)</option> <option value="3">Mengetahui kemampuan diri</option> </select> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">FAKTOR LINGKUNGAN</label> <div class="col-lg-7"> <select class="form-control m-bot15" name="faktor_lingkungan"> <option></option> <option value="1">Riwayat jatuh dari tempat tidur saat bayi</option> <option value="2">Pasien menggunakan alat bantu atau box meubel</option> <option value="3">Pasien berada di tempat tidur</option> <option value="4">Di luar ruang rawat</option> </select> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">RESPON TERHADAP OPERASI/OBAT PENENANG/EFEK ANASTESI</label> <div class="col-lg-7"> <select class="form-control m-bot15" name="waktu_respon_obat"> <option></option> <option value="1">Dalam 24 Jam</option> <option value="2">Dalam 48 Jam</option> <option value="3">> 48 Jam</option> </select> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">PENGGUNAAN OBAT</label> <div class="col-lg-7"> <select class="form-control m-bot15" name="penggunaan_obat"> <option></option> <option value="1">Bermacam-macam obat yang digunakan : obat sedatif (kecuali pasien ICU yang menggunakan sedasi dan paralisis), Hiptonik Barbitural, Fonotiazin, Antidepresan, Laksansia / Diuretikan, Narkotik</option> <option value="2">Salah satu Pengobatan di atas</option> <option value="3">Pengobatan lain</option> </select> </div> </div> </div> </section>');
      }

      function attach_morse() {
        $('#place_for_resiko_jatuh').after('<section class="panel hidden_panel" id="hidden_panel"> <header class="panel-heading"> MORSE (Dewasa) </header> <div class="panel-body"> <div class="col-lg-2"></div><h4>MORSE (Dewasa) </h4> <div class="form-group"></div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label> <div class="col-lg-1"> <select class="form-control m-bot15" name="riwayat_jatuh_mrs"> <option></option> <option value="1">Ya</option> <option value="2">Tidak</option> </select> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS SEKUNDER</label> <div class="col-lg-1"> <select class="form-control m-bot15" name="diagnosis_sekunder"> <option></option> <option value="1">Ya</option> <option value="2">Tidak</option> </select> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">ALAT BANTU</label> <div class="col-lg-7"> <select class="form-control m-bot15" name="alat_bantu"> <option></option> <option value="1">Perabot</option> <option value="2">Tongkat/Alat Penopang</option> <option value="3">Tidak ada/Kursi Roda/Perawat/Tirah Baring</option> </select> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">TERPASANG INFUS</label> <div class="col-lg-1"> <select class="form-control m-bot15" name="terpasang_infus"> <option></option> <option value="1">Ya</option> <option value="2">Tidak</option> </select> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">GAYA BERJALAN</label> <div class="col-lg-7"> <select class="form-control m-bot15" name="gaya_berjalan"> <option></option> <option value="1">Terganggu</option> <option value="2">Lemah</option> <option value="3">Normal/Tirah Baring/Imobilisasi</option> </select> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label> <div class="col-lg-7"> <select class="form-control m-bot15" name="status_mental_mrs"> <option></option> <option value="1">Sering lupa akan keterbatasan yang dimiliki</option> <option value="2">Orientasi baik terhadap kemampuan diri sendiri</option> </select> </div> </div> </div> </section>');
      }

      function attach_edmunson() {
        $('#place_for_resiko_jatuh').after('<section class="panel hidden_panel" id="hidden_panel"> <header class="panel-heading"> EDMUNSON (Jiwa) </header> <div class="panel-body"> <div class="col-lg-2"></div><h4>EDMUNSON (Jiwa) </h4> <div class="form-group"></div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label> <div class="col-lg-7"> <select class="form-control m-bot15" name="status_mental_edm"> <option></option> <option value="1">Kesadaran baik/orientasi baik setiap saat </option> <option value="2">Agitasi/Ansietas</option> <option value="3">Kadang-kadang bingung</option> <option value="4">Bingung/Disorientasi</option> </select> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS</label> <div class="col-lg-7"> <select class="form-control m-bot15" name="diagnosis_edm"> <option></option> <option value="1">Kelainan Neurologi </option> <option value="2">Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)</option> <option value="3">Kelainan psikis / prilaku</option> <option value="4">Diagnosis lain</option> </select> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">ELIMINASI</label> <div class="col-lg-7"> <select class="form-control m-bot15" name="eliminasi"> <option></option> <option value="1">Mandiri dan mampi mengontrol BAB/BAK</option> <option value="2">Dower Catheter/Colostomy</option> <option value="3">Eliminasi dengan bantuan</option> <option value="4">Gangguan eliminasi (Inkontinensia/Nokturia/Frekwensi)</option> <option value="5">Inkontinesia tetapi mampu untuk mobilisasi</option> </select> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">PENGOBATAN</label> <div class="col-lg-7"> <select class="form-control m-bot15" name="pengobatan"> <option></option> <option value="1">Tanpa obat-obatan</option> <option value="2">Obat-obatan jantung</option> <option value="3">Obat-obat psikotropika (termasuk Benzodiazepine dan Antidepresan)</option> <option value="4">Mendapat tambahan obat-obatan dan/atau obat-obat PRN (psikiatri, antinyeri) yang diberikan dalam 24 jam terakhir</option> </select> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSA</label> <div class="col-lg-7"> <select class="form-control m-bot15" name="diagnosa"> <option></option> <option value="1">Bipolar/ Gangguan Schizoaffective</option> <option value="2">Penggunaan Obat-obatan terlarang/ketergantungan alkohol</option> <option value="3">Gangguan Depresi Mayor</option> <option value="4">Dimensia/ Delirium</option> </select> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">AMBULASI /KESEIMBANGAN </label> <div class="col-lg-7"> <select class="form-control m-bot15" name="ambulasi"> <option></option> <option value="1">Mandiri/Keseimbangan Baik/Immobilisasi</option> <option value="2">Dengan Alat Bantu (Kursi roda, walker,dll)</option> <option value="3">Vertigo/kelemahan</option> <option value="4">Goyah/membutuhkan mantuan dan menyadari kemampuan</option> <option value="5">Goyah tapi lupa keterbatasan</option> </select> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">NUTRISI</label> <div class="col-lg-7"> <select class="form-control m-bot15" name="nutrisi"> <option></option> <option value="1">Mengkonsumsi sedikit makanan atau minuman  dalam 24 jam terakhir</option> <option value="2">Tidak ada kelainan dengan nafsu makan</option> <option value="3">Gangguan pola tidur yang dilaporkan oleh pasien, keluarga atau petugas</option> </select> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label> <div class="col-lg-7"> <select class="form-control m-bot15" name="riwayat_jatuh_edm"> <option></option> <option value="1">Tidak ada riwayat jatuh</option> <option value="2">Ada riwayat jatuh dalam 3 bulan terakhir</option> </select> </div> </div> </div> </section>');
      }

      $('input[type=radio][name=jenis_resiko_jatuh]').change(function() {
        $('.hidden_panel').remove();
        if (this.value == 'humpty_dumpty') {
          attach_humpty_dumpty();
        }
        else if (this.value == 'morse') {
          attach_morse();
        }
        else if (this.value == 'edmunson') {
          attach_edmunson();
        }
      });
    </script>

  </body>


  <html>