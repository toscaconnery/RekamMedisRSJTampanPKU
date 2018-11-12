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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL PASIEN RAWAT DARURAT</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Asesmen Awal Pasien Rawat Darurat
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
                  <td>Asesmen Awal Pasien Rawat Darurat</td>
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
          <form class="form-horizontal form-validate" method="post" id="register_form" action="igd_asesmen_awal_rawat_darurat_dokter_edit">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Data Medis
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Wawancara dengan </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="pewawancara" value="{{$pewawancara}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keluhan Utama </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" style="resize: none;" name="keluhan_utama">{{$keluhan_utama}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Penyakit Sekarang </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="10" style="resize: none;" name="riwayat_penyakit_sekarang">{{$riwayat_penyakit_sekarang}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Penyakit Dahulu (gangguan kejiwaan) </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="5" style="resize: none;" name="riwayat_penyakit_dahulu">{{$riwayat_penyakit_dahulu}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Riwayat Napza </label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="riwayat_napza" value="false" {{$riwayat_napza == False ? 'checked' : ''}}>
                        Tidak ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="riwayat_napza" value="true" {{$riwayat_napza == True ? 'checked' : ''}}>
                        Ada
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lama Pemakaian</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="lama_pemakaian" value="{{$lama_pemakaian}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Zat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jenis_zat" value="{{$jenis_zat}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Cara Pemakaian</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="cara_pemakaian" value="{{$cara_pemakaian}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Latar Belakang Pemakaian</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="latar_belakang_pemakaian" value="{{$latar_belakang_pemakaian}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kepribadian Sebelum Sakit</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="5" style="resize: none;" name="kepribadian_sebelum_sakit">{{$kepribadian_sebelum_sakit}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Pendidikan </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="5" style="resize: none;" name="riwayat_pendidikan">{{$riwayat_pendidikan}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Pekerjaan </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="5" style="resize: none;" name="riwayat_pekerjaan">{{$riwayat_pekerjaan}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Perkawinan </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="5" style="resize: none;" name="riwayat_perkawinan">{{$riwayat_perkawinan}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Riwayat Penyakit Lainnya</label>
                  <div class="col-lg-8">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="riwayat_penyakit_lain_1" {{isset($riwayat_penyakit_lain[1]) ? 'checked' : ''}}>
                        Hipertensi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="riwayat_penyakit_lain_2" {{isset($riwayat_penyakit_lain[2]) ? 'checked' : ''}}>
                        Liver
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="riwayat_penyakit_lain_3" {{isset($riwayat_penyakit_lain[3]) ? 'checked' : ''}}>
                        Diabetes
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="riwayat_penyakit_lain_4" {{isset($riwayat_penyakit_lain[4]) ? 'checked' : ''}}>
                        Cancer
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="riwayat_penyakit_lain_5" {{isset($riwayat_penyakit_lain[5]) ? 'checked' : ''}}>
                        Jantung
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="riwayat_penyakit_lain_6" {{isset($riwayat_penyakit_lain[6]) ? 'checked' : ''}}>
                        TBC
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="riwayat_penyakit_lain_7" {{isset($riwayat_penyakit_lain[7]) ? 'checked' : ''}}>
                        Stroke
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="riwayat_penyakit_lain_8" {{isset($riwayat_penyakit_lain[8]) ? 'checked' : ''}}>
                        Glaukoma
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="riwayat_penyakit_lain_9" {{isset($riwayat_penyakit_lain[9]) ? 'checked' : ''}}>
                        Dialysis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="riwayat_penyakit_lain_10" {{isset($riwayat_penyakit_lain[10]) ? 'checked' : ''}}>
                        STD
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="riwayat_penyakit_lain_11" {{isset($riwayat_penyakit_lain[11]) ? 'checked' : ''}}>
                        Asthma
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="riwayat_penyakit_lain_12" {{isset($riwayat_penyakit_lain[12]) ? 'checked' : ''}}>
                        Perdarahan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="riwayat_penyakit_lain_13" {{isset($riwayat_penyakit_lain[13]) ? 'checked' : ''}}>
                        Kejang
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="riwayat_penyakit_lain_14" {{isset($riwayat_penyakit_lain[14]) ? 'checked' : ''}}>
                        Lainnya 
                        <input placeholder="sebutkan" type="text" class="form-control" name="text_riwayat_penyakit_lain" value="{{$text_riwayat_penyakit_lain}}">
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Riwayat Operasi</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="riwayat_operasi" value="false" {{$riwayat_operasi == False ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="riwayat_operasi" value="true" {{$riwayat_operasi == True ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis operasi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jenis_operasi" value="{{$jenis_operasi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kapan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="waktu_operasi" value="waktu_operasi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Riwayat transfusi</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="riwayat_tranfusi" value="false" {{$riwayat_tranfusi == False ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="riwayat_tranfusi" value="true" {{$riwayat_tranfusi == True ? 'checked' : ''}}>
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
                        <input type="radio" name="reaksi_tranfusi" value="false" {{$reaksi_tranfusi == False ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="reaksi_tranfusi" value="true" {{$reaksi_tranfusi == True ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Reaksi yang timbul </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="reaksi_tranfusi_timbul" value="{{$reaksi_tranfusi_timbul}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Penyakit dalam keluarga  </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="5" style="resize: none;" name="riwayat_penyakit_keluarga">{{$riwayat_penyakit_keluarga}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Pengobatan </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="5" style="resize: none;" name="riwayat_pengobatan">{{$riwayat_pengobatan}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Alergi </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="5" style="resize: none;" name="riwayat_alergi">{{$riwayat_alergi}}</textarea>
                  </div>
                </div>
              </div>
            </section>
            <section class="panel">
              <header class="panel-heading">
                Obat yang Diminum Saat Ini
              </header>
              <div class="panel-body">
                <input type="hidden" name="jumlah_form_obat_new" id="jumlah_form_obat_new" value="0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 40%; text-align: center;">NAMA OBAT</th>
                      <th style="width: 11%; text-align: center;">DIBAWA</th>
                      <th style="width: 8%; text-align: center;">JUMLAH</th>
                      <th style="width: 11%; text-align: center;">TIDAK DIBAWA</th>
                      <th style="width: 27%; text-align: center;">KETERANGAN</th>
                      <th style="width: 3%; text-align: center;">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <input type="hidden" name="previous_obat" value="{{$previous_obat}}">
                    @foreach($obat as $o)
                    <tr id="form_obat_{{$o->id}}">
                      <td>
                        <input type="text" class="form-control" name="nama_obat_{{$o->id}}" value="{{$o->nama_obat}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="dibawa_{{$o->id}}" value="{{$o->dibawa}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="jumlah_{{$o->id}}" value="{{$o->jumlah}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="tidak_dibawa_{{$o->id}}" value="{{$o->tidak_dibawa}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="keterangan_{{$o->id}}" value="{{$o->keterangan}}">
                      </td>
                      <td>
                        <div class="btn-group">
                          <button class="btn btn-default tombol_hapus_obat" type="button" id="tombol_hapus_obat_{{$o->id}}"><i class="icon_close_alt2"></i></button>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                    <tr id="last_row_obat">
                      <td colspan="9">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_obat"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>           
              </div>
            </section>
            <section class="panel">
              <header class="panel-heading">
                Pemeriksaan Fisik
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kepala</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="kepala" value="{{$kepala}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Leher</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="leher" value="{{$leher}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dada</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dada" value="{{$dada}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jantung</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jantung" value="{{$jantung}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Paru-paru</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="paru" value="{{$paru}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perut</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="perut" value="{{$perut}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Anggota Gerak</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="anggota_gerak" value="{{$anggota_gerak}}">
                  </div>
                </div>
              </div>
            </section>
            <section class="panel">
              <header class="panel-heading">
                Status Lokalis
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status Lokalis</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="8" style="resize: none;" name="status_lokalis">{{$status_lokalis}}</textarea>
                  </div>
                </div>
              </div>
            </section>
            <section class="panel">
              <header class="panel-heading">
                Status Psikiatri
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="font-weight: bold; font-size: 1em;">Keadaan Umum</label>
                  <div class="col-sm-8" style="padding: 0mm;">
                    <label class="col-sm-12">Penampilan</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="penampilan">{{$penampilan}}</textarea>
                    </div>
                    <label class="col-sm-12">Kesadaran</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="kesadaran">{{$kesadaran}}</textarea>
                    </div>
                    <label class="col-sm-12">Orientasi</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="orientasi">{{$orientasi}}</textarea>
                    </div>
                    <label class="col-sm-12">Sikap & Tingkah laku</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="sikap_tingkah_laku">{{$sikap_tingkah_laku}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="font-weight: bold; font-size: 1em;">Gangguan Berpikir</label>
                  <div class="col-sm-8" style="padding: 0mm;">
                    <label class="col-sm-12">Proses Pikir</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="proses_pikir">{{$proses_pikir}}</textarea>
                    </div>
                    <label class="col-sm-12">Bentuk Pikir</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="bentuk_pikir">{{$bentuk_pikir}}</textarea>
                    </div>
                    <label class="col-sm-12">Isi Pikir</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="isi_pikir">{{$isi_pikir}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="font-weight: bold; font-size: 1em;">Alam Perasaan</label>
                  <div class="col-sm-8" style="padding: 0mm;">
                    <label class="col-sm-12">Mood</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="mood">{{$mood}}</textarea>
                    </div>
                    <label class="col-sm-12">Afek</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="afek">{{$afek}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="font-weight: bold; font-size: 1em;">Persepsi</label>
                  <div class="col-sm-8" style="padding: 0mm;">
                    <label class="col-sm-12">Halusinasi</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="halusinasi">{{$halusinasi}}</textarea>
                    </div>
                    <label class="col-sm-12">Ilusi</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="ilusi">{{$ilusi}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="font-weight: bold; font-size: 1em;">Fungsi Intelektual</label>
                  <div class="col-sm-8" style="padding: 0mm;">
                    <label class="col-sm-12">Daya Konsentrasi</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="daya_konsentrasi">{{$daya_konsentrasi}}</textarea>
                    </div>
                    <label class="col-sm-12">Daya Ingat</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="daya_ingat">{{$daya_ingat}}</textarea>
                    </div>
                    <label class="col-sm-12">Pikiran Abstrak</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="pikiran_abstrak">{{$pikiran_abstrak}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="font-weight: bold; font-size: 1em;">Pengendalian Impuls</label>
                  <div class="col-sm-8" style="padding: 0mm;">
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="pengendalian_impuls">{{$pengendalian_impuls}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="font-weight: bold; font-size: 1em;">Daya Nilai</label>
                  <div class="col-sm-8" style="padding: 0mm;">
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="daya_nilai">{{$daya_nilai}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="font-weight: bold; font-size: 1em;">Tilikan/Insight</label>
                  <div class="col-sm-8" style="padding: 0mm;">
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="tilikan">{{$tilikan}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="font-weight: bold; font-size: 1em;">Taraf dapat dipercaya</label>
                  <div class="col-sm-8" style="padding: 0mm;">
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="2" style="resize: none;" name="taraf_dipercaya">{{$taraf_dipercaya}}</textarea>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="panel">
              <header class="panel-heading">
                Status Neurologi
              </header>
              <div class="panel-body">
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="font-weight: bold; font-size: 1em;">Pemeriksaan khusus</label>
                  <div class="col-sm-8" style="padding: 0mm;">
                    <label class="col-sm-12">Meningeal Sight</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="3" style="resize: none;" name="meningeal_sight">{{$meningeal_sight}}</textarea>
                    </div>
                    <label class="col-sm-12">Hasil Pemeriksaan Nervus Cranialis</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="3" style="resize: none;" name="nervus_cranialis">{{$nervus_cranialis}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="font-weight: bold; font-size: 1em;">Pemeriksaan Sistem Motorik</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" style="resize: none;" name="sistem_motorik">{{$sistem_motorik}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="font-weight: bold; font-size: 1em;">Koordinasi Gait Keseimbangan (fungsi cerebellum)</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" style="resize: none;" name="cerebellum">{{$cerebellum}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="font-weight: bold; font-size: 1em;">Vegetatif </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" style="resize: none;" name="vegetatif">{{$vegetatif}}</textarea>
                  </div>
                </div>
              </div>
            </section>
            <section class="panel">
              <header class="panel-heading">
                Pemeriksaan Penunjang
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10%; text-align: center; vertical-align: middle;">JENIS PEMERIKSAAN</th>
                      <th style="width: 30%; text-align: center; vertical-align: middle;">PEMERIKSAAN/PERMINTAAN</th>
                      <th style="width: 30%; text-align: center; vertical-align: middle;">HASIL</th>
                      <th style="width: 30%; text-align: center; vertical-align: middle;">KETERANGAN</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        Laboratorium
                      </td>
                      <td>
                        <textarea class="form-control" rows="5" style="resize: none;" name="pemeriksaan_laboratorium">{{$pemeriksaan_laboratorium}}</textarea>
                        <input type="time" class="form-control" name="jam_pemeriksaan_laboratorium" value="{{$jam_pemeriksaan_laboratorium}}">
                      </td>
                      <td>
                        <textarea class="form-control" rows="5" style="resize: none;" name="hasil_laboratorium">{{$hasil_laboratorium}}</textarea>
                        <input type="time" class="form-control" name="jam_hasil_laboratorium" value="{{$jam_hasil_laboratorium}}">
                      </td>
                      <td>
                        <textarea class="form-control" rows="6" style="resize: none;" name="keterangan_laboratorium">{{$keterangan_laboratorium}}</textarea>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Radiologi
                      </td>
                      <td>
                        <textarea class="form-control" rows="5" style="resize: none;" name="pemeriksaan_radiologi">{{$pemeriksaan_radiologi}}</textarea>
                        <input type="time" class="form-control" name="jam_pemeriksaan_radiologi" value="{{$jam_pemeriksaan_radiologi}}">
                      </td>
                      <td>
                        <textarea class="form-control" rows="5" style="resize: none;" name="hasil_radiologi">{{$hasil_radiologi}}</textarea>
                        <input type="time" class="form-control" name="jam_hasil_radiologi" value="{{$jam_hasil_radiologi}}">
                      </td>
                      <td>
                        <textarea class="form-control" rows="6" style="resize: none;" name="keterangan_radiologi">{{$keterangan_radiologi}}</textarea>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        EKG
                      </td>
                      <td>
                        <textarea class="form-control" rows="5" style="resize: none;" name="pemeriksaan_ekg">{{$pemeriksaan_ekg}}</textarea>
                        <input type="time" class="form-control" name="jam_pemeriksaan_ekg" value="{{$jam_pemeriksaan_ekg}}">
                      </td>
                      <td>
                        <textarea class="form-control" rows="5" style="resize: none;" name="hasil_ekg">{{$hasil_ekg}}</textarea>
                        <input type="time" class="form-control" name="jam_hasil_ekg" value="{{$jam_hasil_ekg}}">
                      </td>
                      <td>
                        <textarea class="form-control" rows="6" style="resize: none;" name="keterangan_ekg">{{$keterangan_ekg}}</textarea>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Lain-lain
                      </td>
                      <td>
                        <textarea class="form-control" rows="5" style="resize: none;" name="pemeriksaan_lain">{{$pemeriksaan_lain}}</textarea>
                        <input type="time" class="form-control" name="jam_pemeriksaan_lain" value="{{$jam_pemeriksaan_lain}}">
                      </td>
                      <td>
                        <textarea class="form-control" rows="5" style="resize: none;" name="hasil_lain">{{$hasil_lain}}</textarea>
                        <input type="time" class="form-control" name="jam_hasil_lain" value="{{$jam_hasil_lain}}">
                      </td>
                      <td>
                        <textarea class="form-control" rows="6" style="resize: none;" name="keterangan_lain">{{$keterangan_lain}}</textarea>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
            <section class="panel">
              <header class="panel-heading">
                Instrumen Penilaian
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Panss Ec</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="panssec" value="{{$panssec}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Gaff</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="gaff" value="{{$gaff}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">P4. GADUH GELISAH</label>
                  <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="1" {{$p4 == '1' ? 'checked' : ''}}>
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="2" {{$p4 == '2' ? 'checked' : ''}}>
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="3" {{$p4 == '3' ? 'checked' : ''}}>
                        Ringan – sedikit agitatif, waspada berlebihan, atau sedikit mudah terangsang selama wawancara, tanpa episode yang jelas dari gaduh gelisah atau labilitas alam perasaan yang mecolok. Pembicaraan mungkin sedikit mendesah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="4" {{$p4 == '4' ? 'checked' : ''}}>
                        Sedang – agitasi atau mudah terangsang yang jelas, ledakan-ledakan episodik
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="5" {{$p4 == '5' ? 'checked' : ''}}>
                        Agak berat – hiperaktivitas yang bermakna, sering terjadi ledakan-leadakan atau aktivitas mototrik, sulit untuk tetap duduk
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="6" {{$p4 == '6' ? 'checked' : ''}}>
                        Berat – gaduh gelisah yang mencolok mempengaruhi fungsi sehari-hari seperti makan  dan tidur
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p4" value="7" {{$p4 == '7' ? 'checked' : ''}}>
                        Sangat berat – gaduh gelisah yang mencolok, mempengaruhi kegiatan makan dan tidur, serta jelas tidak memungkinkan interaksi interpersonal. Percepatan dan pembicaraan dan aktivitas motorik dapat menimbulkan inkoherensi dan kelelahan
                      </label>
                    </div>
                  </div>
                  <label class="control-label col-lg-2" for="inputSuccess">G8. KETIDAKOPERATIFAN</label>
                  <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="1" {{$g8 == '1' ? 'checked' : ''}}>
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="2" {{$g8 == '2' ? 'checked' : ''}}>
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="3" {{$g8 == '3' ? 'checked' : ''}}>
                        Ringan – patuh tapi disertai sikap marah tidak sabar atau sarkasme, mungkin ada penolakan yang tidak mengganggu terhadap penyelidikan yang sensitif selama wawancara
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="4" {{$g8 == '4' ? 'checked' : ''}}>
                        Sedang – kadang-kadang terdapat penolakan langsung untuk patuh, memproyeksikan hostilitas, defensif atau bersifat negatif tetapi biasanya masih dapat diatasi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="5" {{$g8 == '5' ? 'checked' : ''}}>
                        Agak berat – seringkali tidak patuh, jelas defensif atau iritabilitas terhadap pewawancara dan mungkin tidak bersedia menghadapi banyak pertanyaan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="6" {{$g8 == '6' ? 'checked' : ''}}>
                        Berat – sangat tidak kooperatif, negativistik dan suka membangkang. Menolak untuk patuh, tidak mau memulai atau mengikuti wawancara sepenuhnya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g8" value="7" {{$g8 == '7' ? 'checked' : ''}}>
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
                        <input type="radio" name="p7" value="1" {{$p7 == '1' ? 'checked' : ''}}>
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="2" {{$p7 == '2' ? 'checked' : ''}}>
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="3" {{$p7 == '3' ? 'checked' : ''}}>
                        Ringan – melampiaskan kemarahan secara tidak langsung atau ditahan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="4" {{$p7 == '4' ? 'checked' : ''}}>
                        Sedang – sikap bermusuhan yang nyata
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="5" {{$p7 == '5' ? 'checked' : ''}}>
                        Agak berat – pasien sangat mudah marah dan kadang-kadang memaki dengan kata-kata kasar atau mengancam
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="6" {{$p7 == '6' ? 'checked' : ''}}>
                        Berat – tidak kooperatif dan mencaci maki dengan kasar atau mengancam, dapat beringas dan merusak tetapi tidak menyerang orang lain secara fisik
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="p7" value="7" {{$p7 == '7' ? 'checked' : ''}}>
                        Sangat berat – kemarahan yang hebat berakibat sangat tidak kooperatif, menghalangi interaksi, atau secara episodik melakukan penyerangan fisik terhadap orang lain
                      </label>
                    </div>
                  </div>
                  <label class="control-label col-lg-2" for="inputSuccess">G14. PENGENDALIAN IMPULS</label>
                  <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="1" {{$g14 == '1' ? 'checked' : ''}}>
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="2" {{$g14 == '2' ? 'checked' : ''}}>
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="3" {{$g14 == '3' ? 'checked' : ''}}>
                        Ringan – cenderung mudah marah dan frustasi bila menghadapi stres atau pemuasannya ditolak tetapi jarang bertindak impulsif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="4" {{$g14 == '4' ? 'checked' : ''}}>
                        Sedang – dengan provokasi yang minimal, pasien menjadi marah dan mencaci maki. Mungkin sekali-kali mengancam, merusak atau terdapat satu atau dua episode yang melibatkan konfrontasi fisik atau perselisihan ringan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="5" {{$g14 == '5' ? 'checked' : ''}}>
                        Agak berat – memperlihatkan episode impulsif yang berulang, termasuk mencaci maki, merusak harta benda atau ancaman fisik. Mungkin ada satu atau dua episode yang melibatkan serangn serius
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="6" {{$g14 == '6' ? 'checked' : ''}}>
                        Berat – agresif secara impulsif, mengancam, menuntut dan merusak, tanpa pertimbangan terhadap konsekuensinya. Menunjukkan perilaku menyerang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g14" value="7" {{$g14 == '7' ? 'checked' : ''}}>
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
                        <input type="radio" name="g4" value="1" {{$g4 == '1' ? 'checked' : ''}}>
                        Tidak ada - definisi tidak dipenuhi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="2" {{$g4 == '2' ? 'checked' : ''}}>
                        Minimal – patologis diragukan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="3" {{$g4 == '3' ? 'checked' : ''}}>
                        Ringan – postur dan gerakan-gerakan menunjukkan kekhawatiran ringan, ketidaktenangan yang sekali-kali, perubahan posisi, atau tremor tangan yang halus dan cepat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="4" {{$g4 == '4' ? 'checked' : ''}}>
                        Sedang – nyata-nyata gelisah seperti perilaku tidak tenang, tremor tangan yang nyata, keringat berlebihan, atau manerisme karena gugup
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="5" {{$g4 == '5' ? 'checked' : ''}}>
                        Agak berat – ketegangan yang berat, manifestasi seperti gemetar karena gugup, keringat sangat berlebihan dan ketidaktenangan, perilaku selama wawancara tidak terpengaruh secara bermakna
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="6" {{$g4 == '6' ? 'checked' : ''}}>
                        Berat – Ketegangan berat, taraf interaksi terganggu. Misalnya terus-menerus bergerak, tidak dapat tetap duduk, hiperventilasi
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="g4" value="7" {{$g4 == '7' ? 'checked' : ''}}>
                        Sangat berat – ketegangan sangat mencolok, tanda panik atau percepatan gerakan motorik kaar, ketidak mampuan tetap duduk > 1 menit yang menyebabkan percakapan tidak mungkin diteruskan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bangsal</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="bangsal" value="{{$bangsal}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Pemeriksaan</label>
                  <div class="col-sm-8">
                    <input type="text" value="{{$tanggal_pemeriksaan}}" size="16" class="form-control sandbox-container" name="tanggal_pemeriksaan">
                  </div>
                </div>
              </div>
            </section>
            <section class="panel">
              <header class="panel-heading">
                Diagnosis dan Tindakan Terapi
              </header>
              <div class="panel-body">
                <h4>Diagnosis Psikiatri</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis 1</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="axis_1" value="{{$axis_1}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis 2</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="axis_2" value="{{$axis_2}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Axies 3</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="axis_3" value="{{$axis_3}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis 4</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="axis_4" value="{{$axis_4}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis 5</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="axis_5" value="{{$axis_5}}">
                  </div>
                </div>
                <h4>Diagnosis Non Psikiatri</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosis Utama</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" style="resize: none;" name="diagnosis_utama">{{$diagnosis_utama}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosis Sekunder</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" style="resize: none;" name="diagnosis_sekunder">{{$diagnosis_sekunder}}</textarea>
                  </div>
                </div>
                <input type="hidden" name="jumlah_form_tindakan_new" id="jumlah_form_tindakan_new" value="0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10%; text-align: center;">JAM</th>
                      <th style="width: 87%; text-align: center;">TINDAKAN TERAPI</th>
                      <th style="width: 3%; text-align: center;">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <input type="hidden" name="previous_tindakan" value="{{$previous_tindakan}}">
                    @foreach($tindakan as $t)
                    <tr id="form_tindakan_{{$t->id}}">
                      <td>
                        <input type="time" class="form-control" name="jam_tindakan_{{$t->id}}" value="{{$t->jam}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="tindakan_terapi_{{$t->id}}" value="{{$t->tindakan}}">
                      </td>
                      <td>
                        <div class="btn-group">
                          <button class="btn btn-default tombol_hapus_tindakan" type="button" id="tombol_hapus_tindakan_{{$t->id}}"><i class="icon_close_alt2"></i></button>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                    <tr id="last_row_tindakan">
                      <td colspan="3">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_tindakan"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Daftar Masalah</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="6" style="resize: none;" name="daftar_masalah">{{$daftar_masalah}}</textarea>
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
                        <input type="radio" name="tindak_lanjut" {{$tindak_lanjut == 'Pulang' ? 'checked' : ''}} value="Pulang">
                        Pulang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tindak_lanjut" {{$tindak_lanjut == 'Dirawat' ? 'checked' : ''}} value="Dirawat">
                        Dirawat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tindak_lanjut" {{$tindak_lanjut == 'Menolak dirawat' ? 'checked' : ''}} value="Menolak dirawat">
                        Menolak dirawat
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tindak_lanjut" {{$tindak_lanjut == 'Dirujuk' ? 'checked' : ''}} value="Dirujuk">
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
                        <input type="radio" name="kontrol" value="false" {{$kontrol == False ? 'checked' : ''}}>
                        Tidak perlu kontrol
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kontrol" value="true" {{$kontrol == True ? 'checked' : ''}}>
                        Perlu Kontrol
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perlu kontrol pada tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" value="{{$tanggal_kontrol}}" size="16" class="form-control sandbox-container" name="tanggal_kontrol">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dirawat di ruang</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dirawat_di_ruang" value="{{$dirawat_di_ruang}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Indikasi Rawat Inap</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="7" style="resize: none;" name="indikasi_rawat_inap">{{$indikasi_rawat_inap}}</textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alasan menolak dirawat</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="alasan_menolak" {{$alasan_menolak == 'Masalah biaya' ? 'checked' : ''}} value="Masalah biaya">
                        Masalah biaya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alasan_menolak" {{$alasan_menolak == 'Masalah lokasi rumah' ? 'checked' : ''}} value="Masalah lokasi rumah">
                        Masalah lokasi rumah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alasan_menolak" {{$alasan_menolak == 'Kondisi pasien' ? 'checked' : ''}} value="Kondisi pasien">
                        Kondisi pasien
                      </label>
                    </div>
                    <div class="radio">
                      <div class="col-lg-1" style="padding-left: 0mm; padding-right: 0mm; width: 3em;">
                        <label>
                          <input type="radio" name="alasan_menolak" {{$alasan_menolak == 'Lainnya' ? 'checked' : ''}} value="Lainnya">
                          Lainnya
                        </label>
                      </div>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" name="alasan_menolak_lainnya" placeholder="Sebutkan" value="{{$alasan_menolak_lainnya}}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dirujuk ke</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dirujuk_ke" value="{{$dirujuk_ke}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alasan Rujuk</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="alasan_rujuk" {{$alasan_rujuk == 'Masalah biaya' ? 'checked' : ''}} value="Masalah biaya">
                        Tempat Penuh
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alasan_rujuk" {{$alasan_rujuk == 'Masalah Lokasi Rumah' ? 'checked' : ''}} value="Masalah Lokasi Rumah">
                        Perlu Fasilitas Lebih
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alasan_rujuk" {{$alasan_rujuk == 'Kondisi pasien' ? 'checked' : ''}} value="Kondisi pasien">
                        Permintaan Pasien/Keluarga
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-2">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="doa" {{$doa == True ? 'checked' : ''}}>
                        DOA
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam Keluar IGD</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam_keluar" value="{{$jam_keluar}}">
                  </div>
                </div>
                <h4>Kondisi Pasien Saat Keluar</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesadaran</label>
                  <div class="col-lg-10">
                    <label class="checkbox-inline" style="margin-right: 1em;">
                      <input type="checkbox" name="kesadaran_saat_keluar_1" {{isset($kesadaran_saat_keluar[1]) ? 'checked' :''}}> Compos Mentis
                    </label>
                    <label class="checkbox-inline" style="margin-right: 1em;">
                      <input type="checkbox" name="kesadaran_saat_keluar_2" {{isset($kesadaran_saat_keluar[2]) ? 'checked' :''}}> Apatis
                    </label>
                    <label class="checkbox-inline" style="margin-right: 1em;">
                      <input type="checkbox" name="kesadaran_saat_keluar_3" {{isset($kesadaran_saat_keluar[3]) ? 'checked' :''}}> Delirium
                    </label>
                    <label class="checkbox-inline" style="margin-right: 1em;">
                      <input type="checkbox" name="kesadaran_saat_keluar_4" {{isset($kesadaran_saat_keluar[4]) ? 'checked' :''}}> Sopor
                    </label>
                    <label class="checkbox-inline" style="margin-right: 1em;">
                      <input type="checkbox" name="kesadaran_saat_keluar_5" {{isset($kesadaran_saat_keluar[5]) ? 'checked' :''}}> Koma
                    </label>
                  </div>
                  <div class="col-lg-2"></div>
                  <div class="col-lg-1" style="padding-right: 0mm; width: 5em;">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="kesadaran_saat_keluar_6" {{isset($kesadaran_saat_keluar[6]) ? 'checked' :''}}> GCS
                    </label>                    
                  </div>
                  <div class="col-lg-2" style="padding-left: 0mm;">
                    <input type="text" class="form-control" placeholder="GCS" name="gcs" value="{{$gcs}}">
                  </div>
                  <div class="col-lg-2" style="padding-right: 0mm; width: 7em;">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="kesadaran_saat_keluar_7" {{isset($kesadaran_saat_keluar[7]) ? 'checked' :''}}> Lain-lain
                    </label>
                  </div>
                  <div class="col-lg-4" style="padding-left: 0mm;">
                    <input type="text" class="form-control" placeholder="Sebutkan" name="kesadaran_lainnya" value="{{$kesadaran_lainnya}}">
                  </div>
                </div>
                <h5>Tanda-tanda vital</h5>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tensi</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="tensi" value="{{$tensi}}">
                  </div>

                  <label class="col-sm-2 control-label">Nadi</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="nadi" value="{{$nadi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pernafasan</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="pernafasan" value="{{$pernafasan}}">
                  </div>
                  <label class="col-sm-2 control-label">Suhu</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="suhu" value="{{$suhu}}">
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
  </section>

  @include('layouts.tailscript')

  {{-- menambah row inputan obat --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tambah_form_obat').click(function() {
        var a = document.getElementById('jumlah_form_obat_new').value;
        a = parseInt(a) + 1;
        $('#last_row_obat').before('<tr id="form_obat_new_'+a+'"><td><input type="text" class="form-control" name="nama_obat_new_'+a+'"></td><td><input type="text" class="form-control" name="dibawa_new_'+a+'"></td><td><input type="text" class="form-control" name="jumlah_new_'+a+'"></td><td><input type="text" class="form-control" name="tidak_dibawa_new_'+a+'"></td><td><input type="text" class="form-control" name="keterangan_new_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus_obat" type="button" id="tombol_hapus_obat_new_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
        document.getElementById('jumlah_form_obat_new').value = a;
      });
    });
  </script>

  {{-- menambah row inputan tindakan --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tambah_form_tindakan').click(function() {
        var a = document.getElementById('jumlah_form_tindakan_new').value;
        a = parseInt(a) + 1;
        $('#last_row_tindakan').before('<tr id="form_tindakan_new_'+a+'"><td><input type="time" class="form-control" name="jam_tindakan_new_'+a+'"></td><td><input type="text" class="form-control" name="tindakan_terapi_new_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus_tindakan" type="button" id="tombol_hapus_tindakan_new_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
        document.getElementById('jumlah_form_tindakan_new').value = a;
      });
    });
  </script>

  {{-- menghapus row obat --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $(document).on('click', '.tombol_hapus_obat', function() {
        var x = $(this).attr('id');
        var nomor = x.substring(18);
        $('#form_obat_'+nomor).remove();
      });
    });
  </script>

  {{-- menghapus row tindakan --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $(document).on('click', '.tombol_hapus_tindakan', function() {
        var x = $(this).attr('id');
        var nomor = x.substring(22);
        $('#form_tindakan_'+nomor).remove();
      });
    });
  </script>

</body>
<html>
