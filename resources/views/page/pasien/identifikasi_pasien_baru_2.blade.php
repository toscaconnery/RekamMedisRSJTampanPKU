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
        <h1>No. RM : {{str_pad($no_rm, 6, '0', STR_PAD_LEFT)}}</h1>
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
                  <td>{{date('j F Y', strtotime($tanggal_pengisian))}}</td>
                  <td>{{$nama_pengisi}}</td>
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
          <form class="form-horizontal " method="post" action="identifikasi_pasien_baru_final">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Status
              </header>
              <div class="panel-body">
                <input type="hidden" name="no_rm" value="{{$no_rm}}" required="">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pernikahan</label>
                  <div class="col-lg-3">
                    <select class="form-control m-bot15" name="pernikahan" required="">
                      <option value="Tidak Kawin">Tidak Kawin</option>
                      <option value="Kawin">Kawin</option>
                      <option value="Cerai Hidup">Cerai Hidup</option>
                      <option value="Cerai Mati">Cerai Mati</option>
                    </select>
                  </div>

                  <label class="control-label col-lg-2" for="inputSuccess">Agama</label>
                  <div class="col-lg-3">
                    <select class="form-control m-bot15" name="agama" required="">
                      <option value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Katholik">Katholik</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Budha">Budha</option>
                      <option value="Konghucu">Konghucu</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pendidikan</label>
                  <div class="col-lg-3">
                    <select class="form-control m-bot15" name="pendidikan" required="">
                      <option value="Tidak Sekolah">Tidak Sekolah</option>
                      <option value="SD">SD</option>
                      <option value="SMP">SMP</option>
                      <option value="SMA">SMA</option>
                      <option value="Akademi">Akademi</option>
                      <option value="Universitas">Universitas</option>
                    </select>
                  </div>
                  <label class="control-label col-lg-2" for="inputSuccess">Pekerjaan</label>
                  <div class="col-lg-3">
                    <select class="form-control m-bot15" name="pekerjaan" required="">
                      <option value="Tidak Kerja">Tidak Kerja</option>
                      <option value="Buruh">Buruh</option>
                      <option value="Tani">Tani</option>
                      <option value="Swasta/Wiraswasta">Swasta/Wiraswasta</option>
                      <option value="PNS">PNS</option>
                      <option value="TNI/POLRI">TNI/POLRI</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Bahasa Sehari-Hari</label>
                  <div class="col-lg-5">
                    <select class="form-control m-bot15" name="bahasa" required="">
                      <option value="Indonesia">Indonesia</option>
                      <option value="Melayu">Melayu</option>
                      <option value="Jawa">Jawa</option>
                      <option value="Minang">Minang</option>
                      <option value="Batak">Batak</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ayah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_ayah" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ibu</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_ibu" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Budaya/Suku</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="budaya" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="alamat" required="">
                  </div>
                  <label class="col-sm-1 control-label">RT</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control rtrwnumber" maxlength="3" min="1" max="999" name="rt" required="">
                  </div>
                  <label class="col-sm-1 control-label">RW</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control rtrwnumber" maxlength="3" min="1" max="999" name="rw" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No.Telp</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_telp" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perubahan Alamat</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="perubahan_alamat">
                  </div>
                  <label class="col-sm-1 control-label">RT</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control rtrwnumber" maxlength="3" min="1" max="999" name="perubahan_rt">
                  </div>
                  <label class="col-sm-1 control-label">RW</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control rtrwnumber" maxlength="3" min="1" max="999" name="perubahan_rw">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel" id="dynamic_field">
              <header class="panel-heading">
                Penanggung Jawab
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_pj[]" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat_pj[]" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hubungan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="hubungan_pj[]" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Telp</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_telp_pj[]" required>
                  </div>
                </div>
              </div>
            </section>

            <div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-primary" name="add" id="add">Tambah PJ</button>
            </div>

          </form>


          @include('layouts.tailscript')
          <script>
            $(document).ready( function() {
              $('#add').click( function() {
                $('#dynamic_field').append('<div class="panel-body"><div class="form-group"><label class="col-sm-2 control-label">Nama</label><div class="col-sm-10"><input type="text" class="form-control" name="nama_pj[]"></div></div><div class="form-group"><label class="col-sm-2 control-label">Alamat</label><div class="col-sm-10"><input type="text" class="form-control" name="alamat_pj[]"></div></div><div class="form-group"><label class="col-sm-2 control-label">Hubungan</label><div class="col-sm-10"><input type="text" class="form-control" name="hubungan_pj[]"></div></div><div class="form-group"><label class="col-sm-2 control-label">Telp</label><div class="col-sm-10"><input type="text" class="form-control" name="no_telp_pj[]"></div></div></div>');
              });
            });
          </script>

          <script type="text/javascript">
            $(document).ready( function() {
              $('.rtrwnumber').on('keyup', function (event) {
                var newValue = this.value.replace(/[^0-9]/gi, '');
                if (this.value != newValue) {
                  this.value = newValue;
                }
              })
            });
          </script>

        </body>


        <html>