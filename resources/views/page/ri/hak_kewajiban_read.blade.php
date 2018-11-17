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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> HAK DAN KEWAJIBAN</h3>
        </div>
      </div>
      @include('layouts.bio')

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Dokumen Hak dan Kewajiban
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
                  <td>Hak dan Kewajiban</td>
                  <td>20/08/2018</td>
                  <td>[Nama Pengisi]</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{url('')}}/ri_hakkewajiban_pdf">PDF</a>
                      <a class="btn btn-success" href="#">EDIT</a>
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
          <form class="form-horizontal form-validate" method="post" id="register_form" action="ri_hak_kewajiban">
            {{ csrf_field() }}
            <section class="panel">
              <header class="panel-heading">
                Pemberian Informasi
              </header>
              <div class="panel-body">
                <table>
                  <tbody>
                    <tr>
                      <td class="konten_s_question" colspan="2">
                        <b>A. Hak Pasien</b>
                        <br>
                      </td>
                    </tr>

                    <tr>
                      <td class="contain0" colspan="2">
                        <br>
                      </td>
                    </tr>

                    <tr>
                      <td class="contain0" colspan="2">Hak pasien adalah hak-hak pribadi yang dimiliki manusia sebagai pasien:</td>
                    </tr>
                    <tr>
                      <td class="number0">1. </td>
                      <td class="contain0">Pasien berhak memperoleh informasi mengenai tata tertib dan peraturan yang berlaku di Rumah Sakit,</td>
                    </tr>
                    <tr>
                      <td class="number0">2. </td>
                      <td class="contain0">Pasien berhak memperoleh informasi tentang hak dan kewajiban pasien,</td>
                    </tr>
                    <tr>
                      <td class="number0">3. </td>
                      <td class="contain0">Pasien berhak memperoleh layanan yang manusiawi, adil, jujur, dan tanpa diskriminasi,</td>
                    </tr>
                    <tr>
                      <td class="number0">4. </td>
                      <td class="contain0">Pasien berhak memperoleh layanan kesehatan yang bermutu sesuai dengan standar profesi dan standar prosedur operasional,</td>
                    </tr>
                    <tr>
                      <td class="number0">5. </td>
                      <td class="contain0">Pasien berhak memperoleh layanan yang efektif dan efisien sehingga pasien terhindar dari kerugian fisik dan materi,</td>
                    </tr>
                    <tr>
                      <td class="number0">6. </td>
                      <td class="contain0">Pasien berhak mengajukan pengaduan atas kualitas pelayanan yang didapatkan</td>
                    </tr>
                    <tr>
                      <td class="number0">7.</td>
                      <td class="contain0">Pasien berhak memilih dokter dan kelas perawatan sesuai dengan keinginannya dan peraturan yang berlaku di Rumah Sakit</td>
                    </tr>
                    <tr>
                      <td class="number0">8. </td>
                      <td class="contain0">Pasien berhak meminta konsultasi tentang penyakit yang dideritanya kepada dokter lain yang mempunyai Surat Ijin Praktek (SIP) baik di dalam maupun di luar Rumah Sakit,</td>
                    </tr>
                    <tr>
                      <td class="number0">9. </td>
                      <td class="contain0">Pasien berhak mendapat privasi dan kerahasiaan penyakit yang diderita termasuk data-data medisnya</td>
                    </tr>
                    <tr>
                      <td class="number0" style="vertical-align:top">10. </td>
                      <td class="contain0">Pasien berhak mendapatkan informasi yang meliputi diagnosis dan tata cara tindakan medis, tujuan tindakan medis, alternatif tindakan medis, resiko dan komplikasi yang mungkin terjadi dan prognosis terhadap tindakan yang dilakukan serta perkiraan biaya pengobatan,</td>
                    </tr>
                    <tr>
                      <td class="number0">11. </td>
                      <td class="contain0">Pasien berhak memberikan persetujuan atau menolak atas tindakan yang dilakukan oleh tenaga kesehatan terhadap penyakit yang dideritanya,</td>
                    </tr>
                    <tr>
                      <td class="number0">12. </td>
                      <td class="contain0">Pasien berhak didampingi keluarganya dalam keadaan kritis, </td>
                    </tr>
                    <tr>
                      <td class="number0">13. </td>
                      <td class="contain0">Pasien berhak menjalankan ibadah sesuai agama/kepercayaan yang dianutnya selama hal tidak mengganggu pasien lainnya,</td>
                    </tr>
                    <tr>
                      <td class="number0">14. </td>
                      <td class="contain0">Pasien berhak memperoleh keamanan dan keselamatan dirinya selama dalam perawatan di Rumah Sakit,</td>
                    </tr>
                    <tr>
                      <td class="number0">15. </td>
                      <td class="contain0">Pasien berhak mengajukan usul, saran, perbaikan atas perilaku Rumah Sakit terhadap dirinya,</td>
                    </tr>
                    <tr>
                      <td class="number0">16. </td>
                      <td class="contain0">Pasien berhak menolak pelayanan bimbingan rohani yang tidak sesuai dengan agama dan kepercayaan yang dianutnya,</td>
                    </tr>
                    <tr>
                      <td class="number0">17. </td>
                      <td class="contain0">Pasien berhak menggugat dan atau menuntut Rumah Sakit apabila Rumah Sakit diduga memberikan pelayanan yang tidak sesuai dengan standar baik secara perdata maupun pidana,</td>
                    </tr>
                    <tr>
                      <td class="number0">18.</td>
                      <td class="contain0">Pasien berhak mengeluhkan pelayanan Rumah Sakit yang tidak sesuai dengan standar pelayanan melalui media cetak dan elektronik sesuai dengan ketentuan peraturan perundang-undangan.</td>
                    </tr>

                    <tr>
                      <td class="contain0" colspan="2">
                        <br>
                      </td>
                    </tr>

                    <tr>
                      <td class="konten_s_question" colspan="2">
                        <b>B. Kewajiban Pasien</b><br>
                      </td>
                    </tr>

                    <tr>
                      <td class="contain0" colspan="2">
                        <br>
                      </td>
                    </tr>

                    <tr>
                      <td class="number0">1. </td>
                      <td class="contain0">Pasien dan keluarganya berkewajiban untuk mentaati segala aturan dan tata tertib Rumah Sakit,</td>
                    </tr>
                    <tr>
                      <td class="number0">2. </td>
                      <td class="contain0">Pasien berkewajiban untuk mematuhi segala instruksi dokter dan perawat dalam pengobatannya</td>
                    </tr>
                    <tr>
                      <td class="number0">3. </td>
                      <td class="contain0">Pasien berkewajiban untuk memberikan informasi dengan jujur dan selengkapnya tentang penyakit yang diderita kepada dokter yang merawat,</td>
                    </tr>
                    <tr>
                      <td class="number0">4. </td>
                      <td class="contain0">Pasien dan atau penanggungnya berkewajiban untuk melunasi semua biaya atas jasa pelayanan Rumah Sakit/Dokter,</td>
                    </tr>
                    <tr>
                      <td class="number0">5. </td>
                      <td class="contain0">Pasien dan atau penanggung jawabnya berkewajiban memenuhi hal-hal yang telah disepakati/perjanjian yang telah dibuatnya.</td>
                    </tr>

                    <tr>
                      <td class="contain0" colspan="2">
                        <br>
                      </td>
                    </tr>

                    <tr>
                      <td class="contain0" colspan="2">
                        Saya telah membaca dan memahami hak dan kewajiba pasien seperti tertera di atas. Saya akan mematuhi segalanya dengan penuh tanggung jawab.
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>

            <section class="panel">
              <header class="panel-heading">
              </header>
              <div class="panel-body">
                <div class="form-group"></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hormat Saya</label>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Penanda Tangan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_penanda_tangan" disabled="" value="{{$nama_penanda_tangan}}">
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