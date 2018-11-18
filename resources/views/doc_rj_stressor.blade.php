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


  <h2 align="center" style="font-size:110%;">MENGIDENTIFIKASI SUMBER STRES (STRESOR) ANDA</h2>
  
  <table>
    <tbody>
      <tr>
        <td rowspan="3" class="contain" width="15%"> 
          <b>IDENTITAS</b>
        </td>
        <td class="contain" width="20%"> 
          Status Perkawinan
        </td>
        <td class="contain"> 
          : -
        </td>
      </tr>
      <tr>
        <td class="contain" width="20%"> 
          Pendidikan
        </td>
        <td class="contain"> 
          : -
        </td>
      </tr>
      <tr>
        <td class="contain" width="20%"> 
          Pekerjaan / Organisasi
        </td>
        <td class="contain"> 
          : -
        </td>
      </tr>
      <tr>
        <td colspan="3" class="contain">Salah satu cara mengelola stres adalah melakukan relaksasi progresif. Sebelum melakukannya, hendaknya mengidentifikasi sumber stres (stresor) Anda.</td>  
      </tr>
      <tr>
        <td class="contain"><b>TUJUAN</b></td>
        <td colspan="2" class="contain"> : Menentukan stresor yang mana yang berpengaruh terhadap diri Anda.</td>  
      </tr>
    </tbody>
  </table>

  <br>

  <table>
    <tbody>
      <tr>
        <td colspan="3"><b>YANG HARUS DILAKUKAN</b></td>
      </tr>
      <tr>
        <td class="number">1. </td>
        <td colspan="2" class="contain">Buatlah satu daftar dari semua stresor yang dirasakan mempunyai pengaruh. Pertimbangkan semua kategori di bawah ini. Susunlah menurut prioritas untuk setiap kategori.</td>
      </tr>
    </tbody>
  </table>

  <table>
    <thead>
      <tr>
        <th class="box-c">Lingkungan Fisik</th>
        <th class="box-c">Sosial, ekonomi, & politik</th>
        <th class="box-c">Keluarga</th>
        <th class="box-c">Pekerjaan & karir</th>
        <th class="box-c">Hubungan antar<br>pribadi & lingkungan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="box">{{$lingkungan_fisik}}</td>
        <td class="box">{{$sosial_ekonomi_politik}}</td>
        <td class="box">{{$keluarga}}</td>
        <td class="box">{{$pekerjaan_karir}}</td>
        <td class="box">{{$hubungan_pribadi_lingkungan}}</td>
      </tr>
    </tbody>
  </table>
  
  <table>
    <tbody>
      
      <tr>
        <td class="number">2. </td>
        <td colspan="2" class="contain">Tuliskanlah semua simptom-simptom (gejala yang muncul)!</td>
      </tr>
      <tr>
        <td colspan="3" class="contain">{{$simptom}}</td>
      </tr>
      
      <tr>
        <td class="number">3. </td>
        <td colspan="2" class="contain">Bagaimana saudara menghadapi dan mengatasinya?</td>
      </tr>
      <tr>
        <td colspan="3" class="contain">{{$cara_mengatasi}}</td>
      </tr>

      
    </tbody>
  </table>
  <br>
  <br>
  <br>

  <table>
    <tbody>
      <tr>
        <td class="box" width="30%">Sekali Anda mengidentifikasi stresor maka Anda telah mengambil<br>langkah pertama untuk melakukan suatu hal yang konstruktif</td>
      </tr>
    </tbody>
  </table>

</body>

<html>