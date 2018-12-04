<?php 
header('Content-Type: application/pdf');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<h2 align="center" style="font-size:100%;">LEMBAR RIWAYAT PENGGUNAAN OBAT <br> (REKONSILIASI OBAT)</h2>
<div class="row">
  <table>
    <tr>
      <td class="konten_question">Tanggal Masuk</td>
      <td class="konten_answer">: {{$field1}}</td>
    </tr>
    <tr>
      <td class="konten_question">Nomor Farmasi</td>
      <td class="konten_answer">: {{$field2}}</td>
    </tr>
    <tr>
      <td class="konten_question">Dokter Ruangan</td>
      <td class="konten_answer">: {{$field3}}</td>
    </tr>
    <tr>
      <td class="konten_question" colspan="2"><?php if(isset($macam_kasus[1])) echo 'Tidak terdapat alergi'; else echo 'Riwayat Alergi/intoleransi (spesifikasi')?></td>
    </tr>
  </table>
</div>

<table style="margin-top:10px;">
  <tbody>
    <td class="default" colspan="11"> </td>
  </tbody>
  <thead>
    <tr>
      <th class="default" colspan="11" style="text-align:left;padding-left:0.5%" bgcolor="#C0C0C0">OBAT RESEP</th>
    </tr>
    <tr>
      <th class="default" style="width:10%;">Nama Generik</th>
      <th class="default" style="width:13%;">Nama Dagang</th>
      <th class="default" style="width:10%;">Regimen</th>
      <th class="default" style="width:10%;">Sumber Obat</th>
      <th class="default" style="width:10%;">Tgl. Mulai</th>
      <th class="default" style="width:10%;">Tgl. Stop</th>
      <th class="default" style="width:10%;">Jml Obat Tersisa</th>
      <th class="default" style="width:10%;">Status Obat<br>Saat Admisi</th>
      <th class="default" style="width:10%;">Status Obat<br>Saat Pulang</th>
      <th class="default" width="15%">Catatan</th>
    </tr>
  </thead>
  <tbody>
    @php
      $idx_resep = 0;
    @endphp
    @foreach($resep as $r)
    @php
      $idx_resep += 1;
    @endphp
    <tr id="form_resep_1">
      <td class="default"> {{$r[0]}} </td>
      <td class="default"> {{$r[1]}} </td>
      <td class="default"> {{$r[2]}} </td>
      <td class="default"> {{$r[3]}} </td>
      <td class="default"> {{$r[4]}} </td>
      <td class="default"> {{$r[5]}} </td>
      <td class="default"> {{$r[6]}} </td>
      <td class="default"> {{$r[7]}} </td>
      <td class="default"> {{$r[8]}} </td>
      <td class="default"> {{$r[9]}} </td>
    </tr>
    @endforeach
  </tbody>
</table>

<table style="margin-top:0px;">
  <tbody>
    <td class="default" colspan="11"> </td>
  </tbody>
  <thead>
    <tr>
      <th class="default" colspan="11" style="text-align:left;padding-left:0.5%;" bgcolor="#C0C0C0">OBAT NON RESEP (contoh : produk OTC, herbal, dll)</th>
    </tr>
    <tr>
      <th class="default" style="width:10%;">Nama Generik</th>
      <th class="default" style="width:13%;">Nama Dagang</th>
      <th class="default" style="width:10%;">Regimen</th>
      <th class="default" style="width:10%;">Sumber Obat</th>
      <th class="default" style="width:10%;">Tgl. Mulai</th>
      <th class="default" style="width:10%;">Tgl. Stop</th>
      <th class="default" style="width:10%;">Jml Obat Tersisa</th>
      <th class="default" style="width:10%;">Status Obat<br>Saat Admisi</th>
      <th class="default" style="width:10%;">Status Obat<br>Saat Pulang</th>
      <th class="default" width="15%">Catatan</th>
    </tr>
  </thead>
  <tbody>
    @php
      $idx_nonresep = 0;
    @endphp
    @foreach($nonresep as $n)
    <tr id="form_non_resep_1">
      @php
        $idx_nonresep += 1;
      @endphp

      <td class="default"> {{$n[0]}} </td>
      <td class="default"> {{$n[1]}} </td>
      <td class="default"> {{$n[2]}} </td>
      <td class="default"> {{$n[3]}} </td>
      <td class="default"> {{$n[4]}} </td>
      <td class="default"> {{$n[5]}} </td>
      <td class="default"> {{$n[6]}} </td>
      <td class="default"> {{$n[7]}} </td>
      <td class="default"> {{$n[8]}} </td>
      <td class="default"> {{$n[9]}} </td>
    </tr>
    @endforeach
  </tbody>
  <thead>
    <tr>
      <th class="default" colspan="4" bgcolor="#C0C0C0" style="text-align:center;">Sumber Informasi Obat</th>
      <th class="default" colspan="4" bgcolor="#C0C0C0" style="text-align:center;">Daftar Obat Dibuat Oleh:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="default" colspan="4">Status Pasien di Medical Record: {{$field5}}</td>
    </tr>
    <tr>
      <td class="default" colspan="4" style="border-bottom:0px">
        Pasien/Keluarga Pasien
      </td>
      <td class="default" colspan="3">Telepon</td>
    </tr>
    <tr>
      <td class="default" colspan="2" style="border-top:0px;border-right:0px;">
        Nama: {{$field6}}
      </td>
      <td class="default" colspan="2" style="border-top:0px;border-left:0px;">
        No.Telp: {{$field7}}
      </td>
      <td class="default" colspan="5" rowspan="4" style="border:0px;padding-left:4%;vertical-align:top;padding-top:1%;">
        Keterangan;
        <br>Formulir diisi dengan lengkap : 
        <br>L : Lanjut
      </td>
    </tr>
    <tr>
      <td class="default" colspan="4" style="border-bottom:0px">
        Apotek di luar Rumah Sakit Jiwa Tampan
      </td>
    </tr>
    <tr>
      <td class="default" colspan="2" style="border-top:0px;border-right:0px;">
        Nama: {{$field8}}
      </td>
      <td class="default" colspan="2" style="border-top:0px;border-left:0px;">
        No.Telp: {{$field9}}
      </td>
    </tr>
    <tr>
      <td class="default" colspan="4">
        <?php if($field10) echo 'Lainnya, '.$field10.' '; ?> 
      </td>
    </tr>
  </tbody>
</table>

</body>

<html>