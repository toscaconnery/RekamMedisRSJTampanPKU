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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Kebutuhan Informasi dan Edukasi Pasien/Keluarga Rawat Jalan</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Kebutuhan Informasi dan Edukasi
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
                  <td>Kebutuhan Informasi dan edukasi </td>
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
          <form class="form-horizontal" method="post" action="rj_informasi_edukasi_list_informasi_edit">
            {{ csrf_field() }}
            <input type="hidden" name="jumlah_form_new" id="jumlah_form_new" value="0">
            <section class="panel">
              <header class="panel-heading">
                Obat yang Diminum Saat Ini
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th rowspan="2" style="width: 12%; text-align: center;">Tgl</th>
                      <th rowspan="2" style="width: 12%; text-align: center;">Poliklinik</th>
                      <th rowspan="2" style="width: 20%; text-align: center;">Informasi/edukasi tentang</th>
                      <th colspan="2" style="text-align: center;">Edukator</th>
                      <th colspan="2" style="text-align: center;">Sasaran <br>(Pasien/Keluarga/<br>Lain-lain)</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Evaluasi</th>
                      <th rowspan="2" style="width: 4%; text-align: center;">Action</th>
                    </tr>
                    <tr>
                      <th style="width: 14%">Nama</th>
                      <th style="width: 4%">TTD</th>
                      <th style="width: 14%">Nama</th>
                      <th style="width: 4%">TTD</th>
                    </tr>
                  </thead>
                  <tbody>
                    <input type="hidden" name="previous_data" value="{{$previous_data}}">
                    @foreach($pasien as $p)
                    <tr>
                      <td><input type="text" value="{{$p['tanggal']}}" class="form-control sandbox-container" name="tanggal_{{$p['id_data']}}" required></td>
                      <td><input type="text" value="{{$p['poliklinik']}}" class="form-control" name="poliklinik_{{$p['id_data']}}" required></td>
                      <td>
                        <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="informasi_{{$p['id_data']}}">{{$p['informasi']}}</textarea>
                      </td>
                      <td><input type="text" value="{{$p['nama_edukator']}}" class="form-control" name="nama_edukator_{{$p['id_data']}}" required></td>
                      <td><input type="checkbox" {{$p['ttd_edukator'] == True ? 'checked' : ''}} class="form-control" name="ttd_edukator_{{$p['id_data']}}"></td>
                      <td><input type="text" value="{{$p['nama_sasaran']}}" class="form-control" name="nama_sasaran_{{$p['id_data']}}" required></td>
                      <td><input type="checkbox" {{$p['ttd_sasaran'] == True ? 'checked' : ''}} class="form-control" name="ttd_sasaran_{{$p['id_data']}}"></td>
                      <td>
                        <div class="radio">
                          <label>
                            <input type="radio" name="evaluasi_{{$p['id_data']}}" {{$p['evaluasi'] == 1 ? 'checked' : ''}} value="1" required><span style="font-size: 3mm">Sudah mengerti</span><br>
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="evaluasi_{{$p['id_data']}}" {{$p['evaluasi'] == 2 ? 'checked' : ''}} value="2"><span style="font-size: 3mm">Re-edukasi</span><br>
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="evaluasi_{{$p['id_data']}}" {{$p['evaluasi'] == 3 ? 'checked' : ''}} value="3"><span style="font-size: 3mm">Re-demonstrasi</span>
                          </label>
                        </div>
                      </td>
                      <td>
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
        $('#last_row').before('<tr id="form_new_'+a+'"><td><input type="text" class="form-control sandbox-container" name="tanggal_new_'+a+'" required></td><td><input type="text" class="form-control" name="poliklinik_new_'+a+'" required></td><td><textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="informasi_new_'+a+'" required></textarea></td><td><input type="text" class="form-control" name="nama_edukator_new_'+a+'" required></td><td><input type="checkbox" class="form-control" name="ttd_edukator_new_'+a+'"></td><td><input type="text" class="form-control" name="nama_sasaran_new_'+a+'" required></td><td><input type="checkbox" class="form-control" name="ttd_sasaran_new_'+a+'"></td><td><div class="radio"> <label><input type="radio" name="evaluasi_new_'+a+'" value="1" required><span style="font-size: 3mm">Sudah mengerti</span><br></label> </div><div class="radio"> <label><input type="radio" name="evaluasi_new_'+a+'" value="2"><span style="font-size: 3mm">Re-edukasi</span><br></label> </div><div class="radio"> <label><input type="radio" name="evaluasi_new_'+a+'" value="3"><span style="font-size: 3mm">Re-demonstrasi</span></label> </div></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_new_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
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
        $('#form_'+nomor).remove();
      });
    });
  </script>
  
</body>
<html>