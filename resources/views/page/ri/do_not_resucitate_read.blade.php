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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> SURAT PERNYATAAN JANGAN DILAKUKAN RESUSITASI (DO NOT RESUCITATE)</h3>
      </div>
    </div>
    @include('layouts.bio')

    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Dokumen Surat Pernyataan Jangan Dilakukan Resusitasi (Do Not Resucitate)
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
                <td>Surat Pernyataan Jangan Dilakukan Resusitasi (Do Not Resucitate)</td>
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
        <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_do_not_resucitate">
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
                  <input type="text" class="form-control" name="nama" disabled="" value="{{$nama}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="alamat" disabled="" value="{{$alamat}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Agama</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="agama" disabled="" value="{{$agama}}">
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
            </header>
            <div class="panel-body">
              <div class="form-group">                    
                <div class="col-sm-12">
                  Dengan ini saya menyatakan bahwa saya membuat keputusan dan menyetujui perintah do not resucitate (jangan di resusitasi) Saya menyatakan bahwa jika jantung saya berhenti berdetak atau jika saya berhenti bernapas, tidak ada prosedur medis untuk mengembalikan bernapas atau berfungsi kembali jantung yang dilakukan oleh staf Rumah Sakit, termasuk layanan medis darurat.
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  Saya memahami bahwa keputusan ini tidak akan mencegah saya menerima pelayanan kesehatan lainnya seperti pemberian maneuver Heimlich atau pemberian oksigen dan langkah-langkah untuk meningkatkan kenyamanan lainnya.
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  Saya memberikan izin agar informasi ini diberikan kepada seluruh staf rumah sakit,
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  Saya memahami bahwa saya dapat mencabut pernyataan di setiap saat.
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
                <label class="col-sm-2 control-label">Yang Menyatakan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="yang_menyatakan" disabled="" value="{{$yang_menyatakan}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Saksi Keluarga</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="saksi_keluarga" disabled="" value="{{$saksi_keluarga}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Saksi Pemberi Asuhan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="saksi_pemberi_asuhan" disabled="" value="{{$saksi_pemberi_asuhan}}">
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