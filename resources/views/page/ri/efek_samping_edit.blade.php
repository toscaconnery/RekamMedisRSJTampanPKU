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
            <header class="panel-heading">
              Pelaporan Efek Samping Obat Komite Farmasi dan Terapi
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
                  <td>Pelaporan Efek Samping Obat Komite Farmasi dan Terapi</td>
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

      <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_efek_samping_edit">
        {{ csrf_field() }}

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
                    <input type="text" class="form-control" name="field1" value="{{$field1}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label"> Berat Badan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="field2" value="{{$field2}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label"> Pekerjaan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="field3" value="{{$field3}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label"> Penyakit Utama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="field4" value="{{$field4}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesudahan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="field5" {{$field5 == 1 ? 'checked' : ''}} value="1">
                        Sembuh 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="field5" {{$field5 == 2 ? 'checked' : ''}} value="2">
                        Meninggal 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="field5" {{$field5 == 3 ? 'checked' : ''}} value="3">
                        Sembuh dengan gejala sisa
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="field5" {{$field5 == 4 ? 'checked' : ''}} value="4">
                        Belum sembuh 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="field5" {{$field5 == 5 ? 'checked' : ''}} value="5">
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
                        <input type="checkbox" name="field6_1" {{isset($field6[1]) ? 'checked' : ''}}>
                        Gangguan Ginjal
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="field6_2" {{isset($field6[2]) ? 'checked' : ''}}>
                        Gangguan Hati
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="field6_3" {{isset($field6[3]) ? 'checked' : ''}}>
                        Alergi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="field6_4" {{isset($field6[4]) ? 'checked' : ''}}>
                        Kondisi medis lainnya
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="field6_5" {{isset($field6[5]) ? 'checked' : ''}}>
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
                    <input type="text" class="form-control" name="field7" value="{{$field7}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Bentuk/Manifestasi E.S.O yang terjadi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="field8" value="{{$field8}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesudahan E.S.O</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="field9" {{$field9 == 1 ? 'checked' : ''}} value="1">
                        Sembuh 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="field9" {{$field9 == 2 ? 'checked' : ''}} value="2">
                        Meninggal 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="field9" {{$field9 == 3 ? 'checked' : ''}} value="3">
                        Sembuh dengan gejala sisa
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="field9" {{$field9 == 4 ? 'checked' : ''}} value="4">
                        Belum sembuh 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="field9" {{$field9 == 5 ? 'checked' : ''}} value="5">
                        Tidak tahu 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="field10" value="{{$field10}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Reaksi E.S.O yang pernah di alami</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="field11" value="{{$field11}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Tindakan yang telah dilakukan untuk mengatasi reaksi E.S.O</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="field12" value="{{$field12}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah reaksi E.S.O hilang setelah obat dihentikan?</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="field13" {{$field13 == 1 ? 'checked' : ''}} value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="field13" {{$field13 == 2 ? 'checked' : ''}} value="2">
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="field13" {{$field13 == 3 ? 'checked' : ''}} value="3">
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
                        <input type="radio" name="field14" {{$field14 == 1 ? 'checked' : ''}} value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="field14" {{$field14 == 2 ? 'checked' : ''}} value="2">
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="field14" {{$field14 == 3 ? 'checked' : ''}} value="3">
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
                      <th rowspan="2"></th>
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
                        <input type="text" class="form-control" name="obat1_1" value="{{$o[0]}}" required>
                      </td>
                       <td style="text-align:center;">
                        <input type="text" class="form-control" name="obat2_1" value="{{$o[1]}}" required>
                      </td>
                      <td style="text-align:center;">
                        <input type="checkbox" class="form-control" name="obat3_1" {{$o[2] == 1 ? 'checked' : ''}}>
                      </td>
                       <td style="text-align:center;">
                        <input type="text" class="form-control" name="obat4_1" value="{{$o[3]}}" required>
                      </td>
                      <td style="text-align:center;">
                        <input type="text" class="form-control" name="obat5_1" value="{{$o[4]}}" required>
                      </td>
                      <td style="text-align:center;">
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="obat6_1" value="{{$o[5]}}">
                      </td>
                      <td style="text-align:center;">
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="obat7_1" value="{{$o[6]}}">
                      </td>
                      <td style="text-align:center;">
                        <input type="text" class="form-control" name="obat8_1" value="{{$o[7]}}" required>
                      </td>
                      <td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_1"><i class="icon_close_alt2"></i></button></div></td>
                    </tr>
                    @endforeach
                    <tr id="last_row">
                      <input type="hidden" name="jumlah_form" id="jumlah_form" value="1">
                      <td colspan="8">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
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
                    <input type="text" class="form-control" name="field15" value="{{$field15}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Profesi</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="field16" {{$field16 == 1 ? 'checked' : ''}} value="1">
                        Dokter
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="field16" {{$field16 == 2 ? 'checked' : ''}} value="2">
                        Perawat 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="field16" {{$field16 == 3 ? 'checked' : ''}} value="3">
                        Farmasis
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Asal ruangan/poliklinik</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="field17" value="{{$field17}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="field18" value="{{$field18}}">
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</section>

@include('layouts.tailscript')

{{-- menambah row inputan resep --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tambah_form').click(function() {
        var a = document.getElementById('jumlah_form').value;
        a = parseInt(a) + 1;
        $('#last_row').before('<tr id="form_'+a+'"> <td style="text-align:center;"> <input type="text" class="form-control" name="obat1_'+a+'" required> </td> <td style="text-align:center;"> <input type="text" class="form-control" name="obat2_'+a+'" required> </td> <td style="text-align:center;"> <input type="checkbox" class="form-control" name="obat3_'+a+'"> </td> <td style="text-align:center;"> <input type="text" class="form-control" name="obat4_'+a+'" required> </td> <td style="text-align:center;"> <input type="text" class="form-control" name="obat5_'+a+'" required> </td> <td style="text-align:center;"> <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="obat6_'+a+'"> </td> <td style="text-align:center;"> <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="obat7_'+a+'"> </td> <td style="text-align:center;"> <input type="text" class="form-control" name="obat8_'+a+'" required> </td><td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_'+a+'"><i class="icon_close_alt2"></i></button></div></td> </tr>');
        document.getElementById('jumlah_form').value = a;
      });
    });
  </script>

  {{-- menghapus row resep --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $(document).on('click', '.tombol_hapus', function() {
        var x = $(this).attr('id');
        var nomor = x.substring(13);
        $('#form_'+nomor).remove();
      });
    });
  </script>
</body>


<html>