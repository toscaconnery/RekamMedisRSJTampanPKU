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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> MONITORING DAN OBSERVASI PASIEN KHUSUS</h3>
      </div>
    </div>
    @include('layouts.bio')

    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Dokumen Monitoring dan Observasi
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
                <td>Monitoring dan Observasi Pasien Khusus</td>
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
        <form class="form-horizontal" method="post" action="ri_monitoring_observasi">
          {{ csrf_field() }}
          <input type="hidden" name="jumlah_form" id="jumlah_form" value="1">
          <section class="panel">
            <header class="panel-heading">
              Monitoring dan Observasi Pasien Khusus
            </header>
            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10%; text-align: center;">Tgl</th>
                    <th style="width: 10%; text-align: center;">Jam</th>
                    <th style="width: 40%; text-align: center;">Hasil Monitoring</th>
                    <th style="width: 40%; text-align: center;">Implementasi</th>
                    <th style="width: 5%; text-align: center;">Paraf</th>
                    <th style="width: 5%; text-align: center;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr id="form_1">
                    <td>
                      <input type="text" id="dp1" class="form-control" name="tanggal_1" required>
                    </td>
                    <td>
                      <input type="time" style="width: 8em;" class="form-control" name="jam_1" required>
                    </td>
                    <td>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="hasil_monitoring_1"></textarea>
                    </td>
                    <td>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="implementasi_1"></textarea>
                    </td>
                    <td><input type="checkbox" class="form-control" name="ttd_1"></td>
                    <td>
                      <div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_1"><i class="icon_close_alt2"></i></button></div>
                    </td>
                  </tr>
                  <tr id="last_row">
                    <td colspan="6">
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
        // alert('a');
        a = parseInt(a) + 1;
        $('#last_row').before('<tr id="form_'+a+'"><td><input type="text" id="dp'+a+'" class="form-control" name="tanggal_'+a+'" required></td><td><input type="time" style="width: 8em;" class="form-control" name="jam_'+a+'" required></td><td><textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="hasil_monitoring_'+a+'"></textarea></td><td><textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="implementasi_'+a+'"></textarea></td><td><input type="checkbox" class="form-control" name="ttd_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
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