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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>PEMERIKSAAN PSIKOLOGIS</h3>
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
                  <td>Pemeriksaan Psikologis</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info" href="{{url('')}}/ri_pemeriksaan_psikologis">Isi</a>
                      <a class="btn btn-primary" href="{{url('')}}/ri_pemeriksaan_psikologis_read">Lihat</a>
                      <a class="btn btn-success" href="{{url('')}}/ri_pemeriksaan_psikologis_edit">Edit</i></a>
                      <a class="btn btn-danger" href="#">Hapus</a>
                    </div>
                  </td>
                  <td>
                    <a class="btn btn-default" href="{{url('')}}/ri_psikologis_pdf">Cetak</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>
      <form class="form-horizontal" method="post" action="ri_pemeriksaan_psikologis">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Pemeriksaan Psikologis
              </header>
              <div class="panel-body">
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Psikolog</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="psikolog">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Dikirim oleh</label>
                  <div class="col-sm-6">
                    <div class="radio">
                      <label>
                        <input type="radio" name="dikirim_oleh" value="1">
                        Bagian Preventatis
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dikirim_oleh" value="2">
                        Aust Patient
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dikirim_oleh" value="3">
                        In Patient
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="dikirim_oleh" value="4">
                        After-care
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dokter</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="dokter">
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
                Observasi
              </header>
              <div class="panel-body">
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kontak Mata</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="kontak_mata">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Respon</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="respon">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Cara Bicara</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="cara_bicara">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Volume</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="volume">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Intonasi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="intonasi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ekspresi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="ekspresi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Gesture</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="gesture">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Performance</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="performance">
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
                Anamnesa
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Autoanamnesa</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="autoanamnesa" rows="5" style="resize: vertical;"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alloanamnesa</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="alloanamnesa" rows="5" style="resize: vertical;"></textarea>
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
                Intelegensi
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Intelegensi</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="intelegensi" rows="5" style="resize: vertical;"></textarea>
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
                Kepribadian
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kepribadian</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="kepribadian" rows="5" style="resize: vertical;"></textarea>
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
                Diagnosa
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diagnosa</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="diagnosa" rows="5" style="resize: vertical;"></textarea>
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
                Kesimpulan
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kesimpulan</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="kesimpulan" rows="5" style="resize: vertical;"></textarea>
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
                Terapi/Saran
              </header>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Terapi/Saran</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="terapi_saran" rows="5" style="resize: vertical;"></textarea>
                  </div>
                </div>
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
</body>


<html>