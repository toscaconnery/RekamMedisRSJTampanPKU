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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> RESUME MEDIS</h3>
      </div>
    </div>
    @include('layouts.bio')

    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Dokumen Resume Medis
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
                <td>Resume Medis</td>
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
        <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_resume_medis">
        {{ csrf_field() }}
        <section class="panel">
          <header class="panel-heading">
            Data Umum
          </header>
          <div class="panel-body">
            <div class="form-group"></div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Masuk RS</label>
              <div class="col-sm-2">
                <input type="text" id="dp1" class="form-control" name="tanggal_masuk"  disabled="" value="{{$tanggal_masuk}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Keluar RS</label>
              <div class="col-sm-2">
                <input type="text" id="dp2" class="form-control" name="tanggal_keluar" disabled="" value="{{$tanggal_keluar}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Ruang Rawat Terakhir</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="ruang_rawat_terakhir"  disabled="" value="{{$ruang_rawat_terakhir}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">DPJP</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="dpjp" disabled="" value="{{$dpjp}}" >
              </div>
            </div>

          </div>
        </section>

        <section class="panel">
          <header class="panel-heading">
            Ringkasan Perawatan Pasien
          </header>
          <div class="panel-body">
            <div class="form-group"></div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Alergi</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="alergi" disabled="" value="{{$alergi}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Diagnosa Masuk</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="diagnosa_masuk" disabled="" value="{{$diagnosa_masuk}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Indikasi Dirawat/Alasan dirawat</label>
              <div class="col-sm-8">
                <textarea class="form-control" rows="2" style="resize: none;" name="alasan_dirawat" readonly>{{$alasan_dirawat}}</textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Hasil Pemeriksaan Penunjang</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="hasil_pemeriksaan_penunjang" disabled="" value="{{$hasil_pemeriksaan_penunjang}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Terapi yang diberikan saat di RS</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="terapi" disabled="" value="{{$terapi}}" >
              </div>
            </div>

          </div>
        </section>

        <section class="panel">
          <header class="panel-heading">
            Diagnosa
          </header>
          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 50%; text-align: center;">DIAGNOSA PSIKIATRI</th>
                  <th style="width: 7%; text-align: center;">KODE ICD-10</th>
                  <th style="width: 36%; text-align: center;">DIAGNOSA NON PSIKIATRI</th>
                  <th style="width: 7%; text-align: center;">KODE ICD-10</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="padding-right: 0mm;">
                    <label class="col-sm-1 control-label" style="padding-right: 0mm; padding-left: 0mm; width: 3em;">Axis 1</label>
                    <div class="col-sm-11" style="padding-right: 0mm;">
                      <input type="text" class="form-control" name="diagnosa_psikiatri_1" disabled="" value="{{$diagnosa_psikiatri_1}}" >
                    </div>
                  </td>
                  <td>
                    <input type="text" class="form-control" name="kode_psikiatri_1" disabled="" value="{{$kode_psikiatri_1}}" >
                  </td>
                  <td>
                    <input type="text" class="form-control" name="diagnosa_non_psikiatri_1" disabled="" value="{{$diagnosa_non_psikiatri_1}}" >
                  </td>
                  <td>
                    <input type="text" class="form-control" name="kode_non_psikiatri_1" disabled="" value="{{$kode_non_psikiatri_1}}" >
                  </td>
                </tr>
                <tr>
                  <td style="padding-right: 0mm;">
                    <label class="col-sm-1 control-label" style="padding-right: 0mm; padding-left: 0mm; width: 3em;">Axis 2</label>
                    <div class="col-sm-11" style="padding-right: 0mm;">
                      <input type="text" class="form-control" name="diagnosa_psikiatri_2" disabled="" value="{{$diagnosa_psikiatri_2}}">
                    </div>
                  </td>
                  <td>
                    <input type="text" class="form-control" name="kode_psikiatri_2" disabled="" value="{{$kode_psikiatri_2}}">
                  </td>
                  <td>
                    <input type="text" class="form-control" name="diagnosa_non_psikiatri_2" disabled="" value="{{$diagnosa_non_psikiatri_2}}">
                  </td>
                  <td>
                    <input type="text" class="form-control" name="kode_non_psikiatri_2" disabled="" value="{{$kode_non_psikiatri_2}}">
                  </td>
                </tr>
                <tr>
                  <td style="padding-right: 0mm;">
                    <label class="col-sm-1 control-label" style="padding-right: 0mm; padding-left: 0mm; width: 3em;">Axis 3</label>
                    <div class="col-sm-11" style="padding-right: 0mm;">
                      <input type="text" class="form-control" name="diagnosa_psikiatri_3" disabled="" value="{{$diagnosa_psikiatri_3}}">
                    </div>
                  </td>
                  <td>
                    <input type="text" class="form-control" name="kode_psikiatri_3" disabled="" value="{{$kode_psikiatri_3}}">
                  </td>
                  <td>
                    <input type="text" class="form-control" name="diagnosa_non_psikiatri_3" disabled="" value="{{$diagnosa_non_psikiatri_3}}">
                  </td>
                  <td>
                    <input type="text" class="form-control" name="kode_non_psikiatri_3" disabled="" value="{{$kode_non_psikiatri_3}}">
                  </td>
                </tr>
                <tr>
                  <td style="padding-right: 0mm;">
                    <label class="col-sm-1 control-label" style="padding-right: 0mm; padding-left: 0mm; width: 3em;">Axis 4</label>
                    <div class="col-sm-11" style="padding-right: 0mm;">
                      <input type="text" class="form-control" name="diagnosa_psikiatri_4" disabled="" value="{{$diagnosa_psikiatri_4}}">
                    </div>
                  </td>
                  <td>
                    <input type="text" class="form-control" name="kode_psikiatri_4" disabled="" value="{{$kode_psikiatri_4}}">
                  </td>
                  <td>
                    <input type="text" class="form-control" name="diagnosa_non_psikiatri_4" disabled="" value="{{$diagnosa_non_psikiatri_4}}">
                  </td>
                  <td>
                    <input type="text" class="form-control" name="kode_non_psikiatri_4" disabled="" value="{{$kode_non_psikiatri_4}}">
                  </td>
                </tr>
                <tr>
                  <td style="padding-right: 0mm;">
                    <label class="col-sm-1 control-label" style="padding-right: 0mm; padding-left: 0mm; width: 3em;">Axis 5</label>
                    <div class="col-sm-11" style="padding-right: 0mm;">
                      <input type="text" class="form-control" name="diagnosa_psikiatri_5" disabled="" value="{{$diagnosa_psikiatri_5}}">
                    </div>
                  </td>
                  <td>
                    <input type="text" class="form-control" name="kode_psikiatri_5" disabled="" value="{{$kode_psikiatri_5}}">
                  </td>
                  <td>
                    <input type="text" class="form-control" name="diagnosa_non_psikiatri_5" disabled="" value="{{$diagnosa_non_psikiatri_5}}">
                  </td>
                  <td>
                    <input type="text" class="form-control" name="kode_non_psikiatri_5" disabled="" value="{{$kode_non_psikiatri_5}}">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <section class="panel">
          <header class="panel-heading">
            Tindakan Kedokteran
          </header>
          <div class="panel-body">
            <input type="hidden" name="jumlah_form_tindakan" id="jumlah_form_tindakan" value="1">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10%; text-align: center;">TGL</th>
                  <th style="width: 77%; text-align: center;">NAMA TINDAKAN MEDIS</th>
                  <th style="width: 10%; text-align: center;">KODE ICD-9-CM</th>
                  <th style="width: 3%; text-align: center;">ACTION</th>
                </tr>
              </thead>
              <tbody>
                <tr id="form_tindakan_1">
                  <td>
                    <input type="date" id="dp1" class="form-control" name="tanggal_1">
                  </td>
                  <td>
                    <input type="text" class="form-control" name="nama_tindakan_1">
                  </td>
                  <td>
                    <input type="text" class="form-control" name="kode_icd_1">
                  </td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-default tombol_hapus_tindakan" type="button" id="tombol_hapus_tindakan_1"><i class="icon_close_alt2"></i></button>
                    </div>
                  </td>
                </tr>
                <tr id="last_row_tindakan">
                  <td colspan="9">
                    <div class="btn-group">
                      <button class="btn btn-primary" type="button" id="tambah_form_tindakan"><i class="icon_plus_alt2"></i> Tambah</button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <section class="panel">
          <header class="panel-heading">
            Penyebab Luar/Cedera/Kecelakaan (jika ada)
          </header>
          <div class="panel-body">

            <div class="form-group">
              <div class="col-lg-12">
                <textarea class="form-control" style="resize: none;" name="penyebab_luar" readonly>{{$penyebab_luar}}></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-2" for="inputSuccess">Keadaan Keluar</label>
              <div class="col-lg-3">
                <div class="radio">
                  <label>
                    <input type="radio" name="keadaan_keluar" value="Sembuh">
                    Sembuh
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="keadaan_keluar" value="Membaik">
                    Membaik
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="keadaan_keluar" value="Perbaikan">
                    Perbaikan
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="keadaan_keluar" value="Mati < 48 jam">
                    Mati < 48 jam
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="keadaan_keluar" value="Mati > 48 jam">
                    Mati > 48 jam
                  </label>
                </div>
              </div>
              <label class="control-label col-lg-2" for="inputSuccess">Cara Pulang</label>
              <div class="col-lg-4">
                <div class="radio">
                  <label>
                    <input type="radio" name="cara_pulang" value="Diijinkan pulang">
                    Diijinkan pulang
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="cara_pulang" value="Pulang paksa">
                    Pulang paksa
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="cara_pulang" value="Rujuk ke">
                    Rujuk ke
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="cara_pulang" value="Pindah ke RS lain">
                    Pindah ke RS lain
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="cara_pulang" value="Lainnya">
                    Lainnya
                    <input type="text" class="form-control" placeholder="sebutkan" name="cara_pulang_lainnya">
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label">Kondisi Pulang</label></div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Kondisi</label>
              <div class="col-sm-7" style="width: 58em;">
                <input type="text" class="form-control" name="kondisi_pulang" disabled="" value="{{$kondisi_pulang}}">
              </div>
              <label class="col-sm-1 control-label" style="padding-left: 0mm; padding-right: 0mm; width: 5em;">Jam Keluar</label>
              <div class="col-sm-1" style="padding-right: 0mm;">
                <input type="time" class="form-control" style="width: 10em;" name="jam_keluar"  disabled="" value="{{$jam_keluar}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">TD</label>
              <div class="col-sm-2" style="width: 12em; padding-right: 2em;">
                <input type="text" class="form-control" name="td"  disabled="" value="{{$td}}">
              </div>
              <label class="col-sm-1 control-label" style="width: 4em;">HR</label>
              <div class="col-sm-2" style="width: 12em; padding-right: 2em;">
                <input type="text" class="form-control" name="hr" disabled="" value="{{$hr}}">
              </div>
              <label class="col-sm-1 control-label" style="width: 4em;">RR</label>
              <div class="col-sm-2" style="width: 12em; padding-right: 2em;">
                <input type="text" class="form-control" name="rr" disabled="" value="{{$rr}}">
              </div>
              <label class="col-sm-1 control-label" style="width: 4em;">T</label>
              <div class="col-sm-2" style="width: 12em; padding-right: 2em;">
                <input type="text" class="form-control" name="t" disabled="" value="{{$t}}">
              </div>
              <label class="col-sm-1 control-label" style="width: 4em;">BB</label>
              <div class="col-sm-2" style="width: 12em; padding-right: 2em;">
                <input type="text" class="form-control" name="bb" disabled="" value="{{$bb}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Penerima Informasi</label>
              <div class="col-sm-8" style="width: 75em;">
                <input type="text" class="form-control" name="penerima_informasi">
              </div>
            </div>
          </div>
        </section>

        <section class="panel">
          <header class="panel-heading">
            Obat yang dibawa pulang
          </header>
          <div class="panel-body">
            <input type="hidden" name="jumlah_form_obat" id="jumlah_form_obat" value="1">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 3%; text-align: center;">NO</th>
                  <th style="width: 44%; text-align: center;">NAMA OBAT</th>
                  <th style="width: 15%; text-align: center;">JUMLAH</th>
                  <th style="width: 15%; text-align: center;">ATURAN PAKAI</th>
                  <th style="width: 20%; text-align: center;">KETERANGAN</th>
                  <th style="width: 3%; text-align: center;">ACTION</th>
                </tr>
              </thead>
              <tbody>
                <tr id="form_obat_1">
                  <td></td>
                  <td>
                    <input type="text" class="form-control" name="nama_obat_1">
                  </td>
                  <td>
                    <input type="text" class="form-control" name="jumlah_1">
                  </td>
                  <td>
                    <input type="text" class="form-control" name="aturan_pakai_1">
                  </td>
                  <td>
                    <input type="text" class="form-control" name="keterangan_1">
                  </td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-default tombol_hapus_obat" type="button" id="tombol_hapus_obat_1"><i class="icon_close_alt2"></i></button>
                    </div>
                  </td>
                </tr>
                <tr id="last_row_obat">
                  <td colspan="9">
                    <div class="btn-group">
                      <button class="btn btn-primary" type="button" id="tambah_form_obat"><i class="icon_plus_alt2"></i> Tambah</button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <section class="panel">
          <header class="panel-heading">
          </header>
          <div class="panel-body">
            <h3>Edukasi Pasien</h3>
            <div class="form-group"></div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Penyakit</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="penyakit" disabled="" value="{{$penyakit}}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-2" for="inputSuccess">Diet</label>
              <div class="col-lg-10">
                <div class="radio">
                  <label>
                    <input type="radio" name="diet" value="Diet Khusus">
                    Diet Khusus
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="diet" value="Makan Biasa">
                    Makan Biasa
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Sebutkan</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="keterangan_diet" placeholder="Jelaskan diet yang dilakukan.."  disabled="" value="{{$diet}}">
              </div>
            </div>
            <h3>Instruksi</h3>
            <div class="form-group"></div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Perlu Kontrol/berobat jalan di</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="tempat_kontrol" disabled="" value="{{$tempat_kontrol}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal</label>
              <div class="col-sm-2">
                <input type="text" id="dp3" class="form-control" name="tanggal_kontrol" disabled="" value="{{$tanggal_kontrol}}">
              </div>
            </div>
            <h3>Hasil pemeriksaan penunjang yang tertunda</h3>
            <div class="form-group"></div>
            <div class="form-group">
              <label class="col-sm-2 control-label"></label>
              <div class="col-sm-8">
                <textarea class="form-control" rows="5" style="resize: none;" placeholder="Jelaskan hasil pemeriksaan penunjang yang tertunda.." name="hasil_tertunda"  readonly>{{$hasil_tertunda}}</textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Diambil Tanggal</label>
              <div class="col-sm-2">
                <input type="text" id="dp4" class="form-control" name="tanggal_pengambilan"  disabled="" value="{{$tanggal_pengambilan}}">
              </div>
            </div>
            
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

  {{-- menambah row inputan tindakan --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tambah_form_tindakan').click(function() {
        var a = document.getElementById('jumlah_form_tindakan').value;
        a = parseInt(a) + 1;
        $('#last_row_tindakan').before('<tr id="form_tindakan_'+a+'"><td><input type="date" id="dp'+a+'" class="form-control" name="tanggal_'+a+'"></td><td><input type="text" class="form-control" name="nama_tindakan_'+a+'"></td><td><input type="text" class="form-control" name="kode_icd_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus_tindakan" type="button" id="tombol_hapus_tindakan_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
        document.getElementById('jumlah_form_tindakan').value = a;
      });
    });
  </script>

  {{-- menambah row inputan obat --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tambah_form_obat').click(function() {
        var a = document.getElementById('jumlah_form_obat').value;
        a = parseInt(a) + 1;
        $('#last_row_obat').before('<tr id="form_obat_'+a+'"><td></td><td><input type="text" class="form-control" name="nama_obat_'+a+'"></td><td><input type="text" class="form-control" name="jumlah_'+a+'"></td><td><input type="text" class="form-control" name="aturan_pakai_'+a+'"></td><td><input type="text" class="form-control" name="keterangan_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus_obat" type="button" id="tombol_hapus_obat_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
        document.getElementById('jumlah_form_obat').value = a;
      });
    });
  </script>

  {{-- menghapus row tindakan --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $(document).on('click', '.tombol_hapus_tindakan', function() {
        var x = $(this).attr('id');
        var nomor = x.substring(22);
        $('#form_tindakan_'+nomor).remove();
      });
    });
  </script>

  {{-- menghapus row obat --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $(document).on('click', '.tombol_hapus_obat', function() {
        var x = $(this).attr('id');
        var nomor = x.substring(18);
        $('#form_obat_'+nomor).remove();
      });
    });
  </script>

</body>
<html>