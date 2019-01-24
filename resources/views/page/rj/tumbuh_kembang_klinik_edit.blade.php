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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL PASIEN TUMBUH KEMBANG DAN EDUKASI TERPADU</h3>
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
                  <td>Dokter</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_dokter">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_dokter_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_dokter_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_tumbuhkembang_pdf">Cetak</a>
                  </td>
                </tr>
                <tr>
                  <td>Psikolog</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_psikolog">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_psikolog_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_psikolog_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_tumbuhkembang_pdf">Cetak</a>
                  </td>
                </tr>
                <tr>
                  <td>Psikiatri</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_psikiatri">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_psikiatri_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_psikiatri_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_tumbuhkembang_pdf">Cetak</a>
                  </td>
                </tr>
                <tr>
                  <td>Klinik</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_klinik">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_klinik_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_klinik_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_tumbuhkembang_pdf">Cetak</a>
                  </td>
                </tr>
                <tr>
                  <td>Fisioterapi</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_fisioterapi">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_fisioterapi_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_fisioterapi_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_tumbuhkembang_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">

        <form class="form-horizontal" method="post" action="rj_asesmen_awal_tumbuh_kembang_klinik_edit">
          {{ csrf_field() }}
          <section class="panel">
            <header class="panel-heading">
              Klinik Tumbuh – Kembang dan Edukasi Terpadu Lembar Gabungan Hasil Evaluasi Terapi
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Isian</label>
                <div class="col-sm-8">
                  <textarea class="form-control" rows="20" name="hasil">{{$hasil}}</textarea>
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