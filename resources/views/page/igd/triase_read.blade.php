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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> TRIASE PASIEN</h3>
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
                  <td>Triase Pasien</td>
                  <td>{{date('j F Y', strtotime($tanggal_pengisian))}}</td>
                  <td>{{$nama_pengisi}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/igd_triase">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/igd_triase_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/igd_triase_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/igd_triase_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">

          <form class="form-horizontal ">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Triase Pasien
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal masuk IGD</label>
                  <div class="col-sm-2">
                    <input type="text" id="dp1" class="form-control required" name="tanggal_masuk" disabled="" value="{{$tanggal_masuk}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam" disabled="" value="{{$jam}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keluhan Utama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="keluhan_utama" disabled="" value="{{$keluhan_utama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">DOA</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="doa" {{$doa == True ? 'checked' : ''}}>
                        DOA
                      </label>
                    </div>                    
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Triase Pasien</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" disabled value="resusitasi" {{$jenis == 'resusitasi' ? 'checked' : ''}}>
                        RESUSITASI
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" disabled value="emergent" {{$jenis == 'emergent' ? 'checked' : ''}}>
                        EMERGENT
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" disabled value="tanda vital" {{$jenis == 'tanda vital' ? 'checked' : ''}}>
                        TANDA VITAL
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" disabled value="urgent" {{$jenis == 'urgent' ? 'checked' : ''}}>
                        URGENT
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" disabled value="non urgent" {{$jenis == 'non urgent' ? 'checked' : ''}}>
                        NON URGENT
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" disabled value="false emergency" {{$jenis == 'false emergency' ? 'checked' : ''}}>
                        FALSE EMERGENCY
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            @if($jenis == 'resusitasi')
            <section class="panel">
              <header class="panel-heading">
                PEMERIKSAAN
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h3>RESUSITASI</h3>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jalan_nafas_sumbatan" disabled {{$jalan_nafas == 'jalan_nafas_sumbatan' ? 'checked' : ''}}>
                        Sumbatan
                      </label>
                    </div>                    
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="henti_nafas" {{$henti_nafas == True ? 'checked' : ''}}>
                        Henti Nafas
                      </label>
                    </div>   
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="frek_nafas_le_10" {{$frek_nafas == 'frek_nafas_le_10' ? 'checked' : ''}}>
                        Frek Nafas <= 10 x/mm
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="sianosis" {{$sianosis == True ? 'checked' : ''}}>
                        Sianosis
                      </label>
                    </div>                     
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="henti_jantung" {{$henti_jantung == True ? 'checked' : ''}}>
                        Henti Jantung
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="kondisi_nadi_tidak_teraba" {{$kondisi_nadi == 'kondisi_nadi_tidak_teraba' ? 'checked' : ''}}>
                        Nadi tidak teraba
                      </label>
                    </div> 
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="pucat" {{$pucat == True ? 'checked' : ''}}>
                        Pucat
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="akral_dingin" {{$akral_dingin == True ? 'checked' : ''}}>
                        Akral Dingin
                      </label>
                    </div>                            
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="gcs_le_9" {{$gcs == 'gcs_le_9' ? 'checked' : ''}}>
                        GCS < 9
                      </label>
                    </div>                    
                  </div>
                </div>
              </div>
            </section>

            @elseif($jenis == 'emergent')
            <section class="panel">
              <header class="panel-heading">
                PEMERIKSAAN
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h3>EMERGENT</h3>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jalan_nafas_bebas" disabled {{$jalan_nafas == 'jalan_nafas_bebas' ? 'checked' : ''}}>
                        Bebas
                      </label>
                    </div>                    
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nafas_be_32" disabled {{$frek_nafas == 'frek_nafas_be_32' ? 'checked' : ''}}>
                        Frek Nafas >= 32 x/mm
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="mengi" disabled {{$mengi == True ? 'checked' : ''}}>
                        Mengi
                      </label>
                    </div>                     
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kondisi_nadi_teraba_lemah" disabled {{$kondisi_nadi == 'kondisi_nadi_teraba_lemah' ? 'checked' : ''}}>
                        Nadi teraba lemah
                      </label>
                    </div> 
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nadi_le_50_be_150" disabled {{$frek_nadi == 'frek_nadi_le_50_be_150' ? 'checked' : ''}}>
                        Frek Nadi <= 50 x/mnt atau >= 150 x/mnt
                      </label>
                    </div>                        
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="gcs_9_12" disabled {{$gcs == 'gcs_9_12' ? 'checked' : ''}}>
                        GCS 9-12
                      </label>
                    </div>                    
                  </div>
                </div>
              </div>
            </section>

            @elseif($jenis == 'tanda vital')
            <section class="panel">
              <header class="panel-heading">
                PEMERIKSAAN
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h3>TANDA VITAL</h3>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label>
                  <div class="col-lg-7">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Tekanan Darah</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="tekanan_darah" disabled value="{{$tekanan_darah}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Frek Nadi</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="frek_nadi_text" disabled value="{{$frek_nadi}}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label>
                  <div class="col-lg-7">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Frek Nafas</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="frek_nafas_text" disabled value="{{$frek_nafas}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Suhu</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="suhu" disabled value="{{$suhu}}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label>
                  <div class="col-lg-7">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Makanan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="alergi_makanan" disabled value="{{$alergi_makanan}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Obat</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="alergi_obat" disabled value="{{$alergi_obat}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Lainnya</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="alergi_lainnya" disabled value="{{$alergi_lainnya}}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label>
                  <div class="col-lg-7">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">GCS</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="gcs_text" disabled value="{{$gcs}}">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            @elseif($jenis == 'urgent')
            <section class="panel">
              <header class="panel-heading">
                PEMERIKSAAN
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h3>URGENT</h3>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jalan_nafas_bebas" disabled {{$jalan_nafas == 'jalan_nafas_bebas' ? 'checked' : ''}}>
                        Bebas
                      </label>
                    </div>                    
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nafas_be_24_32" disabled {{$frek_nafas == 'frek_nafas_be_24_32' ? 'checked' : ''}}>
                        Frek Nafas >= 24-32 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="mengi" disabled {{$mengi == True ? 'checked' : ''}}>
                        Mengi
                      </label>
                    </div> 
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nadi_120_150" disabled {{$frek_nadi == 'frek_nadi_120_150' ? 'checked' : ''}}>
                        Frek Nadi: 120-150 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sistol_me_160" disabled {{$sistol == 'sistol_me_160' ? 'checked' : ''}}>
                        TD Sistol >= 160 mmHg
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diastol_m_100" disabled {{$diastol == 'diastol_m_100' ? 'checked' : ''}}>
                        TD Diastol > 100 mmHg
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="gcs_m_12" disabled {{$gcs == 'gcs_m_12' ? 'checked' : ''}}>
                        GCS > 12
                      </label>
                    </div>  
                  </div>
                </div>
              </div>
            </section>

            @elseif($jenis == 'non urgent')
            <section class="panel">
              <header class="panel-heading">
                PEMERIKSAAN
              </header>
              <div class="panel-body">

                <div class="col-lg-2"></div><h3>NON URGENT</h3>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jalan_nafas_bebas" disabled {{$jalan_nafas == 'jalan_nafas_bebas' ? 'checked' : ''}}>
                        Bebas
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nafas_me_20_24" disabled {{$frek_nafas == 'frek_nafas_me_20_24' ? 'checked' : ''}}>
                        Frek Nafas >= 20-24 x/mm
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nadi_100_120" disabled {{$frek_nadi == 'frek_nadi_100_120' ? 'checked' : ''}}>
                        Frek Nadi: 100-120 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sistol_l_160" disabled {{$sistol == 'sistol_l_160' ? 'checked' : ''}}>
                        TD sistol < 160 mmHg
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diastol_l_100" disabled {{$diastol == 'diastol_l_100' ? 'checked' : ''}}>
                        TD Diastole < 100 mmHg
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="gcs_15" disabled {{$gcs == 'gcs_15' ? 'checked' : ''}}>
                        GCS 15
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            @elseif($jenis == 'false emergency')
            <section class="panel">
              <header class="panel-heading">
                PEMERIKSAAN
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h3>FALSE EMERGENCY</h3>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jalan_nafas_bebas" disabled {{$jalan_nafas == 'jalan_nafas_bebas' ? 'checked' : ''}}>
                        Bebas
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nafas_16_20" disabled {{$frek_nafas == 'frek_nafas_16_20' ? 'checked' : ''}}>
                        Frek Nafas 16-20 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="mengi" disabled {{$mengi == True ? 'checked' : ''}}>
                        Mengi
                      </label>
                    </div>
                  </div>

                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nadi_80_100" disabled {{$frek_nadi == 'frek_nadi_80_100' ? 'checked' : ''}}>
                        Frek Nadi: 80-100 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sistol_me_120" disabled {{$sistol == 'sistol_me_120' ? 'checked' : ''}}>
                        TD sistol >= 120 mmHg
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diastol_m_80" disabled {{$diastol == 'diastol_m_80' ? 'checked' : ''}}>
                        TD Diastole > 80 mmHg
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="gcs_15" disabled {{$gcs == 'gcs_15' ? 'checked' : ''}}>
                        GCS 15
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            @endif
          </form>
        </div>
      </div>
    </section>

    @include('layouts.tailscript')

  </body>
  <html>