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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN SUICIDE DAN KEKERASAN FISIK</h3>
        </div>
      </div>
      @include('layouts.bio')
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Asesmen Suicide dan Kekerasan Fisik IGD
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
      <form class="form-horizontal " method="post" action="igd_suicide_fisik_edit">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6">
                <section class="panel">
                  <header class="panel-heading">
                    SUICIDALITY <span style="font-style: italic;">static (historical) factors</span>
                  </header>
                  <div class="panel-body">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Tinggal hidup sendiri</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a1" value="1" {{$a1 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a1" value="2" {{$a1 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a1" value="3" {{$a1 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Riwayat upaya serius suicide</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a2" value="1" {{$a2 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a2" value="2" {{$a2 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a2" value="3" {{$a2 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Riwayat keluarga suicide</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a3" value="1" {{$a3 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a3" value="2" {{$a3 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a3" value="3" {{$a3 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Adanya diagnosa gangguan jiwa</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a4" value="1" {{$a4 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a4" value="2" {{$a4 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a4" value="3" {{$a4 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Penyakit/disabilitas berat</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a5" value="1" {{$a5 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a5" value="2" {{$a5 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a5" value="3" {{$a5 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Bepisah/Duda/Cerai</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a6" value="1" {{$a6 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a6" value="2" {{$a6 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a6" value="3" {{$a6 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Kehilangan Pekerjaan/Pensiun/Tidak punya kerja</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a7" value="1" {{$a7 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a7" value="2" {{$a7 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="a7" value="3" {{$a7 == 3 ? 'checked' : ''}}>
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
                    <span style="font-style: italic;">
                      Dynamic (Current) risk factor
                    </span>
                  </header>
                  <div class="panel-body">
                    <!--date picker start-->

                    <div class="form-group">
                      <label class="control-label col-sm-4">Mengungkapkan ide bunuh diri</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b1" value="1" {{$b1 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b1" value="2" {{$b1 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b1" value="3" {{$b1 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Memiliki rencana/maksud suicide</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b2" value="1" {{$b2 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b2" value="2" {{$b2 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b2" value="3" {{$b2 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Mengungkapkan stress yang berat</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b3" value="1" {{$b3 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b3" value="2" {{$b3 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b3" value="3" {{$b3 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Keputusasaan</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b4" value="1" {{$b4 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b4" value="2" {{$b4 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b4" value="3" {{$b4 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Peristiwa / kejadian signifikan akhir-akhir ini</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b5" value="1" {{$b5 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b5" value="2" {{$b5 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b5" value="3" {{$b5 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Berkurangnya/Kehilangan untuk kontrol diri</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b6" value="1" {{$b6 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b6" value="2" {{$b6 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b6" value="3" {{$b6 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Penggunaan NAPZA</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b7" value="1" {{$b7 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b7" value="2" {{$b7 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="b7" value="3" {{$b7 == 3 ? 'checked' : ''}}>
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
                PROTECTIVE FACTORS dan RESIKO LAINNYA
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-1 control-label"> Deskripsikan: </label>
                  <div class="col-sm-11">
                    <textarea class="form-control" rows="6" style="resize: none;" name="suicide_protective_factor" readonly>{{$suicide_protective_factor}}></textarea>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label"> LEVEL OF SUICIDE RISK RISK <span style="font-style: italic;">(Total Score)</span></label>
                  <div class="col-sm-1">
                    <input type="text" style="width: 3em;" class="form-control" readonly>
                  </div>
                  <div class="checkbox-inline">
                    <label style="margin-right: 4em;">
                      <input type="checkbox" name="suicide_level_1" id="suicide_level">
                      LOW ( &#x3c;7 )
                    </label>
                    <label style="margin-right: 4em;">
                      <input type="checkbox" name="suicide_level_2" id="suicide_level">
                      MODERATE ( 7-14 )
                    </label>
                    <label style="margin-right: 4em;">
                      <input type="checkbox" name="suicide_level_3" id="suicide_level">
                      HIGH ( &#x3e;14 )
                    </label>
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
                    AGGRESSION/VIOLENCE <span style="font-style: italic;"> Static (historical) factors</span>
                  </header>
                  <div class="panel-body">
                    <!--date picker start-->

                    <div class="form-group">
                      <label class="control-label col-sm-4">Insiden kekerasan baru-baru ini</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c1" value="1" {{$c1 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c1" value="2" {{$c1 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c1" value="3" {{$c1 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Riwayat penggunaan senjata</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c2" value="1" {{$c2 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c2" value="2" {{$c2 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c2" value="3" {{$c2 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Laki - laki</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c3" value="1" {{$c3 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c3" value="2" {{$c3 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c3" value="3" {{$c3 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Usia dibawah 35 tahun</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c4" value="1" {{$c4 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c4" value="2" {{$c4 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c4" value="3" {{$c4 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Riwayat Kriminal</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c5" value="1" {{$c5 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c5" value="2" {{$c5 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c5" value="3" {{$c5 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Riwayat melakukan tindakan berbahaya atau ide kekerasan</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c6" value="1" {{$c6 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c6" value="2" {{$c6 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c6" value="3" {{$c6 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Riwayat kekerasan masa kanak-kanak</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c7" value="1" {{$c7 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c7" value="2" {{$c7 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c7" value="3" {{$c7 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Kurangnya peran dalam hidup (pekerjaan,hubungan)</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c8" value="1" {{$c8 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c8" value="2" {{$c8 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c8" value="3" {{$c8 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Riwayat penggunaan NAPZA</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c9" value="1" {{$c9 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c9" value="2" {{$c9 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="c9" value="3" {{$c9 == 3 ? 'checked' : ''}}>
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
                    <span style="font-style: italic;">
                      Dynamic (Current) risk factor
                    </span>
                  </header>
                  <div class="panel-body">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Mengekspresikan ide untuk melukai orang lain</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d1" value="1" {{$d1 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d1" value="2" {{$d1 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d1" value="3" {{$d1 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Akses untuk melakukan tindakan kekerasan</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d2" value="1" {{$d2 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d2" value="2" {{$d2 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d2" value="3" {{$d2 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Ide paranoid atau lainnya</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d3" value="1" {{$d3 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d3" value="2" {{$d3 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d3" value="3" {{$d3 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Perintah halusinasi untuk tindakan kekerasan</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d4" value="1" {{$d4 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d4" value="2" {{$d4 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d4" value="3" {{$d4 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Kemarahan, frustasi, atau agitasi</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d5" value="1" {{$d5 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d5" value="2" {{$d5 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d5" value="3" {{$d5 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Kesenangan untuk ide/tindakan kekerasan</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d6" value="1" {{$d6 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d6" value="2" {{$d6 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d6" value="3" {{$d6 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Perilaku seksual yang tidak wajar</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d7" value="1" {{$d7 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d7" value="2" {{$d7 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d7" value="3" {{$d7 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Berkurangnya/kehilangan untuk kontrol diri</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d8" value="1" {{$d8 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d8" value="2" {{$d8 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d8" value="3" {{$d8 == 3 ? 'checked' : ''}}>
                            Not Known
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4">Penggunaan NAPZA</label>
                      <div class="col-sm-6">
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d9" value="1" {{$d9 == 1 ? 'checked' : ''}}>
                            Yes
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d9" value="2" {{$d9 == 2 ? 'checked' : ''}}>
                            No
                          </label>
                        </div>
                        <div class="radio-inline">
                          <label style="margin-right: 1em;">
                            <input type="radio" name="d9" value="3" {{$d9 == 3 ? 'checked' : ''}}>
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
                PROTECTIVE FACTORS
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-1 control-label"> Deskripsikan: </label>
                  <div class="col-sm-11">
                    <textarea class="form-control" rows="6" style="resize: none;" name="violence_protective_factor" readonly>{{$violence_protective_factor}}></textarea>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                OTHER RISK IDENTIFIED (AND RISK FACTORS)
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-1 control-label"> Deskripsikan: </label>
                  <div class="col-sm-11">
                    <textarea class="form-control" rows="6" style="resize: none;" name="other_risk" readonly>{{$other_risk}}></textarea>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label"> LEVEL OF VIOLENCE RISK <span style="font-style: italic;">(Total Score)</span></label>
                  <div class="col-sm-1">
                    <input type="text" style="width: 3em;" class="form-control" readonly>
                  </div>
                  <div class="checkbox-inline">
                    <label style="margin-right: 4em;">
                      <input type="checkbox" name="violence_level_1" id="violence_level">
                      LOW ( &#x3c;7 )
                    </label>
                    <label style="margin-right: 4em;">
                      <input type="checkbox" name="violence_level_2" id="violence_level">
                      MODERATE ( 7-14 )
                    </label>
                    <label style="margin-right: 4em;">
                      <input type="checkbox" name="violence_level_3" id="violence_level">
                      HIGH ( &#x3e;14 )
                    </label>
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
    </section>
  </section>

  @include('layouts.tailscript')

</body>
<html>