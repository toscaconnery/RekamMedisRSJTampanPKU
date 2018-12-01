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
              <header class="panel-heading">
                Dokumen Asesmen Awal Pasien Tumbuh Kembang dan Edukasi Terpadu
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
                    <td>Asesmen Awal Pasien Tumbuh Kembang dan Edukasi Terpadu</td>
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
            <section class="panel">
              <header class="panel-heading">
                Layanan Konsultasi Psikiatri Klink Tumbuh Kembang Anak dan Remaja
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat Pasien:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">ANAMNESIS </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">PEMERIKSAAN FISIK </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">PEMERIKSAAN PSIKIATRIK </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">PEMERIKSAAN PENUNJANG </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">DIAGNOSIS MEDIS (ICD – 10)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">TERAPI PSIKOFARMAKA </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <h4 style="padding-left: 1em;">TERAPI NON PSIKOFARMAKA YANG DIREKOMENDASIKAN PSIKIATER</h4>
                    <label class="col-sm-2 control-label">Terapi Prilaku</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label">Frekuensi</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label" style="text-align: left; padding-left: 0px;">x/minggu</label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sensori Integrasi  </label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label">Frekuensi</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label" style="text-align: left; padding-left: 0px;">x/minggu</label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Terapi Okupasi  </label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label">Frekuensi</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label" style="text-align: left; padding-left: 0px;">x/minggu</label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sensori Integrasi  </label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label">Frekuensi</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label" style="text-align: left; padding-left: 0px;">x/minggu</label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Terapi Wicara  </label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label">Frekuensi</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label" style="text-align: left; padding-left: 0px;">x/minggu</label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Remedical Teaching  </label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label">Frekuensi</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label" style="text-align: left; padding-left: 0px;">x/minggu</label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Play Therapy  </label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label">Frekuensi</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label" style="text-align: left; padding-left: 0px;">x/minggu</label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Story Telling  </label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label">Frekuensi</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label" style="text-align: left; padding-left: 0px;">x/minggu</label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">tanggal  </label>
                    <div class="col-sm-2">
                      <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container">
                    </div>
                  </div>

                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Klinik Tumbuh – Kembang dan Edukasi Terpadu Lembar Gabungan Hasil Evaluasi Terapi
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                   
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Isian</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Lembar Pemeriksaan Fisioterapi
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                   Data-data medis rumah sakit
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Diagnosis Medis</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Catatan Klinis</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Terapi Umum (General Treatment)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Rujukan Fisioterapi dari dokter</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  Asesment Anamnesia - Riwayat Penyakit
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Keluhan Utama</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Keluhan Penyerta</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Riwayat Penyakit Sekarang</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Rujukan Fisioterapi dari dokter</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Riwayat Penyakit Dahulu</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Riwayat Pribadi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Riwayat Keluarga</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  Asesment Anamnesia - Pemeriksaan Umum
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kesadaran</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tekanan Darah</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Denyut Nadi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pernafasan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Temperatur</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  Inspeksi
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Inspeksi Umum</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Inspeksi Khusus</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pemeriksaan Fungsi Gerak Dasar </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tes Khusus </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Informasi Lain </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pengukuran</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Problem Fisioterapi </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Diagnosis Fisioterapi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Perencanaan Program Fisioterapi </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Intervensi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Evaluasi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            </div>
          </div>
        </section>
           
  @include('layouts.tailscript')
</body>


<html>