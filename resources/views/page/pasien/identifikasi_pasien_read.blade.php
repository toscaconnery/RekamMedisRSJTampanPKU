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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> IDENTIFIKASI PASIEN BARU</h3>
        </div>
      </div>
      <div class="panel-body bio-graph-info">
        <h1>No. RM : {{$no_rm}}</h1>
        <div class="row">
          <div class="bio-row">
            <p><span>Nama Pasien </span>: {{$nama_pasien}} </p>
          </div>
          <div class="bio-row">
            <p><span>Tanggal Lahir</span>: {{date('j F Y', strtotime($tanggal_lahir))}}</p>
          </div>
          <div class="bio-row">
            <p><span>Jenis Kelamin </span>: {{$jenis_kelamin}}</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Identifikasi Pasien
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
                  <td>Identifikasi Pasien</td>
                  <td>{{date('d/m/Y', strtotime($tanggal_pengisian))}}</td>
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
          <form class="form-horizontal">
            <section class="panel">
              <header class="panel-heading">
                Status
              </header>
              <div class="panel-body">
                <input type="hidden" name="no_rm" value="{{$no_rm}}">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pernikahan</label>
                  <div class="col-lg-3">
                    <select disabled class="form-control m-bot15" name="pernikahan">
                      <option {{$pernikahan == 'Tidak Kawin' ? 'selected' : ''}} value="Tidak Kawin">Tidak Kawin</option>
                      <option {{$pernikahan == 'Kawin' ? 'selected' : ''}} value="Kawin">Kawin</option>
                      <option {{$pernikahan == 'Cerai Hidup' ? 'selected' : ''}} value="Cerai Hidup">Cerai Hidup</option>
                      <option {{$pernikahan == 'Cerai Mati' ? 'selected' : ''}} value="Cerai Mati">Cerai Mati</option>
                    </select>
                  </div>

                  <label class="control-label col-lg-2" for="inputSuccess">Agama</label>
                  <div class="col-lg-3">
                    <select disabled class="form-control m-bot15" name="agama">
                      <option {{$agama == 'Islam' ? 'selected' : ''}} value="Islam">Islam</option>
                      <option {{$agama == 'Kristen' ? 'selected' : ''}} value="Kristen">Kristen</option>
                      <option {{$agama == 'Katholik' ? 'selected' : ''}} value="Katholik">Katholik</option>
                      <option {{$agama == 'Hindu' ? 'selected' : ''}} value="Hindu">Hindu</option>
                      <option {{$agama == 'Budha' ? 'selected' : ''}} value="Budha">Budha</option>
                      <option {{$agama == 'Konghucu' ? 'selected' : ''}} value="Konghucu">Konghucu</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pendidikan</label>
                  <div class="col-lg-3">
                    <select disabled class="form-control m-bot15" name="pendidikan">
                      <option {{$pendidikan == 'Tidak Sekolah' ? 'selected' : ''}} value="Tidak Sekolah">Tidak Sekolah</option>
                      <option {{$pendidikan == 'SD' ? 'selected' : ''}} value="SD">SD</option>
                      <option {{$pendidikan == 'SMP' ? 'selected' : ''}} value="SMP">SMP</option>
                      <option {{$pendidikan == 'SMA' ? 'selected' : ''}} value="SMA">SMA</option>
                      <option {{$pendidikan == 'Akademi' ? 'selected' : ''}} value="Akademi">Akademi</option>
                      <option {{$pendidikan == 'Universitas' ? 'selected' : ''}} value="Universitas">Universitas</option>
                    </select>
                  </div>
                  <label class="control-label col-lg-2" for="inputSuccess">Pekerjaan</label>
                  <div class="col-lg-3">
                    <select disabled class="form-control m-bot15" name="pekerjaan">
                      <option {{$pekerjaan == 'Tidak Kerja' ? 'selected' : ''}} value="Tidak Kerja">Tidak Kerja</option>
                      <option {{$pekerjaan == 'Buruh' ? 'selected' : ''}} value="Buruh">Buruh</option>
                      <option {{$pekerjaan == 'Tani' ? 'selected' : ''}} value="Tani">Tani</option>
                      <option {{$pekerjaan == 'Swasta/Wiraswasta' ? 'selected' : ''}} value="Swasta/Wiraswasta">Swasta/Wiraswasta</option>
                      <option {{$pekerjaan == 'PNS' ? 'selected' : ''}} value="PNS">PNS</option>
                      <option {{$pekerjaan == 'TNI/POLRI' ? 'selected' : ''}} value="TNI/POLRI">TNI/POLRI</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Bahasa Sehari-Hari</label>
                  <div class="col-lg-5">
                    <select disabled class="form-control m-bot15" name="bahasa">
                      <option {{$bahasa == 'Indonesia' ? 'selected' : ''}} value="Indonesia">Indonesia</option>
                      <option {{$bahasa == 'Melayu' ? 'selected' : ''}} value="Melayu">Melayu</option>
                      <option {{$bahasa == 'Jawa' ? 'selected' : ''}} value="Jawa">Jawa</option>
                      <option {{$bahasa == 'Minang' ? 'selected' : ''}} value="Minang">Minang</option>
                      <option {{$bahasa == 'Batak' ? 'selected' : ''}} value="Batak">Batak</option>
                      <option {{$bahasa == 'Lainnya' ? 'selected' : ''}} value="Lainnya">Lainnya</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ayah</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="nama_ayah" value="{{$nama_ayah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ibu</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="nama_ibu" value="{{$nama_ibu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Budaya/Suku</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="budaya" value="{{$budaya}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-6">
                    <input type="text" disabled class="form-control" name="alamat" value="{{$alamat}}">
                  </div>
                  <label class="col-sm-1 control-label">RT</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="rt" value="{{$rt}}">
                  </div>
                  <label class="col-sm-1 control-label">RW</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="rw" value="{{$rw}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No.Telp</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="no_telp" value="{{$no_telp}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perubahan Alamat</label>
                  <div class="col-sm-6">
                    <input type="text" disabled class="form-control" name="perubahan_alamat" value="{{$perubahan_alamat}}">
                  </div>
                  <label class="col-sm-1 control-label">RT</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="perubahan_rt" value="{{$perubahan_rt}}">
                  </div>
                  <label class="col-sm-1 control-label">RW</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="perubahan_rw" value="{{$perubahan_rw}}">
                  </div>
                </div>
              </div>
            </section>
            <section class="panel" id="dynamic_field">
              <header class="panel-heading">
                Penanggung Jawab
              </header>
              @if(count($pj) > 0)
                @foreach($pj as $key => $value)
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" disabled class="form-control" name="nama_pj[]" required value="{{$value['nama_pj']}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" disabled class="form-control" name="alamat_pj[]" required value="{{$value['alamat_pj']}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hubungan</label>
                    <div class="col-sm-10">
                      <input type="text" disabled class="form-control" name="hubungan_pj[]" required value="{{$value['hubungan_pj']}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Telp</label>
                    <div class="col-sm-10">
                      <input type="text" disabled class="form-control" name="no_telp_pj[]" required value="{{$value['no_telp_pj']}}">
                    </div>
                  </div>
                </div>
                @endforeach
              @else
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" disabled class="form-control" name="nama_pj[]" required value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" disabled class="form-control" name="alamat_pj[]" required value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hubungan</label>
                    <div class="col-sm-10">
                      <input type="text" disabled class="form-control" name="hubungan_pj[]" required value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Telp</label>
                    <div class="col-sm-10">
                      <input type="text" disabled class="form-control" name="no_telp_pj[]" required value="">
                    </div>
                  </div>
                </div>
              @endif
            </section>
          </form>


          @include('layouts.tailscript')
        </body>
        <html>