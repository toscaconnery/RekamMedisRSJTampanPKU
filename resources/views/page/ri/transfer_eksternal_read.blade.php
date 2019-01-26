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
                  <td>Transfer Pasien Eksternal Rumah Sakit</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_transfer_eksternal">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_transfer_eksternal_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_transfer_eksternal_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_eksternal_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal" method="post">
            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nomor</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="nomor" value="{{$nomor}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">RS Tujuan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="rs_tujuan" value="{{$rs_tujuan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Petugas RS tujuan yang dihubungi</label>
                  <div class="col-sm-3">
                    <input type="text" disabled class="form-control" name="petugas_dihubungi" value="{{$petugas_dihubungi}}">
                  </div>
                  <label class="col-sm-1 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_dihubungi" value="{{$tanggal_dihubungi}}">
                  </div>
                  <label class="col-sm-1 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" disabled class="form-control" name="jam_dihubungi" value="{{$jam_dihubungi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alasan/Tujuan Transfer</label>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="alasan_transfer" value="1" {{$alasan_transfer == '1' ? 'checked' : ''}}>
                        Alih Rawat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="alasan_transfer" value="2" {{$alasan_transfer == '2' ? 'checked' : ''}}>
                        Rujuk
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="alasan_transfer" value="3" {{$alasan_transfer == '3' ? 'checked' : ''}}>
                        Lainnya
                      </label>
                    </div>
                  </div>
                  <label class="col-sm-2 control-label">Tanggal Transfer</label>
                  <div class="col-sm-2">
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_transfer" value="{{$tanggal_transfer}}">
                  </div>
                  <label class="col-sm-1 control-label">Jam Transfer</label>
                  <div class="col-sm-2">
                    <input type="time" disabled class="form-control" name="jam_transfer" value="{{$jam_transfer}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Atas Permintaan</label>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="atas_permintaan" value="1" {{$atas_permintaan == '1' ? 'checked' : ''}}>
                        Dokter
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="atas_permintaan" value="2" {{$atas_permintaan == '2' ? 'checked' : ''}}>
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
                        <input type="radio" disabled name="kategori_pasien" value="0" {{$kategori_pasien == '0' ? 'checked' : ''}}>
                        Level 0
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="kategori_pasien" value="1" {{$kategori_pasien == '1' ? 'checked' : ''}}>
                        Level 1
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="kategori_pasien" value="2" {{$kategori_pasien == '2' ? 'checked' : ''}}>
                        Level 2
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="kategori_pasien" value="3" {{$kategori_pasien == '3' ? 'checked' : ''}}>
                        Level 3
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="kategori_pasien" value="4" {{$kategori_pasien == '4' ? 'checked' : ''}}>
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
                        <input type="checkbox" disabled value="1" name="petugas_pendamping_1" {{isset($petugas_pendamping[1]) ? 'checked' : ''}}> Dokter
                      </label><br>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled value="2" name="petugas_pendamping_2" {{isset($petugas_pendamping[2]) ? 'checked' : ''}}> Perawat
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled value="3" name="petugas_pendamping_3" {{isset($petugas_pendamping[3]) ? 'checked' : ''}}> ATLS
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled value="4" name="petugas_pendamping_4" {{isset($petugas_pendamping[4]) ? 'checked' : ''}}> BCLS
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled value="5" name="petugas_pendamping_5" {{isset($petugas_pendamping[5]) ? 'checked' : ''}}> Pramu Ruang
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled value="6" name="petugas_pendamping_6" {{isset($petugas_pendamping[6]) ? 'checked' : ''}}> ACLS
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled value="7" name="petugas_pendamping_7" {{isset($petugas_pendamping[7]) ? 'checked' : ''}}> PPGD
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled value="8" name="petugas_pendamping_8" {{isset($petugas_pendamping[8]) ? 'checked' : ''}}> Sopir 
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled value="9" name="petugas_pendamping_9" {{isset($petugas_pendamping[9]) ? 'checked' : ''}}> EN
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled value="10" name="petugas_pendamping_10" {{isset($petugas_pendamping[10]) ? 'checked' : ''}}> BLS
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled value="11" name="petugas_pendamping_11" {{isset($petugas_pendamping[11]) ? 'checked' : ''}}> Security  
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled value="12" name="petugas_pendamping_12" {{isset($petugas_pendamping[12]) ? 'checked' : ''}}> BTLS
                      </label>
                      <br>
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled value="13" name="petugas_pendamping_13" {{isset($petugas_pendamping[13]) ? 'checked' : ''}}> APN
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Masuk RS</label>
                  <div class="col-sm-2">
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_masuk_rs" value="{{$tanggal_masuk_rs}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Anamnesa</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="anamnesa" value="{{$anamnesa}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosa</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="diagnosa" value="{{$diagnosa}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Indikasi di Rawat</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="indikasi_dirawat" value="{{$indikasi_dirawat}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tindakan yang telah dilakukan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="tindakan_dilakukan" value="{{$tindakan_dilakukan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Terapi yang telah diberikan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="terapi_diberikan" value="{{$terapi_diberikan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Resiko</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="resiko" value="{{$resiko}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Transportasi yang digunakan</label>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="transportasi" value="1" {{$transportasi == '1' ? 'checked' : ''}}>
                        Ambulance
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="transportasi" value="2" {{$transportasi == '2' ? 'checked' : ''}}>
                        Mobil Pribadi
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="transportasi" value="3" {{$transportasi == '3' ? 'checked' : ''}}>
                        Taxi
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="transportasi" value="4" {{$transportasi == '4' ? 'checked' : ''}}>
                        Angkutan Umum
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="transportasi" value="5" {{$transportasi == '5' ? 'checked' : ''}}>
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="nama_dokter">Nama Dokter</label>
                  <div class="col-sm-6">
                    <input id="nama_dokter" type="text" disabled class="form-control" name="nama_dokter" value="{{$nama_dokter}}">
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
                    <input type="time" disabled class="form-control" name="jam_sebelum" value="{{$jam_sebelum}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keadaan Umum</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="keadaan_umum_sebelum" value="{{$keadaan_umum_sebelum}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">TD</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="td_sebelum" value="{{$td_sebelum}}">
                  </div>
                  <label class="col-sm-1 control-label">HR</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="hr_sebelum" value="{{$hr_sebelum}}">
                  </div>
                  <label class="col-sm-1 control-label">RR</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="rr_sebelum" value="{{$rr_sebelum}}">
                  </div>
                  <label class="col-sm-1 control-label">Suhu</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="suhu_sebelum" value="{{$suhu_sebelum}}">
                  </div>
                  <label class="col-sm-1 control-label">SpO2</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="spo2_sebelum" value="{{$spo2_sebelum}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lainnya</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="lainnya_sebelum" value="{{$lainnya_sebelum}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="keterangan_sebelum" value="{{$keterangan_sebelum}}">
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Status Pasien Selama Transfer</label></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" disabled class="form-control" name="jam_selama" value="{{$jam_selama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keadaan Umum</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="keadaan_umum_selama" value="{{$keadaan_umum_selama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">TD</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="td_selama" value="{{$td_selama}}">
                  </div>
                  <label class="col-sm-1 control-label">HR</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="hr_selama" value="{{$hr_selama}}">
                  </div>
                  <label class="col-sm-1 control-label">RR</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="rr_selama" value="{{$rr_selama}}">
                  </div>
                  <label class="col-sm-1 control-label">Suhu</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="suhu_selama" value="{{$suhu_selama}}">
                  </div>
                  <label class="col-sm-1 control-label">SpO2</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="spo2_selama" value="{{$spo2_selama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lainnya</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="lainnya_selama" value="{{$lainnya_selama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="keterangan_selama" value="{{$keterangan_selama}}">
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Status Pasien Setelah Transfer</label></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" disabled class="form-control" name="jam_setelah" value="{{$jam_setelah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keadaan Umum</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="keadaan_umum_setelah" value="{{$keadaan_umum_setelah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">TD</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="td_setelah" value="{{$td_setelah}}">
                  </div>
                  <label class="col-sm-1 control-label">HR</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="hr_setelah" value="{{$hr_setelah}}">
                  </div>
                  <label class="col-sm-1 control-label">RR</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="rr_setelah" value="{{$rr_setelah}}">
                  </div>
                  <label class="col-sm-1 control-label">Suhu</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="suhu_setelah" value="{{$suhu_setelah}}">
                  </div>
                  <label class="col-sm-1 control-label">SpO2</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="spo2_setelah" value="{{$spo2_setelah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lainnya</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="lainnya_setelah" value="{{$lainnya_setelah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="keterangan_setelah" value="{{$keterangan_setelah}}">
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
                    <input type="text" disabled class="form-control" name="nama_petugas_menyerahkan" value="{{$nama_petugas_menyerahkan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Petugas Penerima</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="nama_petugas_penerima" value="{{$nama_petugas_penerima}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal" value="{{$tanggal}}">
                  </div>
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" disabled class="form-control" name="jam" value="{{$jam}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">RS</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="rs" value="{{$rs}}">
                  </div>
                </div>
              </div>
            </section>
          </form>
        </div>
      </div>
    </section>

    @include('layouts.tailscript')
  </body>


  <html>