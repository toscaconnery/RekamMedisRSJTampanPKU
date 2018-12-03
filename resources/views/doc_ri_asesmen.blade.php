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


  <h2 align="center">ASESMEN AWAL PASIEN RAWAT INAP</h2><br>
  
  <p><b>Tanggal diperiksa:</b> {{$tanggal_diperiksa}}</p>
  <p><b>Jam diperiksa:</b> {{$jam_diperiksa}}</p>

  <h4>DATA PASIEN</h4>
  <div style="font-size: 85%;">  
    <div class="row">
      <div class="column">
        <p>Nadi : {{$nadi}} x/mnt</p>
        <p>TD : {{$td}} mmHG</p>
        <p>TB : {{$tb}} cm</p>
      </div>
      <div class="column">
        <p>BB : {{$bb}} Kg</p>
        <p>Pernafasan : {{$napas}} x/mnt</p>
        <p>Suhu : {{$suhu}} <sup>o</sup>C</p>
      </div>
    </div> 
     <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Kondisi saat masuk
          </td>    
          <td class="konten_s_answer">  
            : {{$kondisi}} <?php if($kondisi=='3') echo 'Lainnya, '.$kondisi_ket.'' ?>
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Asal Pasien 
          </td>    
          <td class="konten_s_answer">  
            : {{$asal}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Dokter Pemeriksa
          </td>    
          <td class="konten_s_answer">  
            : {{$dokter_pemeriksa}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Dokter Keluarga
          </td>    
          <td class="konten_s_answer">  
            : {{$dokter_keluarga}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Diagnosis Masuk
          </td>    
          <td class="konten_s_answer">  
            : {{$diagnosis_masuk}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            DPJP
          </td>    
          <td class="konten_s_answer">  
            : {{$dpjp}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Alergi Obat
          </td>    
          <td class="konten_s_answer">  
            : {{$alergi}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Jenis Reaksi
          </td>    
          <td class="konten_s_answer">  
            : {{$jenis_reaksi}}
          </td>                
        </tr>
      </tbody>
    </table>
    <div class="row">
      <div class="column">
        <p><b>Barang berharga :</b> - </p>
        <ul>
          <?php 
            if(isset($macam_kasus[1])) echo 
            '<li>
              Keinginan sendiri
            </li>';
            if(isset($macam_kasus[2])) echo 
            '<li>
              Paksaan Orang Tua
            </li>';
            if(isset($macam_kasus[3])) echo 
            '<li>
              Rujukan Praktek Dokter
            </li>';
            if(isset($macam_kasus[4])) echo 
            '<li>
              Rujukan Instansi Lain
            </li>';
            if(isset($macam_kasus[5])) echo 
            '<li>
              Kiriman Kepolisian
            </li>';
            if(isset($macam_kasus[6])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
            if(isset($macam_kasus[7])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
            if(isset($macam_kasus[8])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
          ?>
        </ul> 
      </div>
      <div class="column">
        <p><b>Tindakan : </b></p>
        <ul>
          <?php 
            if(isset($macam_kasus[1])) echo 
            '<li>
              Keinginan sendiri
            </li>';
            if(isset($macam_kasus[2])) echo 
            '<li>
              Paksaan Orang Tua
            </li>';
            if(isset($macam_kasus[3])) echo 
            '<li>
              Rujukan Praktek Dokter
            </li>';
            if(isset($macam_kasus[4])) echo 
            '<li>
              Rujukan Instansi Lain
            </li>';
            if(isset($macam_kasus[5])) echo 
            '<li>
              Kiriman Kepolisian
            </li>';
            if(isset($macam_kasus[6])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
            if(isset($macam_kasus[7])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
            if(isset($macam_kasus[8])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
          ?>
        </ul>
      </div>
    </div> 
    
    <p><b> Alat bantu yang digunakan : </b></p>
    <ul>
          <?php 
            if(isset($macam_kasus[1])) echo 
            '<li>
              Keinginan sendiri
            </li>';
            if(isset($macam_kasus[2])) echo 
            '<li>
              Paksaan Orang Tua
            </li>';
            if(isset($macam_kasus[3])) echo 
            '<li>
              Rujukan Praktek Dokter
            </li>';
            if(isset($macam_kasus[4])) echo 
            '<li>
              Rujukan Instansi Lain
            </li>';
            if(isset($macam_kasus[5])) echo 
            '<li>
              Kiriman Kepolisian
            </li>';
            if(isset($macam_kasus[6])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
            if(isset($macam_kasus[7])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
            if(isset($macam_kasus[8])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
          ?>
        </ul>
  </div>
  
  <h4>ASESMEN KEPERAWATAN</h4>
  <div style="font-size: 85%;">  
    <p><b>1. Riwayat Pasien (Penyakit utama/operasi/cedera mayor) : </b></p>
    <ul>
          <?php 
            if(isset($macam_kasus[1])) echo 
            '<li>
              Keinginan sendiri
            </li>';
            if(isset($macam_kasus[2])) echo 
            '<li>
              Paksaan Orang Tua
            </li>';
            if(isset($macam_kasus[3])) echo 
            '<li>
              Rujukan Praktek Dokter
            </li>';
            if(isset($macam_kasus[4])) echo 
            '<li>
              Rujukan Instansi Lain
            </li>';
            if(isset($macam_kasus[5])) echo 
            '<li>
              Kiriman Kepolisian
            </li>';
            if(isset($macam_kasus[6])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
            if(isset($macam_kasus[7])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
            if(isset($macam_kasus[8])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
          ?>
        </ul>
    
    <p><b>deskripsi : </b></p>
    <p>{{$friwayatpasien2}}</p>

    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
           Alkohol/Obat
          </td>    
          <td class="konten_s_answer">  
            : <?php if($friwayatpasien3 == '0') echo 'Tidak'; else if($friwayatpasien3 == '1') echo 'Ya, Jenis : '.$friwayatpasien4.', jumlah/hari : '.$friwayatpasien5.''; if($friwayatpasien6=='1') 'echo berhenti'; ?> 
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Merokok
          </td>    
          <td class="konten_s_answer">  
            : <?php if($friwayatpasien7 == '0') echo 'Tidak'; else if($friwayatpasien7 == '1') echo 'Ya, Jenis : '.$friwayatpasien8.', jumlah/hari : '.$friwayatpasien9.''; if($friwayatpasien10=='1') 'echo berhenti'; ?> 
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Vaksinasi
          </td>  
          <td class="konten_s_answer">  
            : Influenza dalam 12 bulan terakhir - {{$friwayatpasien11}}<br>
            : Pneumonia dalam 5 tahun terakhir - {$friwayatpasien12}
          </td>                     
        </tr>
      </tbody>
    </table>

    <p><b>Trauma : </b>Aniaya fisik </p>
    <ul>
      <li>Usia :{{$friwayatpasien13}} </li>
      <li>Pelaku : </li>
      <li>Korban : </li>
      <li>Saksi : </li>
    </ul>
    
    <br>

    <p><b>Penjelasan : </b></p>
    <p>Penjelasannya adalah ...</p>

    <p><b>2. Riwayat Keluarga : </b></p>
    <ul>
          <?php 
            if(isset($macam_kasus[1])) echo 
            '<li>
              Keinginan sendiri
            </li>';
            if(isset($macam_kasus[2])) echo 
            '<li>
              Paksaan Orang Tua
            </li>';
            if(isset($macam_kasus[3])) echo 
            '<li>
              Rujukan Praktek Dokter
            </li>';
            if(isset($macam_kasus[4])) echo 
            '<li>
              Rujukan Instansi Lain
            </li>';
            if(isset($macam_kasus[5])) echo 
            '<li>
              Kiriman Kepolisian
            </li>';
            if(isset($macam_kasus[6])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
            if(isset($macam_kasus[7])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
            if(isset($macam_kasus[8])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
          ?>
        </ul>

    <p><b>Genogram : </b></p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <p><b>3. Psikososial : </b></p>

    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
           Status Pernikahaan
          </td>    
          <td class="konten_s_answer">  
            : {{$friwayatpsikososial1}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Keluarga
          </td>    
          <td class="konten_s_answer">  
            : Ada, tidak serumah 
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Tempat tinggal
          </td>    
          <td class="konten_s_answer">  
            : Rumah
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Pekerjaan
          </td>    
          <td class="konten_s_answer">  
            : Paruh waktu
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Aktivitas
          </td>    
          <td class="konten_s_answer">  
            : Mandiri
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Curiga Penganiayaan/ Penelantaran 
          </td>    
          <td class="konten_s_answer">  
            : Ya
          </td>                
        </tr>
      </tbody>
    </table>

    <p><b>Status Emosional :</b></p>
    <ul>
      <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($macam_kasus[3])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
        if(isset($macam_kasus[4])) echo 
        '<li>
          Rujukan Instansi Lain
        </li>';
        if(isset($macam_kasus[5])) echo 
        '<li>
          Kiriman Kepolisian
        </li>';
        if(isset($macam_kasus[6])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[7])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[8])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
      ?>
    </ul>

    <p><b>4. Keluarga Terdekat : </b></p>

    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
           Nama
          </td>    
          <td class="konten_s_answer">  
            : Ani Ananta 
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Hubungan
          </td>    
          <td class="konten_s_answer">  
            : {{$fkeluarga1}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            telepon
          </td>    
          <td class="konten_s_answer">  
            : {{$fkeluarga2}}
          </td>                
        </tr>
      </tbody>
    </table>

    <p><b>Informasi didapat dari :</b> {{$fkeluarga3}}</p>

    <p><b>5. Konsep Diri : </b></p>

    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
           Citra Diri
          </td>    
          <td class="konten_s_answer">  
            : {{$fkonsepdiri1}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Identitas Diri
          </td>    
          <td class="konten_s_answer">  
            : {{$fkonsepdiri2}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Peran
          </td>    
          <td class="konten_s_answer">  
            : {{$fkonsepdiri3}}
          </td>                
        </tr>
         <tr>
          <td class="konten_s_question">
            Ideal diri
          </td>    
          <td class="konten_s_answer">  
            : {{$fkonsepdiri4}}
          </td>                
        </tr>
         <tr>
          <td class="konten_s_question">
            Harga Diri
          </td>    
          <td class="konten_s_answer">  
            : {{$fkonsepdiri5}}
          </td>                
        </tr>
      </tbody>
    </table>

    <p><b>6.Hubungan Sosial : </b></p>

    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
           Orang yang berarti
          </td>    
          <td class="konten_s_answer">  
            : {{$fhubungansosial1}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Peran serta dalam kegiatan kelompok/Masyarakat
          </td>    
          <td class="konten_s_answer">  
            : {{$fhubungansosial2}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Hambatan dalam berhubungan dengan orang lain
          </td>    
          <td class="konten_s_answer">  
            : {{$fhubungansosial3}}
          </td>                
        </tr>
      </tbody>
    </table>

    <p><b>7. Spiritual : </b></p>

    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
           Nilai dan Keyakinan
          </td>    
          <td class="konten_s_answer">  
            : {{$fspiritual1}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Kegiatan Ibadah
          </td>    
          <td class="konten_s_answer">  
            : {{$fspiritual2}}
          </td>                
        </tr>
      </tbody>
    </table>

    <p><b>8. Penampilan : </b></p>
    <ul>
      <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($macam_kasus[3])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
      ?>
    </ul>
    <p>Penjelasan : ...</p>

    <p><b>9. Pembicaraan : </b></p>
    <ul>
      <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($macam_kasus[3])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
        if(isset($macam_kasus[4])) echo 
        '<li>
          Rujukan Instansi Lain
        </li>';
        if(isset($macam_kasus[5])) echo 
        '<li>
          Kiriman Kepolisian
        </li>';
        if(isset($macam_kasus[6])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[7])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[8])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
      ?>
    </ul>
    <p>Penjelasan : ...</p>

    <p><b>10. Aktivitas Motorik : </b></p>
    <ul>
      <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($macam_kasus[3])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
        if(isset($macam_kasus[4])) echo 
        '<li>
          Rujukan Instansi Lain
        </li>';
        if(isset($macam_kasus[5])) echo 
        '<li>
          Kiriman Kepolisian
        </li>';
        if(isset($macam_kasus[6])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[7])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[8])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[8])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
      ?>
    </ul>
    <p>Penjelasan : ...</p>

    <p><b>11. Alam Perasaan : </b></p>
    <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($macam_kasus[3])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
        if(isset($macam_kasus[4])) echo 
        '<li>
          Rujukan Instansi Lain
        </li>';
        if(isset($macam_kasus[5])) echo 
        '<li>
          Kiriman Kepolisian
        </li>';
        if(isset($macam_kasus[6])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
      ?>
    <p>Penjelasan : ...</p>

    <p><b>12. Afek : </b></p>
    <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($macam_kasus[3])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
        if(isset($macam_kasus[4])) echo 
        '<li>
          Rujukan Instansi Lain
        </li>';
      ?>
    <p>Penjelasan : ...</p>

    <p><b>13. Interaksi selama wawancara : </b></p>
    <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($macam_kasus[3])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
        if(isset($macam_kasus[4])) echo 
        '<li>
          Rujukan Instansi Lain
        </li>';
        if(isset($macam_kasus[5])) echo 
        '<li>
          Kiriman Kepolisian
        </li>';
        if(isset($macam_kasus[6])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
      ?>
    <p>Penjelasan : ...</p>

    <p><b>14. Persepsi : </b></p>
    <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($macam_kasus[3])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
        if(isset($macam_kasus[4])) echo 
        '<li>
          Rujukan Instansi Lain
        </li>';
        if(isset($macam_kasus[5])) echo 
        '<li>
          Kiriman Kepolisian
        </li>';
        if(isset($macam_kasus[6])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
      ?>
    <p>Penjelasan : ...</p>

    <p><b>15. Isi Pikir : </b></p>
    <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($macam_kasus[3])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
        if(isset($macam_kasus[4])) echo 
        '<li>
          Rujukan Instansi Lain
        </li>';
        if(isset($macam_kasus[5])) echo 
        '<li>
          Kiriman Kepolisian
        </li>';
        if(isset($macam_kasus[6])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[7])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[8])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[9])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[10])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[11])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($macam_kasus[12])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
        if(isset($macam_kasus[13])) echo 
        '<li>
          Rujukan Instansi Lain
        </li>';
        if(isset($macam_kasus[14])) echo 
        '<li>
          Kiriman Kepolisian
        </li>';
      ?>
    <p>Penjelasan : ...</p>

    <p><b>16. Arus Pikir : </b></p>
    <ul>
      <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($macam_kasus[3])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
        if(isset($macam_kasus[4])) echo 
        '<li>
          Rujukan Instansi Lain
        </li>';
        if(isset($macam_kasus[5])) echo 
        '<li>
          Kiriman Kepolisian
        </li>';
        if(isset($macam_kasus[6])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
      ?>
    </ul>
    <p>Penjelasan : ...</p>

    <p><b>17. Memori : </b></p>
    <ul>
      <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($macam_kasus[3])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
        if(isset($macam_kasus[4])) echo 
        '<li>
          Rujukan Instansi Lain
        </li>';
      ?>
    </ul>
    <p>Penjelasan : ...</p>

    <p><b>18. Tingkat konsentrasi dan berhitung : </b></p>
    <ul>
      <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($macam_kasus[3])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
      ?>
    </ul>
    <p>Penjelasan : ...</p>

    <p><b>19. Kemampuan Penilaian : </b></p>
    <ul>
      <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
      ?>
    </ul>
    <p>Penjelasan : ...</p>

    <p><b>20. Daya tilik diri (insight) : </b></p>
    <ul>
      <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
      ?>
    </ul>
    <p>Penjelasan : ...</p>

  </div>

  <h4>KEBUTUHAN KOMUNIKASI DAN PENGAJARAN</h4>
  <div style="font-size: 85%;">  
    <ul>
      <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($macam_kasus[3])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
        if(isset($macam_kasus[4])) echo 
        '<li>
          Rujukan Instansi Lain
        </li>';
        if(isset($macam_kasus[5])) echo 
        '<li>
          Kiriman Kepolisian
        </li>';
        if(isset($macam_kasus[6])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[7])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[8])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[8])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
      ?>
    </ul>

    <p><b>keyakinan dan nilai-nilai pasien/keluarga tentang penyakitnya : </b>{{$fkomunikasi1}} </p>
    
    <p><b>Bicara : </b> {{$fkomunikasi2}}</p>

    <p><b>bahasa Sehari-hari : </b>{{$fkomunikasi4}}</p>

    <p>Perlu Penterjemah : Tidak </p>

    <p>Bahasa Isyarat : Tidak</p>

    <p><b>Hambatan Edukasi : </b></p>
    <ul>
      <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($macam_kasus[3])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
        if(isset($macam_kasus[4])) echo 
        '<li>
          Rujukan Instansi Lain
        </li>';
        if(isset($macam_kasus[5])) echo 
        '<li>
          Kiriman Kepolisian
        </li>';
        if(isset($macam_kasus[6])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[7])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[8])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[8])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
      ?>
    </ul>
    <p><b>Cara Edukasi yang disukai : </b></p>
    <ul>
      <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($macam_kasus[3])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
        if(isset($macam_kasus[4])) echo 
        '<li>
          Rujukan Instansi Lain
        </li>';
        if(isset($macam_kasus[5])) echo 
        '<li>
          Kiriman Kepolisian
        </li>';
        if(isset($macam_kasus[6])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[7])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[8])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[8])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
      ?>
    </ul>

    <p>Tingkat Pendidikan : {{$fkomunikasi12}}</p>

    <p>pasien bersedia menerima informasi : {{$fkomunikasi13}}</p>

  </div>

  <h4>SCREENING GIZI</h4>
  <div style="font-size:85%">
    <p><b>TB : </b> {{$fgizi1}} cm </p>
    <p><b>BB : </b> {{$fgizi2}} kg </p>
    <p><b>IMT : - , Normal</b> </p>
  </div>

  <h4>PENILAIAN RISIKO JATUH</h4>
  <div style="font-size: 85%;">  
    <p><b>Edmunson (Jiwa) </b></p>
    <table>
    <tbody>
      <tr>
        <td class="konten_s_question">
          Usia <b>(Skor: 8)</b>
        </td>    
        <td class="konten_s_answer">  
          : Kurang dari 50 tahun
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Status Mental <b>(Skor: 12)</b>
        </td>    
        <td class="konten_s_answer">  
          : Agitasi/ansietas
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Eliminasi <b>(Skor: 10)</b>
        </td>    
        <td class="konten_s_answer">  
          : Eliminasi dengan bantuan
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Pengobatan <b>(Skor: 10)</b>
        </td>    
        <td class="konten_s_answer">  
          : Tanpa obat-obatan
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Diagnosa <b>(Skor: 12)</b>
        </td>    
        <td class="konten_s_answer">  
          : Dimensia/Delirium
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Ambulasi <b>(Skor: 10)</b>
        </td>    
        <td class="konten_s_answer">  
          : Vertigo/kelemahan
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Nutrisi <b>(Skor: 0)</b>
        </td>    
        <td class="konten_s_answer">  
          : Tidak ada kelainan dengan nafsu makan
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Gangguan pola tidur <b>(Skor: 8)</b>
        </td>    
        <td class="konten_s_answer">  
          : Tidak ada gangguan pola tidur
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Riwayat Jatuh <b>(Skor: 8)</b>
        </td>    
        <td class="konten_s_answer">  
          : Tidak ada riwayat jatuh
        </td>                
      </tr>
    </tbody>
  </table>
  <p>Total Skor : 78</p>

  <p><b>Tidak Beresiko : Skor < 90</b></p>
    <ol>
      <li>Orientasi pasien pada lingkungan kamar/bangsal</li>
      <li>Pastikan rem tempat tidur terkunci</li>
      <li>Pastikan bel terjangkau</li>
      <li>Singkirkan barang berbahaya terutama pada malam hari (kursi tambahan dan lain-lain)</li>
      <li>Minta persetujuan pasien agar lampu malam tetap menyala karena lingkungan masih asing</li>
      <li>Pastikan alat bantu jalan dalam jangkauan (bila menggunakan)</li>
      <li>Pastikan alas kaki tidak licin</li>
      <li>Pastikan kebutuhan pribadi dalam jangakauan</li>
      <li>Tempatkan meja pasien dengan baik agar tidak menghalangi</li>
      <li>Tempatkan pasien sesuai dengan tinggi badannya</li>
    </ol>
  </div>

  <h4>PENILAIAN TINGKAT NYERI</h4>
  <br>

  <img src="img/nyeri.jpg" alt="Smiley face" height="170" width="240">

  <div style="font-size: 85%;">  

    <p>Nyeri : {{fnyeri1}}</p>
      <div class="row">
        <div class="column">
          <p>Intensitas : {{$fnyeri2}}</p>
          <p>Jenis : {{fnyeri3}}</p>
        </div>
        <div class="column">
          <p>Lokasi Nyeri : {{$fnyeri4}}</p>
          <p>Terjadinya Nyeri: {{$fnyeri5}}</p>
        </div>
      </div>

      <p><b>Sifat Nyeri :</b> {{fnyeri6}}</p>

      <p><b>Kualitas Nyeri :</b> {{fnyeri7}}</p>

      <p><b>Faktor Pemberat :</b></p>
      <ul>
        <li>Cahaya</li>
        <li>Gerakan</li>
      </ul>

      <p><b>Faktor Peringan :</b></p>
      <ul>
        <li>Makan</li>
        <li>Sungi</li>
      </ul>

      <p><b>Efek Nyeri :</b></p>
      <ul>
      <?php 
        if(isset($macam_kasus[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($macam_kasus[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($macam_kasus[3])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
        if(isset($macam_kasus[4])) echo 
        '<li>
          Rujukan Instansi Lain
        </li>';
        if(isset($macam_kasus[5])) echo 
        '<li>
          Kiriman Kepolisian
        </li>';
        if(isset($macam_kasus[6])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[7])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[8])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
        if(isset($macam_kasus[8])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
      ?>
    </ul>

      <p><b>Obat obatan di rumah (daftar obat, dosis dan frekuensi, kapan terakhir kali dikonsumsi) :</b></p>
      <table class="tabel">
        <thead>
            <tr>   
                <th class="default3" data-field="name">Nama</th>
                <th class="default3" data-field="name">Dosis</th>
                <th class="default3" data-field="name">Kapan terakhir kali diberikan</th>
            </tr>    
        </thead>

        <tbody>
          @php
            $idx = 0;
          @endphp
          @foreach($obat as $o)
          @php
            $idx += 1;
          @endphp
          <tr id="form_{{$idx}}">
            <td style="text-align: center;padding-left:0px;" class="default3">
              {{$o['nama_obat']}}
            </td>
            <td class="default3">
              {{$o['dosis_obat']}}
            </td>
            <td class="default3">
              {{$o['terakhir_obat']}}
            </td>
          </tr>
          @endforeach
          <tr id="last_row">
            <input type="hidden" name="jumlah_form" id="jumlah_form" value="{{$idx}}">
            <td colspan="4">
            </td>
          </tr>
        </tbody>
    </table>

    <p><b>Resume:</b></p>
    <p>{{$resume}}</p>

  </div>


  <h4>DIAGNOSA KEPERAWATAN</h4>
  <div style="font-size: 85%;">  
    <p>Nyeri Kronis</p>
    <div class="row">
      <div class="column">
        <p><b>Diagnosa Keperawatan Umum :</b></p>
        <ul>
          <?php 
            if(isset($macam_kasus[1])) echo 
            '<li>
              Keinginan sendiri
            </li>';
            if(isset($macam_kasus[2])) echo 
            '<li>
              Paksaan Orang Tua
            </li>';
            if(isset($macam_kasus[3])) echo 
            '<li>
              Rujukan Praktek Dokter
            </li>';
            if(isset($macam_kasus[4])) echo 
            '<li>
              Rujukan Instansi Lain
            </li>';
            if(isset($macam_kasus[5])) echo 
            '<li>
              Kiriman Kepolisian
            </li>';
            if(isset($macam_kasus[6])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
            if(isset($macam_kasus[7])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
            if(isset($macam_kasus[8])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
            if(isset($macam_kasus[8])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
          ?>
        </ul>
      </div>
      <div class="column">
        <p><b>Diagnosa Keperawatan Jiwa :</b></p>
        <ul>
          <?php 
            if(isset($macam_kasus[1])) echo 
            '<li>
              Keinginan sendiri
            </li>';
            if(isset($macam_kasus[2])) echo 
            '<li>
              Paksaan Orang Tua
            </li>';
            if(isset($macam_kasus[3])) echo 
            '<li>
              Rujukan Praktek Dokter
            </li>';
            if(isset($macam_kasus[4])) echo 
            '<li>
              Rujukan Instansi Lain
            </li>';
            if(isset($macam_kasus[5])) echo 
            '<li>
              Kiriman Kepolisian
            </li>';
            if(isset($macam_kasus[6])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
            if(isset($macam_kasus[7])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
            if(isset($macam_kasus[8])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
            if(isset($macam_kasus[8])) echo 
            '<li>
              Lain-lain, '.$alasan_masuk_lainnya.'
            </li>';
          ?>
    </ul>
      </div>
    </div>
  </div>

    <br>
    <br>


    <div class="row">
      <div class="column">
        <p>Tanggal : {{$tanggal}}</p>
        <p>Jam : {{$jam}}</p>
        <p>Nama perawat : {{$nama_perawat}</p>
      </div>
      <div class="column">
        <p style="text-align: center;">Tanda Tangan</p>
      </div>
    </div>

  </div>
  <pagebreak>
  <h4>DATA MEDIS</h4><br>
  <div style="font-size: 85%;">  

  <p><b>Anamnesa :</b></p>
  <p>{{$anamnesa}}</p>

  </div>

  <h4>PEMERIKSAAN FISIK</h4>
  <div style="font-size: 85%;">  
    <br>
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            1. Kepala
          </td>    
          <td class="konten_s_answer">  
            : {{$anamnesa1}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            2. Leher
          </td>    
          <td class="konten_s_answer">  
            : {{$anamnesa2}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            3. Dada
          </td>    
          <td class="konten_s_answer">  
            : {{$anamnesa3}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp; a. Jantung
          </td>    
          <td class="konten_s_answer">  
            : {{$anamnesa4}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp; b. Paru-paru
          </td>    
          <td class="konten_s_answer">  
            : {{$anamnesa5}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            4. Perut
          </td>    
          <td class="konten_s_answer">  
            : {{$anamnesa6}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            5. Anggota gerak
          </td>    
          <td class="konten_s_answer">  
            : {{$anamnesa7}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Status Lokalis
          </td>    
          <td class="konten_s_answer">  
            : {{$anamnesa8}}
          </td>                
        </tr>

      </tbody>
    </table>
  </div>

  <h4>STATUS PSIKIATRIS</h4>
  <div style="font-size: 85%;">
  <br>
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            <b>1. Keadaan Umum</b>
          </td>    
          <td class="konten_s_answer">  
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;a. Penampilan
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri1}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;b. Kesadaran
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri2}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp; c. Orientasi
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri3}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp; d. Sikap & Tingkah Laku
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri4}}
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>2. Gangguan Berpikir</b>
          </td>    
          <td class="konten_s_answer">  
             : {{$psikiatri5}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;a. Proses Pikir
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri6}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;b. Bentuk Pikir
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri7}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;c. Isi Pikir
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri8}}
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>3. Alam Perasaan</b>
          </td>    
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;a. Mood
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri9}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;b. Afek
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri10}}
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>4. Persepsi</b>
          </td>    
          <td class="konten_s_answer">  
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;a. Halusinasi
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri11}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;b. Ilusi
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri12}}
          </td>                
        </tr>

         <tr>
          <td class="konten_s_question">
            <b>5. Fungsi Intelektual</b>
          </td>    
          <td class="konten_s_answer">  
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;a. Daya Konsentrasi
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri13}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;b. Daya Ingat
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri14}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;c. Pikiran Abstrak
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri15}}
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>6. Pengendalian Impuls</b> 
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri16}}
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>7. Daya Nilai</b>
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri17}}
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>8. Tilikan/Insight</b> 
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri18}}
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>9. Taraf dapat dipercaya</b>
          </td>    
          <td class="konten_s_answer">  
            : {{$psikiatri19}}
          </td>                
        </tr>
      </tbody>
    </table>  
  </div>

  <h4>PEMERIKSAAN PENUNJANG</h4>
  <br>
  <div style="font-size: 85%;">  
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
           Laboratorium
          </td>    
          <td class="konten_s_answer">  
            : {{$penunjang1}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            EKG
          </td>    
          <td class="konten_s_answer">  
            : {{$penunjang2}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Radiologi
          </td>    
          <td class="konten_s_answer">  
            : {{$penunjang3}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Lainnya
          </td>    
          <td class="konten_s_answer">  
            : {{$penunjang4}}
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <h4>INSTRUMEN PENILAIAN</h4>
  <div style="font-size: 85%;">
  <br>
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            PANSS EC Skor
          </td>    
          <td class="konten_s_answer">  
            : {{$penilaian1}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            GAFF Skor
          </td>    
          <td class="konten_s_answer">  
            : {{$penilaian2}}
          </td>                
        </tr>
      </tbody>
    </table>

  </div>

  <h4>DIAGNOSIS PSIKIATRI</h4>
  <div style="font-size: 85%;">
    <p>Axis 1 : {{$diagnosis1}} </p>
    <p>Axis 2 : {{$diagnosis2}} </p>
    <p>Axis 3 : {{$diagnosis3}} </p>
    <p>Axis 4 : {{$diagnosis4}} </p>
    <p>Axis 5 : {{$diagnosis5}} </p>
  </div>

  <h4>RENCANA TINDAKAN & TATA LAKSANA MEDIS</h4>
  <div style="font-size: 85%;">
    <p>Psikofarmaka : {{$rencana1}} </p>
    <p>Psikoterapi : {{$rencana2}} </p>
    <p>Lainnya : {{$rencana3}} </p>
  </div>

  <h4>INSTRUKSI</h4>
  <div style="font-size: 85%;">
    <p>{{$instruksi1}} 
    <?php if($instruksi1=='0') 
    {
      echo 'Boleh Pulang, jam keluar : '.$Instruksi2.', Tanggal : '.$Instruksi3.' </p>';
      if($instruksi4 == 'Ya')
      {
        echo '<p>Kontrol Klinik, Klinik '.$instruksi5.' tanggal '.$instruksi6.'</p>'
      }
      else
      {
        echo "<p>Kontrol Klinik, Tidak</p>";
      }
    }
    else
    {
      if($instruksi7=='1')
      {
          echo 'Dirawat di ruang Intensif'
      }
      else
      {
          echo 'Dirawat di ruang '.$instruksi8.''
      }
    }
     

     ?>
    
  </div>


    <br>
    <br>
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Tanggal
          </td>    
          <td class="konten_s_answer">  
            : {{$tanggal}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Jam
          </td>    
          <td class="konten_s_answer">  
            : {{$jam}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Nama Dokter
          </td>    
          <td class="konten_s_answer">  
            : {{$nama_dokter}}
          </td>                
        </tr>
      </tbody>
    </table>

    <div class="row">
      <div class="column">
        <p></p>
      </div>
      <div class="column">
        <p style="text-align: center;">Tanda Tangan</p>
      </div>
    </div>

</body>

<html>