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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>Catatan Perkembangan</h3>
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
                  <td>Catatan Kemajuan </td>
                  <td>{{$tanggal_pengisian}}</td>
                  <td>{{$nama_pengisi}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/igd_catatan_perkembangan">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/igd_catatan_perkembangan_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/igd_catatan_perkembangan_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/igd_perkembangan_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal " method="post" action="igd_catatan_perkembangan">
            {{ csrf_field() }}
            <input type="hidden" id="jumlah_form" name="jumlah_form" value="1">
            <section class="panel">
              <header class="panel-heading">
                Catatan Kemajuan 
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 8%; text-align: center;">TGL & JAM</th>
                      <th style="width: 17%; text-align: center;">PROFESI/BAGIAN</th>
                      <th style="width: 70%; text-align: center;">HASIL PEMERIKSAAN, ANALISIS, RENCANA PENATALAKSANAAN PASIEN <br><span style="font-size: 3.3mm; font-style: italic;">Dituliskan dengan format SOAP/ADIME, disertai dengan target yang terukur, Evaluasi Hasil Tatalaksana dituliskan dalam Asesmen</span> </th>
                      <th style="width: 3%; text-align: center;">VERIFIKASI DPJP</th>
                      <th style="width: 2%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr id="form_1">
                      <td>
                        <input type="text" value="{{date("d/m/Y")}}" size="16" class="form-control sandbox-container" name="tanggal_1">
                        <input type="time" class="form-control" name="jam_1" required>
                      </td>
                      <td>
                        <textarea class="form-control" rows="3" name="profesi_bagian_1" style="resize: none;"></textarea>
                      </td>
                      <td>
                        <textarea class="form-control" rows="3" name="hasil_1"></textarea>
                      </td>
                      <td>
                        <input type="checkbox" class="form-control" name="verifikasi_1">
                      </td>
                      <td>
                        <div class="btn-group">
                          <button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_1"><i class="icon_close_alt2"></i></button>
                        </div>
                      </td>
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
  </section>

  @include('layouts.tailscript')

  {{-- menambah row inputan --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tambah_form').click(function() {
        var a = document.getElementById('jumlah_form').value;
        a = parseInt(a) + 1;
        $('#last_row').before('<tr id="form_'+a+'"><td><input type="text" value="{{date("d/m/Y")}}" size="16" class="form-control sandbox-container" name="tanggal_'+a+'"><input type="time" class="form-control" name="jam_'+a+'" required></td><td><textarea class="form-control" rows="3" name="profesi_bagian_'+a+'" style="resize: none;"></textarea></td><td><textarea class="form-control" rows="3" name="hasil_'+a+'"></textarea></td><td><input type="checkbox" class="form-control" name="verifikasi_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
        document.getElementById('jumlah_form').value = a;
        $('.sandbox-container').datepicker({
          'format' : 'dd/mm/yyyy',
          'autoclose' : true,
          'todayHighlight' : true,
          'toggleActive': true
        });
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