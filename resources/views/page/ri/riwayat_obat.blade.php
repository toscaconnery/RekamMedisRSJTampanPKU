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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> RIWAYAT PENGGUNAAN OBAT (REKONSILIASI OBAT)</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Riwayat Penggunaan Obat (Rekonsiliasi Obat)
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
                  <td>Riwayat Penggunaan Obat (Rekonsiliasi Obat)</td>
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

      <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_riwayat_obat">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2"> Tanggal Masuk</label>
                  <div class="col-sm-2">
                    <input type="date" class="form-control" name="tanggal_masuk">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Nomor Farmasi</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="nomor_farmasi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Dokter Ruangan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dokter_ruangan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Alergi</label>
                  <div class="col-sm-8">
                    <label class="checkbox-inline">
                      <input type="checkbox" name="non_alergi"> Tidak ada Riwayat Alergi
                    </label>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Obat Resep
              </header>
              {{-- /////////mulai perulangan --}}
              <input type="hidden" name="jumlah_obat_generik" id="jumlah_obat_generik" value="1">
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2"> Nama Generik</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="generik1_1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Nama Dagang</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="generik2_1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Regimen</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="generik3_1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Sumber Obat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="generik4_1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Tanggal Mulai</label>
                  <div class="col-sm-2">
                    <input type="date" class="form-control" name="generik5_1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Tanggal Stop</label>
                  <div class="col-sm-2">
                    <input type="date" class="form-control" name="generik6_1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Jumlah Obat Tersisa</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="generik7_1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Obat Saat Admisi</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="generik8_1"  value="1">
                        Lanjut
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="generik8_1"  value="2">
                        Tunda
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="generik8_1"  value="3">
                        Henti
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Catatan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="generik9_1">
                  </div>
                </div>
              </div>
              <div class="panel-body" id="last_row_obat_generik">
                <button type="button" class="btn btn-primary" id="tambah_form_obat_generik">Tambah Obat Generik</button>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Obat Non-Resep (contoh : Produk OTC, herbal dll)
              </header>
              <input type="hidden" name="jumlah_obat_nonresep" id="jumlah_obat_nonresep" value="1">
              {{-- /////perulangan obat non resep --}}
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2"> Nama Generik</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nonresep1_1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Nama Dagang</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nonresep2_1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Regimen</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nonresep3_1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Sumber Obat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nonresep4_1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Tanggal Mulai</label>
                  <div class="col-sm-2">
                    <input type="date" class="form-control" name="nonresep5_1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Tanggal Stop</label>
                  <div class="col-sm-2">
                    <input type="date" class="form-control" name="nonresep6_1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Jumlah Obat Tersisa</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nonresep7_1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Obat Saat Admisi</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="nonresep8_1" value="1">
                        Lanjut
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="nonresep8_1" value="2">
                        Tunda
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="nonresep8_1" value="3">
                        Henti
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2"> Catatan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nonresep9_1">
                  </div>
                </div>
              </div>
              <div class="panel-body" id="last_row_obat_nonresep">
                <button type="button" class="btn btn-primary" id="tambah_form_obat_nonresep">Tambah Obat Non-Resep</button>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Sumber Informasi Obat
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2"> Status pasien di medical resort</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="sio_1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Pasien/Keluarga Pasien</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="sio_2">
                  </div>
                  <label class="col-sm-1 control-label">No.Telp</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="sio_3">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Apoteker di luar Rumah Sakit Jiwa Tampan</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="sio_4">
                  </div>
                  <label class="col-sm-1 control-label">No.Telp</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="sio_5">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2"> Lainnya</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="lainnya">
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Pembuat Daftar Obat
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label"> Apoteker</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label"> Telepon</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label"> Tanggal</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control">
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>

    </div>
  </div>
</section>

@include('layouts.tailscript')

  {{-- menambah row inputan generik --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tambah_form_obat_generik').click(function() {
        var a = document.getElementById('jumlah_obat_generik').value;
        a = parseInt(a) + 1;
        $('#last_row_obat_generik').before('<div class="panel-body"> <div class="form-group"> <label class="control-label col-lg-2"> Nama Generik</label> <div class="col-sm-8"> <input type="text" class="form-control" name="generik1_'+a+'"> </div> </div> <div class="form-group"> <label class="control-label col-lg-2"> Nama Dagang</label> <div class="col-sm-8"> <input type="text" class="form-control" name="generik2_'+a+'"> </div> </div> <div class="form-group"> <label class="control-label col-lg-2"> Regimen</label> <div class="col-sm-8"> <input type="text" class="form-control" name="generik3_'+a+'"> </div> </div> <div class="form-group"> <label class="control-label col-lg-2"> Sumber Obat</label> <div class="col-sm-8"> <input type="text" class="form-control" name="generik4_'+a+'"> </div> </div> <div class="form-group"> <label class="control-label col-lg-2"> Tanggal Mulai</label> <div class="col-sm-2"> <input type="date" class="form-control" name="generik5_'+a+'"> </div> </div> <div class="form-group"> <label class="control-label col-lg-2"> Tanggal Stop</label> <div class="col-sm-2"> <input type="date" class="form-control" name="generik6_'+a+'"> </div> </div> <div class="form-group"> <label class="control-label col-lg-2"> Jumlah Obat Tersisa</label> <div class="col-sm-8"> <input type="text" class="form-control" name="generik7_'+a+'"> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Status Obat Saat Admisi</label> <div class="col-lg-10"> <div class="radio"> <label> <input type="radio" name="generik8_'+a+'"  value="1"> Lanjut </label> </div> <div class="radio"> <label> <input type="radio" name="generik8_'+a+'"  value="2"> Tunda </label> </div> <div class="radio"> <label> <input type="radio" name="generik8_'+a+'"  value="3"> Henti </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2"> Catatan</label> <div class="col-sm-8"> <input type="text" class="form-control" name="generik9_'+a+'"> </div> </div> </div>');
        document.getElementById('jumlah_obat_generik').value = a;
      });
    });
  </script>

  {{-- menambah row inputan generik --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tambah_form_obat_nonresep').click(function() {
        var a = document.getElementById('jumlah_obat_nonresep').value;
        a = parseInt(a) + 1;
        $('#last_row_obat_nonresep').before('<div class="panel-body"> <div class="form-group"> <label class="control-label col-lg-2"> Nama Generik</label> <div class="col-sm-8"> <input type="text" class="form-control" name="nonresep1_'+a+'"> </div> </div> <div class="form-group"> <label class="control-label col-lg-2"> Nama Dagang</label> <div class="col-sm-8"> <input type="text" class="form-control" name="nonresep2_'+a+'"> </div> </div> <div class="form-group"> <label class="control-label col-lg-2"> Regimen</label> <div class="col-sm-8"> <input type="text" class="form-control" name="nonresep3_'+a+'"> </div> </div> <div class="form-group"> <label class="control-label col-lg-2"> Sumber Obat</label> <div class="col-sm-8"> <input type="text" class="form-control" name="nonresep4_'+a+'"> </div> </div> <div class="form-group"> <label class="control-label col-lg-2"> Tanggal Mulai</label> <div class="col-sm-2"> <input type="date" class="form-control" name="nonresep5_'+a+'"> </div> </div> <div class="form-group"> <label class="control-label col-lg-2"> Tanggal Stop</label> <div class="col-sm-2"> <input type="date" class="form-control" name="nonresep6_'+a+'"> </div> </div> <div class="form-group"> <label class="control-label col-lg-2"> Jumlah Obat Tersisa</label> <div class="col-sm-8"> <input type="text" class="form-control" name="nonresep7_'+a+'"> </div> </div> <div class="form-group"> <label class="control-label col-lg-2" for="inputSuccess">Status Obat Saat Admisi</label> <div class="col-lg-10"> <div class="radio"> <label> <input type="radio" name="nonresep8_'+a+'" value="1"> Lanjut </label> </div> <div class="radio"> <label> <input type="radio" name="nonresep8_'+a+'" value="2"> Tunda </label> </div> <div class="radio"> <label> <input type="radio" name="nonresep8_'+a+'" value="3"> Henti </label> </div> </div> </div> <div class="form-group"> <label class="control-label col-lg-2"> Catatan</label> <div class="col-sm-8"> <input type="text" class="form-control" name="nonresep9_'+a+'"> </div> </div> </div>');
        document.getElementById('jumlah_obat_nonresep').value = a;
      });
    });
  </script>

</body>


<html>