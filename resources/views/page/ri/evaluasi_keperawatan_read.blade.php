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
                      <a class="btn btn-primary" href="{{url('')}}/ri_evaluasi_pdf">PDF</a>
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
          <form class="form-horizontal form-validate" method="post" id="register_form">
            <input type="hidden" name="jumlah_form" id="jumlah_form" value="0">
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
                    <input type="hidden" name="previous_value" value="{{$previous_value}}">
                    @foreach($pasien as $p)
                    <tr id="form_{{$p['id_data']}}">
                      <td>
                        <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_{{$p['id_data']}}" value="{{$p['tanggal']}}">
                        <input type="time" disabled class="form-control" name="jam_{{$p['id_data']}}" required value="{{$p['jam']}}">
                      </td>
                      <td>
                        <textarea class="form-control" rows="3" name="implementasi_{{$p['id_data']}}" readonly>{{$p['implementasi']}}</textarea>
                      </td>
                      <td>
                        <textarea class="form-control" rows="3" name="evaluasi_{{$p['id_data']}}" readonly>{{$p['evaluasi']}}</textarea>
                      </td>
                      <td><input type="text" disabled class="form-control" name="nama_user_{{$p['id_data']}}" value="{{$p['nama_user']}}"></td>
                      <td>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </section>
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
          $('#last_row').before('<tr id="form_new_'+a+'"><td><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_new_'+a+'"><input type="time" class="form-control" name="jam_new_'+a+'" required></td><td><textarea class="form-control" rows="3" name="implementasi_new_'+a+'"></textarea></td><td><textarea class="form-control" rows="3" name="evaluasi_new_'+a+'"></textarea></td><td><input type="text" disabled class="form-control" name="nama_user_new_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_new_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
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