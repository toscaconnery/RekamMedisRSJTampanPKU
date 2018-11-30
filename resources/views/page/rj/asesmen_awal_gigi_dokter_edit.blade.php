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
            <header class="panel-heading">
              Dokumen Asesmen Awal Pasien Gigi Rawat Jalan
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
                  <td>Diisi oleh Perawat</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_perawat"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="{{url('')}}/view_rj_asesmen_awal_perawat"><i class="icon_check_alt2"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Diisi oleh Dokter</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_dokter"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="{{url('')}}/view_rj_asesmen_awal_dokter"><i class="icon_check_alt2"></i></a>
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

          <form class="form-horizontal" method="post" action="rj_asesmen_awal_gigi_dokter_edit">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Data Pasien
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="pekerjaan" value="{{$pekerjaan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="alamat" value="{{$alamat}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Telp/HP</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="no_telp" value="{{$no_telp}}">
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
                    <input type="text" class="form-control" name="golongan_darah" value="{{$golongan_darah}}">
                  </div>
                </div>
                <div class="form-group">                        
                  <label class="col-sm-2 control-label">Tekanan Darah</label>
                  <div class="col-sm-10">
                    <div class="row">
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="tekanan_darah_top" value="{{$tekanan_darah_top}}">
                      </div>
                      <div class="col-sm-1" style="width: 1mm; padding: 0; font-size: 6mm">/</div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="tekanan_darah_bottom" value="{{$tekanan_darah_bottom}}">
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
                        <input type="radio" name="tekanan_jantung"  value="1" {{$tekanan_jantung == 1 ? 'checked' : ''}}>
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tekanan_jantung"  value="0" {{$tekanan_jantung == 0 ? 'checked' : ''}}>
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_tekanan_jantung" value="{{$ket_tekanan_jantung}}">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Diabetes</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="diabetes"  value="1" {{$diabetes == 1 ? 'checked' : ''}}>
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="diabetes"  value="0" {{$diabetes == 0 ? 'checked' : ''}}>
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_diabetes" value="{{$ket_diabetes}}">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Hepatitis</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="hepatitis"  value="1" {{$hepatitis}}>
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hepatitis"  value="0" {{$hepatitis}}>
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_hepatitis" value="{{$ket_hepatitis}}">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Penyakit Lainnya</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="penyakit_lainnya"  value="1" value="{{$penyakit_lainnya}}">
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="penyakit_lainnya"  value="0" value="{{$penyakit_lainnya}}">
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_penyakit_lainnya" value="{{$ket_penyakit_lainnya}}">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alergi Obat</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="alergi_obat"  value="1" {{$alergi_obat == 1 ? 'checked' : ''}}>
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alergi_obat"  value="0" {{$alergi_obat == 0 ? 'checked' : ''}}>
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_alergi_obat" value="{{$ket_alergi_obat}}">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Alergi Makanan</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="alergi_makanan"  value="1" {{$alergi_makanan == 1 ? 'checked' : ''}}>
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="alergi_makanan"  value="0" {{$alergi_makanan == 0 ? 'checked' : ''}}>
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_alergi_makanan" value="{{$ket_alergi_makanan}}">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Oklusi</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="oklusi"  value="1" {{$oklusi == 1 ? 'checked' : ''}}>
                        Normal bite
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="oklusi"  value="2" {{$oklusi == 2 ? 'checked' : ''}}>
                        Cross bite
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="oklusi"  value="3" {{$oklusi == 3 ? 'checked' : ''}}>
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
                        <input type="radio" name="torus_palatinus"  value="1" {{$torus_palatinus == 1 ? 'checked' : ''}}>
                        Tidak ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_palatinus"  value="2" {{$torus_palatinus == 2 ? 'checked' : ''}}>
                        Kecil
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_palatinus"  value="3" {{$torus_palatinus == 3 ? 'checked' : ''}}>
                        Sedang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_palatinus"  value="4" {{$torus_palatinus == 4 ? 'checked' : ''}}>
                        Besar
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_palatinus"  value="5" {{$torus_palatinus == 5 ? 'checked' : ''}}>
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
                        <input type="radio" name="torus_mandibularis"  value="1" {{$torus_mandibularis == 1 ? 'checked' : ''}}>
                        Tidak ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_mandibularis"  value="2" {{$torus_mandibularis == 2 ? 'checked' : ''}}>
                        Kecil
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_mandibularis"  value="3" {{$torus_mandibularis == 3 ? 'checked' : ''}}>
                        Sedang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_mandibularis"  value="4" {{$torus_mandibularis == 4 ? 'checked' : ''}}>
                        Besar
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="torus_mandibularis"  value="5" {{$torus_mandibularis == 5 ? 'checked' : ''}}>
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
                        <input type="radio" name="palatum"  value="1" {{$palatum == 1 ? 'checked' : ''}}>
                        Dalam
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="palatum"  value="2" {{$palatum == 2 ? 'checked' : ''}}>
                        Sedang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="palatum"  value="3" {{$palatum == 3 ? 'checked' : ''}}>
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
                        <input type="radio" name="supernumerary_teeth"  value="1" {{$supernumerary_teeth == 1 ? 'checked' : ''}}>
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="supernumerary_teeth"  value="0" {{$supernumerary_teeth == 0 ? 'checked' : ''}}>
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_supernumerary_teeth" value="{{$ket_supernumerary_teeth}}">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Diastema</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="diastema" value="1" {{$diastema == 1 ? 'checked' : ''}}>
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="diastema" value="0" {{$diastema == 0 ? 'checked' : ''}}>
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_diastema" value="{{$ket_diastema}}">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Gigi Anomali</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="anomali" value="1" {{$anomali == 1 ? 'checked' : ''}}>
                        Ada
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="anomali" value="0" {{$anomali == 0 ? 'checked' : ''}}>
                        Tidak ada
                      </label>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label">Sebutkan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="ket_anomali" value="{{$ket_anomali}}">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Lain-lain</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="lain" value="{{$lain}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="keterangan" value="{{$keterangan}}">
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