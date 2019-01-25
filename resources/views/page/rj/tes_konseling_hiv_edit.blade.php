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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> FORMULIR TES DAN KONSELING HIV</h3>
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
                  <td>Formulir Tes dan Konseling HIV</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_tes_konseling_hiv">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_tes_konseling_hiv_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_tes_konseling_hiv_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_konselinghiv_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal form-validate" method="post" action="rj_tes_konseling_hiv_edit">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">Data Klien
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label">Nama</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="nama" value="{{$nama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Alamat</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="alamat" value="{{$alamat}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Propinsi</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="propinsi" value="{{$propinsi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Kota/Kabupaten</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="kota_kabupaten" value="{{$kota_kabupaten}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Nama Ibu Kandung</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="nama_ibu_kandung" value="{{$nama_ibu_kandung}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label">Jenis Kelamin</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="jenis_kelamin" value="{{$jenis_kelamin}}">
                  </div>
                </div>

                <div class="form-group" id="">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Perkawinan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="spk" value="0" {{$spk == 0 ? 'checked' : ''}}>
                        Kawin
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="spk" value="1" {{$spk == 1 ? 'checked' : ''}}>
                        Belum Kawin 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="spk" value="2" {{$spk == 2 ? 'checked' : ''}}>
                        Cerai Hidup
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="spk" value="3" {{$spk == 3 ? 'checked' : ''}}>
                        Cerai Mati
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Tgl. Lahir</label>
                  <div class="col-lg-8">
                    <input type="text" onkeydown="return false" autocomplete="off" class="form-control sandbox-container" name="tgl_lahir" value="{{$tgl_lahir}}">
                  </div>
                </div>

                <div class="form-group" id="">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Kehamilan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="skh" value="0" {{$skh == 0 ? 'checked' : ''}}>
                        Trisemester I
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="skh" value="1" {{$skh == 1 ? 'checked' : ''}}>
                        Trisemester II
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="skh" value="2" {{$skh == 2 ? 'checked' : ''}}>
                        Trisemester III
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="skh" value="3" {{$skh == 3 ? 'checked' : ''}}>
                        Tidak Hamil
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="skh" value="4" {{$skh == 4 ? 'checked' : ''}}>
                        Tidak Tahu
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Umur Anak Terakhir<br><small>(diisi jika klien perempuan)</small></label>
                  <div class="col-lg-2">
                    <input type="number" class="form-control" name="umur_anak_terakhir" value="{{$umur_anak_terakhir}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Jumlah Anak Kandung</label>
                  <div class="col-lg-2">
                    <input type="number" class="form-control" name="jumlah_anak_kandung" value="{{$jumlah_anak_kandung}}">
                  </div>
                </div>


              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">

                <div class="form-group" id="">
                  <label class="control-label col-lg-2" for="inputSuccess">Pendidikan Terakhir</label>
                  <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" name="pen" value="0" {{$pen == 0 ? 'checked' : ''}}>
                        Tidak pernah sekolah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pen" value="1" {{$pen == 1 ? 'checked' : ''}}>
                        SD/sederajatnya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pen" value="2" {{$pen == 2 ? 'checked' : ''}}>
                        SMP/sederajatnya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pen" value="3" {{$pen == 3 ? 'checked' : ''}}>
                        SMA/sedereajatnya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pen" value="4" {{$pen == 4 ? 'checked' : ''}}>
                        Akademi/Perguruan Tinggi/Sederajatnya
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group" id="">
                  <label class="control-label col-lg-2" for="inputSuccess">Pekerjaan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="pek" value="0" {{$pek == 0 ? 'checked' : ''}}>
                        Tidak Bekerja
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pek" value="1" {{$pek == 1 ? 'checked' : ''}}>
                        Bekerja
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Jenis Pekerjaan</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="jenis_pekerjaan" value="{{$jenis_pekerjaan}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Kelompok Risiko<br><small>(pilih saru yang paling dominan)</small></label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="kr" value="0" {{$kr == 0 ? 'checked' : ''}}>
                        PS
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kr" value="1" {{$kr == 1 ? 'checked' : ''}}>
                        Pelanggan PS
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kr" value="2" {{$kr == 2 ? 'checked' : ''}}>
                        Waria
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kr" value="3" {{$kr == 3 ? 'checked' : ''}}>
                        Pasangan Risti
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kr" value="4" {{$kr == 4 ? 'checked' : ''}}>
                        Penasun
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kr" value="5" {{$kr == 5 ? 'checked' : ''}}>
                        Lainnya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kr" value="6" {{$kr == 6 ? 'checked' : ''}}>
                        Gay/ LSL
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group" id="">
                  <label class="control-label col-lg-2" for="inputSuccess">Keterangan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="ktr" value="0" {{$ktr == 0 ? 'checked' : ''}}>
                        Langsung
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ktr" value="1" {{$ktr == 1 ? 'checked' : ''}}>
                        Tidak Langsung
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Lamanya<br><small>(diisi khusus PS dan Penasun)</small></label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="lama_ps_penasun" value="{{$lama_ps_penasun}}">
                  </div>
                </div>

                <div class="form-group" id="">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Kunjungan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="sk" value="0" {{$sk == 0 ? 'checked' : ''}}>
                        Datang Sendiri
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sk" value="1" {{$sk == 1 ? 'checked' : ''}}>
                        Dirujuk
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group" id="">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Rujukan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="sr" value="0" {{$sr == 0 ? 'checked' : ''}}>
                        Tempat Kerja
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sr" value="1" {{$sr == 1 ? 'checked' : ''}}>
                        Kader
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sr" value="2" {{$sr == 2 ? 'checked' : ''}}>
                        Klp Dukungan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sr" value="3" {{$sr == 3 ? 'checked' : ''}}>
                        LSM
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sr" value="4" {{$sr == 4 ? 'checked' : ''}}>
                        Pasangan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sr" value="5" {{$sr == 5 ? 'checked' : ''}}>
                        Lain-lain
                      </label>
                    </div>
                  </div>
                </div>


              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Pasangan Klien
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label">Klien Punya Pasangan Tetap<br><small>(Diisi jika klien perempuan)</small></label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="pt" value="1" {{$pt == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pt" value="0" {{$pt == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Punya Pasangan Perempuan?<br><small>(Diisi jika klien laki-laki)</small></label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="pp" value="1" {{$pp == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pp" value="0" {{$pp == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Apakah Pasangan Hamil?<br><small>(Diisi jika klien laki-laki)</small></label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="ha" value="0" {{$ha == 0 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ha" value="1" {{$ha == 1 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ha" value="2" {{$ha == 2 ? 'checked' : ''}}>
                        Tidak Tahu
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Tanggal Lahir Pasangan</label>
                  <div class="col-lg-8">
                    <input type="text" onkeydown="return false" autocomplete="off" class="form-control sandbox-container" name="tanggal_lahir_pasangan" value="{{$tanggal_lahir_pasangan}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Status Pasangan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="sp" value="0" {{$sp == 0 ? 'checked' : ''}}>
                        HIV (+)
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sp" value="1" {{$sp == 1 ? 'checked' : ''}}>
                        HIV (-)
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sp" value="2" {{$sp == 2 ? 'checked' : ''}}>
                        Tidak Diketahui
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Tanggal Tes Terakhir Pasangan</label>
                  <div class="col-lg-2">
                    <input type="text" onkeydown="return false" autocomplete="off" class="form-control sandbox-container" name="tgl_tes_terakhir_pasangan" value="{{$tgl_tes_terakhir_pasangan}}">
                  </div>
                </div>

              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Populasi Khusus
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label">Klien WBP<br><small>(Warga Binaan Pemasyarakatan)</small></label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="wbp" value="1" {{$wbp == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="wbp" value="0" {{$wbp == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Konseling Pra Tes - <small> Isikan bila dilakukan konseling (KTS)</small>
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label">Tgl Konseling Tes Pra HIV</label>
                  <div class="col-lg-8">
                    <input type="text" onkeydown="return false" autocomplete="off" class="form-control sandbox-container" name="tgl_konseling_pra_hiv" value="{{$tgl_konseling_pra_hiv}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Status Klien</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="skl" value="0" {{$skl == '0' ? 'checked' : ''}}>
                        Baru
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="skl" value="1" {{$skl == '1' ? 'checked' : ''}}>
                        Lama
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Alasan Tes HIV<br><small>(boleh diisi lebih dari satu)</small></label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="alasan_tes_1" {{isset($alasan_tes[1]) ? 'checked' : ''}}>
                        Ingin tahu saja
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="alasan_tes_2" {{isset($alasan_tes[2]) ? 'checked' : ''}}>
                        Merasa beresiko
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="alasan_tes_3" {{isset($alasan_tes[3]) ? 'checked' : ''}}>
                        Mumpung gratis
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="alasan_tes_4" {{isset($alasan_tes[4]) ? 'checked' : ''}}>
                        Tes ulang (window period)
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="alasan_tes_5" {{isset($alasan_tes[5]) ? 'checked' : ''}}>
                        Untuk bekerja
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="alasan_tes_6" {{isset($alasan_tes[6]) ? 'checked' : ''}}>
                        Lainnya ...
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="alasan_tes_7" {{isset($alasan_tes[7]) ? 'checked' : ''}}>
                        Ada gejala tertentu
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="alasan_tes_8" {{isset($alasan_tes[8]) ? 'checked' : ''}}>
                        Akan menikah ...
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Mengetahui adanya tes dari<br><small>(Pilih satu yang paling dominan)</small></label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="dmn" value="0" {{$dmn == 0 ? 'checked' : ''}}>
                        Brosur
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dmn" value="1" {{$dmn == 1 ? 'checked' : ''}}>
                        Koran
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dmn" value="2" {{$dmn == 2 ? 'checked' : ''}}>
                        TV
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dmn" value="3" {{$dmn == 3 ? 'checked' : ''}}>
                        Petugas Kesehatan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dmn" value="4" {{$dmn == 4 ? 'checked' : ''}}>
                        Teman
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dmn" value="5" {{$dmn == 5 ? 'checked' : ''}}>
                        Petugas Outreach
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dmn" value="6" {{$dmn == 6 ? 'checked' : ''}}>
                        Poster
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dmn" value="7" {{$dmn == 7 ? 'checked' : ''}}>
                        Lay Konselor
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dmn" value="8" {{$dmn == 8 ? 'checked' : ''}}>
                        Lainnya ...
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Sebutkan</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="dmn_lainnya" value="{{$dmn_lainnya}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Kajian Tingkat Risiko:<br>Hubungan Seks Vaginal Berisiko</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="kaj" value="1" {{$kaj == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kaj" value="0" {{$kaj == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="waktu_kaj" value="{{$waktu_kaj}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Anal Seks Beresiko</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="an" value="1" {{$an == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="an" value="0" {{$an == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="waktu_an" value="{{$waktu_an}}">
                  </div>
                </div>

                <div class="form-group">   
                  <label class="col-lg-2 control-label">Bergantian Peralatan Suntik</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>         
                        <input type="radio" name="per" value="1" {{$per == 1 ? 'checked' : ''}}>         
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>         
                        <input type="radio" name="per" value="0" {{$per == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="waktu_per" value="{{$waktu_per}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Transfusi Darah</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="trf" value="1" {{$trf == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="trf" value="0" {{$trf == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="waktu_trf" value="{{$waktu_trf}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Transmisi Ibu ke Anak</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="trm" value="1" {{$trm == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="trm" value="0" {{$trm == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="waktu_trm" value="{{$waktu_trm}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Lainnya(Sebutkan)</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="ktr_lainnya" value="{{$ktr_lainnya}}">
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="waktu_ktr_lainnya" value="{{$waktu_ktr_lainnya}}">
                  </div>
                </div>
                <div class="form-group">

                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Periode Jendela <br><small><i>(window periode)</i></small></label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jd" value="1" {{$jd == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jd" value="0" {{$jd == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="waktu_jd" value="{{$waktu_jd}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Kesediaan Untuk Tes</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="ksd" value="1" {{$ksd == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ksd" value="0" {{$ksd == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Pernah Tes HIV Sebelumnya</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="tes_hiv" value="1" {{$tes_hiv == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tes_hiv" value="0" {{$tes_hiv == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-lg-1 control-label">Dimana</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="tt_hiv" value="{{$tt_hiv}}">
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="wt_hiv" value="{{$wt_hiv}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Hasil</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="ht_hiv" value="0" {{$ht_hiv == 0 ? 'checked' : ''}}>
                        Non Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ht_hiv" value="1" {{$ht_hiv == 1 ? 'checked' : ''}}>
                        Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ht_hiv" value="2" {{$ht_hiv == 2 ? 'checked' : ''}}>
                        Tidak tahu
                      </label>
                    </div>
                  </div>
                </div>

              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Pemberian Informasi - <small>isikan bila penawaran tes oleh petugas kesehatan (TIPK)</small>
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label">Tanggal Pemberian Informasi</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control sandbox-container" onkeydown="return false" autocomplete="off" name="tgl_pemberian_informasi" value="{{$tgl_pemberian_informasi}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Pernah Tes HIV Sebelumnya</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="tes_hiv2" value="1" {{$tes_hiv2 == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tes_hiv2" value="0" {{$tes_hiv2 == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-lg-1 control-label">Dimana</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="tt_hiv2" value="{{$tt_hiv2}}">
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="wt_hiv2" value="{{$wt_hiv2}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Hasil</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="ht_hiv2" value="0" {{$ht_hiv2 == 0 ? 'checked' : ''}}>
                        Non Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ht_hiv2" value="1" {{$ht_hiv2 == 1 ? 'checked' : ''}}>
                        Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ht_hiv2" value="2" {{$ht_hiv2 == 2 ? 'checked' : ''}}>
                        Tidak tahu
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Penyakit Terkait Pasien<br><small>(boleh diisi lebih dari satu)</small></label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_1" {{isset($ptp[1]) ? 'checked' : ''}}>
                        TB
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_2" {{isset($ptp[2]) ? 'checked' : ''}}>
                        Dermatitis
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_3" {{isset($ptp[3]) ? 'checked' : ''}}>
                        Herpes
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_4" {{isset($ptp[4]) ? 'checked' : ''}}>
                        Sifilis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_5" {{isset($ptp[5]) ? 'checked' : ''}}>
                        Hepatitis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_6" {{isset($ptp[6]) ? 'checked' : ''}}>
                        Diare
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_7" {{isset($ptp[7]) ? 'checked' : ''}}>
                        LGV
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_8" {{isset($ptp[8]) ? 'checked' : ''}}>
                        Toksopiasmosis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label class="col-lg-2" style="padding: 0em;">
                        <input type="checkbox" name="ptp_9" {{isset($ptp[9]) ? 'checked' : ''}}>
                        IMS lainnya ...
                      </label>
                      <input type="text" class="form-control" name="ims_lainnya" value="ims_lainnya">
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_10" {{isset($ptp[10]) ? 'checked' : ''}}>
                        Kandidiasis oralesovagial
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_11" {{isset($ptp[11]) ? 'checked' : ''}}>
                        PCP
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_12" {{isset($ptp[12]) ? 'checked' : ''}}>
                        Wasting syndrome
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_13" {{isset($ptp[13]) ? 'checked' : ''}}>
                        Lainnya
                      </label>
                      <input type="text" class="form-control" name="ptp_lainnya" value="ptp_lainnya">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Kesediaan untuk Tes</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="kesediaan_tes_tipk" value="1" {{$kesediaan_tes_tipk == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kesediaan_tes_tipk" value="0" {{$kesediaan_tes_tipk == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading"><small>Tes Antibodi HIV</small>
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label">Tgl Tes HIV</label>
                  <div class="col-lg-8">
                    <input type="text" onkeydown="return false" autocomplete="off" class="form-control sandbox-container" name="tgl_tes_hiv" value="{{$tgl_tes_hiv}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Jenis Tes HIV</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jt" value="0" {{$jt == 0 ? 'checked' : ''}}>
                        Rapid Test
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jt" value="1" {{$jt == 1 ? 'checked' : ''}}>
                        ELISA
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label"><small>Hasil Tes R1</small></label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="r1" value="0" {{$r1 == 0 ? 'checked' : ''}}>
                        Non Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="r1" value="1" {{$r1 == 1 ? 'checked' : ''}}>
                        Reaktif
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Nama Reagen</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="r1_reagen" value="{{$r1_reagen}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label"><small>Hasil Tes R2</small></label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="r2" value="0" {{$r2 == 0 ? 'checked' : ''}}>
                        Non Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="r2" value="1" {{$r2 == 1 ? 'checked' : ''}}>
                        Reaktif
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Nama Reagen</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="r2_reagen" value="{{$r2_reagen}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label"><small>Hasil Tes R3</small></label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="r3" value="0" {{$r3 == 0 ? 'checked' : ''}}>
                        Non Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="r3" value="1" {{$r3 == 1 ? 'checked' : ''}}>
                        Reaktif
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Nama Reagen</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="r3_reagen" value="{{$r3_reagen}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Kesimpulan Hasil Tes HIV</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="kes" value="0" {{$kes == 0 ? 'checked' : ''}}>
                        Non Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kes" value="1" {{$kes == 1 ? 'checked' : ''}}>
                        Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kes" value="2" {{$kes == 2 ? 'checked' : ''}}>
                        Indeterminate
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Nomor Registrasi Nasional PDP<br><small>(Diisi bila hasil tes positif)</small></label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="nrn_pdp" value="{{$nrn_pdp}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Tanggal Masuk PDP</label>
                  <div class="col-lg-8">
                    <input type="text" onkeydown="return false" autocomplete="off" class="form-control sandbox-container" name="tgl_masuk_pdp" value="{{$tgl_masuk_pdp}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Tindak Lanjut (TIPK)<br><small>(boleh diisi lebih dari satu)</small></label>
                  <div class="col-lg-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_tipk_1" {{isset($tl_tipk[1]) ? 'checked' : ''}}>
                        Rujuk Konseling ...
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_tipk_2" {{isset($tl_tipk[2]) ? 'checked' : ''}}>
                        Rujuk ke ...
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_tipk_3" {{isset($tl_tipk[3]) ? 'checked' : ''}}>
                        Rujuk ke PDP dan PPIA
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label">Bagaimana Status HIV Pasangan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="shp" value="0" {{$shp == 0 ? 'checked' : ''}}>
                        HIV (-)
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="shp" value="1" {{$shp == 1 ? 'checked' : ''}}>
                        HIV (+)
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="shp" value="2" {{$shp == 2 ? 'checked' : ''}}>
                        tidak Tahu
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">Konseling Pasca Tes
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label">Tgl Konseling Pasca Tes</label>
                  <div class="col-lg-8">
                    <input type="text" onkeydown="return false" autocomplete="off" class="form-control sandbox-container" name="tgl_konseling_pasca_tes" value="{{$tgl_konseling_pasca_tes}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Terima Hasil</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="tha" value="1" {{$tha == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tha" value="0" {{$tha == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Kaji Gejala TB</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="ktb" value="1" {{$ktb == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ktb" value="0" {{$ktb == 0 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Jumlah Kondom yang Diberikan</label>
                  <div class="col-lg-8">
                    <input type="number" class="form-control" name="jkyd" value="{{$jkyd}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Tindak Lanjut (KTS)<br><small>(boleh diisi lebih dari satu)</small></label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_kts_1" {{isset($tl_kts[1]) ? 'checked': ''}}>
                        Tes Ulang
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_kts_2" {{isset($tl_kts[2]) ? 'checked': ''}}>
                        Rujuk ke PDP
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_kts_3" {{isset($tl_kts[3]) ? 'checked': ''}}>
                        Rujuk ke Layanan PTRM
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_kts_4" {{isset($tl_kts[4]) ? 'checked': ''}}>
                        Rujuk ke Layanan IMS
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_kts_5" {{isset($tl_kts[5]) ? 'checked': ''}}>
                        Rujuk ke PPIA
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_kts_6" {{isset($tl_kts[6]) ? 'checked': ''}}>
                        Rujuk ke Rehab
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-5">
                    <div class="col-lg-12" style="padding: 0em;">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="tl_kts_7" {{isset($tl_kts[7]) ? 'checked' : ''}}>
                          Rujuk ke Layanan LASS
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-12" style="padding: 0em;">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="tl_kts_8" {{isset($tl_kts[8]) ? 'checked' : ''}}>
                          Rujuk ke Layanan TB
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-12" style="padding: 0em;">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="tl_kts_9" {{isset($tl_kts[9]) ? 'checked' : ''}}>
                          Rujuk ke Profesional
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-12" style="padding: 0em;">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="tl_kts_10" {{isset($tl_kts[10]) ? 'checked' : ''}}>
                          Rujuk ke petugas pendukung
                        </label>
                      </div>
                      <label class="col-lg-1 control-label">Yaitu</label>
                      <div class="col-lg-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="rpp_1" {{isset($rpp[1]) ? 'checked' : ''}}>
                            1. Komunitas
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="rpp_2" {{isset($rpp[2]) ? 'checked' : ''}}>
                            2. LSM ...
                          </label>
                          <input type="text" class="form-control" name="rpp_lsm" value="{{$rpp_lsm}}">
                        </div>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="rpp_3" {{isset($rpp[3]) ? 'checked' : ''}}>
                            3. Kader
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12" style="padding: 0em; float: left;">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="tl_kts_11" {{isset($tl_kts[11]) ? 'checked' : ''}}>
                          Konseling ...
                        </label>
                      </div>
                      <label class="col-lg-1 control-label"></label>
                      <div class="col-lg-10">
                        <div class="radio">
                          <label>
                            <input type="radio" name="ksl" value="0" {{$ksl == 0 ? 'checked' : ''}}>
                            1. Pasangan
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="ksl" value="1" {{$ksl == 1 ? 'checked' : ''}}>
                            2. Keluarga
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="ksl" value="2" {{$ksl == 2 ? 'checked' : ''}}>
                            3. Pencegahan positif
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="ksl" value="3" {{$ksl == 3 ? 'checked' : ''}}>
                            4. Kepatuhan minum obat
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="ksl" value="4" {{$ksl == 4 ? 'checked' : ''}}>
                            5. Paliatif
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="ksl" value="5" {{$ksl == 5 ? 'checked' : ''}}>
                            6. Lain-lain
                            <input type="text" class="form-control" name="ksl_lainnya" value="{{$ksl_lainnya}}">
                          </label>
                        </div>
                      </div>
                    </div>                      
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-lg-2 control-label">Nama Konselor<br>/Petugas Kesehatan</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="nama_konselor" value="{{$nama_konselor}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Status Layanan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="sl" value="0" {{$sl == 0 ? 'checked' : ''}}>
                        Rumah Sakit
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sl" value="1" {{$sl == 1 ? 'checked' : ''}}>
                        Puskesmas
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sl" value="2" {{$sl == 2 ? 'checked' : ''}}>
                        Klinik
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Jenis Pelayanan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jpe" value="0" {{$jpe == 0 ? 'checked' : ''}}>
                        Layanan Menetap
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jpe" value="1" {{$jpe == 1 ? 'checked' : ''}}>
                        Layanan Bergerak
                      </label>
                    </div>
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