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

        <form class="form-horizontal" method="post" action="rj_asesmen_awal_tumbuh_kembang_fisioterapi">
          {{ csrf_field() }}
          <section class="panel">
            <header class="panel-heading">
              Lembar Pemeriksaan Fisioterapi
            </header>
            <div class="panel-body">
              Data-data medis rumah sakit
              <div class="form-group">
                <label class="col-sm-2 control-label">Diagnosis Medis</label>
                <div class="col-sm-8">
                  <input type="text" name="f1" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Catatan Klinis</label>
                <div class="col-sm-8">
                  <input type="text" name="f2" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Terapi Umum (General Treatment)</label>
                <div class="col-sm-8">
                  <input type="text" name="f3" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Rujukan Fisioterapi dari dokter</label>
                <div class="col-sm-8">
                  <input type="text" name="f4" class="form-control">
                </div>
              </div>

              Asesment Anamnesia - Riwayat Penyakit
              <div class="form-group">
                <label class="col-sm-2 control-label">Keluhan Utama</label>
                <div class="col-sm-8">
                  <input type="text" name="f5" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Keluhan Penyerta</label>
                <div class="col-sm-8">
                  <input type="text" name="f6" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Riwayat Penyakit Sekarang</label>
                <div class="col-sm-8">
                  <input type="text" name="f7" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Rujukan Fisioterapi dari dokter</label>
                <div class="col-sm-8">
                  <input type="text" name="f8" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Riwayat Penyakit Dahulu</label>
                <div class="col-sm-8">
                  <input type="text" name="f9" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Riwayat Pribadi</label>
                <div class="col-sm-8">
                  <input type="text" name="f10" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Riwayat Keluarga</label>
                <div class="col-sm-8">
                  <input type="text" name="f11" class="form-control">
                </div>
              </div>

              Asesment Anamnesia - Pemeriksaan Umum
              <div class="form-group">
                <label class="col-sm-2 control-label">Kesadaran</label>
                <div class="col-sm-8">
                  <input type="text" name="f12" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Tekanan Darah</label>
                <div class="col-sm-8">
                  <input type="text" name="f13" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Denyut Nadi</label>
                <div class="col-sm-8">
                  <input type="text" name="f14" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Pernafasan</label>
                <div class="col-sm-8">
                  <input type="text" name="f15" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Temperatur</label>
                <div class="col-sm-8">
                  <input type="text" name="f16" class="form-control">
                </div>
              </div>

              Inspeksi
              <div class="form-group">
                <label class="col-sm-2 control-label">Inspeksi Umum</label>
                <div class="col-sm-8">
                  <input type="text" name="f17" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Inspeksi Khusus</label>
                <div class="col-sm-8">
                  <input type="text" name="f18" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Pemeriksaan Fungsi Gerak Dasar </label>
                <div class="col-sm-8">
                  <textarea class="form-control" rows="6" style="resize: vertical;" name="f19"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Tes Khusus </label>
                <div class="col-sm-8">
                  <textarea class="form-control" rows="6" style="resize: vertical;" name="f20"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Informasi Lain </label>
                <div class="col-sm-8">
                  <textarea class="form-control" rows="6" style="resize: vertical;" name="f21"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Pengukuran</label>
                <div class="col-sm-8">
                  <textarea class="form-control" rows="6" style="resize: vertical;" name="f22"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Problem Fisioterapi </label>
                <div class="col-sm-8">
                  <textarea class="form-control" rows="6" style="resize: vertical;" name="f23"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Diagnosis Fisioterapi</label>
                <div class="col-sm-8">
                  <textarea class="form-control" rows="6" style="resize: vertical;" name="f24"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Perencanaan Program Fisioterapi </label>
                <div class="col-sm-8">
                  <textarea class="form-control" rows="6" style="resize: vertical;" name="f25"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Intervensi</label>
                <div class="col-sm-8">
                  <textarea class="form-control" rows="6" style="resize: vertical;" name="f26"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Evaluasi</label>
                <div class="col-sm-8">
                  <textarea class="form-control" rows="6" style="resize: vertical;" name="f27"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-8">
                  <textarea class="form-control" rows="6" style="resize: vertical;" name="f28"></textarea>
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