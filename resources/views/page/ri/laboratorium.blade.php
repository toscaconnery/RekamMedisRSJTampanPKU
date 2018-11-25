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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Pemeriksaan Laboratorium</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Pemeriksaan Laboratorium
            </header>

            <table class="table table-striped table-advance table-hover">
              <tbody>
                <tr>
                  <th><i class="icon_document_alt"></i> Dokumen</th>
                  <th><i class="icon_calendar"></i> Tanggal Pengisian</th>
                  <th><i class="icon_profile"></i> Pengisi</th>
                  <th><i class="icon_document_alt"></i> Status</th>
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
                <tr>
                  <td>Hasil Pemeriksaan Laboratorium</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>Belum Verifikasi</td>
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
          <form class="form-horizontal" method="post" action="ri_laboratorium">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">Informasi Hasil Lab
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Validasi Oleh</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="validasi_oleh" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dr. Pengirim</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dr_pengirim" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bahan Diterima</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="bahan_diterima" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ruangan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="ruangan" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tgl. Hasil Dicetak</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_hasil_cetak" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tgl. Permintaan</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_permintaan" required>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">HEMATOLOGI
              </header>
              <div class="panel-body">
                <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Pemeriksaan</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Hasil</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Status</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Nilai Normal</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="hematologi_1">
                      <td style="text-align:center;">
                        <select class="form-control" name="h_pemeriksaan_1">
                          <option value="0">-</option>
                          <option value="Heamoglobin">Heamoglobin</option>
                          <option value="Leukosit">Leukosit</option>
                          <option value="Hitung Jenis">Hitung Jenis</option>
                          <option value="Basofil">Basofil</option>
                          <option value="Eosinopil">Eosinopil</option>
                          <option value="N.Batang">N.Batang</option>
                          <option value="N.Segmen">N.Segmen</option>
                          <option value="Limposit">Limposit</option>
                          <option value="Monosit">Monosit</option>
                          <option value="LED">LED</option>
                          <option value="Erytrosit">Erytrosit</option>
                          <option value="Hematokrit">Hematokrit</option>
                          <option value="Trombosit">Trombosit</option>
                          <option value="BT">BT</option>
                          <option value="CT">CT</option>
                          <option value="Gol Darah">Gol Darah</option>
                          <option value="Malaria">Malaria</option>
                          <option value="MCV">MCV</option>
                          <option value="MCH">MCH</option>
                          <option value="MCHC">MCHC</option>
                          <option value="MDT">MDT</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="h_hasil_1" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="h_status_1" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="h_normal_1" required>
                      </td>
                    </tr>
                    <tr id="last_row_hematologi">
                      <td colspan="4">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_hematologi"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                    <input type="hidden" name="jumlah_form_hematologi" id="jumlah_form_hematologi" value="1">
                  </tbody>
                </table>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">URINE
              </header>
              <div class="panel-body">
                <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Pemeriksaan</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Hasil</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Status</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Nilai Normal</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="urine_1">
                      <td style="text-align:center;">
                        <select class="form-control" name="u_pemeriksaan_1">
                          <option value="0">-</option>
                          <option value="Warna">Warna</option>
                          <option value="Kekeruhan">Kekeruhan</option>
                          <option value="Ph">Ph</option>
                          <option value="Berat Jenis">Berat Jenis</option>
                          <option value="Reduksi">Reduksi</option>
                          <option value="Protein">Protein</option>
                          <option value="Bilirubin">Bilirubin</option>
                          <option value="Urobilinogen">Urobilinogen</option>
                          <option value="Keton">Keton</option>
                          <option value="Sedimen">Sedimen</option>
                          <option value="Kristal">Kristal</option>
                          <option value="Entrosit">Entrosit</option>
                          <option value="Leukosit">Leukosit</option>
                          <option value="Epitel">Epitel</option>
                          <option value="Plano Test">Plano Test</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="u_hasil_1" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="u_status_1" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="u_normal_1" required>
                      </td>
                    </tr>
                    <tr id="last_row_urine">
                      <td colspan="4">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_urine"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                    <input type="hidden" name="jumlah_form_urine" id="jumlah_form_urine" value="1">
                  </tbody>
                </table>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">FAECES RUTIN
              </header>
              <div class="panel-body">
                <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Pemeriksaan</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Hasil</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Status</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Nilai Normal</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="faeces_1">
                      <td style="text-align:center;">
                        <select class="form-control" name="f_pemeriksaan_1">
                          <option value="0">-</option>
                          <option value="Warna">Warna</option>
                          <option value="Konsistensi">Konsistensi</option>
                          <option value="Lendir">Lendir</option>
                          <option value="Darah/Blood">Darah/Blood</option>
                          <option value="Amoeba">Amoeba</option>
                          <option value="Lain-lain">Lain-lain</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="f_hasil_1" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="f_status_1" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="f_normal_1" required>
                      </td>
                    </tr>
                    <tr id="last_row_faeces">
                      <td colspan="4">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_faeces"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                    <input type="hidden" name="jumlah_form_faeces" id="jumlah_form_faeces" value="1">
                  </tbody>
                </table>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">KIMIA DARAH
              </header>
              <div class="panel-body">
                <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Pemeriksaan</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Hasil</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Status</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Nilai Normal</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="kimia_1">
                      <td style="text-align:center;">
                        <select class="form-control" name="k_pemeriksaan_1">
                          <option value="0">-</option>
                          <option value="Gula darah sewaktu">Gula darah sewaktu</option>
                          <option value="Gula darah puasa">Gula darah puasa</option>
                          <option value="Gula darah 2 jam PP">Gula darah 2 jam PP</option>
                          <option value="ALP">ALP</option>
                          <option value="Total Protein">Total Protein</option>
                          <option value="Albumin">Albumin</option>
                          <option value="Globulin">Globulin</option>
                          <option value="Bilirubin Total">Bilirubin Total</option>
                          <option value="Bilirubin Direk">Bilirubin Direk</option>
                          <option value="Bilirubin Indirek">Bilirubin Indirek</option>
                          <option value="Total Cholesterol">Total Cholesterol</option>
                          <option value="HDL Cholesterol">HDL Cholesterol</option>
                          <option value="LDL Cholesterol">LDL Cholesterol</option>
                          <option value="Trygliserida">Trygliserida</option>
                          <option value="SGOT">SGOT</option>
                          <option value="SGPT">SGPT</option>
                          <option value="GGT">GGT</option>
                          <option value="Ureum">Ureum</option>
                          <option value="Creatinim">Creatinim</option>
                          <option value="Asam Urat">Asam Urat</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="k_hasil_1" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="k_status_1" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="k_normal_1" required>
                      </td>
                    </tr>
                    <tr id="last_row_kimia">
                      <td colspan="4">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_kimia"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                    <input type="hidden" name="jumlah_form_kimia" id="jumlah_form_kimia" value="1">
                  </tbody>
                </table>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">SEROLOGI
              </header>
              <div class="panel-body">
                <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Pemeriksaan</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Hasil</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Status</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Nilai Normal</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="serologi_1">
                      <td style="text-align:center;">
                        <select class="form-control" name="s_pemeriksaan_1">
                          <option value="0">-</option>
                          <option value="S. Typhosa O">S. Typhosa O</option>
                          <option value="S. Typhosa H">S. Typhosa H</option>
                          <option value="S. Paratyphosa AO">S. Paratyphosa AO</option>
                          <option value="S. Paratyphosa AH">S. Paratyphosa AH</option>
                          <option value="S. Paratyphosa BO">S. Paratyphosa BO</option>
                          <option value="S. Paratyphosa BH">S. Paratyphosa BH</option>
                          <option value="S. Paratyphosa CO">S. Paratyphosa CO</option>
                          <option value="S. Paratyphosa CH">S. Paratyphosa CH</option>
                          <option value="Anti HIV">Anti HIV</option>
                          <option value="Hbs Ag">Hbs Ag</option>
                          <option value="Anti Hbs Ag">Anti Hbs Ag</option>
                          <option value="CRP">CRP</option>
                          <option value="RF">RF</option>
                          <option value="ASTO">ASTO</option>
                          <option value="Dengue lgG/lg M">Dengue lgG/lg M</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="s_hasil_1" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="s_status_1" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="s_normal_1" required>
                      </td>
                    </tr>
                    <tr id="last_row_serologi">
                      <td colspan="4">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_serologi"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                    <input type="hidden" name="jumlah_form_serologi" id="jumlah_form_serologi" value="1">
                  </tbody>
                </table>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">NARKOBA
              </header>
              <div class="panel-body">
                <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Pemeriksaan</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Hasil</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Status</th>
                      <th style="width: 25%; text-align: center;vertical-align:middle;">Nilai Normal</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="narkoba_1">
                      <td style="text-align:center;">
                        <select class="form-control" name="n_pemeriksaan_1">
                          <option value="0">-</option>
                          <option value="Canabis">Canabis</option>
                          <option value="Opiat">Opiat</option>
                          <option value="Benzodiazepin">Benzodiazepin</option>
                          <option value="M Ampetamin">M Ampetamin</option>
                          <option value="Alkohol">Alkohol</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="n_hasil_1" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="n_status_1" required>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="n_normal_1" required>
                      </td>
                    </tr>
                    <tr id="last_row_narkoba">
                      <td colspan="4">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_narkoba"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                    <input type="hidden" name="jumlah_form_narkoba" id="jumlah_form_narkoba" value="1">
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

    @include('layouts.tailscript')

    {{-- menambah row inputan hematologi --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form_hematologi').click(function() {
          var a = document.getElementById('jumlah_form_hematologi').value;
          a = parseInt(a) + 1;
          $('#last_row_hematologi').before('<tr id="hematologi_'+a+'"> <td style="text-align:center;"> <select class="form-control" name="h_pemeriksaan_'+a+'"> <option value="0">-</option> <option value="Heamoglobin">Heamoglobin</option> <option value="Leukosit">Leukosit</option> <option value="Hitung Jenis">Hitung Jenis</option> <option value="Basofil">Basofil</option> <option value="Eosinopil">Eosinopil</option> <option value="N.Batang">N.Batang</option> <option value="N.Segmen">N.Segmen</option> <option value="Limposit">Limposit</option> <option value="Monosit">Monosit</option> <option value="LED">LED</option> <option value="Erytrosit">Erytrosit</option> <option value="Hematokrit">Hematokrit</option> <option value="Trombosit">Trombosit</option> <option value="BT">BT</option> <option value="CT">CT</option> <option value="Gol Darah">Gol Darah</option> <option value="Malaria">Malaria</option> <option value="MCV">MCV</option> <option value="MCH">MCH</option> <option value="MCHC">MCHC</option> <option value="MDT">MDT</option> </select> </td> <td> <input type="text" class="form-control" name="h_hasil_'+a+'" required> </td> <td> <input type="text" class="form-control" name="h_status_'+a+'" required> </td> <td> <input type="text" class="form-control" name="h_normal_'+a+'" required> </td> </tr>');
          document.getElementById('jumlah_form_hematologi').value = a;
        });
      });
    </script>

    {{-- menambah row inputan urine --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form_urine').click(function() {
          var a = document.getElementById('jumlah_form_urine').value;
          a = parseInt(a) + 1;
          $('#last_row_urine').before('<tr id="urine_'+a+'"> <td style="text-align:center;"> <select class="form-control" name="u_pemeriksaan_'+a+'"> <option value="0">-</option> <option value="Warna">Warna</option> <option value="Kekeruhan">Kekeruhan</option> <option value="Ph">Ph</option> <option value="Berat Jenis">Berat Jenis</option> <option value="Reduksi">Reduksi</option> <option value="Protein">Protein</option> <option value="Bilirubin">Bilirubin</option> <option value="Urobilinogen">Urobilinogen</option> <option value="Keton">Keton</option> <option value="Sedimen">Sedimen</option> <option value="Kristal">Kristal</option> <option value="Entrosit">Entrosit</option> <option value="Leukosit">Leukosit</option> <option value="Epitel">Epitel</option> <option value="Plano Test">Plano Test</option> </select> </td> <td> <input type="text" class="form-control" name="u_hasil_'+a+'" required> </td> <td> <input type="text" class="form-control" name="u_status_'+a+'" required> </td> <td> <input type="text" class="form-control" name="u_normal_'+a+'" required> </td> </tr>');
          document.getElementById('jumlah_form_urine').value = a;
        });
      });
    </script>

    {{-- menambah row inputan faeces --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form_faeces').click(function() {
          var a = document.getElementById('jumlah_form_faeces').value;
          a = parseInt(a) + 1;
          $('#last_row_faeces').before('<tr id="faeces_'+a+'"> <td style="text-align:center;"> <select class="form-control" name="f_pemeriksaan_'+a+'"> <option value="0">-</option> <option value="Warna">Warna</option> <option value="Konsistensi">Konsistensi</option> <option value="Lendir">Lendir</option> <option value="Darah/Blood">Darah/Blood</option> <option value="Amoeba">Amoeba</option> <option value="Lain-lain">Lain-lain</option> </select> </td> <td> <input type="text" class="form-control" name="f_hasil_'+a+'" required> </td> <td> <input type="text" class="form-control" name="f_status_'+a+'" required> </td> <td> <input type="text" class="form-control" name="f_normal_'+a+'" required> </td> </tr>');
          document.getElementById('jumlah_form_faeces').value = a;
        });
      });
    </script>

    {{-- menambah row inputan kimia darah --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form_kimia').click(function() {
          var a = document.getElementById('jumlah_form_kimia').value;
          a = parseInt(a) + 1;
          $('#last_row_kimia').before('<tr id="kimia_'+a+'"> <td style="text-align:center;"> <select class="form-control" name="k_pemeriksaan_'+a+'"> <option value="0">-</option> <option value="Gula darah sewaktu">Gula darah sewaktu</option> <option value="Gula darah puasa">Gula darah puasa</option> <option value="Gula darah 2 jam PP">Gula darah 2 jam PP</option> <option value="ALP">ALP</option> <option value="Total Protein">Total Protein</option> <option value="Albumin">Albumin</option> <option value="Globulin">Globulin</option> <option value="Bilirubin Total">Bilirubin Total</option> <option value="Bilirubin Direk">Bilirubin Direk</option> <option value="Bilirubin Indirek">Bilirubin Indirek</option> <option value="Total Cholesterol">Total Cholesterol</option> <option value="HDL Cholesterol">HDL Cholesterol</option> <option value="LDL Cholesterol">LDL Cholesterol</option> <option value="Trygliserida">Trygliserida</option> <option value="SGOT">SGOT</option> <option value="SGPT">SGPT</option> <option value="GGT">GGT</option> <option value="Ureum">Ureum</option> <option value="Creatinim">Creatinim</option> <option value="Asam Urat">Asam Urat</option> </select> </td> <td> <input type="text" class="form-control" name="k_hasil_'+a+'" required> </td> <td> <input type="text" class="form-control" name="k_status_'+a+'" required> </td> <td> <input type="text" class="form-control" name="k_normal_'+a+'" required> </td> </tr>');
          document.getElementById('jumlah_form_kimia').value = a;
        });
      });
    </script>

    {{-- menambah row inputan serologi --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form_serologi').click(function() {
          var a = document.getElementById('jumlah_form_serologi').value;
          a = parseInt(a) + 1;
          $('#last_row_serologi').before('<tr id="serologi_'+a+'"> <td style="text-align:center;"> <select class="form-control" name="s_pemeriksaan_'+a+'"> <option value="0">-</option> <option value="S. Typhosa O">S. Typhosa O</option> <option value="S. Typhosa H">S. Typhosa H</option> <option value="S. Paratyphosa AO">S. Paratyphosa AO</option> <option value="S. Paratyphosa AH">S. Paratyphosa AH</option> <option value="S. Paratyphosa BO">S. Paratyphosa BO</option> <option value="S. Paratyphosa BH">S. Paratyphosa BH</option> <option value="S. Paratyphosa CO">S. Paratyphosa CO</option> <option value="S. Paratyphosa CH">S. Paratyphosa CH</option> <option value="Anti HIV">Anti HIV</option> <option value="Hbs Ag">Hbs Ag</option> <option value="Anti Hbs Ag">Anti Hbs Ag</option> <option value="CRP">CRP</option> <option value="RF">RF</option> <option value="ASTO">ASTO</option> <option value="Dengue lgG/lg M">Dengue lgG/lg M</option> </select> </td> <td> <input type="text" class="form-control" name="s_hasil_'+a+'" required> </td> <td> <input type="text" class="form-control" name="s_status_'+a+'" required> </td> <td> <input type="text" class="form-control" name="s_normal_'+a+'" required> </td> </tr>');
          document.getElementById('jumlah_form_serologi').value = a;
        });
      });
    </script>

    {{-- menambah row inputan narkoba --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tambah_form_narkoba').click(function() {
          var a = document.getElementById('jumlah_form_narkoba').value;
          a = parseInt(a) + 1;
          $('#last_row_narkoba').before('<tr id="narkoba_'+a+'"> <td style="text-align:center;"> <select class="form-control" name="n_pemeriksaan_'+a+'"> <option value="0">-</option> <option value="Canabis">Canabis</option> <option value="Opiat">Opiat</option> <option value="Benzodiazepin">Benzodiazepin</option> <option value="M Ampetamin">M Ampetamin</option> <option value="Alkohol">Alkohol</option> </select> </td> <td> <input type="text" class="form-control" name="n_hasil_'+a+'" required> </td> <td> <input type="text" class="form-control" name="n_status_'+a+'" required> </td> <td> <input type="text" class="form-control" name="n_normal_'+a+'" required> </td> </tr>');
          document.getElementById('jumlah_form_narkoba').value = a;
        });
      });
    </script>

  </body>


  <html>