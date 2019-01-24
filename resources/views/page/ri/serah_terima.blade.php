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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>FORMULIR SERAH TERIMA PASIEN PULANG</h3>
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
                  <td>Serah Terima Pasien Pulang</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-default" href="{{url('')}}/ri_serah_terima">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_serah_terima_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_serah_terima_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_serah_terima_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal form-validate" method="post" action="ri_serah_terima">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Serah Terima
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h4>Yang bertanda tangan dibawah ini, saya :</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="nama" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="umur" required>
                  </div>
                  <div class="col-sm-1">
                    <select class="form-control" name="jenis_kelamin" required>
                      <option selected disabled hidden value="">L / P</option>
                      <option value="L">L</option>
                      <option value="P">P</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" style="resize: none" rows="2" name="alamat" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hubungan dengan pasien</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="hubungan_dengan_pasien" required>
                  </div>
                </div>
                <h4>Dengan ini menyatakan menjemput pasien :</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="nama_pasien" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="umur_pasien" required>
                  </div>
                  <div class="col-sm-1">
                    <select class="form-control" name="jenis_kelamin_pasien" required>
                      <option selected disabled hidden value="">L / P</option>
                      <option value="L">L</option>
                      <option value="P">P</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. RM</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="no_rm" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" style="resize: none" rows="2" name="alamat_pasien" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam dijemput</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam_dijemput" required>
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