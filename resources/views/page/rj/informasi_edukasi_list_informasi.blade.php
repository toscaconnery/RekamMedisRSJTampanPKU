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
                  <td>Kebutuhan Informasi dan edukasi </td>
                  <td>{{$tanggal_pengisian}}</td>
                  <td>{{$nama_pengisi}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_informasi_edukasi">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_informasi_edukasi_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_informasi_edukasi_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_infoedu_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal" method="post" action="rj_informasi_edukasi_list_informasi">
            {{ csrf_field() }}
            <input type="hidden" name="jumlah_form" id="jumlah_form" value="4">
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
                    <tr>
                      <td><input type="text" class="form-control sandbox-container" onkeydown="return false" autocomplete="off" name="tanggal_1" required></td>
                      <td><input type="text" class="form-control" name="poliklinik_1" required></td>
                      <td>
                        <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="informasi_1" readonly>Penyakit yang diderita pasien</textarea>
                      </td>
                      <td><input type="text" class="form-control" name="nama_edukator_1" required></td>
                      <td><input type="checkbox" class="form-control" name="ttd_edukator_1"></td>
                      <td><input type="text" class="form-control" name="nama_sasaran_1" required></td>
                      <td><input type="checkbox" class="form-control" name="ttd_sasaran_1"></td>
                      <td>
                        <div class="radio">
                          <label>
                            <input type="radio" name="evaluasi_1" value="1" required><span style="font-size: 3mm">Sudah mengerti</span><br>
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="evaluasi_1" value="2"><span style="font-size: 3mm">Re-edukasi</span><br>
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="evaluasi_1" value="3"><span style="font-size: 3mm">Re-demonstrasi</span>
                          </label>
                        </div>
                      </td>
                      <td>
                      </td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control sandbox-container" onkeydown="return false" autocomplete="off" name="tanggal_2" required></td>
                      <td><input type="text" class="form-control" name="poliklinik_2" required></td>
                      <td>
                        <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="informasi_2" readonly>Rencana tindakan terapi</textarea>
                      </td>
                      <td><input type="text" class="form-control" name="nama_edukator_2" required></td>
                      <td><input type="checkbox" class="form-control" name="ttd_edukator_2"></td>
                      <td><input type="text" class="form-control" name="nama_sasaran_2" required></td>
                      <td><input type="checkbox" class="form-control" name="ttd_sasaran_2"></td>
                      <td>
                        <div class="radio">
                          <label>
                            <input type="radio" name="evaluasi_2" value="1" required><span style="font-size: 3mm">Sudah mengerti</span><br>
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="evaluasi_2" value="2"><span style="font-size: 3mm">Re-edukasi</span><br>
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="evaluasi_2" value="3"><span style="font-size: 3mm">Re-demonstrasi</span>
                          </label>
                        </div>
                      </td>
                      <td>
                      </td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control sandbox-container" onkeydown="return false" autocomplete="off" name="tanggal_3" required></td>
                      <td><input type="text" class="form-control" name="poliklinik_3" required></td>
                      <td>
                        <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="informasi_3" readonly>Pengobatan dan prosedur yang diberikan atau diperlukan</textarea>
                      </td>
                      <td><input type="text" class="form-control" name="nama_edukator_3" required></td>
                      <td><input type="checkbox" class="form-control" name="ttd_edukator_3"></td>
                      <td><input type="text" class="form-control" name="nama_sasaran_3" required></td>
                      <td><input type="checkbox" class="form-control" name="ttd_sasaran_3"></td>
                      <td>
                        <div class="radio">
                          <label>
                            <input type="radio" name="evaluasi_3" value="1" required><span style="font-size: 3mm">Sudah mengerti</span><br>
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="evaluasi_3" value="2"><span style="font-size: 3mm">Re-edukasi</span><br>
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="evaluasi_3" value="3"><span style="font-size: 3mm">Re-demonstrasi</span>
                          </label>
                        </div>
                      </td>
                      <td>
                      </td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control sandbox-container" onkeydown="return false" autocomplete="off" name="tanggal_4" required></td>
                      <td><input type="text" class="form-control" name="poliklinik_4" required></td>
                      <td>
                        <textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="informasi_4" readonly>Hasil pelayanan, termasuk terjadinya kejadian yang diharapkan dan tidak diharapkan</textarea>
                      </td>
                      <td><input type="text" class="form-control" name="nama_edukator_4" required></td>
                      <td><input type="checkbox" class="form-control" name="ttd_edukator_4"></td>
                      <td><input type="text" class="form-control" name="nama_sasaran_4" required></td>
                      <td><input type="checkbox" class="form-control" name="ttd_sasaran_4"></td>
                      <td>
                        <div class="radio">
                          <label>
                            <input type="radio" name="evaluasi_4" value="1" required><span style="font-size: 3mm">Sudah mengerti</span><br>
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="evaluasi_4" value="2"><span style="font-size: 3mm">Re-edukasi</span><br>
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="evaluasi_4" value="3"><span style="font-size: 3mm">Re-demonstrasi</span>
                          </label>
                        </div>
                      </td>
                      <td>
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
        $('#last_row').before('<tr id="form_'+a+'"><td><input type="text" class="form-control sandbox-container" onkeydown="return false" autocomplete="off" name="tanggal_'+a+'" required></td><td><input type="text" class="form-control" name="poliklinik_'+a+'" required></td><td><textarea style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="informasi_'+a+'" required></textarea></td><td><input type="text" class="form-control" name="nama_edukator_'+a+'" required></td><td><input type="checkbox" class="form-control" name="ttd_edukator_'+a+'"></td><td><input type="text" class="form-control" name="nama_sasaran_'+a+'" required></td><td><input type="checkbox" class="form-control" name="ttd_sasaran_'+a+'"></td><td><div class="radio"> <label><input type="radio" name="evaluasi_'+a+'" value="1" required><span style="font-size: 3mm">Sudah mengerti</span><br></label> </div><div class="radio"> <label><input type="radio" name="evaluasi_'+a+'" value="2"><span style="font-size: 3mm">Re-edukasi</span><br></label> </div><div class="radio"> <label><input type="radio" name="evaluasi_'+a+'" value="3"><span style="font-size: 3mm">Re-demonstrasi</span></label> </div></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
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