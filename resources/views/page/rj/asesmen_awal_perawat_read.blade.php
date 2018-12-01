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
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_pdf"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="{{url('')}}/rj_asesmen_awal_perawat"><i class="icon_plus_alt2"></i></a>
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

          <form class="form-horizontal">
            <section class="panel">
              <header class="panel-heading">
                Asesmen Keperawatan
              </header>
              <div class="panel-body">

                <input type="hidden" name="no_rm" value="1">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alasan Kunjungan</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="alasan_kunjungan" value="{{$alasan_kunjungan}}" required>
                  </div>
                </div>
                <h4>Riwayat Psikososial</h4>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Hubungan pasien dengan anggota keluarga</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled value="1" name="hubungan_keluarga" {{$hubungan_keluarga == 1 ? 'checked' : ''}}>
                        Baik
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled value="0" name="hubungan_keluarga" {{$hubungan_keluarga == 0 ? 'checked' : ''}}>
                        Tidak Baik
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Psikologis</label>
                  <div class="col-lg-10" style="padding-left: 0px; padding-right: 0px;">
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="status_psikososial1" {{isset($status_psikososial[1]) ? 'checked' : ''}}> Baik
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="status_psikososial2" {{isset($status_psikososial[2]) ? 'checked' : ''}}> Cemas
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="status_psikososial3" {{isset($status_psikososial[3]) ? 'checked' : ''}}> Takut
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="status_psikososial4" {{isset($status_psikososial[4]) ? 'checked' : ''}}> Marah
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="status_psikososial5" {{isset($status_psikososial[5]) ? 'checked' : ''}}> Sedih
                      </label>
                    </div>
                  </div>
                  <br>
                  <label class="control-label col-lg-2" for="inputSuccess"></label>
                  <div class="col-lg-10" style="padding-left: 0px; padding-right: 0px;">
                    <div class="col-lg-4">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="status_psikososial6" {{isset($status_psikososial[6]) ? 'checked' : ''}}> Kecendrungan bunuh diri dilaporkan ke : 
                      </label>
                    </div>
                    <div class="col-lg-6">
                      <input type="text" disabled class="form-control" name="dilaporkan_ke" value="{{$dilaporkan_ke}}" placeholder="dilaporkan ke...">
                    </div>
                  </div>
                  <br>
                  <label class="control-label col-lg-2" for="inputSuccess"></label>
                  <div class="col-lg-10" style="padding-left: 0px; padding-right: 0px;">
                    <div class="col-lg-4">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="status_psikososial7" {{isset($status_psikososial[7]) ? 'checked' : ''}}> Lain-lain
                      </label>
                    </div>
                    <div class="col-lg-6">
                      <input type="text" disabled class="form-control" name="status_psikologis_lain" value="{{$status_psikologis_lain}}" placeholder="sebutkan status psikologis lainnya">
                    </div>
                  </div>
                </div>
                <h4>Status Mental</h4>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Konsep Diri</label>
                  <div class="col-lg-10" style="padding-left: 0px; padding-right: 0px;">
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="konsep_diri1" {{isset($konsep_diri[1]) ? 'checked' : ''}}> Gangguan citra tubuh
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="konsep_diri2" {{isset($konsep_diri[2]) ? 'checked' : ''}}> Gangguan identitas
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="konsep_diri3" {{isset($konsep_diri[3]) ? 'checked' : ''}}> Harga diri rendah
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="konsep_diri4" {{isset($konsep_diri[4]) ? 'checked' : ''}}> Gangguan peran
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="konsep_diri5" {{isset($konsep_diri[5]) ? 'checked' : ''}}> Tidak terkaji
                      </label>
                    </div>                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Persepsi</label>
                  <div class="col-lg-10" style="padding-left: 0px; padding-right: 0px;">
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="persepsi1" {{isset($persepsi[1]) ? 'checked' : ''}}> Ilusi
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="persepsi2" {{isset($persepsi[2]) ? 'checked' : ''}}> Halusinasi dengar
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="persepsi3" {{isset($persepsi[3]) ? 'checked' : ''}}> Halusinasi lihat
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="persepsi4" {{isset($persepsi[4]) ? 'checked' : ''}}> Halusinasi raba
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="persepsi5" {{isset($persepsi[5]) ? 'checked' : ''}}> Halusinasi kecap
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="persepsi6" {{isset($persepsi[6]) ? 'checked' : ''}}> Halusinasi hidu
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="persepsi7" {{isset($persepsi[7]) ? 'checked' : ''}}> Tidak terkaji
                      </label>
                    </div>
                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Aktifitas Motorik</label>
                  <div class="col-lg-10" style="padding-left: 0px; padding-right: 0px;">
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="motorik1" {{isset($motorik[1]) ? 'checked' : ''}}> Lesu
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="motorik2" {{isset($motorik[2]) ? 'checked' : ''}}> Tegang
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="motorik3" {{isset($motorik[3]) ? 'checked' : ''}}> Gelisah
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="motorik4" {{isset($motorik[4]) ? 'checked' : ''}}> TIK  
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="motorik5" {{isset($motorik[5]) ? 'checked' : ''}}> Grimasi  
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="motorik6" {{isset($motorik[6]) ? 'checked' : ''}}> Halusinasi hidu
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="motorik7" {{isset($motorik[7]) ? 'checked' : ''}}> Tremor
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="motorik8" {{isset($motorik[8]) ? 'checked' : ''}}> Konsulsif
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="motorik9" {{isset($motorik[9]) ? 'checked' : ''}}> Tidak ada Masalah
                      </label>
                    </div>                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Penampilan</label>
                  <div class="col-lg-10" style="padding-left: 0px; padding-right: 0px;">
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="penampilan1" {{isset($penampilan[1]) ? 'checked' : ''}}> Rapi
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="penampilan2" {{isset($penampilan[2]) ? 'checked' : ''}}> Tidak rapi
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="penampilan3" {{isset($penampilan[3]) ? 'checked' : ''}}> Penggunaan tidak sesuai
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="penampilan4" {{isset($penampilan[4]) ? 'checked' : ''}}> Cara berpakaian tidak seperti biasa
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Isi Pikir</label>
                  <div class="col-lg-10" style="padding-left: 0px; padding-right: 0px;">
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="pikir1" {{isset($pikir[1]) ? 'checked' : ''}}> Obsesi
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="pikir2" {{isset($pikir[2]) ? 'checked' : ''}}> Phobia
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="pikir3" {{isset($pikir[3]) ? 'checked' : ''}}> Hipokondria
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="pikir4" {{isset($pikir[4]) ? 'checked' : ''}}> Depersonalisasi  
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="pikir5" {{isset($pikir[5]) ? 'checked' : ''}}> Ide terkait 
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="pikir6" {{isset($pikir[6]) ? 'checked' : ''}}> Pikiran magis
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="pikir7" {{isset($pikir[7]) ? 'checked' : ''}}> Waham agama
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="pikir8" {{isset($pikir[8]) ? 'checked' : ''}}> Waham somatik
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="pikir9" {{isset($pikir[9]) ? 'checked' : ''}}> Waham besar
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="pikir10" {{isset($pikir[10]) ? 'checked' : ''}}> Waham curiga
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="pikir11" {{isset($pikir[11]) ? 'checked' : ''}}> Waham nihilistik
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="pikir12" {{isset($pikir[12]) ? 'checked' : ''}}> Sisip pikir
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="pikir13" {{isset($pikir[13]) ? 'checked' : ''}}> Siar pikir
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="pikir14" {{isset($pikir[14]) ? 'checked' : ''}}> Kontrol pikir
                      </label>
                    </div>
                    <div class="col-lg-2">
                      <label class="checkbox-inline">
                        <input type="checkbox" disabled name="pikir15" {{isset($pikir[15]) ? 'checked' : ''}}> Tidak terkaji
                      </label>
                    </div>
                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alam Perasaan</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="perasaan1" {{isset($perasaan[1]) ? 'checked' : ''}}> Sedih
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="perasaan2" {{isset($perasaan[2]) ? 'checked' : ''}}> Ketakutan
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="perasaan3" {{isset($perasaan[3]) ? 'checked' : ''}}> Putus asa
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="perasaan4" {{isset($perasaan[4]) ? 'checked' : ''}}> Khawatir
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="perasaan5" {{isset($perasaan[5]) ? 'checked' : ''}}> Gembira berlebihan
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="perasaan6" {{isset($perasaan[6]) ? 'checked' : ''}}> Isyarat/Percobaan bunuh diri
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="perasaan7" {{isset($perasaan[7]) ? 'checked' : ''}}> Sesuai
                    </label>
                  </div>
                </div>

                <div class="form-group" id="status_fungsional">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Fungsional</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled id="status_fungsional_1" value="Mandiri" name="status_fungsional" {{$status_fungsional == 'Mandiri' ? 'checked' : ''}}>
                        Mandiri
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled id="status_fungsional_2" value="Perlu Bantuan" name="status_fungsional" {{$status_fungsional == 'Perlu Bantuan' ? 'checked' : ''}}>
                        Perlu Bantuan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled id="status_fungsional_3" value="Ketergantungan Total" name="status_fungsional" {{$status_fungsional == 'Ketergantungan Total' ? 'checked' : ''}}>
                        Ketergantungan Total
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perlu Bantuan</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="perlu_bantuan" id="perlu_bantuan" {{$status_fungsional != 'Perlu Bantuan' ? 'disabled' : ''}} value="{{$status_fungsional == 'Perlu Bantuan' ? $perlu_bantuan : ''}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Dilaporkan ke dokter pukul</label>
                  <div class="col-sm-2">
                    <input type="time" disabled class="form-control" name="waktu_laporan" value="{{$waktu_laporan}}">
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
                    <input type="text" disabled class="form-control" name="td" value="{{$td}}">
                  </div>
                  <label class="col-sm-1 control-label">TB</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="tb" value="{{$tb}}">
                  </div>
                  <label class="col-sm-1 control-label">Nadi</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="nadi" value="{{$nadi}}">
                  </div>
                  <label class="col-sm-1 control-label">BB</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="bb" value="{{$bb}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pernafasan</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="pernafasan" value="{{$pernafasan}}">
                  </div>
                  <label class="col-sm-1 control-label">Golongan Darah</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="golongan_darah" value="{{$golongan_darah}}">
                  </div>
                  <label class="col-sm-1 control-label">Suhu</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="suhu" value="{{$suhu}}">
                  </div>
                </div>

                <div class="col-lg-2"></div><h5>Berdasarkan Malnutrition Universal Screening Tool (MUST)</h5>
                <div class="form-group" id="must_1_form">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah pasien mengalami penurunan BB yang tidak diinginkan dalam 6 bulan terakhir?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="must_1" id="must_1_1" value="0" {{$must_1 == 0 ? 'checked' : ''}}>
                        Tidak ada penurunan berat badan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="must_1" id="must_1_2" value="2" {{$must_1 == 2 ? 'checked' : ''}}>
                        Tidak yakin/ tidak tahu/ terasa baju longgar 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="must_1" id="must_1_3" value="3" {{$must_1 == 3 ? 'checked' : ''}}>
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
                        <input type="radio" disabled name="must_2" value="0" {{$must_2 == 0 ? 'checked' : ''}}>
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="must_2" value="1" {{$must_2 == 1 ? 'checked' : ''}}>
                        Ya 
                      </label>
                    </div>
                  </div>

                  <label class="control-label col-lg-3" for="inputSuccess">Pasien dengan diagnosis khusus?</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="must_3" id="must_3_2" value="0" {{$must_3 == 0 ? 'checked' : ''}}>
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="must_3" id="must_3_1" value="1" {{$must_3 == 1 ? 'checked' : ''}}>
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
                        <input type="radio" disabled name="sk_1" value="0" {{$sk_1 == 0 ? 'checked' : ''}}>
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="sk_1" value="1" {{$sk_1 == 1 ? 'checked' : ''}}>
                        Ya 
                      </label>
                    </div>
                  </div>

                  <label class="control-label col-lg-3" for="inputSuccess">Apakah terdapat penurunan BB selama satu bulan terakhir? Berdasarkan penilaian objektif data BB bila ada ATAU penilaian subjektif orangtua pasien ATAU untuk bayi < 1 tahun : BB tidak naik selama 3 bulan terakhi?r</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="sk_2" value="0" {{$sk_2 == 0 ? 'checked' : ''}}>
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="sk_2" value="1" {{$sk_2 == 1 ? 'checked' : ''}}>
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
                        <input type="radio" disabled name="sk_3" value="0" {{$sk_3 == 0 ? 'checked' : ''}}>
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="sk_3" value="1" {{$sk_3 == 1 ? 'checked' : ''}}>
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
                        <input type="radio" disabled name="sk_4" value="0" {{$sk_4 == 0 ? 'checked' : ''}}>
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="sk_4" value="1" {{$sk_4 == 1 ? 'checked' : ''}}>
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
                        <input type="checkbox" disabled name="penyakit_malnutrisi_1" {{isset($penyakit_malnutrisi[1]) ? 'checked' : ''}}>
                        Diare Kronik (lebih dari 2 minggu)
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_malnutrisi_2" {{isset($penyakit_malnutrisi[2]) ? 'checked' : ''}}>
                        (Tersangka) Penyakit jantung bawaan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_malnutrisi_3" {{isset($penyakit_malnutrisi[3]) ? 'checked' : ''}}>
                        (Tersangka) Infeksi Human Immunodeficiency Virus (HIV)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_malnutrisi_4" {{isset($penyakit_malnutrisi[4]) ? 'checked' : ''}}>
                        (Tersangka) Kanker
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_malnutrisi_5" {{isset($penyakit_malnutrisi[5]) ? 'checked' : ''}}>
                        Penyakit hati kronik
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_malnutrisi_6" {{isset($penyakit_malnutrisi[6]) ? 'checked' : ''}}>
                        Penyakit ginjal kronik
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_malnutrisi_7" {{isset($penyakit_malnutrisi[7]) ? 'checked' : ''}}>
                        TB Paru
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_malnutrisi_8" {{isset($penyakit_malnutrisi[8]) ? 'checked' : ''}}>
                        Luka bakar luas
                      </label>
                    </div>

                  </div>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_malnutrisi_9" {{isset($penyakit_malnutrisi[9]) ? 'checked' : ''}}>
                        Kelainan anatomi daerah mulut yang menyebabkan kesulitan makan (misal:bibir sumbing)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_malnutrisi_10" {{isset($penyakit_malnutrisi[10]) ? 'checked' : ''}}>
                        Trauma
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_malnutrisi_11" {{isset($penyakit_malnutrisi[11]) ? 'checked' : ''}}>
                        Kelainan metabolik bawaan (Inborn Error Metabolism)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_malnutrisi_12" {{isset($penyakit_malnutrisi[12]) ? 'checked' : ''}}>
                        (Tersangka) Infeksi Human Immunodeficiency Virus (HIV)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_malnutrisi_13" {{isset($penyakit_malnutrisi[13]) ? 'checked' : ''}}>
                        Retardasi mental
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_malnutrisi_14" {{isset($penyakit_malnutrisi[14]) ? 'checked' : ''}}>
                        Rencana / paska operasi mayor (misal: laparatomi, tokaratomi)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_malnutrisi_15" {{isset($penyakit_malnutrisi[15]) ? 'checked' : ''}}>
                        Terpasang stoma
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_malnutrisi_16" {{isset($penyakit_malnutrisi[16]) ? 'checked' : ''}}>
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
                        <input type="radio" disabled name="pemberitahuan_fg" id="pemberitahuan_1" value="1" {{$pemberitahuan_fg == 1 ? 'checked' : ''}}>
                        Ya 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="pemberitahuan_fg" id="pemberitahuan_2" value="0" {{$pemberitahuan_fg == 0 ? 'checked' : ''}}>
                        Tidak 
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pukul</label>
                  <div class="col-sm-2">
                    <input type="time" disabled class="form-control" id="waktu_pemberitahuan_fg" name="waktu_pemberitahuan_fg" value="{{$waktu_pemberitahuan_fg}}">
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
                    <select disabled class="form-control m-bot15" name="tingkat">
                      <option {{$tingkat == 1 ? 'selected' : ''}} value="1">Tidak ada nyeri</option>
                      <option {{$tingkat == 2 ? 'selected' : ''}} value="2">Nyeri Kronis</option>
                      <option {{$tingkat == 3 ? 'selected' : ''}} value="3">Nyeri Akut</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Skala Nyeri </label>
                  <div class="col-sm-2">
                    <select disabled name="skala" class="form-control">
                      <option {{$skala == 0 ? 'selected' : ''}} value="0">0</option>
                      <option {{$skala == 1 ? 'selected' : ''}} value="1">1</option>
                      <option {{$skala == 2 ? 'selected' : ''}} value="2">2</option>
                      <option {{$skala == 3 ? 'selected' : ''}} value="3">3</option>
                      <option {{$skala == 4 ? 'selected' : ''}} value="4">4</option>
                      <option {{$skala == 5 ? 'selected' : ''}} value="5">5</option>
                      <option {{$skala == 6 ? 'selected' : ''}} value="6">6</option>
                      <option {{$skala == 7 ? 'selected' : ''}} value="7">7</option>
                      <option {{$skala == 8 ? 'selected' : ''}} value="8">8</option>
                      <option {{$skala == 9 ? 'selected' : ''}} value="9">9</option>
                      <option {{$skala == 10 ? 'selected' : ''}} value="10">10</option>
                    </select>
                  </div>

                  <label class="col-sm-2 control-label">Lokasi Nyeri </label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="lokasi" value="{{$lokasi}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Durasi Nyeri</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="durasi" value="{{$durasi}}">
                  </div>

                  <label class="col-sm-2 control-label">Frekuensi Nyeri</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="frekuensi" value="{{$frekuensi}}">
                  </div>
                </div>

                <div class="form-group" id="form_nyeri_hilang">
                  <label class="control-label col-lg-2" for="inputSuccess">Nyeri hilang, bila </label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="hilang1" {{isset($hilang[1]) ? 'checked' : ''}}>
                        Minum Obat
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="hilang2" {{isset($hilang[2]) ? 'checked' : ''}}>
                        Mendengar Musik
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="hilang3" {{isset($hilang[3]) ? 'checked' : ''}}>
                        Istirahat
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="hilang4" {{isset($hilang[4]) ? 'checked' : ''}}>
                        Berubah posisi/tidur
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="hilang5" {{isset($hilang[5]) ? 'checked' : ''}}>
                        Lain-lain
                      </label>
                    </div>
                  </div>
                </div>
                @if(isset($hilang[5]))
                <div class="form-group" id="field_nyeri_hilang">
                  <label class="col-sm-2 control-label">Sebutkan </label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="nyeri_hilang_input_text" value="{{$nyeri_hilang_input_text}}">
                  </div>
                </div>
                @endif

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Diberitahukan ke dokter?</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="pemberitahuan_ny" value="1" {{$pemberitahuan_ny == 1 ? 'checked' : ''}}>
                        Ya 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="pemberitahuan_ny" value="0" {{$pemberitahuan_ny == 0 ? 'checked' : ''}}>
                        Tidak 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Diberitahukan ke dokter pukul</label>
                  <div class="col-sm-2">
                    <input type="time" disabled class="form-control" name="waktu_pemberitahuan_ny" value="{{$waktu_pemberitahuan_ny}}">
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
                        <input type="radio" disabled name="jenis_resiko_jatuh" value="humpty_dumpty" {{$jenis_resiko_jatuh == 'humpty_dumpty' ? 'checked' : ''}}>
                        HUMPTY DUMPTY (Anak-anak) 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="jenis_resiko_jatuh" value="morse" {{$jenis_resiko_jatuh == 'morse' ? 'checked' : ''}}>
                        MORSE (Dewasa) 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="jenis_resiko_jatuh" value="edmunson" {{$jenis_resiko_jatuh == 'edmunson' ? 'checked' : ''}}>
                        EDMUNSON (Jiwa) 
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <div id="place_for_resiko_jatuh"></div>
            @if($jenis_resiko_jatuh == 'humpty_dumpty')
              <section class="panel hidden_panel" id="hidden_panel">
                <header class="panel-heading">
                  HUMPTY DUMPTY (Anak-anak)
                </header>
                <div class="panel-body">
                  <div class="col-lg-2"></div><h4>HUMPTY DUMPTY (Anak-anak) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">USIA</label>
                    <div class="col-lg-2">
                      <select disabled class="form-control m-bot15" name="usia">
                        <option></option>
                        <option {{$usia == 1 ? 'selected' : ''}} value="1">Dibawah 3 tahun </option>
                        <option {{$usia == 2 ? 'selected' : ''}} value="2">3 – 7 tahun </option>
                        <option {{$usia == 3 ? 'selected' : ''}} value="3">7 – 13 tahun </option>
                        <option {{$usia == 4 ? 'selected' : ''}} value="4">> 13 tahun </option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="diagnosis_hd">
                        <option></option>
                        <option {{$diagnosis_hd == 1 ? 'selected' : ''}} value="1">Kelainan Neurologi </option>
                        <option {{$diagnosis_hd == 2 ? 'selected' : ''}} value="2">Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)</option>
                        <option {{$diagnosis_hd == 3 ? 'selected' : ''}} value="3">Kelainan psikis / prilaku</option>
                        <option {{$diagnosis_hd == 4 ? 'selected' : ''}} value="4">Diagnosis lain</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">GANGGUAN KOGNITIF</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="gangguan_kognitif">
                        <option></option>
                        <option {{$gangguan_kognitif == 1 ? 'selected' : ''}} value="1">Tidak sadar terhadap keterbatasan (gangguan kesadaran, retardasi mental</option>
                        <option {{$gangguan_kognitif == 2 ? 'selected' : ''}} value="2">Lupa keterbatasan (anak yang hiperaktif)</option>
                        <option {{$gangguan_kognitif == 3 ? 'selected' : ''}} value="3">Mengetahui kemampuan diri</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">FAKTOR LINGKUNGAN</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="faktor_lingkungan">
                        <option></option>
                        <option {{$faktor_lingkungan == 1 ? 'selected' : ''}} value="1">Riwayat jatuh dari tempat tidur saat bayi</option>
                        <option {{$faktor_lingkungan == 2 ? 'selected' : ''}} value="2">Pasien menggunakan alat bantu atau box meubel</option>
                        <option {{$faktor_lingkungan == 3 ? 'selected' : ''}} value="3">Pasien berada di tempat tidur</option>
                        <option {{$faktor_lingkungan == 4 ? 'selected' : ''}} value="4">Di luar ruang rawat</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RESPON TERHADAP OPERASI/OBAT PENENANG/EFEK ANASTESI</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="waktu_respon_obat">
                        <option></option>
                        <option {{$waktu_respon_obat == 1 ? 'selected' : ''}} value="1">Dalam 24 Jam</option>
                        <option {{$waktu_respon_obat == 2 ? 'selected' : ''}} value="2">Dalam 48 Jam</option>
                        <option {{$waktu_respon_obat == 3 ? 'selected' : ''}} value="3">> 48 Jam</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">PENGGUNAAN OBAT</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="penggunaan_obat">
                        <option></option>
                        <option {{$penggunaan_obat == 1 ? 'selected' : ''}} value="1">Bermacam-macam obat yang digunakan : obat sedatif (kecuali pasien ICU yang menggunakan sedasi dan paralisis), Hiptonik Barbitural, Fonotiazin, Antidepresan, Laksansia / Diuretikan, Narkotik</option>
                        <option {{$penggunaan_obat == 2 ? 'selected' : ''}} value="2">Salah satu Pengobatan di atas</option>
                        <option {{$penggunaan_obat == 3 ? 'selected' : ''}} value="3">Pengobatan lain</option>
                      </select>
                    </div>
                  </div>
                </div>
              </section>
            @elseif($jenis_resiko_jatuh == 'morse')
              <section class="panel hidden_panel" id="hidden_panel">
                <header class="panel-heading">
                  MORSE (Dewasa)
                </header>
                <div class="panel-body">
                  <div class="col-lg-2"></div><h4>MORSE (Dewasa) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                    <div class="col-lg-1">
                      <select disabled class="form-control m-bot15" name="riwayat_jatuh_mrs">
                        <option></option>
                        <option {{$riwayat_jatuh_mrs == 1 ? 'selected' : ''}} value="1">Ya</option>
                        <option {{$riwayat_jatuh_mrs == 2 ? 'selected' : ''}} value="2">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS SEKUNDER</label>
                    <div class="col-lg-1">
                      <select disabled class="form-control m-bot15" name="diagnosis_sekunder">
                        <option></option>
                        <option {{$diagnosis_sekunder == 1 ? 'selected' : ''}} value="1">Ya</option>
                        <option {{$diagnosis_sekunder == 2 ? 'selected' : ''}} value="2">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">ALAT BANTU</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="alat_bantu">
                        <option></option>
                        <option {{$alat_bantu == 1 ? 'selected' : ''}} value="1">Perabot</option>
                        <option {{$alat_bantu == 2 ? 'selected' : ''}} value="2">Tongkat/Alat Penopang</option>
                        <option {{$alat_bantu == 3 ? 'selected' : ''}} value="3">Tidak ada/Kursi Roda/Perawat/Tirah Baring</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">TERPASANG INFUS</label>
                    <div class="col-lg-1">
                      <select disabled class="form-control m-bot15" name="terpasang_infus">
                        <option></option>
                        <option {{$terpasang_infus == 1 ? 'selected' : ''}} value="1">Ya</option>
                        <option {{$terpasang_infus == 2 ? 'selected' : ''}} value="2">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">GAYA BERJALAN</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="gaya_berjalan">
                        <option></option>
                        <option {{$gaya_berjalan == 1 ? 'selected' : ''}} value="1">Terganggu</option>
                        <option {{$gaya_berjalan == 2 ? 'selected' : ''}} value="2">Lemah</option>
                        <option {{$gaya_berjalan == 3 ? 'selected' : ''}} value="3">Normal/Tirah Baring/Imobilisasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="status_mental_mrs">
                        <option></option>
                        <option {{$status_mental_mrs == 1 ? 'selected' : ''}} value="1">Sering lupa akan keterbatasan yang dimiliki</option>
                        <option {{$status_mental_mrs == 2 ? 'selected' : ''}} value="2">Orientasi baik terhadap kemampuan diri sendiri</option>
                      </select>
                    </div>
                  </div>
                </div>
              </section>
            @elseif($jenis_resiko_jatuh == 'edmunson')
              <section class="panel hidden_panel" id="hidden_panel">
                <header class="panel-heading">
                  EDMUNSON (Jiwa)
                </header>
                <div class="panel-body">
                  <div class="col-lg-2"></div><h4>EDMUNSON (Jiwa) </h4>
                  <div class="form-group"></div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">STATUS MENTAL</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="status_mental_edm">
                        <option></option>
                        <option {{$status_mental_edm == 1 ? 'selected' : ''}} value="1">Kesadaran baik/orientasi baik setiap saat </option>
                        <option {{$status_mental_edm == 2 ? 'selected' : ''}} value="2">Agitasi/Ansietas</option>
                        <option {{$status_mental_edm == 3 ? 'selected' : ''}} value="3">Kadang-kadang bingung</option>
                        <option {{$status_mental_edm == 4 ? 'selected' : ''}} value="4">Bingung/Disorientasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSIS</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="diagnosis_edm">
                        <option></option>
                        <option {{$diagnosis_edm == 1 ? 'selected' : ''}} value="1">Kelainan Neurologi </option>
                        <option {{$diagnosis_edm == 2 ? 'selected' : ''}} value="2">Perubahan dalam oksigenasi(masalah saluran nafas, dehidtrasi, anemia, anoreksia, sinkop / sakit kepala, dll)</option>
                        <option {{$diagnosis_edm == 3 ? 'selected' : ''}} value="3">Kelainan psikis / prilaku</option>
                        <option {{$diagnosis_edm == 4 ? 'selected' : ''}} value="4">Diagnosis lain</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">ELIMINASI</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="eliminasi">
                        <option></option>
                        <option {{$eliminasi == 1 ? 'selected' : ''}} value="1">Mandiri dan mampi mengontrol BAB/BAK</option>
                        <option {{$eliminasi == 2 ? 'selected' : ''}} value="2">Dower Catheter/Colostomy</option>
                        <option {{$eliminasi == 3 ? 'selected' : ''}} value="3">Eliminasi dengan bantuan</option>
                        <option {{$eliminasi == 4 ? 'selected' : ''}} value="4">Gangguan eliminasi (Inkontinensia/Nokturia/Frekwensi)</option>
                        <option {{$eliminasi == 5 ? 'selected' : ''}} value="5">Inkontinesia tetapi mampu untuk mobilisasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">PENGOBATAN</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="pengobatan">
                        <option></option>
                        <option {{$pengobatan == 1 ? 'selected' : ''}} value="1">Tanpa obat-obatan</option>
                        <option {{$pengobatan == 2 ? 'selected' : ''}} value="2">Obat-obatan jantung</option>
                        <option {{$pengobatan == 3 ? 'selected' : ''}} value="3">Obat-obat psikotropika (termasuk Benzodiazepine dan Antidepresan)</option>
                        <option {{$pengobatan == 4 ? 'selected' : ''}} value="4">Mendapat tambahan obat-obatan dan/atau obat-obat PRN (psikiatri, antinyeri) yang diberikan dalam 24 jam terakhir</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">DIAGNOSA</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="diagnosa">
                        <option></option>
                        <option {{$diagnosa == 1 ? 'selected' : ''}} value="1">Bipolar/ Gangguan Schizoaffective</option>
                        <option {{$diagnosa == 2 ? 'selected' : ''}} value="2">Penggunaan Obat-obatan terlarang/ketergantungan alkohol</option>
                        <option {{$diagnosa == 3 ? 'selected' : ''}} value="3">Gangguan Depresi Mayor</option>
                        <option {{$diagnosa == 4 ? 'selected' : ''}} value="4">Dimensia/ Delirium</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">AMBULASI /KESEIMBANGAN </label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="ambulasi">
                        <option></option>
                        <option {{$ambulasi == 1 ? 'selected' : ''}} value="1">Mandiri/Keseimbangan Baik/Immobilisasi</option>
                        <option {{$ambulasi == 2 ? 'selected' : ''}} value="2">Dengan Alat Bantu (Kursi roda, walker,dll)</option>
                        <option {{$ambulasi == 3 ? 'selected' : ''}} value="3">Vertigo/kelemahan</option>
                        <option {{$ambulasi == 4 ? 'selected' : ''}} value="4">Goyah/membutuhkan mantuan dan menyadari kemampuan</option>
                        <option {{$ambulasi == 5 ? 'selected' : ''}} value="5">Goyah tapi lupa keterbatasan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">NUTRISI</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="nutrisi">
                        <option></option>
                        <option {{$nutrisi == 1 ? 'selected' : ''}} value="1">Mengkonsumsi sedikit makanan atau minuman  dalam 24 jam terakhir</option>
                        <option {{$nutrisi == 2 ? 'selected' : ''}} value="2">Tidak ada kelainan dengan nafsu makan</option>
                        <option {{$nutrisi == 3 ? 'selected' : ''}} value="3">Gangguan pola tidur yang dilaporkan oleh pasien, keluarga atau petugas</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">RIWAYAT JATUH</label>
                    <div class="col-lg-7">
                      <select disabled class="form-control m-bot15" name="riwayat_jatuh_edm">
                        <option></option>
                        <option {{$riwayat_jatuh_edm == 1 ? 'selected' : ''}} value="1">Tidak ada riwayat jatuh</option>
                        <option {{$riwayat_jatuh_edm == 2 ? 'selected' : ''}} value="2">Ada riwayat jatuh dalam 3 bulan terakhir</option>
                      </select>
                    </div>
                  </div>
                </div>
              </section>
            @endif


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
                        <input type="checkbox" disabled name="umum_1" {{isset($umum[1]) ? 'checked' : ''}}>
                        Aktual/ Resiko bersihan jalan nafas tidak efektif
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="umum_2" {{isset($umum[2]) ? 'checked' : ''}}>
                        Aktual/ Resiko aspirasi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="umum_3" {{isset($umum[3]) ? 'checked' : ''}}>
                        Aktual/ Resiko pola nafas tidak efektif
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="umum_4" {{isset($umum[4]) ? 'checked' : ''}}>
                        Aktual/ Resiko gangguan pertukaran gas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="umum_5" {{isset($umum[5]) ? 'checked' : ''}}>
                        Aktual/ penurunan curah jantung
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="umum_6" {{isset($umum[6]) ? 'checked' : ''}}>
                        Aktual/ Resiko gangguan perfusi jaringan celebral/perifer
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="umum_7" {{isset($umum[7]) ? 'checked' : ''}}>
                        Aktual/ Resiko gangguan keseimbangan cairan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="umum_8" {{isset($umum[8]) ? 'checked' : ''}}>
                        Aktual/ Resiko gangguan keseimbangan kontinuitas jaringan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="umum_9" {{isset($umum[9]) ? 'checked' : ''}}>
                        Aktual/ Resiko infeksi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="umum_10" {{isset($umum[10]) ? 'checked' : ''}}>
                        Resiko cedera / jatuh
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="umum_11" {{isset($umum[11]) ? 'checked' : ''}}>
                        Hypertermi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="umum_12" {{isset($umum[12]) ? 'checked' : ''}}>
                        Nyeri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="umum_13" {{isset($umum[13]) ? 'checked' : ''}}>
                        Gangguan kebutuhan nutrisi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="umum_14" {{isset($umum[14]) ? 'checked' : ''}}>
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="umum_lainnya" value="{{$umum_lainnya}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Diagnosa keperawatan jiwa</label>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="jiwa_1" {{isset($jiwa[1]) ? 'checked' : ''}}>
                        Gangguan persepsi sensori : halusinasi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="jiwa_2" {{isset($jiwa[2]) ? 'checked' : ''}}>
                        Perilaku kekerasan
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="jiwa_3" {{isset($jiwa[3]) ? 'checked' : ''}}>
                        Isolasi sosial
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="jiwa_4" {{isset($jiwa[4]) ? 'checked' : ''}}>
                        Gangguan konsep diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="jiwa_5" {{isset($jiwa[5]) ? 'checked' : ''}}>
                        Resiko bunuh diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="jiwa_6" {{isset($jiwa[6]) ? 'checked' : ''}}>
                        Intoleransi aktifitas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="jiwa_7" {{isset($jiwa[7]) ? 'checked' : ''}}>
                        Waham
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="jiwa_8" {{isset($jiwa[8]) ? 'checked' : ''}}>
                        Defisit perawatan diri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="jiwa_9" {{isset($jiwa[9]) ? 'checked' : ''}}>
                        Kerusakan komunitas verbal
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="jiwa_10" {{isset($jiwa[10]) ? 'checked' : ''}}>
                        Koping individu tidak efektif
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="jiwa_11" {{isset($jiwa[11]) ? 'checked' : ''}}>
                        Aktual/Resiko Cemas/Takut
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="jiwa_12" {{isset($jiwa[12]) ? 'checked' : ''}}>
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="jiwa_lainnya" value="{{$jiwa_lainnya}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Obat Parental </label>
                  <div class="col-sm-5">
                    <input type="text" disabled class="form-control" name="obat_parental" value="{{$obat_parental}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">EKG </label>
                  <div class="col-sm-5">
                    <input type="text" disabled class="form-control" name="ekg" value="{{$ekg}}">
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
                    <textarea name="implementasi" class="form-control" rows="8" cols="114" style="resize: none;" readonly>{{$implementasi}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Evaluasi </label>
                  <div class="col-sm-8">
                    <textarea name="evaluasi" class="form-control" rows="8" cols="114" style="resize: none;" readonly>{{$evaluasi}}</textarea>
                  </div>
                </div>                
              </div>
            </section>
          </form>
        </div>
      </div>
    </section>

    @include('layouts.tailscript')
    
  </body>


  <html>