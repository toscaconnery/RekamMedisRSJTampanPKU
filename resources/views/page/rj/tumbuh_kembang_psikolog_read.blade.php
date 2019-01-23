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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> ASESMEN AWAL PASIEN TUMBUH KEMBANG DAN EDUKASI TERPADU</h3>
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
                  <td>Dokter</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_dokter">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_dokter_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_dokter_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_tumbuhkembang_pdf">Cetak</a>
                  </td>
                </tr>
                <tr>
                  <td>Psikolog</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_psikolog">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_psikolog_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_psikolog_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_tumbuhkembang_pdf">Cetak</a>
                  </td>
                </tr>
                <tr>
                  <td>Psikiatri</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_psikiatri">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_psikiatri_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_psikiatri_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_tumbuhkembang_pdf">Cetak</a>
                  </td>
                </tr>
                <tr>
                  <td>Klinik</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_klinik">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_klinik_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_klinik_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_tumbuhkembang_pdf">Cetak</a>
                  </td>
                </tr>
                <tr>
                  <td>Fisioterapi</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_fisioterapi">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_fisioterapi_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_fisioterapi_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_tumbuhkembang_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-validate form-horizontal" method="post" id="register_form" action="rj_asesmen_awal_tumbuh_kembang_psikolog_edit">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Data Anak
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="nama_anak" value="{{$nama_anak}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat Lahir</label>
                  <div class="col-sm-5">
                    <input type="text" disabled class="form-control required" name="tempat_lahir_anak" value="{{$tempat_lahir_anak}}">
                  </div>
                  <label class="col-sm-1 control-label">Tanggal Lahir</label>
                  <div class="col-sm-2">
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container required" name="tanggal_lahir_anak" value="{{$tanggal_lahir_anak}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-8">
                    <select disabled class="form-control required" name="jenis_kelamin_anak">
                      <option value=""></option>
                      <option value="Laki-laki" {{$jenis_kelamin_anak == 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                      <option value="Perempuan" {{$jenis_kelamin_anak == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="agama_anak" value="{{$agama_anak}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sekolah</label>
                  <div class="col-sm-5">
                    <input type="text" disabled class="form-control required" name="sekolah_anak" value="{{$sekolah_anak}}">
                  </div>
                  <label class="col-sm-1 control-label">Kelas</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control required" name="kelas_anak" value="{{$kelas_anak}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat Sekolah/Terapi</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="alamat_sekolah_anak" value="{{$alamat_sekolah_anak}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Suku Bangsa</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="suku_bangsa_anak" value="{{$suku_bangsa_anak}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bahasa Sehari-hari</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="bahasa_anak" value="{{$bahasa_anak}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat Lengkap</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="alamat_lengkap_anak" value="{{$alamat_lengkap_anak}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No.Telp</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="no_telp_anak" value="{{$no_telp_anak}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Anak tinggal dengan</label>
                  <div class="col-lg-10" class="required">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="tinggal_dengan" value="1" {{$tinggal_dengan == 1 ? 'checked' : ''}}>
                        Ayah dan ibu
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="tinggal_dengan" value="2" {{$tinggal_dengan == 2 ? 'checked' : ''}}>
                        Ayah saja
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="tinggal_dengan" value="3" {{$tinggal_dengan == 3 ? 'checked' : ''}}>
                        Ibu saja
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="tinggal_dengan" value="4" {{$tinggal_dengan == 4 ? 'checked' : ''}}>
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="tinggal_dengan_lainnya" value="{{$tinggal_dengan_lainnya}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Data Ayah
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="nama_ayah" value="{{$nama_ayah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat Lahir</label>
                  <div class="col-sm-5">
                    <input type="text" disabled class="form-control required" name="tempat_lahir_ayah" value="{{$tempat_lahir_ayah}}">
                  </div>
                  <label class="col-sm-1 control-label">Tanggal Lahir</label>
                  <div class="col-sm-2">
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container required" name="tanggal_lahir_ayah" value="{{$tanggal_lahir_ayah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="agama_ayah" value="{{$agama_ayah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pendidikan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="pendidikan_ayah" value="{{$pendidikan_ayah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="pekerjaan_ayah" value="{{$pekerjaan_ayah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat Pekerjaan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="alamat_pekerjaan_ayah" value="{{$alamat_pekerjaan_ayah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perkawinan ke</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="perkawinan_ke_ayah" value="{{$perkawinan_ke_ayah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lama Perkawinan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="lama_perkawinan_ayah" value="{{$lama_perkawinan_ayah}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Status</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="status_ayah" value="1" {{$status_ayah == 1 ? 'checked' : ''}}>
                        Kawin
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="status_ayah" value="2" {{$status_ayah == 2 ? 'checked' : ''}}>
                        Cerai
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="status_ayah" value="3" {{$status_ayah == 3 ? 'checked' : ''}}>
                        Berpisah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="status_ayah" value="4" {{$status_ayah == 4 ? 'checked' : ''}}>
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="status_ayah_lainnya" value="{{$status_ayah_lainnya}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Data Ibu
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="nama_ibu" value="{{$nama_ibu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat Lahir</label>
                  <div class="col-sm-5">
                    <input type="text" disabled class="form-control required" name="tempat_lahir_ibu" value="{{$tempat_lahir_ibu}}">
                  </div>
                  <label class="col-sm-1 control-label">Tanggal Lahir</label>
                  <div class="col-sm-2">
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container required" name="tanggal_lahir_ibu" value="{{$tanggal_lahir_ibu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="agama_ibu" value="{{$agama_ibu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pendidikan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="pendidikan_ibu" value="{{$pendidikan_ibu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="pekerjaan_ibu" value="{{$pekerjaan_ibu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat Pekerjaan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="alamat_pekerjaan_ibu" value="{{$alamat_pekerjaan_ibu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perkawinan ke</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="perkawinan_ke_ibu" value="{{$perkawinan_ke_ibu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lama Perkawinan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="lama_perkawinan_ibu" value="{{$lama_perkawinan_ibu}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Status</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="status_ibu" value="1" {{$status_ibu == 1 ? 'checked' : ''}}>
                        Kawin
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="status_ibu" value="2" {{$status_ibu == 2 ? 'checked' : ''}}>
                        Cerai
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="status_ibu" value="3" {{$status_ibu == 3 ? 'checked' : ''}}>
                        Berpisah
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="status_ibu" value="4" {{$status_ibu == 4 ? 'checked' : ''}}>
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="status_ibu_lainnya" value="{{$status_ibu_lainnya}}">
                  </div>
                </div>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Data Saudara Kandung
              </header>
              <div class="panel-body">
                <input type="hidden" name="jumlah_form_saudara" id="jumlah_form_saudara" value="0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 24%; text-align: center;">Umur</th>
                      <th style="width: 24%; text-align: center;">Jenis Kelamin</th>
                      <th style="width: 24%; text-align: center;">Pendidikan</th>
                      <th style="width: 24%; text-align: center;">Pekerjaan</th>
                      <th style="width: 4%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($saudara as $s)
                    <tr>
                      <td><input type="text" disabled class="form-control required" value="{{$s['umur']}}" name="umur_{{$s['id_data']}}"></td>
                      <td>
                        <select disabled name="jenis_kelamin_{{$s['id_data']}}" class="form-control required">
                          <option value=""></option>
                          <option {{$s['jenis_kelamin'] == 'Laki-laki' ? 'selected' : ''}} value="Laki-laki">Laki-laki</option>
                          <option {{$s['jenis_kelamin'] == 'Perempuan' ? 'selected' : ''}} value="Perempuan">Perempuan</option>
                        </select>
                      </td>
                      <td><input type="text" disabled class="form-control required" value="{{$s['pendidikan']}}" name="pendidikan_{{$s['id_data']}}"></td>
                      <td><input type="text" disabled class="form-control required" value="{{$s['pekerjaan']}}" name="pekerjaan_{{$s['id_data']}}"></td>
                      <td>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Data Saudara Tiri
              </header>
              <div class="panel-body">
                <input type="hidden" name="jumlah_form_saudara_tiri" id="jumlah_form_saudara_tiri" value="0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 24%; text-align: center;">Umur</th>
                      <th style="width: 24%; text-align: center;">Jenis Kelamin</th>
                      <th style="width: 24%; text-align: center;">Pendidikan</th>
                      <th style="width: 24%; text-align: center;">Pekerjaan</th>
                      <th style="width: 4%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($saudara_tiri as $st)
                    <tr>
                      <td><input type="text" disabled class="form-control required" value="{{$st['umur_tiri']}}" name="umur_tiri_{{$st['id_data']}}"></td>
                      <td>
                        <select disabled name="jenis_kelamin_tiri_{{$st['id_data']}}" class="form-control required">
                          <option value=""></option>
                          <option {{$st['jenis_kelamin_tiri'] == 'Laki-laki' ? 'selected' : ''}} value="Laki-laki">Laki-laki</option>
                          <option {{$st['jenis_kelamin_tiri'] == 'Perempuan' ? 'selected' : ''}} value="Perempuan">Perempuan</option>
                        </select>
                      </td>
                      <td><input type="text" disabled class="form-control required" value="{{$st['pendidikan_tiri']}}" name="pendidikan_tiri_{{$st['id_data']}}"></td>
                      <td><input type="text" disabled class="form-control required" value="{{$st['pekerjaan_tiri']}}" name="pekerjaan_tiri_{{$st['id_data']}}"></td>
                      <td>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
                Data Orang-orang lain yang serumah
              </header>
              <div class="panel-body">
                <input type="hidden" name="jumlah_form_serumah" id="jumlah_form_serumah" value="0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 24%; text-align: center;">Umur</th>
                      <th style="width: 24%; text-align: center;">Jenis Kelamin</th>
                      <th style="width: 24%; text-align: center;">Pendidikan</th>
                      <th style="width: 24%; text-align: center;">Pekerjaan</th>
                      <th style="width: 4%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($serumah as $r)
                    <tr>
                      <td><input type="text" disabled class="form-control required" value="{{$r['umur']}}" name="umur_serumah_{{$r['id_data']}}"></td>
                      <td>
                        <select disabled name="jenis_kelamin_serumah_{{$r['id_data']}}" class="form-control required">
                          <option value=""></option>
                          <option {{$r['jenis_kelamin'] == 'Laki-laki' ? 'selected' : ''}} value="Laki-laki">Laki-laki</option>
                          <option {{$r['jenis_kelamin'] == 'Perempuan' ? 'selected' : ''}} value="Perempuan">Perempuan</option>
                        </select>
                      </td>
                      <td><input type="text" disabled class="form-control required" value="{{$r['pendidikan']}}" name="pendidikan_serumah_{{$r['id_data']}}"></td>
                      <td><input type="text" disabled class="form-control required" value="{{$r['pekerjaan']}}" name="pekerjaan_serumah_{{$r['id_data']}}"></td>
                      <td>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </section>

            {{-- riwayat kehamilan --}}
            <section class="panel">
              <header class="panel-heading">
                Riwayat Kehamilan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bagaimana keadaan kandungan ibu pada awal kehamilan?</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="keadaan_awal_kandungan" value="{{$keadaan_awal_kandungan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Selama mengandung ibu pernah menderita penyakit?</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="penyakit_selama_mengandung" value="{{$penyakit_selama_mengandung}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perasaan-perasaan ibu selama mengandung (khusus)?</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="perasaan_selama_mengandung" value="{{$perasaan_selama_mengandung}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Apakah ibu suka minum obat-obatan selama mengandung?</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="suka_obat_obatan" value="{{$suka_obat_obatan}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah obat-obatan tersebut diminum berdasarkan anjuran dokter?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="berdasarkan_anjuran" value="1" {{$berdasarkan_anjuran == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="berdasarkan_anjuran" value="2" {{$berdasarkan_anjuran == 2 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah ibu pernah jatuh, mengalami kecelakaan selama masa kehamilan?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="pernah_jatuh_kecelakaan" value="1" {{$pernah_jatuh_kecelakaan == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="pernah_jatuh_kecelakaan" value="2" {{$pernah_jatuh_kecelakaan == 2 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pada usia kandungan berapa bulan</label>
                  <div class="col-sm-8">
                    <input type="number" disabled class="form-control required" name="usia_jatuh_kecelakaan" value="{{$usia_jatuh_kecelakaan}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Selama mengandung, apakah ibu suka merokok/minum-minuman yang mengandung alkohol?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="suka_merokok" {{$suka_merokok == 1 ? 'checked' : ''}} value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="suka_merokok" {{$suka_merokok == 2 ? 'checked' : ''}} value="2">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah ibu pernah mengalami keguguran? </label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="pernah_keguguran" {{$pernah_keguguran == 1 ? 'checked' : ''}} value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="pernah_keguguran" {{$pernah_keguguran == 2 ? 'checked' : ''}} value="2">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Berapa kali</label>
                  <div class="col-sm-8">
                    <input type="number" disabled class="form-control required" name="jumlah_keguguran" value="{{$jumlah_keguguran}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Usia ibu saat mengandung kasus (Tahun)</label>
                  <div class="col-sm-8">
                    <input type="number" disabled class="form-control required" name="usia_ketika_kasus" value="{{$usia_ketika_kasus}}"> 
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Pada saat mengandung kasus, ibu</label>
                  <div class="col-lg-8">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="bekerja_ketika_kasus" {{$bekerja_ketika_kasus == 1 ? 'checked' : ''}} value="1">
                        Bekerja
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="bekerja_ketika_kasus" {{$bekerja_ketika_kasus == 2 ? 'checked' : ''}} value="2">
                        Tidak Bekerja
                      </label>
                    </div>
                  </div>
                </div>

              </div>
            </section>

            {{-- riwayat persalinan natal --}}
            <section class="panel">
              <header class="panel-heading">
                Riwayat Persalinan Natal
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Proses kelahiran </label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="proses_kelahiran" {{$proses_kelahiran == 1 ? 'checked' : ''}} value="1">
                        Biasa
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="proses_kelahiran" {{$proses_kelahiran == 2 ? 'checked' : ''}} value="2">
                        Lama
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="proses_kelahiran" {{$proses_kelahiran == 3 ? 'checked' : ''}} value="3">
                        Sukar
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah dibantu dengan alat?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="dibantu_alat" value="1" {{$dibantu_alat == 1 ? 'checked' : ''}}>
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="dibantu_alat" value="2" {{$dibantu_alat == 2 ? 'checked' : ''}}>
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alat berupa</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="alat_bantu" value="{{$alat_bantu}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah mengalami keguguran?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="mengalami_keguguran" {{$mengalami_keguguran == 1 ? 'checked' : ''}} value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="mengalami_keguguran" {{$mengalami_keguguran == 2 ? 'checked' : ''}} value="2">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kalau ya berupa apa</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="keterangan_keguguran" value="{{$keterangan_keguguran}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Anak lahir </label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="kondisi_lahir" {{$kondisi_lahir == 1 ? 'checked' : ''}} value="1">
                        Prematur
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="kondisi_lahir" {{$kondisi_lahir == 2 ? 'checked' : ''}} value="2">
                        Cukup bulan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="kondisi_lahir" {{$kondisi_lahir == 3 ? 'checked' : ''}} value="3">
                        Lewat bulan
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Anak lahir ditolong oleh </label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="dibantu_oleh" {{$dibantu_oleh == 1 ? 'checked' : ''}} value="1">
                        Dokter
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="dibantu_oleh" {{$dibantu_oleh == 2 ? 'checked' : ''}} value="2">
                        Bidan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="dibantu_oleh" {{$dibantu_oleh == 3 ? 'checked' : ''}} value="3">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="dibantu_oleh_lainnya" value="{{$dibantu_oleh_lainnya}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Berat Bayi</label>
                  <div class="col-sm-2">
                    <input type="text" disabled class="form-control required" name="berat_bayi" value="{{$berat_bayi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Panjang bayi</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="panjang_bayi" value="{{$panjang_bayi}}">
                  </div>
                </div>
              </div>
            </section>

            {{-- riwayat persalinan pasca natal --}}
            <section class="panel">
              <header class="panel-heading">
                Riwayat Persalinan Pasca Natal
              </header>
              <div class="panel-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Berapa lama anak diberi asi ?</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="lama_asi" value="{{$lama_asi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bagaimana pola makan anak ?</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="pola_makan" value="{{$pola_makan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bagaimana pola tidur anak ?</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="pola_tidur" value="{{$pola_tidur}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bagaimana toilt training anak ?</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="training" value="{{$training}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bagaimana kemampuan motorik anak ?</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="motorik" value="{{$motorik}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Anak berjalan pada usia ?</label>
                  <div class="col-sm-8">
                    <input type="number" disabled class="form-control required" name="usia_berjalan" value="{{$usia_berjalan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Anak berbicara pada usia ?</label>
                  <div class="col-sm-8">
                    <input type="number" disabled class="form-control required" name="usia_berbicara" value="{{$usia_berbicara}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Apakah anak mempunyai hambatan dalam berbicara ?</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="hambatan_berbicara" value="{{$hambatan_berbicara}}">
                  </div>
                </div>
                <label class="col-sm-2 control-label">Penyakit yang pernah diderita anak:</label>
                <input type="hidden" name="jumlah_form_penyakit_anak" id="jumlah_form_penyakit_anak" value="0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 24%; text-align: center;">Penyakit</th>
                      <th style="width: 24%; text-align: center;">Tahun</th>
                      <th style="width: 24%; text-align: center;">Lamanya</th>
                      <th style="width: 24%; text-align: center;">Keterangan</th>
                      <th style="width: 4%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($penyakit_anak as $p)
                    <tr>
                      <td><input type="text" disabled class="form-control" value="{{$p['penyakit']}}" name="penyakit_{{$p['id_data']}}"></td>
                      <td><input type="number" disabled class="form-control" value="{{$p['tahun']}}" name="tahun_{{$p['id_data']}}"></td>
                      <td><input type="text" disabled class="form-control" value="{{$p['lamanya']}}" name="lamanya_{{$p['id_data']}}"></td>
                      <td><input type="text" disabled class="form-control" value="{{$p['keterangan']}}" name="keterangan_{{$p['id_data']}}"></td>
                      <td>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Obat-obatan yang masih diminum </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="obat_masih_diminum" value="{{$obat_masih_diminum}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dalam sehari-hari anak lebih banyak berada dalam perawatan/pengasuhan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="diasuh" value="{{$diasuh}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Selama berapa lama</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="lama_pengasuhan" value="{{$lama_pengasuhan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Masalah khusus dalam masa perawatan/pengasuhan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="masalah_khusus" value="{{$masalah_khusus}}">
                  </div>
                </div>
              </div>
            </section>

            {{-- riwayat akademis --}}
            <section class="panel">
              <header class="panel-heading">
                Riwayat Akademis
              </header>
              <div class="panel-body">
                <input type="hidden" name="jumlah_form_riwayat_sekolah" id="jumlah_form_riwayat_sekolah" value="0">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 32%; text-align: center;">Jenis sekolah</th>
                      <th style="width: 12%; text-align: center;">Umur</th>
                      <th style="width: 52%; text-align: center;">Tinggal kelas dan sebabnya</th>
                      <th style="width: 4%; text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($sekolah as $c)
                    <tr>
                      <td><input type="text" disabled class="form-control required" value="{{$c['jenis_sekolah']}}" name="jenis_riwayat_sekolah_{{$c['id_data']}}"></td>
                      <td><input type="number" disabled class="form-control required" value="{{$c['umur']}}" name="umur_riwayat_sekolah_{{$c['id_data']}}"></td>
                      <td><input type="text" disabled class="form-control required" value="{{$c['keterangan_tinggal']}}" name="keterangan_riwayat_sekolah_{{$c['id_data']}}"></td>
                      <td>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sikap</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="sikap" value="{{$sikap}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterampilan motorik awal </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="keterampilan_motorik_awal" value="{{$keterampilan_motorik_awal}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hasil belajar anak </label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="hasil_belajar_anak" value="{{$hasil_belajar_anak}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pelajaran yang disenangi</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="pelajaran_disenangi" value="{{$pelajaran_disenangi}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Anak mengalami kesukaran dalam mata pelajaran</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="pelajaran_sulit" value="{{$pelajaran_sulit}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keluhan anak dalam mata pelajaran yang dianggapnya sulit</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="keluhan_di_pelajaran_sulit" value="{{$keluhan_di_pelajaran_sulit}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah anak mempunyai tempat belajar sendiri ?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="tempat_belajar_sendiri" {{$tempat_belajar_sendiri == 1 ? 'checked' : ''}} value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="tempat_belajar_sendiri" {{$tempat_belajar_sendiri == 2 ? 'checked' : ''}} value="2">
                        Tidak
                      </label>
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Kapan biasanya anak belajar ?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="waktu_biasa_belajar" {{$waktu_biasa_belajar == 1 ? 'checked' : ''}} value="1">
                        Siang hari 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="waktu_biasa_belajar" {{$waktu_biasa_belajar == 2 ? 'checked' : ''}} value="2">
                        Sepulang sekolah 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="waktu_biasa_belajar" {{$waktu_biasa_belajar == 3 ? 'checked' : ''}} value="3">
                        Sore hari 
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="waktu_biasa_belajar" {{$waktu_biasa_belajar == 4 ? 'checked' : ''}} value="4">
                        Malam hari  
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="waktu_biasa_belajar" {{$waktu_biasa_belajar == 5 ? 'checked' : ''}} value="5">
                        Tidak tentu 
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah anak dibantu dalam belajar ?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="dibantu_belajar" {{$dibantu_belajar == 1 ? 'checked' : ''}} value="1">
                        Selalu
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="dibantu_belajar" {{$dibantu_belajar == 2 ? 'checked' : ''}} value="2">
                        Sering
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="dibantu_belajar" {{$dibantu_belajar == 3 ? 'checked' : ''}} value="3">
                        Kadang-kadang
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="dibantu_belajar" {{$dibantu_belajar == 4 ? 'checked' : ''}} value="4">
                        Tidak pernah
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Siapa yang membantu anak dalam belajar ?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="dibantu_belajar_oleh" {{$dibantu_belajar_oleh == 1 ? 'checked' : ''}} value="1">
                        Orang tua
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="dibantu_belajar_oleh" {{$dibantu_belajar_oleh == 2 ? 'checked' : ''}} value="2">
                        Kakak
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="dibantu_belajar_oleh" {{$dibantu_belajar_oleh == 3 ? 'checked' : ''}} value="3">
                        Adik
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="dibantu_belajar_oleh" {{$dibantu_belajar_oleh == 4 ? 'checked' : ''}} value="4">
                        Lainnya
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sebutkan</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="dibantu_belajar_oleh_lainnya" value="{{$dibantu_belajar_oleh_lainnya}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sikap anak dalam mengikuti kegiatan tersebut di atas</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control required" name="sikap_di_kegiatan" value="{{$sikap_di_kegiatan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Apakah anak mengikuti kegiatan tambahan dalam bentuk les privat ?</label>
                  <div class="col-lg-10">
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="les" {{$les == 1 ? 'checked' : ''}} value="1">
                        Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" disabled name="les" {{$les == 2 ? 'checked' : ''}} value="2">
                        Tidak
                      </label>
                    </div>

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jika mengikuti dalam pelajaran apa saja ?</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="pelajaran_les" value="{{$pelajaran_les}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Siapa yang memberi pelajaran tambahan tersebut ?</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="pengajar" value="{{$pengajar}}">
                  </div>
                </div>
              </div>
            </section>

            {{-- riwayat sosialisasi --}}
            <section class="panel">
              <header class="panel-heading">
                Riwayat Sosialisasi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat sosialisasi di Sekolah</label>
                  <div class="col-sm-8">
                    <textarea readonly rows="5" name="sosialisasi_di_sekolah" class="col-sm-8 form-control" style="resize: vertical;">{{$sosialisasi_di_sekolah}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Riwayat sosialisasi di dalam keluarga</label>
                  <div class="col-sm-8">
                    <textarea readonly rows="5" name="sosialisasi_di_keluarga" class="col-sm-8 form-control" style="resize: vertical;">{{$sosialisasi_di_keluarga}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" value="{{$tanggal}}" disabled>
                    <input type="hidden" class="form-control" value="{{$tanggal}}" name="tanggal">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Psikolog</label>
                  <div class="col-sm-8">
                    <input type="text" disabled class="form-control" name="psikolog" value="{{$psikolog}}" disabled="">
                    <input type="hidden" class="form-control" name="psikolog" value="{{$psikolog}}">
                  </div>
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