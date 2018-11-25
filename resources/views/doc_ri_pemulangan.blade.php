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

  <h2 align="center">RENCANA PEMULANGAN</h2>
  <h2 align="center" style="padding-top:-20px">(DISCHARGE PLANNING)</h2><br>
   
  <div style="font-size: 85%;">  
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Diagnosa Medis
          </td>    
          <td class="konten_s_answer">  
            : {{$diagnosis_medis}}
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
      </tbody>
    </table> 
  </div>

  <br>
  <h4>SAAT MRS / ON ADMISSION</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p>Tanggal / Jam MRS: 20:20</p>
    <p>Alasan MRS : alasannya adalah</p>
    <p>Tanggal / Jam dilakukan Perencanaan Pemulangan Pasien (Discharge Planning) : </p>
    <p>Estimasi tanggal pemulangan pasien : </p>
    <p>Nama Perawat : Ira</p>
  </div>

  <br>
  <h4>KETERANGAN RENCANA PEMULANGAN</h4>
  <hr class="limit">
    <div style="font-size: 85%;">  
    <p class="list">Pengaruh Rawat inap Terhadap : </p>
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;Pasien dan Keluarga Pasien
          </td>    
          <td class="konten_s_answer">  
            : {{$a1}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;Pekerjaan 
          </td>    
          <td class="konten_s_answer">  
            : {{$a2}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;Keuangan 
          </td>    
          <td class="konten_s_answer">  
            : {{$a3}}
          </td>                
        </tr>
      </tbody>
    </table>
    <p>Antisipasi terhadap masalah saat pulang : {{$a4}}, {{$keterangan_a4}}</p>
    <p>Bantuan diperlukan dalam hal : </b></p>
    <ul>
      <li><?php if(isset($bantuan[1])) echo "minum obat"; ?></li>
      <li><?php if(isset($bantuan[2])) echo "makan"; ?></li>
      <li><?php if(isset($bantuan[3])) echo "menyipakan makanan"; ?></li>
      <li><?php if(isset($bantuan[4])) echo "edukasi kesehatan"; ?></li>
      <li><?php if(isset($bantuan[5])) echo "mandi"; ?></li>
      <li><?php if(isset($bantuan[6])) echo "diet"; ?></li>
      <li><?php if(isset($bantuan[7])) echo "berpakaian"; ?></li>
      <li><?php if(isset($bantuan[8])) echo "transportasi"; ?></li>
    </ul>
    <div class="row">
      <div class="column">
        <p>Adakah yang membantu keperluan tersebut di atas?</p>
      </div>
      <div class="column">
        <p>: {{$a5}}, {{$keterangan_a5}}</p>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <p>Apakah pasien hidup/tinggal sendiri setelah keluar dari rumah sakit?</p>
      </div>
      <div class="column">
        <p>: {{$a6}}, {{$keterangan_a6}}</p>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <p>Apakah pasien menggunakan peralatan medis di rumah setelah keluar rumah sakit (cateter, NGT, double lumen, oksigen)?</p>
      </div>
      <div class="column">
        <p>: {{$a7}}, {{$keterangan_a7}}</p>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <p>Apakah pasien memerlukan alat bantu setelah keluar dari rumah sakit (tongkat, kursi roda, walker, dll)?</p>
      </div>
      <div class="column">
        <p>: {{$a8}}, {{$keterangan_a8}}</p>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <p>Apakah memerlukan bantuan/peralatan medis di rumah setelah keluar rumah sakit (homecare, home visit)?</p>
      </div>
      <div class="column">
        <p>: {{$a9}}, {{$keterangan_a9}}</p>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <p>Apakah pasien bermasalah dalam memenuhi kebutuhan pribadinya setelah keluar dari rumah sakit (makan,minum, toileting, dll)?</p>
      </div>
      <div class="column">
        <p>: {{$a10}}, {{$keterangan_a10}}</p>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <p>Apakah pasien memiliki nyeri kronis dan kelelahan setelah keluar dari rumah sakit?</p>
      </div>
      <div class="column">
        <p>: {{$a11}}, {{$keterangan_a11}}</p>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <p>Apakah pasien dan keluargag memmerlukan edukasi kesehatan setelah keluar dari rumah sakit (obat-obatan, nyeri, diit, mencari pertolongan , follow up, dll)?</p>
      </div>
      <div class="column">
        <p>: {{$a12}}, {{$keterangan_a12}}</p>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <p>Apakah pasien dan keluarga memerlukan keterampilan khusus setelah keluar dari rumah sakit (perawatan luka, injeksi, dll)?</p>
      </div>
      <div class="column">
        <p>: {{$a13}}, {{$keterangan_a13}}</p>
      </div>
    </div>  
  </div>

</body>

<html>