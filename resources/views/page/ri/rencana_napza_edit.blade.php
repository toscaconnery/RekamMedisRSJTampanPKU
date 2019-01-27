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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>RENCANA TINDAKAN KEPERAWATAN NAPZA</h3>
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
                  <td>Rencana Tindakan Keperawatan Napza</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_rencana_napza">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_rencana_napza_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_rencana_napza_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_rawat_napza_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>
      <form class="form-horizontal" method="post" action="ri_rencana_napza_edit">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Rencana Tindakan Keperawatan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label"> Tanggal Pengkajian</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pengkajian" value="{{$tanggal_pengkajian}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label"> Jam Pengkajian</label>
                  <div class="col-sm-2">
                    <input type="time" class="form-control" name="jam_pengkajian" value="{{$jam_pengkajian}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Tingkat Ketergantungan</label>
                  <div class="col-sm-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="tk" {{$tk == 'Total' ? 'checked' : ''}} value="Total">
                        Total
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tk" {{$tk == 'Sebagian' ? 'checked' : ''}} value="Sebagian">
                        Sebagian
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tk" {{$tk == 'Mandiri' ? 'checked' : ''}} value="Mandiri">
                        Mandiri
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Diagnosis: Gangguan Pola Tidur
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label"> <b>Tujuan</b> </label>
                  <label class="col-lg-2 control-label" style="text-align:left">
                    : Tidur Cukup
                  </label>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindakan Mandiri</label>
                  <div class="col-lg-7">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pola_tidur_1" {{isset($pola_tidur[1]) ? 'checked' : ''}}>
                        1. Kaji pola tidur
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pola_tidur_2" {{isset($pola_tidur[2]) ? 'checked' : ''}}>
                        2. Kaji pengantar tidur
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pola_tidur_3" {{isset($pola_tidur[3]) ? 'checked' : ''}}>
                        3. Kaji penyebab sulit tidur
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pola_tidur_4" {{isset($pola_tidur[4]) ? 'checked' : ''}}>
                        4. Jelaskan hal-hal yang dapat mengganggu tidur
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pola_tidur_5" {{isset($pola_tidur[5]) ? 'checked' : ''}}>
                        5. Jelaskan perubahan pola tidur (sulit memulai tidur, sering terbangun, tidak segar ketika bangun tidur)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pola_tidur_6" {{isset($pola_tidur[6]) ? 'checked' : ''}}>
                        6. Lakukan pengantar tidur (membaca, mendengar musik)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pola_tidur_7" {{isset($pola_tidur[7]) ? 'checked' : ''}}>
                        7. Tata ruangan nyaman (suhu, cahaya, suara)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pola_tidur_8" {{isset($pola_tidur[8]) ? 'checked' : ''}}>
                        8. Tata ruangan nyaman (suhu, cahaya, suara)
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label"> <b>Tindakan Kolaborasi</b> </label>
                  <label class="col-lg-2 control-label" style="text-align:left">
                    : Sedatif
                  </label>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Diagnosis: Gangguan Rasa Nyaman Nyeri
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label"> <b>Tujuan</b> </label>
                  <label class="col-lg-2 control-label" style="text-align:left">
                    : Tidur Cukup
                  </label>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindakan Mandiri</label>
                  <div class="col-lg-7">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="nyeri_1" {{isset($nyeri[1]) ? 'checked' : ''}}>
                        1. Kaji skala nyeri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="nyeri_2" {{isset($nyeri[2]) ? 'checked' : ''}}>
                        2. Kaji lama, frekuensi, intensitas, lokasi, karakteristik nyeri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="nyeri_3" {{isset($nyeri[3]) ? 'checked' : ''}}>
                        3. Penyebab nyeri
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="nyeri_4" {{isset($nyeri[4]) ? 'checked' : ''}}>
                        4. Kaji fakta yang menghambat pasien berhenti
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="nyeri_5" {{isset($nyeri[5]) ? 'checked' : ''}}>
                        5. Jelaskan cara mengatasi faktor penghambat untuk berhenti
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="nyeri_6" {{isset($nyeri[6]) ? 'checked' : ''}}>
                        6. Jelaskan cara-cara untuk berhenti (menghindar, mengalihkan, menolak)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="nyeri_7" {{isset($nyeri[7]) ? 'checked' : ''}}>
                        7. Motivasi untuk rehabilitasi
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label"> <b>Tindakan Kolaborasi</b> </label>
                  <label class="col-lg-2 control-label" style="text-align:left">
                    : Minum Obat secara teratur Pemberian Analgesik
                  </label>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Diagnosis: Koping Individu tidak efektif : Ketidakmampuan mengontrol keinginan untuk menggunakan zat kembali
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label"> <b>Tujuan</b> </label>
                  <label class="col-lg-2 control-label" style="text-align:left">
                    : Mampu Mengurangi keinginan menggunakan Napza
                  </label>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindakan Mandiri</label>
                  <div class="col-lg-7">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="individu_1" {{isset($individu[1]) ? 'checked' : ''}}>
                        1. Kaji penyebab ketergantungan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="individu_2" {{isset($individu[2]) ? 'checked' : ''}}>
                        2. Kaji jenis Napza
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="individu_3" {{isset($individu[3]) ? 'checked' : ''}}>
                        3. Kaji motivasi pasien berhenti
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="individu_4" {{isset($individu[4]) ? 'checked' : ''}}>
                        4. Kaji fakta yang menghambat pasien berhenti
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="individu_5" {{isset($individu[5]) ? 'checked' : ''}}>
                        5. Jelaskan cara mengatasi faktor penghambat untuk berhenti
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="individu_6" {{isset($individu[6]) ? 'checked' : ''}}>
                        6. Jelaskan cara-cara untuk berhenti (menghindar, mengalihkan, menolak)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="individu_7" {{isset($individu[7]) ? 'checked' : ''}}>
                        7. Motivasi untuk rehabilitasi
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label"> <b>Tindakan Kolaborasi</b> </label>
                  <label class="col-lg-2 control-label" style="text-align:left">
                    : Konseling / Psikoterapi
                  </label>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Diagnosis: Koping Keluarga tidak Efektif
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label"> <b>Tujuan</b> </label>
                  <label class="col-lg-2 control-label" style="text-align:left">
                    : Mampu mengurangi keinginan menggunakan Napza
                  </label>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tindakan Mandiri</label>
                  <div class="col-lg-7">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="keluarga_1" {{isset($keluarga[1]) ? 'checked' : ''}}>
                        1. Kaji pengetahuan keluarga tentang ketergantungan Napza
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="keluarga_2" {{isset($keluarga[2]) ? 'checked' : ''}}>
                        2. Jelaskan tentang gejala putus Zat
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="keluarga_3" {{isset($keluarga[3]) ? 'checked' : ''}}>
                        3. Jelaskan proses pemulihan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="keluarga_4" {{isset($keluarga[4]) ? 'checked' : ''}}>
                        4. Kaji komunikasi dalam keluarga
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="keluarga_5" {{isset($keluarga[5]) ? 'checked' : ''}}>
                        5. Jelaskan komunikasi efektif
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="keluarga_6" {{isset($keluarga[6]) ? 'checked' : ''}}>
                        6. Kaji Sikap Keluarga
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="keluarga_7" {{isset($keluarga[7]) ? 'checked' : ''}}>
                        7. Jelaskan Peran dan fungsi keluarga mengatasi ketergantungan pasien
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="keluarga_8" {{isset($keluarga[8]) ? 'checked' : ''}}>
                        8. Jelaskan obat-obatan yang diminum pasien untuk mengurangi gejala putus asa
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label"> <b>Tindakan Kolaborasi</b> </label>
                  <label class="col-lg-2 control-label" style="text-align:left">
                    : Konseling Keluarga
                  </label>
                </div>
              </div>
            </section>
          </div>
        </div>

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