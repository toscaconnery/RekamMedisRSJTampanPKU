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
                  <td>{{$tanggal_pengisian}}</td>
                  <td>{{$nama_pengisi}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/igd_triase">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/igd_triase_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/igd_triase_edit">Edit</i></a>
                      <a class="btn btn-danger" onclick="delete_document()" href="#">Hapus</a>
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

          <form class="form-horizontal" method="post" action="igd_triase_edit">
            {{ csrf_field() }}
            <section class="panel" id="first_panel">
              <header class="panel-heading">
                Triase Pasien
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal masuk IGD</label>
                  <div class="col-sm-2">
                    <input type="text" id="dp1" class="form-control required" name="tanggal_masuk" value="{{$tanggal_masuk}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam" value="{{$jam}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keluhan Utama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="keluhan_utama" value="{{$keluhan_utama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">DOA</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="doa" {{$doa == True ? 'checked' : ''}}>
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
                        <input type="radio" name="jenis" value="resusitasi" {{$jenis == 'resusitasi' ? 'checked' : ''}}>
                        RESUSITASI
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" value="emergent" {{$jenis == 'emergent' ? 'checked' : ''}}>
                        EMERGENT
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" value="tanda vital" {{$jenis == 'tanda vital' ? 'checked' : ''}}>
                        TANDA VITAL
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" value="urgent" {{$jenis == 'urgent' ? 'checked' : ''}}>
                        URGENT
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" value="non urgent" {{$jenis == 'non urgent' ? 'checked' : ''}}>
                        NON URGENT
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" value="false emergency" {{$jenis == 'false emergency' ? 'checked' : ''}}>
                        FALSE EMERGENCY
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            @if($jenis == 'resusitasi')
            <section class="panel hidden_panel" id="panel_resusitasi">
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
                        <input type="checkbox" name="jalan_nafas_sumbatan" {{$jalan_nafas == 'jalan_nafas_sumbatan' ? 'checked' : ''}}>
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
                        <input type="checkbox" name="henti_nafas" {{$henti_nafas == True ? 'checked' : ''}}>
                        Henti Nafas
                      </label>
                    </div>   
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nafas_le_10" {{$frek_nafas == 'frek_nafas_le_10' ? 'checked' : ''}}>
                        Frek Nafas <= 10 x/mm
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sianosis" {{$sianosis == True ? 'checked' : ''}}>
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
                        <input type="checkbox" name="henti_jantung" {{$henti_jantung == True ? 'checked' : ''}}>
                        Henti Jantung
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kondisi_nadi_tidak_teraba" {{$kondisi_nadi == 'kondisi_nadi_tidak_teraba' ? 'checked' : ''}}>
                        Nadi tidak teraba
                      </label>
                    </div> 
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pucat" {{$pucat == True ? 'checked' : ''}}>
                        Pucat
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="akral_dingin" {{$akral_dingin == True ? 'checked' : ''}}>
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
                        <input type="checkbox" name="gcs_le_9" {{$gcs == 'gcs_le_9' ? 'checked' : ''}}>
                        GCS < 9
                      </label>
                    </div>                    
                  </div>
                </div>
              </div>
            </section>

            @elseif($jenis == 'emergent')
            <section class="panel hidden_panel" id="panel_emergent">
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
                        <input type="checkbox" name="jalan_nafas_bebas" {{$jalan_nafas == 'jalan_nafas_bebas' ? 'checked' : ''}}>
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
                        <input type="checkbox" name="frek_nafas_be_32" {{$frek_nafas == 'frek_nafas_be_32' ? 'checked' : ''}}>
                        Frek Nafas >= 32 x/mm
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="mengi" {{$mengi == True ? 'checked' : ''}}>
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
                        <input type="checkbox" name="kondisi_nadi_teraba_lemah" {{$kondisi_nadi == 'kondisi_nadi_teraba_lemah' ? 'checked' : ''}}>
                        Nadi teraba lemah
                      </label>
                    </div> 
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nadi_le_50_be_150" {{$frek_nadi == 'frek_nadi_le_50_be_150' ? 'checked' : ''}}>
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
                        <input type="checkbox" name="gcs_9_12" {{$gcs == 'gcs_9_12' ? 'checked' : ''}}>
                        GCS 9-12
                      </label>
                    </div>                    
                  </div>
                </div>
              </div>
            </section>

            @elseif($jenis == 'tanda vital')
            <section class="panel hidden_panel" id="panel_tanda_vital">
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
                        <input type="text" class="form-control" name="tekanan_darah" value="{{$tekanan_darah}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Frek Nadi</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="frek_nadi_text" value="{{$frek_nadi}}">
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
                        <input type="text" class="form-control" name="frek_nafas_text" value="{{$frek_nafas}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Suhu</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="suhu" value="{{$suhu}}">
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
                        <input type="text" class="form-control" name="alergi_makanan" value="{{$alergi_makanan}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Obat</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="alergi_obat" value="{{$alergi_obat}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Lainnya</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="alergi_lainnya" value="{{$alergi_lainnya}}">
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
                        <input type="text" class="form-control" name="gcs_text" value="{{$gcs}}">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            @elseif($jenis == 'urgent')
            <section class="panel hidden_panel" id="panel_urgent">
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
                        <input type="checkbox" name="jalan_nafas_bebas" {{$jalan_nafas == 'jalan_nafas_bebas' ? 'checked' : ''}}>
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
                        <input type="checkbox" name="frek_nafas_be_24_32" {{$frek_nafas == 'frek_nafas_be_24_32' ? 'checked' : ''}}>
                        Frek Nafas >= 24-32 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="mengi" {{$mengi == True ? 'checked' : ''}}>
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
                        <input type="checkbox" name="frek_nadi_120_150" {{$frek_nadi == 'frek_nadi_120_150' ? 'checked' : ''}}>
                        Frek Nadi: 120-150 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sistol_me_160" {{$sistol == 'sistol_me_160' ? 'checked' : ''}}>
                        TD Sistol >= 160 mmHg
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diastol_m_100" {{$diastol == 'diastol_m_100' ? 'checked' : ''}}>
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
                        <input type="checkbox" name="gcs_m_12" {{$gcs == 'gcs_m_12' ? 'checked' : ''}}>
                        GCS > 12
                      </label>
                    </div>  
                  </div>
                </div>
              </div>
            </section>

            @elseif($jenis == 'non urgent')
            <section class="panel hidden_panel" id="panel_non_urgent">
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
                        <input type="checkbox" name="jalan_nafas_bebas" {{$jalan_nafas == 'jalan_nafas_bebas' ? 'checked' : ''}}>
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
                        <input type="checkbox" name="frek_nafas_me_20_24" {{$frek_nafas == 'frek_nafas_me_20_24' ? 'checked' : ''}}>
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
                        <input type="checkbox" name="frek_nadi_100_120" {{$frek_nadi == 'frek_nadi_100_120' ? 'checked' : ''}}>
                        Frek Nadi: 100-120 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sistol_l_160" {{$sistol == 'sistol_l_160' ? 'checked' : ''}}>
                        TD sistol < 160 mmHg
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diastol_l_100" {{$diastol == 'diastol_l_100' ? 'checked' : ''}}>
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
                        <input type="checkbox" name="gcs_15" {{$gcs == 'gcs_15' ? 'checked' : ''}}>
                        GCS 15
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            @elseif($jenis == 'false emergency')
            <section class="panel hidden_panel" id="panel_false_emergency">
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
                        <input type="checkbox" name="jalan_nafas_bebas" {{$jalan_nafas == 'jalan_nafas_bebas' ? 'checked' : ''}}>
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
                        <input type="checkbox" name="frek_nafas_16_20" {{$frek_nafas == 'frek_nafas_16_20' ? 'checked' : ''}}>
                        Frek Nafas 16-20 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="mengi" {{$mengi == True ? 'checked' : ''}}>
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
                        <input type="checkbox" name="frek_nadi_80_100" {{$frek_nadi == 'frek_nadi_80_100' ? 'checked' : ''}}>
                        Frek Nadi: 80-100 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sistol_me_120" {{$sistol == 'sistol_me_120' ? 'checked' : ''}}>
                        TD sistol >= 120 mmHg
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diastol_m_80" {{$diastol == 'diastol_m_80' ? 'checked' : ''}}>
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
                        <input type="checkbox" name="gcs_15" {{$gcs == 'gcs_15' ? 'checked' : ''}}>
                        GCS 15
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            @endif
            <div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </section>

    @include('layouts.tailscript')

    <script type="text/javascript">
      function attach_resusitasi() {
        $('#first_panel').after('<section class="panel hidden_panel" id="panel_resusitasi"> <header class="panel-heading"> PEMERIKSAAN </header> <div class="panel-body"> <div class="col-lg-2"></div><h3>RESUSITASI</h3> <div class="form-group"></div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="jalan_nafas_sumbatan" {{$jalan_nafas == 'jalan_nafas_sumbatan' ? 'checked' : ''}}> Sumbatan </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="henti_nafas" {{$henti_nafas == True ? 'checked' : ''}}> Henti Nafas </label> </div> <div class="checkbox"> <label> <input type="checkbox" name="frek_nafas_le_10" {{$frek_nafas == 'frek_nafas_le_10' ? 'checked' : ''}}> Frek Nafas <= 10 x/mm </label> </div> <div class="checkbox"> <label> <input type="checkbox" name="sianosis" {{$sianosis == True ? 'checked' : ''}}> Sianosis </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="henti_jantung" {{$henti_jantung == True ? 'checked' : ''}}> Henti Jantung </label> </div> <div class="checkbox"> <label> <input type="checkbox" name="kondisi_nadi_tidak_teraba" {{$kondisi_nadi == 'kondisi_nadi_tidak_teraba' ? 'checked' : ''}}> Nadi tidak teraba </label> </div> <div class="checkbox"> <label> <input type="checkbox" name="pucat" {{$pucat == True ? 'checked' : ''}}> Pucat </label> </div> <div class="checkbox"> <label> <input type="checkbox" name="akral_dingin" {{$akral_dingin == True ? 'checked' : ''}}> Akral Dingin </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="gcs_le_9" {{$gcs == 'gcs_le_9' ? 'checked' : ''}}> GCS < 9 </label> </div> </div> </div> </div> </section>');
      }

      function attach_emergent() {
        $('#first_panel').after('<section class="panel hidden_panel" id="panel_emergent"> <header class="panel-heading"> PEMERIKSAAN </header> <div class="panel-body"> <div class="col-lg-2"></div><h3>EMERGENT</h3> <div class="form-group"></div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="jalan_nafas_bebas" {{$jalan_nafas == 'jalan_nafas_bebas' ? 'checked' : ''}}> Bebas </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="frek_nafas_be_32" {{$frek_nafas == 'frek_nafas_be_32' ? 'checked' : ''}}> Frek Nafas >= 32 x/mm </label> </div> <div class="checkbox"> <label> <input type="checkbox" name="mengi" {{$mengi == True ? 'checked' : ''}}> Mengi </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="kondisi_nadi_teraba_lemah" {{$kondisi_nadi == 'kondisi_nadi_teraba_lemah' ? 'checked' : ''}}> Nadi teraba lemah </label> </div> <div class="checkbox"> <label> <input type="checkbox" name="frek_nadi_le_50_be_150" {{$frek_nadi == 'frek_nadi_le_50_be_150' ? 'checked' : ''}}> Frek Nadi <= 50 x/mnt atau >= 150 x/mnt </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="gcs_9_12" {{$gcs == 'gcs_9_12' ? 'checked' : ''}}> GCS 9-12 </label> </div> </div> </div> </div> </section>');
      }

      function attach_tanda_vital() {
        $('#first_panel').after('<section class="panel hidden_panel" id="panel_tanda_vital"> <header class="panel-heading"> PEMERIKSAAN </header> <div class="panel-body"> <div class="col-lg-2"></div><h3>TANDA VITAL</h3> <div class="form-group"></div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label> <div class="col-lg-7"> <div class="form-group"> <label class="col-sm-2 control-label">Tekanan Darah</label> <div class="col-sm-4"> <input type="text" class="form-control" name="tekanan_darah" value="{{$tekanan_darah}}"> </div> </div> <div class="form-group"> <label class="col-sm-2 control-label">Frek Nadi</label> <div class="col-sm-4"> <input type="text" class="form-control" name="frek_nadi_text" value="{{$jenis == 'tanda vital' ? $frek_nadi : ''}}"> </div> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label> <div class="col-lg-7"> <div class="form-group"> <label class="col-sm-2 control-label">Frek Nafas</label> <div class="col-sm-4"> <input type="text" class="form-control" name="frek_nafas_text" value="{{$jenis == 'tanda vital' ? $frek_nafas : ''}}"> </div> </div> <div class="form-group"> <label class="col-sm-2 control-label">Suhu</label> <div class="col-sm-4"> <input type="text" class="form-control" name="suhu" value="{{$suhu}}"> </div> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label> <div class="col-lg-7"> <div class="form-group"> <label class="col-sm-2 control-label">Makanan</label> <div class="col-sm-4"> <input type="text" class="form-control" name="alergi_makanan" value="{{$alergi_makanan}}"> </div> </div> <div class="form-group"> <label class="col-sm-2 control-label">Obat</label> <div class="col-sm-4"> <input type="text" class="form-control" name="alergi_obat" value="{{$alergi_obat}}"> </div> </div> <div class="form-group"> <label class="col-sm-2 control-label">Lainnya</label> <div class="col-sm-4"> <input type="text" class="form-control" name="alergi_lainnya" value="{{$alergi_lainnya}}"> </div> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label> <div class="col-lg-7"> <div class="form-group"> <label class="col-sm-2 control-label">GCS</label> <div class="col-sm-4"> <input type="text" class="form-control" name="gcs_text" value="{{$jenis == 'tanda vital' ? $gcs : ''}}"> </div> </div> </div> </div> </div> </section>');
      }

      function attach_urgent() {
        $('#first_panel').after('<section class="panel hidden_panel" id="panel_urgent"> <header class="panel-heading"> PEMERIKSAAN </header> <div class="panel-body"> <div class="col-lg-2"></div><h3>URGENT</h3> <div class="form-group"></div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="jalan_nafas_bebas" {{$jalan_nafas == 'jalan_nafas_bebas' ? 'checked' : ''}}> Bebas </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="frek_nafas_be_24_32" {{$frek_nafas == 'frek_nafas_be_24_32' ? 'checked' : ''}}> Frek Nafas >= 24-32 x/mm </label> </div> <br> <div class="checkbox"> <label> <input type="checkbox" name="mengi" {{$mengi == True ? 'checked' : ''}}> Mengi </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="frek_nadi_120_150" {{$frek_nadi == 'frek_nadi_120_150' ? 'checked' : ''}}> Frek Nadi: 120-150 x/mm </label> </div> <br> <div class="checkbox"> <label> <input type="checkbox" name="sistol_me_160" {{$sistol == 'sistol_me_160' ? 'checked' : ''}}> TD Sistol >= 160 mmHg </label> </div> <br> <div class="checkbox"> <label> <input type="checkbox" name="diastol_m_100" {{$diastol == 'diastol_m_100' ? 'checked' : ''}}> TD Diastol > 100 mmHg </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="gcs_m_12" {{$gcs == 'gcs_m_12' ? 'checked' : ''}}> GCS > 12 </label> </div> </div> </div> </div> </section>');
      }

      function attach_non_urgent() {
        $('#first_panel').after('<section class="panel hidden_panel" id="panel_non_urgent"> <header class="panel-heading"> PEMERIKSAAN </header> <div class="panel-body"> <div class="col-lg-2"></div><h3>NON URGENT</h3> <div class="form-group"></div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="jalan_nafas_bebas" {{$jalan_nafas == 'jalan_nafas_bebas' ? 'checked' : ''}}> Bebas </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="frek_nafas_me_20_24" {{$frek_nafas == 'frek_nafas_me_20_24' ? 'checked' : ''}}> Frek Nafas >= 20-24 x/mm </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="frek_nadi_100_120" {{$frek_nadi == 'frek_nadi_100_120' ? 'checked' : ''}}> Frek Nadi: 100-120 x/mm </label> </div> <br> <div class="checkbox"> <label> <input type="checkbox" name="sistol_l_160" {{$sistol == 'sistol_l_160' ? 'checked' : ''}}> TD sistol < 160 mmHg </label> </div> <br> <div class="checkbox"> <label> <input type="checkbox" name="diastol_l_100" {{$diastol == 'diastol_l_100' ? 'checked' : ''}}> TD Diastole < 100 mmHg </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="gcs_15" {{$gcs == 'gcs_15' ? 'checked' : ''}}> GCS 15 </label> </div> </div> </div> </div> </section>');
      }

      function attach_false_emergency() {
        $('#first_panel').after('<section class="panel hidden_panel" id="panel_false_emergency"> <header class="panel-heading"> PEMERIKSAAN </header> <div class="panel-body"> <div class="col-lg-2"></div><h3>FALSE EMERGENCY</h3> <div class="form-group"></div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="jalan_nafas_bebas" {{$jalan_nafas == 'jalan_nafas_bebas' ? 'checked' : ''}}> Bebas </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="frek_nafas_16_20" {{$frek_nafas == 'frek_nafas_16_20' ? 'checked' : ''}}> Frek Nafas 16-20 x/mm </label> </div> <br> <div class="checkbox"> <label> <input type="checkbox" name="mengi" {{$mengi == True ? 'checked' : ''}}> Mengi </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="frek_nadi_80_100" {{$frek_nadi == 'frek_nadi_80_100' ? 'checked' : ''}}> Frek Nadi: 80-100 x/mm </label> </div> <br> <div class="checkbox"> <label> <input type="checkbox" name="sistol_me_120" {{$sistol == 'sistol_me_120' ? 'checked' : ''}}> TD sistol >= 120 mmHg </label> </div> <br> <div class="checkbox"> <label> <input type="checkbox" name="diastol_m_80" {{$diastol == 'diastol_m_80' ? 'checked' : ''}}> TD Diastole > 80 mmHg </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="gcs_15" {{$gcs == 'gcs_15' ? 'checked' : ''}}> GCS 15 </label> </div> </div> </div> </div> </section>');
      }

      $('input[type=radio][name=jenis]').change(function() {
        $('.hidden_panel').remove();
        if (this.value == 'resusitasi') {
          attach_resusitasi();
        }
        else if (this.value == 'emergent') {
          attach_emergent();
        }
        else if (this.value == 'tanda vital') {
          attach_tanda_vital();
        }
        else if (this.value == 'urgent') {
          attach_urgent();
        }
        else if (this.value == 'non urgent') {
          attach_non_urgent();
        }
        else if (this.value == 'false emergency') {
          attach_false_emergency();
        }
      });
    </script>

    <script type="text/javascript">
    //menghapus dokumen  
    function delete_document() {
      Swal.fire({
        title: 'Hapus dokumen ini?',
        text: "Dokumen yang telah dihapus tidak akan bisa diakses lagi.",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus dokumen ini',
        cancelButtonText: 'Batalkan'
      }).then((result) => {
        if (result.value) {
          window.location.href = '{{url('/igd_triase_delete')}}';
        }
      })
    }
  </script>

  </body>
  <html>