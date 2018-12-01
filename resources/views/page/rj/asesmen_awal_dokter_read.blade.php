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

          <form class="form-horizontal " method="post" action="rj_asesmen_awal_dokter_edit">
            <section class="panel">
              <header class="panel-heading">
                Data Medis
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Wawancara dengan </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="pewawancara" value="{{$pewawancara}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keluhan Utama </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="keluhan_utama" value="{{$keluhan_utama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Penyakit Sekarang </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="riwayat_penyakit_sekarang" value="{{$riwayat_penyakit_sekarang}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Penyakit Dahulu (gangguan kejiwaan) </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="riwayat_penyakit_dahulu" value="{{$riwayat_penyakit_dahulu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Riwayat Napza </label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="riwayat_napza" value="0" {{$riwayat_napza == 0 ? 'checked' : ''}}>
                        Tidak ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="riwayat_napza" value="1" {{$riwayat_napza == 1 ? 'checked' : ''}}>
                        Ada
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lama Pemakaian</label>
                  <div class="col-sm-3">
                    <input type="text" disabled class="form-control" name="lama_pemakaian" value="{{$lama_pemakaian}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Cara Pemakaian</label>
                  <div class="col-sm-6">
                    <input type="text" disabled class="form-control" name="cara_pemakaian" value="{{$cara_pemakaian}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Latar Belakang Pemakaian</label>
                  <div class="col-sm-6">
                    <input type="text" disabled class="form-control" name="latar_belakang_pemakaian" value="{{$latar_belakang_pemakaian}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Pendidikan </label>
                  <div class="col-sm-6">
                    <input type="text" disabled class="form-control" name="riwayat_pendidikan" value="{{$riwayat_pendidikan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Pekerjaan </label>
                  <div class="col-sm-6">
                    <input type="text" disabled class="form-control" name="riwayat_pekerjaan" value="{{$riwayat_pekerjaan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Perkawinan </label>
                  <div class="col-sm-6">
                    <input type="text" disabled class="form-control" name="riwayat_perkawinan" value="{{$riwayat_perkawinan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Riwayat Penyakit Lainnya</label>
                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_1" {{isset($riwayat_penyakit_lainnya[1]) ? 'checked' : ''}}>
                        Hipertensi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_2" {{isset($riwayat_penyakit_lainnya[2]) ? 'checked' : ''}}>
                        Liver
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_3" {{isset($riwayat_penyakit_lainnya[3]) ? 'checked' : ''}}>
                        Diabetes
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_4" {{isset($riwayat_penyakit_lainnya[4]) ? 'checked' : ''}}>
                        Cancer
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_5" {{isset($riwayat_penyakit_lainnya[5]) ? 'checked' : ''}}>
                        Jantung
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_6" {{isset($riwayat_penyakit_lainnya[6]) ? 'checked' : ''}}>
                        TBC
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_7" {{isset($riwayat_penyakit_lainnya[7]) ? 'checked' : ''}}>
                        Stroke
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_8" {{isset($riwayat_penyakit_lainnya[8]) ? 'checked' : ''}}>
                        Glaukoma
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_9" {{isset($riwayat_penyakit_lainnya[9]) ? 'checked' : ''}}>
                        Dialysis
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_10" {{isset($riwayat_penyakit_lainnya[10]) ? 'checked' : ''}}>
                        STD
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_11" {{isset($riwayat_penyakit_lainnya[11]) ? 'checked' : ''}}>
                        Asthma
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_12" {{isset($riwayat_penyakit_lainnya[12]) ? 'checked' : ''}}>
                        Perdarahan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_13" {{isset($riwayat_penyakit_lainnya[13]) ? 'checked' : ''}}>
                        Kejang
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="penyakit_14" {{isset($riwayat_penyakit_lainnya[14]) ? 'checked' : ''}}>
                        Lainnya 
                      </label>
                    </div>

                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Riwayat Operasi</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="riwayat_operasi" value="0" {{$riwayat_operasi == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="riwayat_operasi" value="1" {{$riwayat_operasi == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis </label>
                  <div class="col-sm-6">
                    <input type="text" disabled class="form-control" name="jenis_operasi" value="{{$jenis_operasi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kapan </label>
                  <div class="col-sm-6">
                    <input type="text" disabled class="form-control" name="waktu_operasi" value="{{$waktu_operasi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Riwayat transfusi </label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="riwayat_tranfusi" value="0" {{$riwayat_tranfusi == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="riwayat_tranfusi" value="1" {{$riwayat_tranfusi == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Reaksi Transfusi </label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="reaksi_tranfusi" value="0" {{$reaksi_tranfusi == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="reaksi_tranfusi" value="1" {{$reaksi_tranfusi == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Reaksi yang timbul </label>
                  <div class="col-sm-6">
                    <input type="text" disabled class="form-control" name="reaksi_timbul" value="{{$reaksi_timbul}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Penyakit dalam keluarga  </label>
                  <div class="col-sm-6">
                    <input type="text" disabled class="form-control" name="riwayat_penyakit_dalam_keluarga" value="{{$riwayat_penyakit_dalam_keluarga}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Pengobatan </label>
                  <div class="col-sm-6">
                    <input type="text" disabled class="form-control" name="riwayat_pengobatan" value="{{$riwayat_pengobatan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Alergi </label>
                  <div class="col-sm-6">
                    <input type="text" disabled class="form-control" name="riwayat_alergi" value="{{$riwayat_alergi}}">
                  </div>
                </div>

              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Obat yang Diminum Saat Ini
              </header>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 3%">No.</th>
                    <th style="width: 38%">Nama Obat</th>
                    <th style="width: 11%">Dibawa</th>
                    <th style="width: 7%">Jumlah</th>
                    <th style="width: 11%">Tidak Dibawa</th>
                    <th style="width: 27%">Keterangan</th>
                    <th style="width: 3%">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $idx = 1;
                  @endphp
                  @foreach($obat as $o)
                  <tr id="obat_{{$o['id_data']}}">
                    <td>{{$idx++}}</td>
                    <td><input type="text" disabled class="form-control" value="{{$o['nama_obat']}}" name="nama_obat_{{$o['id_data']}}"></td>
                    <td><input type="text" disabled class="form-control" value="{{$o['dibawa']}}" name="dibawa_{{$o['id_data']}}"></td>
                    <td><input type="text" disabled class="form-control" value="{{$o['jumlah']}}" name="jumlah_{{$o['id_data']}}"></td>
                    <td><input type="text" disabled class="form-control" value="{{$o['tidak_dibawa']}}" name="tidak_dibawa_{{$o['id_data']}}"></td>
                    <td><input type="text" disabled class="form-control" value="{{$o['keterangan']}}" name="keterangan_{{$o['id_data']}}"></td>
                    <td>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Pemeriksaan Fisik
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kepala</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="kepala" value="{{$kepala}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Leher</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="leher" value="{{$leher}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dada</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="dada" value="{{$dada}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jantung</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="jantung" value="{{$jantung}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Paru-paru</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="paru" value="{{$paru}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perut</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="perut" value="{{$perut}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Anggota Gerak</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="anggota_gerak" value="{{$anggota_gerak}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Status Psikiatri
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h4>Keadaan Umum</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Penampilan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="penampilan" value="{{$penampilan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kesadaran</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="kesadaran_psikiatri" value="{{$kesadaran_psikiatri}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Orientasi</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="orientasi" value="{{$orientasi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sikap & Tingkah laku </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="sikap" value="{{$sikap}}">
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Gangguan Berpikir</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="keterangan" value="{{$keterangan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Proses Pikir </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="proses_pikir" value="{{$proses_pikir}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bentuk Pikir </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="bentuk_pikir" value="{{$bentuk_pikir}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Isi Pikir </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="isi_pikir" value="{{$isi_pikir}}">
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Alam Perasaan</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mood </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="mood" value="{{$mood}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Afek </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="afek" value="{{$afek}}">
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Persepsi</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Halusinasi </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="halusinasi" value="{{$halusinasi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ilusi </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="ilusi" value="{{$ilusi}}">
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Fungsi Intelektual</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Daya Konsentrasi  </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="konsentrasi" value="{{$konsentrasi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Daya Ingat  </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="ingat" value="{{$ingat}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pikiran Abstrak  </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="abstrak" value="{{$abstrak}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pengendalian Impuls  </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="impuls" value="{{$impuls}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Daya Nilai  </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="nilai" value="{{$nilai}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tilikan/Insight  </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="tilikan" value="{{$tilikan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Taraf dapat dipercaya  </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="dipercaya" value="{{$dipercaya}}">
                  </div>
                </div>
              </div>
            </section>


            <section class="panel">
              <header class="panel-heading">
                Status Neurologi
              </header>
              <div class="panel-body">

                <div class="col-lg-2"></div><h4>Pemeriksaan Khusus</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Meningeal Sight   </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="meningeal" value="{{$meningeal}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hasil Pemeriksaan Nervus Cranialis</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="nervus" value="{{$nervus}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pemeriksaan Sistem Motorik</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="motorik" value="{{$motorik}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Koordinasi Gait Keseimbangan (fungsi cerebellum)</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="cerebellum" value="{{$cerebellum}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Vegetatif </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="vegetatif" value="{{$vegetatif}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Instrumen Penilaian
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">P4. GADUH GELISAH</label>
                  <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="gaduh_gelisah" value="1" {{$gaduh_gelisah == 1 ? 'checked' : ''}}>
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="gaduh_gelisah" value="2" {{$gaduh_gelisah == 2 ? 'checked' : ''}}>
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="gaduh_gelisah" value="3" {{$gaduh_gelisah == 3 ? 'checked' : ''}}>
                        Ringan – sedikit agitatif, waspada berlebihan, atau sedikit mudah terangsang selama wawancara, tanpa episode yang jelas dari gaduh gelisah atau labilitas alam perasaan yang mecolok. Pembicaraan mungkin sedikit mendesah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="gaduh_gelisah" value="4" {{$gaduh_gelisah == 4 ? 'checked' : ''}}>
                        Sedang – agitasi atau mudah terangsang yang jelas, ledakan-ledakan episodik
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="gaduh_gelisah" value="5" {{$gaduh_gelisah == 5 ? 'checked' : ''}}>
                        Agak berat – hiperaktivitas yang bermakna, sering terjadi ledakan-leadakan atau aktivitas mototrik, sulit untuk tetap duduk
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="gaduh_gelisah" value="6" {{$gaduh_gelisah == 6 ? 'checked' : ''}}>
                        Berat – gaduh gelisah yang mencolok mempengaruhi fungsi sehari-hari seperti makan  dan tidur
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="gaduh_gelisah" value="7" {{$gaduh_gelisah == 7 ? 'checked' : ''}}>
                        Sangat berat – gaduh gelisah yang mencolok, mempengaruhi kegiatan makan dan tidur, serta jelas tidak memungkinkan interaksi interpersonal. Percepatan dan pembicaraan dan aktivitas motorik dapat menimbulkan inkoherensi dan kelelahan
                      </label>
                    </div>
                  </div>
                  <label class="control-label col-lg-2" for="inputSuccess">G8. KETIDAKOPERATIFAN</label>
                  <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="ketidakoperatifan" value="1" {{$ketidakoperatifan == 1 ? 'checked' : ''}}>
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="ketidakoperatifan" value="2" {{$ketidakoperatifan == 2 ? 'checked' : ''}}>
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="ketidakoperatifan" value="3" {{$ketidakoperatifan == 3 ? 'checked' : ''}}>
                        Ringan – patuh tapi disertai sikap marah tidak sabar atau sarkasme, mungkin ada penolakan yang tidak mengganggu terhadap penyelidikan yang sensitif selama wawancara
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="ketidakoperatifan" value="4" {{$ketidakoperatifan == 4 ? 'checked' : ''}}>
                        Sedang – kadang-kadang terdapat penolakan langsung untuk patuh, memproyeksikan hostilitas, defensif atau bersifat negatif tetapi biasanya masih dapat diatasi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="ketidakoperatifan" value="5" {{$ketidakoperatifan == 5 ? 'checked' : ''}}>
                        Agak berat – seringkali tidak patuh, jelas defensif atau iritabilitas terhadap pewawancara dan mungkin tidak bersedia menghadapi banyak pertanyaan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="ketidakoperatifan" value="6" {{$ketidakoperatifan == 6 ? 'checked' : ''}}>
                        Berat – sangat tidak kooperatif, negativistik dan suka membangkang. Menolak untuk patuh, tidak mau memulai atau mengikuti wawancara sepenuhnya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="ketidakoperatifan" value="7" {{$ketidakoperatifan == 7 ? 'checked' : ''}}>
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
                        <input type="radio" disabled name="permusuhan" value="1" {{$permusuhan == 1 ? 'checked' : ''}}>
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="permusuhan" value="2" {{$permusuhan == 2 ? 'checked' : ''}}>
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="permusuhan" value="3" {{$permusuhan == 3 ? 'checked' : ''}}>
                        Ringan – melampiaskan kemarahan secara tidak langsung atau ditahan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="permusuhan" value="4" {{$permusuhan == 4 ? 'checked' : ''}}>
                        Sedang – sikap bermusuhan yang nyata
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="permusuhan" value="5" {{$permusuhan == 5 ? 'checked' : ''}}>
                        Agak berat – pasien sangat mudah marah dan kadang-kadang memaki dengan kata-kata kasar atau mengancam
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="permusuhan" value="6" {{$permusuhan == 6 ? 'checked' : ''}}>
                        Berat – tidak kooperatif dan mencaci maki dengan kasar atau mengancam, dapat beringas dan merusak tetapi tidak menyerang orang lain secara fisik
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="permusuhan" value="7" {{$permusuhan == 7 ? 'checked' : ''}}>
                        Sangat berat – kemarahan yang hebat berakibat sangat tidak kooperatif, menghalangi interaksi, atau secara episodik melakukan penyerangan fisik terhadap orang lain
                      </label>
                    </div>
                  </div>
                  <label class="control-label col-lg-2" for="inputSuccess">G14. PENGENDALIAN IMPULS</label>
                  <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="pengendalian_impuls" value="1" {{$pengendalian_impuls == 1 ? 'checked' : ''}}>
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="pengendalian_impuls" value="2" {{$pengendalian_impuls == 2 ? 'checked' : ''}}>
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="pengendalian_impuls" value="3" {{$pengendalian_impuls == 3 ? 'checked' : ''}}>
                        Ringan – cenderung mudah marah dan frustasi bila menghadapi stres atau pemuasannya ditolak tetapi jarang bertindak impulsif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="pengendalian_impuls" value="4" {{$pengendalian_impuls == 4 ? 'checked' : ''}}>
                        Sedang – dengan provokasi yang minimal, pasien menjadi marah dan mencaci maki. Mungkin sekali-kali mengancam, merusak atau terdapat satu atau dua episode yang melibatkan konfrontasi fisik atau perselisihan ringan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="pengendalian_impuls" value="5" {{$pengendalian_impuls == 5 ? 'checked' : ''}}>
                        Agak berat – memperlihatkan episode impulsif yang berulang, termasuk mencaci maki, merusak harta benda atau ancaman fisik. Mungkin ada satu atau dua episode yang melibatkan serangn serius
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="pengendalian_impuls" value="6" {{$pengendalian_impuls == 6 ? 'checked' : ''}}>
                        Berat – agresif secara impulsif, mengancam, menuntut dan merusak, tanpa pertimbangan terhadap konsekuensinya. Menunjukkan perilaku menyerang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="pengendalian_impuls" value="7" {{$pengendalian_impuls == 7 ? 'checked' : ''}}>
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
                        <input type="radio" disabled name="ketegangan" value="1" {{$ketegangan == 1 ? 'checked' : ''}}>
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="ketegangan" value="2" {{$ketegangan == 2 ? 'checked' : ''}}>
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="ketegangan" value="3" {{$ketegangan == 3 ? 'checked' : ''}}>
                        Ringan – postur dan gerakan-gerakan menunjukkan kekhawatiran ringan, ketidaktenangan yang sekali-kali, perubahan posisi, atau tremor tangan yang halus dan cepat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="ketegangan" value="4" {{$ketegangan == 4 ? 'checked' : ''}}>
                        Sedang – nyata-nyata gelisah seperti perilaku tidak tenang, tremor tangan yang nyata, keringat berlebihan, atau manerisme karena gugup
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="ketegangan" value="5" {{$ketegangan == 5 ? 'checked' : ''}}>
                        Agak berat – ketegangan yang berat, manifestasi seperti gemetar karena gugup, keringat sangat berlebihan dan ketidaktenangan, perilaku selama wawancara tidak terpengaruh secara bermakna
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="ketegangan" value="6" {{$ketegangan == 6 ? 'checked' : ''}}>
                        Berat – Ketegangan berat, taraf interaksi terganggu. Misalnya terus-menerus bergerak, tidak dapat tetap duduk, hiperventilasi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="ketegangan" value="7" {{$ketegangan == 7 ? 'checked' : ''}}>
                        Sangat berat – ketegangan sangat mencolok, tanda panik atau percepatan gerakan motorik kaar, ketidak mampuan tetap duduk > 1 menit yang menyebabkan percakapan tidak mungkin diteruskan
                      </label>
                    </div>
                  </div>

                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Bangsal   </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="bangsal" value="{{$bangsal}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Pemeriksaan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pemeriksaan" value="{{$tanggal_pemeriksaan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Panss Ec</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="panss_ec" value="{{$panss_ec}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Gaff</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="gaff" value="{{$gaff}}">
                  </div>
                </div>
              </div>
            </section>


            <section class="panel">
              <header class="panel-heading">
                Diagnosis dan Tindakan Terapi
              </header>
              <div class="panel-body">
                <div class="col-lg-2"></div><h4>Diagnosis Psikiatri</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis 1</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="axis1" value="{{$axis1}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis 2</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="axis2" value="{{$axis2}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Axies 3</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="axis3" value="{{$axis3}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis 4</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="axis4" value="{{$axis4}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis 5</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="axis5" value="{{$axis5}}">
                  </div>
                </div>
                <h4>Diagnosis Non Psikiatri</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosis Utama</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="utama" value="{{$utama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosis Sekunder</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="sekunder" value="{{$sekunder}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" disabled class="form-control" name="jam" value="{{$jam}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tindakan Terapi</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="tindakan_terapi" value="{{$tindakan_terapi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Daftar Masalah</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="daftar_masalah" value="{{$daftar_masalah}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Tindak Lanjut
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindak Lanjut</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="tindak_lanjut" value="1" {{$tindak_lanjut == 1 ? 'checked' : ''}}>
                        Pulang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="tindak_lanjut" value="2" {{$tindak_lanjut == 2 ? 'checked' : ''}}>
                        Dirawat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="tindak_lanjut" value="3" {{$tindak_lanjut == 3 ? 'checked' : ''}}>
                        Menolak dirawat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="tindak_lanjut" value="4" {{$tindak_lanjut == 4 ? 'checked' : ''}}>
                        Dirujuk
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Jika pulang</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="perlu_dikontrol" value="0" {{$perlu_dikontrol == 0 ? 'checked' : ''}}>
                        Tidak perlu kontrol
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="perlu_dikontrol" value="1" {{$perlu_dikontrol == 1 ? 'checked' : ''}}>
                        Perlu Kontrol
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perlu kontrol pada tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_kontrol" value="{{$tanggal_kontrol}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dirawat di ruang</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="ruangan" value="{{$ruangan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Indikasi Rawat Inap</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="indikasi_rawat_inap" value="{{$indikasi_rawat_inap}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alasan menolak dirawat</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="alasan_menolak" value="1" {{$alasan_menolak == 1 ? 'checked' : ''}}>
                        Masalah biaya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="alasan_menolak" value="2" {{$alasan_menolak == 2 ? 'checked' : ''}}>
                        Masalah lokasi rumah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="alasan_menolak" value="3" {{$alasan_menolak == 3 ? 'checked' : ''}}>
                        Kondisi pasien
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="alasan_menolak" value="4" {{$alasan_menolak == 4 ? 'checked' : ''}}>
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="alasan_lainnya" value="{{$alasan_lainnya}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dirujuk ke</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="dirujuk_ke" value="{{$dirujuk_ke}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alasan Rujuk</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="alasan_dirujuk" value="1" {{$alasan_dirujuk == 1 ? 'checked' : ''}}>
                        Tempat Penuh
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="alasan_dirujuk" value="2" {{$alasan_dirujuk == 2 ? 'checked' : ''}}>
                        Perlu Fasilitas Lebih
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="alasan_dirujuk" value="3" {{$alasan_dirujuk == 3 ? 'checked' : ''}}>
                        Permintaan Pasien/Keluarga
                      </label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Kondisi Pasien Saat Keluar</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="kesadaran_1" {{isset($kesadaran[1]) ? 'checked' : ''}}> Compos Mentis
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="kesadaran_2" {{isset($kesadaran[2]) ? 'checked' : ''}}> Apatis
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="kesadaran_3" {{isset($kesadaran[3]) ? 'checked' : ''}}> Delirium
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="kesadaran_4" {{isset($kesadaran[4]) ? 'checked' : ''}}> Sopor
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="kesadaran_5" {{isset($kesadaran[5]) ? 'checked' : ''}}> Koma
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="kesadaran_6" {{isset($kesadaran[6]) ? 'checked' : ''}}> GCS
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" disabled name="kesadaran_7" {{isset($kesadaran[7]) ? 'checked' : ''}}> Lain-lain
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="kesadaran_lainnya" value="{{$kesadaran_lainnya}}">
                  </div>
                </div>
                <div class="col-lg-2"></div><h5>Tanda-tanda vital</h5>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tensi</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="tensi" value="{{$tensi}}">
                  </div>

                  <label class="col-sm-2 control-label">Nadi</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="nadi" value="{{$nadi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pernafasan</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="pernafasan" value="{{$pernafasan}}">
                  </div>
                  <label class="col-sm-2 control-label">Suhu</label>
                  <div class="col-sm-1">
                    <input type="text" disabled class="form-control" name="suhu" value="{{$suhu}}">
                  </div>
                </div>
              </div>
            </section>
          </form>
        </div>
      </div>
    </section>

    @include('layouts.tailscript')

    {{-- menambah row inputan --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tambah_form').click(function() {
        var a = document.getElementById('jumlah_form_obat').value;
        a = parseInt(a) + 1;
        var idx = document.getElementById('idx').value;
        idx = parseInt(idx) + 1;
        $('#last_row_obat').before('<tr id="obat_new_'+a+'"> <td>'+idx+'</td> <td><input type="text" disabled class="form-control" name="nama_obat_new_'+a+'"></td> <td><input type="text" disabled class="form-control" name="dibawa_new_'+a+'"></td> <td><input type="text" disabled class="form-control" name="jumlah_new_'+a+'"></td> <td><input type="text" disabled class="form-control" name="tidak_dibawa_new_'+a+'"></td> <td><input type="text" disabled class="form-control" name="keterangan_new_'+a+'"></td> <td> <div class="btn-group"> <div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_new_'+a+'"><i class="icon_close_alt2"></i></button></div> </div> </td> </tr>');
        document.getElementById('jumlah_form_obat').value = a;
        document.getElementById('idx').value = idx;
      });
    });
  </script>

  {{-- menghapus row --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $(document).on('click', '.tombol_hapus', function() {
        var x = $(this).attr('id');
        var nomor = x.substring(13)
        $('#obat_'+nomor).remove();
      });
    });
  </script>

  </body>
  <html>