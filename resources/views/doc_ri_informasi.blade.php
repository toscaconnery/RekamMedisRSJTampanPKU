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

<h2 align="center" style="font-size:100%">PEMBERIAN INFORMASI</h2><br>

<table>
  <thead>
    <tr>
     <th class="big-box" width="15%">TANGGAL & JAM</th> 
     <th class="big-box" width="20%">Informasi Yang disampaikan </th> 
     <th class="big-box" width="45%">Pemberi Informasi</th> 
     <th class="big-box" width="20%">VERIFIKASI DPJP</th> 
    </tr>
  </thead>
  <tbody>
    @foreach($pasien as $p)
      <tr id="form_{{$p['id_data']}}">
        <td class="box-c">{{$p['tanggal']}}<br>{{$p['jam']}}</td>
        <td class="box-c">{{$p['informasi']}}</td>
        <td class="box">{{$p['pemberi']}}</td>
        <td class="box-c" style="vertical-align:bottom"><br><br>{{$p['penerima']}}</td>
      </tr>
    @endforeach
  </tbody>
</table>

</body>

<html>