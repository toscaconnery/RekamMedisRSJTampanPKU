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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL PASIEN RAWAT INAP</h3>
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
                  <td>Dokter</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_asesmen_awal_dokter">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_asesmen_awal_dokter_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_asesmen_awal_dokter_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_asesmen_pdf">Cetak</a>
                  </td>
                </tr>
                <tr>
                  <td>Perawat</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_asesmen_awal_perawat">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_asesmen_awal_perawat_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_asesmen_awal_perawat_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_asesmen_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_asesmen_awal_dokter">
            {{ csrf_field() }}
            <input type="hidden" name="jenis_form" value="create">
            <section class="panel">
              <header class="panel-heading">Data Medis</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Diperiksa</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_diperiksa">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam_diperiksa">
                  </div>
                </div>                
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">1. Anamnesa</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Anamnesa</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" style="resize: vertical;" rows="15" name="anamnesa"></textarea>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">2.Pemeriksaan Fisik</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kepala</label>
                  <div class="col-sm-8">
                    <input type="text" name="anamnesa1" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Leher</label>
                  <div class="col-sm-8">
                    <input type="text" name="anamnesa2" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dada</label>
                  <div class="col-sm-8">
                    <input type="text" name="anamnesa3" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jantung</label>
                  <div class="col-sm-8">
                    <input type="text" name="anamnesa4" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Paru-paru</label>
                  <div class="col-sm-8">
                    <input type="text" name="anamnesa5" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perut</label>
                  <div class="col-sm-8">
                    <input type="text" name="anamnesa6" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Anggota Gerak</label>
                  <div class="col-sm-8">
                    <input type="text" name="anamnesa7" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status Lokalis</label>
                  <div class="col-sm-8">
                    <input type="text" name="anamnesa8" class="form-control">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Status Psikiatri</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Penampilan</label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri1" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kesadaran</label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri2" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Orientasi</label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri3" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sikap & Tingkah laku </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri4" class="form-control">
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Gangguan Berpikir</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri5" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Proses Pikir </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri6" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bentuk Pikir </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri7" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Isi Pikir </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri8" class="form-control">
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Alam Perasaan</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mood </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri9" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Afek </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri10" class="form-control">
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Persepsi</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Halusinasi </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri11" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ilusi </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri12" class="form-control">
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Fungsi Intelektual</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Daya Konsentrasi  </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri13" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Daya Ingat  </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri14" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pikiran Abstrak  </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri15" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pengendalian Impuls  </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri16" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Daya Nilai  </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri17" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tilikan/Insight  </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri18" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Taraf dapat dipercaya  </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri19" class="form-control">
                  </div>
                </div>                
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Pemeriksaan Penunjang</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Laboratorium</label>
                  <div class="col-sm-8">
                    <input type="text" name="penunjang1" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">EKG</label>
                  <div class="col-sm-8">
                    <input type="text" name="penunjang2" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Radiologi</label>
                  <div class="col-sm-8">
                    <input type="text" name="penunjang3" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lainnya</label>
                  <div class="col-sm-8">
                    <input type="text" name="penunjang4" class="form-control">
                  </div>
                </div>                
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Instrumen Penilaian</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">PANSS EC (Skor)</label>
                  <div class="col-sm-8">
                    <input type="text" name="penilaian1" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">GAFF (Skor)</label>
                  <div class="col-sm-8">
                    <input type="text" name="penilaian2" class="form-control">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Diagnosis Psikiatri</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis I</label>
                  <div class="col-sm-8">
                    <input type="text" name="diagnosis1" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis II</label>
                  <div class="col-sm-8">
                    <input type="text" name="diagnosis2" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis III</label>
                  <div class="col-sm-8">
                    <input type="text" name="diagnosis3" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis IV</label>
                  <div class="col-sm-8">
                    <input type="text" name="diagnosis4" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis V</label>
                  <div class="col-sm-8">
                    <input type="text" name="diagnosis5" class="form-control">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Rencana Tindakan & Tata Laksana Medis</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">1. Psikofarmaka</label>
                  <div class="col-sm-8">
                    <input type="text" name="rencana1" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">2. Psikoterapi</label>
                  <div class="col-sm-8">
                    <input type="text" name="rencana2" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">3. Lainnya</label>
                  <div class="col-sm-8">
                    <input type="text" name="rencana3" class="form-control">
                  </div>
                </div>                
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Instruksi</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="instruksi1" value="0">
                        Boleh Pulang 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="instruksi1" value="1">
                        Dirawat di Ruang
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam Keluar</label>
                  <div class="col-sm-2">
                    <input type="time" name="Instruksi2" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" name="Instruksi3" class="form-control sandbox-container">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kontrol Klinik</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="instruksi4" value="1">
                        Ya 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="instruksi4" value="0">
                        Tidak 
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Klinik</label>
                  <div class="col-sm-8">
                    <input type="text" name="instruksi5" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" name="instruksi6" class="form-control sandbox-container">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ruang</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="instruksi7" value="1">
                        Intensif 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="instruksi7" value="0">
                        Ruang Lain
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" name="instruksi8" class="form-control">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading"></header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" name="tanggal" autocomplete="off" onkeydown="return false" class="form-control sandbox-container">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" name="jam" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Dokter</label>
                  <div class="col-sm-8">
                    <input type="text" name="nama_dokter" class="form-control">
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
  </body>


  <html>