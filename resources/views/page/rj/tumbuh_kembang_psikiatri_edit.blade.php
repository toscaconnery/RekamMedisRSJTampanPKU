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
          <header class="panel-heading">
            Dokumen Asesmen Awal Pasien Tumbuh Kembang dan Edukasi Terpadu
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
                <td>Asesmen Awal Pasien Tumbuh Kembang dan Edukasi Terpadu</td>
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

    <div class="row">
      <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="rj_asesmen_awal_tumbuh_kembang_psikiatri_edit">
          {{ csrf_field() }}
          <section class="panel">
            <header class="panel-heading">
              Layanan Konsultasi Psikiatri Klink Tumbuh Kembang Anak dan Remaja
            </header>
            <div class="panel-body">
             <div class="form-group">
              <label class="col-sm-2 control-label">Alamat Pasien:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="f1" value="{{$f1}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">ANAMNESIS </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="f2" value="{{$f2}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">PEMERIKSAAN FISIK </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="f3" value="{{$f3}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">PEMERIKSAAN PSIKIATRIK </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="f4" value="{{$f4}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">PEMERIKSAAN PENUNJANG </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="f5" value="{{$f5}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">DIAGNOSIS MEDIS (ICD – 10)</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="f6" value="{{$f6}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">TERAPI PSIKOFARMAKA </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="f7" value="{{$f7}}">
              </div>
            </div>
            <div class="form-group">
              <h4 style="padding-left: 1em;">TERAPI NON PSIKOFARMAKA YANG DIREKOMENDASIKAN PSIKIATER</h4>
              <label class="col-sm-2 control-label">Terapi Prilaku</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="t1" value="{{$t1}}">
              </div>
              <label class="col-sm-1 control-label">Frekuensi</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="r1" value="{{$r1}}">
              </div>
              <label class="col-sm-1 control-label" style="text-align: left; padding-left: 0px;">x/minggu</label>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Sensori Integrasi  </label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="t2" value="{{$t2}}">
              </div>
              <label class="col-sm-1 control-label">Frekuensi</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="r2" value="{{$r2}}">
              </div>
              <label class="col-sm-1 control-label" style="text-align: left; padding-left: 0px;">x/minggu</label>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Terapi Okupasi  </label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="t3" value="{{$t3}}">
              </div>
              <label class="col-sm-1 control-label">Frekuensi</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="r3" value="{{$r3}}">
              </div>
              <label class="col-sm-1 control-label" style="text-align: left; padding-left: 0px;">x/minggu</label>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Sensori Integrasi  </label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="t4" value="{{$t4}}">
              </div>
              <label class="col-sm-1 control-label">Frekuensi</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="r4" value="{{$r4}}">
              </div>
              <label class="col-sm-1 control-label" style="text-align: left; padding-left: 0px;">x/minggu</label>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Terapi Wicara  </label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="t5" value="{{$t5}}">
              </div>
              <label class="col-sm-1 control-label">Frekuensi</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="r5" value="{{$r5}}">
              </div>
              <label class="col-sm-1 control-label" style="text-align: left; padding-left: 0px;">x/minggu</label>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Remedical Teaching  </label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="t6" value="{{$t6}}">
              </div>
              <label class="col-sm-1 control-label">Frekuensi</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="r6" value="{{$r6}}">
              </div>
              <label class="col-sm-1 control-label" style="text-align: left; padding-left: 0px;">x/minggu</label>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Play Therapy  </label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="t7" value="{{$t7}}">
              </div>
              <label class="col-sm-1 control-label">Frekuensi</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="r7" value="{{$r7}}">
              </div>
              <label class="col-sm-1 control-label" style="text-align: left; padding-left: 0px;">x/minggu</label>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Story Telling  </label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="t8" value="{{$t8}}">
              </div>
              <label class="col-sm-1 control-label">Frekuensi</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="r8" value="{{$r8}}">
              </div>
              <label class="col-sm-1 control-label" style="text-align: left; padding-left: 0px;">x/minggu</label>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">tanggal  </label>
              <div class="col-sm-2">
                <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal" value="{{$tanggal}}">
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