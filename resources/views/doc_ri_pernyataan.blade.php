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

  <h2 align="center" style="font-size:110%;">SURAT PERNYATAAN</h2>
  
  <table>
    <body>
      <tr>
        <td class="contain" colspan="2">
          Saya yang bertanda tangan di bawah ini:
        </td>
      </tr>
    </body>
  </table>

  <br>

  <table>
    <tbody>
      <tr>
        <td class="konten_s_question">Nama</td>
        <td class="konten_s_answer">:  {{ $nama }} </td>
      </tr>
      <tr>
        <td class="konten_s_question">Umur</td>
        <td class="konten_s_answer">:  {{ $umur }}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Alamat</td>
        <td class="konten_s_answer">:  {{ $alamat }}</td>
      </tr>
    </tbody>
  </table>

  <br>

  <table>
    <tr>
      <td class="contain" colspan="2">
        Dengan ini meyatakan bahwa <b> saya tidak bersedia </b>mengikuti program rehabilitasi NAPZA di Rumah Sakit Jiwa Tampan Provinsi Riau.<br>
        Demikianlah surat pernyataan ini saya buat secara sadar dan tanpa ada paksaan dari pihak manapun.</b>
      </td>
    </tr>
  </table>

  <br>
  <br>
  <br>
  <br>

  <table>
    <tbody>
      <tr>
       <td class="ttd3">
          
        </td>
        <td class="ttd3">
          
        </td>
        <td class="ttd3">
          Pekanbaru, {{ $tanggal }}
        </td>
      </tr>  
      <tr>
       <td class="ttd3">
          Mengetahui,
          <br>
          <br>
          <br>
          <br>
          ( {{ $konselor }} )<br>
          Konselor
        </td>
        <td class="ttd3">
          Mengetahui,
          <br>
          <br>
          <br>
          <br>
          ( {{ $kepala_ruangan }} )<br>
          Kepala Ruangan
        </td>
        <td class="ttd3">
          Mengetahui,
          <br>
          <br>
          <br>
          <br>
          ( {{ $residen }} )<br>
          Residen
        </td>
      </tr>  
    </tbody>
  </table>

</body>

<html>