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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> PANSS EC</h3>
        </div>
      </div>
      @include('layouts.bio')
      
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen PANSS EC
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
                  <td>PANSS EC</td>
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

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_panss_ec">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                PANSS EC
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">P4. GADUH GELISAH</label>
                  <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="1" disabled {{$p4 == 0 ? 'checked' : ''}}>
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="2" disabled {{$p4 == 2 ? 'checked' : ''}}>
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="3" disabled {{$p4 == 3 ? 'checked' : ''}}>
                        Ringan – sedikit agitatif, waspada berlebihan, atau sedikit mudah terangsang selama wawancara, tanpa episode yang jelas dari gaduh gelisah atau labilitas alam perasaan yang mecolok. Pembicaraan mungkin sedikit mendesah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="4" disabled {{$p4 == 4 ? 'checked' : ''}}>
                        Sedang – agitasi atau mudah terangsang yang jelas, ledakan-ledakan episodik
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="5" disabled {{$p4 == 5 ? 'checked' : ''}}>
                        Agak berat – hiperaktivitas yang bermakna, sering terjadi ledakan-leadakan atau aktivitas mototrik, sulit untuk tetap duduk
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="6" disabled {{$p4 == 6 ? 'checked' : ''}}>
                        Berat – gaduh gelisah yang mencolok mempengaruhi fungsi sehari-hari seperti makan  dan tidur
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="7" disabled {{$p4 == 7 ? 'checked' : ''}}>
                        Sangat berat – gaduh gelisah yang mencolok, mempengaruhi kegiatan makan dan tidur, serta jelas tidak memungkinkan interaksi interpersonal. Percepatan dan pembicaraan dan aktivitas motorik dapat menimbulkan inkoherensi dan kelelahan
                      </label>
                    </div>
                  </div>
                  <label class="control-label col-lg-2" for="inputSuccess">G8. KETIDAKOPERATIFAN</label>
                  <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="1" disabled {{$g8 == 1 ? 'checked' : ''}}>
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="2" disabled {{$g8 == 2 ? 'checked' : ''}}>
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="3" disabled {{$g8 == 3 ? 'checked' : ''}}>
                        Ringan – patuh tapi disertai sikap marah tidak sabar atau sarkasme, mungkin ada penolakan yang tidak mengganggu terhadap penyelidikan yang sensitif selama wawancara
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="4" disabled {{$g8 == 4 ? 'checked' : ''}}>
                        Sedang – kadang-kadang terdapat penolakan langsung untuk patuh, memproyeksikan hostilitas, defensif atau bersifat negatif tetapi biasanya masih dapat diatasi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="5" disabled {{$g8 == 5 ? 'checked' : ''}}>
                        Agak berat – seringkali tidak patuh, jelas defensif atau iritabilitas terhadap pewawancara dan mungkin tidak bersedia menghadapi banyak pertanyaan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="6" disabled {{$g8 == 6 ? 'checked' : ''}}>
                        Berat – sangat tidak kooperatif, negativistik dan suka membangkang. Menolak untuk patuh, tidak mau memulai atau mengikuti wawancara sepenuhnya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="7" disabled {{$g8 == 7? 'checked' : ''}}>
                        Sangat berat – resistensi aktif, menolak untuk ikut dalam aktivitas sosial apapun, mengurus kebersihan diri, bercakap-cakap dengan keluarga atau staf dan bahkan untuk berpartisipasi dalam wawancara singkat
                      </label>
                    </div>
                  </div>

                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">P7. PERMUSUHAN</label>
                  <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="1" disabled {{$p7 == 1 ? 'checked' : ''}}>
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="2" disabled {{$p7 == 2 ? 'checked' : ''}}>
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="3" disabled {{$p7 == 3 ? 'checked' : ''}}>
                        Ringan – melampiaskan kemarahan secara tidak langsung atau ditahan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="4" disabled {{$p7 == 4 ? 'checked' : ''}}>
                        Sedang – sikap bermusuhan yang nyata
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="5" disabled {{$p7 == 5 ? 'checked' : ''}}>
                        Agak berat – pasien sangat mudah marah dan kadang-kadang memaki dengan kata-kata kasar atau mengancam
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="6" disabled {{$p7 == 6 ? 'checked' : ''}}>
                        Berat – tidak kooperatif dan mencaci maki dengan kasar atau mengancam, dapat beringas dan merusak tetapi tidak menyerang orang lain secara fisik
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="7" disabled {{$p7 == 7 ? 'checked' : ''}}>
                        Sangat berat – kemarahan yang hebat berakibat sangat tidak kooperatif, menghalangi interaksi, atau secara episodik melakukan penyerangan fisik terhadap orang lain
                      </label>
                    </div>
                  </div>
                  <label class="control-label col-lg-2" for="inputSuccess">G14. PENGENDALIAN IMPULS</label>
                  <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="1" disabled {{$g14 == 1 ? 'checked' : ''}}>
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="2" disabled {{$g14 == 2 ? 'checked' : ''}}>
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="3" disabled {{$g14 == 3 ? 'checked' : ''}}>
                        Ringan – cenderung mudah marah dan frustasi bila menghadapi stres atau pemuasannya ditolak tetapi jarang bertindak impulsif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="4" disabled {{$g14 == 4 ? 'checked' : ''}}>
                        Sedang – dengan provokasi yang minimal, pasien menjadi marah dan mencaci maki. Mungkin sekali-kali mengancam, merusak atau terdapat satu atau dua episode yang melibatkan konfrontasi fisik atau perselisihan ringan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="5" disabled {{$g14 == 5 ? 'checked' : ''}}>
                        Agak berat – memperlihatkan episode impulsif yang berulang, termasuk mencaci maki, merusak harta benda atau ancaman fisik. Mungkin ada satu atau dua episode yang melibatkan serangn serius
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="6" disabled {{$g14 == 6 ? 'checked' : ''}}>
                        Berat – agresif secara impulsif, mengancam, menuntut dan merusak, tanpa pertimbangan terhadap konsekuensinya. Menunjukkan perilaku menyerang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="7" disabled {{$g14 == 7 ? 'checked' : ''}}>
                        Sangat berat – memperlihatkan serangan kebrutalan dan berbahaya
                      </label>
                    </div>
                  </div>

                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">G4. Ketegangan</label>
                  <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="1" disabled {{$g4 == 1 ? 'checked' : ''}}>
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="2" disabled {{$g4 == 2 ? 'checked' : ''}}>
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="3" disabled {{$g4 == 3 ? 'checked' : ''}}>
                        Ringan – postur dan gerakan-gerakan menunjukkan kekhawatiran ringan, ketidaktenangan yang sekali-kali, perubahan posisi, atau tremor tangan yang halus dan cepat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="4" disabled {{$g4 == 4 ? 'checked' : ''}}>
                        Sedang – nyata-nyata gelisah seperti perilaku tidak tenang, tremor tangan yang nyata, keringat berlebihan, atau manerisme karena gugup
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="5" disabled {{$g4 == 5 ? 'checked' : ''}}>
                        Agak berat – ketegangan yang berat, manifestasi seperti gemetar karena gugup, keringat sangat berlebihan dan ketidaktenangan, perilaku selama wawancara tidak terpengaruh secara bermakna
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="6" disabled {{$g4 == 6 ? 'checked' : ''}}>
                        Berat – Ketegangan berat, taraf interaksi terganggu. Misalnya terus-menerus bergerak, tidak dapat tetap duduk, hiperventilasi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="7" disabled {{$g4 == 7 ? 'checked' : ''}}>
                        Sangat berat – ketegangan sangat mencolok, tanda panik atau percepatan gerakan motorik kaar, ketidak mampuan tetap duduk > 1 menit yang menyebabkan percakapan tidak mungkin diteruskan
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Bangsal</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="bangsal" disabled="" value="{{$bangsal}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Pemeriksaan</label>
                  <div class="col-sm-2">
                    <input type="date" class="form-control" name="tanggal_pemeriksaan" disabled="" value="{{$tanggal_pemeriksaan}}">
                  </div>
                </div>
              </div>
            </section>

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