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

  <h2 align="center" style="font-size:110%;">LEMBAR KONSULTASI</h2>
  
  <table>
    <tbody>
      
      <tr>
        <td class="contain" width="10%" rowspan="2">Kepada TS</td>
        <td class="contain" width="40%" rowspan="2">  {{ $konsultasi1}}</td>
        <td class="contain" width="10%">Pekanbaru</td>
        <td class="contain" width="40%">,  {{ $konsultasi4 }}</td>
      </tr>
      
      <tr>
        <td class="contain" width="10%">Jam</td>
        <td class="contain" width="40%">:  {{ $konsultasi5 }}</td>
      </tr>
      
      <tr>
        <td class="contain" width="10%"><br></td>
      </tr>
      
      <tr>
        <td class="contain" colspan="4">Ikhtisar Klinik + Laboratorium singkat</td>
      </tr>
      <tr>
        <td class="contain" colspan="4"> {{ $konsultasi2 }}</td>
      </tr>

      <tr>
        <td class="contain" width="10%"><br></td>
      </tr>

      <tr>
        <td class="contain" colspan="4">Konsultasi yang diminta:</td>
      </tr>
      <tr>
        <td class="contain" colspan="4"> {{ $konsultasi3 }}</td>
      </tr>
    
    </tbody>
  </table>
  
  <br>
  <br>
  <br>
  <br>

  <table>
    <tr>
     <td class="ttd3">
        
      </td>
      <td class="ttd3">
        
      </td>
      <td class="ttd3">
        Dokter
        <br>
        <br>
        <br>
        <br>
        (....................................................)<br>
        Tanda Tangan dan Nama Terang
      </td>
    </tr>  
  </table>

  <pagebreak>

  <h2 align="center" style="font-size:110%;">JAWABAN KONSULTASI</h2>
  
  <table>
    <tbody>
      
      <tr>
        <td class="contain" width="10%" rowspan="2">Kepada TS</td>
        <td class="contain" width="40%" rowspan="2">  {{ $jkonsultasi1 }}</td>
        <td class="contain" width="10%">Pekanbaru</td>
        <td class="contain" width="40%">,  {{ $jkonsultasi6 }}</td>
      </tr>
      
      <tr>
        <td class="contain" width="10%">Jam</td>
        <td class="contain" width="40%">:  {{ $jkonsultasi7 }}</td>
      </tr>
      
      <tr>
        <td class="contain" width="10%"><br></td>
      </tr>
      
      <tr>
        <td class="contain" colspan="4">Penemuan Klinik dari penderita yang dikonsultasikan :</td>
      </tr>
      <tr>
        <td class="contain" colspan="4"> {{ $jkonsultasi2 }}</td>
      </tr>

      <tr>
        <td class="contain" width="10%"><br></td>
      </tr>

      <tr>
        <td class="contain" colspan="4">Pemeriksaan khusus lain :</td>
      </tr>
      <tr>
        <td class="contain" colspan="4"> {{ $jkonsultasi3 }}</td>
      </tr>

      <tr>
        <td class="contain" width="10%"><br></td>
      </tr>

      <tr>
        <td class="contain" colspan="4">Kesimpulan :</td>
      </tr>
      <tr>
        <td class="contain" colspan="4"> {{ $jkonsultasi4 }}</td>
      </tr>

      <tr>
        <td class="contain" width="10%"><br></td>
      </tr>

      <tr>
        <td class="contain" colspan="4">Saran :</td>
      </tr>
      <tr>
        <td class="contain" colspan="4"> {{ $jkonsultasi5 }}</td>
      </tr>
    
    </tbody>
  </table>
  
  <br>
  <br>
  <br>
  <br>

  <table>
    <tr>
     <td class="ttd3">
        
      </td>
      <td class="ttd3">
        
      </td>
      <td class="ttd3">
        Dokter
        <br>
        <br>
        <br>
        <br>
        (....................................................)<br>
        Tanda Tangan dan Nama Terang
      </td>
    </tr>  
  </table>

</body>

<html>