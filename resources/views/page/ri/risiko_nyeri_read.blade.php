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
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> PENILAIAN RESIKO NYERI</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Penilaian Resiko Nyeri
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
                  <td>Penilaian Resiko Nyeri</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_nyeri_pdf">PDF</a>
                      <a class="btn btn-success" href="#">EDIT</i></a>
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
          <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_risiko_nyeri">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Penilaian Resiko Nyeri
              </header>
              <div class="panel-body">
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-2">
                    <input type="text" id="dp1" class="form-control" name="tanggal"  disabled="" value="{{$tanggal}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Waktu</label>
                  <div class="col-lg-2">
                    <select class="form-control m-bot15" name="waktu">
                      <option value="p" disabled {{$waktu == 'p' ? 'selected' : ''}}>Pagi</option>
                      <option value="s" disabled {{$waktu == 's' ? 'selected' : ''}}>Siang</option>
                      <option value="m" disabled {{$waktu == 'm' ? 'selected' : ''}}>Malam</option>
                    </select>
                  </div> 
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Skala Nyeri</label>
                  <div class="col-lg-2">
                    <select class="form-control m-bot15" name="skala">
                      <option value="1" disabled {{$skala == '1' ? 'selected' : ''}}>1</option>
                      <option value="2" disabled {{$skala == '2' ? 'selected' : ''}}>2</option>
                      <option value="3" disabled {{$skala == '3' ? 'selected' : ''}}>3</option>
                      <option value="4" disabled {{$skala == '4' ? 'selected' : ''}}>4</option>
                      <option value="5" disabled {{$skala == '5' ? 'selected' : ''}}>5</option>
                      <option value="6" disabled {{$skala == '6' ? 'selected' : ''}}>6</option>
                      <option value="7" disabled {{$skala == '7' ? 'selected' : ''}}>7</option>
                      <option value="8" disabled {{$skala == '8' ? 'selected' : ''}}>8</option>
                      <option value="9" disabled {{$skala == '9' ? 'selected' : ''}}>9</option>
                      <option value="10" disabled {{$skala == '10' ? 'selected' : ''}}>10</option>
                    </select>
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