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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Kebutuhan Informasi dan Edukasi Pasien/Keluarga Rawat Jalan</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Kebutuhan Informasi dan Edukasi
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
                  <td>Kebutuhan Informasi dan edukasi </td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/rj_infoedu_pdf">PDF</a>
                      <a class="btn btn-success" href="#">EDIT</a>
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
          <form class="form-horizontal">
            <section class="panel">
              <header class="panel-heading">
                Persiapan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Bahasa</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="bahasa" {{$bahasa == 'Indonesia' ? 'checked' : ''}} value="Indonesia" id="bahasa_indonesia">
                        Indonesia
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="bahasa" {{$bahasa == 'Inggris' ? 'checked' : ''}} value="Inggris" id="bahasa_inggris">
                        Inggris
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="bahasa" {{$bahasa == 'Daerah' ? 'checked' : '' }} value="Daerah" id="bahasa_daerah">
                        Daerah
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="bahasa" {{$bahasa == 'Lainnya' ? 'checked' : ''}} value="Lainnya" id="bahasa_lainnya">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-10">
                    <input disabled type="text" class="form-control" name="ket_bahasa" id="ket_bahasa" disabled value="{{$ket_bahasa}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kebutuhan Penerjemah</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="penerjemah" value="true" {{$penerjemah == True ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="penerjemah" value="false" {{$penerjemah == False ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pendidikan Pasien</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="pendidikan" value="SD" {{$pendidikan == 'SD' ? 'checked' : ''}}>
                        SD
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="pendidikan" value="SLTP" {{$pendidikan == 'SLTP' ? 'checked' : ''}}>
                        SLTP
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="pendidikan" value="SLTA" {{$pendidikan == 'SLTA' ? 'checked' : ''}}>
                        SLTA
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="pendidikan" value="S1" {{$pendidikan == 'S1' ? 'checked' : ''}}>
                        S1
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="pendidikan" value="Lainnya" {{$pendidikan == 'Lainnya' ? 'checked' : ''}}>
                        Lain-lain
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Baca dan Tulis</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="baca_tulis" value="Baik" {{$baca_tulis == 'Baik' ? 'checked' : ''}}>
                        Baik
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="baca_tulis" value="Kurang" {{$baca_tulis == 'Kurang' ? 'checked' : ''}}>
                        Kurang
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pilihan cara belajar</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="cara_belajar" value="Verbal" {{$cara_belajar == 'Verbal' ? 'checked' : ''}}>
                        Verbal
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="cara_belajar" value="Tulisan" {{$cara_belajar == 'Tulisan' ? 'checked' : ''}}>
                        Tulisan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Budaya/Suku/Etnis</label>
                  <div class="col-sm-10">
                    <input disabled type="text" class="form-control" name="budaya" value="{{$budaya}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Hambatan
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Hambatan</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="hambatan_1" {{isset($hambatan[1]) ? 'checked' : ''}}>
                        Tidak ada
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="hambatan_2" {{isset($hambatan[2]) ? 'checked' : ''}}>
                        Bahasa
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="hambatan_3" {{isset($hambatan[3]) ? 'checked' : ''}}>
                        Kognitif terbatas
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="hambatan_4" {{isset($hambatan[4]) ? 'checked' : ''}}>
                        Penglihatan terganggu
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="hambatan_5" {{isset($hambatan[5]) ? 'checked' : ''}}>
                        Budaya/Agama/Spiritual
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="hambatan_6" {{isset($hambatan[6]) ? 'checked' : ''}}>
                        Emosional
                      </label>
                    </div>
                  </div>


                  <div class="col-lg-6">

                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="hambatan_7" {{isset($hambatan[7]) ? 'checked' : ''}}>
                        Pendengaran terganggu
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="hambatan_8" {{isset($hambatan[8]) ? 'checked' : ''}}>
                        Fisik lemah
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="hambatan_9" {{isset($hambatan[9]) ? 'checked' : ''}}>
                        Gangguan bicara
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="hambatan_10" {{isset($hambatan[10]) ? 'checked' : ''}}>
                        Motivasi kurang
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="hambatan_11" {{isset($hambatan[11]) ? 'checked' : ''}}>
                        Keyakinan/Mitos
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="hambatan_12" {{isset($hambatan[12]) ? 'checked' : ''}}>
                        Lain-lain
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-10">
                    <input disabled type="text" class="form-control" name="hambatan_lain" id="hambatan_lain" disabled value="{{$hambatan_lain}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Kebutuhan
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kebutuhan</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="kebutuhan_1" {{isset($kebutuhan[1]) ? 'checked' : ''}}>
                        Proses Penyakit
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="kebutuhan_2" {{isset($kebutuhan[2]) ? 'checked' : ''}}>
                        Obat-obatan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="kebutuhan_3" {{isset($kebutuhan[3]) ? 'checked' : ''}}>
                        Prosedur/Tindakan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="kebutuhan_4" {{isset($kebutuhan[4]) ? 'checked' : ''}}>
                        Pencegahan faktor risiko
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="kebutuhan_5" {{isset($kebutuhan[5]) ? 'checked' : ''}}>
                        Manajemen nyeri
                      </label>
                    </div>                    
                  </div>

                  <div class="col-lg-6">
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="kebutuhan_6" {{isset($kebutuhan[6]) ? 'checked' : ''}}>
                        Diet/Nutrisi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="kebutuhan_7" {{isset($kebutuhan[7]) ? 'checked' : ''}}>
                        Lingkungan yang perlu dimodifikasi pasca perawatan
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="kebutuhan_8" {{isset($kebutuhan[8]) ? 'checked' : ''}}>
                        Rehabilitasi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="kebutuhan_9" {{isset($kebutuhan[9]) ? 'checked' : ''}}>
                        Hasil pelayanan, termasuk terjadinya kejadian yang diharapkan dan tidak diharapkan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled type="checkbox" name="kebutuhan_10" {{isset($kebutuhan[10]) ? 'checked' : ''}}>
                        Lain-lain 
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-10">
                    <input disabled type="text" class="form-control" name="kebutuhan_lain" id="kebutuhan_lain" value="{{$kebutuhan_lain}}" disabled>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Keluarga/Wali 
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesediaan Pasien dan/atau Keluarga/Wali untuk menerima informasi dan edukasi</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="kesediaan_menerima" value="true" {{$kesediaan_menerima == True ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input disabled type="radio" name="kesediaan_menerima" value="false" {{$kesediaan_menerima == False ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Keluarga/Wali</label>
                  <div class="col-sm-10">
                    <input disabled type="text" class="form-control" name="nama_keluarga" value="{{$nama_keluarga}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Hubungan dengan pasien</label>
                  <div class="col-sm-10">
                    <input disabled type="text" class="form-control" name="hubungan" value="{{$nama_keluarga}}">
                  </div>
                </div>
                <div>
                  {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                  <a href="{{url('')}}/rj_informasi_edukasi_list_informasi"><button type="button" class="btn btn-primary">List Edukasi</button></a>
                </div>
              </div>
            </section>
          </form>
        </div>
      </div>

    </section>
  </section>

  @include('layouts.tailscript')
  

</body>


<html>