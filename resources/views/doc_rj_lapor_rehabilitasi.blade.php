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

<table style="font-size:80%;">
  <tbody>
    <tr>
      <td class="box-c" colspan="9" style="padding:1%;"><b>ASESMEN WAJIB LAPOR & REHABILITASI MEDIS</b></td>
    </tr>
    
    <tr>
      <td class="box-c" rowspan="8" width="5%">1</td>
      <td class="box" rowspan="8" width="20%">INFORMASI DEMOGRAFIS</td>
      <td class="box-c" rowspan="3" width="15%">1.</td>
      <td class="box" colspan="2" width="25%" rowspan="3">Status Perkawinan :</td>
      <td class="box" colspan="3" width="25%">Belum Menikah = 1</td>
      <td class="box" width="10%">-</td>
    </tr>

    <tr>
      <td class="box" colspan="3">Menikah = 2</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="3">Duda / Janda = 3</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" rowspan="5" width="5%">2.</td>
      <td class="box" colspan="2" width="30%" rowspan="5">Pendidikan Terakhir :</td>
      <td class="box" colspan="3" width="30%">Tamat SD = 1</td>
      <td class="box" width="10%">-</td>
    </tr>

    <tr>
      <td class="box" colspan="3">Tamat SLTP = 2</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="3">Tamat SLTA = 3</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="3">Tamat Akademi = 4</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="3">Tamat PT = 5</td>
      <td class="box">-</td>
    </tr>


    <? row 2 ?>

    <tr>
      <td class="box-c" rowspan="13" width="5%">2</td>
      <td class="box" rowspan="13" width="20%">STATUS MEDIS</td>
      <td class="box-c" rowspan="5" width="5%">1.</td>
      <td class="box" colspan="6" >Riwayat Rawat Inap yang tidak terkait masalah narkotika</td>
    </tr>

    <tr>
      <td class="box" colspan="2">Jenis Penyakit</td>
      <td class="box" colspan="2">Dirawat Tahun</td>
      <td class="box">Lamanya</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="2">-</td>
      <td class="box" colspan="2">-</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="2">-</td>
      <td class="box" colspan="2">-</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="2">-</td>
      <td class="box" colspan="2">-</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" rowspan="2" width="5%">2.</td>
      <td class="box" colspan="3">Riwayat penyakit kronis</td>
      <td class="box" >Ya = 1</td>
      <td class="box">Tidak = 0</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="6" width="5%">Jenis Penyakit : </td>
    </tr>

    <tr>
      <td class="box-c" rowspan="2" width="5%">3.</td>
      <td class="box" colspan="3">Saat ini sedang menjalankan terapi medis ?</td>
      <td class="box" >Ya = 1</td>
      <td class="box">Tidak = 0</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="6" width="5%">
        Jenis terapi medis yang dijalani saat ini : 
        <br> -
      </td>
    </tr>

    <tr>
      <td class="box-c" rowspan="4" width="5%">4.</td>
      <td class="box" colspan="3">Status Kesehatan</td>
      <td class="box" colspan="3">Apakah pernah di tes</td>
    </tr>

    <tr>
      <td class="box-c" >4.1</td>
      <td class="box" >HIV</td>
      <td class="box" >-</td>
      <td class="box" >Ya = 1</td>
      <td class="box" >Tidak = 0</td>
      <td class="box" >-</td>
    </tr>

    <tr>
      <td class="box-c" >4.2</td>
      <td class="box" width="10%">Hepatitis A</td>
      <td class="box" >-</td>
      <td class="box" >Ya = 1</td>
      <td class="box" >Tidak = 0</td>
      <td class="box" >-</td>
    </tr>

    <tr>
      <td class="box-c" >4.3</td>
      <td class="box" >Hepatitis B</td>
      <td class="box" >-</td>
      <td class="box" >Ya = 1</td>
      <td class="box" >Tidak = 0</td>
      <td class="box" >-</td>
    </tr>

    <? row 3 ?>

    <tr>
      <td class="box-c" rowspan="17" width="5%">3</td>
      <td class="box" rowspan="17" width="20%">STATUS PEKERJAAN / DUKUNGAN HIDUP</td>
      <td class="box-c" rowspan="4" width="5%">1.</td>
      <td class="box" colspan="2" rowspan="4">Status Pekerjaan</td>
      <td class="box" colspan="2" >Tidak Bekerja = 1</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="2">Bekerja = 2</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="2">Mahasiswa / Pelajar = 8</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="2">Ibu rumah tangga = 9</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" rowspan="3" width="5%">2.</td>
      <td class="box" rowspan="3" colspan="2">Bila bekerja, pola pekerjaan :</td>
      <td class="box" colspan="2">Purna Waktu  = 1</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>
    
    <tr>
      <td class="box" colspan="2">Paruh waktu  = 2</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="2">Tidak tentu  = 99</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" width="5%">3.</td>
      <td class="box" colspan="2">Kode Pekerjaan :</td>
      <td class="box" colspan="3">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" rowspan="2" width="5%">4.</td>
      <td class="box" colspan="2" rowspan="2">Keterampilan teknis yang dimiliki :</td>
      <td class="box" colspan="3">-</td>
      <td class="box" colspan="3">-</td>
    </tr>

    <tr>
      <td class="box" colspan="3">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" width="5%">5.</td>
      <td class="box" colspan="2">Adakah yang memberikan dukungan hidup bagi anda ?</td>
      <td class="box">Ya = 1</td>
      <td class="box"> Tidak = 0</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" width="5%">6.</td>
      <td class="box" colspan="2">Bila Ya, siapakah?</td>
      <td class="box" colspan="4">-</td>
    </tr>

    <tr>
      <td class="box-c" width="5%" rowspan="5">7.</td>
      <td class="box" colspan="2">Dalam bentuk apakah ?</td>
      <td class="box">-</td>
      <td class="box">-</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="2">Finansial</td>
      <td class="box">Ya = 1</td>
      <td class="box">Tidak = 2</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="2">Tempat Tinggal</td>
      <td class="box">Ya = 1</td>
      <td class="box">Tidak = 2</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="2">Makan</td>
      <td class="box">Ya = 1</td>
      <td class="box">Tidak = 2</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="2">Pengobatan / Perawatan</td>
      <td class="box">Ya = 1</td>
      <td class="box">Tidak = 2</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <? row 4 ?>

    <tr>
      <td class="box-c" rowspan="24" width="5%">4</td>
      <td class="box" rowspan="24" width="20%">STATUS PENGGUNAAN NARKOTIKA</td>
      <td class="box" width="5%" rowspan="2"> </td>
      <td class="box" colspan="8" width="5%"> 
        Jenis cara penggunaan
      </td>

    </tr>

    <tr>
      <td class="box" colspan="8">
        1.Oral  2.Nasal/Sublingual/Suppositoria  3.Merokok  4.Injeksi Non-IV 5.IV
      </td>
    </tr>

    <tr>
      <td class="box" colspan="4" ><b>Jenis Napza</b></td>
      <td class="box">30 Hari Terakhir</td>
      <td class="box">Sepanjang <br>Hidup (Thn)</td>
      <td class="box">Cara Pakai</td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">D.1</td>
      <td class="box" colspan="3">Alkohol</td>
      <td class="box">-</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">D.2</td>
      <td class="box" colspan="3">Heroin</td>
      <td class="box">-</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">D.3</td>
      <td class="box" colspan="3">Metadon / Buprenorfin</td>
      <td class="box">-</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">D.4</td>
      <td class="box" colspan="3">Opiat Lain / Analgesik</td>
      <td class="box">-</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">D.5</td>
      <td class="box" colspan="3">Barbiturat</td>
      <td class="box">-</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">D.6</td>
      <td class="box" colspan="3">Sedatif / Hipnotik</td>
      <td class="box">-</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">D.7</td>
      <td class="box" colspan="3">Kokain</td>
      <td class="box">-</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">D.8</td>
      <td class="box" colspan="3">Amfetamin</td>
      <td class="box">-</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">D.9</td>
      <td class="box" colspan="3">Kanabis</td>
      <td class="box">-</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">D.10</td>
      <td class="box" colspan="3">Halusinogen</td>
      <td class="box">-</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">D.11</td>
      <td class="box" colspan="3">Inhalan</td>
      <td class="box">-</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">D.12</td>
      <td class="box" colspan="3">Lebih dari satu zat / hari (termasuk alkohol)</td>
      <td class="box">-</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>


    <tr>
      <td class="box-c" width="5%">13</td>
      <td class="box" colspan="3">Jenis zat utama yang disalahgunakan :</td>
      <td class="box"></td>
      <td class="box"></td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c" width="5%">14</td>
      <td class="box" colspan="3">Pernahkan menjalani terapi rehabilitasi ?</td>
      <td class="box"> Ya = 1</td>
      <td class="box"> Tidak = 0</td>
      <td class="box"></td>
    </tr>

     <tr>
      <td class="box-c" width="5%">15</td>
      <td class="box" colspan="6">Bila ya, jenis terapi rehabilitasi yang dijalani
        <br>Keterangan : ...
      </td>
    </tr>

     <tr>
      <td class="box-c" width="5%">16</td>
      <td class="box" colspan="3">Pernahkan mengalami overdosis ?</td>
      <td class="box"> Ya = 1</td>
      <td class="box"> Tidak = 0</td>
      <td class="box"></td>
    </tr>

     <tr>
      <td class="box-c" width="5%">17</td>
      <td class="box" colspan="6">Bila ya, kapan dan bagaimana penanggulangannya</td>
    </tr>

     <tr>
      <td class="box-c" width="5%">18</td>
      <td class="box" colspan="2">Waktu Overdosis</td>
      <td class="box" colspan="4"> ...</td>
    </tr>

     <tr>
      <td class="box-c" width="5%" rowspan="3">19</td>
      <td class="box" colspan="2">cara Penanggulangan</td>
      <td class="box" colspan="3">Perawatan di RS = 1</td>
      <td class="box"></td>
    </tr>

     <tr>
      <td class="box" colspan="2"></td>
      <td class="box" colspan="3"> Perawatan di Puskesmas = 1</td>
      <td class="box"></td>
    </tr>

     <tr>
      <td class="box" colspan="2"></td>
      <td class="box" colspan="3"> Sendiri = 3</td>
      <td class="box"></td>
    </tr>

    <? row 5 ?>

     <tr>
      <td class="box-c" rowspan="15" width="5%">5</td>
      <td class="box" rowspan="15" width="20%">STATUS LEGAL</td>
      <td class="box" width="5%"> </td>
      <td class="box" colspan="5" width="5%"> 
        Jenis cara penggunaan
      </td>
      <td class="box"> </td>

    </tr>


    <tr>
      <td class="box-c" style="font-size:90%">1</td>
      <td class="box" colspan="5">Mencuri di toko / vandalisme</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">2</td>
      <td class="box" colspan="5">Bebas bersyarat / masa percobaan</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">3</td>
      <td class="box" colspan="5">Masalah narkoba</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">4</td>
      <td class="box" colspan="5">Pemalsuan</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">5</td>
      <td class="box" colspan="5">Penyerangan bersenjata</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">6</td>
      <td class="box" colspan="5">Pembobolan dan pencurian</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">7</td>
      <td class="box" colspan="5">Perampokan</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">8</td>
      <td class="box" colspan="5">Penyerangan</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">9</td>
      <td class="box" colspan="5">Pemabakan rumah</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">10</td>
      <td class="box" colspan="5">Perkosaan</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">11</td>
      <td class="box" colspan="5">Pembunuhan</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">12</td>
      <td class="box" colspan="5">Pelacuran</td>
      <td class="box"></td>
    </tr>


    <tr>
      <td class="box-c" width="5%">13</td>
      <td class="box" colspan="5">Melecehkan pengadilan</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c" width="5%">14</td>
      <td class="box" colspan="5">Lain-lain</td>
      <td class="box"></td>
    </tr>

    <? row 6 ?>

     <tr>
      <td class="box-c" rowspan="27" width="5%">6</td>
      <td class="box" rowspan="27" width="20%">Riwayat Keluarga / Sosial</td>
      <td class="box" width="5%"> </td>
      <td class="box" colspan="5" width="5%"> 
        dalam Situasi Seperti apakah anda tinggal 3 tahun belakangan ini ?
      </td>
      <td class="box"> </td>

    </tr>


    <tr>
      <td class="box-c" rowspan="6" style="font-size:90%">1</td>
      <td class="box" colspan="3">Dengan pasangan & anak = 1</td>
      <td class="box" colspan="2">Dengan teman = 6</td>
      <td class="box" ></td>
    </tr>

    <tr>
      <td class="box" colspan="3">Dengan pasangan saja = 2</td>
      <td class="box" colspan="2">Dengan Sendiri = 7</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box" colspan="3">Dengan anak saja = 3</td>
      <td class="box" colspan="2">Lingkungan terkontrol = 8</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box" colspan="3">Dengan orang tua = 4</td>
      <td class="box" colspan="2" rowspan="2">Kondisi yang tidak stabil = 9</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box" colspan="3">Dengan keluarga = 5</td>
      <td class="box"></td>
    </tr>

    

    <tr>
      <td class="box" colspan="6">
        (pilih situasi yang paling menggambarkan 3 tahun terakhir. Jika terdapat situasi yang berganti-ganti maka pilihlah situasi yang paling terakhir)
      </td>
    </tr>

    <tr>
      <td class="box-c" style="font-size:90%">2</td>
      <td class="box" colspan="5">
        Apakah anda hidup dengan seseorang yang mempunyai masalah
        <br> penyalahgunaan zat sekarang ini? Ya=1 Tidak=0
      </td>
      <td class="box" ></td>
    </tr>
    
    <tr>
      <td class="box-c" rowspan="7" style="font-size:90%">3</td>
      <td class="box" colspan="5">
        Jika ya, siapakah ia/mereka (contreng pada kolom berikut)
      </td>
      <td class="box" ></td>
    </tr>

    <tr>
      <td class="box-c">1</td>
      <td class="box" colspan="2">Saudara kandung / tiri</td>
      <td class="box">Ya = 1</td>
      <td class="box">Tidak = 0</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c">2</td>
      <td class="box" colspan="2">Ayah / Ibu</td>
      <td class="box">Ya = 1</td>
      <td class="box">Tidak = 0</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c">3</td>
      <td class="box" colspan="2">Pasangan</td>
      <td class="box">Ya = 1</td>
      <td class="box">Tidak = 0</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c">4</td>
      <td class="box" colspan="2">Om / Tante</td>
      <td class="box">Ya = 1</td>
      <td class="box">Tidak = 0</td>
      <td class="box"></td>
    </tr>


    <tr>
      <td class="box-c">5</td>
      <td class="box" colspan="2">Teman</td>
      <td class="box">Ya = 1</td>
      <td class="box">Tidak = 0</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c">6</td>
      <td class="box" colspan="2">Lainnya ...</td>
      <td class="box">Ya = 1</td>
      <td class="box">Tidak = 0</td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c" rowspan="12" style="font-size:90%">4</td>
      <td class="box" colspan="10">
        Apakah anda memiliki konflik serius bila berhubungan dengan :
      </td>
    </tr>

    <tr>
      <td class="box-c" colspan="4"></td>
      <td class="box">30 Hari Terakhir</td>
      <td class="box">Sepanjang Hidup</td>
    </tr>

    <tr>
      <td class="box-c">1</td>
      <td class="box" colspan="3">Ibu</td>
      <td class="box"></td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c">2</td>
      <td class="box" colspan="3">Ayah</td>
      <td class="box"></td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c">3</td>
      <td class="box" colspan="3">Adik / Kakak</td>
      <td class="box"></td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c">4</td>
      <td class="box" colspan="3">Pasangan</td>
      <td class="box"></td>
      <td class="box"></td>
    </tr>


    <tr>
      <td class="box-c">5</td>
      <td class="box" colspan="3">Anak-anak</td>
      <td class="box"></td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c">6</td>
      <td class="box" colspan="3">Keluarga lain yang berarti ( ... )</td>
      <td class="box"></td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c">7</td>
      <td class="box" colspan="3">Teman Akrab</td>
      <td class="box"></td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c">8</td>
      <td class="box" colspan="3">Tetangga</td>
      <td class="box"></td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c" rowspan="2">9</td>
      <td class="box" colspan="3" rowspan="2">Teman Sekerja</td>
      <td class="box">-</td>
      <td class="box">-</td>
    </tr>

    <tr>
      <td class="box" colspan="2">( Ya=1 Tidak=0 )</td>
    </tr>




    <? row 7 ?>

     <tr>
      <td class="box-c" rowspan="9" width="5%">7</td>
      <td class="box" rowspan="9" width="20%">STATUS PSIKIATRIS</td>
      <td class="box" width="5%"> </td>
      <td class="box" colspan="4" width="5%"> 
        Apakah anda pernah mengalami hal-hal berikut ini (yang<br>bukan akibat langsung dari penggunaan Napza)
      </td>
      <td class="box">30 Hari Terakhir</td>
      <td class="box">Sepanjang Hidup</td>

    </tr>

    <tr>
      <td class="box-c">1</td>
      <td class="box" colspan="4">Mengalami depresi serius (kesedihan, putus asa,<br>kehilangan minat, susah konsentrasi)</td>
      <td class="box"></td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c">2</td>
      <td class="box" colspan="4">Mengalami rasa cemas serius/keterangan, gelisah,<br> merasa khawatir berlebihan ?</td>
      <td class="box"></td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c">3</td>
      <td class="box" colspan="4">Mengalami halusinasi (melihat / mendengar sesuatu yang tidak ada obyeknya)</td>
      <td class="box"></td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c">4</td>
      <td class="box" colspan="4">Mengalami kesulitan mengingat atau fokus pada sesuatu</td>
      <td class="box"></td>
      <td class="box"></td>
    </tr>


    <tr>
      <td class="box-c">5</td>
      <td class="box" colspan="4">Mengalami kesukaran mengontrol perilaku kasar,<br>termasuk kemarahan atau kekerasan</td>
      <td class="box"></td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c">6</td>
      <td class="box" colspan="4">Mengalami pikiran serius untuk bunuh diri ?</td>
      <td class="box"></td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c">7</td>
      <td class="box" colspan="4">Berusahan untuk bunuh diri ?</td>
      <td class="box"></td>
      <td class="box"></td>
    </tr>

    <tr>
      <td class="box-c">8</td>
      <td class="box" colspan="4">menerima pengobatan psikiater ?</td>
      <td class="box"></td>
      <td class="box"></td>
    </tr>


    <? row 8 ?>

     <tr>
      <td class="box-c" width="5%" rowspan="14">8</td>
      <td class="box" width="20%" rowspan="14" >PEMERIKSAAN FISIK</td>
      <td class="box-c" width="5%">1</td>
      <td class="box" colspan="6" width="5%"> 
        Tekanan darah:
      </td>
    </tr>

    <tr>
      <td class="box-c" width="5%">2</td>
      <td class="box" colspan="6" width="5%"> 
        Nadi:
      </td>
    </tr>

    <tr>
      <td class="box-c" width="5%">3</td>
      <td class="box" colspan="6" width="5%"> 
        Pernapasan(RR):
      </td>
    </tr>

    <tr>
      <td class="box-c" width="5%">4</td>
      <td class="box" colspan="6" width="5%"> 
        Suhu(celcius) :
      </td>
    </tr>

    <tr>
      <td class="box-c" width="5%"></td>
      <td class="box" colspan="6" width="5%"> 
        Pemeriksaan Sistematik
      </td>
    </tr>

    <tr>
      <td class="box-c" width="5%">5</td>
      
      <td class="box" colspan="6" width="5%" style="padding:1.5px"> 
        <table>
          <tbody>
            <tr>
              <td class="box-c" >  Sistem<br>Pencernaan </td>
              <td class="box-c" >  Sistem jantung dan<br> pembuluh darah </td>
              <td class="box-c" >  Sistem<br>pernapasan </td>
              <td class="box-c" >  Sistem saraf<br>pusat </td>
              <td class="box-c" >  THT dan kulit </td>
              <td class="box-c" >  Keterangan </td>
            </tr>
            <tr>
              <td class="box" >la la la la la la la</td>
              <td class="box" >la la la la la la la la la la la la la la</td>
              <td class="box" >-</td>
              <td class="box" >-</td>
              <td class="box" >-</td>
              <td class="box" >-</td>
            </tr>
            <tr>
              <td class="box" >-</td>
              <td class="box" >-</td>
              <td class="box" >-</td>
              <td class="box" >-</td>
              <td class="box" >-</td>
              <td class="box" >-</td>
            </tr>
            <tr>
              <td class="box" >-</td>
              <td class="box" >-</td>
              <td class="box" >-</td>
              <td class="box" >-</td>
              <td class="box" >-</td>
              <td class="box" >-</td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>

    <tr>
      <td class="box-c" width="5%" rowspan="8">6</td>
      <td class="box-c" colspan="6" width="5%"> 
        Hasil Urinalis
      </td>
    </tr>

    <tr>  
      <td class="box" colspan="3"> 
        Benzodiazepin
      </td>
      <td class="box"> 
        Ya = 1
      </td>
      <td class="box"> 
        Tidak = 0
      </td>
      <td class="box">     
      </td>
    </tr>

    <tr>  
      <td class="box" colspan="3"> 
        Kanabis
      </td>
      <td class="box"> 
        Ya = 1
      </td>
      <td class="box"> 
        Tidak = 0
      </td>
      <td class="box">     
      </td>
    </tr>

    <tr>  
      <td class="box" colspan="3"> 
        Opiat
      </td>
      <td class="box"> 
        Ya = 1
      </td>
      <td class="box"> 
        Tidak = 0
      </td>
      <td class="box">     
      </td>
    </tr>

    <tr>  
      <td class="box" colspan="3"> 
        Amfetamin
      </td>
      <td class="box"> 
        Ya = 1
      </td>
      <td class="box"> 
        Tidak = 0
      </td>
      <td class="box">     
      </td>
    </tr>

    <tr>  
      <td class="box" colspan="3"> 
        Kokain
      </td>
      <td class="box"> 
        Ya = 1
      </td>
      <td class="box"> 
        Tidak = 0
      </td>
      <td class="box">     
      </td>
    </tr>

    <tr>  
      <td class="box" colspan="3"> 
        Barbiturat
      </td>
      <td class="box"> 
        Ya = 1
      </td>
      <td class="box"> 
        Tidak = 0
      </td>
      <td class="box">     
      </td>
    </tr>

    <tr>  
      <td class="box" colspan="3"> 
        Alkohol
      </td>
      <td class="box"> 
        Ya = 1
      </td>
      <td class="box"> 
        Tidak = 0
      </td>
      <td class="box">     
      </td>
    </tr>



  </tbody>
</table>

</body>

<html>