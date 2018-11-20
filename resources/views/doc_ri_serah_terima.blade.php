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
          Yang bertanda tangan di bawah ini, saya :
        </td>
      </tr>
    </body>
  </table>

  <br>

  <table>
    <tbody>
      <tr>
        <td class="konten_s_question">Nama</td>
        <td class="konten_s_answer">: {{$nama}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Umur</td>
        <td class="konten_s_answer">: {{$umur}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Jenis Kelamin</td>
        <td class="konten_s_answer">: {{$jenis_kelamin}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Alamat</td>
        <td class="konten_s_answer">: {{$alamat}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Hubungan dengan pasien</td>
        <td class="konten_s_answer">: {{$hubungan_dengan_pasien}}</td>
      </tr>
    </tbody>
  </table>

  <br>
  <br>

  <table>
    <tr>
      <td class="contain" colspan="2">
        Dengan ini menyatakan menjemput pasien : 
      </td>
    </tr>
  </table>

  <br>

  <table>
    <tbody>
      <tr>
        <td class="konten_s_question">Nama</td>
        <td class="konten_s_answer">: {{$nama_pasien}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Umur</td>
        <td class="konten_s_answer">: {{$umur_pasien}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Jenis Kelamin</td>
        <td class="konten_s_answer">: {{$jenis_kelamin_pasien}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">No. RM</td>
        <td class="konten_s_answer">: {{$no_rm}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Alamat</td>
        <td class="konten_s_answer">: {{$alamat_pasien}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Jam dijemput</td>
        <td class="konten_s_answer">: {{$jam_dijemput}}</td>
      </tr>
    </tbody>
  </table>

  <br>
  <br>
  <br>
  <br>

  <table>
    <tbody> 
      <tr>
       <td class="ttd2">
          Petugas / Perawat <br>
          Yang Menyerahkan,
          <br>
          <br>
          <br>
          <br>
          <br>
          [nama yang menyerahkan]
          <hr width="60%" style="text-align:center">
        </td>
        <td class="ttd2">
          Pekanbaru, [Tanggal]<br>
          Yang Menjemput Pasien,
          <br>
          <br>
          <br>
          <br>
          <br>
          {{$nama}}
          <hr width="60%" style="text-align:center">
        </td>
      </tr>  
    </tbody>
  </table>

</body>

<html>