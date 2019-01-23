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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> PEMBERIAN INFORMASI </h3>
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
                  <td>Pemberian Informasi</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_pemberian_informasi">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_pemberian_informasi_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_pemberian_informasi_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_tumbuh_kembang_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal" method="post" action="ri_pemberian_informasi">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Pemberian Informasi
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10%; text-align: center; vertical-align: middle;">Tanggal<br>/Jam</th>
                      <th style="width: 56%; text-align: center; vertical-align: middle;">Informasi yang disampaikan</th>
                      <th style="width: 15%; text-align: center; vertical-align: middle;">Pemberi Informasi</th>
                      <th style="width: 15%; text-align: center; vertical-align: middle;">Penerima Informasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <input type="hidden" name="jumlah_form" id="jumlah_form" value="1">
                    <tr id="form_1">
                      <td>
                        <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_1" required>
                        <input type="time" class="form-control" name="jam_1" required>
                      </td>
                      <td>
                        <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="informasi_1"></textarea>
                      </td>
                      <td><input type="text" class="form-control" name="pemberi_1" required></td>
                      <td><input type="text" class="form-control" name="penerima_1" required></td>
                    </tr>
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

    @include('layouts.tailscript');

    {{-- menambah row inputan --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form').click(function() {
          var a = document.getElementById('jumlah_form').value;
          a = parseInt(a) + 1;
          $('#last_row').before('<tr id="form_'+a+'"> <td> <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_'+a+'" required> <input type="time" class="form-control" name="jam_'+a+'" required> </td> <td> <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="informasi_'+a+'"></textarea> </td> <td><input type="text" class="form-control" name="pemberi_'+a+'" required></td> <td><input type="text" class="form-control" name="penerima_'+a+'" required></td> <td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
          document.getElementById('jumlah_form').value = a;
        });
      });
    </script>

    {{-- menghapus row --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $(document).on('click', '.tombol_hapus', function() {
          var x = $(this).attr('id');
          var nomor = x.substring(13)
          $('#form_'+nomor).remove();
        });
      });
    </script>

  </body>


  <html>