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


  <h2 align="center" style="font-size:110%;">PERMINTAAN PELAYANAN ROHANI</h2>
  
  <table>
    <tbody>
      <tr>
        <td class="konten_s_question" colspan="2">Yang bertanda tangan di bawah ini :</td>
      </tr>
      <tr>
        <td class="konten_s_question">Nama</td>
        <td class="konten_s_answer">: {{ $nama }}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Umur</td>
        <td class="konten_s_answer">: {{ $umur }}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Jenis Kelamin</td>
        <td class="konten_s_answer">: {{ $jk }}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Alamat</td>
        <td class="konten_s_answer">: {{ $alamat }}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Agama</td>
        <td class="konten_s_answer">: {{ $agama }}</td>
      </tr>
       <tr>
        <td class="konten_s_question">No.Telp</td>
        <td class="konten_s_answer">: {{ $no_telp}}</td>
      </tr>
      <tr>
        <td class="konten_s_question" colspan="2">
          <br>
          <br>
        </td>
      </tr>
      <tr>
        <td class="konten_s_question">Hubungan dengan pasien</td>
        <td class="konten_s_answer">: {{ $hub }}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Nama</td>
        <td class="konten_s_answer">: {{ $nama_hub }}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Umur</td>
        <td class="konten_s_answer">: {{ $umur_hub }}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Jenis Kelamin</td>
        <td class="konten_s_answer">: {{ $jk_hub }}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Alamat</td>
        <td class="konten_s_answer">: {{ $alamat }}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Agama</td>
        <td class="konten_s_answer">: {{ $agama }}</td>
      </tr>
      <tr>
        <td class="konten_s_question">No.Telp</td>
        <td class="konten_s_answer">: {{ $no_telp_hub }}</td>
      </tr>
    </tbody>
  </table>

  <table>
    <tr>
      <td class="konten_s_question" colspan="2">
        <br>
        Dengan ini meminta diberikan pelayanan kerohanian {{ $permintaan_rohani }}
      </td>
    </tr>
    <tr>
      <td class="konten_s_question" colspan="2">
        terhadap {{ $hd }}  
      </td>
    </tr>
  </table>

  <br>
  <br>

  <table>
    <tr>
      <td class="ttd2">
        <br>
        Saksi
        <br>
        <br>
        <br>
        <br>
        <br>
        ( {{ $nama_saksi }} )
      </td>
      <td class="ttd2">
        Pekanbaru, 25 September 2018<br>Pemohon
        <br>
        <br>
        <br>
        <br>
        <br>
        ( {{ $nama_pemohon }} )
      </td>
    </tr>  
  </table>

</body>

<html>