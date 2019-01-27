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
                  <td>Ikhtisar Perawatan HIV dan Terapi Antiretroviral (ART)</td>
                  <td>{{$tanggal_pengisian}}</td>
                  <td>{{$nama_pengisi}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_hiv_anti_retroval">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_hiv_anti_retroval_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_hiv_anti_retroval_edit">Edit</i></a>
                      <a class="btn btn-danger" onclick="delete_document()" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_ikhtisarhiv_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal form-validate" id="register_form">
            <section class="panel">
              <header class="panel-heading">Data Identitas Pasien</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Reg. Nasional</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_reg_nasional" disabled value="{{$no_reg_nasional}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">NIK</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nik" disabled value="{{$nik}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ibu Kandung</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_ibu_kandung" disabled value="{{$nama_ibu_kandung}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat Pasien</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat_pasien" disabled value="{{$alamat_pasien}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Telp. Pasien</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_telp" disabled value="{{$no_telp}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Pengawas Minum Obat (PMO)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_pmo" disabled value="{{$nama_pmo}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hubungan Dengan Pasien</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="hubungan_dengan_pasien" disabled value="{{$hubungan_dengan_pasien}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat PMO</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat_pmo" disabled value="{{$alamat_pmo}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Telp. PMO</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_telp_pmo" disabled value="{{$no_telp_pmo}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Konfirmasi Tes HIV</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tgl_konfirm_tes_hiv" disabled value="{{$tgl_konfirm_tes_hiv}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tempat_tes_hiv" disabled value="{{$tempat_tes_hiv}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Entry Point</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="entry_point" disabled>
                      <option disabled selected hidden>-</option>
                      <option value="1" {{$entry_point == '1' ? 'selected' : ''}}>KIA</option>
                      <option value="2" {{$entry_point == '2' ? 'selected' : ''}}>Rawat Jalan (TB, Anak, Penyakit Dalam, IMS, Lainnya ...)</option>
                      <option value="3" {{$entry_point == '3' ? 'selected' : ''}}>Rawat Inap</option>
                      <option value="4" {{$entry_point == '4' ? 'selected' : ''}}>Praktek Swasta</option>
                      <option value="5" {{$entry_point == '5' ? 'selected' : ''}}>Jangkauan (Penasun, WPS, LSL, ...)</option>
                      <option value="6" {{$entry_point == '6' ? 'selected' : ''}}>LSM</option>
                      <option value="7" {{$entry_point == '7' ? 'selected' : ''}}>Datang Sendiri</option>
                      <option value="8" {{$entry_point == '8' ? 'selected' : ''}}>Lainnya, uraikan ...</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_entry_point" disabled value="{{$keterangan_entry_point}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Alergi Obat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="riwayat_alergi_obat" disabled value="{{$riwayat_alergi_obat}}">
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
                    <select class="form-control input-sm m-bot15" name="pendidikan" disabled>
                      <option disabled selected hidden>-</option>
                      <option value="0" {{$pendidikan == '0' ? 'selected' : ''}}>0 - Tidak Sekolah</option>
                      <option value="1" {{$pendidikan == '1' ? 'selected' : ''}}>1 - SD</option>
                      <option value="2" {{$pendidikan == '2' ? 'selected' : ''}}>2 - SMP</option>
                      <option value="3" {{$pendidikan == '3' ? 'selected' : ''}}>3 - SMA</option>
                      <option value="4" {{$pendidikan == '4' ? 'selected' : ''}}>4 - Akademi/PT</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="pekerjaan" disabled>
                      <option disabled selected hidden>-</option>
                      <option value="0" {{$pekerjaan == '0' ? 'selected' : ''}}>0 - Tidak Bekerja</option>
                      <option value="1" {{$pekerjaan == '1' ? 'selected' : ''}}>1 - Bekerja</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_pekerjaan" disabled value="{{$nama_pekerjaan}}">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Faktor Risiko</label>
                    <div class="col-lg-8">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_1" disabled {{isset($fr[1]) ? 'checked' : ''}}>
                          1. KIA
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_2" disabled {{isset($fr[2]) ? 'checked' : ''}}>
                          2. Rawat Jalan(TB, Anak, Penyakit Dalam, IMS, lainnya ...)
                        </label>
                        <input type="text" class="form-control" placeholder="sebutkan..." name="keterangan_rawat_jalan" disabled value="{{$keterangan_rawat_jalan}}">
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_3" disabled {{isset($fr[3]) ? 'checked' : ''}}>
                          3. Rawat Inap
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_4" disabled {{isset($fr[4]) ? 'checked' : ''}}>
                          4. Praktek Swasta
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_5" disabled {{isset($fr[5]) ? 'checked' : ''}}>
                          5. Jangkauan (Penasun, WPS, LSL, ...)
                        </label>
                        <input type="text" class="form-control" placeholder="sebutkan..." name="keterangan_jangkauan" disabled value="{{$keterangan_jangkauan}}">
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_6" disabled {{isset($fr[6]) ? 'checked' : ''}}>
                          6. LSM
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_7" disabled {{isset($fr[7]) ? 'checked' : ''}}>
                          7. Datang Sendiri
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_8" disabled {{isset($fr[8]) ? 'checked' : ''}}>
                          8. Lainnya, uraikan ...
                        </label>
                        <input type="text" class="form-control" placeholder="sebutkan..." name="keterangan_fr_lainnya" disabled value="{{$keterangan_fr_lainnya}}">
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
                    <select class="form-control input-sm m-bot15" name="status_pernikahan" disabled>
                      <option disabled selected hidden>-</option>
                      <option value="1" {{$status_pernikahan == '1' ? 'selected' : ''}}>Menikah</option>
                      <option value="2" {{$status_pernikahan == '2' ? 'selected' : ''}}>Belum Menikah</option>
                      <option value="3" {{$status_pernikahan == '3' ? 'selected' : ''}}>Janda/Duda</option>
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
                    @foreach($riwayat_keluarga as $r)
                    <tr>
                      <td>
                        <input type="text" class="form-control" disabled value="{{$r[0]}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" disabled value="{{$r[1]}}">
                      </td>
                      <td>
                        <input type="number" class="form-control" disabled value="{{$r[2]}}">
                      </td>
                      <td>
                        <select class="form-control" disabled>
                          <option disabled selected hidden></option>
                          <option value="+" {{$r[3] == '+' ? 'selected' : ''}}>+</option>
                          <option value="-" {{$r[3] == '-' ? 'selected' : ''}}>-</option>
                        </select>
                      </td>
                      <td>
                        <select class="form-control" disabled>
                          <option disabled selected hidden></option>
                          <option value="+" {{$r[4] == '+' ? 'selected' : ''}}>+</option>
                          <option value="-" {{$r[4] == '-' ? 'selected' : ''}}>-</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" disabled value="{{$r[5]}}">
                      </td>
                    </tr>
                    @endforeach
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
                    <select class="form-control input-sm m-bot15" name="pernah_menerima_art" disabled>
                      <option value="1" {{$pernah_menerima_art == '1' ? 'selected' : ''}}>Ya</option>
                      <option value="0" {{$pernah_menerima_art == '0' ? 'selected' : ''}}>Tidak</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">ART</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="jenis_art" disabled>
                      <option value="1" {{$jenis_art == '1' ? 'selected' : ''}}>1.PPIA</option>
                      <option value="2" {{$jenis_art == '2' ? 'selected' : ''}}>2.ART</option>
                      <option value="3" {{$jenis_art == '3' ? 'selected' : ''}}>3.PPP</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat ART dulu</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="tempat_art_dulu" disabled>
                      <option value="1" {{$tempat_art_dulu == '1' ? 'selected' : ''}}>1.RS Pem</option>
                      <option value="2" {{$tempat_art_dulu == '2' ? 'selected' : ''}}>2.RS Swasta</option>
                      <option value="3" {{$tempat_art_dulu == '3' ? 'selected' : ''}}>3.PKM</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama ARV</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_arv" disabled value="{{$nama_arv}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dosis ARV</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dosis_arv" disabled value="{{$dosis_arv}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lama Penggunaan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="lama_penggunaan" disabled value="{{$lama_penggunaan}}">
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
                        <input type="text" class="form-control" name="tanggal_pkl_1" disabled value="{{$tanggal_pkl_1}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_1" disabled value="{{$stad_klinis_pkl_1}}">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_1" disabled value="{{$bb_pkl_1}}">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_1" disabled>
                          <option value="0" {{$status_fungsional_pkl_1 == '0' ? 'selected' : ''}}></option>
                          <option value="1" {{$status_fungsional_pkl_1 == '1' ? 'selected' : ''}}>Kerja</option>
                          <option value="2" {{$status_fungsional_pkl_1 == '2' ? 'selected' : ''}}>Ambulatori</option>
                          <option value="3" {{$status_fungsional_pkl_1 == '3' ? 'selected' : ''}}>Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_1" class="form-control" disabled value="{{$cd4_pkl_1}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_1" disabled value="{{$lain_lain_pkl_1}}">
                      </td>
                    </tr>
                    <tr>
                      <td>Memenuhi syarat medis untuk ART</td>
                      <td>
                        <input type="text" class="form-control" name="tanggal_pkl_2" disabled value="{{$tanggal_pkl_2}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_2" disabled value="{{$stad_klinis_pkl_2}}">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_2" disabled value="{{$bb_pkl_2}}">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_2" disabled>
                          <option value="0" {{$status_fungsional_pkl_2 == '0' ? 'selected' : ''}}></option>
                          <option value="1" {{$status_fungsional_pkl_2 == '1' ? 'selected' : ''}}>Kerja</option>
                          <option value="2" {{$status_fungsional_pkl_2 == '2' ? 'selected' : ''}}>Ambulatori</option>
                          <option value="3" {{$status_fungsional_pkl_2 == '3' ? 'selected' : ''}}>Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_2" class="form-control" disabled value="{{$cd4_pkl_2}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_2" disabled value="{{$lain_lain_pkl_2}}">
                      </td>
                    </tr>
                    <tr>
                      <td>Saat mulai ART</td>
                      <td>
                        <input type="text" class="form-control" name="tanggal_pkl_3" disabled value="{{$tanggal_pkl_3}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_3" disabled value="{{$stad_klinis_pkl_3}}">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_3" disabled value="{{$bb_pkl_3}}">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_3" disabled>
                          <option value="0" {{$status_fungsional_pkl_3 == '0' ? 'selected' : ''}}></option>
                          <option value="1" {{$status_fungsional_pkl_3 == '1' ? 'selected' : ''}}>Kerja</option>
                          <option value="2" {{$status_fungsional_pkl_3 == '2' ? 'selected' : ''}}>Ambulatori</option>
                          <option value="3" {{$status_fungsional_pkl_3 == '3' ? 'selected' : ''}}>Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_3" class="form-control" disabled value="{{$cd4_pkl_3}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_3" disabled value="{{$lain_lain_pkl_3}}">
                      </td>
                    </tr>
                    <tr>
                      <td>Setelah 6 bulan ART</td>
                      <td>
                        <input type="text" class="form-control" name="tanggal_pkl_4" disabled value="{{$tanggal_pkl_4}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_4" disabled value="{{$stad_klinis_pkl_4}}">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_4" disabled value="{{$bb_pkl_4}}">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_4" disabled>
                          <option value="0" {{$status_fungsional_pkl_4 == '0' ? 'selected' : ''}}></option>
                          <option value="1" {{$status_fungsional_pkl_4 == '1' ? 'selected' : ''}}>Kerja</option>
                          <option value="2" {{$status_fungsional_pkl_4 == '2' ? 'selected' : ''}}>Ambulatori</option>
                          <option value="3" {{$status_fungsional_pkl_4 == '3' ? 'selected' : ''}}>Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_4" class="form-control" disabled value="{{$cd4_pkl_4}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_4" disabled value="{{$lain_lain_pkl_4}}">
                      </td>
                    </tr>
                    <tr>
                      <td>Setelah 12 bulan ART</td>
                      <td>
                        <input type="text" class="form-control" name="tanggal_pkl_5" disabled value="{{$tanggal_pkl_5}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_5" disabled value="{{$stad_klinis_pkl_5}}">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_5" disabled value="{{$bb_pkl_5}}">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_5" disabled>
                          <option value="0" {{$status_fungsional_pkl_5 == '0' ? 'selected' : ''}}></option>
                          <option value="1" {{$status_fungsional_pkl_5 == '1' ? 'selected' : ''}}>Kerja</option>
                          <option value="2" {{$status_fungsional_pkl_5 == '2' ? 'selected' : ''}}>Ambulatori</option>
                          <option value="3" {{$status_fungsional_pkl_5 == '3' ? 'selected' : ''}}>Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_5" class="form-control" disabled value="{{$cd4_pkl_5}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_5" disabled value="{{$lain_lain_pkl_5}}">
                      </td>
                    </tr>
                    <tr>
                      <td>Setelah 24 bulan ART</td>
                      <td>
                        <input type="text" class="form-control" name="tanggal_pkl_6" disabled value="{{$tanggal_pkl_6}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_6" disabled value="{{$stad_klinis_pkl_6}}">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_6" disabled value="{{$bb_pkl_6}}">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_6" disabled>
                          <option value="0" {{$status_fungsional_pkl_6 == '0' ? 'selected' : ''}}></option>
                          <option value="1" {{$status_fungsional_pkl_6 == '1' ? 'selected' : ''}}>Kerja</option>
                          <option value="2" {{$status_fungsional_pkl_6 == '2' ? 'selected' : ''}}>Ambulatori</option>
                          <option value="3" {{$status_fungsional_pkl_6 == '3' ? 'selected' : ''}}>Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_6" class="form-control" disabled value="{{$cd4_pkl_6}}" >
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_6" disabled value="{{$lain_lain_pkl_6}}">
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
                    @foreach($terapi_art as $t)
                      <tr>
                        <td>
                          TDF+3TC+EFV
                          <input type="hidden" name="nama_panduan_orisinil_art_1" disabled value="{{$t[0]}}">
                        </td>
                        <td>
                          <input type="text" style="width:300%" class="form-control" name="tanggal_art_1" disabled value="{{$t[1]}}">
                        </td>
                        <td>
                          <select class="form-control" name="substitusi_art_" disabled>
                            <option value="0" {{$t[2] == '0' ? 'selected' : '' }}></option>
                            <option value="1" {{$t[2] == '1' ? 'selected' : '' }}>1. Toksisitas/efek samping</option>
                            <option value="2" {{$t[2] == '2' ? 'selected' : '' }}>2. Hamil</option>
                            <option value="3" {{$t[2] == '3' ? 'selected' : '' }}>3. Risiko hamil</option>
                            <option value="4" {{$t[2] == '4' ? 'selected' : '' }}>4. TB baru</option>
                            <option value="5" {{$t[2] == '5' ? 'selected' : '' }}>5. Ada obat baru</option>
                            <option value="6" {{$t[2] == '6' ? 'selected' : '' }}>6. Stock obat habis</option>
                            <option value="7" {{$t[2] == '7' ? 'selected' : '' }}>7. Alasan lain</option>
                          </select>
                        </td>
                        <td>
                          <select class="form-control" name="switch_art_" disabled>
                            <option value="0" {{$t[3] == '0' ? 'selected' : ''}}></option>
                            <option value="1" {{$t[3] == '1' ? 'selected' : ''}}>1. Toksisitas/efek samping</option>
                            <option value="2" {{$t[3] == '2' ? 'selected' : ''}}>2. Hamil</option>
                            <option value="3" {{$t[3] == '3' ? 'selected' : ''}}>3. Risiko hamil</option>
                            <option value="4" {{$t[3] == '4' ? 'selected' : ''}}>4. TB baru</option>
                            <option value="5" {{$t[3] == '5' ? 'selected' : ''}}>5. Ada obat baru</option>
                            <option value="6" {{$t[3] == '6' ? 'selected' : ''}}>6. Stock obat habis</option>
                            <option value="7" {{$t[3] == '7' ? 'selected' : ''}}>7. Alasan lain</option>
                            <option value="8" {{$t[3] == '8' ? 'selected' : ''}}>8. Gagal pengobatan secara klinis</option>
                            <option value="9" {{$t[3] == '9' ? 'selected' : ''}}>9. Gagal Imunologis</option>
                            <option value="10" {{$t[3] == '10' ? 'selected' : ''}}>10. Gagal virologis</option>
                          </select>
                        </td>
                        <td>
                          <select class="form-control" name="stop_art_" disabled>
                            <option value="0" {{$t[4] == '0' ? 'selected' : ''}}></option>
                            <option value="1" {{$t[4] == '1' ? 'selected' : ''}}>1. Toksisitas/efek samping</option>
                            <option value="2" {{$t[4] == '2' ? 'selected' : ''}}>2. Hamil</option>
                            <option value="3" {{$t[4] == '3' ? 'selected' : ''}}>3. Gagal_pengobatan</option>
                            <option value="4" {{$t[4] == '4' ? 'selected' : ''}}>4. Adherens buruk</option>
                            <option value="5" {{$t[4] == '5' ? 'selected' : ''}}>5. Sakit/MRS</option>
                            <option value="6" {{$t[4] == '6' ? 'selected' : ''}}>6. Stok obat habis</option>
                            <option value="7" {{$t[4] == '7' ? 'selected' : ''}}>7. Kekurangan biaya</option>
                            <option value="8" {{$t[4] == '8' ? 'selected' : ''}}>8. Keputusan pasien lainnya</option>
                            <option value="9" {{$t[4] == '9' ? 'selected' : ''}}>9. Lain-lain</option>
                          </select>
                        </td>
                        <td>
                          <input type="text" class="form-control" disabled value="{{$t[5]}}">
                        </td>
                        <td>
                          <input type="text" class="form-control" disabled value="{{$t[6]}}">
                        </td>
                        <td>
                          <input type="text" class="form-control" disabled value="{{$t[7]}}">
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alasan Lain Substitusi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alasan_lain_substitusi" disabled value="{{$alasan_lain_substitusi}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Alasan Lain Switch</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alasan_lain_switch" disabled value="{{$alasan_lain_switch}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Alasan Lain Stop</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alasan_lain_stop" disabled value="{{$alasan_lain_stop}}">
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
                    <input type="text" class="form-control" name="klasifikasi_tb" disabled value="{{$klasifikasi_tb}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Paduan TB</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="ptb" value="1" disabled {{$ptb == '1' ? 'checked' : ''}}>
                        1. Kategori I
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ptb" value="2" disabled {{$ptb == '2' ? 'checked' : ''}}>
                        2. Kategori II
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ptb" value="3" disabled {{$ptb == '3' ? 'checked' : ''}}>
                        3. Kategori anak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ptb" value="4" disabled {{$ptb == '4' ? 'checked' : ''}}>
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
                    <input type="text" class="form-control" name="kabupaten_tptb" disabled value="{{$kabupaten_tptb}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Sasaran Kesehatan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_tptb" disabled value="{{$nama_tptb}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Reg. TB Kabupaten/Kota</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="noreg_tptb" disabled value="{{$noreg_tptb}}">
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
                        <input type="radio" name="ttb" value="1" disabled {{$ttb == '1' ? 'checked' : ''}}>
                        1. Baru
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ttb" value="2" disabled {{$ttb == '2' ? 'checked' : ''}}>
                        2. Kambuh
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ttb" value="3" disabled {{$ttb == '3' ? 'checked' : ''}}>
                        3. Default
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ttb" value="4" disabled {{$ttb == '4' ? 'checked' : ''}}>
                        4. Gagal
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tgl.Mulai Terapi TB</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tgl_mulai_terapi_tb" disabled value="{{$tgl_mulai_terapi_tb}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tgl.Selesai Terapi TB</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tgl_selesai_terapi_tb" disabled value="{{$tgl_selesai_terapi_tb}}">
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
                        <input type="radio" name="ii" value="1" disabled {{$ii == '1' ? 'checked' : ''}}>
                        Penasun
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="2" disabled {{$ii == '2' ? 'checked' : ''}}>
                        WPS
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="3" disabled {{$ii == '3' ? 'checked' : ''}}>
                        LSL
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="4" disabled {{$ii == '4' ? 'checked' : ''}}>
                        Waria
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="5" disabled {{$ii == '5' ? 'checked' : ''}}>
                        Pasien Ko-Infeksi TB-HIV
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="6" disabled {{$ii == '6' ? 'checked' : ''}}>
                        Pasien Ko-Infeksi Hepatitis B-HIV
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="7" disabled {{$ii == '7' ? 'checked' : ''}}>
                        ODHA dengan pasangan negatif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="8" disabled {{$ii == '8' ? 'checked' : ''}}>
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
                    <input type="text" class="form-control" name="tgl_kunjungan_follow_up" disabled value="{{$tgl_kunjungan_follow_up}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Rencana Tanggal Kunjungan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="rencana_tgl_kunjungan" disabled value="{{$rencana_tgl_kunjungan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pasien Rujuk Masuk</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="prm" value="1" disabled {{$prm == '1' ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="prm" value="0" disabled {{$prm == '0' ? 'checked' : ''}}>
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
                        <input type="radio" name="drt" value="1" disabled {{$drt == '1' ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="drt" value="0" disabled {{$drt == '0' ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Klinik Sebelumnya</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_klinik_sebelumnya" disabled value="{{$nama_klinik_sebelumnya}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">BB</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="bbf" disabled value="{{$bbf}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">TB untuk anak</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tbf" disabled value="{{$tbf}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status Fungsional</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="sfu" value="0" disabled {{$sfu == '0' ? 'checked' : ''}}>
                        1. Kerja
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sfu" value="1" disabled {{$sfu == '1' ? 'checked' : ''}}>
                        2. Ambulatori
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sfu" value="2" disabled {{$sfu == '2' ? 'checked' : ''}}>
                        3. Baring
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Stad Klinis</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="stad_klinis" disabled value="{{$stad_klinis}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hamil/Metode KB</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkb" value="1" disabled {{$hkb == '1' ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkb" value="0" disabled {{$hkb == '0' ? 'checked' : ''}}>
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
                        <input type="checkbox" name="infop_1" disabled {{isset($infop[1]) ? 'checked' : ''}}>
                        K - Kandidiasis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_2" disabled {{isset($infop[2]) ? 'checked' : ''}}>
                        D - Diare cryptosporidia
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_3" disabled {{isset($infop[3]) ? 'checked' : ''}}>
                        Cr - Mining itis cryptococal
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_4" disabled {{isset($infop[4]) ? 'checked' : ''}}>
                        PCP - Pneumocystis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_5" disabled {{isset($infop[5]) ? 'checked' : ''}}>
                        CMV - Cytomeg alovirus
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_6" disabled {{isset($infop[6]) ? 'checked' : ''}}>
                        Lain-Lain
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_7" disabled {{isset($infop[7]) ? 'checked' : ''}}>
                        P - Peniliciliosis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_8" disabled {{isset($infop[8]) ? 'checked' : ''}}>
                        Z - Herpes Zoster
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_9" disabled {{isset($infop[9]) ? 'checked' : ''}}>
                        S - Herpessimpleks
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_10" disabled {{isset($infop[10]) ? 'checked' : ''}}>
                        T - Toxoplasmosis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_11" disabled {{isset($infop[11]) ? 'checked' : ''}}>
                        H - Hepatitis
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Uraikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_infop" disabled value="{{$keterangan_infop}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Obat untuk IO</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="obat_untuk_io" disabled value="{{$obat_untuk_io}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status TB</label>
                  <div class="col-lg-9">
                    <div class="radio">
                      <label>
                        <input type="radio" name="stb" value="1" disabled {{$stb == '1' ? 'checked' : ''}}>
                        1. Tidak ada gejala/tanda
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="stb" value="2" disabled {{$stb == '2' ? 'checked' : ''}}>
                        2. Suspek TB (Rujuk ke klinik DOTS atau pemeriksaan sputum)
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="stb" value="3" disabled {{$stb == '3' ? 'checked' : ''}}>
                        3. Terapi TB
                      </label> 
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="stb" value="4" disabled {{$stb == '4' ? 'checked' : ''}}>
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
                        <input type="radio" name="ppk" value="1" disabled {{$ppk == '1' ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ppk" value="0" disabled {{$ppk == '0' ? 'checked' : ''}}>
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
                        <input type="radio" name="inh" value="1" disabled {{$inh == '1' ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="inh" value="0" disabled {{$inh == '0' ? 'checked' : ''}}>
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
                        <input type="radio" name="hkr" value="1" disabled {{$hkr == '1' ? 'checked' : ''}}>
                        1. Berobat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkr" value="2" disabled {{$hkr == '2' ? 'checked' : ''}}>
                        2. Gagal selama pemberian PP INH
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkr" value="3" disabled {{$hkr == '3' ? 'checked' : ''}}>
                        3. Pindah
                      </label> 
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkr" value="4" disabled {{$hkr == '4' ? 'checked' : ''}}>
                        4. Meninggal
                      </label> 
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkr" value="5" disabled {{$hkr == '5' ? 'checked' : ''}}>
                        5. Efek samping Berat
                      </label> 
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Obat ARV dan Dosis yang diberikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="obat_arv" disabled value="{{$obat_arv}}">
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
                        <input type="radio" name="adr" value="1" disabled {{$adr == '1' ? 'checked' : ''}}>
                        1. (> 95%) : artinya < 3 dosis lupa diminum dalam 30 hari
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="adr" value="2" disabled {{$adr == '2' ? 'checked' : ''}}>
                        2. (80-95%) : artinya 3-12 dosis lupa diminum dalam 30 hari
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="adr" value="3" disabled {{$adr == '3' ? 'checked' : ''}}>
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
                        <input type="checkbox" disabled {{isset($esart[1]) ? 'checked' : ''}}>
                        R = Ruam Kulit
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{isset($esart[2]) ? 'checked' : ''}}>
                        Mua = Mual 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{isset($esart[3]) ? 'checked' : ''}}>
                        Mun = Muntah
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{isset($esart[4]) ? 'checked' : ''}}>
                        D = Diare
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{isset($esart[5]) ? 'checked' : ''}}>
                        N = Neuropati
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{isset($esart[6]) ? 'checked' : ''}}>
                        Ikt = Ikterus
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{isset($esart[7]) ? 'checked' : ''}}>
                        An = Anemi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{isset($esart[8]) ? 'checked' : ''}}>
                        Ll = Lelah
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{isset($esart[9]) ? 'checked' : ''}}>
                        SK = Sakit Kepala
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{isset($esart[10]) ? 'checked' : ''}}>
                        Dem = Demam
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{isset($esart[11]) ? 'checked' : ''}}>
                        Hip = Hipertensifitas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{isset($esart[12]) ? 'checked' : ''}}>
                        Dep = Depresi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{isset($esart[13]) ? 'checked' : ''}}>
                        P = Pankreatitis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{isset($esart[14]) ? 'checked' : ''}}>
                        Lip = Lipodistofi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{isset($esart[15]) ? 'checked' : ''}}>
                        Ngan = Mengantuk
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{isset($esart[16]) ? 'checked' : ''}}>
                        Ln = Lain-lain
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Uraikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_esart" disabled value="{{$keterangan_esart}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jumlah CD4</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jumlah_cd4" disabled value="{{$jumlah_cd4}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hasil Lab</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="hasil_lab" disabled value="{{$hasil_lab}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diberikan Kondom</label>
                  <div class="col-lg-9">
                    <div class="radio">
                      <label>
                        <input type="radio" name="dkr" value="1" disabled {{$dkr == '1' ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dkr" value="0" disabled {{$dkr == '0' ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dkr" value="2" disabled {{$dkr == '2' ? 'checked' : ''}}>
                        Tidak Tersedia
                      </label> 
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jumlahnya</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jumlah_kondom" disabled value="{{$jumlah_kondom}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Rujuk ke Spesialis atau Masuk Rumah Sakit (MRS)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="rsmrs" disabled value="{{$rsmrs}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Akhir Follow-Up</label>
                  <div class="col-lg-9">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fll" value="1" disabled {{$fll == '1' ? 'checked' : ''}}>
                        M - Jika pasien meninggal
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fll" value="2" disabled {{$fll == '2' ? 'checked' : ''}}>
                        LFU - Jika pasien > 3 bulan tidak datang ke layanan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fll" value="3" disabled {{$fll == '3' ? 'checked' : ''}}>
                        RK - Jika pasien dirujuk keluar
                      </label> 
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Meninggal</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tgl_meninggal" disabled value="{{$tgl_meninggal}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Kunjungan Terakhir</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tgl_kunjungan_terakhir" disabled value="{{$tgl_kunjungan_terakhir}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Keluar</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tgl_keluar" disabled value="{{$tgl_keluar}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Klinik Baru</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_klinik_baru" disabled value="{{$nama_klinik_baru}}">
                  </div>
                </div>
              </div>
            </section>

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
          $('#last_row_art').before('<tr id="art_'+a+'"> <td><input type="text" class="form-control" name="nama_panduan_orisinil_art_'+a+'"></td> <td> <input type="text" class="form-control" name="tanggal_art_'+a+'"> </td> <td> <select class="form-control" name="substitusi_art_'+a+'"> <option selected hidden></option> <option value="1">1. Toksisitas/efek samping</option> <option value="2">2. Hamil</option> <option value="3">3. Risiko hamil</option> <option value="4">4. TB baru</option> <option value="5">5. Ada obat baru</option> <option value="6">6. Stock obat habis</option> <option value="7">7. Alasan lain</option> </select> </td> <td> <select class="form-control" name="switch_art_'+a+'"> <option selected hidden></option> <option value="1">1. Toksisitas/efek samping</option> <option value="2">2. Hamil</option> <option value="3">3. Risiko hamil</option> <option value="4">4. TB baru</option> <option value="5">5. Ada obat baru</option> <option value="6">6. Stock obat habis</option> <option value="7">7. Alasan lain</option> <option value="8">8. Gagal pengobatan secara klinis</option> <option value="9">9. Gagal Imunologis</option> <option value="10">10. Gagal virologis</option> </select> </td> <td> <select class="form-control" name="stop_art_'+a+'"> <option selected hidden></option> <option value="1">1. Toksisitas/efek samping</option> <option value="2">2. Hamil</option> <option value="3">3. Gagal_pengobatan</option> <option value="4">4. Adherens buruk</option> <option value="5">5. Sakit/MRS</option> <option value="6">6. Stok obat habis</option> <option value="7">7. Kekurangan biaya</option> <option value="8">8. Keputusan pasien lainnya</option> <option value="9">9. Lain-lain</option> </select> </td> <td> <input type="text" class="form-control" name="restar_art_'+a+'"> </td> <td> <input type="text" class="form-control" name="alasan_art_'+a+'"> </td> <td> <input type="text" class="form-control" name="nama_panduan_baru_art_'+a+'"> </td> </tr>');
          document.getElementById('jumlah_form_art').value = a;
        });
      });
    </script>

    <script type="text/javascript">
      function delete_document() {
        Swal.fire({
          title: 'Hapus dokumen ini?',
          text: "Dokumen yang telah dihapus tidak akan bisa diakses lagi.",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus dokumen ini',
          cancelButtonText: 'Batalkan'
        }).then((result) => {
          if (result.value) {
            window.location.href = '{{url('/rj_hiv_anti_retroval_delete')}}';
          }
        })
      }
    </script>

  </body>
  <html>