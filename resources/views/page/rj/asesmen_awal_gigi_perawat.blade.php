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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL PASIEN GIGI RAWAT JALAN</h3>
          </div>
        </div>
        @include('layouts.bio')
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Dokumen Asesmen Awal Pasien Gigi Rawat Jalan
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
                    <td>Diisi oleh Perawat</td>
                    <td>20/08/2018</td>
                    <td>[Nama Pengisi]</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_perawat"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="{{url('')}}/view_rj_asesmen_awal_perawat"><i class="icon_check_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Diisi oleh Dokter</td>
                    <td>20/08/2018</td>
                    <td>[Nama Pengisi]</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_dokter"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="{{url('')}}/view_rj_asesmen_awal_dokter"><i class="icon_check_alt2"></i></a>
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

            <section class="panel">
              <header class="panel-heading">
                Data Pasien
              </header>
              <div class="panel-body">

                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" disabled="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" disabled="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Telp/HP</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </section>

            <form class="form-horizontal " method="post" action="rj_asesmen_awal_gigi_perawat">
              {{ csrf_field() }}
              <section class="panel">
                <header class="panel-heading">
                  Penilaian Tingkat Nyeri
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tingkat nyeri</label>
                    <div class="col-lg-3">
                      <select class="form-control m-bot15" name="tingkat">
                        <option value="1">Tidak ada nyeri</option>
                        <option value="2">Nyeri Kronis</option>
                        <option value="3">Nyeri Akut</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Skala Nyeri </label>
                    <div class="col-sm-2">
                      <select name="skala" class="form-control">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>

                    <label class="col-sm-2 control-label">Lokasi Nyeri </label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="lokasi">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Durasi Nyeri</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="durasi">
                    </div>

                    <label class="col-sm-2 control-label">Frekuensi Nyeri</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="frekuensi">
                    </div>
                  </div>

                  <div class="form-group" id="form_nyeri_hilang">
                    <label class="control-label col-lg-2" for="inputSuccess">Nyeri hilang, bila </label>
                    <div class="col-lg-4">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="hilang1">
                          Minum Obat
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="hilang2">
                          Mendengar Musik
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="hilang3">
                          Istirahat
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="hilang4">
                          Berubah posisi/tidur
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="hilang5">
                          Lain-lain
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Diberitahukan ke dokter?</label>
                    <div class="col-lg-2">
                      <div class="radio">
                        <label>
                          <input type="radio" name="pemberitahuan" value="1">
                          Ya 
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="pemberitahuan" value="0">
                          Tidak 
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Diberitahukan ke dokter pukul</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="waktu_pemberitahuan">
                    </div>
                  </div>
                </div>
              </section>

              {{-- risiko jatuh --}}
              <section class="panel">
                <header class="panel-heading">
                  Penilaian Risiko Jatuh
                </header>
                <div class="panel-body">
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Risiko Jatuh</label>
                      <div class="col-lg-4">
                        <div class="radio">
                          <label>
                            <input type="radio" name="penilaian_risiko_jatuh" value="humpty_dumpty">
                            HUMPTY DUMPTY (Anak-anak) 
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="penilaian_risiko_jatuh" value="morse">
                            MORSE (Dewasa) 
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="penilaian_risiko_jatuh" value="edmunson">
                            EDMUNSON (Jiwa) 
                          </label>
                        </div>
                      </div>
                    </div>
                </div>
              </section>

              {{-- humpty dumpty --}}
              <section class="panel">
                <header class="panel-heading">
                  HUMPTY DUMPTY (Anak-anak)
                </header>
                <div class="panel-body">
                  <div class="col-lg-2"></div><h4>HUMPTY DUMPTY (Anak-anak) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">USIA</label>
                    <div class="col-lg-2">
                      <select class="form-control m-bot15" name="usia">
                        <option value="1">Dibawah 3 tahun </option>
                        <option value="2">3 – 7 tahun </option>
                        <option value="3">7 – 13 tahun </option>
                        <option value="4">> 13 tahun </option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="diagnosis">
                        <option value="1">Kelainan Neurologi </option>
                        <option value="2">Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)</option>
                        <option value="3">Kelainan psikis / prilaku</option>
                        <option value="4">Diagnosis lain</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">GANGGUAN KOGNITIF</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="gangguan_kognitif">
                        <option value="1">Tidak sadar terhadap keterbatasan (gangguan kesadaran, retardasi mental</option>
                        <option value="2">Lupa keterbatasan (anak yang hiperaktif)</option>
                        <option value="3">Mengetahui kemampuan diri</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">FAKTOR LINGKUNGAN</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="faktor_lingkungan">
                        <option value="1">Riwayat jatuh dari tempat tidur saat bayi</option>
                        <option value="2">Pasien menggunakan alat bantu atau box meubel</option>
                        <option value="3">Pasien berada di tempat tidur</option>
                        <option value="4">Di luar ruang rawat</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RESPON TERHADAP OPERASI/OBAT PENENANG/EFEK ANASTESI</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="waktu_respon_obat">
                        <option value="1">Dalam 24 Jam</option>
                        <option value="2">Dalam 48 Jam</option>
                        <option value="3">> 48 Jam</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">PENGGUNAAN OBAT</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="penggunaan_obat">
                        <option value="1">Bermacam-macam obat yang digunakan : obat sedatif (kecuali pasien ICU yang menggunakan sedasi dan paralisis), Hiptonik Barbitural, Fonotiazin, Antidepresan, Laksansia / Diuretikan, Narkotik</option>
                        <option value="2">Salah satu Pengobatan di atas</option>
                        <option value="3">Pengobatan lain</option>
                      </select>
                    </div>
                  </div>

                </div>
              </section>

              {{-- morse --}}
              <section class="panel">
                <header class="panel-heading">
                  MORSE (Dewasa)
                </header>
                <div class="panel-body">
                  <div class="col-lg-2"></div><h4>MORSE (Dewasa) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                    <div class="col-lg-1">
                      <select class="form-control m-bot15" name="riwayat_jatuh">
                        <option value="true">Ya</option>
                        <option value="false">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS SEKUNDER</label>
                    <div class="col-lg-1">
                      <select class="form-control m-bot15" name="diagnosis_sekunder">
                        <option value="true">Ya</option>
                        <option value="false">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">ALAT BANTU</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="alat_bantu">
                        <option value="1">Perabot</option>
                        <option value="2">Tongkat/Alat Penopang</option>
                        <option value="3">Tidak ada/Kursi Roda/Perawat/Tirah Baring</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">TERPASANG INFUS</label>
                    <div class="col-lg-1">
                      <select class="form-control m-bot15" name="terpasang_infus">
                        <option value="true">Ya</option>
                        <option value="false">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">GAYA BERJALAN</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="gaya_berjalan">
                        <option value="1">Terganggu</option>
                        <option value="2">Lemah</option>
                        <option value="3">Normal/Tirah Baring/Imobilisasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="status_mental">
                        <option value="1">Sering lupa akan keterbatasan yang dimiliki</option>
                        <option value="2">Orientasi baik terhadap kemampuan diri sendiri</option>
                      </select>
                    </div>
                  </div>
                </div>
              </section>

              {{-- edmunson --}}
              <section class="panel">
                <header class="panel-heading">
                  EDMUNSON (Jiwa)
                </header>
                <div class="panel-body">
                  <div class="col-lg-2"></div><h4>EDMUNSON (Jiwa) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label>
                    <div class="col-lg-2">
                      <select class="form-control m-bot15" name="status_mental">
                        <option value="1">Kesadaran baik/orientasi baik setiap saat </option>
                        <option value="2">Agitasi/Ansietas</option>
                        <option value="3">Kadang-kadang bingung</option>
                        <option value="4">Bingung/Disorientasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="diagnosis">
                        <option value="1">Kelainan Neurologi </option>
                        <option value="2">Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)</option>
                        <option value="3">Kelainan psikis / prilaku</option>
                        <option value="4">Diagnosis lain</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">ELIMINASI</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="eliminasi">
                        <option value="1">Mandiri dan mampi mengontrol BAB/BAK</option>
                        <option value="2">Dower Catheter/Colostomy</option>
                        <option value="3">Eliminasi dengan bantuan</option>
                        <option value="4">Gangguan eliminasi (Inkontinensia/Nokturia/Frekwensi)</option>
                        <option value="5">Inkontinesia tetapi mampu untuk mobilisasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">PENGOBATAN</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="pengobatan">
                        <option value="1">Tanpa obat-obatan</option>
                        <option value="2">Obat-obatan jantung</option>
                        <option value="3">Obat-obat psikotropika (termasuk Benzodiazepine dan Antidepresan)</option>
                        <option value="4">Mendapat tambahan obat-obatan dan/atau obat-obat PRN (psikiatri, antinyeri) yang diberikan dalam 24 jam terakhir</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSA</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="diagnosa">
                        <option value="1">Bipolar/ Gangguan Schizoaffective</option>
                        <option value="2">Penggunaan Obat-obatan terlarang/ketergantungan alkohol</option>
                        <option value="3">Gangguan Depresi Mayor</option>
                        <option value="4">Dimensia/ Delirium</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">AMBULASI /KESEIMBANGAN </label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="ambulasi">
                        <option value="1">Mandiri/Keseimbangan Baik/Immobilisasi</option>
                        <option value="2">Dengan Alat Bantu (Kursi roda, walker,dll)</option>
                        <option value="3">Vertigo/kelemahan</option>
                        <option value="4">Goyah/membutuhkan mantuan dan menyadari kemampuan</option>
                        <option value="5">Goyah tapi lupa keterbatasan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">NUTRISI</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="nutrisi">
                        <option value="1">Mengkonsumsi sedikit makanan atau minuman  dalam 24 jam terakhir</option>
                        <option value="2">Tidak ada kelainan dengan nafsu makan</option>
                        <option value="3">Gangguan pola tidur yang dilaporkan oleh pasien, keluarga atau petugas</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                    <div class="col-lg-7">
                      <select class="form-control m-bot15" name="riwayat_jatuh">
                        <option value="1">Tidak ada riwayat jatuh</option>
                        <option value="2">Ada riwayat jatuh dalam 3 bulan terakhir</option>
                      </select>
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </section>
            </form>
          </div>
        </div>
      </section>

      @include('layouts.tailscript')

      {{-- =====NYERI===== --}}
      <script type="text/javascript">
        $(document).ready( function() {
          $('input[type=checkbox][name="hilang5"]').change(function() {
            var checkboxIsChecked = $('input[type=checkbox][name="hilang5"]').prop('checked');
            if(checkboxIsChecked) {
              $('#form_nyeri_hilang').after('<div class="form-group" id="field_nyeri_hilang"><label class="col-sm-2 control-label">Sebutkan </label><div class="col-sm-2"><input type="text" class="form-control" name="nyeri_hilang_input_text" required=""></div></div>');
            }
            else {
              $('#field_nyeri_hilang').hide();
            }
          });
        });
      </script>

      <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
  </body>


  <html>