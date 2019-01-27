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
      @foreach($pasien as $key => $value)
        <tr>
          <td class="default" style="width: 33.3%; text-align: center;vertical-align:middle;" rowspan="3">
            {{ $key }}
          </td>
          <td class="default" style="width: 33.3%; text-align: center;vertical-align:middle;">
            P
          </td>
          <td class="default" style="width: 33.3%; text-align: center;vertical-align:middle;"> 
           {{ $value['p'] }}
          </td>
        </tr>
        <tr style="background-color: #fafafa">
          <td class="default" style="width: 33.3%; text-align: center;vertical-align:middle;">
            S
          </td>
          <td class="default" style="width: 33.3%; text-align: center;vertical-align:middle;"> 
           {{ $value['s'] }}
          </td>
        </tr>
        <tr style="background-color: #f4f5f7">
          <td class="default" style="width: 33.3%; text-align: center;vertical-align:middle;">
            M
          </td>
          <td class="default" style="width: 33.3%; text-align: center;vertical-align:middle;"> 
            {{ $value['m'] }}
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <p style="font-size:10px">Ket: asesmen resiko nyeri dinilai tiap shift</p>

</body>

<html>