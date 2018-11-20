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


  <h2 align="center" style="font-size:110%;">EDUKASI PASIEN DAN KELUARGA</h2>
  <p align="center" style="padding-top:-20px;">(Diisi oleh Pemberi Asuhan)</p>
  
  <div style="font-size: 85%;">  
  
  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      Psikolog
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$psikolog}}
    </div>
  </div>
  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      Tanggal
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$tanggal}}
    </div>
  </div>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      Dikirim Oleh
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$dikirim_oleh}}
    </div>
  </div>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      Dokter
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$dokter}}
    </div>
  </div>

  <br>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      I. Observasi
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      
    </div>
  </div>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      &emsp;Kontak Mata
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$kontak_mata}}
    </div>
  </div>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      &emsp;Respon
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$respon}}
    </div>
  </div>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      &emsp;Cara Bicara
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$cara_bicara}}
    </div>
  </div>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      &emsp;-Volume
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$volume}}
    </div>
  </div>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      &emsp;-Intonasi
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$intonasi}}
    </div>
  </div>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      &emsp;Ekspresi
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$ekspresi}}
    </div>
  </div>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      &emsp;Gesture
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$gesture}}
    </div>
  </div>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      &emsp;Performance
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$performance}}
    </div>
  </div>

  <br>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      II. Anamnesa
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      
    </div>
  </div>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      &emsp;a. Autoanamnesa
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$autoanamnesa}}
    </div>
  </div>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      &emsp;b. Alloanamnesa
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$alloanamnesa}}
    </div>
  </div>

  <br>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      III. Intelegensi
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$intelegensi}}
    </div>
  </div>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      IV. Kepribadian
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$kepribadian}}
    </div>
  </div>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      V. Diagnosa
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$diagnosa}}
    </div>
  </div>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      VI. Kesimpulan
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$kesimpulan}}
    </div>
  </div>

  <div class="row" style="padding-bottom:5px;">
    <div class="colsize" style="width:17%">
      VII. Terapi/Saran
    </div>
    <div class="colsize" style="width:70%;text-align:left;">
      : {{$terapi_saran}}
    </div>
  </div>


</body>

<html>