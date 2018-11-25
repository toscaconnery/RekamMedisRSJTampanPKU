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
          <form class="form-horizontal" method="post" action="ri_laboratorium_edit">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">Informasi Hasil Lab
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Validasi Oleh</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="validasi_oleh" required value="{{$validasi_oleh}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dr. Pengirim</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dr_pengirim" required value="{{$dr_pengirim}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bahan Diterima</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="bahan_diterima" required value="{{$bahan_diterima}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ruangan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="ruangan" required value="{{$ruangan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tgl. Hasil Dicetak</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_hasil_cetak" required value="{{$tgl_hasil_cetak}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tgl. Permintaan</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_permintaan" required value="{{$tgl_permintaan}}">
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
                    @foreach($hematologi as $h)
                    <tr id="hematologi_{{$h['id_data']}}">
                      <td style="text-align:center;">
                        <select class="form-control" name="h_pemeriksaan_{{$h['id_data']}}">
                          <option {{$h['pemeriksaan'] == '0' ? 'selected' : ''}} value="0">-</option>
                          <option {{$h['pemeriksaan'] == 'Heamoglobin' ? 'selected' : ''}} value="Heamoglobin">Heamoglobin</option>
                          <option {{$h['pemeriksaan'] == 'Leukosit' ? 'selected' : ''}} value="Leukosit">Leukosit</option>
                          <option {{$h['pemeriksaan'] == 'Hitung Jenis' ? 'selected' : ''}} value="Hitung Jenis">Hitung Jenis</option>
                          <option {{$h['pemeriksaan'] == 'Basofil' ? 'selected' : ''}} value="Basofil">Basofil</option>
                          <option {{$h['pemeriksaan'] == 'Eosinopil' ? 'selected' : ''}} value="Eosinopil">Eosinopil</option>
                          <option {{$h['pemeriksaan'] == 'N.Batang' ? 'selected' : ''}} value="N.Batang">N.Batang</option>
                          <option {{$h['pemeriksaan'] == 'N.Segmen' ? 'selected' : ''}} value="N.Segmen">N.Segmen</option>
                          <option {{$h['pemeriksaan'] == 'Limposit' ? 'selected' : ''}} value="Limposit">Limposit</option>
                          <option {{$h['pemeriksaan'] == 'Monosit' ? 'selected' : ''}} value="Monosit">Monosit</option>
                          <option {{$h['pemeriksaan'] == 'LED' ? 'selected' : ''}} value="LED">LED</option>
                          <option {{$h['pemeriksaan'] == 'Erytrosit' ? 'selected' : ''}} value="Erytrosit">Erytrosit</option>
                          <option {{$h['pemeriksaan'] == 'Hematokrit' ? 'selected' : ''}} value="Hematokrit">Hematokrit</option>
                          <option {{$h['pemeriksaan'] == 'Trombosit' ? 'selected' : ''}} value="Trombosit">Trombosit</option>
                          <option {{$h['pemeriksaan'] == 'BT' ? 'selected' : ''}} value="BT">BT</option>
                          <option {{$h['pemeriksaan'] == 'CT' ? 'selected' : ''}} value="CT">CT</option>
                          <option {{$h['pemeriksaan'] == 'Gol Darah' ? 'selected' : ''}} value="Gol Darah">Gol Darah</option>
                          <option {{$h['pemeriksaan'] == 'Malaria' ? 'selected' : ''}} value="Malaria">Malaria</option>
                          <option {{$h['pemeriksaan'] == 'MCV' ? 'selected' : ''}} value="MCV">MCV</option>
                          <option {{$h['pemeriksaan'] == 'MCH' ? 'selected' : ''}} value="MCH">MCH</option>
                          <option {{$h['pemeriksaan'] == 'MCHC' ? 'selected' : ''}} value="MCHC">MCHC</option>
                          <option {{$h['pemeriksaan'] == 'MDT' ? 'selected' : ''}} value="MDT">MDT</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="h_hasil_{{$h['id_data']}}" required value="{{$h['hasil']}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="h_status_{{$h['id_data']}}" required value="{{$h['status']}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="h_normal_{{$h['id_data']}}" required value="{{$h['normal']}}">
                      </td>
                    </tr>
                    @endforeach
                    <tr id="last_row_hematologi">
                      <td colspan="4">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_hematologi"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                    <input type="hidden" name="previous_hematologi" value="{{$previous_hematologi}}">
                    <input type="hidden" name="jumlah_form_hematologi" id="jumlah_form_hematologi" value="0">
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
                    @foreach($urine as $u)
                    <tr id="urine_{{$u['id_data']}}">
                      <td style="text-align:center;">
                        <select class="form-control" name="u_pemeriksaan_{{$u['id_data']}}">
                          <option {{$u['pemeriksaan'] == '0' ? 'selected' : ''}} value="0">-</option>
                          <option {{$u['pemeriksaan'] == 'Warna' ? 'selected' : ''}} value="Warna">Warna</option>
                          <option {{$u['pemeriksaan'] == 'Kekeruhan' ? 'selected' : ''}} value="Kekeruhan">Kekeruhan</option>
                          <option {{$u['pemeriksaan'] == 'Ph' ? 'selected' : ''}} value="Ph">Ph</option>
                          <option {{$u['pemeriksaan'] == 'Berat Jenis' ? 'selected' : ''}} value="Berat Jenis">Berat Jenis</option>
                          <option {{$u['pemeriksaan'] == 'Reduksi' ? 'selected' : ''}} value="Reduksi">Reduksi</option>
                          <option {{$u['pemeriksaan'] == 'Protein' ? 'selected' : ''}} value="Protein">Protein</option>
                          <option {{$u['pemeriksaan'] == 'Bilirubin' ? 'selected' : ''}} value="Bilirubin">Bilirubin</option>
                          <option {{$u['pemeriksaan'] == 'Urobilinogen' ? 'selected' : ''}} value="Urobilinogen">Urobilinogen</option>
                          <option {{$u['pemeriksaan'] == 'Keton' ? 'selected' : ''}} value="Keton">Keton</option>
                          <option {{$u['pemeriksaan'] == 'Sedimen' ? 'selected' : ''}} value="Sedimen">Sedimen</option>
                          <option {{$u['pemeriksaan'] == 'Kristal' ? 'selected' : ''}} value="Kristal">Kristal</option>
                          <option {{$u['pemeriksaan'] == 'Entrosit' ? 'selected' : ''}} value="Entrosit">Entrosit</option>
                          <option {{$u['pemeriksaan'] == 'Leukosit' ? 'selected' : ''}} value="Leukosit">Leukosit</option>
                          <option {{$u['pemeriksaan'] == 'Epitel' ? 'selected' : ''}} value="Epitel">Epitel</option>
                          <option {{$u['pemeriksaan'] == 'Plano Test' ? 'selected' : ''}} value="Plano Test">Plano Test</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="u_hasil_{{$u['id_data']}}" required value="{{$u['hasil']}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="u_status_{{$u['id_data']}}" required value="{{$u['status']}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="u_normal_{{$u['id_data']}}" required value="{{$u['normal']}}">
                      </td>
                    </tr>
                    @endforeach
                    <tr id="last_row_urine">
                      <td colspan="4">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_urine"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                    <input type="hidden" name="previous_urine" value="{{$previous_urine}}">
                    <input type="hidden" name="jumlah_form_urine" id="jumlah_form_urine" value="0">
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
                    @foreach($faeces as $f)
                    <tr id="faeces_{{$f['id_data']}}">
                      <td style="text-align:center;">
                        <select class="form-control" name="f_pemeriksaan_{{$f['id_data']}}">
                          <option {{$f['pemeriksaan'] == '0' ? 'selected' : ''}} value="0">-</option>
                          <option {{$f['pemeriksaan'] == 'Warna' ? 'selected' : ''}} value="Warna">Warna</option>
                          <option {{$f['pemeriksaan'] == 'Konsistensi' ? 'selected' : ''}} value="Konsistensi">Konsistensi</option>
                          <option {{$f['pemeriksaan'] == 'Lendir' ? 'selected' : ''}} value="Lendir">Lendir</option>
                          <option {{$f['pemeriksaan'] == 'Darah/Blood' ? 'selected' : ''}} value="Darah/Blood">Darah/Blood</option>
                          <option {{$f['pemeriksaan'] == 'Amoeba' ? 'selected' : ''}} value="Amoeba">Amoeba</option>
                          <option {{$f['pemeriksaan'] == 'Lain-lain' ? 'selected' : ''}} value="Lain-lain">Lain-lain</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="f_hasil_{{$f['id_data']}}" required value="{{$f['hasil']}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="f_status_{{$f['id_data']}}" required value="{{$f['status']}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="f_normal_{{$f['id_data']}}" required value="{{$f['normal']}}">
                      </td>
                    </tr>
                    @endforeach
                    <tr id="last_row_faeces">
                      <td colspan="4">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_faeces"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                    <input type="hidden" name="previous_faeces" value="{{$previous_faeces}}">
                    <input type="hidden" name="jumlah_form_faeces" id="jumlah_form_faeces" value="0">
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
                    @foreach($kimia as $k)
                    <tr id="kimia_{{$k['id_data']}}">
                      <td style="text-align:center;">
                        <select class="form-control" name="k_pemeriksaan_{{$k['id_data']}}">
                          <option {{$k['pemeriksaan'] == '0' ? 'selected' : ''}} value="0">-</option>
                          <option {{$k['pemeriksaan'] == 'Gula darah sewaktu' ? 'selected' : ''}} value="Gula darah sewaktu">Gula darah sewaktu</option>
                          <option {{$k['pemeriksaan'] == 'Gula darah puasa' ? 'selected' : ''}} value="Gula darah puasa">Gula darah puasa</option>
                          <option {{$k['pemeriksaan'] == 'Gula darah 2 jam PP' ? 'selected' : ''}} value="Gula darah 2 jam PP">Gula darah 2 jam PP</option>
                          <option {{$k['pemeriksaan'] == 'ALP' ? 'selected' : ''}} value="ALP">ALP</option>
                          <option {{$k['pemeriksaan'] == 'Total Protein' ? 'selected' : ''}} value="Total Protein">Total Protein</option>
                          <option {{$k['pemeriksaan'] == 'Albumin' ? 'selected' : ''}} value="Albumin">Albumin</option>
                          <option {{$k['pemeriksaan'] == 'Globulin' ? 'selected' : ''}} value="Globulin">Globulin</option>
                          <option {{$k['pemeriksaan'] == 'Bilirubin Total' ? 'selected' : ''}} value="Bilirubin Total">Bilirubin Total</option>
                          <option {{$k['pemeriksaan'] == 'Bilirubin Direk' ? 'selected' : ''}} value="Bilirubin Direk">Bilirubin Direk</option>
                          <option {{$k['pemeriksaan'] == 'Bilirubin Indirek' ? 'selected' : ''}} value="Bilirubin Indirek">Bilirubin Indirek</option>
                          <option {{$k['pemeriksaan'] == 'Total Cholesterol' ? 'selected' : ''}} value="Total Cholesterol">Total Cholesterol</option>
                          <option {{$k['pemeriksaan'] == 'HDL Cholesterol' ? 'selected' : ''}} value="HDL Cholesterol">HDL Cholesterol</option>
                          <option {{$k['pemeriksaan'] == 'LDL Cholesterol' ? 'selected' : ''}} value="LDL Cholesterol">LDL Cholesterol</option>
                          <option {{$k['pemeriksaan'] == 'Trygliserida' ? 'selected' : ''}} value="Trygliserida">Trygliserida</option>
                          <option {{$k['pemeriksaan'] == 'SGOT' ? 'selected' : ''}} value="SGOT">SGOT</option>
                          <option {{$k['pemeriksaan'] == 'SGPT' ? 'selected' : ''}} value="SGPT">SGPT</option>
                          <option {{$k['pemeriksaan'] == 'GGT' ? 'selected' : ''}} value="GGT">GGT</option>
                          <option {{$k['pemeriksaan'] == 'Ureum' ? 'selected' : ''}} value="Ureum">Ureum</option>
                          <option {{$k['pemeriksaan'] == 'Creatinim' ? 'selected' : ''}} value="Creatinim">Creatinim</option>
                          <option {{$k['pemeriksaan'] == 'Asam Urat' ? 'selected' : ''}} value="Asam Urat">Asam Urat</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="k_hasil_{{$k['id_data']}}" required value="{{$k['hasil']}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="k_status_{{$k['id_data']}}" required value="{{$k['status']}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="k_normal_{{$k['id_data']}}" required value="{{$k['normal']}}">
                      </td>
                    </tr>
                    @endforeach
                    <tr id="last_row_kimia">
                      <td colspan="4">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_kimia"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                    <input type="hidden" name="previous_kimia" value="{{$previous_kimia}}">
                    <input type="hidden" name="jumlah_form_kimia" id="jumlah_form_kimia" value="0">
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
                    @foreach($serologi as $s)
                    <tr id="serologi_{{$s['id_data']}}">
                      <td style="text-align:center;">
                        <select class="form-control" name="s_pemeriksaan_{{$s['id_data']}}">
                          <option {{$s['pemeriksaan'] == '0' ? 'selected' : ''}} value="0">-</option>
                          <option {{$s['pemeriksaan'] == 'S. Typhosa O' ? 'selected' : ''}} value="S. Typhosa O">S. Typhosa O</option>
                          <option {{$s['pemeriksaan'] == 'S. Typhosa H' ? 'selected' : ''}} value="S. Typhosa H">S. Typhosa H</option>
                          <option {{$s['pemeriksaan'] == 'S. Paratyphosa AO' ? 'selected' : ''}} value="S. Paratyphosa AO">S. Paratyphosa AO</option>
                          <option {{$s['pemeriksaan'] == 'S. Paratyphosa AH' ? 'selected' : ''}} value="S. Paratyphosa AH">S. Paratyphosa AH</option>
                          <option {{$s['pemeriksaan'] == 'S. Paratyphosa BO' ? 'selected' : ''}} value="S. Paratyphosa BO">S. Paratyphosa BO</option>
                          <option {{$s['pemeriksaan'] == 'S. Paratyphosa BH' ? 'selected' : ''}} value="S. Paratyphosa BH">S. Paratyphosa BH</option>
                          <option {{$s['pemeriksaan'] == 'S. Paratyphosa CO' ? 'selected' : ''}} value="S. Paratyphosa CO">S. Paratyphosa CO</option>
                          <option {{$s['pemeriksaan'] == 'S. Paratyphosa CH' ? 'selected' : ''}} value="S. Paratyphosa CH">S. Paratyphosa CH</option>
                          <option {{$s['pemeriksaan'] == 'Anti HIV' ? 'selected' : ''}} value="Anti HIV">Anti HIV</option>
                          <option {{$s['pemeriksaan'] == 'Hbs Ag' ? 'selected' : ''}} value="Hbs Ag">Hbs Ag</option>
                          <option {{$s['pemeriksaan'] == 'Anti Hbs Ag' ? 'selected' : ''}} value="Anti Hbs Ag">Anti Hbs Ag</option>
                          <option {{$s['pemeriksaan'] == 'CRP' ? 'selected' : ''}} value="CRP">CRP</option>
                          <option {{$s['pemeriksaan'] == 'RF' ? 'selected' : ''}} value="RF">RF</option>
                          <option {{$s['pemeriksaan'] == 'ASTO' ? 'selected' : ''}} value="ASTO">ASTO</option>
                          <option {{$s['pemeriksaan'] == 'Dengue lgG/lg M' ? 'selected' : ''}} value="Dengue lgG/lg M">Dengue lgG/lg M</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="s_hasil_{{$s['id_data']}}" required value="{{$s['hasil']}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="s_status_{{$s['id_data']}}" required value="{{$s['status']}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="s_normal_{{$s['id_data']}}" required value="{{$s['normal']}}">
                      </td>
                    </tr>
                    @endforeach
                    <tr id="last_row_serologi">
                      <td colspan="4">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_serologi"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                    <input type="hidden" name="previous_serologi" value="{{$previous_serologi}}">
                    <input type="hidden" name="jumlah_form_serologi" id="jumlah_form_serologi" value="0">
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
                    @foreach($narkoba as $n)
                    <tr id="narkoba_{{$n['id_data']}}">
                      <td style="text-align:center;">
                        <select class="form-control" name="n_pemeriksaan_{{$n['id_data']}}">
                          <option {{$n['pemeriksaan'] == '0' ? 'selected' : ''}} value="0">-</option>
                          <option {{$n['pemeriksaan'] == 'Canabis' ? 'selected' : ''}} value="Canabis">Canabis</option>
                          <option {{$n['pemeriksaan'] == 'Opiat' ? 'selected' : ''}} value="Opiat">Opiat</option>
                          <option {{$n['pemeriksaan'] == 'Benzodiazepin' ? 'selected' : ''}} value="Benzodiazepin">Benzodiazepin</option>
                          <option {{$n['pemeriksaan'] == 'M Ampetamin' ? 'selected' : ''}} value="M Ampetamin">M Ampetamin</option>
                          <option {{$n['pemeriksaan'] == 'Alkohol' ? 'selected' : ''}} value="Alkohol">Alkohol</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="n_hasil_{{$n['id_data']}}" required value="{{$n['hasil']}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="n_status_{{$n['id_data']}}" required value="{{$n['status']}}">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="n_normal_{{$n['id_data']}}" required value="{{$n['normal']}}">
                      </td>
                    </tr>
                    @endforeach
                    <tr id="last_row_narkoba">
                      <td colspan="4">
                        <div class="btn-group">
                          <button class="btn btn-primary" type="button" id="tambah_form_narkoba"><i class="icon_plus_alt2"></i> Tambah</button>
                        </div>
                      </td>
                    </tr>
                    <input type="hidden" name="previous_narkoba" value="{{$previous_narkoba}}">
                    <input type="hidden" name="jumlah_form_narkoba" id="jumlah_form_narkoba" value="0">
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
          $('#last_row_hematologi').before('<tr id="hematologi_new_'+a+'"> <td style="text-align:center;"> <select class="form-control" name="h_pemeriksaan_new_'+a+'"> <option value="0">-</option> <option value="Heamoglobin">Heamoglobin</option> <option value="Leukosit">Leukosit</option> <option value="Hitung Jenis">Hitung Jenis</option> <option value="Basofil">Basofil</option> <option value="Eosinopil">Eosinopil</option> <option value="N.Batang">N.Batang</option> <option value="N.Segmen">N.Segmen</option> <option value="Limposit">Limposit</option> <option value="Monosit">Monosit</option> <option value="LED">LED</option> <option value="Erytrosit">Erytrosit</option> <option value="Hematokrit">Hematokrit</option> <option value="Trombosit">Trombosit</option> <option value="BT">BT</option> <option value="CT">CT</option> <option value="Gol Darah">Gol Darah</option> <option value="Malaria">Malaria</option> <option value="MCV">MCV</option> <option value="MCH">MCH</option> <option value="MCHC">MCHC</option> <option value="MDT">MDT</option> </select> </td> <td> <input type="text" class="form-control" name="h_hasil_new_'+a+'" required> </td> <td> <input type="text" class="form-control" name="h_status_new_'+a+'" required> </td> <td> <input type="text" class="form-control" name="h_normal_new_'+a+'" required> </td> </tr>');
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
          $('#last_row_urine').before('<tr id="urine_new_'+a+'"> <td style="text-align:center;"> <select class="form-control" name="u_pemeriksaan_new_'+a+'"> <option value="0">-</option> <option value="Warna">Warna</option> <option value="Kekeruhan">Kekeruhan</option> <option value="Ph">Ph</option> <option value="Berat Jenis">Berat Jenis</option> <option value="Reduksi">Reduksi</option> <option value="Protein">Protein</option> <option value="Bilirubin">Bilirubin</option> <option value="Urobilinogen">Urobilinogen</option> <option value="Keton">Keton</option> <option value="Sedimen">Sedimen</option> <option value="Kristal">Kristal</option> <option value="Entrosit">Entrosit</option> <option value="Leukosit">Leukosit</option> <option value="Epitel">Epitel</option> <option value="Plano Test">Plano Test</option> </select> </td> <td> <input type="text" class="form-control" name="u_hasil_new_'+a+'" required> </td> <td> <input type="text" class="form-control" name="u_status_new_'+a+'" required> </td> <td> <input type="text" class="form-control" name="u_normal_new_'+a+'" required> </td> </tr>');
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
          $('#last_row_faeces').before('<tr id="faeces_new_'+a+'"> <td style="text-align:center;"> <select class="form-control" name="f_pemeriksaan_new_'+a+'"> <option value="0">-</option> <option value="Warna">Warna</option> <option value="Konsistensi">Konsistensi</option> <option value="Lendir">Lendir</option> <option value="Darah/Blood">Darah/Blood</option> <option value="Amoeba">Amoeba</option> <option value="Lain-lain">Lain-lain</option> </select> </td> <td> <input type="text" class="form-control" name="f_hasil_new_'+a+'" required> </td> <td> <input type="text" class="form-control" name="f_status_new_'+a+'" required> </td> <td> <input type="text" class="form-control" name="f_normal_new_'+a+'" required> </td> </tr>');
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
          $('#last_row_kimia').before('<tr id="kimia_new_'+a+'"> <td style="text-align:center;"> <select class="form-control" name="k_pemeriksaan_new_'+a+'"> <option value="0">-</option> <option value="Gula darah sewaktu">Gula darah sewaktu</option> <option value="Gula darah puasa">Gula darah puasa</option> <option value="Gula darah 2 jam PP">Gula darah 2 jam PP</option> <option value="ALP">ALP</option> <option value="Total Protein">Total Protein</option> <option value="Albumin">Albumin</option> <option value="Globulin">Globulin</option> <option value="Bilirubin Total">Bilirubin Total</option> <option value="Bilirubin Direk">Bilirubin Direk</option> <option value="Bilirubin Indirek">Bilirubin Indirek</option> <option value="Total Cholesterol">Total Cholesterol</option> <option value="HDL Cholesterol">HDL Cholesterol</option> <option value="LDL Cholesterol">LDL Cholesterol</option> <option value="Trygliserida">Trygliserida</option> <option value="SGOT">SGOT</option> <option value="SGPT">SGPT</option> <option value="GGT">GGT</option> <option value="Ureum">Ureum</option> <option value="Creatinim">Creatinim</option> <option value="Asam Urat">Asam Urat</option> </select> </td> <td> <input type="text" class="form-control" name="k_hasil_new_'+a+'" required> </td> <td> <input type="text" class="form-control" name="k_status_new_'+a+'" required> </td> <td> <input type="text" class="form-control" name="k_normal_new_'+a+'" required> </td> </tr>');
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
          $('#last_row_serologi').before('<tr id="serologi_new_'+a+'"> <td style="text-align:center;"> <select class="form-control" name="s_pemeriksaan_new_'+a+'"> <option value="0">-</option> <option value="S. Typhosa O">S. Typhosa O</option> <option value="S. Typhosa H">S. Typhosa H</option> <option value="S. Paratyphosa AO">S. Paratyphosa AO</option> <option value="S. Paratyphosa AH">S. Paratyphosa AH</option> <option value="S. Paratyphosa BO">S. Paratyphosa BO</option> <option value="S. Paratyphosa BH">S. Paratyphosa BH</option> <option value="S. Paratyphosa CO">S. Paratyphosa CO</option> <option value="S. Paratyphosa CH">S. Paratyphosa CH</option> <option value="Anti HIV">Anti HIV</option> <option value="Hbs Ag">Hbs Ag</option> <option value="Anti Hbs Ag">Anti Hbs Ag</option> <option value="CRP">CRP</option> <option value="RF">RF</option> <option value="ASTO">ASTO</option> <option value="Dengue lgG/lg M">Dengue lgG/lg M</option> </select> </td> <td> <input type="text" class="form-control" name="s_hasil_new_'+a+'" required> </td> <td> <input type="text" class="form-control" name="s_status_new_'+a+'" required> </td> <td> <input type="text" class="form-control" name="s_normal_new_'+a+'" required> </td> </tr>');
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
          $('#last_row_narkoba').before('<tr id="narkoba_new_'+a+'"> <td style="text-align:center;"> <select class="form-control" name="n_pemeriksaan_new_'+a+'"> <option value="0">-</option> <option value="Canabis">Canabis</option> <option value="Opiat">Opiat</option> <option value="Benzodiazepin">Benzodiazepin</option> <option value="M Ampetamin">M Ampetamin</option> <option value="Alkohol">Alkohol</option> </select> </td> <td> <input type="text" class="form-control" name="n_hasil_new_'+a+'" required> </td> <td> <input type="text" class="form-control" name="n_status_new_'+a+'" required> </td> <td> <input type="text" class="form-control" name="n_normal_new_'+a+'" required> </td> </tr>');
          document.getElementById('jumlah_form_narkoba').value = a;
        });
      });
    </script>

  </body>


  <html>