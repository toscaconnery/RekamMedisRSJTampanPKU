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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> PERMINTAAN KEBUTUHAN PRIVASI</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Permintaan Kebutuhan Privasi
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
                  <td>Permintaan Kebutuhan Privasi</td>
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
          <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_permintaan_privasi">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Pemohon
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <div class="col-sm-8">
                    Yang bertanda tangan dibawah ini
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="umur">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk" value="1">
                        Laki-laki
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk" value="0">
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="agama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No.Telp</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_telp">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Pasien
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hubungan dengan Pasien</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="hub" value="1">
                        Suami
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hub" value="2">
                        Istri
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hub" value="3">
                        Anak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hub" value="4">
                        Ayah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hub" value="5">
                        Ibu
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hub" value="6">
                        Lain
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="hub_lain" placeholder="Hubungan lainnya...">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_hub">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="umur_hub">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk_hub" value="1">
                        Laki-laki
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk_hub" value="0">
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat_hub">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="agama_hub">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No.Telp</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_telp_hub">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Kebutuhan Privasi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dengan ini meminta kebutuhan privasi berupa</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="permintaan_privasi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">1. </label>
                  <div class="col-sm-8">
                    Saya mengijinkan/tidak mengijinkan (coret salah satu) Rumah Sakit memberi akses bagi:
                    Keluarga dan handal taulan serta orang-orang yang akan menengok/ menemui saya. (sebutkan nama/profesi bila ada permintaan khusus)
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_pp_1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">2. </label>
                  <div class="col-sm-8">
                    Saya mengijinkan/tidak mengijinkan privasi khusus (coret salah satu). <br>Sebutkan bila ada permintaan privasi khusus
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_pp_2">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">3. </label>
                  <div class="col-sm-8">
                    Lain-lain:<br>(Sebutkan)
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_pp_3">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Tanda Tangan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="date" class="form-control" name="tanggal">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Saksi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_saksi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Pemohon</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_pemohon">
                  </div>
                </div>
              </div>
            </section>

            <div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

          </div>
        </div>
      </section>

      @include('layouts.tailscript')
    </body>


    <html>