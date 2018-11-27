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

<h2 align="center" style="font-size:100%">RENCANA TINDAKAN KEPERAWATAN INTENSIF<br>RESIKO BUNUH DIRI</h2><br>

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
          "<li>Tempatkan di tempat yang mudah diawasi</li>";
          ?>
          <?php if(isset($ti1[2])) echo 
          "<li>Awasi kondisi pasien dengan ketat</li>";
          ?>
          <?php if(isset($ti1[3])) echo 
          "<li>Observasi variatif</li>";
          ?>
          <?php if(isset($ti1[4])) echo 
          "<li>Berikan psikofarmaka</li>";
          ?>
          <?php if(isset($ti1[5])) echo 
          "<li>Pertimbangkan mengusulkan</li>";
          ?>
          <?php if(isset($ti1[6])) echo 
          "<li>ECT jika perlu</li>";
          ?>
        </ul>
      </td>
      <td class="box">
        <ul>
          <?php if(isset($ti2[1])) echo 
          "<li>Dengarkan keluhan pasien tanpa menghakimi</li>";
          ?>
          <?php if(isset($ti2[2])) echo 
          "<li>Buat kontrak keamanan</li>";
          ?>
          <?php if(isset($ti2[3])) echo 
          "<li>Tingkatkan harga diri pasien</li>";
          ?>
          <?php if(isset($ti2[4])) echo 
          "<li>Kerahkan dukungan sosial</li>";
          ?>
          <?php if(isset($ti2[5])) echo 
          "<li>Awasi dengan ketat</li>";
          ?>
          <?php if(isset($ti2[6])) echo 
          "<li>Beri psikofarmaka: anti depresan oral</li>";
          ?>
        </ul>
      </td>
      <td class="box">
        <ul>
          <?php if(isset($ti3[1])) echo 
          "<li>Dengarkan keluhan pasien</li>";
          ?>
          <?php if(isset($ti3[2])) echo 
          "<li>Latih cara mengendalikan dorongan bunuh diri</li>";
          ?>
          <?php if(isset($ti3[3])) echo 
          "<li>Awasi dengan ketat</li>";
          ?>
           <?php if(isset($ti3[4])) echo 
          "<li>Pertahankan pemberian psikofarmaka oral: anti depresan</li>";
          ?>
        </ul>
      </td>
    </tr>
    
  </tbody>
</table>

</body>
<html>