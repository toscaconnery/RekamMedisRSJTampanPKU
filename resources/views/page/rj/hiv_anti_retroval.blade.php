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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>Ikhtisar Perawatan HIV dan Terapi Antiretroviral (ART)</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Ikhtisar Perawatan HIV dan Terapi Antiretroviral (ART)
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
                  <td>Ikhtisar Perawatan HIV dan Terapi Antiretroviral (ART)</td>
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
          <form class="form-horizontal form-validate" method="post" id="register_form" action="rj_hiv_anti_retroval">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">Data Identitas Pasien</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Reg. Nasional</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_reg_nasional">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">NIK</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nik">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ibu Kandung</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_ibu_kandung">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat Pasien</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat_pasien">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Telp. Pasien</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_telp">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Pengawas Minum Obat (PMO)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_pmo">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hubungan Dengan Pasien</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="hubungan_dengan_pasien">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat PMO</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat_pmo">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Telp. PMO</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_telp_pmo">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Konfirmasi Tes HIV</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_konfirm_tes_hiv">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tempat_tes_hiv">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Entry Point</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="entry_point">
                      <option disabled selected hidden>-</option>
                      <option value="1">KIA</option>
                      <option value="2">Rawat Jalan (TB, Anak, Penyakit Dalam, IMS, Lainnya ...)</option>
                      <option value="3">Rawat Inap</option>
                      <option value="4">Praktek Swasta</option>
                      <option value="5">Jangkauan (Penasun, WPS, LSL, ...)</option>
                      <option value="6">LSM</option>
                      <option value="7">Datang Sendiri</option>
                      <option value="8">Lainnya, uraikan ...</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_entry_point">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Alergi Obat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="riwayat_alergi_obat">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Riwayat Pribadi</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pendidikan</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="pendidikan">
                      <option disabled selected hidden>-</option>
                      <option value="0">0 - Tidak Sekolah</option>
                      <option value="1">1 - SD</option>
                      <option value="2">2 - SMP</option>
                      <option value="3">3 - SMA</option>
                      <option value="4">4 - Akademi/PT</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="pekerjaan">
                      <option disabled selected hidden>-</option>
                      <option value="0">0 - Tidak Bekerja</option>
                      <option value="1">1 - Bekerja</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_pekerjaan">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Faktor Risiko</label>
                    <div class="col-lg-8">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_1">
                          1. KIA
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_2">
                          2. Rawat Jalan(TB, Anak, Penyakit Dalam, IMS, lainnya ...)
                        </label>
                        <input type="text" class="form-control" placeholder="sebutkan..." name="keterangan_rawat_jalan">
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_3">
                          3. Rawat Inap
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_4">
                          4. Praktek Swasta
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_5">
                          5. Jangkauan (Penasun, WPS, LSL, ...)
                        </label>
                        <input type="text" class="form-control" placeholder="sebutkan..." name="keterangan_jangkauan">
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_6">
                          6. LSM
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_7">
                          7. Datang Sendiri
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_8">
                          8. Lainnya, uraikan ...
                        </label>
                        <input type="text" class="form-control" placeholder="sebutkan..." name="keterangan_fr_lainnya">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Riwayat Keluarga/Mitra Seksual/Mitra Penasun</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status Pernikahan</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="status_pernikahan">
                      <option disabled selected hidden>-</option>
                      <option value="1">Menikah</option>
                      <option value="2">Belum Menikah</option>
                      <option value="3">Janda/Duda</option>
                    </select>
                  </div>
                </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 45%; text-align: center;">Nama</th>
                      <th style="width: 15%; text-align: center;">Hub</th>
                      <th style="width: 10%; text-align: center;">Umur</th>
                      <th style="width: 10%; text-align: center;">HIV<br>+/-</th>
                      <th style="width: 10%; text-align: center;">ART<br>Y/T</th>
                      <th style="width: 10%; text-align: center;">NoRegNas</th>
                    </tr>
                  </thead>
                  <tbody>
                    <input type="hidden" name="jumlah_form_keluarga" id="jumlah_form_keluarga" value="4">
                    <tr id="form_1">
                      <td>
                        <input type="text" class="form-control" name="nama_1">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="hub_1">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="umur_1">
                      </td>
                      <td>
                        <select class="form-control" name="hiv_1">
                          <option disabled selected hidden></option>
                          <option value="+">+</option>
                          <option value="-">-</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control" name="art_1">
                          <option disabled selected hidden></option>
                          <option value="+">+</option>
                          <option value="-">-</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="noregnas_1">
                      </td>
                    </tr>
                    <tr id="form_2">
                      <td>
                        <input type="text" class="form-control" name="nama_2">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="hub_2">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="umur_2">
                      </td>
                      <td>
                        <select class="form-control" name="hiv_2">
                          <option disabled selected hidden></option>
                          <option value="+">+</option>
                          <option value="-">-</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control" name="art_2">
                          <option disabled selected hidden></option>
                          <option value="+">+</option>
                          <option value="-">-</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="noregnas_2">
                      </td>
                    </tr>
                    <tr id="form_3">
                      <td>
                        <input type="text" class="form-control" name="nama_3">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="hub_3">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="umur_3">
                      </td>
                      <td>
                        <select class="form-control" name="hiv_3">
                          <option disabled selected hidden></option>
                          <option value="+">+</option>
                          <option value="-">-</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control" name="art_3">
                          <option disabled selected hidden></option>
                          <option value="+">+</option>
                          <option value="-">-</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="noregnas_3">
                      </td>
                    </tr>
                    <tr id="form_4">
                      <td>
                        <input type="text" class="form-control" name="nama_4">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="hub_4">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="umur_4">
                      </td>
                      <td>
                        <select class="form-control" name="hiv_4">
                          <option disabled selected hidden></option>
                          <option value="+">+</option>
                          <option value="-">-</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control" name="art_4">
                          <option disabled selected hidden></option>
                          <option value="+">+</option>
                          <option value="-">-</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="noregnas_4">
                      </td>
                    </tr>
                    <tr id="last_row_keluarga">
                      <td colspan="9">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_keluarga"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Riwayat Terapi Antiretroviral</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pernah Menerima ART ?</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="pernah_menerima_art">
                      <option value="1">Ya</option>
                      <option value="0">Tidak</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">ART</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="jenis_art">
                      <option value="1">1.PPIA</option>
                      <option value="2">2.ART</option>
                      <option value="3">3.PPP</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat ART dulu</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="tempat_art_dulu">
                      <option value="1">1.RS Pem</option>
                      <option value="2">2.RS Swasta</option>
                      <option value="3">3.PKM</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama ARV</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_arv">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dosis ARV</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dosis_arv">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lama Penggunaan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="lama_penggunaan">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Pemeriksaan Klinis dan Laboratorium</header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 20%"></th>
                      <th style="width: 10%; text-align: center;">Tanggal<br>(hh/bb/th)</th>
                      <th style="width: 20%; text-align: center;">Stad. Klinis</th>
                      <th style="width: 10%; text-align: center;">BB</th>
                      <th style="width: 10%; text-align: center;">Status Fungsional</th>
                      <th style="width: 15%; text-align: center;">Jumlah Cd4 (Cd4 % pd anak2)</th>
                      <th style="width: 15%; text-align: center;">Lain-lain</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Kunjungan Pertama</td>
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pkl_1">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_1">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_1">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_1">
                          <option value="0" selected hidden></option>
                          <option value="1">Kerja</option>
                          <option value="2">Ambulatori</option>
                          <option value="3">Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_1" class="form-control">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_1">
                      </td>
                    </tr>
                    <tr>
                      <td>Memenuhi syarat medis untuk ART</td>
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pkl_2">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_2">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_2">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_2">
                          <option value="0" selected hidden></option>
                          <option value="1">Kerja</option>
                          <option value="2">Ambulatori</option>
                          <option value="3">Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_2" class="form-control">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_2">
                      </td>
                    </tr>
                    <tr>
                      <td>Saat mulai ART</td>
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pkl_3">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_3">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_3">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_3">
                          <option value="0" selected hidden></option>
                          <option value="1">Kerja</option>
                          <option value="2">Ambulatori</option>
                          <option value="3">Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_3" class="form-control">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_3">
                      </td>
                    </tr>
                    <tr>
                      <td>Setelah 6 bulan ART</td>
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pkl_4">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_4">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_4">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_4">
                          <option value="0" selected hidden></option>
                          <option value="1">Kerja</option>
                          <option value="2">Ambulatori</option>
                          <option value="3">Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_4" class="form-control">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_4">
                      </td>
                    </tr>
                    <tr>
                      <td>Setelah 12 bulan ART</td>
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pkl_5">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_5">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_5">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_5">
                          <option value="0" selected hidden></option>
                          <option value="1">Kerja</option>
                          <option value="2">Ambulatori</option>
                          <option value="3">Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_5" class="form-control">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_5">
                      </td>
                    </tr>
                    <tr>
                      <td>Setelah 24 bulan ART</td>
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pkl_6">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_6">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_6">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_6">
                          <option value="0" selected hidden></option>
                          <option value="1">Kerja</option>
                          <option value="2">Ambulatori</option>
                          <option value="3">Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_6" class="form-control">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_6">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Terapi Antiretroviral (ART)</header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th rowspan="2" style="width: 10%; text-align: center;">Nama Panduan ART Orisinil</th>
                      <th colspan="7" style="text-align: center;">SUBSTITUSI dalam lini-1 SWITCH ke lini-2 STOP</th>
                    </tr>
                    <tr>
                      <th style="width: 5%; text-align: center;">Tanggal</th>
                      <th style="width: 15%; text-align: center;">Substitusi</th>
                      <th style="width: 15%; text-align: center;">Switch</th>
                      <th style="width: 15%; text-align: center;">Stop</th>
                      <th style="width: 10%; text-align: center;">Restar</th>
                      <th style="width: 10%; text-align: center;">Alasan</th>
                      <th style="width: 20%; text-align: center;">Nama Panduan Baru</th>
                    </tr>
                  </thead>
                  <tbody>
                    <input type="hidden" id="jumlah_form_art" name="jumlah_form_art" value="6">
                    <tr id="art_1">
                      <td>
                        TDF+3TC+EFV
                        <input type="hidden" name="nama_panduan_orisinil_art_1" value="TDF+3TC+EFV">
                      </td>
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_art_1">
                      </td>
                      <td>
                        <select class="form-control" name="substitusi_art_1">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Risiko hamil</option>
                          <option value="4">4. TB baru</option>
                          <option value="5">5. Ada obat baru</option>
                          <option value="6">6. Stock obat habis</option>
                          <option value="7">7. Alasan lain</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control" name="switch_art_1">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Risiko hamil</option>
                          <option value="4">4. TB baru</option>
                          <option value="5">5. Ada obat baru</option>
                          <option value="6">6. Stock obat habis</option>
                          <option value="7">7. Alasan lain</option>
                          <option value="8">8. Gagal pengobatan secara klinis</option>
                          <option value="9">9. Gagal Imunologis</option>
                          <option value="10">10. Gagal virologis</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control" name="stop_art_1">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Gagal_pengobatan</option>
                          <option value="4">4. Adherens buruk</option>
                          <option value="5">5. Sakit/MRS</option>
                          <option value="6">6. Stok obat habis</option>
                          <option value="7">7. Kekurangan biaya</option>
                          <option value="8">8. Keputusan pasien lainnya</option>
                          <option value="9">9. Lain-lain</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="restar_art_1">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="alasan_art_1">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="nama_panduan_baru_art_1">
                      </td>
                    </tr>
                    <tr id="art_2">
                      <td>
                        TDF+FTC+EFV
                        <input type="hidden" name="nama_panduan_orisinil_art_2" value="TDF+FTC+EFV">
                      </td>
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container"  name="tanggal_art_2">
                      </td>
                      <td>
                        <select class="form-control" name="substitusi_art_2">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Risiko hamil</option>
                          <option value="4">4. TB baru</option>
                          <option value="5">5. Ada obat baru</option>
                          <option value="6">6. Stock obat habis</option>
                          <option value="7">7. Alasan lain</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control" name="switch_art_2">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Risiko hamil</option>
                          <option value="4">4. TB baru</option>
                          <option value="5">5. Ada obat baru</option>
                          <option value="6">6. Stock obat habis</option>
                          <option value="7">7. Alasan lain</option>
                          <option value="8">8. Gagal pengobatan secara klinis</option>
                          <option value="9">9. Gagal Imunologis</option>
                          <option value="10">10. Gagal virologis</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control" name="stop_art_2">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Gagal_pengobatan</option>
                          <option value="4">4. Adherens buruk</option>
                          <option value="5">5. Sakit/MRS</option>
                          <option value="6">6. Stok obat habis</option>
                          <option value="7">7. Kekurangan biaya</option>
                          <option value="8">8. Keputusan pasien lainnya</option>
                          <option value="9">9. Lain-lain</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="restar_art_2">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="alasan_art_2">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="nama_panduan_baru_art_2">
                      </td>
                    </tr>
                    <tr id="art_3">
                      <td>
                        TDF+3TC+NVP
                        <input type="hidden" name="nama_panduan_orisinil_art_3" value="TDF+3TC+NVP">
                      </td>
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_art_3">
                      </td>
                      <td>
                        <select class="form-control" name="substitusi_art_3">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Risiko hamil</option>
                          <option value="4">4. TB baru</option>
                          <option value="5">5. Ada obat baru</option>
                          <option value="6">6. Stock obat habis</option>
                          <option value="7">7. Alasan lain</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control" name="switch_art_3">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Risiko hamil</option>
                          <option value="4">4. TB baru</option>
                          <option value="5">5. Ada obat baru</option>
                          <option value="6">6. Stock obat habis</option>
                          <option value="7">7. Alasan lain</option>
                          <option value="8">8. Gagal pengobatan secara klinis</option>
                          <option value="9">9. Gagal Imunologis</option>
                          <option value="10">10. Gagal virologis</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control" name="stop_art_3">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Gagal_pengobatan</option>
                          <option value="4">4. Adherens buruk</option>
                          <option value="5">5. Sakit/MRS</option>
                          <option value="6">6. Stok obat habis</option>
                          <option value="7">7. Kekurangan biaya</option>
                          <option value="8">8. Keputusan pasien lainnya</option>
                          <option value="9">9. Lain-lain</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="restar_art_3">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="alasan_art_3">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="nama_panduan_baru_art_3">
                      </td>
                    </tr>
                    <tr id="art_4">
                      <td>
                        TDF+FTC+NVP
                        <input type="hidden" name="nama_panduan_orisinil_art_4" value="TDF+3TC+NVP">
                      </td>
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_art_4">
                      </td>
                      <td>
                        <select class="form-control" name="substitusi_art_4">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Risiko hamil</option>
                          <option value="4">4. TB baru</option>
                          <option value="5">5. Ada obat baru</option>
                          <option value="6">6. Stock obat habis</option>
                          <option value="7">7. Alasan lain</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control" name="switch_art_4">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Risiko hamil</option>
                          <option value="4">4. TB baru</option>
                          <option value="5">5. Ada obat baru</option>
                          <option value="6">6. Stock obat habis</option>
                          <option value="7">7. Alasan lain</option>
                          <option value="8">8. Gagal pengobatan secara klinis</option>
                          <option value="9">9. Gagal Imunologis</option>
                          <option value="10">10. Gagal virologis</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control" name="stop_art_4">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Gagal_pengobatan</option>
                          <option value="4">4. Adherens buruk</option>
                          <option value="5">5. Sakit/MRS</option>
                          <option value="6">6. Stok obat habis</option>
                          <option value="7">7. Kekurangan biaya</option>
                          <option value="8">8. Keputusan pasien lainnya</option>
                          <option value="9">9. Lain-lain</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="restar_art_4">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="alasan_art_4">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="nama_panduan_baru_art_4">
                      </td>
                    </tr>
                    <tr id="art_5">
                      <td>
                        AZT+3TC+EFV
                        <input type="hidden" name="nama_panduan_orisinil_art_5" value="AZT+3TC+EFV">
                      </td>
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_art_5">
                      </td>
                      <td>
                        <select class="form-control" name="substitusi_art_5">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Risiko hamil</option>
                          <option value="4">4. TB baru</option>
                          <option value="5">5. Ada obat baru</option>
                          <option value="6">6. Stock obat habis</option>
                          <option value="7">7. Alasan lain</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control" name="switch_art_5">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Risiko hamil</option>
                          <option value="4">4. TB baru</option>
                          <option value="5">5. Ada obat baru</option>
                          <option value="6">6. Stock obat habis</option>
                          <option value="7">7. Alasan lain</option>
                          <option value="8">8. Gagal pengobatan secara klinis</option>
                          <option value="9">9. Gagal Imunologis</option>
                          <option value="10">10. Gagal virologis</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control" name="stop_art_5">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Gagal_pengobatan</option>
                          <option value="4">4. Adherens buruk</option>
                          <option value="5">5. Sakit/MRS</option>
                          <option value="6">6. Stok obat habis</option>
                          <option value="7">7. Kekurangan biaya</option>
                          <option value="8">8. Keputusan pasien lainnya</option>
                          <option value="9">9. Lain-lain</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="restar_art_5">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="alasan_art_5">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="nama_panduan_baru_art_5">
                      </td>
                    </tr>
                    <tr id="art_6">
                      <td>
                        AZT+3TC+NVP
                        <input type="hidden" name="nama_panduan_orisinil_art_6" value="AZT+3TC+NVP">
                      </td>
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_art_6">
                      </td>
                      <td>
                        <select class="form-control" name="substitusi_art_6">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Risiko hamil</option>
                          <option value="4">4. TB baru</option>
                          <option value="5">5. Ada obat baru</option>
                          <option value="6">6. Stock obat habis</option>
                          <option value="7">7. Alasan lain</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control" name="switch_art_6">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Risiko hamil</option>
                          <option value="4">4. TB baru</option>
                          <option value="5">5. Ada obat baru</option>
                          <option value="6">6. Stock obat habis</option>
                          <option value="7">7. Alasan lain</option>
                          <option value="8">8. Gagal pengobatan secara klinis</option>
                          <option value="9">9. Gagal Imunologis</option>
                          <option value="10">10. Gagal virologis</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control" name="stop_art_6">
                          <option value="0" selected hidden></option>
                          <option value="1">1. Toksisitas/efek samping</option>
                          <option value="2">2. Hamil</option>
                          <option value="3">3. Gagal_pengobatan</option>
                          <option value="4">4. Adherens buruk</option>
                          <option value="5">5. Sakit/MRS</option>
                          <option value="6">6. Stok obat habis</option>
                          <option value="7">7. Kekurangan biaya</option>
                          <option value="8">8. Keputusan pasien lainnya</option>
                          <option value="9">9. Lain-lain</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="restar_art_6">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="alasan_art_6">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="nama_panduan_baru_art_6">
                      </td>
                    </tr>
                    <tr id="last_row_art">
                      <td colspan="9">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_art"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alasan Lain Substitusi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alasan_lain_substitusi">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Alasan Lain Switch</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alasan_lain_switch">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Alasan Lain Stop</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alasan_lain_stop">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Pengobatan TB Selama Perawatan HIV</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Klasifikasi TB</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="klasifikasi_tb">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Paduan TB</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="ptb" value="1">
                        1. Kategori I
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ptb" value="2">
                        2. Kategori II
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ptb" value="3">
                        3. Kategori anak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ptb" value="4">
                        4. OAT lini 2 (MDR)
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat Pengobatan TB</label>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kabupaten</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="kabupaten_tptb">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Sasaran Kesehatan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_tptb">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Reg. TB Kabupaten/Kota</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="noreg_tptb">
                  </div>
                </div>

              </div>
            </section>

            <section class="panel">
              <header class="panel-heading"></header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tipe TB</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="ttb" value="1">
                        1. Baru
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ttb" value="2">
                        2. Kambuh
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ttb" value="3">
                        3. Default
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ttb" value="4">
                        4. Gagal
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tgl.Mulai Terapi TB</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_mulai_terapi_tb">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tgl.Selesai Terapi TB</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_selesai_terapi_tb">
                  </div>
                </div>

              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Indikasi Insial ART</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Indikasi Inisial ART</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="1">
                        Penasun
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="2">
                        WPS
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="3">
                        LSL
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="4">
                        Waria
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="5">
                        Pasien Ko-Infeksi TB-HIV
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="6">
                        Pasien Ko-Infeksi Hepatitis B-HIV
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="7">
                        ODHA dengan pasangan negatif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="8">
                        Lainnya (CD4 < Stadium Klinis atau 4/Ibu hamil)
                      </label>
                    </div>
                  </div>
                </div>

              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Ikhtisar Follow-Up Perawatan Pasien HIV dan Terapi Antiretroviral (ART)</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Kunjungan <small>(follow-up)</small></label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_kunjungan_follow_up">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Rencana Tanggal Kunjungan</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="rencana_tgl_kunjungan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pasien Rujuk Masuk</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="prm" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="prm" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dengan ART</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="drt" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="drt" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Klinik Sebelumnya</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_klinik_sebelumnya">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">BB</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="bbf">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">TB untuk anak</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tbf">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status Fungsional</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="sfu" value="0">
                        1. Kerja
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sfu" value="1">
                        2. Ambulatori
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sfu" value="2">
                        3. Baring
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Stad Klinis</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="stad_klinis">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hamil/Metode KB</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkb" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkb" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Infeksi Oportunistik</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_1">
                        K - Kandidiasis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_2">
                        D - Diare cryptosporidia
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_3">
                        Cr - Mining itis cryptococal
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_4">
                        PCP - Pneumocystis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_5">
                        CMV - Cytomeg alovirus
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_6">
                        Lain-Lain
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_7">
                        P - Peniliciliosis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_8">
                        Z - Herpes Zoster
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_9">
                        S - Herpessimpleks
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_10">
                        T - Toxoplasmosis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_11">
                        H - Hepatitis
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Uraikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_infop">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Obat untuk IO</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="obat_untuk_io">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status TB</label>
                  <div class="col-lg-9">
                    <div class="radio">
                      <label>
                        <input type="radio" name="stb" value="1">
                        1. Tidak ada gejala/tanda
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="stb" value="2">
                        2. Suspek TB (Rujuk ke klinik DOTS atau pemeriksaan sputum)
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="stb" value="3">
                        3. Terapi TB
                      </label> 
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="stb" value="4">
                        4. Tidak dilakukan skrining
                      </label> 
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pengobatan Pencegahan PPK<br><small>Pengobatan Pencegahan dengan Kotrimoksazol</small></label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="ppk" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ppk" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">PP INH<br><small>Pengobatan Pencegahan dengan INH (isoniazid)</small></label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="inh" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="inh" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hasil Akhir<br> <small>(kode></small></label>
                  <div class="col-lg-9">
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkr" value="1">
                        1. Berobat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkr" value="2">
                        2. Gagal selama pemberian PP INH
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkr" value="3">
                        3. Pindah
                      </label> 
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkr" value="4">
                        4. Meninggal
                      </label> 
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkr" value="5">
                        5. Efek samping Berat
                      </label> 
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Obat ARV dan Dosis yang diberikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="obat_arv">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Adherence ART</label>
                  <div class="col-sm-8">
                    Periksalah adherence dengan menanyakan apakah pasien melupakan dosis obat. Tuliskan perkiraan tingkat adherence, misalnya (dosis 2 kali sehari)
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-lg-9">
                    <div class="radio">
                      <label>
                        <input type="radio" name="adr" value="1">
                        1. (> 95%) : artinya < 3 dosis lupa diminum dalam 30 hari
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="adr" value="2">
                        2. (80-95%) : artinya 3-12 dosis lupa diminum dalam 30 hari
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="adr" value="3">
                        3. (< 80%) : artinya > 12 dosis lupa diminum dalam 30 hari
                      </label> 
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    Jika paduan ART yang diberikan terdiri dari berbagai dosis, maka pilihlah adherence obat yang terjelek.
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Efek Samping ART</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="esart_1">
                        R = Ruam Kulit
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="esart_2">
                        Mua = Mual 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="esart_3">
                        Mun = Muntah
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="esart_4">
                        D = Diare
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="esart_5">
                        N = Neuropati
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="esart_6">
                        Ikt = Ikterus
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="esart_7">
                        An = Anemi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="esart_8">
                        Ll = Lelah
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="esart_9">
                        SK = Sakit Kepala
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="esart_10">
                        Dem = Demam
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="esart_11">
                        Hip = Hipertensifitas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="esart_12">
                        Dep = Depresi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="esart_13">
                        P = Pankreatitis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="esart_14">
                        Lip = Lipodistofi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="esart_15">
                        Ngan = Mengantuk
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="esart_16">
                        Ln = Lain-lain
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Uraikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_esart">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jumlah CD4</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jumlah_cd4">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hasil Lab</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="hasil_lab">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diberikan Kondom</label>
                  <div class="col-lg-9">
                    <div class="radio">
                      <label>
                        <input type="radio" name="dkr" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dkr" value="0">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dkr" value="2">
                        Tidak Tersedia
                      </label> 
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jumlahnya</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jumlah_kondom">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Rujuk ke Spesialis atau Masuk Rumah Sakit (MRS)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="rsmrs">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Akhir Follow-Up</label>
                  <div class="col-lg-9">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fll" value="1">
                        M - Jika pasien meninggal
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fll" value="2">
                        LFU - Jika pasien > 3 bulan tidak datang ke layanan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fll" value="3">
                        RK - Jika pasien dirujuk keluar
                      </label> 
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Meninggal</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_meninggal">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Kunjungan Terakhir</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_kunjungan_terakhir">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Keluar</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_keluar">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Klinik Baru</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_klinik_baru">
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

    {{-- menambah row inputan keluarga --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form_keluarga').click(function() {
          var a = document.getElementById('jumlah_form_keluarga').value;
          a = parseInt(a) + 1;
          $('#last_row_keluarga').before('<tr id="form_'+a+'"> <td> <input type="text" class="form-control" name="nama_'+a+'"> </td> <td> <input type="text" class="form-control" name="hub_'+a+'"> </td> <td> <input type="number" class="form-control" name="umur_'+a+'"> </td> <td> <select class="form-control" name="hiv_'+a+'"> <option disabled selected hidden></option> <option value="+">+</option> <option value="-">-</option> </select> </td> <td> <select class="form-control" name="art_'+a+'"> <option disabled selected hidden></option> <option value="+">+</option> <option value="-">-</option> </select> </td> <td> <input type="text" class="form-control" name="noregnas_'+a+'"> </td> </tr>');
          document.getElementById('jumlah_form_keluarga').value = a;
        });
      });
    </script>

    {{-- menambah row inputan art --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form_art').click(function() {
          var a = document.getElementById('jumlah_form_art').value;
          a = parseInt(a) + 1;
          $('#last_row_art').before('<tr id="art_'+a+'"> <td><input type="text" class="form-control" name="nama_panduan_orisinil_art_'+a+'"></td> <td> <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_art_'+a+'"> </td> <td> <select class="form-control" name="substitusi_art_'+a+'"> <option selected hidden></option> <option value="1">1. Toksisitas/efek samping</option> <option value="2">2. Hamil</option> <option value="3">3. Risiko hamil</option> <option value="4">4. TB baru</option> <option value="5">5. Ada obat baru</option> <option value="6">6. Stock obat habis</option> <option value="7">7. Alasan lain</option> </select> </td> <td> <select class="form-control" name="switch_art_'+a+'"> <option value="0" selected hidden></option> <option value="1">1. Toksisitas/efek samping</option> <option value="2">2. Hamil</option> <option value="3">3. Risiko hamil</option> <option value="4">4. TB baru</option> <option value="5">5. Ada obat baru</option> <option value="6">6. Stock obat habis</option> <option value="7">7. Alasan lain</option> <option value="8">8. Gagal pengobatan secara klinis</option> <option value="9">9. Gagal Imunologis</option> <option value="10">10. Gagal virologis</option> </select> </td> <td> <select class="form-control" name="stop_art_'+a+'"> <option selected hidden></option> <option value="1">1. Toksisitas/efek samping</option> <option value="2">2. Hamil</option> <option value="3">3. Gagal_pengobatan</option> <option value="4">4. Adherens buruk</option> <option value="5">5. Sakit/MRS</option> <option value="6">6. Stok obat habis</option> <option value="7">7. Kekurangan biaya</option> <option value="8">8. Keputusan pasien lainnya</option> <option value="9">9. Lain-lain</option> </select> </td> <td> <input type="text" class="form-control" name="restar_art_'+a+'"> </td> <td> <input type="text" class="form-control" name="alasan_art_'+a+'"> </td> <td> <input type="text" class="form-control" name="nama_panduan_baru_art_'+a+'"> </td> </tr>');
          document.getElementById('jumlah_form_art').value = a;
        });
      });
    </script>
  </body>
  <html>