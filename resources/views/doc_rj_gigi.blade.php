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


  <h2 align="center">ASESMEN AWAL PASIEN GIGI RAWAT JALAN</h2><br>
  
  <h4>EVALUASI TINDAKAN KEPERAWATAN</h4>
  <br>
  <div style="font-size: 85%;">  
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Pekerjaan
          </td>    
          <td class="konten_s_answer">  
            : {{$pekerjaan}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Alamat
          </td>    
          <td class="konten_s_answer">  
            : {{$alamat}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Telp/HP
          </td>    
          <td class="konten_s_answer">  
            : {{$no_telp}}
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <h4>PENILAIAN TINGKAT NYERI</h4>
  <div style="font-size: 85%;">  
    <p style="margin-bottom:-1%;">{{$tingkat}}</p>
      <div class="row">
        <div class="column">
          <p>Skala Nyeri : {{$skala}}</p>
          <p>Durasi : {{$durasi}}</p>
        </div>
        <div class="column">
          <p>Lokasi : {{$lokasi}}</p>
          <p>Frekuensi : {{$frekuensi}}</p>
        </div>
      </div>
      <p><b>Nyeri hilang, bila :</b></p>
      <ul>
        <?php if(isset($hilang[1])) echo 
          '<li>
            Minum Obat
          </li>'
        ?>
        <?php if(isset($hilang[2])) echo 
          '<li>
            Mendengar Musik
          </li>'
        ?>
        <?php if(isset($hilang[3])) echo 
          '<li>
            Istirahat
          </li>'
        ?>
        <?php if(isset($hilang[4])) echo 
          '<li>
            Berubah posisi/tidur
          </li>'
        ?>
        <?php if(isset($hilang[5])) echo 
          '<li>
            Lain-lain
          </li>'
        ?>
      </ul>
      <p>Diberitahukan ke <b>dokter</b> : <?php if($pemberitahuan=='1') echo 'Ya, pukul '.$waktu_pemberitahuan.''; else echo 'Tidak'; ?></p>
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
  <p>Total Skor : [total skor]]</p>

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
  
  <pagebreak>
  <h4>DATA MEDIK</h4>
  <br>
  <div style="font-size: 85%;">  
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Golongan Darah
          </td>    
          <td class="konten_s_answer">  
            : {{$golongan_darah}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Tekanan darah
          </td>    
          <td class="konten_s_answer">  
            : {{$tekanan_darah_top}}/{{$tekanan_darah_bottom}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Tekanan Jantung
          </td>    
          <td class="konten_s_answer">  
            : {{$tekanan_jantung}}, {{$ket_tekanan_jantung}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Diabetes
          </td>    
          <td class="konten_s_answer">  
            : {{$diabetes}}, {{$ket_diabetes}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Hepatitis
          </td>    
          <td class="konten_s_answer">  
            : {{$hepatitis}}, {{$ket_hepatitis}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Penyakit Lainnya
          </td>    
          <td class="konten_s_answer">  
            : {{$penyakit_lainnya}}, {{$ket_penyakit_lainnya}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Alergi Obat
          </td>    
          <td class="konten_s_answer">  
            : {{$alergi_obat}}, {{$ket_alergi_obat}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Alergi Makanan
          </td>    
          <td class="konten_s_answer">  
            : {{$alergi_makanan}}, {{$ket_alergi_makanan}}
          </td>                
        </tr>
      </tbody>
    </table>
  </div>
  <br>
  <img src="img/gigi.jpg" alt="Smiley face" height="400" width="750">
  <hr>
  <br>
    <div style="font-size: 85%;">  
      <table>
        <tbody>
          <tr>
            <td class="konten_s_question">
              Oklusi
            </td>    
            <td class="konten_s_answer">  
              : {{$oklusi}}
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question">
              Torus Palatinus
            </td>    
            <td class="konten_s_answer">  
              : {{$torus_palatinus}}
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question">
              Torus Mandibularis
            </td>    
            <td class="konten_s_answer">  
              : {{$torus_mandibularis}}
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question">
              Palatum
            </td>    
            <td class="konten_s_answer">  
              : {{$palatum}}
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question">
              Supernumerary Teeth
            </td>    
            <td class="konten_s_answer">  
              : {{$supernumerary_teeth}}, {{$ket_supernumerary_teeth}}
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question">
              Diastema
            </td>    
            <td class="konten_s_answer">  
              : {{$diastema}}, {{$ket_diastema}}
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question">
              Gigi Anomali
            </td>    
            <td class="konten_s_answer">  
              : {{$anomali}}, {{$ket_anomali}}
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question">
              Lain-lain
            </td>    
            <td class="konten_s_answer">  
              : {{$lain}}
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question">
              Keterangan
            </td>    
            <td class="konten_s_answer">  
              : {{$keterangan}}
            </td>                
          </tr>
          
        </tbody>
      </table>
    </div>
  <br>
    <hr>
  <table>
    <tr>
      <td class="box" width="25%">
        11:
      </td>
      <td class="box" width="25%">
        21/61:
      </td>
      <td class="box" width="25%">
        31/71:
      </td>
      <td class="box" width="25%">
        41/81:
      </td>
    </tr>
    <tr>
      <td class="box" width="25%">
        12:
      </td>
      <td class="box" width="25%">
        22/62:
      </td>
      <td class="box" width="25%">
        32/72:
      </td>
      <td class="box" width="25%">
        42/82:
      </td>
    </tr>
  </table>

  <hr>
  <br>
    <div style="font-size: 85%;">  
      <table>
        <tbody>
          <tr>
            <td class="konten_s_question">
              Tanggal
            </td>    
            <td class="plain">  
              : 20/08/18
            </td>
            <td rowspan="2" style="vertical-align:top">
              Tanda Tangan
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question">
              Nama Dokter
            </td>    
            <td class="plain">  
              : dr. ___ ____
            </td>                
          </tr>
        </tbody>
      </table>
    </div>

    
  </div>

</body>

<html>