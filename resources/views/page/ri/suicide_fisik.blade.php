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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN SUICIDE DAN KEKERASAN FISIK RAWAT INAP</h3>
      </div>
    </div>
    @include('layouts.bio')

    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Asesmen Suicide dan Kekerasan Fisik Rawat Inap
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
                <td>Suicide dan Kekerasan Fisik</td>
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
    <form class="form-horizontal " method="post" action="ri_suicide_fisik">
      {{ csrf_field() }}
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <section class="panel">
                <header class="panel-heading">
                  SUICIDALITY static (historical) factors
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Tinggal hidup sendiri</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s1" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s1" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s1" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Riwayat upaya serius suicide</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s2" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s2" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s2" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Riwayat keluarga suicide</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s3" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s3" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s3" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Adanya diagnosa gangguan jiwa</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s4" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s4" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s4" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Penyakit/disabilitas berat</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s5" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s5" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s5" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Bepisah/Duda/Cerai</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s6" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s6" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s6" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Kehilangan Pekerjaan/Pensiun/Tidak punya kerja</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s7" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s7" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s7" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="col-lg-6">
              <section class="panel">
                <header class="panel-heading">
                  Dynamic (Current) risk factor
                </header>
                <div class="panel-body">
                  <!--date picker start-->
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Mengungkapkan ide bunuh diri</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s8" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s8" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s8" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Memiliki rencana/maksud suicide</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s9" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s9" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s9" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Mengungkapkan stress yang berat</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s10" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s10" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s10" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Keputusasaan</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s11" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s11" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s11" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Peristiwa / kejadian signifikan akhir-akhir ini</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s12" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s12" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s12" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Berkurangnya/Kehilangan untuk kontrol diri</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s13" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s13" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s13" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Penggunaan NAPZA</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s14" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s14" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s14" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
          
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label"> PROTECTIVE FACTORS dan RESIKO LAINNYA Describe</label>
                <div class="col-sm-9">
                  <textarea class="form-control" style="resize: none;" rows="5" name="p1"></textarea>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <section class="panel">
                <header class="panel-heading">
                  AGGRESSION/VIOLENCE Static (historical) factors
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Insiden kekerasan baru-baru ini</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s15" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s15" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s15" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Riwayat penggunaan senjata</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s16" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s16" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s16" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Laki - laki</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s17" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s17" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s17" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Usia dibawah 35 tahun</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s18" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s18" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s18" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Riwayat Kriminal</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s19" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s19" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s19" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Riwayat melakukan tindakan berbahaya atau ide kekerasan</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s20" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s20" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s20" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Riwayat kekerasan masa kanak-kanak</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s21" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s21" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s21" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Kurangnya peran dalam hidup (pekerjaan,hubungan)</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s22" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s22" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s22" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Riwayat penggunaan NAPZA</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s23" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s23" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s23" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="col-lg-6">
              <section class="panel">
                <header class="panel-heading">
                  Dynamic (Current) risk factor
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Mengekspresikan ide untuk melukai orang lain</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s24" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s24" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s24" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Akses untuk melakukan tindakan kekerasan</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s25" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s25" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s25" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Ide paranoid atau lainnya</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s26" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s26" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s26" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Perintah halusinasi untuk tindakan kekerasan</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s27" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s27" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s27" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Kemarahan, frustasi, atau agitasi</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s28" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s28" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s28" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Kesenangan untuk ide/tindakan kekerasan</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s29" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s29" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s29" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Perilaku seksual yang tidak wajar</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s30" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s30" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s30" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Berkurangnya/kehilangan untuk kontrol diri</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s31" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s31" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s31" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" style="margin-right: 2em;">Penggunaan NAPZA</label>
                    <div class="col-sm-6">
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s32" value="1">
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s32" value="2">
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s32" value="3">
                          Not Known
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label"> PROTECTIVE FACTORS dan RESIKO LAINNYA (Describe)</label>
                <div class="col-sm-9">
                  <textarea class="form-control" style="resize: none;" rows="5" name="p2"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"> OTHER RISK IDENTIFIED (AND RISK FACTORS)</label>
                <div class="col-sm-9">
                  <textarea class="form-control" style="resize: none;" rows="5" name="p3"></textarea>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

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