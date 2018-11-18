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
<table>
  <thead>
    <tr>
     <th class="big-box" colspan="4" style="font-size:120%;background-color:#d3d3d3;">Catatan Kemajuan</th> 
    </tr>
    <tr>
     <th class="big-box" width="10%">Tanggal/Jam</th> 
     <th class="big-box" width="40%">Catatan Kemajuan</th> 
     <th class="big-box" width="25%">Tindakan dan Terapi</th> 
     <th class="big-box" width="25%">Nama & Tanda Tangan</th> 
    </tr>
  </thead>
  <tbody>
    @foreach($pasien as $p)
      <tr id="form_{{$p['id_data']}}">
        <td class="box-c">{{$p['tanggal']}}<br>{{$p['jam']}}</td>
        <td class="box">{{$p['catatan_kemajuan']}}</td>
        <td class="box">{{$p['tindakan_terapi']}}</td>
        <td class="box-c" style="vertical-align:bottom"><br><br><br>{{$p['nama_user']}}</td>
      </tr>
    @endforeach
  </tbody>
</table>

</body>

<html>