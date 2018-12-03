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
            <header class="panel-heading">
              Dokumen Asesmen Awal Pasien Rawat Inap
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
                  <td>Asesmen Awal Pasien Rawat Inap</td>
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
          <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_asesmen_awal_dokter">
            {{ csrf_field() }}
            <input type="hidden" name="jenis_form" value="update">
            <section class="panel">
              <header class="panel-heading">Data Medis</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Diperiksa</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_diperiksa" value="{{$tanggal_diperiksa}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam_diperiksa" value="{{$jam_diperiksa}}">
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
                    <textarea class="form-control" style="resize: vertical;" rows="15" name="anamnesa">{{$anamnesa}}</textarea>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">2. Anamnesa</header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kepala</label>
                  <div class="col-sm-8">
                    <input type="text" name="anamnesa1" value="{{$anamnesa1}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Leher</label>
                  <div class="col-sm-8">
                    <input type="text" name="anamnesa2" value="{{$anamnesa2}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dada</label>
                  <div class="col-sm-8">
                    <input type="text" name="anamnesa3" value="{{$anamnesa3}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jantung</label>
                  <div class="col-sm-8">
                    <input type="text" name="anamnesa4" value="{{$anamnesa4}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Paru-paru</label>
                  <div class="col-sm-8">
                    <input type="text" name="anamnesa5" value="{{$anamnesa5}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perut</label>
                  <div class="col-sm-8">
                    <input type="text" name="anamnesa6" value="{{$anamnesa6}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Anggota Gerak</label>
                  <div class="col-sm-8">
                    <input type="text" name="anamnesa7" value="{{$anamnesa7}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status Lokalis</label>
                  <div class="col-sm-8">
                    <input type="text" name="anamnesa8" value="{{$anamnesa8}}" class="form-control">
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
                    <input type="text" name="psikiatri1" value="{{$psikiatri1}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kesadaran</label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri2" value="{{$psikiatri2}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Orientasi</label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri3" value="{{$psikiatri3}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sikap & Tingkah laku </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri4" value="{{$psikiatri4}}" class="form-control">
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Gangguan Berpikir</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri5" value="{{$psikiatri5}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Proses Pikir </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri6" value="{{$psikiatri6}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bentuk Pikir </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri7" value="{{$psikiatri7}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Isi Pikir </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri8" value="{{$psikiatri8}}" class="form-control">
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Alam Perasaan</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mood </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri9" value="{{$psikiatri9}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Afek </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri10" value="{{$psikiatri10}}" class="form-control">
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Persepsi</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Halusinasi </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri11" value="{{$psikiatri11}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ilusi </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri12" value="{{$psikiatri12}}" class="form-control">
                  </div>
                </div>
                <div class="col-lg-2"></div><h4>Fungsi Intelektual</h4>
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Daya Konsentrasi  </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri13" value="{{$psikiatri13}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Daya Ingat  </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri14" value="{{$psikiatri14}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pikiran Abstrak  </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri15" value="{{$psikiatri15}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pengendalian Impuls  </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri16" value="{{$psikiatri16}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Daya Nilai  </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri17" value="{{$psikiatri17}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tilikan/Insight  </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri18" value="{{$psikiatri18}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Taraf dapat dipercaya  </label>
                  <div class="col-sm-8">
                    <input type="text" name="psikiatri19" value="{{$psikiatri19}}" class="form-control">
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
                    <input type="text" name="penunjang1" value="{{$penunjang1}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">EKG</label>
                  <div class="col-sm-8">
                    <input type="text" name="penunjang2" value="{{$penunjang2}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Radiologi</label>
                  <div class="col-sm-8">
                    <input type="text" name="penunjang3" value="{{$penunjang3}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lainnya</label>
                  <div class="col-sm-8">
                    <input type="text" name="penunjang4" value="{{$penunjang4}}" class="form-control">
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
                    <input type="text" name="penilaian1" value="{{$penilaian1}}" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">GAF (Skor)</label>
                  <div class="col-sm-8">
                    <input type="text" name="penilaian2" value="{{$penilaian2}}" class="form-control">
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
                    <input type="text" name="diagnosis1" value="{{$diagnosis1}}" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis II</label>
                  <div class="col-sm-8">
                    <input type="text" name="diagnosis2" value="{{$diagnosis2}}" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis III</label>
                  <div class="col-sm-8">
                    <input type="text" name="diagnosis3" value="{{$diagnosis3}}" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis IV</label>
                  <div class="col-sm-8">
                    <input type="text" name="diagnosis4" value="{{$diagnosis4}}" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Axis V</label>
                  <div class="col-sm-8">
                    <input type="text" name="diagnosis5" value="{{$diagnosis5}}" class="form-control">
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
                    <input type="text" name="rencana1" value="{{$rencana1}}" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">2. Psikoterapi</label>
                  <div class="col-sm-8">
                    <input type="text" name="rencana2" value="{{$rencana2}}" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">3. Lainnya</label>
                  <div class="col-sm-8">
                    <input type="text" name="rencana3" value="{{$rencana3}}" class="form-control">
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
                        <input type="radio" name="instruksi1" {{$instruksi1 == 0 ? 'checked' : ''}} value="0">
                        Boleh Pulang 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="instruksi1" {{$instruksi1 == 1 ? 'checked' : ''}} value="1">
                        Dirawat di Ruang
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam Keluar</label>
                  <div class="col-sm-2">
                    <input type="time" name="Instruksi2" value="{{$Instruksi2}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" name="Instruksi3" value="{{$Instruksi3}}" class="form-control sandbox-container">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kontrol Klinik</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="instruksi4" {{$instruksi4 == 1 ? 'checked' : ''}} value="1">
                        Ya 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="instruksi4" {{$instruksi4 == 0 ? 'checked' : ''}} value="0">
                        Tidak 
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Klinik</label>
                  <div class="col-sm-8">
                    <input type="text" name="instruksi5" value="{{$instruksi5}}" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" name="instruksi6" value="{{$instruksi6}}" class="form-control sandbox-container">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ruang</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="instruksi7" {{$instruksi7 == 1 ? 'checked' : ''}} value="1">
                        Intensif 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="instruksi7" {{$instruksi7 == 0 ? 'checked' : ''}} value="0">
                        Ruang Lain
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" name="instruksi8" value="{{$instruksi8}}" class="form-control">
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
                    <input type="text" name="tanggal" value="{{$tanggal}}" autocomplete="off" onkeydown="return false" class="form-control sandbox-container">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-2">
                    <input type="time" name="jam" value="{{$jam}}" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Dokter</label>
                  <div class="col-sm-8">
                    <input type="text" name="nama_dokter" value="{{$nama_dokter}}" class="form-control">
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