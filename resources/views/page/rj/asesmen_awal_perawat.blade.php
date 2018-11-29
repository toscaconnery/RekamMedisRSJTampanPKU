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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL RAWAT JALAN</h3>
        </div>
      </div>
      @include('layouts.bio')
      
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Asesmen Awal Rawat Jalan
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

          <form class="form-horizontal" method="post" action="rj_asesmen_awal_perawat">
            {{ csrf_field() }}
            {{-- asesmen keperawatan --}}
            <section class="panel">
              <header class="panel-heading">
                Asesmen Keperawatan
              </header>
              <div class="panel-body">

                <input type="hidden" name="no_rm" value="1">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alasan Kunjungan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alasan_kunjungan" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Hubungan pasien dengan anggota keluarga</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" value="1" name="hubungan_keluarga">
                        Baik
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" value="0" name="hubungan_keluarga">
                        Tidak Baik
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Psikososial</label>
                  <div class="col-lg-10" style="padding-left: 0px; padding-right: 0px;">
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name="status_psikososial1"> Baik
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name="status_psikososial2"> Cemas
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="3" name="status_psikososial3"> Takut
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="4" name="status_psikososial4"> Marah
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="5" name="status_psikososial5"> Kecendrungan bunuh diri
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="6" name="status_psikososial6"> Lain-lain
                      </label>
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Konsep Diri</label>
                  <div class="col-lg-10" style="padding-left: 0px; padding-right: 0px;">
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name="konsep_diri1"> Gangguan citra tubuh
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name="konsep_diri2"> Gangguan identitas
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="3" name="konsep_diri3"> Harga diri rendah
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="4" name="konsep_diri4"> Gangguan peran
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="5" name="konsep_diri5"> Tidak terkaji
                      </label>
                    </div>                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Persepsi</label>
                  <div class="col-lg-10" style="padding-left: 0px; padding-right: 0px;">
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name="persepsi1"> Ilusi
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name="persepsi2"> Halusinasi dengar
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="3" name="persepsi3"> Halusinasi lihat
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="4" name="persepsi4"> Halusinasi raba
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="5" name="persepsi5"> Halusinasi kecap
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="6" name="persepsi6"> Halusinasi hidu
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="7" name="persepsi7"> Tidak terkaji
                      </label>
                    </div>
                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Aktifitas Motorik</label>
                  <div class="col-lg-10" style="padding-left: 0px; padding-right: 0px;">
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name="motorik1"> Lesu
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name="motorik2"> Tegang
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="3" name="motorik3"> Gelisah
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="4" name="motorik4"> TIK  
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="5" name="motorik5"> Grimasi  
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="6" name="motorik6"> Halusinasi hidu
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="7" name="motorik7"> Tremor
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="8" name="motorik8"> Konsulsif
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="9" name="motorik9"> Tidak ada Masalah
                      </label>
                    </div>                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Penampilan</label>
                  <div class="col-lg-10" style="padding-left: 0px; padding-right: 0px;">
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="1" name="penampilan1"> Rapi
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="2" name="penampilan2"> Tidak rapi
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="3" name="penampilan3"> Penggunaan tidak sesuai
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="4" name="penampilan4"> Cara berpakaian tidak seperti biasa
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Isi Pikir</label>
                  <div class="col-lg-10" style="padding-left: 0px; padding-right: 0px;">
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" name="pikir1"> Obsesi
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" name="pikir2"> Phobia
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" name="pikir3"> Hipokondria
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" name="pikir4"> Depersonalisasi  
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" name="pikir5"> Ide terkait 
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" name="pikir6"> Pikiran magis
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" name="pikir7"> Waham agama
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" name="pikir8"> Waham somatik
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" name="pikir9"> Waham besar
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" name="pikir10"> Waham curiga
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" name="pikir11"> Waham nihilistik
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" name="pikir12"> Sisip pikir
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" name="pikir13"> Siar pikir
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" name="pikir14"> Kontrol pikir
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" name="pikir15"> Tidak terkaji
                      </label>
                    </div>
                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alam Perasaan</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="perasaan1"> Sedih
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox2" name="perasaan2"> Ketakutan
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox3" name="perasaan3"> Putus asa
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox3" name="perasaan4"> Khawatir
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox3" name="perasaan5"> Gembira berlebihan
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox3" name="perasaan6"> Isyarat/Percobaan bunuh diri
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox3" name="perasaan7"> Sesuai
                    </label>
                  </div>
                </div>

                <div class="form-group" id="status_fungsional">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Fungsional</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" id="status_fungsional_1" value="Mandiri" name="status_fungsional">
                        Mandiri
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" id="status_fungsional_2" value="Perlu Bantuan" name="status_fungsional">
                        Perlu Bantuan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" id="status_fungsional_3" value="Ketergantungan Total" name="status_fungsional">
                        Ketergantungan Total
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perlu Bantuan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="perlu_bantuan" id="perlu_bantuan" disabled="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Dilaporkan ke dokter pukul</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="waktu_laporan">
                  </div>
                </div>

              </div>
            </section>

            {{-- pemeriksaan fisik dan screening gizi --}}
            <section class="panel">
              <header class="panel-heading">
                Pemeriksaan Fisik dan Screening Gizi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">TD</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="td">
                  </div>
                  <label class="col-sm-1 control-label">TB</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="tb">
                  </div>
                  <label class="col-sm-1 control-label">Nadi</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="nadi">
                  </div>
                  <label class="col-sm-1 control-label">BB</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="bb">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pernafasan</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="pernafasan">
                  </div>
                  <label class="col-sm-1 control-label">Golongan Darah</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="golongan_darah">
                  </div>
                  <label class="col-sm-1 control-label">Suhu</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="suhu">
                  </div>
                </div>

                <div class="col-lg-2"></div><h5>Berdasarkan Malnutrition Universal Screening Tool (MUST)</h5>
                <div class="form-group" id="must_1_form">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah pasien mengalami penurunan BB yang tidak diinginkan dalam 6 bulan terakhir?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="must_1" id="must_1_1" value="0">
                        Tidak ada penurunan berat badan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="must_1" id="must_1_2" value="2">
                        Tidak yakin/ tidak tahu/ terasa baju longgar 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="must_1" id="must_1_3" value="0">
                        Ya
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group" id="must_23_form">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah asupan makan berkurang karena tidak nafsu makan?</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="must_2" value="0">
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="must_2" value="1">
                        Ya 
                      </label>
                    </div>
                  </div>

                  <label class="control-label col-lg-3" for="inputSuccess">Pasien dengan diagnosis khusus?</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="must_3" id="must_3_2" value="False">
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="must_3" id="must_3_1" value="True">
                        Ya 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="col-lg-2"></div><h5>Berdasarkan Adaptasi Strong-Kid</h5>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apa pasien tampak kurus?</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="sk_1" value="0">
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sk_1" value="1">
                        Ya 
                      </label>
                    </div>
                  </div>

                  <label class="control-label col-lg-3" for="inputSuccess">Apakah terdapat penurunan BB selama satu bulan terakhir? Berdasarkan penilaian objektif data BB bila ada ATAU penilaian subjektif orangtua pasien ATAU untuk bayi < 1 tahun : BB tidak naik selama 3 bulan terakhi?r</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="sk_2" value="0">
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sk_2" value="1">
                        Ya 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah terdapat salah satu dari kondisi berikut?</label>
                  <div class="col-lg-6">
                    <li>Diare ≥ 5 kali/hari dan atau muntah ? 3 kali/hari dalam seminggu terakhir</li>
                    <li>Asupan makanan berkurang selama 1 minggu terakhir</li>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sk_3" value="0">
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sk_3" value="1">
                        Ya 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apa terdapat penyakit atau keadaan yang mengakibatkan pasien beresiko mengalami malnutrisi?</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="sk_4" value="0">
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sk_4" value="1">
                        Ya 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Daftar Penyakit/keadaan yang bersiko mengakibatkan malnutrisi</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_1">
                        Diare Kronik (lebih dari 2 minggu)
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_2">
                        (Tersangka) Penyakit jantung bawaan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_3">
                        (Tersangka) Infeksi Human Immunodeficiency Virus (HIV)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_4">
                        (Tersangka) Kanker
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_5">
                        Penyakit hati kronik
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_6">
                        Penyakit ginjal kronik
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_7">
                        TB Paru
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_8">
                        Luka bakar luas
                      </label>
                    </div>

                  </div>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_9">
                        Kelainan anatomi daerah mulut yang menyebabkan kesulitan makan (misal:bibir sumbing)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_10">
                        Trauma
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_11">
                        Kelainan metabolik bawaan (Inborn Error Metabolism)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_12">
                        (Tersangka) Infeksi Human Immunodeficiency Virus (HIV)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_13">
                        Retardasi mental
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_14">
                        Rencana / paska operasi mayor (misal: laparatomi, tokaratomi)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_15">
                        Terpasang stoma
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="penyakit_malnutrisi_16">
                        Lain-lain...
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Diberitahukan ke dokter?</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="pemberitahuan" id="pemberitahuan_1" value="1">
                        Ya 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pemberitahuan" id="pemberitahuan_2" value="0">
                        Tidak 
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pukul</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" id="waktu_pemberitahuan" name="waktu_pemberitahuan" disabled="">
                  </div>
                </div>
              </div>
            </section>

            {{-- penilaian tingkat nyeri --}}
            <section class="panel">
              <header class="panel-heading">
                Penilaian Tingkat Nyeri
              </header>
              <div class="panel-body">
                <div class="form-group">  
                  <div class="col-lg-12">
                    <img src="img/nyeri.jpg" alt="Smiley face" height="300" width="550">
                  </div>
                </div>
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
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="waktu_pemberitahuan">
                  </div>
                </div>
              </div>
            </section>

            {{-- penilaian risiko jatuh --}}
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
                        <input type="radio" name="cc" value="Baik">
                        HUMPTY DUMPTY (Anak-anak) 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="cc" value="Tidak Baik">
                        MORSE (Dewasa) 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="cc" value="Tidak Baik">
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
              </div>
            </section>

            {{-- diagnosa keperawatan --}}
            <section class="panel">
              <header class="panel-heading">
                Diagnosa Keperawatan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Diagnosa Keperawatan Umum</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="umum_1">
                        Aktual/ Resiko bersihan jalan nafas tidak efektif
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="umum_2">
                        Aktual/ Resiko aspirasi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="umum_3">
                        Aktual/ Resiko pola nafas tidak efektif
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="umum_4">
                        Aktual/ Resiko gangguan pertukaran gas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="umum_5">
                        Aktual/ penurunan curah jantung
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="umum_6">
                        Aktual/ Resiko gangguan perfusi jaringan celebral/perifer
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="umum_7">
                        Aktual/ Resiko gangguan keseimbangan cairan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="umum_8">
                        Aktual/ Resiko gangguan keseimbangan kontinuitas jaringan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="umum_9">
                        Aktual/ Resiko infeksi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="umum_10">
                        Resiko cedera / jatuh
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="umum_11">
                        Hypertermi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="umum_12">
                        Nyeri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="umum_13">
                        Gangguan kebutuhan nutrisi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="umum_14">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="umum_lainnya">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Diagnosa keperawatan jiwa</label>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jiwa_1">
                        Gangguan persepsi sensori : halusinasi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jiwa_2">
                        Perilaku kekerasan
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jiwa_3">
                        Isolasi sosial
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jiwa_4">
                        Gangguan konsep diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jiwa_5">
                        Resiko bunuh diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jiwa_6">
                        Intoleransi aktifitas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jiwa_7">
                        Waham
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jiwa_8">
                        Defisit perawatan diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jiwa_9">
                        Kerusakan komunitas verbal
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jiwa_10">
                        Koping individu tidak efektif
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jiwa_11">
                        Aktual/Resiko Cemas/Takut
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="jiwa_12">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jiwa_lainnya">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Obat Parental </label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="obat_parental">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">EKG </label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="ekg">
                  </div>
                </div>

              </div>
            </section>

            {{-- evaluasi tindakan keperawatan --}}
            <section class="panel">
              <header class="panel-heading">
                Evaluasi Tindakan Keperawatan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Implementasi </label>
                  <div class="col-sm-8">
                    <textarea name="implementasi" rows="8" cols="114" style="resize: none;"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Evaluasi </label>
                  <div class="col-sm-8">
                    <textarea name="evaluasi" rows="8" cols="114" style="resize: none;"></textarea>
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
    
    {{-- status fungsional --}}
    <script type="text/javascript">
      $(document).ready( function() {
        $('input[type=radio][name=status_fungsional]').change(function() {
          if(this.value == 'Perlu Bantuan') {
            $('#perlu_bantuan').prop('disabled', false);
          }
          else if(this.value == 'Mandiri') {
            $('#perlu_bantuan').prop('disabled', true);
          }
          else if(this.value == 'Ketergantungan Total') {
            $('#perlu_bantuan').prop('disabled', true);
          }
        });
      });
    </script>

    <script type="text/javascript">
      $(document).ready( function() {
        $('input[type=radio][name=must_1]').change(function() {
          if(this.id == 'must_1_3') {
            $('#must_1_form').after('<div class="form-group" id="must_1_bb_berkurang"><label class="control-label col-lg-2" for="inputSuccess">Jika ya berapa penurunan berat badan tersebut?</label><div class="col-lg-3"><select class="form-control m-bot15" name="must_1_input_bb_berkurang"><option value="1">1 – 5 kg </option><option value="2">6 – 10 kg </option><option value="3">11 – 15 kg </option><option value="4">> - 15 kg </option></select></div></div>');
          }
          else if(this.id == 'must_1_1') {
            $('#must_1_bb_berkurang').hide();
          }
          else if(this.id == 'must_1_2') {
            $('#must_1_bb_berkurang').hide();
          }
        });
      })
    </script>

    <script type="text/javascript">
      $(document).ready( function() {
        $('input[type=radio][name=must_3]').change(function() {
          if(this.id == 'must_3_1') {
            $('#must_23_form').after('<div class="form-group" id="list_diagnosis_khusus"><label class="control-label col-lg-2" for="inputSuccess"></label><div class="col-lg-10"><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_1"> DM</label><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_2"> Kemoterapi</label><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_3"> Hemodialisa</label><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_4"> Geriatri</label><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_5"> Immunitas Menurun</label><label class="checkbox-inline"><input type="checkbox" name="diagnosis_khusus_6"> Lain-lain</label><label class="checkbox-inline"><div class="col-lg-4"><input type="text" class="form-control"></div></label></div></div>');
          }
          else if(this.id == 'must_3_2') {
            $('#list_diagnosis_khusus').hide();
          }
        });
      });
    </script>

    <script type="text/javascript">
      $(document).ready( function() {
        $('#pemberitahuan_1').click( function() {
          $('#waktu_pemberitahuan').prop('disabled', false);
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready( function() {
        $('#pemberitahuan_2').click( function() {
          $('#waktu_pemberitahuan').prop('disabled', true);
        });
      });
    </script>

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

  </body>


  <html>