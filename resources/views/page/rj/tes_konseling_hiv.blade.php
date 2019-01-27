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
                  <td>{{$tanggal_pengisian}}</td>
                  <td>{{$nama_pengisi}}</td>
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
          <form class="form-horizontal form-validate" {{-- id="register_form" --}} method="post" id="rj_tes_konseling_hiv">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">Data Klien
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-lg-2 control-label">Nama</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="nama" value="{{Session::get('nama')}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Alamat</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="alamat" value="{{Session::get('alamat')}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Propinsi</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="propinsi" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Kota/Kabupaten</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="kota_kabupaten" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Nama Ibu Kandung</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="nama_ibu_kandung" value="{{$nama_ibu}}" required>
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
                    <input type="text" class="form-control" readonly="" name="jenis_kelamin" value="{{Session::get('jenis_kelamin')}}">
                    <input type="hidden" name="jenis_kelamin" value="{{Session::get('jenis_kelamin')}}" disabled="disabled" />
                  </div>
                </div>

                <div class="form-group" id="">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Perkawinan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="spk" value="0" required="">
                        Kawin
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="spk" value="1">
                        Belum Kawin 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="spk" value="2">
                        Cerai Hidup
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="spk" value="3">
                        Cerai Mati
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Tgl. Lahir</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" readonly="" name="tgl_lahir" value="{{Session::get('tanggal_lahir')}}">
                    <input type="hidden" name="tgl_lahir" value="{{Session::get('tanggal_lahir')}}">
                  </div>
                </div>

                <div class="form-group" id="">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Kehamilan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="skh" value="0" required="">
                        Trisemester I
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="skh" value="1">
                        Trisemester II
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="skh" value="2">
                        Trisemester III
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="skh" value="3">
                        Tidak Hamil
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="skh" value="4">
                        Tidak Tahu
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Umur Anak Terakhir<br><small>(diisi jika klien perempuan)</small></label>
                  <div class="col-lg-2">
                    <input type="number" class="form-control" name="umur_anak_terakhir">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Jumlah Anak Kandung</label>
                  <div class="col-lg-2">
                    <input type="number" class="form-control" name="jumlah_anak_kandung">
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
                        <input type="radio" name="pen" value="0" required="">
                        Tidak pernah sekolah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pen" value="1">
                        SD/sederajatnya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pen" value="2">
                        SMP/sederajatnya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pen" value="3">
                        SMA/sedereajatnya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pen" value="4">
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
                        <input type="radio" name="pek" value="0" required="">
                        Tidak Bekerja
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pek" value="1">
                        Bekerja
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Jenis Pekerjaan</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="jenis_pekerjaan" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Kelompok Risiko<br><small>(pilih saru yang paling dominan)</small></label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="kr" value="0" required="">
                        PS
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kr" value="1">
                        Pelanggan PS
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kr" value="2">
                        Waria
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kr" value="3">
                        Pasangan Risti
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kr" value="4">
                        Penasun
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kr" value="5">
                        Lainnya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kr" value="6">
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
                        <input type="radio" name="ktr" value="0" required="">
                        Langsung
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ktr" value="1">
                        Tidak Langsung
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Lamanya<br><small>(diisi khusus PS dan Penasun)</small></label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="lama_ps_penasun">
                  </div>
                </div>

                <div class="form-group" id="">
                  <label class="control-label col-lg-2" for="inputSuccess">Status Kunjungan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="sk" value="0" required="">
                        Datang Sendiri
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sk" value="1">
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
                        <input type="radio" name="sr" value="0" required="">
                        Tempat Kerja
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sr" value="1">
                        Kader
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sr" value="2">
                        Klp Dukungan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sr" value="3">
                        LSM
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sr" value="4">
                        Pasangan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sr" value="5">
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
                        <input type="radio" name="pt" value="1" required="">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pt" value="0">
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
                        <input type="radio" name="pp" value="1" required="">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pp" value="0">
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
                        <input type="radio" name="ha" value="0" required="">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ha" value="1">
                        Tidak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ha" value="2">
                        Tidak Tahu
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Tanggal Lahir Pasangan</label>
                  <div class="col-lg-8">
                    <input type="text" onkeydown="return false" autocomplete="off" class="form-control sandbox-container" name="tanggal_lahir_pasangan">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Status Pasangan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="sp" value="0" required="">
                        HIV (+)
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sp" value="1">
                        HIV (-)
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sp" value="2">
                        Tidak Diketahui
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Tanggal Tes Terakhir Pasangan</label>
                  <div class="col-lg-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_tes_terakhir_pasangan">
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
                        <input type="radio" name="wbp" value="1" required="">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="wbp" value="0">
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
                    <input type="text" autocomplete="off" class="form-control sandbox-container" name="tgl_konseling_pra_hiv">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Status Klien</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="skl" value="0" required="">
                        Baru
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="skl" value="1">
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
                        <input type="checkbox" name="alasan_tes_1">
                        Ingin tahu saja
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="alasan_tes_2">
                        Merasa beresiko
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="alasan_tes_3">
                        Mumpung gratis
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="alasan_tes_4">
                        Tes ulang (window period)
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="alasan_tes_5">
                        Untuk bekerja
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="alasan_tes_6">
                        Lainnya ...
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="alasan_tes_7">
                        Ada gejala tertentu
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="alasan_tes_8">
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
                        <input type="radio" name="dmn" value="0" required="">
                        Brosur
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dmn" value="1">
                        Koran
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dmn" value="2">
                        TV
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dmn" value="3">
                        Petugas Kesehatan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dmn" value="4">
                        Teman
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dmn" value="5">
                        Petugas Outreach
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dmn" value="6">
                        Poster
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dmn" value="7">
                        Lay Konselor
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dmn" value="8">
                        Lainnya ...
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Sebutkan</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="dmn_lainnya">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Kajian Tingkat Risiko:<br>Hubungan Seks Vaginal Berisiko</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="kaj" value="1" required="">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kaj" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="waktu_kaj">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Anal Seks Beresiko</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="an" value="1" required="">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="an" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="waktu_an">
                  </div>
                </div>

                <div class="form-group">   
                  <label class="col-lg-2 control-label">Bergantian Peralatan Suntik</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>         
                        <input type="radio" name="per" value="1" required="">         
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>         
                        <input type="radio" name="per" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="waktu_per">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Transfusi Darah</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="trf" value="1" required="">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="trf" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="waktu_trf">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Transmisi Ibu ke Anak</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="trm" value="1" required="">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="trm" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="waktu_trm">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Lainnya(Sebutkan)</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="ktr_lainnya">
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="waktu_ktr_lainnya">
                  </div>
                </div>
                <div class="form-group">

                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Periode Jendela <br><small><i>(window periode)</i></small></label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jd" value="1" required="">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jd" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="waktu_jd">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Kesediaan Untuk Tes</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="ksd" value="1" required="">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ksd" value="0">
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
                        <input type="radio" name="tes_hiv" value="1" required="">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tes_hiv" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-lg-1 control-label">Dimana</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="tt_hiv">
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="wt_hiv">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Hasil</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="ht_hiv" value="0" required="">
                        Non Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ht_hiv" value="1">
                        Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ht_hiv" value="2">
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
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_pemberian_informasi">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Pernah Tes HIV Sebelumnya</label>
                  <div class="col-lg-1">
                    <div class="radio">
                      <label>
                        <input type="radio" name="tes_hiv2" value="1" required="">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tes_hiv2" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                  <label class="col-lg-1 control-label">Dimana</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="tt_hiv2">
                  </div>
                  <label class="col-lg-1 control-label">Kapan</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" name="wt_hiv2">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Hasil</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="ht_hiv2" value="0" required="">
                        Non Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ht_hiv2" value="1">
                        Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ht_hiv2" value="2">
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
                        <input type="checkbox" name="ptp_1">
                        TB
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_2">
                        Dermatitis
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_3">
                        Herpes
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_4">
                        Sifilis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_5">
                        Hepatitis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_6">
                        Diare
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_7">
                        LGV
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_8">
                        Toksopiasmosis
                      </label>
                    </div>
                    <div class="checkbox">
                      <label class="col-lg-2" style="padding: 0em;">
                        <input type="checkbox" name="ptp_9">
                        IMS lainnya ...
                      </label>
                      <input type="text" class="form-control" name="ims_lainnya" placeholder="Sebutkan...">
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_10">
                        Kandidiasis oralesovagial
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_11">
                        PCP
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_12">
                        Wasting syndrome
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="ptp_13">
                        Lainnya
                      </label>
                      <input type="text" class="form-control" name="ptp_lainnya" placeholder="Sebutkan...">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Kesediaan untuk Tes</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="kesediaan_tes_tipk" value="1" required="">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kesediaan_tes_tipk" value="0">
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
                    <input type="text" autocomplete="off" class="form-control sandbox-container" name="tgl_tes_hiv">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Jenis Tes HIV</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jt" value="0" required="">
                        Rapid Test
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jt" value="1">
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
                        <input type="radio" name="r1" value="0" required="">
                        Non Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="r1" value="1">
                        Reaktif
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Nama Reagen</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="r1_reagen">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label"><small>Hasil Tes R2</small></label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="r2" value="0" required="">
                        Non Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="r2" value="1">
                        Reaktif
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Nama Reagen</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="r2_reagen">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label"><small>Hasil Tes R3</small></label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="r3" value="0" required="">
                        Non Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="r3" value="1">
                        Reaktif
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Nama Reagen</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="r3_reagen">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Kesimpulan Hasil Tes HIV</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="kes" value="0" required="">
                        Non Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kes" value="1">
                        Reaktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="kes" value="2">
                        Indeterminate
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Nomor Registrasi Nasional PDP<br><small>(Diisi bila hasil tes positif)</small></label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="nrn_pdp">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Tanggal Masuk PDP</label>
                  <div class="col-lg-8">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tgl_masuk_pdp">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Tindak Lanjut (TIPK)<br><small>(boleh diisi lebih dari satu)</small></label>
                  <div class="col-lg-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_tipk_1">
                        Rujuk Konseling ...
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_tipk_2">
                        Rujuk ke ...
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_tipk_3">
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
                        <input type="radio" name="shp" value="0" required="">
                        HIV (-)
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="shp" value="1">
                        HIV (+)
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="shp" value="2">
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
                    <input type="text" autocomplete="off" class="form-control sandbox-container" name="tgl_konseling_pasca_tes">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Terima Hasil</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="tha" value="1" required="">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="tha" value="0">
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
                        <input type="radio" name="ktb" value="1" required="">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="ktb" value="0">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Jumlah Kondom yang Diberikan</label>
                  <div class="col-lg-8">
                    <input type="number" class="form-control" name="jkyd">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Tindak Lanjut (KTS)<br><small>(boleh diisi lebih dari satu)</small></label>
                  <div class="col-lg-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_kts_1">
                        Tes Ulang
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_kts_2">
                        Rujuk ke PDP
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_kts_3">
                        Rujuk ke Layanan PTRM
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_kts_4">
                        Rujuk ke Layanan IMS
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_kts_5">
                        Rujuk ke PPIA
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="tl_kts_6">
                        Rujuk ke Rehab
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-5">
                    <div class="col-lg-12" style="padding: 0em;">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="tl_kts_7">
                          Rujuk ke Layanan LASS
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-12" style="padding: 0em;">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="tl_kts_8">
                          Rujuk ke Layanan TB
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-12" style="padding: 0em;">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="tl_kts_9">
                          Rujuk ke Profesional
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-12" style="padding: 0em;">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="tl_kts_10">
                          Rujuk ke petugas pendukung
                        </label>
                      </div>
                      <label class="col-lg-1 control-label">Yaitu</label>
                      <div class="col-lg-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="rpp_1">
                            1. Komunitas
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="rpp_2">
                            2. LSM ...
                          </label>
                          <input type="text" class="form-control" name="rpp_lsm">
                        </div>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="rpp_3">
                            3. Kader
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12" style="padding: 0em; float: left;">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="tl_kts_11">
                          Konseling ...
                        </label>
                      </div>
                      <label class="col-lg-1 control-label"></label>
                      <div class="col-lg-10">
                        <div class="radio">
                          <label>
                            <input type="radio" name="ksl" value="0">
                            1. Pasangan
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="ksl" value="1">
                            2. Keluarga
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="ksl" value="2">
                            3. Pencegahan positif
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="ksl" value="3">
                            4. Kepatuhan minum obat
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="ksl" value="4">
                            5. Paliatif
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="ksl" value="5">
                            6. Lain-lain
                            <input type="text" class="form-control" name="ksl_lainnya">
                          </label>
                        </div>
                      </div>
                    </div>                      
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-lg-2 control-label">Nama Konselor<br>/Petugas Kesehatan</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="nama_konselor" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Status Layanan</label>
                  <div class="col-lg-2">
                    <div class="radio">
                      <label>
                        <input type="radio" name="sl" value="0" required="">
                        Rumah Sakit
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sl" value="1">
                        Puskesmas
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="sl" value="2">
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
                        <input type="radio" name="jpe" value="0" required="">
                        Layanan Menetap
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jpe" value="1">
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