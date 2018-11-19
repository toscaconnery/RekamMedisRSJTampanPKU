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

  <h2 align="center" style="font-size:110%;">SURAT PERNYATAAN PULANG PAKSA</h2>
  
  <table>
    <body>
      <tr>
        <td class="contain" colspan="2">
          Yang bertanda tangan di bawah ini :
        </td>
      </tr>
    </body>
  </table>


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
        <td class="konten_s_question">Pekerjaan</td>
        <td class="konten_s_answer">: {{$pekerjaan}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Hubungan Keluarga</td>
        <td class="konten_s_answer">: {{$hubungan_keluarga}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Alamat</td>
        <td class="konten_s_answer">: {{$alamat}}</td>
      </tr>
    </tbody>
  </table>

  <br>

  <table>
    <body>
      <tr>
        <td class="contain" colspan="2">
          dari seorang pasien :
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
        <td class="konten_s_question">Umur</td>
        <td class="konten_s_answer">: {{$umur_pasien}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Alamat</td>
        <td class="konten_s_answer">: {{$alamat_pasien}}</td>
      </tr>
    </tbody>
  </table>

  <br>

  <table>
    <body>
      <tr>
        <td class="contain" colspan="2">
          Dengan ini menyatakan telah mengambil kembali dengan paksa pasien tersebut di atas pada tanggal {{$tanggal_pengambilan}}, meskipun Dokter telah menyatakan bahwa pasien tersebut belum diizinkan pulang.<br>
          Dengan ini menyatakan bahwa kami menanggung segala akibat dari pulang paksa tersebut di atas. Demikian surat pernyataan ini kami buat dengan penuh kesadaran dan rasa tanggung jawab. 
        </td>
      </tr>
    </body>
  </table>

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
          Pekanbaru, {{$tanggal}}
        </td>
      </tr>  
      <tr>
       <td class="ttd3">
          Dokter Ruangan,
          <br>
          <br>
          <br>
          <br>
          {{$yang_menyatakan}}
          <hr width="50%" style="text-align:center">
        </td>
        <td class="ttd3">
          Ka. Ruangan,
          <br>
          <br>
          <br>
          <br>
          {{$saksi_keluarga}}
          <hr width="50%" style="text-align:center">
        </td>
        <td class="ttd3">
          Yang Menyatakan
          <br>
          <br>
          <br>
          <br>
          {{$saksi_pemberi_asuhan}}
          <hr width="50%" style="text-align:center">
        </td>
      </tr>  
    </tbody>
  </table>

</body>

<html>