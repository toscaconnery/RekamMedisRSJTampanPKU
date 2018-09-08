<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{url('')}}/admin_bootstrap/img/favicon.png">

  <title>Asesmen Awal Pasien Tumbuh Kembang dan Edukasi Terpadu</title>

  <!-- Bootstrap CSS -->
  <link href="{{url('')}}/admin_bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{url('')}}/admin_bootstrap/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{url('')}}/admin_bootstrap/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="{{url('')}}/admin_bootstrap/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{url('')}}/admin_bootstrap/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="{{url('')}}/admin_bootstrap/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{url('')}}/admin_bootstrap/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{url('')}}/admin_bootstrap/css/owl.carousel.css" type="text/css">
  <link href="{{url('')}}/admin_bootstrap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!--datepicker styles -->
  <link href="{{url('')}}/admin_bootstrap/css/daterangepicker.css" rel="stylesheet" />
  <link href="{{url('')}}/admin_bootstrap/css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="{{url('')}}/admin_bootstrap/css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{url('')}}/admin_bootstrap/css/fullcalendar.css">
  <link href="{{url('')}}/admin_bootstrap/css/widgets.css" rel="stylesheet">
  <link href="{{url('')}}/admin_bootstrap/css/style.css" rel="stylesheet">
  <link href="{{url('')}}/admin_bootstrap/css/style-responsive.css" rel="stylesheet" />
  <link href="{{url('')}}/admin_bootstrap/css/xcharts.min.css" rel=" stylesheet">
  <link href="{{url('')}}/admin_bootstrap/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL PASIEN TUMBUH KEMBANG DAN EDUKASI TERPADU</h3>
      </div>
    </div>
    <div class="panel-body bio-graph-info">
      <h1>No. RM : {{Session::has('id_pasien') ? Session::get('id_pasien') : ''}}</h1>
      <div class="row">
        <div class="bio-row">
          <p><span>Nama Pasien </span>: {{Session::has('nama_pasien') ? Session::get('nama_pasien') : ''}} </p>
        </div>
        <div class="bio-row">
          <p><span>Tanggal Lahir</span>: {{Session::has('tanggal_lahir') ? Session::get('tanggal_lahir') : ''}}</p>
        </div>
        <div class="bio-row">
          <p><span>Jenis Kelamin </span>: {{Session::has('jenis_kelamin') ? Session::get('jenis_kelamin') : ''}}</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Dokumen Asesmen Awal Pasien Tumbuh Kembang dan Edukasi Terpadu
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
                <td>Asesmen Awal Pasien Tumbuh Kembang dan Edukasi Terpadu</td>
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
        <form class="form-validate form-horizontal" method="post" id="register_form" action="rj_asesmen_awal_tumbuh_kembang_dokter">
          {{ csrf_field() }}

          <section class="panel">
            <header class="panel-heading">
              RIWAYAT PSIKIATRIK (psychiatric history) (alloanamnesis dari orang tua, kakek, nenek, paman , bibi, kakak kandung, dll)
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Keluhan utama (chief Complaint)</label>
                <div class="col-sm-8">
                  <textarea class="form-control required" name="keluhan_utama" rows="6" style="resize: none;"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Riwayat Gangguan Sekarang (History of Present Illness)</label>
                <div class="col-sm-8">
                  <textarea class="form-control required" name="riwayat_gangguan_sekarang" rows="6" style="resize: none;"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Riwayat Gangguan Sebelumnya (History of Previous Illness)</label>
                <div class="col-sm-8">
                  <textarea class="form-control required" name="riwayat_gangguan_sebelumnya" rows="6" style="resize: none;"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Riwayat Pribadi (Personal History)</label>
                <div class="col-sm-8">
                  <textarea class="form-control required" name="riwayat_pribadi" rows="6" style="resize: none;"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Riwayat Pra-Natal dan Perinatal ( Personal and Pernnatal History)</label>
                <div class="col-sm-8">
                  <textarea class="form-control required" name="riwayat_pranatal_perinatal" rows="6" style="resize: none;"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Riwayat Masa Bayi/Masa  Kanak Awal(Early Childhood) (0 – 3 tahun)</label>
                <div class="col-sm-8">
                  <textarea class="form-control required" name="early_childhood" rows="6" style="resize: none;"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Riwayat Masa Kanak Pertengahan (Middle Childhood) (3 – 11 tahun)</label>
                <div class="col-sm-8">
                  <textarea class="form-control required" name="middle_childhood" rows="6" style="resize: none;"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Riwayat Masa Kanak Akhir (Late Childhood) (11 – 18 tahun)</label>
                <div class="col-sm-8">
                  <textarea class="form-control required" name="late_childhood" rows="6" style="resize: none;"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Riwayat Keluarga (Family History)</label>
                <div class="col-sm-8">
                  <textarea class="form-control required" name="riwayat_keluarga" rows="6" style="resize: none;"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Riwayat Situasi Sosial Sekarang (Current Social Situation)</label>
                <div class="col-sm-8">
                  <textarea class="form-control required" name="riwayat_sosial_sekarang" rows="6" style="resize: none;"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Persepsi Pasien tentang dirinya (Patient Perception about Himself)</label>
                <div class="col-sm-8">
                  <textarea class="form-control required" name="persepsi_sendiri" rows="6" style="resize: none;"></textarea>
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              PEMERIKSAAN STATUS MENTAL (Mental State Examination)
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Deskripsi Umum (General Description)</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Interaksi Orang tua – anak (Parent-child Interaction)</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Orientasi dan Persepsi (Orientation and Perception) </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Mood, Afek, Ekspresi Afektif dan Empati (Mood, Affect, Affective, Expression, and Empathy)</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              Proses Pikir (Thought Process)
              <div class="form-group">
                <label class="col-sm-2 control-label">Bentuk dan Arus Pikir (Steam and Form of Thought) </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Isi Pikir (Content of Thought)</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Fantasi (Fantasy) </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Kemampuan Menilai Realitas dan Tilikan ( Reality Testing Ability and Insight)</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              PEMERIKSAAN DIAGNOSTIK LANJUTAN (Further Diagnostic Investigation)
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Further Diagnostic Investigation</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              RINGKASAN HASIL PEMERIKSAAN (Summary of Positive Findings)
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Summary of Positive Findings</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              FORMULASI DIAGNOSTIK (Diagnostik Formulation)
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Diagnostik Formulation</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              EVALUASI MULTIAKSIAL (Multiaksial Evaluation)
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Aksis I</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Aksis II</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Aksis III</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Aksis IV</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Aksis V</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              DAFTAR MASALAH (Problem List)
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Organobiologik </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Psikologik</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sosial</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              PROGNOSIS (Prognosis)
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Prognosis</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              PENATALASANAAN (Treatment Plan)
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Untuk Pasien</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Untuk Keluarga</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
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

<!-- javascripts -->
<script src="{{url('')}}/js/jquery.js"></script>
<script src="{{url('')}}/js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="{{url('')}}/js/jquery.scrollTo.min.js"></script>
<script src="{{url('')}}/js/jquery.nicescroll.js" type="text/javascript"></script>

<!-- jquery ui -->
<script src="{{url('')}}/js/jquery-ui-1.9.2.custom.min.js"></script>

<!--custom checkbox & radio-->
<script type="{{url('')}}/text/javascript" src="{{url('')}}/admin_bootstrap/js/ga.js"></script>
<!--custom switch-->
<script src="{{url('')}}/js/bootstrap-switch.js"></script>
<!--custom tagsinput-->
<script src="{{url('')}}/js/jquery.tagsinput.js"></script>

<!-- colorpicker -->

<!-- bootstrap-wysiwyg -->
<script src="{{url('')}}/js/jquery.hotkeys.js"></script>
<script src="{{url('')}}/js/bootstrap-wysiwyg.js"></script>
<script src="{{url('')}}/js/bootstrap-wysiwyg-custom.js"></script>
<script src="{{url('')}}/js/moment.js"></script>
<script src="{{url('')}}/js/bootstrap-colorpicker.js"></script>
<script src="{{url('')}}/js/daterangepicker.js"></script>
<script src="{{url('')}}/js/bootstrap-datepicker.js"></script>
<!-- ck editor -->
<script type="text/javascript" src="{{url('')}}/assets/ckeditor/ckeditor.js"></script>
<!-- custom form component script for this page-->
<script src="{{url('')}}/js/form-component.js"></script>
<!-- custome script for all page -->
<script src="{{url('')}}/js/scripts.js"></script>

<!-- javascripts -->
<script src="{{url('')}}/admin_bootstrap/js/jquery.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/jquery-ui-1.10.4.min.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="{{url('')}}/admin_bootstrap/js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="{{url('')}}/admin_bootstrap/js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="{{url('')}}/admin_bootstrap/js/jquery.scrollTo.min.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="{{url('')}}/admin_bootstrap/assets/jquery-knob/js/jquery.knob.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="{{url('')}}/admin_bootstrap/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/owl.carousel.js"></script>
<!-- jQuery full calendar -->
<script src="{{url('')}}/admin_bootstrap/js/fullcalendar.min.js"></script>
<!-- Full Google Calendar - Calendar -->
<script src="{{url('')}}/admin_bootstrap/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
<!--script for this page only-->
<script src="{{url('')}}/admin_bootstrap/js/calendar-custom.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="{{url('')}}/admin_bootstrap/js/jquery.customSelect.min.js"></script>
<script src="{{url('')}}/admin_bootstrap/assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="{{url('')}}/admin_bootstrap/js/scripts.js"></script>
<!-- custom script for this page-->
<script src="{{url('')}}/admin_bootstrap/js/sparkline-chart.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/easy-pie-chart.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/xcharts.min.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/jquery.autosize.min.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/jquery.placeholder.min.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/gdp-data.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/morris.min.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/sparklines.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/charts.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/jquery.slimscroll.min.js"></script>
{{-- form validation --}}
<script type="text/javascript" src="{{url('')}}/admin_bootstrap/js/jquery.validate.min.js"></script>
<script src="{{url('')}}/js/form-validation.js"></script>

{{-- menambah row inputan saudara kandung--}}
<script type="text/javascript">
  $(document).ready(function() {
    $('#tambah_form').click(function() {
      var a = document.getElementById('jumlah_form_saudara').value;
      a = parseInt(a) + 1;
      $('#last_row').before('<tr id="form_'+a+'"><td><input type="text" class="form-control required" name="umur_'+a+'"></td><td><select name="jenis_kelamin_'+a+'" class="form-control required"><option value=""></option><option value="Laki-laki">Laki-laki</option><option value="Perempuan">Perempuan</option></select></td><td><input type="text" class="form-control required" name="pendidikan_'+a+'"></td><td><input type="text" class="form-control required" name="pekerjaan_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus" type="button" id="tombol_hapus_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
      document.getElementById('jumlah_form_saudara').value = a;
    });
  });
</script>

{{-- menambah row inputan saudara tiri--}}
<script type="text/javascript">
  $(document).ready(function() {
    $('#tambah_form_tiri').click(function() {
      var a = document.getElementById('jumlah_form_saudara_tiri').value;
      a = parseInt(a) + 1;
      $('#last_row_tiri').before('<tr id="form_tiri_'+a+'"><td><input type="text" class="form-control required" name="umur_tiri_'+a+'"></td><td><select name="jenis_kelamin_tiri_'+a+'" class="form-control required"><option value=""></option><option value="Laki-laki">Laki-laki</option><option value="Perempuan">Perempuan</option></select></td><td><input type="text" class="form-control required" name="pendidikan_tiri_'+a+'"></td><td><input type="text" class="form-control required" name="pekerjaan_tiri_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus_tiri" type="button" id="tombol_hapus_tiri_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
      document.getElementById('jumlah_form_saudara_tiri').value = a;
    });
  });
</script>

{{-- menambah row inputan serumah--}}
<script type="text/javascript">
  $(document).ready(function() {
    $('#tambah_form_serumah').click(function() {
      var a = document.getElementById('jumlah_form_serumah').value;
      a = parseInt(a) + 1;
      $('#last_row_serumah').before('<tr id="form_serumah_'+a+'"><td><input type="text" class="form-control required" name="umur_serumah_'+a+'"></td><td><select name="jenis_kelamin_serumah_'+a+'" class="form-control required"><option value=""></option><option value="Laki-laki">Laki-laki</option><option value="Perempuan">Perempuan</option></select></td><td><input type="text" class="form-control required" name="pendidikan_serumah_'+a+'"></td><td><input type="text" class="form-control required" name="pekerjaan_serumah_'+a+'"></td><td><div class="btn-group"><button class="btn btn-default tombol_hapus_serumah" type="button" id="tombol_hapus_serumah_'+a+'"><i class="icon_close_alt2"></i></button></div></td></tr>');
      document.getElementById('jumlah_form_saudara_serumah').value = a;
    });
  });
</script>

{{-- menghapus row saudara kandung--}}
<script type="text/javascript">
  $(document).ready(function() {
    $(document).on('click', '.tombol_hapus', function() {
      var x = $(this).attr('id');
      var nomor = x.substring(13)
      $('#form_'+nomor).remove();
    });
  });
</script>

{{-- menghapus row saudara tiri--}}
<script type="text/javascript">
  $(document).ready(function() {
    $(document).on('click', '.tombol_hapus_tiri', function() {
      var x = $(this).attr('id');
      var nomor = x.substring(18)
      $('#form_tiri_'+nomor).remove();
    });
  });
</script>

{{-- menghapus row saudara serumah--}}
<script type="text/javascript">
  $(document).ready(function() {
    $(document).on('click', '.tombol_hapus_serumah', function() {
      var x = $(this).attr('id');
      var nomor = x.substring(18)
      $('#form_serumah_'+nomor).remove();
    });
  });
</script>

</body>
<html>