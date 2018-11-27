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

<h2 align="center" style="font-size:100%">RENCANA TINDAKAN KEPERAWATAN INTENSIF<br>ISOLASI SOSIAL MENARIK DIRI</h2><br>

<div>  
   <table style="font-size: 70%;">
    <tbody>
      <tr>
        <td class="konten_s_question">
          Tanggal Pengkajian
        </td>    
        <td class="konten_s_answer">  
          : {{$tanggal_pengkajian}}
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Jam Pengkajian
        </td>    
        <td class="konten_s_answer">  
          : {{$jam_pengkajian}}
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Ruangan
        </td>    
        <td class="konten_s_answer">  
          : {{$ruangan}}
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Diagnosa Medis
        </td>    
        <td class="konten_s_answer">  
          : {{$diagnosa_medis}}
        </td>                
      </tr>
    </tbody>
  </table>
</div>

<br>

<table>
  <thead>
    <tr>
     <th class="box" width="33.33%" style="padding:1%">Tindakan Intensif I</th>
     <th class="box" width="33.33%" style="padding:1%">Tindakan Intensif II</th> 
     <th class="box" width="33.33%" style="padding:1%">Tindakan Intensif III</th> 
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="box">
        <ul>
          <?php if(isset($ti1[1])) echo 
          "<li>Penuhi kebutuhan dasar pasien (tidur makan, personal hyegene)</li>";
          ?>
          <?php if(isset($ti1[2])) echo 
          "<li>Kolaborasi dengan dokter untuk pemberian obat yang dibutuhkan pasien</li>";
          ?>
        </ul>
      </td>
      <td class="box">
        <ul>
          <?php if(isset($ti2[1])) echo 
          "<li>Kaji tingkat masah isolasi sosial pada pasien</li>";
          ?>
          <?php if(isset($ti2[2])) echo 
          "<li>Penuhi kebutuhan dasar (tidur,makan,personal hyegene)</li>";
          ?>
          <?php if(isset($ti2[3])) echo 
          "<li>Latih pasien berhubungan dengan perawat</li>";
          ?>
        </ul>
      </td>
      <td class="box">
        <ul>
          <?php if(isset($ti3[1])) echo 
          "<li>Bantu pasien mengenal penyebab isolasi</li>";
          ?>
          <?php if(isset($ti3[2])) echo 
          "<li>Bantu klien mengenal keuntungan berhubungan dengan orang lain</li>";
          ?>
          <?php if(isset($ti3[3])) echo 
          "<li>Bantu pasien mengenal kerugian bila tidak berhubungan dengan orang lain</li>";
          ?>
          <?php if(isset($ti3[4])) echo 
          "<li>Bantu pasien berinteraksi dengan orang lain secara bertahap</li>";
          ?>
        </ul>
      </td>
    </tr>
    
  </tbody>
</table>

</body>
<html>