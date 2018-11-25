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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> PELAPORAN EFEK SAMPING OBAT KOMITE FARMASI DAN TERAPI</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Pelaporan Efek Samping Obat Komite Farmasi dan Terapi
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
                  <td>Pelaporan Efek Samping Obat Komite Farmasi dan Terapi</td>
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

      <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_rencana_pemulangan">
        {{ csrf_field() }}

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Pasien
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label"> Suku</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="suku">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label"> Berat Badan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="bb">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label"> Pekerjaan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pekerjaan">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label"> Penyakit Utama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="penyakit_utama">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesudahan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a1" value="1">
                        Sembuh 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a1" value="2">
                        Meninggal 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a1" value="3">
                        Sembuh dengan gejala sisa
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a1" value="4">
                        Belum sembuh 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a1" value="5">
                        Tidak tahu 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Penyakit/kondisi lain yang menyertai</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pm1_1">
                        Gangguan Ginjal
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pm1_2">
                        Gangguan Hati
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pm1_3">
                        Alergi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pm1_4">
                        Kondisi medis lainnya
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pm1_5">
                        Faktor industri, pertanian, kimia, dll
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
                Reaksi Efek Samping Obat (E.S.O)
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label">Saat/Tanggal mulai terjadi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tgl_terjadi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Bentuk/Manifestasi E.S.O yang terjadi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="bentuk">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kesudahan E.S.O</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a2" value="1">
                        Sembuh 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a2" value="2">
                        Meninggal 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a2" value="3">
                        Sembuh dengan gejala sisa
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a2" value="4">
                        Belum sembuh 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a2" value="5">
                        Tidak tahu 
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Penyakit/kondisi lain yang menyertai</label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pm2_1">
                        Gangguan Ginjal
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pm2_2">
                        Gangguan Hati
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pm2_3">
                        Alergi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pm2_4">
                        Kondisi medis lainnya
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pm2_5">
                        Faktor industri, pertanian, kimia, dll
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tanggal">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Reaksi E.S.O yang pernah di alami</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="eso">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Tindakan yang telah dilakukan untuk mengatasi reaksi E.S.O</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tindakan_eso">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah reaksi E.S.O hilang setelah obat dihentikan?</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a3" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a3" value="2">
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a3" value="3">
                        Tidak Tahu
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah reaksi E.S.O yang sama timbul sewaktu obat yang dicurigai digunakan kembali</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a4" value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a4" value="2">
                        Tidak 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a4" value="3">
                        Tidak Tahu
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
                 Obat
              </header>
              <div class="panel-body">
                <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th style="width: 15%; text-align: center;vertical-align:middle;" rowspan="2">Nama (Nama dagang/Pabrik)</th>
                      <th style="width: 15%; text-align: center;vertical-align:middle;" rowspan="2">Bentuk Sediaan</th>
                      <th style="width: 10%; text-align: center;vertical-align:middle;" rowspan="2">Obat yang dicurigai</th>
                      <th style="width: 48%; text-align: center;vertical-align:middle;" colspan="4">Pemberian</th>
                      <th style="width: 15%; text-align: center;vertical-align:middle;" rowspan="2">Indikasi Penggunaan</th>
                    </tr>
                    <tr>
                      <th style="width: 12%; text-align: center;vertical-align:middle;">Rute</th>
                      <th style="width: 12%; text-align: center;vertical-align:middle;">Dosis/Waktu</th>
                      <th style="width: 12%; text-align: center;vertical-align:middle;">Tgl Mulai</th>
                      <th style="width: 12%; text-align: center;vertical-align:middle;">Tgl Akhir</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                    <tr>
                      <td style="text-align:center;">
                        <input type="text" class="form-control" name="" required>
                      </td>
                       <td style="text-align:center;">
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td style="text-align:center;">
                        <input type="checkbox" class="form-control" name="dicurigai">
                      </td>
                       <td style="text-align:center;">
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td style="text-align:center;">
                        <input type="text" class="form-control" name="" required>
                      </td>
                      <td style="text-align:center;">
                        <input type="date" class="form-control" name="tanggal_mulai">
                      </td>
                      <td style="text-align:center;">
                        <input type="date" class="form-control" name="tanggal_akhir">
                      </td>
                      <td style="text-align:center;">
                        <input type="text" class="form-control" name="" required>
                      </td>
                    </tr>
                  </tbody>
                </table>

                
              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Pelapor
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Profesi</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="a5" value="1">
                        Dokter
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a5" value="2">
                        Perawat 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="a5" value="3">
                        Farmasis
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Asal ruangan/poliklinik</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="ruangan">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="date" class="form-control" name="tanggal_pelaporan">
                  </div>
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