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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> EVALUASI TINDAKAN KEPERAWATAN</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Evaluasi Tindakan Keperawatan
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
                  <td>Evaluasi Tindak Keperawatan</td>
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
          <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_evaluasi_keperawatan">
            {{ csrf_field() }}
            <input type="hidden" name="jumlah_form" id="jumlah_form" value="4">
            <section class="panel">
              <header class="panel-heading">
                Evaluasi Tindakan Keperawatan
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 8%; text-align: center;">Tanggal/Jam</th>
                      <th style="width: 40%; text-align: center;">Implementasi</th>
                      <th style="width: 40%; text-align: center;">Evaluasi</th>
                      <th style="width: 10%; text-align: center;">Nama</th>
                      <th style="width: 2%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr id="form_1">
                      <td>
                        <input id="dp1" type="text" value="{{date("m-d-Y")}}" size="16" class="form-control" name="tanggal_1">
                        <input type="time" class="form-control" name="jam_1" required>
                      </td>
                      <td>
                        <textarea class="form-control" rows="3" name="implementasi_1"></textarea>
                      </td>
                      <td>
                        <textarea class="form-control" rows="3" name="evaluasi_1">S : </textarea>
                      </td>
                      <td><input type="text" class="form-control" name="nama_user_1"></td>
                      <td>
                        <div class="btn-group">
                          <button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_1"><i class="icon_close_alt2"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr id="form_2">
                      <td>
                        <input id="dp2" type="text" value="{{date("m-d-Y")}}" size="16" class="form-control" name="tanggal_2">
                        <input type="time" class="form-control" name="jam_2" required>
                      </td>
                      <td>
                        <textarea class="form-control" rows="3" name="implementasi_2"></textarea>
                      </td>
                      <td>
                        <textarea class="form-control" rows="3" name="evaluasi_2">O : </textarea>
                      </td>
                      <td><input type="text" class="form-control" name="nama_user_2"></td>
                      <td>
                        <div class="btn-group">
                          <button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_2"><i class="icon_close_alt2"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr id="form_3">
                      <td>
                        <input id="dp3" type="text" value="{{date("m-d-Y")}}" size="16" class="form-control" name="tanggal_3">
                        <input type="time" class="form-control" name="jam_3" required>
                      </td>
                      <td>
                        <textarea class="form-control" rows="3" name="implementasi_3"></textarea>
                      </td>
                      <td>
                        <textarea class="form-control" rows="3" name="evaluasi_3">A : </textarea>
                      </td>
                      <td><input type="text" class="form-control" name="nama_user_3"></td>
                      <td>
                        <div class="btn-group">
                          <button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_3"><i class="icon_close_alt2"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr id="form_4">
                      <td>
                        <input id="dp4" type="text" value="{{date("m-d-Y")}}" size="16" class="form-control" name="tanggal_4">
                        <input type="time" class="form-control" name="jam_4" required>
                      </td>
                      <td>
                        <textarea class="form-control" rows="3" name="implementasi_4"></textarea>
                      </td>
                      <td>
                        <textarea class="form-control" rows="3" name="evaluasi_4">P : </textarea>
                      </td>
                      <td><input type="text" class="form-control" name="nama_user_4"></td>
                      <td>
                        <div class="btn-group">
                          <button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_4"><i class="icon_close_alt2"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr id="last_row">
                      <td colspan="9">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
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

    {{-- menambah row inputan --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form').click(function() {
          var a = document.getElementById('jumlah_form').value;
          a = parseInt(a) + 1;
          $('#last_row').before('<tr id="form_'+a+'"><td><input id="dp'+a+'" type="text" value="{{date("m-d-Y")}}" size="16" class="form-control" name="tanggal_'+a+'"><input type="time" class="form-control" name="jam_'+a+'" required></td><td><textarea class="form-control" rows="3" name="implementasi_'+a+'"></textarea></td><td><textarea class="form-control" rows="3" name="evaluasi_'+a+'"></textarea></td><td><input type="text" class="form-control" name="nama_user_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
          document.getElementById('jumlah_form').value = a;
        });
      });
    </script>

    {{-- menghapus row --}}
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