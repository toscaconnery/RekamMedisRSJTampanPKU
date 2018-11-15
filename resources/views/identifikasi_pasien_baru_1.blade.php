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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> IDENTIFIKASI PASIEN BARU</h3>
        </div>
      </div>
      <div class="panel-body bio-graph-info">
        <h4>Silahkan masukkan data pasien baru</h4>
      </div>


      <div class="row">
        <div class="col-lg-12">
         <section class="panel">
          <header class="panel-heading">
            Data Pasien
          </header>
          <div class="panel-body">
            <div class="form-group">
              <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary active">
                  <input type="radio" name="options" id="pasien_baru"> Pasien Baru
                </label>
                <label class="btn btn-primary">
                  <input type="radio" name="options" id="pasien_lama"> Pasien Lama
                </label>
              </div>
            </div>
            <form class="form-horizontal" method="post" action="identifikasi_pasien_baru_2" id="form_pasien_baru">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Nama Pasien</label>
                <div class="col-lg-5">
                  <input type="text" class="form-control" name="nama_pasien">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Tanggal Lahir</label>
                <div class="col-lg-5">
                  <input type="string" autocomplete="off" onkeydown="return false" class="form-control sandbox-container" name="tanggal_lahir">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="inputSuccess">Jenis Kelamin</label>
                <div class="col-lg-1">
                  <input type="radio" name="jenis_kelamin" value="L"> L
                </div>
                <div class="col-lg-1">
                  <input type="radio" name="jenis_kelamin" value="P"> P
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-2"></div>
                <div class="col-lg-1">
                  <button type="submit" class="btn btn-primary">Berikutnya</button>
                </div>
              </div>
            </form>
            
          </div>
        </section>
      </div>
    </div>
    @include('layouts.tailscript')
  </body>
  <html>