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
                     <a class="btn btn-primary" href="{{url('')}}/ri_suicide_pdf">PDF</a>
                      <a class="btn btn-danger" href="#">EDIT</i></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </section>
      </div>
    </div>
    <form class="form-horizontal " method="post" action="ri_suicide_fisik_edit">
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
                          <input type="radio" name="s1" value="1" {{$s1 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s1" value="2" {{$s1 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s1" value="3" {{$s1 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s2" value="1" {{$s2 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s2" value="2" {{$s2 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s2" value="3" {{$s2 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s3" value="1" {{$s3 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s3" value="2" {{$s3 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s3" value="3" {{$s3 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s4" value="1" {{$s4 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s4" value="2" {{$s4 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s4" value="3" {{$s4 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s5" value="1" {{$s5 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s5" value="2" {{$s5 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s5" value="3" {{$s5 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s6" value="1" {{$s6 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s6" value="2" {{$s6 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s6" value="3" {{$s6 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s7" value="1" {{$s7 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s7" value="2" {{$s7 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s7" value="3" {{$s7 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s8" value="1" {{$s8 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s8" value="2" {{$s8 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s8" value="3" {{$s8 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s9" value="1" {{$s9 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s9" value="2" {{$s9 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s9" value="3" {{$s9 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s10" value="1" {{$s10 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s10" value="2" {{$s10 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s10" value="3" {{$s10 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s11" value="1" {{$s11 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s11" value="2" {{$s11 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s11" value="3" {{$s11 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s12" value="1" {{$s12 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s12" value="2" {{$s12 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s12" value="3" {{$s12 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s13" value="1" {{$s13 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s13" value="2" {{$s13 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s13" value="3" {{$s13 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s14" value="1" {{$s14 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s14" value="2" {{$s14 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s14" value="3" {{$s14 == 3 ? 'checked' : ''}}>
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
                  <textarea class="form-control" style="resize: none;" rows="5" name="p1">{{$p1}}</textarea>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

      {{-- <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-3 control-label"> LEVEL OF SUICIDE RISK (Total Score) : </label>
                <div class="col-sm-1">
                  <input type="text" disabled value="{{$suicide_risk_total}}" class="form-control">
                </div>
                <div class="checkbox-inline" style="padding-right: 2em;">
                  <label>
                    <input type="checkbox" disabled value="2" {{$suicide_risk_total < 7 ? 'checked' : ''}}>
                    {{"SLOW (<7)"}} 
                  </label>
                </div>
                <div class="checkbox-inline" style="padding-right: 2em;">
                  <label>
                    <input type="checkbox" disabled value="2" {{($suicide_risk_total >= 7) and ($suicide_risk_total <= 14) ? 'checked' : ''}}>
                    {{"MODERATE (7-14)"}} 
                  </label>
                </div>
                <div class="checkbox-inline" style="padding-right: 2em;">
                  <label>
                    <input type="checkbox" disabled value="2" {{$suicide_risk_total > 14 ? 'checked' : ''}}>
                    {{"HIGH (>14)"}} 
                  </label>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div> --}}

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
                          <input type="radio" name="s15" value="1" {{$s15 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s15" value="2" {{$s15 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s15" value="3" {{$s15 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s16" value="1" {{$s16 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s16" value="2" {{$s16 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s16" value="3" {{$s16 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s17" value="1" {{$s17 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s17" value="2" {{$s17 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s17" value="3" {{$s17 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s18" value="1" {{$s18 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s18" value="2" {{$s18 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s18" value="3" {{$s18 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s19" value="1" {{$s19 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s19" value="2" {{$s19 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s19" value="3" {{$s19 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s20" value="1" {{$s20 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s20" value="2" {{$s20 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s20" value="3" {{$s20 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s21" value="1" {{$s21 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s21" value="2" {{$s21 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s21" value="3" {{$s21 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s22" value="1" {{$s22 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s22" value="2" {{$s22 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s22" value="3" {{$s22 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s23" value="1" {{$s23 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s23" value="2" {{$s23 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s23" value="3" {{$s23 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s24" value="1" {{$s24 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s24" value="2" {{$s24 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s24" value="3" {{$s24 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s25" value="1" {{$s25 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s25" value="2" {{$s25 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s25" value="3" {{$s25 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s26" value="1" {{$s26 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s26" value="2" {{$s26 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s26" value="3" {{$s26 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s27" value="1" {{$s27 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s27" value="2" {{$s27 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s27" value="3" {{$s27 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s28" value="1" {{$s28 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s28" value="2" {{$s28 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s28" value="3" {{$s28 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s29" value="1" {{$s29 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s29" value="2" {{$s2 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s29" value="3" {{$s29 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s30" value="1" {{$s30 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s30" value="2" {{$s30 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s30" value="3" {{$s30 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s31" value="1" {{$s31 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s31" value="2" {{$s31 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s31" value="3" {{$s31 == 3 ? 'checked' : ''}}>
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
                          <input type="radio" name="s32" value="1" {{$s32 == 1 ? 'checked' : ''}}>
                          Yes
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s32" value="2" {{$s32 == 2 ? 'checked' : ''}}>
                          No
                        </label>
                      </div>
                      <div class="radio-inline" style="padding-right: 2em;">
                        <label>
                          <input type="radio" name="s32" value="3" {{$s32 == 3 ? 'checked' : ''}}>
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
                  <textarea class="form-control" style="resize: none;" rows="5" name="p2">{{$p2}}</textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"> OTHER RISK IDENTIFIED (AND RISK FACTORS)</label>
                <div class="col-sm-9">
                  <textarea class="form-control" style="resize: none;" rows="5" name="p3">{{$p3}}</textarea>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

      {{-- <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-3 control-label"> LEVEL OF VIOLENCE RISK (Total Score) : </label>
                <div class="col-sm-1">
                  <input type="text" disabled value="{{$violence_risk_total}}" class="form-control">
                </div>
                <div class="checkbox-inline" style="padding-right: 2em;">
                  <label>
                    <input type="checkbox" disabled value="2" {{$violence_risk_total < 7 ? 'checked' : ''}}>
                    {{"SLOW (<7)"}} 
                  </label>
                </div>
                <div class="checkbox-inline" style="padding-right: 2em;">
                  <label>
                    <input type="checkbox" disabled value="2" {{($violence_risk_total >= 7) and ($violence_risk_total <= 14) ? 'checked' : ''}}>
                    {{"MODERATE (7-14)"}} 
                  </label>
                </div>
                <div class="checkbox-inline" style="padding-right: 2em;">
                  <label>
                    <input type="checkbox" disabled value="2" {{$violence_risk_total > 14 ? 'checked' : ''}}>
                    {{"HIGH (>14)"}} 
                  </label>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div> --}}

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