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

<h2 align="center" style="font-size:100%">CATATAN PERKEMBANGAN PASIEN TERINTEGRASI</h2><br>

<table>
  <thead>
    <tr>
     <th class="big-box" width="15%">TANGGAL & JAM</th> 
     <th class="big-box" width="20%">PROFESI/BAGIAN</th> 
     <th class="big-box" width="45%">HASIL PEMERIKSAAN, ANALISIS RENCANA PENATALAKSANAAN PASIEN<br>
      <div style="padding-top:100%;font-size:80%;"><br>(Dituliskan dengan format SOAP/ADIME, Disertai dengan Target yang Terukur,Evaluasi Hasil Tatalaksana dituliskan dalam Asesmen, Harap Bubuhkan Stempel Nama, dan Paraf Pada Setiap Akhir Catatan)</div>
      </th> 
     <th class="big-box" width="20%">VERIFIKASI DPJP</th> 
    </tr>
  </thead>
  <tbody>
    @foreach($pasien as $p)
    <tr id="form_{{$p['id_data']}}">
      <td class="box-c">{{$p['tanggal']}}<br>{{$p['jam']}}</td>
      <td class="box-c">{{$p['profesi']}}</td>
      <td class="box">{{$p['keterangan']}}</td>
      <td class="box-c"><br><br><br>[nama]</td>
    </tr>
    @endforeach
  </tbody>
</table>

</body>

<html>