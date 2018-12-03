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

  <h2 align="center" style="font-size:110%;">PERSETUJUAN TINDAKAN KEDOKTERAN</h2>
  

  <table>
    <tbody>
      <tr>
        <td class="konten_s_question" colspan="2" style="font-size:120%"><b>PEMBERIAN INFORMASI</b></td>
      </tr>
      <tr>
        <td class="konten_s_question">Dokter Pelaksana Tindakan</td>
        <td class="konten_s_answer">: {{$dokter_pelaksana_tindakan}} </td>
      </tr>
      <tr>
        <td class="konten_s_question">Pemberi Informasi</td>
        <td class="konten_s_answer">: {{$pemberi_informasi}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Penerima Informasi/<i>Pemberi Persetujuan*</i></td>
        <td class="konten_s_answer">: {{$penerima_informasi}}</td>
      </tr>
      <tr>
        <td class="konten_s_question" colspan="2">
          <br>
          <br>
        </td>
      </tr>
    </tbody>
  </table>

  <table style="font-size:80%">
    <thead>
      <tr>
        <th class="box-c" width="5%">No</th>
        <th class="box-c" width="25%">Jenis Informasi</th>
        <th class="box-c" width="55%">Isi Informasi</th>
        <th class="box-c" width="20%">Tanda (V)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="box-c">1</td>
        <td class="box">Diagnosis (WD/DD)</td>
        <td class="box">{{$jenis_informasi_1}}</td>
        <td class="box-c"><?php if($check_informasi_1) echo '<b>V</b>' ?></td>
      </tr>
      <tr>
        <td class="box-c">2</td>
        <td class="box">Dasar Diagnosis</td>
        <td class="box">{{$jenis_informasi_2}}</td>
        <td class="box-c"><?php if($check_informasi_2) echo '<b>V</b>' ?></td>
      </tr>
      <tr>
        <td class="box-c">3</td>
        <td class="box">Tindakan Kedokteran</td>
        <td class="box">{{$jenis_informasi_3}}</td>
        <td class="box-c"><?php if($check_informasi_3) echo '<b>V</b>' ?></td>
      </tr>
      <tr>
        <td class="box-c">4</td>
        <td class="box">Indikasi Tindakan</td>
        <td class="box">{{$jenis_informasi_4}}</td>
        <td class="box-c"><?php if($check_informasi_4) echo '<b>V</b>' ?></td>
      </tr>
      <tr>
        <td class="box-c">5</td>
        <td class="box">Tata Cara</td>
        <td class="box">{{$jenis_informasi_5}}</td>
        <td class="box-c"><?php if($check_informasi_5) echo '<b>V</b>' ?></td>
      </tr>
      <tr>
        <td class="box-c">6</td>
        <td class="box">Tujuan</td>
        <td class="box">{{$jenis_informasi_6}}</td>
        <td class="box-c"><?php if($check_informasi_6) echo '<b>V</b>' ?></td>
      </tr>
      <tr>
        <td class="box-c">7</td>
        <td class="box">Risiko</td>
        <td class="box">{{$jenis_informasi_7}}</td>
        <td class="box-c"><?php if($check_informasi_7) echo '<b>V</b>' ?></td>
      </tr>
      <tr>
        <td class="box-c">8</td>
        <td class="box">Komplikasi</td>
        <td class="box">{{$jenis_informasi_8}}</td>
        <td class="box-c"><?php if($check_informasi_8) echo '<b>V</b>' ?></td>
      </tr>
      <tr>
        <td class="box-c">9</td>
        <td class="box">Prognosis</td>
        <td class="box">{{$jenis_informasi_9}}</td>
        <td class="box-c"><?php if($check_informasi_9) echo '<b>V</b>' ?></td>
      </tr>
      <tr>
        <td class="box-c">10</td>
        <td class="box">Alternatif & Risiko</td>
        <td class="box">{{$jenis_informasi_10}}</td>
        <td class="box-c"><?php if($check_informasi_10) echo '<b>V</b>' ?></td>
      </tr>
      <tr>
        <td class="box"></td>
        <td class="box">Lain-lain</td>
        <td class="box">{{$jenis_informasi_11}}</td>
        <td class="box-c"><?php if($check_informasi_11) echo '<b>V</b>' ?></td>
      </tr>
       <tr>
        <td class="box-text" colspan="3">Dengan ini menyatakan bahwa saya telah menerangkan hal-hal di atas secara benar dan jelas dan memberikan kesempatan untuk bertanya dan/atau berdiskusi<br></td>
        <td class="box-ttd">Tanda Tangan</td>
      </tr>
       <tr>
        <td class="box-text" colspan="3">Dengan ini menyatakan bahwa saya telah menerima informasi sebagaimana di atas yang saya beri tanda/paraf di kolom kanannya, dan telah memahaminya</td>
        <td class="box-ttd">Tanda tangan</td>
      </tr>

       <tr>
        <td class="contain" colspan="4">*Bila pasien tidak kompeten atau tidak mau menerima informasi, maka penerima informasi adalah wali atau keluarga terdekat</td>
      </tr>
    </tbody>
  </table>

  <br>
  <br>

  <table>
    <thead>
      <tr>
        <th class="contain" style="text-align:center">
          PERSETUJUAN TINDAKAN KEDOKTERAN
        </td>
      </tr>
    </thead>
    <body>
      <tr>
        <td class="contain">
          Yang bertanda tangan dibawah ini, saya, nama {{$nama}} Umur {{$umur}} tahun, {{$jk}}, alamat ... dengan ini menyatakan persetujuan untuk dilakukannya tindakan {{$tindakan}} terhadap saya / ... saya* bernama {{$terhadap}} umur {{$umur_terhadap}} tahun, {{$jk_terhadap}}. alamat {{$alamat_terhadap}}.<br>
          <br>
          Saya memahami perlunya dan manfaat tindakan tersebut sebagaimana telah dijelaskan seperti di atas kepada saya, termasuk resiko dan komplikasi yang mungkin timbul.<br>
          Saya juga menyadari bahwa oleh karena ilmu kedokteran bukanla ilmu pasti, maka keberhasilan tindakan kedokteran bukanlah keniscayaan, melainkan sangat bergantung kepada izin Tuhan Yang Maha Esa.
        </td>
      </tr>
    </body>
  </table>

  <br>
  <br>
  <br>
  <br>

  <table>
    <tr>
     <td class="ttd2">
        Yang Menyatakan
        <br>
        <br>
        <br>
        <br>
        ( {{$yang_menyatakan}} )
      </td>
      <td class="ttd3">
        Pekanbaru, {{$tanggal}}, Pukul {{$waktu}}<br>
        Saksi
        <br>
        <br>
        <br>
        ( {{$saksi}} )
      </td>
    </tr>  
  </table>

</body>

<html>