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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> RESUME RAWAT JALAN</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Resume Rawat Jalan
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
                  <td>Resume Rawat Jalan</td>
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
          <form class="form-validate form-horizontal" method="post" action="rj_resume" id="register_form">
            {{csrf_field()}}
            <section class="panel">
              <header class="panel-heading">
                Resume Rawat Jalan
              </header>
              <div class="panel-body">
                <input type="hidden" name="jumlah_form_resume" id="jumlah_form_resume" value="1">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 3%; text-align: center;">No.</th>
                      <th style="width: 10%; text-align: center;">Tanggal Berkunjung</th>
                      <th style="width: 20%; text-align: center;">Diagnosis Prosedur</th>
                      <th style="width: 7%; text-align: center;">Kode ICD</th>
                      <th style="width: 20%; text-align: center;">Obat-Obatan</th>
                      <th style="width: 25%; text-align: center;">Riwayat Rawat Inap & Tindakan Sejak Kunjungan Terakhir</th>
                      <th style="width: 10%; text-align: center;">Nama Petugas Kesehatan</th>
                      <th style="width: 4%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td><input type="date" class="form-control required" name="tanggal_1"></td>
                      <td><input type="text" class="form-control required" name="diagnosis_prosedur_1"></td>
                      <td><input type="text" class="form-control required" name="kode_icd_1"></td>
                      <td><input type="text" class="form-control required" name="obat_1"></td>
                      <td><input type="text" class="form-control required" name="riwayat_1"></td>
                      <td><input type="text" class="form-control required" name="nama_petugas_1"></td>
                      <td>
                      </td>
                    </tr>
                    <tr id="last_row_resume">
                      <td colspan="9">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_resume"><i class="icon_plus_alt2"></i> Tambah</button>
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
  </section>

  @include('layouts.tailscript')

  {{-- menambah row inputan resume--}}
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tambah_form_resume').click(function() {
        var a = document.getElementById('jumlah_form_resume').value;
        a = parseInt(a) + 1;
        $('#last_row_resume').before('<tr id="form_resume_'+a+'"><td>'+a+'</td><td><input type="date" class="form-control required" name="tanggal_'+a+'"></td><td><input type="text" class="form-control required" name="diagnosis_prosedur_'+a+'"></td><td><input type="text" class="form-control required" name="kode_icd_'+a+'"></td><td><input type="text" class="form-control required" name="obat_'+a+'"></td><td><input type="text" class="form-control required" name="riwayat_'+a+'"></td><td><input type="text" class="form-control required" name="nama_petugas_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus_resume" type="button" id="tombol_hapus_resume_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
        document.getElementById('jumlah_form_resume').value = a;
      });
    });
  </script>

  {{-- menghapus row resume--}}
  <script type="text/javascript">
    $(document).ready(function() {
      $(document).on('click', '.tombol_hapus_resume', function() {
        var x = $(this).attr('id');
        var nomor = x.substring(20)
        $('#form_resume_'+nomor).remove();
      });
    });
  </script>

</body>
<html>