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
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>RENCANA TINDAKAN KEPERAWATAN INTENSIF</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Rencana Tindakan Keperawatan Intensif
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
      <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_keperawatan_intensif">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Rencana Tindakan Keperawatan Intensif
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label"> Tanggal Pengkajian</label>
                  <div class="col-sm-3">
                    <input type="text" id="dp1" class="form-control" name="tanggal">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label"> Jam Pengkajian</label>
                  <div class="col-sm-3">
                    <input type="time" class="form-control" name="jam">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label"> Ruangan</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="ruangan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label"> Diagnosa Medis</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="diagnosa_medis">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindakan Keperawatan Intensif</label>
                  <div class="col-lg-3">
                    <select class="form-control m-bot15" name="jenis" id="jenis">
                      <option selected disabled hidden></option>
                      <option value="rbd">Bunuh Diri</option>
                      <option value="dpd">Defisit Perawatan Diri</option>
                      <option value="halusinasi">Gangguan Persepsi Sensori: Halusinasi</option>
                      <option value="pk">Perilaku kekerasan</option>
                      <option value="panik">Panik</option>
                      <option value="waham">Waham</option>
                      <option value="md">Isolasi Sosial: Menarik Diri</option>
                    </select>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="row hidden_form" id="form_rbd">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Rencana Tindakan Keperawatan Intensif Resiko Bunuh Diri
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 33%">Tindakan Intensif I</th>
                      <th style="width: 33%">Tindakan Intensif II</th>
                      <th style="width: 33%">Tindakan Intensif III</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_1_rbd">
                            Tempatkan di tempat yang mudah diawasi
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_2_rbd">
                            Awasi kondisi pasien dengan ketat
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_3_rbd">
                            Observasi variatif
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_4_rbd">
                            Berikan psikofarmaka
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_5_rbd">
                            Pertimbangkan mengusulkan
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_6_rbd">
                            ECT jika perlu
                          </label>
                        </div>
                      </td>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_1_rbd">
                            Dengarkan keluhan pasien tanpa menghakimi
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_2_rbd">
                            Buat kontrak keamanan
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_3_rbd">
                            Tingkatkan harga diri pasien
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_4_rbd">
                            Kerahkan dukungan sosial
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_5_rbd">
                            Awasi dengan ketat
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_6_rbd">
                            Beripsikofarmaka: anti depresan oral
                          </label>
                        </div>
                      </td>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_1_rbd">
                            Dengarkan keluhan pasien
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_2_rbd">
                            Latih cara mengendalikan dorongan bunuh diri
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_3_rbd">
                            Awasi dengan ketat
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_4_rbd">
                            Pertahankan pemberian psikofarmaka oral: anti depresan
                          </label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
          </div>
        </div>

        <div class="row hidden_form" id="form_dpd">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Rencana Tindakan Keperawatan Intensif Defisit Perawatan Diri
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 33%">Tindakan Intensif I</th>
                      <th style="width: 33%">Tindakan Intensif II</th>
                      <th style="width: 33%">Tindakan Intensif III</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_1_dpd">
                            Bantuan total dalam perawatan diri (sesuaikan dengan jenis perawatan diri yang mengalami kemunduran)
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_2_dpd">
                            Jelaskan manfaat melakukan perawatan diri
                          </label>
                        </div>
                      </td>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_1_dpd">
                            Jelaskan cara melakukan upaya perawatan diri
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_2_dpd">
                            Bimbing melakukan perawatan diri dengan benar (sesuai jenis perawatan diri yang mengalami kemunduran)
                          </label>
                        </div>
                      </td>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_1_dpd">
                            Ingatkan pasien melakukan perawatan diri
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_2_dpd">
                            Bimbing jika masih ada perawatan diri yang tidak benar (sesuai jenis perawatan diri yang mengalami kemunduran)
                          </label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
          </div>
        </div>

        <div class="row hidden_form" id="form_halusinasi">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Rencana Tindakan Keperawatan Intensif Gangguan Persepsi Sensori: Halusinasi
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 33%">Tindakan Intensif I</th>
                      <th style="width: 33%">Tindakan Intensif II</th>
                      <th style="width: 33%">Tindakan Intensif III</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_1_halusinasi">
                            Dengarkan ungkapan klien
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_2_halusinasi">
                            Yakinkan pasien dalam keadaan tenang
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_3_halusinasi">
                            Berikan psikofarmaka parental: anti psikotik
                          </label>
                        </div>
                      </td>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_1_halusinasi">
                            Dengarkan keluhan pasien tanpa menghakimi
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_2_halusinasi">
                            Latih cara mengontrol halusinasi dengan menghardik
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_3_halusinasi">
                            Berikan psikofarmaka parenteral: anti psikotik oral
                          </label>
                        </div>
                      </td>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_1_halusinasi">
                            Dengarkan keluhan pasien
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_2_halusinasi">
                            Latih cara mengontrol halusinasi dengan bercakap dengan orang lain, dan melakukan aktivitas terjadwal
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_3_halusinasi">
                            Pertahankan pemberian psikofarmaka oral: anti psikotik
                          </label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
          </div>
        </div>

        <div class="row hidden_form" id="form_pk">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Rencana Tindakan Keperawatan Intensif Perilaku Kekerasan
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 33%">Tindakan Intensif I</th>
                      <th style="width: 33%">Tindakan Intensif II</th>
                      <th style="width: 33%">Tindakan Intensif III</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_1_pk">
                            Kendalika secara verbal
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_2_pk">
                            Pengikatan atau isolasi
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_3_pk">
                            Psikofarmaka parenteral: anti psikotik
                          </label>
                        </div>
                      </td>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_1_pk">
                            Dengarkan keluhan pasien tanpa menghakimi
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_2_pk">
                            Latih cara fisik mengendalikan marah: Nafas dalam
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_3_pk">
                            Beri psikofarmaka: antipsikotik oral
                          </label>
                        </div>
                      </td>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_1_pk">
                            Dengarkan keluhan pasien
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_2_pk">
                            Latih cara mengendalikan marah dengan cara verbal, spiritual
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_3_pk">
                            Pertahankan psikofarmaka oral: antipsikotik
                          </label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
          </div>
        </div>
        
        <div class="row hidden_form" id="form_panik">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Rencana Tindakan Keperawatan Intensif Panik
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 33%">Tindakan Intensif I</th>
                      <th style="width: 33%">Tindakan Intensif II</th>
                      <th style="width: 33%">Tindakan Intensif III</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_1_panik">
                            Yakinkan pasien dalam keadaan aman
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_2_panik">
                            Reaksi tenang
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_3_panik">
                            Beri anti ansietas parenteral
                          </label>
                        </div>
                      </td>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_1_panik">
                            Yakinkan pasien aman
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_2_panik">
                            Respons tenang
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_3_panik">
                            Berikan anti ansietas parenteral
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_4_panik">
                            Ajarkan tentang cara relaksasi: nafas dalam
                          </label>
                        </div>
                      </td>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_1_panik">
                            Dengarkan keluhan pasien
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_2_panik">
                            Latih cara mengendalikan marah dengan cara verbal dan spiritual
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_3_panik">
                            Pertahankan pemberian psikofarmaka oral: anti ansietas
                          </label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
          </div>
        </div>
        
        <div class="row hidden_form" id="form_waham">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Rencana Tindakan Keperawatan Intensif Waham
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 33%">Tindakan Intensif I</th>
                      <th style="width: 33%">Tindakan Intensif II</th>
                      <th style="width: 33%">Tindakan Intensif III</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_1_waham">
                            Dengarkan ungkapan klien walaupun terkait wahamnya tanpa membantah atau mendukung
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_2_waham">
                            Berkomunikasi sesuai dengan kondisi obyektif
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_3_waham">
                            Psikofarmaka: anti psikotik parenteral, anti ansietas
                          </label>
                        </div>
                      </td>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_1_waham">
                            Dengarkan keluhan pasien tanpa menghakimi
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_2_waham">
                            Komunikasi sesuai kondisi obyektif pasien
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_3_waham">
                            Beri psikofarmaka anti psikotik oral
                          </label>
                        </div>
                      </td>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_1_waham">
                            Dengarkan keluhan pasien
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_2_waham">
                            Bantu identifikasi stimulus waham dan usahakan menghindari stimulus tersebut
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_3_waham">
                            Pertahankan pemberian psikofarmaka oral: anti psikotik
                          </label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
          </div>
        </div>

        <div class="row hidden_form" id="form_md">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Rencana Tindakan Keperawatan Intensif Menarik Diri
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 33%">Tindakan Intensif I</th>
                      <th style="width: 33%">Tindakan Intensif II</th>
                      <th style="width: 33%">Tindakan Intensif III</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_1_md">
                            Penuhi kebutuhan dasar pasien (tidur makan, personal hyegene)
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_1_2_md">
                            Kolaborasi dengan dokter untuk pemberian obat yang dibutuhkan pasien
                          </label>
                        </div>
                      </td>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_1_md">
                            Kaji tingkat masah isolasi sosial pada pasien
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_2_md">
                            Penuhi kebutuhan dasar (tidur,makan,personal hyegene)
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_2_3_md">
                            Latih pasien berhubungan dengan perawat
                          </label>
                        </div>
                      </td>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_1_md">
                            Bantu pasien mengenal penyebab isolasi
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_2_md">
                            Bantu klien mengenal keuntungan berhubungan dengan orang lain
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_3_md">
                            Bantu pasien mengenal kerugian bila tidak berhubungan dengan orang lain
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tindakan_3_4_md">
                            Bantu pasien berinteraksi dengan orang lain secara bertahap
                          </label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
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

  <script type="text/javascript">
    $(function() {
      $('.hidden_form').hide(); 
      $('#jenis').change(function(){
        $('.hidden_form').hide();
        if($('#jenis').val() == 'rbd') {
          $('#form_rbd').show(); 
        } else if ($('#jenis').val() == 'dpd') {
          $('#form_dpd').show(); 
        } else if ($('#jenis').val() == 'halusinasi') {
          $('#form_halusinasi').show();
        } else if ($('#jenis').val() == 'pk') {
          $('#form_pk').show();
        } else if ($('#jenis').val() == 'panik') {
          $('#form_panik').show();
        } else if ($('#jenis').val() == 'waham') {
          $('#form_waham').show();
        } else if ($('#jenis').val() == 'md') {
          $('#form_md').show();
        }
      });
    });
  </script>

</body>
<html>