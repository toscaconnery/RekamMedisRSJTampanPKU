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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL PASIEN GIGI RAWAT JALAN</h3>
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
                  <td>Perawat</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_asesmen_awal_gigi_perawat">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_gigi_perawat_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_asesmen_awal_gigi_perawat_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_gigi_pdf">Cetak</a>
                  </td>
                </tr>
                <tr>
                  <td>Dokter</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_asesmen_awal_gigi_dokter">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_gigi_dokter_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_asesmen_awal_gigi_dokter_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_gigi_pdf">Cetak</a>
                  </td>
                </tr>                  
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">

          <form class="form-horizontal" method="post" action="rj_asesmen_awal_gigi_dokter">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Data Pasien
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="pekerjaan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Telp/HP</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="no_telp">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Data Medik
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Golongan Darah</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="golongan_darah">
                  </div>
                </div>
                <div class="form-group">                        
                  <label class="col-sm-2 control-label">Tekanan Darah</label>
                  <div class="col-sm-10">
                    <div class="row">
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="tekanan_darah_top">
                      </div>
                      <div class="col-sm-1" style="width: 1mm; padding: 0; font-size: 6mm">/</div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="tekanan_darah_bottom">
                      </div>
                      {{-- <div class="col-sm-3">
                        [<span class="badge bg-warning">Hypertensi</span><span class="badge bg-warning">Hypotensi</span><span class="badge bg-success">Normal</span>]
                      </div> --}}
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Tekanan Jantung</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="tekanan_jantung"  value="1">
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tekanan_jantung"  value="0">
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_tekanan_jantung">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Diabetes</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="diabetes"  value="1">
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="diabetes"  value="0">
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_diabetes">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Hepatitis</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="hepatitis"  value="1">
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hepatitis"  value="0">
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_hepatitis">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Penyakit Lainnya</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="penyakit_lainnya"  value="1">
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="penyakit_lainnya"  value="0">
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_penyakit_lainnya">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alergi Obat</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="alergi_obat"  value="1">
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alergi_obat"  value="0">
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_alergi_obat">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alergi Makanan</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="alergi_makanan"  value="1">
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alergi_makanan"  value="0">
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_alergi_makanan">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Oklusi</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="oklusi"  value="1">
                        Normal bite
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="oklusi"  value="2">
                        Cross bite
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="oklusi"  value="3">
                        Deep bite
                      </label>
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Torus Palatinus</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_palatinus"  value="1">
                        Tidak ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_palatinus"  value="2">
                        Kecil
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_palatinus"  value="3">
                        Sedang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_palatinus"  value="4">
                        Besar
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_palatinus"  value="5">
                        Multiple
                      </label>
                    </div>

                  </div>

                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Torus Mandibularis</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_mandibularis"  value="1">
                        Tidak ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_mandibularis"  value="2">
                        Kecil
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_mandibularis"  value="3">
                        Sedang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_mandibularis"  value="4">
                        Besar
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_mandibularis"  value="5">
                        Multiple
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Palatum</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="palatum"  value="1">
                        Dalam
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="palatum"  value="2">
                        Sedang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="palatum"  value="3">
                        Rendah
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Supernumerary Teeth</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="supernumerary_teeth"  value="1">
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="supernumerary_teeth"  value="0">
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_supernumerary_teeth">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Diastema</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="diastema" value="1">
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="diastema" value="0">
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_diastema">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Gigi Anomali</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="anomali" value="1">
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="anomali"  value="0">
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_anomali">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Lain-lain</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="lain">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="keterangan">
                  </div>
                </div>
                <div>
                  <button type="submit" class="btn btn-primary">Submit</button>
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