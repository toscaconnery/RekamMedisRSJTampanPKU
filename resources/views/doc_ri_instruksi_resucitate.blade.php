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

  <h2 align="center" style="font-size:110%;">INTRUKSI JANGAN DILAKUKAN RESUSITASI<br>(DO NOT RESUCITATE)</h2>
  
  <table>
    <body>
      <tr>
        <td class="contain" colspan="2">
          Formulir ini adalah perintah dokter penanggung jawab pelayanan kepada seluruh staf klinis rumah sakit, agar tidak dilakukan resusitasi pada pasien ini bila terjadi henti jantung (bila tak ada denyut nadi) dan henti nafas (tak ada pernafasan spontan).<br>
          Formulir ini juga memberikan perintah kepada staf medis untuk tetap melakukan intervensi atau pengobatan, atau tata laksana lainnya sebelum terjadinya jenti jantung atau henti nafas.
        </td>
      </tr>
    </body>
  </table>


  <table>
    <tbody>
      <tr>
        <td class="konten_s_question">Nama</td>
        <td class="konten_s_answer">: {{$nama_pasien}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Tanggal Lahir</td>
        <td class="konten_s_answer">: {{$tanggal_lahir}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Alamat</td>
        <td class="konten_s_answer">: {{$alamat}}</td>
      </tr>
      <tr>
        <td class="konten_s_question" colspan="2">
          <br>
          <br>
        </td>
      </tr>
      
    </tbody>
  </table>

  <table>
    <tr>
      <td class="konten_s_question" colspan="2">
        Perintah/Pernyataan dokter penanggung jawab pelayanan
      </td>
    </tr>
    <tr>
      <td class="contain" colspan="2">
        Saya dokter yang bertanda tangan dibawah ini menginstruksikan kepada seluruh staf medis dan staf klinis lainnya untuk melakukan hal-hal tertulis di bawah ini :
      </td>
    </tr>
    <tr>
      <td class="number">1.</td>
      <td class="contain">
        Usaha komprehensif untuk mencegah henti jantung atau henti nafas tanpa melakukan intubasi. <b>DO NOT RESUCITATE TIDAK DILAKUKAN RESUSITASI JANTUNG PARU (RJP)</b>
      </td>
    </tr>
    <tr>
      <td class="number">2.</td>
      <td class="contain">
        Usaha suportif sebelum terjadi henti nafas atau henti jantung yang meliputi pembukaan jalan nafass non invasisve, mengontrol pendarahan, memposisikan pasien dengan nyaman, pemberian obat-obatan anti nyeri. <b>TIDAK MELAKUKAN RJP (RESUSITASI JANTUNG PARU) </b> bila henti nafas atau henti jantung terjadi.
      </td>
    </tr>
    <tr>
      <td class="contain" colspan="2">
        Saya dokter yang bertanda tangan di bawah ini menyatakan bahwa keputusan DNR di atas diambil setelah pasien diberikan penjelasan dan informed consent diperoleh dari salah satu :
      </td>
    </tr>
    <tr>
      <td class="number">1.</td>
      <td class="contain">
        Pasien
      </td>
    </tr>
    <tr>
      <td class="number">2.</td>
      <td class="contain">
        Tenaga kesehatan yang ditunjuk pasien 
      </td>
    </tr>
    <tr>
      <td class="number">3.</td>
      <td class="contain">
        Wali yang sah atas pasien (termasuk yang ditunjuk oleh pengadilan)
      </td>
    </tr>
    <tr>
      <td class="number">4.</td>
      <td class="contain">
        Anggota keluarga pasien
      </td>
    </tr>
    <tr>
      <td class="contain" colspan="2">
        Jika yang di atas tidak dimungkinkan maka dokter yang bertanda tangan dibawah ini memberikan perintah DNR berdasarkan pada:
      </td>
    </tr>
    <tr>
      <td class="number">1.</td>
      <td class="contain">
        Instruksi pasien sebelumnya atau
      </td>
    </tr>
    <tr>
      <td class="number">2.</td>
      <td class="contain">
        Keputusan dua orang dokter yang meyatakan bahwa Resusitasi Jantung Paru (RJP) akan mendatangkan hasil yang tidak efektif 
      </td>
    </tr>
  </table>

  <br>
  <br>
  <br>
  <br>

  <table>
    <tr>
     <td class="ttd3">
        
      </td>
      <td class="ttd3">
        
      </td>
      <td class="ttd3">
        Dokter
        <br>
        <br>
        <br>
        <br>
        ( {{$dokter}} )
      </td>
    </tr>  
  </table>

</body>

<html>