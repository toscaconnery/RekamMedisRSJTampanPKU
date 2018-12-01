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
    <form class="form-horizontal form-validate" id="register_form">
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Data Umum
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-lg-2 control-label"> Tanggal Pengkajian</label>
                <div class="col-sm-2">
                  <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pengkajian" value="{{$tanggal_pengkajian}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Sumber Informasi</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="sumber_informasi" value="{{$sumber_informasi}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Tanggal Dirawat</label>
                <div class="col-sm-2">
                  <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_dirawat" value="{{$tanggal_dirawat}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Ruangan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="ruangan" value="{{$ruangan}}">
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
                      <input type="checkbox" disabled name="alasan_masuk_1" {{isset($alasan_masuk[1]) ? 'checked' : ''}}>
                      Keinginan sendiri
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="alasan_masuk_2" {{isset($alasan_masuk[2]) ? 'checked' : ''}}>
                      Paksaan Orang Tua
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="alasan_masuk_3" {{isset($alasan_masuk[3]) ? 'checked' : ''}}>
                      Rujukan Praktek Dokter
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="alasan_masuk_4" {{isset($alasan_masuk[4]) ? 'checked' : ''}}>
                      Rujukan Instansi Lain
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="alasan_masuk_5" {{isset($alasan_masuk[5]) ? 'checked' : ''}}>
                      Kiriman Kepolisian
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="alasan_masuk_6" {{isset($alasan_masuk[6]) ? 'checked' : ''}}>
                      Lain-lain
                      <input type="text" disabled class="form-control" name="alasan_masuk_lainnya" placeholder="sebutkan.. " value="{{$alasan_masuk_lainnya}}">
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Keadaan Saat Masuk</label>
                <div class="col-lg-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keadaan_masuk_1" {{isset($keadaan_masuk[1]) ? 'checked' : ''}}>
                      Gejala putus zat/withdrawal
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keadaan_masuk_2" {{isset($keadaan_masuk[2]) ? 'checked' : ''}}>
                      Overdosis
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keadaan_masuk_3" {{isset($keadaan_masuk[3]) ? 'checked' : ''}}>
                      Intoksikasi zat adiktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keadaan_masuk_4" {{isset($keadaan_masuk[4]) ? 'checked' : ''}}>
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
                      <input type="checkbox" disabled name="pemakaian_terakhir_1" {{isset($pemakaian_terakhir[1]) ? 'checked' : ''}}>
                      Jenis Zat
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="pemakaian_terakhir_2" {{isset($pemakaian_terakhir[2]) ? 'checked' : ''}}>
                      Cara Pemakaian
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="pemakaian_terakhir_3" {{isset($pemakaian_terakhir[3]) ? 'checked' : ''}}>
                      Intoksikasi zat adiktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="pemakaian_terakhir_4" {{isset($pemakaian_terakhir[4]) ? 'checked' : ''}}>
                      Lain-lain
                    </label>
                  </div>                          
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Jenis Zat </label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="jenis_zat" value="{{$jenis_zat}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Cara Pemakaian</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="cara_pemakaian" value="{{$cara_pemakaian}}">
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
                      <input type="radio" disabled name="f1" {{$f1 == True ? 'checked' : ''}} value="true">
                      Pernah 
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" disabled name="f1" {{$f1 == False ? 'checked' : ''}} value="false">
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
                      <input type="radio" disabled name="f2" {{$f2 == True ? 'checked' : ''}} value="true">
                      Pernah 
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" disabled name="f2" {{$f2 == False ? 'checked' : ''}} value="false">
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
                      <input type="radio" disabled name="f3" {{$f3 == True ? 'checked' : ''}} value="true">
                      Ya
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" disabled name="f3" {{$f3 == False ? 'checked' : ''}} value="false">
                      Tidak 
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="keterangan_komplikasi" value="{{$keterangan_komplikasi}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Perilaku kriminal dalam rumah sendiri</label>
                <div class="col-lg-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="kriminal_dirumah_1" {{isset($kriminal_dirumah[1]) ? 'checked' : ''}}>
                      Mencuri
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="kriminal_dirumah_2" {{isset($kriminal_dirumah[2]) ? 'checked' : ''}}>
                      Mengambil barang dengan mengancam paksaan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="kriminal_dirumah_3" {{isset($kriminal_dirumah[3]) ? 'checked' : ''}}>
                      Menjual barang sendiri
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="kriminal_dirumah_4" {{isset($kriminal_dirumah[4]) ? 'checked' : ''}}>
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
                      <input type="checkbox" disabled name="kriminal_diluar_1" {{isset($kriminal_diluar[1]) ? 'checked' : ''}}>
                      Mencuri
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="kriminal_diluar_2" {{isset($kriminal_diluar[2]) ? 'checked' : ''}}>
                      Mengambil barang dengan mengancam paksaan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="kriminal_diluar_3" {{isset($kriminal_diluar[3]) ? 'checked' : ''}}>
                      Menjual barang sendiri
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="kriminal_diluar_4" {{isset($kriminal_diluar[4]) ? 'checked' : ''}}>
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
                      <input type="checkbox" disabled name="problema_sekolah_1" {{isset($problema_sekolah[1]) ? 'checked' : ''}}>
                      Tidak naik kelas
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_sekolah_2" {{isset($problema_sekolah[2]) ? 'checked' : ''}}>
                      Berhenti sekolah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_sekolah_3" {{isset($problema_sekolah[3]) ? 'checked' : ''}}>
                      Berhenti sementara/cuti
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_sekolah_4" {{isset($problema_sekolah[4]) ? 'checked' : ''}}>
                      Sulit konsentrasi
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_sekolah_5" {{isset($problema_sekolah[5]) ? 'checked' : ''}}>
                      Dikeluarkan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_sekolah_6" {{isset($problema_sekolah[6]) ? 'checked' : ''}}>
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
                      <input type="checkbox" disabled name="problema_keluarga_1" {{isset($problema_keluarga[1]) ? 'checked' : ''}}>
                      Keluarga bercerai
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_keluarga_2" {{isset($problema_keluarga[2]) ? 'checked' : ''}}>
                      Keluarga mudah curiga
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_keluarga_3" {{isset($problema_keluarga[3]) ? 'checked' : ''}}>
                      Keluarga tak peduli
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_keluarga_4" {{isset($problema_keluarga[4]) ? 'checked' : ''}}>
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
                      <input type="checkbox" disabled name="problema_pekerjaan_1" {{isset($problema_pekerjaan[1]) ? 'checked' : ''}}>
                      Sulit konsentrasi
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_pekerjaan_2" {{isset($problema_pekerjaan[2]) ? 'checked' : ''}}>
                      Tidak bekerja
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_pekerjaan_3" {{isset($problema_pekerjaan[3]) ? 'checked' : ''}}>
                      Dikeluarkan/dipecat
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_pekerjaan_4" {{isset($problema_pekerjaan[4]) ? 'checked' : ''}}>
                      Berhenti bekerja
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_pekerjaan_5" {{isset($problema_pekerjaan[5]) ? 'checked' : ''}}>
                      Belum bekerja
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_pekerjaan_6" {{isset($problema_pekerjaan[6]) ? 'checked' : ''}}>
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
                      <input type="checkbox" disabled name="problema_masyarakat_1" {{isset($problema_masyarakat[1]) ? 'checked' : ''}}>
                      Masyarakat curiga
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_masyarakat_2" {{isset($problema_masyarakat[2]) ? 'checked' : ''}}>
                      Tak ada masalah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_masyarakat_3" {{isset($problema_masyarakat[3]) ? 'checked' : ''}}>
                      Pernah
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_masyarakat_4" {{isset($problema_masyarakat[4]) ? 'checked' : ''}}>
                      Dikucilkan lingkungan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_masyarakat_5" {{isset($problema_masyarakat[5]) ? 'checked' : ''}}>
                      Tidak
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="problema_masyarakat_6" {{isset($problema_masyarakat[6]) ? 'checked' : ''}}>
                      Lain-lain
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Problema masyarakat lainnnya</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="problema_masyarakat_lainnya" value="{{$problema_masyarakat_lainnya}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Dirawat di RS Jiwa Diagnosis Medis</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="dirawat_diagnosis_medis" value="{{$dirawat_diagnosis_medis}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Etiologi Penggunaan Zat Adiktif Pertama Kali</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="etiologi_1" {{isset($etiologi[1]) ? 'checked' : ''}}>
                      Diajak Teman
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="etiologi_2" {{isset($etiologi[2]) ? 'checked' : ''}}>
                      Dipaksa Teman
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="etiologi_3" {{isset($etiologi[3]) ? 'checked' : ''}}>
                      Coba-coba/keinginan sendiri
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="etiologi_4" {{isset($etiologi[4]) ? 'checked' : ''}}>
                      Tidak enak dengan lingkungan sekitar
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="etiologi_5" {{isset($etiologi[5]) ? 'checked' : ''}}>
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
                      <input type="checkbox" disabled name="faktor_kambuh_1" {{isset($faktor_kambuh[1]) ? 'checked' : ''}}>
                      Tidak mampu menahan suggest
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="faktor_kambuh_2" {{isset($faktor_kambuh[2]) ? 'checked' : ''}}>
                      Diajak teman
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="faktor_kambuh_3" {{isset($faktor_kambuh[3]) ? 'checked' : ''}}>
                      Dipaksa teman adiktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="faktor_kambuh_4" {{isset($faktor_kambuh[4]) ? 'checked' : ''}}>
                      Keinginan untuk mencoba lagi
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="faktor_kambuh_5" {{isset($faktor_kambuh[5]) ? 'checked' : ''}}>
                      Dendam setelah masa pemulihan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="faktor_kambuh_6" {{isset($faktor_kambuh[6]) ? 'checked' : ''}}>
                      Konflik dengan orang tua, orang dekat
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="faktor_kambuh_7" {{isset($faktor_kambuh[7]) ? 'checked' : ''}}>
                      Bergabung dengan kelompok pengguna zat
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="faktor_kambuh_8" {{isset($faktor_kambuh[8]) ? 'checked' : ''}}>
                      Tidak memiliki aktifitas berarti
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Masalah Keperawatan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="masalah_keperawatan_1" value="{{$masalah_keperawatan_1}}">
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
                      <input type="checkbox" disabled name="jenis_penanggulangan_1" {{isset($jenis_penanggulangan[1]) ? 'checked' : ''}}>
                      Konseling Dokter/Psikiater
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="jenis_penanggulangan_2" {{isset($jenis_penanggulangan[2]) ? 'checked' : ''}}>
                      Detoksifikasi
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="jenis_penanggulangan_3" {{isset($jenis_penanggulangan[3]) ? 'checked' : ''}}>
                      Lain-lain
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="jenis_penanggulangan_4" {{isset($jenis_penanggulangan[4]) ? 'checked' : ''}}>
                      Rehabilitasi rohani
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="jenis_penanggulangan_5" {{isset($jenis_penanggulangan[5]) ? 'checked' : ''}}>
                      Rehabilitasi medik
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="jenis_penanggulangan_6" {{isset($jenis_penanggulangan[6]) ? 'checked' : ''}}>
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
                      <input type="checkbox" disabled name="alasan_meninggalkan_1" {{isset($alasan_meninggalkan[1]) ? 'checked' : ''}}>
                      Tidak cocok dengan metodenya
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="alasan_meninggalkan_2" {{isset($alasan_meninggalkan[2]) ? 'checked' : ''}}>
                      Anak kabur/tidak betah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="alasan_meninggalkan_3" {{isset($alasan_meninggalkan[3]) ? 'checked' : ''}}>
                      Tidak cocok dengan fasilitasnya
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="alasan_meninggalkan_4" {{isset($alasan_meninggalkan[4]) ? 'checked' : ''}}>
                      Kehabisan biaya
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="alasan_meninggalkan_5" {{isset($alasan_meninggalkan[5]) ? 'checked' : ''}}>
                      Programnya selesai
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="alasan_meninggalkan_6" {{isset($alasan_meninggalkan[6]) ? 'checked' : ''}}>
                      Lain-lain
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Masalah Keperawatan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="masalah_keperawatan_2" value="{{$masalah_keperawatan_2}}">
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
                      <input type="checkbox" disabled name="keluhan_fisik_1" {{isset($keluhan_fisik[1]) ? 'checked' : ''}}>
                      Sakit kepala
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_2" {{isset($keluhan_fisik[2]) ? 'checked' : ''}}>
                      Merasa panas dingin lemah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_3" {{isset($keluhan_fisik[3]) ? 'checked' : ''}}>
                      Nyeri pada sendi otot tulang
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_4" {{isset($keluhan_fisik[4]) ? 'checked' : ''}}>
                      Tremor pada ekstremitas
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_5" {{isset($keluhan_fisik[5]) ? 'checked' : ''}}>
                      Bicara cadel
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_6" {{isset($keluhan_fisik[6]) ? 'checked' : ''}}>
                      Berkeringat banyak
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_7" {{isset($keluhan_fisik[7]) ? 'checked' : ''}}>
                      Mulut kering
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_8" {{isset($keluhan_fisik[8]) ? 'checked' : ''}}>
                      Kesadaran menurun
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_9" {{isset($keluhan_fisik[9]) ? 'checked' : ''}}>
                      Mengantuk/banyak tidur
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_10" {{isset($keluhan_fisik[10]) ? 'checked' : ''}}>
                      Nafsu makan menurun
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_11" {{isset($keluhan_fisik[11]) ? 'checked' : ''}}>
                      Nafsu makan meningkat
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_12" {{isset($keluhan_fisik[12]) ? 'checked' : ''}}>
                      Mual muntah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_13" {{isset($keluhan_fisik[13]) ? 'checked' : ''}}>
                      Diare
                    </label>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_14" {{isset($keluhan_fisik[14]) ? 'checked' : ''}}>
                      Kontipasi
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_15" {{isset($keluhan_fisik[15]) ? 'checked' : ''}}>
                      Mata berair/lakrimasi
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_16" {{isset($keluhan_fisik[16]) ? 'checked' : ''}}>
                      Pupip melebar
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_17" {{isset($keluhan_fisik[17]) ? 'checked' : ''}}>
                      Hidung berair
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_18" {{isset($keluhan_fisik[18]) ? 'checked' : ''}}>
                      Bulu roma berdiri
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_19" {{isset($keluhan_fisik[19]) ? 'checked' : ''}}>
                      Denyut jantung cepat
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_20" {{isset($keluhan_fisik[20]) ? 'checked' : ''}}>
                      Tekanan darah menurun
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_21" {{isset($keluhan_fisik[21]) ? 'checked' : ''}}>
                      Tekanan darah meningkat
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_22" {{isset($keluhan_fisik[22]) ? 'checked' : ''}}>
                      Hipotensi Ortostatik
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_23" {{isset($keluhan_fisik[23]) ? 'checked' : ''}}>
                      Kram perut
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_24" {{isset($keluhan_fisik[24]) ? 'checked' : ''}}>
                      Jalan sempoyongan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_25" {{isset($keluhan_fisik[25]) ? 'checked' : ''}}>
                      Perilaku agresif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_26" {{isset($keluhan_fisik[26]) ? 'checked' : ''}}>
                      Daya ingat terganggu
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_27" {{isset($keluhan_fisik[27]) ? 'checked' : ''}}>
                      Kebingungan
                    </label>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_28" {{isset($keluhan_fisik[28]) ? 'checked' : ''}}>
                      Cepat tersinggung
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_29" {{isset($keluhan_fisik[29]) ? 'checked' : ''}}>
                      Insomnia
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_30" {{isset($keluhan_fisik[30]) ? 'checked' : ''}}>
                      Halusinasi
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_31" {{isset($keluhan_fisik[31]) ? 'checked' : ''}}>
                      Waham
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_32" {{isset($keluhan_fisik[32]) ? 'checked' : ''}}>
                      Paranoia
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_33" {{isset($keluhan_fisik[33]) ? 'checked' : ''}}>
                      Impulsif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_34" {{isset($keluhan_fisik[34]) ? 'checked' : ''}}>
                      Emosi labil
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_35" {{isset($keluhan_fisik[35]) ? 'checked' : ''}}>
                      Banyak bicara
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_36" {{isset($keluhan_fisik[36]) ? 'checked' : ''}}>
                      Panik
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_37" {{isset($keluhan_fisik[37]) ? 'checked' : ''}}>
                      Marah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_38" {{isset($keluhan_fisik[38]) ? 'checked' : ''}}>
                      Cemas
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_39" {{isset($keluhan_fisik[39]) ? 'checked' : ''}}>
                      Apatis
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_40" {{isset($keluhan_fisik[40]) ? 'checked' : ''}}>
                      Euforia
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_41" {{isset($keluhan_fisik[41]) ? 'checked' : ''}}>
                      Semangat kerja meningkat
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="keluhan_fisik_42" {{isset($keluhan_fisik[42]) ? 'checked' : ''}}>
                      Merasa tenang
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Masalah keperawatan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="masalah_keperawatan_3" value="{{$masalah_keperawatan_3}}">
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
                      <input type="radio" disabled name="f4" {{$f4 == true ? 'checked' : ''}} value="true">
                      Ada 
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" disabled name="f4" {{$f4 == false ? 'checked' : ''}} value="false">
                      Tidak 
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="anggota_keluarga" value="{{$anggota_keluarga}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Riwayat perilaku Seksual Klien</label>
                <div class="col-lg-2">
                  <div class="radio">
                    <label>
                      <input type="radio" disabled name="f5" {{$f5 == 1 ? 'checked' : ''}} value="1">
                      Belum menikah 
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" disabled name="f5" {{$f5 == 2 ? 'checked' : ''}} value="2">
                      Menikah 
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" disabled name="f5" {{$f5 == 3 ? 'checked' : ''}} value="3">
                      Cerai hidup
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" disabled name="f5" {{$f5 == 4 ? 'checked' : ''}} value="4">
                      Cerai meninggal
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" disabled name="f5" {{$f5 == 5 ? 'checked' : ''}} value="5">
                      Ditinggalkan pasangan hidup
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" disabled name="f5" {{$f5 == 6 ? 'checked' : ''}} value="6">
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
                      <input type="radio" disabled name="f6" {{$f6 == true ? 'checked' : ''}} value="true">
                      Pernah 
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" disabled name="f6" {{$f6 == false ? 'checked' : ''}} value="false">
                      Tidak pernah
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="keterangan_pranikah" value="{{$keterangan_pranikah}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Riwayat pekerjaan Klien</label>
                <div class="col-lg-2">
                  <div class="radio">
                    <label>
                      <input type="radio" disabled name="f7" {{$f7 == 1 ? 'checked' : ''}} value="1">
                      Bekerja menetap  
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" disabled name="f7" {{$f7 == 2 ? 'checked' : ''}} value="2">
                      Tidak bekerja
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" disabled name="f7" {{$f7 == 3 ? 'checked' : ''}} value="3">
                      Pindah-pindah pekerjaan
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" disabled name="f7" {{$f7 == 4 ? 'checked' : ''}} value="4">
                      Diberhentikan/dipecat
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Masalah Keperawatan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="masalah_keperawatan_4" value="{{$masalah_keperawatan_4}}">
                </div>
              </div>
              <div class="col-lg-2"></div><h4>Konsep diri</h4>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Gambaran Diri</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="gambaran_diri_1" {{isset($gambaran_diri[1]) ? 'checked' : ''}}>
                      Puas dengan bentuk fisik yang ada
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="gambaran_diri_2" {{isset($gambaran_diri[2]) ? 'checked' : ''}}>
                      Tidak puas dengan bentuk fisik yang ada
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="gambaran_diri_3" {{isset($gambaran_diri[3]) ? 'checked' : ''}}>
                      Tidak menerima cacat fisik yang ada
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="gambaran_diri_4" {{isset($gambaran_diri[4]) ? 'checked' : ''}}>
                      Lain-lain
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="gambaran_diri_lainnya" value="{{$gambaran_diri_lainnya}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Identitas</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="identitas_1" {{isset($identitas[1]) ? 'checked' : ''}}>
                      Puas dengan status/posisi sekarang
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="identitas_2" {{isset($identitas[2]) ? 'checked' : ''}}>
                      Tidak puas dengan status/posisi sekarang
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="identitas_3" {{isset($identitas[3]) ? 'checked' : ''}}>
                      Puas sebagai laki-laki/perempuan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="identitas_4" {{isset($identitas[4]) ? 'checked' : ''}}>
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
                      <input type="checkbox" disabled name="ideal_diri_1" {{isset($ideal_diri[1]) ? 'checked' : ''}}>
                      Memiliki cita-cita yang akan dicapai
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="ideal_diri_2" {{isset($ideal_diri[2]) ? 'checked' : ''}}>
                      Tidak memiliki cita-cita yang akan dicapai
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="ideal_diri_3" {{isset($ideal_diri[3]) ? 'checked' : ''}}>
                      Adanya harapan untuk sembuh
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="ideal_diri_4" {{isset($ideal_diri[4]) ? 'checked' : ''}}>
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
                      <input type="checkbox" disabled name="harga_diri_1" {{isset($harga_diri[1]) ? 'checked' : ''}}>
                      Percaya diri
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="harga_diri_2" {{isset($harga_diri[2]) ? 'checked' : ''}}>
                      Tidak percaya diri
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="harga_diri_3" {{isset($harga_diri[3]) ? 'checked' : ''}}>
                      Tidak konsisten/mudah terpengaruh
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Masalah Keperawatan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="masalah_keperawatan_5" value="{{$masalah_keperawatan_5}}">
                </div>
              </div>
              <div class="col-lg-2"></div><h4>Spiritual</h4>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Nilai dan keyakinan</label>
                <div class="col-lg-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="nilai_keyakinan_1" {{isset($nilai_keyakinan[1]) ? 'checked' :''}}>
                      Menggunakan zat bertentangan dengan nilai agama dan budaya
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="nilai_keyakinan_2" {{isset($nilai_keyakinan[2]) ? 'checked' :''}}>
                      Menggunakan zat tidak bertentangan dengan nilai agama dan budaya
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="nilai_keyakinan_3" {{isset($nilai_keyakinan[3]) ? 'checked' :''}}>
                      Lain-lain
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="nilai_keyakinan_lainnya" value="{{$nilai_keyakinan_lainnya}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Kegiatan Ibadah</label>
                <div class="col-lg-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="kegiatan_ibadah_1" {{isset($kegiatan_ibadah[1]) ? 'checked' : ''}}>
                      Melakukan Ibadah secara rutin/teratur
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="kegiatan_ibadah_2" {{isset($kegiatan_ibadah[2]) ? 'checked' : ''}}>
                      Melakukan ibadah jarang-jarang
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="kegiatan_ibadah_3" {{isset($kegiatan_ibadah[3]) ? 'checked' : ''}}>
                      Tidak pernah melakukan kegiatan ibadah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="kegiatan_ibadah_4" {{isset($kegiatan_ibadah[4]) ? 'checked' : ''}}>
                      Tidak memiliki pengetahuan cara melakukan kegiatan sesuai dengan agamanya
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Masalah Keperawatan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="masalah_keperawatan_6" value="{{$masalah_keperawatan_6}}">
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
                      <input type="checkbox" disabled name="adaptif_1" {{isset($adaptif[1]) ? 'checked' : ''}}>
                      Bicara dengan orang dekat
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="adaptif_2" {{isset($adaptif[2]) ? 'checked' : ''}}>
                      Berusaha menyelesaikan masalah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="adaptif_3" {{isset($adaptif[3]) ? 'checked' : ''}}>
                      Teknik relaksasi
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="adaptif_4" {{isset($adaptif[4]) ? 'checked' : ''}}>
                      Aktivitas konstruktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="adaptif_5" {{isset($adaptif[5]) ? 'checked' : ''}}>
                      Lainnya
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="adaptif_lainnya" value="{{$adaptif_lainnya}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Maladaptif</label>
                <div class="col-lg-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="maladaptif_1" {{isset($maladaptif[1]) ? 'checked' : ''}}>
                      Minum  Alkohol
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="maladaptif_2" {{isset($maladaptif[2]) ? 'checked' : ''}}>
                      Menggunakan zat psikoaktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="maladaptif_3" {{isset($maladaptif[3]) ? 'checked' : ''}}>
                      Reaksi lambat/berlebihan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="maladaptif_4" {{isset($maladaptif[4]) ? 'checked' : ''}}>
                      Bekerja berlebihan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="maladaptif_5" {{isset($maladaptif[5]) ? 'checked' : ''}}>
                      Menghindari masalah
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="maladaptif_lainnya" value="{{$maladaptif_lainnya}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Masalah Keperawatan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="masalah_keperawatan_7" value="{{$masalah_keperawatan_7}}">
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
                      <input type="checkbox" disabled name="pengetahuan_kurang_1" {{isset($pengetahuan_kurang[1]) ? 'checked' : ''}}>
                      Penyebab pemakaian zat psikoaktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="pengetahuan_kurang_2" {{isset($pengetahuan_kurang[2]) ? 'checked' : ''}}>
                      Alkohol pemakaian zat psikoaktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="pengetahuan_kurang_3" {{isset($pengetahuan_kurang[3]) ? 'checked' : ''}}>
                      Faktor pencetus pemakaian kembali
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="pengetahuan_kurang_4" {{isset($pengetahuan_kurang[4]) ? 'checked' : ''}}>
                      Cara mengatasi suggest/eraving
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="pengetahuan_kurang_5" {{isset($pengetahuan_kurang[5]) ? 'checked' : ''}}>
                      Lain-lain
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="pengetahuan_kurang_6" {{isset($pengetahuan_kurang[6]) ? 'checked' : ''}}>
                      Sistem pendukung kesembuhan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="pengetahuan_kurang_7" {{isset($pengetahuan_kurang[7]) ? 'checked' : ''}}>
                      Komplikasi akibat pemakaian zat psikoaktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="pengetahuan_kurang_8" {{isset($pengetahuan_kurang[8]) ? 'checked' : ''}}>
                      Obat-obatan/terapi medis yang dijalani
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="pengetahuan_kurang_9" {{isset($pengetahuan_kurang[9]) ? 'checked' : ''}}>
                      Koping adaptif/konstruktif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="pengetahuan_kurang_10" {{isset($pengetahuan_kurang[10]) ? 'checked' : ''}}>
                      Lainnya
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="pengetahuan_kurang_lainnya" value="{{$pengetahuan_kurang_lainnya}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Masalah keperawatan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="masalah_keperawatan_8" value="{{$masalah_keperawatan_8}}">
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
                  <input type="text" disabled class="form-control" name="diagnosis_medis" value="{{$diagnosis_medis}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Terapi Medis</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="terapi_medis" value="{{$terapi_medis}}">
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
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_1" {{isset($checkbox_masalah_keperawatan[1]) ? 'checked' : ''}}>
                      Gangguan rasa nyaman, nyeri aktif
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_2" {{isset($checkbox_masalah_keperawatan[2]) ? 'checked' : ''}}>
                      Gangguan pola tidur
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_3" {{isset($checkbox_masalah_keperawatan[3]) ? 'checked' : ''}}>
                      Risiko cedera: jatuh
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_4" {{isset($checkbox_masalah_keperawatan[4]) ? 'checked' : ''}}>
                      Perubahan nutrisi: kurang dan kebutuhan hidup
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_5" {{isset($checkbox_masalah_keperawatan[5]) ? 'checked' : ''}}>
                      Gangguan cairan dan elektrolit: kurang dari kebutuhan tubuh
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_6" {{isset($checkbox_masalah_keperawatan[6]) ? 'checked' : ''}}>
                      Ketidakberdayaan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_7" {{isset($checkbox_masalah_keperawatan[7]) ? 'checked' : ''}}>
                      Ideal diri tidak realistis
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_8" {{isset($checkbox_masalah_keperawatan[8]) ? 'checked' : ''}}>
                      Gangguan identitas personal
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_9" {{isset($checkbox_masalah_keperawatan[9]) ? 'checked' : ''}}>
                      Harga diri rendah situasional/kronik
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_10" {{isset($checkbox_masalah_keperawatan[10]) ? 'checked' : ''}}>
                      Risiko mencederai diri dan orang lain
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_11" {{isset($checkbox_masalah_keperawatan[11]) ? 'checked' : ''}}>
                      Gangguan persepsi sensori: halusinasi
                    </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_12" {{isset($checkbox_masalah_keperawatan[12]) ? 'checked' : ''}}>
                      Koping keluarga tidak efektif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_13" {{isset($checkbox_masalah_keperawatan[13]) ? 'checked' : ''}}>
                      Koping individu tidak efektif: ketidakmampuan menahan keinginan menggunakan zat kembali
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_14" {{isset($checkbox_masalah_keperawatan[14]) ? 'checked' : ''}}>
                      Kerusakan interaksi sosial
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_15" {{isset($checkbox_masalah_keperawatan[15]) ? 'checked' : ''}}>
                      Penatalaksanaan regimen terapeutik tidak efektif
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_16" {{isset($checkbox_masalah_keperawatan[16]) ? 'checked' : ''}}>
                      Harga diri rendah
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_17" {{isset($checkbox_masalah_keperawatan[17]) ? 'checked' : ''}}>
                      Distress spiritual
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_18" {{isset($checkbox_masalah_keperawatan[18]) ? 'checked' : ''}}>
                      Perubahan pemeliharaan kesehatan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_19" {{isset($checkbox_masalah_keperawatan[19]) ? 'checked' : ''}}>
                      Risiko perilaku kekerasan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_20" {{isset($checkbox_masalah_keperawatan[20]) ? 'checked' : ''}}>
                      Gangguan gambaran diri
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_21" {{isset($checkbox_masalah_keperawatan[21]) ? 'checked' : ''}}>
                      Perubahan penampilan peran
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_22" {{isset($checkbox_masalah_keperawatan[22]) ? 'checked' : ''}}>
                      Keputus asaan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled name="checkbox_masalah_keperawatan_23" {{isset($checkbox_masalah_keperawatan[23]) ? 'checked' : ''}}>
                      Lainnya
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label"> Sebutkan</label>
                <div class="col-sm-10">
                  <input type="text" disabled class="form-control" name="masalah_keperawatan_lainnya" value="{{$masalah_keperawatan_lainnya}}">
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
              <table class="table table-bordered">
                <tbody>
                  @php
                    $idx = 0;
                  @endphp
                  @foreach($text_masalah_keperawatan as $t)
                  @php
                    $idx++;
                  @endphp
                  <tr id="form_masalah_{{$idx}}">
                    <td>
                      <input type="text" disabled class="form-control" name="text_masalah_keperawatan_{{$idx}}" value="{{$t}}">
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <input type="hidden" name="jumlah_form_masalah" id="jumlah_form_masalah" value="{{$idx}}">
            </div>
          </section>
        </div>
      </div>
    </form>
  </div>
</div>
</section>

@include('layouts.tailscript')

</body>
<html>