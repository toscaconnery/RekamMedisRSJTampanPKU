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
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> RENCANA PEMULANGAN PASIEN (DISCHARGE PLANNING)</h3>
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
                  <td>Rencana Pemulangan Pasien (Discharge Planning)</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_rencana_pemulangan">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_rencana_pemulangan_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_rencana_pemulangan_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_pemulangan_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal form-validate" id="register_form">
            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosa Medis</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="diagnosis_medis" disabled="" value="{{$diagnosis_medis}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ruangan</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="ruangan" disabled="" value="{{$ruangan}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Keterangan Rencana Pemulangan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pengaruh rawat inap terhadap Pasien dan Keluarga Pasien</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a1" value="1" disabled {{$a1 == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a1" value="0" disabled {{$a1 == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pengaruh rawat inap terhadap Pekerjaan</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a2" value="1" disabled {{$a2 == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a2" value="0" disabled {{$a2 == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pengaruh rawat inap terhadap Keuangan</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a3" value="1" disabled {{$a3 == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a3" value="0" disabled {{$a3 == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Antisipasi terhadap masalah saat pulang</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a4" value="1" disabled {{$a4 == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a4" value="0" disabled {{$a4 == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a4" disabled="" value="{{$keterangan_a4}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Bantuan diperlukan dalam hal</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="bantuan_1" disabled {{isset($bantuan[1]) ? 'checked' : ''}}>
                        Minum Obat
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="bantuan_2" disabled {{isset($bantuan[2]) ? 'checked' : ''}}>
                        Makan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="bantuan_3" disabled {{isset($bantuan[3]) ? 'checked' : ''}}>
                        Menyiapkan Makanan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="bantuan_4" disabled {{isset($bantuan[4]) ? 'checked' : ''}}>
                        Edukasi Kesehatan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="bantuan_5" disabled {{isset($bantuan[5]) ? 'checked' : ''}}>
                        Mandi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="bantuan_6" disabled {{isset($bantuan[6]) ? 'checked' : ''}}>
                        Diet
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="bantuan_7" disabled {{isset($bantuan[7]) ? 'checked' : ''}}>
                        Berpakaian 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="bantuan_8" disabled {{isset($bantuan[8]) ? 'checked' : ''}}>
                        Transportasi
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Adakah yang membantu keperluan tersebut di atas?</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a5" value="1" disabled {{$a5 == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a5" value="0" disabled {{$a5 == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a5" disabled="" value="{{$keterangan_a5}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Apakah pasien hidup/tinggal sendiri setelah keluar dari rumah sakit?</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a6" value="1" disabled {{$a6 == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a6" value="0" disabled {{$a6 == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a6" disabled="" value="{{$keterangan_a6}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Apakah pasien menggunakan peralatan medis di rumah setelah keluar rumah sakit (cateter, NGT. double lumen, oksigen)?</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a7" value="1" disabled {{$a7 == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a7" value="0" disabled {{$a7 == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a7" disabled="" value="{{$keterangan_a7}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Apakah pasien memerlukan alat bantu setelah keluar dari rumah sakit (tingkat, kursi roda, waker dll)?</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a8" value="1" disabled {{$a8 == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a8" value="0" disabled {{$a8 == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a8" disabled="" value="{{$keterangan_a8}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Apakah memerlukan bantuan/peralatan medis di rumah setelah keluar rumah sakit (homecare, home visit)?</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a9" value="1" disabled {{$a9 == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a9" value="0" disabled {{$a9 == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a9" disabled="" value="{{$keterangan_a9}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Apakah pasien bermasalah dalam memenuhi kebutuhan pribadinya setelah keluar dari rumah sakit (makan,minum,toileting,dll)?</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a10" value="1" disabled {{$a10 == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a10" value="0" disabled {{$a10 == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a10" disabled="" value="{{$keterangan_a10}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Apakah pasien memiliki nyeri kronis dan kelelahan setelah keluar dari rumah sakit?</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a11" value="1" disabled {{$a11 == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a11" value="0" disabled {{$a11 == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a11" disabled="" value="{{$keterangan_a11}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Apakah pasien dan keluarga memerlukan edukasi kesehatan setelah keluar dari rumah sakit (obat-obatan, nyeri, diit, mencari pertolongan, follow up, dll)?</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a12" value="1" disabled {{$a12 == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a12" value="0" disabled {{$a12 == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a12" disabled="" value="{{$keterangan_a12}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Apakah pasien dan keluarga memerlukan keterampilan khusus setelah keluar dari rumah sakit (perawatan luka, injeksi, dll)?</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a13" value="1" disabled {{$a13 == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a13" value="0" disabled {{$a13 == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a13" disabled="" value="{{$keterangan_a13}}">
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