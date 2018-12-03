<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.headscript')
  <style type="text/css">
    tbody tr td.formtd {
      padding: 0px;
      padding-bottom: 0px;
    }
    tbody tr td.formtd input {
      width: 100%;
      box-sizing: border-box;
    }
    tbody tr td.formtd textarea {
      width: 100%;
      box-sizing: border-box;
      resize: none;
    }
    table {
      table-layout: fixed;
    }
  </style>
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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> RIWAYAT PENGGUNAAN OBAT (REKONSILIASI OBAT)</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Riwayat Penggunaan Obat (Rekonsiliasi Obat)
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
                  <td>Riwayat Penggunaan Obat (Rekonsiliasi Obat)</td>
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
      <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_riwayat_obat_edit">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2"> Tanggal Masuk</label>
                  <div class="col-sm-2">
                    <input type="text" name="field1" value="{{$field1}}" autocomplete="off" onkeydown="return false" class="form-control sandbox-container">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Nomor Farmasi</label>
                  <div class="col-sm-2">
                    <input type="text" name="field2" value="{{$field2}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Dokter Ruangan</label>
                  <div class="col-sm-8">
                    <input type="text" name="field3" value="{{$field3}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Alergi</label>
                  <div class="col-sm-8">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="field4" {{$field4 == 1 ? 'checked' : ''}}> Tidak ada Riwayat Alergi
                    </label>
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
                Obat Resep
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th rowspan="2" style="width: 10%; text-align: center;">Nama Generik</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Nama Dagang</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Regimen</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Sumber Obat</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Tgl. Mulai</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Tgl. Stop</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Jml Obat Tersisa</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Status Obat<br>Saat Admisi</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Status Obat<br>Saat Pulang</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Catatan</th>
                      <th rowspan="2" style="width: 4%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $idx_resep = 0;
                    @endphp
                    @foreach($resep as $r)
                    @php
                      $idx_resep += 1;
                    @endphp
                    <tr id="form_resep_1">
                      <td class="formtd"><textarea class="form-control" name="nama_generik_{{$idx_resep}}">{{$r[0]}}</textarea></td>
                      <td class="formtd"><textarea class="form-control" name="nama_dagang_{{$idx_resep}}">{{$r[1]}}</textarea></td>
                      <td class="formtd"><textarea class="form-control" name="regimen_{{$idx_resep}}">{{$r[2]}}</textarea></td>
                      <td class="formtd"><textarea class="form-control" name="sumber_obat_{{$idx_resep}}">{{$r[3]}}</textarea></td>
                      <td><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" value="{{$r[4]}}" name="tgl_mulai_{{$idx_resep}}"></td>
                      <td><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" value="{{$r[5]}}" name="tgl_stop_{{$idx_resep}}"></td>
                      <td class="formtd"><textarea class="form-control" name="jml_obat_tersisa_{{$idx_resep}}">{{$r[6]}}</textarea></td>
                      <td class="formtd" style="table-layout: fixed; vertical-align: middle;">
                        <select class="form-control" style="box-sizing: border-box; height: 100%" name="status_admisi_{{$idx_resep}}">
                          <option></option>
                          <option {{$r[7] == 'L' ? 'selected' : ''}} value="L">Lanjut</option>
                          <option {{$r[7] == 'T' ? 'selected' : ''}} value="T">Tunda</option>
                          <option {{$r[7] == 'H' ? 'selected' : ''}} value="H">Henti</option>
                        </select>
                      </td>
                      <td class="formtd" style="table-layout: fixed; vertical-align: middle;">
                        <select class="form-control" style="box-sizing: border-box; height: 100%" name="status_pulang_{{$idx_resep}}">
                          <option></option>
                          <option {{$r[8] == 'L' ? 'selected' : ''}} value="L">Lanjut</option>
                          <option {{$r[8] == 'T' ? 'selected' : ''}} value="T">Tunda</option>
                          <option {{$r[8] == 'H' ? 'selected' : ''}} value="H">Henti</option>
                        </select>
                      </td>
                      <td class="formtd"><textarea class="form-control" name="catatan_{{$idx_resep}}">{{$r[9]}}</textarea></td>
                      <td><div class="btn-group"><button class="btn btn-default tombol_hapus_resep" type="button" id="tombol_hapus_resep_{{$idx_resep}}"><i class="icon_close_alt2"></i></button></div></td>
                    </tr>
                    @endforeach
                    <tr id="last_row_resep">
                      <input type="hidden" name="jumlah_form_resep" id="jumlah_form_resep" value="{{$idx_resep}}">
                      <td colspan="11">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_resep"><i class="icon_plus_alt2"></i> Tambah</button>
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
                Obat Non-Resep (contoh : Produk OTC, herbal dll)
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th rowspan="2" style="width: 10%; text-align: center;">Nama Generik</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Nama Dagang</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Regimen</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Sumber Obat</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Tgl. Mulai</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Tgl. Stop</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Jml Obat Tersisa</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Status Obat<br>Saat Admisi</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Status Obat<br>Saat Pulang</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Catatan</th>
                      <th rowspan="2" style="width: 4%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $idx_nonresep = 0;
                    @endphp
                    @foreach($nonresep as $n)
                    <tr id="form_non_resep_1">
                      @php
                        $idx_nonresep += 1;
                      @endphp
                      <td class="formtd"><textarea class="form-control" name="nama_generik_non_{{$idx_nonresep}}">{{$n[0]}}</textarea></td>
                      <td class="formtd"><textarea class="form-control" name="nama_dagang_non_{{$idx_nonresep}}">{{$n[1]}}</textarea></td>
                      <td class="formtd"><textarea class="form-control" name="regimen_non_{{$idx_nonresep}}">{{$n[2]}}</textarea></td>
                      <td class="formtd"><textarea class="form-control" name="sumber_obat_non_{{$idx_nonresep}}">{{$n[3]}}</textarea></td>
                      <td><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" value="{{$n[4]}}" name="tgl_mulai_non_{{$idx_nonresep}}"></td>
                      <td><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" value="{{$n[5]}}" name="tgl_stop_non_{{$idx_nonresep}}"></td>
                      <td class="formtd"><textarea class="form-control" name="jml_obat_tersisa_non_{{$idx_nonresep}}">{{$n[6]}}</textarea></td>
                      <td class="formtd" style="table-layout: fixed; vertical-align: middle;">
                        <select class="form-control" style="box-sizing: border-box; height: 100%" name="status_admisi_non_{{$idx_nonresep}}">
                          <option></option>
                          <option {{$n[7] == 'L' ? 'selected' : ''}} value="L">Lanjut</option>
                          <option {{$n[7] == 'T' ? 'selected' : ''}} value="T">Tunda</option>
                          <option {{$n[7] == 'H' ? 'selected' : ''}} value="H">Henti</option>
                        </select>
                      </td>
                      <td class="formtd" style="table-layout: fixed; vertical-align: middle;">
                        <select class="form-control" style="box-sizing: border-box; height: 100%" name="status_pulang_non_{{$idx_nonresep}}">
                          <option></option>
                          <option {{$n[8] == 'L' ? 'selected' : ''}} value="L">Lanjut</option>
                          <option {{$n[8] == 'T' ? 'selected' : ''}} value="T">Tunda</option>
                          <option {{$n[8] == 'H' ? 'selected' : ''}} value="H">Henti</option>
                        </select>
                      </td>
                      <td class="formtd"><textarea class="form-control" name="catatan_non_{{$idx_nonresep}}">{{$n[9]}}</textarea></td>
                      <td><div class="btn-group"><button class="btn btn-default tombol_hapus_non_resep" type="button" id="tombol_hapus_non_resep_{{$idx_nonresep}}"><i class="icon_close_alt2"></i></button></div></td>
                    </tr>
                    @endforeach
                    <tr id="last_row_non_resep">
                      <input type="hidden" name="jumlah_form_non_resep" id="jumlah_form_non_resep" value="1">
                      <td colspan="11">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_non_resep"><i class="icon_plus_alt2"></i> Tambah</button>
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
                Sumber Informasi Obat
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2"> Status pasien di medical resort</label>
                  <div class="col-sm-8">
                    <input type="text" name="field5" value="{{$field5}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Pasien/Keluarga Pasien</label>
                  <div class="col-sm-6">
                    <input type="text" name="field6" value="{{$field6}}" class="form-control">
                  </div>
                  <label class="col-sm-1 control-label">No.Telp</label>
                  <div class="col-sm-2">
                    <input type="text" name="field7" value="{{$field7}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Apoteker di luar Rumah Sakit Jiwa Tampan</label>
                  <div class="col-sm-6">
                    <input type="text" name="field8" value="{{$field8}}" class="form-control">
                  </div>
                  <label class="col-sm-1 control-label">No.Telp</label>
                  <div class="col-sm-2">
                    <input type="text" name="field9" value="{{$field9}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Lainnya</label>
                  <div class="col-sm-8">
                    <input type="text" name="field10" value="{{$field10}}" class="form-control">
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
                Pembuat Daftar Obat
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label"> Apoteker</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="field11" value="{{$field11}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label"> Telepon</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="field12" value="{{$field12}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label"> Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="field13" value="{{$field13}}">
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
      $('#tambah_form_resep').click(function() {
        var a = document.getElementById('jumlah_form_resep').value;
        a = parseInt(a) + 1;
        $('#last_row_resep').before('<tr id="form_resep_'+a+'"> <td class="formtd"><textarea class="form-control" name="nama_generik_'+a+'"></textarea></td> <td class="formtd"><textarea class="form-control" name="nama_dagang_'+a+'"></textarea></td> <td class="formtd"><textarea class="form-control" name="regimen_'+a+'"></textarea></td> <td class="formtd"><textarea class="form-control" name="sumber_obat_'+a+'"></textarea></td> <td><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_mulai_'+a+'"></td> <td><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_stop_'+a+'"></td> <td class="formtd"><textarea class="form-control" name="jml_obat_tersisa_'+a+'"></textarea></td> <td class="formtd" style="table-layout: fixed; vertical-align: middle;"> <select class="form-control" style="box-sizing: border-box; height: 100%" name="status_admisi_'+a+'"> <option></option> <option value="L">Lanjut</option> <option value="T">Tunda</option> <option value="H">Henti</option> </select> </td> <td class="formtd" style="table-layout: fixed; vertical-align: middle;"> <select class="form-control" style="box-sizing: border-box; height: 100%" name="status_pulang_'+a+'"> <option></option> <option value="L">Lanjut</option> <option value="T">Tunda</option> <option value="H">Henti</option> </select> </td> <td class="formtd"><textarea class="form-control" name="catatan_'+a+'"></textarea></td> <td><div class="btn-group"><button class="btn btn-default tombol_hapus_resep" type="button" id="tombol_hapus_resep_'+a+'"><i class="icon_close_alt2"></i></button></div></td> </tr>');
        document.getElementById('jumlah_form_resep').value = a;
      });
    });
  </script>

  {{-- menghapus row resep --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $(document).on('click', '.tombol_hapus_resep', function() {
        var x = $(this).attr('id');
        var nomor = x.substring(19);
        $('#form_resep_'+nomor).remove();
      });
    });
  </script>

  {{-- menambah row inputan non resep --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tambah_form_non_resep').click(function() {
        var a = document.getElementById('jumlah_form_non_resep').value;
        a = parseInt(a) + 1;
        $('#last_row_non_resep').before('<tr id="form_non_resep_'+a+'"> <td class="formtd"><textarea class="form-control" name="nama_generik_non_'+a+'"></textarea></td> <td class="formtd"><textarea class="form-control" name="nama_dagang_non_'+a+'"></textarea></td> <td class="formtd"><textarea class="form-control" name="regimen_non_'+a+'"></textarea></td> <td class="formtd"><textarea class="form-control" name="sumber_obat_non_'+a+'"></textarea></td> <td><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_mulai_non_'+a+'"></td> <td><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_stop_non_'+a+'"></td> <td class="formtd"><textarea class="form-control" name="jml_obat_tersisa_non_'+a+'"></textarea></td> <td class="formtd" style="table-layout: fixed; vertical-align: middle;"> <select class="form-control" style="box-sizing: border-box; height: 100%" name="status_admisi_non_'+a+'"> <option></option> <option value="L">Lanjut</option> <option value="T">Tunda</option> <option value="H">Henti</option> </select> </td> <td class="formtd" style="table-layout: fixed; vertical-align: middle;"> <select class="form-control" style="box-sizing: border-box; height: 100%" name="status_pulang_non_'+a+'"> <option></option> <option value="L">Lanjut</option> <option value="T">Tunda</option> <option value="H">Henti</option> </select> </td> <td class="formtd"><textarea class="form-control" name="catatan_non_'+a+'"></textarea></td> <td><div class="btn-group"><button class="btn btn-default tombol_hapus_non_resep" type="button" id="tombol_hapus_non_resep_'+a+'"><i class="icon_close_alt2"></i></button></div></td> </tr>');
        document.getElementById('jumlah_form_non_resep').value = a;
      });
    });
  </script>

  {{-- menghapus row non resep --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $(document).on('click', '.tombol_hapus_non_resep', function() {
        var x = $(this).attr('id');
        var nomor = x.substring(23);
        $('#form_non_resep_'+nomor).remove();
      });
    });
  </script>

</body>


<html>