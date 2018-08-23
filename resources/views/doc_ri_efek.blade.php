<?php 
header('Content-Type: application/pdf');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body style="">

  <h2 align="center" style="font-size:100%">PELAPORAN EFEK SAMPING OBAT KOMITE FARMASI DAN TERAPI</h2><br>

  <h4>PASIEN</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <div class="row">
      <div class="column">
        <table>
          <tbody>
            <tr>
              <td class="konten_s_question">
                Suku
              </td>    
              <td class="konten_s_answer">  
                : ....
              </td>                
            </tr>
            <tr>
              <td class="konten_s_question">
                Berat Badan
              </td>    
              <td class="konten_s_answer">  
                : ....
              </td>                
            </tr>
            <tr>
              <td class="konten_s_question">
                Pekerjaan
              </td>    
              <td class="konten_s_answer">  
                : ....
              </td>                
            </tr>
          </tbody>
        </table>
      </div>
      <div class="column">
        <table>
          <tbody>
            <tr>
              <td class="konten_s_question" style="width:100px">
                Penyakit Utama
              </td>    
              <td class="konten_s_answer">  
                : ....
              </td>                
            </tr>
            <tr>
              <td class="konten_s_question">
                Kesudahan
              </td>    
              <td class="konten_s_answer">  
                : ....
              </td>                
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <p class="list">Penyakit/Kondisi lain yang menyertai:</p>
    <ul>
      <li style="margin-left:-28px">Gangguan Ginjal</li>
      <li style="margin-left:-28px">Gangguan Hati</li>
    </ul>
  </div>

  <h4>REAKSI EFEK SAMPING OBAT (E.S.O)</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <div class="row">
      <div class="column">
        <p>Saat/Tgl mulai terjadi: ...</p>
        <p class="list">Bentuk/manisfestasi E.S.O yang terjadi:</p>
        <p>Isi</p>
      </div>
      <div class="column">
        <p>Kesudahan E.S.O: ...</p>
        <p>Tanggal: ...</p>
        <p class="list">Reaksi E.S.O yang pernah di alami: ...</p>
        <p>Isi</p>
      </div>
    </div>
    <p class="list">Tindak yang telah dilakukan untuk mengatasi reaksi E.S.O:</p>
    <p>Isi</p>
  </div>

  <h4>OBAT</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <table class="tabel">
      <thead>
        <tr>
          <th class="default" rowspan="2" style="width:20%;height:20px;">Nama <br>(Nama Dagang/Pabrik)</th>
          <th class="default" rowspan="2" style="width:10%;height:20px;">Bentuk Sediaan</th>
          <th class="default" rowspan="2" style="width:20%;height:20px;">Bentuk tanda x untuk Obat yang dicurigai</th>
          <th class="default" colspan="4" style="width:30%;height:20px;">Pemberian</th>
          <th class="default" rowspan="2" style="width:10%;height:20px;"> Indikasi penggunaan</th>
        </tr>
        <tr>
          <th class="default">Rute</td>
          <th class="default">Dosis/waktu</td>
          <th class="default">Tgl Mulai</td>
          <th class="default">Tgl Akhir</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="default">Isi </td>
          <td class="default">Isi </td>
          <td class="default">Isi </td>
          <td class="default">Isi </td>
          <td class="default">Isi </td>
          <td class="default">Isi </td>
          <td class="default">Isi </td>
        </tr>
      </tbody>
    </table>
  </div>

  <h4>PELAPOR</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <div class="row">
      <div class="column">
        <p>Nama : - </p>
        <p>Profesi :</p>
        <p>Asal Ruangan Poliklinik :</p>
      </div>
      <div class="column">
        <p style="text-align: center;">Tanda Tangan</p>
        <br>
        <br>
        <p style="text-align: center;">(.............)</p>
      </div>
    </div>
  </div>
</body>

<html>