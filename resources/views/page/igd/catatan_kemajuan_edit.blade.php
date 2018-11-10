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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>Catatan kemajuan</h3>
        </div>
      </div>
      @include('layouts.bio')
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Daftar Catatan Kemajuan
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
                  <td>Catatan Kemajuan </td>
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
          <form class="form-horizontal " method="post" action="igd_catatan_kemajuan_edit">
            {{ csrf_field() }}
            <input type="hidden" id="jumlah_form_new" name="jumlah_form_new" value="0">
            <section class="panel">
              <header class="panel-heading">
                Catatan Kemajuan 
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 8%; text-align: center;">Tanggal/Jam</th>
                      <th style="width: 40%; text-align: center;">Catatan Kemajuan</th>
                      <th style="width: 40%; text-align: center;">Tindakan dan Terapi</th>
                      <th style="width: 10%; text-align: center;">Nama</th>
                      <th style="width: 2%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <input type="hidden" name="previous_id" value="{{$previous_id}}">
                    @foreach($pasien as $p)
                      <tr id="form_{{$p['id_data']}}">
                        <td>
                          <input type="text" value="{{$p['tanggal']}}" size="16" class="form-control sandbox-container" name="tanggal_{{$p['id_data']}}">
                          <input type="time" value="{{$p['jam']}}" class="form-control" name="jam_{{$p['id_data']}}" required>
                        </td>
                        <td>
                          <textarea class="form-control" rows="3" name="catatan_kemajuan_{{$p['id_data']}}">{{$p['catatan_kemajuan']}}</textarea>
                        </td>
                        <td>
                          <textarea class="form-control" rows="3" name="tindakan_terapi_{{$p['id_data']}}">{{$p['tindakan_terapi']}}</textarea>
                        </td>
                        <td>
                          <input type="text" value="{{$p['nama_user']}}" class="form-control" name="nama_user_{{$p['id_data']}}">
                        </td>
                        <td>
                          <div class="btn-group">
                          </div>
                        </td>
                      </tr>
                    @endforeach
                    <tr id="last_row">
                      <td colspan="9">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form"><i class="icon_plus_alt2"></i> Tambah</button>
                          <button class="btn btn-success" type="submit"><i class="icon_check_alt2"></i> Simpan</button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
          </form>
        </div>
      </div>
    </section>
  </section>

  @include('layouts.tailscript')

  {{-- menambah row inputan --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tambah_form').click(function() {
        var a = document.getElementById('jumlah_form_new').value;
        a = parseInt(a) + 1;
        $('#last_row').before('<tr id="form_new_'+a+'"><td><input type="text" value="{{date("d/m/Y")}}" size="16" class="form-control sandbox-container" name="tanggal_new_'+a+'"><input type="time" class="form-control" name="jam_new_'+a+'" required></td><td><textarea class="form-control" rows="3" name="catatan_kemajuan_new_'+a+'"></textarea></td><td><textarea class="form-control" rows="3" name="tindakan_terapi_new_'+a+'"></textarea></td><td><input type="text" class="form-control" name="nama_user_new_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_new_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
        document.getElementById('jumlah_form_new').value = a;
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