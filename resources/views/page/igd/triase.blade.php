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
                  <td>{{date('j F Y', strtotime('today'))}}</td>
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

          <form class="form-horizontal " method="post" action="igd_triase">
            {{ csrf_field() }}
            <section class="panel" id="first_panel">
              <header class="panel-heading">
                Triase Pasien
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal masuk IGD</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control required sandbox-container" name="tanggal_masuk">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keluhan Utama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="keluhan_utama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">DOA</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="doa">
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
                        <input type="radio" name="jenis" id="jenis" value="resusitasi">
                        RESUSITASI
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" id="jenis" value="emergent">
                        EMERGENT
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" id="jenis" value="tanda vital">
                        TANDA VITAL
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" id="jenis" value="urgent">
                        URGENT
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" id="jenis" value="non urgent">
                        NON URGENT
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis" id="jenis" value="false emergency">
                        FALSE EMERGENCY
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            {{-- <section class="panel hidden_panel" id="panel_resusitasi">
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
                        <input type="checkbox" name="jalan_nafas_sumbatan">
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
                        <input type="checkbox" name="henti_nafas">
                        Henti Nafas
                      </label>
                    </div>   
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nafas_le_10">
                        Frek Nafas <= 10 x/mm
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sianosis">
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
                        <input type="checkbox" name="henti_jantung">
                        Henti Jantung
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kondisi_nadi_tidak_teraba">
                        Nadi tidak teraba
                      </label>
                    </div> 
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pucat">
                        Pucat
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="akral_dingin">
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
                        <input type="checkbox" name="gcs_le_9">
                        GCS < 9
                      </label>
                    </div>                    
                  </div>
                </div>
              </div>
            </section> --}}

            {{-- <section class="panel hidden_panel" id="panel_emergent">
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
                        <input type="checkbox" name="jalan_nafas_bebas">
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
                        <input type="checkbox" name="frek_nafas_be_32">
                        Frek Nafas >= 32 x/mm
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="mengi">
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
                        <input type="checkbox" name="kondisi_nadi_teraba_lemah">
                        Nadi teraba lemah
                      </label>
                    </div> 
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="frek_nadi_le_50_be_150">
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
                        <input type="checkbox" name="gcs_9_12">
                        GCS 9-12
                      </label>
                    </div>                    
                  </div>
                </div>
              </div>
            </section> --}}

            {{-- <section class="panel hidden_panel" id="panel_tanda_vital">
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
                        <input type="text" class="form-control" name="tekanan_darah">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Frek Nadi</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="frek_nadi_text">
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
                        <input type="text" class="form-control" name="frek_nafas_text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Suhu</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="suhu">
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
                        <input type="text" class="form-control" name="alergi_makanan">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Obat</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="alergi_obat">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Lainnya</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="alergi_lainnya">
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
                        <input type="text" class="form-control" name="gcs_text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> --}}

            {{-- <section class="panel hidden_panel" id="panel_urgent">
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
                        <input type="checkbox" name="jalan_nafas_bebas">
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
                        <input type="checkbox" name="frek_nafas_be_24_32">
                        Frek Nafas >= 24-32 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="mengi">
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
                        <input type="checkbox" name="frek_nadi_120_150">
                        Frek Nadi: 120-150 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sistol_me_160">
                        TD Sistol >= 160 mmHg
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diastol_m_100">
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
                        <input type="checkbox" name="gcs_m_12">
                        GCS > 12
                      </label>
                    </div>  
                  </div>
                </div>
              </div>
            </section> --}}

            {{-- <section class="panel hidden_panel" id="panel_non_urgent">
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
                        <input type="checkbox" name="jalan_nafas_bebas">
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
                        <input type="checkbox" name="frek_nafas_me_20_24">
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
                        <input type="checkbox" name="frek_nadi_100_120">
                        Frek Nadi: 100-120 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sistol_l_160">
                        TD sistol < 160 mmHg
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diastol_l_100">
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
                        <input type="checkbox" name="gcs_15">
                        GCS 15
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section> --}}

            {{-- <section class="panel hidden_panel" id="panel_false_emergency">
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
                        <input type="checkbox" name="jalan_nafas_bebas">
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
                        <input type="checkbox" name="frek_nafas_16_20">
                        Frek Nafas 16-20 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="mengi">
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
                        <input type="checkbox" name="frek_nadi_80_100">
                        Frek Nadi: 80-100 x/mm
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sistol_me_120">
                        TD sistol >= 120 mmHg
                      </label>
                    </div>
                    <br>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diastol_m_80">
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
                        <input type="checkbox" name="gcs_15">
                        GCS 15
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section> --}}
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
        $('#first_panel').after('<section class="panel hidden_panel" id="panel_resusitasi"> <header class="panel-heading"> PEMERIKSAAN </header> <div class="panel-body"> <div class="col-lg-2"></div><h3>RESUSITASI</h3> <div class="form-group"></div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="jalan_nafas_sumbatan"> Sumbatan </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="henti_nafas"> Henti Nafas </label> </div> <div class="checkbox"> <label> <input type="checkbox" name="frek_nafas_le_10"> Frek Nafas <= 10 x/mm </label> </div> <div class="checkbox"> <label> <input type="checkbox" name="sianosis"> Sianosis </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="henti_jantung"> Henti Jantung </label> </div> <div class="checkbox"> <label> <input type="checkbox" name="kondisi_nadi_tidak_teraba"> Nadi tidak teraba </label> </div> <div class="checkbox"> <label> <input type="checkbox" name="pucat"> Pucat </label> </div> <div class="checkbox"> <label> <input type="checkbox" name="akral_dingin"> Akral Dingin </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="gcs_le_9"> GCS < 9 </label> </div> </div> </div> </div> </section>');
      }

      function attach_emergent() {
        $('#first_panel').after('<section class="panel hidden_panel" id="panel_emergent"> <header class="panel-heading"> PEMERIKSAAN </header> <div class="panel-body"> <div class="col-lg-2"></div><h3>EMERGENT</h3> <div class="form-group"></div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="jalan_nafas_bebas"> Bebas </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="frek_nafas_be_32"> Frek Nafas >= 32 x/mm </label> </div> <div class="checkbox"> <label> <input type="checkbox" name="mengi"> Mengi </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="kondisi_nadi_teraba_lemah"> Nadi teraba lemah </label> </div> <div class="checkbox"> <label> <input type="checkbox" name="frek_nadi_le_50_be_150"> Frek Nadi <= 50 x/mnt atau >= 150 x/mnt </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="gcs_9_12"> GCS 9-12 </label> </div> </div> </div> </div> </section>');
      }

      function attach_tanda_vital() {
        $('#first_panel').after('<section class="panel hidden_panel" id="panel_tanda_vital"> <header class="panel-heading"> PEMERIKSAAN </header> <div class="panel-body"> <div class="col-lg-2"></div><h3>TANDA VITAL</h3> <div class="form-group"></div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label> <div class="col-lg-7"> <div class="form-group"> <label class="col-sm-2 control-label">Tekanan Darah</label> <div class="col-sm-4"> <input type="text" class="form-control" name="tekanan_darah"> </div> </div> <div class="form-group"> <label class="col-sm-2 control-label">Frek Nadi</label> <div class="col-sm-4"> <input type="text" class="form-control" name="frek_nadi_text"> </div> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label> <div class="col-lg-7"> <div class="form-group"> <label class="col-sm-2 control-label">Frek Nafas</label> <div class="col-sm-4"> <input type="text" class="form-control" name="frek_nafas_text"> </div> </div> <div class="form-group"> <label class="col-sm-2 control-label">Suhu</label> <div class="col-sm-4"> <input type="text" class="form-control" name="suhu"> </div> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label> <div class="col-lg-7"> <div class="form-group"> <label class="col-sm-2 control-label">Makanan</label> <div class="col-sm-4"> <input type="text" class="form-control" name="alergi_makanan"> </div> </div> <div class="form-group"> <label class="col-sm-2 control-label">Obat</label> <div class="col-sm-4"> <input type="text" class="form-control" name="alergi_obat"> </div> </div> <div class="form-group"> <label class="col-sm-2 control-label">Lainnya</label> <div class="col-sm-4"> <input type="text" class="form-control" name="alergi_lainnya"> </div> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label> <div class="col-lg-7"> <div class="form-group"> <label class="col-sm-2 control-label">GCS</label> <div class="col-sm-4"> <input type="text" class="form-control" name="gcs_text"> </div> </div> </div> </div> </div> </section>');
      }

      function attach_urgent() {
        $('#first_panel').after('<section class="panel hidden_panel" id="panel_urgent"> <header class="panel-heading"> PEMERIKSAAN </header> <div class="panel-body"> <div class="col-lg-2"></div><h3>URGENT</h3> <div class="form-group"></div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="jalan_nafas_bebas"> Bebas </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="frek_nafas_be_24_32"> Frek Nafas >= 24-32 x/mm </label> </div> <br> <div class="checkbox"> <label> <input type="checkbox" name="mengi"> Mengi </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="frek_nadi_120_150"> Frek Nadi: 120-150 x/mm </label> </div> <br> <div class="checkbox"> <label> <input type="checkbox" name="sistol_me_160"> TD Sistol >= 160 mmHg </label> </div> <br> <div class="checkbox"> <label> <input type="checkbox" name="diastol_m_100"> TD Diastol > 100 mmHg </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="gcs_m_12"> GCS > 12 </label> </div> </div> </div> </div> </section>');
      }

      function attach_non_urgent() {
        $('#first_panel').after('<section class="panel hidden_panel" id="panel_non_urgent"> <header class="panel-heading"> PEMERIKSAAN </header> <div class="panel-body"> <div class="col-lg-2"></div><h3>NON URGENT</h3> <div class="form-group"></div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="jalan_nafas_bebas"> Bebas </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="frek_nafas_me_20_24"> Frek Nafas >= 20-24 x/mm </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="frek_nadi_100_120"> Frek Nadi: 100-120 x/mm </label> </div> <br> <div class="checkbox"> <label> <input type="checkbox" name="sistol_l_160"> TD sistol < 160 mmHg </label> </div> <br> <div class="checkbox"> <label> <input type="checkbox" name="diastol_l_100"> TD Diastole < 100 mmHg </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="gcs_15"> GCS 15 </label> </div> </div> </div> </div> </section>');
      }

      function attach_false_emergency() {
        $('#first_panel').after('<section class="panel hidden_panel" id="panel_false_emergency"> <header class="panel-heading"> PEMERIKSAAN </header> <div class="panel-body"> <div class="col-lg-2"></div><h3>FALSE EMERGENCY</h3> <div class="form-group"></div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Jalan Nafas</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="jalan_nafas_bebas"> Bebas </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Pernafasan</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="frek_nafas_16_20"> Frek Nafas 16-20 x/mm </label> </div> <br> <div class="checkbox"> <label> <input type="checkbox" name="mengi"> Mengi </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Sirkulasi</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="frek_nadi_80_100"> Frek Nadi: 80-100 x/mm </label> </div> <br> <div class="checkbox"> <label> <input type="checkbox" name="sistol_me_120"> TD sistol >= 120 mmHg </label> </div> <br> <div class="checkbox"> <label> <input type="checkbox" name="diastol_m_80"> TD Diastole > 80 mmHg </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label> <div class="col-lg-4"> <div class="checkbox"> <label> <input type="checkbox" name="gcs_15"> GCS 15 </label> </div> </div> </div> </div> </section>');
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

  </body>
  <html>