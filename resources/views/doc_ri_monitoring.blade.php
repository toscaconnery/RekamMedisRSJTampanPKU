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

<h2 align="center" style="font-size:100%">LEMBAR MONITORING & OBSERVASI PASIEN KHUSUS</h2><br>

<table>
  <thead>
    <tr>
     <th class="big-box" width="7%">Tgl</th>
     <th class="big-box" width="7%">Jam</th> 
     <th class="big-box" width="31%">Hasil Monitoring</th> 
     <th class="big-box" width="31%">Implementasi</th> 
     <th class="big-box" width="14%">Paraf &<br> Nama<br> Perawat</th> 
    </tr>
  </thead>
  <tbody>
    
    @foreach($pasien as $p)
    <tr id="form_{{$p['id_data']}}">
      <td class="box-c">{{$p['tanggal']}}</td>
      <td class="box-c">{{$p['jam']}}</td>
      <td class="box">{{$p['hasil_monitoring']}}</td>
      <td class="box">{{$p['implementasi']}}</td>
      <td class="box-c"><br><br><br><br><br></td>
    </tr>
    @endforeach

  </tbody>
</table>
  
<p style="font-size:80%">
  1. Restrain
  <br>2. Resiko Jatuh
  <br>3. Bermasalah Fisik
</p>

</body>
<html>