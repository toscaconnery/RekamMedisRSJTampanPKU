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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Catatan Perkembangan Pasien Terintegrasi Rawat Inap</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Catatan Perkembangan Pasien Terintegrasi Rawat Inap
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
                  <td>Catatan Perkembangan Pasien Terintegrasi</td>
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
          <form class="form-horizontal" method="post" action="ri_catatan_perkembangan_edit">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Hasil Pemeriksaan, Analisis, Rencana Penatalaksanaan Pasien 
              </header>
              <div class="form-group">
                <div class="col-sm-2"></div>
                <label class="col-sm-8 control-label">(Dituliskan dengan Format SOAP/ADIME, disertai dengan Target yang Terukur, Evaluasi Hasil Tatalaksana dituliskan dalam Asesmen.</label>
                <div class="col-sm-2"></div>
              </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10%; text-align: center;">TGL & JAM</th>
                    <th style="width: 15%; text-align: center;">PROFESI/BAGIAN</th>
                    <th style="width: 67%; text-align: center;">HASIL PEMERIKSAAN, ANALISIS, RENCANA PENTATALAKSANAAN PASIEN</th>
                    <th style="width: 5%; text-align: center;">VERIFIKASI</th>
                    <th style="width: 3%; text-align: center;">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  <input type="hidden" name="previous_data" value="{{$previous_data}}">
                  @foreach($pasien as $p)
                  <tr id="form_{{$p['id_data']}}">
                    <td>
                      <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_{{$p['id_data']}}" required value="{{$p['tanggal']}}">
                      <input type="time" class="form-control" name="jam_{{$p['id_data']}}" required value="{{$p['jam']}}">
                    </td>
                    <td>
                      <input type="text" class="form-control" name="profesi_{{$p['id_data']}}" readonly value="{{$p['profesi']}}">
                    </td>
                    <td>
                      <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="keterangan_{{$p['id_data']}}">{{$p['keterangan']}}</textarea>
                    </td>
                    <td><input type="checkbox" class="form-control" name="ttd_{{$p['id_data']}}" {{$p['ttd'] == True ? 'checked' : ''}}></td>
                    <td></td>
                  </tr>
                  @endforeach
                  <input type="hidden" name="jumlah_form_new" id="jumlah_form_new" value="0">
                  <tr id="last_row">
                    <td colspan="4">
                      <div class="btn-group">
                        <button class="btn btn-primary" type="button" id="tambah_form"><i class="icon_plus_alt2"></i> Tambah</button>
                        <button class="btn btn-success" type="submit"><i class="icon_check_alt2"></i> Simpan</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
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
          var a = document.getElementById('jumlah_form_new').value;
          // alert('a');
          a = parseInt(a) + 1;
          $('#last_row').before('<tr id="form_new_'+a+'"><td><input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_new_'+a+'" required><input type="time" class="form-control" name="jam_new_'+a+'" required></td><td><input type="text" class="form-control" name="profesi_new_'+a+'" readonly value="Profesi A"></td><td><textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="keterangan_new_'+a+'"></textarea></td><td><input type="checkbox" class="form-control" name="ttd_new_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
          document.getElementById('jumlah_form_new').value = a;
        });
      });
    </script>

    {{-- menghapus row --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $(document).on('click', '.tombol_hapus', function() {
          var x = $(this).attr('id');
          var nomor = x.substring(13)
          $('#form_new_'+nomor).remove();
        });
      });
    </script>

    </body>
    <html>