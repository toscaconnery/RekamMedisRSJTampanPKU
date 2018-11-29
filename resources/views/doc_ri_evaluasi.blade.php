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

<h2 align="center" style="font-size:100%">EVALUASI TINDAKAN KEPERAWATAN</h2><br>

<table>
  <thead>
    <tr>
     <th class="big-box" width="15%">Tgl & Jam</th> 
     <th class="big-box" width="33%">Implementasi</th> 
     <th class="big-box" width="33%">Evaluasi</th> 
     <th class="big-box" width="29%">Paraf &<br> Nama<br> Perawat </th> 
    </tr>
  </thead>
  <tbody>
    @foreach($pasien as $p)
    <tr id="form_{{$p['id_data']}}">
      <td class="box-c">{{$p['tanggal']}}<br>{{$p['jam']}}</td>
      <td class="box-c">{{$p['implementasi']}}</td>
      <td class="box">
        {{$p['evaluasi']}}
      </td>
      <td class="box-c" style="vertical-align:bottom"><br><br><br>{{$p['nama_user']}}</td>
    </tr>
    @endforeach

  </tbody>
</table>

</body>

<html>