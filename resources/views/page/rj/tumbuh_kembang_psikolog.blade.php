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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL PASIEN TUMBUH KEMBANG DAN EDUKASI TERPADU</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Asesmen Awal Pasien Tumbuh Kembang dan Edukasi Terpadu
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
                  <td>Asesmen Awal Pasien Tumbuh Kembang dan Edukasi Terpadu</td>
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
          <form class="form-validate form-horizontal" method="post" id="register_form" action="rj_asesmen_awal_tumbuh_kembang_psikolog">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Data Anak
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="nama_anak">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat Lahir</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control required" name="tempat_lahir_anak">
                  </div>
                  <label class="col-sm-1 control-label">Tanggal Lahir</label>
                  <div class="col-sm-2">
                    <input type="date" class="form-control required" name="tanggal_lahir_anak">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-8">
                    <select class="form-control required" name="jenis_kelamin_anak">
                      <option value=""></option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="agama_anak">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sekolah</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control required" name="sekolah_anak">
                  </div>
                  <label class="col-sm-1 control-label">Kelas</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control required" name="kelas_anak">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat Sekolah/Terapi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="alamat_sekolah_anak">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Suku Bangsa</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="suku_bangsa_anak">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bahasa Sehari-hari</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="bahasa_anak">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat Lengkap</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="alamat_lengkap_anak">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No.Telp</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="no_telp_anak">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Anak tinggal dengan</label>
                  <div class="col-lg-10" class="required">
                    <div class="radio">
                      <label>
                        <input type="radio" name="tinggal_dengan" value="Ayah dan ibu">
                        Ayah dan ibu
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tinggal_dengan" value="Ayah saja">
                        Ayah saja
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tinggal_dengan" value="Ibu saja">
                        Ibu saja
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tinggal_dengan" value="Lainnya">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tinggal_dengan_lainnya">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Data Ayah
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="nama_ayah">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat Lahir</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control required" name="tempat_lahir_ayah">
                  </div>
                  <label class="col-sm-1 control-label">Tanggal Lahir</label>
                  <div class="col-sm-2">
                    <input type="date" class="form-control required" name="tanggal_lahir_ayah">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="agama_ayah">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pendidikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="pendidikan_ayah">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="pekerjaan_ayah">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat Pekerjaan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="alamat_pekerjaan_ayah">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perkawinan ke</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="perkawinan_ke_ayah">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lama Perkawinan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="lama_perkawinan_ayah">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Status</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="status_ayah" value="Kawin">
                        Kawin
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="status_ayah" value="Cerai">
                        Cerai
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="status_ayah" value="Berpisah">
                        Berpisah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="status_ayah" value="Lainnya">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="status_ayah_lainnya">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Data Ibu
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="nama_ibu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat Lahir</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control required" name="tempat_lahir_ibu">
                  </div>
                  <label class="col-sm-1 control-label">Tanggal Lahir</label>
                  <div class="col-sm-2">
                    <input type="date" class="form-control required" name="tanggal_lahir_ibu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="agama_ibu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pendidikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="pendidikan_ibu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="pekerjaan_ibu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat Pekerjaan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="alamat_pekerjaan_ibu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perkawinan ke</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="perkawinan_ke_ibu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lama Perkawinan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="lama_perkawinan_ibu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Status</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="status_ibu" value="Kawin">
                        Kawin
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="status_ibu" value="Cerai">
                        Cerai
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="status_ibu" value="Berpisah">
                        Berpisah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="status_ibu" value="Lainnya">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="status_ibu_lainnya">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Data Saudara Kandung
              </header>
              <div class="panel-body">
                <input type="hidden" name="jumlah_form_saudara" id="jumlah_form_saudara" value="1">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 24%; text-align: center;">Umur</th>
                      <th style="width: 24%; text-align: center;">Jenis Kelamin</th>
                      <th style="width: 24%; text-align: center;">Pendidikan</th>
                      <th style="width: 24%; text-align: center;">Pekerjaan</th>
                      <th style="width: 4%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="text" class="form-control required" name="umur_1"></td>
                      <td>
                        <select name="jenis_kelamin_1" class="form-control required">
                          <option value=""></option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </td>
                      <td><input type="text" class="form-control required" name="pendidikan_1"></td>
                      <td><input type="text" class="form-control required" name="pekerjaan_1"></td>
                      <td>
                      </td>
                    </tr>
                    <tr id="last_row">
                      <td colspan="9">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Data Saudara Tiri
              </header>
              <div class="panel-body">
                <input type="hidden" name="jumlah_form_saudara_tiri" id="jumlah_form_saudara_tiri" value="1">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 24%; text-align: center;">Umur</th>
                      <th style="width: 24%; text-align: center;">Jenis Kelamin</th>
                      <th style="width: 24%; text-align: center;">Pendidikan</th>
                      <th style="width: 24%; text-align: center;">Pekerjaan</th>
                      <th style="width: 4%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="text" class="form-control required" name="umur_tiri_1"></td>
                      <td>
                        <select name="jenis_kelamin_tiri_1" class="form-control required">
                          <option value=""></option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </td>
                      <td><input type="text" class="form-control required" name="pendidikan_tiri_1"></td>
                      <td><input type="text" class="form-control required" name="pekerjaan_tiri_1"></td>
                      <td>
                      </td>
                    </tr>
                    <tr id="last_row_tiri">
                      <td colspan="9">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_tiri"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Data Orang-orang lain yang serumah
              </header>
              <div class="panel-body">
                <input type="hidden" name="jumlah_form_serumah" id="jumlah_form_serumah" value="1">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 24%; text-align: center;">Umur</th>
                      <th style="width: 24%; text-align: center;">Jenis Kelamin</th>
                      <th style="width: 24%; text-align: center;">Pendidikan</th>
                      <th style="width: 24%; text-align: center;">Pekerjaan</th>
                      <th style="width: 4%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="text" class="form-control required" name="umur_serumah_1"></td>
                      <td>
                        <select name="jenis_kelamin_serumah_1" class="form-control required">
                          <option value=""></option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </td>
                      <td><input type="text" class="form-control required" name="pendidikan_serumah_1"></td>
                      <td><input type="text" class="form-control required" name="pekerjaan_serumah_1"></td>
                      <td>
                      </td>
                    </tr>
                    <tr id="last_row_serumah">
                      <td colspan="9">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_serumah"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>

            {{-- riwayat kehamilan --}}
            <section class="panel">
              <header class="panel-heading">
                Riwayat Kehamilan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bagaimana keadaan kandungan ibu pada awal kehamilan?</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="keadaan_awal_kandungan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Selama mengandung ibu pernah menderita penyakit?</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="penyakit_selama_mengandung">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perasaan-perasaan ibu selama mengandung (khusus)?</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="perasaan_selama_mengandung">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Apakah ibu suka minum obat-obatan selama mengandung?</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="suka_obat_obatan">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah obat-obatan tersebut diminum berdasarkan anjuran dokter?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="berdasarkan_anjuran" value="true">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="berdasarkan_anjuran" value="false">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah ibu pernah jatuh, mengalami kecelakaan selama masa kehamilan?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="pernah_jatuh_kecelakaan" value="true">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pernah_jatuh_kecelakaan" value="false">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pada usia kandungan berapa bulan</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control required" name="usia_jatuh_kecelakaan">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Selama mengandung, apakah ibu suka merokok/minum-minuman yang mengandung alkohol?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="suka_merokok" value="true">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="suka_merokok" value="false">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah ibu pernah mengalami keguguran? </label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="pernah_keguguran" value="true">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pernah_keguguran" value="false">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Berapa kali</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control required" name="jumlah_keguguran">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Usia ibu saat mengandung kasus (Tahun)</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control required" name="usia_ketika_kasus"> 
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pada saat mengandung kasus, ibu</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="bekerja_ketika_kasus" value="true">
                        Bekerja
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="bekerja_ketika_kasus" value="false">
                        Tidak Bekerja
                      </label>
                    </div>
                  </div>
                </div>

              </div>
            </section>

            {{-- riwayat persalinan natal --}}
            <section class="panel">
              <header class="panel-heading">
                Riwayat Persalinan Natal
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Proses kelahiran </label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="proses_kelahiran" value="Biasa">
                        Biasa
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="proses_kelahiran" value="Lama">
                        Lama
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="proses_kelahiran" value="Sukar">
                        Sukar
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah dibantu dengan alat?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="dibantu_alat" value="true">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dibantu_alat" value="false">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alat berupa</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="alat_bantu">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah mengalami keguguran?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="mengalami_keguguran" value="true">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="mengalami_keguguran" value="false">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kalau ya berupa apa</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_keguguran">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Anak lahir </label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="kondisi_lahir" value="Prematur">
                        Prematur
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kondisi_lahir" value="Cukup bulan">
                        Cukup bulan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kondisi_lahir" value="Lewat bulan">
                        Lewat bulan
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Anak lahir ditolong oleh </label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="dibantu_oleh" value="Dokter">
                        Dokter
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dibantu_oleh" value="Bidan">
                        Bidan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dibantu_oleh" value="Lainnya">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dibantu_oleh_lainnya">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Berat Bayi</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control required" name="berat_bayi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Panjang bayi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="panjang_bayi">
                  </div>
                </div>
              </div>
            </section>

            {{-- riwayat persalinan pasca natal --}}
            <section class="panel">
              <header class="panel-heading">
                Riwayat Persalinan Pasca Natal
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Berapa lama anak diberi asi ?</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="lama_asi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bagaimana pola makan anak ?</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="pola_makan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bagaimana pola tidur anak ?</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="pola_tidur">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bagaimana toilt training anak ?</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="training">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bagaimana kemampuan motorik anak ?</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="motorik">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Anak berjalan pada usia ?</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control required" name="usia_berjalan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Anak berbicara pada usia ?</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control required" name="usia_berbicara">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Apakah anak mempunyai hambatan dalam berbicara ?</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="hambatan_berbicara">
                  </div>
                </div>
                <label class="col-sm-2 control-label">Penyakit yang pernah diderita anak:</label>
                <input type="hidden" name="jumlah_form_penyakit_anak" id="jumlah_form_penyakit_anak" value="1">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 24%; text-align: center;">Penyakit</th>
                      <th style="width: 24%; text-align: center;">Tahun</th>
                      <th style="width: 24%; text-align: center;">Lamanya</th>
                      <th style="width: 24%; text-align: center;">Keterangan</th>
                      <th style="width: 4%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="text" class="form-control" name="penyakit_1"></td>
                      <td><input type="number" class="form-control" name="tahun_1"></td>
                      <td><input type="text" class="form-control" name="lamanya_1"></td>
                      <td><input type="text" class="form-control" name="keterangan_1"></td>
                      <td>
                      </td>
                    </tr>
                    <tr id="last_row_penyakit_anak">
                      <td colspan="9">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_penyakit_anak"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Obat-obatan yang masih diminum </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="obat_masih_diminum">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dalam sehari-hari anak lebih banyak berada dalam perawatan/pengasuhan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="diasuh">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Selama berapa lama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="lama_pengasuhan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Masalah khusus dalam masa perawatan/pengasuhan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="masalah_khusus">
                  </div>
                </div>
              </div>
            </section>

            {{-- riwayat akademis --}}
            <section class="panel">
              <header class="panel-heading">
                Riwayat Akademis
              </header>
              <div class="panel-body">
                <input type="hidden" name="jumlah_form_riwayat_sekolah" id="jumlah_form_riwayat_sekolah" value="1">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 32%; text-align: center;">Jenis sekolah</th>
                      <th style="width: 12%; text-align: center;">Umur</th>
                      <th style="width: 52%; text-align: center;">Tinggal kelas dan sebabnya</th>
                      <th style="width: 4%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="text" class="form-control required" name="jenis_riwayat_sekolah_1"></td>
                      <td><input type="number" class="form-control required" name="umur_riwayat_sekolah_1"></td>
                      <td><input type="text" class="form-control required" name="keterangan_riwayat_sekolah_1"></td>
                      <td>
                      </td>
                    </tr>
                    <tr id="last_row_riwayat_sekolah">
                      <td colspan="9">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_riwayat_sekolah"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sikap</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="sikap">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterampilan motorik awal </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="keterampilan_motorik_awal">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hasil belajar anak </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="hasil_belajar_anak">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pelajaran yang disenangi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="pelajaran_disenangi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Anak mengalami kesukaran dalam mata pelajaran</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="pelajaran_sulit">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keluhan anak dalam mata pelajaran yang dianggapnya sulit</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="keluhan_di_pelajaran_sulit">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah anak mempunyai tempat belajar sendiri ?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="tempat_belajar_sendiri" value="true">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tempat_belajar_sendiri" value="false">
                        Tidak
                      </label>
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kapan biasanya anak belajar ?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="waktu_biasa_belajar" value="Siang hari">
                        Siang hari 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="waktu_biasa_belajar" value="Sepulang sekolah">
                        Sepulang sekolah 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="waktu_biasa_belajar" value="Sore hari">
                        Sore hari 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="waktu_biasa_belajar" value="Malam hari">
                        Malam hari  
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="waktu_biasa_belajar" value="Tidak tentu">
                        Tidak tentu 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah anak dibantu dalam belajar ?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="dibantu_belajar" value="Selalu">
                        Selalu
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dibantu_belajar" value="Sering">
                        Sering
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dibantu_belajar" value="Kadang-kadang">
                        Kadang-kadang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dibantu_belajar" value="Tidak pernah">
                        Tidak pernah
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Siapa yang membantu anak dalam belajar ?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="dibantu_belajar_oleh" value="Orang tua">
                        Orang tua
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dibantu_belajar_oleh" value="Kakak">
                        Kakak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dibantu_belajar_oleh" value="Adik">
                        Adik
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dibantu_belajar_oleh" value="Lainnya">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dibantu_belajar_oleh_lainnya">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sikap anak dalam mengikuti kegiatan tersebut di atas</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control required" name="sikap_di_kegiatan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah anak mengikuti kegiatan tambahan dalam bentuk les privat ?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="les" value="true">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="les" value="false">
                        Tidak
                      </label>
                    </div>

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jika mengikuti dalam pelajaran apa saja ?</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="pelajaran_les">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Siapa yang memberi pelajaran tambahan tersebut ?</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="pengajar">
                  </div>
                </div>
              </div>
            </section>

            {{-- riwayat sosialisasi --}}
            <section class="panel">
              <header class="panel-heading">
                Riwayat Sosialisasi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat sosialisasi di Sekolah</label>
                  <div class="col-sm-8">
                    <textarea rows="5" name="sosialisasi_di_sekolah" class="col-sm-8 form-control" style="resize: vertical;"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat sosialisasi di dalam keluarga</label>
                  <div class="col-sm-8">
                    <textarea rows="5" name="sosialisasi_di_keluarga" class="col-sm-8 form-control" style="resize: vertical;"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="{{date('Y-m-d')}}" disabled="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Psikolog</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="[Nama Psikolog]" disabled="">
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

    {{-- menambah row inputan saudara kandung--}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form').click(function() {
          var a = document.getElementById('jumlah_form_saudara').value;
          a = parseInt(a) + 1;
          $('#last_row').before('<tr id="form_'+a+'"><td><input type="text" class="form-control required" name="umur_'+a+'"></td><td><select name="jenis_kelamin_'+a+'" class="form-control required"><option value=""></option><option value="Laki-laki">Laki-laki</option><option value="Perempuan">Perempuan</option></select></td><td><input type="text" class="form-control required" name="pendidikan_'+a+'"></td><td><input type="text" class="form-control required" name="pekerjaan_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
          document.getElementById('jumlah_form_saudara').value = a;
        });
      });
    </script>

    {{-- menambah row inputan saudara tiri--}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form_tiri').click(function() {
          var a = document.getElementById('jumlah_form_saudara_tiri').value;
          a = parseInt(a) + 1;
          $('#last_row_tiri').before('<tr id="form_tiri_'+a+'"><td><input type="text" class="form-control required" name="umur_tiri_'+a+'"></td><td><select name="jenis_kelamin_tiri_'+a+'" class="form-control required"><option value=""></option><option value="Laki-laki">Laki-laki</option><option value="Perempuan">Perempuan</option></select></td><td><input type="text" class="form-control required" name="pendidikan_tiri_'+a+'"></td><td><input type="text" class="form-control required" name="pekerjaan_tiri_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus_tiri" type="button" id="tombol_hapus_tiri_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
          document.getElementById('jumlah_form_saudara_tiri').value = a;
        });
      });
    </script>

    {{-- menambah row inputan serumah--}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form_serumah').click(function() {
          var a = document.getElementById('jumlah_form_serumah').value;
          a = parseInt(a) + 1;
          $('#last_row_serumah').before('<tr id="form_serumah_'+a+'"><td><input type="text" class="form-control required" name="umur_serumah_'+a+'"></td><td><select name="jenis_kelamin_serumah_'+a+'" class="form-control required"><option value=""></option><option value="Laki-laki">Laki-laki</option><option value="Perempuan">Perempuan</option></select></td><td><input type="text" class="form-control required" name="pendidikan_serumah_'+a+'"></td><td><input type="text" class="form-control required" name="pekerjaan_serumah_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus_serumah" type="button" id="tombol_hapus_serumah_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
          document.getElementById('jumlah_form_saudara_serumah').value = a;
        });
      });
    </script>

    {{-- menambah row inputan penyakit anak--}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form_penyakit_anak').click(function() {
          var a = document.getElementById('jumlah_form_penyakit_anak').value;
          a = parseInt(a) + 1;
          $('#last_row_penyakit_anak').before('<tr id="form_penyakit_anak_'+a+'"><td><input type="text" class="form-control" name="penyakit_'+a+'"></td><td><input type="number" class="form-control" name="tahun_'+a+'"></td><td><input type="text" class="form-control" name="lamanya_'+a+'"></td><td><input type="text" class="form-control" name="keterangan_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus_penyakit_anak" type="button" id="tombol_hapus_penyakit_anak_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
          document.getElementById('jumlah_form_penyakit_anak').value = a;
        });
      });
    </script>

    {{-- menambah row riwayat_sekolah--}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form_riwayat_sekolah').click(function() {
          var a = document.getElementById('jumlah_form_riwayat_sekolah').value;
          a = parseInt(a) + 1;
          $('#last_row_riwayat_sekolah').before('<tr id="form_riwayat_sekolah_'+a+'"><td><input type="text" class="form-control required" name="jenis_riwayat_sekolah_'+a+'"></td><td><input type="number" class="form-control required" name="umur_riwayat_sekolah_'+a+'"></td><td><input type="text" class="form-control required" name="keterangan_riwayat_sekolah_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus_riwayat_sekolah" type="button" id="tombol_hapus_riwayat_sekolah_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>')
          document.getElementById('jumlah_form_riwayat_sekolah').value = a;
        });
      });
    </script>

    {{-- menghapus row saudara kandung--}}
    <script type="text/javascript">
      $(document).ready(function() {
        $(document).on('click', '.tombol_hapus', function() {
          var x = $(this).attr('id');
          var nomor = x.substring(13)
          $('#form_'+nomor).remove();
        });
      });
    </script>

    {{-- menghapus row saudara tiri--}}
    <script type="text/javascript">
      $(document).ready(function() {
        $(document).on('click', '.tombol_hapus_tiri', function() {
          var x = $(this).attr('id');
          var nomor = x.substring(18)
          $('#form_tiri_'+nomor).remove();
        });
      });
    </script>

    {{-- menghapus row saudara serumah--}}
    <script type="text/javascript">
      $(document).ready(function() {
        $(document).on('click', '.tombol_hapus_serumah', function() {
          var x = $(this).attr('id');
          var nomor = x.substring(21)
          $('#form_serumah_'+nomor).remove();
        });
      });
    </script>

    {{-- menghapus row penyakit anak--}}
    <script type="text/javascript">
      $(document).ready(function() {
        $(document).on('click', '.tombol_hapus_penyakit_anak', function() {
          var x = $(this).attr('id');
          var nomor = x.substring(27)
          $('#form_penyakit_anak_'+nomor).remove();
        });
      });
    </script>

    {{-- menghapus row riwayat sekolah--}}
    <script type="text/javascript">
      $(document).ready(function() {
        $(document).on('click', '.tombol_hapus_riwayat_sekolah', function() {
          var x = $(this).attr('id');
          var nomor = x.substring(29)
          $('#form_riwayat_sekolah_'+nomor).remove();
        });
      });
    </script>

  </body>
  <html>