<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.headscript')
  <link rel="stylesheet" type="text/css" href="{{url('')}}/sweetalert/sweetalert2.min.css">
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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN WAJIB LAPOR DAN REHABILITASI MEDIS</h3>
          <a class="btn btn-default" href="{{url('')}}/rj_lapor_rehabilitasi">Tambah Dokumen Baru</a>
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
                  <td>Asesmen Wajib Lapor dan Rehabilitasi Medis</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-success" href="{{url('')}}/rj_lapor_rehabilitasi_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_lapor_rehabilitasi_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal form-validate" method="get" id="register_form">
            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Kedatangan</label>
                  <div class="col-sm-2">
                    <input type="text" id="dp1" class="form-control" name="tanggal_kedatangan" disabled="" value="{{$tanggal_kedatangan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat tempat tinggal</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="alamat" disabled="" value="{{$alamat}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Telp/HP</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="telp" disabled="" value="{{$telp}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Informasi Demografis
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Perkawinan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="status_perkawinan" value="1" disabled="" {{$status_perkawinan == 1 ? 'checked' : ''}}>
                        Belum Menikah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="status_perkawinan" value="2" disabled="" {{$status_perkawinan == 2 ? 'checked' : ''}}>
                        Menikah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="status_perkawinan" value="3" disabled="" {{$status_perkawinan == 3 ? 'checked' : ''}}>
                        Duda/Janda
                      </label>
                    </div>  
                  </div>
                  <label class="control-label col-lg-2" for="inputSuccess">Pendidikan Terakhir</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="pendidikan_terakhir" value="1" disabled="" {{$pendidikan_terakhir == 1 ? 'checked' : ''}}>
                        Tamat SD
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pendidikan_terakhir" value="2" disabled="" {{$pendidikan_terakhir == 2 ? 'checked' : ''}}>
                        Tamat SLTP
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pendidikan_terakhir" value="3" disabled="" {{$pendidikan_terakhir == 3 ? 'checked' : ''}}>
                        Tamat SLTA
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pendidikan_terakhir" value="4" disabled="" {{$pendidikan_terakhir == 4 ? 'checked' : ''}}>
                        Tamat Akademi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pendidikan_terakhir" value="5" disabled="" {{$pendidikan_terakhir == 5 ? 'checked' : ''}}>
                        Tamat PT
                      </label>
                    </div>  
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Status Medis
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Penyakit/kondisi lain yang menyertai</label>
                </div>
                <input type="hidden" name="jumlah_form" id="jumlah_form" value="1">
                @if($ada_penyakit_menyertai)
                  @foreach($penyakit_menyertai as $p)
                    <div class="form-group" id="form_1">
                      <label class="col-sm-2 control-label">Jenis Penyakit</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="jenis_penyakit_1" value="{{$p[0]}}" disabled="">
                      </div>
                      <label class="col-sm-1 control-label" style="padding-right: 0em;">Dirawat Tahun</label>
                      <div class="col-sm-1">
                        <input type="text" class="form-control" name="tahun_dirawat_1" value="{{$p[1]}}" disabled="">
                      </div>
                      <label class="col-sm-1 control-label" style="padding-right: 0em;">Lama Dirawat</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" style="width: 14em;" name="lama_dirawat_1" value="{{$p[2]}}" disabled="">
                      </div>
                      <div class="col-sm-1">
                        <button class="btn btn-primary" style="width: 3em; visibility: hidden;" type="button"><i class="icon_plus_alt2"></i></button>
                      </div>
                    </div>
                  @endforeach
                @else
                <div class="form-group" id="form_1">
                  <label class="col-sm-2 control-label">Jenis Penyakit</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="jenis_penyakit_1">
                  </div>
                  <label class="col-sm-1 control-label" style="padding-right: 0em;">Dirawat Tahun</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="tahun_dirawat_1">
                  </div>
                  <label class="col-sm-1 control-label" style="padding-right: 0em;">Lama Dirawat</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" style="width: 14em;" name="lama_dirawat_1">
                  </div>
                  <div class="col-sm-1">
                    <button class="btn btn-primary" style="width: 3em;" type="button" id="tambah_form"><i class="icon_plus_alt2"></i></button>
                  </div>
                </div>
                @endif
                <div class="form-group" id="last_row">
                  <label class="control-label col-lg-2" for="inputSuccess">Riwayat Penyakit Kronis</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="riwayat_penyakit_kronis" disabled="" value="1" {{$riwayat_penyakit_kronis == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="riwayat_penyakit_kronis" disabled="" value="0" {{$riwayat_penyakit_kronis == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-sm-2 control-label">Jenis penyakit</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" disabled="" name="jenis_penyakit_kronis" value="{{$jenis_penyakit_kronis}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Saat ini sedang menjalani terapi medis?</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="sedang_terapi" disabled="" value="1" {{$sedang_terapi == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sedang_terapi" disabled="" value="0" {{$sedang_terapi == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-sm-2 control-label">Jenis terapi medis yang dijalani saat ini</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="jenis_terapi_dijalani" disabled="" value="{{$jenis_terapi_dijalani}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">HIV</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="hiv" value="1" disabled="" {{$hiv == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hiv" value="0" disabled="" {{$hiv == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Hepatitis B</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="hepatitis_b" value="1" disabled {{$hepatitis_b == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hepatitis_b" value="0" disabled {{$hepatitis_b == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Hepatitis C</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="hepatitis_c" value="1" disabled {{$hepatitis_c == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hepatitis_c" value="0" disabled {{$hepatitis_c == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Status Pekerjaan/Dukungan Hidup
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Status pekerjaan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="status_pekerjaan" value="1" disabled {{$status_pekerjaan == 1 ? 'checked' : ''}}>
                        Tidak Bekerja
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="status_pekerjaan" value="2" disabled {{$status_pekerjaan == 2 ? 'checked' : ''}}>
                        Bekerja
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="status_pekerjaan" value="8" disabled {{$status_pekerjaan == 8 ? 'checked' : ''}}>
                        Mahasiswa/Pelajar
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="status_pekerjaan" value="9" disabled {{$status_pekerjaan == 9 ? 'checked' : ''}}>
                        Ibu Rumah Tangga
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Bila bekerja, pola pekerjaan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="pola_pekerjaan" value="1" disabled {{$pola_pekerjaan == 1 ? 'checked' : ''}}>
                        Purna Waktu
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pola_pekerjaan" value="2" disabled {{$pola_pekerjaan == 2 ? 'checked' : ''}}>
                        Paruh Waktu
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pola_pekerjaan" value="99" disabled {{$pola_pekerjaan == 99 ? 'checked' : ''}}>
                        Tidak Tentu
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kode Pekerjaan</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="kode_pekerjaan" disabled value="{{$kode_pekerjaan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterampilan teknis yang dimiliki</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="keterampilan_teknis" disabled value="{{$keterampilan_teknis}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Adakah yang memberi dukungan hidup bagi anda?</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="pemberi_dukungan" value="1" disabled {{$pemberi_dukungan == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pemberi_dukungan" value="0" disabled {{$pemberi_dukungan == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-sm-2 control-label">Bila ya, siapakah?</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="nama_pemberi_dukungan" disabled value="{{$nama_pemberi_dukungan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Dalam bentuk apakah</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="dukungan_finansial" disabled {{$dukungan_finansial ? 'checked' : ''}}>
                        Finansial
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="dukungan_tempat_tinggal" disabled {{$dukungan_tempat_tinggal ? 'checked' : ''}}>
                        Tempat Tinggal
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="dukungan_makan" disabled {{$dukungan_makan ? 'checked' : ''}}>
                        Makan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="dukungan_pengobatan" disabled {{$dukungan_pengobatan ? 'checked' : ''}}>
                        Pengobatan/Perawatan
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Status Penggunaan Narkotika
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alkohol</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="p_alkohol" disabled>
                      <option value="0" {{$p_alkohol == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$p_alkohol == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$p_alkohol == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <label class="col-sm-1 control-label">Lamanya</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="l_alkohol" value="{{$l_alkohol}}" disabled>
                  </div>
                  <label class="col-sm-1 control-label">Cara Pakai</label>
                  <div class="col-sm-3">
                    <select class="form-control input-sm m-bot15" name="c_alkohol" disabled>
                      <option value="0" {{$c_alkohol == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$c_alkohol == 1 ? 'selected' : ''}}>1. Oral</option>
                      <option value="2" {{$c_alkohol == 2 ? 'selected' : ''}}>2. Nasal/Sublingual/Suppositoria</option>
                      <option value="3" {{$c_alkohol == 3 ? 'selected' : ''}}>3. Merokok</option>
                      <option value="4" {{$c_alkohol == 4 ? 'selected' : ''}}>4. Injeksi Non-IV</option>
                      <option value="5" {{$c_alkohol == 5 ? 'selected' : ''}}>5. IV</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Heroin</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="p_heroin" disabled>
                      <option value="0" {{$p_heroin == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$p_heroin == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$p_heroin == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <label class="col-sm-1 control-label">Lamanya</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="l_heroin" disabled value="{{$l_heroin}}">
                  </div>
                  <label class="col-sm-1 control-label">Cara Pakai</label>
                  <div class="col-sm-3">
                    <select class="form-control input-sm m-bot15" name="c_heroin" disabled>
                      <option value="0" {{$c_heroin == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$c_heroin == 1 ? 'selected' : ''}}>1. Oral</option>
                      <option value="2" {{$c_heroin == 2 ? 'selected' : ''}}>2. Nasal/Sublingual/Suppositoria</option>
                      <option value="3" {{$c_heroin == 3 ? 'selected' : ''}}>3. Merokok</option>
                      <option value="4" {{$c_heroin == 4 ? 'selected' : ''}}>4. Injeksi Non-IV</option>
                      <option value="5" {{$c_heroin == 5 ? 'selected' : ''}}>5. IV</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Metadon/Buprenorfin</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="p_metadon" disabled>
                      <option value="0" {{$p_metadon == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$p_metadon == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$p_metadon == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <label class="col-sm-1 control-label">Lamanya</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="l_metadon" value="{{$l_metadon}}" disabled>
                  </div>
                  <label class="col-sm-1 control-label">Cara Pakai</label>
                  <div class="col-sm-3">
                    <select class="form-control input-sm m-bot15" name="c_metadon" disabled>
                      <option value="0" {{$c_metadon == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$c_metadon == 1 ? 'selected' : ''}}>1. Oral</option>
                      <option value="2" {{$c_metadon == 2 ? 'selected' : ''}}>2. Nasal/Sublingual/Suppositoria</option>
                      <option value="3" {{$c_metadon == 3 ? 'selected' : ''}}>3. Merokok</option>
                      <option value="4" {{$c_metadon == 4 ? 'selected' : ''}}>4. Injeksi Non-IV</option>
                      <option value="5" {{$c_metadon == 5 ? 'selected' : ''}}>5. IV</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Oplat lain/Analgesik</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="p_analgesik" disabled>
                      <option value="0" {{$p_analgesik == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$p_analgesik == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$p_analgesik == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <label class="col-sm-1 control-label">Lamanya</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="l_analgesik" value="{{$l_analgesik}}" disabled>
                  </div>
                  <label class="col-sm-1 control-label">Cara Pakai</label>
                  <div class="col-sm-3">
                    <select class="form-control input-sm m-bot15" name="c_analgesik" disabled>
                      <option value="0" {{$c_analgesik == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$c_analgesik == 1 ? 'selected' : ''}}>1. Oral</option>
                      <option value="2" {{$c_analgesik == 2 ? 'selected' : ''}}>2. Nasal/Sublingual/Suppositoria</option>
                      <option value="3" {{$c_analgesik == 3 ? 'selected' : ''}}>3. Merokok</option>
                      <option value="4" {{$c_analgesik == 4 ? 'selected' : ''}}>4. Injeksi Non-IV</option>
                      <option value="5" {{$c_analgesik == 5 ? 'selected' : ''}}>5. IV</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Barbiturat</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="p_barbiturat" disabled>
                      <option value="0" {{$p_barbiturat = 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$p_barbiturat = 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$p_barbiturat = 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <label class="col-sm-1 control-label">Lamanya</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="l_barbiturat" disabled value="{{$l_barbiturat}}">
                  </div>
                  <label class="col-sm-1 control-label">Cara Pakai</label>
                  <div class="col-sm-3">
                    <select class="form-control input-sm m-bot15" name="c_barbiturat" disabled>
                      <option value="0" {{$c_barbiturat == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$c_barbiturat == 1 ? 'selected' : ''}}>1. Oral</option>
                      <option value="2" {{$c_barbiturat == 2 ? 'selected' : ''}}>2. Nasal/Sublingual/Suppositoria</option>
                      <option value="3" {{$c_barbiturat == 3 ? 'selected' : ''}}>3. Merokok</option>
                      <option value="4" {{$c_barbiturat == 4 ? 'selected' : ''}}>4. Injeksi Non-IV</option>
                      <option value="5" {{$c_barbiturat == 5 ? 'selected' : ''}}>5. IV</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Sedatif/Hiptonik</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="p_sedatif" disabled>
                      <option value="0"{{$p_sedatif == 0 ? 'selected' : ''}}>-</option>
                      <option value="1"{{$p_sedatif == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2"{{$p_sedatif == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <label class="col-sm-1 control-label">Lamanya</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="l_sedatif" disabled value="{{$l_sedatif}}">
                  </div>
                  <label class="col-sm-1 control-label">Cara Pakai</label>
                  <div class="col-sm-3">
                    <select class="form-control input-sm m-bot15" name="c_sedatif" disabled>
                      <option value="0" {{$c_sedatif == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$c_sedatif == 1 ? 'selected' : ''}}>1. Oral</option>
                      <option value="2" {{$c_sedatif == 2 ? 'selected' : ''}}>2. Nasal/Sublingual/Suppositoria</option>
                      <option value="3" {{$c_sedatif == 3 ? 'selected' : ''}}>3. Merokok</option>
                      <option value="4" {{$c_sedatif == 4 ? 'selected' : ''}}>4. Injeksi Non-IV</option>
                      <option value="5" {{$c_sedatif == 5 ? 'selected' : ''}}>5. IV</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kokain</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="p_kokain" disabled>
                      <option value="0"{{$p_kokain == 0 ? 'selected' : ''}}>-</option>
                      <option value="1"{{$p_kokain == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2"{{$p_kokain == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <label class="col-sm-1 control-label">Lamanya</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="l_kokain" disabled value="{{$l_kokain}}">
                  </div>
                  <label class="col-sm-1 control-label">Cara Pakai</label>
                  <div class="col-sm-3">
                    <select class="form-control input-sm m-bot15" name="c_kokain" disabled>
                      <option value="0" {{$c_kokain == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$c_kokain == 1 ? 'selected' : ''}}>1. Oral</option>
                      <option value="2" {{$c_kokain == 2 ? 'selected' : ''}}>2. Nasal/Sublingual/Suppositoria</option>
                      <option value="3" {{$c_kokain == 3 ? 'selected' : ''}}>3. Merokok</option>
                      <option value="4" {{$c_kokain == 4 ? 'selected' : ''}}>4. Injeksi Non-IV</option>
                      <option value="5" {{$c_kokain == 5 ? 'selected' : ''}}>5. IV</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Amfetamin</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="p_amfetamin" disabled>
                      <option value="0" {{$p_amfetamin == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$p_amfetamin == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$p_amfetamin == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <label class="col-sm-1 control-label">Lamanya</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="l_amfetamin" disabled value="{{$l_amfetamin}}">
                  </div>
                  <label class="col-sm-1 control-label">Cara Pakai</label>
                  <div class="col-sm-3">
                    <select class="form-control input-sm m-bot15" name="c_amfetamin" disabled>
                      <option value="0" {{$c_amfetamin == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$c_amfetamin == 1 ? 'selected' : ''}}>1. Oral</option>
                      <option value="2" {{$c_amfetamin == 2 ? 'selected' : ''}}>2. Nasal/Sublingual/Suppositoria</option>
                      <option value="3" {{$c_amfetamin == 3 ? 'selected' : ''}}>3. Merokok</option>
                      <option value="4" {{$c_amfetamin == 4 ? 'selected' : ''}}>4. Injeksi Non-IV</option>
                      <option value="5" {{$c_amfetamin == 5 ? 'selected' : ''}}>5. IV</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kanabis</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="p_kanabis" disabled>
                      <option value="0" {{$p_kanabis == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$p_kanabis == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$p_kanabis == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <label class="col-sm-1 control-label">Lamanya</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="l_kanabis" disabled value="{{$l_kanabis}}">
                  </div>
                  <label class="col-sm-1 control-label">Cara Pakai</label>
                  <div class="col-sm-3">
                    <select class="form-control input-sm m-bot15" name="c_kanabis" disabled>
                      <option value="0" {{$c_kanabis == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$c_kanabis == 1 ? 'selected' : ''}}>1. Oral</option>
                      <option value="2" {{$c_kanabis == 2 ? 'selected' : ''}}>2. Nasal/Sublingual/Suppositoria</option>
                      <option value="3" {{$c_kanabis == 3 ? 'selected' : ''}}>3. Merokok</option>
                      <option value="4" {{$c_kanabis == 4 ? 'selected' : ''}}>4. Injeksi Non-IV</option>
                      <option value="5" {{$c_kanabis == 5 ? 'selected' : ''}}>5. IV</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Halusinogen</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="p_halusinogen" disabled>
                      <option value="0" {{$p_halusinogen == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$p_halusinogen == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$p_halusinogen == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <label class="col-sm-1 control-label">Lamanya</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="l_halusinogen" disabled value="{{$l_halusinogen}}">
                  </div>
                  <label class="col-sm-1 control-label">Cara Pakai</label>
                  <div class="col-sm-3">
                    <select class="form-control input-sm m-bot15" name="c_halusinogen" disabled>
                      <option value="0" {{$c_halusinogen == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$c_halusinogen == 1 ? 'selected' : ''}}>1. Oral</option>
                      <option value="2" {{$c_halusinogen == 2 ? 'selected' : ''}}>2. Nasal/Sublingual/Suppositoria</option>
                      <option value="3" {{$c_halusinogen == 3 ? 'selected' : ''}}>3. Merokok</option>
                      <option value="4" {{$c_halusinogen == 4 ? 'selected' : ''}}>4. Injeksi Non-IV</option>
                      <option value="5" {{$c_halusinogen == 5 ? 'selected' : ''}}>5. IV</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Inhalan</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="p_inhalan" disabled>
                      <option value="0" {{$p_inhalan == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$p_inhalan == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$p_inhalan == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <label class="col-sm-1 control-label">Lamanya</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="l_inhalan" disabled value="{{$l_inhalan}}">
                  </div>
                  <label class="col-sm-1 control-label">Cara Pakai</label>
                  <div class="col-sm-3">
                    <select class="form-control input-sm m-bot15" name="c_inhalan" disabled>
                      <option value="0" {{$c_inhalan == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$c_inhalan == 1 ? 'selected' : ''}}>1. Oral</option>
                      <option value="2" {{$c_inhalan == 2 ? 'selected' : ''}}>2. Nasal/Sublingual/Suppositoria</option>
                      <option value="3" {{$c_inhalan == 3 ? 'selected' : ''}}>3. Merokok</option>
                      <option value="4" {{$c_inhalan == 4 ? 'selected' : ''}}>4. Injeksi Non-IV</option>
                      <option value="5" {{$c_inhalan == 5 ? 'selected' : ''}}>5. IV</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Lebih dari 1 zat/hari termasuk alkohol</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="p_lebih_dari_satu" disabled>
                      <option value="0" {{$p_lebih_dari_satu == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$p_lebih_dari_satu == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$p_lebih_dari_satu == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <label class="col-sm-1 control-label">Lamanya</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="l_lebih_dari_satu" disabled value="{{$l_lebih_dari_satu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis zat utama yang disalahgunakan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="zat_utama_disalahgunakan" disabled value="{{$zat_utama_disalahgunakan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pernahkah menjalani terapi rehabilitasi?</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" {{$terapi_rehabilitasi == 1 ? 'checked' : ''}} disabled name="terapi_rehabilitasi" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" {{$terapi_rehabilitasi == 0 ? 'checked' : ''}} disabled name="terapi_rehabilitasi" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis terapi rehabilitasi yang dijalani?</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jenis_terapi_rehabilitasi" disabled value="{{$jenis_terapi_rehabilitasi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pernahkah mengalami overdosis?</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="overdosis" disabled {{$overdosis == 1 ? 'checked' : ''}} value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="overdosis" disabled {{$overdosis == 0 ? 'checked' : ''}} value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kapan dan bagaimana penanggulangannya?</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" disabled value="{{$keterangan_overdosis}}" name="keterangan_overdosis">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Waktu overdosis</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" disabled value="{{$waktu_overdosis}}" name="waktu_overdosis">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Cara penanggulangan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="cara_penanggulangan_overdosis" disabled {{$cara_penanggulangan_overdosis == 1 ? 'checked' : ''}} value="1">
                        Perawatan di RS
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="cara_penanggulangan_overdosis" disabled {{$cara_penanggulangan_overdosis == 2 ? 'checked' : ''}} value="2">
                        Perawatan di puskesmas
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="cara_penanggulangan_overdosis" disabled {{$cara_penanggulangan_overdosis == 3 ? 'checked' : ''}} value="3">
                        Sendiri
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Status Legal
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mencuri di toko/vandalisme</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" disabled value="{{$ilegal_1}}" name="ilegal_1">
                  </div>
                  <label class="col-sm-2 control-label">Bebas bersyarat/masa percobaan</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" disabled value="{{$ilegal_2}}" name="ilegal_2">
                  </div>
                  <label class="col-sm-2 control-label">Masalah narkoba</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" disabled value="{{$ilegal_3}}" name="ilegal_3">
                  </div>
                  <label class="col-sm-2 control-label">Pemalsuan</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" disabled value="{{$ilegal_4}}" name="ilegal_4">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Penyerangan bersenjata</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" disabled value="{{$ilegal_5}}" name="ilegal_5">
                  </div>
                  <label class="col-sm-2 control-label">Pembobolan dan pencurian</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" disabled value="{{$ilegal_6}}" name="ilegal_6">
                  </div>
                  <label class="col-sm-2 control-label">Perampokan</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" disabled value="{{$ilegal_7}}" name="ilegal_7">
                  </div>
                  <label class="col-sm-2 control-label">Penyerangan</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" disabled value="{{$ilegal_8}}" name="ilegal_8">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pemabakan Rumah</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" disabled value="{{$ilegal_9}}" name="ilegal_9">
                  </div>
                  <label class="col-sm-2 control-label">Perkosaan</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" disabled value="{{$ilegal_10}}" name="ilegal_10">
                  </div>
                  <label class="col-sm-2 control-label">Pembunuhan</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" disabled value="{{$ilegal_11}}" name="ilegal_11">
                  </div>
                  <label class="col-sm-2 control-label">Pelacuran</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" disabled value="{{$ilegal_12}}" name="ilegal_12">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Melecehkan pengadilan</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" disabled value="{{$ilegal_13}}" name="ilegal_13">
                  </div>
                  <label class="col-sm-2 control-label">Lain-lain</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" disabled value="{{$ilegal_14}}" name="ilegal_14">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Berapa kali tuntutan di atas berakibat vonis hukuman?</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" disabled value="{{$vonis_ilegal}}" name="vonis_ilegal">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Riwayat keluarga/Sosial
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Dalam situasi seperti ini apakah anda tinggal 3 tahun belakangan ini?</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" value="1" disabled {{$tiga_tahun_belakangan == 1 ? 'checked' : ''}} name="tiga_tahun_belakangan">
                        Dengan pasangan & anak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" value="2" disabled {{$tiga_tahun_belakangan == 2 ? 'checked' : ''}} name="tiga_tahun_belakangan">
                        Dengan pasangan saja
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" value="3" disabled {{$tiga_tahun_belakangan == 3 ? 'checked' : ''}} name="tiga_tahun_belakangan">
                        Dengan anak saja
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" value="4" disabled {{$tiga_tahun_belakangan == 4 ? 'checked' : ''}} name="tiga_tahun_belakangan">
                        Dengan orang tua
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" value="5" disabled {{$tiga_tahun_belakangan == 5 ? 'checked' : ''}} name="tiga_tahun_belakangan">
                        Dengan keluarga
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" value="6" disabled {{$tiga_tahun_belakangan == 6 ? 'checked' : ''}} name="tiga_tahun_belakangan">
                        Dengan teman
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" value="7" disabled {{$tiga_tahun_belakangan == 7 ? 'checked' : ''}} name="tiga_tahun_belakangan">
                        Sendiri
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" value="8" disabled {{$tiga_tahun_belakangan == 8 ? 'checked' : ''}} name="tiga_tahun_belakangan">
                        Lingkungan terkontrol
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" value="9" disabled {{$tiga_tahun_belakangan == 9 ? 'checked' : ''}} name="tiga_tahun_belakangan">
                        Kondisi yang tidak stabil
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">apakah anda hidup dengan seseorang yang mempunyai masalah penyalahgunaan zat sekarang ini?</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="hidup_dengan_pengguna" disabled {{$hidup_dengan_pengguna == 1 ? 'checked' : ''}} value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hidup_dengan_pengguna" disabled {{$hidup_dengan_pengguna == 0 ? 'checked' : ''}} value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Siapakah mereka?</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{$saudara_pengguna ? 'checked' : ''}} name="saudara_pengguna">
                        Saudara kandung/tiri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{$ortu_pengguna ? 'checked' : ''}} name="ortu_pengguna">
                        Ayah/Ibu
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{$pasangan_pengguna ? 'checked' : ''}} name="pasangan_pengguna">
                        Pasangan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{$om_tante_pengguna ? 'checked' : ''}} name="om_tante_pengguna">
                        Om/tante
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{$teman_pengguna ? 'checked' : ''}} name="teman_pengguna">
                        teman
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled {{$lainnya_pengguna ? 'checked' : ''}} name="lainnya_pengguna">
                        Lain-lain
                      </label>
                      <input type="text" class="form-control" disabled value="{{$keterangan_lainnya_pengguna}}" name="keterangan_lainnya_pengguna">
                    </div>
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Apakah anda memiliki konflik serius dalam berhubungan dengan:</label></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Ibu</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="konflik_ibu" disabled>
                      <option value="0" {{$konflik_ibu == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$konflik_ibu == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$konflik_ibu == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="keterangan_konflik_ibu" disabled value="{{$keterangan_konflik_ibu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Ayah</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="konflik_ayah" disabled>
                      <option value="0"{{$konflik_ayah == 0 ? 'selected' : ''}}>-</option>
                      <option value="1"{{$konflik_ayah == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2"{{$konflik_ayah == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="keterangan_konflik_ayah" disabled value="{{$keterangan_konflik_ayah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Adik/Kakak</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="konflik_adik_kakak" disabled>
                      <option value="0" {{$konflik_adik_kakak == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$konflik_adik_kakak == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$konflik_adik_kakak == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="keterangan_konflik_adik_kakak" disabled value="{{$keterangan_konflik_adik_kakak}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pasangan</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="konflik_pasangan" disabled>
                      <option value="0" {{$konflik_pasangan == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$konflik_pasangan == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$konflik_pasangan == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="keterangan_konflik_pasangan" disabled value="{{$keterangan_konflik_pasangan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Anak-anak</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="konflik_anak" disabled>
                      <option value="0" {{$konflik_anak == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$konflik_anak == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$konflik_anak == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="keterangan_konflik_anak" disabled value="{{$keterangan_konflik_anak}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Keluarga yang berarti</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="konflik_keluarga" disabled>
                      <option value="0" {{$konflik_keluarga == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$konflik_keluarga == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$konflik_keluarga == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="keterangan_konflik_keluarga" disabled value="{{$keterangan_konflik_keluarga}}">
                  </div>
                  <label class="col-sm-2 control-label">Bila ya, siapakah?</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="subjek_konflik_keluarga" disabled value="{{$subjek_konflik_keluarga}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Teman akrab</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="konflik_teman" disabled>
                      <option value="0" {{$konflik_teman == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$konflik_teman == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$konflik_teman == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="keterangan_konflik_teman" disabled value="{{$keterangan_konflik_teman}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tetangga</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="konflik_tetangga" disabled>
                      <option value="0" {{$konflik_tetangga == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$konflik_tetangga == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$konflik_tetangga == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="keterangan_konflik_tetangga" disabled value="{{$keterangan_konflik_tetangga}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Teman sekerja</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="konflik_kantor" disabled>
                      <option value="0" {{$konflik_kantor == 0 ? 'selected' : ''}}>-</option>
                      <option value="1" {{$konflik_kantor == 1 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="2" {{$konflik_kantor == 2 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="keterangan_konflik_kantor" disabled value="{{$keterangan_konflik_kantor}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Status Psikiatris
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Mengalami depresi serius (kesedihan, putus asa, kehilangan minat, susah konsentrasi)</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="psikiatris_1" disabled>
                      <option value="1" {{$psikiatris_1 == 1 ? 'selected' : ''}}>-</option>
                      <option value="2" {{$psikiatris_1 == 2 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="3" {{$psikiatris_1 == 3 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="keterangan_psikiatris_1" disabled value="{{$keterangan_psikiatris_1}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Mengalami rasa cemas serius/keterangan, gelisah, merasa khawatir berlebihan</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="psikiatris_2" disabled>
                      <option value="1" {{$psikiatris_2 == 1 ? 'selected' : ''}}>-</option>
                      <option value="2" {{$psikiatris_2 == 2 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="3" {{$psikiatris_2 == 3 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="keterangan_psikiatris_2" disabled value="{{$keterangan_psikiatris_2}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Mengalami halusinasi (melihat/mendengar sesuatu yang tidak ada obyeknya)</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="psikiatris_3" disabled>
                      <option value="1" {{$psikiatris_3 == 1 ? 'selected' : ''}}>-</option>
                      <option value="2" {{$psikiatris_3 == 2 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="3" {{$psikiatris_3 == 3 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="keterangan_psikiatris_3" disabled value="{{$keterangan_psikiatris_3}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Mengalami kesulitan mengingat atau fokus pada sesuatu</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="psikiatris_4" disabled>
                      <option value="1" {{$psikiatris_4 == 1 ? 'selected' : ''}}>-</option>
                      <option value="2" {{$psikiatris_4 == 2 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="3" {{$psikiatris_4 == 3 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="keterangan_psikiatris_4" disabled value="{{$keterangan_psikiatris_4}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Mengalami kesukaran mengontrol perilaku kasar, termasuk kemarahan atau kekerasan</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="psikiatris_5" disabled>
                      <option value="1" {{$psikiatris_5 == 1 ? 'selected' : ''}}>-</option>
                      <option value="2" {{$psikiatris_5 == 2 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="3" {{$psikiatris_5 == 3 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="keterangan_psikiatris_5" disabled value="{{$keterangan_psikiatris_5}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Mengalami pikiran serius untuk bunuh diri</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="psikiatris_6" disabled>
                      <option value="1" {{$psikiatris_6 == 1 ? 'selected' : ''}}>-</option>
                      <option value="2" {{$psikiatris_6 == 2 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="3" {{$psikiatris_6 == 3 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="keterangan_psikiatris_6" disabled value="{{$keterangan_psikiatris_6}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Berusaha untuk bunuh diri</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="psikiatris_7" disabled>
                      <option value="1" {{$psikiatris_7 == 1 ? 'selected' : ''}}>-</option>
                      <option value="2" {{$psikiatris_7 == 2 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="3" {{$psikiatris_7 == 3 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="keterangan_psikiatris_7" disabled value="{{$keterangan_psikiatris_7}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Menerima pengobatan dari psikiater</label>
                  <div class="col-lg-2">
                    <select class="form-control input-sm m-bot15" name="psikiatris_8" disabled>
                      <option value="1" {{$psikiatris_8 == 1 ? 'selected' : ''}}>-</option>
                      <option value="2" {{$psikiatris_8 == 2 ? 'selected' : ''}}>30 Hari Terakhir</option>
                      <option value="3" {{$psikiatris_8 == 3 ? 'selected' : ''}}>Sepanjang Hidup</option>
                    </select>
                  </div>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="keterangan_psikiatris_8" disabled value="{{$keterangan_psikiatris_8}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Pemeriksaan Fisik
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tekanan darah</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="tekanan_darah" disabled value="{{$tekanan_darah}}">
                  </div>
                  <label class="col-sm-2 control-label">Nadi</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="nadi" disabled value="{{$nadi}}">
                  </div>
                  <label class="col-sm-2 control-label">Pernapasan (RR)</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="pernapasan" disabled value="{{$pernapasan}}">
                  </div>
                  <label class="col-sm-2 control-label">Suhu</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="suhu" disabled value="{{$suhu}}">
                  </div>
                </div>
                <div class="form-group">
                  <input type="hidden" name="jumlah_form_sistem_pencernaan" id="jumlah_form_sistem_pencernaan" value="1">
                  <label class="col-sm-2 control-label">Sistem pencernaan</label>
                  <div class="col-sm-8">
                    @if($ada_sistem_pencernaan)
                      @foreach($sistem_pencernaan as $p)
                        <input type="text" disabled class="form-control" value="{{$p}}">
                      @endforeach
                    @else
                      <input type="text" disabled class="form-control">
                    @endif
                    <div id="last_row_sistem_pencernaan"></div>
                  </div>
                  <div class="col-sm-2">
                    <button class="btn btn-primary" style="width: 3em; visibility: hidden;" type="button" id="tambah_form_sistem_pencernaan"><i class="icon_plus_alt2"></i></button>
                  </div>
                </div>
                <div class="form-group">
                  <input type="hidden" name="jumlah_form_sistem_jantung_pembuluh" id="jumlah_form_sistem_jantung_pembuluh" value="1">
                  <label class="col-sm-2 control-label">Sistem jantung dan pembuluh darah</label>
                  <div class="col-sm-8">
                    @if($ada_sistem_jantung_pembuluh)
                      @foreach($sistem_jantung_pembuluh as $p)
                        <input type="text" class="form-control" disabled value="{{$p}}">
                      @endforeach
                    @else
                      <input type="text" class="form-control" disabled>
                    @endif
                    <div id="last_row_sistem_jantung_pembuluh"></div>
                  </div>
                  <div class="col-sm-2">
                    <button class="btn btn-primary" style="width: 3em; visibility: hidden;" type="button" id="tambah_form_sistem_jantung_pembuluh"><i class="icon_plus_alt2"></i></button>
                  </div>
                </div>
                <div class="form-group">
                  <input type="hidden" name="jumlah_form_sistem_saraf_pusat" id="jumlah_form_sistem_saraf_pusat" value="1">
                  <label class="col-sm-2 control-label">Sistem saraf pusat</label>
                  <div class="col-sm-8">
                    @if($ada_sistem_saraf_pusat)
                      @foreach($sistem_saraf_pusat as $p)
                        <input type="text" class="form-control" disabled value="{{$p}}">
                      @endforeach
                    @else
                      <input type="text" class="form-control" disabled>
                    @endif
                    <div id="last_row_sistem_saraf_pusat"></div>
                  </div>
                  <div class="col-sm-2">
                    <button class="btn btn-primary" style="width: 3em; visibility: hidden;" type="button" id="tambah_form_sistem_saraf_pusat"><i class="icon_plus_alt2"></i></button>
                  </div>
                </div>
                <div class="form-group">
                  <input type="hidden" name="jumlah_form_tht_kulit" id="jumlah_form_tht_kulit" value="1">
                  <label class="col-sm-2 control-label">THT dan Kulit</label>
                  <div class="col-sm-8">
                    @if($ada_tht_kulit)
                      @foreach($tht_kulit as $p)
                        <input type="text" class="form-control" disabled value="{{$p}}">
                      @endforeach
                    @else
                      <input type="text" class="form-control" disabled>
                    @endif
                    <div id="last_row_tht_kulit"></div>
                  </div>
                  <div class="col-sm-2">
                    <button class="btn btn-primary" style="width: 3em; visibility: hidden;" type="button" id="tambah_form_tht_kulit"><i class="icon_plus_alt2"></i></button>
                  </div>
                </div>
                <div class="form-group">
                  <input type="hidden" name="jumlah_form_keterangan" id="jumlah_form_keterangan" value="1">
                  <label class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-8">
                    @if($ada_keterangan)
                      @foreach($keterangan as $p)
                        <input type="text" class="form-control" disabled value="{{$p}}">
                      @endforeach
                    @else
                      <input type="text" class="form-control" disabled>
                    @endif
                    <div id="last_row_keterangan"></div>
                  </div>
                  <div class="col-sm-2">
                    <button class="btn btn-primary" style="width: 3em; visibility: hidden;" type="button" id="tambah_form_keterangan"><i class="icon_plus_alt2"></i></button>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Hasil Urinalis</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled {{isset($hasil_urinalis[1]) ? 'checked' : ''}}> Benzodiazepin
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled {{isset($hasil_urinalis[2]) ? 'checked' : ''}}> Kanabis
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled {{isset($hasil_urinalis[3]) ? 'checked' : ''}}> Opiat
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled {{isset($hasil_urinalis[4]) ? 'checked' : ''}}> Amfetamin 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled {{isset($hasil_urinalis[5]) ? 'checked' : ''}}> Kokain 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled {{isset($hasil_urinalis[6]) ? 'checked' : ''}}> Barbiturat
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled {{isset($hasil_urinalis[7]) ? 'checked' : ''}}> Alkohol
                    </label>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Kesimpulan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Medis</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" disabled value="{{$medis}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan/Dukungan</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" disabled value="{{$pekerjaan_dukungan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Napza</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" disabled value="{{$napza}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Legal</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" disabled value="{{$legal}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keluarga/sosial</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" disabled value="{{$keluarga_sosial}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Psikiatris</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" disabled value="{{$psikiatris}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Diagnosa Kerja
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Klien memenuhi kriteria diagnosis NAPZA</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" disabled value="{{$kriteria_napza}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosis Lainnya</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" disabled value="{{$diagnosis_lainnya}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Rencana Terapi dan Rehabilitasi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Resume masalah</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" disabled>{{$resume_masalah}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Rencana tindak Lanjut</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled {{$rencana_tindak_lanjut == 1 ? 'checked' : ''}} name="rencana_tindak_lanjut">
                        Asesmen Lanjutan/Mendalam
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled {{$rencana_tindak_lanjut == 2 ? 'checked' : ''}} name="rencana_tindak_lanjut">
                        Evaluasi Psikologis
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled {{$rencana_tindak_lanjut == 3 ? 'checked' : ''}} name="rencana_tindak_lanjut">
                        Program Detoksifikasi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled {{$rencana_tindak_lanjut == 4 ? 'checked' : ''}} name="rencana_tindak_lanjut">
                        Wawancara Motivasional
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled {{$rencana_tindak_lanjut == 5 ? 'checked' : ''}} name="rencana_tindak_lanjut">
                        Intervensi Singkat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled {{$rencana_tindak_lanjut == 6 ? 'checked' : ''}} name="rencana_tindak_lanjut">
                        Terapi Rumatan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled {{$rencana_tindak_lanjut == 7 ? 'checked' : ''}} name="rencana_tindak_lanjut">
                        Rehabilitasi rawat inap
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled {{$rencana_tindak_lanjut == 8 ? 'checked' : ''}} name="rencana_tindak_lanjut">
                        Konseling
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled {{$rencana_tindak_lanjut == 9 ? 'checked' : ''}} name="rencana_tindak_lanjut">
                        Lain-lain
                      </label>
                      <input type="text" class="form-control" name="rencana_tindak_lanjut_lainnya" disabled value="{{$rencana_tindak_lanjut_lainnya}}">
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Dokter</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_dokter" disabled value="{{$nama_dokter}}">
                  </div>
                </div>
              </div>
            </section>
          </form>
        </div>
      </div>
    </section>

    @include('layouts.tailscript')

    {{-- menambah row inputan --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form').click(function() {
          var a = document.getElementById('jumlah_form').value;
            // alert('a');
            a = parseInt(a) + 1;
            $('#last_row').before('<div class="form-group" id="form_'+a+'"> <label class="col-sm-2 control-label">Jenis Penyakit</label> <div class="col-sm-4"> <input type="text" class="form-control" name="jenis_penyakit_'+a+'"> </div> <label class="col-sm-1 control-label" style="padding-right: 0em;">Dirawat Tahun</label> <div class="col-sm-1"> <input type="text" class="form-control" name="tahun_dirawat_'+a+'"> </div> <label class="col-sm-1 control-label" style="padding-right: 0em;">Lama Dirawat</label> <div class="col-sm-2"> <input type="text" class="form-control" style="width: 14em;" name="lama_dirawat_'+a+'"> </div> <div class="col-sm-1"> </div> </div>');
            document.getElementById('jumlah_form').value = a;
          });
      });
    </script>

    {{-- menambah row inputan sistem pencernaan --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form_sistem_pencernaan').click(function() {
          // alert('b');
          var a = document.getElementById('jumlah_form_sistem_pencernaan').value;
            // alert('a');
            a = parseInt(a) + 1;
            $('#last_row_sistem_pencernaan').before('<input type="text" class="form-control" name="sistem_pencernaan_'+a+'">');
            document.getElementById('jumlah_form_sistem_pencernaan').value = a;
          });
      });
    </script>

    {{-- menambah row inputan jantung pembuluh --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form_sistem_jantung_pembuluh').click(function() {
          var a = document.getElementById('jumlah_form_sistem_jantung_pembuluh').value;
            a = parseInt(a) + 1;
            $('#last_row_sistem_jantung_pembuluh').before('<input type="text" class="form-control" name="sistem_jantung_pembuluh_'+a+'">');
            document.getElementById('jumlah_form_sistem_jantung_pembuluh').value = a;
          });
      });
    </script>

    {{-- menambah row inputan sistem saraf pusat --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form_sistem_saraf_pusat').click(function() {
          var a = document.getElementById('jumlah_form_sistem_saraf_pusat').value;
            a = parseInt(a) + 1;
            $('#last_row_sistem_saraf_pusat').before('<input type="text" class="form-control" name="sistem_saraf_pusat_'+a+'">');
            document.getElementById('jumlah_form_sistem_saraf_pusat').value = a;
          });
      });
    </script>

    {{-- menambah row inputan sistem saraf pusat --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form_tht_kulit').click(function() {
          var a = document.getElementById('jumlah_form_tht_kulit').value;
            a = parseInt(a) + 1;
            $('#last_row_tht_kulit').before('<input type="text" class="form-control" name="tht_kulit_'+a+'">');
            document.getElementById('jumlah_form_tht_kulit').value = a;
          });
      });
    </script>

    {{-- menambah row inputan sistem saraf pusat --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form_keterangan').click(function() {
          var a = document.getElementById('jumlah_form_keterangan').value;
            a = parseInt(a) + 1;
            $('#last_row_keterangan').before('<input type="text" class="form-control" name="keterangan_'+a+'">');
            document.getElementById('jumlah_form_keterangan').value = a;
          });
      });
    </script>

    {{-- menghapus row --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $(document).on('click', '.tombol_hapus', function() {
          var x = $(this).attr('id');
          var nomor = x.substring(13)
          $('#form_'+nomor).remove();
        });
      });
    </script>

    <script type="{{url('')}}/sweetalert/sweetalert2.min.js"></script>
    


  </body>
  <html>