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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>RENCANA TINDAKAN KEPERAWATAN INTENSIF ISOLASI SOSIAL: MENARIK DIRI</h3>
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
                  <td>Rencana Tindakan Keperawatan Intensif Isolasi Sosial: Menarik Diri</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_rencana_keperawatan_7">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_rencana_keperawatan_7_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_rencana_keperawatan_7_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_rencana7_pdf">Cetak</a>
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
                Rencana Tindakan Keperawatan Intensif Isolasi Sosial: Menarik Diri
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
                Rencana Tindakan Keperawatan Intensif Isolasi Sosial: Menarik Diri
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif I</label>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="ti1_1" {{isset($ti1[1]) ? 'checked' : ''}}>
                        Penuhi kebutuhan dasar pasien (tidur makan, personal hyegene)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="ti1_2" {{isset($ti1[2]) ? 'checked' : ''}}>
                        Kolaborasi dengan dokter untuk pemberian obat yang dibutuhkan pasien
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
                        Kaji tingkat masah isolasi sosial pada pasien
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="ti2_2" {{isset($ti2[2]) ? 'checked' : ''}}>
                        Penuhi kebutuhan dasar (tidur,makan,personal hyegene)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="ti2_3" {{isset($ti2[3]) ? 'checked' : ''}}>
                        Latih pasien berhubungan dengan perawat
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
                        Bantu pasien mengenal penyebab isolasi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="ti3_2" {{isset($ti3[2]) ? 'checked' : ''}}>
                        Bantu klien mengenal keuntungan berhubungan dengan orang lain
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="ti3_3" {{isset($ti3[3]) ? 'checked' : ''}}>
                        Bantu pasien mengenal kerugian bila tidak berhubungan dengan orang lain
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="ti3_4" {{isset($ti3[4]) ? 'checked' : ''}}>
                        Bantu pasien berinteraksi dengan orang lain secara bertahap
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