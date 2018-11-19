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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> SURAT PERNYATAAN PULANG PAKSA</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Surat Pernyataan Pulang Paksa
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
                  <td>Surat Pernyataan Pulang Paksa</td>
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
          <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_pulang_paksa_edit">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Pemohon
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <div class="col-sm-8">
                    Yang bertanda tangan dibawah ini, saya
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama" value="{{$nama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="umur" value="{{$umur}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="pekerjaan" value="{{$pekerjaan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hubungan Keluarga</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="hubungan_keluarga" value="{{$hubungan_keluarga}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat" value="{{$alamat}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Pasien
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <div class="col-sm-8">
                    Dari seorang pasien
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_pasien" value="{{$nama_pasien}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="umur_pasien" value="{{$umur_pasien}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat_pasien" value="{{$alamat_pasien}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <div class="col-sm-8">
                    Dengan ini menyatakan telah mengambil kembali dengan paksa pasien tersebut di atas pada tanggal:
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pengambilan" value="{{$tanggal_pengambilan}}">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    Meskipun Dokter telah menyatakan bahwa pasien tersebut belum diizinkan pulang.
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    Dengan ini menyatakan bahwa kami menanggung segala akibat dari pulang paksa tersebut di atas. Demikian surat pernyataan ini kami buat dengan penuh kesadaran dan rasa tanggung jawab. 
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Tanda Tangan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal" value="{{$tanggal}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Yang Menyatakan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="yang_menyatakan" value="{{$yang_menyatakan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Saksi Keluarga</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="saksi_keluarga" value="{{$saksi_keluarga}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Saksi Pemberi Asuhan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="saksi_pemberi_asuhan" value="{{$saksi_pemberi_asuhan}}">
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