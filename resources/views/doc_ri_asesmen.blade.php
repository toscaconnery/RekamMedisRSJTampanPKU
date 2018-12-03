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
  
  <p><b>Tanggal Diperiksa:</b> {{$tanggal_diperiksa}}</p>
  <p><b>Jam Diperiksa:</b> {{$jam_diperiksa}}</p>

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
        <p><b>Barang berharga :</b></p>
        <ul>
          <?php 
            if(isset($barang[1])) echo 
            '<li>
              Perhiasan
            </li>';
            if(isset($barang[2])) echo 
            '<li>
              Pakaian
            </li>';
            if(isset($barang[3])) echo 
            '<li>
              Lainnya, .'.$deskripsi_barang_berharga.'
            </li>';
          ?>
        </ul> 
      </div>
      <div class="column">
        <p><b>Tindakan : </b></p>
        <ul>
          <?php 
            if(isset($tindak[1])) echo 
            '<li>
              Kumpulkan dan Simpan
            </li>';
            if(isset($tindak[2])) echo 
            '<li>
              Lainnya, '.$tindakan_barang.'
            </li>';
          ?>
        </ul>
      </div>
    </div> 
    
    <p><b> Alat bantu yang digunakan : </b></p>
    <ul>
          <?php 
            if(isset($alat[1])) echo 
            '<li>
              Kacamata
            </li>';
            if(isset($alat[2])) echo 
            '<li>
              Lensa Kontak
            </li>';
            if(isset($alat[3])) echo 
            '<li>
              Gigi Palsu
            </li>';
            if(isset($alat[4])) echo 
            '<li>
              Alat Bantu Dengar
            </li>';
            if(isset($alat[5])) echo 
            '<li>
              Lainnya, '.$alat_bantu_lainnya.'
            </li>';
          ?>
        </ul>
  </div>
  
  <h4>ASESMEN KEPERAWATAN</h4>
  <div style="font-size: 85%;">  
    <p><b>1. Riwayat Pasien (Penyakit utama/operasi/cedera mayor) : </b></p>
    <ul>
      <?php 
        if(isset($friwayatpasien1[1])) echo 
        '<li>
          Hipertensi
        </li>';
        if(isset($friwayatpasien1[2])) echo 
        '<li>
          PPOK
        </li>';
        if(isset($friwayatpasien1[3])) echo 
        '<li>
          Diabetes
        </li>';
        if(isset($friwayatpasien1[4])) echo 
        '<li>
          Kanker
        </li>';
        if(isset($friwayatpasien1[5])) echo 
        '<li>
          Infark Miokard
        </li>';
        if(isset($friwayatpasien1[6])) echo 
        '<li>
          Asma
        </li>';
        if(isset($friwayatpasien1[7])) echo 
        '<li>
          Hepatitis
        </li>';
        if(isset($friwayatpasien1[8])) echo 
        '<li>
          Kejang
        </li>';
        if(isset($friwayatpasien1[9])) echo 
        '<li>
          Stroke
        </li>';
        if(isset($friwayatpasien1[10])) echo 
        '<li>
          TB
        </li>';
        if(isset($friwayatpasien1[11])) echo 
        '<li>
          Ulkus
        </li>';
        if(isset($friwayatpasien1[12])) echo 
        '<li>
          Penyakit Paru Lainnya
        </li>';
        if(isset($friwayatpasien1[13])) echo 
        '<li>
          Gangguan Jiwa
        </li>';
        if(isset($friwayatpasien1[14])) echo 
        '<li>
          Jantung
        </li>';
        if(isset($friwayatpasien1[15])) echo 
        '<li>
          Penyakit Ginjal
        </li>';
        if(isset($friwayatpasien1[16])) echo 
        '<li>
          Lainnya, '.$friwayatpasien2.'
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

    <table>
      <thead>
        <tr>
          <th class="minimalist" style="text-align:left;width:36;">Trauma</th>
          <th class="minimalist" style="text-align:center;width:16%;">Usia</th>
          <th class="minimalist" style="text-align:center;width:16%;">Pelaku</th>
          <th class="minimalist" style="text-align:center;width:16%;">Korban</th>
          <th class="minimalist" style="text-align:center;width:16%;">Saksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="minimalist" style="text-align:left">
            Aniaya fisik
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien13}}
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien14}}
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien15}}
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien16}}
          </td>
        </tr>  
        <tr>
          <td class="minimalist" style="text-align:left">
            Aniaya seksual
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien17}}
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien18}}
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien19}}
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien20}}
          </td>
        </tr>   
        <tr>
          <td class="minimalist" style="text-align:left">
            Penolakan
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien21}}
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien22}}
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien23}}
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien24}}
          </td>
        </tr>   
        <tr>
          <td class="minimalist" style="text-align:left">
            Kekerasan dalam keluarga
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien25}}
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien26}}
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien27}}
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien28}}
          </td>
        </tr>   
        <tr>
          <td class="minimalist" style="text-align:left">
            Tindakan kriminal
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien29}}
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien30}}
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien31}}
          </td>
          <td class="minimalist" style="text-align:center">
            {{$friwayatpasien32}}
          </td>
        </tr>    
      </tbody>
    </table>
    
    <p><b>Penjelasan : </b></p>
    <p>{{$friwayatpasien33}}</p>

    <p><b>2. Riwayat Keluarga : </b></p>
    <ul>
      <?php 
        if(isset($friwayatkeluarga[1])) echo 
        '<li>
          Penyakit Jantung
        </li>';
        if(isset($friwayatkeluarga[2])) echo 
        '<li>
          Hipertensi
        </li>';
        if(isset($friwayatkeluarga[3])) echo 
        '<li>
          Stroke
        </li>';
        if(isset($friwayatkeluarga[4])) echo 
        '<li>
          Asma
        </li>';
        if(isset($friwayatkeluarga[5])) echo 
        '<li>
          Kanker
        </li>';
        if(isset($friwayatkeluarga[6])) echo 
        '<li>
          Ginjal
        </li>';
        if(isset($friwayatkeluarga[7])) echo 
        '<li>
          Gangguan Jiwa
        </li>';
        if(isset($friwayatkeluarga[8])) echo 
        '<li>
          Kejang
        </li>';
        if(isset($friwayatkeluarga[9])) echo 
        '<li>
          TB
        </li>';
        if(isset($friwayatkeluarga[10])) echo 
        '<li>
          Diabetes
        </li>';
        if(isset($friwayatkeluarga[11])) echo 
        '<li>
          Anastesi
        </li>';
        if(isset($friwayatkeluarga[14])) echo 
        '<li>
          Gangguan Hematologi
        </li>';
        if(isset($friwayatkeluarga[15])) echo 
        '<li>
          Lainnya
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
            : {{$friwayatpsikososial2}} <?php if($friwayatpsikososial2=='Ada') echo ','.$friwayatpsikososial3.'' ; ?>
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Tempat tinggal
          </td>    
          <td class="konten_s_answer">  
            : {{$friwayatpsikososial4}} <?php if($friwayatpsikososial4=='2') echo ','.$friwayatpsikososial5.'' ; ?>
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Pekerjaan
          </td>    
          <td class="konten_s_answer">  
            : {{$friwayatpsikososial6}} <?php if($friwayatpsikososial6=='3') echo ','.$friwayatpsikososial7.'' ; ?>
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Aktivitas
          </td>    
          <td class="konten_s_answer">  
            : {{friwayatpsikososial8}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Curiga Penganiayaan/Penelantaran 
          </td>    
          <td class="konten_s_answer">  
            : {{friwayatpsikososial9}}
          </td>                
        </tr>
      </tbody>
    </table>

    <p><b>Status Emosional :</b></p>
    <ul>
      <?php 
        if($friwayatpsikososial10) echo 
        '<li>
          Kooperatif
        </li>';
        if($friwayatpsikososial10) echo 
        '<li>
          Ansietas
        </li>';
        if($friwayatpsikososial10) echo 
        '<li>
          Cemas
        </li>';
        if($friwayatpsikososial10) echo 
        '<li>
          Ingin mengakhiri hidup
        </li>';
        if($friwayatpsikososial10) echo 
        '<li>
          Depresi
        </li>';
      ?>
    </ul>

    <p><b>4. Keluarga Terdekat : </b></p>

    <table>
      <tbody>
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
        if(isset($fpenampilan[1])) echo 
        '<li>
          Tidak rapi
        </li>';
        if(isset($fpenampilan[2])) echo 
        '<li>
          Penggunaan pakaian tidak sesuai
        </li>';
        if(isset($fpenampilan[3])) echo 
        '<li>
          Cara berpakaian tidak seperti biasanya
        </li>';
      ?>
    </ul>
    <p>Penjelasan : {{$fpenampilan_ket}}</p>

    <p><b>9. Pembicaraan : </b></p>
    <ul>
      <?php 
        if(isset($fpembicaraan8[1])) echo 
        '<li>
          Cepat
        </li>';
        if(isset($fpembicaraan8[2])) echo 
        '<li>
          Keras
        </li>';
        if(isset($fpembicaraan8[3])) echo 
        '<li>
          Gagap
        </li>';
        if(isset($fpembicaraan8[4])) echo 
        '<li>
          Inkoheren
        </li>';
        if(isset($fpembicaraan8[5])) echo 
        '<li>
          Apatis
        </li>';
        if(isset($fpembicaraan8[6])) echo 
        '<li>
          Lambat
        </li>';
        if(isset($fpembicaraan8[7])) echo 
        '<li>
          Membisu
        </li>';
        if(isset($fpembicaraan8[8])) echo 
        '<li>
          Tidak mampu memulai bicara
        </li>';
      ?>
    </ul>
    <p>Penjelasan : ...</p>

    <p><b>10. Aktivitas Motorik : </b></p>
    <ul>
      <?php 
        if(isset($faktivitasmotorik[1])) echo 
        '<li>
          Lesu
        </li>';
        if(isset($faktivitasmotorik[2])) echo 
        '<li>
          Tegang
        </li>';
        if(isset($faktivitasmotorik[3])) echo 
        '<li>
          Gelisah
        </li>';
        if(isset($faktivitasmotorik[4])) echo 
        '<li>
          Tik
        </li>';
        if(isset($faktivitasmotorik[5])) echo 
        '<li>
          Agitas
        </li>';
        if(isset($faktivitasmotorik[6])) echo 
        '<li>
          Grimasen
        </li>';
        if(isset($faktivitasmotorik[7])) echo 
        '<li>
          Tremor
        </li>';
        if(isset($faktivitasmotorik[8])) echo 
        '<li>
          Kompulsif
        </li>';
        if(isset($faktivitasmotorik[9])) echo 
        '<li>
          Restrain
        </li>';
      ?>
    </ul>
    <p>Penjelasan : {{$faktivitasmotorik_ket}}</p>

    <p><b>11. Alam Perasaan : </b></p>
    <?php 
        if(isset($falamperasaan[1])) echo 
        '<li>
          Sedih
        </li>';
        if(isset($falamperasaan[2])) echo 
        '<li>
          Ketakutan
        </li>';
        if(isset($falamperasaan[3])) echo 
        '<li>
          Putus Asa 
        </li>';
        if(isset($falamperasaan[4])) echo 
        '<li>
          Khawatir
        </li>';
        if(isset($falamperasaan[5])) echo 
        '<li>
          Gembira berlebihan
        </li>';
        if(isset($falamperasaan[6])) echo 
        '<li>
          Isyarat percobaan bunuh diri
        </li>';
      ?>
    <p>Penjelasan : {{$falamperasaan_ket}}</p>

    <p><b>12. Afek : </b></p>
    <?php 
        if(isset($fafek[1])) echo 
        '<li>
          Datar
        </li>';
        if(isset($fafek[2])) echo 
        '<li>
          Tumpul
        </li>';
        if(isset($fafek[3])) echo 
        '<li>
          Labil
        </li>';
        if(isset($fafek[4])) echo 
        '<li>
          Tidak sesuai
        </li>';
      ?>
    <p>Penjelasan : {{$fafek_ket}}</p>

    <p><b>13. Interaksi selama wawancara : </b></p>
    <?php 
        if(isset($finteraksi[1])) echo 
        '<li>
          Bermusuhan
        </li>';
        if(isset($finteraksi[2])) echo 
        '<li>
          Tidak kooperatif
        </li>';
        if(isset($finteraksi[3])) echo 
        '<li>
          Mudah tersinggung
        </li>';
        if(isset($finteraksi[4])) echo 
        '<li>
          Kontak mata kurang
        </li>';
        if(isset($finteraksi[5])) echo 
        '<li>
          Defensif
        </li>';
        if(isset($finteraksi[6])) echo 
        '<li>
          Curiga
        </li>';
      ?>
    <p>Penjelasan : {{$finteraksi_ket}}</p>

    <p><b>14. Persepsi : </b></p>
    <?php 
        if(isset($fpersepsi[1])) echo 
        '<li>
          Ilusi
        </li>';
        if(isset($fpersepsi[2])) echo 
        '<li>
          Halusinasi dengar
        </li>';
        if(isset($fpersepsi[3])) echo 
        '<li>
          Halusinasi lihat
        </li>';
        if(isset($fpersepsi[4])) echo 
        '<li>
          Halusinasi raba
        </li>';
        if(isset($fpersepsi[5])) echo 
        '<li>
          Halusinasi kecap
        </li>';
        if(isset($fpersepsi[6])) echo 
        '<li>
          Halusinasi hidu
        </li>';
      ?>
    <p>Penjelasan : {{$fpersepsi_ket}}</p>

    <p><b>15. Isi Pikir : </b></p>
    <?php 
        if(isset($fisikpikir[1])) echo 
        '<li>
          Obsesi
        </li>';
        if(isset($fisikpikir[2])) echo 
        '<li>
          Phobia
        </li>';
        if(isset($fisikpikir[3])) echo 
        '<li>
          Hipokondria
        </li>';
        if(isset($fisikpikir[4])) echo 
        '<li>
          Depersonalisasi
        </li>';
        if(isset($fisikpikir[5])) echo 
        '<li>
          Ide terkait
        </li>';
        if(isset($fisikpikir[6])) echo 
        '<li>
          Pikiran magis
        </li>';
        if(isset($fisikpikir[7])) echo 
        '<li>
          Waham agama
        </li>';
        if(isset($fisikpikir[8])) echo 
        '<li>
          Waham somatik
        </li>';
        if(isset($fisikpikir[9])) echo 
        '<li>
          Waham besar
        </li>';
        if(isset($fisikpikir[10])) echo 
        '<li>
          Waham curiga
        </li>';
        if(isset($fisikpikir[11])) echo 
        '<li>
          Waham nihilistik
        </li>';
        if(isset($fisikpikir[12])) echo 
        '<li>
          Sisip pikir
        </li>';
        if(isset($fisikpikir[13])) echo 
        '<li>
          Siap pikir
        </li>';
        if(isset($fisikpikir[14])) echo 
        '<li>
          Kontrol 
        </li>';
      ?>
    <p>Penjelasan : {{$fisikpikir_ket}}</p>

    <p><b>16. Arus Pikir : </b></p>
    <ul>
      <?php 
        if(isset($faruspikir6[1])) echo 
        '<li>
          Sirkumstansial
        </li>';
        if(isset($faruspikir6[2])) echo 
        '<li>
          Tangensial
        </li>';
        if(isset($faruspikir6[3])) echo 
        '<li>
          Kehilangan asosiasi
        </li>';
        if(isset($faruspikir6[4])) echo 
        '<li>
          Flight of idea
        </li>';
        if(isset($faruspikir6[5])) echo 
        '<li>
          Block
        </li>';
        if(isset($faruspikir6[6])) echo 
        '<li>
          Perseverasi
        </li>';
      ?>
    </ul>
    <p>Penjelasan : {{$faruspikir_ket}}</p>

    <p><b>17. Memori : </b></p>
    <ul>
      <?php 
        if(isset($fmemori[1])) echo 
        '<li>
          Ggn daya ingat jangka panjang
        </li>';
        if(isset($fmemori[2])) echo 
        '<li>
          Ggn daya ingat jangka pendek
        </li>';
        if(isset($fmemori[3])) echo 
        '<li>
          Ggn daya ingat saat ini
        </li>';
        if(isset($fmemori[4])) echo 
        '<li>
          Konfabulasi
        </li>';
      ?>
    </ul>
    <p>Penjelasan : {{$fmemori_ket}}</p>

    <p><b>18. Tingkat konsentrasi dan berhitung : </b></p>
    <ul>
      <?php 
        if(isset($fkonsentrasi[1])) echo 
        '<li>
          Mudah teralih
        </li>';
        if(isset($fkonsentrasi[2])) echo 
        '<li>
          Tidak mampu berkonsentrasi
        </li>';
        if(isset($fkonsentrasi[3])) echo 
        '<li>
          Tidak mampu berhitung sederhana
        </li>';
      ?>
    </ul>
    <p>Penjelasan : {{$fkonsentrasi_ket}}</p>

    <p><b>19. Kemampuan Penilaian : </b></p>
    <ul>
      <?php 
        if(isset($fkemampuanpenilaian[1])) echo 
        '<li>
           Gangguan ringan
        </li>';
        if(isset($fkemampuanpenilaian[2])) echo 
        '<li>
          Gangguan bermakna
        </li>';
      ?>
    </ul>
    <p>Penjelasan : {{$fkemampuanpenilaian_ket}}</p>

    <p><b>20. Daya tilik diri (insight) : </b></p>
    <ul>
      <?php 
        if(isset($fdaya[1])) echo 
        '<li>
          Mengingkari sakit yang diderita
        </li>';
        if(isset($fdaya[2])) echo 
        '<li>
          Menyalahkan hal di luar dirinya
        </li>';
      ?>
    </ul>
    <p>Penjelasan : {{$fdaya_ket}}</p>

  </div>

  <h4>KEBUTUHAN KOMUNIKASI DAN PENGAJARAN</h4>
  <div style="font-size: 85%;">  
    <ul>
      <?php 
        if(isset($fpengajaran[1])) echo 
        '<li>
          Proses Penyakit dan Tindakan medis
        </li>';
        if(isset($fpengajaran[2])) echo 
        '<li>
          Terapi/Obat
        </li>';
        if(isset($fpengajaran[3])) echo 
        '<li>
          Penanganan Nyeri
        </li>';
        if(isset($fpengajaran[4])) echo 
        '<li>
          Penggunaan Alat Medis
        </li>';
        if(isset($fpengajaran[5])) echo 
        '<li>
          Nutrisi
        </li>';
        if(isset($fpengajaran[6])) echo 
        '<li>
          Rehab Medik
        </li>';
        if(isset($fpengajaran[7])) echo 
        '<li>
          Rehabilitasi Mental
        </li>';
        if(isset($fpengajaran[8])) echo 
        '<li>
          Perawatan Penyakitnya
        </li>';
        if(isset($fpengajaran[9])) echo 
        '<li>
          Aspek psikologis terkait penyakitnya
        </li>';
        if(isset($fpengajaran[10])) echo 
        '<li>
          Follow up dan minta pertolongan
        </li>';
        if(isset($fpengajaran[11])) echo 
        '<li>
          Lain-lain,...
        </li>';
      ?>
    </ul>

    <p><b>keyakinan dan nilai-nilai pasien/keluarga tentang penyakitnya : </b>{{$fkomunikasi1}} </p>
    
    <p><b>Bicara : </b> {{$fkomunikasi2}}</p>

    <p><b>bahasa Sehari-hari : </b>{{$fkomunikasi4}}</p>

    <p>Perlu Penterjemah : {{$fkomunikasi7}} </p>

    <p>Bahasa Isyarat : {{$fkomunikasi9}}</p>

    <p><b>Hambatan Edukasi : </b></p>
    <ul>
      <?php 
        if(isset($fkomunikasi10[1])) echo 
        '<li>
          Bahasa
        </li>';
        if(isset($fkomunikasi10[2])) echo 
        '<li>
          Pendengaran
        </li>';
        if(isset($fkomunikasi10[3])) echo 
        '<li>
          Hilang memori
        </li>';
        if(isset($fkomunikasi10[4])) echo 
        '<li>
          Motivasi buruk
        </li>';
        if(isset($fkomunikasi10[5])) echo 
        '<li>
          Masalah penglihatan
        </li>';
        if(isset($fkomunikasi10[6])) echo 
        '<li>
          Tidak ditemukan hambatan belajar
        </li>';
        if(isset($fkomunikasi10[7])) echo 
        '<li>
          Cemas
        </li>';
        if(isset($fkomunikasi10[8])) echo 
        '<li>
          Emosi
        </li>';
        if(isset($fkomunikasi10[9])) echo 
        '<li>
          Kesulitan Bicara
        </li>';
        if(isset($fkomunikasi10[10])) echo 
        '<li>
          Tidak ada partisipasi dari caregiver
        </li>';
        if(isset($fkomunikasi10[11])) echo 
        '<li>
          Secara fisiologi tidak mampu belajar
        </li>';
        if(isset($fkomunikasi10[12])) echo 
        '<li>
          Kognitif
        </li>';
      ?>
    </ul>
    <p><b>Cara Edukasi yang disukai : </b></p>
    <ul>
      <?php 
        if(isset($fkomunikasi11[1])) echo 
        '<li>
          Menulis
        </li>';
        if(isset($fkomunikasi11[2])) echo 
        '<li>
          Audio- Visual/Gambar
        </li>';
        if(isset($fkomunikasi11[3])) echo 
        '<li>
          Diskusi
        </li>';
        if(isset($fkomunikasi11[4])) echo 
        '<li>
          Membaca
        </li>';
        if(isset($fkomunikasi11[5])) echo 
        '<li>
          Mendengar
        </li>';
        if(isset($fkomunikasi11[6])) echo 
        '<li>
          Demonstrasi
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
    <?php if($jenis_resiko_jatuh == 'humpty_dumpty')
    echo 
      '<p><b>HUMPTY DUMPTY (Anak-anak) </b></p>
        <table>
        <tbody>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Usia <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$usia.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Jenis Kelamin <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : Laki-laki
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Diagnosis <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$diagnosis_hd.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Gangguan Kognitif <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$gangguan_kognitif.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Faktor Lingkungan <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$faktor_lingkungan.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Respon terhadap Operasi/<br>Obat Penenang/Efek Anastesi <b></b>
            </td>    
            <td class="konten_s_answer">  
              : '.$waktu_respon_obat.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question">
              Penggunaan Obat <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$penggunaan_obat.'
            </td>                
          </tr>
        </tbody>
      </table>';
    ?>
    <?php if($jenis_resiko_jatuh == 'morse')
    echo 
      '<p><b>MORSE (Dewasa) </b></p>
        <table>
        <tbody>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Riwayat Jatuh<b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$riwayat_jatuh_mrs.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Diagnosis Sekunder <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$diagnosis_sekunder.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Alat Bantu <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$alat_bantu.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Terpasang Infus <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$terpasang_infus.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Gaya Berjalan <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$gaya_berjalan.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Status Mental <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$status_mental_mrs.'
            </td>                
          </tr>
        </tbody>
      </table>';
    ?>
    <?php if($jenis_resiko_jatuh == 'edmunson')
    echo 
      '<p><b>EDMUNSON (Jiwa) </b></p>
        <table>
        <tbody>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Usia <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : [Usia]
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Status Mental <b></b>
            </td>    
            <td class="konten_s_answer">  
              : '.$status_mental_edm.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Eliminasi <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$eliminasi.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Pengobatan <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$pengobatan.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Diagnosis <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$diagnosis_edm.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Ambulasi/Keseimbangan <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$ambulasi.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Nutrisi <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$nutrisi.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question">
              Gangguan pola tidur <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : [Gangguan Pola Tidur]
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Riwayat Jatuh <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$riwayat_jatuh_edm.'
            </td>                
          </tr>
        </tbody>
      </table>';
    ?>
  <p>Total Skor : [total skor]</p>

  <?php if(1) echo '<p><b>Tidak Beresiko : Skor < 90</b></p>
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
  </div>'; else echo '
  <p><b> Beresiko : Skor > 90</b></p>
    <ol>
      <li>Lakukan tindakan sesuai skor (>90)</li>
      <li>Pasang penanda risiko jatuh pada pintu kamar bagian atas/brankard</li>
      <li>Awasi atau bantu sebagian ADL pasien</li>
      <li>Cepat menanggapi keluhan pasien</li>
      <li>Review kembali obat-obatan yang beresiko</li>
      <li>Beritahu pasien agar mobilisasi secara bertahap : duduk perlahan-lahan sebelum berdiri</li>
      <li>Libatkan pasien secara aktif</li>
    </ol>
  </div>' ?>

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

      <p><b>Kualitas Nyeri :</b> {{fnyeri7}} <?php  if ($fnyeri7=='Lainnya') echo ','.$fnyeri8.''?> </p>

      <p><b>Faktor Pemberat :</b> {{$fnyeri9}} <?php  if ($fnyeri9=='Lainnya') echo ','.$fnyeri10.''?> </p>

      <p><b>Faktor Peringan :</b> {{$fnyeri11}} <?php  if ($fnyeri11=='Lainnya') echo ','.$fnyeri12.''?> </p>

      <p><b>Efek Nyeri :</b></p>
      <ul>
      <?php 
        if(isset($fnyeri13[1])) echo 
        '<li>
          Mual Muntah
        </li>';
        if(isset($fnyeri13[2])) echo 
        '<li>
          Emosi
        </li>';
        if(isset($fnyeri13[3])) echo 
        '<li>
          Tidur
        </li>';
        if(isset($fnyeri13[4])) echo 
        '<li>
          Hubungan dengan orang lain
        </li>';
        if(isset($fnyeri13[5])) echo 
        '<li>
          Nafsu Makan
        </li>';
        if(isset($fnyeri13[6])) echo 
        '<li>
          Aktivitas
        </li>';
        if(isset($fnyeri13[7])) echo 
        '<li>
          Lainnya, '.$fnyeri14.'
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
              Aktual/ Resiko bersihan jalan nafas tidak efektif
            </li>';
            if(isset($macam_kasus[2])) echo 
            '<li>
              Aktual/ Resiko aspirasi
            </li>';
            if(isset($macam_kasus[3])) echo 
            '<li>
              Aktual/ Resiko pola nafas tidak efektif
            </li>';
            if(isset($macam_kasus[4])) echo 
            '<li>
              Aktual/ Resiko gangguan pertukaran gas
            </li>';
            if(isset($macam_kasus[5])) echo 
            '<li>
              Aktual/ penurunan curah jantung
            </li>';
            if(isset($macam_kasus[6])) echo 
            '<li>
              Aktual/ Resiko gangguan perfusi jaringan celebral/perifer
            </li>';
            if(isset($macam_kasus[7])) echo 
            '<li>
              Aktual/ Resiko gangguan keseimbangan cairan
            </li>';
            if(isset($macam_kasus[8])) echo 
            '<li>
              Aktual/ Resiko gangguan keseimbangan kontinuitas jaringan
            </li>';
            if(isset($macam_kasus[9])) echo 
            '<li>
              Aktual/ Resiko infeksi
            </li>';
            if(isset($macam_kasus[10])) echo 
            '<li>
              Resiko cedera / jatuh
            </li>';
            if(isset($macam_kasus[11])) echo 
            '<li>
              Hypertermi
            </li>';
            if(isset($macam_kasus[12])) echo 
            '<li>
              Nyeri
            </li>';
            if(isset($macam_kasus[13])) echo 
            '<li>
              Gangguan kebutuhan nutrisi
            </li>';
            if(isset($macam_kasus[14])) echo 
            '<li>
              Lainnya, '.$fdiagnosaumum_ket.'
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
              Gangguan persepsi sensori : halusinasi
            </li>';
            if(isset($macam_kasus[2])) echo 
            '<li>
              Perilaku kekerasan
            </li>';
            if(isset($macam_kasus[3])) echo 
            '<li>
              Isolasi sosial
            </li>';
            if(isset($macam_kasus[4])) echo 
            '<li>
              Gangguan konsep diri
            </li>';
            if(isset($macam_kasus[5])) echo 
            '<li>
              Resiko bunuh diri
            </li>';
            if(isset($macam_kasus[6])) echo 
            '<li>
              Intoleransi aktifitas
            </li>';
            if(isset($macam_kasus[7])) echo 
            '<li>
              Waham
            </li>';
            if(isset($macam_kasus[8])) echo 
            '<li>
              Defisit perawatan diri
            </li>';
            if(isset($macam_kasus[9])) echo 
            '<li>
              Kerusakan komunitas verbal
            </li>';
            if(isset($macam_kasus[10])) echo 
            '<li>
              Koping individu tidak efektif
            </li>';
            if(isset($macam_kasus[11])) echo 
            '<li>
              Aktual/Resiko Cemas/Takut
            </li>';
            if(isset($macam_kasus[12])) echo 
            '<li>
              Lainnya, '.$fdiagnosajiwa_ket.'
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