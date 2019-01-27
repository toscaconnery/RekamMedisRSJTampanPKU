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
                  <td>{{$tanggal_pengisian}}</td>
                  <td>{{$nama_pengisi}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_resume">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_resume_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_resume_edit">Edit</i></a>
                      <a class="btn btn-danger" onclick="delete_document()" href="#">Hapus</a>
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
          <form class="form-validate form-horizontal" id="register_form">
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
                        <td><input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control required sandbox-container" name="tanggal_{{$p['id_data']}}" value="{{$p['tanggal']}}"></td>
                        <td><input type="text" disabled class="form-control required" name="diagnosis_prosedur_{{$p['id_data']}}" value="{{$p['diagnosis_prosedur']}}"></td>
                        <td><input type="text" disabled class="form-control required" name="kode_icd_{{$p['id_data']}}" value="{{$p['kode_icd']}}"></td>
                        <td><input type="text" disabled class="form-control required" name="obat_{{$p['id_data']}}" value="{{$p['obat']}}"></td>
                        <td><input type="text" disabled class="form-control required" name="riwayat_{{$p['id_data']}}" value="{{$p['riwayat']}}"></td>
                        <td><input type="text" disabled class="form-control required" name="nama_petugas_{{$p['id_data']}}" value="{{$p['nama_petugas']}}"></td>
                        <td>
                        </td>
                      </tr>
                      @php
                        $idx += 1;
                      @endphp
                    @endforeach
                    <input type="hidden" id="idx" name="idx" value="{{$idx - 1}}">
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

  <script type="text/javascript">
    //melakukan reset dokumen  
    function delete_document() {
      Swal.fire({
        title: 'Hapus dokumen ini?',
        text: "Dokumen yang telah dihapus tidak akan bisa diakses lagi.",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus dokumen ini',
        cancelButtonText: 'Batalkan'
      }).then((result) => {
        if (result.value) {
          window.location.href = '{{url('/rj_resume_delete')}}';
        }
      })
    }
  </script>

</body>
<html>