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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> PENILAIAN RESIKO JATUH EDMUNSON</h3>
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
                  <td>Penilaian Edmunson</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_penilaian_edmunson">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_penilaian_edmunson_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_penilaian_edmunson_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_edmunson_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal" method="post">
            <section class="panel">
              <header class="panel-heading">Penilaian Resiko Jatuh Edmunson
              </header>
              <div class="panel-body">
                <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th style="width: 45%; text-align: center;vertical-align:middle;" rowspan="3">Item Penilaian</th>
                      <th style="width: 10%; text-align: center;vertical-align:middle;" rowspan="3">Point</th>
                      <th style="width: 45%; text-align: center;vertical-align:middle;" colspan="15" ="3">Tanggal, Bulan, tahun</th>
                    </tr>
                    <tr>
                      <th style="width: 9%; text-align: center;vertical-align:middle;" colspan="3">
                        <input type="text" value="{{date("d/m/Y")}}" onkeydown="return false" autocomplete="off" size="16" class="form-control sandbox-container" name="tanggal_1">
                      </th>
                      <th style="width: 9%; text-align: center;vertical-align:middle;" colspan="3">
                        <input type="text" value="{{date("d/m/Y")}}" onkeydown="return false" autocomplete="off" size="16" class="form-control sandbox-container" name="tanggal_2">
                      </th>
                      <th style="width: 9%; text-align: center;vertical-align:middle;" colspan="3">
                        <input type="text" value="{{date("d/m/Y")}}" onkeydown="return false" autocomplete="off" size="16" class="form-control sandbox-container" name="tanggal_3">
                      </th>
                      <th style="width: 9%; text-align: center;vertical-align:middle;" colspan="3">
                        <input type="text" value="{{date("d/m/Y")}}" onkeydown="return false" autocomplete="off" size="16" class="form-control sandbox-container" name="tanggal_4">
                      </th>
                      <th style="width: 9%; text-align: center;vertical-align:middle;" colspan="3">
                        <input type="text" value="{{date("d/m/Y")}}" onkeydown="return false" autocomplete="off" size="16" class="form-control sandbox-container" name="tanggal_5">
                      </th>
                    </tr>
                    <tr>
                      <th style="width: 3%; text-align: center;vertical-align:middle;">P</th>
                      <th style="width: 3%; text-align: center;vertical-align:middle;">S</th>
                      <th style="width: 3%; text-align: center;vertical-align:middle;">M</th>
                      
                      <th style="width: 3%; text-align: center;vertical-align:middle;">P</th>
                      <th style="width: 3%; text-align: center;vertical-align:middle;">S</th>
                      <th style="width: 3%; text-align: center;vertical-align:middle;">M</th>
                      
                      <th style="width: 3%; text-align: center;vertical-align:middle;">P</th>
                      <th style="width: 3%; text-align: center;vertical-align:middle;">S</th>
                      <th style="width: 3%; text-align: center;vertical-align:middle;">M</th>
                      
                      <th style="width: 3%; text-align: center;vertical-align:middle;">P</th>
                      <th style="width: 3%; text-align: center;vertical-align:middle;">S</th>
                      <th style="width: 3%; text-align: center;vertical-align:middle;">M</th>
                      
                      <th style="width: 3%; text-align: center;vertical-align:middle;">P</th>
                      <th style="width: 3%; text-align: center;vertical-align:middle;">S</th>
                      <th style="width: 3%; text-align: center;vertical-align:middle;">M</th>
                      
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td style="vertical-align:middle">
                        <b>USIA</b>
                      </td>
                      <td>
                        <br>
                      </td>
                      <td style="text-align:center;">
                        <br>
                      </td>
                      <td style="text-align:center;">
                        <br>
                      </td>
                      <td style="text-align:center;">
                        <br>
                      </td>
                      <td style="text-align:center;">
                        <br>
                      </td>
                      <td style="text-align:center;">
                        <br>
                      </td>
                      <td style="text-align:center;">
                        <br>
                      </td>
                      <td style="text-align:center;">
                        <br>
                      </td>
                      <td style="text-align:center;">
                        <br>
                      </td>
                      <td style="text-align:center;">
                        <br>
                      </td>
                      <td style="text-align:center;">
                        <br>
                      </td>
                      <td style="text-align:center;">
                        <br>
                      </td>
                      <td style="text-align:center;">
                        <br>
                      </td>
                      <td style="text-align:center;">
                        <br>
                      </td>
                      <td style="text-align:center;">
                        <br>
                      </td>
                      <td style="text-align:center;">
                        <br>
                      </td>
                    </tr>

                    <tr>
                      <td style="vertical-align:middle">
                        a. Usia kurang dari 50 tahun
                      </td>
                      <td style="text-align:center;">
                        8
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        {{-- {{dd($laporan[$list_tanggal[0]])}} --}}
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['usia'] < 50 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['usia'] < 50 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['usia'] < 50 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['usia'] < 50 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['usia'] < 50 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['usia'] < 50 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['usia'] < 50 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['usia'] < 50 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['usia'] < 50 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['usia'] < 50 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['usia'] < 50 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['usia'] < 50 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['usia'] < 50 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['usia'] < 50 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['usia'] < 50 ? 'checked' : '' : ''}}>
                      </td>
                    </tr>

                    <tr>
                      <td style="vertical-align:middle">
                        b. 50 - 70 Tahun
                      </td>
                      <td style="text-align:center;">
                        10
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['usia'] >= 50 && $laporan[$list_tanggal[0]]['p']['usia'] <= 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['usia'] >= 50 && $laporan[$list_tanggal[0]]['s']['usia'] <= 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['usia'] >= 50 && $laporan[$list_tanggal[0]]['m']['usia'] <= 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['usia'] >= 50 && $laporan[$list_tanggal[0]]['p']['usia'] <= 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['usia'] >= 50 && $laporan[$list_tanggal[0]]['s']['usia'] <= 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['usia'] >= 50 && $laporan[$list_tanggal[0]]['m']['usia'] <= 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['usia'] >= 50 && $laporan[$list_tanggal[0]]['p']['usia'] <= 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['usia'] >= 50 && $laporan[$list_tanggal[0]]['s']['usia'] <= 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['usia'] >= 50 && $laporan[$list_tanggal[0]]['m']['usia'] <= 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['usia'] >= 50 && $laporan[$list_tanggal[0]]['p']['usia'] <= 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['usia'] >= 50 && $laporan[$list_tanggal[0]]['s']['usia'] <= 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['usia'] >= 50 && $laporan[$list_tanggal[0]]['m']['usia'] <= 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['usia'] >= 50 && $laporan[$list_tanggal[0]]['p']['usia'] <= 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['usia'] >= 50 && $laporan[$list_tanggal[0]]['s']['usia'] <= 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['usia'] >= 50 && $laporan[$list_tanggal[0]]['m']['usia'] <= 70 ? 'checked' : '' : ''}}>
                      </td>
                    </tr>

                    <tr>
                      <td style="vertical-align:middle">
                        c. Lebih dari 80 tahun
                      </td>
                      <td style="text-align:center;">
                        26
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['usia'] > 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['usia'] > 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['usia'] > 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['usia'] > 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['usia'] > 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['usia'] > 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['usia'] > 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['usia'] > 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['usia'] > 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['usia'] > 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['usia'] > 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['usia'] > 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['usia'] > 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['usia'] > 70 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['usia'] > 70 ? 'checked' : '' : ''}}>
                      </td>
                    </tr>

                    <tr>
                      <td style="vertical-align:middle">
                        <b>STATUS MENTAL</b>
                      </td>
                      <td style="text-align:center;">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                    </tr>

                    <tr>
                      <td style="vertical-align:middle">
                        a. Kesadaran baik/orientasi baik setiap saat 
                      </td>
                      <td style="text-align:center;">
                        4
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['status_mental'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['status_mental'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['status_mental'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['status_mental'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['status_mental'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['status_mental'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['status_mental'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['status_mental'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['status_mental'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['status_mental'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['status_mental'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['status_mental'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['status_mental'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['status_mental'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['status_mental'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                    </tr>

                    <tr>
                      <td style="vertical-align:middle">
                        b. Agitasi/Ansietas
                      </td>
                      <td style="text-align:center;">
                        12
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['status_mental'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['status_mental'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['status_mental'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['status_mental'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['status_mental'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['status_mental'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['status_mental'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['status_mental'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['status_mental'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['status_mental'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['status_mental'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['status_mental'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['status_mental'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['status_mental'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['status_mental'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                    </tr>

                    <tr>
                      <td style="vertical-align:middle">
                        c. Kadang-kadang bingung
                      </td>
                      <td style="text-align:center;">
                        13
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['status_mental'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['status_mental'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['status_mental'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['status_mental'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['status_mental'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['status_mental'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['status_mental'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['status_mental'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['status_mental'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['status_mental'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['status_mental'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['status_mental'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['status_mental'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['status_mental'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['status_mental'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                    </tr>

                    <tr>
                      <td style="vertical-align:middle">
                        d. Bingung/Disorientasi
                      </td>
                      <td style="text-align:center;">
                        14
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['status_mental'] == 4 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['status_mental'] == 4 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['status_mental'] == 4 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['status_mental'] == 4 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['status_mental'] == 4 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['status_mental'] == 4 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['status_mental'] == 4 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['status_mental'] == 4 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['status_mental'] == 4 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['status_mental'] == 4 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['status_mental'] == 4 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['status_mental'] == 4 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['status_mental'] == 4 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['status_mental'] == 4 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['status_mental'] == 4 ? 'checked' : '' : ''}}>
                      </td>
                    </tr>

                    <tr>
                      <td style="vertical-align:middle">
                        <b>ELIMINASI</b>
                      </td>
                      <td style="text-align:center;">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <br>
                      </td>
                    </tr>

                    <tr>
                      <td style="vertical-align:middle">
                        <b>a. Mandiri dan mampu mengontrol BAB/BAK</b>
                      </td>
                      <td style="text-align:center;">
                        8
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['eliminasi'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['eliminasi'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['eliminasi'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['eliminasi'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['eliminasi'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['eliminasi'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['eliminasi'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['eliminasi'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['eliminasi'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['eliminasi'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['eliminasi'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['eliminasi'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['eliminasi'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['eliminasi'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['eliminasi'] == 1 ? 'checked' : '' : ''}}>
                      </td>
                    </tr>

                    <tr>
                      <td style="vertical-align:middle">
                        b. Dower Catheter/Colostomy
                      </td>
                      <td style="text-align:center;">
                        12
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['eliminasi'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['eliminasi'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['eliminasi'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['eliminasi'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['eliminasi'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['eliminasi'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['eliminasi'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['eliminasi'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['eliminasi'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['eliminasi'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['eliminasi'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['eliminasi'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['eliminasi'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['eliminasi'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['eliminasi'] == 2 ? 'checked' : '' : ''}}>
                      </td>
                    </tr>

                    <tr>
                      <td style="vertical-align:middle">
                        c. Eliminasi dengan bantuan
                      </td>
                      <td style="text-align:center;">
                        13
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['eliminasi'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['eliminasi'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['eliminasi'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['eliminasi'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['eliminasi'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['eliminasi'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['eliminasi'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['eliminasi'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['eliminasi'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['eliminasi'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['eliminasi'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['eliminasi'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['eliminasi'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['eliminasi'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['eliminasi'] == 3 ? 'checked' : '' : ''}}>
                      </td>
                    </tr>

                    <tr>
                      <td style="vertical-align:middle">
                       d. Gangguan eliminasi (Inkontinensia/Nokturia/Frekwensi)
                     </td>
                     <td style="text-align:center;">
                      12
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['eliminasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['eliminasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['eliminasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['eliminasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['eliminasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['eliminasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['eliminasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['eliminasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['eliminasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['eliminasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['eliminasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['eliminasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['eliminasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['eliminasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['eliminasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      e. Inkontinesia tetapi mampu untuk mobilisasi
                    </td>
                    <td style="text-align:center;">
                      12
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['eliminasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['eliminasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['eliminasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['eliminasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['eliminasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['eliminasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['eliminasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['eliminasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['eliminasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['eliminasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['eliminasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['eliminasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['eliminasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['eliminasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['eliminasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      <b>PENGOBATAN</b>
                    </td>
                    <td style="text-align:center;">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      a. Tanpa obat-obatan
                    </td>
                    <td style="text-align:center;">
                      10
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['pengobatan'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['pengobatan'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['pengobatan'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['pengobatan'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['pengobatan'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['pengobatan'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['pengobatan'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['pengobatan'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['pengobatan'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['pengobatan'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['pengobatan'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['pengobatan'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['pengobatan'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['pengobatan'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['pengobatan'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      b. Obat-obatan jantung
                    </td>
                    <td style="text-align:center;">
                      10
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['pengobatan'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['pengobatan'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['pengobatan'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['pengobatan'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['pengobatan'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['pengobatan'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['pengobatan'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['pengobatan'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['pengobatan'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['pengobatan'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['pengobatan'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['pengobatan'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['pengobatan'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['pengobatan'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['pengobatan'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      c. Obat-obat psikotropika (termasuk Benzodiazepine dan Antidepresan)
                    </td>
                    <td style="text-align:center;">
                      8
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['pengobatan'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['pengobatan'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['pengobatan'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['pengobatan'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['pengobatan'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['pengobatan'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['pengobatan'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['pengobatan'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['pengobatan'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['pengobatan'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['pengobatan'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['pengobatan'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['pengobatan'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['pengobatan'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['pengobatan'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      d. Mendapat tambahan obat-obatan dan/atau obat-obat PRN (psikiatri, antinyeri) yang diberikan dalam 24 jam terakhir
                    </td>
                    <td style="text-align:center;">
                      12
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['pengobatan'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['pengobatan'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['pengobatan'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['pengobatan'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['pengobatan'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['pengobatan'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['pengobatan'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['pengobatan'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['pengobatan'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['pengobatan'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['pengobatan'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['pengobatan'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['pengobatan'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['pengobatan'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['pengobatan'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:center">
                      <b>DIAGNOSA</b>
                    </td>
                    <td style="text-align:center;">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      a. Bipolar/ Gangguan Schizoaffective
                    </td>
                    <td style="text-align:center;">
                      10
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['diagnosa'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['diagnosa'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['diagnosa'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['diagnosa'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['diagnosa'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['diagnosa'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['diagnosa'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['diagnosa'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['diagnosa'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['diagnosa'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['diagnosa'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['diagnosa'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['diagnosa'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['diagnosa'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['diagnosa'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      b. Penggunaan Obat-obatan terlarang/ketergantungan alkohol
                    </td>
                    <td style="text-align:center;">
                      8
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['diagnosa'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['diagnosa'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['diagnosa'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['diagnosa'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['diagnosa'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['diagnosa'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['diagnosa'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['diagnosa'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['diagnosa'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['diagnosa'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['diagnosa'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['diagnosa'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['diagnosa'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['diagnosa'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['diagnosa'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      c. Gangguan Depresi Mayor
                    </td>
                    <td style="text-align:center;">
                      10
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['diagnosa'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['diagnosa'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['diagnosa'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['diagnosa'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['diagnosa'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['diagnosa'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['diagnosa'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['diagnosa'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['diagnosa'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['diagnosa'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['diagnosa'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['diagnosa'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['diagnosa'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['diagnosa'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['diagnosa'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      d. Dimensia/Delirium
                    </td>
                    <td style="text-align:center;">
                      12
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['diagnosa'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['diagnosa'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['diagnosa'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['diagnosa'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['diagnosa'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['diagnosa'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['diagnosa'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['diagnosa'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['diagnosa'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['diagnosa'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['diagnosa'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['diagnosa'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['diagnosa'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['diagnosa'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['diagnosa'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      <b>AMBULASI /KESEIMBANGAN</b>
                    </td>
                    <td style="text-align:center;">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      a. Mandiri/Keseimbangan Baik/Immobilisasi
                    </td>
                    <td style="text-align:center;">
                      7
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['ambulasi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['ambulasi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['ambulasi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['ambulasi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['ambulasi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['ambulasi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['ambulasi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['ambulasi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['ambulasi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['ambulasi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['ambulasi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['ambulasi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['ambulasi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['ambulasi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['ambulasi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      b. Dengan Alat Bantu (Kursi roda, walker,dll)
                    </td>
                    <td style="text-align:center;">
                      8
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['ambulasi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['ambulasi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['ambulasi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['ambulasi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['ambulasi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['ambulasi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['ambulasi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['ambulasi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['ambulasi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['ambulasi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['ambulasi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['ambulasi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['ambulasi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['ambulasi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['ambulasi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      c. Vertigo/kelemahan
                    </td>
                    <td style="text-align:center;">
                      10
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['ambulasi'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['ambulasi'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['ambulasi'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['ambulasi'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['ambulasi'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['ambulasi'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['ambulasi'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['ambulasi'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['ambulasi'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['ambulasi'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['ambulasi'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['ambulasi'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['ambulasi'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['ambulasi'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['ambulasi'] == 3 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      d. Goyah/membutuhkan mantuan dan menyadari kemampuan
                    </td>
                    <td style="text-align:center;">
                      8
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['ambulasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['ambulasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['ambulasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['ambulasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['ambulasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['ambulasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['ambulasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['ambulasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['ambulasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['ambulasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['ambulasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['ambulasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['ambulasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['ambulasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['ambulasi'] == 4 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      e. Goyah tapi lupa keterbatasan
                    </td>
                    <td style="text-align:center;">
                      15
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['ambulasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['ambulasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['ambulasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['ambulasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['ambulasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['ambulasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['ambulasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['ambulasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['ambulasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['ambulasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['ambulasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['ambulasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['ambulasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['ambulasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['ambulasi'] == 5 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      <b>NUTRISI</b>
                    </td>
                    <td style="text-align:center;">

                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      a. Mengkonsumsi sedikit makanan atau minuman  dalam 24 jam terakhir
                    </td>
                    <td style="text-align:center;">
                      12
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['nutrisi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['nutrisi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['nutrisi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['nutrisi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['nutrisi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['nutrisi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['nutrisi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['nutrisi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['nutrisi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['nutrisi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['nutrisi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['nutrisi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['nutrisi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['nutrisi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['nutrisi'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      b. Tidak ada kelainan dengan nafsu makan
                    </td>
                    <td style="text-align:center;">
                      0
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['nutrisi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['nutrisi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['nutrisi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['nutrisi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['nutrisi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['nutrisi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['nutrisi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['nutrisi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['nutrisi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['nutrisi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['nutrisi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['nutrisi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['nutrisi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['nutrisi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['nutrisi'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      <b>GANGGUAN POLA TIDUR</b>
                    </td>
                    <td style="text-align:center;">

                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      a. Tidak ada gangguan tidur
                    </td>
                    <td style="text-align:center;">
                      8
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['gangguan_pola_tidur'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['gangguan_pola_tidur'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['gangguan_pola_tidur'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['gangguan_pola_tidur'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['gangguan_pola_tidur'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['gangguan_pola_tidur'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['gangguan_pola_tidur'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['gangguan_pola_tidur'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['gangguan_pola_tidur'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['gangguan_pola_tidur'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['gangguan_pola_tidur'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['gangguan_pola_tidur'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['gangguan_pola_tidur'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['gangguan_pola_tidur'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['gangguan_pola_tidur'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      b. Gangguan pola tidur yang dilaporkan oleh pasien, keluarga atau petugas
                    </td>
                    <td style="text-align:center;">
                      12
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['gangguan_pola_tidur'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['gangguan_pola_tidur'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['gangguan_pola_tidur'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['gangguan_pola_tidur'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['gangguan_pola_tidur'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['gangguan_pola_tidur'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['gangguan_pola_tidur'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['gangguan_pola_tidur'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['gangguan_pola_tidur'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['gangguan_pola_tidur'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['gangguan_pola_tidur'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['gangguan_pola_tidur'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['gangguan_pola_tidur'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['gangguan_pola_tidur'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['gangguan_pola_tidur'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      <b>RIWAYAT JATUH</b>
                    </td>
                    <td style="text-align:center;">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <br>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      a. Tidak ada riwayat jatuh
                    </td>
                    <td style="text-align:center;">
                      8
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['riwayat_jatuh'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['riwayat_jatuh'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['riwayat_jatuh'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['riwayat_jatuh'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['riwayat_jatuh'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['riwayat_jatuh'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['riwayat_jatuh'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['riwayat_jatuh'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['riwayat_jatuh'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['riwayat_jatuh'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['riwayat_jatuh'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['riwayat_jatuh'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['riwayat_jatuh'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['riwayat_jatuh'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['riwayat_jatuh'] == 1 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle">
                      b. Ada riwayat jatuh dalam 3 bulan terakhir
                    </td>
                    <td style="text-align:center;">
                      12
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['riwayat_jatuh'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['riwayat_jatuh'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['riwayat_jatuh'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['riwayat_jatuh'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['riwayat_jatuh'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['riwayat_jatuh'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['riwayat_jatuh'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['riwayat_jatuh'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['riwayat_jatuh'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['riwayat_jatuh'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['riwayat_jatuh'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['riwayat_jatuh'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['riwayat_jatuh'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['riwayat_jatuh'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      <input type="checkbox"  class="form-control" {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['riwayat_jatuh'] == 2 ? 'checked' : '' : ''}}>
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align:middle;text-align:right">
                      <b>Total Skor</b>
                    </td>
                    <td style="text-align:center;">

                    </td>
                    <td style="text-align:center;vertical-align:center">
                      {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['p']['total'] : ''}}<br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['s']['total'] : ''}}<br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      {{isset($list_tanggal[0]) ? $laporan[$list_tanggal[0]]['m']['total'] : ''}}<br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['p']['total'] : ''}}<br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['s']['total'] : ''}}<br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      {{isset($list_tanggal[1]) ? $laporan[$list_tanggal[1]]['m']['total'] : ''}}<br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['p']['total'] : ''}}<br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['s']['total'] : ''}}<br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      {{isset($list_tanggal[2]) ? $laporan[$list_tanggal[2]]['m']['total'] : ''}}<br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['p']['total'] : ''}}<br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['s']['total'] : ''}}<br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      {{isset($list_tanggal[3]) ? $laporan[$list_tanggal[3]]['m']['total'] : ''}}<br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['p']['total'] : ''}}<br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['s']['total'] : ''}}<br>
                    </td>
                    <td style="text-align:center;vertical-align:center">
                      {{isset($list_tanggal[4]) ? $laporan[$list_tanggal[4]]['m']['total'] : ''}}<br>
                    </td>
                  </tr>

                  <tr>
                    <td style="text-align:center;" colspan="2">
                      <b>Tidak Beresiko: Skor < 90</b>
                    </td>
                    <td style="text-align:center;" colspan="15">
                      <b>Beresiko: Skor > 90</b>
                    </td>

                  </tr>

                </tbody>
              </table>
            </div>
              <div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </section>
        </form>

      </div>
    </div>
  </section>

  @include('layouts.tailscript')

</body>
<html>