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

<h2 align="center" style="font-size:100%">RENCANA TINDAKAN KEPERAWATAN INTENSIF<br>PERILAKU KEKERASAN</h2><br>

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
          "<li>PKendalikan secara verbal</li>";
          ?>
          <?php if(isset($ti1[2])) echo 
          "<li>Pengikatan atau isolasi</li>";
          ?>
          <?php if(isset($ti1[3])) echo 
          "<li>Psikofarmaka parenteral: anti psikotik</li>";
          ?>
        </ul>
      </td>
      <td class="box">
        <ul>
          <?php if(isset($ti2[1])) echo 
          "<li>Dengarkan keluhan pasien tanpa menghakimi</li>";
          ?>
          <?php if(isset($ti2[2])) echo 
          "<li>Latih cara fisik mengendalikan marah: Nafas dalam</li>";
          ?>
          <?php if(isset($ti2[3])) echo 
          "<li>Beri psikofarmaka: antipsikotik oral</li>";
          ?>
        </ul>
      </td>
      <td class="box">
        <ul>
          <?php if(isset($ti3[1])) echo 
          "<li>Dengarkan keluhan pasien</li>";
          ?>
          <?php if(isset($ti3[2])) echo 
          "<li>Latih cara mengendalikan marah dengan cara verbal, spiritual</li>";
          ?>
          <?php if(isset($ti3[3])) echo 
          "<li>Pertahankan psikofarmaka oral: antipsikotik</li>";
          ?>
        </ul>
      </td>
    </tr>
  </tbody>
</table>

</body>
<html>