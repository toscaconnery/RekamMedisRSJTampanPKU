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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Izin VCT Untuk Tes HIV</h3>
      </div>
    </div>
    @include('layouts.bio')

    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Izin VCT Klien Untuk Tes HIV
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
                <td>Izin VCT Klien Untuk Tes HIV</td>
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

        <form class="form-horizontal form-validate" method="post" id="rj_izin_vct_hiv">
          {{ csrf_field() }}
          <section class="panel">
            <header class="panel-heading">Penjelasan Dokumen
            </header>
            <div class="panel-body">
              <table>
                <tbody>
                  <tr>
                    <td class="contain" colspan="2">Sebelum menandatangani izin ini, harap mengetahui bahwa:</td>
                  </tr>
                  <tr>
                    <td class="number"></td>
                    <td class="contain">Anda mempunyai hak untuk berpartisipasi dalam pemeriksaan dengan dasar kerahasiaan</td>
                  </tr>
                  <tr>
                    <td class="number"></td>
                    <td class="contain">Anda mempunyai hak untuk menarik izin dan tes kapanpun sebelum pemeriksaan tersebut dilangsungkan</td>
                  </tr>
                  <tr>
                    <td class="contain" colspan="2"><br></td>
                  </tr>
                  <tr>
                    <td class="contain" colspan="2">Saya telah menerima informasi dan konseling menyangkut hal-hal berikut ini:</td>
                  </tr>
                  <tr>
                    <td class="number">a. </td>
                    <td class="contain">Keberadaan dan kegunaan dari tes HIV</td>
                  </tr>
                  <tr>
                    <td class="number">b. </td>
                    <td class="contain">Tujuan dan kegunaan dari tes HIV</td>
                  </tr>
                  <tr>
                    <td class="number">c </td>
                    <td class="contain">Apa yang dapat dan tidak dapat diberikan dari tes HIV</td>
                  </tr>
                  <tr>
                    <td class="number">d </td>
                    <td class="contain">Keuntungan serta resiko dari tes HIV dan dari mengetahui hasil tes saya</td>
                  </tr>
                  <tr>
                    <td class="number">e </td>
                    <td class="contain">Pemahaman dari positif, negatif, false positif dan hasil tes intermediate serta dampak dari masa pendek</td>
                  </tr>
                  <tr>
                    <td class="number">f </td>
                    <td class="contain">Pengukuran untuk pencegahan dari pemaparan dan penularan akan HIV</td>
                  </tr>

                  <tr>
                    <td class="contain" colspan="2"><br></td>
                  </tr>

                  <tr>
                    <td class="contain" colspan="2">Saya dengan sukarela menyetujui untuk menjalani tes pemmeriksaan HIV dengan ketentuan hasil tersebut akan tetap rahasia dan terbuka hanya kepada saya seorang.</td>
                  </tr>

                  <tr>
                    <td class="contain" colspan="2"><br></td>
                  </tr>

                  <tr>
                    <td class="contain" colspan="2">Saya menyetujui untuk menerima pelayanan konseling setelah menjalani tes pemeriksaan untuk mendiskusikan hasil tes HIV saya dan cara-cara untuk mengurangi resiko untuk terkena HIV atau menyebarluaskan HIV kepada orang lain untuk waktu kedepan.</td>
                  </tr>

                  <tr>
                    <td class="contain" colspan="2"><br></td>
                  </tr>

                  <tr>
                    <td class="contain" colspan="2">Saya mengerti bahwa pelayanan kesehatan saya pada klinik ini tidak akan mempengaruhi keputusan saya secara negatif.</td>
                  </tr>

                  <tr>
                    <td class="contain" colspan="2"><br></td>
                  </tr>

                  <tr>
                    <td class="contain" colspan="2">Saya tidak menyangka mempunyai dan memberikan kesempatan untuk bertanya dan pertanyaan saya ini telah diberikan jawaban yang memuaskan saya.</td>
                  </tr>

                  <tr>
                    <td class="contain" colspan="2"><br></td>
                  </tr>

                  <tr>
                    <td class="contain" colspan="2">Saya dengan ini mengizinkan tes/pemeriksaan HIV untuk dilaksanakan</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading">Informasi Dokumen
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Klien</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" disabled="" value="[Nama Klien]">
                  <input type="hidden" name="nama_klien" value="Nama Klien">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Konselor</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="konselor">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-3">
                  <input type="text" id="dp1" class="form-control" name="tanggal">
                </div>
              </div>
            </div>
          </section>

          <section class="panel">
            <header class="panel-heading"><small>Diisi Untuk Anak Dibawah Umur</small>
            </header>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Pemberi Izin</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="pemberi_izin">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Hubungan Dengan Klien</label>
                <div class="col-lg-2">
                  <select class="form-control input-sm m-bot15" name="hubungan">
                    <option value="1">-</option>
                    <option value="2">Pengasuh</option>
                    <option value="3">Teman</option>
                    <option value="4">Saudara Terdekat</option>
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