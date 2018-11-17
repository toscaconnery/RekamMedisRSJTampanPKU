<?php 
header('Content-Type: application/pdf');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <h2 align="center">PENUNDAAN PELAYANAN</h2>

  <br>
  <p style="font-size:85%;">Saya yang bertandatangan di bawah ini yang menerima informasi (Pasien sendiri/keluarga atau penanggung jawab) :</p>
  <table>
    <tbody>
      <tr>
        <td class="konten_s_question">
          Nama
        </td>    
        <td class="konten_s_answer">  
          :  {{ $nama }} 
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          umur
        </td>    
        <td class="konten_s_answer">  
          :  {{ $umur }} 
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Hubungan Dengan Pasien
        </td>    
        <td class="konten_s_answer">  
          :  {{ $hubungan }} 
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Poli/Ruangan
        </td>    
        <td class="konten_s_answer">  
          :  {{ $poli_ruangan }} 
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Nama Dokter Pengirim
        </td>    
        <td class="konten_s_answer">  
          :  {{ $dokter_pengirim }} 
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Pelayanan yang akan dilakukan
        </td>    
        <td class="konten_s_answer">  
          :  {{ $pelayanan_akan_dilakukan }} 
        </td>                
      </tr>
    </tbody>
  </table>
  <br>

  <p style="font-size:85%;">Dengan ini menyatakan bahwa saya telah menerima informasi terhadap penundaan pelayanan dan pengobatan dikarenakan:</p>
  <ul style="font-size:85%;">
    <li>Dokter berhalangan datang</li>
    <li>Kerusakan Alat</li>
  </ul> 

  <br>
  <p style="font-size:85%;">Maka dengan ini saya <b>setuju</b> untuk dilakukan Penundaan Pelayanan dengan alternatif yang diberikan:</p>
  <ul>
    <li style="font-size:85%;">Dijadwalkan ulang</li>
  </ul> 

  <table>
    <tbody>
      <tr>
       <td class="ttd3">
          
        </td>
        <td class="ttd3">
          
        </td>
        <td class="ttd3">
          Pekanbaru, [DD-MM-YYYY] Jam: [Jam]
        </td>
      </tr>  
      <tr>
       <td class="ttd3">
          Menyetujui Mengetahui DPJP
          Pasien/Keluarga Pasien
          <br>
          <br>
          <br>
          <hr width="50%" style="text-align:center">
          ( [nama] )<br>
          Nama Jelas & Tanda Tangan
        </td>
        <td class="ttd3">
          DPJP
          <br>
          <br>
          <br>
          <br>
          <hr width="50%" style="text-align:center">
          ( [nama] ) <br>
          Nama Jelas & Tanda Tangan
        </td>
        <td class="ttd3">
          Pemberi Informasi
          <br>
          <br>
          <br>
          <br>
          <hr width="50%" style="text-align:center">
          ( [nama] ) <br>
          Nama Jelas & Tanda Tangan
        </td>
      </tr>  
    </tbody>
  </table>


</body>

<html>