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
                  <th><i class="icon_document"></i> Dokumen</th>
                </tr>
                <tr>
                  <td>Serah Terima Pasien Pulang</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
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
          <form class="form-horizontal form-validate" method="post" action="ri_serah_terima_edit">
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
                    <input type="text" class="form-control" name="nama" required value="{{$nama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="umur" required value="{{$umur}}">
                  </div>
                  <div class="col-sm-1">
                    <select class="form-control" name="jenis_kelamin" required>
                      <option value="L" {{$jenis_kelamin == 'L' ? 'selected' : ''}}>L</option>
                      <option value="P" {{$jenis_kelamin == 'P' ? 'selected' : ''}}>P</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" style="resize: none" rows="2" name="alamat" required>{{$alamat}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hubungan dengan pasien</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="hubungan_dengan_pasien" required value="{{$hubungan_dengan_pasien}}">
                  </div>
                </div>
                <h4>Dengan ini menyatakan menjemput pasien :</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="nama_pasien" required value="{{$nama_pasien}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="umur_pasien" required value="{{$umur_pasien}}">
                  </div>
                  <div class="col-sm-1">
                    <select class="form-control" name="jenis_kelamin_pasien" required>
                      <option selected disabled hidden value="">L / P</option>
                      <option value="L" {{$jenis_kelamin_pasien == 'L' ? 'selected' : ''}}>L</option>
                      <option value="P" {{$jenis_kelamin_pasien == 'P' ? 'selected' : ''}}>P</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. RM</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="no_rm" required value="{{$no_rm}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" style="resize: none" rows="2" name="alamat_pasien" required>{{$alamat_pasien}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam dijemput</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam_dijemput" required value="{{$jam_dijemput}}">
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