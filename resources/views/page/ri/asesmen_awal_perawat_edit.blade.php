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
                  <td>Dokter</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_asesmen_awal_dokter">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_asesmen_awal_dokter_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_asesmen_awal_dokter_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_asesmen_pdf">Cetak</a>
                  </td>
                </tr>
                <tr>
                  <td>Perawat</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_asesmen_awal_perawat">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_asesmen_awal_perawat_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_asesmen_awal_perawat_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_asesmen_pdf">Cetak</a>
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
            <input type="hidden" name="jenis_form" value="update">
            <section class="panel">
              <header class="panel-heading"></header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Diperiksa</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" name="tanggal_diperiksa" value="{{$tanggal_diperiksa}}" class="form-control sandbox-container">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" name="jam_diperiksa" value="{{$jam_diperiksa}}" class="form-control">
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
                    <input type="text" class="form-control" name="nadi" value="{{$nadi}}">
                  </div>
                  <label class="col-sm-1 control-label">TD</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="td" value="{{$td}}">
                  </div>
                  <label class="col-sm-1 control-label">Napas</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="napas" value="{{$napas}}">
                  </div>
                  <label class="col-sm-1 control-label">Suhu</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="suhu" value="{{$suhu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">TB</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="tb" value="{{$tb}}">
                  </div>
                  <label class="col-sm-1 control-label">BB</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="bb" value="{{$bb}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Kondisi Pasien Saat Masuk</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="kondisi" {{$kondisi == 0 ? 'checked' : ''}} value="0">
                        Mandiri
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kondisi" {{$kondisi == 1 ? 'checked' : ''}} value="1">
                        Tempat Tidur
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kondisi" {{$kondisi == 2 ? 'checked' : ''}} value="2">
                        Dipapah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kondisi" {{$kondisi == 3 ? 'checked' : ''}} value="3">
                        Lainnya ...
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="kondisi_ket" value="{{$kondisi_ket}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Asal Pasien</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="asal" {{$asal == 0 ? 'checked' : ''}} value="0">
                        Poliklinik
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="asal" {{$asal == 1 ? 'checked' : ''}} value="1">
                        IGD
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Dokter pemeriksa</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="dokter_pemeriksa" value="{{$dokter_pemeriksa}}">
                  </div>
                  <label class="col-sm-2 control-label">Dokter Keluarga</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="dokter_keluarga" value="{{$dokter_keluarga}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosis Masuk</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="diagnosis_masuk" value="{{$diagnosis_masuk}}">
                  </div>
                  <label class="col-sm-2 control-label">DPJP</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="dpjp" value="{{$dpjp}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Alergi Obat</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="alergi" {{$alergi == 0 ? 'checked' : ''}} value="0">
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alergi" {{$alergi == 1 ? 'checked' : ''}} value="1">
                        Tidak Ada
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Reaksi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jenis_reaksi" value="{{$jenis_reaksi}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Barang Berharga</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="barang1" {{isset($barang[1]) ? 'checked' : ''}}> Perhiasan
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="barang2" {{isset($barang[2]) ? 'checked' : ''}}> Pakaian
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="barang3" {{isset($barang[3]) ? 'checked' : ''}}> Lainnya
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Deskripsikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="deskripsi_barang_berharga" value="{{$deskripsi_barang_berharga}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindakan Barang Berharga</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="tindak1" {{isset($tindak[1]) ? 'checked' : ''}}> Kumpulkan dan Simpan
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="tindak2" {{isset($tindak[2]) ? 'checked' : ''}}> Lainnya ...
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tindakan_barang" value="{{$tindakan_barang}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alat Bantu yang Digunakan</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="alat1" {{isset($alat[1]) ? 'checked' : ''}}> Kacamata
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="alat2" {{isset($alat[2]) ? 'checked' : ''}}> Lensa Kontak
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="alat3" {{isset($alat[3]) ? 'checked' : ''}}> Gigi Palsu
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="alat4" {{isset($alat[4]) ? 'checked' : ''}}> Alat Bantu Dengar
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="alat5" {{isset($alat[5]) ? 'checked' : ''}}> Lainnya
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alat_bantu_lainnya" value="{{$alat_bantu_lainnya}}">
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
                      <input type="checkbox" {{isset($friwayatpasien1[1]) ? 'checked' : ''}} name="friwayatpasien1_1"> Hipertensi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" {{isset($friwayatpasien1[2]) ? 'checked' : ''}} name="friwayatpasien1_2"> PPOK
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" {{isset($friwayatpasien1[3]) ? 'checked' : ''}} name="friwayatpasien1_3"> Diabetes
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" {{isset($friwayatpasien1[4]) ? 'checked' : ''}} name="friwayatpasien1_4"> Kanker
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" {{isset($friwayatpasien1[5]) ? 'checked' : ''}} name="friwayatpasien1_5"> Infark Miokard
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" {{isset($friwayatpasien1[6]) ? 'checked' : ''}} name="friwayatpasien1_6"> Asma
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" {{isset($friwayatpasien1[7]) ? 'checked' : ''}} name="friwayatpasien1_7"> Hepatitis
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" {{isset($friwayatpasien1[8]) ? 'checked' : ''}} name="friwayatpasien1_8"> Kejang
                    </label>
                    <br>
                    <label class="checkbox-inline">
                      <input type="checkbox" {{isset($friwayatpasien1[9]) ? 'checked' : ''}} name="friwayatpasien1_9"> Stroke
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" {{isset($friwayatpasien1[10]) ? 'checked' : ''}} name="friwayatpasien1_10"> TB
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" {{isset($friwayatpasien1[11]) ? 'checked' : ''}} name="friwayatpasien1_11"> Ulkus
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" {{isset($friwayatpasien1[12]) ? 'checked' : ''}} name="friwayatpasien1_12"> Penyakit Paru Lainnya
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" {{isset($friwayatpasien1[13]) ? 'checked' : ''}} name="friwayatpasien1_13"> Gangguan Jiwa
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" {{isset($friwayatpasien1[14]) ? 'checked' : ''}} name="friwayatpasien1_14"> Jantung
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" {{isset($friwayatpasien1[15]) ? 'checked' : ''}} name="friwayatpasien1_15"> Penyakit Ginjal
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" {{isset($friwayatpasien1[16]) ? 'checked' : ''}} name="friwayatpasien1_16"> Lainnya
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Deskripsikan Penyakit dan Operasi<br><small>(yang tidak tercantum di atas)</small></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="friwayatpasien2" value="{{$friwayatpasien2}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Alkohol/Obat</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien3" {{$friwayatpasien3 == 0 ? 'checked' : ''}} value="0">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien3" {{$friwayatpasien3 == 1 ? 'checked' : ''}} value="1">
                        Ya
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="friwayatpasien4" value="{{$friwayatpasien4}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jumlah/Hari</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="friwayatpasien5" value="{{$friwayatpasien5}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Berhenti Konsumsi Alkohol</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien6" {{$friwayatpasien6 == 1 ? 'checked' : ''}}>
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Merokok</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien7" {{$friwayatpasien7 == 0 ? 'checked' : ''}} value="0">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien7" {{$friwayatpasien7 == 1 ? 'checked' : ''}} value="1">
                        Ya
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="friwayatpasien8" value="{{$friwayatpasien8}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jumlah/Hari</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="friwayatpasien9" value="{{$friwayatpasien9}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Berhenti Merokok</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatpasien10" {{$friwayatpasien10 == 1 ? 'checked' : ''}}>
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
                        <input type="radio" name="friwayatpasien11" {{$friwayatpasien11 == 0 ? 'checked' : ''}} value="0">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien11" {{$friwayatpasien11 == 1 ? 'checked' : ''}} value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien11" {{$friwayatpasien11 == 2 ? 'checked' : ''}} value="2">
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
                        <input type="radio" name="friwayatpasien12" {{$friwayatpasien12 == 0 ? 'checked' : ''}} value="0">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien12" {{$friwayatpasien12 == 1 ? 'checked' : ''}} value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpasien12" {{$friwayatpasien12 == 2 ? 'checked' : ''}} value="2">
                        Menolak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1 control-label" style="margin-left:2%;">Aniaya Fisik</label>
                  <label class="col-sm-1 control-label" style="margin-left:-2%;">Usia</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="friwayatpasien13" value="{{$friwayatpasien13}}">
                  </div>
                  <label class="col-sm-1 control-label">Pelaku</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien14" value="{{$friwayatpasien14}}">
                  </div>
                  <label class="col-sm-1 control-label">Korban</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien15" value="{{$friwayatpasien15}}">
                  </div>
                  <label class="col-sm-1 control-label">Saksi</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien16" value="{{$friwayatpasien16}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1 control-label" style="margin-left:2%;">Aniaya Seksual</label>
                  <label class="col-sm-1 control-label" style="margin-left:-2%;">Usia</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="friwayatpasien17" value="{{$friwayatpasien17}}">
                  </div>
                  <label class="col-sm-1 control-label">Pelaku</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien18" value="{{$friwayatpasien18}}">
                  </div>
                  <label class="col-sm-1 control-label">Korban</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien19" value="{{$friwayatpasien19}}">
                  </div>
                  <label class="col-sm-1 control-label">Saksi</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien20" value="{{$friwayatpasien20}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1 control-label" style="margin-left:2%;">Penolakan</label>
                  <label class="col-sm-1 control-label" style="margin-left:-2%;">Usia</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="friwayatpasien21" value="{{$friwayatpasien21}}">
                  </div>
                  <label class="col-sm-1 control-label">Pelaku</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien22" value="{{$friwayatpasien22}}">
                  </div>
                  <label class="col-sm-1 control-label">Korban</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien23" value="{{$friwayatpasien23}}">
                  </div>
                  <label class="col-sm-1 control-label">Saksi</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien24" value="{{$friwayatpasien24}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1 control-label" style="margin-left:2%;">Kekerasan dalam Keluarga</label>
                  <label class="col-sm-1 control-label" style="margin-left:-2%;">Usia</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="friwayatpasien25" value="{{$friwayatpasien25}}">
                  </div>
                  <label class="col-sm-1 control-label">Pelaku</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien26" value="{{$friwayatpasien26}}">
                  </div>
                  <label class="col-sm-1 control-label">Korban</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien27" value="{{$friwayatpasien27}}">
                  </div>
                  <label class="col-sm-1 control-label">Saksi</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien28" value="{{$friwayatpasien28}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1 control-label" style="margin-left:2%;">Tindakan Kriminal</label>
                  <label class="col-sm-1 control-label" style="margin-left:-2%;">Usia</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="friwayatpasien29" value="{{$friwayatpasien29}}">
                  </div>
                  <label class="col-sm-1 control-label">Pelaku</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien30" value="{{$friwayatpasien30}}">
                  </div>
                  <label class="col-sm-1 control-label">Korban</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien31" value="{{$friwayatpasien31}}">
                  </div>
                  <label class="col-sm-1 control-label">Saksi</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="friwayatpasien32" value="{{$friwayatpasien32}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="friwayatpasien33" value="{{$friwayatpasien33}}">
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
                      <input type="checkbox" name="friwayatkeluarga1" {{isset($friwayatkeluarga[1]) ? 'checked' : ''}}> Penyakit Jantung
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga2" {{isset($friwayatkeluarga[2]) ? 'checked' : ''}}> Hipertensi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga3" {{isset($friwayatkeluarga[3]) ? 'checked' : ''}}> Stroke
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga4" {{isset($friwayatkeluarga[4]) ? 'checked' : ''}}> Asma
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga5" {{isset($friwayatkeluarga[5]) ? 'checked' : ''}}> Kanker
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga6" {{isset($friwayatkeluarga[6]) ? 'checked' : ''}}> Ginjal
                    </label>
                    <br>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga7" {{isset($friwayatkeluarga[7]) ? 'checked' : ''}}> Gangguan Jiwa
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga8" {{isset($friwayatkeluarga[8]) ? 'checked' : ''}}> Kejang
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga9" {{isset($friwayatkeluarga[9]) ? 'checked' : ''}}> TB
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga10" {{isset($friwayatkeluarga[10]) ? 'checked' : ''}}> Diabetes
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga11" {{isset($friwayatkeluarga[11]) ? 'checked' : ''}}> Anastesi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga14" {{isset($friwayatkeluarga[14]) ? 'checked' : ''}}> Gangguan Hematologi
                    </label>
                    <br>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="friwayatkeluarga15" {{isset($friwayatkeluarga[15]) ? 'checked' : ''}}> Lainnya
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
                      <option {{$friwayatpsikososial1 == 1 ? 'selected' : ''}} value="1">Menikah</option>
                      <option {{$friwayatpsikososial1 == 2 ? 'selected' : ''}} value="2">Belum Menikah</option>
                      <option {{$friwayatpsikososial1 == 3 ? 'selected' : ''}} value="3">Duda/Janda</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Keluarga</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial2" {{$friwayatpsikososial2 == 0 ? 'checked' : ''}} value="0">
                        Tidak ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial2" {{$friwayatpsikososial2 == 1 ? 'checked' : ''}} value="1">
                        Ada
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess"></label>
                  <div class="col-lg-3">
                    <select class="form-control m-bot15" name="friwayatpsikososial3">
                      <option {{$friwayatpsikososial3 == 1 ? 'selected' : ''}} value="1">Serumah</option>
                      <option {{$friwayatpsikososial3 == 2 ? 'selected' : ''}} value="2">Tidak Serumah</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tempat Tinggal</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial4" {{$friwayatpsikososial4 == 0 ? 'checked' : ''}} value="0">
                        Rumah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial4" {{$friwayatpsikososial4 == 1 ? 'checked' : ''}} value="1">
                        Panti Asuhan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial4" {{$friwayatpsikososial4 == 2 ? 'checked' : ''}} value="2">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="friwayatpsikososial5" value="{{$friwayatpsikososial5}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pekerjaan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial6" {{$friwayatpsikososial6 == 0 ? 'checked' : ''}} value="0">
                        Purna Waktu
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial6" {{$friwayatpsikososial6 == 1 ? 'checked' : ''}} value="1">
                        Paruh Waktu
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial6" {{$friwayatpsikososial6 == 2 ? 'checked' : ''}} value="2">
                        Pensiun
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial6" {{$friwayatpsikososial6 == 3 ? 'checked' : ''}} value="3">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="friwayatpsikososial7" value="{{$friwayatpsikososial7}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Aktivitas</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial8" {{$friwayatpsikososial8 == 0 ? 'checked' : ''}} value="0">
                        Mandiri
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial8" {{$friwayatpsikososial8 == 1 ? 'checked' : ''}} value="1">
                        Tirah Baring
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial8" {{$friwayatpsikososial8 == 2 ? 'checked' : ''}} value="2">
                        Kursi Roda
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial8" {{$friwayatpsikososial8 == 3 ? 'checked' : ''}} value="3">
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
                        <input type="radio" name="friwayatpsikososial9" {{$friwayatpsikososial9 == 0 ? 'checked' : ''}} value="0">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="friwayatpsikososial9" {{$friwayatpsikososial9 == 1 ? 'checked' : ''}} value="1">
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
                        <input type="checkbox" name="friwayatpsikososial10" {{$friwayatpsikososial10 == 1 ? 'checked' : ''}}>
                        Kooperatif
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="friwayatpsikososial11" {{$friwayatpsikososial11 == 1 ? 'checked' : ''}}>
                        Ansietas
                      </label>
                    </div>
                  </div>\
                  <div class="col-lg-3">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="friwayatpsikososial12" {{$friwayatpsikososial12 == 1 ? 'checked' : ''}}>
                        Cemas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="friwayatpsikososial13" {{$friwayatpsikososial13 == 1 ? 'checked' : ''}}>
                        Ingin mengakhiri hidup
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="friwayatpsikososial14" {{$friwayatpsikososial14 == 1 ? 'checked' : ''}}>
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
                    <input type="text" class="form-control" name="fkeluarga1" value="{{$fkeluarga1}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Telepon</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkeluarga2" value="{{$fkeluarga2}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Informasi Didapat Dari</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkeluarga3" {{$fkeluarga3 == 0 ? 'checked' : ''}} value="0">
                        Pasien
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkeluarga3" {{$fkeluarga3 == 1 ? 'checked' : ''}} value="1">
                        Keluarga
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkeluarga3" {{$fkeluarga3 == 2 ? 'checked' : ''}} value="2">
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
                    <input type="text" class="form-control" name="fkonsepdiri1" value="{{$fkonsepdiri1}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">b. Identitas Diri</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkonsepdiri2" value="{{$fkonsepdiri2}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">c. Peran</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkonsepdiri3" value="{{$fkonsepdiri3}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">d. Ideal Diri</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkonsepdiri4" value="{{$fkonsepdiri4}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">e. Harga Diri</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkonsepdiri5" value="{{$fkonsepdiri5}}">
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
                    <input type="text" class="form-control" name="fhubungansosial1" value="{{$fhubungansosial1}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">b. Peran serta dalam kegiatan kelompok masyarakat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fhubungansosial2" value="{{$fhubungansosial2}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">c. Hambatan dalam berhubungan dengan orang lain</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fhubungansosial3" value="{{$fhubungansosial3}}">
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
                    <input type="text" class="form-control" name="fspiritual1" value="{{$fspiritual1}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">b. Kegiatan Ibadah</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fspiritual2" value="{{$fspiritual2}}">
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
                      <input type="checkbox" name="fpenampilan1" {{isset($fpenampilan[1]) ? 'checked' : ''}}> Tidak rapi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpenampilan2" {{isset($fpenampilan[2]) ? 'checked' : ''}}> Penggunaan pakaian tidak sesuai
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpenampilan3" {{isset($fpenampilan[3]) ? 'checked' : ''}}> Cara berpakaian tidak seperti biasanya
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fpenampilan_ket" value="{{$fpenampilan_ket}}">
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
                      <input type="checkbox" name="fpembicaraan1" {{isset($fpembicaraan[1]) ? 'checked' : ''}}> cepat
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpembicaraan2" {{isset($fpembicaraan[2]) ? 'checked' : ''}}> Keras
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpembicaraan3" {{isset($fpembicaraan[3]) ? 'checked' : ''}}> Gagap
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpembicaraan4" {{isset($fpembicaraan[4]) ? 'checked' : ''}}> Inkoheren
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpembicaraan5" {{isset($fpembicaraan[5]) ? 'checked' : ''}}> Apatis
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpembicaraan6" {{isset($fpembicaraan[6]) ? 'checked' : ''}}> Lambat
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpembicaraan7" {{isset($fpembicaraan[7]) ? 'checked' : ''}}> Membisu
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpembicaraan8" {{isset($fpembicaraan[8]) ? 'checked' : ''}}> Tidak mampu memulai bicara
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fpembicaraan_ket" value="{{$fpembicaraan_ket}}">
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
                      <input type="checkbox" name="faktivitasmotorik1" {{isset($faktivitasmotorik[1]) ? 'checked' : ''}}> Lesu
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faktivitasmotorik2" {{isset($faktivitasmotorik[2]) ? 'checked' : ''}}> Tegang
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faktivitasmotorik3" {{isset($faktivitasmotorik[3]) ? 'checked' : ''}}> Gelisah
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faktivitasmotorik4" {{isset($faktivitasmotorik[4]) ? 'checked' : ''}}> Tik
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faktivitasmotorik5" {{isset($faktivitasmotorik[5]) ? 'checked' : ''}}> Agitas
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faktivitasmotorik6" {{isset($faktivitasmotorik[6]) ? 'checked' : ''}}> Grimasen
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faktivitasmotorik7" {{isset($faktivitasmotorik[7]) ? 'checked' : ''}}> Tremor
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faktivitasmotorik8" {{isset($faktivitasmotorik[8]) ? 'checked' : ''}}> Kompulsif
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faktivitasmotorik9" {{isset($faktivitasmotorik[9]) ? 'checked' : ''}}> Restrain
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="faktivitasmotorik_ket" value="{{$faktivitasmotorik_ket}}">
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
                      <input type="checkbox" name="falamperasaan1" {{isset($falamperasaan[1]) ? 'checked' : ''}}> Sedih
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="falamperasaan2" {{isset($falamperasaan[2]) ? 'checked' : ''}}> Ketakutan
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="falamperasaan3" {{isset($falamperasaan[3]) ? 'checked' : ''}}> Putus Asa
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="falamperasaan4" {{isset($falamperasaan[4]) ? 'checked' : ''}}> Khawatir
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="falamperasaan5" {{isset($falamperasaan[5]) ? 'checked' : ''}}> Gembira berlebihan
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="falamperasaan6" {{isset($falamperasaan[6]) ? 'checked' : ''}}> Isyarat percobaan bunuh diri
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="falamperasaan_ket" value="{{$falamperasaan_ket}}">
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
                      <input type="checkbox" name="fafek1" {{isset($fafek[1]) ? 'checked' : ''}}> Datar
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fafek2" {{isset($fafek[2]) ? 'checked' : ''}}> Tumpul
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fafek3" {{isset($fafek[3]) ? 'checked' : ''}}> Labil
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fafek4" {{isset($fafek[4]) ? 'checked' : ''}}> Tidak sesuai
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fafek_ket" value="{{$fafek_ket}}">
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
                      <input type="checkbox" name="finteraksi1" {{isset($finteraksi[1]) ? 'checked' : ''}}> Bermusuhan
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="finteraksi2" {{isset($finteraksi[2]) ? 'checked' : ''}}> Tidak kooperatif
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="finteraksi3" {{isset($finteraksi[3]) ? 'checked' : ''}}> Mudah tersinggung
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="finteraksi4" {{isset($finteraksi[4]) ? 'checked' : ''}}> Kontak mata kurang
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="finteraksi5" {{isset($finteraksi[5]) ? 'checked' : ''}}> Defensif
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="finteraksi6" {{isset($finteraksi[6]) ? 'checked' : ''}}> Curiga
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="finteraksi_ket" value="{{$finteraksi_ket}}">
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
                      <input type="checkbox" name="fpersepsi1" {{isset($fpersepsi[1]) ? 'checked' : ''}}> Ilusi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpersepsi2" {{isset($fpersepsi[2]) ? 'checked' : ''}}> Halusinasi dengar
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpersepsi3" {{isset($fpersepsi[3]) ? 'checked' : ''}}> Halusinasi lihat
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpersepsi4" {{isset($fpersepsi[4]) ? 'checked' : ''}}> Halusinasi raba
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpersepsi5" {{isset($fpersepsi[5]) ? 'checked' : ''}}> Halusinasi kecap
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fpersepsi6" {{isset($fpersepsi[6]) ? 'checked' : ''}}> Halusinasi hidu
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fpersepsi_ket" value="{{$fpersepsi_ket}}">
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
                      <input type="checkbox" name="fisikpikir1" {{isset($fisikpikir[1]) ? 'checked' : ''}}> Obsesi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir2" {{isset($fisikpikir[2]) ? 'checked' : ''}}> Phobia
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir3" {{isset($fisikpikir[3]) ? 'checked' : ''}}> Hipokondria
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir4" {{isset($fisikpikir[4]) ? 'checked' : ''}}> Depersonalisasi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir5" {{isset($fisikpikir[5]) ? 'checked' : ''}}> Ide terkait
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir6" {{isset($fisikpikir[6]) ? 'checked' : ''}}> Pikiran magis
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir7" {{isset($fisikpikir[7]) ? 'checked' : ''}}> Waham agama
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir8" {{isset($fisikpikir[8]) ? 'checked' : ''}}> Waham somatik
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir9" {{isset($fisikpikir[9]) ? 'checked' : ''}}> Waham besar
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir10" {{isset($fisikpikir[10]) ? 'checked' : ''}}> Waham curiga
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir11" {{isset($fisikpikir[11]) ? 'checked' : ''}}> Waham nihilistik
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir12" {{isset($fisikpikir[12]) ? 'checked' : ''}}> Sisip pikir
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir13" {{isset($fisikpikir[13]) ? 'checked' : ''}}> Siap pikir
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fisikpikir14" {{isset($fisikpikir[14]) ? 'checked' : ''}}> Kontrol pikir
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fisikpikir_ket" value="{{$fisikpikir_ket}}">
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
                      <input type="checkbox" name="faruspikir1" {{isset($faruspikir[1]) ? 'checked' : ''}}> Sirkumstansial
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faruspikir2" {{isset($faruspikir[2]) ? 'checked' : ''}}> Tangensial
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faruspikir3" {{isset($faruspikir[3]) ? 'checked' : ''}}> Kehilangan asosiasi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faruspikir4" {{isset($faruspikir[4]) ? 'checked' : ''}}> Flight of idea
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faruspikir5" {{isset($faruspikir[5]) ? 'checked' : ''}}> Block
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="faruspikir6" {{isset($faruspikir[6]) ? 'checked' : ''}}> Perseverasi
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="faruspikir_ket" value="{{$faruspikir_ket}}">
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
                      <input type="checkbox" name="fmemori1" {{isset($fmemori[1]) ? 'checked' : ''}}> Ggn daya ingat jangka panjang
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fmemori2" {{isset($fmemori[2]) ? 'checked' : ''}}> Ggn daya ingat jangka pendek
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fmemori3" {{isset($fmemori[3]) ? 'checked' : ''}}> Ggn daya ingat saat ini
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fmemori4" {{isset($fmemori[4]) ? 'checked' : ''}}> Konfabulasi
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fmemori_ket" value="{{$fmemori_ket}}">
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
                      <input type="checkbox" name="fkonsentrasi1" {{isset($fkonsentrasi[1]) ? 'checked' : ''}}> Mudah teralih
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fkonsentrasi2" {{isset($fkonsentrasi[2]) ? 'checked' : ''}}> Tidak mampu berkonsentrasi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fkonsentrasi3" {{isset($fkonsentrasi[3]) ? 'checked' : ''}}> Tidak mampu berhitung sederhana
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkonsentrasi_ket" value="{{$fkonsentrasi_ket}}">
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
                      <input type="checkbox" name="fkemampuanpenilaian1" {{isset($fkemampuanpenilaian[1]) ? 'checked' : ''}}> Gangguan ringan
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fkemampuanpenilaian2" {{isset($fkemampuanpenilaian[2]) ? 'checked' : ''}}> Gangguan bermakna
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkemampuanpenilaian_ket" value="{{$fkemampuanpenilaian_ket}}">
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
                      <input type="checkbox" name="fdaya1" {{isset($fdaya[1]) ? 'checked' : ''}}> Mengingkari sakit yang diderita
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" name="fdaya2" {{isset($fdaya[2]) ? 'checked' : ''}}> Menyalahkan hal di luar dirinya
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jelaskan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fdaya_ket" value="{{$fdaya_ket}}">
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
                        <input type="checkbox" name="fpengajaran1" {{isset($fpengajaran[1]) ? 'checked' : ''}}>
                        Proses Penyakit dan Tindakan medis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran2" {{isset($fpengajaran[2]) ? 'checked' : ''}}>
                        Terapi/Obat
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran3" {{isset($fpengajaran[3]) ? 'checked' : ''}}>
                        Penanganan Nyeri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran4" {{isset($fpengajaran[4]) ? 'checked' : ''}}>
                        Penggunaan Alat Medis
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran5" {{isset($fpengajaran[5]) ? 'checked' : ''}}>
                        Nutrisi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran6" {{isset($fpengajaran[6]) ? 'checked' : ''}}>
                        Rehab Medik
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran7" {{isset($fpengajaran[7]) ? 'checked' : ''}}>
                        Rehabilitasi Mental
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran8" {{isset($fpengajaran[8]) ? 'checked' : ''}}>
                        Perawatan Penyakitnya
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran9" {{isset($fpengajaran[9]) ? 'checked' : ''}}>
                        Aspek psikologis terkait penyakitnya
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran10" {{isset($fpengajaran[10]) ? 'checked' : ''}}>
                        Follow up dan minta pertolongan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fpengajaran11" {{isset($fpengajaran[11]) ? 'checked' : ''}}>
                        Lain-lain,...
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">1. Keyakinan dan nilai-nilai pasien/keluarga tentang penyakitnya</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkomunikasi1" value="{{$fkomunikasi1}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">2. Bicara</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi2" {{$fkomunikasi2 == 0 ? 'checked' : ''}} value="0">
                        Normal
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi2" {{$fkomunikasi2 == 1 ? 'checked' : ''}} value="1">
                        Gangguan bicara
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kapan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkomunikasi3" value="{{$fkomunikasi3}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">3. Bahasa sehari-hari</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi4" {{$fkomunikasi4 == 0 ? 'checked' : ''}} value="0">
                        Indonesia
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi4" {{$fkomunikasi4 == 1 ? 'checked' : ''}} value="1">
                        Inggris
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi4" {{$fkomunikasi4 == 2 ? 'checked' : ''}} value="2">
                        Daerah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi4" {{$fkomunikasi4 == 3 ? 'checked' : ''}} value="3">
                        Lain-lain
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess"></label>
                  <div class="col-lg-3">
                    <select class="form-control m-bot15" name="fkomunikasi5">
                      <option {{$fkomunikasi5 == 1 ? 'selected' : ''}} value="1">Aktif</option>
                      <option {{$fkomunikasi5 == 2 ? 'selected' : ''}} value="2">Pasif</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkomunikasi6" value="{{$fkomunikasi6}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">4. Perlu Penerjemah</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi7" {{$fkomunikasi7 == 0 ? 'checked' : ''}} value="0">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi7" {{$fkomunikasi7 == 1 ? 'checked' : ''}} value="1">
                        Ya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bahasa</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkomunikasi8" value="{{$fkomunikasi8}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bahasa Isyarat</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi9" {{$fkomunikasi9 == 0 ? 'checked' : ''}} value="0">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi9" {{$fkomunikasi9 == 1 ? 'checked' : ''}} value="1">
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
                        <input type="checkbox" name="fkomunikasi10_1" {{isset($fkomunikasi10[1]) ? 'checked' : ''}}>
                        Bahasa
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_2" {{isset($fkomunikasi10[2]) ? 'checked' : ''}}>
                        Pendengaran
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_3" {{isset($fkomunikasi10[3]) ? 'checked' : ''}}>
                        Hilang memori
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_4" {{isset($fkomunikasi10[4]) ? 'checked' : ''}}>
                        Motivasi buruk
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_5" {{isset($fkomunikasi10[5]) ? 'checked' : ''}}>
                        Masalah penglihatan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_6" {{isset($fkomunikasi10[6]) ? 'checked' : ''}}>
                        Tidak ditemukan hambatan belajar
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_7" {{isset($fkomunikasi10[7]) ? 'checked' : ''}}>
                        Cemas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_8" {{isset($fkomunikasi10[8]) ? 'checked' : ''}}>
                        Emosi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_9" {{isset($fkomunikasi10[9]) ? 'checked' : ''}}>
                        Kesulitan Bicara
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_10" {{isset($fkomunikasi10[10]) ? 'checked' : ''}}>
                        Tidak ada partisipasi dari caregiver
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_11" {{isset($fkomunikasi10[11]) ? 'checked' : ''}}>
                        Secara fisiologi tidak mampu belajar
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi10_12" {{isset($fkomunikasi10[12]) ? 'checked' : ''}}>
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
                        <input type="checkbox" name="fkomunikasi11_1" {{isset($fkomunikasi11[1]) ? 'checked' : ''}}>
                        Menulis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi11_2" {{isset($fkomunikasi11[2]) ? 'checked' : ''}}>
                        Audio- Visual/Gambar
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi11_3" {{isset($fkomunikasi11[3]) ? 'checked' : ''}}>
                        Diskusi
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi11_4" {{isset($fkomunikasi11[4]) ? 'checked' : ''}}>
                        Membaca
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi11_5" {{isset($fkomunikasi11[5]) ? 'checked' : ''}}>
                        Mendengar
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fkomunikasi11_6" {{isset($fkomunikasi11[6]) ? 'checked' : ''}}>
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
                        <input type="radio" name="fkomunikasi12" {{$fkomunikasi12 == 0 ? 'checked' : ''}} value="0">
                        TK
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi12" {{$fkomunikasi12 == 1 ? 'checked' : ''}} value="1">
                        SD
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi12" {{$fkomunikasi12 == 2 ? 'checked' : ''}} value="2">
                        SMP
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi12" {{$fkomunikasi12 == 3 ? 'checked' : ''}} value="3">
                        SMA
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi12" {{$fkomunikasi12 == 4 ? 'checked' : ''}} value="4">
                        Akademi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi12" {{$fkomunikasi12 == 5 ? 'checked' : ''}} value="5">
                        Sarjana
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi12" {{$fkomunikasi12 == 6 ? 'checked' : ''}} value="6">
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
                        <input type="radio" name="fkomunikasi13" {{$fkomunikasi13 == 0 ? 'checked' : ''}} value="0">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fkomunikasi13" {{$fkomunikasi13 == 1 ? 'checked' : ''}} value="1">
                        Ya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alasan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fkomunikasi14" value="{{$fkomunikasi14}}">
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
                    <input type="text" class="form-control" name="fgizi1" value="{{$fgizi1}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">BB</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fgizi2" value="{{$fgizi2}}">
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
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="fresikojatuh1" value="{{$fresikojatuh1}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="fresikojatuh2" value="{{$fresikojatuh2}}">
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
                        <input type="radio" name="jenis_resiko_jatuh" {{$jenis_resiko_jatuh == 'humpty_dumpty' ? 'checked' : ''}} value="humpty_dumpty">
                        HUMPTY DUMPTY (Anak-anak) 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis_resiko_jatuh" {{$jenis_resiko_jatuh == 'morse' ? 'checked' : ''}} value="morse">
                        MORSE (Dewasa) 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis_resiko_jatuh" {{$jenis_resiko_jatuh == 'edmunson' ? 'checked' : ''}} value="edmunson">
                        EDMUNSON (Jiwa) 
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <div id="place_for_resiko_jatuh"></div>
            @if($jenis_resiko_jatuh == 'humpty_dumpty')
              <section class="panel hidden_panel" id="hidden_panel">
                <header class="panel-heading">
                  HUMPTY DUMPTY (Anak-anak)
                </header>
                <div class="panel-body">
                  <div class="col-lg-2"></div><h4>HUMPTY DUMPTY (Anak-anak) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">USIA</label>
                    <div class="col-lg-2">
                      <select class="form-control m-bot15" name="usia">
                        <option></option>
                        <option {{$usia == 1 ? 'selected' : ''}} value="1">Dibawah 3 tahun </option>
                        <option {{$usia == 2 ? 'selected' : ''}} value="2">3 – 7 tahun </option>
                        <option {{$usia == 3 ? 'selected' : ''}} value="3">7 – 13 tahun </option>
                        <option {{$usia == 4 ? 'selected' : ''}} value="4">> 13 tahun </option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="diagnosis_hd">
                        <option></option>
                        <option {{$diagnosis_hd == 1 ? 'selected' : ''}} value="1">Kelainan Neurologi </option>
                        <option {{$diagnosis_hd == 2 ? 'selected' : ''}} value="2">Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)</option>
                        <option {{$diagnosis_hd == 3 ? 'selected' : ''}} value="3">Kelainan psikis / prilaku</option>
                        <option {{$diagnosis_hd == 4 ? 'selected' : ''}} value="4">Diagnosis lain</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">GANGGUAN KOGNITIF</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="gangguan_kognitif">
                        <option></option>
                        <option {{$gangguan_kognitif == 1 ? 'selected' : ''}} value="1">Tidak sadar terhadap keterbatasan (gangguan kesadaran, retardasi mental</option>
                        <option {{$gangguan_kognitif == 2 ? 'selected' : ''}} value="2">Lupa keterbatasan (anak yang hiperaktif)</option>
                        <option {{$gangguan_kognitif == 3 ? 'selected' : ''}} value="3">Mengetahui kemampuan diri</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">FAKTOR LINGKUNGAN</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="faktor_lingkungan">
                        <option></option>
                        <option {{$faktor_lingkungan == 1 ? 'selected' : ''}} value="1">Riwayat jatuh dari tempat tidur saat bayi</option>
                        <option {{$faktor_lingkungan == 2 ? 'selected' : ''}} value="2">Pasien menggunakan alat bantu atau box meubel</option>
                        <option {{$faktor_lingkungan == 3 ? 'selected' : ''}} value="3">Pasien berada di tempat tidur</option>
                        <option {{$faktor_lingkungan == 4 ? 'selected' : ''}} value="4">Di luar ruang rawat</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RESPON TERHADAP OPERASI/OBAT PENENANG/EFEK ANASTESI</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="waktu_respon_obat">
                        <option></option>
                        <option {{$waktu_respon_obat == 1 ? 'selected' : ''}} value="1">Dalam 24 Jam</option>
                        <option {{$waktu_respon_obat == 2 ? 'selected' : ''}} value="2">Dalam 48 Jam</option>
                        <option {{$waktu_respon_obat == 3 ? 'selected' : ''}} value="3">> 48 Jam</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">PENGGUNAAN OBAT</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="penggunaan_obat">
                        <option></option>
                        <option {{$penggunaan_obat == 1 ? 'selected' : ''}} value="1">Bermacam-macam obat yang digunakan : obat sedatif (kecuali pasien ICU yang menggunakan sedasi dan paralisis), Hiptonik Barbitural, Fonotiazin, Antidepresan, Laksansia / Diuretikan, Narkotik</option>
                        <option {{$penggunaan_obat == 2 ? 'selected' : ''}} value="2">Salah satu Pengobatan di atas</option>
                        <option {{$penggunaan_obat == 3 ? 'selected' : ''}} value="3">Pengobatan lain</option>
                      </select>
                    </div>
                  </div>
                </div>
              </section>
            @elseif($jenis_resiko_jatuh == 'morse')
              <section class="panel hidden_panel" id="hidden_panel">
                <header class="panel-heading">
                  MORSE (Dewasa)
                </header>
                <div class="panel-body">
                  <div class="col-lg-2"></div><h4>MORSE (Dewasa) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                    <div class="col-lg-1">
                      <select class="form-control m-bot15" name="riwayat_jatuh_mrs">
                        <option></option>
                        <option {{$riwayat_jatuh_mrs == 1 ? 'selected' : ''}} value="1">Ya</option>
                        <option {{$riwayat_jatuh_mrs == 2 ? 'selected' : ''}} value="2">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS SEKUNDER</label>
                    <div class="col-lg-1">
                      <select class="form-control m-bot15" name="diagnosis_sekunder">
                        <option></option>
                        <option {{$diagnosis_sekunder == 1 ? 'selected' : ''}} value="1">Ya</option>
                        <option {{$diagnosis_sekunder == 2 ? 'selected' : ''}} value="2">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">ALAT BANTU</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="alat_bantu">
                        <option></option>
                        <option {{$alat_bantu == 1 ? 'selected' : ''}} value="1">Perabot</option>
                        <option {{$alat_bantu == 2 ? 'selected' : ''}} value="2">Tongkat/Alat Penopang</option>
                        <option {{$alat_bantu == 3 ? 'selected' : ''}} value="3">Tidak ada/Kursi Roda/Perawat/Tirah Baring</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">TERPASANG INFUS</label>
                    <div class="col-lg-1">
                      <select class="form-control m-bot15" name="terpasang_infus">
                        <option></option>
                        <option {{$terpasang_infus == 1 ? 'selected' : ''}} value="1">Ya</option>
                        <option {{$terpasang_infus == 2 ? 'selected' : ''}} value="2">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">GAYA BERJALAN</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="gaya_berjalan">
                        <option></option>
                        <option {{$gaya_berjalan == 1 ? 'selected' : ''}} value="1">Terganggu</option>
                        <option {{$gaya_berjalan == 2 ? 'selected' : ''}} value="2">Lemah</option>
                        <option {{$gaya_berjalan == 3 ? 'selected' : ''}} value="3">Normal/Tirah Baring/Imobilisasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="status_mental_mrs">
                        <option></option>
                        <option {{$status_mental_mrs == 1 ? 'selected' : ''}} value="1">Sering lupa akan keterbatasan yang dimiliki</option>
                        <option {{$status_mental_mrs == 2 ? 'selected' : ''}} value="2">Orientasi baik terhadap kemampuan diri sendiri</option>
                      </select>
                    </div>
                  </div>
                </div>
              </section>
            @elseif($jenis_resiko_jatuh == 'edmunson')
              <section class="panel hidden_panel" id="hidden_panel">
                <header class="panel-heading">
                  EDMUNSON (Jiwa)
                </header>
                <div class="panel-body">
                  <div class="col-lg-2"></div><h4>EDMUNSON (Jiwa) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="status_mental_edm">
                        <option></option>
                        <option {{$status_mental_edm == 1 ? 'selected' : ''}} value="1">Kesadaran baik/orientasi baik setiap saat </option>
                        <option {{$status_mental_edm == 2 ? 'selected' : ''}} value="2">Agitasi/Ansietas</option>
                        <option {{$status_mental_edm == 3 ? 'selected' : ''}} value="3">Kadang-kadang bingung</option>
                        <option {{$status_mental_edm == 4 ? 'selected' : ''}} value="4">Bingung/Disorientasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="diagnosis_edm">
                        <option></option>
                        <option {{$diagnosis_edm == 1 ? 'selected' : ''}} value="1">Kelainan Neurologi </option>
                        <option {{$diagnosis_edm == 2 ? 'selected' : ''}} value="2">Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)</option>
                        <option {{$diagnosis_edm == 3 ? 'selected' : ''}} value="3">Kelainan psikis / prilaku</option>
                        <option {{$diagnosis_edm == 4 ? 'selected' : ''}} value="4">Diagnosis lain</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">ELIMINASI</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="eliminasi">
                        <option></option>
                        <option {{$eliminasi == 1 ? 'selected' : ''}} value="1">Mandiri dan mampi mengontrol BAB/BAK</option>
                        <option {{$eliminasi == 2 ? 'selected' : ''}} value="2">Dower Catheter/Colostomy</option>
                        <option {{$eliminasi == 3 ? 'selected' : ''}} value="3">Eliminasi dengan bantuan</option>
                        <option {{$eliminasi == 4 ? 'selected' : ''}} value="4">Gangguan eliminasi (Inkontinensia/Nokturia/Frekwensi)</option>
                        <option {{$eliminasi == 5 ? 'selected' : ''}} value="5">Inkontinesia tetapi mampu untuk mobilisasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">PENGOBATAN</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="pengobatan">
                        <option></option>
                        <option {{$pengobatan == 1 ? 'selected' : ''}} value="1">Tanpa obat-obatan</option>
                        <option {{$pengobatan == 2 ? 'selected' : ''}} value="2">Obat-obatan jantung</option>
                        <option {{$pengobatan == 3 ? 'selected' : ''}} value="3">Obat-obat psikotropika (termasuk Benzodiazepine dan Antidepresan)</option>
                        <option {{$pengobatan == 4 ? 'selected' : ''}} value="4">Mendapat tambahan obat-obatan dan/atau obat-obat PRN (psikiatri, antinyeri) yang diberikan dalam 24 jam terakhir</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSA</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="diagnosa">
                        <option></option>
                        <option {{$diagnosa == 1 ? 'selected' : ''}} value="1">Bipolar/ Gangguan Schizoaffective</option>
                        <option {{$diagnosa == 2 ? 'selected' : ''}} value="2">Penggunaan Obat-obatan terlarang/ketergantungan alkohol</option>
                        <option {{$diagnosa == 3 ? 'selected' : ''}} value="3">Gangguan Depresi Mayor</option>
                        <option {{$diagnosa == 4 ? 'selected' : ''}} value="4">Dimensia/ Delirium</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">AMBULASI /KESEIMBANGAN </label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="ambulasi">
                        <option></option>
                        <option {{$ambulasi == 1 ? 'selected' : ''}} value="1">Mandiri/Keseimbangan Baik/Immobilisasi</option>
                        <option {{$ambulasi == 2 ? 'selected' : ''}} value="2">Dengan Alat Bantu (Kursi roda, walker,dll)</option>
                        <option {{$ambulasi == 3 ? 'selected' : ''}} value="3">Vertigo/kelemahan</option>
                        <option {{$ambulasi == 4 ? 'selected' : ''}} value="4">Goyah/membutuhkan mantuan dan menyadari kemampuan</option>
                        <option {{$ambulasi == 5 ? 'selected' : ''}} value="5">Goyah tapi lupa keterbatasan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">NUTRISI</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="nutrisi">
                        <option></option>
                        <option {{$nutrisi == 1 ? 'selected' : ''}} value="1">Mengkonsumsi sedikit makanan atau minuman  dalam 24 jam terakhir</option>
                        <option {{$nutrisi == 2 ? 'selected' : ''}} value="2">Tidak ada kelainan dengan nafsu makan</option>
                        <option {{$nutrisi == 3 ? 'selected' : ''}} value="3">Gangguan pola tidur yang dilaporkan oleh pasien, keluarga atau petugas</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="riwayat_jatuh_edm">
                        <option></option>
                        <option {{$riwayat_jatuh_edm == 1 ? 'selected' : ''}} value="1">Tidak ada riwayat jatuh</option>
                        <option {{$riwayat_jatuh_edm == 2 ? 'selected' : ''}} value="2">Ada riwayat jatuh dalam 3 bulan terakhir</option>
                      </select>
                    </div>
                  </div>
                </div>
              </section>
            @endif

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
                        <input type="radio" name="fnyeri1" {{$fnyeri1 == 1 ? 'checked' : ''}} value="1">
                        Ya 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri1" {{$fnyeri1 == 0 ? 'checked' : ''}} value="0">
                        Tidak 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Intensitas</label>
                  <div class="col-lg-1">
                    <select class="form-control m-bot15" name="fnyeri2">
                      <option {{$fnyeri2 == 1 ? 'checked' : ''}} value="1">1</option>
                      <option {{$fnyeri2 == 2 ? 'checked' : ''}} value="2">2</option>
                      <option {{$fnyeri2 == 3 ? 'checked' : ''}} value="3">3</option>
                      <option {{$fnyeri2 == 4 ? 'checked' : ''}} value="4">4</option>
                      <option {{$fnyeri2 == 5 ? 'checked' : ''}} value="5">5</option>
                      <option {{$fnyeri2 == 6 ? 'checked' : ''}} value="6">6</option>
                      <option {{$fnyeri2 == 7 ? 'checked' : ''}} value="7">7</option>
                      <option {{$fnyeri2 == 8 ? 'checked' : ''}} value="8">8</option>
                      <option {{$fnyeri2 == 9 ? 'checked' : ''}} value="9">9</option>
                      <option {{$fnyeri2 == 10 ? 'checked' : ''}} value="10">10</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri3" {{$fnyeri3 == 0 ? 'checked' : ''}} value="0">
                        Akut 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri3" {{$fnyeri3 == 1 ? 'checked' : ''}} value="1">
                        Kronis 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Lokasi Nyeri</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fnyeri4" value="{{$fnyeri4}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Terjadinya Nyeri</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fnyeri5" value="{{$fnyeri5}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sifat Nyeri</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri6" {{$fnyeri6 == 0 ? 'checked' : ''}} value="0">
                        Kejang 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri6" {{$fnyeri6 == 1 ? 'checked' : ''}} value="1">
                        Konstan 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri6" {{$fnyeri6 == 2 ? 'checked' : ''}} value="2">
                        Intermiten 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri6" {{$fnyeri6 == 3 ? 'checked' : ''}} value="3">
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
                        <input type="radio" name="fnyeri7" value="0" {{$fnyeri7 == 0 ? 'checked' : ''}}>
                        Nyeri 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri7" value="1" {{$fnyeri7 == 1 ? 'checked' : ''}}>
                        Kram 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri7" value="2" {{$fnyeri7 == 2 ? 'checked' : ''}}>
                        Tumpul
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri7" value="3" {{$fnyeri7 == 3 ? 'checked' : ''}}>
                        Terbakat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri7" value="4" {{$fnyeri7 == 4 ? 'checked' : ''}}>
                        Tajam
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri7" value="5" {{$fnyeri7 == 5 ? 'checked' : ''}}>
                        Nyeri Tembak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri7" value="6" {{$fnyeri7 == 6 ? 'checked' : ''}}>
                        Menusuk
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri7" value="7" {{$fnyeri7 == 7 ? 'checked' : ''}}>
                        Tertekan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri7" value="8" {{$fnyeri7 == 8 ? 'checked' : ''}}>
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div> 

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fnyeri8" value="{{$fnyeri8}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Faktor Pemberat</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri9" {{$fnyeri9 == 0 ? 'checked' : ''}} value="0">
                        Cahaya 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri9" {{$fnyeri9 == 1 ? 'checked' : ''}} value="1">
                        Gelap
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri9" {{$fnyeri9 == 2 ? 'checked' : ''}} value="2">
                        Gerakan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri9" {{$fnyeri9 == 3 ? 'checked' : ''}} value="3">
                        Berbaring 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri9" {{$fnyeri9 == 4 ? 'checked' : ''}} value="4">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div> 

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fnyeri10" value="{{$fnyeri10}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Faktor Peringan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri11" {{$fnyeri11 == 0 ? 'checked' : ''}} value="0">
                        Makan 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri11" {{$fnyeri11 == 1 ? 'checked' : ''}} value="1">
                        Sungi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri11" {{$fnyeri11 == 2 ? 'checked' : ''}} value="2">
                        Dingin 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri11" {{$fnyeri11 == 3 ? 'checked' : ''}} value="3">
                        Panas 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="fnyeri11" {{$fnyeri11 == 4 ? 'checked' : ''}} value="4">
                        Lainnya 
                      </label>
                    </div>
                  </div>
                </div> 

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fnyeri12" value="{{$fnyeri12}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Efek Nyeri</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fnyeri13_1" {{isset($fnyeri13[1]) ? 'checked' : ''}}>
                        Mual Muntah
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fnyeri13_2" {{isset($fnyeri13[2]) ? 'checked' : ''}}>
                        Emosi
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fnyeri13_3" {{isset($fnyeri13[3]) ? 'checked' : ''}}>
                        Tidur
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fnyeri13_4" {{isset($fnyeri13[4]) ? 'checked' : ''}}>
                        Hubungan dengan orang lain
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fnyeri13_5" {{isset($fnyeri13[5]) ? 'checked' : ''}}>
                        Nafsu Makan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fnyeri13_6" {{isset($fnyeri13[6]) ? 'checked' : ''}}>
                        Aktivitas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fnyeri13_7" {{isset($fnyeri13[7]) ? 'checked' : ''}}>
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fnyeri14" value="{{$fnyeri14}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    Obat-obatan di rumah (daftar obat, dosis dan frekuensi, kapan terakhir kali dikonsumsi
                  </div>
                </div>

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th rowspan="2" style="width: 32%; text-align: center;">Nama Obat</th>
                      <th rowspan="2" style="width: 32%; text-align: center;">Dosis</th>
                      <th rowspan="2" style="width: 32%; text-align: center;">Kapan terakhir kali diberikan</th>
                      <th rowspan="2" style="width: 4%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $idx = 0;
                    @endphp
                    @foreach($obat as $o)
                    @php
                      $idx += 1;
                    @endphp
                    <tr id="form_{{$idx}}">
                      <td><input type="text" class="form-control" name="nama_obat_{{$idx}}" value="{{$o['nama_obat']}}"></td>
                      <td><input type="text" class="form-control" name="dosis_obat_{{$idx}}" value="{{$o['dosis_obat']}}"></td>
                      <td><input type="text" class="form-control" name="terakhir_obat_{{$idx}}" value="{{$o['terakhir_obat']}}"></td>
                      <td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_{{$idx}}"><i class="icon_close_alt2"></i></button></div></td>
                    </tr>
                    @endforeach
                    <tr id="last_row">
                      <input type="hidden" name="jumlah_form" id="jumlah_form" value="{{$idx}}">
                      <td colspan="4">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <input type="hidden" name="jumlah_form" id="jumlah_form" value="1">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Resume</label>
                  <div class="col-sm-8">
                    <textarea name="resume" class="form-control" style="resize: vertical;" rows="5">{{$resume}}</textarea>
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
                        <input type="checkbox" name="fdiagnosaumum1" {{isset($fdiagnosaumum[1]) ? 'checked' : ''}}>
                        Aktual/ Resiko bersihan jalan nafas tidak efektif
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum2" {{isset($fdiagnosaumum[2]) ? 'checked' : ''}}>
                        Aktual/ Resiko aspirasi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum3" {{isset($fdiagnosaumum[3]) ? 'checked' : ''}}>
                        Aktual/ Resiko pola nafas tidak efektif
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum4" {{isset($fdiagnosaumum[4]) ? 'checked' : ''}}>
                        Aktual/ Resiko gangguan pertukaran gas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum5" {{isset($fdiagnosaumum[5]) ? 'checked' : ''}}>
                        Aktual/ penurunan curah jantung
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum6" {{isset($fdiagnosaumum[6]) ? 'checked' : ''}}>
                        Aktual/ Resiko gangguan perfusi jaringan celebral/perifer
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum7" {{isset($fdiagnosaumum[7]) ? 'checked' : ''}}>
                        Aktual/ Resiko gangguan keseimbangan cairan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum8" {{isset($fdiagnosaumum[8]) ? 'checked' : ''}}>
                        Aktual/ Resiko gangguan keseimbangan kontinuitas jaringan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum9" {{isset($fdiagnosaumum[9]) ? 'checked' : ''}}>
                        Aktual/ Resiko infeksi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum10" {{isset($fdiagnosaumum[10]) ? 'checked' : ''}}>
                        Resiko cedera / jatuh
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum11" {{isset($fdiagnosaumum[11]) ? 'checked' : ''}}>
                        Hypertermi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum12" {{isset($fdiagnosaumum[12]) ? 'checked' : ''}}>
                        Nyeri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum13" {{isset($fdiagnosaumum[13]) ? 'checked' : ''}}>
                        Gangguan kebutuhan nutrisi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosaumum14" {{isset($fdiagnosaumum[14]) ? 'checked' : ''}}>
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fdiagnosaumum_ket" value="{{$fdiagnosaumum_ket}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Diagnosa keperawatan jiwa</label>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa1" {{isset($fdiagnosajiwa[1]) ? 'checked' : ''}}>
                        Gangguan persepsi sensori : halusinasi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa2" {{isset($fdiagnosajiwa[2]) ? 'checked' : ''}}>
                        Perilaku kekerasan
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa3" {{isset($fdiagnosajiwa[3]) ? 'checked' : ''}}>
                        Isolasi sosial
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa4" {{isset($fdiagnosajiwa[4]) ? 'checked' : ''}}>
                        Gangguan konsep diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa5" {{isset($fdiagnosajiwa[5]) ? 'checked' : ''}}>
                        Resiko bunuh diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa6" {{isset($fdiagnosajiwa[6]) ? 'checked' : ''}}>
                        Intoleransi aktifitas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa7" {{isset($fdiagnosajiwa[7]) ? 'checked' : ''}}>
                        Waham
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa8" {{isset($fdiagnosajiwa[8]) ? 'checked' : ''}}>
                        Defisit perawatan diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa9" {{isset($fdiagnosajiwa[9]) ? 'checked' : ''}}>
                        Kerusakan komunitas verbal
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa10" {{isset($fdiagnosajiwa[10]) ? 'checked' : ''}}>
                        Koping individu tidak efektif
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa11" {{isset($fdiagnosajiwa[11]) ? 'checked' : ''}}>
                        Aktual/Resiko Cemas/Takut
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fdiagnosajiwa12" {{isset($fdiagnosajiwa[12]) ? 'checked' : ''}}>
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fdiagnosajiwa_ket" value="{{$fdiagnosajiwa_ket}}">
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
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal" value="{{$tanggal}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam" value="{{$jam}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Perawat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_perawat" value="{{$nama_perawat}}">
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

    {{-- menambah row inputan --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tambah_form').click(function() {
        var a = document.getElementById('jumlah_form').value;
        a = parseInt(a) + 1;
        $('#last_row').before('<tr id="form_'+a+'"> <td><input type="text" class="form-control" name="nama_obat_'+a+'" required></td> <td><input type="text" class="form-control" name="dosis_obat_'+a+'" required></td> <td><input type="text" class="form-control" name="terakhir_obat_'+a+'" required></td> <td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_'+a+'"><i class="icon_close_alt2"></i></button></div></td> </tr>');
        document.getElementById('jumlah_form').value = a;
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

  </body>


  <html>