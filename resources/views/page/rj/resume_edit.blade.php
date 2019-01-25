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
                  <th><i class="icon_cogs"></i> Aksi</th>
                  <th><i class="icon_document"></i> Cetak Dokumen</th>
                </tr>
                <tr>
                  <td>Resume Rawat Jalan</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_resume">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_resume_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_resume_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_resume_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-validate form-horizontal" method="post" action="rj_resume_edit" id="register_form">
            {{csrf_field()}}
            <section class="panel">
              <header class="panel-heading">
                Resume Rawat Jalan
              </header>
              <div class="panel-body">
                <input type="hidden" name="jumlah_form_resume_new" id="jumlah_form_resume_new" value="0">
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
                    <input type="hidden" name="previous_value" value="{{$previous_value}}">
                    @php
                      $idx = 1;
                    @endphp
                    @foreach($pasien as $p)
                      <tr>
                        <td>{{$idx}}.</td>
                        <td><input type="text" autocomplete="off" onkeydown="return false" class="form-control required sandbox-container" name="tanggal_{{$p['id_data']}}" value="{{$p['tanggal']}}"></td>
                        <td><input type="text" class="form-control required" name="diagnosis_prosedur_{{$p['id_data']}}" value="{{$p['diagnosis_prosedur']}}"></td>
                        <td><input type="text" class="form-control required" name="kode_icd_{{$p['id_data']}}" value="{{$p['kode_icd']}}"></td>
                        <td><input type="text" class="form-control required" name="obat_{{$p['id_data']}}" value="{{$p['obat']}}"></td>
                        <td><input type="text" class="form-control required" name="riwayat_{{$p['id_data']}}" value="{{$p['riwayat']}}"></td>
                        <td><input type="text" class="form-control required" name="nama_petugas_{{$p['id_data']}}" value="{{$p['nama_petugas']}}"></td>
                        <td>
                        </td>
                      </tr>
                      @php
                        $idx += 1;
                      @endphp
                    @endforeach
                    <input type="hidden" id="idx" name="idx" value="{{$idx - 1}}">
                    <tr id="last_row_resume">
                      <td colspan="9">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_resume_new"><i class="icon_plus_alt2"></i> Tambah</button>
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
      $('#tambah_form_resume_new').click(function() {
        var a = document.getElementById('jumlah_form_resume_new').value;
        a = parseInt(a) + 1;
        var b = document.getElementById('idx').value;
        b = parseInt(b) + 1;
        document.getElementById('idx').value = b;
        $('#last_row_resume').before('<tr id="form_resume_new_'+a+'"><td>'+b+'.</td><td><input type="text" autocomplete="off" onkeydown="return false" class="form-control required sandbox-container" name="tanggal_new_'+a+'"></td><td><input type="text" class="form-control required" name="diagnosis_prosedur_new_'+a+'"></td><td><input type="text" class="form-control required" name="kode_icd_new_'+a+'"></td><td><input type="text" class="form-control required" name="obat_new_'+a+'"></td><td><input type="text" class="form-control required" name="riwayat_new_'+a+'"></td><td><input type="text" class="form-control required" name="nama_petugas_new_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus_resume" type="button" id="tombol_hapus_resume_new_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
        document.getElementById('jumlah_form_resume_new').value = a;
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