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
                  <td>Permintaan Kebutuhan Privasi</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_permintaan_privasi">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_permintaan_privasi_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_permintaan_privasi_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_permintaan_privasi_pdf">Cetak</a>
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
                    <input type="text" class="form-control" name="nama" disabled="" value="{{$nama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="umur" disabled="" value="{{$umur}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk" value="1" disabled {{$jk == 1 ? 'checked' : ''}}>
                        Laki-laki
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk" value="0" disabled {{$jk == 0 ? 'checked' : ''}}>
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat" disabled="" value="{{$alamat}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="agama" disabled="" value="{{$agama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No.Telp</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_telp" disabled="" value="{{$no_telp}}">
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
                        <input type="radio" name="hub" value="1" disabled {{$hub == 1 ? 'checked' : ''}}>
                        Suami
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hub" value="2" disabled {{$hub == 2 ? 'checked' : ''}}>
                        Istri
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hub" value="3" disabled {{$hub == 3 ? 'checked' : ''}}>
                        Anak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hub" value="4" disabled {{$hub == 4 ? 'checked' : ''}}>
                        Ayah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hub" value="5" disabled {{$hub == 5 ? 'checked' : ''}}>
                        Ibu
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hub" value="6" disabled {{$hub == 6 ? 'checked' : ''}}>
                        Lain
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="hub_lain" placeholder="Hubungan lainnya..." disabled="" value="{{$hub_lain}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_hub" disabled="" value="{{$nama_hub}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="umur_hub" disabled="" value="{{$umur_hub}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk_hub" value="1" disabled {{$jk_hub == 1 ? 'checked' : ''}}>
                        Laki-laki
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk_hub" value="0" disabled {{$jk_hub == 0 ? 'checked' : ''}}>
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat_hub" disabled="" value="{{$alamat_hub}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="agama_hub" disabled="" value="{{$agama_hub}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No.Telp</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_telp_hub" disabled="" value="{{$no_telp_hub}}">
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
                    <input type="text" class="form-control" name="permintaan_privasi" disabled="" value="{{$permintaan_privasi}}">
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
                    <input type="text" class="form-control" name="keterangan_pp_1" disabled="" value="{{$keterangan_pp_1}}">
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
                    <input type="text" class="form-control" name="keterangan_pp_2" disabled="" value="{{$keterangan_pp_2}}">
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
                    <input type="text" class="form-control" name="keterangan_pp_3" disabled="" value="{{$keterangan_pp_3}}">
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
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal" disabled="" value="{{$tanggal}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Saksi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_saksi" disabled="" value="{{$nama_saksi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Pemohon</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_pemohon" disabled="" value="{{$nama_pemohon}}">
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

      @include('layouts.tailscript')
    </body>


    <html>