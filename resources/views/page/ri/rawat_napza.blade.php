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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL KEPERAWATAN NAPZA</h3>
      </div>
    </div>
    @include('layouts.bio')
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Asesmen Awal Keperawatan NAPZA
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
                <td>Asesmen awal Keperawatan NAPZA</td>
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
    <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_rawat_napza">
      {{ csrf_field() }}
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Data Umum
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-lg-2 control-label"> Tanggal Pengkajian</label>
                <div class="col-sm-10">
                  <input type="text" id="dp1" class="form-control" name="tanggal_pengkajian">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Sumber Informasi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="sumber_informasi">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Tanggal Dirawat</label>
                <div class="col-sm-10">
                  <input type="text" id="dp2" class="form-control" name="tanggal_dirawat">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Ruangan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="ruangan">
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
              Alasan Masuk/Kedatangan
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Alasan Masuk</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="alasan_masuk_1">
                      Keinginan sendiri
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="alasan_masuk_2">
                      Paksaan Orang Tua
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="alasan_masuk_3">
                      Rujukan Praktek Dokter
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="alasan_masuk_4">
                      Rujukan Instansi Lain
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="alasan_masuk_5">
                      Kiriman Kepolisian
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="alasan_masuk_6">
                      Lain-lain
                      <input type="text" class="form-control" name="alasan_masuk_lainnya" placeholder="sebutkan.. ">
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Keadaan Saat Masuk</label>
                <div class="col-lg-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keadaan_masuk_1">
                      Gejala putus zat/withdrawal
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keadaan_masuk_2">
                      Overdosis
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keadaan_masuk_3">
                      Intoksikasi zat adiktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keadaan_masuk_4">
                      Lain-lain
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Pemakaian Terakhir</label>
                <div class="col-lg-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pemakaian_terakhir_1">
                      Jenis Zat
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pemakaian_terakhir_2">
                      Cara Pemakaian
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pemakaian_terakhir_3">
                      Intoksikasi zat adiktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pemakaian_terakhir_4">
                      Lain-lain
                    </label>
                  </div>                          
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Jenis Zat </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="jenis_zat">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Cara Pemakaian</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="cara_pemakaian">
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
              Faktor Predisposisi
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Intoksikasi</label>
                <div class="col-lg-2">
                  <div class="radio">
                    <label>
                      <input type="radio" name="f1" value="true">
                      Pernah 
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="f1" value="false">
                      Tidak 
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Keadaan/Gejala lepas zat</label>
                <div class="col-lg-2">
                  <div class="radio">
                    <label>
                      <input type="radio" name="f2" value="true">
                      Pernah 
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="f2" value="false">
                      Tidak 
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Komplikasi medic/jiwa</label>
                <div class="col-lg-2">
                  <div class="radio">
                    <label>
                      <input type="radio" name="f3" value="true">
                      Ya
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="f3" value="false">
                      Tidak 
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="keterangan_komplikasi">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Perilaku kriminal dalam rumah sendiri</label>
                <div class="col-lg-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="kriminal_dirumah_1">
                      Mencuri
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="kriminal_dirumah_2">
                      Mengambil barang dengan mengancam paksaan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="kriminal_dirumah_3">
                      Menjual barang sendiri
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="kriminal_dirumah_4">
                      Tak ada masalah
                    </label>
                  </div>                          
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Perilaku kriminal di luar rumah</label>
                <div class="col-lg-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="kriminal_diluar_1">
                      Mencuri
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="kriminal_diluar_2">
                      Mengambil barang dengan mengancam paksaan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="kriminal_diluar_3">
                      Menjual barang sendiri
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="kriminal_diluar_4">
                      Tak ada masalah
                    </label>
                  </div>                          
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Problema Sekolah</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_sekolah_1">
                      Tidak naik kelas
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_sekolah_2">
                      Berhenti sekolah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_sekolah_3">
                      Berhenti sementara/cuti
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_sekolah_4">
                      Sulit konsentrasi
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_sekolah_5">
                      Dikeluarkan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_sekolah_6">
                      Tak ada masalah
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Problema dalam keluarga</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_keluarga_1">
                      Keluarga bercerai
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_keluarga_2">
                      Keluarga mudah curiga
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_keluarga_3">
                      Keluarga tak peduli
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_keluarga_4">
                      Tak ada masalah
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Problema dalam pekerjaan</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_pekerjaan_1">
                      Sulit konsentrasi
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_pekerjaan_2">
                      Tidak bekerja
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_pekerjaan_3">
                      Dikeluarkan/dipecat
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_pekerjaan_4">
                      Berhenti bekerja
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_pekerjaan_5">
                      Belum bekerja
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_pekerjaan_6">
                      Tidak ada masalah
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Problema dalam masyarakat</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_masyarakat_1">
                      Masyarakat curiga
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_masyarakat_2">
                      Tak ada masalah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_masyarakat_3">
                      Pernah
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_masyarakat_4">
                      Dikucilkan lingkungan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_masyarakat_5">
                      Tidak
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="problema_masyarakat_6">
                      Lain-lain
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Problema masyarakat lainnnya</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="problema_masyarakat_lainnya">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Dirawat di RS Jiwa Diagnosis Medis</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="dirawat_diagnosis_medis">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Etiologi Penggunaan Zat Adiktif Pertama Kali</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="etiologi_1">
                      Diajak Teman
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="etiologi_2">
                      Dipaksa Teman
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="etiologi_3">
                      Coba-coba/keinginan sendiri
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="etiologi_4">
                      Tidak enak dengan lingkungan sekitar
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="etiologi_5">
                      Lain-lain
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
              Faktor Penyebab Kambuh/Relaps
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Faktor</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="faktor_kambuh_1">
                      Tidak mampu menahan suggest
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="faktor_kambuh_2">
                      Diajak teman
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="faktor_kambuh_3">
                      Dipaksa teman adiktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="faktor_kambuh_4">
                      Keinginan untuk mencoba lagi
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="faktor_kambuh_5">
                      Dendam setelah masa pemulihan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="faktor_kambuh_6">
                      Konflik dengan orang tua, orang dekat
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="faktor_kambuh_7">
                      Bergabung dengan kelompok pengguna zat
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="faktor_kambuh_8">
                      Tidak memiliki aktifitas berarti
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Masalah Keperawatan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="masalah_keperawatan_1">
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
              Riwayat Upaya Penanggulangan
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Jenis Penanggulangan</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="jenis_penanggulangan_1">
                      Konseling Dokter/Psikiater
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="jenis_penanggulangan_2">
                      Detoksifikasi
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="jenis_penanggulangan_3">
                      Lain-lain
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="jenis_penanggulangan_4">
                      Rehabilitasi rohani
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="jenis_penanggulangan_5">
                      Rehabilitasi medik
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="jenis_penanggulangan_6">
                      Tidak pernah
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Alasan meninggalkan metode tersebut</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="alasan_meninggalkan_1">
                      Tidak cocok dengan metodenya
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="alasan_meninggalkan_2">
                      Anak kabur/tidak betah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="alasan_meninggalkan_3">
                      Tidak cocok dengan fasilitasnya
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="alasan_meninggalkan_4">
                      Kehabisan biaya
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="alasan_meninggalkan_5">
                      Programnya selesai
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="alasan_meninggalkan_6">
                      Lain-lain
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Masalah Keperawatan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="masalah_keperawatan_2">
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
              Pemeriksaan Fisik
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Keluhan Fisik</label>
                <div class="col-lg-3">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_1">
                      Sakit kepala
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_2">
                      Merasa panas dingin lemah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_3">
                      Nyeri pada sendi otot tulang
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_4">
                      Tremor pada ekstremitas
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_5">
                      Bicara cadel
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_6">
                      Berkeringat banyak
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_7">
                      Mulut kering
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_8">
                      Kesadaran menurun
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_9">
                      Mengantuk/banyak tidur
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_10">
                      Nafsu makan menurun
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_11">
                      Nafsu makan meningkat
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_12">
                      Mual muntah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_13">
                      Diare
                    </label>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_14">
                      Kontipasi
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_15">
                      Mata berair/lakrimasi
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_16">
                      Pupip melebar
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_17">
                      Hidung berair
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_18">
                      Bulu roma berdiri
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_19">
                      Denyut jantung cepat
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_20">
                      Tekanan darah menurun
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_21">
                      Tekanan darah meningkat
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_22">
                      Hipotensi Ortostatik
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_23">
                      Kram perut
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_24">
                      Jalan sempoyongan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_25">
                      Perilaku agresif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_26">
                      Daya ingat terganggu
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_27">
                      Kebingungan
                    </label>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_28">
                      Cepat tersinggung
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_29">
                      Insomnia
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_30">
                      Halusinasi
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_31">
                      Waham
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_32">
                      Paranoia
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_33">
                      Impulsif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_34">
                      Emosi labil
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_35">
                      Banyak bicara
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_36">
                      Panik
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_37">
                      Marah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_38">
                      Cemas
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_39">
                      Apatis
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_40">
                      Euforia
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_41">
                      Semangat kerja meningkat
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="keluhan_fisik_42">
                      Merasa tenang
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Masalah keperawatan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="masalah_keperawatan_3">
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
              Data Psikososial
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Adakah anggota keluarga yang juga menggunakan zat psikoaktif?</label>
                <div class="col-lg-2">
                  <div class="radio">
                    <label>
                      <input type="radio" name="f4" value="true">
                      Ada 
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="f4" value="false">
                      Tidak 
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="anggota_keluarga">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Riwayat perilaku Seksual Klien</label>
                <div class="col-lg-2">
                  <div class="radio">
                    <label>
                      <input type="radio" name="f5" value="1">
                      Belum menikah 
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="f5" value="2">
                      Menikah 
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="f5" value="3">
                      Cerai hidup
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="f5" value="4">
                      Cerai meninggal
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="f5" value="5">
                      Ditinggalkan pasangan hidup
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="f5" value="6">
                      Hidup bersama
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Perilaku seksual pra nikah klien</label>
                <div class="col-lg-2">
                  <div class="radio">
                    <label>
                      <input type="radio" name="f6" value="true">
                      Pernah 
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="f6" value="false">
                      Tidak pernah
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="keterangan_pranikah">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Riwayat pekerjaan Klien</label>
                <div class="col-lg-2">
                  <div class="radio">
                    <label>
                      <input type="radio" name="f7" value="1">
                      Bekerja menetap  
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="f7" value="2">
                      Tidak bekerja
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="f7" value="3">
                      Pindah-pindah pekerjaan
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="f7" value="4">
                      Diberhentikan/dipecat
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Masalah Keperawatan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="masalah_keperawatan_4">
                </div>
              </div>
              <div class="col-lg-2"></div><h4>Konsep diri</h4>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Gambaran Diri</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="gambaran_diri_1">
                      Puas dengan bentuk fisik yang ada
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="gambaran_diri_2">
                      Tidak puas dengan bentuk fisik yang ada
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="gambaran_diri_3">
                      Tidak menerima cacat fisik yang ada
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="gambaran_diri_4">
                      Lain-lain
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="gambaran_diri_lainnya">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Identitas</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="identitas_1">
                      Puas dengan status/posisi sekarang
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="identitas_2">
                      Tidak puas dengan status/posisi sekarang
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="identitas_3">
                      Puas sebagai laki-laki/perempuan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="identitas_4">
                      Tidak puas sebagai laki-laki/perempuan
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Ideal diri</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="ideal_diri_1">
                      Memiliki cita-cita yang akan dicapai
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="ideal_diri_2">
                      Tidak memiliki cita-cita yang akan dicapai
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="ideal_diri_3">
                      Adanya harapan untuk sembuh
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="ideal_diri_4">
                      Tidak adanya harapan untuk sembuh
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Harga diri</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="harga_diri_1">
                      Percaya diri
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="harga_diri_2">
                      Tidak percaya diri
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="harga_diri_3">
                      Tidak konsisten/mudah terpengaruh
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Masalah Keperawatan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="masalah_keperawatan_5">
                </div>
              </div>
              <div class="col-lg-2"></div><h4>Spiritual</h4>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Nilai dan keyakinan</label>
                <div class="col-lg-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="nilai_keyakinan_1">
                      Menggunakan zat bertentangan dengan nilai agama dan budaya
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="nilai_keyakinan_2">
                      Menggunakan zat tidak bertentangan dengan nilai agama dan budaya
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="nilai_keyakinan_3">
                      Lain-lain
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nilai_keyakinan_lainnya">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Kegiatan Ibadah</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="kegiatan_ibadah_1">
                      Melakukan Ibadah secara rutin/teratur
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="kegiatan_ibadah_2">
                      Melakukan ibadah jarang-jarang
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="kegiatan_ibadah_3">
                      Tidak pernah melakukan kegiatan ibadah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="kegiatan_ibadah_4">
                      Tidak memiliki pengetahuan cara melakukan kegiatan sesuai dengan agamanya
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Masalah Keperawatan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="masalah_keperawatan_6">
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
              Mekanisme Koping
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Adaptif</label>
                <div class="col-lg-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="adaptif_1">
                      Bicara dengan orang dekat
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="adaptif_2">
                      Berusaha menyelesaikan masalah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="adaptif_3">
                      Teknik relaksasi
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="adaptif_4">
                      Aktivitas konstruktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="adaptif_5">
                      Lainnya
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="adaptif_lainnya">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Maladaptif</label>
                <div class="col-lg-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="maladaptif_1">
                      Minum  Alkohol
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="maladaptif_2">
                      Menggunakan zat psikoaktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="maladaptif_3">
                      Reaksi lambat/berlebihan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="maladaptif_4">
                      Bekerja berlebihan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="maladaptif_5">
                      Menghindari masalah
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="maladaptif_lainnya">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Masalah Keperawatan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="masalah_keperawatan_7">
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
              Pengetahuan Kurang
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Pengetahuan kurang mengenai</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pengetahuan_kurang_1">
                      Penyebab pemakaian zat psikoaktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pengetahuan_kurang_2">
                      Alkohol pemakaian zat psikoaktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pengetahuan_kurang_3">
                      Faktor pencetus pemakaian kembali
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pengetahuan_kurang_4">
                      Cara mengatasi suggest/eraving
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pengetahuan_kurang_5">
                      Lain-lain
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pengetahuan_kurang_6">
                      Sistem pendukung kesembuhan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pengetahuan_kurang_7">
                      Komplikasi akibat pemakaian zat psikoaktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pengetahuan_kurang_8">
                      Obat-obatan/terapi medis yang dijalani
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pengetahuan_kurang_9">
                      Koping adaptif/konstruktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pengetahuan_kurang_10">
                      Lainnya
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="pengetahuan_kurang_lainnya">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Masalah keperawatan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="masalah_keperawatan_8">
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
              Aspek Medikasi
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-lg-2 control-label"> Diagnosis Medis</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="diagnosis_medis">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Terapi Medis</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="terapi_medis">
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
              Daftar Masalah Keperawatan
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Masalah Keperawatan</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_1">
                      Gangguan rasa nyaman, nyeri aktif
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_2">
                      Gangguan pola tidur
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_3">
                      Risiko cedera: jatuh
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_4">
                      Perubahan nutrisi: kurang dan kebutuhan hidup
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_5">
                      Gangguan cairan dan elektrolit: kurang dari kebutuhan tubuh
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_6">
                      Ketidakberdayaan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_7">
                      Ideal diri tidak realistis
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_8">
                      Gangguan identitas personal
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_9">
                      Harga diri rendah situasional/kronik
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_10">
                      Risiko mencederai diri dan orang lain
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_11">
                      Gangguan persepsi sensori: halusinasi
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_12">
                      Koping keluarga tidak efektif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_13">
                      Koping individu tidak efektif: ketidakmampuan menahan keinginan menggunakan zat kembali
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_14">
                      Kerusakan interaksi sosial
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_15">
                      Penatalaksanaan regimen terapeutik tidak efektif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_16">
                      Harga diri rendah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_17">
                      Distress spiritual
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_18">
                      Perubahan pemeliharaan kesehatan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_19">
                      Risiko perilaku kekerasan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_20">
                      Gangguan gambaran diri
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_21">
                      Perubahan penampilan peran
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_22">
                      Keputus asaan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox_masalah_keperawatan_23">
                      Lainnya
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="masalah_keperawatan_lainnya">
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
              Daftar Masalah Keperawatan
            </header>
            <div class="panel-body">
              <input type="hidden" name="jumlah_form_masalah" id="jumlah_form_masalah" value="5">
              <table class="table table-bordered">
                <tbody>
                  <tr id="form_masalah_1">
                    <td>
                      <input type="text" class="form-control" name="text_masalah_keperawatan_1">
                    </td>
                  </tr>
                  <tr id="form_masalah_2">
                    <td>
                      <input type="text" class="form-control" name="text_masalah_keperawatan_2">
                    </td>
                  </tr>
                  <tr id="form_masalah_3">
                    <td>
                      <input type="text" class="form-control" name="text_masalah_keperawatan_3">
                    </td>
                  </tr>
                  <tr id="form_masalah_4">
                    <td>
                      <input type="text" class="form-control" name="text_masalah_keperawatan_4">
                    </td>
                  </tr>
                  <tr id="form_masalah_5">
                    <td>
                      <input type="text" class="form-control" name="text_masalah_keperawatan_5">
                    </td>
                  </tr>
                  <tr id="last_row_masalah">
                  <td colspan="9">
                    <div class="btn-group">
                      <button class="btn btn-primary" type="button" id="tambah_form_masalah"><i class="icon_plus_alt2"></i> Tambah</button>
                    </div>
                  </td>
                </tr>
                </tbody>
              </table>
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
{{-- menambah row inputan masalah --}}
<script type="text/javascript">
  $(document).ready(function() {
    $('#tambah_form_masalah').click(function() {
      var a = document.getElementById('jumlah_form_masalah').value;
      a = parseInt(a) + 1;
      $('#last_row_masalah').before('<tr id="form_masalah_'+a+'"><td><input type="text" class="form-control" name="text_masalah_keperawatan_'+a+'"></td></tr>');
      document.getElementById('jumlah_form_masalah').value = a;
    });
  });
</script>

</body>
<html>