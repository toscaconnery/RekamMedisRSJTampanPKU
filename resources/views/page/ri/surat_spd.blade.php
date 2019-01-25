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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> SURAT PENGANTAR DIRAWAT (SPD)</h3>
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
                  <td>Surat Pengantar Dirawat</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_surat_spd">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_surat_spd_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_surat_spd_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_spd_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_surat_spd">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pendidikan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="pendidikan" value="{{Session::get('pendidikan')}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="pekerjaan" value="{{Session::get('pekerjaan')}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_lahir" value="{{Session::get('tanggal_lahir')}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk" value="1" {{Session::get('jenis_kelamin') == 'L' ? 'checked' : ''}}>
                        Laki-laki
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk" value="0" {{Session::get('jenis_kelamin') == 'P' ? 'checked' : ''}}>
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat" value="{{Session::get('alamat')}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Penanggung Jawab
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_pj">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat_pj">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No.Telp/HP</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_telp_pj">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_telp_pj2">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ruang/Kelas</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="ruang">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Cara Bayar</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="cara_bayar">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Sebab Utama di Rawat
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebab Utama Dirawat</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="5" style="resize: none;" name="sebab_utama_dirawat"></textarea>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Diagnosa
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosa</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="5" style="resize: none;" name="diagnosa"></textarea>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">GAF (Global Asessment of Function)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="gaf">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">PANSS - EC</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="panss_ec">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Terapi yang Dianjurkan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Terapi</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="5" style="resize: none;" name="terapi"></textarea>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Telah Dicatat Masuk RS.Jiwa Tampan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_masuk_rs">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ruang</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="ruang_masuk_rs">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kelas</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="kelas_masuk_rs">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dokter IGD/Klinik</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dokter_igd_klinik">
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
  </body>
  <html>