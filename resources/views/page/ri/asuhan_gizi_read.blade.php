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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>Asuhan Gizi</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Asuhan Gizi
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
                  <td>Hasil Pemeriksaan Laboratorium</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_gizi_pdf">PDF</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_asuhan_gizi_edit">EDIT</a>
                    </div>
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
              <header class="panel-heading">Riwayat Klien
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="{{$umur}}">
                    <input type="hidden" name="umur" value="{{$umur}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Etnik/Agama</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="{{$etnik_agama}}">
                    <input type="hidden" name="etnik_agama" value="{{$etnik_agama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="{{$jenis_kelamin}}">
                    <input type="hidden" name="jenis_kelamin" value="{{$jenis_kelamin}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kemampuan Baca</label>
                  <div class="col-sm-4">
                    <label class="radio-inline"><input type="radio" disabled name="kemampuan_baca" value="1" {{$kemampuan_baca == 1 ? 'checked' : ''}}>Bisa</label>
                    <label class="radio-inline"><input type="radio" disabled name="kemampuan_baca" value="0" {{$kemampuan_baca == 0 ? 'checked' : ''}}>Tidak Bisa</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="{{$pekerjaan}}">
                    <input type="hidden" name="pekerjaan" value="{{$pekerjaan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pendidikan</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="{{$pendidikan}}">
                    <input type="hidden" name="pendidikan" value="{{$pendidikan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Peran Dalam Keluarga</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="peran_dalam_keluarga" value="{{$peran_dalam_keluarga}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterbatasan Fisik</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="keterbatasan_fisik" value="{{$keterbatasan_fisik}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mobilitas</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="mobilitas" value="{{$mobilitas}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perokok</label>
                  <div class="col-sm-4">
                    <label class="radio-inline"><input type="radio" disabled name="perokok" value="0" {{$perokok == 0 ? 'checked' : ''}}>Ya</label>
                    <label class="radio-inline"><input type="radio" disabled name="perokok" value="1" {{$perokok == 1 ? 'checked' : ''}}>Tidak</label>
                    <label class="radio-inline"><input type="radio" disabled name="perokok" value="2" {{$perokok == 2 ? 'checked' : ''}}>Pasif</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Medis/ Kesehatan Pasien/ Keluarga</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="riwayat" value="{{$riwayat}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Sosial Ekonomi</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="riwayat_sosial_ekonomi" value="{{$riwayat_sosial_ekonomi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosa Dokter</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="diagnosa_dokter" value="{{$diagnosa_dokter}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Food History
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alergi Makanan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="alergi_makanan" value="{{$alergi_makanan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ketidaksukaan Makanan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="ketidaksukaan_makanan" value="{{$ketidaksukaan_makanan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pantangan Makanan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="pantangan_makanan" value="{{$pantangan_makanan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pengalaman diit/ konseling sebelumnya</label>
                  <div class="col-sm-4">
                    <label class="radio-inline"><input type="radio" disabled name="konseling_sebelumnya" value="1" {{$konseling_sebelumnya == 1 ? 'checked' : ''}}>Ada</label>
                    <label class="radio-inline"><input type="radio" disabled name="konseling_sebelumnya" value="0" {{$konseling_sebelumnya == 0 ? 'checked' : ''}}>Tidak</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bila ada, sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="keterangan_konseling" value="{{$keterangan_konseling}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Daya Antropometri
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">BB saat ini</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="bb_saat_ini" value="{{$bb_saat_ini}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">PB/TB</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="pbtb" value="{{$pbtb}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">IMT</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="imt" value="{{$imt}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status Gizi</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="status_gizi" value="{{$status_gizi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Penurunan BB</label>
                  <div class="col-sm-2">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">BB Biasanya</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="bb_biasanya" value="{{$bb_biasanya}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Penurunan BB</label>
                  <div class="col-sm-2" style="display: inline;">
                    <input type="text" disabled class="form-control" name="penurunan_bb" value="{{$penurunan_bb}}">
                  </div>
                  <label class="col-sm-1 control-label" style="padding-left: 0px; padding-right: 0px; width: 6em; text-align: left;">% &nbsp&nbsp&nbsp&nbsp&nbsp  dalam</label>
                  <div class="col-sm-2" style="display: inline;">
                    <input type="text" disabled class="form-control" name="penurunan_bb_adj" value="{{$penurunan_bb_adj}}">
                  </div>
                  <label class="col-sm-1 control-label" style="padding-left: 0px; padding-right: 0px; width: 6em; text-align: left;">mgg/bln</label>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pengukuran Lainnya</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="pengukuran_lainnya" value="{{$pengukuran_lainnya}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Biokimia Terkait Gizi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Biokimia Terkait Gizi</label>
                  <div class="col-sm-8">
                    type="radio" disabled class="form-control" rows="4" name="biokimia_terkait">{{$biokimia_terkait}}</textarea>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Fisik Klinis - Gizi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Atropi Otot Lengan</label>
                  <div class="col-sm-4">
                    <label class="radio-inline"><input type="radio" disabled name="fk1" value="1" {{$fk1 == 1 ? 'checked' : ''}}>Ada</label>
                    <label class="radio-inline"><input type="radio" disabled name="fk1" value="0" {{$fk1 == 0 ? 'checked' : ''}}>Tidak</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hilang Lemak Subkutan</label>
                  <div class="col-sm-4">
                    <label class="radio-inline"><input type="radio" disabled name="fk2" value="1" {{$fk2 == 1 ? 'checked' : ''}}>Ada</label>
                    <label class="radio-inline"><input type="radio" disabled name="fk2" value="0" {{$fk2 == 0 ? 'checked' : ''}}>Tidak</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Odema</label>
                  <div class="col-sm-4">
                    <label class="radio-inline"><input type="radio" disabled name="fk3" value="1" {{$fk3 == 1 ? 'checked' : ''}}>Ada</label>
                    <label class="radio-inline"><input type="radio" disabled name="fk3" value="0" {{$fk3 == 0 ? 'checked' : ''}}>Tidak</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nafsu Makan</label>
                  <div class="col-sm-4">
                    <label class="radio-inline"><input type="radio" disabled name="fk4" value="1" {{$fk4 == 1 ? 'checked' : ''}}>Ada</label>
                    <label class="radio-inline"><input type="radio" disabled name="fk4" value="0" {{$fk4 == 0 ? 'checked' : ''}}>Tidak</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mual</label>
                  <div class="col-sm-4">
                    <label class="radio-inline"><input type="radio" disabled name="fk5" value="1" {{$fk5 == 1 ? 'checked' : ''}}>Ada</label>
                    <label class="radio-inline"><input type="radio" disabled name="fk5" value="0" {{$fk5 == 0 ? 'checked' : ''}}>Tidak</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Muntah</label>
                  <div class="col-sm-4">
                    <label class="radio-inline"><input type="radio" disabled name="fk6" value="1" {{$fk6 == 1 ? 'checked' : ''}}>Ada</label>
                    <label class="radio-inline"><input type="radio" disabled name="fk6" value="0" {{$fk6 == 0 ? 'checked' : ''}}>Tidak</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kembung</label>
                  <div class="col-sm-4">
                    <label class="radio-inline"><input type="radio" disabled name="fk7" value="1" {{$fk7 == 1 ? 'checked' : ''}}>Ada</label>
                    <label class="radio-inline"><input type="radio" disabled name="fk7" value="0" {{$fk7 == 0 ? 'checked' : ''}}>Tidak</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Konstipasi</label>
                  <div class="col-sm-4">
                    <label class="radio-inline"><input type="radio" disabled name="fk8" value="1" {{$fk8 == 1 ? 'checked' : ''}}>Ada</label>
                    <label class="radio-inline"><input type="radio" disabled name="fk8" value="0" {{$fk8 == 0 ? 'checked' : ''}}>Tidak</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diare</label>
                  <div class="col-sm-4">
                    <label class="radio-inline"><input type="radio" disabled name="fk9" value="1" {{$fk9 == 1 ? 'checked' : ''}}>Ada</label>
                    <label class="radio-inline"><input type="radio" disabled name="fk9" value="0" {{$fk9 == 0 ? 'checked' : ''}}>Tidak</label>
                  </div>
                </div>              
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kulit</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="fk10" value="{{$fk10}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kepala dan Mata</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="fk11" value="{{$fk11}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Gigi Geligi</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="fk12" value="{{$fk12}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Gangguan Menelan</label>
                  <div class="col-sm-4">
                    <label class="radio-inline"><input type="radio" disabled name="fk13" value="1" {{$fk13 == 1 ? 'checked' : ''}}>Ada</label>
                    <label class="radio-inline"><input type="radio" disabled name="fk13" value="0" {{$fk13 == 0 ? 'checked' : ''}}>Tidak</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Gangguan Mengunyah</label>
                  <div class="col-sm-4">
                    <label class="radio-inline"><input type="radio" disabled name="fk14" value="1" {{$fk14 == 1 ? 'checked' : ''}}>Ada</label>
                    <label class="radio-inline"><input type="radio" disabled name="fk14" value="0" {{$fk14 == 0 ? 'checked' : ''}}>Tidak</label>
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label">Gangguan Menghisap</label>
                  <div class="col-sm-4">
                    <label class="radio-inline"><input type="radio" disabled name="fk15" value="1" {{$fk15 == 1 ? 'checked' : ''}}>Ada</label>
                    <label class="radio-inline"><input type="radio" disabled name="fk15" value="0" {{$fk15 == 0 ? 'checked' : ''}}>Tidak</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanda-tanda Vital</label>
                  <div class="col-sm-2">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nadi</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="fk16" value="{{$fk16}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Respitori</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="fk17" value="{{$fk17}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Suhu</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="fk18" value="{{$fk18}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Data Lain</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="fk19" value="{{$fk19}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Diagnosa Gizi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosa Gizi</label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control" rows="5" name="diagnosa_gizi">{{$diagnosa_gizi}}</textarea>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Intervensi Gizi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tujuan</label>
                  <div class="col-sm-4">
                    <textarea readonly class="form-control" name="tujuan_intervensi" rows="4">{{$tujuan_intervensi}}</textarea>
                  </div>
                  <label class="col-sm-1 control-label">Target</label>
                  <div class="col-sm-4">
                    <textarea readonly class="form-control" name="target_intervensi" rows="4">{{$target_intervensi}}</textarea>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Rencana Monitoring dan Evaluasi Gizi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Rencana Monitoring dan Evaluasi Gizi</label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control" rows="5" name="rencana_monitoring_evaluasi">{{$rencana_monitoring_evaluasi}}</textarea>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Makan Pagi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 1</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" disabled value="Nasi">
                  </div>
                  <label class="col-sm-1 control-label">GR</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="p_gr_nasi" value="{{$p_gr_nasi}}">
                  </div>
                  <label class="col-sm-1 control-label">URT</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="p_urt_nasi" value="{{$p_urt_nasi}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 2</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" disabled value="Lauk">
                  </div>
                  <label class="col-sm-1 control-label">GR</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="p_gr_lauk" value="{{$p_gr_lauk}}">
                  </div>
                  <label class="col-sm-1 control-label">URT</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="p_urt_lauk" value="{{$p_urt_lauk}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 3</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" disabled value="Sayur">
                  </div>
                  <label class="col-sm-1 control-label">GR</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="p_gr_sayur" value="{{$p_gr_sayur}}">
                  </div>
                  <label class="col-sm-1 control-label">URT</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="p_urt_sayur" value="{{$p_urt_sayur}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Snack</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="p_nama_snack" value="{{$p_nama_snack}}">
                  </div>
                  <label class="col-sm-1 control-label">GR</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="p_gr_snack" value="{{$p_gr_snack}}">
                  </div>
                  <label class="col-sm-1 control-label">URT</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="p_urt_snack" value="{{$p_urt_snack}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Pagi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Energi (Kal)</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="energi_pagi" value="{{$energi_pagi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Protein (Gr)</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="protein_pagi" value="{{$protein_pagi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lemak (Gr)</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="lemak_pagi" value="{{$lemak_pagi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">KH (Gr)</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="kh_pagi" value="{{$kh_pagi}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Makan Siang
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 1</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" disabled value="Nasi">
                  </div>
                  <label class="col-sm-1 control-label">GR</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="s_gr_nasi" value="{{$s_gr_nasi}}">
                  </div>
                  <label class="col-sm-1 control-label">URT</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="s_urt_nasi" value="{{$s_urt_nasi}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 2</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" disabled value="Lauk">
                  </div>
                  <label class="col-sm-1 control-label">GR</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="s_gr_lauk" value="{{$s_gr_lauk}}">
                  </div>
                  <label class="col-sm-1 control-label">URT</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="s_urt_lauk" value="{{$s_urt_lauk}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 3</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" disabled value="Tempe">
                  </div>
                  <label class="col-sm-1 control-label">GR</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="s_gr_tempe" value="{{$s_gr_tempe}}">
                  </div>
                  <label class="col-sm-1 control-label">URT</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="s_urt_tempe" value="{{$s_urt_tempe}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 4</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" disabled value="Sayur">
                  </div>
                  <label class="col-sm-1 control-label">GR</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="s_gr_sayur" value="{{$s_gr_sayur}}">
                  </div>
                  <label class="col-sm-1 control-label">URT</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="s_urt_sayur" value="{{$s_urt_sayur}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 5</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" disabled value="Buah">
                  </div>
                  <label class="col-sm-1 control-label">GR</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="s_gr_buah" value="{{$s_gr_buah}}">
                  </div>
                  <label class="col-sm-1 control-label">URT</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="s_urt_buah" value="{{$s_urt_buah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Snack</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="s_nama_snack" value="{{$s_nama_snack}}">
                  </div>
                  <label class="col-sm-1 control-label">GR</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="s_gr_snack" value="{{$s_gr_snack}}">
                  </div>
                  <label class="col-sm-1 control-label">URT</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="s_urt_snack" value="{{$s_urt_snack}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Siang
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Energi (Kal)</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="energi_siang" value="{{$energi_siang}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Protein (Gr)</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="protein_siang" value="{{$protein_siang}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lemak (Gr)</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="lemak_siang" value="{{$lemak_siang}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">KH (Gr)</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="kh_siang" value="{{$kh_siang}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Makan Malam
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 1</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" disabled value="Nasi">
                  </div>
                  <label class="col-sm-1 control-label">GR</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="m_gr_nasi" value="{{$m_gr_nasi}}">
                  </div>
                  <label class="col-sm-1 control-label">URT</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="m_urt_nasi" value="{{$m_urt_nasi}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 2</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" disabled value="Lauk">
                  </div>
                  <label class="col-sm-1 control-label">GR</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="m_gr_lauk" value="{{$m_gr_lauk}}">
                  </div>
                  <label class="col-sm-1 control-label">URT</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="m_urt_lauk" value="{{$m_urt_lauk}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 3</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" disabled value="Tempe">
                  </div>
                  <label class="col-sm-1 control-label">GR</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="m_gr_tempe" value="{{$m_gr_tempe}}">
                  </div>
                  <label class="col-sm-1 control-label">URT</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="m_urt_tempe" value="{{$m_urt_tempe}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 4</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" disabled value="Sayur">
                  </div>
                  <label class="col-sm-1 control-label">GR</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="m_gr_sayur" value="{{$m_gr_sayur}}">
                  </div>
                  <label class="col-sm-1 control-label">URT</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="m_urt_sayur" value="{{$m_urt_sayur}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Makan 5</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" disabled value="Buah">
                  </div>
                  <label class="col-sm-1 control-label">GR</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="m_gr_buah" value="{{$m_gr_buah}}">
                  </div>
                  <label class="col-sm-1 control-label">URT</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="m_urt_buah" value="{{$m_urt_buah}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Snack</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="m_nama_snack" value="{{$m_nama_snack}}">
                  </div>
                  <label class="col-sm-1 control-label">GR</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="m_gr_snack" value="{{$m_gr_snack}}">
                  </div>
                  <label class="col-sm-1 control-label">URT</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control" name="m_urt_snack" value="{{$m_urt_snack}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Malam
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Energi (Kal)</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="energi_malam" value="{{$energi_malam}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Protein (Gr)</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="protein_malam" value="{{$protein_malam}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lemak (Gr)</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="lemak_malam" value="{{$lemak_malam}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">KH (Gr)</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="kh_malam" value="{{$kh_malam}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Keterangan Tentang Makanan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-1 control-label"></label>
                  <label class="col-sm-2 control-label" style="text-align: left;">Pola Makanan</label>
                  <label class="col-sm-2 control-label" style="text-align: left;">Jumlah Pemberian</label>
                  <label class="col-sm-1 control-label"></label>
                  <label class="col-sm-2 control-label" style="text-align: left;">Pola Makanan</label>
                  <label class="col-sm-2 control-label" style="text-align: left;">Jumlah Pemberian</label>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Beras">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_1">
                      <option></option>
                      <option {{$jumlah_1 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_1 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_1 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_1 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_1 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Sayuran tomat/wortel">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_23">
                      <option></option>
                      <option {{$jumlah_23 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_23 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_23 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_23 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_23 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Jagung">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_2">
                      <option></option>
                      <option {{$jumlah_2 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_2 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_2 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_2 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_2 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Sayuran Lain">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_24">
                      <option></option>
                      <option {{$jumlah_24 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_24 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_24 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_24 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_24 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Mi">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_3">
                      <option></option>
                      <option {{$jumlah_3 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_3 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_3 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_3 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_3 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Pisang">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_25">
                      <option></option>
                      <option {{$jumlah_25 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_25 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_25 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_25 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_25 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Roti">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_4">
                      <option></option>
                      <option {{$jumlah_4 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_4 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_4 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_4 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_4 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Pepaya">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_26">
                      <option></option>
                      <option {{$jumlah_26 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_26 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_26 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_26 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_26 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Biskuit/Kue">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_5">
                      <option></option>
                      <option {{$jumlah_5 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_5 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_5 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_5 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_5 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Jeruk">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_27">
                      <option></option>
                      <option {{$jumlah_27 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_27 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_27 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_27 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_27 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Kentang">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_6">
                      <option></option>
                      <option {{$jumlah_6 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_6 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_6 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_6 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_6 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Buah segar lain">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_28">
                      <option></option>
                      <option {{$jumlah_28 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_28 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_28 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_28 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_28 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Singkong">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_7">
                      <option></option>
                      <option {{$jumlah_7 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_7 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_7 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_7 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_7 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Buah diawet">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_29">
                      <option></option>
                      <option {{$jumlah_29 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_29 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_29 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_29 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_29 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Ubi Rambat">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_8">
                      <option></option>
                      <option {{$jumlah_8 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_8 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_8 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_8 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_8 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Buah segar">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_30">
                      <option></option>
                      <option {{$jumlah_30 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_30 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_30 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_30 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_30 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Tempe">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_9">
                      <option></option>
                      <option {{$jumlah_9 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_9 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_9 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_9 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_9 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Susu kental manis">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_31">
                      <option></option>
                      <option {{$jumlah_31 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_31 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_31 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_31 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_31 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Tahu">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_10">
                      <option></option>
                      <option {{$jumlah_10 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_10 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_10 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_10 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_10 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Susu kental tak manis">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_32">
                      <option></option>
                      <option {{$jumlah_32 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_32 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_32 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_32 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_32 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Oncom">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_11">
                      <option></option>
                      <option {{$jumlah_11 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_11 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_11 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_11 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_11 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Susu tepung whole">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_33">
                      <option></option>
                      <option {{$jumlah_33 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_33 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_33 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_33 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_33 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Kacang Kering">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_12">
                      <option></option>
                      <option {{$jumlah_12 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_12 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_12 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_12 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_12 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Susu tepung skim">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_34">
                      <option></option>
                      <option {{$jumlah_34 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_34 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_34 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_34 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_34 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Ayam">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_13">
                      <option></option>
                      <option {{$jumlah_13 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_13 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_13 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_13 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_13 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Keju">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_35">
                      <option></option>
                      <option {{$jumlah_35 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_35 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_35 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_35 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_35 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Daging">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_14">
                      <option></option>
                      <option {{$jumlah_14 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_14 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_14 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_14 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_14 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Minyak/ Goreng-gorengan">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_36">
                      <option></option>
                      <option {{$jumlah_36 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_36 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_36 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_36 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_36 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Daging diawet">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_15">
                      <option></option>
                      <option {{$jumlah_15 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_15 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_15 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_15 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_15 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Kelapa/Santan">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_37">
                      <option></option>
                      <option {{$jumlah_37 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_37 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_37 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_37 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_37 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Hati/Limpa/Otak/Usus/Paru-paru">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_16">
                      <option></option>
                      <option {{$jumlah_16 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_16 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_16 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_16 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_16 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Margarine/Mentega">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_38">
                      <option></option>
                      <option {{$jumlah_38 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_38 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_38 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_38 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_38 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Telur ayam/bebek">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_17">
                      <option></option>
                      <option {{$jumlah_17 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_17 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_17 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_17 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_17 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Teh manis">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_39">
                      <option></option>
                      <option {{$jumlah_39 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_39 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_39 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_39 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_39 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Ikan basah">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_18">
                      <option></option>
                      <option {{$jumlah_18 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_18 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_18 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_18 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_18 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Kopi manis">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_40">
                      <option></option>
                      <option {{$jumlah_40 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_40 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_40 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_40 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_40 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Ikan kering">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_19">
                      <option></option>
                      <option {{$jumlah_19 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_19 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_19 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_19 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_19 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Sirop">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_41">
                      <option></option>
                      <option {{$jumlah_41 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_41 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_41 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_41 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_41 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Udang basah">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_20">
                      <option></option>
                      <option {{$jumlah_20 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_20 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_20 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_20 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_20 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Minuman botol ringan">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_42">
                      <option></option>
                      <option {{$jumlah_42 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_42 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_42 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_42 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_42 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Sayuran hijau daun">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_21">
                      <option></option>
                      <option {{$jumlah_21 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_21 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_21 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_21 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_21 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Minuman alkohol">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_43">
                      <option></option>
                      <option {{$jumlah_43 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_43 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_43 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_43 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_43 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-1" for="inputSuccess"></label>
                  <div class="col-lg-2">
                    <input type="text" disabled class="form-control" disabled value="Sayuran kacang-kacangan">
                  </div>
                  <div class="col-lg-2">
                    <select disabled class="form-control" name="jumlah_22">
                      <option></option>
                      <option {{$jumlah_22 == 1 ? 'selected' : ''}} value="1">Lebih 1x Sehari</option>
                      <option {{$jumlah_22 == 2 ? 'selected' : ''}} value="2">1x Sehari</option>
                      <option {{$jumlah_22 == 3 ? 'selected' : ''}} value="3">3-6x Sehari</option>
                      <option {{$jumlah_22 == 4 ? 'selected' : ''}} value="4">1-2x Sehari</option>
                      <option {{$jumlah_22 == 5 ? 'selected' : ''}} value="5">Kurang 1x</option>
                    </select>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal" value="{{$tanggal}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" disabled class="form-control" name="jam" value="{{$jam}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ahli Gizi</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="nama_ahli_gizi" value="{{$nama_ahli_gizi}}">
                  </div>
                </div>
              </div>
            </section>

            <div>
              <button type="button" class="btn btn-primary" onclick="window.open('{{url('ri_asuhan_gizi_list_konsultasi')}}')">List Konsultasi</button>
            </div>

          </form>
        </div>
      </div>
    </section>

    @include('layouts.tailscript')
  </body>


  <html>