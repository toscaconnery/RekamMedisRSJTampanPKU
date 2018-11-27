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
            <header class="panel-heading">
              Dokumen Penilaian Resiko Jatuh Edmunson
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
                  <td>Penilaian Edmunson</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_edmunson_pdf">PDF</a>
                      <a class="btn btn-success" href="#">EDIT</a>
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
          <form class="form-horizontal" method="post" action="ri_laboratorium">
            {{ csrf_field() }}

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
                      <th style="width: 9%; text-align: center;vertical-align:middle;" colspan="3">dd/mm/yyy</th>
                      <th style="width: 9%; text-align: center;vertical-align:middle;" colspan="3">dd/mm/yyy</th>
                      <th style="width: 9%; text-align: center;vertical-align:middle;" colspan="3">dd/mm/yyy</th>
                      <th style="width: 9%; text-align: center;vertical-align:middle;" colspan="3">dd/mm/yyy</th>
                      <th style="width: 9%; text-align: center;vertical-align:middle;" colspan="3">dd/mm/yyy</th>
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                    </tr>

                    <tr>
                      <td style="vertical-align:middle">
                        c. Lebih dari 80 tahun
                      </td>
                      <td style="text-align:center;">
                        
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
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
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                      <td style="text-align:center;vertical-align:center">
                        <input type="checkbox" class="form-control" name="">
                      </td>
                    </tr>

                    <tr>
                      <td style="vertical-align:middle;text-align:right">
                        <b>Total Skor</b>
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