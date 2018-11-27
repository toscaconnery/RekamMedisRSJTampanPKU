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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>RENCANA TINDAKAN KEPERAWATAN INTENSIF RESIKO BUNUH DIRI</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Rencana Tindakan Keperawatan Intensif Resiko Bunuh Diri
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
                  <td>Rencana Tindakan Keperawatan Intensif Resiko Bunuh Diri</td>
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
      <form class="form-horizontal " method="post" action="ri_rencana_keperawatan_1">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Rencana Tindakan Keperawatan Intensif Resiko Bunuh Diri
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label"> Tanggal Pengkajian</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pengkajian">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label"> Jam Pengkajian</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam_pengkajian">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label"> Ruangan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="ruangan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label"> Diagnosa Medis</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="diagnosa_medis">
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
                Rencana Tindakan Keperawatan Intensif Resiko Bunuh Diri
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif I</label>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ti1_1">
                        Tempatkan di tempat yang mudah diawasi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ti1_2">
                        Awasi kondisi pasien dengan ketat
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ti1_3">
                        Observasi variatif
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ti1_4">
                        Berikan psikofarmaka
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ti1_5">
                        Pertimbangkan mengusulkan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ti1_6">
                        ECT jika perlu
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif II</label>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ti2_1">
                        Dengarkan keluhan pasien tanpa menghakimi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ti2_2">
                        Buat kontrak keamanan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ti2_3">
                        Tingkatkan harga diri pasien
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ti2_4">
                        Kerahkan dukungan sosial
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ti2_5">
                        Awasi dengan ketat
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ti2_6">
                        Beri psikofarmaka: anti depresan oral
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindakan Intensif III</label>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ti3_1">
                        Dengarkan keluhan pasien
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ti3_2">
                        Latih cara mengendalikan dorongan bunuh diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ti3_3">
                        Awasi dengan ketat
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ti3_4">
                        Pertahankan pemberian psikofarmaka oral: anti depresan
                      </label>
                    </div>
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