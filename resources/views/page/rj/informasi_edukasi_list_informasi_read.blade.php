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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Kebutuhan Informasi dan Edukasi Pasien/Keluarga Rawat Jalan</h3>
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
                  <td>Kebutuhan Informasi dan edukasi </td>
                  <td>{{$tanggal_pengisian}}</td>
                  <td>{{$nama_pengisi}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/rj_informasi_edukasi">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/rj_informasi_edukasi_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/rj_informasi_edukasi_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/rj_infoedu_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <form class="form-horizontal" method="post" action="rj_informasi_edukasi_list_informasi_edit">
            {{ csrf_field() }}
            <input type="hidden" name="jumlah_form_new" id="jumlah_form_new" value="0">
            <section class="panel">
              <header class="panel-heading">
                Obat yang Diminum Saat Ini
              </header>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th rowspan="2" style="width: 12%; text-align: center;">Tgl</th>
                      <th rowspan="2" style="width: 12%; text-align: center;">Poliklinik</th>
                      <th rowspan="2" style="width: 20%; text-align: center;">Informasi/edukasi tentang</th>
                      <th colspan="2" style="text-align: center;">Edukator</th>
                      <th colspan="2" style="text-align: center;">Sasaran <br>(Pasien/Keluarga/<br>Lain-lain)</th>
                      <th rowspan="2" style="width: 10%; text-align: center;">Evaluasi</th>
                      <th rowspan="2" style="width: 4%; text-align: center;">Action</th>
                    </tr>
                    <tr>
                      <th style="width: 14%">Nama</th>
                      <th style="width: 4%">TTD</th>
                      <th style="width: 14%">Nama</th>
                      <th style="width: 4%">TTD</th>
                    </tr>
                  </thead>
                  <tbody>
                    <input type="hidden" name="previous_data" value="{{$previous_data}}">
                    @foreach($pasien as $p)
                    <tr>
                      <td><input type="text" disabled value="{{$p['tanggal']}}" class="form-control sandbox-container" autocomplete="off" onkeydown="return false" name="tanggal_{{$p['id_data']}}" required></td>
                      <td><input type="text" disabled value="{{$p['poliklinik']}}" class="form-control" name="poliklinik_{{$p['id_data']}}" required></td>
                      <td>
                        <textarea disabled style="resize: vertical; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" rows="5" class="form-control" name="informasi_{{$p['id_data']}}">{{$p['informasi']}}</textarea>
                      </td>
                      <td><input disabled type="text" value="{{$p['nama_edukator']}}" class="form-control" name="nama_edukator_{{$p['id_data']}}" required></td>
                      <td><input disabled type="checkbox" {{$p['ttd_edukator'] == True ? 'checked' : ''}} class="form-control" name="ttd_edukator_{{$p['id_data']}}"></td>
                      <td><input disabled type="text" value="{{$p['nama_sasaran']}}" class="form-control" name="nama_sasaran_{{$p['id_data']}}" required></td>
                      <td><input disabled type="checkbox" {{$p['ttd_sasaran'] == True ? 'checked' : ''}} class="form-control" name="ttd_sasaran_{{$p['id_data']}}"></td>
                      <td>
                        <div class="radio">
                          <label>
                            <input disabled type="radio" name="evaluasi_{{$p['id_data']}}" {{$p['evaluasi'] == 1 ? 'checked' : ''}} value="1" required><span style="font-size: 3mm">Sudah mengerti</span><br>
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input disabled type="radio" name="evaluasi_{{$p['id_data']}}" {{$p['evaluasi'] == 2 ? 'checked' : ''}} value="2"><span style="font-size: 3mm">Re-edukasi</span><br>
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input disabled type="radio" name="evaluasi_{{$p['id_data']}}" {{$p['evaluasi'] == 3 ? 'checked' : ''}} value="3"><span style="font-size: 3mm">Re-demonstrasi</span>
                          </label>
                        </div>
                      </td>
                      <td>
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
            </section>
          </form>
        </div>
      </div>

    </section>
  </section>

  @include('layouts.tailscript')
  
  
</body>
<html>