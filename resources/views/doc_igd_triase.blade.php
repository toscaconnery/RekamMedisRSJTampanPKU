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


  <h2 align="center">TRIASE PASIEN</h2><br>
  

  <br>
  <div style="font-size: 85%;">  
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Tanggal Masuk IGD
          </td>    
          <td class="konten_s_answer">  
            : {{$tanggal_masuk}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Jam
          </td>    
          <td class="konten_s_answer">  
            : {{$jam}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Keluhan Utama
          </td>    
          <td class="konten_s_answer">  
            : {{$keluhan_utama}}
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <br>

  <h4><b>PEMERIKSAAN :</b> TANDA VITAL</h4>
  <div style="font-size: 85%;">  
    <p><b>JALAN NAFAS :</b></p>
      <ul>
        <li>Tekanan Darah : {{$tekanan_darah}} mmHg</li>
        <li>Frek Nadi : {{$frek_nadi}} x/mnt</li>
      </ul>
    <p><b>PERNAFASAN :</b></p>
      <ul>
        <li>Frek Nafas : {{$frek_nafas}} x/mnt</li>
        <li>Suhu : {{$suhu}} <sup>o</sup> C</li>
      </ul>
    <p><b>SIRKULASI :</b></p>
      <ul>
        <li>Riwayat Alergi:</li>
        <li>Alargi Makanan : {{$alergi_makanan}}</li>
        <li>Alergi Obat : {{$alergi_obat}}</li>
        <li>Alergi Lainnya : {{$alergi_lainnya}}</li>
      </ul>
    <p><b>KESADARAN :</b> GCS {{$gcs}}</p>

    <p><b>DOA :</b> {{$doa}}</p>
  
  </div>

  <br>
  <br>
  <br>
  <div style="font-size: 85%;">  
    <div class="row">
      <div class="column">
        <br>
      </div>
      <div class="column" style="text-align:center;">
        <p>Nama & Tanda tangan</p>
        <p>Petugas Yang Mengkaji</p>
        <br>
        <br>
        <br>
        <p>( [nama Petugas]] )</p>
      </div>
    </div>
  </div>

</body>

<html>