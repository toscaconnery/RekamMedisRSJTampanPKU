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

  <h2 align="center">RESUME RAWAT JALAN</h2><br>


  <table>
    <thead>
      <tr>
        <th class="big-box" width="5%">No.</th>
        <th class="big-box" width="10%">Tanggal<br>Berkunjung</th>
        <th class="big-box" width="25%">Diagnosis/prosedur</th>
        <th class="big-box" width="10%">Obat-Obatan</th>
        <th class="big-box" width="25%">Riwayat Rawat Inap <br>& Tindakan Sejak <br>Kunjungan Terakhir</th>  
        <th class="big-box" width="25%">Nama Jelas dan<br> Tanda Tangan Petugas<br> Kesehatan</th>
        <th class="big-box" width="25%">Action</th>
      </tr>
    </thead>
    <tbody>
      @php
        $idx = 1;
      @endphp
      @foreach($pasien as $p)
        <tr>
          <td class="big-box">{{$idx}}.</td>
          <td class="big-box">{{$p['tanggal']}}</td>
          <td class="big-box">{{$p['diagnosis_prosedur']}}</td>
          <td class="big-box">{{$p['kode_icd']}}</td>
          <td class="big-box">{{$p['obat']}}</td>
          <td class="big-box">{{$p['riwayat']}}</td>
          <td class="big-box">{{$p['nama_petugas']}}</td>
          <td>
          </td>
        </tr>
        @php
          $idx += 1;
        @endphp
      @endforeach
    </tbody>
  </table>

</body>

<html>