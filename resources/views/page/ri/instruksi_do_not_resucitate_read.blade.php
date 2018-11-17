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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> INTRUKSI JANGAN DILAKUKAN RESUSITASI (DO NOT RESUCITATE)</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Intruksi Jangan Dilakukan Resusitasi (Do Not Resucitate)
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
                  <td>Intruksi Jangan Dilakukan Resusitasi (Do Not Resucitate)</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_permintaan_notresucitate_pdf">PDF</a>
                      <a class="btn btn-success" href="#">EDIT</a>
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
          <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_instruksi_do_not_resucitate">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Formulir
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <div class="col-sm-12">
                    Formulir ini adalah perintah dokter penanggung jawab pelayanan kepada seluruh staf klinis rumah sakit, agar tidak dilakukan resusitasi pada pasien ini bila terjadi henti jantung (bila tak ada denyut nadi) dan henti nafas (tak ada pernafasan spontan).
                    Formulir ini juga memberikan perintah kepada staf medis untuk tetap melakukan intervensi atau pengobatan, atau tata laksana lainnya sebelum terjadinya jenti jantung atau henti nafas.
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Pasien</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_pasien" disabled="" value="{{$nama_pasien}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-2">
                    <input type="date" class="form-control" name="tanggal_lahir" disabled="" value="{{$tanggal_lahir}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat" disabled="" value="{{$alamat}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Perintah/Pernyataan dokter penanggung jawab pelayanan
              </header>
              <div class="panel-body">
                <table>
                  <tr>
                    <td class="contain" colspan="2">
                      Saya dokter yang bertanda tangan dibawah ini menginstruksikan kepada seluruh staf medis dan staf klinis lainnya untuk melakukan hal-hal tertulis di bawah ini :
                    </td>
                  </tr>
                  <tr>
                    <td class="number">1.</td>
                    <td class="contain">
                      Usaha komprehensif untuk mencegah henti jantung atau henti nafas tanpa melakukan intubasi. <b>DO NOT RESUCITATE TIDAK DILAKUKAN RESUSITASI JANTUNG PARU (RJP)</b>
                    </td>
                  </tr>
                  <tr>
                    <td class="number" style="vertical-align:top">2.</td>
                    <td class="contain">
                      Usaha suportif sebelum terjadi henti nafas atau henti jantung yang meliputi pembukaan jalan nafass non invasisve, mengontrol pendarahan, memposisikan pasien dengan nyaman, pemberian obat-obatan anti nyeri. <b>TIDAK MELAKUKAN RJP (RESUSITASI JANTUNG PARU) </b> bila henti nafas atau henti jantung terjadi.
                    </td>
                  </tr>

                  <tr>
                    <td class="contain" colspan="2">
                      <br>
                    </td>
                  </tr>

                  <tr>
                    <td class="contain" colspan="2">
                      Saya dokter yang bertanda tangan di bawah ini menyatakan bahwa keputusan DNR di atas diambil setelah pasien diberikan penjelasan dan informed consent diperoleh dari salah satu :
                    </td>
                  </tr>
                  <tr>
                    <td class="number">1.</td>
                    <td class="contain">
                      Pasien
                    </td>
                  </tr>
                  <tr>
                    <td class="number">2.</td>
                    <td class="contain">
                      Tenaga kesehatan yang ditunjuk pasien 
                    </td>
                  </tr>
                  <tr>
                    <td class="number">3.</td>
                    <td class="contain">
                      Wali yang sah atas pasien (termasuk yang ditunjuk oleh pengadilan)
                    </td>
                  </tr>
                  <tr>
                    <td class="number">4.</td>
                    <td class="contain">
                      Anggota keluarga pasien
                    </td>
                  </tr>
                  <tr>
                    <tr>
                      <td class="contain" colspan="2">
                        <br>
                      </td>
                    </tr>

                    <td class="contain" colspan="2">
                      Jika yang di atas tidak dimungkinkan maka dokter yang bertanda tangan dibawah ini memberikan perintah DNR berdasarkan pada:
                    </td>
                  </tr>
                  <tr>
                    <td class="number">1.</td>
                    <td class="contain">
                      Instruksi pasien sebelumnya atau
                    </td>
                  </tr>
                  <tr>
                    <td class="number">2.</td>
                    <td class="contain">
                      Keputusan dua orang dokter yang meyatakan bahwa Resusitasi Jantung Paru (RJP) akan mendatangkan hasil yang tidak efektif 
                    </td>
                  </tr>
                </table>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Tanda Tangan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dokter</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dokter" disabled="" value="{{$dokter}}">
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