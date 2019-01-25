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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> PELAPORAN EFEK SAMPING OBAT KOMITE FARMASI DAN TERAPI</h3>
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
                  <td>Pelaporan Efek Samping Obat Komite Farmasi dan Terapi</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_efek_samping">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_efek_samping_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_efek_samping_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_efek_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <form class="form-horizontal form-validate" id="register_form">
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Pasien
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label"> Suku</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="field1" value="{{$field1}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label"> Berat Badan</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="field2" value="{{$field2}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label"> Pekerjaan</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="field3" value="{{$field3}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label"> Penyakit Utama</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="field4" value="{{$field4}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesudahan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field5" {{$field5 == 1 ? 'checked' : ''}} value="1">
                        Sembuh 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field5" {{$field5 == 2 ? 'checked' : ''}} value="2">
                        Meninggal 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field5" {{$field5 == 3 ? 'checked' : ''}} value="3">
                        Sembuh dengan gejala sisa
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field5" {{$field5 == 4 ? 'checked' : ''}} value="4">
                        Belum sembuh 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field5" {{$field5 == 5 ? 'checked' : ''}} value="5">
                        Tidak tahu 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Penyakit/kondisi lain yang menyertai</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="field6_1" {{isset($field6[1]) ? 'checked' : ''}}>
                        Gangguan Ginjal
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="field6_2" {{isset($field6[2]) ? 'checked' : ''}}>
                        Gangguan Hati
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="field6_3" {{isset($field6[3]) ? 'checked' : ''}}>
                        Alergi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="field6_4" {{isset($field6[4]) ? 'checked' : ''}}>
                        Kondisi medis lainnya
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled name="field6_5" {{isset($field6[5]) ? 'checked' : ''}}>
                        Faktor industri, pertanian, kimia, dll
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Reaksi Efek Samping Obat (E.S.O)
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label">Saat/Tanggal mulai terjadi</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="field7" value="{{$field7}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Bentuk/Manifestasi E.S.O yang terjadi</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="field8" value="{{$field8}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesudahan E.S.O</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field9" {{$field9 == 1 ? 'checked' : ''}} value="1">
                        Sembuh 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field9" {{$field9 == 2 ? 'checked' : ''}} value="2">
                        Meninggal 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field9" {{$field9 == 3 ? 'checked' : ''}} value="3">
                        Sembuh dengan gejala sisa
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field9" {{$field9 == 4 ? 'checked' : ''}} value="4">
                        Belum sembuh 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field9" {{$field9 == 5 ? 'checked' : ''}} value="5">
                        Tidak tahu 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="field10" value="{{$field10}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Reaksi E.S.O yang pernah di alami</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="field11" value="{{$field11}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Tindakan yang telah dilakukan untuk mengatasi reaksi E.S.O</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="field12" value="{{$field12}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah reaksi E.S.O hilang setelah obat dihentikan?</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field13" {{$field13 == 1 ? 'checked' : ''}} value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field13" {{$field13 == 2 ? 'checked' : ''}} value="2">
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field13" {{$field13 == 3 ? 'checked' : ''}} value="3">
                        Tidak Tahu
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah reaksi E.S.O yang sama timbul sewaktu obat yang dicurigai digunakan kembali</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field14" {{$field14 == 1 ? 'checked' : ''}} value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field14" {{$field14 == 2 ? 'checked' : ''}} value="2">
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field14" {{$field14 == 3 ? 'checked' : ''}} value="3">
                        Tidak Tahu
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">

            <section class="panel">
              <header class="panel-heading">
                 Obat
              </header>
              <div class="panel-body">
                <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th style="width: 15%; text-align: center;vertical-align:middle;" rowspan="2">Nama (Nama dagang/Pabrik)</th>
                      <th style="width: 15%; text-align: center;vertical-align:middle;" rowspan="2">Bentuk Sediaan</th>
                      <th style="width: 10%; text-align: center;vertical-align:middle;" rowspan="2">Obat yang dicurigai</th>
                      <th style="width: 48%; text-align: center;vertical-align:middle;" colspan="4">Pemberian</th>
                      <th style="width: 15%; text-align: center;vertical-align:middle;" rowspan="2">Indikasi Penggunaan</th>
                    </tr>
                    <tr>
                      <th style="width: 12%; text-align: center;vertical-align:middle;">Rute</th>
                      <th style="width: 12%; text-align: center;vertical-align:middle;">Dosis/Waktu</th>
                      <th style="width: 12%; text-align: center;vertical-align:middle;">Tgl Mulai</th>
                      <th style="width: 12%; text-align: center;vertical-align:middle;">Tgl Akhir</th>
                    </tr>
                  </thead>

                  <tbody>
                    @php
                      $idx = 0;
                    @endphp
                    @foreach($obat as $o)
                    @php
                      $idx += 1;
                    @endphp
                    <tr id="form_1">
                      <td style="text-align:center;">
                        <input type="text" disabled class="form-control" name="obat1_1" value="{{$o[0]}}" required>
                      </td>
                       <td style="text-align:center;">
                        <input type="text" disabled class="form-control" name="obat2_1" value="{{$o[1]}}" required>
                      </td>
                      <td style="text-align:center;">
                        <input type="checkbox" disabled class="form-control" name="obat3_1" {{$o[2] == 1 ? 'checked' : ''}}>
                      </td>
                       <td style="text-align:center;">
                        <input type="text" disabled class="form-control" name="obat4_1" value="{{$o[3]}}" required>
                      </td>
                      <td style="text-align:center;">
                        <input type="text" disabled class="form-control" name="obat5_1" value="{{$o[4]}}" required>
                      </td>
                      <td style="text-align:center;">
                        <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="obat6_1" value="{{$o[5]}}">
                      </td>
                      <td style="text-align:center;">
                        <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="obat7_1" value="{{$o[6]}}">
                      </td>
                      <td style="text-align:center;">
                        <input type="text" disabled class="form-control" name="obat8_1" value="{{$o[7]}}" required>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

                
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Pelapor
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="field15" value="{{$field15}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Profesi</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field16" {{$field16 == 1 ? 'checked' : ''}} value="1">
                        Dokter
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field16" {{$field16 == 2 ? 'checked' : ''}} value="2">
                        Perawat 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="field16" {{$field16 == 3 ? 'checked' : ''}} value="3">
                        Farmasis
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Asal ruangan/poliklinik</label>
                  <div class="col-sm-10">
                    <input type="text" disabled class="form-control" name="field17" value="{{$field17}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="field18" value="{{$field18}}">
                  </div>
                </div>
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


<html>