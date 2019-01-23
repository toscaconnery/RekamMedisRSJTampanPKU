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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>Asuhan Gizi</h3>
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
                  <td>Dokumen Asuhan Gizi</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_asuhan_gizi">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_asuhan_gizi_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_asuhan_gizi_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_gizi_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal" method="post" action="ri_asuhan_gizi_list_konsultasi">
            {{csrf_field()}}
            <section class="panel">
              <header class="panel-heading">

              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="field1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">DHT</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="field2">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">TB</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="field3">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">BB</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="field4">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">DMI</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="field5">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 15%; text-align: center;vertical-align:middle;">Tanggal</th>
                      <th style="width: 10%; text-align: center;vertical-align:middle;">BB (KG)</th>
                      <th style="width: 50%; text-align: center;vertical-align:middle;">Konsultasi Gizi/Pengamatan</th>
                      <th style="width: 20%; text-align: center;vertical-align:middle;">Nama</th>
                      <th style="width: 5%; text-align: center;vertical-align:middle;">Check</th>
                      <th>Act</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr id="form_1">
                      <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tabel1_1" required></td>
                      <td>
                        <input type="text" class="form-control" name="tabel2_1" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="tabel3_1" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="tabel4_1" required>
                      </td>
                      <td>
                        <input type="checkbox" class="form-control" name="tabel5_1">
                      </td>
                      <td></td>
                    </tr>
                    <tr id="last_row">
                      <td colspan="9">
                        <input type="hidden" name="jumlah_form" id="jumlah_form" value="1">
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
        $('#last_row').before('<tr id="form_'+a+'"> <td style="text-align:center;"><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tabel1_'+a+'" required></td> <td> <input type="text" class="form-control" name="tabel2_'+a+'" required> </td> <td> <input type="text" class="form-control" name="tabel3_'+a+'" required> </td> <td> <input type="text" class="form-control" name="tabel4_'+a+'" required> </td> <td> <input type="checkbox" class="form-control" name="tabel5_'+a+'"> </td> <td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_'+a+'"><i class="icon_close_alt2"></i></button></div></td> </tr>');
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