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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> CATATAN PENGGUNAAN OBAT (CPO)</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Catatan Penggunaan Obat (CPO)
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
                  <td>Penggunaan Obat (CPO)</td>
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
      <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_penggunaan_obat">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-lg-12">
            <div class="col-lg-6">
              <section class="panel">
                <header class="panel-heading">
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Ruang Bangsal</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="ruang_bangsal" value="{{$ruang_bangsal}}" disabled="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"> No. Reg.</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="no_reg" value="{{$no_reg}}" disabled="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Masuk Tanggal</label>
                    <div class="col-sm-6">
                      <input type="text" autocomplete="off" onkeydown="return false" class="form-control" name="tanggal_masuk" value="{{$tanggal_masuk}}" disabled="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Keluar Tanggal</label>
                    <div class="col-sm-6">
                      <input type="text" autocomplete="off" onkeydown="return false" class="form-control" name="tanggal_keluar" value="{{$tanggal_keluar}}" disabled="">
                    </div>
                  </div>
                </div>
              </section>  
            </div>
            <div class="col-lg-6">
              <section class="panel">
                <header class="panel-heading">
                </header>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Diagnosis</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="diagnosis" disabled="" value="{{$diagnosis}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Dokter</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="dokter" disabled="" value="{{$dokter}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Riwayat Alergi</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="riwayat_alergi" disabled="" value="{{$riwayat_alergi}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label"> Konsumen</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="konsumen" disabled="" value="{{$konsumen}}">
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Catatan Penggunaan Obat
              </header>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10%; text-align: center;vertical-align:middle;" rowspan="2">Nama Obat,Dosis dan Kekuatan</th>
                        <th style="width: 12%; text-align: center;vertical-align:middle;" colspan="4">{{$h0}}</th>
                        <th style="width: 12%; text-align: center;vertical-align:middle;" colspan="4">{{$h1}}</th>
                        <th style="width: 12%; text-align: center;vertical-align:middle;" colspan="4">{{$h2}}</th>
                        <th style="width: 12%; text-align: center;vertical-align:middle;" colspan="4">{{$h3}}</th>
                        <th style="width: 12%; text-align: center;vertical-align:middle;" colspan="4">{{$h4}}</th>
                        <th style="width: 12%; text-align: center;vertical-align:middle;" colspan="4">{{$h5}}</th>
                        <th style="width: 5%; text-align: center;vertical-align:middle;" rowspan="2">Jml Obat</th>
                        <th style="width: 5%; text-align: center;vertical-align:middle;" rowspan="2">Ket</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;" rowspan="2">Act</a></th>
                      </tr>
                      <tr>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">P</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">Si</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">Sr</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">M</th>
                        
                        <th style="width: 3%; text-align: center;vertical-align:middle;">P</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">Si</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">Sr</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">M</th>
                        
                        <th style="width: 3%; text-align: center;vertical-align:middle;">P</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">Si</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">Sr</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">M</th>
                        
                        <th style="width: 3%; text-align: center;vertical-align:middle;">P</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">Si</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">Sr</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">M</th>

                        <th style="width: 3%; text-align: center;vertical-align:middle;">P</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">Si</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">Sr</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">M</th>

                        <th style="width: 3%; text-align: center;vertical-align:middle;">P</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">Si</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">Sr</th>
                        <th style="width: 3%; text-align: center;vertical-align:middle;">M</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach($pasien as $pkey => $pvalue)
                        {{-- {{dd($pvalue, $pkey)}} --}}
                        <tr>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="text" class="form-control" value="{{$pkey}}" disabled>
                          </td>

                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h0][1] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h0][2] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h0][3] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h0][4] == 1 ? 'checked' : ''}}>
                          </td>

                          
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h1][1] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h1][2] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h1][3] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h1][4] == 1 ? 'checked' : ''}}>
                          </td>
                          

                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h2][1] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h2][2] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h2][3] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h2][4] == 1 ? 'checked' : ''}}>
                          </td>

                          
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h3][1] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h3][2] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h3][3] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h3][4] == 1 ? 'checked' : ''}}>
                          </td>

                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h4][1] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h4][2] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h4][3] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h4][4] == 1 ? 'checked' : ''}}>
                          </td>

                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h5][1] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h5][2] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h5][3] == 1 ? 'checked' : ''}}>
                          </td>
                          <td style="text-align: center;vertical-align:middle; padding: 0px;">
                            <input type="checkbox" style="height: 25px" disabled class="form-control" {{$pvalue[$h5][4] == 1 ? 'checked' : ''}}>
                          </td>

                          <td style="text-align: center;vertical-align:middle;">
                            <input type="text" class="form-control" value="{{$pvalue['jumlah']}}" disabled>
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <input type="text" class="form-control" value="{{$pvalue['keterangan']}}" disabled>
                          </td>
                          <td style="text-align: center;vertical-align:middle;">
                            <a href="{{url('ri_penggunaan_obat')}}"><button type="button" class="btn btn-primary">Edit</button></a>
                          </td>
                        </tr>
                      @endforeach
                      <tr>
                        <td>Mengetahui Perawat</td>
                        <td colspan="4">{{$perawat[$h0]}}</td>
                        <td colspan="4">{{$perawat[$h1]}}</td>
                        <td colspan="4">{{$perawat[$h2]}}</td>
                        <td colspan="4">{{$perawat[$h3]}}</td>
                        <td colspan="4">{{$perawat[$h4]}}</td>
                        <td colspan="4">{{$perawat[$h5]}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>

                    </tbody>
                  </table>
              </section>
            </div>
          </section>
        </div>
      </div>
    </form>

  </div>
</div>
</section>

@include('layouts.tailscript')
</body>