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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> PENOLAKAN TINDAKAN KEDOKTERAN</h3>
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
                  <td>Penolakan Tindakan Kedokteran</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_penolakan_tindakan">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_penolakan_tindakan_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_penolakan_tindakan_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_penolakan_tindakan_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_penolakan_tindakan_edit">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Pemberian Informasi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dokter Pelaksana Tindakan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dokter_pelaksana_tindakan" value="{{$dokter_pelaksana_tindakan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pemberian Informasi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="pemberi_informasi" value="{{$pemberi_informasi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Penerima Informasi /<br><i>Pemberi Penolakan</i></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="penerima_informasi" value="{{$penerima_informasi}}">
                  </div>
                </div>
              </div>
            </section>

            <div class="row">
              <div class="col-lg-12">
                <input type="hidden" name="jumlah_form" id="jumlah_form" value="4">
                <section class="panel">
                  <header class="panel-heading">
                  </header>
                  <div class="panel-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 5%; text-align: center;vertical-align:middle;">NO</th>
                          <th style="width: 15%; text-align: center;vertical-align:middle;">JENIS INFORMASI</th>
                          <th style="width: 70%; text-align: center;vertical-align:middle;">ISI INFORMASI</th>
                          <th style="text-align: center;vertical-align:middle;">TANDA (V)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="text-align:center;">1</td>
                          <td>Diagnosis (WD/DD)</td>
                          <td>
                            <input type="text" class="form-control" value="{{$jenis_informasi_1}}">
                          </td>
                          <td><input type="checkbox" class="form-control" name="check_informasi_1" {{$check_informasi_1 == True ? 'checked' : ''}}></td>
                        </tr>
                        <tr>
                          <td style="text-align:center;">2</td>
                          <td>Dasar Diagnosis</td>
                          <td>
                            <input type="text" class="form-control" value="{{$jenis_informasi_2}}">
                          </td>
                          <td><input type="checkbox" class="form-control" name="check_informasi_2" {{$check_informasi_2 == True ? 'checked' : ''}}></td>
                        </tr>
                        <tr>
                          <td style="text-align:center;">3</td>
                          <td>Tindakan Kedokteran</td>
                          <td>
                            <input type="text" class="form-control" value="{{$jenis_informasi_3}}">
                          </td>
                          <td><input type="checkbox" class="form-control" name="check_informasi_3" {{$check_informasi_3 == True ? 'checked' : ''}}></td>
                        </tr>
                        <tr>
                          <td style="text-align:center;">4</td>
                          <td>Indikasi Tindakan</td>
                          <td>
                            <input type="text" class="form-control" value="{{$jenis_informasi_4}}" >
                          </td>
                          <td><input type="checkbox" class="form-control" name="check_informasi_4" {{$check_informasi_4 == True ? 'checked' : ''}}></td>
                        </tr>
                        <tr>
                          <td style="text-align:center;">5</td>
                          <td>Tata Cara</td>
                          <td>
                            <input type="text" class="form-control" value="{{$jenis_informasi_5}}" >
                          </td>
                          <td><input type="checkbox" class="form-control" name="check_informasi_5" {{$check_informasi_5 == True ? 'checked' : ''}}></td>
                        </tr>
                        <tr>
                          <td style="text-align:center;">6</td>
                          <td>Tujuan</td>
                          <td>
                            <input type="text" class="form-control" value="{{$jenis_informasi_6}}" >
                          </td>
                          <td><input type="checkbox" class="form-control" name="check_informasi_6" {{$check_informasi_6 == True ? 'checked' : ''}}></td>
                        </tr>
                        <tr>
                          <td style="text-align:center;">7</td>
                          <td>Risiko</td>
                          <td>
                            <input type="text" class="form-control" value="{{$jenis_informasi_7}}"> 
                          </td>
                          <td><input type="checkbox" class="form-control" name="check_informasi_7" {{$check_informasi_7 == True ? 'checked' : ''}}></td>
                        </tr>
                        <tr>
                          <td style="text-align:center;">8</td>
                          <td>Komplikasi</td>
                          <td>
                            <input type="text" class="form-control" value="{{$jenis_informasi_8}}" >
                          </td>
                          <td><input type="checkbox" class="form-control" name="check_informasi_8" {{$check_informasi_8 == True ? 'checked' : ''}}></td>
                        </tr>
                        <tr>
                          <td style="text-align:center;">9</td>
                          <td>Prognosis</td>
                          <td>
                            <input type="text" class="form-control" value="{{$jenis_informasi_9}}" >
                          </td>
                          <td><input type="checkbox" class="form-control" name="check_informasi_9" {{$check_informasi_9 == True ? 'checked' : ''}}></td>
                        </tr>
                        <tr>
                          <td style="text-align:center;">10</td>
                          <td>Alternatif dan Risiko</td>
                          <td>
                            <input type="text" class="form-control" value="{{$jenis_informasi_10}}" >
                          </td>
                          <td><input type="checkbox" class="form-control" name="check_informasi_10" {{$check_informasi_10 == True ? 'checked' : ''}}></td>
                        </tr>
                        <tr>
                          <td style="text-align:center;">11</td>
                          <td>Lain-lain</td>
                          <td>
                            <input type="text" class="form-control" value="{{$jenis_informasi_11}}" >
                          </td>
                          <td><input type="checkbox" class="form-control" name="check_informasi_11" {{$check_informasi_11 == True ? 'checked' : ''}}></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
            </div>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <div class="col-sm-12">
                    *Bila pasien tidak kompeten atau tidak mau menerima informasi, maka penerima informasi adalah wali atau keluarga terdekat
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">PENOLAKAN TINDAKAN KEDOKTERAN
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <div class="col-sm-8">
                    Yang bertanda tangan dibawah ini, saya
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama" value="{{$nama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="umur" value="{{$umur}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk" value="1" {{$jk == 1 ? 'checked' : ''}}>
                        Laki-laki
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk" value="0" {{$jk == 0 ? 'checked' : ''}}>
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>                
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">PENOLAKAN TERHADAP
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <div class="col-sm-8">
                    Dengan ini menyatakan persetujuan untuk dilakukannya tidakan
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tindakan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tindakan" value="{{$tindakan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Terhadap (Nama)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="terhadap" value="{{$terhadap}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="umur_terhadap" value="{{$umur_terhadap}}">
                  </div>
                </div>     
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk_terhadap" value="1" {{$jk_terhadap == 1 ? 'checked' : ''}}>
                        Laki-laki
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk_terhadap" value="0" {{$jk_terhadap == 0 ? 'checked' : ''}}>
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>    
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat_terhadap" value="{{$alamat_terhadap}}">
                  </div>
                </div>               
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <div class="col-sm-12">
                    Saya memahami perlunya dan manfaat tindakan tersebut sebagaimana telah dijelaskan seperti di atas kepada saya, termasuk resiko dan komplikasi yang mungkin timbul apabila tindakan tersebut tidak dilakukan.
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    Saya bertanggung jawab secara penuh atas segala akibat yang mungkin timbul sebagai akibat tidak dilakukannya tindakan kedokteran tersebut.
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
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal" value="{{$tanggal}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Waktu</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="waktu" value="{{$waktu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Yang Menyatakan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="yang_menyatakan" value="{{$yang_menyatakan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Saksi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="saksi" value="{{$saksi}}">
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