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


  <h2 align="center" style="font-size:110%;">PENILAIAN RESIKO NYERI</h2>
   
  <table class="table">
    <thead>
      <tr>
        <th class="default" style="width:30%;height:30px;">Tanggal, Bulan, Tahun</th>
        <th class="default" style="height:30px;width:30%">Waktu</th>
        <th class="default" style="height:30px;width:30%">Skala Nyeri</th>
      </tr>
    </thead>
    
    <tbody>
      <tr>
        <td class="default" style="text-align:center;height:30px;">
          {{ $tanggal }}
        </td>
        <td class="default" style="text-align:center;height:30px;">
          {{ $waktu }}
        </td>
        <td class="default" style="text-align:center;height:30px;">
          {{ $skala }}
        </td>
      </tr>       
    </tbody>
  </table>

  <p style="font-size:10px">Ket: asesmen resiko nyeri dinilai tiap shift</p>

</body>

<html>