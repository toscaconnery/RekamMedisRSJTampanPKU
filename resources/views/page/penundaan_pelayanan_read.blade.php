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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> PENUNDAAN PELAYANAN</h3>
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
                  <td>Penundaan Pelayanan</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/penundaan_pelayanan">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/penundaan_pelayanan_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/penundaan_pelayanan_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/penundaan_pelayanan_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal">
            <section class="panel">
              <header class="panel-heading">
                Data Penundaan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="nama" disabled value="{{$nama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="umur" disabled value="{{$umur}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hubungan dengan Pasien</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="hubungan" disabled value="{{$hubungan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Poli/Ruangan</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="poli_ruangan" disabled value="{{$poli_ruangan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Dokter Pengirim</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="dokter_pengirim" disabled value="{{$dokter_pengirim}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pelayanan yang akan dilakukan</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="pelayanan_akan_dilakukan" disabled value="{{$pelayanan_akan_dilakukan}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Dengan ini menyatakan bahwa saya telah menerima informasi terhadap penundaan pelayanan dan pengobatan dikarenakan:
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Penundaan pelayanan</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="dokter_berhalangan" {{$dokter_berhalangan == True ? 'checked' : ''}}> Dokter berhalangan datang
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="kerusakan_alat" {{$kerusakan_alat == True ? 'checked' : ''}}> Kerusakan alat
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="pemberian_obat_farmasi" {{$pemberian_obat_farmasi == True ? 'checked' : ''}}> Pemberian obat di farmasi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="hasil_pemeriksaan_radiologi" {{$hasil_pemeriksaan_radiologi == True ? 'checked' : ''}}> Hasil pemeriksaan radiologi
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="hasil_pemeriksaan_laboratorium" {{$hasil_pemeriksaan_laboratorium == True ? 'checked' : ''}}> Hasil pemeriksaan laboratorium
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="lainnya" {{!is_null($sebab_lainnya) ? 'checked' : ''}}> Lain-lain .....
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Sebutkan</label>
                  <div class="col-lg-10">
                    <input type="text" disabled class="form-control" name="sebab_lainnya" value="{{$sebab_lainnya}}">
                  </div>
                </div>
                <div class="col-lg-2"></div><h5>Maka dengan ini saya Setuju untuk dilakukan Penundaan Pelayanan dengan alternatif yang diberikan</h5>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Setuju menunda</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="alternatif" {{$alternatif == 'Dijadwalkan ulang' ? 'checked' : ''}} value="Dijadwalkan ulang">
                        Dijadwalkan ulang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="alternatif" {{$alternatif == 'Jadwal yang akan datang' ? 'checked' : ''}} value="Jadwal yang akan datang">
                        Jadwal yang akan datang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="alternatif" {{$alternatif == 'Dirujuk ke Pelayanan / RS lain' ? 'checked' : ''}} value="Dirujuk ke Pelayanan / RS lain">
                        Dirujuk ke Pelayanan / RS lain
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Jadwal Penundaan</label>
                  <div class="col-sm-3">
                    <input id="dp1" type="text" size="16" class="form-control" name="jadwal_penundaan" disabled value="{{$jadwal_penundaan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Rumah Sakit Rujukan</label>
                  <div class="col-sm-3">
                    <input type="text" disabled class="form-control" name="rs_tujuan" disabled value="{{$rs_tujuan}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
               
              </header>
              <div class="panel-body">
                
                <div class="form-group">
                  <label class="control-label col-lg-2">Nama Pasien/Keluarga Pasien</label>
                  <div class="col-lg-10">
                    <input type="text" disabled class="form-control" name="sebab_lainnya" value="Butuh Isian">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-lg-2">Nama DPJP</label>
                  <div class="col-lg-10">
                    <input type="text" disabled class="form-control" name="" value="Butuh Isian">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-lg-2">Pemberi Informasi</label>
                  <div class="col-lg-10">
                    <input type="text" disabled class="form-control" name="" value="Butuh Isian">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2">Tanggal</label>
                  <div class="col-lg-10">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="" required value="" disabled="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2">Jam</label>
                  <div class="col-lg-10">
                    <input type="time" class="form-control" name="" required value="" disabled="">
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