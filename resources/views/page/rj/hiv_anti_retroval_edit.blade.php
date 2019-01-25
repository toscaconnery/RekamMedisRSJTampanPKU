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
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_hiv_anti_retroval">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_hiv_anti_retroval_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_hiv_anti_retroval_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
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
          <form class="form-horizontal form-validate" method="post" id="register_form" action="rj_hiv_anti_retroval_edit">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">Data Identitas Pasien</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Reg. Nasional</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_reg_nasional" value="{{$no_reg_nasional}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">NIK</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nik" value="{{$nik}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ibu Kandung</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_ibu_kandung" value="{{$nama_ibu_kandung}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat Pasien</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat_pasien" value="{{$alamat_pasien}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Telp. Pasien</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_telp" value="{{$no_telp}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Pengawas Minum Obat (PMO)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_pmo" value="{{$nama_pmo}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hubungan Dengan Pasien</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="hubungan_dengan_pasien" value="{{$hubungan_dengan_pasien}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat PMO</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat_pmo" value="{{$alamat_pmo}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Telp. PMO</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_telp_pmo" value="{{$no_telp_pmo}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Konfirmasi Tes HIV</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_konfirm_tes_hiv" value="{{$tgl_konfirm_tes_hiv}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tempat_tes_hiv" value="{{$tempat_tes_hiv}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Entry Point</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="entry_point" >
                      <option selected hidden>-</option>
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
                    <input type="text" class="form-control" name="keterangan_entry_point" value="{{$keterangan_entry_point}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Alergi Obat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="riwayat_alergi_obat" value="{{$riwayat_alergi_obat}}">
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
                    <select class="form-control input-sm m-bot15" name="pendidikan" >
                      <option selected hidden>-</option>
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
                    <select class="form-control input-sm m-bot15" name="pekerjaan" >
                      <option selected hidden>-</option>
                      <option value="0" {{$pekerjaan == '0' ? 'selected' : ''}}>0 - Tidak Bekerja</option>
                      <option value="1" {{$pekerjaan == '1' ? 'selected' : ''}}>1 - Bekerja</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_pekerjaan" value="{{$nama_pekerjaan}}">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Faktor Risiko</label>
                    <div class="col-lg-8">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_1" {{isset($fr[1]) ? 'checked' : ''}}>
                          1. KIA
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_2" {{isset($fr[2]) ? 'checked' : ''}}>
                          2. Rawat Jalan(TB, Anak, Penyakit Dalam, IMS, lainnya ...)
                        </label>
                        <input type="text" class="form-control" placeholder="sebutkan..." name="keterangan_rawat_jalan" value="{{$keterangan_rawat_jalan}}">
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_3" {{isset($fr[3]) ? 'checked' : ''}}>
                          3. Rawat Inap
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_4" {{isset($fr[4]) ? 'checked' : ''}}>
                          4. Praktek Swasta
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_5" {{isset($fr[5]) ? 'checked' : ''}}>
                          5. Jangkauan (Penasun, WPS, LSL, ...)
                        </label>
                        <input type="text" class="form-control" placeholder="sebutkan..." name="keterangan_jangkauan" value="{{$keterangan_jangkauan}}">
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_6" {{isset($fr[6]) ? 'checked' : ''}}>
                          6. LSM
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_7" {{isset($fr[7]) ? 'checked' : ''}}>
                          7. Datang Sendiri
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="fr_8" {{isset($fr[8]) ? 'checked' : ''}}>
                          8. Lainnya, uraikan ...
                        </label>
                        <input type="text" class="form-control" placeholder="sebutkan..." name="keterangan_fr_lainnya" value="{{$keterangan_fr_lainnya}}">
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
                    <select class="form-control input-sm m-bot15" name="status_pernikahan" >
                      <option selected hidden>-</option>
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
                    @php
                      $idx_keluarga = 0;
                    @endphp
                    @foreach($riwayat_keluarga as $r)
                      @php
                        $idx_keluarga += 1;
                      @endphp
                      <tr>
                        <td>
                          <input type="text" class="form-control" name="nama_{{$idx_keluarga}}" value="{{$r[0]}}">
                        </td>
                        <td>
                          <input type="text" class="form-control" name="hub_{{$idx_keluarga}}" value="{{$r[1]}}">
                        </td>
                        <td>
                          <input type="number" class="form-control" name="umur_{{$idx_keluarga}}" value="{{$r[2]}}">
                        </td>
                        <td>
                          <select class="form-control" name="hiv_{{$idx_keluarga}}">
                            <option selected hidden></option>
                            <option value="+" {{$r[3] == '+' ? 'selected' : ''}}>+</option>
                            <option value="-" {{$r[3] == '-' ? 'selected' : ''}}>-</option>
                          </select>
                        </td>
                        <td>
                          <select class="form-control" name="art_{{$idx_keluarga}}">
                            <option selected hidden></option>
                            <option value="+" {{$r[4] == '+' ? 'selected' : ''}}>+</option>
                            <option value="-" {{$r[4] == '-' ? 'selected' : ''}}>-</option>
                          </select>
                        </td>
                        <td>
                          <input type="text" class="form-control" name="noregnas_{{$idx_keluarga}}" value="{{$r[5]}}">
                        </td>
                      </tr>
                    @endforeach
                    <tr id="last_row_keluarga">
                      <td colspan="9">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_keluarga"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                    <input type="hidden" name="jumlah_form_keluarga" id="jumlah_form_keluarga" value="{{$idx_keluarga}}">
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
                    <select class="form-control input-sm m-bot15" name="pernah_menerima_art" >
                      <option value="1" {{$pernah_menerima_art == '1' ? 'selected' : ''}}>Ya</option>
                      <option value="0" {{$pernah_menerima_art == '0' ? 'selected' : ''}}>Tidak</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">ART</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="jenis_art" >
                      <option value="1" {{$jenis_art == '1' ? 'selected' : ''}}>1.PPIA</option>
                      <option value="2" {{$jenis_art == '2' ? 'selected' : ''}}>2.ART</option>
                      <option value="3" {{$jenis_art == '3' ? 'selected' : ''}}>3.PPP</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat ART dulu</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="tempat_art_dulu" >
                      <option value="1" {{$tempat_art_dulu == '1' ? 'selected' : ''}}>1.RS Pem</option>
                      <option value="2" {{$tempat_art_dulu == '2' ? 'selected' : ''}}>2.RS Swasta</option>
                      <option value="3" {{$tempat_art_dulu == '3' ? 'selected' : ''}}>3.PKM</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama ARV</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_arv" value="{{$nama_arv}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dosis ARV</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dosis_arv" value="{{$dosis_arv}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lama Penggunaan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="lama_penggunaan" value="{{$lama_penggunaan}}">
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
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pkl_1" value="{{$tanggal_pkl_1}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_1" value="{{$stad_klinis_pkl_1}}">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_1" value="{{$bb_pkl_1}}">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_1" >
                          <option value="0" {{$status_fungsional_pkl_1 == '0' ? 'selected' : ''}} hidden></option>
                          <option value="1" {{$status_fungsional_pkl_1 == '1' ? 'selected' : ''}}>Kerja</option>
                          <option value="2" {{$status_fungsional_pkl_1 == '2' ? 'selected' : ''}}>Ambulatori</option>
                          <option value="3" {{$status_fungsional_pkl_1 == '3' ? 'selected' : ''}}>Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_1" class="form-control" value="{{$cd4_pkl_1}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_1" value="{{$lain_lain_pkl_1}}">
                      </td>
                    </tr>
                    <tr>
                      <td>Memenuhi syarat medis untuk ART</td>
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pkl_2" value="{{$tanggal_pkl_2}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_2" value="{{$stad_klinis_pkl_2}}">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_2" value="{{$bb_pkl_2}}">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_2" >
                          <option value="0" {{$status_fungsional_pkl_2 == '0' ? 'selected' : ''}} hidden></option>
                          <option value="1" {{$status_fungsional_pkl_2 == '1' ? 'selected' : ''}}>Kerja</option>
                          <option value="2" {{$status_fungsional_pkl_2 == '2' ? 'selected' : ''}}>Ambulatori</option>
                          <option value="3" {{$status_fungsional_pkl_2 == '3' ? 'selected' : ''}}>Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_2" class="form-control" value="{{$cd4_pkl_2}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_2" value="{{$lain_lain_pkl_2}}">
                      </td>
                    </tr>
                    <tr>
                      <td>Saat mulai ART</td>
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pkl_3" value="{{$tanggal_pkl_3}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_3" value="{{$stad_klinis_pkl_3}}">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_3" value="{{$bb_pkl_3}}">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_3" >
                          <option value="0" {{$status_fungsional_pkl_3 == '0' ? 'selected' : ''}} hidden></option>
                          <option value="1" {{$status_fungsional_pkl_3 == '1' ? 'selected' : ''}}>Kerja</option>
                          <option value="2" {{$status_fungsional_pkl_3 == '2' ? 'selected' : ''}}>Ambulatori</option>
                          <option value="3" {{$status_fungsional_pkl_3 == '3' ? 'selected' : ''}}>Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_3" class="form-control" value="{{$cd4_pkl_3}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_3" value="{{$lain_lain_pkl_3}}">
                      </td>
                    </tr>
                    <tr>
                      <td>Setelah 6 bulan ART</td>
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pkl_4" value="{{$tanggal_pkl_4}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_4" value="{{$stad_klinis_pkl_4}}">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_4" value="{{$bb_pkl_4}}">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_4" >
                          <option value="0" {{$status_fungsional_pkl_4 == '0' ? 'selected' : ''}} hidden></option>
                          <option value="1" {{$status_fungsional_pkl_4 == '1' ? 'selected' : ''}}>Kerja</option>
                          <option value="2" {{$status_fungsional_pkl_4 == '2' ? 'selected' : ''}}>Ambulatori</option>
                          <option value="3" {{$status_fungsional_pkl_4 == '3' ? 'selected' : ''}}>Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_4" class="form-control" value="{{$cd4_pkl_4}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_4" value="{{$lain_lain_pkl_4}}">
                      </td>
                    </tr>
                    <tr>
                      <td>Setelah 12 bulan ART</td>
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pkl_5" value="{{$tanggal_pkl_5}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_5" value="{{$stad_klinis_pkl_5}}">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_5" value="{{$bb_pkl_5}}">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_5" >
                          <option value="0" {{$status_fungsional_pkl_5 == '0' ? 'selected' : ''}} hidden></option>
                          <option value="1" {{$status_fungsional_pkl_5 == '1' ? 'selected' : ''}}>Kerja</option>
                          <option value="2" {{$status_fungsional_pkl_5 == '2' ? 'selected' : ''}}>Ambulatori</option>
                          <option value="3" {{$status_fungsional_pkl_5 == '3' ? 'selected' : ''}}>Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_5" class="form-control" value="{{$cd4_pkl_5}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_5" value="{{$lain_lain_pkl_5}}">
                      </td>
                    </tr>
                    <tr>
                      <td>Setelah 24 bulan ART</td>
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pkl_6" value="{{$tanggal_pkl_6}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="stad_klinis_pkl_6" value="{{$stad_klinis_pkl_6}}">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="bb_pkl_6" value="{{$bb_pkl_6}}">
                      </td>
                      <td>
                        <select class="form-control" name="status_fungsional_pkl_6" >
                          <option value="0" {{$status_fungsional_pkl_6 == '0' ? 'selected' : ''}} hidden></option>
                          <option value="1" {{$status_fungsional_pkl_6 == '1' ? 'selected' : ''}}>Kerja</option>
                          <option value="2" {{$status_fungsional_pkl_6 == '2' ? 'selected' : ''}}>Ambulatori</option>
                          <option value="3" {{$status_fungsional_pkl_6 == '3' ? 'selected' : ''}}>Baring</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="cd4_pkl_6" class="form-control" {{$cd4_pkl_6}}>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="lain_lain_pkl_6" {{$lain_lain_pkl_6}}>
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
                    @php
                      $idx_art = 0;
                    @endphp
                    @foreach($terapi_art as $t)
                      @php
                        $idx_art += 1;
                      @endphp
                      <tr>
                        <td>
                          TDF+3TC+EFV
                          <input type="hidden" name="nama_panduan_orisinil_art_{{$idx_art}}" value="{{$t[0]}}">
                        </td>
                        <td>
                          <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_art_{{$idx_art}}" value="{{$t[1]}}">
                        </td>
                        <td>
                          <select class="form-control" name="substitusi_art_{{$idx_art}}" >
                            <option value="0" {{$t[2] == '0' ? 'selected' : '' }} hidden></option>
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
                          <select class="form-control" name="switch_art_{{$idx_art}}" >
                            <option value="0" {{$t[3] == '0' ? 'selected' : ''}} hidden=""></option>
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
                          <select class="form-control" name="stop_art_{{$idx_art}}">
                            <option value="0" {{$t[4] == '0' ? 'selected' : ''}} hidden=""></option>
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
                          <input type="text" class="form-control" name="restar_art_{{$idx_art}}" value="{{$t[5]}}">
                        </td>
                        <td>
                          <input type="text" class="form-control" name="alasan_art_{{$idx_art}}" value="{{$t[6]}}">
                        </td>
                        <td>
                          <input type="text" class="form-control" name="nama_panduan_baru_art_{{$idx_art}}" value="{{$t[7]}}">
                        </td>
                      </tr>
                    @endforeach
                    <input type="hidden" id="jumlah_form_art" name="jumlah_form_art" value="{{$idx_art}}">
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
                    <input type="text" class="form-control" name="alasan_lain_substitusi" value="{{$alasan_lain_substitusi}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Alasan Lain Switch</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alasan_lain_switch" value="{{$alasan_lain_switch}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Alasan Lain Stop</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alasan_lain_stop" value="{{$alasan_lain_stop}}">
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
                    <input type="text" class="form-control" name="klasifikasi_tb" value="{{$klasifikasi_tb}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Paduan TB</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="ptb" value="1" {{$ptb == '1' ? 'checked' : ''}}>
                        1. Kategori I
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ptb" value="2" {{$ptb == '2' ? 'checked' : ''}}>
                        2. Kategori II
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ptb" value="3" {{$ptb == '3' ? 'checked' : ''}}>
                        3. Kategori anak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ptb" value="4" {{$ptb == '4' ? 'checked' : ''}}>
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
                    <input type="text" class="form-control" name="kabupaten_tptb" value="{{$kabupaten_tptb}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Sasaran Kesehatan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_tptb" value="{{$nama_tptb}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Reg. TB Kabupaten/Kota</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="noreg_tptb" value="{{$noreg_tptb}}">
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
                        <input type="radio" name="ttb" value="1" {{$ttb == '1' ? 'checked' : ''}}>
                        1. Baru
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ttb" value="2" {{$ttb == '2' ? 'checked' : ''}}>
                        2. Kambuh
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ttb" value="3" {{$ttb == '3' ? 'checked' : ''}}>
                        3. Default
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ttb" value="4" {{$ttb == '4' ? 'checked' : ''}}>
                        4. Gagal
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tgl.Mulai Terapi TB</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_mulai_terapi_tb" value="{{$tgl_mulai_terapi_tb}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tgl.Selesai Terapi TB</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_selesai_terapi_tb" value="{{$tgl_selesai_terapi_tb}}">
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
                        <input type="radio" name="ii" value="1" {{$ii == '1' ? 'checked' : ''}}>
                        Penasun
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="2" {{$ii == '2' ? 'checked' : ''}}>
                        WPS
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="3" {{$ii == '3' ? 'checked' : ''}}>
                        LSL
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="4" {{$ii == '4' ? 'checked' : ''}}>
                        Waria
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="5" {{$ii == '5' ? 'checked' : ''}}>
                        Pasien Ko-Infeksi TB-HIV
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="6" {{$ii == '6' ? 'checked' : ''}}>
                        Pasien Ko-Infeksi Hepatitis B-HIV
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="7" {{$ii == '7' ? 'checked' : ''}}>
                        ODHA dengan pasangan negatif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ii" value="8" {{$ii == '8' ? 'checked' : ''}}>
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
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_kunjungan_follow_up" value="{{$tgl_kunjungan_follow_up}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Rencana Tanggal Kunjungan</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="rencana_tgl_kunjungan" value="{{$rencana_tgl_kunjungan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pasien Rujuk Masuk</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="prm" value="1" {{$prm == '1' ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="prm" value="0" {{$prm == '0' ? 'checked' : ''}}>
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
                        <input type="radio" name="drt" value="1" {{$drt == '1' ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="drt" value="0" {{$drt == '0' ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Klinik Sebelumnya</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_klinik_sebelumnya" value="{{$nama_klinik_sebelumnya}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">BB</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="bbf" value="{{$bbf}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">TB untuk anak</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tbf" value="{{$tbf}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status Fungsional</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="sfu" value="0" {{$sfu == '0' ? 'checked' : ''}}>
                        1. Kerja
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sfu" value="1" {{$sfu == '1' ? 'checked' : ''}}>
                        2. Ambulatori
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sfu" value="2" {{$sfu == '2' ? 'checked' : ''}}>
                        3. Baring
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Stad Klinis</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="stad_klinis" value="{{$stad_klinis}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hamil/Metode KB</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkb" value="1" {{$hkb == '1' ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkb" value="0" {{$hkb == '0' ? 'checked' : ''}}>
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
                        <input type="checkbox" name="infop_1" {{isset($infop[1]) ? 'checked' : ''}}>
                        K - Kandidiasis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_2" {{isset($infop[2]) ? 'checked' : ''}}>
                        D - Diare cryptosporidia
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_3" {{isset($infop[3]) ? 'checked' : ''}}>
                        Cr - Mining itis cryptococal
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_4" {{isset($infop[4]) ? 'checked' : ''}}>
                        PCP - Pneumocystis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_5" {{isset($infop[5]) ? 'checked' : ''}}>
                        CMV - Cytomeg alovirus
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_6" {{isset($infop[6]) ? 'checked' : ''}}>
                        Lain-Lain
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_7" {{isset($infop[7]) ? 'checked' : ''}}>
                        P - Peniliciliosis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_8" {{isset($infop[8]) ? 'checked' : ''}}>
                        Z - Herpes Zoster
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_9" {{isset($infop[9]) ? 'checked' : ''}}>
                        S - Herpessimpleks
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_10" {{isset($infop[10]) ? 'checked' : ''}}>
                        T - Toxoplasmosis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="infop_11" {{isset($infop[11]) ? 'checked' : ''}}>
                        H - Hepatitis
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Uraikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_infop" value="{{$keterangan_infop}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Obat untuk IO</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="obat_untuk_io" value="{{$obat_untuk_io}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status TB</label>
                  <div class="col-lg-9">
                    <div class="radio">
                      <label>
                        <input type="radio" name="stb" value="1" {{$stb == '1' ? 'checked' : ''}}>
                        1. Tidak ada gejala/tanda
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="stb" value="2" {{$stb == '2' ? 'checked' : ''}}>
                        2. Suspek TB (Rujuk ke klinik DOTS atau pemeriksaan sputum)
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="stb" value="3" {{$stb == '3' ? 'checked' : ''}}>
                        3. Terapi TB
                      </label> 
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="stb" value="4" {{$stb == '4' ? 'checked' : ''}}>
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
                        <input type="radio" name="ppk" value="1" {{$ppk == '1' ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ppk" value="0" {{$ppk == '0' ? 'checked' : ''}}>
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
                        <input type="radio" name="inh" value="1" {{$inh == '1' ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="inh" value="0" {{$inh == '0' ? 'checked' : ''}}>
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
                        <input type="radio" name="hkr" value="1" {{$hkr == '1' ? 'checked' : ''}}>
                        1. Berobat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkr" value="2" {{$hkr == '2' ? 'checked' : ''}}>
                        2. Gagal selama pemberian PP INH
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkr" value="3" {{$hkr == '3' ? 'checked' : ''}}>
                        3. Pindah
                      </label> 
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkr" value="4" {{$hkr == '4' ? 'checked' : ''}}>
                        4. Meninggal
                      </label> 
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hkr" value="5" {{$hkr == '5' ? 'checked' : ''}}>
                        5. Efek samping Berat
                      </label> 
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Obat ARV dan Dosis yang diberikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="obat_arv" value="{{$obat_arv}}">
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
                        <input type="radio" name="adr" value="1" {{$adr == '1' ? 'checked' : ''}}>
                        1. (> 95%) : artinya < 3 dosis lupa diminum dalam 30 hari
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="adr" value="2" {{$adr == '2' ? 'checked' : ''}}>
                        2. (80-95%) : artinya 3-12 dosis lupa diminum dalam 30 hari
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="adr" value="3" {{$adr == '3' ? 'checked' : ''}}>
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
                        <input type="checkbox" {{isset($esart[1]) ? 'checked' : ''}}>
                        R = Ruam Kulit
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" {{isset($esart[2]) ? 'checked' : ''}}>
                        Mua = Mual 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" {{isset($esart[3]) ? 'checked' : ''}}>
                        Mun = Muntah
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" {{isset($esart[4]) ? 'checked' : ''}}>
                        D = Diare
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" {{isset($esart[5]) ? 'checked' : ''}}>
                        N = Neuropati
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" {{isset($esart[6]) ? 'checked' : ''}}>
                        Ikt = Ikterus
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" {{isset($esart[7]) ? 'checked' : ''}}>
                        An = Anemi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" {{isset($esart[8]) ? 'checked' : ''}}>
                        Ll = Lelah
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" {{isset($esart[9]) ? 'checked' : ''}}>
                        SK = Sakit Kepala
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" {{isset($esart[10]) ? 'checked' : ''}}>
                        Dem = Demam
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" {{isset($esart[11]) ? 'checked' : ''}}>
                        Hip = Hipertensifitas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" {{isset($esart[12]) ? 'checked' : ''}}>
                        Dep = Depresi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" {{isset($esart[13]) ? 'checked' : ''}}>
                        P = Pankreatitis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" {{isset($esart[14]) ? 'checked' : ''}}>
                        Lip = Lipodistofi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" {{isset($esart[15]) ? 'checked' : ''}}>
                        Ngan = Mengantuk
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" {{isset($esart[16]) ? 'checked' : ''}}>
                        Ln = Lain-lain
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Uraikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_esart" value="{{$keterangan_esart}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jumlah CD4</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jumlah_cd4" value="{{$jumlah_cd4}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hasil Lab</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="hasil_lab" value="{{$hasil_lab}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diberikan Kondom</label>
                  <div class="col-lg-9">
                    <div class="radio">
                      <label>
                        <input type="radio" name="dkr" value="1" {{$dkr == '1' ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dkr" value="0" {{$dkr == '0' ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dkr" value="2" {{$dkr == '2' ? 'checked' : ''}}>
                        Tidak Tersedia
                      </label> 
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jumlahnya</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jumlah_kondom" value="{{$jumlah_kondom}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Rujuk ke Spesialis atau Masuk Rumah Sakit (MRS)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="rsmrs" value="{{$rsmrs}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Akhir Follow-Up</label>
                  <div class="col-lg-9">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fll" value="1" {{$fll == '1' ? 'checked' : ''}}>
                        M - Jika pasien meninggal
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fll" value="2" {{$fll == '2' ? 'checked' : ''}}>
                        LFU - Jika pasien > 3 bulan tidak datang ke layanan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fll" value="3" {{$fll == '3' ? 'checked' : ''}}>
                        RK - Jika pasien dirujuk keluar
                      </label> 
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Meninggal</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_meninggal" value="{{$tgl_meninggal}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Kunjungan Terakhir</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_kunjungan_terakhir" value="{{$tgl_kunjungan_terakhir}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Keluar</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_keluar" value="{{$tgl_keluar}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Klinik Baru</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_klinik_baru" value="{{$nama_klinik_baru}}">
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
          $('#last_row_keluarga').before('<tr id="form_'+a+'"> <td> <input type="text" class="form-control" name="nama_'+a+'"> </td> <td> <input type="text" class="form-control" name="hub_'+a+'"> </td> <td> <input type="number" class="form-control" name="umur_'+a+'"> </td> <td> <select class="form-control" name="hiv_'+a+'"> <option selected hidden></option> <option value="+">+</option> <option value="-">-</option> </select> </td> <td> <select class="form-control" name="art_'+a+'"> <option selected hidden></option> <option value="+">+</option> <option value="-">-</option> </select> </td> <td> <input type="text" class="form-control" name="noregnas_'+a+'"> </td> </tr>');
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