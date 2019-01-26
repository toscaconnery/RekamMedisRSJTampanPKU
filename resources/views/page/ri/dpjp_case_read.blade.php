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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> DPJP DAN CASE MANAGER</h3>
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
                <td>DPJP dan Case Manager</td>
                <td>20/08/2018</td>
                <td>[Nama Pengisi]</td>
                <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_dpjp_case">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_dpjp_case_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_dpjp_case_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_dpjpcase_pdf">Cetak</a>
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
              Data DPJP dan Case Manager
            </header>
            <div class="panel-body">
              <div class="form-group"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Diagnosa</label>
                <div class="col-sm-7">
                  <input type="text" disabled class="form-control" name="diagnosa" value="{{$diagnosa}}">
                </div>
                <label class="col-sm-1 control-label" style="width: 4em;">Ruang</label>
                <div class="col-sm-2">
                  <input type="text" disabled class="form-control" name="ruang" value="{{$ruang}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">DPJP</label>
                <div class="col-sm-7">
                  <input type="text" disabled class="form-control" name="nama_dpjp" value="{{$nama_dpjp}}">
                </div>
              </div>
              @php
                $jumlah_anggota_tim = 0;
              @endphp
              @foreach($list_team as $l)
                @php
                  $jumlah_anggota_tim += 1;
                @endphp
                <div class="form-group" id="form_anggota_tim_{{$jumlah_anggota_tim}}">
                  @if($jumlah_anggota_tim == 1)
                    <label class="col-sm-2 control-label">Tim DPJP (Dokter Ruangan)</label>
                  @else
                    <div class="col-sm-2"></div>
                  @endif
                  <div>
                    <div class="col-sm-4">
                      <input type="text" disabled class="form-control" id="anggota_tim_{{$jumlah_anggota_tim}}" name="anggota_tim_{{$jumlah_anggota_tim}}" value="{{$l}}">
                    </div>
                  </div>
                </div>
              @endforeach
              <input type="hidden" name="jumlah_form_anggota_tim" id="jumlah_form_anggota_tim" value="{{$jumlah_anggota_tim}}">
          </section>

          <section class="panel">
            <header class="panel-heading">
              Rawat Bersama
            </header>
            <div class="panel-body">
              <div class="form-group"></div>
              @php
                $jumlah_form_dpjp = 0;
              @endphp
              @foreach($rawat_bersama as $r)
                @php
                  $jumlah_form_dpjp += 1;
                @endphp
                <div class="form-group" id="form_dpjp_{{$jumlah_form_dpjp}}">
                  @if($jumlah_form_dpjp == 1)
                    <label class="col-sm-2 control-label">DPJP UTAMA</label>
                  @else
                    <label class="col-sm-2 control-label">DPJP</label>
                  @endif
                  <div class="col-sm-7">
                    <input type="text" disabled class="form-control" name="dpjp_{{$jumlah_form_dpjp}}" value="{{$r['dpjp']}}">
                  </div>
                  <label class="col-sm-1 control-label" style="padding-left: 0mm; width: 3em;">Tanggal</label>
                  <div class="col-sm-1" style="width: 14em;">
                    <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_dpjp_{{$jumlah_form_dpjp}}" value="{{$r['tanggal']}}">
                  </div>
                </div>
              @endforeach
              <input type="hidden" name="jumlah_form_dpjp" id="jumlah_form_dpjp" value="{{$jumlah_form_dpjp}}">
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Pengalihan DPJP
            </header>
            <div class="panel-body">
              <div class="form-group"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Pengalihan DPJP ke</label>
                <div class="col-sm-2">
                  <input type="text" disabled class="form-control" name="pengalihan_dpjp_ke" value="{{$pengalihan_dpjp_ke}}">
                </div>
                <label class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-2">
                  <input type="text" disabled autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_pengalihan" value="{{$tanggal_pengalihan}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Alasan</label>
                <div class="col-sm-8">
                  <textarea class="form-control" style="resize: none;" rows="5" name="alasan_pengalihan" readonly>{{$alasan_pengalihan}}</textarea>
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">
              Case Manager
            </header>
            <div class="panel-body">
              <div class="form-group"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Case Manager 1</label>
                <div class="col-sm-4">
                  <input type="text" disabled class="form-control" name="cm_1" value="{{$cm_1}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Case Manager 2</label>
                <div class="col-sm-4">
                  <input type="text" disabled class="form-control" name="cm_2" value="{{$cm_2}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Case Manager 3</label>
                <div class="col-sm-4">
                  <input type="text" disabled class="form-control" name="cm_3" value="{{$cm_3}}">
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