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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>RENCANA TINDAKAN KEPERAWATAN INTENSIF GANGGUAN PERSEPSI SENSORI: HALUSINASI</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Rencana Tindakan Keperawatan Intensif Gangguan Persepsi Sensori: Halusinasi
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
                  <td>Rencana Tindakan Keperawatan Intensif Gangguan Persepsi Sensori: Halusinasi</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_rencana3_pdf">PDF</a>
                      <a class="btn btn-success" href="#">EDIT</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>
      <form class="form-horizontal">
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Rencana Tindakan Keperawatan Intensif Gangguan Persepsi Sensori: Halusinasi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label"> Tanggal Pengkajian</label>
                  <div class="col-sm-2">
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pengkajian" value="{{$tanggal_pengkajian}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label"> Jam Pengkajian</label>
                  <div class="col-sm-2">
                    <input type="time" disabled class="form-control" name="jam_pengkajian" value="{{$jam_pengkajian}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label"> Ruangan</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="ruangan" value="{{$ruangan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label"> Diagnosa Medis</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="diagnosa_medis" value="{{$diagnosa_medis}}">
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
                Rencana Tindakan Keperawatan Intensif Gangguan Persepsi Sensori: Halusinasi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif I</label>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="ti1_1" {{isset($ti1[1]) ? 'checked' : ''}}>
                        Dengarkan ungkapan klien
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="ti1_2" {{isset($ti1[2]) ? 'checked' : ''}}>
                        Yakinkan pasien dalam keadaan tenang
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="ti1_3" {{isset($ti1[3]) ? 'checked' : ''}}>
                        Berikan psikofarmaka parental: anti psikotik
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif II</label>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="ti2_1" {{isset($ti2[1]) ? 'checked' : ''}}>
                        Dengarkan keluhan pasien tanpa menghakimi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="ti2_2" {{isset($ti2[2]) ? 'checked' : ''}}>
                        Latih cara mengontrol halusinasi dengan menghardik
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="ti2_3" {{isset($ti2[3]) ? 'checked' : ''}}>
                        Berikan psikofarmaka parenteral: anti psikotik oral
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif III</label>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="ti3_1" {{isset($ti3[1]) ? 'checked' : ''}}>
                        Dengarkan keluhan pasien
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="ti3_2" {{isset($ti3[2]) ? 'checked' : ''}}>
                        Latih cara mengontrol halusinasi dengan bercakap dengan orang lain, dan melakukan aktivitas terjadwal
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="ti3_3" {{isset($ti3[3]) ? 'checked' : ''}}>
                        Pertahankan pemberian psikofarmaka oral: anti psikotik
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </form>
    </section>
  </section>
    @include('layouts.tailscript')
</body>
<html>