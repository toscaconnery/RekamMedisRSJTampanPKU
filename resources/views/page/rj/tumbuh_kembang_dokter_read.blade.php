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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL PASIEN TUMBUH KEMBANG DAN EDUKASI TERPADU</h3>
        </div>
      </div>
      @include('layouts.bio')

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
          <form class="form-validate form-horizontal" id="register_form">
            <section class="panel">
              <header class="panel-heading">
                RIWAYAT PSIKIATRIK (psychiatric history) (alloanamnesis dari orang tua, kakek, nenek, paman , bibi, kakak kandung, dll)
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keluhan utama (chief Complaint)</label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="keluhan_utama" rows="6" style="resize: none;">{{$keluhan_utama}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Gangguan Sekarang (History of Present Illness)</label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="riwayat_gangguan_sekarang" rows="6" style="resize: none;">{{$riwayat_gangguan_sekarang}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Gangguan Sebelumnya (History of Previous Illness)</label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="riwayat_gangguan_sebelumnya" rows="6" style="resize: none;">{{$riwayat_gangguan_sebelumnya}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Pribadi (Personal History)</label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="riwayat_pribadi" rows="6" style="resize: none;">{{$riwayat_pribadi}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Pra-Natal dan Perinatal ( Personal and Pernnatal History)</label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="riwayat_pranatal_perinatal" rows="6" style="resize: none;">{{$riwayat_pranatal_perinatal}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Masa Bayi/Masa  Kanak Awal(Early Childhood) (0 – 3 tahun)</label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="early_childhood" rows="6" style="resize: none;">{{$early_childhood}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Masa Kanak Pertengahan (Middle Childhood) (3 – 11 tahun)</label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="middle_childhood" rows="6" style="resize: none;">{{$middle_childhood}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Masa Kanak Akhir (Late Childhood) (11 – 18 tahun)</label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="late_childhood" rows="6" style="resize: none;">{{$late_childhood}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Keluarga (Family History)</label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="riwayat_keluarga" rows="6" style="resize: none;">{{$riwayat_keluarga}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat Situasi Sosial Sekarang (Current Social Situation)</label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="riwayat_sosial_sekarang" rows="6" style="resize: none;">{{$riwayat_sosial_sekarang}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Persepsi Pasien tentang dirinya (Patient Perception about Himself)</label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="persepsi_sendiri" rows="6" style="resize: none;">{{$persepsi_sendiri}}</textarea>
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
                    <textarea readonly class="form-control required" name="deskripsi_umum" rows="6" style="resize: none;">{{$deskripsi_umum}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Interaksi Orang tua – anak (Parent-child Interaction)</label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="interaksi_ortu_anak" rows="6" style="resize: none;">{{$interaksi_ortu_anak}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Orientasi dan Persepsi (Orientation and Perception) </label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="orientasi_persepsi" rows="6" style="resize: none;">{{$orientasi_persepsi}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mood, Afek, Ekspresi Afektif dan Empati (Mood, Affect, Affective, Expression, and Empathy)</label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="mood" rows="6" style="resize: none;">{{$mood}}</textarea>
                  </div>
                </div>
                Proses Pikir (Thought Process)
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bentuk dan Arus Pikir (Steam and Form of Thought) </label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="bentuk_arus_pikir" rows="6" style="resize: none;">{{$bentuk_arus_pikir}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Isi Pikir (Content of Thought)</label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="isi_pikir" rows="6" style="resize: none;">{{$isi_pikir}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Fantasi (Fantasy) </label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="fantasi" rows="6" style="resize: none;">{{$fantasi}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kemampuan Menilai Realitas dan Tilikan ( Reality Testing Ability and Insight)</label>
                  <div class="col-sm-8">
                    <textarea readonly class="form-control required" name="kemampuan" rows="6" style="resize: none;">{{$kemampuan}}</textarea>
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
                    <textarea readonly class="form-control required" name="diagnostik_lanjutan" rows="6" style="resize: none;">{{$diagnostik_lanjutan}}</textarea>
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
                    <textarea readonly class="form-control required" name="hasil_pemeriksaan" rows="6" style="resize: none;">{{$hasil_pemeriksaan}}</textarea>
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
                    <textarea readonly class="form-control required" name="formulasi_diagnostik" rows="6" style="resize: none;">{{$formulasi_diagnostik}}</textarea>
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
                    <input type="text" disabled class="form-control required" name="aksis1" value="{{aksis1}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Aksis II</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="aksis2" value="{{aksis2}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Aksis III</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="aksis3" value="{{aksis3}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Aksis IV</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="aksis4" value="{{aksis4}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Aksis V</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="aksis5" value="{{aksis5}}">
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
                    <input type="text" disabled class="form-control required" name="masalah_organobiologik" value="{{masalah_organobiologik}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Psikologik</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="masalah_psikologik" value="{{masalah_psikologik}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sosial</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="masalah_sosial" value="{{masalah_sosial}}">
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
                    <input type="text" disabled class="form-control required" name="prognosis" value="{{$prognosis}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                PENATALAKSANAAN (Treatment Plan)
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Untuk Pasien</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="treatment_pasien" value="{{$treatment_pasien}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Untuk Keluarga</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="treatment_keluarga" value="{{$treatment_keluarga}}">
                  </div>
                </div>
              </div>
            </section>

          </form>
        </div>
      </div>
    </section>

    @include('layouts.tailscript')

  </body>
  <html>