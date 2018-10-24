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
            <header class="panel-heading">
              Dokumen Rencana Pemulangan Pasien
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
                  <td>Rencana Pemulangan Pasien (Discharge Planning)</td>
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
          <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_rencana_pemulangan">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosa Medis</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="diagnosis_medis">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ruangan</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="ruangan">
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
                        <input type="radio" name="a1" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a1" value="0">
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
                        <input type="radio" name="a2" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a2" value="0">
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
                        <input type="radio" name="a3" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a3" value="0">
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
                        <input type="radio" name="a4" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a4" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a4">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Bantuan diperlukan dalam hal</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="bantuan_1">
                        Minum Obat
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="bantuan_2">
                        Makan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="bantuan_3">
                        Menyiapkan Makanan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="bantuan_4">
                        Edukasi Kesehatan
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="bantuan_5">
                        Mandi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="bantuan_6">
                        Diet
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="bantuan_7">
                        Berpakaian 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="bantuan_8">
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
                        <input type="radio" name="a5" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a5" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a5">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Apakah pasien hidup/tinggal sendiri setelah keluar dari rumah sakit?</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a6" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a6" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a6">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Apakah pasien menggunakan peralatan medis di rumah setelah keluar rumah sakit (cateter, NGT. double lumen, oksigen)?</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a7" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a7" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a7">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Apakah pasien memerlukan alat bantu setelah keluar dari rumah sakit (tingkat, kursi roda, waker dll)?</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a8" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a8" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a8">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Apakah memerlukan bantuan/peralatan medis di rumah setelah keluar rumah sakit (homecare, home visit)?</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a9" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a9" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a9">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Apakah pasien bermasalah dalam memenuhi kebutuhan pribadinya setelah keluar dari rumah sakit (makan,minum,toileting,dll)?</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a10" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a10" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a10">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Apakah pasien memiliki nyeri kronis dan kelelahan setelah keluar dari rumah sakit?</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a11" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a11" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a11">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Apakah pasien dan keluarga memerlukan edukasi kesehatan setelah keluar dari rumah sakit (obat-obatan, nyeri, diit, mencari pertolongan, follow up, dll)?</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a12" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a12" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="inputSuccess">Apakah pasien dan keluarga memerlukan keterampilan khusus setelah keluar dari rumah sakit (perawatan luka, injeksi, dll)?</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a13" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a13" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_a13">
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