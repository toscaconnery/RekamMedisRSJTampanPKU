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

<h2 align="center" style="font-size:100%">RENCANA TINDAKAN KEPERAWATAN NAPZA</h2><br>

  <table style="font-size: 70%;">
    <tbody>
      <tr>
        <td class="contain" width="20%" style="padding:0px">
          Tanggal Pengkajian 
        </td>    
        <td class="contain" style="padding:0px">  
          : {{$tanggal_pengkajian}}
        </td>                
      </tr>      
      <tr>
        <td class="contain" style="padding:0px">
          Jam Pengkajian 
        </td>    
        <td class="contain" style="padding:0px">  
          : {{$jam_pengkajian}}
        </td>                
      </tr>
      <tr>
        <td class="contain" style="padding:0px">
          Tingkat Ketergantungan
        </td>    
        <td class="contain" style="padding:0px">  
          : {{$tk}}
        </td>                
      </tr>
    </tbody>
  </table>
<br>
<table>
  <tbody>
    <tr>
     <td class="box" width="25%" style="vertical-align:top;padding-bottom:4%"><b>Diagnosis : </b>Gangguan Pola Tidur</th>
     <td class="box" width="25%" style="vertical-align:top"><b>Diagnosis : </b>Gangguan Rasa Nyaman</th>
     <td class="box" width="25%" style="vertical-align:top"><b>Diagnosis : </b>Koping Individu tidak efektif : Ketidakmampuan mengontrol keinginan untuk menggunakan zat kembali <br><br></th>
     <td class="box" width="25%"  style="vertical-align:top"><b>Diagnosis : </b>Koping Keluarga tidak Efektif</th>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td class="box" style="vertical-align:top;padding-bottom:2%">
        <b>Tujuan : </b> Tidur Cukup
        <br><br><br>
        Tindakan Mandiri:<br>
        <table>
          <tbody>
            <?php if(isset($pola_tidur[1])) echo 
              '<tr>
                <td style="vertical-align:top">1. </td>
                <td>Kaji pola tidur</td>
              </tr>'
            ?>
            <?php if(isset($pola_tidur[2])) echo 
              '<tr>
                <td style="vertical-align:top">2. </td>
                <td>Kaji pengantar tidur</td>
              </tr>'
            ?>
            <?php if(isset($pola_tidur[3])) echo 
            '<tr>
              <td style="vertical-align:top">3. </td>
              <td>Kaji penyebab sulit tidur</td>
            </tr>'
            ?>
            <?php if(isset($pola_tidur[4])) echo 
            '<tr>
              <td style="vertical-align:top">4. </td>
              <td>Jelaskan hal-hal yang dapat mengganggu tidur</td>
            </tr>'
            ?>
            <?php if(isset($pola_tidur[5])) echo 
            '<tr>
              <td style="vertical-align:top">5. </td>
              <td>Jelaskan perubahan pola tidur (sulit memulai tidur, sering terbangun, tidak segar ketika bangun tidur)</td>
            </tr>'
            ?>
            <?php if(isset($pola_tidur[6])) echo 
            '<tr>
              <td>6. </td>
              <td>Lakukan relaxasi</td>
            </tr>'
            ?>
            <?php if(isset($pola_tidur[7])) echo 
            '<tr>
              <td style="vertical-align:top">7. </td>
              <td>Lakukan pengantar tidur (membaca, mendengar musik)</td>
            </tr>'
            ?>
            <?php if(isset($pola_tidur[8])) echo 
            '<tr>
              <td style="vertical-align:top">8. </td>
              <td>Tata ruangan nyaman (suhu, cahaya, suara)</td>
            </tr>'
            ?>
          </tbody>
        </table>
        <br>
        <b>Tindakan Kolaborasi : </b> <br>Minum Obat secara teratur Pemberian Analgesik<br>
      </td>
      
      <td class="box" style="vertical-align:top;padding-bottom:2%">
        <b>Tujuan : </b> Tidur Cukup
        <br><br><br>
        Tindakan Mandiri:<br>
        <table>
          <tbody>
            <?php if(isset($nyeri[1])) echo 
            '<tr>
              <td style="vertical-align:top">1. </td>
              <td>Kaji skala nyeri</td>
            </tr>'
            ?>
            <?php if(isset($nyeri[2])) echo 
            '<tr>
              <td style="vertical-align:top">2. </td>
              <td>Kaji lama, frekuensi, intensitas, lokasi, karakteristik nyeri</td>
            </tr>'
            ?>
            <?php if(isset($nyeri[3])) echo 
            '<tr>
              <td style="vertical-align:top">3. </td>
              <td>Penyebab nyeri</td>
            </tr>'
            ?>
            <?php if(isset($nyeri[4])) echo 
            '<tr>
              <td style="vertical-align:top">4. </td>
              <td>Kaji fakta yang menghambat pasien berhenti</td>
            </tr>'
            ?>
            <?php if(isset($nyeri[5])) echo 
            '<tr>
              <td style="vertical-align:top">5. </td>
              <td>Jelaskan cara mengatasi faktor penghambat untuk berhenti</td>
            </tr>'
            ?>
            <?php if(isset($nyeri[6])) echo 
            '<tr>
              <td style="vertical-align:top">6. </td>
              <td>Jelaskan cara-cara untuk berhenti (menghindar, mengalihkan, menolak)</td>
            </tr>'
            ?>
            <?php if(isset($nyeri[7])) echo 
            '<tr>
              <td style="vertical-align:top">7. </td>
              <td>Motivasi untuk rehabilitasi</td>
            </tr>'
            ?>
          </tbody>
        </table>
        
        <br>
        <b>Tindakan Kolaborasi : </b> <br>Minum Obat secara teratur Pemberian Analgesik<br>
      </td>

       <td class="box" style="vertical-align:top;padding-bottom:2%">
        <b>Tujuan : </b> Mampu Mengurangi keinginan menggunakan Napza
        <br><br>
        Tindakan Mandiri:<br>
        <table>
          <tbody>
            <?php if(isset($individu[1])) echo 
            '<tr>
              <td style="vertical-align:top">1. </td>
              <td>Kaji penyebab ketergantungan</td>
            </tr>'
            ?>
            <?php if(isset($individu[2])) echo 
            '<tr>
              <td style="vertical-align:top">2. </td>
              <td>Kaji jenis Napza</td>
            </tr>'
            ?>
            <?php if(isset($individu[3])) echo 
            '<tr>
              <td style="vertical-align:top">3. </td>
              <td>Kaji motivasi pasien berhenti</td>
            </tr>'
            ?>
            <?php if(isset($individu[4])) echo 
            '<tr>
              <td style="vertical-align:top">4. </td>
              <td>Kaji fakta yang menghambat pasien berhenti</td>
            </tr>'
            ?>
            <?php if(isset($individu[5])) echo 
            '<tr>
              <td style="vertical-align:top">5. </td>
              <td>Jelaskan cara mengatasi faktor penghambat untuk berhenti</td>
            </tr>'
            ?>
            <?php if(isset($individu[6])) echo 
            '<tr>
              <td style="vertical-align:top">6. </td>
              <td>Jelaskan cara-cara untuk berhenti (menghindar, mengalihkan, menolak)</td>
            </tr>'
            ?>
            <?php if(isset($individu[7])) echo 
            '<tr>
              <td style="vertical-align:top">7. </td>
              <td>Motivasi untuk rehabilitasi</td>
            </tr>'
            ?> 
          </tbody>
        </table>
        <br>
        <b>Tindakan Kolaborasi : </b> <br>Konseling / Psikoterapi<br>
      </td>

       <td class="box" style="vertical-align:top;padding-bottom:2%">
        <b>Tujuan : </b> Mampu mengurangi keinginan menggunakan Napza
        <br><br>
        Tindakan Mandiri:<br>
        <table>
          <tbody>
            <?php if(isset($keluarga[1])) echo 
            '<tr>
              <td style="vertical-align:top">1. </td>
              <td>Kaji pengetahuan keluarga tentang ketergantungan Napza</td>
            </tr>'
            ?>
            <?php if(isset($keluarga[2])) echo 
            '<tr>
              <td style="vertical-align:top">2. </td>
              <td>Jelaskan tentang gejala putus Zat</td>
            </tr>'
            ?>
            <?php if(isset($keluarga[3])) echo 
            '<tr>
              <td style="vertical-align:top">3. </td>
              <td>Jelaskan proses pemulihan</td>
            </tr>'
            ?>
            <?php if(isset($keluarga[4])) echo 
            '<tr>
              <td style="vertical-align:top">4. </td>
              <td>Kaji komunikasi dalam keluarga</td>
            </tr>'
            ?>
            <?php if(isset($keluarga[51])) echo 
            '<tr>
              <td style="vertical-align:top">5. </td>
              <td>Jelaskan komunikasi efektif</td>
            </tr>'
            ?>
            <?php if(isset($keluarga[6])) echo 
            '<tr>
              <td style="vertical-align:top">6. </td>
              <td>Kaji Sikap Keluarga</td>
            </tr>'
            ?>
            <?php if(isset($keluarga[7])) echo 
            '<tr>
              <td style="vertical-align:top">7. </td>
              <td>Jelaskan Peran dan fungsi keluarga mengatasi ketergantungan pasien</td>
            </tr>'
            ?>
            <?php if(isset($keluarga[8])) echo 
            '<tr>
              <td style="vertical-align:top">7. </td>
              <td>Jelaskan obat-obatan yang diminum pasien untuk mengurangi gejala putus asa</td>
            </tr>'
            ?>
          </tbody>
        </table>
        <br>
        <b>Tindakan Kolaborasi : </b> <br>Konseling Keluarga<br>
      </td>

    </tr>
  </tbody>
</table>

</body>
<html>