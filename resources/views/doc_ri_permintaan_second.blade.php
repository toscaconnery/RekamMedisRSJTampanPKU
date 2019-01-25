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


  <h2 align="center" style="font-size:110%;">PERMINTAAN PENDAPAT LAIN<br>(SECOND OPINION)</h2>
  
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
        <td class="konten_s_question" colspan="2">
          <br>
          <br>
        </td>
      </tr>
      <tr>
        <td class="konten_s_question" colspan="2">Dengan ini menyatakan permintaan untuk mendapatkan second opinion atas : ... </td>
      </tr>
      <tr>
        <td class="konten_s_question" colspan="2">(Bila pasien tidak kompeten atau tidak mau menerima informasi) :</td>
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
        <td class="konten_s_answer">: {{ $alamat_hub }}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Agama</td>
        <td class="konten_s_answer">: {{ $agama_hub }}</td>
      </tr>
    </tbody>
  </table>

  <table>
    <tr>
      <td class="contain">
        <br>
        Saya memahami perlunya dan manfaat second opinion tersebut sebagaimana telah dijelaskan kepada saya. Sya telah mendapat kesempatan untuk bertanya dan telah mendapat jawaban yang memuaskan. Saya juga menyadari bahwa oleh karena ilmu kedokteran bukanlah ilmu pasti dan selalu berkembang, maka perbedaan pendapat ahli adalah biasa terjadi dalam dunia kedokteran.<br>
        Saya menyadari beban biaya second opinion menjadi tanggung jawab saya.
      </td>
    </tr>
  </table>

  <br>
  <br>
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
        Pekanbaru, {{$tanggal}}<br>Pasien/Wali
        <br>
        <br>
        <br>
        <br>
        <br>
        ( {{ $nama_pasien_wali }} )
      </td>
    </tr>  
  </table>

  <br>
  <br>
  <br>
  
  <p style="font-size:70%">*) Lingkari yang perlu</p>
  <p style="font-size:70%">**) Bila Pasien tidak kompeten atau tidak mau menerima informasi, maka wali atau seseorang yang diberi hak untuk menyetujui tindakan terhadap pasien tersebut </p> 

</body>

<html>