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


  <h2 align="center">ASESMEN AWAL PASIEN RAWAT JALAN</h2><br>
  
  <h4 style="font-size:130%">ASESMEN KEPERAWATAN</h4><hr> 
  <h4>ALASAN KUNJUNGAN</h4>
  <div style="font-size: 85%;">  
    <p>{{$alasan_kunjungan}}</p>
  </div>
  
  <h4>RIWAYAT PSIKOSOSIAL</h4>
  <div style="font-size: 85%;">  
    <p>Hubungan dengan anggota keluarga : {{$hubungan_keluarga}}</p>
    <p>Status Psikologis:</p>
    <ul>
      <?php if(isset($status_psikososial[1]) echo 
        '<li>
          Baik
        </li>'
      ?>
      <?php if(isset($status_psikososial[2]) echo 
        '<li>
          Cemas
        </li>'
      ?>
      <?php if(isset($status_psikososial[3]) echo 
        '<li>
          Takut
        </li>'
      ?>
      <?php if(isset($status_psikososial[4]) echo 
        '<li>
          Marah
        </li>'
      ?>
      <?php if(isset($status_psikososial[5]) echo 
        '<li>
          Sedih
        </li>'
      ?>
      <?php if(isset($status_psikososial[6]) echo 
        '<li>
          Kecendrungan bunuh diri dilaporkan ke : '.{{$dilaporkan_ke}}.'
        </li>'
      ?>
      <?php if(isset($status_psikososial[7]) echo 
        '<li>
          Lain-lain, '.{{$status_psikologis_lain}}.'
        </li>'
      ?>
    </ul>
  </div>

  <h4>STATUS MENTAL</h4>
  <div style="font-size:85%">
    <div class="row">
      <div class="column">
        <p><b>Konsep Diri</b></p>
        <ul>
          <?php if(isset($konsep_diri[1])) echo 
            '<li>
              Gangguan citra tubuh
            </li>'
          ?>
          <?php if(isset($konsep_diri[2])) echo 
            '<li>
              Gangguan identitas
            </li>'
          ?>
          <?php if(isset($konsep_diri[3])) echo 
            '<li>
              Harga diri rendah
            </li>'
          ?>
          <?php if(isset($konsep_diri[4])) echo 
            '<li>
              Gangguan peran
            </li>'
          ?>
          <?php if(isset($konsep_diri[5])) echo 
            '<li>
              Tidak terkaji
            </li>'
          ?>
        </ul>

        <p><b>Persepsi</b></p>
        <ul>
          <?php if(isset($persepsi[1])) echo 
            '<li>
              Ilusi
            </li>'
          ?>
          <?php if(isset($persepsi[2])) echo 
            '<li>
              Halusinasi dengar
            </li>'
          ?>
          <?php if(isset($persepsi[3])) echo 
            '<li>
              Halusinasi lihat
            </li>'
          ?>
          <?php if(isset($persepsi[4])) echo 
            '<li>
              Halusinasi raba
            </li>'
          ?>
          <?php if(isset($persepsi[5])) echo 
            '<li>
              Halusinasi kecap
            </li>'
          ?>
          <?php if(isset($persepsi[6])) echo 
            '<li>
              Halusinasi hidu
            </li>'
          ?>
          <?php if(isset($persepsi[7])) echo 
            '<li>
              Tidak terkaji
            </li>'
          ?>
        </ul>

        <p><b>Aktifitas Motorik</b></p>
        <ul>
          <?php if(isset($motorik[1])) echo 
            '<li>
             Lesu
            </li>'
          ?>
          <?php if(isset($motorik[2])) echo 
            '<li>
             Tegang
            </li>'
          ?>
          <?php if(isset($motorik[3])) echo 
            '<li>
             Gelisah
            </li>'
          ?>
          <?php if(isset($motorik[4])) echo 
            '<li>
             TIK
            </li>'
          ?>
          <?php if(isset($motorik[5])) echo 
            '<li>
             Grimasi
            </li>'
          ?>
          <?php if(isset($motorik[6])) echo 
            '<li>
             Halusinasi hidu
            </li>'
          ?>
          <?php if(isset($motorik[7])) echo 
            '<li>
             Tremor
            </li>'
          ?>
          <?php if(isset($motorik[8])) echo 
            '<li>
             Konsulsif
            </li>'
          ?>
          <?php if(isset($motorik[9])) echo 
            '<li>
             Tidak ada Masalah
            </li>'
          ?>
        </ul>

      </div>
      <div class="column">
        <p><b>Penampilan</b></p>
        <ul>
          <?php if(isset($penampilan[1])) echo 
            '<li>
             Rapi
            </li>'
          ?>
          <?php if(isset($penampilan[2])) echo 
            '<li>
             Tidak rapi
            </li>'
          ?>
          <?php if(isset($penampilan[3])) echo 
            '<li>
             Penggunaan tidak sesuai
            </li>'
          ?>
          <?php if(isset($penampilan[4])) echo 
            '<li>
             Cara berpakaian tidak seperti biasa
            </li>'
          ?>
        </ul>
        <p><b>Isi Pikir</b></p>
        <ul>
          <?php if(isset($pikir[1])) echo 
            '<li>
              Obsesi
            </li>'
          ?>
          <?php if(isset($pikir[2])) echo 
            '<li>
              Phobia
            </li>'
          ?>
          <?php if(isset($pikir[3])) echo 
            '<li>
              Hipokondria
            </li>'
          ?>
          <?php if(isset($pikir[4])) echo 
            '<li>
              Depersonalisasi
            </li>'
          ?>
          <?php if(isset($pikir[5])) echo 
            '<li>
              Ide terkait 
            </li>'
          ?>
          <?php if(isset($pikir[16])) echo 
            '<li>
              Pikiran magis
            </li>'
          ?>
          <?php if(isset($pikir[7])) echo 
            '<li>
              Waham agama
            </li>'
          ?>
          <?php if(isset($pikir[8])) echo 
            '<li>
              Waham somatik
            </li>'
          ?>
          <?php if(isset($pikir[9])) echo 
            '<li>
              Waham besar
            </li>'
          ?>
          <?php if(isset($pikir[10])) echo 
            '<li>
              Waham curiga
            </li>'
          ?>
          <?php if(isset($pikir[11])) echo 
            '<li>
              Waham nihilistik
            </li>'
          ?>
          <?php if(isset($pikir[12])) echo 
            '<li>
              Sisip pikir
            </li>'
          ?>
          <?php if(isset($pikir[13])) echo 
            '<li>
              Siar pikir
            </li>'
          ?>
          <?php if(isset($pikir[14])) echo 
            '<li>
              Kontrol pikir
            </li>'
          ?>
          <?php if(isset($pikir[15])) echo 
            '<li>
              Tidak terkaji
            </li>'
          ?>
        </ul>
        <p><b>Alam Perasaan</b></p>
        <ul>
          <?php if(isset($perasaan[1])) echo 
            '<li>
             Sedih
            </li>'
          ?>
          <?php if(isset($perasaan[2])) echo 
            '<li>
             Ketakutan
            </li>'
          ?>
          <?php if(isset($perasaan[3])) echo 
            '<li>
             Putus asa
            </li>'
          ?>
          <?php if(isset($perasaan[4])) echo 
            '<li>
             Khawatir
            </li>'
          ?>
          <?php if(isset($perasaan[5])) echo 
            '<li>
             Gembira berlebihan
            </li>'
          ?>
          <?php if(isset($perasaan[6])) echo 
            '<li>
             Isyarat/Percobaan bunuh diri
            </li>'
          ?>
          <?php if(isset($perasaan[7])) echo 
            '<li>
             Sesuai
            </li>'
          ?>
        </ul>
      </div>
    </div>  
  </div>
  
  <h4>STATUS FUNGSIONAL</h4>
  <div style="font-size: 85%;">  
    <p> {{$status_fungsional}},

    <?php if($status_fungsional=='Perlu Bantuan') echo ''.{{$perlu_bantuan}}.'. Ketergantungan total dilaporkan ke <b>dokter</b> pukul: '.{{$waktu_laporan}}.'' ?> </p>
  </div>

  <h4>PEMERIKSAAN FISIK DAN SCREENING GIZI</h4>
  <div style="font-size:85%">
    <div class="row">
      <div class="column">
        <p>TD : {{$td}} mmHG</p>
        <p>TB : {{$tb}} Cm</p>
        <p>BB : {{$bb}} Kg</p>
        <p>Nadi : {{$nadi}} x/mnt</p>
      </div>
      <div class="column">
        <p>Pernafasan : {{$pernafasan}} x/mnt</p>
        <p>Golongan Darah : {{$golongan_darah}} </p>
        <p>Suhu : {{$suhu}} <sup>o</sup>C</p>
      </div>
    </div> 
    <p><b>Berdasarkan Malnutrition Universal Screening Tool (MUST)</b></p>

    <p>1. Apakah Pasien mengalami penurunan BB yang tidak diinginkan dalam 6 bulan terakhir ?</p>
    <p>{{$must_1}}</p>

    <p>2. Apakah asupan makan berkurang karena tidak nafsu makan ?</p>
    <p>{{$must_2}}</p>

    <p><b>Total Skor : 1</b></p>    

    <p>3. Pasien dengan diagnosis khusus ?</p>
    <p>{{$must_3}}</p>

    <p>* Imunitas menurun</p>

    <p><b>Berdasarkan Adaptasi Strong-Kid</b></p>

    <p>1. Apakah pasien tampak kurus ?</p>
    <p>{{$sk_1}}</p>

    <p>2. Apakah Terdapat penurunan BB selama satu bulan terakhir ? (berdasarkan penilaian objektif data BB bila ada atau penilaian seubjektif orangtua pasien atau untuk bayi < 1 tahun : BB tidak naik selama 3 bulan terakhir)</p>
    <p>{{$sk_2}}</p>

    <p>3. Apakah terdapat salah satu dari kondisi berikut ?</p>
    <ul>
      <li> Diare ≥ 5 kali/hari dan atau muntah ? 3 kali/hari dalam seminggu terakhir</li>
      <li> Asupan makanan berkurang selama 1 minggu terakhir</li>
    </ul>
    <p>{{$sk_3}}</p>

    <p>4. Apa terdapat penyakit atau keadaan yang mengakibatkan pasien beresiko mengalami malnutrisi ?</p>
    <p>{{$sk_4}}</p>

    <p><b>Total Skor : 5</b></p>    

  

    <p><b>Daftar Penyakit/keadaan yang bersiko mengakibatkan malnutrisi</b></p>
    <ul>
      <?php if(isset($penyakit_malnutrisi[1])) echo 
        '<li>
          Diare Kronik (lebih dari 2 minggu)
        </li>'
      ?>
      <?php if(isset($penyakit_malnutrisi[2])) echo 
        '<li>
          (Tersangka) Penyakit jantung bawaan
        </li>'
      ?>
      <?php if(isset($penyakit_malnutrisi[3])) echo 
        '<li>
          (Tersangka) Infeksi Human Immunodeficiency Virus (HIV)
        </li>'
      ?>
      <?php if(isset($penyakit_malnutrisi[4])) echo 
        '<li>
          (Tersangka) Kanker
        </li>'
      ?>
      <?php if(isset($penyakit_malnutrisi[5])) echo 
        '<li>
          Penyakit hati kronik
        </li>'
      ?>
      <?php if(isset($penyakit_malnutrisi[6])) echo 
        '<li>
          Penyakit ginjal kronik
        </li>'
      ?>
      <?php if(isset($penyakit_malnutrisi[7])) echo 
        '<li>
          TB Paru
        </li>'
      ?>
      <?php if(isset($penyakit_malnutrisi[8])) echo 
        '<li>
          Luka bakar luas
        </li>'
      ?>
      <?php if(isset($penyakit_malnutrisi[9])) echo 
        '<li>
          Kelainan anatomi daerah mulut yang menyebabkan kesulitan makan (misal:bibir sumbing)
        </li>'
      ?>
      <?php if(isset($penyakit_malnutrisi[10])) echo 
        '<li>
          Trauma
        </li>'
      ?>
      <?php if(isset($penyakit_malnutrisi[11])) echo 
        '<li>
          Kelainan metabolik bawaan (Inborn Error Metabolism)
        </li>'
      ?>
      <?php if(isset($penyakit_malnutrisi[12])) echo 
        '<li>
            (Tersangka) Infeksi Human Immunodeficiency Virus (HIV)
        </li>'
      ?>
      <?php if(isset($penyakit_malnutrisi[13])) echo 
        '<li>
          Retardasi mental
        </li>'
      ?>
      <?php if(isset($penyakit_malnutrisi[14])) echo 
        '<li>
          Rencana / paska operasi mayor (misal: laparatomi, tokaratomi)
        </li>'
      ?>
      <?php if(isset($penyakit_malnutrisi[15])) echo 
        '<li>
          Terpasang stoma
        </li>'
      ?>
      <?php if(isset($penyakit_malnutrisi[16])) echo 
        '<li>
          Lain-lain...
        </li>'
      ?>
    </ul>

    <p><b>Interpresi Skor : 5 Resiko Berat</b></p>   

    <p>Diberitahukan ke dokter ?</p>   
    <p>{{$pemberitahuan_fg}} <?php if($pemberitahuan_fg == 1) echo ', pukul '.$waktu_pemberitahuan_fg.''?></p> 

  </div>

  <h4>PENILAIAN TINGKAT NYERI</h4>
  <table>
    <tr>
      <td class="box">
        <div style="font-size:100%">  
          <p>{{$tingkat}}</p><br>
   
          <p>Skala Nyeri : {{$skala}}</p>
          <p>Durasi : {{$durasi}}</p>
          
          <br>        
          
          <p>Lokasi : {{$lokasi}}</p>
          <p>Frekuensi : {{$frekuensi}}</p>
              
          <br>  
          <p><b>Nyeri hilang, bila :</b></p>
          <ul>
            <?php 
              if(isset($hilang[1])) echo 
              '<li>
                Minum Obat
              </li>';
              if(isset($hilang[2])) echo 
              '<li>
                Mendengar Musik
              </li>';
              if(isset($hilang[3])) echo 
              '<li>
                Istirahat
              </li>';
              if(isset($hilang[4])) echo 
              '<li>
                Berubah posisi/tidur
              </li>';
              if(isset($hilang[5])) echo 
              '<li>
                Lain-lain, '.$nyeri_hilang_input_text.'
              </li>';
            ?>
          </ul>
          <br>
          <p>Diberitahukan ke <b>dokter</b> : $pemberitahuan_ny<?php  if($pemberitahuan_fg == 1) echo ', pukul '.$waktu_pemberitahuan_ny.'' ?></p>
        </div>
      </td>
      <td><center><img src="img/nyeri.jpg" alt="Smiley face" height="170" width="300"><br> </center></td>
    </tr>
  </table>

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

  <h4>DIAGNOSA KEPERAWATAN</h4>
  <div style="font-size: 85%;">  
    <p>Nyeri Kronis</p>
    <div class="row">
      <div class="column">
        <p><b>Diagnosa Keperawatan Umum :</b></p>
        <ul>
          <?php 
            if(isset($umum[1])) echo 
            '<li>
              Aktual/ Resiko bersihan jalan nafas tidak efektif
            </li>';
            if(isset($umum[2])) echo 
            '<li>
              Aktual/ Resiko aspirasi
            </li>';
            if(isset($umum[3])) echo 
            '<li>
              Aktual/ Resiko pola nafas tidak efektif
            </li>';
            if(isset($umum[4])) echo 
            '<li>
              Aktual/ Resiko gangguan pertukaran gas
            </li>';
            if(isset($umum[5])) echo 
            '<li>
              Aktual/ penurunan curah jantung
            </li>';
            if(isset($umum[6])) echo 
            '<li>
              Aktual/ Resiko gangguan perfusi jaringan celebral/perifer
            </li>';
            if(isset($umum[7])) echo 
            '<li>
              Aktual/ Resiko gangguan keseimbangan cairan
            </li>';
            if(isset($umum[8])) echo 
            '<li>
              Aktual/ Resiko gangguan keseimbangan kontinuitas jaringan
            </li>';
            if(isset($umum[9])) echo 
            '<li>
              Aktual/ Resiko infeksi
            </li>';
            if(isset($umum[10])) echo 
            '<li>
              Resiko cedera / jatuh
            </li>';
            if(isset($umum[11])) echo 
            '<li>
              Hypertermi
            </li>';
            if(isset($umum[12])) echo 
            '<li>
              Nyeri
            </li>';
            if(isset($umum[13])) echo 
            '<li>
              Gangguan kebutuhan nutrisi
            </li>';
            if(isset($umum[14])) echo 
            '<li>
              Lainnya, '.$umum_lainnya.'
            </li>';
          ?>
        </ul>
      </div>
      <div class="column">
        <p><b>Diagnosa Keperawatan Jiwa :</b></p>
        <ul>
          <?php 
            if(isset($jiwa[1])) echo 
            '<li>
              Gangguan persepsi sensori : halusinasi
            </li>';
            if(isset($jiwa[2])) echo 
            '<li>
              Perilaku kekerasan
            </li>';
            if(isset($jiwa[3])) echo 
            '<li>
              Isolasi sosial
            </li>';
            if(isset($jiwa[4])) echo 
            '<li>
              Gangguan konsep diri
            </li>';
            if(isset($jiwa[5])) echo 
            '<li>
              Resiko bunuh diri
            </li>';
            if(isset($jiwa[6])) echo 
            '<li>
              Intoleransi aktifitas
            </li>';
            if(isset($jiwa[7])) echo 
            '<li>
              WahamDefisit perawatan diri
            </li>';
            if(isset($jiwa[8])) echo 
            '<li>
              Kerusakan komunitas verbal
            </li>';
            if(isset($jiwa[9])) echo 
            '<li>
              Koping individu tidak efektif
            </li>';
            if(isset($jiwa[10])) echo 
            '<li>
              Aktual/Resiko Cemas/Takut
            </li>';
            if(isset($jiwa[11])) echo 
            '<li>
              
            </li>';
            if(isset($jiwa[12])) echo 
            '<li>
              Lainnya, '.$jiwa_lainnya.'
            </li>';
          ?>
        </ul>
      </div>
    </div>

    <p><b>Kolaborasi</b></p>
    <p>Obat Parental : {{$obat_parental}}</p>
    <p>EKG : {{$ekg}}</p>
  </div>

  <h4>EVALUASI TINDAKAN KEPERAWATAN</h4>
  <div style="font-size: 85%;">  
    <div class="row">
      <div class="column">
        <p><b>Implementasi</b></p>
        <p>{{$implementasi}}</p>
      </div>
      <div class="column">
        <p><b>Evaluasi</b></p>
        <p>{{$evaluasi}}</p>
      </div>
    </div>

    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Tanggal
          </td>    
          <td class="konten_s_answer">  
            : 20/08/2018
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Jam
          </td>    
          <td class="konten_s_answer">  
            : 07:00:00
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Nama Perawat
          </td>    
          <td class="konten_s_answer">  
            : Riska
          </td>                
        </tr>
      </tbody>
    </table>

    <br>
    <br>

    <div class="row">
      <div class="column">
        <p></p>
      </div>
      <div class="column">
        <p style="text-align: center;">Tanda Tangan</p>
      </div>
    </div>

  </div>
  <pagebreak>
  <h4>DATA MEDIS</h4><br>
  <div style="font-size: 85%;">  

  <p>Wawancara dengan : Ani Ananta</p>

  <p><b>a. Keluhan Utama :</b></p>
  <p>Sakit pada ...., merasakan ...........  ................... ................. ......... ......... ..... .. ....... ....... ....... ..</p>

  <p><b>b. Riwayat Penyakit Sekarang :</b></p>
  <p> - </p>

  <p><b>c. Riwayat Penyakit Dahulu (gangguan kejiwaan) : </b>Tidak ada</p>
  
  <p><b>d. Riwayat NAPZA : </b>Ada</p>
  <p>&emsp;&nbsp;<b>Lama Pemakaian : </b>1 Bulan</p>
  <p>&emsp;&nbsp;<b>Jenis Zat :</b></p>
  <p>&emsp;&nbsp; - </p>
  <p>&emsp;&nbsp;<b>Cara Pemakaian :</b></p>
  <p>&emsp;&nbsp; - </p>
  <p>&emsp;&nbsp;<b>Latar Belakang Pemakaian :</b></p>
  <p>&emsp;&nbsp; - </p>

  <p><b>e. Kepribadian Sebelum Sakit :</b></p>
  <p> - </p>
  
  <p><b>f. Riwayat Pendidikan :</b></p>
  <p> - </p>
  
  <p><b>g. Riwayat Pekerjaan :</b></p>
  <p> - </p>
  
  <p><b>h. Riwayat Pendidikan :</b></p>
  <p> - </p>
  
 
  <p><b>i. Riwayat Penyakit Lainnya :</b></p>
  <ul>
    <li>Hipertensi</li>
    <li>Liver</li>
    <li>Diabetes</li>
    <li>Jantung</li>
  </ul>

  <p><b>j. Riwayat Operasi : </b>Ya</p>
  <p>&emsp;&nbsp;<b>Jenis : </b> - </p>
  <p>&emsp;&nbsp;<b>Kapan : </b> - </p>
 
  <p><b>k. Riwayat Transfusi : </b>Ya</p>

  <p>&emsp;&nbsp;<b>Reaksi Transfusi : </b>Ya</p>

  <p>&emsp;&nbsp;<b>Reaksi yang timbul :</b></p>
  <p>&emsp;&nbsp; - </p>

  <p><b>l. Riwayat Penyakit Dalam Keluarga :</b></p>
  <p> - </p>

  <p><b>m. Riwayat Pengobatan :</b></p>
  <p> - </p>

  <p><b>n. Riwayat Alergi :</b></p>
  <p> - </p>

  </div>

  <h4>OBAT YANG DIMINUM SAAT INI</h4>
  <br>
  <div style="font-size: 85%;">  
            <div class="panel-body">
            <table class="tabel">
                <thead>
                    <tr>   
                        <th class="col1" data-field="name">No</th>
                        <th class="col2" data-field="name">NAMA OBAT</th>
                        <th class="col3" data-field="name">DIBAWA</th>
                        <th class="col4" data-field="name">JUMLAH</th>
                        <th class="col5" data-field="name">TIDAK DIBAWA</th>
                        <th class="col6" data-field="name">KETERANGAN</th>
                    </tr>    
                </thead>

                <tbody>
                  <tr>
                    <td style="text-align: center;padding-left:0px;" class="kolom">
                      1
                    </td>
                    <td class="kolom">
                      Obat
                    </td>
                    <td class="kolom">
                      10
                    </td> 
                    <td class="kolom">
                      Obat
                    </td> 
                    <td class="kolom">
                      Obat
                    </td> 
                    <td class="kolom">
                      Obat
                    </td>     
                  </tr>
                  <tr>
                    <td style="text-align: center;padding-left:0px;" class="kolom">
                      2
                    </td>
                    <td class="kolom">
                      Obat
                    </td>
                    <td class="kolom">
                      10
                    </td> 
                    <td class="kolom">
                      Obat
                    </td> 
                    <td class="kolom">
                      Obat
                    </td> 
                    <td class="kolom">
                      Obat
                    </td>     
                  </tr>
                  <tr>
                    <td style="text-align: center;padding-left:0px;" class="kolom">
                      3
                    </td>
                    <td class="kolom">
                      Obat
                    </td>
                    <td class="kolom">
                      10
                    </td> 
                    <td class="kolom">
                      Obat
                    </td> 
                    <td class="kolom">
                      Obat
                    </td> 
                    <td class="kolom">
                      Obat
                    </td>     
                  </tr>
                </tbody>
            </table>
        </div>
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
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            2. Leher
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            3. Dada
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp; a. Jantung
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp; b. Paru-paru
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            4. Perut
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            5. Anggota gerak
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <h4>STATUS LOKALIS</h4><br>
  <table style="font-size:85%;">
    <tr>
      <td class="box" style="padding:2%"><center><img src="img/body.jpg" alt="Smiley face" height="200" width="200"></center></td>
      <td class="box" style="margin-left:5%;vertical-align:top;padding:5%;" width="75%">Sakit pada ... dan nyeri pada ...</td>
    </tr>
  </table>

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
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;b. Kesadaran
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp; c. Orientasi
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp; d. Sikap & Tingkah Laku
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>2. Gangguan Berpikir</b>
          </td>    
          <td class="konten_s_answer">  
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;a. Proses Pikir
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;b. Bentuk Pikir
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;c. Isi Pikir
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>3. Alam Perasaan</b>
          </td>    
          <td class="konten_s_answer">  
            
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;a. Mood
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;b. Afek
          </td>    
          <td class="konten_s_answer">  
            : -
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
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;b. Ilusi
          </td>    
          <td class="konten_s_answer">  
            : -
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
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;b. Daya Ingat
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;c. Pikiran Abstrak
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>6. Pengendalian Impuls</b> 
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>7. Daya Nilai</b>
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>8. Tilikan/Insight</b> 
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>9. Taraf dapat dipercaya</b>
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
      </tbody>
    </table>  
  </div>

  <h4>STATUS NEUROLOGI</h4>
  <div style="font-size: 85%;">  
    <p><b>1. Pemeriksaan Khusus</b></p>

    <p>&emsp;&nbsp;<b>a. Meningeal Signt</b></p>
    <p>&emsp;&nbsp;- </p>

    <p>&emsp;&nbsp;<b>b. Hasil Pemeriksaan Nervus Cranialis</b></p>
    <p>&emsp;&nbsp; - </p>


    <p><b>2. Pemeriksaan Sistem Motorik</b></p>
    <p> - </p>

    <p><b>3. Koordinasi Gait Keseimbangan (fungsi cerebellum)</b></p>
    <p> - </p>

    <p><b>4. Gerakan-Gerakan Abnormal</b></p>
    <p> - </p>

    <p><b>5. Vegetatif</b></p>
    <p> - </p>

  </div>

  <h4>PEMERIKSAAN PENUNJANG</h4>
  <br>
  <div style="font-size: 85%;">  
    <div class="panel-body">
      <table class="tabel">
          <thead>
              <tr>   
                  <th style="vertical-align: middle;" rowspan="2" class="col7" data-field="name">JENIS PEMERIKSAAN</th>
                  <th style="text-align: center" class="col8" data-field="name">PEMERIKSAAN/PERMINTAAN</th>
                  <th style="text-align: center" class="col8" data-field="name">HASIL</th>
                  <th style="vertical-align: middle;" rowspan="2" class="col7" data-field="name">KETERANGAN</th>
              </tr>    
              <tr>   
                  <th class="col8" data-field="name">JAM:</th>
                  <th class="col8" data-field="name">JAM:</th>
              </tr>    
          </thead>

          <tbody>
            <tr>
              <td class="kolom">
                Laboratorium
              </td>
              <td class="kolom">
                10
              </td> 
              <td class="kolom">
                Obat
              </td> 
              <td class="kolom">
                Obat
              </td>     
            </tr>
            <tr>
              <td class="kolom">
                Radiologi
              </td>
              <td class="kolom">
                10
              </td> 
              <td class="kolom">
                Obat
              </td> 
              <td class="kolom">
                Obat
              </td>     
            </tr>
            <tr>
              <td class="kolom">
                EKG
              </td>
              <td class="kolom">
                10
              </td> 
              <td class="kolom">
                Obat
              </td> 
              <td class="kolom">
                Obat
              </td>     
            </tr>
            <tr>
              <td class="kolom">
                Lain-lain
              </td>
              <td class="kolom">
                10
              </td> 
              <td class="kolom">
                Obat
              </td> 
              <td class="kolom">
                Obat
              </td>     
            </tr>
          </tbody>
      </table>
    </div>
  </div>

  <h4>INSTRUMEN PENILAIAN</h4>
  <div style="font-size: 85%;">

    <p><b>PANSS Ec</b></p>  
    <div class="row">
      <div class="column">
        <p><b>P4. GADUH GELISAH</b></p>
        <p><b>Nilai : 4</b></p>
        <p>Sedang - agitasi atau mudah terangsang yang jelas, ledakan-ledakan episodik</p>

        <p><b>P7. PERMUSUHAN</b></p>
        <p><b>Nilai : 3</b></p>
        <p>Ringan - melampiaskan kemarahan secara tidak langusng atau ditahan</p>

        <p><b>G4. KETEGANGAN</b></p>
        <p><b>Nilai : 2</b></p>
        <p>Minimal - patologis diragukan</p>

      </div>
      <div class="column">
        <p><b>G8. KETIDAKOPERATIFAN</b></p>
        <p><b>Nilai : 2</b></p>
        <p>Minimal - patologis diragukan</p>

        <p><b>G14. PENGENDALIAN IMPULS</b></p>
        <p><b>Nilai : 7</b></p>
        <p>Sangat berat - memperlihatkan serangan kebrutalan dan berbahaya</p>
      </div>
    </div> 

    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Nama
          </td>    
          <td class="konten_s_answer">  
            : Joko Pangestu
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            No.RM
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Umur
          </td>    
          <td class="konten_s_answer">  
            : 43
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Bangsal
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Pemeriksaan Tanggal
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
      </tbody>
    </table>

    <p><b>Score</b></p>
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            P4
          </td>    
          <td class="konten_s_answer">  
            : 4
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            P7
          </td>    
          <td class="konten_s_answer">  
            : 3
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            G4
          </td>    
          <td class="konten_s_answer">  
            : 2
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            G8
          </td>    
          <td class="konten_s_answer">  
            : 2
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            G14
          </td>    
          <td class="konten_s_answer">  
            : 7
          </td>                
        </tr>
      </tbody>
    </table>

    <p><b>Total Score : </b>18 </p>
    <p>Hasil Penilaian < 20 indikasi masuk maintenens rehabilitasi</p>

    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            PANSS EC Skor
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            GAFF Skor
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
      </tbody>
    </table>

    <div class="row">
      <div class="column">
        <p></p>
      </div>
      <div class="column">
        <p style="text-align: center;">Dokter Penanggung Jawab</p>
      </div>
    </div>

  </div>

  <pagebreak>
  <h4>DIAGNOSIS DAN TINDAKAN/TERAPI</h4>
  <div style="font-size: 85%;">
    <div class="row">
      <div class="column">
        <p><b>DIAGNOSIS PSIKIATRI</b></p>
        <p>Axis 1 : - </p>
        <p>Axis 2 : - </p>
        <p>Axis 3 : - </p>
        <p>Axis 4 : - </p>
        <p>Axis 5 : - </p>
      </div>
      <div class="column">
        <p><b>DIAGNOSIS NON PSIKIATRI</b></p>
        <p>Diagnosis Utama :</p>
        <p>.....................</p>
        <p>Diagnosis Sekunder :</p>
        <p>.....................</p>
      </div>
    </div>
    <div class="panel-body">
      <table class="tabel">
          <thead>
              <tr>   
                  <th class="col9" data-field="name">JAM</th>
                  <th class="col10" data-field="name">TINDAKAN/TERAPI</th>
              </tr>    
          </thead>

          <tbody>
            <tr>
              <td class="kolom">
                14:00
              </td>
              <td class="kolom">
                Tindakan ....
              </td>     
            </tr>
            <tr>
              <td class="kolom">
                14:30
              </td>
              <td class="kolom">
                Tindakan ....
              </td>    
            </tr>
            <tr>
              <td class="kolom">
                15:00
              </td>
              <td class="kolom">
                Tindakan ....
              </td>     
            </tr>
            <tr>
              <td class="kolom">
                16:00
              </td>
              <td class="kolom">
                Tindakan ....
              </td>   
            </tr>
          </tbody>
      </table>
    </div>
  </div>

  <h4>DAFTAR MASALAH</h4>
  <div style="font-size: 85%;">  
    <p>...................................</p>
  </div>

  <h4>TINDAK LANJUT</h4>
  <div style="font-size: 85%;">  
    <p>Pulang</p>
    <p>Perlu Kontrol, tanggal 22/08/2018</p>
  
  <p><b>KONDISI PASIEN SAAT KELUAR</b></p>
  <p>Kesadaran :</p>
  <ul>
    <li>Compos Mentis</li>
    <li>Apatis</li>
  </ul>
  
  <p>Tanda-tanda vital : </p></div>
  <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Tensi 
          </td>    
          <td class="konten_s_answer">  
            : 90 mmHg
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Nadi 
          </td>    
          <td class="konten_s_answer">  
            : 10 x/mnt
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Pernafasan 
          </td>    
          <td class="konten_s_answer">  
            : 12 x/mnt
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Suhu 
          </td>    
          <td class="konten_s_answer">  
            : 36 C
          </td>                
        </tr>
      </tbody>
    </table>

    <br>
    <br>
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Tanggal
          </td>    
          <td class="konten_s_answer">  
            : 20/08/2018
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Jam
          </td>    
          <td class="konten_s_answer">  
            : 07:00:00
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Nama Perawat
          </td>    
          <td class="konten_s_answer">  
            : Riska
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